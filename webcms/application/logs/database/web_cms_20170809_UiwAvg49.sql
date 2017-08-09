#
# TABLE STRUCTURE FOR: cn_ad
#

DROP TABLE IF EXISTS `cn_ad`;

CREATE TABLE `cn_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `typeid` int(10) NOT NULL,
  `img` varchar(200) NOT NULL,
  `mobimg` varchar(200) NOT NULL,
  `time` int(10) NOT NULL,
  `show` int(1) NOT NULL DEFAULT '1',
  `listid` int(5) DEFAULT '0',
  `subtitle` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `cn_ad` (`id`, `title`, `slug`, `typeid`, `img`, `mobimg`, `time`, `show`, `listid`, `subtitle`) VALUES ('1', '乐运动,越青春', '#', '1', '/upload/files/banner/indexBanner-01.jpg', '/upload/files/banner/mob-flash.jpg', '1497432513', '1', '0', '');
INSERT INTO `cn_ad` (`id`, `title`, `slug`, `typeid`, `img`, `mobimg`, `time`, `show`, `listid`, `subtitle`) VALUES ('3', '你的最佳无线音乐伴侣', 'https://mall.mifa.net/index.html', '2', '/upload/files/banner/indexAd-02.jpg', '', '1497432670', '1', '2', 'portable universal sound party');
INSERT INTO `cn_ad` (`id`, `title`, `slug`, `typeid`, `img`, `mobimg`, `time`, `show`, `listid`, `subtitle`) VALUES ('4', '激活你的灵感', 'https://mall.mifa.net/index.html', '2', '/upload/files/banner/indexAd-03.jpg', '', '1497432713', '1', '3', 'portable universal sound party');
INSERT INTO `cn_ad` (`id`, `title`, `slug`, `typeid`, `img`, `mobimg`, `time`, `show`, `listid`, `subtitle`) VALUES ('5', '360° 沸点青春!', 'https://mall.mifa.net/index.html', '2', '/upload/files/banner/indexAd-01.jpg', '', '1497433156', '1', '1', 'portable universal sound party');
INSERT INTO `cn_ad` (`id`, `title`, `slug`, `typeid`, `img`, `mobimg`, `time`, `show`, `listid`, `subtitle`) VALUES ('6', 'test2', '#', '1', '/upload/files/banner/indexBanner-01.jpg', '/upload/files/banner/mob-flash.jpg', '1497606967', '1', '0', '');
INSERT INTO `cn_ad` (`id`, `title`, `slug`, `typeid`, `img`, `mobimg`, `time`, `show`, `listid`, `subtitle`) VALUES ('8', 'test3', '/product/', '1', '/upload/files/banner/indexBanner-01.jpg', '/upload/files/banner/mob-flash.jpg', '1498550399', '1', '0', '');


#
# TABLE STRUCTURE FOR: cn_ad_type
#

DROP TABLE IF EXISTS `cn_ad_type`;

CREATE TABLE `cn_ad_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `pid` int(8) NOT NULL DEFAULT '0',
  `listid` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `cn_ad_type` (`id`, `title`, `pid`, `listid`) VALUES ('1', '首页滚动大图', '0', '0');
INSERT INTO `cn_ad_type` (`id`, `title`, `pid`, `listid`) VALUES ('2', '首页banner', '0', '1');
INSERT INTO `cn_ad_type` (`id`, `title`, `pid`, `listid`) VALUES ('3', '产品banner', '0', '2');


#
# TABLE STRUCTURE FOR: cn_admin
#

DROP TABLE IF EXISTS `cn_admin`;

CREATE TABLE `cn_admin` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(100) NOT NULL DEFAULT '',
  `password` char(255) NOT NULL DEFAULT '',
  `oltime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` char(15) NOT NULL,
  `flag` int(1) NOT NULL,
  `dpm` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `lev` text NOT NULL,
  `sta` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

