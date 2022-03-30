-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 03:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `emp_id` int(11) NOT NULL,
  `emp_role` varchar(50) NOT NULL,
  `emp_salary` int(11) NOT NULL,
  `emp_dept` varchar(50) NOT NULL,
  `emp_job_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`emp_id`, `emp_role`, `emp_salary`, `emp_dept`, `emp_job_city`) VALUES
(1, 'developer', 36000, 'IT', 'jaipur'),
(2, 'developer', 35000, 'IT', 'jaipur'),
(3, 'sales', 21000, 'sales', 'agra'),
(4, 'trainer', 36000, 'IT', 'jaipur'),
(5, 'DB admin', 25000, 'IT', 'jaipur'),
(6, 'developer', 45000, 'IT', 'agra'),
(7, 'sr. accounts manager', 78000, 'accounts', 'agra'),
(8, 'accounts manager', 55000, 'accounts', 'jaipur'),
(9, 'developer', 36000, 'IT', 'agra'),
(10, 'dev OOPs eng.', 34000, 'IT', 'agra');

-- --------------------------------------------------------

--
-- Table structure for table `employee_personal_details`
--

CREATE TABLE `employee_personal_details` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_father_name` varchar(50) NOT NULL,
  `emp_address` varchar(200) NOT NULL,
  `emp_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_personal_details`
--

INSERT INTO `employee_personal_details` (`emp_id`, `emp_name`, `emp_father_name`, `emp_address`, `emp_city`) VALUES
(1, 'himanshu', 'rajesh', 'jaipur', 'jaipur'),
(2, 'lokesh', 'raju', 'jaipur', 'jaipur'),
(3, 'anil', 'kamlesh', 'bikaner', 'agra'),
(4, 'arun', 'tarun', 'agra', 'ajmer'),
(5, 'ajay', 'vijay', 'agra', 'agra'),
(6, 'lala', 'bala', 'jaipur', 'agra'),
(7, 'kamlesh', 'vimal', 'agra', 'jodhpur'),
(8, 'harish', 'krish', 'jaipur', 'agra'),
(9, 'vimal', 'kamal', 'jaipur', 'ajmer'),
(10, 'raju', 'vijay', 'ajmer', 'kota');

-- --------------------------------------------------------

--
-- Table structure for table `HR_info`
--

CREATE TABLE `HR_info` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile_num` bigint(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `HR_info`
--

INSERT INTO `HR_info` (`id`, `name`, `mobile_num`, `role`, `city`) VALUES
(11, 'kavita', 989565522, 'HR manager', 'jaipur'),
(12, 'seema', 988515845, 'sales hr', 'agra'),
(13, 'reena', 9845452121, 'sales hr', 'jaipur'),
(14, 'veena', 8543623232, 'hr manager', 'agra'),
(15, 'rita', 8564562222, 'sales hr', 'jaipur'),
(16, 'riya', 9854152222, 'sales hr', 'jaipur'),
(17, 'shreya', 9554226265, 'developers hr', 'jaipur'),
(18, 'sita', 98525462322, 'hr manager', 'agra'),
(19, 'sarita', 985215423, 'trainee hr', 'jaipur'),
(20, 'babita', 86551541212, 'trainee hr manager', 'agra');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `user_name`, `product_name`, `user_address`, `product_price`) VALUES
(1, 'himanshu', 'apple iphone 11', 'jaipur', 45999),
(2, 'mukesh', 'mi watch', 'bikaner', 15999),
(3, 'nikhil', 'macbook', 'bikaner', 87999),
(4, 'lokesh', 'lenovo laptop', 'jaipur', 68999),
(5, 'mansi', 'grey shoes', 'jodhpur', 1599),
(6, 'ankur', 'black shoes', 'ajmer', 1149),
(7, 'vinit', 'apple watch', 'agra', 29999),
(8, 'himanshu', 'mi watch 6', 'kota', 18999),
(9, 'ankur', 'apple iphone 12', 'jaipur', 87999),
(10, 'mukesh', 'mi watch 6', 'bikaner', 18999);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `prod_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_cat` varchar(50) NOT NULL,
  `product_desc` varchar(5000) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`prod_id`, `product_name`, `product_cat`, `product_desc`, `product_price`) VALUES
(1, 'apple watch', 'watch', 'best watch in lowest price', 29999),
(2, 'mi watch', 'watch', 'best mi watch in lowest price', 15999),
(3, 'apple iphone 11', 'mobiles', 'best mobiles ', 45999),
(4, 'apple iphone 11 pro', 'mobile', 'high performance mobile', 68999),
(5, 'macbook', 'laptop', 'apple laptop 1 TB SSD.', 87999),
(6, 'lenovo laptop', 'laptop', 'lenovo thinkpad ', 68999),
(7, 'grey shoes', 'shoe', 'grey running shoes.', 1599),
(8, 'black shoes', 'shoe', 'black shoes for men', 1149),
(9, 'apple iphone 12', 'mobiles', 'apple iphone 12 256gb', 87999),
(10, 'mi watch 6', 'watch', 'mi watch 6 with new features', 18999);

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `reviews` varchar(500) NOT NULL,
  `stars` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_rating`
