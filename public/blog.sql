/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : tpt-forum1.1

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2017-12-10 00:24:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tpt_banner
-- ----------------------------
DROP TABLE IF EXISTS `tpt_banner`;
CREATE TABLE `tpt_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `time` varchar(32) NOT NULL COMMENT '时间',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `links` varchar(100) DEFAULT NULL COMMENT '连接',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tpt_banner
-- ----------------------------

-- ----------------------------
-- Table structure for tpt_category
-- ----------------------------
DROP TABLE IF EXISTS `tpt_category`;
CREATE TABLE `tpt_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL COMMENT '上级',
  `name` varchar(32) NOT NULL COMMENT '名称',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `sidebar` tinyint(1) NOT NULL DEFAULT '1' COMMENT '侧栏',
  `sort` int(11) NOT NULL DEFAULT '1' COMMENT '排序',
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `time` varchar(32) NOT NULL COMMENT '时间',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键词',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tpt_category
-- ----------------------------
INSERT INTO `tpt_category` VALUES ('1', '0', '文章专栏', '1', '1', '0', '1', '', '1492058517', '文章专栏', '文章专栏');
INSERT INTO `tpt_category` VALUES ('2', '0', '资源分享', '1', '1', '1', '1', '', '1512311746', '资源分享', '资源分享');

-- ----------------------------
-- Table structure for tpt_comment
-- ----------------------------
DROP TABLE IF EXISTS `tpt_comment`;
CREATE TABLE `tpt_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL COMMENT '上级评论',
  `uid` int(11) NOT NULL COMMENT '所属会员',
  `fid` int(11) NOT NULL COMMENT '所属帖子',
  `mid` int(11) NOT NULL DEFAULT '0',
  `time` varchar(11) NOT NULL COMMENT '时间',
  `praise` varchar(11) NOT NULL DEFAULT '0' COMMENT '赞',
  `reply` varchar(11) NOT NULL DEFAULT '0' COMMENT '回复',
  `mes` tinyint(1) NOT NULL DEFAULT '1' COMMENT '清理',
  `content` text NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpt_comment
-- ----------------------------
INSERT INTO `tpt_comment` VALUES ('1', '0', '2', '1', '1', '1493188543', '0', '0', '1', '&lt;p&gt;这是我回复的第一条帖子&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;');

-- ----------------------------
-- Table structure for tpt_forum
-- ----------------------------
DROP TABLE IF EXISTS `tpt_forum`;
CREATE TABLE `tpt_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL COMMENT '上级',
  `uid` int(11) NOT NULL COMMENT '用户',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `open` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `choice` tinyint(1) NOT NULL DEFAULT '0' COMMENT '精贴',
  `settop` tinyint(1) NOT NULL DEFAULT '0' COMMENT '顶置',
  `praise` varchar(11) NOT NULL DEFAULT '0' COMMENT '赞',
  `view` varchar(11) NOT NULL COMMENT '浏览量',
  `time` varchar(11) NOT NULL COMMENT '时间',
  `reply` varchar(11) NOT NULL DEFAULT '0' COMMENT '回复',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键词',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `content` text NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpt_forum
-- ----------------------------
INSERT INTO `tpt_forum` VALUES ('1', '1', '1', '这是我发表的第一条帖子', '1', '1', '0', '0', '12', '1493188434', '1', 'Templet360,Tpt-Forum,Tpt-Blog', '任何技术问题都可以去社区发帖或者QQ群询问，我们会在第一时间解决你的问题。', '&lt;p&gt;任何技术问题都可以去社区发帖或者QQ群询问，我们会在第一时间解决你的问题。&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;');

-- ----------------------------
-- Table structure for tpt_links
-- ----------------------------
DROP TABLE IF EXISTS `tpt_links`;
CREATE TABLE `tpt_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '名称',
  `links` varchar(100) DEFAULT NULL COMMENT '连接',
  `time` varchar(32) NOT NULL COMMENT '时间',
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tpt_links
-- ----------------------------
INSERT INTO `tpt_links` VALUES ('1', '百度一下', 'https://www.baidu.com/', '1492931403', '', '1');

-- ----------------------------
-- Table structure for tpt_member
-- ----------------------------
DROP TABLE IF EXISTS `tpt_member`;
CREATE TABLE `tpt_member` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `point` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `userip` varchar(32) NOT NULL COMMENT 'IP',
  `username` varchar(32) NOT NULL COMMENT '名称',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `kouling` varchar(32) DEFAULT NULL COMMENT '口令',
  `userhead` varchar(100) NOT NULL COMMENT '头像',
  `usermail` varchar(32) NOT NULL COMMENT '邮箱',
  `regtime` varchar(32) NOT NULL COMMENT '注册时间',
  `grades` tinyint(1) NOT NULL DEFAULT '0' COMMENT '等级',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '性别',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '验证',
  `reply` int(11) NOT NULL DEFAULT '0' COMMENT '回复',
  `userhome` varchar(32) DEFAULT NULL COMMENT '家乡',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tpt_member
-- ----------------------------
INSERT INTO `tpt_member` VALUES ('1', '105', '127.0.0.1', 'admin', '49ba59abbe56e057', '123456', '/uploads/20170401/default.png', '1524790154@qq.com', '1491037613', '1', '1', '1', '0', '', '');
INSERT INTO `tpt_member` VALUES ('2', '16', '127.0.0.1', '测试会员', '49ba59abbe56e057', '', '/uploads/20170401/default.png', '123456@qq.com', '1491037613', '0', '1', '1', '0', '', '');

-- ----------------------------
-- Table structure for tpt_navtop
-- ----------------------------
DROP TABLE IF EXISTS `tpt_navtop`;
CREATE TABLE `tpt_navtop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL COMMENT '上级导航',
  `link` varchar(100) DEFAULT NULL COMMENT '连接',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `sort` int(11) NOT NULL COMMENT '排序',
  `name` varchar(32) NOT NULL COMMENT '名称',
  `time` varchar(32) NOT NULL COMMENT '时间',
  `blank` tinyint(1) NOT NULL DEFAULT '0' COMMENT '窗口',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tpt_navtop
-- ----------------------------
INSERT INTO `tpt_navtop` VALUES ('1', '0', '/index.php/mobile', '1', '1', '手机版', '1493188707', '1');
INSERT INTO `tpt_navtop` VALUES ('2', '0', 'https://www.templet360.com/', '1', '2', '官方网站', '1493188854', '1');
