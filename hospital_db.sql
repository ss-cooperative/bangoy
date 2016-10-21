-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2016 at 03:42 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
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
('p0015', '11221', '222', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 1);

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
-- Indexes for table `gecal_drugs`
--
ALTER TABLE `gecal_drugs`
  ADD PRIMARY KEY (`gc_id`),
  ADD UNIQUE KEY `m_id` (`m_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

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
-- AUTO_INCREMENT for table `gecal_drugs`
--
ALTER TABLE `gecal_drugs`
  MODIFY `gc_id` int(6) NOT NULL AUTO_INCREMENT;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
