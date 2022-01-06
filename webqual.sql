-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 04:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webqual`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `detail_id` int(4) NOT NULL,
  `test_id` int(4) NOT NULL,
  `obj_tester` varchar(100) NOT NULL,
  `nama_tester` varchar(100) NOT NULL,
  `email_tester` varchar(100) NOT NULL,
  `ov1` int(1) NOT NULL,
  `totnilai_test` int(3) NOT NULL,
  `avg_test` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detail_id`, `test_id`, `obj_tester`, `nama_tester`, `email_tester`, `ov1`, `totnilai_test`, `avg_test`) VALUES
(2, 2, 'abcd.com', 'ade', 'lorddx99@gmail.com', 4, 85, 3.69565),
(2, 2, 'abcd.com', 'ade', 'lorddx99@gmail.com', 0, 0, 0),
(6, 6, 'abcd.com', 'dw', 'lorddx99@gmail.com', 0, 0, 0),
(7, 7, 'abcd.com', 'sad', 'lorddx99@gmail.com', 0, 0, 0),
(8, 8, 'abcd.com', 'sad', 'lorddx99@gmail.com', 0, 0, 0),
(9, 9, 'abcd.com', 'sad', 'lorddx99@gmail.com', 4, 83, 3.6087),
(10, 10, 'xyz.com', 'asda', 'lorddx99@gmail.com', 4, 80, 3.47826),
(11, 11, 'xyz.com', 'wax', 'lorddx99@gmail.com', 4, 85, 3.69565),
(12, 12, 'xyz.com', 'dw', 'dewahendrawan99@gmail.com', 4, 78, 3.3913);

-- --------------------------------------------------------

--
-- Table structure for table `iq_quest`
--

CREATE TABLE `iq_quest` (
  `test_id` int(4) NOT NULL,
  `iq1` int(1) NOT NULL,
  `iq2` int(1) NOT NULL,
  `iq3` int(1) NOT NULL,
  `iq4` int(1) NOT NULL,
  `iq5` int(1) NOT NULL,
  `iq6` int(1) NOT NULL,
  `iq7` int(1) NOT NULL,
  `iq_total` int(3) NOT NULL,
  `iq_avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iq_quest`
--

INSERT INTO `iq_quest` (`test_id`, `iq1`, `iq2`, `iq3`, `iq4`, `iq5`, `iq6`, `iq7`, `iq_total`, `iq_avg`) VALUES
(2, 4, 3, 2, 4, 5, 4, 3, 25, 3.57143),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 4, 5, 4, 4, 5, 5, 4, 31, 4.42857),
(10, 3, 4, 4, 5, 5, 4, 3, 28, 4),
(11, 2, 3, 4, 5, 4, 4, 3, 25, 3.57143),
(12, 4, 4, 3, 4, 2, 2, 3, 22, 3.14286);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `nomor` int(2) NOT NULL,
  `quest_id` varchar(3) NOT NULL,
  `quest` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`nomor`, `quest_id`, `quest`) VALUES
(1, 'us1', 'Terasa mudah untuk belajar mengoperasikan website'),
(2, 'us2', 'Interaksi antara website dengan pengguna sudah jelas dan mudah dipahami'),
(3, 'us3', 'Terasa mudah untuk bernavigasi dengan website'),
(4, 'us4', 'Website mudah untuk digunakan'),
(5, 'us5', 'Website memiliki tampilan yang menarik'),
(6, 'us6', 'Desain website sesuai dengan jenis website'),
(7, 'us7', 'Website berkompeten'),
(8, 'us8', 'Website menciptakan pengalaman positif bagi pengguna'),
(9, 'iq1', 'Website menyediakan informasi yang akurat'),
(10, 'iq2', 'Website menyediakan informasi yang dapat dipercaya '),
(11, 'iq3', 'Website menyediakan informasi yang up to date'),
(12, 'iq4', 'Website menyediakan informasi yang relevan '),
(13, 'iq5', 'Terasa mudah untuk memahami informasi pada website'),
(14, 'iq6', 'Website memberikan informasi yang cukup detail '),
(15, 'iq7', 'Website menyajikan informasi dalam format yang sesuai'),
(16, 'si1', 'Website memiliki reputasi yang baik '),
(17, 'si2', 'Pengguna merasa aman untuk melakukan transaksi pada website'),
(18, 'si3', 'Pengguna merasa informasi pribadinya aman untuk disimpan oleh website'),
(19, 'si4', 'Mudahan untuk berkomunikasi dalam website'),
(20, 'si5', 'Adanya suasana komunitas '),
(21, 'si6', 'Website memberikan kemudahan untuk berkomunikasi dengan organisasi'),
(22, 'si7', 'Yakin bahwa barang / jasa akan diberikan sesuai dengan yang disampaikan'),
(23, 'ov1', 'Secara keseluruhan, tampilan website sudah baik');

