-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 07:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `city_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `type`) VALUES
(1, 'reader', 'reader'),
(2, 'reader', 'reader'),
(100, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `Pid` int(11) NOT NULL,
  `Authors_DocID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`Pid`, `Authors_DocID`) VALUES
(3, 1111111111),
(3, 1111111118),
(4, 1111111114),
(8, 1111111111);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_DocID` int(10) NOT NULL,
  `ISBN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_DocID`, `ISBN`) VALUES
(1111111111, 108),
(1111111114, 107),
(1111111116, 105),
(1111111117, 101),
(1111111118, 104),
(1111111119, 106),
(1111111120, 103),
(1234567890, 100);

-- --------------------------------------------------------

--
-- Table structure for table `borrowing`
--

CREATE TABLE `borrowing` (
  `Bor_No` int(10) NOT NULL,
  `BDTime` datetime NOT NULL,
  `RDTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowing`
--

INSERT INTO `borrowing` (`Bor_No`, `BDTime`, `RDTime`) VALUES
(1221314150, '2021-04-29 06:31:50', '2021-04-29 06:31:50'),
(1221314151, '2021-04-29 06:31:50', '2021-04-29 06:31:50'),
(1221314153, '2013-03-06 00:35:27', '2021-04-29 06:35:27'),
(1221314154, '2021-03-18 00:35:27', '2021-04-29 06:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `Bor_No` int(10) NOT NULL,
  `DocID` int(10) NOT NULL,
  `CopyNo` int(10) NOT NULL,
  `BID` int(10) NOT NULL,
  `RID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`Bor_No`, `DocID`, `CopyNo`, `BID`, `RID`) VALUES
(1221314151, 1111111118, 1, 102, 1),
(1221314150, 1111111113, 1, 101, 2);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BID` int(10) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BID`, `LName`, `Location`) VALUES
(100, 'Grand Oak Library', '9907 John Court\r\nGreen Bay, WI 54302'),
(101, 'Gift\'s Library', '7651 S. Bay Ave.\r\nDurham, NC 27703'),
(102, 'Frontier Library', '28 Harvey St.\r\nCentereach, NY 11720'),
(103, 'Codex Library', '514 York Drive\r\nJamaica Plain, MA 02130'),
(104, 'Anomaly Library', '9109 Delaware Drive\r\nHoward Beach, NY 11414'),
(105, 'Legacy Library', '9 South Sunbeam Street\r\nWasilla, AK 99654');

-- --------------------------------------------------------

--
-- Table structure for table `chairs`
--

