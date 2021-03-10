SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HappyTech`
--

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `id` int(11) NOT NULL,
  `name_of_dep` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`id`, `name_of_dep`) VALUES
(1, 'Accounts'),
(2, 'Sales'),
(3, 'Marketing'),
(4, 'Operations'),
(5, 'Research');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_of_feedback` int(11) DEFAULT NULL,
  `content_feedback` longtext DEFAULT NULL,
  `comments` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Managers`
--

CREATE TABLE `Managers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Managers`
--

INSERT INTO `Managers` (`id`, `first_name`, `last_name`, `role`, `position`, `dept_id`) VALUES
(1, 'Ann', 'Brown', NULL, NULL, 1),
(2, 'Thomas', 'Eastbrook', NULL, NULL, 2),
(3, 'Maria', 'Valley', NULL, NULL, 3),
(4, 'Bob', 'Hill', NULL, NULL, 4),
(5, 'Bronwen', 'Cox', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Templates`
--

CREATE TABLE `Templates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `contents` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `Templates` (`id`, `title`,  `contents`) VALUES
(1, 'Successful Application (CV)', 'comment'),
(2, 'Unsuccessful Application for CV', 'comment'),
(3, 'Successful Application for Interview', 'comment' ),
(4, 'Unsuccessful Application for Interview', 'comment'),
(5, 'Successful Application for Technical Interview', 'comment'),
(6, 'Unsuccessful Application for Technical Interview', 'comment'),
(7, 'Successful Application for Medical Examination', 'comment'),
(8,'Unsuccessful Application for Medical Examination', 'comment'),
(9, 'Successful for Final Decision', 'comment'),
(10, 'Unsuccessful for Final Decision', 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `PASSWORD` char(64) DEFAULT NULL,
  `role_applied_for` varchar(40) DEFAULT NULL,
  `position_applied_for` varchar(40) DEFAULT NULL,
  `candidate_date` date DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `login`, `PASSWORD`, `role_applied_for`, `position_applied_for`, `candidate_date`, `manager_id`) VALUES
(1, 'Nancy', "123", NULL, NULL, NULL, 1),
(2, 'Clare', "456", NULL, NULL, NULL, 2),
(3, 'Andrew', "789", NULL, NULL, NULL, 3),
(4, 'Mark', "0100", NULL, NULL, NULL, 4),
(5, 'Olliver', "0200", NULL, NULL, NULL, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Managers`
--
ALTER TABLE `Managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `Templates`
--
ALTER TABLE `Templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Managers`
--
ALTER TABLE `Managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Templates`
--
ALTER TABLE `Templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Managers`
--
ALTER TABLE `Managers`
  ADD CONSTRAINT `Managers_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `Department` (`id`);

--
-- Constraints for table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `Users_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `Managers` (`id`);
ALTER TABLE `templates` ADD `options` VARCHAR(100) NOT NULL DEFAULT '' AFTER `contents`;







COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