--

INSERT INTO `product_rating` (`id`, `product_id`, `reviews`, `stars`, `date`) VALUES
(1, 1, 'good product', 4, '2021-10-13'),
(2, 2, 'excellent', 3, '2021-10-09'),
(3, 3, 'bad product', 1, '2021-10-03'),
(4, 4, 'nice', 5, '2021-10-07'),
(5, 5, 'good product', 4, '2021-10-18'),
(6, 6, 'nice one', 4, '2021-10-06'),
(7, 7, 'good one', 4, '2021-10-24'),
(8, 8, 'accch h accha h', 4, '2021-10-12'),
(9, 9, 'bhut acche', 4, '2021-10-03'),
(10, 10, 'very good product', 5, '2021-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `sales_dep`
--

CREATE TABLE `sales_dep` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `mobile_num` bigint(20) NOT NULL,
  `role` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_dep`
--

INSERT INTO `sales_dep` (`id`, `emp_name`, `mobile_num`, `role`, `city`) VALUES
(1, 'ankur', 989565522, 'manager', 'jaipur'),
(2, 'lokesh', 988515845, 'sales', 'agra'),
(3, 'anil', 9845452121, 'sales', 'agra'),
(4, 'arun', 8543623232, 'manager', 'agra'),
(5, 'ajay', 8564562222, 'sales', 'jaipur'),
(6, 'lala', 9854152222, 'sales', 'jaipur'),
(7, 'kamlesh', 9554226265, 'sales', 'jaipur'),
(8, 'harish', 98525462322, 'sales', 'agra'),
(9, 'vimal', 985215423, 'sales', 'jaipur'),
(10, 'raju', 86551541212, 'sales', 'agra');

-- --------------------------------------------------------

--
-- Table structure for table `students_personal_details`
--

CREATE TABLE `students_personal_details` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(30) NOT NULL,
  `stu_father_name` varchar(30) NOT NULL,
  `stu_address` varchar(150) NOT NULL,
  `stu_joining` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_personal_details`
--

INSERT INTO `students_personal_details` (`stu_id`, `stu_name`, `stu_father_name`, `stu_address`, `stu_joining`) VALUES
(1, 'himanshu', 'rajesh', 'jaipur', '2021-10-21'),
(2, 'rajesh', 'vimal', 'jaipur', '2021-10-06'),
(3, 'raju', 'kamal', 'agra', '2021-10-23'),
(4, 'kamlesh', 'vimal', 'agra', '2021-10-15'),
(5, 'vimal', 'kamal', 'jaipur', '2021-10-22'),
(6, 'harish', 'vansh', 'jaipur', '2021-10-21'),
(7, 'kamal', 'arun', 'agra', '2021-10-14'),
(10, 'tarun', 'arun', 'agra', '2021-10-06'),
(11, 'karan', 'vimal', 'jaipur', '2021-10-13'),
(12, 'rajesh', 'vansh', 'jaipur', '2021-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stu_id` int(11) NOT NULL,
  `stu_rollno` int(11) NOT NULL,
  `stu_class` int(11) NOT NULL,
  `stu_section` varchar(5) NOT NULL,
  `stu_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stu_id`, `stu_rollno`, `stu_class`, `stu_section`, `stu_fees`) VALUES
(1, 32, 1, 'a', 1200),
(2, 33, 1, 'b', 1200),
(3, 34, 1, 'b', 1200),
(4, 31, 1, 'a', 1200),
(5, 30, 1, 'a', 1200),
(6, 28, 1, 'a', 1200),
(7, 65, 1, 'c', 1200),
(8, 64, 1, 'c', 1200),
(9, 24, 1, 'a', 1200),
(10, 39, 1, 'b', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `sno` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`sno`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Himanshu', 'Sharma', 'himanshu@gamil.com', 'himanshu098'),
(2, 'Aditya', 'Dhar', 'aditya@gamil.com', 'aditya098'),
(3, 'lokesh', 'saini', 'lokesh@gamil.com', 'lokesh0987'),
(4, 'mansi', 'sharma', 'mansi@gamil.com', 'mansi0987'),
(5, 'mukesh', 'bheel', 'mukesh@gamil.com', 'mukesh0987'),
(6, 'nikhli', 'gupta', 'nikhil@gamil.com', 'nikhil0987'),
(7, 'vinit', 'kumawat', 'vinit@gamil.com', 'vint8943u'),
(8, 'ankur', 'raj', 'ankur@gamil.com', 'ankur9023809'),
(9, 'lokesh', 'Sharma', 'lokesh099@gamil.com', 'loki09877'),
(10, 'Aditya', 'gupta', 'aditya09@gamil.com', 'adi09876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employee_personal_details`
--
ALTER TABLE `employee_personal_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `HR_info`
--
ALTER TABLE `HR_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_dep`
--
ALTER TABLE `sales_dep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_personal_details`
--
ALTER TABLE `students_personal_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_personal_details`
--
ALTER TABLE `employee_personal_details`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `HR_info`
--
ALTER TABLE `HR_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales_dep`
--
ALTER TABLE `sales_dep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students_personal_details`
--
ALTER TABLE `students_personal_details`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
