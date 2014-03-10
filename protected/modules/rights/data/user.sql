/*
MySQL Data Transfer
Source Host: localhost
Source Database: yiitest
Target Host: localhost
Target Database: yiitest
Date: 1/21/2014 5:01:39 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_superadmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_cache
-- ----------------------------
DROP TABLE IF EXISTS `user_cache`;
CREATE TABLE `user_cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `is_guest` tinyint(1) NOT NULL,
  `update_time` int(11) NOT NULL,
  `routes` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `user_cache_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_has_user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_has_user_role`;
CREATE TABLE `user_has_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_role_code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_role_code` (`user_role_code`),
  CONSTRAINT `user_has_user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_has_user_role_ibfk_2` FOREIGN KEY (`user_role_code`) REFERENCES `user_role` (`code`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_has_user_task
-- ----------------------------
DROP TABLE IF EXISTS `user_has_user_task`;
CREATE TABLE `user_has_user_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_task_code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_task_code` (`user_task_code`),
  CONSTRAINT `user_has_user_task_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_has_user_task_ibfk_2` FOREIGN KEY (`user_task_code`) REFERENCES `user_task` (`code`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_operation
-- ----------------------------
DROP TABLE IF EXISTS `user_operation`;
CREATE TABLE `user_operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(255) NOT NULL,
  `is_module` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `route` (`route`)
) ENGINE=InnoDB AUTO_INCREMENT=540 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `home_page` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_role_has_user_task
-- ----------------------------
DROP TABLE IF EXISTS `user_role_has_user_task`;
CREATE TABLE `user_role_has_user_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_id` int(11) NOT NULL,
  `user_task_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_role_id` (`user_role_id`),
  KEY `user_task_id` (`user_task_id`),
  CONSTRAINT `user_role_has_user_task_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_role_has_user_task_ibfk_2` FOREIGN KEY (`user_task_id`) REFERENCES `user_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_task
-- ----------------------------
DROP TABLE IF EXISTS `user_task`;
CREATE TABLE `user_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_task_has_user_operation
-- ----------------------------
DROP TABLE IF EXISTS `user_task_has_user_operation`;
CREATE TABLE `user_task_has_user_operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_task_id` int(11) NOT NULL,
  `user_operation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_task_id` (`user_task_id`),
  KEY `user_operation_id` (`user_operation_id`),
  CONSTRAINT `user_task_has_user_operation_ibfk_1` FOREIGN KEY (`user_task_id`) REFERENCES `user_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_task_has_user_operation_ibfk_2` FOREIGN KEY (`user_operation_id`) REFERENCES `user_operation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `user` VALUES ('22', '1', 'superadmin', '33eeaa61c01b2f296e3df6f17951d0fb', '1');
INSERT INTO `user` VALUES ('23', '1', 'admin', '7eea35b402bd0b2d301be479e769c02b', '0');
INSERT INTO `user` VALUES ('29', '1', 'lupanh87', '414b22027c359404f04d914ca9cc4afa', '0');
INSERT INTO `user_has_user_role` VALUES ('24', '23', 'admin');
INSERT INTO `user_operation` VALUES ('287', 'site/error', '0');
INSERT INTO `user_operation` VALUES ('374', 'UserAdmin/user/create', '1');
INSERT INTO `user_operation` VALUES ('375', 'UserAdmin/user/update', '1');
INSERT INTO `user_operation` VALUES ('376', 'UserAdmin/user/view', '1');
INSERT INTO `user_operation` VALUES ('383', 'UserAdmin/userRole/view', '1');
INSERT INTO `user_operation` VALUES ('392', 'UserAdmin/userTask/view', '1');
INSERT INTO `user_operation` VALUES ('393', 'UserAdmin/userTask/refreshOperations', '1');
INSERT INTO `user_operation` VALUES ('433', 'site/index', '0');
INSERT INTO `user_operation` VALUES ('435', 'UserAdmin/auth/login', '1');
INSERT INTO `user_operation` VALUES ('436', 'UserAdmin/auth/logout', '1');
INSERT INTO `user_operation` VALUES ('462', 'site/*', '0');
INSERT INTO `user_operation` VALUES ('466', 'UserAdmin/auth/*', '1');
INSERT INTO `user_operation` VALUES ('467', 'UserAdmin/user/*', '1');
INSERT INTO `user_operation` VALUES ('468', 'UserAdmin/userRole/*', '1');
INSERT INTO `user_operation` VALUES ('469', 'UserAdmin/userTask/*', '1');
INSERT INTO `user_operation` VALUES ('502', 'UserAdmin/auth/registration', '1');
INSERT INTO `user_operation` VALUES ('524', 'UserAdmin/userRole/update', '1');
INSERT INTO `user_operation` VALUES ('538', 'UserAdmin/profile/*', '1');
INSERT INTO `user_operation` VALUES ('539', 'UserAdmin/profile/personal', '1');
INSERT INTO `user_role` VALUES ('2', 'Admin', 'admin', '', 'Full access to the main settings');
INSERT INTO `user_role` VALUES ('5', 'Manager', '3', '', 'xx');
INSERT INTO `user_role_has_user_task` VALUES ('124', '2', '7');
INSERT INTO `user_role_has_user_task` VALUES ('125', '2', '8');
INSERT INTO `user_task` VALUES ('7', 'User management', 'userAdmin', 'It\'s include creating, updating, deleting AND assigning roles and tasks to user');
INSERT INTO `user_task` VALUES ('8', 'User role management', 'userRoleAdmin', '');
INSERT INTO `user_task` VALUES ('10', '----- Free-for-all tasks ----', 'freeAccess', 'Tasks that can be performed by anyone. Like site/index and site/error');
INSERT INTO `user_task` VALUES ('12', 'mana', 'dsf', 'fsd');
INSERT INTO `user_task_has_user_operation` VALUES ('288', '7', '467');
INSERT INTO `user_task_has_user_operation` VALUES ('291', '8', '468');
INSERT INTO `user_task_has_user_operation` VALUES ('348', '10', '287');
INSERT INTO `user_task_has_user_operation` VALUES ('349', '10', '433');
