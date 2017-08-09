<?php
    function is_login() {
        // 载入CI的session库
        if (!$_SESSION['s_id']) {
            redirect(site_url('/login'));
            return false;
        } else {
           return true;
        }
    }

    function in_2array($str,$arr){
        $exist = false;
        foreach($arr as $value){
            if(in_array($str,$value)){
                $exist = true;
                break;
            }
        }
        return $exist;
    }

    function findType($arr,$id){
        if(!$id){
            return "无";
        }else{
            foreach($arr as $val){
                if( $val['id']==$id){
                    return $val['title'];
                }
            }
            return "无";
        }
    }

    function getTree($data, $pId)
    {   //获取分类结构
        $tree = '';
        foreach($data as $k => $v)
        {
            if($v['pid'] == $pId)
            {
                $v['pid'] = getTree($data, $v['id']);
                $tree[] = $v;
            }
        }
        return $tree;
    }

    function getIp(){
        $onlineip ="";
        if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
            $onlineip = getenv('HTTP_CLIENT_IP');
        } elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
            $onlineip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
            $onlineip = getenv('REMOTE_ADDR');
        } elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
            $onlineip = $_SERVER['REMOTE_ADDR'];
        }
        return $onlineip;
    }
