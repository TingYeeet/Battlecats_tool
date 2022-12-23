-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-22 17:16:28
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `名字` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `帳號` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `密碼` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `擁有貓` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]]',
  `未擁有貓` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[["uni000_f00", "uni000_c00", "uni000_s00"], ["uni001_f00", "uni001_c00", "uni001_s00"], ["uni002_f00", "uni002_c00", "uni002_s00"], ["uni003_f00", "uni003_c00", "uni003_s00"], ["uni004_f00", "uni004_c00", "uni004_s00"], ["uni005_f00", "uni005_c00", "uni005_s00"], ["uni006_f00", "uni006_c00", "uni006_s00"], ["uni007_f00", "uni007_c00", "uni007_s00"], ["uni008_f00", "uni008_c00", "uni008_s00"], ["uni024_f00", "uni024_c00", "uni024_s00"], ["uni025_f00", "uni025_c00", "uni025_s00"], ["uni037_f00", "uni037_c00", "uni037_s00"], ["uni041_f00", "uni041_c00", "uni041_s00"], ["uni060_f00", "uni060_c00", "uni060_s00"], ["uni078_f00", "uni078_c00", "uni078_s00"], ["uni088_f00", "uni088_c00", "uni088_s00"], ["uni091_f00", "uni091_c00", "uni091_s00"], ["uni092_f00", "uni092_c00", "uni092_s00"], ["uni093_f00", "uni093_c00", "uni093_s00"], ["uni094_f00", "uni094_c00", "uni094_s00"], ["uni095_f00", "uni095_c00", "uni095_s00"], ["uni096_f00", "uni096_c00", "uni096_s00"], ["uni097_f00", "uni097_c00", "uni097_s00"], ["uni098_f00", "uni098_c00", "uni098_s00"], ["uni099_f00", "uni099_c00", "uni099_s00"], ["uni126_f00", "uni126_c00", "uni126_s00"], ["uni127_f00", "uni127_c00", "uni127_s00"], ["uni130_f00", "uni130_c00", "uni130_s00"], ["uni148_f00", "uni148_c00", "uni148_s00"], ["uni149_f00", "uni149_c00", "uni149_s00"], ["uni154_f00", "uni154_c00", "uni154_s00"], ["uni284_f00", "uni284_c00", "uni284_s00"], ["uni376_f00", "uni376_c00", "uni376_s00"], ["uni377_f00", "uni377_c00", "uni377_s00"]]',
  `貓編組` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]]'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`名字`, `帳號`, `密碼`, `email`, `擁有貓`, `未擁有貓`, `貓編組`) VALUES
