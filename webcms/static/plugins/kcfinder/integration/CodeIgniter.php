<?php
/**
 *      @desc CMS integration code: CodeIgniter
 *   @package KCFinder-CodeIgniter
 *   @version 0.3
 *    @author Tiger Fok <tiger@tiger-workshop.com>
 * @copyright 2007-2015 Tiger-Workshop
 *   @license http://opensource.org/licenses/GPL-3.0 GPLv3
 *   @license http://opensource.org/licenses/LGPL-3.0 LGPLv3
 *      @link http://tiger-workshop.com
 */
class CodeIgniter {
    static function getSession() {
        session_start();
        define('ENVIRONMENT', 'production');
        define('BASEPATH', 'D:/wamp/www/CodeIgniter/system/');
        define('APPPATH', '../../../application/');
        require('../../../application/config/database.php');
        require('D:/wamp/www/CodeIgniter/system/core/Common.php');
        require('D:/wamp/www/CodeIgniter/system/database/DB.php');

        $database = DB($db['default']);

        if (!isset($_COOKIE['ci_session'])) return;

        $database->where('id', $_COOKIE['ci_session']);
        $query = $database->get('ci_sessions');
        $result = $query->row();

        if ($result) {
            $ci_session = self::decode_session($result->data);

            if (!isset($_SESSION['KCFINDER'])) $_SESSION['KCFINDER'] = array();
            $_SESSION['KCFINDER']['disabled'] = true;
            if (isset($ci_session['KCFINDER'])) {
                $_SESSION['KCFINDER'] = array_merge($_SESSION['KCFINDER'] ,$ci_session['KCFINDER']);
            }
        }
    }

    static function decode_session($session_data) {
        $return_data = array();
        $offset = 0;
        while ($offset < strlen($session_data)) {
            if (!strstr(substr($session_data, $offset), "|")) {
                throw new Exception("invalid data, remaining: " . substr($session_data, $offset));
            }
            $pos = strpos($session_data, "|", $offset);
            $num = $pos - $offset;
            $varname = substr($session_data, $offset, $num);
            $offset += $num + 1;
            $data = unserialize(substr($session_data, $offset));
            $return_data[$varname] = $data;
            $offset += strlen(serialize($data));
        }
        return $return_data;
    }
}
CodeIgniter::getSession();