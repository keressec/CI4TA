-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 05:10 AM
-- Server version: 10.4.21-MariaDB-log
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` bigint(20) UNSIGNED NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `date_acara` date NOT NULL,
  `info_acara` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `date_acara`, `info_acara`) VALUES
(3, 'Sunatan Fildan', '2022-07-16', ' di Rumah Fildan Kidul Pasar'),
(6, 'Pernikahan Ilham', '2022-07-23', ' Membantu Persiapan H-1 Acara ');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` bigint(20) UNSIGNED NOT NULL,
  `nama_contact` varchar(255) NOT NULL,
  `nama_alias` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `info_contact` text DEFAULT NULL,
  `id_group` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `nama_contact`, `nama_alias`, `phone`, `email`, `address`, `info_contact`, `id_group`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Padmi Pertiwi', NULL, '0550 2325 864', 'kezia04@gmail.com', 'Ds. Yogyakarta No. 439, Blitar 32285, Gorontalo', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(2, 'Mariadi Martaka Simbolon', NULL, '(+62) 363 9543 5143', 'andriani.sarah@gmail.com', 'Gg. Ters. Buah Batu No. 229, Padang 25203, Sulut', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(3, 'Mitra Satya Sitorus', NULL, '0748 6889 2379', 'jais.suwarno@gmail.com', 'Dk. Rajawali Barat No. 281, Pekanbaru 63246, Papua', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(4, 'Mila Tira Kuswandari', NULL, '(+62) 300 9192 485', 'ajiman60@yahoo.com', 'Dk. Bakhita No. 77, Tanjungbalai 78757, Jabar', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(5, 'Mulyono Dongoran', NULL, '023 1184 691', 'hutasoit.elma@yahoo.co.id', 'Ds. Pasteur No. 959, Pagar Alam 71031, Kaltara', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(6, 'Niyaga Prabowo', NULL, '(+62) 572 7370 1716', 'saputra.dinda@yahoo.com', 'Jln. Daan No. 165, Cilegon 51973, Papua', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(7, 'Amelia Laksita S.H.', NULL, '(+62) 785 5712 371', 'gandriani@gmail.com', 'Dk. Eka No. 476, Sawahlunto 64464, Riau', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(8, 'Paulin Winarsih', NULL, '(+62) 796 3085 0921', 'prabowo.mustofa@gmail.com', 'Ki. Siliwangi No. 556, Tarakan 89973, Kalsel', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(9, 'Fitriani Permata', NULL, '0718 0457 8187', 'wahyudin.gina@yahoo.com', 'Ki. Ters. Kiaracondong No. 692, Cirebon 77414, Sumbar', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL),
(10, 'Raisa Palastri', NULL, '(+62) 640 6924 3857', 'pradipta.eka@yahoo.com', 'Kpg. Babadak No. 265, Cirebon 88197, Babel', 'Data Seeder', 3, '2022-07-14 11:57:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_group` bigint(20) UNSIGNED NOT NULL,
  `nama_group` varchar(255) NOT NULL,
  `info_group` text DEFAULT NULL,
  `Cuaca` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id_group`, `nama_group`, `info_group`, `Cuaca`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Teman SD', ' Teman Pada Saat SD', '', NULL, '2022-07-14 13:28:39', NULL),
(2, 'Teman TK', ' Teman Pada Saat SMP', '', NULL, '2022-07-14 13:28:42', NULL),
(3, 'Teman SMP', ' Teman Pada Saat SMP', '', NULL, '2022-07-14 13:28:44', NULL),
(17, 'Roy', '123', '', '2022-07-14 13:30:39', '2022-07-14 13:31:07', '2022-07-14 13:31:07'),
(18, 'werewr', 'werwer', 'wer', '2022-07-14 13:30:58', '2022-07-14 13:31:04', '2022-07-14 13:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-07-11-142532', 'App\\Database\\Migrations\\Acara', 'default', 'App', 1657555518, 1),
(3, '2022-07-12-065541', 'App\\Database\\Migrations\\User', 'default', 'App', 1657609305, 2),
(4, '2022-07-12-163637', 'App\\Database\\Migrations\\CreateGroups', 'default', 'App', 1657644000, 3),
(6, '2022-07-13-041505', 'App\\Database\\Migrations\\CreateContacts', 'default', 'App', 1657713569, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `info_user` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `info_user`) VALUES
(1, 'Administrator', 'roy@roy.com', 'tes', NULL),
(2, 'Roy Andani Putra', 'roy@putra.com', '$2y$10$/Aw83a/fw806Pq2exwL1OO/N.jaQqcLB4jpDrX5ivXygC5ssGwRl6', NULL),
(3, 'Ryan', 'ryan@ryan.com', '$2y$10$mQDiEJsSR.U9a.3C1Ie2.udiNpzNXYFYSe6U3NEeGWQvj7wam.30.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `contacts_id_group_foreign` (`id_group`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_id_group_foreign` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
