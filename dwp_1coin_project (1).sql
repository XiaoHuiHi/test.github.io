-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 07:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwp_1coin_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `image`) VALUES
('hern', 'hern', 'profile.jpg'),
('admin', 'admin', 'management.png'),
('TengDeHui', '', 'profile.jpg'),
('TengDeHui', '', 'profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkid` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phonenumber` varchar(11) NOT NULL,
  `payment_method` varchar(20) NOT NULL COMMENT '1=Tng,2=card,3=cash',
  `total` int(11) NOT NULL,
  `table_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkid`, `Name`, `Email`, `Phonenumber`, `payment_method`, `total`, `table_number`) VALUES
(0, 'TENG DE HUI', 'dehui@gmail.com', '182027784', '2', 0, '2'),
(0, 'TENG DE HUI', 'dehui@gmail.com', '182027784', '1', 160, '1'),
(0, 'TENG DE HUI', 'dehui@gmail.com', '182027784', '2', 160, '1'),
(0, 'TENG DE HUI', 'dehui@gmail.com', '182027784', '2', 0, '1'),
(0, 'TENG DE HUI', 'dehui@gmail.com', '182027784', '1', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `contact`, `email`, `comment`) VALUES
(123, 'TENG DE HUI', '0182027784', 'teng2507@gmail.com', 'jkasdbkahsdghaskhdakjd');

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `Food_ID` int(50) NOT NULL,
  `Food_Name` varchar(50) NOT NULL,
  `Food_Cat` varchar(50) NOT NULL,
  `Food_Price` int(50) NOT NULL,
  `Ref_ID` int(50) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE',
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`Food_ID`, `Food_Name`, `Food_Cat`, `Food_Price`, `Ref_ID`, `images_path`, `options`, `stock`) VALUES
(1, 'Chicken Slice', 'Sandwich', 10, 1, 'images/RPLC-all-sandwiches-slicedchicken-MY-594x334.jpg', 'ENABLE', 10),
(2, 'Chicken Teriyaki', 'Sandwich', 10, 2, 'images/RPLC-all-sandwiches-chicken-teriyaki-PH-594x334.jpg', 'ENABLE', 0),
(3, 'Italian B.M.T.™', 'Sandwich', 10, 3, 'images/RPLC-all-sandwiches-italian-bmt-PH-594x334.jpg', 'ENABLE', 0),
(4, 'Meatball Marinara', 'Sandwich', 10, 4, 'images/RPLC-all-sandwiches-meatball-marinara-PH-594x334.jpg', 'ENABLE', 0),
(5, 'Roasted Chicken', 'Sandwich', 10, 5, 'images/RPLC-all-sandwiches-roasted-chicken-PH-594x334.jpg', 'ENABLE', 0),
(6, 'Roast Beef', 'Sandwich', 10, 6, 'images/RPLC-all-sandwiches-roast-beef-MY-594x334.jpg', 'ENABLE', 0),
(7, 'Spicy Italian', 'Sandwich', 10, 7, 'images/RPLC-all-sandwiches-spicy-italian-MY-594x334.jpg', 'ENABLE', 0),
(8, 'Steak & Cheese', 'Sandwich', 10, 8, 'images/RPLC-all-sandwiches-steakandcheese-MY-594x334.jpg', 'ENABLE', 0),
(9, 'Subway Club™', 'Sandwich', 10, 9, 'images/RPLC-all-sandwiches-subway-club-MY-594x334.jpg', 'ENABLE', 0),
(10, 'Subway Melt™', 'Sandwich', 10, 10, 'images/RPLC-all-sandwiches-subway-melt-PH-594x334.jpg', 'ENABLE', 0),
(11, 'Tuna', 'Sandwich', 10, 11, 'images/RPLC-all-sandwiches-tuna-PH-594x334.jpg', 'ENABLE', 0),
(12, 'Seafood & Crab', 'Sandwich', 10, 12, 'images/RPLC-all-sandwiches-seafood-sensation-MY-594x334.jpg', 'ENABLE', 0),
(13, 'Turkey Breast', 'Sandwich', 10, 13, 'images/RPLC-all-sandwiches-turkey-MY-594x334.jpg', 'ENABLE', 0),
(14, 'Turkey Breast & Chicken Slice', 'Sandwich', 10, 14, 'images/RPLC-all-sandwiches-sliced-chicken-ham-PH-594x334.jpg', 'ENABLE', 0),
(15, 'Veggie Delite™', 'Sandwich', 10, 15, 'images/RPLC-all-sandwiches-veggie-delite-PH-594x334.jpg', 'ENABLE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`id`, `image`, `name`) VALUES
(1, 'profile.jpg', 'Teng'),
(2, 'profile.jpg', 'Teng');

-- --------------------------------------------------------

--
-- Table structure for table `imageofphp`
--

CREATE TABLE `imageofphp` (
  `id` int(11) NOT NULL,
  `imagecode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imageofphp`
--

INSERT INTO `imageofphp` (`id`, `imagecode`) VALUES
(1, 'fb.png'),
(2, 'g.png'),
(3, 'logo.png'),
(4, 'love.png'),
(5, 'arrowdown.png'),
(6, 'search.png'),
(7, 'shoppingcart.png');

-- --------------------------------------------------------

--
-- Table structure for table `orderorder`
--

CREATE TABLE `orderorder` (
  `foodid` int(11) NOT NULL,
  `foodname` varchar(40) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `Food_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `Food_ID`, `foodname`, `price`, `quantity`, `username`) VALUES
(1, 10, 'Subway Melt™', 10, 1, 'user'),
(2, 11, 'Tuna', 10, 2, 'user'),
(3, 13, 'Turkey Breast', 10, 2, 'user'),
(4, 14, 'Turkey Breast & Chicken Slice', 10, 4, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Prod_ID` int(50) NOT NULL,
  `Prod_Name` varchar(50) NOT NULL,
  `Prod_cate` varchar(50) NOT NULL,
  `Prod_price` varchar(50) NOT NULL,
  `Prod_stock` int(10) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Prod_ID`, `Prod_Name`, `Prod_cate`, `Prod_price`, `Prod_stock`, `image`, `code`) VALUES
(30, 'Turkey Breast', 'Sandwi', '10', 10, 'Roasted_Chicken.jpg', 'S-001');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`) VALUES
(51, 'TengDeHui', 'profile.jpg'),
(52, 'TengDeHui', 'profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `No` int(100) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Role` varchar(40) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL COMMENT 'Email@gmail.com',
  `PhoneNumber` varchar(12) NOT NULL COMMENT '012-3456789',
  `Summary` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`No`, `Name`, `Date`, `Role`, `Status`, `Email`, `PhoneNumber`, `Summary`, `Password`, `Image`) VALUES
(2, 'Lili', '2015-01-21', 'VIP', 'Active', 'Lili@gmail.com', '0155024948', 'hello', '', 'profile.jpg'),
(18, 'Teng', '0000-00-00', '', '', '12112017613@gmail.com', '', '', '254', ''),
(19, 'TENG DE HUI', '2023-02-10', '', '', 'teng2507@gmail.com', '182027784', 'asdasdad', '123', 'management.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`) VALUES
(17, 'TengDeHui', 'teng2507@gmail.com', '', ' '),
(18, 'TengDeHui', 'dehui7051@gmail.com', 'teng2507', ' '),
(19, 'TengDeHui', '1211201761@gmail.com', '123456', ' '),
(20, 'TengDeHui', '1211201761', '123', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `itemimage` varchar(100) NOT NULL,
  `itemprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `itemname`, `itemimage`, `itemprice`) VALUES
(17, 'Chicken Slice', 'images/RPLC-all-sandwiches-slicedchicken-MY-594x334.jpg', 10),
(19, 'Chicken Slice', 'images/RPLC-all-sandwiches-slicedchicken-MY-594x334.jpg', 10),
(20, 'Chicken Teriyaki', 'images/RPLC-all-sandwiches-chicken-teriyaki-PH-594x334.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageofphp`
--
ALTER TABLE `imageofphp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Prod_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`No`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `Food_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imageofphp`
--
ALTER TABLE `imageofphp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Prod_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
