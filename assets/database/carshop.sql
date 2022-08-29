-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2022 at 10:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productprice` int(11) NOT NULL,
  `productimage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productprice`, `productimage`) VALUES
(2, 'RS7 CB Steering Wheel', 615, './assets/img/product/steeringwheel.png'),
(3, 'ATS Turbo Kit', 3199, './assets/img/product/turbo.png'),
(4, 'KONIG 21\"', 999, './assets/img/product/rims.png'),
(9, 'BMW M Optik Bumper', 799, './assets/img/product/frontbumper.png'),
(20, 'Brembo Brake Kit', 1299, './assets/img/product/brakes.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `userpassword`, `role`) VALUES
(1, 'ArgjendMehmedi', 'argjendmehmeti@outlook.com', '$2y$10$wfeKEZJUAP.Nilim4v6YUun05k/YHxfStdWcw9Xmu9hOyEcFx0imy', 1),
(2, 'KanMisini', 'kanmisini18@gmail.com', '$2y$10$770XgAE/30GBMAsEQaFoJOZOU.eJIDEXXst/Q43fjh..611Wvp/2G', 0),
(3, 'AuroraTopojani', 'at28485@seeu.edu.mk', '$2y$10$Mf7wQIiPpuXfPa241JhYJOTAjBSCKD5gH62.6JBkft7Y34sdwrvfq', 0),
(9, 'JehonaIsmajli', 'jehonamaemira@gmail.com', '$2y$10$FeMbWoP5mX1J/.oh2Z0s3e3TzrnMCN73eUEEEOk1SIjZO/TUiHYOe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `productid`, `userid`, `time`) VALUES
(21, 1, 2, '2022-01-20 02:29:13'),
(22, 3, 2, '2022-01-20 02:29:16'),
(24, 9, 3, '2022-01-20 02:35:15'),
(25, 4, 3, '2022-01-20 02:35:35'),
(26, 2, 1, '2022-01-20 02:35:52'),
(27, 9, 2, '2022-01-25 21:11:20'),
(28, 20, 2, '2022-01-25 21:14:57');

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
