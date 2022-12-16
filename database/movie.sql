-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 15 Ara 2022, 22:40:46
-- Sunucu sürümü: 8.0.27
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `movie`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `overview` varchar(500) COLLATE utf8_bin NOT NULL,
  `country` varchar(25) COLLATE utf8_bin NOT NULL,
  `company` varchar(25) COLLATE utf8_bin NOT NULL,
  `category` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `release_date` varchar(30) COLLATE utf8_bin NOT NULL,
  `budget` varchar(20) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `movies`
--

INSERT INTO `movies` (`id`, `user_id`, `title`, `overview`, `country`, `company`, `category`, `release_date`, `budget`, `created_at`) VALUES
(1, 0, '', 'Proident irure exercitation et reprehenderit elit aute. Sunt quis ut labore sunt nulla velit aliqua non deserunt ex excepteur quis. Nulla commodo nostrud proident aliquip ex eiusmod sunt ut aliquip. Veniam aute esse sunt magna officia cillum. Cillum labore sunt tempor anim ipsum laborum exercitation cillum sit veniam sint. Reprehenderit veniam ullamco Lorem mollit et ullamco et quis et velit tempor elit sit.\r\n', 'Amerika', 'deneme', 'Aksiyon', '2022', '', '2022-12-15 21:26:16'),
(2, 10, '', '\r\nCillum incididunt id aute elit aute aliqua reprehenderit mollit nisi eu. Do ipsum tempor elit amet irure id excepteur est esse reprehenderit deserunt tempor. In tempor velit id ut eiusmod esse est aute do. Tempor occaecat aliquip laboris ut velit dolor aliquip anim laborum dolor ea nisi et dolor. Sit irure amet magna laboris consectetur ipsum aliqua eu do veniam. Anim cupidatat culpa eiusmod ipsum quis magna eiusmod laborum deserunt occaecat deserunt eiusmod et.\r\n', 'Amerika', 'deneme', 'Komedi', '2022', '', '2022-12-15 21:27:23'),
(3, 10, '', 'budgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbudgetbu', 'Brezilya', 'deneme', 'Aksiyon', '2022', '222222$', '2022-12-15 21:28:58'),
(4, 10, '', '\r\nDolore enim magna ullamco reprehenderit culpa duis deserunt consequat occaecat proident. Incididunt veniam deserunt proident exercitation proident consequat velit commodo ut adipisicing esse est fugiat officia. Commodo velit consequat tempor cillum deserunt ea nulla aute magna.\r\n', 'Amerika', 'Öğrenci ', 'Aksiyon', '2022', '2222022$', '2022-12-15 21:30:44'),
(5, 10, '4gr', '\r\nDolore enim magna ullamco reprehenderit culpa duis deserunt consequat occaecat proident. Incididunt veniam deserunt proident exercitation proident consequat velit commodo ut adipisicing esse est fugiat officia. Commodo velit consequat tempor cillum deserunt ea nulla aute magna.\r\n', 'Amerika', 'deneme', 'Aksiyon', '2020', '33333322$', '2022-12-15 21:32:04'),
(6, 10, 'Aute ea occaecat commodo duis id enim esse.', '\r\nOccaecat culpa fugiat eu voluptate ea exercitation laborum excepteur deserunt cupidatat est excepteur aliquip mollit. Nostrud sit exercitation velit est consectetur pariatur velit adipisicing ex. In nostrud ipsum ea magna deserunt aliquip exercitation laborum. Eu proident id amet minim irure elit exercitation dolore occaecat et nulla ullamco et. Ut esse duis cupidatat adipisicing sint adipisicing nulla minim excepteur officia est qui non cupidatat. Laboris excepteur dolor excepteur enim nisi v', 'Amerika', 'deneme', 'Aksiyon', '2022', '733333322$', '2022-12-15 21:34:01'),
(7, 10, '4gr', 'yenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfa yenisayfa yenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfayenisayfa', 'Amerika', 'Öğrenci ', 'Aksiyon', '2022', '2222022$', '2022-12-15 21:36:01'),
(8, 10, 'Aute ea occaecat commodo duis id enim esse.', 'Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo duis id enim esse.Aute ea occaecat commodo du', 'Fransa', 'deneme', 'Aksiyon', '2020', '733333322$', '2022-12-15 21:37:11'),
(9, 10, 'Aute ea occaecat commodo duis id enim esse..', 'Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..Aute ea occaecat commodo duis id enim esse..', 'Brezilya', 'Öğrenci ', 'Aksiyon', '2022', '2222022$', '2022-12-15 21:41:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movies_rate`
--

DROP TABLE IF EXISTS `movies_rate`;
CREATE TABLE IF NOT EXISTS `movies_rate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movie_id` int NOT NULL,
  `user_id` int NOT NULL,
  `rate` int NOT NULL,
  `source` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `movies_rate`
--

INSERT INTO `movies_rate` (`id`, `movie_id`, `user_id`, `rate`, `source`, `created_at`) VALUES
(2, 2, 2, 2, 'tmdb', '0000-00-00 00:00:00'),
(3, 3, 5, 3, 'tmdb', '2022-12-15 11:39:50'),
(4, 0, 0, 0, 'tmdb', '2022-12-15 11:47:10'),
(5, 2, 2, 10, 'tmdb', '2022-12-15 11:47:45'),
(6, 0, 0, 0, 'tmdb', '2022-12-15 20:02:25'),
(7, 0, 0, 0, 'tmdb', '2022-12-15 20:04:11'),
(8, 0, 0, 0, 'tmdb', '2022-12-15 20:07:20'),
(9, 238, 10, 4, 'tmdb', '2022-12-15 20:15:24'),
(10, 238, 10, 3, 'tmdb', '2022-12-15 20:15:41'),
(11, 238, 10, 3, 'tmdb', '2022-12-15 20:16:26'),
(12, 238, 10, 3, 'tmdb', '2022-12-15 20:19:25'),
(13, 238, 10, 3, 'tmdb', '2022-12-15 20:19:35'),
(14, 237, 10, 2, 'tmdb', '2022-12-15 20:20:22'),
(15, 237, 10, 2, 'tmdb', '2022-12-15 20:21:11'),
(16, 237, 10, 2, 'tmdb', '2022-12-15 20:21:13'),
(17, 237, 10, 4, 'tmdb', '2022-12-15 20:21:16'),
(18, 237, 10, 5, 'tmdb', '2022-12-15 20:21:27'),
(19, 237, 10, 5, 'tmdb', '2022-12-15 20:23:10'),
(20, 238, 10, 3, 'tmdb', '2022-12-15 20:28:18'),
(21, 238, 10, 5, 'tmdb', '2022-12-15 20:28:29'),
(22, 238, 10, 2, 'tmdb', '2022-12-15 20:31:11'),
(23, 238, 10, 3, 'tmdb', '2022-12-15 20:31:19'),
(24, 238, 10, 2, 'tmdb', '2022-12-15 20:31:37'),
(25, 238, 10, 2, 'tmdb', '2022-12-15 20:34:03'),
(26, 238, 10, 2, 'tmdb', '2022-12-15 20:34:07'),
(27, 238, 10, 2, 'tmdb', '2022-12-15 20:34:37'),
(28, 0, 10, 2, 'tmdb', '2022-12-15 20:34:54'),
(29, 851644, 0, 2, 'tmdb', '2022-12-15 20:35:29'),
(30, 851644, 10, 2, 'tmdb', '2022-12-15 20:36:02'),
(31, 27679, 10, 5, 'tmdb', '2022-12-15 22:15:32'),
(32, 27679, 10, 5, 'tmdb', '2022-12-15 22:16:04'),
(33, 27679, 10, 5, 'tmdb', '2022-12-15 22:16:44'),
(34, 2767, 10, 5, 'tmdb', '2022-12-15 22:18:06'),
(35, 77, 10, 1, 'tmdb', '2022-12-15 22:19:07'),
(36, 55, 10, 5, 'tmdb', '2022-12-15 22:21:09'),
(37, 557, 10, 5, 'tmdb', '2022-12-15 22:23:17'),
(38, 557, 10, 5, 'tmdb', '2022-12-15 22:26:54'),
(39, 9, 10, 2, 'mydb', '2022-12-15 22:27:11'),
(40, 9, 10, 4, 'mydb', '2022-12-15 22:39:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