-- --------------------------------------------------------

--
-- Table structure for table `si_quest`
--

CREATE TABLE `si_quest` (
  `test_id` int(4) NOT NULL,
  `si1` int(1) NOT NULL,
  `si2` int(1) NOT NULL,
  `si3` int(1) NOT NULL,
  `si4` int(1) NOT NULL,
  `si5` int(1) NOT NULL,
  `si6` int(1) NOT NULL,
  `si7` int(1) NOT NULL,
  `si_total` int(3) NOT NULL,
  `si_avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `si_quest`
--

INSERT INTO `si_quest` (`test_id`, `si1`, `si2`, `si3`, `si4`, `si5`, `si6`, `si7`, `si_total`, `si_avg`) VALUES
(2, 3, 4, 5, 5, 5, 4, 2, 28, 4),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 4, 2, 2, 3, 3, 3, 4, 21, 3),
(10, 2, 4, 4, 3, 2, 3, 4, 22, 3.14286),
(11, 4, 5, 3, 4, 4, 5, 5, 30, 4.28571),
(12, 3, 4, 2, 3, 4, 4, 3, 23, 3.28571);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `test_id` int(4) NOT NULL,
  `status_iq` varchar(2) NOT NULL,
  `status_us` varchar(2) NOT NULL,
  `status_si` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`test_id`, `status_iq`, `status_us`, `status_si`) VALUES
(1, '', '', ''),
(1, '', '', ''),
(2, '', '', ''),
(2, '', '', ''),
(2, '', '', ''),
(2, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', '');

--
-- Triggers `testing`
--
DELIMITER $$
CREATE TRIGGER `detail` AFTER INSERT ON `testing` FOR EACH ROW BEGIN
INSERT INTO `detail`(`detail_id`, `test_id`, `obj_tester`, `nama_tester`, `email_tester`, `ov1`, `totnilai_test`, `avg_test`) VALUES (NEW.test_id,NEW.test_id,'a','a','a','0','0','0');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inform` AFTER INSERT ON `testing` FOR EACH ROW BEGIN
INSERT INTO `iq_quest`(`test_id`, `iq1`, `iq2`, `iq3`, `iq4`, `iq5`, `iq6`, `iq7`, `iq_total`, `iq_avg`) VALUES (NEW.test_id,'0','0','0','0','0','0','0','0','0');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `interaction` AFTER INSERT ON `testing` FOR EACH ROW BEGIN
INSERT INTO `si_quest`(`test_id`, `si1`, `si2`, `si3`, `si4`, `si5`, `si6`, `si7`, `si_total`, `si_avg`) VALUES (NEW.test_id,'0','0','0','0','0','0','0','0','0');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usability` AFTER INSERT ON `testing` FOR EACH ROW BEGIN
INSERT INTO `us_quest`(`test_id`, `us1`, `us2`, `us3`, `us4`, `us5`, `us6`, `us7`, `us8`, `us_total`, `us_avg`) VALUES (NEW.test_id,'0','0','0','0','0','0','0','0','0','0');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `us_quest`
--

CREATE TABLE `us_quest` (
  `test_id` int(4) NOT NULL,
  `us1` int(1) NOT NULL,
  `us2` int(1) NOT NULL,
  `us3` int(1) NOT NULL,
  `us4` int(1) NOT NULL,
  `us5` int(1) NOT NULL,
  `us6` int(1) NOT NULL,
  `us7` int(1) NOT NULL,
  `us8` int(1) NOT NULL,
  `us_total` int(3) NOT NULL,
  `us_avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `us_quest`
--

INSERT INTO `us_quest` (`test_id`, `us1`, `us2`, `us3`, `us4`, `us5`, `us6`, `us7`, `us8`, `us_total`, `us_avg`) VALUES
(2, 4, 3, 3, 4, 5, 4, 5, 4, 32, 4),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 4, 3, 3, 4, 5, 5, 4, 3, 31, 3.875),
(10, 3, 4, 4, 3, 4, 5, 4, 3, 30, 3.75),
(11, 4, 3, 5, 3, 4, 4, 4, 3, 30, 3.75),
(12, 4, 5, 3, 4, 5, 3, 4, 5, 33, 4.125);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
