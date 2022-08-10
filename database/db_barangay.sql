-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2022 at 07:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_blotter_add` (IN `dateRecorded` DATE, IN `complainant` TEXT, IN `cage` INT(11), IN `caddress` TEXT, IN `ccontact` INT(11), IN `personToComplain` TEXT, IN `page` INT(11), IN `paddress` TEXT, IN `pcontact` INT(11), IN `complaint` TEXT, IN `actionTaken` VARCHAR(50), IN `sStatus` VARCHAR(50), IN `locationOfIncidence` TEXT, IN `recordedby` VARCHAR(50))  INSERT INTO blotter 
(dateRecorded, complainant, cage, caddress,  ccontact, personToComplain,page, paddress, pcontact, complaint, actionTaken, sStatus, locationOfIncidence, recordedby) 
VALUES 
(dateRecorded,complainant, cage, caddress,  ccontact, personToComplain,page, paddress, pcontact, complaint, actionTaken, sStatus, locationOfIncidence, recordedby)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_blotter_update` (IN `complainant` TEXT, IN `cage` INT(11), IN `caddress` TEXT, IN `personToComplain` TEXT, IN `page` INT(11), IN `paddress` TEXT, IN `pcontact` INT(11), IN `complaint` TEXT, IN `actionTaken` VARCHAR(50), IN `sStatus` VARCHAR(50), IN `locationOfIncidence` TEXT, IN `bid` INT(11))  UPDATE blotter set 
complainant = complainant, 
cage = cage , 
caddress = caddress , 
personToComplain = personToComplain, 
page = page, 
paddress = paddress , 
pcontact = pcontact, 
complaint = complaint, 
actionTaken = actionTaken, 
sStatus = sStatus, 
locationOfIncidence = locationOfIncidence   
where bid = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_clearance_add` (IN `clearanceNo` INT(11), IN `residentid` INT(11), IN `findings` TEXT, IN `purpose` TEXT, IN `samount` INT(11), IN `dateRecorded` DATE, IN `recordedBy` VARCHAR(50), IN `status` VARCHAR(20))  INSERT INTO clearance 
(clearanceNo, residentid, findings, purpose, samount, dateRecorded, recordedBy, status) 
values 
(clearanceNo, residentid, findings, purpose, samount, dateRecorded, recordedBy, status)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_clearance_update` (IN `id` INT, IN `clearanceNo` INT, IN `findings` INT, IN `samount` INT, IN `status` INT)  UPDATE clearance set 
clearanceNo = clearanceNo, findings = findings, samount = samount, status = status where id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_official_add` (IN `sPosition` VARCHAR(50), IN `completeName` TEXT, IN `pcontact` VARCHAR(20), IN `paddress` TEXT, IN `termStart` DATE, IN `termEnd` DATE, IN `status` VARCHAR(20))  INSERT INTO official 
(sPosition, completeName, 
 pcontact, paddress, 
 termStart, termEnd, status) 
VALUES
(sPosition, completeName, 
 pcontact, paddress, 
 termStart, termEnd, status)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_official_update` (IN `completeName` TEXT, IN `pcontact` VARCHAR(20), IN `paddress` TEXT, IN `termStart` DATE, IN `termEnd` DATE, IN `id` INT(11))  UPDATE official set 
