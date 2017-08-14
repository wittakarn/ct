-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table captcha_thesis.alphabets17
CREATE TABLE IF NOT EXISTS `alphabets17` (
  `id` varchar(20) NOT NULL,
  `char_index` int(11) NOT NULL,
  `alphabet` char(1) NOT NULL,
  `key_code` int(11) NOT NULL,
  `key_press` varchar(20) DEFAULT NULL,
  `key_down` varchar(20) DEFAULT NULL,
  `key_up` varchar(20) DEFAULT NULL,
  `correct` int(1) DEFAULT NULL COMMENT '1=true, 2=false',
  PRIMARY KEY (`id`,`char_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table captcha_thesis.cw
CREATE TABLE IF NOT EXISTS `cw` (
  `id` varchar(20) NOT NULL,
  `word_index` int(11) NOT NULL,
  `wording` varchar(50) NOT NULL,
  `correct` int(1) DEFAULT NULL COMMENT '1=true, 2=false',
  PRIMARY KEY (`id`,`word_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table captcha_thesis.cw_alphabets
CREATE TABLE IF NOT EXISTS `cw_alphabets` (
  `id` varchar(20) NOT NULL,
  `char_index` int(11) NOT NULL,
  `alphabet` char(1) NOT NULL,
  `key_code` int(11) NOT NULL,
  `key_press` varchar(20) DEFAULT NULL,
  `key_down` varchar(20) DEFAULT NULL,
  `key_up` varchar(20) DEFAULT NULL,
  `correct` int(1) DEFAULT NULL COMMENT '1=true, 2=false',
  PRIMARY KEY (`id`,`char_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table captcha_thesis.fl_alphabets
CREATE TABLE IF NOT EXISTS `fl_alphabets` (
  `id` varchar(20) NOT NULL,
  `char_index` int(11) NOT NULL,
  `alphabet` char(1) NOT NULL,
  `key_code` int(11) NOT NULL,
  `key_press` varchar(20) DEFAULT NULL,
  `key_down` varchar(20) DEFAULT NULL,
  `key_up` varchar(20) DEFAULT NULL,
  `correct` int(1) DEFAULT NULL COMMENT '1=true, 2=false',
  PRIMARY KEY (`id`,`char_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table captcha_thesis.rd
CREATE TABLE IF NOT EXISTS `rd` (
  `id` varchar(20) NOT NULL,
  `word_index` int(11) NOT NULL,
  `wording` varchar(50) NOT NULL,
  `correct` int(1) DEFAULT NULL COMMENT '1=true, 2=false',
  PRIMARY KEY (`id`,`word_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table captcha_thesis.rd_alphabets
CREATE TABLE IF NOT EXISTS `rd_alphabets` (
  `id` varchar(20) NOT NULL,
  `char_index` int(11) NOT NULL,
  `alphabet` char(1) NOT NULL,
  `key_code` int(11) NOT NULL,
  `key_press` varchar(20) DEFAULT NULL,
  `key_down` varchar(20) DEFAULT NULL,
  `key_up` varchar(20) DEFAULT NULL,
  `correct` int(1) DEFAULT NULL COMMENT '1=true, 2=false',
  PRIMARY KEY (`id`,`char_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table captcha_thesis.user_information
CREATE TABLE IF NOT EXISTS `user_information` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL COMMENT '1=ชาย, 2=หญิง',
  `age` int(11) NOT NULL COMMENT '1=10-25, 2=26-40, 3=41-60, 4=มากกว่า 60',
  `favorite_color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table captcha_thesis.words17
CREATE TABLE IF NOT EXISTS `words17` (
  `id` varchar(20) NOT NULL,
  `word_index` int(11) NOT NULL,
  `wording` varchar(50) NOT NULL,
  `correct` int(1) DEFAULT NULL COMMENT '1=true, 2=false',
  PRIMARY KEY (`id`,`word_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
