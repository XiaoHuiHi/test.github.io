CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('hern', 'hern'),
('admin', 'admin');

--
-- Indexes for table `admin`
--

ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);