INSERT INTO `cn_admin` (`id`, `username`, `password`, `oltime`, `lastip`, `flag`, `dpm`, `name`, `email`, `tel`, `lev`, `sta`) VALUES ('51', 'admin', '$2y$10$PIeNsgSCHJlTy.gw.RJ0We4OgIb6hcilJBEgZi201svtwfrzruszy', '1502249448', '127.0.0.1', '0', '', '', '', '', '', '1');


#
# TABLE STRUCTURE FOR: cn_ci_sessions
#

DROP TABLE IF EXISTS `cn_ci_sessions`;

CREATE TABLE `cn_ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cn_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ffcd8e596425e958e06a1a1f8dbc4ba387fc6312', '127.0.0.1', '1502245798', '__ci_last_regenerate|i:1502245786;s_id|s:2:\"51\";s_name|s:5:\"admin\";KCFINDER|a:1:{s:8:\"disabled\";b:0;}');
INSERT INTO `cn_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ac3dc6f7e7923fbec280f482263115599412324f', '127.0.0.1', '1502249500', '__ci_last_regenerate|i:1502249441;s_id|s:2:\"51\";s_name|s:5:\"admin\";KCFINDER|a:1:{s:8:\"disabled\";b:0;}');


#
# TABLE STRUCTURE FOR: cn_news
#

DROP TABLE IF EXISTS `cn_news`;

CREATE TABLE `cn_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `typeid` int(10) NOT NULL,
  `img` varchar(200) NOT NULL,
  `info` text NOT NULL,
  `time` int(10) NOT NULL,
  `show` int(1) NOT NULL DEFAULT '1',
  `listid` int(5) DEFAULT '0',
  `hits` int(10) DEFAULT '0',
  `downurl` varchar(200) NOT NULL,
  `summary` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: cn_news_type
#

DROP TABLE IF EXISTS `cn_news_type`;

CREATE TABLE `cn_news_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `pid` int(8) NOT NULL,
  `listid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('1', '新闻报导', '0', '0');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('2', '企业新闻', '1', '1');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('3', '帮助中心', '0', '1');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('4', '售后政策', '3', '3');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('5', '如何购买', '3', '2');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('13', '说明书下载', '0', '2');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('14', '固件下载', '0', '3');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('15', 'F系列', '13', '1');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('9', '媒体报道', '1', '2');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('10', '关于我们', '0', '100');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('12', '新手入门', '3', '1');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('16', 'M系列', '13', '2');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('17', '其他系列', '13', '3');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('18', 'F系列', '14', '1');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('19', 'M系列', '14', '2');
INSERT INTO `cn_news_type` (`id`, `title`, `pid`, `listid`) VALUES ('20', ' 其他系列', '14', '3');


#
# TABLE STRUCTURE FOR: cn_product
#

DROP TABLE IF EXISTS `cn_product`;

CREATE TABLE `cn_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `typeid` int(10) NOT NULL,
  `img` varchar(200) NOT NULL,
  `info` text NOT NULL,
  `tech` text NOT NULL,
  `time` int(10) NOT NULL,
  `show` int(1) NOT NULL DEFAULT '1',
  `listid` int(5) DEFAULT '0',
  `hits` int(10) DEFAULT '0',
  `faq` text NOT NULL,
  `mpage` text NOT NULL,
  `urlApp` varchar(100) NOT NULL,
  `urlBbs` varchar(100) NOT NULL,
  `urlPlay` varchar(100) NOT NULL,
  `urlBuy` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: cn_product_type
#

DROP TABLE IF EXISTS `cn_product_type`;