completeName = completeName , 
pcontact = pcontact,
paddress = paddress, 
termStart = termStart, 
termEnd = termEnd  
where id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_permit_add` (IN `residentid` INT(11), IN `businessName` TEXT, IN `businessAddress` TEXT, IN `typeOfBusiness` VARCHAR(50), IN `samount` INT(11), IN `dateRecorded` DATE, IN `recordedBy` VARCHAR(20), IN `status` VARCHAR(20))  INSERT INTO permit (residentid, businessName, businessAddress, typeOfBusiness, samount, dateRecorded, recordedBy, status) 
VALUES (residentid, businessName, businessAddress, typeOfBusiness, samount, dateRecorded, recordedBy, status)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_permit_update` (IN `businessName` TEXT, IN `businessAddress` TEXT, IN `typeOfBusiness` VARCHAR(50), IN `samount` INT(11), IN `id` INT(11))  UPDATE permit set businessName = businessName, businessAddress = businessAddress, typeOfBusiness= typeOfBusiness, samount = samount  where id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_resident_add` (IN `lname` VARCHAR(20), IN `fname` VARCHAR(20), IN `mname` VARCHAR(20), IN `bdate` DATE, IN `bplace` TEXT, IN `age` INT(11), IN `barangay` VARCHAR(120), IN `zone` VARCHAR(5), IN `differentlyabledperson` VARCHAR(100), IN `bloodtype` VARCHAR(10), IN `civilstatus` VARCHAR(20), IN `occupation` VARCHAR(100), IN `lengthofstay` INT(11), IN `religion` VARCHAR(50), IN `nationality` VARCHAR(50), IN `gender` VARCHAR(6), IN `phoneNo` INT(11), IN `highestEducationalAttainment` VARCHAR(50), IN `houseOwnershipStatus` VARCHAR(50), IN `houseNoStreet` TEXT, IN `image` TEXT, IN `username` VARCHAR(50), IN `password` VARCHAR(50))  INSERT INTO `resident` (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `age`, `barangay`, `zone`, `differentlyabledperson`, `bloodtype`, `civilstatus`, `occupation`, `lengthofstay`, `religion`, `nationality`, `gender`, `phoneNo`, `highestEducationalAttainment`, `houseOwnershipStatus`, `houseNoStreet`, `image`, `username`, `password`) VALUES (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `age`, `barangay`, `zone`, `differentlyabledperson`, `bloodtype`, `civilstatus`, `occupation`, `lengthofstay`, `religion`, `nationality`, `gender`, `phoneNo`, `highestEducationalAttainment`, `houseOwnershipStatus`, `houseNoStreet`, `image`, `username`, 'password')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_resident_update` (IN `lname` VARCHAR(20), IN `fname` VARCHAR(20), IN `mname` VARCHAR(20), IN `bdate` DATE, IN `bplace` TEXT, IN `age` INT(11), IN `barangay` VARCHAR(120), IN `zone` VARCHAR(5), IN `differentlyabledperson` INT(100), IN `bloodtype` VARCHAR(10), IN `civilstatus` VARCHAR(20), IN `occupation` VARCHAR(100), IN `lengthofstay` INT(11), IN `religion` VARCHAR(50), IN `nationality` VARCHAR(50), IN `gender` VARCHAR(6), IN `phoneNo` INT(11), IN `highestEducationalAttainment` VARCHAR(50), IN `houseOwnershipStatus` VARCHAR(50), IN `houseNoStreet` TEXT, IN `image` TEXT, IN `username` VARCHAR(50), IN `password` VARCHAR(50), IN `id` INT(11))  UPDATE resident set  lname = lname, fname =  fname,
mname = mname, bdate = bdate, bplace = bplace, age = age, barangay = barangay, zone = zone, differentlyabledperson = differentlyabledperson, bloodtype = bloodtype,
civilstatus = civilstatus, occupation = occupation, lengthofstay = lengthofstay, religion = religion, nationality = nationality, gender = gender, phoneNo = phoneNo, highestEducationalAttainment = highestEducationalAttainment,  houseOwnershipStatus =  houseOwnershipStatus, houseNoStreet = houseNoStreet,  image = image, username = username ,  password = password
where id = id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `page` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `actionTaken` varchar(50) NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `blotter_view`
-- (See below for the actual view)
--
CREATE TABLE `blotter_view` (
`rid` int(11)
,`bid` int(11)
,`rname` varchar(63)
,`dateRecorded` date
,`complainant` text
,`complaint` text
,`actionTaken` varchar(50)
,`sStatus` varchar(50)
,`locationOfIncidence` text
);

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `clearance_approved_view`
-- (See below for the actual view)
--
CREATE TABLE `clearance_approved_view` (
`clearanceNo` int(11)
,`findings` text
,`purpose` text
,`status` varchar(20)
,`residentname` varchar(63)
,`pid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `clearance_disapproved_view`
-- (See below for the actual view)
--
CREATE TABLE `clearance_disapproved_view` (
`findings` text
,`purpose` text
,`status` varchar(20)
,`residentname` varchar(63)
,`pid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `clearance_new_view`
-- (See below for the actual view)
--
CREATE TABLE `clearance_new_view` (
`purpose` text
,`rid` int(11)
,`residentname` varchar(63)
,`pid` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `logdate`, `action`) VALUES
(193, 'Administrator', '2022-03-11 20:59:39', 'Added Resident named Rosario, Cristina Dafne'),
(194, 'Administrator', '2022-03-11 21:31:54', 'Added Official named Garcia, Restituto Lopez'),
(195, 'Administrator', '2022-03-11 21:58:32', 'Update Resident named Rosario, Cristina Dafne'),
(196, 'Administrator', '2022-03-11 22:01:11', 'Added Resident named Gonzales, Mark Perez'),
(197, 'Administrator', '2022-03-11 23:58:41', 'Added Permit with business name of ABCDEFG sari sari store'),
(198, 'Administrator', '2022-03-12 00:15:54', 'Added Clearance with clearance number of '),
(199, 'Administrator', '2022-03-12 00:28:40', 'Added Clearance with clearance number of '),
(200, 'Administrator', '2022-03-12 00:29:48', 'Added Clearance with clearance number of '),
(201, 'Administrator', '2022-03-12 00:34:10', 'Added Clearance with clearance number of 10001'),
(202, 'Administrator', '2022-03-12 00:54:52', 'Added Blotter Request by Gonzales, Mark Perez'),
(203, 'Administrator', '2022-03-12 01:20:02', 'Update Blotter Request by Gonzales, Mark Perez'),
(204, 'Administrator', '2022-03-12 01:27:08', 'Added Blotter Request by Rosario, Cristina Dafne'),
(205, 'Administrator', '2022-03-12 01:40:41', 'Added Resident named Reyes, Mario Salvador'),
(206, 'Administrator', '2022-03-12 01:40:58', 'Added Resident named Reyes, Mario Salvador'),
(207, 'Administrator', '2022-03-12 01:41:47', 'Added Resident named Reyes, Mario Salvador'),
(208, 'Administrator', '2022-03-12 01:42:39', 'Added Resident named Reyes, Mario Salvador'),
(209, 'Administrator', '2022-03-12 01:44:16', 'Added Resident named Hilarious, John Perez'),
(210, 'Administrator', '2022-03-12 01:45:01', 'Added Resident named Hilarious, John Perez'),
(211, 'Administrator', '2022-03-12 01:48:33', 'Added Resident named Tolentino, Marlon Marasigan'),
(212, 'Administrator', '2022-03-12 01:53:30', 'Update Resident named Hilarious, John Perez'),
(213, 'Administrator', '2022-03-12 01:53:37', 'Update Resident named Hilarious, John Perez'),
(214, 'Administrator', '2022-03-12 01:56:33', 'Update Resident named Hilarious, John Perez'),
(215, 'Administrator', '2022-03-12 02:01:28', 'Update Resident named Hilarious, John Perez'),
(216, 'Administrator', '2022-03-12 02:01:49', 'Update Resident named Hilarious, John Perez'),
(217, 'Administrator', '2022-03-12 02:02:24', 'Update Resident named Hilarious, John Perez'),
(218, 'Administrator', '2022-03-12 02:05:16', 'Update Resident named Hilarious, John Perez'),
(219, 'Administrator', '2022-03-12 02:06:23', 'Update Resident named Tolentino, Marlon Marasigan'),
(220, 'Administrator', '2022-03-12 02:06:49', 'Update Resident named Tolentino, Marlon Marasigan'),
(221, 'Administrator', '2022-03-12 02:07:24', 'Update Resident named Hilarious, John Perez'),
(222, 'Administrator', '2022-03-12 02:07:42', 'Update Resident named Hilarious, John Perez'),
(223, 'Administrator', '2022-03-12 02:09:55', 'Update Resident named Gonzales, Mark Perez'),
(224, 'Administrator', '2022-03-12 02:16:29', 'Added Resident named Gonzaga, Corazon Rosales'),
(225, 'Administrator', '2022-03-12 02:18:55', 'Added Resident named Ang, Cynthia Caballero'),
(226, 'Administrator', '2022-03-12 02:22:37', 'Added Resident named Santos, Mike Ramirez'),
(227, 'Administrator', '2022-03-12 02:25:43', 'Added Official named Rivera, Norman Ramirez'),
(228, 'Administrator', '2022-03-12 02:34:45', 'Update Resident named Ang, Cynthia Caballero'),
(229, 'Administrator', '2022-03-12 02:35:03', 'Update Resident named Ang, Cynthia Caballero'),
(230, 'John', '2022-03-12 02:39:52', 'Update Resident named Hilarious, John Perez'),
(231, 'John', '2022-03-12 02:40:12', 'Update Resident named Hilarious, John Perez'),
(232, 'John', '2022-03-12 02:41:38', 'Update Resident named Hilarious, John Perez'),
(233, 'John', '2022-03-12 02:41:48', 'Update Resident named Hilarious, John Perez'),
(234, 'John', '2022-03-12 02:41:55', 'Update Resident named Hilarious, John Perez'),
(235, 'John', '2022-03-12 02:42:03', 'Update Resident named Hilarious, John Perez'),
(236, 'John', '2022-03-12 02:42:14', 'Update Resident named Hilarious, John Perez'),
(237, 'Administrator', '2022-03-12 02:45:28', 'Update Resident named Hilarious, John Perez');

-- --------------------------------------------------------

--
-- Stand-in structure for view `logs_view`
-- (See below for the actual view)
--
CREATE TABLE `logs_view` (
`id` int(11)
,`user` varchar(50)
,`logdate` datetime
,`action` text
);

-- --------------------------------------------------------

--
-- Table structure for table `official`
--

CREATE TABLE `official` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `official`
--

INSERT INTO `official` (`id`, `sPosition`, `completeName`, `pcontact`, `paddress`, `termStart`, `termEnd`, `status`) VALUES
(16, 'Captain', 'Garcia, Restituto Lopez', '9123699034', '123 Gumamela St', '2021-05-09', '2023-05-09', 'Ongoing Term'),
(17, 'Kagawad(Ordinance)', 'Rivera, Norman Ramirez', '9854726515', '45 Bisig Street', '2021-05-09', '2022-05-09', 'Ongoing Term');

-- --------------------------------------------------------

--
-- Table structure for table `permit`
--

CREATE TABLE `permit` (
  `id` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `permit_view`
-- (See below for the actual view)
--
CREATE TABLE `permit_view` (
`businessName` text
,`businessAddress` text
,`typeOfBusiness` varchar(50)
,`status` varchar(20)
,`residentname` varchar(63)
,`rid` int(11)
,`pid` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `bplace` text NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(120) NOT NULL,
  `zone` varchar(5) NOT NULL,
  `differentlyabledperson` varchar(100) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `lengthofstay` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `highestEducationalAttainment` varchar(50) NOT NULL,
  `houseOwnershipStatus` varchar(50) NOT NULL,
  `houseNoStreet` text NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `age`, `barangay`, `zone`, `differentlyabledperson`, `bloodtype`, `civilstatus`, `occupation`, `lengthofstay`, `religion`, `nationality`, `gender`, `phoneNo`, `highestEducationalAttainment`, `houseOwnershipStatus`, `houseNoStreet`, `image`, `username`, `password`) VALUES
(101, 'Hilarious', 'John', 'Perez', '1996-07-22', 'Makati', 25, 'San Juan', '3', 'Yes', 'A-', 'Married', 'Accountant', 45, 'Iglesia Ni Cristo', 'Filipino', 'Male', 96584254, 'Bachelorâ€™s degree', 'Own Home', '34 Lot 56 Malinis St', '1647021744313_275322255_671786457276341_2597758639080172518_n.jpg', 'jhongKuletz@gmail.com', 'jhong'),
(102, 'Tolentino', 'Marlon', 'Marasigan', '1991-06-11', 'Dumaguete', 30, 'San Juan', '2', 'No', 'B-', 'Single', 'Banker', 17, 'Baptist', 'Filipino', 'Male', 98549826, 'Bachelorâ€™s degree', 'Rent', 'Folgueras Street', '1647021983924_274987501_1038843423652031_7520518050212597780_n.jpg', 'kuaMharlon@gmail.com', 'password'),
(103, 'Gonzaga', 'Corazon', 'Rosales', '1989-06-14', 'Malabon City', 32, 'San Juan', '2', 'No', 'B-', 'Married', 'Engineer', 51, 'Roman Catholic', 'Filipino', 'Female', 985472658, 'Masterâ€™s degree', 'Own Home', '49-L Araneta Subdivision ', '1647022589780_275125550_483294923437600_1739682895822753857_n.jpg', 'rsalesc@gmail.com', 'password'),
(104, 'Ang', 'Cynthia', 'Caballero', '1998-03-11', 'Valenzuela City', 24, 'San Juan', '1', 'No', 'A+', 'Single', 'Singer', 4, 'Roman Catholic', 'Filipino', 'Female', 985422581, 'College, undergrad', 'Rent', 'Block 12 Lot 7 Mango Street', '1647022735954_274832736_1128102924674263_8120939535577375922_n.jpg', 'kwe3n@yahoo.com', 'kween'),
(105, 'Santos', 'Mike', 'Ramirez', '1992-02-07', 'Pasig City', 30, 'San Juan', '1', 'No', 'B-', 'Widowed', 'Management Consultant', 18, 'None', 'Filipino', 'Male', 985774125, 'Vocational', 'Rent', 'F. Roxas Street', '1647022957792_275403009_1003131793968841_1614297501716017987_n.jpg', 'mike_89@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Stand-in structure for view `resident_view`
-- (See below for the actual view)
--
CREATE TABLE `resident_view` (
`zone` varchar(5)
,`id` int(11)
,`cname` varchar(63)
,`age` int(11)
,`gender` varchar(6)
,`houseNoStreet` text
,`image` text
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'administrator');

-- --------------------------------------------------------

--
-- Structure for view `blotter_view`
--
DROP TABLE IF EXISTS `blotter_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `blotter_view`  AS SELECT `r`.`id` AS `rid`, `b`.`id` AS `bid`, concat(`r`.`lname`,', ',`r`.`fname`,' ',`r`.`mname`) AS `rname`, `b`.`dateRecorded` AS `dateRecorded`, `b`.`complainant` AS `complainant`, `b`.`complaint` AS `complaint`, `b`.`actionTaken` AS `actionTaken`, `b`.`sStatus` AS `sStatus`, `b`.`locationOfIncidence` AS `locationOfIncidence` FROM (`blotter` `b` left join `resident` `r` on(`b`.`personToComplain` = `r`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `clearance_approved_view`
--
DROP TABLE IF EXISTS `clearance_approved_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clearance_approved_view`  AS SELECT `p`.`clearanceNo` AS `clearanceNo`, `p`.`findings` AS `findings`, `p`.`purpose` AS `purpose`, `p`.`status` AS `status`, concat(`r`.`lname`,', ',`r`.`fname`,' ',`r`.`mname`) AS `residentname`, `p`.`id` AS `pid` FROM (`clearance` `p` left join `resident` `r` on(`r`.`id` = `p`.`residentid`)) WHERE `p`.`status` = 'Approved' ;

-- --------------------------------------------------------

--
-- Structure for view `clearance_disapproved_view`
--
DROP TABLE IF EXISTS `clearance_disapproved_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clearance_disapproved_view`  AS SELECT `p`.`findings` AS `findings`, `p`.`purpose` AS `purpose`, `p`.`status` AS `status`, concat(`r`.`lname`,', ',`r`.`fname`,' ',`r`.`mname`) AS `residentname`, `p`.`id` AS `pid` FROM (`clearance` `p` left join `resident` `r` on(`r`.`id` = `p`.`residentid`)) WHERE `p`.`status` = 'Disapproved' ;

-- --------------------------------------------------------

--
-- Structure for view `clearance_new_view`
--
DROP TABLE IF EXISTS `clearance_new_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clearance_new_view`  AS SELECT `p`.`purpose` AS `purpose`, `r`.`id` AS `rid`, concat(`r`.`lname`,', ',`r`.`fname`,' ',`r`.`mname`) AS `residentname`, `p`.`id` AS `pid` FROM (`clearance` `p` left join `resident` `r` on(`r`.`id` = `p`.`residentid`)) WHERE `p`.`status` = 'New' ;

-- --------------------------------------------------------

--
-- Structure for view `logs_view`
--
DROP TABLE IF EXISTS `logs_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `logs_view`  AS SELECT `logs`.`id` AS `id`, `logs`.`user` AS `user`, `logs`.`logdate` AS `logdate`, `logs`.`action` AS `action` FROM `logs` ORDER BY `logs`.`logdate` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `permit_view`
--
DROP TABLE IF EXISTS `permit_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `permit_view`  AS SELECT `p`.`businessName` AS `businessName`, `p`.`businessAddress` AS `businessAddress`, `p`.`typeOfBusiness` AS `typeOfBusiness`, `p`.`status` AS `status`, concat(`r`.`lname`,', ',`r`.`fname`,' ',`r`.`mname`) AS `residentname`, `r`.`id` AS `rid`, `p`.`id` AS `pid` FROM (`permit` `p` left join `resident` `r` on(`r`.`id` = `p`.`residentid`)) WHERE `p`.`status` = `p`.`status` ;

-- --------------------------------------------------------

--
-- Structure for view `resident_view`
--
DROP TABLE IF EXISTS `resident_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `resident_view`  AS SELECT `resident`.`zone` AS `zone`, `resident`.`id` AS `id`, concat(`resident`.`lname`,', ',`resident`.`fname`,' ',`resident`.`mname`) AS `cname`, `resident`.`age` AS `age`, `resident`.`gender` AS `gender`, `resident`.`houseNoStreet` AS `houseNoStreet`, `resident`.`image` AS `image` FROM `resident` ORDER BY `resident`.`zone` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official`
--
ALTER TABLE `official`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permit`
--
ALTER TABLE `permit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `official`
--
ALTER TABLE `official`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permit`
--
ALTER TABLE `permit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
