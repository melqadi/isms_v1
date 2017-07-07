-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 10:34 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms_hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=92 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id_application`, `f_name_application`, `m_name_application`, `l_name_application`, `gender_application`, `religion_application`, `birthday_application`, `national_application`, `marrital_application`, `blood_application`, `email_application`, `mobile_application`, `fax_application`, `landline_application`, `address_application`, `other_address_application`, `code_application`, `img`, `pass`, `id_categories`, `id_departments`, `id_position`, `school`, `about_pos`, `start`, `per_salary`, `exp_salary`, `action`, `status`, `date`, `rsl`) VALUES
(91, '562', '5421', '54', 'male', 'Muslim', '2017-06-23', '454', '', '', '45@etryj.fgh', '45', '45', '45', '', '', '', '', '123', '194', '', '', 'hjbhbhj', 'bhjb', 'hjb', '845', '845', '', 'accept', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `user_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_id` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`user_id`, `name_id`, `date`, `start`, `end`, `action`) VALUES
('121', 'ahmed ayman aziz', '2017-07-02', '09:20', '15:00', ''),
('121', 'ahmed ayman aziz', '2017-07-03', '09:30', '17:00', ''),
('121', 'ahmed ayman aziz', '2017-09-01', '02:01', '15:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_categories` int(11) NOT NULL AUTO_INCREMENT,
  `name_categories` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_categories`),
  UNIQUE KEY `name_categories` (`name_categories`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=220 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`, `action`) VALUES