CREATE TABLE `cn_product_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `pid` int(8) NOT NULL DEFAULT '0',
  `listid` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `cn_product_type` (`id`, `title`, `pid`, `listid`) VALUES ('1', 'M系列', '0', '1');
INSERT INTO `cn_product_type` (`id`, `title`, `pid`, `listid`) VALUES ('2', 'F系列', '0', '0');
INSERT INTO `cn_product_type` (`id`, `title`, `pid`, `listid`) VALUES ('5', '其他系列', '0', '3');


#
# TABLE STRUCTURE FOR: cn_store
#

DROP TABLE IF EXISTS `cn_store`;

CREATE TABLE `cn_store` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `typeid` int(8) NOT NULL,
  `info` text NOT NULL,
  `time` int(10) NOT NULL,
  `listid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: cn_store_type
#

DROP TABLE IF EXISTS `cn_store_type`;

CREATE TABLE `cn_store_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `listid` int(8) NOT NULL,
  `pid` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=388 DEFAULT CHARSET=utf8;

INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('1', '北京市', '-100', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('2', '北京市', '0', '1');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('3', '天津市', '1', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('4', '天津市', '0', '3');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('5', '上海市', '-99', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('6', '上海市', '0', '5');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('7', '重庆市', '3', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('8', '重庆市', '0', '7');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('9', '河北省', '4', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('10', '石家庄市', '0', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('11', '唐山市', '1', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('12', '秦皇岛市', '2', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('13', '邯郸市', '3', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('14', '邢台市', '4', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('15', '保定市', '5', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('16', '张家口市', '6', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('17', '承德市', '7', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('18', '沧州市', '8', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('19', '廊坊市', '9', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('20', '衡水市', '10', '9');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('21', '山西省', '5', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('22', '太原市', '0', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('23', '大同市', '1', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('24', '阳泉市', '2', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('25', '长治市', '3', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('26', '晋城市', '4', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('27', '朔州市', '5', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('28', '晋中市', '6', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('29', '运城市', '7', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('30', '忻州市', '8', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('31', '临汾市', '9', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('32', '吕梁市', '10', '21');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('33', '台湾省', '6', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('34', '台北市', '0', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('35', '高雄市', '1', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('36', '基隆市', '2', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('37', '台中市', '3', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('38', '台南市', '4', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('39', '新竹市', '5', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('40', '嘉义市', '6', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('41', '台北县', '7', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('42', '宜兰县', '8', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('43', '桃园县', '9', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('44', '新竹县', '10', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('45', '苗栗县', '11', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('46', '台中县', '12', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('47', '彰化县', '13', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('48', '南投县', '14', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('49', '云林县', '15', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('50', '嘉义县', '16', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('51', '台南县', '17', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('52', '高雄县', '18', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('53', '屏东县', '19', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('54', '澎湖县', '20', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('55', '台东县', '21', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('56', '花莲县', '22', '33');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('57', '辽宁省', '7', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('58', '沈阳市', '0', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('59', '大连市', '1', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('60', '鞍山市', '2', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('61', '抚顺市', '3', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('62', '本溪市', '4', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('63', '丹东市', '5', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('64', '锦州市', '6', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('65', '营口市', '7', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('66', '阜新市', '8', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('67', '辽阳市', '9', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('68', '盘锦市', '10', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('69', '铁岭市', '11', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('70', '朝阳市', '12', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('71', '葫芦岛市', '13', '57');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('72', '吉林省', '8', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('73', '长春市', '0', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('74', '吉林市', '1', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('75', '四平市', '2', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('76', '辽源市', '3', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('77', '通化市', '4', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('78', '白山市', '5', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('79', '松原市', '6', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('80', '白城市', '7', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('81', '延边朝鲜族自治州', '8', '72');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('82', '黑龙江省', '9', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('83', '哈尔滨市', '0', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('84', '齐齐哈尔市', '1', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('85', '鹤岗市', '2', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('86', '双鸭山市', '3', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('87', '鸡西市', '4', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('88', '大庆市', '5', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('89', '伊春市', '6', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('90', '牡丹江市', '7', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('91', '佳木斯市', '8', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('92', '七台河市', '9', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('93', '黑河市', '10', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('94', '绥化市', '11', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('95', '大兴安岭地区', '12', '82');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('96', '江苏省', '10', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('97', '南京市', '0', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('98', '无锡市', '1', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('99', '徐州市', '2', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('100', '常州市', '3', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('101', '苏州市', '4', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('102', '南通市', '5', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('103', '连云港市', '6', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('104', '淮安市', '7', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('105', '盐城市', '8', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('106', '扬州市', '9', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('107', '镇江市', '10', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('108', '泰州市', '11', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('109', '宿迁市', '12', '96');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('110', '浙江省', '11', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('111', '杭州市', '0', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('112', '宁波市', '1', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('113', '温州市', '2', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('114', '嘉兴市', '3', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('115', '湖州市', '4', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('116', '绍兴市', '5', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('117', '金华市', '6', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('118', '衢州市', '7', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('119', '舟山市', '8', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('120', '台州市', '9', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('121', '丽水市', '10', '110');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('122', '安徽省', '12', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('123', '合肥市', '0', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('124', '芜湖市', '1', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('125', '蚌埠市', '2', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('126', '淮南市', '3', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('127', '马鞍山市', '4', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('128', '淮北市', '5', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('129', '铜陵市', '6', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('130', '安庆市', '7', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('131', '黄山市', '8', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('132', '滁州市', '9', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('133', '阜阳市', '10', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('134', '宿州市', '11', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('135', '巢湖市', '12', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('136', '六安市', '13', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('137', '亳州市', '14', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('138', '池州市', '15', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('139', '宣城市', '16', '122');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('140', '福建省', '13', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('141', '福州市', '0', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('142', '厦门市', '1', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('143', '莆田市', '2', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('144', '三明市', '3', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('145', '泉州市', '4', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('146', '漳州市', '5', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('147', '南平市', '6', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('148', '龙岩市', '7', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('149', '宁德市', '8', '140');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('150', '江西省', '14', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('151', '南昌市', '0', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('152', '景德镇市', '1', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('153', '萍乡市', '2', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('154', '九江市', '3', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('155', '新余市', '4', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('156', '鹰潭市', '5', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('157', '赣州市', '6', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('158', '吉安市', '7', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('159', '宜春市', '8', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('160', '抚州市', '9', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('161', '上饶市', '10', '150');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('162', '山东省', '15', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('163', '济南市', '0', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('164', '青岛市', '1', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('165', '淄博市', '2', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('166', '枣庄市', '3', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('167', '东营市', '4', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('168', '烟台市', '5', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('169', '潍坊市', '6', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('170', '济宁市', '7', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('171', '泰安市', '8', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('172', '威海市', '9', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('173', '日照市', '10', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('174', '莱芜市', '11', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('175', '临沂市', '12', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('176', '德州市', '13', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('177', '聊城市', '14', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('178', '滨州市', '15', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('179', '荷泽市', '16', '162');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('180', '河南省', '16', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('181', '郑州市', '0', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('182', '开封市', '1', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('183', '洛阳市', '2', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('184', '平顶山市', '3', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('185', '安阳市', '4', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('186', '鹤壁市', '5', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('187', '新乡市', '6', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('188', '焦作市', '7', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('189', '濮阳市', '8', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('190', '许昌市', '9', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('191', '漯河市', '10', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('192', '三门峡市', '11', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('193', '南阳市', '12', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('194', '商丘市', '13', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('195', '信阳市', '14', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('196', '周口市', '15', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('197', '驻马店市', '16', '180');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('198', '湖北省', '17', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('199', '武汉市', '0', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('200', '黄石市', '1', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('201', '十堰市', '2', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('202', '宜昌市', '3', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('203', '襄樊市', '4', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('204', '鄂州市', '5', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('205', '荆门市', '6', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('206', '孝感市', '7', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('207', '荆州市', '8', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('208', '黄冈市', '9', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('209', '咸宁市', '10', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('210', '随州市', '11', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('211', '恩施土家族苗族自治州', '12', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('212', '仙桃市', '13', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('213', '潜江市', '14', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('214', '天门市', '15', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('215', '神农架林区', '16', '198');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('216', '湖南省', '18', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('217', '长沙市', '0', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('218', '株洲市', '1', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('219', '湘潭市', '2', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('220', '衡阳市', '3', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('221', '邵阳市', '4', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('222', '岳阳市', '5', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('223', '常德市', '6', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('224', '张家界市', '7', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('225', '益阳市', '8', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('226', '郴州市', '9', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('227', '永州市', '10', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('228', '怀化市', '11', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('229', '娄底市', '12', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('230', '湘西土家族苗族自治州', '13', '216');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('231', '广东省', '-90', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('232', '广州市', '0', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('233', '深圳市', '1', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('234', '珠海市', '2', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('235', '汕头市', '3', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('236', '韶关市', '4', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('237', '佛山市', '2', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('238', '江门市', '6', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('239', '湛江市', '7', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('240', '茂名市', '8', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('241', '肇庆市', '9', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('242', '惠州市', '2', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('243', '梅州市', '11', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('244', '汕尾市', '12', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('245', '河源市', '13', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('246', '阳江市', '14', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('247', '清远市', '15', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('248', '东莞市', '16', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('249', '中山市', '17', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('250', '潮州市', '18', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('251', '揭阳市', '19', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('252', '云浮市', '20', '231');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('253', '甘肃省', '20', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('254', '兰州市', '0', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('255', '金昌市', '1', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('256', '白银市', '2', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('257', '天水市', '3', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('258', '嘉峪关市', '4', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('259', '武威市', '5', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('260', '张掖市', '6', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('261', '平凉市', '7', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('262', '酒泉市', '8', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('263', '庆阳市', '9', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('264', '定西市', '10', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('265', '陇南市', '11', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('266', '临夏回族自治州', '12', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('267', '甘南藏族自治州', '13', '253');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('268', '四川省', '21', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('269', '成都市', '0', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('270', '自贡市', '1', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('271', '攀枝花市', '2', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('272', '泸州市', '3', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('273', '德阳市', '4', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('274', '绵阳市', '5', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('275', '广元市', '6', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('276', '遂宁市', '7', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('277', '内江市', '8', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('278', '乐山市', '9', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('279', '南充市', '10', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('280', '眉山市', '11', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('281', '宜宾市', '12', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('282', '广安市', '13', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('283', '达州市', '14', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('284', '雅安市', '15', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('285', '巴中市', '16', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('286', '资阳市', '17', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('287', '阿坝藏族羌族自治州', '18', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('288', '甘孜藏族自治州', '19', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('289', '凉山彝族自治州', '20', '268');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('290', '贵州省', '22', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('291', '贵阳市', '0', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('292', '六盘水市', '1', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('293', '遵义市', '2', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('294', '安顺市', '3', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('295', '铜仁地区', '4', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('296', '毕节地区', '5', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('297', '黔西南布依族苗族自治州', '6', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('298', '黔东南苗族侗族自治州', '7', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('299', '黔南布依族苗族自治州', '8', '290');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('300', '海南省', '23', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('301', '海口市', '0', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('302', '三亚市', '1', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('303', '五指山市', '2', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('304', '琼海市', '3', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('305', '儋州市', '4', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('306', '文昌市', '5', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('307', '万宁市', '6', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('308', '东方市', '7', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('309', '澄迈县', '8', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('310', '定安县', '9', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('311', '屯昌县', '10', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('312', '临高县', '11', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('313', '白沙黎族自治县', '12', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('314', '昌江黎族自治县', '13', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('315', '乐东黎族自治县', '14', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('316', '陵水黎族自治县', '15', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('317', '保亭黎族苗族自治县', '16', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('318', '琼中黎族苗族自治县', '17', '300');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('319', '云南省', '24', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('320', '昆明市', '0', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('321', '曲靖市', '1', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('322', '玉溪市', '2', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('323', '保山市', '3', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('324', '昭通市', '4', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('325', '丽江市', '5', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('326', '思茅市', '6', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('327', '临沧市', '7', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('328', '楚雄彝族自治州', '8', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('329', '红河哈尼族彝族自治州', '9', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('330', '文山壮族苗族自治州', '10', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('331', '西双版纳傣族自治州', '11', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('332', '大理白族自治州', '12', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('333', '德宏傣族景颇族自治州', '13', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('334', '怒江傈僳族自治州', '14', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('335', '迪庆藏族自治州', '15', '319');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('336', '青海省', '25', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('337', '西宁市', '0', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('338', '海东地区', '1', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('339', '海北藏族自治州', '2', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('340', '黄南藏族自治州', '3', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('341', '海南藏族自治州', '4', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('342', '果洛藏族自治州', '5', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('343', '玉树藏族自治州', '6', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('344', '海西蒙古族藏族自治州', '7', '336');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('345', '陕西省', '26', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('346', '西安市', '0', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('347', '铜川市', '1', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('348', '宝鸡市', '2', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('349', '咸阳市', '3', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('350', '渭南市', '4', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('351', '延安市', '5', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('352', '汉中市', '6', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('353', '榆林市', '7', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('354', '安康市', '8', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('355', '商洛市', '9', '345');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('356', '广西壮族自治区', '27', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('357', '南宁市', '0', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('358', '柳州市', '1', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('359', '桂林市', '2', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('360', '梧州市', '3', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('361', '北海市', '4', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('362', '防城港市', '5', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('363', '钦州市', '6', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('364', '贵港市', '7', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('365', '玉林市', '8', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('366', '百色市', '9', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('367', '贺州市', '10', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('368', '河池市', '11', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('369', '来宾市', '12', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('370', '崇左市', '13', '356');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('371', '西藏自治区', '28', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('372', '拉萨市', '0', '371');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('373', '昌都地区', '1', '371');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('374', '山南地区', '2', '371');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('375', '日喀则地区', '3', '371');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('376', '那曲地区', '4', '371');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('377', '阿里地区', '5', '371');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('378', '林芝地区', '6', '371');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('379', '宁夏回族自治区', '29', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('380', '银川市', '0', '379');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('381', '石嘴山市', '1', '379');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('382', '吴忠市', '2', '379');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('383', '固原市', '3', '379');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('384', '中卫市', '4', '379');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('385', '新疆维吾尔自治区', '30', '0');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('386', '乌鲁木齐市', '0', '385');
INSERT INTO `cn_store_type` (`id`, `title`, `listid`, `pid`) VALUES ('387', '克拉玛依市', '1', '385');


#
# TABLE STRUCTURE FOR: cn_system
#

DROP TABLE IF EXISTS `cn_system`;

CREATE TABLE `cn_system` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `copyright` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `cn_system` (`id`, `title`, `keywords`, `description`, `email`, `copyright`) VALUES ('1', 'MIFA户外蓝牙音箱官方网站', '多媒体蓝牙音箱', '深圳市不见一家集研发、设计、生产、销售和服务于一体的大型数码产品高新技术企业，同时也是国内最早进入数码摄像头领域的专业品牌运作商之一。不见不散旗下不见不散品牌数码摄像头及USB迷你多媒体蓝牙音箱系列产品，一直以优雅的外观、卓越的品质、精湛的工艺和完善的售前、售后服务体系以及专业的市场营销手段享誉业界。', '158174523@qq.com', '深圳摩科创新科技有限公司 。保留一切权利。粤ICP备14006631号-1');


#
# TABLE STRUCTURE FOR: cn_user
#

DROP TABLE IF EXISTS `cn_user`;

CREATE TABLE `cn_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(100) NOT NULL DEFAULT '',
  `password` char(255) NOT NULL DEFAULT '',
  `oltime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` char(15) NOT NULL,
  `flag` int(1) NOT NULL,
  `dpm` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `lev` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

