-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 01:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampleDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` bigint(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `caddress` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `caddress`, `city`, `phone_no`, `gender`) VALUES
(101, 'sdfgh', 'xcvbnm', 'rtfyguhj', 87418451544, 'f'),
(102, 'zxcvbnm', 'sdfghjkxcvb', 'sdfyui', 87643211212, 'm'),
(103, 'xcvbnm', 'ghjklkjhgf', 'zxcvbnm', 7984512161, 'm'),
(104, 'xcvbnm', 'wertyuio', 'zxcvbnm', 7946513256, 'f'),
(105, 'dfghjkl', 'qwertyuii', 'xcvbnm', 7845129846, 'f'),
(106, 'tyuio', 'ertyujmvb', 'sdfghjk', 8974651321, 'm'),
(108, 'cvbnm', 'dfghjkllj', 'ytyhbn', 9784651320, 'm'),
(109, 'tyghbnm', 'fghvbnm', 'dfghj', 9874651320, 'f'),
(109, 'sdfghjk', 'ertyjklknb', 'xcvbnm', 5487612685, 'm'),
(110, 'ytughjknm', 'tyfghjbnm', 'erdfghb', 9876513213, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` bigint(10) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `location`, `country`, `pincode`, `state`) VALUES
(101, 'IT', 'jaipur', 'india', 302520, 'rajasthan'),
(102, 'Marketing', 'jaipur', 'india', 302102, 'rajasthan'),
(103, 'IT', 'Ahemdabad', 'india', 201533, 'gujarat'),
(104, 'Accountant', 'pune', 'india', 231230, 'maharashtra'),
(105, 'Sales', 'mumbai', 'india', 232105, 'maharashtra'),
(106, 'marketing', 'jaipur', 'india', 332523, 'rajasthan '),
(107, 'IT', 'Ahemdabad', 'india', 320215, 'gujarat'),
(108, 'Accountant', 'pune', 'india', 215025, 'maharashtra'),
(109, 'IT', 'jaipur', 'india', 320562, 'rajasthan '),
(110, 'sales', 'jaipur', 'india', 325231, 'rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `consultation_charges` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `phone`, `city`, `address`, `consultation_charges`) VALUES
(101, 'sandeep', 8745126566, 'kishangarh', 'station rd', 200),
(102, 'kunal', 8461165646, 'ajmer', 'vaishali nagar', 500),
(103, 'pooja', 84613165464, 'kishangarh', 'shivaji nagar', 300),
(104, 'krishna', 4865616546, 'jaipur', 'nandpuri colony', 200),
(105, 'tanisha', 7986465464, 'jaipur', 'nandan residency', 100),
(106, 'kriti', 9645646468, 'ajmer', 'kesar ganj', 200),
(107, 'shruti', 98797456454, 'kishangarh', 'rajhans colony', 300),
(108, 'meenal', 87946546465, 'kishangarh', 'jain colony', 600),
(109, 'shivam', 879564643164, 'jaisalmer', 'station rd', 200),
(110, 'rishi', 874132167863, 'udaipur', 'airport rd', 500);

-- --------------------------------------------------------

--
-- Table structure for table `Emp`
--

CREATE TABLE `Emp` (
  `eid` bigint(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `eadd` varchar(50) NOT NULL,
  `ecity` varchar(20) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Emp`
--

INSERT INTO `Emp` (`eid`, `ename`, `eadd`, `ecity`, `phone_no`, `gender`) VALUES
(101, 'saloni', 'rajhans colony', 'kishangarh', 8798465137, 'Female'),
(102, 'shruti', 'rajhans colony', 'kishangarh', 87946513214, 'Female'),
(103, 'afreen', 'rajat path', 'jaipur', 8971144941, 'Female'),
(104, 'ritika', 'lal kothi', 'jaipur', 8961213225, 'Female'),
(105, 'nidhi', 'shivaji nagar', 'kishangarh', 7986541321, 'Female'),
(109, 'sdfghj', 'wertyuiolknbv', 'fdsvnb', 5468233132, 'Male'),
(106, 'mvbv', 'fgetrgfc', 'cgfrtf', 8975613232, 'Male'),
(107, 'zxcvb', 'yyghvhjthy', 'vbnvgy', 8764531323, 'Female'),
(108, 'kdnskfn', 'kewjkwcke', 'knckw', 8412187912, 'Male'),
(110, 'kjndww', 'cndjewnjwnwe', 'bvbhiffwfj', 51189451893, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` bigint(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `fees` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `phone`, `address`, `appointment_date`, `fees`) VALUES
(101, 'krishna', 8974616546, 'azad nagar', '2022-03-23', 300),
(102, 'kriti', 8546546465, 'kesar ganj', '2022-03-15', 200),
(103, 'tanisha', 7894556546, 'shivaji nagar', '2022-04-04', 100),
(104, 'shruti', 8456131565, 'rajhans colony', '2022-06-04', 200),
(105, 'saloni', 7879464133, 'rajhans colony', '2022-05-16', 500),
(106, 'meenal', 8795461465, 'jain colony', '2022-06-30', 500),
(107, 'priya', 87131687845, 'station rd', '2022-10-21', 200),
(108, 'rupal', 7984631511, 'mahaveer colony', '2022-06-04', 200),
(109, 'gunjan', 7986465431, 'link road', '2022-05-26', 300),
(110, 'peehu', 7986545564, 'agarsen nagar', '2022-12-12', 300);

-- --------------------------------------------------------

--
-- Table structure for table `officecode`
--

CREATE TABLE `officecode` (
  `officecode` bigint(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officecode`
--

INSERT INTO `officecode` (`officecode`, `phone`, `city`, `address`, `state`, `country`) VALUES
(101, 8795113156, 'kishangarh', 'azad nagar', 'rajasthan', 'india'),
(102, 8745612165, 'ajmer', 'vaishali nagar', 'rajasthan', 'india'),
(103, 84654845566, 'jaipur', 'nandpuri colony', 'rajasthan', 'india'),
(104, 79416546165, 'jaipur', 'shastri nagar', 'rajasthan', 'india'),
(105, 8945168646, 'jaipur', 'rajat path', 'rajasthan', 'india'),
(106, 84125415465, 'kishangarh', 'shivaji nagar', 'rajasthan ', 'india'),
(107, 8416861664, 'ajmer', 'panchsheel', 'rajasthan', 'india'),
(108, 9861324464, 'kishangarh', 'azad nagar', 'rajasthan', 'india'),
(109, 8451316546, 'jaipur', 'nandan residency', 'rajasthan ', 'india'),
(110, 87451264513, 'jaipur', 'vijay path', 'rajasthan', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(10) NOT NULL,
  `cid` bigint(10) NOT NULL,
  `order_date` date NOT NULL,
  `Shipping_date` date NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cid`, `order_date`, `Shipping_date`, `phone_no`, `cname`) VALUES
(111, 101, '2022-01-22', '2028-02-22', 8798465134, 'dfghjkgh'),
(112, 102, '2012-03-22', '2020-03-22', 87946513211, 'zxcvbnm'),
(113, 103, '2003-02-22', '2010-02-22', 9879465131, 'xcvbnm'),
(114, 104, '2011-06-22', '2023-06-22', 8784651237, 'xcvbnm'),
(115, 105, '2023-04-22', '2030-04-22', 9865451131, 'dfghjkl'),
(116, 106, '2023-12-21', '2030-12-21', 8951231316, 'zxcvbnm'),
(117, 107, '2008-07-22', '2018-07-22', 897461321, 'cvbnm'),
(118, 108, '2006-03-22', '2010-03-22', 7946546112, 'vnmmkjk'),
(119, 109, '2003-05-22', '2010-05-22', 9841215661, 'bhgyguyb'),
(120, 110, '2003-09-21', '2015-09-21', 6189466565, 'xcvbnmjh');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_id` bigint(10) NOT NULL,
  `item_id` bigint(10) NOT NULL,
  `product_id` bigint(10) NOT NULL,
  `quantity` bigint(10) NOT NULL,
  `price` bigint(10) NOT NULL,
  `discount` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_id`, `item_id`, `product_id`, `quantity`, `price`, `discount`) VALUES
(111, 450, 141, 2, 30, 5),
(112, 451, 142, 6, 52, 10),
(113, 452, 143, 5, 60, 20),
(114, 453, 144, 4, 20, 20),
(115, 454, 145, 3, 40, 10),
(116, 455, 146, 8, 50, 60),
(117, 456, 147, 8, 40, 20),
(118, 457, 148, 6, 35, 30),
(119, 458, 149, 3, 80, 30),
(120, 459, 150, 9, 78, 60);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` bigint(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `brand_id` bigint(10) NOT NULL,
  `category_id` bigint(10) NOT NULL,
  `model_year` bigint(10) NOT NULL,
  `list_price` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `brand_id`, `category_id`, `model_year`, `list_price`) VALUES
(141, 'Samsung phone', 101, 201, 2001, 32000),
(142, 'Speakers', 102, 202, 2005, 30000),
(143, 'clinic plus', 103, 203, 2000, 20),
(144, 'lux', 104, 204, 1999, 10),
(145, 'colgate', 105, 205, 1990, 10),
(146, 'bottle', 106, 206, 1993, 60),
(147, 'tiffin box', 107, 207, 2008, 250),
(148, 'chargers', 108, 208, 2000, 300),
(149, 'amul cheese', 109, 209, 2001, 150),
(150, 'cream', 110, 210, 2003, 50);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `store_id` bigint(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `active` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `store_id`, `phone`, `active`, `email`) VALUES
(101, 'raj', 1001, 98745244887, 'active', 'raj@gmail.com'),
(102, 'yogesh', 1002, 87541145158, 'not active', 'yogesh@gmail.com'),
(103, 'harsh', 1001, 87514542155, 'active', 'harsh@gmail.com'),
(104, 'muskan', 1001, 87451214512, 'active', 'muskan@gmail.com'),
(105, 'sanjana', 1002, 87512154522, 'not active', 'sanjana@gmail.com'),
(106, 'palak', 1002, 8451545154, 'not active', 'palak@gmail.com'),
(107, 'abhishek', 1001, 8465198452, 'active', 'abhishek@gmail.com'),
(108, 'nishant', 1001, 85154845155, 'not active', 'nishant@gmail.com'),
(109, 'ankit', 1003, 84128455545, 'active', 'ankit@gmail.com'),
(110, 'rishita', 1003, 7846512845, 'not active', 'rishita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `phone`, `street`, `city`, `state`) VALUES
(1, 'krishna', 8946512855, 'nandpuri colony', 'jaipur', 'Rajasthan'),
(2, 'tanisha', 98746546464, 'nandan residency', 'jaipur', 'Rajasthan'),
(3, 'kriti', 9798451166, 'mahaveer nagar', 'jaipur', 'Rajasthan'),
(4, 'shivam', 8794131563, 'azad nagar', 'kishangarh', 'Rajasthan'),
(5, 'sankalp', 7984651123, 'rajhans colony', 'kishangarh', 'Rajasthan'),
(6, 'harshit', 8974531314, 'shivaji nagar', 'kishangarh', 'Rajasthan'),
(7, 'saloni', 8784545412, 'rajhans colony', 'kishangarh', 'Rajasthan'),
(8, 'sakshi', 8778545412, 'rajhans colony', 'kishangarh', 'Rajasthan'),
(9, 'ankur', 8778545412, 'jain colony', 'kishangarh', 'Rajasthan'),
(10, 'akshay', 78878545412, 'vijay path', 'jaipur', 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` bigint(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `scity` varchar(20) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `saddress`, `scity`, `phone_no`, `gender`) VALUES
(101, 'krishna', 'azad nagar', 'kishangarh', 98845621231, 'Female'),
(102, 'Ruchi', 'shivaji nagar', 'ajmer', 48878412899, 'Female'),
(103, 'ayush', 'vaishali nagar', 'ajmer', 8971144981, 'Male'),
(104, 'tanisha', 'mahaveer angar', 'jaipur', 8961213238, 'Female'),
(105, 'akshay', 'mahaveer nagar', 'jaipur', 83232164465, 'Male'),
(106, 'kunal', 'kiran path', 'jaipur', 8798452132, 'Male'),
(107, 'kriti', 'nandan residency', 'jaipur', 54236498762, 'Female'),
(108, 'antima ', 'mitra niwas', 'kishangarh', 49873211962, 'Female'),
(109, 'unnati', 'tikal nagar', 'kishangarh', 8798465132, 'Female'),
(110, 'meenal', 'shivaji nagar', 'kishangarh', 87946513213, 'Female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
