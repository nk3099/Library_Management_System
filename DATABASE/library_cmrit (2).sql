-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 03:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_cmrit`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `find` ()  BEGIN
SELECT b.*,author_name,phone from books b, book_author ba, publisher pb where b.bookid=ba.bookid and b.publisher=pb.publisher;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `find2` ()  BEGIN
    select b.bookid,b.title,b.publisher,ba.author_name,c.totalbooks,c.issuedbooks,c.remainingbooks,p.phone from books b,book_copies c,book_author ba,publisher p where b.bookid=ba.bookid and b.bookid=c.bookid and b.publisher=p.publisher;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booklending`
--

CREATE TABLE `booklending` (
  `usn` varchar(30) NOT NULL,
  `bookid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklending`
--

INSERT INTO `booklending` (`usn`, `bookid`) VALUES
('1cr17cs080', '1');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` varchar(30) NOT NULL,
  `title` varchar(80) NOT NULL,
  `publisher` varchar(80) DEFAULT NULL,
  `totalbooks` int(11) NOT NULL,
  `issuedbooks` int(11) NOT NULL,
  `remainingbooks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `title`, `publisher`, `totalbooks`, `issuedbooks`, `remainingbooks`) VALUES
('1', 'Wings Of Fire', 'Dr. A P J Abdul Kalam\r\n', 10, 0, 10),
('2', 'In Search Of Lost Time', 'Marcel Proust', 7, 1, 6),
('3', 'The Oath of the Vayuputras', 'Amish Tripathi', 2, 0, 2),
('8', 'The Outside', 'Marcel Proust', 9, 0, 9);

--
-- Triggers `books`
--
DELIMITER $$
CREATE TRIGGER `rem_books` BEFORE UPDATE ON `books` FOR EACH ROW set new.remainingbooks=new.totalbooks-new.issuedbooks
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `bookid` varchar(30) NOT NULL,
  `author_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`bookid`, `author_name`) VALUES
('1', 'chetan bagat'),
('2', 'george rr martin'),
('3', 'j k rowling');

-- --------------------------------------------------------

--
-- Table structure for table `book_copies`
--

CREATE TABLE `book_copies` (
  `bookid` varchar(30) CHARACTER SET latin1 NOT NULL,
  `totalbooks` int(11) NOT NULL,
  `issuedbooks` int(11) NOT NULL,
  `remainingbooks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_copies`
--

INSERT INTO `book_copies` (`bookid`, `totalbooks`, `issuedbooks`, `remainingbooks`) VALUES
('1', 10, 2, 8),
('2', 7, 1, 6),
('3', 2, 2, 0),
('8', 9, 2, 7);

--
-- Triggers `book_copies`
--
DELIMITER $$
CREATE TRIGGER `rem_book2` BEFORE UPDATE ON `book_copies` FOR EACH ROW set new.remainingbooks=new.totalbooks-new.issuedbooks
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `usn` varchar(30) NOT NULL,
  `username` varchar(80) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `phone` bigint(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'nk', 'nk'),
(2, 'mb', 'mb');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher`, `phone`, `address`) VALUES
('	\r\nashish', 78953232, 'bangalore'),
('Amish Tripathi', 33937895, 'bangalore'),
('Dr. A P J Abdul Kalam\r\n', 32283729, 'mumbai'),
('Marcel Proust', 68883239, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `phone` bigint(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `gender`, `phone`, `email`, `password`) VALUES
('1cr17cs032', 'anjali', 'f', 121892832, 'anjali@gmail.com', 'anjali'),
('1cr17cs043', 'Supriya', 'f', 345923923, 'supriya@gmail.com', 'supriya'),
('1cr17cs066', 'Ahsish', 'm', 797655722, 'mbas17cs@cmrit.ac.in', 'ashish'),
('1cr17cs070', 'Mamta', 'f', 637922892, 'mamt17cs@cmrit.ac.in', 'mamta'),
('1cr17cs080', 'Neeraj Kumar', 'm', 854716603, 'neer17ec@cmrit.ac.in', 'neeraj'),
('1cr17cs087', 'Ramya', 'f', 547262727, 'ramya@gmail.com', 'ramya'),
('1cr17cs090', 'pavan', 'm', 778776655, 'pavan@gmail.com', 'pavan'),
('1cr17cs099', 'john lennon', 'm', 698665246, 'john@gmail.com', 'john'),
('1cr17cs120', 'Nitin', 'm', 329282829, 'nitk17cs@cmrit.ac.in', 'nitin'),
('1cr17cs121', 'Sathuryan', 'm', 384992398, 'sars17cs@cmrit.ac.in', 'sathuryan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklending`
--
ALTER TABLE `booklending`
  ADD KEY `FUC` (`usn`),
  ADD KEY `FBC` (`bookid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `FPC` (`publisher`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booklending`
--
ALTER TABLE `booklending`
  ADD CONSTRAINT `FBC` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FUC` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `FPC` FOREIGN KEY (`publisher`) REFERENCES `publisher` (`publisher`);

--
-- Constraints for table `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `FAB` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD CONSTRAINT `FCC` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
