-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2017 at 10:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_equipments`
--

CREATE TABLE `active_equipments` (
  `eid` int(11) NOT NULL,
  `borrower_id` int(7) NOT NULL,
  `date_borrowed` date NOT NULL,
  `lend_by` int(7) NOT NULL,
  `status` enum('In','Out') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_equipments`
--

INSERT INTO `active_equipments` (`eid`, `borrower_id`, `date_borrowed`, `lend_by`, `status`) VALUES
(2, 2012311, '2017-01-21', 2040030, 'Out'),
(8, 2012347, '2017-01-21', 2040030, 'Out'),
(25, 2012349, '2017-01-21', 2040030, 'Out');

-- --------------------------------------------------------

--
-- Table structure for table `active_fitness_users`
--

CREATE TABLE `active_fitness_users` (
  `idnum` int(7) NOT NULL,
  `date_in` date NOT NULL,
  `status` enum('In','Out') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_fitness_users`
--

INSERT INTO `active_fitness_users` (`idnum`, `date_in`, `status`) VALUES
(22, '2017-01-18', 'In'),
(23, '2017-01-21', 'In'),
(25, '2017-01-18', 'In'),
(26, '2017-01-18', 'In'),
(28, '2017-01-21', 'In'),
(217, '2017-01-21', 'In'),
(2012011, '2017-01-18', 'In'),
(2012311, '2017-01-18', 'In'),
(2012353, '2017-01-18', 'In'),
(2042311, '2017-01-18', 'In'),
(2042315, '2017-01-18', 'In'),
(2045378, '2017-01-18', 'In');

-- --------------------------------------------------------

--
-- Table structure for table `active_players`
--

CREATE TABLE `active_players` (
  `gid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date_now` date NOT NULL,
  `list_by` int(11) NOT NULL,
  `playnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_players`
--

INSERT INTO `active_players` (`gid`, `pid`, `date_now`, `list_by`, `playnum`) VALUES
(4, 211, '2017-01-19', 2040030, 86),
(1, 212, '2017-01-19', 2040030, 87),
(1, 213, '2017-01-19', 2040030, 88),
(1, 214, '2017-01-19', 2040030, 89),
(2, 2012348, '2017-01-19', 2040030, 90),
(3, 216, '2017-01-19', 2040030, 91),
(15, 2012345, '2017-01-19', 2040030, 92),
(3, 218, '2017-01-19', 2040030, 93),
(8, 2042315, '2017-01-19', 2040030, 94),
(14, 2012351, '2017-01-19', 2040030, 95),
(8, 219, '2017-01-19', 2040030, 96),
(5, 2012346, '2017-01-19', 2040030, 97),
(6, 2042312, '2017-01-19', 2040030, 98),
(10, 2012349, '2017-01-19', 2045378, 99),
(1, 2045378, '2017-01-19', 2045378, 100),
(1, 2042311, '2017-01-19', 2045378, 101),
(1, 2022350, '2017-01-19', 2045378, 102),
(1, 2012352, '2017-01-19', 2045378, 103),
(1, 219, '2017-01-19', 2045378, 104),
(1, 2012311, '2017-01-19', 2045378, 105),
(2, 212, '2017-01-19', 2040030, 106),
(2, 2012350, '2017-01-19', 2040030, 107),
(2, 2012347, '2017-01-19', 2040030, 108),
(2, 2032313, '2017-01-19', 2040030, 109),
(6, 216, '2017-01-19', 2040030, 110),
(1, 2032313, '2017-01-19', 2040030, 111),
(3, 217, '2017-01-19', 2040030, 112),
(3, 219, '2017-01-19', 2040030, 113),
(3, 2012011, '2017-01-19', 2040030, 114),
(3, 2012311, '2017-01-19', 2040030, 115),
(3, 2012345, '2017-01-19', 2040030, 116),
(3, 2012346, '2017-01-19', 2040030, 117),
(3, 2012348, '2017-01-19', 2040030, 118),
(3, 2012347, '2017-01-19', 2040030, 119),
(1, 211, '2017-01-21', 2040030, 120),
(3, 215, '2017-01-21', 2040030, 121),
(6, 212, '2017-01-21', 2040030, 122),
(10, 2012351, '2017-01-21', 2040030, 123),
(8, 2012348, '2017-01-21', 2040030, 124),
(8, 2012349, '2017-01-21', 2040030, 125),
(8, 2012350, '2017-01-21', 2040030, 126),
(14, 2032311, '2017-01-21', 2040030, 127),
(3, 2022351, '2017-01-24', 2040030, 128),
(1, 2012011, '2017-01-24', 2040030, 129),
(6, 2012349, '2017-01-24', 2040030, 130),
(1, 2012349, '2017-01-24', 2040030, 131),
(2, 2012011, '2017-01-24', 2040030, 132);

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` varchar(120) DEFAULT NULL,
  `timestamp` int(10) DEFAULT NULL,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('0455a1575d81000e383305d533a573cf927394f2', '::1', NULL, 1484857108, '__ci_last_regenerate|i:1484856907;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('074ef4e89c21d284002424b2bc438103ba6c4e64', '::1', NULL, 1485291659, '__ci_last_regenerate|i:1485291399;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('0815282c06254b8f37fe166e85e4dd39fb837d58', '::1', NULL, 1484866036, '__ci_last_regenerate|i:1484866036;'),
('0822777523bc0b2194b077a0dccceb2dd9e87985', '::1', NULL, 1484976901, '__ci_last_regenerate|i:1484976651;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('0de2ab10fd5bdb4a88e99208c014dc8ebb93a1b1', '::1', NULL, 1484858563, '__ci_last_regenerate|i:1484858272;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('11b8e02e376775b88ddde8e10b9825954404cf98', '::1', NULL, 1485035968, '__ci_last_regenerate|i:1485035820;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('159a82b23fdb92732b2763eeec0d14ce40cfe848', '::1', NULL, 1485035627, '__ci_last_regenerate|i:1485035419;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('17f5d3064c2151c4030b39a7bbadbc702fa80b8d', '::1', NULL, 1485030351, '__ci_last_regenerate|i:1485030052;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('1943f4d80d53357dedde1abf0dd21320fe5d19fc', '::1', NULL, 1484974203, '__ci_last_regenerate|i:1484973910;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('1a4b300a2a4d177884b89357034e100307ad1be7', '::1', NULL, 1484716794, '__ci_last_regenerate|i:1484716506;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('1beaeeca152e6a4f7fcec568488af7deb03db8db', '::1', NULL, 1485033431, '__ci_last_regenerate|i:1485033134;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('1ff70bf06740f5e3dc1094f387b773356243ee9d', '::1', NULL, 1484858206, '__ci_last_regenerate|i:1484857928;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('2777e1a9f9a74eee237e0b400270b9521f716217', '::1', NULL, 1484986462, '__ci_last_regenerate|i:1484986404;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('29388a48bbe2cedf3e8ae1e8271a4d9bf2a89b3e', '::1', NULL, 1484712701, '__ci_last_regenerate|i:1484712693;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('296e5215784a7c41378fd54db9dc75ce965eeef5', '::1', NULL, 1484707692, '__ci_last_regenerate|i:1484707626;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('29b366fe4edab3c8dd360903b257938bdb36aea4', '::1', NULL, 1485291211, '__ci_last_regenerate|i:1485291063;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('2a538a4f5d6ed243a66a16d9cc16bc3ba99b9e00', '::1', NULL, 1484713993, '__ci_last_regenerate|i:1484713693;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('2ea93910462f2ec7fdd8f9e2d1db4ac2f37c0587', '::1', NULL, 1484973288, '__ci_last_regenerate|i:1484973180;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('302272db1f267a889a36be8bee4b1a012057cc23', '::1', NULL, 1484859177, '__ci_last_regenerate|i:1484858887;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('36c73dd86315023e43cec566e290130fbfcc729c', '::1', NULL, 1484864715, '__ci_last_regenerate|i:1484864424;profile_pict|s:14:"1481305244.jpg";username|s:3:"zai";usertype|s:6:"worker";id|s:7:"2045378";fullname|s:18:"Pesigan, Zamora S.";firstname|s:6:"Zamora";gender|s:6:"Female";bdate|s:10:"1995-09-12";civilstatus|s:6:"Single";address|s:27:"Puting Kahoy Silang, Cavite";'),
('39c52130868ab4daaee7af28b0369d29eb881413', '::1', NULL, 1484865483, '__ci_last_regenerate|i:1484865203;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('3f16ceeb7f4af8de4bfeaa412d414dbea54310a1', '::1', NULL, 1485038492, '__ci_last_regenerate|i:1485038492;'),
('41d85eb0f6ac02df68f42cb08bde1b417bbc6c77', '::1', NULL, 1484861627, '__ci_last_regenerate|i:1484861338;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('454d901a5c5ddc40268311417370a64358285e9b', '::1', NULL, 1484975208, '__ci_last_regenerate|i:1484974938;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('4c2d53b61b64f12bc925ace1da9fc444a5d94f68', '::1', NULL, 1485034893, '__ci_last_regenerate|i:1485034599;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('4e27e9fa35a6327e0af89964530cc4f89f817a37', '::1', NULL, 1484974928, '__ci_last_regenerate|i:1484974628;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('4e483ea7b5ea989838db8a8d590fb3953b0ac7d0', '::1', NULL, 1484975943, '__ci_last_regenerate|i:1484975651;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('53a758aeb81dec9f318d2223f849b76dbf007a89', '::1', NULL, 1484860599, '__ci_last_regenerate|i:1484860327;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('5431ce2f3df68cabaf89a3a32c0069d2feee7b98', '::1', NULL, 1484858859, '__ci_last_regenerate|i:1484858580;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('59fce815404576695db00927105a658cb3ba6614', '::1', NULL, 1484714947, '__ci_last_regenerate|i:1484714649;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('5afefe3b1fde8512ff3488a84774505d09eed3e5', '::1', NULL, 1484984954, '__ci_last_regenerate|i:1484984844;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('5e5d80203baa625da0004b70fafdd718868bb550', '::1', NULL, 1484976207, '__ci_last_regenerate|i:1484976006;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('5f053e5683dad6657e957b044927e1ae13993807', '::1', NULL, 1485032682, '__ci_last_regenerate|i:1485032449;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('609fb6562fc253f69368d125eceb75fddcec6465', '::1', NULL, 1484862248, '__ci_last_regenerate|i:1484861989;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('665a719977fa9b4c8b989289460539140cffe845', '::1', NULL, 1485032446, '__ci_last_regenerate|i:1485032148;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('72682220901a4bafa2826e3271f891c5ed3f116e', '::1', NULL, 1484865735, '__ci_last_regenerate|i:1484865536;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('742fd6f0daef11acd32ee906e834cb62ecd2387c', '::1', NULL, 1485030357, '__ci_last_regenerate|i:1485030357;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('7fe170eb1660aa1e161ba242c390236911178836', '::1', NULL, 1484860710, '__ci_last_regenerate|i:1484860633;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('80646038a32b855728d8344af12e5e0d88ee62cc', '::1', NULL, 1484864782, '__ci_last_regenerate|i:1484864737;profile_pict|s:14:"1481305244.jpg";username|s:3:"zai";usertype|s:6:"worker";id|s:7:"2045378";fullname|s:18:"Pesigan, Zamora S.";firstname|s:6:"Zamora";gender|s:6:"Female";bdate|s:10:"1995-09-12";civilstatus|s:6:"Single";address|s:27:"Puting Kahoy Silang, Cavite";'),
('8135c15ecd2257ee05a77cb43ffaca38c8808425', '::1', NULL, 1484715874, '__ci_last_regenerate|i:1484715579;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('8af9e5b9f17b69c253380ee1e1622985ae245c0f', '::1', NULL, 1485034576, '__ci_last_regenerate|i:1485034297;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('8cb05e18f2eb3445c25ebad285c057c66300f932', '::1', NULL, 1484971942, '__ci_last_regenerate|i:1484971918;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('8ebb7138c7592196f0f5ac903efb57086d771de6', '::1', NULL, 1484857586, '__ci_last_regenerate|i:1484857286;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('8f60115b0cfd0d0dc2f8f8b06e1642f209d2b37b', '::1', NULL, 1484861180, '__ci_last_regenerate|i:1484861026;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('903b6491725e184c29f3e6e477ad6f303b47a907', '::1', NULL, 1484716488, '__ci_last_regenerate|i:1484716194;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('90eee42721167eff608f52f72ebaae13ca0204bd', '::1', NULL, 1484985608, '__ci_last_regenerate|i:1484985502;profile_pict|s:14:"1481305244.jpg";username|s:3:"zai";usertype|s:6:"worker";id|s:7:"2045378";fullname|s:18:"Pesigan, Zamora S.";firstname|s:6:"Zamora";gender|s:6:"Female";bdate|s:10:"1995-09-12";civilstatus|s:6:"Single";address|s:27:"Puting Kahoy Silang, Cavite";'),
('94348210954220e5d3c7b2ab2a61835de0319f3e', '::1', NULL, 1484860270, '__ci_last_regenerate|i:1484859973;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('94a6e846dc0f559685d95fb29c4d044c16284445', '::1', NULL, 1484715570, '__ci_last_regenerate|i:1484715270;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('978685db67ed73c4b99dddb435f0fd03404c5356', '::1', NULL, 1484974588, '__ci_last_regenerate|i:1484974322;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('9c643fdddfb6dbd8ccfd0dc3ff5205c21652d1db', '::1', NULL, 1484976511, '__ci_last_regenerate|i:1484976511;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('a08bea0966b362809c3d8c2bbff0db4f023ebfa4', '::1', NULL, 1485003287, '__ci_last_regenerate|i:1485003287;'),
('a96b4c077aa190de95669e01998397b4772cad8e', '::1', NULL, 1484857889, '__ci_last_regenerate|i:1484857593;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('a9829fdf46e8f88b5b4d5f01a63410d33da4edd8', '::1', NULL, 1485037968, '__ci_last_regenerate|i:1485037968;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('abc11e0b0c72233263980a9e49238724b1db9b3c', '::1', NULL, 1484972788, '__ci_last_regenerate|i:1484972546;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('acdaf3a5e8f05f1529de6e338e8a3411a8c0ffa2', '::1', NULL, 1485035194, '__ci_last_regenerate|i:1485034924;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('affe59dadfe999cba3284f0c99e8b368806d77fb', '::1', NULL, 1484973852, '__ci_last_regenerate|i:1484973557;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('b0189e605d7af6427da81c2e335283b4b9d0169b', '::1', NULL, 1485033062, '__ci_last_regenerate|i:1485032812;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('b056c78e8df7742b7d59b3b963394649474680ac', '::1', NULL, 1484862816, '__ci_last_regenerate|i:1484862551;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('b4181e156ff997211b9a95acb6bf6d0cd1b1a619', '::1', NULL, 1484863165, '__ci_last_regenerate|i:1484862868;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('b689253ac619e57c4db91999f359aa0654a6b648', '::1', NULL, 1484859500, '__ci_last_regenerate|i:1484859221;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('b73a490460c58d758abd7fff8cdaa21ebad57764', '::1', NULL, 1485037067, '__ci_last_regenerate|i:1485037065;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('bb6205ac1e0a2681d12f5c9d33144afc83e0bb7f', '::1', NULL, 1484716173, '__ci_last_regenerate|i:1484715883;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('bfdd64fff5f3663ac3208541cfd52b06161c1c30', '::1', NULL, 1484994449, '__ci_last_regenerate|i:1484994417;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('c552f5e404e30ef4fd221aaf49aff68cf8d6b714', '::1', NULL, 1484985464, '__ci_last_regenerate|i:1484985164;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('ce1b003350b2d51ad309f32fb36778d9b35f799e', '::1', NULL, 1484714307, '__ci_last_regenerate|i:1484714291;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('d0c08efb82647f977418640990220c39b7c582d6', '::1', NULL, 1484716884, '__ci_last_regenerate|i:1484716884;'),
('de25efd42532e7211a456c44eff0553d1fccc138', '::1', NULL, 1484856727, '__ci_last_regenerate|i:1484856551;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('de9f3f934539a180e7c109c170dbc368c60c9b1e', '::1', NULL, 1484861879, '__ci_last_regenerate|i:1484861660;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('df935e076812e3b6feb85dc0ff7e2ddaf47dc07d', '::1', NULL, 1484973082, '__ci_last_regenerate|i:1484972863;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('dfc78813fa130c9c124728977c1e342b107eb909', '::1', NULL, 1484864391, '__ci_last_regenerate|i:1484864386;'),
('e68f698414eca3b960531c80fa2f06ae8e1e5373', '::1', NULL, 1484715261, '__ci_last_regenerate|i:1484714961;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('e7f2acdd71b8a1d5d14637fa797a851fd43a7dfc', '::1', NULL, 1484984125, '__ci_last_regenerate|i:1484984125;'),
('ec025472f3fb85a21dcaa4c4baead49c7928b6dd', '::1', NULL, 1485034174, '__ci_last_regenerate|i:1485033910;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('ecfdee99a5b979ed98296ebc9a3b7986685b37cb', '::1', NULL, 1484863178, '__ci_last_regenerate|i:1484863176;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('ef458dd5373729623187cea7b16da6e91a31cab4', '::1', NULL, 1485033675, '__ci_last_regenerate|i:1485033443;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('f1a1a6af6b1d4b1284f16dd0a7debe2a28faab51', '::1', NULL, 1484859789, '__ci_last_regenerate|i:1484859524;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";'),
('f73c532f3b1ffb04986d0551604c05d4a17d5154', '::1', NULL, 1485029975, '__ci_last_regenerate|i:1485029729;profile_pict|s:14:"1481306980.jpg";username|s:3:"rex";usertype|s:5:"admin";id|s:7:"2040030";fullname|s:22:"Sarmiento, John Rex M.";firstname|s:8:"John Rex";gender|s:4:"Male";bdate|s:10:"1995-05-27";civilstatus|s:7:"Married";address|s:26:"Buso-Buso Laurel, Batangas";');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `eid` int(11) NOT NULL,
  `item_code` varchar(30) NOT NULL,
  `date_purchased` date NOT NULL,
  `remarks` enum('Good','Defective') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`eid`, `item_code`, `date_purchased`, `remarks`) VALUES
(2, 'BB-GG1', '2016-12-08', 'Good'),
(3, 'BB-GG2', '2016-12-08', 'Good'),
(4, 'BD-R1', '2016-12-08', 'Good'),
(5, 'BD-R2', '2016-12-08', 'Good'),
(7, 'BD-R3', '2016-12-08', 'Good'),
(8, 'S-BB1', '2016-12-08', 'Good'),
(9, 'S-BB2', '2016-12-08', 'Good'),
(10, 'S-BB3', '2016-12-08', 'Good'),
(11, 'S-CB1', '2016-12-08', 'Good'),
(12, 'S-CB2', '2016-12-08', 'Good'),
(13, 'S-CB3', '2016-12-08', 'Good'),
(14, 'SB-GL1', '2016-12-08', 'Good'),
(15, 'SB-GL2', '2016-12-08', 'Good'),
(16, 'SB-GL3', '2016-12-08', 'Good'),
(17, 'TT-R1', '2016-12-08', 'Good'),
(18, 'TT-R2', '2016-12-08', 'Good'),
(19, 'TT-R3', '2016-12-08', 'Good'),
(20, 'V-BB1', '2016-12-08', 'Good'),
(21, 'V-BB2', '2016-12-08', 'Good'),
(22, 'V-BB3', '2016-12-08', 'Good'),
(23, 'BB-GG1', '2016-12-09', 'Defective'),
(24, 'BB-GG1', '2016-12-09', 'Good'),
(25, 'BD-R2', '2016-12-09', 'Good'),
(26, 'BD-R2', '2016-12-09', 'Defective'),
(27, 'BB-GG3', '2016-12-09', 'Defective'),
(28, 'S-BB1', '2016-12-09', 'Defective'),
(29, 'S-BB2', '2016-12-09', 'Defective'),
(30, 'SB-GL1', '2016-12-09', 'Defective'),
(31, 'SB-GL2', '2016-12-10', 'Defective'),
(32, 'SB-GL2', '2016-12-10', 'Good'),
(33, 'BB-GG1', '2017-01-08', 'Good'),
(34, 'BB-GG2', '2017-01-08', 'Good'),
(35, 'BB-GG3', '2017-01-08', 'Good'),
(36, 'BD-R2', '2017-01-08', 'Good'),
(37, 'BD-R3', '2017-01-08', 'Good'),
(38, 'BB-GG1', '2017-01-08', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_type`
--

CREATE TABLE `equipment_type` (
  `id` int(11) NOT NULL,
  `item_code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_type`
--

INSERT INTO `equipment_type` (`id`, `item_code`, `description`) VALUES
(2, 'BB-GG1', 'Basketball'),
(3, 'BB-GG2', 'Basketball'),
(4, 'BB-GG3', 'Basketball'),
(7, 'V-BB1', 'Volleyball'),
(8, 'V-BB2', 'Volleyball'),
(9, 'V-BB3', 'Volleyball'),
(12, 'S-BB1', 'Softball'),
(13, 'S-BB2', 'Softball'),
(14, 'S-BB3', 'Softball'),
(17, 'S-CB1', 'Soccer Ball'),
(18, 'S-CB2', 'Soccer Ball'),
(19, 'S-CB3', 'Soccer Ball'),
(22, 'BD-R1', 'Badminton Racket'),
(23, 'BD-R2', 'Badminton Racket'),
(24, 'BD-R3', 'Badminton Racket'),
(27, 'SB-GL1', 'Softball Gloves'),
(28, 'SB-GL2', 'Softball Gloves'),
(29, 'SB-GL3', 'Softball Gloves'),
(32, 'TT-R1', 'Table Tennis Racket'),
(33, 'TT-R2', 'Table Tennis Racket'),
(34, 'TT-R3', 'Table Tennis Racket');

-- --------------------------------------------------------

--
-- Table structure for table `item_history`
--

CREATE TABLE `item_history` (
  `hid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `status` enum('In','Out') NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `borrower_id` int(7) NOT NULL,
  `date_borrowed` date NOT NULL,
  `date_returned` date NOT NULL,
  `lend_by` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_history`
--

INSERT INTO `item_history` (`hid`, `eid`, `status`, `remarks`, `borrower_id`, `date_borrowed`, `date_returned`, `lend_by`) VALUES
(190, 2, 'Out', '', 2012311, '2017-01-21', '0000-00-00', 2040030),
(191, 34, 'Out', '', 2012345, '2017-01-21', '0000-00-00', 2040030),
(192, 25, 'Out', '', 2012349, '2017-01-21', '0000-00-00', 2040030),
(193, 8, 'Out', '', 2012347, '2017-01-21', '0000-00-00', 2040030),
(194, 34, 'In', 'Ayos ^_^', 2012345, '2017-01-21', '2017-01-21', 2045378);

-- --------------------------------------------------------

--
-- Table structure for table `item_users`
--

CREATE TABLE `item_users` (
  `id` int(7) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `bdate` date NOT NULL,
  `civilstatus` enum('Single','Married','Engaged','Widow') NOT NULL,
  `address` varchar(100) NOT NULL,
  `item_usertype` enum('Students','Faculty') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_users`
--

INSERT INTO `item_users` (`id`, `lastname`, `firstname`, `mi`, `gender`, `bdate`, `civilstatus`, `address`, `item_usertype`) VALUES
(211, 'Rellis', 'Hilario', 'A', 'Male', '1975-05-16', 'Single', 'Tanauan Batangas', 'Faculty'),
(212, 'Cruz', 'Abner', 'M', 'Male', '1969-07-18', 'Married', 'Del Monte, Bulacan ', 'Faculty'),
(213, 'Bingcang', 'Ivar', 'C', 'Male', '1963-10-26', 'Married', 'AUP', 'Faculty'),
(214, 'Lopez', 'Gerson', 'F', 'Male', '1978-09-14', 'Single', 'Sta Rosa Heights Laguna', 'Faculty'),
(215, 'Fesalbon', 'Mimi', 'C', 'Female', '1985-02-15', 'Single', 'Calapan Mindoro', 'Faculty'),
(216, 'Lopez', 'Glenda Joy', 'B', 'Female', '1982-03-16', 'Single', 'Tagaytay City', 'Faculty'),
(217, 'Fabroa', 'Cristina', 'H', 'Female', '1962-12-12', 'Married', 'Nayong Masaya', 'Faculty'),
(218, 'Aclon', 'Jona', 'K', 'Female', '1978-09-29', 'Married', 'Pasay City', 'Faculty'),
(219, 'Diaz', 'Veron', 'A', 'Female', '1985-07-17', 'Married', 'Puting Kahoy Silang, Cavite', 'Faculty'),
(220, 'Casabuena', 'Micahel', 'B', 'Male', '1987-03-24', 'Married', 'Oklohama City, USA', 'Faculty'),
(2012011, 'Amores', 'Elson', 'B', 'Male', '1990-08-25', 'Single', 'Eastern Hall Residence', 'Students'),
(2012311, 'Arit', 'Lyndon', 'H', 'Male', '1990-06-10', 'Single', 'AUP', 'Students'),
(2012345, 'Magsumbol', 'Jenny', 'C', 'Female', '1995-01-23', 'Single', 'Lipa City, Batangas', 'Students'),
(2012346, 'Carsocho', 'Michelle', 'S', 'Female', '0000-00-00', 'Single', 'Lipa City, Batangas', 'Students'),
(2012347, 'Sarmiento', 'Ingrid', 'G', 'Female', '1997-01-11', 'Married', 'Buso-Buso Laurel, Batangas', 'Students'),
(2012348, 'Malibiran', 'Ceejay', 'S', 'Male', '1996-05-20', 'Single', 'Buso-Buso Laurel, Batangas', 'Students'),
(2012349, 'Malibiran', 'Kevin', 'S', 'Male', '1992-12-20', 'Single', 'Buso-Buso Laurel, Batangas', 'Students'),
(2012350, 'Malibiran', 'Francisco', 'C', 'Male', '1992-12-20', 'Single', 'Buso-Buso Laurel, Batangas', 'Students'),
(2012351, 'Rodriguez', 'Marvin', 'S', 'Male', '1992-12-20', 'Single', 'Buso-Buso Laurel, Batangas', 'Students'),
(2012352, 'Rodriguez', 'Ariez', 'S', 'Male', '1987-08-12', 'Single', 'Buso-Buso Laurel, Batangas', 'Students'),
(2012353, 'Pesigan', 'Jerwin', 'S', 'Male', '1992-08-12', 'Single', 'Buso-Buso Laurel, Batangas', 'Students'),
(2012354, 'Pesigan', 'Jefferson', 'S', 'Male', '1990-08-12', 'Single', 'Buso-Buso Laurel, Batangas', 'Students'),
(2022312, 'Bingcang', 'Jeffer', 'C', 'Male', '1991-06-10', 'Single', 'Davao City', 'Students'),
(2022350, 'Cruz', 'Shaira', 'V', 'Female', '1994-06-10', 'Single', 'Lucena City', 'Students'),
(2022351, 'Bingcang', 'Christina', 'C', 'Female', '1994-06-10', 'Single', 'Davao City', 'Students'),
(2032311, 'Antoine', 'Brandon', 'A', 'Male', '1988-06-10', 'Single', 'South Africa', 'Students'),
(2032313, 'Fabregas', 'Jeff Denver', 'A', 'Male', '1991-06-10', 'Single', 'San Pedro Laguna', 'Students'),
(2040030, 'Sarmiento', 'John Rex', 'M', 'Male', '1995-05-27', 'Married', 'Buso-Buso Laurel, Batangas', 'Students'),
(2042311, 'Anarna', 'Bea', 'C', 'Female', '1996-06-10', 'Single', 'Santa Rosa Village 1', 'Students'),
(2042312, 'Famaran', 'Renz Floyd', 'B', 'Male', '1996-04-08', 'Single', 'Occidental Mindoro', 'Students'),
(2042315, 'Plaza', 'Jerry', 'D', 'Male', '1996-04-08', 'Single', 'Darasa Tanauan City, Batangas', 'Students'),
(2045378, 'Pesigan', 'Zamora', 'S', 'Female', '1995-09-12', 'Single', 'Puting Kahoy Silang, Cavite', 'Students');

-- --------------------------------------------------------

--
-- Table structure for table `nonstud_fitness_user`
--

CREATE TABLE `nonstud_fitness_user` (
  `nonstud_id` int(7) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonstud_fitness_user`
--

INSERT INTO `nonstud_fitness_user` (`nonstud_id`, `lastname`, `firstname`) VALUES
(22, 'Tamad', 'Juan'),
(23, 'Mr. Play', 'Boy'),
(25, 'Banana', 'Queue'),
(26, 'Dela Rosa', 'Totoy Bato'),
(28, 'Carsocho', 'MJ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` enum('admin','worker','students','faculty') NOT NULL,
  `cus_id` int(7) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`, `cus_id`, `profile`) VALUES
(1, 'rex', '5d41402abc4b2a76b9719d911017c592', 'admin', 2040030, '1481306980.jpg'),
(2, 'rellis', '5d41402abc4b2a76b9719d911017c592', 'faculty', 211, '1481305272.gif'),
(3, 'elson', '5d41402abc4b2a76b9719d911017c592', 'students', 2012011, '1481304651.jpg'),
(4, 'zai', '5d41402abc4b2a76b9719d911017c592', 'worker', 2045378, '1481305244.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_equipments`
--
ALTER TABLE `active_equipments`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `active_fitness_users`
--
ALTER TABLE `active_fitness_users`
  ADD PRIMARY KEY (`idnum`);

--
-- Indexes for table `active_players`
--
ALTER TABLE `active_players`
  ADD PRIMARY KEY (`playnum`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `equipment_type`
--
ALTER TABLE `equipment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_history`
--
ALTER TABLE `item_history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `item_users`
--
ALTER TABLE `item_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonstud_fitness_user`
--
ALTER TABLE `nonstud_fitness_user`
  ADD PRIMARY KEY (`nonstud_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_players`
--
ALTER TABLE `active_players`
  MODIFY `playnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `equipment_type`
--
ALTER TABLE `equipment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `item_history`
--
ALTER TABLE `item_history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT for table `nonstud_fitness_user`
--
ALTER TABLE `nonstud_fitness_user`
  MODIFY `nonstud_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `item_users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
