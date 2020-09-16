-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2020 at 10:07 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `publisher` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `quantity` int DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `publisher`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Rainbow Six Siege', 180000, 'rainbow.jpg', 'Ubisoft', 200, '2020-09-12 11:19:56', '2020-09-12 11:19:56'),
(2, 'Sekiro', 2300000, 'download.jpeg', 'Activision', 3, '2020-09-12 11:28:44', '2020-09-12 11:28:44'),
(3, 'Ghost Of Tsumina', 2000000, 'ghot.jpg', 'Sucker Punch Productions', 20, '2020-09-12 11:29:38', '2020-09-12 11:29:38'),
(4, 'Lef 4 Dead', 120000, 'l4d.jpeg', 'Valve', 10, '2020-09-12 11:30:25', '2020-09-12 11:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`, `created_at`, `updated_at`) VALUES
(3, 'khoantd', '$2y$10$m/H7yIFs.6kbkzGNY.iUu.qwxJhNpva4qromS11bCB4JJNCoI0KQm', 0, '2020-09-15 03:34:42', '2020-09-15 03:34:42'),
(4, 'cong', '$2y$10$i8/4nMVOPc4EAio.OviGYOafSnrn3BHi2VKMrnHge3jf7CeTcp6oy', 0, '2020-09-15 03:38:28', '2020-09-15 03:38:28'),
(5, 'khoanguyen', '$2y$10$i9JGaafGHTNPgtw8Gc3Ic.WgBMVExSCjI4MZpFZ2XprKapyMYlaWO', 0, '2020-09-15 03:58:45', '2020-09-15 03:58:45'),
(6, 'khoa', '$2y$10$aX6Jeg0R12Jtd03K2SddguTqGW06BRlRwkm3xSp8qsB3zeEGyHQZW', 0, '2020-09-15 05:42:21', '2020-09-15 05:42:21'),
(7, 'khoa', '$2y$10$am0ajhc.2kEA.ERPnEcQ.eFYfGme42OR2DLvzisUOfRiOKIzJ6MDe', 0, '2020-09-15 05:42:32', '2020-09-15 05:42:32'),
(8, 'admin', '$2y$10$BrB6ghnLSYBGXpc9nrG5C.D8nWLw1oCyFk7.9.o7ZG3FVL1xDEWi.', 1, '2020-09-15 05:49:46', '2020-09-15 05:49:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
