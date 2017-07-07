/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : isms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-06 20:11:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `application`
-- ----------------------------
DROP TABLE IF EXISTS `application`;
CREATE TABLE `application` (
  `id_application` int(11) NOT NULL AUTO_INCREMENT,
  `f_name_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `m_name_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `l_name_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gender_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `religion_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `birthday_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `national_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `marrital_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `blood_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `fax_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `landline_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address_application` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `other_address_application` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `code_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_categories` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_departments` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `about_pos` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `start` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `per_salary` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `exp_salary` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rsl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_application`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of application
-- ----------------------------
INSERT INTO `application` VALUES ('91', '562', '5421', '54', 'male', 'Muslim', '2017-06-23', '454', '', '', '45@etryj.fgh', '45', '45', '45', '', '', '', '', '123', '194', '', '', 'hjbhbhj', 'bhjb', 'hjb', '845', '845', '', 'accept', '', '');

-- ----------------------------
-- Table structure for `attendance`
-- ----------------------------
DROP TABLE IF EXISTS `attendance`;
CREATE TABLE `attendance` (
  `user_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_id` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of attendance
-- ----------------------------
INSERT INTO `attendance` VALUES ('121', 'ahmed ayman aziz', '2017-07-02', '09:20', '15:00', '');
INSERT INTO `attendance` VALUES ('121', 'ahmed ayman aziz', '2017-07-03', '09:30', '17:00', '');
INSERT INTO `attendance` VALUES ('121', 'ahmed ayman aziz', '2017-09-01', '02:01', '15:00', '');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL AUTO_INCREMENT,
  `name_categories` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_categories`),
  UNIQUE KEY `name_categories` (`name_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('194', 'Category 11s', '');
INSERT INTO `categories` VALUES ('195', 'ahmed 1', '');
INSERT INTO `categories` VALUES ('196', 'ayman 2', '');
INSERT INTO `categories` VALUES ('197', 'kj', '');
INSERT INTO `categories` VALUES ('198', 'ggg', '');
INSERT INTO `categories` VALUES ('199', 'dsddsds', 'desactive');
INSERT INTO `categories` VALUES ('200', 'xs\\csxczx', 'desactive');
INSERT INTO `categories` VALUES ('201', 'fdfdf', '');
INSERT INTO `categories` VALUES ('203', '', 'desactive');
INSERT INTO `categories` VALUES ('205', 'ahmed', '');
INSERT INTO `categories` VALUES ('206', 'fgh', 'desactive');
INSERT INTO `categories` VALUES ('219', 'z', '');

-- ----------------------------
-- Table structure for `departments`
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id_departments` int(11) NOT NULL AUTO_INCREMENT,
  `name_departments` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_departments`),
  UNIQUE KEY `name_departments` (`name_departments`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES ('169', 'Department 1sd', '');
INSERT INTO `departments` VALUES ('170', 'Department 2', '');
INSERT INTO `departments` VALUES ('171', 'ahmedindex', 'desactive');
INSERT INTO `departments` VALUES ('172', 'yyy', '');
INSERT INTO `departments` VALUES ('175', 'f', '');
INSERT INTO `departments` VALUES ('178', 'ahmed', '');
INSERT INTO `departments` VALUES ('183', 'aj', '');
INSERT INTO `departments` VALUES ('185', 'jhk', '');
INSERT INTO `departments` VALUES ('187', 'ahmeed', '');
INSERT INTO `departments` VALUES ('188', 'x', '');

-- ----------------------------
-- Table structure for `educational`
-- ----------------------------
DROP TABLE IF EXISTS `educational`;
CREATE TABLE `educational` (
  `id_educational` int(250) NOT NULL AUTO_INCREMENT,
  `name_educational` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type_educational` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `entered_educational` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `completed_educational` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `degree_educational` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_educational`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of educational
-- ----------------------------

-- ----------------------------
-- Table structure for `gallary`
-- ----------------------------
DROP TABLE IF EXISTS `gallary`;
CREATE TABLE `gallary` (
  `id_gallary` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_gallary`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of gallary
-- ----------------------------
INSERT INTO `gallary` VALUES ('48', '121', '4806_23-06-2017_chrysanthemum.jpg', '');
INSERT INTO `gallary` VALUES ('49', '121', '4240_23-06-2017_desert.jpg', '');
INSERT INTO `gallary` VALUES ('50', '121', '8629_23-06-2017_lighthouse.jpg', '');

-- ----------------------------
-- Table structure for `insurance_setup`
-- ----------------------------
DROP TABLE IF EXISTS `insurance_setup`;
CREATE TABLE `insurance_setup` (
  `id_insurance` int(11) NOT NULL AUTO_INCREMENT,
  `code_insurance` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `paid_insurance` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `value_employee` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `value_employer` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type_value_employee` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type_value_employer` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_from` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name_insurance` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_insurance`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of insurance_setup
-- ----------------------------
INSERT INTO `insurance_setup` VALUES ('37', '005', 'both', '5', '5', 'value', 'value', 'basic', 'ahmed', '');
INSERT INTO `insurance_setup` VALUES ('38', 'kmk', 'both', '6', '6', 'Percentage', 'value', 'net', 'kmkm', '');
INSERT INTO `insurance_setup` VALUES ('39', '01', 'employee', '5', '', 'Percentage', '', 'basic', 'b-f', '');
INSERT INTO `insurance_setup` VALUES ('40', '002', 'employee', '500', '', 'value', '', 'basic', 'b-v', '');
INSERT INTO `insurance_setup` VALUES ('41', '003', 'employee', '6', '', 'Percentage', '', 'net', 'g-f', '');
INSERT INTO `insurance_setup` VALUES ('42', '004', 'employee', '900', '', 'value', '', 'net', 'g-v', '');
INSERT INTO `insurance_setup` VALUES ('43', '5', 'employer', '', '5000', '', 'value', 'basic', '55', '');

-- ----------------------------
-- Table structure for `languages`
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id_languages` int(11) NOT NULL AUTO_INCREMENT,
  `name_languages` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_languages`),
  UNIQUE KEY `name_languages` (`name_languages`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of languages
-- ----------------------------

-- ----------------------------
-- Table structure for `leaves_dep`
-- ----------------------------
DROP TABLE IF EXISTS `leaves_dep`;
CREATE TABLE `leaves_dep` (
  `id_leaves_rules` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_leaves_rules`,`id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of leaves_dep
-- ----------------------------
INSERT INTO `leaves_dep` VALUES ('53', 'ahmedindex', 'departments', '');
INSERT INTO `leaves_dep` VALUES ('53', 'Department 1', 'departments', '');
INSERT INTO `leaves_dep` VALUES ('53', 'Department 2', 'departments', '');

-- ----------------------------
-- Table structure for `leaves_rules`
-- ----------------------------
DROP TABLE IF EXISTS `leaves_rules`;
CREATE TABLE `leaves_rules` (
  `id_leaves_rules` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `days` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `applied` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `select` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `rang_start` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `rang_end` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `reset` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `forward` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `w_as` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `w_form` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `h_as` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `h_form` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_leaves_rules`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of leaves_rules
-- ----------------------------
INSERT INTO `leaves_rules` VALUES ('53', 'ahmed', '4', 'permission', 'Early,', 'selected', 'department', '2017-06-15', '', 'reset', 'forward', 'w_as', '', 'h_as', '', 'active');
INSERT INTO `leaves_rules` VALUES ('54', 'ahmedayman', '50', 'permission', 'Early,Late', 'All', '', '2017-06-21', '', 'reset', '', 'w_as', '', '', '', 'active');

-- ----------------------------
-- Table structure for `licenses`
-- ----------------------------
DROP TABLE IF EXISTS `licenses`;
CREATE TABLE `licenses` (
  `id_licenses` int(11) NOT NULL AUTO_INCREMENT,
  `name_licenses` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_licenses`),
  UNIQUE KEY `name_licenses` (`name_licenses`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of licenses
-- ----------------------------
INSERT INTO `licenses` VALUES ('23', 'lice', '');

-- ----------------------------
-- Table structure for `my_leaves`
-- ----------------------------
DROP TABLE IF EXISTS `my_leaves`;
CREATE TABLE `my_leaves` (
  `id_my_leaves` int(11) NOT NULL AUTO_INCREMENT,
  `id_leaves` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `start` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `regest` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date_reg` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_my_leaves`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of my_leaves
-- ----------------------------
INSERT INTO `my_leaves` VALUES ('22', 'ahmed', '121', '0', '2017-06-23', '2017-06-29', 'rejact', '', '');
INSERT INTO `my_leaves` VALUES ('23', 'ahmed', '121', '0', '2017-06-22', '2017-06-30', 'rejact', '', '');
INSERT INTO `my_leaves` VALUES ('24', 'ahmed', '121', '0', '2017-06-01', '2017-06-04', 'rejact', '', '');
INSERT INTO `my_leaves` VALUES ('25', 'ahmed', '121', '4', '2017-06-02', '2017-06-05', 'approve', '', '');
INSERT INTO `my_leaves` VALUES ('26', 'ahmedayman', '121', '2', '2017-06-01', '2017-06-23', 'rejact', '', '');
INSERT INTO `my_leaves` VALUES ('27', 'ahmedayman', '121', '2', '2017-06-01', '2017-06-30', 'rejact', '', '');
INSERT INTO `my_leaves` VALUES ('28', 'ahmedayman', '121', '2', '2017-06-01', '2017-06-30', 'rejact', '', '');
INSERT INTO `my_leaves` VALUES ('29', 'ahmedayman', '121', '5', '2017-06-01', '2017-06-07', 'rejact', '', '');
INSERT INTO `my_leaves` VALUES ('30', 'ahmedayman', '121', '22', '2017-06-01', '2017-06-30', 'approve', '', '');
INSERT INTO `my_leaves` VALUES ('31', 'ahmedayman', '121', '16', '2017-06-01', '2017-06-22', 'approve', '', '');
INSERT INTO `my_leaves` VALUES ('32', 'ahmedayman', '121', '5', '2017-07-04', '2017-07-10', 'approve', '', '');
INSERT INTO `my_leaves` VALUES ('33', 'ahmedayman', '121', '0', '2017-07-11', '2017-06-18', 'wait', '', '');

-- ----------------------------
-- Table structure for `nationalities`
-- ----------------------------
DROP TABLE IF EXISTS `nationalities`;
CREATE TABLE `nationalities` (
  `id_nationalities` int(11) NOT NULL AUTO_INCREMENT,
  `name_nationalities` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_nationalities`),
  UNIQUE KEY `name_nationalities` (`name_nationalities`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nationalities
-- ----------------------------
INSERT INTO `nationalities` VALUES ('38', 'Nationalities 2', '');
INSERT INTO `nationalities` VALUES ('39', 'Nationalities 1', '');
INSERT INTO `nationalities` VALUES ('40', 'ahmd', 'desactive');
INSERT INTO `nationalities` VALUES ('41', 'dsd', 'desactive');

-- ----------------------------
-- Table structure for `payroll_groups`
-- ----------------------------
DROP TABLE IF EXISTS `payroll_groups`;
CREATE TABLE `payroll_groups` (
  `id_payroll_groups` int(11) NOT NULL AUTO_INCREMENT,
  `name_payroll_groups` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `code_payroll_groups` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_payroll_groups`),
  UNIQUE KEY `name_payroll_groups` (`name_payroll_groups`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of payroll_groups
-- ----------------------------
INSERT INTO `payroll_groups` VALUES ('40', 'ff', '5', '');
INSERT INTO `payroll_groups` VALUES ('42', 'test2', '009', '');

-- ----------------------------
-- Table structure for `payroll_value`
-- ----------------------------
DROP TABLE IF EXISTS `payroll_value`;
CREATE TABLE `payroll_value` (
  `id_payroll_value` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gory` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_payroll_value`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of payroll_value
-- ----------------------------
INSERT INTO `payroll_value` VALUES ('47', 'jhk', '2', 'earning', 'Formula', '2', '');
INSERT INTO `payroll_value` VALUES ('48', 'a', '', '', '', '', 'desactive');
INSERT INTO `payroll_value` VALUES ('49', 'earning-formula', '001', 'earning', 'Formula', '5', '');
INSERT INTO `payroll_value` VALUES ('51', 'e-f', '003', 'earning', 'Formula', '10', '');
INSERT INTO `payroll_value` VALUES ('52', 'e-v', '004', 'earning', 'Value', '300', '');
INSERT INTO `payroll_value` VALUES ('53', 'd-f', '006', 'deduction', 'Formula', '15', '');
INSERT INTO `payroll_value` VALUES ('54', 'd-f2', '007', 'deduction', 'Formula', '3', '');
INSERT INTO `payroll_value` VALUES ('55', 'd-v', '008', 'deduction', 'Value', '350', '');
INSERT INTO `payroll_value` VALUES ('56', 'd-v2', '009', 'deduction', 'Value', '300', '');

-- ----------------------------
-- Table structure for `payslip`
-- ----------------------------
DROP TABLE IF EXISTS `payslip`;
CREATE TABLE `payslip` (
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_field` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `result_filed` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `id_mack` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `count` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`month`,`year`,`name_field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of payslip
-- ----------------------------
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Absence Day', '23', '121', '', '13');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Absence Hours', '169', '121', '', '12');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Actual Salary', '0', '121', '', '48');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Actual Working Day', '0', '121', '', '11');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Actual Working Hours', '00:00', '121', '', '10');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'b-f', '300', '121', '', '34');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'b-v', '500', '121', '', '35');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Basic Salary', '6000', '121', '', '19');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Categories Name', 'Category 11', '121', '', '4');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'd-f', '900', '121', '', '27');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'd-f2', '180', '121', '', '28');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'd-v', '350', '121', '', '29');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'd-v2', '300', '121', '', '30');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'delay', '0:00', '121', '', '18');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Delay Day', '0', '121', '', '17');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Delay Hours', '00:00', '121', '', '16');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Departments Name', 'Department 1', '121', '', '5');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'e-f', '600', '121', '', '21');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'e-v', '300', '121', '', '22');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'earning-formula', '300', '121', '', '20');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Exp Deduction Formula', '0', '121', '', '32');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Exp Deduction Value', '0', '121', '', '31');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Exp Earning Formula', '0', '121', '', '24');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Exp Earning Value', '0', '121', '', '23');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'g-f', '432', '121', '', '36');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'g-v', '900', '121', '', '37');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'ID', '121', '121', '', '3');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Leaves Day', '0', '121', '', '15');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Leaves Hours', '0', '121', '', '14');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Net Salary', '1418', '121', '', '44');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Net Salary of Absence', '0', '121', '', '47');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Positions Name', 'Position 1', '121', '', '6');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Rules Name', 'ahmedayman', '121', '', '7');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Salary of Absence', '1418', '121', '', '46');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Salary of Hour ', '8.3905325443787', '121', '', '45');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 't-b1', '120', '121', '', '39');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 't-g', '360', '121', '', '40');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 't-g2', '1440', '121', '', '41');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total Deduction', '5782', '121', '', '43');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total Deduction Insurance', '2132', '121', '', '38');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total Deduction Payroll', '1730', '121', '', '33');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total Deduction Taxes', '1920', '121', '', '42');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total earning', '1200', '121', '', '25');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total Gross Salary', '7200', '121', '', '26');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total Working Day', '23', '121', '', '9');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'Total Working Hours', '169', '121', '', '8');
INSERT INTO `payslip` VALUES ('121', '01', '2017', 'User Name', 'ahmed ayman aziz', '121', '', '2');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Absence Day', '15', '121', '', '13');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Absence Hours', '111', '121', '', '12');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Actual Salary', '458.25609756098', '121', '', '48');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Actual Working Day', '2', '121', '', '11');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Actual Working Hours', '13:10', '121', '', '10');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'b-f', '300', '121', '', '34');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'b-v', '500', '121', '', '35');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Basic Salary', '6000', '121', '', '19');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Categories Name', 'Category 11', '121', '', '4');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'd-f', '900', '121', '', '27');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'd-f2', '180', '121', '', '28');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'd-v', '350', '121', '', '29');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'd-v2', '300', '121', '', '30');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'delay', '2:00', '121', '', '18');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Delay Day', '2', '121', '', '17');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Delay Hours', '00:50', '121', '', '16');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Departments Name', 'Department 1', '121', '', '5');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'e-f', '600', '121', '', '21');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'e-v', '300', '121', '', '22');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'earning-formula', '300', '121', '', '20');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Exp Deduction Formula', '0', '121', '', '32');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Exp Deduction Value', '0', '121', '', '31');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Exp Earning Formula', '0', '121', '', '24');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Exp Earning Value', '0', '121', '', '23');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'g-f', '432', '121', '', '36');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'g-v', '900', '121', '', '37');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'ID', '121', '121', '', '3');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Leaves Day', '5', '121', '', '15');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Leaves Hours', '37', '121', '', '14');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Net Salary', '1418', '121', '', '44');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Net Salary of Absence', '458.25609756098', '121', '', '47');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Positions Name', 'Position 1', '121', '', '6');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Rules Name', 'ahmedayman', '121', '', '7');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Salary of Absence', '959.74390243902', '121', '', '46');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Salary of Hour ', '8.6463414634146', '121', '', '45');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 't-b1', '120', '121', '', '39');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 't-g', '360', '121', '', '40');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 't-g2', '1440', '121', '', '41');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total Deduction', '5782', '121', '', '43');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total Deduction Insurance', '2132', '121', '', '38');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total Deduction Payroll', '1730', '121', '', '33');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total Deduction Taxes', '1920', '121', '', '42');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total earning', '1200', '121', '', '25');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total Gross Salary', '7200', '121', '', '26');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total Working Day', '22', '121', '', '9');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'Total Working Hours', '164', '121', '', '8');
INSERT INTO `payslip` VALUES ('121', '07', '2017', 'User Name', 'ahmed ayman aziz', '121', '', '2');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Absence Day', '23', '121', '', '13');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Absence Hours', '169', '121', '', '12');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Actual Salary', '0', '121', '', '47');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Actual Working Day', '0', '121', '', '11');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Actual Working Hours', '00:00', '121', '', '10');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'b-f', '300', '121', '', '34');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'b-v', '500', '121', '', '35');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Basic Salary', '6000', '121', '', '19');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Categories Name', 'Category 11', '121', '', '4');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'd-f', '900', '121', '', '27');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'd-f2', '180', '121', '', '28');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'd-v', '350', '121', '', '29');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'd-v2', '300', '121', '', '30');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'delay', '0:00', '121', '', '18');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Delay Day', '0', '121', '', '17');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Delay Hours', '00:00', '121', '', '16');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Departments Name', 'Department 1', '121', '', '5');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'e-f', '600', '121', '', '21');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'e-v', '300', '121', '', '22');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'earning-formula', '300', '121', '', '20');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Exp Deduction Formula', '0', '121', '', '32');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Exp Deduction Value', '0', '121', '', '31');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Exp Earning Formula', '30000', '121', '', '24');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Exp Earning Value', '1000', '121', '', '23');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'g-f', '2292', '121', '', '36');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'g-v', '900', '121', '', '37');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'ID', '121', '121', '', '3');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Leaves Day', '0', '121', '', '15');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Leaves Hours', '0', '121', '', '14');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Net Salary', '32358', '121', '', '42');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Net Salary of Absence', '0', '121', '', '45');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Positions Name', 'Position 1', '121', '', '6');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Rules Name', 'ahmedayman', '121', '', '7');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Salary of Absence', '32358', '121', '', '44');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Salary of delay', '0', '121', '', '46');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Salary of Hour ', '191.4674556213', '121', '', '43');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 't-b1', '120', '121', '', '39');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total Deduction', '5842', '121', '', '41');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total Deduction Insurance', '3992', '121', '', '38');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total Deduction Payroll', '1730', '121', '', '33');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total Deduction Taxes', '120', '121', '', '40');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total earning', '32200', '121', '', '25');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total Gross Salary', '38200', '121', '', '26');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total Working Day', '23', '121', '', '9');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'Total Working Hours', '169', '121', '', '8');
INSERT INTO `payslip` VALUES ('121', '08', '2017', 'User Name', 'ahmed ayman aziz', '121', '', '2');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Absence Day', '22', '121', '', '13');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Absence Hours', '161', '121', '', '12');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Actual Salary', '0', '121', '', '34');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Actual Working Day', '0', '121', '', '11');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Actual Working Hours', '00:00', '121', '', '10');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Basic Salary', '', '121', '', '19');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Categories Name', 'Category 11s', '121', '', '4');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'delay', '0:00', '121', '', '18');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Delay Day', '0', '121', '', '17');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Delay Hours', '00:00', '121', '', '16');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Departments Name', 'Department 1sd', '121', '', '5');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Exp Deduction Formula', '0', '121', '', '25');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Exp Deduction Value', '0', '121', '', '24');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Exp Earning Formula', '0', '121', '', '21');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Exp Earning Value', '5000', '121', '', '20');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'ID', '122', '121', '', '3');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Leaves Day', '0', '121', '', '15');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Leaves Hours', '0', '121', '', '14');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Net Salary', '5000', '121', '', '30');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Net Salary of Absence', '0', '121', '', '33');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Positions Name', 'Position 1;l', '121', '', '6');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Rules Name', 'ahmed', '121', '', '7');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Salary of Absence', '5000', '121', '', '32');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Salary of Hour ', '31.055900621118', '121', '', '31');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total Deduction', '0', '121', '', '29');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total Deduction Insurance', '0', '121', '', '27');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total Deduction Payroll', '0', '121', '', '26');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total Deduction Taxes', '0', '121', '', '28');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total earning', '5000', '121', '', '22');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total Gross Salary', '5000', '121', '', '23');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total Working Day', '22', '121', '', '9');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'Total Working Hours', '161', '121', '', '8');
INSERT INTO `payslip` VALUES ('122', '01', '2017', 'User Name', 'menna  tala magdy', '121', '', '2');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Absence Day', '23', '121', '', '13');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Absence Hours', '169', '121', '', '12');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Actual Salary', '0', '121', '', '34');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Actual Working Day', '0', '121', '', '11');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Actual Working Hours', '00:00', '121', '', '10');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Basic Salary', '', '121', '', '19');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Categories Name', 'Category 11', '121', '', '4');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'delay', '0:00', '121', '', '18');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Delay Day', '0', '121', '', '17');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Delay Hours', '00:00', '121', '', '16');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Departments Name', 'Department 1', '121', '', '5');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Exp Deduction Formula', '0', '121', '', '25');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Exp Deduction Value', '0', '121', '', '24');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Exp Earning Formula', '0', '121', '', '21');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Exp Earning Value', '0', '121', '', '20');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'ID', '122', '121', '', '3');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Leaves Day', '0', '121', '', '15');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Leaves Hours', '0', '121', '', '14');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Net Salary', '0', '121', '', '30');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Net Salary of Absence', '0', '121', '', '33');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Positions Name', 'Position 1', '121', '', '6');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Rules Name', 'ahmed', '121', '', '7');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Salary of Absence', '0', '121', '', '32');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Salary of Hour ', '0', '121', '', '31');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total Deduction', '0', '121', '', '29');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total Deduction Insurance', '0', '121', '', '27');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total Deduction Payroll', '0', '121', '', '26');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total Deduction Taxes', '0', '121', '', '28');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total earning', '0', '121', '', '22');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total Gross Salary', '0', '121', '', '23');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total Working Day', '23', '121', '', '9');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'Total Working Hours', '169', '121', '', '8');
INSERT INTO `payslip` VALUES ('122', '07', '2017', 'User Name', 'menna  tala magdy', '121', '', '2');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Absence Day', '0', '121', '', '13');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Absence Hours', '0', '121', '', '12');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Actual Salary', '0', '121', '', '34');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Actual Working Day', '0', '121', '', '11');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Actual Working Hours', '00:00', '121', '', '10');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Basic Salary', '', '121', '', '19');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Categories Name', 'Category 11s', '121', '', '4');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'delay', '0:00', '121', '', '18');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Delay Day', '0', '121', '', '17');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Delay Hours', '00:00', '121', '', '16');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Departments Name', 'Department 1sd', '121', '', '5');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Exp Deduction Formula', '0', '121', '', '25');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Exp Deduction Value', '0', '121', '', '24');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Exp Earning Formula', '0', '121', '', '21');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Exp Earning Value', '0', '121', '', '20');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'ID', '123', '121', '', '3');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Leaves Day', '0', '121', '', '15');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Leaves Hours', '0', '121', '', '14');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Net Salary', '0', '121', '', '30');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Net Salary of Absence', '0', '121', '', '33');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Positions Name', 'Y', '121', '', '6');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Rules Name', 'zzz4', '121', '', '7');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Salary of Absence', '0', '121', '', '32');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Salary of Hour ', '', '121', '', '31');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total Deduction', '0', '121', '', '29');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total Deduction Insurance', '0', '121', '', '27');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total Deduction Payroll', '0', '121', '', '26');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total Deduction Taxes', '0', '121', '', '28');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total earning', '0', '121', '', '22');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total Gross Salary', '0', '121', '', '23');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total Working Day', '0', '121', '', '9');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'Total Working Hours', '0', '121', '', '8');
INSERT INTO `payslip` VALUES ('123', '01', '2017', 'User Name', '562 5421 54', '121', '', '2');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Absence Day', '0', '121', '', '13');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Absence Hours', '0', '121', '', '12');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Actual Salary', '0', '121', '', '34');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Actual Working Day', '0', '121', '', '11');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Actual Working Hours', '00:00', '121', '', '10');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Basic Salary', '', '121', '', '19');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Categories Name', 'Category 11', '121', '', '4');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'delay', '0:00', '121', '', '18');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Delay Day', '0', '121', '', '17');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Delay Hours', '00:00', '121', '', '16');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Departments Name', 'Department 1', '121', '', '5');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Exp Deduction Formula', '0', '121', '', '25');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Exp Deduction Value', '0', '121', '', '24');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Exp Earning Formula', '0', '121', '', '21');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Exp Earning Value', '0', '121', '', '20');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'ID', '123', '121', '', '3');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Leaves Day', '0', '121', '', '15');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Leaves Hours', '0', '121', '', '14');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Net Salary', '0', '121', '', '30');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Net Salary of Absence', '0', '121', '', '33');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Positions Name', 'Y', '121', '', '6');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Rules Name', 'zzz4', '121', '', '7');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Salary of Absence', '0', '121', '', '32');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Salary of Hour ', '', '121', '', '31');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total Deduction', '0', '121', '', '29');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total Deduction Insurance', '0', '121', '', '27');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total Deduction Payroll', '0', '121', '', '26');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total Deduction Taxes', '0', '121', '', '28');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total earning', '0', '121', '', '22');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total Gross Salary', '0', '121', '', '23');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total Working Day', '0', '121', '', '9');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'Total Working Hours', '0', '121', '', '8');
INSERT INTO `payslip` VALUES ('123', '07', '2017', 'User Name', '562 5421 54', '121', '', '2');

-- ----------------------------
-- Table structure for `pay_grou_valu`
-- ----------------------------
DROP TABLE IF EXISTS `pay_grou_valu`;
CREATE TABLE `pay_grou_valu` (
  `id_payroll_groups` int(11) NOT NULL,
  `id_payroll_value` int(11) NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_payroll_groups`,`id_payroll_value`),
  KEY `id_payroll_groups` (`id_payroll_groups`),
  KEY `id_payroll_value` (`id_payroll_value`),
  CONSTRAINT `pay_grou_valu_ibfk_1` FOREIGN KEY (`id_payroll_groups`) REFERENCES `payroll_groups` (`id_payroll_groups`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pay_grou_valu_ibfk_2` FOREIGN KEY (`id_payroll_value`) REFERENCES `payroll_value` (`id_payroll_value`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pay_grou_valu
-- ----------------------------
INSERT INTO `pay_grou_valu` VALUES ('40', '47', '');
INSERT INTO `pay_grou_valu` VALUES ('42', '49', '');
INSERT INTO `pay_grou_valu` VALUES ('42', '51', '');
INSERT INTO `pay_grou_valu` VALUES ('42', '52', '');
INSERT INTO `pay_grou_valu` VALUES ('42', '53', '');
INSERT INTO `pay_grou_valu` VALUES ('42', '54', '');
INSERT INTO `pay_grou_valu` VALUES ('42', '55', '');
INSERT INTO `pay_grou_valu` VALUES ('42', '56', '');

-- ----------------------------
-- Table structure for `positions`
-- ----------------------------
DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions` (
  `id_positions` int(11) NOT NULL AUTO_INCREMENT,
  `name_positions` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_positions`),
  UNIQUE KEY `name_positions` (`name_positions`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of positions
-- ----------------------------
INSERT INTO `positions` VALUES ('64', 'Position 1;l', '');
INSERT INTO `positions` VALUES ('66', '515', '');
INSERT INTO `positions` VALUES ('68', 'uhbnjkm', '');
INSERT INTO `positions` VALUES ('70', 'ahmed', '');
INSERT INTO `positions` VALUES ('74', 'ahed', 'desactive');
INSERT INTO `positions` VALUES ('75', 'akl;\'dc', '');
INSERT INTO `positions` VALUES ('76', 'gy8hujo', '');
INSERT INTO `positions` VALUES ('86', 'd', '');

-- ----------------------------
-- Table structure for `previuos`
-- ----------------------------
DROP TABLE IF EXISTS `previuos`;
CREATE TABLE `previuos` (
  `id_previuos` int(11) NOT NULL AUTO_INCREMENT,
  `company_previuos` varchar(1100) COLLATE utf8_unicode_ci NOT NULL,
  `joining_previuos` varchar(1100) COLLATE utf8_unicode_ci NOT NULL,
  `leaving_previuos` varchar(1100) COLLATE utf8_unicode_ci NOT NULL,
  `position_previuos` varchar(1100) COLLATE utf8_unicode_ci NOT NULL,
  `reason_previuos` varchar(1100) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(1100) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_application` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_previuos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of previuos
-- ----------------------------

-- ----------------------------
-- Table structure for `pr_cat_dep`
-- ----------------------------
DROP TABLE IF EXISTS `pr_cat_dep`;
CREATE TABLE `pr_cat_dep` (
  `id_categories` int(11) NOT NULL,
  `id_departments` int(11) NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_categories`,`id_departments`),
  KEY `id_categories` (`id_categories`),
  KEY `id_departments` (`id_departments`),
  CONSTRAINT `pr_cat_dep_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pr_cat_dep_ibfk_2` FOREIGN KEY (`id_departments`) REFERENCES `departments` (`id_departments`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_cat_dep
-- ----------------------------
INSERT INTO `pr_cat_dep` VALUES ('194', '169', '');
INSERT INTO `pr_cat_dep` VALUES ('194', '170', '');
INSERT INTO `pr_cat_dep` VALUES ('194', '175', '');
INSERT INTO `pr_cat_dep` VALUES ('194', '178', '');
INSERT INTO `pr_cat_dep` VALUES ('194', '183', '');
INSERT INTO `pr_cat_dep` VALUES ('194', '187', '');
INSERT INTO `pr_cat_dep` VALUES ('194', '188', '');
INSERT INTO `pr_cat_dep` VALUES ('195', '172', '');
INSERT INTO `pr_cat_dep` VALUES ('195', '185', '');

-- ----------------------------
-- Table structure for `pr_dep_pos`
-- ----------------------------
DROP TABLE IF EXISTS `pr_dep_pos`;
CREATE TABLE `pr_dep_pos` (
  `id_departments` int(11) NOT NULL,
  `id_positions` int(11) NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_departments`,`id_positions`),
  KEY `id_departments` (`id_departments`),
  KEY `id_positions` (`id_positions`),
  CONSTRAINT `pr_dep_pos_ibfk_1` FOREIGN KEY (`id_departments`) REFERENCES `departments` (`id_departments`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pr_dep_pos_ibfk_2` FOREIGN KEY (`id_positions`) REFERENCES `positions` (`id_positions`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_dep_pos
-- ----------------------------
INSERT INTO `pr_dep_pos` VALUES ('169', '64', '');
INSERT INTO `pr_dep_pos` VALUES ('169', '70', '');
INSERT INTO `pr_dep_pos` VALUES ('169', '75', '');
INSERT INTO `pr_dep_pos` VALUES ('169', '76', '');
INSERT INTO `pr_dep_pos` VALUES ('170', '66', '');
INSERT INTO `pr_dep_pos` VALUES ('170', '86', '');
INSERT INTO `pr_dep_pos` VALUES ('175', '68', '');

-- ----------------------------
-- Table structure for `pr_user_insurance`
-- ----------------------------
DROP TABLE IF EXISTS `pr_user_insurance`;
CREATE TABLE `pr_user_insurance` (
  `id_user` int(11) NOT NULL,
  `id_insurance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_insurance`),
  CONSTRAINT `pr_user_insurance_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_user_insurance
-- ----------------------------
INSERT INTO `pr_user_insurance` VALUES ('121', '55', '');
INSERT INTO `pr_user_insurance` VALUES ('121', 'b-f', '');
INSERT INTO `pr_user_insurance` VALUES ('121', 'b-v', '');
INSERT INTO `pr_user_insurance` VALUES ('121', 'g-f', '');
INSERT INTO `pr_user_insurance` VALUES ('121', 'g-v', '');

-- ----------------------------
-- Table structure for `pr_user_languages`
-- ----------------------------
DROP TABLE IF EXISTS `pr_user_languages`;
CREATE TABLE `pr_user_languages` (
  `id_user` int(11) NOT NULL,
  `id_languages` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_languages`),
  CONSTRAINT `pr_user_languages_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_user_languages
-- ----------------------------

-- ----------------------------
-- Table structure for `pr_user_leaves`
-- ----------------------------
DROP TABLE IF EXISTS `pr_user_leaves`;
CREATE TABLE `pr_user_leaves` (
  `id_user` int(11) NOT NULL,
  `id_leaves` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_leaves`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_user_leaves
-- ----------------------------
INSERT INTO `pr_user_leaves` VALUES ('121', 'ahmed', '');
INSERT INTO `pr_user_leaves` VALUES ('121', 'ahmedayman', '');

-- ----------------------------
-- Table structure for `pr_user_licenes`
-- ----------------------------
DROP TABLE IF EXISTS `pr_user_licenes`;
CREATE TABLE `pr_user_licenes` (
  `id_user` int(11) NOT NULL,
  `id_licenes` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_licenes`),
  KEY `id_user` (`id_user`,`id_licenes`),
  KEY `id_user_2` (`id_user`),
  KEY `id_licenes` (`id_licenes`),
  CONSTRAINT `pr_user_licenes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_user_licenes
-- ----------------------------

-- ----------------------------
-- Table structure for `pr_user_role`
-- ----------------------------
DROP TABLE IF EXISTS `pr_user_role`;
CREATE TABLE `pr_user_role` (
  `id_user` int(11) NOT NULL,
  `name_role` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`name_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_user_role
-- ----------------------------
INSERT INTO `pr_user_role` VALUES ('121', 'DEV');
INSERT INTO `pr_user_role` VALUES ('122', 'DEV');

-- ----------------------------
-- Table structure for `pr_user_skills`
-- ----------------------------
DROP TABLE IF EXISTS `pr_user_skills`;
CREATE TABLE `pr_user_skills` (
  `id_user` int(11) NOT NULL,
  `id_skills` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_skills`),
  KEY `id_user` (`id_user`,`id_skills`),
  KEY `id_user_2` (`id_user`),
  KEY `id_skills` (`id_skills`),
  CONSTRAINT `pr_user_skills_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_user_skills
-- ----------------------------
INSERT INTO `pr_user_skills` VALUES ('121', 'Skills 1', '');

-- ----------------------------
-- Table structure for `pr_user_tax`
-- ----------------------------
DROP TABLE IF EXISTS `pr_user_tax`;
CREATE TABLE `pr_user_tax` (
  `id_user` int(11) NOT NULL,
  `id_tax` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_tax`),
  KEY `id_user` (`id_user`,`id_tax`),
  KEY `id_user_2` (`id_user`),
  KEY `id_tax` (`id_tax`),
  CONSTRAINT `pr_user_tax_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pr_user_tax
-- ----------------------------
INSERT INTO `pr_user_tax` VALUES ('121', 't-b1', '');
INSERT INTO `pr_user_tax` VALUES ('121', 't-b2', '');
INSERT INTO `pr_user_tax` VALUES ('121', 't-g', '');
INSERT INTO `pr_user_tax` VALUES ('121', 't-g2', '');

-- ----------------------------
-- Table structure for `role_setup`
-- ----------------------------
DROP TABLE IF EXISTS `role_setup`;
CREATE TABLE `role_setup` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `name_role` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name_page` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `add` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `edit` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `view_all` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `view_by_id` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `delete` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `deleterelion` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `addrelion` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `add_edu` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `delet_edu` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `add_pre` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `delet_pre` enum('null','yes','no') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_setup
-- ----------------------------
INSERT INTO `role_setup` VALUES ('1', 'ADMIN', 'categories', 'yes', 'yes', 'yes', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('2', 'ADMIN', 'departments', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('3', 'ADMIN', 'positions', 'no', 'no', 'no', 'null', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('4', 'ADMIN', 'nationalities', 'no', 'no', 'no', 'null', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('5', 'ADMIN', 'skills', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('6', 'ADMIN', 'licenses', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('7', 'ADMIN', 'languages', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('8', 'ADMIN', 'rules', 'yes', 'yes', 'no', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('9', 'ADMIN', 'payroll_categories', 'yes', 'yes', 'no', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('10', 'ADMIN', 'payroll_groups', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('11', 'ADMIN', 'insurance_setup', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('12', 'ADMIN', 'tax', 'no', 'no', 'no', 'yes', 'no', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('13', 'ADMIN', 'application', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no');
INSERT INTO `role_setup` VALUES ('15', 'ADMIN', 'appointment', 'yes', 'yes', 'no', 'yes', 'yes', 'null', 'yes', '', '', '', '');
INSERT INTO `role_setup` VALUES ('16', 'ADMIN', 'application_archived', 'null', 'yes', 'no', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('17', 'DEV', 'categories', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('18', 'DEV', 'positions', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('19', 'DEV', 'nationalities', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('20', 'DEV', 'skills', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('21', 'DEV', 'licenses', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('22', 'DEV', 'languages', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('23', 'DEV', 'rules', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('24', 'DEV', 'payroll_categories', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('25', 'DEV', 'payroll_groups', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('26', 'DEV', 'insurance_setup', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('27', 'DEV', 'tax', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('28', 'DEV', 'application', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('29', 'DEV', 'appointment', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('30', 'DEV', 'application_archived', 'null', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');
INSERT INTO `role_setup` VALUES ('31', 'DEV', 'departments', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');

-- ----------------------------
-- Table structure for `rules`
-- ----------------------------
DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `id_rules` int(11) NOT NULL AUTO_INCREMENT,
  `name_rules` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `full_day_rules` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `half_day_rules` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fri_day` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sat_day` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sun_day` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mon_day` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tue_day` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `wed_day` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `thu_day` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `start_day` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_rules`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of rules
-- ----------------------------
INSERT INTO `rules` VALUES ('36', 'jkl', '12', '12', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', '', '');
INSERT INTO `rules` VALUES ('37', 'zzz4', '12', '12', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', '', '');
INSERT INTO `rules` VALUES ('38', 'ahmed', '8', '5', 'fullday', 'fullday', 'fullday', 'hulffay', 'weekend', 'weekend', 'fullday', '', '');
INSERT INTO `rules` VALUES ('39', 'ahmedayman', '8', '5', 'weekend', 'weekend', 'fullday', 'fullday', 'hulffay', 'fullday', 'fullday', '', '09:00');

-- ----------------------------
-- Table structure for `sa_lkp_city`
-- ----------------------------
DROP TABLE IF EXISTS `sa_lkp_city`;
CREATE TABLE `sa_lkp_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sa_lkp_city
-- ----------------------------

-- ----------------------------
-- Table structure for `sa_lkp_country`
-- ----------------------------
DROP TABLE IF EXISTS `sa_lkp_country`;
CREATE TABLE `sa_lkp_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sa_lkp_country
-- ----------------------------

-- ----------------------------
-- Table structure for `sa_lkp_grades`
-- ----------------------------
DROP TABLE IF EXISTS `sa_lkp_grades`;
CREATE TABLE `sa_lkp_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_name` varchar(255) DEFAULT NULL,
  `academic_year` int(11) DEFAULT NULL,
  `archived` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sa_lkp_grades
-- ----------------------------
INSERT INTO `sa_lkp_grades` VALUES ('6', 'G5wswsw', '2', '');
INSERT INTO `sa_lkp_grades` VALUES ('10', 'G1', '1', '');
INSERT INTO `sa_lkp_grades` VALUES ('11', 'G4', '1', '');
INSERT INTO `sa_lkp_grades` VALUES ('12', 'G5', '1', '');
INSERT INTO `sa_lkp_grades` VALUES ('13', 'yhujk', '1', '');
INSERT INTO `sa_lkp_grades` VALUES ('14', 'ahmed ayman', '1', '');
INSERT INTO `sa_lkp_grades` VALUES ('15', 'G8', '2', '');

-- ----------------------------
-- Table structure for `setting_account_subscribers`
-- ----------------------------
DROP TABLE IF EXISTS `setting_account_subscribers`;
CREATE TABLE `setting_account_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) DEFAULT NULL,
  `contact_full_name` varchar(255) DEFAULT NULL,
  `contact_mail` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting_account_subscribers
-- ----------------------------

-- ----------------------------
-- Table structure for `setting_branches`
-- ----------------------------
DROP TABLE IF EXISTS `setting_branches`;
CREATE TABLE `setting_branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `branch_code` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `branch_address` varchar(255) DEFAULT NULL,
  `branch_contact_person_name` varchar(255) DEFAULT NULL,
  `branch_phone` varchar(255) DEFAULT NULL,
  `branch_mail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting_branches
-- ----------------------------

-- ----------------------------
-- Table structure for `setting_lkp_years`
-- ----------------------------
DROP TABLE IF EXISTS `setting_lkp_years`;
CREATE TABLE `setting_lkp_years` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `year_type` varchar(255) DEFAULT NULL,
  `archived` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting_lkp_years
-- ----------------------------
INSERT INTO `setting_lkp_years` VALUES ('1', 'Academic Year 1', '2017-07-01 00:00:00', '2018-08-01 00:00:00', 'academic', '');
INSERT INTO `setting_lkp_years` VALUES ('2', 'Academic Year 2', '2017-07-03 18:25:37', '2018-10-30 18:25:42', 'academic', '');

-- ----------------------------
-- Table structure for `setting_schools`
-- ----------------------------
DROP TABLE IF EXISTS `setting_schools`;
CREATE TABLE `setting_schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `school_type_id` int(11) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_contact_person` varchar(255) DEFAULT NULL,
  `school_phone` varchar(255) DEFAULT NULL,
  `school_mail` varchar(255) DEFAULT NULL,
  `school_mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting_schools
-- ----------------------------

-- ----------------------------
-- Table structure for `skills`
-- ----------------------------
DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id_skills` int(11) NOT NULL AUTO_INCREMENT,
  `name_skills` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_skills`),
  UNIQUE KEY `name_skills` (`name_skills`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of skills
-- ----------------------------
INSERT INTO `skills` VALUES ('29', 'Skills 1', '');
INSERT INTO `skills` VALUES ('30', 'skills', '');

-- ----------------------------
-- Table structure for `tax`
-- ----------------------------
DROP TABLE IF EXISTS `tax`;
CREATE TABLE `tax` (
  `id_tax` int(11) NOT NULL AUTO_INCREMENT,
  `name_tax` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `code_tax` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `range_from` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `range_to` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `paid_tax` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `val_employee` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `val_employer` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tax_from` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tax`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tax
-- ----------------------------
INSERT INTO `tax` VALUES ('16', 'Ø§', '5', '3', '3', 'both', '3', '4', 'net', '');
INSERT INTO `tax` VALUES ('17', 't-b1', '011', '5500', '7000', 'employee', '2', '', 'basic', '');
INSERT INTO `tax` VALUES ('18', 't-g', '0012', '6000', '10000', 'employee', '5', '', 'net', '');
INSERT INTO `tax` VALUES ('19', 't-b2', '056', '500', '3000', 'employee', '10', '', 'basic', '');
INSERT INTO `tax` VALUES ('20', 't-g2', '020', '6000', '8000', 'employee', '20', '', 'net', '');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `f_name_user` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `m_name_user` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `l_name_user` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `gender_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `religion_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `birthday_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `national_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `marrital_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `blood_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `email_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fax_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `landline_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `address_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `other_address_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_nationality` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_rules` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `id_direct_manger` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `id_payroll_groups` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `id_categories` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `id_departments` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `id_positions` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `joining` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `periode` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `titel` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `f_approve` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `th_approve` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_nationality` (`id_nationality`),
  KEY `id_rules` (`id_rules`,`id_direct_manger`,`id_payroll_groups`,`id_categories`,`id_departments`,`id_positions`),
  KEY `id_positions` (`id_positions`),
  KEY `id_departments` (`id_departments`),
  KEY `id_categories` (`id_categories`),
  KEY `id_payroll_groups` (`id_payroll_groups`),
  KEY `id_direct_manger` (`id_direct_manger`),
  KEY `id_rules_2` (`id_rules`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('121', 'ahmed', 'ayman', 'aziz', 'male', 'Muslim', '1993-04-21', '50', 'Single', 'O', 'ahmed.ayman.aziz@gmail.com', '01110661151', '012232312', '26980273', 'address1', '251 omar bn 5tab 2', '', '005', '39', '122', '42', '194', '169', '64', '2017-12-22', '4240_23-06-2017_desert.jpg', '005123', '', 'approve', '', '', '', '6000');
INSERT INTO `user` VALUES ('122', 'menna ', 'tala', 'magdy', 'male', 'Muslim', '2017-06-10', '65', 'Married', 'O', 'ahmedoilk@kjn.com', '0164984998498', '012232312', '85', 'address1', '251 omar bn 5tab 2', '38', '41520', '38', '121', '', '194', '169', '64', '2017-06-14', '', '41520123', '', 'approve', '', 'ahmed ayman aziz', '', '');
INSERT INTO `user` VALUES ('123', '562', '5421', '54', 'male', 'Muslim', '2017-06-23', '454', '', '', '45@etryj.fgh', '45', '45', '45', 'p;', 'l;', '', '6', '37', '', '', '194', '169', '', '2017-06-02', '', '123', '', 'approve', '', '', '', '');
INSERT INTO `user` VALUES ('124', 'amira', 'ash2r', 'ahmed', 'femail', 'mared', '02/02/2001', 'jnjnj', 'njnjn', 'n', 'ahmed@ahmed.com', '15', '25', '25', 'km', 'km km', '', '66', '', '', '', '', '', '', '2001-20-02', '', '66123', '', '', '', '', '', '');
