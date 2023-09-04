-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2023 at 06:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int UNSIGNED NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi_produk` text,
  `id_user_input` int UNSIGNED DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `id_user_update` int UNSIGNED DEFAULT NULL,
  `tgl_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `id_user_input`, `tgl_input`, `id_user_update`, `tgl_update`) VALUES
(1, 'Bluetooth Multi-Device teeteteteteee', 'Keyboard meja wiresless untuk komputer, tablet, dan smartphone', 4, '2021-01-29', NULL, '2021-01-29'),
(2, 'USB Unifying Receiver', 'Receiver USB yang bisa digunakan untuk sebuah mouse atau keyboard unifying', 1, '2021-01-29', NULL, '2021-01-29'),
(3, 'M590 Multi-Device Silent', 'Mouse wiresless hening untuk power user', NULL, '2021-01-29', NULL, '2021-01-29'),
(4, 'Wireless Touch Keyboard K400 Plus', 'Keyboard HTPC untuk TV yang terhubungkan dengan PC', NULL, '2021-01-29', NULL, '2021-01-29'),
(5, 'K380 Multi-Device Bluetooth Keyboard', 'Keyboard minimalis untuk komputer, tablet, dan ponsel', 2, '2021-01-29', NULL, '2021-01-29'),
(6, 'edit nama', 'edit deskrip', 1, NULL, NULL, NULL),
(8, 'MC Hammer', 'u can\'t touch this, she so freak freak freak', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_email` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_password` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `img_file` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `user_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `img_file`, `user_created_at`) VALUES
(4, 'dena', 'dena@yahoo.com', '$2y$10$mJSFX9Akay4KiyWbD8UK2edWXuOlFDxTHXUtvTi9slHaBQLyXa9sq', '', '2023-09-02 20:32:30'),
(5, 'krishome tk', 'tkrishome@home.com', '$2y$10$/0YCvlhH6gWersbD8CjrdO3a3rzvftm18QXMsYC1RAhIRLeCcloc6', '', '2023-09-03 19:23:24'),
(6, 'Tom Delonge', 'tom@delonge.com', '$2y$10$SNYgdvmy7REertwoNJryE.UxZsXpniO9gy3GgvTNaMVftLRKIhlfa', '1693849943_e87e157ee5507975c2b9.jpg', '2023-09-04 02:19:13'),
(30, 'krauu', 'hen@mailed.com', '$2y$10$3M53U634dTVwHAhgr6K7/OLGXLwWg0Hrl8j9beD3ntsHDL4f2DaTi', '1693849733_14d7cb19516c070f30c5.jpg', '2023-09-04 16:19:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
