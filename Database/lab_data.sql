CREATE TABLE `comp` (
  `serial_sno` varchar(36) NOT NULL,
  `brand_name` varchar(36) DEFAULT NULL,
  `processor` varchar(36) DEFAULT NULL,
  `ram` varchar(36) DEFAULT NULL,
  `storage` varchar(36) DEFAULT NULL,
  `lab_name` varchar(36) DEFAULT NULL,
  `graphics_card` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `comp`
  ADD PRIMARY KEY (`serial_sno`);
--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`serial_sno`, `brand_name`, `processor`, `ram`, `storage`, `lab_name`, `graphics_card`, `status`) VALUES
('Lab1_pc_01', 'Dell Precision Tower 3420', 'Intel Xeon(R) E3-1270', '8 GB DDR4 ', '1 TB HDD', 'Lab-1', 'NVD9', 'working'),
('semi_pc_01', 'HP 280 G4 MT Business', 'Intel Core i5-8500', '4 GB DDR4', '1 TB HDD', 'Seminar Hall', 'Mesa Intel UHD Graphics 630', 'working'),
('Lab2_pc_35', 'Dell Optiplex 9010', 'Intel Core i7-3770', '8 GB DDR3', '1 TB HDD', 'Lab-2', 'AMD Caicos', 'working'),
('Lab3_pc_01', 'Dell Optiplex 9020', 'Intel Core i7-4790', '4 GB DDR3', '500 GB HDD', 'Lab-3', 'Mesa Intel HD Graphics 4600', 'not working'),
('Lab4_pc_01', 'Dell Optiplex 3010', 'Intel Core i5-3470', '4 GB DDR3', '512 GB HDD', 'Lab-4', 'LLVM 13.0.1', 'working'),
('Lab5_pc_01', 'Dell Optiplex 9020', 'Intel Core i7-4790', '4 GB DDR3', '512 GB HDD', 'Lab-5', 'Mesa Intel HD Graphics 4600', 'working');


-- --------------------------------------------------------

--
-- Stand-in structure for view `comp2`
-- (See below for the actual view)
--
CREATE TABLE `comp2` (
`brand_name` varchar(36)
,`processor` varchar(36)
,`ram` varchar(36)
,`storage` varchar(36)
,`lab_name` varchar(36)
,`graphics_card` varchar(50)
,`quantity` bigint(21)
);


-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `type` varchar(36) DEFAULT NULL,
  `lab_name` varchar(36) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`type`, `lab_name`, `brand_name`, `qty`) VALUES
('Switch', 'Lab-1', 'DLink', 1),
('Speaker', 'Seminar Hall', 'Ahuja', 4);

-- ------------------------------------------------------
--
-- Table structure for table `Lab_2`
--

CREATE TABLE `Lab_2` (
  `s.no` varchar(36) DEFAULT NULL,
  `name` varchar(36) DEFAULT NULL,
  `source` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Lab_2`
--

INSERT INTO `Lab_2` (`s.no`, `name`, `source`) VALUES
('1', 'Vim', 'open'),
('2', 'VSCode', 'open');

-- --------------------------------------------------------
--
-- Table structure for table `Lab_5`
--

CREATE TABLE `Lab_5` (
  `sno` varchar(36) NOT NULL,
  `name` varchar(36) NOT NULL,
  `source` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Lab_5`
--

INSERT INTO `Lab_5` (`sno`, `name`, `source`) VALUES
('1', 'Vim', 'open'),
('2', 'VSCode', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `Lab_1`
--

CREATE TABLE `Lab_1` (
  `s.no` varchar(36) DEFAULT NULL,
  `name` varchar(36) DEFAULT NULL,
  `source` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Lab_1`
--

INSERT INTO `Lab_1` (`s.no`, `name`, `source`) VALUES
('1', 'Vim', 'open'),
('2', 'VSCode', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_hall`
--

CREATE TABLE `seminar_hall` (
  `s.no` varchar(36) DEFAULT NULL,
  `name` varchar(36) DEFAULT NULL,
  `source` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminar_hall`
--

INSERT INTO `seminar_hall` (`s.no`, `name`, `source`) VALUES
('1', 'Vim', 'open'),
('2', 'VSCode', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `Lab_4`
--

CREATE TABLE `Lab_4` (
  `s.no` varchar(36) DEFAULT NULL,
  `name` varchar(36) DEFAULT NULL,
  `source` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Lab_4`
--

INSERT INTO `Lab_4` (`s.no`, `name`, `source`) VALUES
('1', 'C 9.4.0', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `Lab_3`
--

CREATE TABLE `Lab_3` (
  `s.no` varchar(36) DEFAULT NULL,
  `name` varchar(36) DEFAULT NULL,
  `source` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Lab_3`
--

INSERT INTO `Lab_3` (`s.no`, `name`, `source`) VALUES
('1', 'Vim', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `password`, `name`) VALUES
('Rao', 'Rao', 'Yadnesh'),
('abhi14', 'abcd', 'Abhishek');

-- --------------------------------------------------------