(194, 'Category 11s', ''),
(195, 'ahmed 1', ''),
(196, 'ayman 2', ''),
(197, 'kj', ''),
(198, 'ggg', ''),
(199, 'dsddsds', 'desactive'),
(200, 'xs\\csxczx', ''),
(201, 'fdfdf', ''),
(203, '', 'desactive'),
(205, 'ahmed', ''),
(206, 'fgh', 'desactive'),
(219, 'z', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id_departments` int(11) NOT NULL AUTO_INCREMENT,
  `name_departments` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_departments`),
  UNIQUE KEY `name_departments` (`name_departments`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=190 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id_departments`, `name_departments`, `action`) VALUES
(169, 'Department 1sd', ''),
(170, 'Department 2', ''),
(171, 'ahmedindex', 'desactive'),
(172, 'yyy', ''),
(175, 'f', ''),
(178, 'ahmed', ''),
(183, 'aj', ''),
(185, 'jhk', ''),
(187, 'ahmeed', ''),
(188, 'x', '');

-- --------------------------------------------------------

--
-- Table structure for table `educational`
--

CREATE TABLE IF NOT EXISTS `educational` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `id_gallary` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_gallary`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id_gallary`, `id_user`, `name`, `action`) VALUES
(48, '121', '4806_23-06-2017_chrysanthemum.jpg', ''),
(49, '121', '4240_23-06-2017_desert.jpg', ''),
(50, '121', '8629_23-06-2017_lighthouse.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_setup`
--

CREATE TABLE IF NOT EXISTS `insurance_setup` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `insurance_setup`
--

INSERT INTO `insurance_setup` (`id_insurance`, `code_insurance`, `paid_insurance`, `value_employee`, `value_employer`, `type_value_employee`, `type_value_employer`, `insurance_from`, `name_insurance`, `action`) VALUES
(37, '005', 'both', '5', '5', 'value', 'value', 'basic', 'ahmed', ''),
(38, 'kmk', 'both', '6', '6', 'Percentage', 'value', 'net', 'kmkm', ''),
(39, '01', 'employee', '5', '', 'Percentage', '', 'basic', 'b-f', ''),
(40, '002', 'employee', '500', '', 'value', '', 'basic', 'b-v', ''),
(41, '003', 'employee', '6', '', 'Percentage', '', 'net', 'g-f', ''),
(42, '004', 'employee', '900', '', 'value', '', 'net', 'g-v', ''),
(43, '5', 'employer', '', '5000', '', 'value', 'basic', '55', '');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id_languages` int(11) NOT NULL AUTO_INCREMENT,
  `name_languages` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_languages`),
  UNIQUE KEY `name_languages` (`name_languages`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Table structure for table `leaves_dep`
--

CREATE TABLE IF NOT EXISTS `leaves_dep` (
  `id_leaves_rules` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_leaves_rules`,`id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leaves_dep`
--

INSERT INTO `leaves_dep` (`id_leaves_rules`, `id`, `type`, `action`) VALUES
('53', 'ahmedindex', 'departments', ''),
('53', 'Department 1', 'departments', ''),
('53', 'Department 2', 'departments', '');

-- --------------------------------------------------------

--
-- Table structure for table `leaves_rules`
--

CREATE TABLE IF NOT EXISTS `leaves_rules` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `leaves_rules`
--

INSERT INTO `leaves_rules` (`id_leaves_rules`, `name`, `days`, `type`, `permission`, `applied`, `select`, `rang_start`, `rang_end`, `reset`, `forward`, `w_as`, `w_form`, `h_as`, `h_form`, `action`) VALUES
(53, 'ahmed', '4', 'permission', 'Early,', 'selected', 'department', '2017-06-15', '', 'reset', 'forward', 'w_as', '', 'h_as', '', 'active'),
(54, 'ahmedayman', '50', 'permission', 'Early,Late', 'All', '', '2017-06-21', '', 'reset', '', 'w_as', '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE IF NOT EXISTS `licenses` (
  `id_licenses` int(11) NOT NULL AUTO_INCREMENT,
  `name_licenses` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_licenses`),
  UNIQUE KEY `name_licenses` (`name_licenses`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `licenses`
--

INSERT INTO `licenses` (`id_licenses`, `name_licenses`, `action`) VALUES
(23, 'lice', '');

-- --------------------------------------------------------

--
-- Table structure for table `my_leaves`
--

CREATE TABLE IF NOT EXISTS `my_leaves` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `my_leaves`
--

INSERT INTO `my_leaves` (`id_my_leaves`, `id_leaves`, `id_user`, `day`, `start`, `end`, `regest`, `date_reg`, `action`) VALUES
(22, 'ahmed', '121', '0', '2017-06-23', '2017-06-29', 'rejact', '', ''),
(23, 'ahmed', '121', '0', '2017-06-22', '2017-06-30', 'rejact', '', ''),
(24, 'ahmed', '121', '0', '2017-06-01', '2017-06-04', 'rejact', '', ''),
(25, 'ahmed', '121', '4', '2017-06-02', '2017-06-05', 'approve', '', ''),
(26, 'ahmedayman', '121', '2', '2017-06-01', '2017-06-23', 'rejact', '', ''),
(27, 'ahmedayman', '121', '2', '2017-06-01', '2017-06-30', 'rejact', '', ''),
(28, 'ahmedayman', '121', '2', '2017-06-01', '2017-06-30', 'rejact', '', ''),
(29, 'ahmedayman', '121', '5', '2017-06-01', '2017-06-07', 'rejact', '', ''),
(30, 'ahmedayman', '121', '22', '2017-06-01', '2017-06-30', 'approve', '', ''),
(31, 'ahmedayman', '121', '16', '2017-06-01', '2017-06-22', 'approve', '', ''),
(32, 'ahmedayman', '121', '5', '2017-07-04', '2017-07-10', 'approve', '', ''),
(33, 'ahmedayman', '121', '0', '2017-07-11', '2017-06-18', 'wait', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE IF NOT EXISTS `nationalities` (
  `id_nationalities` int(11) NOT NULL AUTO_INCREMENT,
  `name_nationalities` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_nationalities`),
  UNIQUE KEY `name_nationalities` (`name_nationalities`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id_nationalities`, `name_nationalities`, `action`) VALUES
(38, 'Nationalities 2', ''),
(39, 'Nationalities 1', ''),
(40, 'ahmd', 'desactive'),
(41, 'dsd', 'desactive');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_groups`
--

CREATE TABLE IF NOT EXISTS `payroll_groups` (
  `id_payroll_groups` int(11) NOT NULL AUTO_INCREMENT,
  `name_payroll_groups` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `code_payroll_groups` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_payroll_groups`),
  UNIQUE KEY `name_payroll_groups` (`name_payroll_groups`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `payroll_groups`
--

INSERT INTO `payroll_groups` (`id_payroll_groups`, `name_payroll_groups`, `code_payroll_groups`, `action`) VALUES
(40, 'ff', '5', ''),
(42, 'test2', '009', '');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_value`
--

CREATE TABLE IF NOT EXISTS `payroll_value` (
  `id_payroll_value` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gory` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_payroll_value`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

--
-- Dumping data for table `payroll_value`
--

INSERT INTO `payroll_value` (`id_payroll_value`, `name`, `code`, `gory`, `type`, `value`, `action`) VALUES
(47, 'jhk', '2', 'earning', 'Formula', '2', ''),
(48, 'a', '', '', '', '', 'desactive'),
(49, 'earning-formula', '001', 'earning', 'Formula', '5', ''),
(51, 'e-f', '003', 'earning', 'Formula', '10', ''),
(52, 'e-v', '004', 'earning', 'Value', '300', ''),
(53, 'd-f', '006', 'deduction', 'Formula', '15', ''),
(54, 'd-f2', '007', 'deduction', 'Formula', '3', ''),
(55, 'd-v', '008', 'deduction', 'Value', '350', ''),
(56, 'd-v2', '009', 'deduction', 'Value', '300', '');

-- --------------------------------------------------------

--
-- Table structure for table `payslip`
--

CREATE TABLE IF NOT EXISTS `payslip` (
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_filde` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `resalt_filde` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `id_mack` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `count` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`month`,`year`,`name_filde`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payslip`
--

INSERT INTO `payslip` (`id_user`, `month`, `year`, `name_filde`, `resalt_filde`, `id_mack`, `action`, `count`) VALUES
('121', '01', '2017', 'Absence Day', '23', '121', '', '13'),
('121', '01', '2017', 'Absence Hours', '169', '121', '', '12'),
('121', '01', '2017', 'Actual Salary', '0', '121', '', '48'),
('121', '01', '2017', 'Actual Working Day', '0', '121', '', '11'),
('121', '01', '2017', 'Actual Working Hours', '00:00', '121', '', '10'),
('121', '01', '2017', 'b-f', '300', '121', '', '34'),
('121', '01', '2017', 'b-v', '500', '121', '', '35'),
('121', '01', '2017', 'Basic Salary', '6000', '121', '', '19'),
('121', '01', '2017', 'Categories Name', 'Category 11', '121', '', '4'),
('121', '01', '2017', 'd-f', '900', '121', '', '27'),
('121', '01', '2017', 'd-f2', '180', '121', '', '28'),
('121', '01', '2017', 'd-v', '350', '121', '', '29'),
('121', '01', '2017', 'd-v2', '300', '121', '', '30'),
('121', '01', '2017', 'delay', '0:00', '121', '', '18'),
('121', '01', '2017', 'Delay Day', '0', '121', '', '17'),
('121', '01', '2017', 'Delay Hours', '00:00', '121', '', '16'),
('121', '01', '2017', 'Departments Name', 'Department 1', '121', '', '5'),
('121', '01', '2017', 'e-f', '600', '121', '', '21'),
('121', '01', '2017', 'e-v', '300', '121', '', '22'),
('121', '01', '2017', 'earning-formula', '300', '121', '', '20'),
('121', '01', '2017', 'Exp Deduction Formula', '0', '121', '', '32'),
('121', '01', '2017', 'Exp Deduction Value', '0', '121', '', '31'),
('121', '01', '2017', 'Exp Earning Formula', '0', '121', '', '24'),
('121', '01', '2017', 'Exp Earning Value', '0', '121', '', '23'),
('121', '01', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1'),
('121', '01', '2017', 'g-f', '432', '121', '', '36'),
('121', '01', '2017', 'g-v', '900', '121', '', '37'),
('121', '01', '2017', 'ID', '121', '121', '', '3'),
('121', '01', '2017', 'Leaves Day', '0', '121', '', '15'),
('121', '01', '2017', 'Leaves Hours', '0', '121', '', '14'),
('121', '01', '2017', 'Net Salary', '1418', '121', '', '44'),
('121', '01', '2017', 'Net Salary of Absence', '0', '121', '', '47'),
('121', '01', '2017', 'Positions Name', 'Position 1', '121', '', '6'),
('121', '01', '2017', 'Rules Name', 'ahmedayman', '121', '', '7'),
('121', '01', '2017', 'Salary of Absence', '1418', '121', '', '46'),
('121', '01', '2017', 'Salary of Hour ', '8.3905325443787', '121', '', '45'),
('121', '01', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0'),
('121', '01', '2017', 't-b1', '120', '121', '', '39'),
('121', '01', '2017', 't-g', '360', '121', '', '40'),
('121', '01', '2017', 't-g2', '1440', '121', '', '41'),
('121', '01', '2017', 'Total Deduction', '5782', '121', '', '43'),
('121', '01', '2017', 'Total Deduction Insurance', '2132', '121', '', '38'),
('121', '01', '2017', 'Total Deduction Payroll', '1730', '121', '', '33'),
('121', '01', '2017', 'Total Deduction Taxes', '1920', '121', '', '42'),
('121', '01', '2017', 'Total earning', '1200', '121', '', '25'),
('121', '01', '2017', 'Total Gross Salary', '7200', '121', '', '26'),
('121', '01', '2017', 'Total Working Day', '23', '121', '', '9'),
('121', '01', '2017', 'Total Working Hours', '169', '121', '', '8'),
('121', '01', '2017', 'User Name', 'ahmed ayman aziz', '121', '', '2'),
('121', '07', '2017', 'Absence Day', '15', '121', '', '13'),
('121', '07', '2017', 'Absence Hours', '111', '121', '', '12'),
('121', '07', '2017', 'Actual Salary', '458.25609756098', '121', '', '48'),
('121', '07', '2017', 'Actual Working Day', '2', '121', '', '11'),
('121', '07', '2017', 'Actual Working Hours', '13:10', '121', '', '10'),
('121', '07', '2017', 'b-f', '300', '121', '', '34'),
('121', '07', '2017', 'b-v', '500', '121', '', '35'),
('121', '07', '2017', 'Basic Salary', '6000', '121', '', '19'),
('121', '07', '2017', 'Categories Name', 'Category 11', '121', '', '4'),
('121', '07', '2017', 'd-f', '900', '121', '', '27'),
('121', '07', '2017', 'd-f2', '180', '121', '', '28'),
('121', '07', '2017', 'd-v', '350', '121', '', '29'),
('121', '07', '2017', 'd-v2', '300', '121', '', '30'),
('121', '07', '2017', 'delay', '2:00', '121', '', '18'),
('121', '07', '2017', 'Delay Day', '2', '121', '', '17'),
('121', '07', '2017', 'Delay Hours', '00:50', '121', '', '16'),
('121', '07', '2017', 'Departments Name', 'Department 1', '121', '', '5'),
('121', '07', '2017', 'e-f', '600', '121', '', '21'),
('121', '07', '2017', 'e-v', '300', '121', '', '22'),
('121', '07', '2017', 'earning-formula', '300', '121', '', '20'),
('121', '07', '2017', 'Exp Deduction Formula', '0', '121', '', '32'),
('121', '07', '2017', 'Exp Deduction Value', '0', '121', '', '31'),
('121', '07', '2017', 'Exp Earning Formula', '0', '121', '', '24'),
('121', '07', '2017', 'Exp Earning Value', '0', '121', '', '23'),
('121', '07', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1'),
('121', '07', '2017', 'g-f', '432', '121', '', '36'),
('121', '07', '2017', 'g-v', '900', '121', '', '37'),
('121', '07', '2017', 'ID', '121', '121', '', '3'),
('121', '07', '2017', 'Leaves Day', '5', '121', '', '15'),
('121', '07', '2017', 'Leaves Hours', '37', '121', '', '14'),
('121', '07', '2017', 'Net Salary', '1418', '121', '', '44'),
('121', '07', '2017', 'Net Salary of Absence', '458.25609756098', '121', '', '47'),
('121', '07', '2017', 'Positions Name', 'Position 1', '121', '', '6'),
('121', '07', '2017', 'Rules Name', 'ahmedayman', '121', '', '7'),
('121', '07', '2017', 'Salary of Absence', '959.74390243902', '121', '', '46'),
('121', '07', '2017', 'Salary of Hour ', '8.6463414634146', '121', '', '45'),
('121', '07', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0'),
('121', '07', '2017', 't-b1', '120', '121', '', '39'),
('121', '07', '2017', 't-g', '360', '121', '', '40'),
('121', '07', '2017', 't-g2', '1440', '121', '', '41'),
('121', '07', '2017', 'Total Deduction', '5782', '121', '', '43'),
('121', '07', '2017', 'Total Deduction Insurance', '2132', '121', '', '38'),
('121', '07', '2017', 'Total Deduction Payroll', '1730', '121', '', '33'),
('121', '07', '2017', 'Total Deduction Taxes', '1920', '121', '', '42'),
('121', '07', '2017', 'Total earning', '1200', '121', '', '25'),
('121', '07', '2017', 'Total Gross Salary', '7200', '121', '', '26'),
('121', '07', '2017', 'Total Working Day', '22', '121', '', '9'),
('121', '07', '2017', 'Total Working Hours', '164', '121', '', '8'),
('121', '07', '2017', 'User Name', 'ahmed ayman aziz', '121', '', '2'),
('121', '08', '2017', 'Absence Day', '23', '121', '', '13'),
('121', '08', '2017', 'Absence Hours', '169', '121', '', '12'),
('121', '08', '2017', 'Actual Salary', '0', '121', '', '47'),
('121', '08', '2017', 'Actual Working Day', '0', '121', '', '11'),
('121', '08', '2017', 'Actual Working Hours', '00:00', '121', '', '10'),
('121', '08', '2017', 'b-f', '300', '121', '', '34'),
('121', '08', '2017', 'b-v', '500', '121', '', '35'),
('121', '08', '2017', 'Basic Salary', '6000', '121', '', '19'),
('121', '08', '2017', 'Categories Name', 'Category 11', '121', '', '4'),
('121', '08', '2017', 'd-f', '900', '121', '', '27'),
('121', '08', '2017', 'd-f2', '180', '121', '', '28'),
('121', '08', '2017', 'd-v', '350', '121', '', '29'),
('121', '08', '2017', 'd-v2', '300', '121', '', '30'),
('121', '08', '2017', 'delay', '0:00', '121', '', '18'),
('121', '08', '2017', 'Delay Day', '0', '121', '', '17'),
('121', '08', '2017', 'Delay Hours', '00:00', '121', '', '16'),
('121', '08', '2017', 'Departments Name', 'Department 1', '121', '', '5'),
('121', '08', '2017', 'e-f', '600', '121', '', '21'),
('121', '08', '2017', 'e-v', '300', '121', '', '22'),
('121', '08', '2017', 'earning-formula', '300', '121', '', '20'),
('121', '08', '2017', 'Exp Deduction Formula', '0', '121', '', '32'),
('121', '08', '2017', 'Exp Deduction Value', '0', '121', '', '31'),
('121', '08', '2017', 'Exp Earning Formula', '30000', '121', '', '24'),
('121', '08', '2017', 'Exp Earning Value', '1000', '121', '', '23'),
('121', '08', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1'),
('121', '08', '2017', 'g-f', '2292', '121', '', '36'),
('121', '08', '2017', 'g-v', '900', '121', '', '37'),
('121', '08', '2017', 'ID', '121', '121', '', '3'),
('121', '08', '2017', 'Leaves Day', '0', '121', '', '15'),
('121', '08', '2017', 'Leaves Hours', '0', '121', '', '14'),
('121', '08', '2017', 'Net Salary', '32358', '121', '', '42'),
('121', '08', '2017', 'Net Salary of Absence', '0', '121', '', '45'),
('121', '08', '2017', 'Positions Name', 'Position 1', '121', '', '6'),
('121', '08', '2017', 'Rules Name', 'ahmedayman', '121', '', '7'),
('121', '08', '2017', 'Salary of Absence', '32358', '121', '', '44'),
('121', '08', '2017', 'Salary of delay', '0', '121', '', '46'),
('121', '08', '2017', 'Salary of Hour ', '191.4674556213', '121', '', '43'),
('121', '08', '2017', 't-b1', '120', '121', '', '39'),
('121', '08', '2017', 'Total Deduction', '5842', '121', '', '41'),
('121', '08', '2017', 'Total Deduction Insurance', '3992', '121', '', '38'),
('121', '08', '2017', 'Total Deduction Payroll', '1730', '121', '', '33'),
('121', '08', '2017', 'Total Deduction Taxes', '120', '121', '', '40'),
('121', '08', '2017', 'Total earning', '32200', '121', '', '25'),
('121', '08', '2017', 'Total Gross Salary', '38200', '121', '', '26'),
('121', '08', '2017', 'Total Working Day', '23', '121', '', '9'),
('121', '08', '2017', 'Total Working Hours', '169', '121', '', '8'),
('121', '08', '2017', 'User Name', 'ahmed ayman aziz', '121', '', '2'),
('122', '01', '2017', 'Absence Day', '22', '121', '', '13'),
('122', '01', '2017', 'Absence Hours', '161', '121', '', '12'),
('122', '01', '2017', 'Actual Salary', '0', '121', '', '34'),
('122', '01', '2017', 'Actual Working Day', '0', '121', '', '11'),
('122', '01', '2017', 'Actual Working Hours', '00:00', '121', '', '10'),
('122', '01', '2017', 'Basic Salary', '', '121', '', '19'),
('122', '01', '2017', 'Categories Name', 'Category 11s', '121', '', '4'),
('122', '01', '2017', 'delay', '0:00', '121', '', '18'),
('122', '01', '2017', 'Delay Day', '0', '121', '', '17'),
('122', '01', '2017', 'Delay Hours', '00:00', '121', '', '16'),
('122', '01', '2017', 'Departments Name', 'Department 1sd', '121', '', '5'),
('122', '01', '2017', 'Exp Deduction Formula', '0', '121', '', '25'),
('122', '01', '2017', 'Exp Deduction Value', '0', '121', '', '24'),
('122', '01', '2017', 'Exp Earning Formula', '0', '121', '', '21'),
('122', '01', '2017', 'Exp Earning Value', '5000', '121', '', '20'),
('122', '01', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1'),
('122', '01', '2017', 'ID', '122', '121', '', '3'),
('122', '01', '2017', 'Leaves Day', '0', '121', '', '15'),
('122', '01', '2017', 'Leaves Hours', '0', '121', '', '14'),
('122', '01', '2017', 'Net Salary', '5000', '121', '', '30'),
('122', '01', '2017', 'Net Salary of Absence', '0', '121', '', '33'),
('122', '01', '2017', 'Positions Name', 'Position 1;l', '121', '', '6'),
('122', '01', '2017', 'Rules Name', 'ahmed', '121', '', '7'),
('122', '01', '2017', 'Salary of Absence', '5000', '121', '', '32'),
('122', '01', '2017', 'Salary of Hour ', '31.055900621118', '121', '', '31'),
('122', '01', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0'),
('122', '01', '2017', 'Total Deduction', '0', '121', '', '29'),
('122', '01', '2017', 'Total Deduction Insurance', '0', '121', '', '27'),
('122', '01', '2017', 'Total Deduction Payroll', '0', '121', '', '26'),
('122', '01', '2017', 'Total Deduction Taxes', '0', '121', '', '28'),
('122', '01', '2017', 'Total earning', '5000', '121', '', '22'),
('122', '01', '2017', 'Total Gross Salary', '5000', '121', '', '23'),
('122', '01', '2017', 'Total Working Day', '22', '121', '', '9'),
('122', '01', '2017', 'Total Working Hours', '161', '121', '', '8'),
('122', '01', '2017', 'User Name', 'menna  tala magdy', '121', '', '2'),
('122', '07', '2017', 'Absence Day', '23', '121', '', '13'),
('122', '07', '2017', 'Absence Hours', '169', '121', '', '12'),
('122', '07', '2017', 'Actual Salary', '0', '121', '', '34'),
('122', '07', '2017', 'Actual Working Day', '0', '121', '', '11'),
('122', '07', '2017', 'Actual Working Hours', '00:00', '121', '', '10'),
('122', '07', '2017', 'Basic Salary', '', '121', '', '19'),
('122', '07', '2017', 'Categories Name', 'Category 11', '121', '', '4'),
('122', '07', '2017', 'delay', '0:00', '121', '', '18'),
('122', '07', '2017', 'Delay Day', '0', '121', '', '17'),
('122', '07', '2017', 'Delay Hours', '00:00', '121', '', '16'),
('122', '07', '2017', 'Departments Name', 'Department 1', '121', '', '5'),
('122', '07', '2017', 'Exp Deduction Formula', '0', '121', '', '25'),
('122', '07', '2017', 'Exp Deduction Value', '0', '121', '', '24'),
('122', '07', '2017', 'Exp Earning Formula', '0', '121', '', '21'),
('122', '07', '2017', 'Exp Earning Value', '0', '121', '', '20'),
('122', '07', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1'),
('122', '07', '2017', 'ID', '122', '121', '', '3'),
('122', '07', '2017', 'Leaves Day', '0', '121', '', '15'),
('122', '07', '2017', 'Leaves Hours', '0', '121', '', '14'),
('122', '07', '2017', 'Net Salary', '0', '121', '', '30'),
('122', '07', '2017', 'Net Salary of Absence', '0', '121', '', '33'),
('122', '07', '2017', 'Positions Name', 'Position 1', '121', '', '6'),
('122', '07', '2017', 'Rules Name', 'ahmed', '121', '', '7'),
('122', '07', '2017', 'Salary of Absence', '0', '121', '', '32'),
('122', '07', '2017', 'Salary of Hour ', '0', '121', '', '31'),
('122', '07', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0'),
('122', '07', '2017', 'Total Deduction', '0', '121', '', '29'),
('122', '07', '2017', 'Total Deduction Insurance', '0', '121', '', '27'),
('122', '07', '2017', 'Total Deduction Payroll', '0', '121', '', '26'),
('122', '07', '2017', 'Total Deduction Taxes', '0', '121', '', '28'),
('122', '07', '2017', 'Total earning', '0', '121', '', '22'),
('122', '07', '2017', 'Total Gross Salary', '0', '121', '', '23'),
('122', '07', '2017', 'Total Working Day', '23', '121', '', '9'),
('122', '07', '2017', 'Total Working Hours', '169', '121', '', '8'),
('122', '07', '2017', 'User Name', 'menna  tala magdy', '121', '', '2'),
('123', '01', '2017', 'Absence Day', '0', '121', '', '13'),
('123', '01', '2017', 'Absence Hours', '0', '121', '', '12'),
('123', '01', '2017', 'Actual Salary', '0', '121', '', '34'),
('123', '01', '2017', 'Actual Working Day', '0', '121', '', '11'),
('123', '01', '2017', 'Actual Working Hours', '00:00', '121', '', '10'),
('123', '01', '2017', 'Basic Salary', '', '121', '', '19'),
('123', '01', '2017', 'Categories Name', 'Category 11s', '121', '', '4'),
('123', '01', '2017', 'delay', '0:00', '121', '', '18'),
('123', '01', '2017', 'Delay Day', '0', '121', '', '17'),
('123', '01', '2017', 'Delay Hours', '00:00', '121', '', '16'),
('123', '01', '2017', 'Departments Name', 'Department 1sd', '121', '', '5'),
('123', '01', '2017', 'Exp Deduction Formula', '0', '121', '', '25'),
('123', '01', '2017', 'Exp Deduction Value', '0', '121', '', '24'),
('123', '01', '2017', 'Exp Earning Formula', '0', '121', '', '21'),
('123', '01', '2017', 'Exp Earning Value', '0', '121', '', '20'),
('123', '01', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1'),
('123', '01', '2017', 'ID', '123', '121', '', '3'),
('123', '01', '2017', 'Leaves Day', '0', '121', '', '15'),
('123', '01', '2017', 'Leaves Hours', '0', '121', '', '14'),
('123', '01', '2017', 'Net Salary', '0', '121', '', '30'),
('123', '01', '2017', 'Net Salary of Absence', '0', '121', '', '33'),
('123', '01', '2017', 'Positions Name', 'Y', '121', '', '6'),
('123', '01', '2017', 'Rules Name', 'zzz4', '121', '', '7'),
('123', '01', '2017', 'Salary of Absence', '0', '121', '', '32'),
('123', '01', '2017', 'Salary of Hour ', '', '121', '', '31'),
('123', '01', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0'),
('123', '01', '2017', 'Total Deduction', '0', '121', '', '29'),
('123', '01', '2017', 'Total Deduction Insurance', '0', '121', '', '27'),
('123', '01', '2017', 'Total Deduction Payroll', '0', '121', '', '26'),
('123', '01', '2017', 'Total Deduction Taxes', '0', '121', '', '28'),
('123', '01', '2017', 'Total earning', '0', '121', '', '22'),
('123', '01', '2017', 'Total Gross Salary', '0', '121', '', '23'),
('123', '01', '2017', 'Total Working Day', '0', '121', '', '9'),
('123', '01', '2017', 'Total Working Hours', '0', '121', '', '8'),
('123', '01', '2017', 'User Name', '562 5421 54', '121', '', '2'),
('123', '07', '2017', 'Absence Day', '0', '121', '', '13'),
('123', '07', '2017', 'Absence Hours', '0', '121', '', '12'),
('123', '07', '2017', 'Actual Salary', '0', '121', '', '34'),
('123', '07', '2017', 'Actual Working Day', '0', '121', '', '11'),
('123', '07', '2017', 'Actual Working Hours', '00:00', '121', '', '10'),
('123', '07', '2017', 'Basic Salary', '', '121', '', '19'),
('123', '07', '2017', 'Categories Name', 'Category 11', '121', '', '4'),
('123', '07', '2017', 'delay', '0:00', '121', '', '18'),
('123', '07', '2017', 'Delay Day', '0', '121', '', '17'),
('123', '07', '2017', 'Delay Hours', '00:00', '121', '', '16'),
('123', '07', '2017', 'Departments Name', 'Department 1', '121', '', '5'),
('123', '07', '2017', 'Exp Deduction Formula', '0', '121', '', '25'),
('123', '07', '2017', 'Exp Deduction Value', '0', '121', '', '24'),
('123', '07', '2017', 'Exp Earning Formula', '0', '121', '', '21'),
('123', '07', '2017', 'Exp Earning Value', '0', '121', '', '20'),
('123', '07', '2017', 'first aprove', 'ahmed ayman aziz', '121', '', '1'),
('123', '07', '2017', 'ID', '123', '121', '', '3'),
('123', '07', '2017', 'Leaves Day', '0', '121', '', '15'),
('123', '07', '2017', 'Leaves Hours', '0', '121', '', '14'),
('123', '07', '2017', 'Net Salary', '0', '121', '', '30'),
('123', '07', '2017', 'Net Salary of Absence', '0', '121', '', '33'),
('123', '07', '2017', 'Positions Name', 'Y', '121', '', '6'),
('123', '07', '2017', 'Rules Name', 'zzz4', '121', '', '7'),
('123', '07', '2017', 'Salary of Absence', '0', '121', '', '32'),
('123', '07', '2017', 'Salary of Hour ', '', '121', '', '31'),
('123', '07', '2017', 'second aprove', 'ahmed ayman aziz', '121', '', '0'),
('123', '07', '2017', 'Total Deduction', '0', '121', '', '29'),
('123', '07', '2017', 'Total Deduction Insurance', '0', '121', '', '27'),
('123', '07', '2017', 'Total Deduction Payroll', '0', '121', '', '26'),
('123', '07', '2017', 'Total Deduction Taxes', '0', '121', '', '28'),
('123', '07', '2017', 'Total earning', '0', '121', '', '22'),
('123', '07', '2017', 'Total Gross Salary', '0', '121', '', '23'),
('123', '07', '2017', 'Total Working Day', '0', '121', '', '9'),
('123', '07', '2017', 'Total Working Hours', '0', '121', '', '8'),
('123', '07', '2017', 'User Name', '562 5421 54', '121', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pay_grou_valu`
--

CREATE TABLE IF NOT EXISTS `pay_grou_valu` (
  `id_payroll_groups` int(11) NOT NULL,
  `id_payroll_value` int(11) NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_payroll_groups`,`id_payroll_value`),
  KEY `id_payroll_groups` (`id_payroll_groups`),
  KEY `id_payroll_value` (`id_payroll_value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pay_grou_valu`
--

INSERT INTO `pay_grou_valu` (`id_payroll_groups`, `id_payroll_value`, `action`) VALUES
(40, 47, ''),
(42, 49, ''),
(42, 51, ''),
(42, 52, ''),
(42, 53, ''),
(42, 54, ''),
(42, 55, ''),
(42, 56, '');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id_positions` int(11) NOT NULL AUTO_INCREMENT,
  `name_positions` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_positions`),
  UNIQUE KEY `name_positions` (`name_positions`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=87 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id_positions`, `name_positions`, `action`) VALUES
(64, 'Position 1;l', ''),
(66, '515', ''),
(68, 'uhbnjkm', ''),
(70, 'ahmed', ''),
(74, 'ahed', 'desactive'),
(75, 'akl;''dc', ''),
(76, 'gy8hujo', ''),
(86, 'd', '');

-- --------------------------------------------------------

--
-- Table structure for table `previuos`
--

CREATE TABLE IF NOT EXISTS `previuos` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `pr_cat_dep`
--

CREATE TABLE IF NOT EXISTS `pr_cat_dep` (
  `id_categories` int(11) NOT NULL,
  `id_departments` int(11) NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_categories`,`id_departments`),
  KEY `id_categories` (`id_categories`),
  KEY `id_departments` (`id_departments`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr_cat_dep`
--

INSERT INTO `pr_cat_dep` (`id_categories`, `id_departments`, `action`) VALUES
(194, 169, ''),
(194, 170, ''),
(194, 175, ''),
(194, 178, ''),
(194, 183, ''),
(194, 187, ''),
(194, 188, ''),
(195, 172, ''),
(195, 185, '');

-- --------------------------------------------------------

--
-- Table structure for table `pr_dep_pos`
--

CREATE TABLE IF NOT EXISTS `pr_dep_pos` (
  `id_departments` int(11) NOT NULL,
  `id_positions` int(11) NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_departments`,`id_positions`),
  KEY `id_departments` (`id_departments`),
  KEY `id_positions` (`id_positions`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr_dep_pos`
--

INSERT INTO `pr_dep_pos` (`id_departments`, `id_positions`, `action`) VALUES
(169, 64, ''),
(169, 70, ''),
(169, 75, ''),
(169, 76, ''),
(170, 66, ''),
(170, 86, ''),
(175, 68, '');

-- --------------------------------------------------------

--
-- Table structure for table `pr_user_insurance`
--

CREATE TABLE IF NOT EXISTS `pr_user_insurance` (
  `id_user` int(11) NOT NULL,
  `id_insurance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_insurance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr_user_insurance`
--

INSERT INTO `pr_user_insurance` (`id_user`, `id_insurance`, `action`) VALUES
(121, '55', ''),
(121, 'b-f', ''),
(121, 'b-v', ''),
(121, 'g-f', ''),
(121, 'g-v', '');

-- --------------------------------------------------------

--
-- Table structure for table `pr_user_languages`
--

CREATE TABLE IF NOT EXISTS `pr_user_languages` (
  `id_user` int(11) NOT NULL,
  `id_languages` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_languages`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pr_user_leaves`
--

CREATE TABLE IF NOT EXISTS `pr_user_leaves` (
  `id_user` int(11) NOT NULL,
  `id_leaves` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_leaves`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr_user_leaves`
--

INSERT INTO `pr_user_leaves` (`id_user`, `id_leaves`, `action`) VALUES
(121, 'ahmed', ''),
(121, 'ahmedayman', '');

-- --------------------------------------------------------

--
-- Table structure for table `pr_user_licenes`
--

CREATE TABLE IF NOT EXISTS `pr_user_licenes` (
  `id_user` int(11) NOT NULL,
  `id_licenes` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_licenes`),
  KEY `id_user` (`id_user`,`id_licenes`),
  KEY `id_user_2` (`id_user`),
  KEY `id_licenes` (`id_licenes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pr_user_role`
--

CREATE TABLE IF NOT EXISTS `pr_user_role` (
  `id_user` int(11) NOT NULL,
  `name_role` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`name_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr_user_role`
--

INSERT INTO `pr_user_role` (`id_user`, `name_role`) VALUES
(121, 'DEV'),
(122, 'DEV');

-- --------------------------------------------------------

--
-- Table structure for table `pr_user_skills`
--

CREATE TABLE IF NOT EXISTS `pr_user_skills` (
  `id_user` int(11) NOT NULL,
  `id_skills` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_skills`),
  KEY `id_user` (`id_user`,`id_skills`),
  KEY `id_user_2` (`id_user`),
  KEY `id_skills` (`id_skills`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr_user_skills`
--

INSERT INTO `pr_user_skills` (`id_user`, `id_skills`, `action`) VALUES
(121, 'Skills 1', '');

-- --------------------------------------------------------

--
-- Table structure for table `pr_user_tax`
--

CREATE TABLE IF NOT EXISTS `pr_user_tax` (
  `id_user` int(11) NOT NULL,
  `id_tax` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`,`id_tax`),
  KEY `id_user` (`id_user`,`id_tax`),
  KEY `id_user_2` (`id_user`),
  KEY `id_tax` (`id_tax`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr_user_tax`
--

INSERT INTO `pr_user_tax` (`id_user`, `id_tax`, `action`) VALUES
(121, 't-b1', ''),
(121, 't-b2', ''),
(121, 't-g', ''),
(121, 't-g2', '');

-- --------------------------------------------------------

--
-- Table structure for table `role_setup`
--

CREATE TABLE IF NOT EXISTS `role_setup` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `role_setup`
--

INSERT INTO `role_setup` (`id_role`, `name_role`, `name_page`, `add`, `edit`, `view_all`, `view_by_id`, `delete`, `deleterelion`, `addrelion`, `add_edu`, `delet_edu`, `add_pre`, `delet_pre`) VALUES
(1, 'ADMIN', 'categories', 'yes', 'yes', 'yes', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(2, 'ADMIN', 'departments', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(3, 'ADMIN', 'positions', 'no', 'no', 'no', 'null', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(4, 'ADMIN', 'nationalities', 'no', 'no', 'no', 'null', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(5, 'ADMIN', 'skills', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(6, 'ADMIN', 'licenses', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(7, 'ADMIN', 'languages', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(8, 'ADMIN', 'rules', 'yes', 'yes', 'no', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(9, 'ADMIN', 'payroll_categories', 'yes', 'yes', 'no', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(10, 'ADMIN', 'payroll_groups', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null'),
(11, 'ADMIN', 'insurance_setup', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(12, 'ADMIN', 'tax', 'no', 'no', 'no', 'yes', 'no', 'null', 'null', 'null', 'null', 'null', 'null'),
(13, 'ADMIN', 'application', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no'),
(15, 'ADMIN', 'appointment', 'yes', 'yes', 'no', 'yes', 'yes', 'null', 'yes', '', '', '', ''),
(16, 'ADMIN', 'application_archived', 'null', 'yes', 'no', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(17, 'DEV', 'categories', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(18, 'DEV', 'positions', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(19, 'DEV', 'nationalities', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(20, 'DEV', 'skills', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(21, 'DEV', 'licenses', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(22, 'DEV', 'languages', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(23, 'DEV', 'rules', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(24, 'DEV', 'payroll_categories', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(25, 'DEV', 'payroll_groups', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null'),
(26, 'DEV', 'insurance_setup', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(27, 'DEV', 'tax', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(28, 'DEV', 'application', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null'),
(29, 'DEV', 'appointment', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'yes', 'null', 'null', 'null', 'null'),
(30, 'DEV', 'application_archived', 'null', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null'),
(31, 'DEV', 'departments', 'yes', 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id_rules`, `name_rules`, `full_day_rules`, `half_day_rules`, `fri_day`, `sat_day`, `sun_day`, `mon_day`, `tue_day`, `wed_day`, `thu_day`, `action`, `start_day`) VALUES
(36, 'jkl', '12', '12', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', '', ''),
(37, 'zzz4', '12', '12', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', 'weekend', '', ''),
(38, 'ahmed', '8', '5', 'fullday', 'fullday', 'fullday', 'hulffay', 'weekend', 'weekend', 'fullday', '', ''),
(39, 'ahmedayman', '8', '5', 'weekend', 'weekend', 'fullday', 'fullday', 'hulffay', 'fullday', 'fullday', '', '09:00');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id_skills` int(11) NOT NULL AUTO_INCREMENT,
  `name_skills` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_skills`),
  UNIQUE KEY `name_skills` (`name_skills`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id_skills`, `name_skills`, `action`) VALUES
(29, 'Skills 1', ''),
(30, 'skills', '');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id_tax`, `name_tax`, `code_tax`, `range_from`, `range_to`, `paid_tax`, `val_employee`, `val_employer`, `tax_from`, `action`) VALUES
(16, 'Ø§', '5', '3', '3', 'both', '3', '4', 'net', ''),
(17, 't-b1', '011', '5500', '7000', 'employee', '2', '', 'basic', ''),
(18, 't-g', '0012', '6000', '10000', 'employee', '5', '', 'net', ''),
(19, 't-b2', '056', '500', '3000', 'employee', '10', '', 'basic', ''),
(20, 't-g2', '020', '6000', '8000', 'employee', '20', '', 'net', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=125 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `f_name_user`, `m_name_user`, `l_name_user`, `gender_user`, `religion_user`, `birthday_user`, `national_user`, `marrital_user`, `blood_user`, `email_user`, `mobile_user`, `fax_user`, `landline_user`, `address_user`, `other_address_user`, `id_nationality`, `code_user`, `id_rules`, `id_direct_manger`, `id_payroll_groups`, `id_categories`, `id_departments`, `id_positions`, `joining`, `img`, `pass`, `action`, `periode`, `titel`, `f_approve`, `th_approve`, `salary`) VALUES
(121, 'ahmed', 'ayman', 'aziz', 'male', 'Muslim', '1993-04-21', '50', 'Single', 'O', 'ahmed.ayman.aziz@gmail.com', '01110661151', '012232312', '26980273', 'address1', '251 omar bn 5tab 2', '', '005', '39', '122', '42', '194', '169', '64', '2017-12-22', '4240_23-06-2017_desert.jpg', '005123', '', 'approve', '', '', '', '6000'),
(122, 'menna ', 'tala', 'magdy', 'male', 'Muslim', '2017-06-10', '65', 'Married', 'O', 'ahmedoilk@kjn.com', '0164984998498', '012232312', '85', 'address1', '251 omar bn 5tab 2', '38', '41520', '38', '121', '', '194', '169', '64', '2017-06-14', '', '41520123', '', 'approve', '', 'ahmed ayman aziz', '', ''),
(123, '562', '5421', '54', 'male', 'Muslim', '2017-06-23', '454', '', '', '45@etryj.fgh', '45', '45', '45', 'p;', 'l;', '', '6', '37', '', '', '194', '169', '', '2017-06-02', '', '123', '', 'approve', '', '', '', ''),
(124, 'amira', 'ash2r', 'ahmed', 'femail', 'mared', '02/02/2001', 'jnjnj', 'njnjn', 'n', 'ahmed@ahmed.com', '15', '25', '25', 'km', 'km km', '', '66', '', '', '', '', '', '', '2001-20-02', '', '66123', '', '', '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pay_grou_valu`
--
ALTER TABLE `pay_grou_valu`
  ADD CONSTRAINT `pay_grou_valu_ibfk_1` FOREIGN KEY (`id_payroll_groups`) REFERENCES `payroll_groups` (`id_payroll_groups`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pay_grou_valu_ibfk_2` FOREIGN KEY (`id_payroll_value`) REFERENCES `payroll_value` (`id_payroll_value`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_cat_dep`
--
ALTER TABLE `pr_cat_dep`
  ADD CONSTRAINT `pr_cat_dep_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pr_cat_dep_ibfk_2` FOREIGN KEY (`id_departments`) REFERENCES `departments` (`id_departments`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_dep_pos`
--
ALTER TABLE `pr_dep_pos`
  ADD CONSTRAINT `pr_dep_pos_ibfk_1` FOREIGN KEY (`id_departments`) REFERENCES `departments` (`id_departments`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pr_dep_pos_ibfk_2` FOREIGN KEY (`id_positions`) REFERENCES `positions` (`id_positions`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_user_insurance`
--
ALTER TABLE `pr_user_insurance`
  ADD CONSTRAINT `pr_user_insurance_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_user_languages`
--
ALTER TABLE `pr_user_languages`
  ADD CONSTRAINT `pr_user_languages_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_user_licenes`
--
ALTER TABLE `pr_user_licenes`
  ADD CONSTRAINT `pr_user_licenes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_user_skills`
--
ALTER TABLE `pr_user_skills`
  ADD CONSTRAINT `pr_user_skills_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pr_user_tax`
--
ALTER TABLE `pr_user_tax`
  ADD CONSTRAINT `pr_user_tax_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
