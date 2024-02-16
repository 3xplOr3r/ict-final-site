-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2024 at 03:40 AM
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
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `roll`, `date`, `subject_name`, `status`) VALUES
(50, '451447', '2024-02-14', 'Engineering Drawing', 'P'),
(51, '451450', '2024-02-14', 'Engineering Drawing', 'P'),
(52, '451452', '2024-02-14', 'Engineering Drawing', 'A'),
(53, '451447', '2024-02-14', 'Engineering Drawing', 'P'),
(54, '451450', '2024-02-14', 'Engineering Drawing', 'P'),
(55, '451452', '2024-02-14', 'Engineering Drawing', 'A'),
(56, '451447', '2024-02-15', 'Engineering Drawing', 'P'),
(57, '451450', '2024-02-15', 'Engineering Drawing', 'P'),
(58, '451452', '2024-02-15', 'Engineering Drawing', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `num` varchar(20) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `jobrole` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `gpa` decimal(3,2) NOT NULL,
  `pass_year` smallint(4) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `uname`, `dob`, `email`, `num`, `gender`, `jobrole`, `exam`, `gpa`, `pass_year`, `dep`, `pic`) VALUES
(49, 'biplobahmed', '2023-04-17', 'abiplob23@gmail.com', '1859976578', 'Male', '0', 'SSC', '4.22', 2019, 'CSE', '1680950527Screenshot from 2023-04-06 17-38-45.png'),
(50, 'biplobahmed', '2023-04-04', 'abiplob23@gmail.com', '1859976578', 'Male', '0', 'SSC', '4.22', 2019, 'CSE', '1680950800wallpaperflare.com_wallpaper.jpg'),
(51, 'biplobahmed', '2023-04-11', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1680950967wallpaperflare.com_wallpaper.jpg'),
(52, 'biplobahmed', '2023-04-12', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1680952947lake-mountains-rocks-twilight-sunset-starry-sky-purple-sky-6016x6016-3768.jpg'),
(53, 'biplobahmed', '2023-04-12', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1680953229lake-mountains-rocks-twilight-sunset-starry-sky-purple-sky-6016x6016-3768.jpg'),
(54, 'biplobahmed', '2023-04-20', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1681063274Screenshot from 2023-04-07 23-47-13.png'),
(55, 'biplob', '2023-04-06', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1681513804Screenshot from 2023-04-06 17-38-45.png'),
(56, 'biplob', '2023-04-11', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'HSC', '4.00', 2019, 'CSE', '1681514046Screenshot from 2023-04-03 08-31-33.png'),
(57, 'biplobahmed', '2023-04-06', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1681514338Screenshot from 2023-04-05 00-53-35.png'),
(58, 'biplobahmed', '2023-03-31', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1682536801Screenshot from 2023-04-02 18-00-09.png'),
(59, 'biplobahmed', '2000-09-28', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1684612576mia.jpeg'),
(60, 'biplobahmed', '2000-09-28', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1684612820mia.jpeg'),
(61, 'biplob', '2000-09-28', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1684613145mia.jpeg'),
(62, 'niloyahmed', '2002-06-18', 'niloyk3111@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1684819932mia.jpeg'),
(63, 'biplobahmed', '2002-03-20', 'niloyk3121@gmail.com', '1859976758', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1684820085mia.jpeg'),
(64, 'biplob ahmed niloy', '2000-09-28', 'abiplob23@gmail.com', '1859976578', 'Male', 'student', 'SSC', '4.00', 2019, 'CSE', '1684822548mia.jpeg'),
(65, 'monkey fahim', '1988-12-16', 'koitor', '1869963406', 'Male', 'mbbs', 'SSC', '3.00', 2017, 'CSE', '1691951807maskan.jpg'),
(66, 'ahsanul kabir', '1999-11-03', 'akl57@gmail.com', '1859976578', 'Male', 'student', 'SSC', '5.00', 2019, 'Civil', '1699987170muhit2k23 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `name`, `dob`, `age`, `contact`, `email`, `image`) VALUES
(1, 'biplob', '1999-09-28', 23, '01859976578', 'abiplob23@gmail.com', 'download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `roll` varchar(255) NOT NULL,
  `department` text DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(2555) DEFAULT NULL,
  `avatar` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `roll`, `department`, `semester`, `email`, `pass`, `avatar`) VALUES
(1, 'biplob', 'ahmed', '495012', 'computer', '8th', 'abiplob233@gmai.com', '$2y$10$Eun1BYuQdeOLtPeO9OMDXu3OlU0SQVtRYI9Zl9Kbtq2homk9zFju.', '1689885389images.jpeg'),
(2, 'biplob', 'ahmed', '451447', 'computer', '7th', 'abiplob23@gmail.com', '$2y$10$ptBXF54HhH5vByyBHO6MGuYnEU/BQaVeTbBhFyw6AboheSa9bjtz.', '1690054256images.jpeg'),
(3, 'biplob', 'ahmed', '451450', 'computer', '7th', 'abiplob2333@gmail.com', '$2y$10$28PYroO3T8I1LrIptS4Qjerah/4mEsgYB35yW0UzMg6tePo8Uv0HS', '1701539342images.jpeg'),
(4, 'biplob', 'ahmed ii', '451451', 'civil', '8th', 'abiplob2333@gmail.com', '$2y$10$6Vm.R2AvPD2FuvHfApf32uy3tdOy8nZwZyth0ozzuG3JYujJiDT2i', '1704446197pobitra.jpg'),
(5, 'pobitra', 'khandakar', '451453', 'civil', '8th', 'pobi@mail.com', '$2y$10$zR3svVlgvh3zV3oIenoT7O79d5geoISufiI39Rp.3NZO8/Jl52m9C', '1704446306pobitra.jpg'),
(6, 'ahsanul', 'kabir', '451489', 'computer', '8th', 'akmmad59@mail.com', '$2y$10$JIAEowTdeLpKXbyVuUgymO//Q5w44BXLRilW1WAG3fUWP2alYsuwK', '1705750273logo2.jpeg'),
(7, 'mehedi', 'hasan', '451448', 'computer', '8th', 'mehedi@mail.com', '$2y$10$8rmDVDx3XbNnX4SbZVY7Tuhm6KYaGVfeBFp0/k2KLnnQ6euYrA22i', '1705750390logo2.jpeg'),
(8, 'zihad', 'hasan', '451452', 'computer', '7th', 'zihadhasan@mail.com', '$2y$10$s8aM6.Rq6aNKtzWNkfDx1OXdNLOMTChKtFhU6el6TkWznOrdhPqD6', '1705750430logo2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `topperlist`
--

CREATE TABLE `topperlist` (
  `id` int(10) NOT NULL,
  `topperimg` varchar(255) DEFAULT NULL,
  `toppername` varchar(255) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `cgpa` varchar(255) DEFAULT NULL,
  `ssession` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `pass`, `avatar`, `is_admin`) VALUES
(1, 'biplob', 'ahmed', 'cyanide2k23', 'abiplob23@gmail.com', '$2y$10$KH8AiLSM2G2k8XX5YbR6kuIBV9c8PI.yW8qc1k0CQHOkCoXKqJhV6', '1682625892images.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_student_roll` (`roll`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `topperlist`
--
ALTER TABLE `topperlist`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topperlist`
--
ALTER TABLE `topperlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`roll`) REFERENCES `students` (`roll`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
