/*
Navicat MySQL Data Transfer

Source Server         : web
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : hxshop

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-11-15 19:13:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hx_ad
-- ----------------------------
DROP TABLE IF EXISTS `hx_ad`;
CREATE TABLE `hx_ad` (
  `ad_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `ad_name` varchar(255) NOT NULL,
  `ad_content` text,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1显示，0不显示',
  `cate_id` int(11) DEFAULT NULL COMMENT '广告位id',
  `sort` int(11) DEFAULT '50' COMMENT '排序',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`ad_id`),
  KEY `ad_name` (`ad_name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_ad
-- ----------------------------
INSERT INTO `hx_ad` VALUES ('1', '测试测试', '测试测试测试测试测试测试测试测试测试测试', '1', '1', '1', '1439533953');
INSERT INTO `hx_ad` VALUES ('3', '测试测试', '测试测试测试测试测试测试测试测试测试测试', '0', '1', '2', '1439533843');

-- ----------------------------
-- Table structure for hx_admin
-- ----------------------------
DROP TABLE IF EXISTS `hx_admin`;
CREATE TABLE `hx_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '后台管理用户',
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `logintime` int(11) DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(20) DEFAULT NULL COMMENT '登录ip',
  `sort` int(1) DEFAULT NULL,
  `lock` enum('锁定','开启') DEFAULT '开启' COMMENT '锁定状态1锁定，0：未锁定',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`username`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_admin
-- ----------------------------
INSERT INTO `hx_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1447584322', '127.0.0.1', '0', '开启', '1437654152');
INSERT INTO `hx_admin` VALUES ('2', 'zhangxin', 'e10adc3949ba59abbe56e057f20f883e', '0', '', '2', '开启', '1447483984');
INSERT INTO `hx_admin` VALUES ('5', 'demo', 'e10adc3949ba59abbe56e057f20f883e', '1447516852', '127.0.0.1', '50', '开启', '1447484046');

-- ----------------------------
-- Table structure for hx_adpos
-- ----------------------------
DROP TABLE IF EXISTS `hx_adpos`;
CREATE TABLE `hx_adpos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '广告位名称',
  `sort` int(11) DEFAULT '50' COMMENT '排序',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_adpos
-- ----------------------------
INSERT INTO `hx_adpos` VALUES ('1', '首页', '1', '1439530851');

-- ----------------------------
-- Table structure for hx_article
-- ----------------------------
DROP TABLE IF EXISTS `hx_article`;
CREATE TABLE `hx_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `cate_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL COMMENT '文章标题',
  `desc` varchar(200) DEFAULT NULL COMMENT '描述',
  `content` longtext COMMENT '文章内容',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `del` int(11) DEFAULT '0' COMMENT '0:正常；1：删除',
  `recommend` enum('未推荐','推荐') DEFAULT '未推荐' COMMENT '是否推荐',
  `top` enum('未置顶','置顶') DEFAULT '未置顶' COMMENT '是否置顶',
  `audit` enum('待审核','审核不通过','审核通过') DEFAULT '待审核',
  `sort` int(11) DEFAULT '50',
  `userid` int(11) DEFAULT NULL COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_article
-- ----------------------------
INSERT INTO `hx_article` VALUES ('3', '3', '13245asds', 'asdsadasdasjk阿喀琉斯讲的是看见', '加宽了丹江口撒娇的了卡萨极乐空间了', '1422330654', '1', '未推荐', '置顶', '待审核', '50', '1');
INSERT INTO `hx_article` VALUES ('4', '3', '撒大是的撒', '啊是的撒大事', '大叔大叔大叔', '1422499170', '1', '未推荐', '置顶', '待审核', '50', '1');
INSERT INTO `hx_article` VALUES ('5', '5', '测试', '', '', '1439471607', '0', '推荐', '置顶', '待审核', '50', '1');
INSERT INTO `hx_article` VALUES ('6', '5', '啊是的撒大时代', '啊是的撒大时代', '&lt;p&gt;啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代啊是的撒大时代&lt;/p&gt;', '1439476132', '0', '推荐', '置顶', '审核不通过', '50', '1');
INSERT INTO `hx_article` VALUES ('7', '5', '啊是的撒的', '啊时代的淡淡的淡淡的淡淡的淡淡的淡淡的', '&lt;p&gt;撒大大大大大大大大大大大大大大大&lt;/p&gt;', '1439476207', '0', '推荐', '置顶', '审核不通过', '50', '1');
INSERT INTO `hx_article` VALUES ('8', '5', '广告管理', '啊是的撒', '啊是的撒的撒旦撒旦', '1439479445', '0', '未推荐', '未置顶', '审核通过', '50', '1');

-- ----------------------------
-- Table structure for hx_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `hx_auth_group`;
CREATE TABLE `hx_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text NOT NULL,
  `sort` int(6) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_auth_group
-- ----------------------------
INSERT INTO `hx_auth_group` VALUES ('1', '超级管理员', '1', '54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,1,2,3,4,5,6,12,13,14,15,16,23,7,8,9,10,11,17,18,19,20,21,80,81,82,83,84,85,87,72,73,74,75,76,77,78,79,43,44,45,46,47,48,49,50,51,52,53,37,38,39,40,41,42,24,25,26,27,28,29,30,31,32,33,34,35,36', '1');
INSERT INTO `hx_auth_group` VALUES ('2', '普通管理员', '1', '54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,17,18,19,20,21,43,44,45,46,47,48,49,50,51,52,53,37,38,39,40,41,42,24,25,26,27,28,29,30,31,32,33,34,35,36', '2');

-- ----------------------------
-- Table structure for hx_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `hx_auth_group_access`;
CREATE TABLE `hx_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`) USING BTREE,
  KEY `uid` (`uid`) USING BTREE,
  KEY `group_id` (`group_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_auth_group_access
-- ----------------------------
INSERT INTO `hx_auth_group_access` VALUES ('1', '1');
INSERT INTO `hx_auth_group_access` VALUES ('2', '2');
INSERT INTO `hx_auth_group_access` VALUES ('5', '2');

-- ----------------------------
-- Table structure for hx_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `hx_auth_rule`;
CREATE TABLE `hx_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` int(11) DEFAULT '0',
  `url` varchar(200) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL COMMENT '排序',
  `menu` int(1) DEFAULT '0' COMMENT '是否是菜单,1是菜单 2：不是',
  `icon` varchar(150) DEFAULT NULL COMMENT '图标',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_auth_rule
-- ----------------------------
INSERT INTO `hx_auth_rule` VALUES ('1', 'Manageer/Rbac/index', '权限管理', '1', '1', '', '0', 'Rbac/index', '0', '1', 'group');
INSERT INTO `hx_auth_rule` VALUES ('2', 'Manageer/Admin/list', '管理员管理', '1', '1', '', '1', 'Admin/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('3', 'Manager/Admin/index', '列表', '1', '1', '', '2', 'Admin/index', '0', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('4', 'Manager/Admin/add', '添加', '1', '1', '', '2', 'Admin/add', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('5', 'Manager/Admin/edit', '修改', '1', '1', '', '2', 'Admin/edit', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('6', 'Manager/Admin/del', '删除', '1', '1', '', '2', 'Admin/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('7', 'Manager/Node/list', '节点管理', '1', '1', '', '1', 'Node/index', '2', '1', 'cogs');
INSERT INTO `hx_auth_rule` VALUES ('8', 'Manager/Node/index', '列表', '1', '1', '', '7', 'Node/index', '0', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('9', 'Manager/Node/add', '添加', '1', '1', '', '7', 'Node/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('10', 'Manager/Node/edit', '修改', '1', '1', '', '7', 'Node/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('11', 'Manager/Node/del', '删除', '1', '1', '', '7', 'Node/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('12', 'Manager/Role/list', '角色管理', '1', '1', '', '1', 'Role/index', '2', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('13', 'Manager/Role/index', '列表', '1', '1', '', '12', 'Role/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('14', 'Manager/Role/add', '添加', '1', '1', '', '12', 'Role/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('15', 'Manager/Role/edit', '修改', '1', '1', '', '12', 'Role/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('16', 'Manager/Role/del', '删除', '1', '1', '', '12', 'Role/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('17', 'Manager/User/lists', '用户管理', '1', '1', '', '0', 'User/index', '2', '1', 'user');
INSERT INTO `hx_auth_rule` VALUES ('18', 'Manager/User/list', '用户管理', '1', '1', '', '17', 'User/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('19', 'Manager/User/index', '列表', '1', '1', '', '18', 'User/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('20', 'Manager/User/enable', '启用', '1', '1', '', '18', 'User/enable', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('21', 'Manager/User/shield', '禁用', '1', '1', '', '18', 'User/shield', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('23', 'Manager/Role/rbac', '授权', '1', '1', '', '12', 'Role/rbac', '5', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('24', 'Manager/System/list', '基本设置', '1', '0', '', '0', 'System/list', '12', '1', 'cog');
INSERT INTO `hx_auth_rule` VALUES ('25', 'Manager/Setting/list', '网站设置', '1', '1', '', '24', 'Setting/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('26', 'Manager/Setting/index', '显示', '1', '1', '', '25', 'Setting/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('27', 'Manager/UserInfo/list', '个人信息', '1', '1', '', '24', 'UserInfo/index', '2', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('28', 'Manager/UserInfo/index', '修改昵称', '1', '1', '', '27', 'UserInfo/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('29', 'Manager/UserInfo/pass', '修改密码', '1', '1', '', '27', 'UserInfo/pass', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('30', 'Manager/Link/list', '友情链接', '1', '1', '', '24', 'Link/index', '3', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('31', 'Manager/Link/index', '列表', '1', '1', '', '30', 'Link/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('32', 'Manager/Link/add', '添加', '1', '1', '', '30', 'Link/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('33', 'Manager/Link/edit', '修改', '1', '1', '', '30', 'Link/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('34', 'Manager/Link/del', '删除', '1', '1', '', '30', 'Link/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('35', 'Manager/Cache/list', '缓存管理', '1', '1', '', '24', 'Cache/index', '4', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('36', 'Manager/Cache/index', '清理缓存', '1', '1', '', '35', 'Cache/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('37', 'Manager/Nav/list', '导航管理', '1', '1', '', '0', 'Nav/index', '7', '1', 'desktop');
INSERT INTO `hx_auth_rule` VALUES ('38', 'Manager/Nav/Common', '导航栏管理', '1', '1', '', '37', 'Nav/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('39', 'Manager/Nav/index', '列表', '1', '1', '', '38', 'Nav/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('40', 'Manager/Nav/add', '添加', '1', '1', '', '38', 'Nav/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('41', 'Manager/Nav/edit', '修改', '1', '1', '', '38', 'Nav/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('42', 'Manager/Nav/del', '删除', '1', '1', '', '38', 'Nav/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('43', 'Manager/Ad/list', '广告管理', '1', '1', '', '0', 'Ad/list', '6', '1', 'flag');
INSERT INTO `hx_auth_rule` VALUES ('44', 'Manager/AdPos/list', '广告位', '1', '1', '', '43', 'AdPos/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('45', 'Manager/AdPos/index', '列表', '1', '1', '', '44', 'AdPos/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('46', 'Manager/AdPos/add', '列表', '1', '1', '', '44', 'AdPos/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('47', 'Manager/AdPos/edit', '修改', '1', '1', '', '44', 'AdPos/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('48', 'Manager/AdPos/del', '删除', '1', '1', '', '44', 'AdPos/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('49', 'Manager/Ad/lists', '广告管理', '1', '1', '', '43', 'Ad/index', '2', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('50', 'Manager/Ad/index', '列表', '1', '0', '', '49', 'Ad/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('51', 'Manager/Ad/add', '添加', '1', '0', '', '49', 'Ad/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('52', 'Manager/Ad/edit', '修改', '1', '0', '', '49', 'Ad/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('53', 'Manager/Ad/del', '删除', '1', '0', '', '49', 'Ad/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('54', 'Manager/Com/list', '内容管理', '1', '1', '', '0', 'Com/list', '0', '1', 'tasks');
INSERT INTO `hx_auth_rule` VALUES ('55', 'Manager/Cate/list', '文章分类', '1', '1', '', '54', 'Cate/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('56', 'Manager/Cate/index', '列表', '1', '1', '', '55', 'Cate/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('57', 'Manager/Cate/add', '添加', '1', '1', '', '55', 'Cate/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('58', 'Manager/Cate/edit', '修改', '1', '1', '', '55', 'Cate/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('59', 'Manager/Cate/del', '删除', '1', '1', '', '55', 'Cate/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('60', 'Manager/Article/list', '文章管理', '1', '1', '', '54', 'Article/index', '2', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('61', 'Manager/Article/index', '列表', '1', '1', '', '60', 'Article/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('62', 'Manager/Article/add', '添加', '1', '1', '', '60', 'Article/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('63', 'Manager/Article/edit', '修改', '1', '1', '', '60', 'Article/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('64', 'Manager/Article/del', '删除', '1', '1', '', '60', 'Article/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('65', 'Manager/Comment/list', '评论管理', '1', '1', '', '54', 'Comment/index', '3', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('66', 'Manager/Comment/index', '列表', '1', '1', '', '65', 'Comment/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('67', 'Manager/Comment/del', '删除', '0', '1', '', '65', 'Comment/del', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('68', 'Manager/Recycle/list', '回收站', '1', '1', '', '54', 'Recycle/index', '4', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('69', 'Manager/Recycle/index', '列表', '1', '1', '', '68', 'Recycle/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('70', 'Manager/Recycle/restore', '恢复', '1', '1', '', '68', 'Recycle/restore', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('71', 'Manager/Recycle/del', '删除', '1', '1', '', '68', 'Recycle/del', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('72', 'Manager/Back/list', '备份管理', '1', '0', '', '0', 'Back/list', '6', '1', 'cloud');
INSERT INTO `hx_auth_rule` VALUES ('73', 'Manager/BackUp/list', '数据备份', '1', '0', '', '72', 'BackUp/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('74', 'Manager/BackUp/index', '备份', '1', '1', '', '73', 'BackUp/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('75', 'Manager/Restore/list', '数据恢复', '1', '1', '', '72', 'Restore/index', '2', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('76', 'Manager/Restore/index', '列表', '1', '1', '', '75', 'Restore/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('77', 'Manager/Restore/import', '恢复', '1', '1', '', '75', 'Restore/import', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('78', 'Manager/Restore/download', '下载', '1', '1', '', '75', 'Restore/download', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('79', 'Manager/Restore/del', '删除', '1', '1', '', '75', 'Restore/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('80', 'Manager/Log/list', '日志管理', '1', '1', '', '0', 'Log/list', '6', '1', 'envelope-alt');
INSERT INTO `hx_auth_rule` VALUES ('81', 'Manager/Log/lists', '操作日志', '1', '1', '', '80', 'Log/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('82', 'Manager/Log/index', '列表', '1', '1', '', '81', 'Log/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('83', 'Manager/Log/del', '删除', '1', '1', '', '81', 'Log/del', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('84', 'Manager/LoginLog/list', '登录日志', '1', '1', '', '80', 'LoginLog/index', '2', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('85', 'Manager/LoginLog/index', '列表', '1', '1', '', '84', 'LoginLog/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('87', 'Manager/LoginLog/del', '删除', '1', '1', '', '84', 'LoginLog/del', '2', '0', '');

-- ----------------------------
-- Table structure for hx_cate
-- ----------------------------
DROP TABLE IF EXISTS `hx_cate`;
CREATE TABLE `hx_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pid` int(11) DEFAULT NULL,
  `cate` varchar(200) DEFAULT NULL COMMENT '分类名称',
  `sort` int(11) DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_cate
-- ----------------------------
INSERT INTO `hx_cate` VALUES ('3', '0', 'PHP', '50');
INSERT INTO `hx_cate` VALUES ('4', '0', 'js', '50');
INSERT INTO `hx_cate` VALUES ('5', '0', 'Mysql', '50');
INSERT INTO `hx_cate` VALUES ('6', '3', 'js', '50');
INSERT INTO `hx_cate` VALUES ('7', '3', 'mysql', '50');
INSERT INTO `hx_cate` VALUES ('8', '5', 'mysql', '1');

-- ----------------------------
-- Table structure for hx_comments
-- ----------------------------
DROP TABLE IF EXISTS `hx_comments`;
CREATE TABLE `hx_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发表评论的用户id',
  `full_name` varchar(50) DEFAULT NULL COMMENT '评论者昵称',
  `email` varchar(255) DEFAULT NULL COMMENT '评论者邮箱',
  `createtime` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `content` text NOT NULL COMMENT '评论内容',
  `parentid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '被回复的评论id',
  `aid` int(11) DEFAULT NULL COMMENT '评论内容id',
  PRIMARY KEY (`id`),
  KEY `comment_parent` (`parentid`) USING BTREE,
  KEY `createtime` (`createtime`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_comments
-- ----------------------------

-- ----------------------------
-- Table structure for hx_links
-- ----------------------------
DROP TABLE IF EXISTS `hx_links`;
CREATE TABLE `hx_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL COMMENT '友情链接地址',
  `name` varchar(255) NOT NULL COMMENT '友情链接名称',
  `image` varchar(255) DEFAULT NULL COMMENT '友情链接图标',
  `desc` text NOT NULL COMMENT '友情链接描述',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1:显示；0：不显示',
  `sort` int(10) NOT NULL DEFAULT '50' COMMENT '排序',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `link_visible` (`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_links
-- ----------------------------
INSERT INTO `hx_links` VALUES ('2', 'http://www.phpercode.com', '百度', '/Uploads/link/20150814/20150814203522.jpg', '', '1', '50', '1439555722');
INSERT INTO `hx_links` VALUES ('3', 'http://www.baidu.com', '百度', '/Uploads/link/20150814/20150814202239.jpg', '', '1', '50', '1439554959');

-- ----------------------------
-- Table structure for hx_log
-- ----------------------------
DROP TABLE IF EXISTS `hx_log`;
CREATE TABLE `hx_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '管理员远',
  `time` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL COMMENT '登录ip',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_log
-- ----------------------------
INSERT INTO `hx_log` VALUES ('1', '1', '1447579218', 'Manager/Node/edit', '127.0.0.1');
INSERT INTO `hx_log` VALUES ('3', '1', '1447581530', '/index.php/Log/index', '127.0.0.1');
INSERT INTO `hx_log` VALUES ('4', '1', '1447581534', '/index.php/Log/index', '127.0.0.1');
INSERT INTO `hx_log` VALUES ('5', '1', '1447581545', '/index.php/Admin/index', '127.0.0.1');
INSERT INTO `hx_log` VALUES ('6', '1', '1447581548', '/index.php/Admin/edit/id/1.html', '127.0.0.1');

-- ----------------------------
-- Table structure for hx_lolog
-- ----------------------------
DROP TABLE IF EXISTS `hx_lolog`;
CREATE TABLE `hx_lolog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL COMMENT '用户名',
  `status` tinyint(1) DEFAULT '1' COMMENT '1：登录成功0，登录失败',
  `ip` varchar(20) DEFAULT NULL,
  `mess` varchar(20) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_lolog
-- ----------------------------
INSERT INTO `hx_lolog` VALUES ('1', 'admin', '0', '127.0.0.1', '验证码不正确', '1447583955');
INSERT INTO `hx_lolog` VALUES ('2', 'admin', '0', '127.0.0.1', '用户名或密码不正确', '1447583955');
INSERT INTO `hx_lolog` VALUES ('3', 'admin', '0', '127.0.0.1', '验证码不正确', '1447583955');
INSERT INTO `hx_lolog` VALUES ('4', 'admin', '0', '127.0.0.1', '用户名或密码不正确', '1447583955');
INSERT INTO `hx_lolog` VALUES ('5', 'admin', '1', '127.0.0.1', '登陆成功', '1447583982');

-- ----------------------------
-- Table structure for hx_nav
-- ----------------------------
DROP TABLE IF EXISTS `hx_nav`;
CREATE TABLE `hx_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1:显示2：不显示',
  `sort` int(6) DEFAULT '50',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_nav
-- ----------------------------
INSERT INTO `hx_nav` VALUES ('1', '0', '1', '0', '0', 'php');
INSERT INTO `hx_nav` VALUES ('2', '0', '1', '0', '0', 'mysql');
INSERT INTO `hx_nav` VALUES ('3', '0', '1', '0', '0', 'js');
INSERT INTO `hx_nav` VALUES ('4', '0', '1', '0', '0', 'html');
INSERT INTO `hx_nav` VALUES ('5', '4', '0', '0', '1439543283', 'css');
INSERT INTO `hx_nav` VALUES ('6', '1', '1', '1', '1439542420', 'thinkphp');

-- ----------------------------
-- Table structure for hx_system
-- ----------------------------
DROP TABLE IF EXISTS `hx_system`;
CREATE TABLE `hx_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '网站名称',
  `title` varchar(100) DEFAULT NULL COMMENT '网站标题',
  `domain` varchar(200) DEFAULT NULL COMMENT '网站域名',
  `address` varchar(200) DEFAULT NULL COMMENT '公司地址',
  `phone` varchar(100) DEFAULT NULL COMMENT '公司电话',
  `qq` varchar(50) DEFAULT NULL COMMENT '公司QQ',
  `email` varchar(100) DEFAULT NULL COMMENT '公司email',
  `keyword` varchar(200) DEFAULT NULL COMMENT '网站关键字',
  `desc` varchar(200) DEFAULT NULL COMMENT '网站描述',
  `copyright` varchar(200) DEFAULT NULL COMMENT '底部版权',
  `content` text COMMENT '关于我们',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_system
-- ----------------------------
INSERT INTO `hx_system` VALUES ('1', '嘎嘎时代科技有限公司', '嘎嘎时代科技', 'www.haophper.com', '霍营', '18600957490', '907274532', '907274532@qq.com', '嘎嘎时代', '嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代', '嘎嘎时代', '嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代');

-- ----------------------------
-- Table structure for hx_users
-- ----------------------------
DROP TABLE IF EXISTS `hx_users`;
CREATE TABLE `hx_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；hx_password加密',
  `user_nicename` varchar(50) NOT NULL DEFAULT '' COMMENT '用户美名',
  `user_email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `user_url` varchar(100) NOT NULL DEFAULT '' COMMENT '用户个人网站',
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像，相对于upload/avatar目录',
  `sex` smallint(1) DEFAULT '0' COMMENT '性别；0：保密，1：男；2：女',
  `birthday` int(11) DEFAULT NULL COMMENT '生日',
  `signature` varchar(255) DEFAULT NULL COMMENT '个性签名',
  `last_login_ip` varchar(16) NOT NULL COMMENT '最后登录ip',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '' COMMENT '激活码',
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `last_login_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`user_login`) USING BTREE,
  KEY `user_nicename` (`user_nicename`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_users
-- ----------------------------
INSERT INTO `hx_users` VALUES ('1', 'haoxuan', '123456', 'haoxuan', '907274532@qq.com', '', '', '0', '0', '', '127.0.0.1', '', '1', '0', '1439514188', '1437654152');
