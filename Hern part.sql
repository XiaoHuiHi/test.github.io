CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `image`) VALUES
('hern', 'hern', ''),
('admin', 'admin', '');

--
-- Indexes for table `admin`
--

ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

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
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`Food_ID`, `Food_Name`, `Food_Cat`,`Food_Price`, `Ref_ID`, `images_path`, `options`) VALUES
(1, 'Chicken Slice', 'Sandwich', 10, 1, 'images/RPLC-all-sandwiches-slicedchicken-MY-594x334.jpg', 'ENABLE'),
(2, 'Chicken Teriyaki', 'Sandwich', 10, 2, 'images/RPLC-all-sandwiches-chicken-teriyaki-PH-594x334.jpg', 'ENABLE'),
(3, 'Italian B.M.T.™', 'Sandwich', 10, 3, 'images/RPLC-all-sandwiches-italian-bmt-PH-594x334.jpg', 'ENABLE'),
(4, 'Meatball Marinara', 'Sandwich', 10, 4, 'images/RPLC-all-sandwiches-meatball-marinara-PH-594x334.jpg', 'ENABLE'),
(5, 'Roasted Chicken', 'Sandwich', 10, 5, 'images/RPLC-all-sandwiches-roasted-chicken-PH-594x334.jpg', 'ENABLE'),
(6, 'Roast Beef', 'Sandwich', 10, 6, 'images/RPLC-all-sandwiches-roast-beef-MY-594x334.jpg', 'ENABLE'),
(7, 'Spicy Italian', 'Sandwich', 10, 7, 'images/RPLC-all-sandwiches-spicy-italian-MY-594x334.jpg', 'ENABLE'),
(8, 'Steak & Cheese', 'Sandwich', 10, 8, 'images/RPLC-all-sandwiches-steakandcheese-MY-594x334.jpg', 'ENABLE'),
(9, 'Subway Club™', 'Sandwich', 10, 9, 'images/RPLC-all-sandwiches-subway-club-MY-594x334.jpg', 'ENABLE'),
(10, 'Subway Melt™', 'Sandwich', 10, 10, 'images/RPLC-all-sandwiches-subway-melt-PH-594x334.jpg', 'ENABLE'),
(11, 'Tuna', 'Sandwich', 10, 11, 'images/RPLC-all-sandwiches-tuna-PH-594x334.jpg', 'ENABLE'),
(12, 'Seafood & Crab', 'Sandwich', 10, 12, 'images/RPLC-all-sandwiches-seafood-sensation-MY-594x334.jpg', 'ENABLE'),
(13, 'Turkey Breast', 'Sandwich', 10, 13, 'images/RPLC-all-sandwiches-turkey-MY-594x334.jpg', 'ENABLE'),
(14, 'Turkey Breast & Chicken Slice', 'Sandwich', 10, 14, 'images/RPLC-all-sandwiches-sliced-chicken-ham-PH-594x334.jpg', 'ENABLE'),
(15, 'Veggie Delite™', 'Sandwich', 10, 15, 'images/RPLC-all-sandwiches-veggie-delite-PH-594x334.jpg', 'ENABLE');

--
-- Indexes for table `admin`
--

ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`Food_ID`);

-- --------------------------------------------------------