('battlecats', 'battlecats', '123', 'battlecats@gmail.com', '[[\"uni000_f00\", \"uni000_c00\", \"uni000_s00\"], [\"uni001_f00\", \"uni001_c00\", \"uni001_s00\"], [\"uni002_f00\", \"uni002_c00\", \"uni002_s00\"], [\"uni003_f00\", \"uni003_c00\", \"uni003_s00\"], [\"uni004_f00\", \"uni004_c00\", \"uni004_s00\"], [\"uni005_f00\", \"uni005_c00\", \"uni005_s00\"], [\"uni006_f00\", \"uni006_c00\", \"uni006_s00\"], [\"uni007_f00\", \"uni007_c00\", \"uni007_s00\"], [\"uni008_f00\", \"uni008_c00\", \"uni008_s00\"], [\"uni024_f00\", \"uni024_c00\", \"uni024_s00\"], [\"uni025_f00\", \"uni025_c00\", \"uni025_s00\"], [\"uni037_f00\", \"uni037_c00\", \"uni037_s00\"], [\"uni041_f00\", \"uni041_c00\", \"uni041_s00\"], [\"uni060_f00\", \"uni060_c00\", \"uni060_s00\"], [\"uni078_f00\", \"uni078_c00\", \"uni078_s00\"], [\"uni088_f00\", \"uni088_c00\", \"uni088_s00\"], [\"uni091_f00\", \"uni091_c00\", \"uni091_s00\"], [\"uni092_f00\", \"uni092_c00\", \"uni092_s00\"], [\"uni093_f00\", \"uni093_c00\", \"uni093_s00\"], [\"uni094_f00\", \"uni094_c00\", \"uni094_s00\"], [\"uni095_f00\", \"uni095_c00\", \"uni095_s00\"], [\"uni096_f00\", \"uni096_c00\", \"uni096_s00\"], [\"uni097_f00\", \"uni097_c00\", \"uni097_s00\"], [\"uni098_f00\", \"uni098_c00\", \"uni098_s00\"], [\"uni099_f00\", \"uni099_c00\", \"uni099_s00\"], [\"uni126_f00\", \"uni126_c00\", \"uni126_s00\"], [\"uni127_f00\", \"uni127_c00\", \"uni127_s00\"], [\"uni130_f00\", \"uni130_c00\", \"uni130_s00\"], [\"uni148_f00\", \"uni148_c00\", \"uni148_s00\"], [\"uni149_f00\", \"uni149_c00\", \"uni149_s00\"], [\"uni154_f00\", \"uni154_c00\", \"uni154_s00\"], [\"uni284_f00\", \"uni284_c00\", \"uni284_s00\"], [\"uni376_f00\", \"uni376_c00\", \"uni376_s00\"], [\"uni377_f00\", \"uni377_c00\", \"uni377_s00\"]]', '[[\"uni000_f00\", \"uni000_c00\", \"uni000_s00\"], [\"uni001_f00\", \"uni001_c00\", \"uni001_s00\"], [\"uni002_f00\", \"uni002_c00\", \"uni002_s00\"], [\"uni003_f00\", \"uni003_c00\", \"uni003_s00\"], [\"uni004_f00\", \"uni004_c00\", \"uni004_s00\"], [\"uni005_f00\", \"uni005_c00\", \"uni005_s00\"], [\"uni006_f00\", \"uni006_c00\", \"uni006_s00\"], [\"uni007_f00\", \"uni007_c00\", \"uni007_s00\"], [\"uni008_f00\", \"uni008_c00\", \"uni008_s00\"], [\"uni024_f00\", \"uni024_c00\", \"uni024_s00\"], [\"uni025_f00\", \"uni025_c00\", \"uni025_s00\"], [\"uni037_f00\", \"uni037_c00\", \"uni037_s00\"], [\"uni041_f00\", \"uni041_c00\", \"uni041_s00\"], [\"uni060_f00\", \"uni060_c00\", \"uni060_s00\"], [\"uni078_f00\", \"uni078_c00\", \"uni078_s00\"], [\"uni088_f00\", \"uni088_c00\", \"uni088_s00\"], [\"uni091_f00\", \"uni091_c00\", \"uni091_s00\"], [\"uni092_f00\", \"uni092_c00\", \"uni092_s00\"], [\"uni093_f00\", \"uni093_c00\", \"uni093_s00\"], [\"uni094_f00\", \"uni094_c00\", \"uni094_s00\"], [\"uni095_f00\", \"uni095_c00\", \"uni095_s00\"], [\"uni096_f00\", \"uni096_c00\", \"uni096_s00\"], [\"uni097_f00\", \"uni097_c00\", \"uni097_s00\"], [\"uni098_f00\", \"uni098_c00\", \"uni098_s00\"], [\"uni099_f00\", \"uni099_c00\", \"uni099_s00\"], [\"uni126_f00\", \"uni126_c00\", \"uni126_s00\"], [\"uni127_f00\", \"uni127_c00\", \"uni127_s00\"], [\"uni130_f00\", \"uni130_c00\", \"uni130_s00\"], [\"uni148_f00\", \"uni148_c00\", \"uni148_s00\"], [\"uni149_f00\", \"uni149_c00\", \"uni149_s00\"], [\"uni154_f00\", \"uni154_c00\", \"uni154_s00\"], [\"uni284_f00\", \"uni284_c00\", \"uni284_s00\"], [\"uni376_f00\", \"uni376_c00\", \"uni376_s00\"], [\"uni377_f00\", \"uni377_c00\", \"uni377_s00\"]]', '[[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]]'),
('user1', 'user1', '123', 'user1@gmail.com', '[[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]]', '[[\"uni000_f00\", \"uni000_c00\", \"uni000_s00\"], [\"uni001_f00\", \"uni001_c00\", \"uni001_s00\"], [\"uni002_f00\", \"uni002_c00\", \"uni002_s00\"], [\"uni003_f00\", \"uni003_c00\", \"uni003_s00\"], [\"uni004_f00\", \"uni004_c00\", \"uni004_s00\"], [\"uni005_f00\", \"uni005_c00\", \"uni005_s00\"], [\"uni006_f00\", \"uni006_c00\", \"uni006_s00\"], [\"uni007_f00\", \"uni007_c00\", \"uni007_s00\"], [\"uni008_f00\", \"uni008_c00\", \"uni008_s00\"], [\"uni024_f00\", \"uni024_c00\", \"uni024_s00\"], [\"uni025_f00\", \"uni025_c00\", \"uni025_s00\"], [\"uni037_f00\", \"uni037_c00\", \"uni037_s00\"], [\"uni041_f00\", \"uni041_c00\", \"uni041_s00\"], [\"uni060_f00\", \"uni060_c00\", \"uni060_s00\"], [\"uni078_f00\", \"uni078_c00\", \"uni078_s00\"], [\"uni088_f00\", \"uni088_c00\", \"uni088_s00\"], [\"uni091_f00\", \"uni091_c00\", \"uni091_s00\"], [\"uni092_f00\", \"uni092_c00\", \"uni092_s00\"], [\"uni093_f00\", \"uni093_c00\", \"uni093_s00\"], [\"uni094_f00\", \"uni094_c00\", \"uni094_s00\"], [\"uni095_f00\", \"uni095_c00\", \"uni095_s00\"], [\"uni096_f00\", \"uni096_c00\", \"uni096_s00\"], [\"uni097_f00\", \"uni097_c00\", \"uni097_s00\"], [\"uni098_f00\", \"uni098_c00\", \"uni098_s00\"], [\"uni099_f00\", \"uni099_c00\", \"uni099_s00\"], [\"uni126_f00\", \"uni126_c00\", \"uni126_s00\"], [\"uni127_f00\", \"uni127_c00\", \"uni127_s00\"], [\"uni130_f00\", \"uni130_c00\", \"uni130_s00\"], [\"uni148_f00\", \"uni148_c00\", \"uni148_s00\"], [\"uni149_f00\", \"uni149_c00\", \"uni149_s00\"], [\"uni154_f00\", \"uni154_c00\", \"uni154_s00\"], [\"uni284_f00\", \"uni284_c00\", \"uni284_s00\"], [\"uni376_f00\", \"uni376_c00\", \"uni376_s00\"], [\"uni377_f00\", \"uni377_c00\", \"uni377_s00\"]]', '[[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
