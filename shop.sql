-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 02:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `john_cart`
--

CREATE TABLE `john_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `john_product`
--

CREATE TABLE `john_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `john_transaction`
--

CREATE TABLE `john_transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kingbob_cart`
--

CREATE TABLE `kingbob_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kingbob_product`
--

CREATE TABLE `kingbob_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kingbob_transaction`
--

CREATE TABLE `kingbob_transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_manufacture_date` varchar(255) NOT NULL,
  `product_expire_date` varchar(255) DEFAULT NULL,
  `cost_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `total_stock` int(11) NOT NULL,
  `qty_sold` int(11) NOT NULL,
  `qty_left` int(11) NOT NULL,
  `product_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `product_image`, `product_description`, `product_manufacture_date`, `product_expire_date`, `cost_price`, `selling_price`, `profit`, `total_stock`, `qty_sold`, `qty_left`, `product_score`) VALUES
(1, 'Monkey D. Luffy', '001', './uploads/media62fe11bd5b2ee8.61732711.jpg', 'eeeeeprpr', '2022-08-18', '2022-08-18', 100, 300, 200, 10, 0, 10, NULL),
(4, '0', '002', './uploads/media630736f2ad0af1.09869700.jpg', 'Even though itachi was from the uchiha clan he did\'nt have the same views as the rest. Because of the envy of his clan mates, he was accussed for murdering shisui\r\n', '2022-08-25', '', 100, 300, 200, 200, 0, 200, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `ID` int(11) NOT NULL,
  `item_sold` int(255) NOT NULL,
  `purchase_by` int(11) NOT NULL,
  `delivered_by` varchar(255) NOT NULL,
  `packaged_by` varchar(255) NOT NULL,
  `qty_purchased` int(11) NOT NULL,
  `sold_for` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `ID` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `total_purchase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `customer_score` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `date_of_birth`, `email`, `phone_number`, `password`, `address`, `payment_method`, `customer_score`, `gender`) VALUES
(2, 'john', 'james', 'john', '2022-08-11', 'kingbob@gmail.com', '958968949', 'abc', '', '', 0, 'MALE'),
(3, '', '', '', '', '', '', '', '', '', 0, 'MALE'),
(4, 'Bob', 'king', 'kingbob', '2022-08-03', 'king@gmail.com', '99988877', '123', '', '', 0, 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `_cart`
--

CREATE TABLE `_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_product`
--

CREATE TABLE `_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_transaction`
--

CREATE TABLE `_transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `john_cart`
--
ALTER TABLE `john_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `john_product`
--
ALTER TABLE `john_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `john_transaction`
--
ALTER TABLE `john_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kingbob_cart`
--
ALTER TABLE `kingbob_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kingbob_product`
--
ALTER TABLE `kingbob_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kingbob_transaction`
--
ALTER TABLE `kingbob_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cart`
--
ALTER TABLE `_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_product`
--
ALTER TABLE `_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_transaction`
--
ALTER TABLE `_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `john_cart`
--
ALTER TABLE `john_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `john_product`
--
ALTER TABLE `john_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `john_transaction`
--
ALTER TABLE `john_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kingbob_cart`
--
ALTER TABLE `kingbob_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kingbob_product`
--
ALTER TABLE `kingbob_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kingbob_transaction`
--
ALTER TABLE `kingbob_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_cart`
--
ALTER TABLE `_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_product`
--
ALTER TABLE `_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_transaction`
--
ALTER TABLE `_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
