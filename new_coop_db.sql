-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 12:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_coop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `p_id` varchar(8) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `app_reason` varchar(200) NOT NULL,
  `app_status` int(1) NOT NULL,
  `t_no` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ข้อมูลการนัดหมาย';

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `p_id`, `app_date`, `app_time`, `app_reason`, `app_status`, `t_no`, `user_id`) VALUES
(16, 'p0004', '0000-00-00', '00:00:00', '', 0, 42, 1),
(45, 'p0002', '2016-11-10', '10:20:00', '', 1, 46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_data`
--

CREATE TABLE `book_data` (
  `bookac_no` varchar(15) NOT NULL,
  `account_no` varchar(15) DEFAULT NULL,
  `book_type` varchar(2) DEFAULT NULL,
  `deposit` double NOT NULL,
  `stock` int(11) NOT NULL,
  `sum_stock` int(11) NOT NULL,
  `status_active` varchar(1) NOT NULL,
  `book_link` int(4) NOT NULL,
  `date_register` date NOT NULL,
  `officer` text NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `book_type` varchar(2) NOT NULL,
  `section` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`book_type`, `section`, `category`, `description`) VALUES
('FI', 0, 0, 'บัญชีฝากประจำ'),
('SA', 0, 0, 'บัญชีออมทรัพย์'),
('ST', 0, 0, 'บัญชีหุ้น');

-- --------------------------------------------------------

--
-- Table structure for table `config_category`
--

CREATE TABLE `config_category` (
  `category_id` varchar(11) NOT NULL,
  `description` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config_category`
--

INSERT INTO `config_category` (`category_id`, `description`) VALUES
('01', 'System'),
('02', 'Deposit'),
('03', 'Fee'),
('04', 'Stock'),
('05', 'interest');

-- --------------------------------------------------------

--
-- Table structure for table `config_value`
--

CREATE TABLE `config_value` (
  `id` int(11) NOT NULL,
  `category` varchar(20) CHARACTER SET utf8 NOT NULL,
  `section` varchar(20) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `value` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config_value`
--

INSERT INTO `config_value` (`id`, `category`, `section`, `description`, `value`) VALUES
(1, '01', '01', 'Address Cooperative', '89/1 ซ.รัชดาภิเษก ถ.ราชปรารภ แขวงมักกะสัน เขตราชเทวี กทม 10400 ประเทศไทย'),
(2, '01', '02', 'phone Cooperative', '023333333'),
(3, '03', '01', 'Stock Fee', '50.00'),
(4, '04', '01', 'Stock Unit Price', '10.00'),
(5, '04', '02', 'Stock Unit First', '10'),
(6, '01', '00', 'Name Cooperative', 'สหกรณ์ออมทรัพย์ SSUP Group'),
(7, '01', '03', 'เลขที่สหกรณ์', '00000000000'),
(8, '05', '01', 'วันที่คิดดอกเบี้ย', '30/06'),
(9, '05', '01', 'วันที่คิดดอกเบี้ย', '31/12');

-- --------------------------------------------------------

--
-- Table structure for table `estate`
--

CREATE TABLE `estate` (
  `loan_agreement_id` varchar(15) NOT NULL,
  `type` enum('land','real_estate') NOT NULL,
  `value` double NOT NULL,
  `doc_deed` varchar(100) NOT NULL,
  `financial_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gecal_drugs`
--

CREATE TABLE `gecal_drugs` (
  `gc_id` int(6) NOT NULL,
  `m_id` int(11) NOT NULL,
  `gc_amount` varchar(255) NOT NULL,
  `gc_date` varchar(15) NOT NULL,
  `gc_because` varchar(255) NOT NULL,
  `s_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='การตัดสตอก';

-- --------------------------------------------------------

--
-- Table structure for table `guarantee`
--

CREATE TABLE `guarantee` (
  `id` int(5) NOT NULL,
  `loan_agreement_id` varchar(15) NOT NULL,
  `type` enum('stock','saving') NOT NULL,
  `bookac_no` varchar(15) NOT NULL,
  `financial_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guarantee`
--

INSERT INTO `guarantee` (`id`, `loan_agreement_id`, `type`, `bookac_no`, `financial_amount`) VALUES
(1, 'L00001', 'saving', 'SA00001', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `interest_rate`
--

CREATE TABLE `interest_rate` (
  `id` int(11) NOT NULL,
  `book_type` text NOT NULL,
  `percent_rate` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest_rate`
--

INSERT INTO `interest_rate` (`id`, `book_type`, `percent_rate`, `start_date`, `end_date`) VALUES
(1, 'SA', 4, '2017-08-01 00:00:00', '2017-12-31 23:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `l_id` int(11) NOT NULL,
  `l_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ระดับผู้ใช้';

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`l_id`, `l_title`) VALUES
(1, 'ผู้ดูแลระบบ'),
(2, 'ผู้บริหาร'),
(3, 'แพทธ์'),
(4, 'เจ้าหน้าที่สาธารณสุข');

-- --------------------------------------------------------

--
-- Table structure for table `loan_agreement`
--

CREATE TABLE `loan_agreement` (
  `account_no` varchar(15) NOT NULL,
  `loan_agreement_id` varchar(15) NOT NULL,
  `loan_type` varchar(2) NOT NULL,
  `guarantee_type` enum('1','2') NOT NULL,
  `interest_rate` double NOT NULL,
  `amount_period` double NOT NULL,
  `no_period` int(11) NOT NULL,
  `term_payment_id` int(2) NOT NULL,
  `status_active` int(11) NOT NULL,
  `officer` varchar(100) NOT NULL,
  `date_register` date NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_agreement`
--

INSERT INTO `loan_agreement` (`account_no`, `loan_agreement_id`, `loan_type`, `guarantee_type`, `interest_rate`, `amount_period`, `no_period`, `term_payment_id`, `status_active`, `officer`, `date_register`, `date_stamp`) VALUES
('201700001', 'L00001', '01', '2', 4, 6000, 12, 2, 1, 'Sira', '2017-05-02', '2017-05-02 08:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(8) NOT NULL,
  `m_name` varchar(150) NOT NULL,
  `m_volome` varchar(4) NOT NULL,
  `m_type` varchar(50) NOT NULL,
  `m_unit` varchar(50) NOT NULL,
  `m_per_unit` varchar(5) NOT NULL,
  `m_amount` varchar(10) NOT NULL,
  `m_price` varchar(8) NOT NULL,
  `m_stock` varchar(5) NOT NULL,
  `m_detail` varchar(255) NOT NULL,
  `m_exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ยา-เวชภัณฑ์';

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_volome`, `m_type`, `m_unit`, `m_per_unit`, `m_amount`, `m_price`, `m_stock`, `m_detail`, `m_exp`) VALUES
(1, 'พารา', '100', '22', '33', '44', '100', '101', '221', '331', '2016-08-01'),
(2, 'ยาแก้ไข', '', '', '', '', '2', '20', '', '', '2016-07-22'),
(3, 's111', '', '', '', '', '', '', '', '', '0000-00-00'),
(4, 'ยาแก้ท้องพุ', '', '2', '3', '4', '200', '5', '6', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `account_no` varchar(15) NOT NULL,
  `Employee_no` varchar(15) NOT NULL,
  `title` text NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `id_card` varchar(13) NOT NULL,
  `birthday` date NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `phone_officer` varchar(20) NOT NULL,
  `company` text NOT NULL,
  `department` text NOT NULL,
  `position` text NOT NULL,
  `job_level` text NOT NULL,
  `officer` text NOT NULL,
  `date_regis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`account_no`, `Employee_no`, `title`, `name`, `lastname`, `id_card`, `birthday`, `phone_number`, `phone_officer`, `company`, `department`, `position`, `job_level`, `officer`, `date_regis`) VALUES
('123', 'กกก', '1', 'คิดถึง', 'วันไหน', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('201700001', 'A00001', 'Mr.', 'สมชัย', 'สีจัง', '888', '2017-08-05', '66', '4887-5', '55', '', '44', '66', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(8) NOT NULL,
  `order_date` varchar(15) NOT NULL,
  `m_id` int(11) NOT NULL,
  `order_amount` varchar(255) NOT NULL,
  `agent` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='การสั่งยา-เวชภัณฑ์';

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` varchar(8) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_surname` varchar(50) NOT NULL,
  `p_nid` varchar(13) NOT NULL,
  `p_birthday` varchar(15) NOT NULL,
  `p_age` int(3) NOT NULL,
  `p_national` varchar(30) NOT NULL,
  `p_sex` varchar(2) NOT NULL,
  `p_status` varchar(10) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_tel` varchar(10) NOT NULL,
  `p_wieght` float NOT NULL,
  `p_hight` float NOT NULL,
  `disease` varchar(100) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `allergic` varchar(100) NOT NULL,
  `delegate` varchar(100) NOT NULL,
  `delegate_tel` varchar(10) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `pv_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ข้อมูลผู้ป่วย';

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_surname`, `p_nid`, `p_birthday`, `p_age`, `p_national`, `p_sex`, `p_status`, `p_address`, `p_tel`, `p_wieght`, `p_hight`, `disease`, `blood`, `allergic`, `delegate`, `delegate_tel`, `relationship`, `pv_id`) VALUES
('p0000001', 'หมัด11', 'ศูนย์22', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 1),
('p0002', 'กรกมล', 'มณีนวล', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 1),
('p0003', 'อาฮาหมัด ', 'เจ๊ะดือราแม', '', '', 15, '', 'm', '1', '24/5', '083573', 80, 180, '', '', '', '', '', '', 2),
('p0004', 'สูนีตา', 'ยาบี', '123', '1', 33, '2', 'm', '1', '3', '4', 5, 6, '7', '8', '9', '10', '11', '12', 1),
('p0005', 'กก', 'กหห', '123', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 1),
('p0006', 'กก1', 'กหห', 'หกดห', 'หกด', 0, 'ำด', '', '', '', '', 0, 0, '', '', '', '', '', '', 2),
('p0007', 'กก1', 'กหห', 'หกดห', 'หกด', 0, 'ำด', '', '', '', '', 0, 0, '', '', '', '', '', '', 2),
('p0008', 'กก1', 'กหห', 'หกดห', 'หกด', 0, 'ำด', '', '', '', '', 0, 0, '', '', '', '', '', '', 2),
('p0009', 'กก1', 'กหห', 'หกดห', 'หกด', 0, 'ำด', '', '', '', '', 0, 0, '', '', '', '', '', '', 2),
('p0010', 'กกหกดๅๅๅ', 'กหหกดหกด', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', NULL),
('p0012', 'กกๅ1111', 'กหห222', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', NULL),
('p0013', 'กก555', '55555', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', NULL),
('p0014', 'กก555', '55555', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', NULL),
('p0015', '11221', '222', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 1),
('p0016', '', '', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paymedicine`
--

CREATE TABLE `paymedicine` (
  `pay_id` int(10) NOT NULL,
  `t_no` int(11) NOT NULL,
  `pay_date` datetime NOT NULL,
  `m_id` int(11) NOT NULL,
  `pay_amount` varchar(255) NOT NULL,
  `pm_price` varchar(255) NOT NULL,
  `pay_status` int(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='การจ่ายยา-เวชภัณฑ์';

--
-- Dumping data for table `paymedicine`
--

INSERT INTO `paymedicine` (`pay_id`, `t_no`, `pay_date`, `m_id`, `pay_amount`, `pm_price`, `pay_status`, `user_id`) VALUES
(126, 45, '0000-00-00 00:00:00', 2, '10', '', 1, 1),
(132, 46, '0000-00-00 00:00:00', 2, '10', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `pv_id` int(3) NOT NULL,
  `pv_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pv_detail` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='สิทธิการรักษา';

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`pv_id`, `pv_name`, `pv_detail`) VALUES
(1, 'จ่ายตรง', ''),
(2, 'เบิกได้', ''),
(3, 'บัตรทอง', '');

-- --------------------------------------------------------

--
-- Table structure for table `qqq`
--

CREATE TABLE `qqq` (
  `qid` int(10) NOT NULL,
  `qname` varchar(100) NOT NULL,
  `qsurname` varchar(100) NOT NULL,
  `qstatus` varchar(1) NOT NULL,
  `qdate` datetime NOT NULL,
  `p_id` varchar(8) DEFAULT NULL,
  `qno` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เข้าคิว';

--
-- Dumping data for table `qqq`
--

INSERT INTO `qqq` (`qid`, `qname`, `qsurname`, `qstatus`, `qdate`, `p_id`, `qno`) VALUES
(43, '', '', '3', '2016-07-30 19:06:10', 'p0004', 1),
(44, '', '', '3', '2016-07-31 14:08:08', 'p0002', 1),
(45, '', '', '1', '2016-07-31 14:45:44', 'p0003', 2),
(46, '', '', '1', '2016-07-31 14:46:05', 'p0005', 3),
(47, '', '', '1', '2016-07-31 14:46:54', 'p0006', 4),
(48, '', '', '1', '2016-07-31 14:47:05', 'p0007', 5),
(53, '', '', '1', '2016-07-31 15:08:13', 'p0004', 9),
(54, '', '', '3', '2016-08-01 17:01:39', 'p0002', 1),
(55, '', '', '3', '2016-08-04 13:51:56', 'p0002', 1),
(56, '', '', '3', '2016-08-04 15:51:13', 'p0002', 2);

-- --------------------------------------------------------

--
-- Table structure for table `receive`
--

CREATE TABLE `receive` (
  `order_no` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `receive_date` varchar(15) NOT NULL,
  `receive_amount` varchar(255) NOT NULL,
  `rec_not` varchar(255) NOT NULL,
  `rec_status` varchar(1) NOT NULL,
  `s_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='รายละเอียดสั่งยา';

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `su_no` int(8) NOT NULL,
  `t_no` int(11) NOT NULL,
  `p_id` varchar(8) NOT NULL,
  `s_id` varchar(5) NOT NULL,
  `su_date` varchar(15) NOT NULL,
  `su_reason` varchar(255) NOT NULL,
  `su_address` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='การส่งตัว';

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(5) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_surname` varchar(50) NOT NULL,
  `s_nid` varchar(13) NOT NULL,
  `s_sex` varchar(6) NOT NULL,
  `s_position` varchar(50) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `s_education` varchar(255) NOT NULL,
  `s_experience` varchar(255) NOT NULL,
  `s_tel` varchar(10) NOT NULL,
  `s_pic` varchar(20) NOT NULL,
  `s_per` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `term_payment`
--

CREATE TABLE `term_payment` (
  `id` int(2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_payment`
--

INSERT INTO `term_payment` (`id`, `description`) VALUES
(1, 'เงินต้นเท่า'),
(2, 'เงินต้น+ดอกเบี้ยเท่า');

-- --------------------------------------------------------

--
-- Table structure for table `transactions_fix`
--

CREATE TABLE `transactions_fix` (
  `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `bookac_no` varchar(15) NOT NULL,
  `tran_type` text NOT NULL,
  `period` text NOT NULL,
  `amount` double NOT NULL,
  `status_active` varchar(1) NOT NULL,
  `officer` text NOT NULL,
  `date_tran` date NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_incoming`
--

CREATE TABLE `transactions_incoming` (
  `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `bookac_no` varchar(15) NOT NULL,
  `tran_type` text NOT NULL,
  `period` text NOT NULL,
  `amount` double NOT NULL,
  `status_active` varchar(1) NOT NULL,
  `officer` text NOT NULL,
  `date_tran` date NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_other_expenses`
--

CREATE TABLE `transactions_other_expenses` (
  `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `bookac_no` varchar(15) NOT NULL,
  `tran_type` text NOT NULL,
  `period` text NOT NULL,
  `amount` double NOT NULL,
  `status_active` varchar(1) NOT NULL,
  `officer` text NOT NULL,
  `date_tran` date NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_personal_loans`
--

CREATE TABLE `transactions_personal_loans` (
  `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `loan_agreement_id` varchar(15) NOT NULL,
  `period` text NOT NULL,
  `amount` double NOT NULL,
  `bring_forward` double NOT NULL,
  `carry_forward` double NOT NULL,
  `interest` double NOT NULL,
  `status_active` varchar(1) NOT NULL,
  `officer` text NOT NULL,
  `date_tran` date NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions_personal_loans`
--

INSERT INTO `transactions_personal_loans` (`tran_no`, `account_no`, `loan_agreement_id`, `period`, `amount`, `bring_forward`, `carry_forward`, `interest`, `status_active`, `officer`, `date_tran`, `date_stamp`) VALUES
(0000001, '201700001', 'L00001', '06/2017', 5682.19, 100000, 94317.81, 317.81, '1', 'Sira', '2017-06-02', '2017-06-02 09:30:21'),
(0000002, '201700001', 'L00001', '07/2017', 5700.25, 94317.81, 88617.56, 299.75, '1', 'Sira', '2017-07-02', '2017-07-02 06:36:32'),
(0000003, '201700001', 'L00001', '08/2017', 5708.65, 88617.56, 88617.56, 291.35, '1', 'Sira', '2017-08-02', '2017-08-02 11:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `transactions_saving`
--

CREATE TABLE `transactions_saving` (
  `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `bookac_no` varchar(15) NOT NULL,
  `tran_type` varchar(10) NOT NULL,
  `period` text NOT NULL,
  `amount` double NOT NULL,
  `bring_forward` double NOT NULL,
  `carry_forward` double NOT NULL,
  `status_active` varchar(1) NOT NULL,
  `officer` text NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_stock`
--

CREATE TABLE `transactions_stock` (
  `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `bookac_no` varchar(15) NOT NULL,
  `tran_type` text NOT NULL,
  `period` text NOT NULL,
  `unit_stock` int(11) NOT NULL,
  `amount` double NOT NULL,
  `status_active` varchar(1) NOT NULL,
  `officer` text NOT NULL,
  `date_tran` date NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `treat`
--

CREATE TABLE `treat` (
  `t_no` int(11) NOT NULL,
  `p_id` varchar(8) NOT NULL,
  `t_date` datetime NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `pressure` varchar(10) NOT NULL,
  `temp` varchar(5) NOT NULL,
  `pulse` varchar(5) NOT NULL,
  `breathe` varchar(5) NOT NULL,
  `resultjude` text NOT NULL,
  `s_id` varchar(5) NOT NULL,
  `t_hight` varchar(5) NOT NULL,
  `t_wieght` varchar(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='การรักษาพยาบาล';

--
-- Dumping data for table `treat`
--

INSERT INTO `treat` (`t_no`, `p_id`, `t_date`, `symptom`, `pressure`, `temp`, `pulse`, `breathe`, `resultjude`, `s_id`, `t_hight`, `t_wieght`, `user_id`) VALUES
(42, 'p0004', '2016-07-30 19:06:31', 'ปวดหัว', '10', '10', '', '', '', '', '150', '80', 1),
(43, 'p0002', '2016-07-31 14:09:36', 'ไม่สบาย', '34', '10', '', '', 'ไข้เลือกออก', '', '20', '10', 1),
(44, 'p0002', '2016-08-01 17:02:37', 'ปวดท้อง', '', '', '', '', '', '', '20', '10', 1),
(45, 'p0002', '2016-08-04 13:52:11', '20', '30', '40', '', '', 'หกดหกดหกด', '', '20', '10', 1),
(46, 'p0002', '2016-08-04 16:04:56', '02', '20', '20', '', '', '', '', '20', '20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `displayname` varchar(50) NOT NULL,
  `level_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ผู้ใช้ระบบ';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `displayname`, `level_id`) VALUES
(1, 'admin', 'admin', 'Admin', NULL),
(2, '135668011', 'ying', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD UNIQUE KEY `p_id` (`p_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `t_no` (`t_no`);

--
-- Indexes for table `book_data`
--
ALTER TABLE `book_data`
  ADD PRIMARY KEY (`bookac_no`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`book_type`);

--
-- Indexes for table `config_category`
--
ALTER TABLE `config_category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `config_value`
--
ALTER TABLE `config_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gecal_drugs`
--
ALTER TABLE `gecal_drugs`
  ADD PRIMARY KEY (`gc_id`),
  ADD UNIQUE KEY `m_id` (`m_id`);

--
-- Indexes for table `guarantee`
--
ALTER TABLE `guarantee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_rate`
--
ALTER TABLE `interest_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `loan_agreement`
--
ALTER TABLE `loan_agreement`
  ADD PRIMARY KEY (`loan_agreement_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`account_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD UNIQUE KEY `m_id` (`m_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `patient_ibfk_1` (`pv_id`);

--
-- Indexes for table `paymedicine`
--
ALTER TABLE `paymedicine`
  ADD PRIMARY KEY (`pay_id`),
  ADD UNIQUE KEY `t_no` (`t_no`,`m_id`,`user_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`pv_id`);

--
-- Indexes for table `qqq`
--
ALTER TABLE `qqq`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `qqq_ibfk_1` (`p_id`);

--
-- Indexes for table `receive`
--
ALTER TABLE `receive`
  ADD PRIMARY KEY (`order_no`,`m_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`su_no`),
  ADD UNIQUE KEY `t_no` (`t_no`,`p_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `term_payment`
--
ALTER TABLE `term_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions_fix`
--
ALTER TABLE `transactions_fix`
  ADD PRIMARY KEY (`tran_no`);

--
-- Indexes for table `transactions_incoming`
--
ALTER TABLE `transactions_incoming`
  ADD PRIMARY KEY (`tran_no`);

--
-- Indexes for table `transactions_other_expenses`
--
ALTER TABLE `transactions_other_expenses`
  ADD PRIMARY KEY (`tran_no`);

--
-- Indexes for table `transactions_personal_loans`
--
ALTER TABLE `transactions_personal_loans`
  ADD PRIMARY KEY (`tran_no`);

--
-- Indexes for table `transactions_saving`
--
ALTER TABLE `transactions_saving`
  ADD PRIMARY KEY (`tran_no`);

--
-- Indexes for table `transactions_stock`
--
ALTER TABLE `transactions_stock`
  ADD PRIMARY KEY (`tran_no`);

--
-- Indexes for table `treat`
--
ALTER TABLE `treat`
  ADD PRIMARY KEY (`t_no`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `config_value`
--
ALTER TABLE `config_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gecal_drugs`
--
ALTER TABLE `gecal_drugs`
  MODIFY `gc_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guarantee`
--
ALTER TABLE `guarantee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `interest_rate`
--
ALTER TABLE `interest_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paymedicine`
--
ALTER TABLE `paymedicine`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `pv_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qqq`
--
ALTER TABLE `qqq`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `su_no` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions_fix`
--
ALTER TABLE `transactions_fix`
  MODIFY `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions_incoming`
--
ALTER TABLE `transactions_incoming`
  MODIFY `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `transactions_other_expenses`
--
ALTER TABLE `transactions_other_expenses`
  MODIFY `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions_personal_loans`
--
ALTER TABLE `transactions_personal_loans`
  MODIFY `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transactions_saving`
--
ALTER TABLE `transactions_saving`
  MODIFY `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `transactions_stock`
--
ALTER TABLE `transactions_stock`
  MODIFY `tran_no` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `treat`
--
ALTER TABLE `treat`
  MODIFY `t_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`t_no`) REFERENCES `treat` (`t_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gecal_drugs`
--
ALTER TABLE `gecal_drugs`
  ADD CONSTRAINT `gecal_drugs_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `medicine` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `medicine` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`pv_id`) REFERENCES `privilege` (`pv_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `paymedicine`
--
ALTER TABLE `paymedicine`
  ADD CONSTRAINT `paymedicine_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `medicine` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paymedicine_ibfk_3` FOREIGN KEY (`t_no`) REFERENCES `treat` (`t_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qqq`
--
ALTER TABLE `qqq`
  ADD CONSTRAINT `qqq_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receive`
--
ALTER TABLE `receive`
  ADD CONSTRAINT `receive_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `orders` (`order_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receive_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `medicine` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `send`
--
ALTER TABLE `send`
  ADD CONSTRAINT `send_ibfk_1` FOREIGN KEY (`t_no`) REFERENCES `treat` (`t_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treat`
--
ALTER TABLE `treat`
  ADD CONSTRAINT `treat_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`l_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