CREATE TABLE `chairs` (
  `PID` int(11) NOT NULL,
  `DocID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chairs`
--

INSERT INTO `chairs` (`PID`, `DocID`) VALUES
(6, 1111111115),
(9, 1111111113);

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE `copy` (
  `DocID` int(10) NOT NULL,
  `CopyNo` int(10) NOT NULL,
  `BID` int(10) NOT NULL,
  `Position` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `copy`
--

INSERT INTO `copy` (`DocID`, `CopyNo`, `BID`, `Position`) VALUES
(1111111113, 1, 101, '10G534'),
(1111111117, 1, 103, '56B656'),
(1111111118, 1, 102, '45I530'),
(1234567890, 1, 104, '121750');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `DocID` int(10) NOT NULL,
  `Title` text NOT NULL,
  `Pdate` date NOT NULL,
  `PublisherID` int(10) NOT NULL,
  `noofcopies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`DocID`, `Title`, `Pdate`, `PublisherID`, `noofcopies`) VALUES
(1111111111, 'Pride and Prejudice', '2015-05-16', 1000000000, 10),
(1111111112, 'To Kill a Mockingbird ', '2018-08-08', 1000000000, 12),
(1111111113, 'The Great Gatsby', '2017-05-16', 1000000000, 15),
(1111111114, 'One Hundred Years of Solitude', '2018-09-08', 1000000000, 7),
(1111111115, 'Wide Sargasso Sea', '2018-10-08', 1000000000, 5),
(1111111116, 'In Cold Blood ', '2015-06-10', 1000000000, 10),
(1111111117, 'Brave New World', '2016-07-23', 1000000000, 8),
(1111111118, 'I Capture The Castle', '2018-04-26', 1000000000, 6),
(1111111119, 'Jane Eyre', '2019-04-08', 1000000000, 5),
(1111111120, 'Crime and Punishment', '2019-04-10', 1000000000, 11),
(1234567890, '12 Rules for Life', '2015-04-16', 1000000000, 14);

-- --------------------------------------------------------

--
-- Table structure for table `gedit1`
--

CREATE TABLE `gedit1` (
  `DocID` int(10) NOT NULL,
  `Issue_No` int(10) NOT NULL,
  `PID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gedits`
--

CREATE TABLE `gedits` (
  `DocID` int(10) NOT NULL,
  `Issue_No` int(10) NOT NULL,
  `PID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gedits`
--

INSERT INTO `gedits` (`DocID`, `Issue_No`, `PID`) VALUES
(1111111112, 1002, 7),
(1111111119, 1000, 8),
(1234567890, 1003, 4);

-- --------------------------------------------------------

--
-- Table structure for table `journal_issue`
--

CREATE TABLE `journal_issue` (
  `DocID` int(10) NOT NULL,
  `J_Issue_No` int(10) NOT NULL,
  `Scope` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_issue`
--

INSERT INTO `journal_issue` (`DocID`, `J_Issue_No`, `Scope`) VALUES
(1111111112, 1002, 'To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools. To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize'),
(1111111118, 1001, 'Pride and Prejudice is an 1813 romantic novel of manners written by Jane Austen. The novel follows the character development of Elizabeth Bennet'),
(1111111119, 1000, '12 Rules for Life: An Antidote to Chaos is a 2018 self-help book by Canadian clinical psychologist and psychology professor Jordan Peterson. It provides life advice through essays in abstract ethical principles, psychology, mythology, religion, and personal anecdotes.'),
(1234567890, 1003, 'One Hundred Years of Solitude is a landmark 1967 novel by Colombian author Gabriel García Márquez that tells the multi-generational story of the Buendía family, whose patriarch, José Arcadio Buendía, founded the town of Macondo. The novel is often cited as one of the supreme achievements in literature');

-- --------------------------------------------------------

--
-- Table structure for table `journal_volume`
--

CREATE TABLE `journal_volume` (
  `DocID` int(10) NOT NULL,
  `Volume_no` int(10) NOT NULL,
  `Editor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_volume`
--

INSERT INTO `journal_volume` (`DocID`, `Volume_no`, `Editor`) VALUES
(1111111112, 1, 10),
(1111111118, 0, 5),
(1111111119, 2, 8),
(1234567890, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `PID` int(11) NOT NULL,
  `PNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`PID`, `PNAME`) VALUES
(3, 'john wick'),
(4, 'keanu reeves'),
(5, 'Darrel Mckenzie'),
(6, 'Kelly Morales'),
(7, 'Jody Blair'),
(8, 'Audrey Allison'),
(9, 'Tammy Barton'),
(10, 'Jon Peterson');

-- --------------------------------------------------------

--
-- Table structure for table `proceedings`
--

CREATE TABLE `proceedings` (
  `DocID` int(10) NOT NULL,
  `Cdate` date NOT NULL,
  `Ceditor` varchar(30) NOT NULL,
  `Clocation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proceedings`
--

INSERT INTO `proceedings` (`DocID`, `Cdate`, `Ceditor`, `Clocation`) VALUES
(1111111113, '2016-04-07', 'Randall Christensen', 'La Paz, Bolivia'),
(1111111115, '2021-04-14', 'Guillermo Armstrong', 'Gaborone, Botswana');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PubID` int(10) NOT NULL,
  `PUBname` varchar(30) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PubID`, `PUBname`, `Address`) VALUES
(1000000000, 'ABC', '132 bergen st');

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE `reader` (
  `RID` int(10) NOT NULL,
  `RType` varchar(30) NOT NULL,
  `RName` varchar(30) NOT NULL,
  `RAddress` text NOT NULL,
  `Phone_No` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`RID`, `RType`, `RName`, `RAddress`, `Phone_No`) VALUES
(1, 'Student', 'Delma Suzan', '12 Shadow Brook St.\r\nAtlanta, GA 30303', '8023498683'),
(2, 'senior citizen', 'Jenifer Caleb', '90 Circle Rd.\r\nWillingboro, NJ 08046', '3173296907'),
(3, 'Staff', 'Kurt Jayda', '603 Church Rd.\r\nRiverside, NJ 08075', '7815619193'),
(4, 'senior citizen', 'Lynda Janine', '629 Halifax Drive\r\nLa Crosse, WI 54601', '2154632830'),
(5, 'Staff', 'Tyson Bobbie', '7827 SE. West Dr.\r\nGlendale, AZ 85302', '2483731399'),
(6, 'Staff', 'Dillan Laurel', '815 Shore Drive\r\nLombard, IL 60148', '4124144952');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Res_No` int(10) NOT NULL,
  `DTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Res_No`, `DTime`) VALUES
(100223, '2021-03-10 00:40:09'),
(100224, '2021-02-26 00:40:09'),
(100225, '2021-03-27 00:41:54'),
(100226, '2021-04-05 00:41:54'),
(100227, '2021-01-08 00:42:19'),
(100228, '2021-03-25 00:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `RID` int(10) NOT NULL,
  `Reservation_No` int(10) NOT NULL,
  `Doc_ID` int(10) NOT NULL,
  `Copy_No` int(10) NOT NULL,
  `BID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`RID`, `Reservation_No`, `Doc_ID`, `Copy_No`, `BID`) VALUES
(1, 100225, 1111111118, 1, 102),
(2, 100223, 1111111113, 1, 101);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`Pid`,`Authors_DocID`),
  ADD KEY `Authors_DocID` (`Authors_DocID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_DocID`);

--
-- Indexes for table `borrowing`
--
ALTER TABLE `borrowing`
  ADD PRIMARY KEY (`Bor_No`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`Bor_No`,`DocID`,`CopyNo`,`BID`),
  ADD KEY `borrows_ibfk_2` (`DocID`),
  ADD KEY `CopyNo` (`CopyNo`),
  ADD KEY `BID` (`BID`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `chairs`
--
ALTER TABLE `chairs`
  ADD PRIMARY KEY (`PID`,`DocID`),
  ADD KEY `chairs_ibfk_1` (`DocID`);

--
-- Indexes for table `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`DocID`,`CopyNo`,`BID`),
  ADD KEY `copy_ibfk_1` (`BID`),
  ADD KEY `CopyNo` (`CopyNo`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`DocID`),
  ADD KEY `PublisherID` (`PublisherID`);

--
-- Indexes for table `gedit1`
--
ALTER TABLE `gedit1`
  ADD PRIMARY KEY (`DocID`,`Issue_No`,`PID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `gedits`
--
ALTER TABLE `gedits`
  ADD PRIMARY KEY (`DocID`,`Issue_No`,`PID`),
  ADD KEY `Issue_No` (`Issue_No`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `journal_issue`
--
ALTER TABLE `journal_issue`
  ADD PRIMARY KEY (`DocID`,`J_Issue_No`),
  ADD KEY `J_Issue_No` (`J_Issue_No`);

--
-- Indexes for table `journal_volume`
--
ALTER TABLE `journal_volume`
  ADD PRIMARY KEY (`DocID`),
  ADD KEY `Editor` (`Editor`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `proceedings`
--
ALTER TABLE `proceedings`
  ADD PRIMARY KEY (`DocID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PubID`),
  ADD KEY `PubID` (`PubID`);

--
-- Indexes for table `reader`
--
ALTER TABLE `reader`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Res_No`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`Reservation_No`,`Doc_ID`,`Copy_No`,`BID`),
  ADD KEY `Copy_No` (`Copy_No`),
  ADD KEY `BID` (`BID`),
  ADD KEY `RID` (`RID`),
  ADD KEY `Doc_ID` (`Doc_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `DocID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567891;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `PubID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000001;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`Pid`) REFERENCES `person` (`PID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authors_ibfk_2` FOREIGN KEY (`Authors_DocID`) REFERENCES `book` (`Book_DocID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`Book_DocID`) REFERENCES `document` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`Bor_No`) REFERENCES `borrowing` (`Bor_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`DocID`) REFERENCES `copy` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrows_ibfk_3` FOREIGN KEY (`CopyNo`) REFERENCES `copy` (`CopyNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrows_ibfk_4` FOREIGN KEY (`BID`) REFERENCES `copy` (`BID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrows_ibfk_5` FOREIGN KEY (`RID`) REFERENCES `reader` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chairs`
--
ALTER TABLE `chairs`
  ADD CONSTRAINT `chairs_ibfk_1` FOREIGN KEY (`DocID`) REFERENCES `proceedings` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chairs_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `person` (`PID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `copy`
--
ALTER TABLE `copy`
  ADD CONSTRAINT `copy_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `branch` (`BID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `copy_ibfk_2` FOREIGN KEY (`DocID`) REFERENCES `document` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`PublisherID`) REFERENCES `publisher` (`PubID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gedits`
--
ALTER TABLE `gedits`
  ADD CONSTRAINT `gedits_ibfk_1` FOREIGN KEY (`Issue_No`) REFERENCES `journal_issue` (`J_Issue_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gedits_ibfk_2` FOREIGN KEY (`DocID`) REFERENCES `journal_issue` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gedits_ibfk_3` FOREIGN KEY (`PID`) REFERENCES `person` (`PID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `journal_issue`
--
ALTER TABLE `journal_issue`
  ADD CONSTRAINT `journal_issue_ibfk_1` FOREIGN KEY (`DocID`) REFERENCES `journal_volume` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `journal_volume`
--
ALTER TABLE `journal_volume`
  ADD CONSTRAINT `journal_volume_ibfk_1` FOREIGN KEY (`DocID`) REFERENCES `document` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `journal_volume_ibfk_2` FOREIGN KEY (`Editor`) REFERENCES `person` (`PID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proceedings`
--
ALTER TABLE `proceedings`
  ADD CONSTRAINT `proceedings_ibfk_1` FOREIGN KEY (`DocID`) REFERENCES `document` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`PubID`) REFERENCES `document` (`PublisherID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`Copy_No`) REFERENCES `copy` (`CopyNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`BID`) REFERENCES `copy` (`BID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_3` FOREIGN KEY (`RID`) REFERENCES `reader` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_4` FOREIGN KEY (`Doc_ID`) REFERENCES `copy` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_5` FOREIGN KEY (`Reservation_No`) REFERENCES `reservation` (`Res_No`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
