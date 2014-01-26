/*
Navicat MySQL Data Transfer

Source Server         : zlo
Source Server Version : 50153
Source Host           : 192.168.1.4:3306
Source Database       : like

Target Server Type    : MYSQL
Target Server Version : 50153
File Encoding         : 65001

Date: 2014-01-27 02:53:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `likes`
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `post_id` int(4) NOT NULL,
  `ip` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Records of likes
-- ----------------------------

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `like` int(11) NOT NULL,
  `unlike` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

-- ----------------------------
-- Records of posts
-- ----------------------------
