-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 11:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `add_by` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `job_id` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `add_by`, `employee_name`, `job_id`, `designation`, `shift`, `mobile`, `email`, `photo`, `comment`) VALUES
(10, 1, 'Sajidul Islam', '10', 'Sr. Web Developer', 'Second', '01929597308', 'sajidul.euitsols@gmail.com', 'uploads/74433__49110__51415110_1803080469798212_2654262850893119488_o.jpg', 'Positive.'),
(11, 3, 'Md. Arif Babu', '11', 'Sr. Web Developer', 'Second', '01773940587', 'arif.euitsols@gmail.com', 'uploads/37521__76073__52345618_1164276433732801_6443511556108976128_o.jpg', 'Positive.'),
(12, 1, 'Siyam Ahmed Nahid ', '12', 'Web Developer & Architect', 'Second', '0179819256', 'siyam.euitsols.@gmail.com', 'uploads/65063__78667888_2236573879975683_9153388297840492544_o.jpg', 'Positive.'),
(13, 1, 'Faruk Ahmed', '13', 'Business Development Manager', 'First', '01796173484', 'faruk.euitsols@gmail.com', 'uploads/25532__33070__20913__51631929_616374988791426_6384253106347048960_o.jpg', 'Good.'),
(14, 3, 'Mostafijur Rahman', '14', 'Web Developer', 'Second', '01773381259', 'mustafizur.euitsols@gmail.com', 'uploads/36016___MG_2655.jpg', 'Good.'),
(15, 1, 'Fazle Rabbi', '15', 'Sr. Graphic Designer', 'First', '01717455616', 'rabbi.euitsols@gmail.com', 'uploads/25619__IMG_20190726_173045.JPG', 'Positive.'),
(16, 1, 'Hanna Hasiba', '16', 'QA', 'Second', '01700000000', 'hanna.euitsols@gmail,com', 'uploads/1576048263___MG_2659.jpg', 'Good.'),
(17, 3, 'Kaiser Kabir Kochi', '17', 'Broadcast Manager', 'Second', '01711086369', 'kochi.euitsols@gmail.com', 'uploads/28860__78349130_10212075566765032_5506676457528623104_o.jpg', 'Very Positive.'),
(18, 3, 'Tanmoon Taz Shetu', '18', 'Software Engineer', 'Second', '01787310690', 'shetu.euitsols@gmail.com', 'uploads/1576048958__11257843_1110580722289452_5289468111342567521_n.jpg', 'Positive.'),
(19, 1, 'Md. Rakib Islam', '19', 'Jr. Web Developer', 'First', '01725941200', 'rakib.euitsols@gmail.com', 'uploads/24711___MG_2396.jpg', 'Positive.'),
(20, 1, 'Abu Hasan Sadhin', '20', 'Jr. Software Engineer', 'First', '01794867982', 'sadhin.euitsols@gmail.com', 'uploads/79036__75576571_2475044866097495_2213199366343098368_n.jpg', 'Positive.'),
(21, 3, 'Md. Nazmul Parvez', '21', 'Jr. Web Developer', 'First', '01740109920', 'nazmul.euitsols@gmail.com', 'uploads/1576049375___MG_2416.jpg', 'Positive.'),
(22, 1, 'Alamin', '22', 'Jr. Web Developer', 'First', '01889977951', 'alamin.euitsols@gmail.com', 'uploads/85154__16484__alamin2.jpg', 'Good.'),
(23, 3, 'Mst. Rukaiya', '23', 'Jr. Graphic Designer', 'First', '01785964133', 'rukiya.euitsols@gmail.com', 'uploads/46511__20969___MG_2438.jpg', 'Good.'),
(24, 1, 'Sujon Roy', '24', 'Jr. Web Developer', 'First', '01740480205', 'sujon.euitsols@gmail.com', 'uploads/72305___MG_8590.jpg', 'Positive.'),
(29, 1, 'Md. Mamun Ur Rashid ', '29', 'Country Director ', 'First', '01717221398', 'info@euitsols.com', 'uploads/96337___MG_2523.jpg', 'Very Positive.'),
(30, 1, 'Unus Ali', '1111', 'Receptionist', 'First', '01754856822', 'unus.euitsols@gmail.com', 'uploads/1576991547__Picture - Vinicius Muller.JPG', 'Good'),
(34, 1, 'Jolil', '34', 'Receptionist-2', 'Second', '01879564255', 'jolil.euitsols@gmail.com', 'uploads/1577015113__72622102_2290706894371362_1819790880404406272_n.jpg', 'Good.');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_roll` int(11) NOT NULL,
  `student_reg` int(11) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `institute_name` text NOT NULL,
  `department` varchar(50) NOT NULL,
  `student_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_roll`, `student_reg`, `shift`, `gender`, `institute_name`, `department`, `student_pic`) VALUES
(15, 'Goutom Roy', 278635, 147500, 'First', 'Male', 'Thakurgaon Polytechnic Institute', 'Computer', 'uploads/34268__goutom.jpg'),
(16, 'Kawser Alam', 278676, 147501, 'First', 'Male', 'Thakurgaon Polytechnic Institute', 'Computer', 'uploads/49072__kawser2.jpg'),
(17, 'Hira Roy', 200302, 147502, 'First', 'Male', 'Thakurgaon Polytechnic Institute', 'Computer', 'uploads/70898__hira.jpg'),
(21, 'Khadiza Moni', 200326, 147504, 'First', 'Female', 'Thakurgaon Polytechnic Institute', 'Computer', 'uploads/30522__86242__moni.jpg'),
(24, 'Jannatun Ferdows', 200325, 179736, 'First', 'Female', 'Thakurgaon Polytechnic Institute', 'Computer', 'uploads/1576825159__46452__akhi.jpg'),
(26, 'Taposh', 1458265, 789548, 'First', 'Male', 'Thakurgaon Polytechnic Institute', 'Computer', 'uploads/1577007016__women-1912050803.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `sallery` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `join_date`, `sallery`, `subject`, `teacher_pic`) VALUES
(2, 'Md Mahfuzur Rahman', '2017-04-24', 36000, 'Wordpress', 'uploads/51707__55949133_129152538194245_4239225260517359616_o.jpg'),
(6, 'Mustafizur Rahman', '2018-02-06', 22000, 'Laravel', 'uploads/77964__57366714_2382067255398191_3876624433258954752_o.jpg'),
(8, 'Siyam Ahmed Nahid', '2018-04-24', 25000, 'Graphic Design', 'uploads/78156__52474345_2050119545287785_3394148375824695296_o.jpg'),
(9, 'Arif Islam', '2019-10-24', 17000, 'Graphic Design', 'uploads/89889___MG_2617.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'rakibislam', '200293'),
(3, 'alamin', '205526'),
(4, 'manager', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
