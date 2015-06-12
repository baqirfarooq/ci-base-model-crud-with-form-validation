/*
Navicat MySQL Data Transfer

Source Server         : PHP local
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : ci_base_model_db

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-06-12 02:05:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `my0_company`
-- ----------------------------
DROP TABLE IF EXISTS `my0_company`;
CREATE TABLE `my0_company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of my0_company
-- ----------------------------
INSERT INTO `my0_company` VALUES ('5', null, '6creative', 'Web Development', 'info@6creative.net', '03422346901', '03422346901', 'http://6creative.net/', 'Garden West', '0', '2015-06-12 09:23:14', '2015-06-12 02:05:41');
