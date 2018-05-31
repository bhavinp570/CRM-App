-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 07:19 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `VatNumber` varchar(50) DEFAULT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `AptSuit` varchar(50) DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `StateProvince` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `Balance` varchar(50) DEFAULT NULL,
  `LastLogin` date DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`IdNumber`, `ClientName`, `VatNumber`, `Website`, `Email`, `Phone`, `Street`, `AptSuit`, `City`, `StateProvince`, `PostalCode`, `Country`, `Balance`, `LastLogin`, `Date`) VALUES
(1, 'deep', '123456789', 'design', 'design@gmail.com', '872202987', 'kamakya', '123', 'bangalore', 'banashnkri', '560085', 'india', NULL, NULL, '2018-05-03'),
(2, 'kumar', '124578963', 'kum', 'kumar@gmail.com', '8745123690', 'gjsd', 'dasd', 'sadad', 'dad', '55271', 'dads', NULL, NULL, '2018-05-04'),
(7, 'malli', '98765432', 'http://malli.com', 'malli@gmail.com', '8520147963', 'jayanagar, mm, mm, mm', 'mm', 'bangalore', 'karnataka', '577522', 'India', NULL, NULL, '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `Amount` varchar(50) DEFAULT NULL,
  `CreditDate` date DEFAULT NULL,
  `PublicNotes` text,
  `PrivateNotes` text,
  `Balance` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`IdNumber`, `ClientName`, `Amount`, `CreditDate`, `PublicNotes`, `PrivateNotes`, `Balance`, `Date`) VALUES
(1, 'pradeep', '40000', '2018-05-02', 'fsfsggsfgsfsfsfs', 'gfsdfdsfvdsfc', NULL, '2018-05-30'),
(2, 'deep', '452120', '2018-05-03', 'fghdfyhfdhfdhgdgdfg', 'dfsfsdfsfsa', NULL, '2018-05-30'),
(3, 'shivu', '98765432101', '2018-05-24', 'aa', 'aa', NULL, '2018-05-30'),
(4, 'malli', '21', '2018-05-24', 'asdfg', 'asdf', NULL, '2018-05-30'),
(5, 'shivu', '21', '2018-05-25', 'ddd', 'dd', NULL, '2018-05-30'),
(6, 'vijay', '20', '2018-05-25', 'rrr', 'rr', NULL, '2018-05-30'),
(7, 'bhavin', '50', '2018-05-28', 'gg', 'gg', NULL, '2018-05-30'),
(8, 'deep', '22', '2018-05-04', 'cz', 'xcvx', NULL, '2018-05-30'),
(9, 'kumar', '22', '2018-05-23', 'k', 'kk', NULL, '2018-05-30'),
(10, 'malli', '22', '2018-05-18', 'qwerty', 'qwerty', NULL, '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `IdNumber` int(50) NOT NULL,
  `Vendor` varchar(50) DEFAULT NULL,
  `Amount` varchar(50) DEFAULT NULL,
  `Currency` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `PrivateNotes` text,
  `PublicNotes` text,
  `Status` varchar(50) DEFAULT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`IdNumber`, `Vendor`, `Amount`, `Currency`, `Date`, `ClientName`, `PrivateNotes`, `PublicNotes`, `Status`, `DateCreated`) VALUES
(1, 'kumar', '4500', 'dollor', '2018-05-02', 'deep', 'fhfhfvn', 'hdhdhd', '', '2018-05-30 03:55:57'),
(18, 'kumar', '2345', 'US Dollar', '2018-05-29', 'deep', 'jd', 'jd', '', '2018-05-30 03:55:57'),
(19, 'shivu', '2', 'Danish Krone', '2018-05-26', 'malli', 'ok', 'ok', NULL, '2018-05-30 03:55:57'),
(20, 'malli', '210', 'Czech Koruna', '2018-05-28', 'bhavin', 'gadagad', 'gadada', NULL, '2018-05-30 03:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Currency` varchar(50) DEFAULT NULL,
  `InvoiceDate` date DEFAULT NULL,
  `Invoice` varchar(50) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `Discount` varchar(50) DEFAULT NULL,
  `Po` varchar(50) DEFAULT NULL,
  `PartialDepo` varchar(50) DEFAULT NULL,
  `Item` int(50) DEFAULT NULL,
  `Description` text,
  `UnitCost` varchar(50) DEFAULT NULL,
  `Quantity` int(100) DEFAULT NULL,
  `PublicNotes` text,
  `PrivateNotes` text,
  `Terms` text,
  `Footer` text,
  `Balance` varchar(50) DEFAULT NULL,
  `Amount` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`IdNumber`, `ClientName`, `Email`, `Phone`, `Currency`, `InvoiceDate`, `Invoice`, `DueDate`, `Discount`, `Po`, `PartialDepo`, `Item`, `Description`, `UnitCost`, `Quantity`, `PublicNotes`, `PrivateNotes`, `Terms`, `Footer`, `Balance`, `Amount`, `Status`, `Date`) VALUES
(1, 'pradeep', 'deep@gmail.com', '8088556671', 'dollor', '2018-05-02', '0', '2018-05-02', '20', '520701', 'sfs', 10, 'gfdgdgdg', '220', 15, 'dgdgd', 'dgdg', 'dgdhd', 'hdhdhg', NULL, NULL, NULL, '2018-05-30'),
(67, 'shivu', 'shivu123@gmail.com', '872202987280885', 'Danish Krone', '2018-05-24', '456789', '2018-05-18', 'Amount', '4', '4', 4, '4', '4', 4, '4', '4', '4', '4', NULL, NULL, NULL, '2018-05-30'),
(71, 'vijay', 'vijay@gmail.com', '9080706050', 'Indian Rupee', '2018-05-25', '0001', '2018-05-22', 'Amount', '585858', '120', 0, 'good', '150', 2, 'aaa', 'aaa', 'aaa', 'aaa', NULL, NULL, NULL, '2018-05-30'),
(72, 'bhavin', 'bhavin@gmail.com', '7418529630', 'Omani Rial', '2018-05-28', '1212', '2018-05-29', 'Amount', '12345', '200', 0, 'well', '2000', 1, 'do', 'do', 'do', 'do', NULL, NULL, NULL, '2018-05-30'),
(73, 'malli', 'malli@gmail.com', '8520147963', 'Canadian Dollar', '2018-05-01', '8', '2018-05-17', 'Amount', '12313', '100', 0, 'dasda', '2', 1, 'mmm', 'mmmm', 'mmmm', 'mmm', NULL, NULL, NULL, '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `invoicespastdue`
--

CREATE TABLE `invoicespastdue` (
  `IdNumber` int(50) NOT NULL,
  `InvoiceNumber` varchar(50) DEFAULT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `InvoiceDate` date DEFAULT NULL,
  `Due` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoicespastdue`
--

INSERT INTO `invoicespastdue` (`IdNumber`, `InvoiceNumber`, `ClientName`, `InvoiceDate`, `Due`) VALUES
(1, '12', 'malli', '2018-05-16', 'no'),
(2, '14', 'kumar', '2018-05-16', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `Invoice` varchar(50) DEFAULT NULL,
  `Amount` varchar(50) DEFAULT NULL,
  `PaymentType` varchar(50) DEFAULT NULL,
  `PaymentDate` date DEFAULT NULL,
  `TransactionReference` varchar(50) DEFAULT NULL,
  `PrivateNotes` text,
  `Currency` varchar(50) DEFAULT NULL,
  `ExchangeRate` varchar(50) DEFAULT NULL,
  `ConvertedAmount` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`IdNumber`, `ClientName`, `Invoice`, `Amount`, `PaymentType`, `PaymentDate`, `TransactionReference`, `PrivateNotes`, `Currency`, `ExchangeRate`, `ConvertedAmount`, `Status`, `Date`) VALUES
(10, 'aaa', '2147483647', '11', 'Money Order', '2018-05-24', '1', 'East Caribbean Dollar', '1', '1', '1', NULL, '2018-05-30'),
(11, 'www', '2147483647', '12', 'ACH', '2018-05-24', '12', 'Danish Krone', '21', '2', 'asd', NULL, '2018-05-30'),
(12, 'deep', '908070605040102030102040', '0', 'American Express', '2018-05-10', '0', 'US Dollar', '0', '0', '0', NULL, '2018-05-30'),
(13, 'vijay', '0001', '200', 'MasterCard', '2018-05-25', '123', 'Indian Rupee', '2', '1', 'ddd', NULL, '2018-05-30'),
(14, 'bhavin', '1212', '120', 'American Express', '2018-05-28', '2121', 'Danish Krone', '1', '2', 'due', NULL, '2018-05-30'),
(15, 'malli', '8', '21', 'ACH', '2018-05-05', '123', 'Aruban Florin', '1', '2', 'mmmmmmmm', NULL, '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `IdNumber` int(50) NOT NULL,
  `Product` varchar(50) DEFAULT NULL,
  `Notes` text,
  `Cost` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`IdNumber`, `Product`, `Notes`, `Cost`, `Date`) VALUES
(5, 'pradeep', 'adda', '234', '2018-05-30'),
(6, 'adsa', 'dad', '4333', '2018-05-20'),
(7, 'waterbottel', 'asdfghjklzxcvbnm', '98765432101', '2018-04-04'),
(8, 'books', 'well ', '20', '2018-05-30'),
(9, 'pizza', 'well', '150', '2018-05-30'),
(10, 'bag', 'keep lag', '2000', '2018-05-30'),
(11, 'laptop', 'lll', '232', '2018-05-30'),
(12, 'bottel', 'asda', '1231', '2018-05-30'),
(13, 'mobile', 'adas', '213', '2018-05-30'),
(14, 'pen', 'adsa', '121', '2018-05-28'),
(15, 'charger', 'da', '23', '2018-05-30'),
(16, 'mouse', 'ada', '232', '0000-00-00'),
(17, 'mouse', 'ada', '232', '0000-00-00'),
(18, 'mmm', 'mmm', '1111', '0000-00-00'),
(19, 'ppp', 'pppp', '45', '2018-05-30'),
(20, 'qqqqq', 'qqqq', '232', '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `ProjectName` varchar(50) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `BudgetedHours` varchar(50) DEFAULT NULL,
  `TaskRate` varchar(50) DEFAULT NULL,
  `PrivateNotes` text,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`IdNumber`, `ClientName`, `ProjectName`, `DueDate`, `BudgetedHours`, `TaskRate`, `PrivateNotes`, `Date`) VALUES
(5, 'kumar', 'invoice', '2018-05-24', '12', '5', NULL, '2018-05-30'),
(6, 'vijay', 'bur', '2018-05-25', '3', '4', NULL, '2018-05-30'),
(7, 'deep', 'll', '2018-05-18', '2', '2', 'llllll', '2018-05-30'),
(8, 'malli', 'new invoice', '2018-05-29', '1', '4', 'good', '2018-05-30'),
(9, 'bhavin', 'bag creation', '2018-05-28', '12', '5', 'dadd', '2018-05-30'),
(10, 'malli', 'cowel', '2018-05-04', '12', '5', 'qwqw', '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `IdNumber` int(50) NOT NULL,
  `Quote` int(15) DEFAULT NULL,
  `Template` varchar(50) DEFAULT NULL,
  `PrivateNotes` text,
  `Date` date DEFAULT NULL,
  `Content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`IdNumber`, `Quote`, `Template`, `PrivateNotes`, `Date`, `Content`) VALUES
(13, 12, 'dee', 'dee', '2018-05-25', NULL),
(23, 1, 'bhavin', 'bhavin', '2018-05-28', NULL),
(24, 2147483647, 'malli', 'malli', '2018-05-28', NULL),
(25, 630, 'gud ', 'ffafaf', '2018-05-28', NULL),
(26, 9, 'adas', 'qwwert', '2018-05-31', NULL),
(27, 9, '98765432101', 'srs', '2018-05-31', NULL),
(28, 2, 'adas', 'p', '2018-05-31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Currency` varchar(50) DEFAULT NULL,
  `QuoteDate` date DEFAULT NULL,
  `Quote` int(15) DEFAULT NULL,
  `ValidUntil` date DEFAULT NULL,
  `Po` varchar(50) DEFAULT NULL,
  `PartialDepo` varchar(50) DEFAULT NULL,
  `Discount` varchar(50) DEFAULT NULL,
  `Item` varchar(50) DEFAULT NULL,
  `Description` text,
  `UnitCost` varchar(50) DEFAULT NULL,
  `Quantity` int(100) DEFAULT NULL,
  `PublicNotes` text,
  `PrivateNotes` text,
  `Terms` text,
  `Footer` text,
  `Amount` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`IdNumber`, `ClientName`, `Email`, `Phone`, `Currency`, `QuoteDate`, `Quote`, `ValidUntil`, `Po`, `PartialDepo`, `Discount`, `Item`, `Description`, `UnitCost`, `Quantity`, `PublicNotes`, `PrivateNotes`, `Terms`, `Footer`, `Amount`, `Status`, `Date`) VALUES
(2, 'pradeep', 'pradee2me@gmail.com', '8722029872', 'Brazilian Real', '2018-05-09', 12, '2018-05-08', '232', '232', 'Amount', '23', 'fsfasfas', '22', 12, 'dsfds', 'fdsa', 'afas', 'sdfsd', NULL, NULL, '2018-05-30'),
(3, 'shivu', 'shivu123@gmail.com', '98765432101', 'Danish Krone', '2018-05-24', 2147483647, '2018-05-24', '98765432101', '98765432101', 'Percent', '98765432101', '98765432101', '98765432101', 2147483647, '98765432101', '98765432101', '98765432101', '98765432101', NULL, NULL, '2018-05-30'),
(4, 'kumar', 'kumar@gmail.com', '8745123690', 'Costa Rican ColÃ³n', '2018-05-24', 1, '2018-05-24', '21', '112', 'Amount', 'waterbottel', 'asd', '1', 2, 'aa', 'aa', 'aa', 'aa', NULL, NULL, '2018-05-30'),
(5, 'malli', 'malli@gmail.com', '6790243', 'Chinese Renminb', '2018-05-25', 122, '2018-05-25', '123456', '11', 'Percent', 'books', 'qww', '12', 1, 'qwq', '1qw', 'qqwqw', 'wqwq', NULL, NULL, '2018-05-30'),
(6, 'vijay', 'vijay@gmail.com', '9080706050', 'East Caribbean Dollar', '2018-05-25', 2, '2018-05-26', '585258', '10', 'Amount', 'pizza', 'dada', '12', 1, 'ada', 'add', 'adad', 'ada', NULL, NULL, '2018-05-30'),
(7, 'bhavin', 'bhavin@gmail.com', '7418529630', 'Chilean Peso', '2018-05-28', 630, '2018-05-30', '123456', '2000', 'Amount', 'bag', 'well bags', '200', 1, 'aa', 'gg', 'gg', 'aa', NULL, NULL, '2018-05-30'),
(8, 'malli', 'malli@gmail.com', '8520147963', 'Argentine Peso', '2018-05-03', 9, '2018-05-23', '12313', '120', 'Amount', 'pen', 'dasda', '2', 1, 'wqeq', 'qweerr', 'qweq', 'qwewq', NULL, NULL, '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `recurringinvoices`
--

CREATE TABLE `recurringinvoices` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Currency` varchar(50) DEFAULT NULL,
  `Frequency` varchar(50) DEFAULT NULL,
  `AutoBill` varchar(50) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `Po` varchar(50) DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Discount` varchar(50) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `Item` varchar(50) DEFAULT NULL,
  `Description` text,
  `UnitCost` varchar(50) DEFAULT NULL,
  `Quantity` int(100) DEFAULT NULL,
  `PublicNotes` text,
  `PrivateNotes` text,
  `Terms` text,
  `Footer` text,
  `LastLogin` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recurringinvoices`
--

INSERT INTO `recurringinvoices` (`IdNumber`, `ClientName`, `Email`, `Phone`, `Currency`, `Frequency`, `AutoBill`, `StartDate`, `Po`, `EndDate`, `Discount`, `DueDate`, `Item`, `Description`, `UnitCost`, `Quantity`, `PublicNotes`, `PrivateNotes`, `Terms`, `Footer`, `LastLogin`, `Status`, `Date`) VALUES
(1, 'master', 'master@gmail.com', '7894011254', 'dollor', 'gdgd', '11', '2018-05-03', '784521', '2018-05-04', '4212012', '2018-05-03', '12', 'fgfdgfh', '110', 2, 'jghjhgj', 'gjhjg', 'gfjghjgh', 'gjghjgj', NULL, NULL, '2018-05-30'),
(2, 'pradeep', 'deee', '12332313', 'Czech Koruna', 'Two weeks', 'Opt-in', '2018-05-08', '1123', '2018-05-08', 'Amount', '0000-00-00', '234', 'adadas', '234', 213, 'afddfa', 'ads', 'afdaf', 'afda', NULL, NULL, '2018-05-30'),
(3, 'shivu', 'shivu123@gmail.com', '8787878787', 'Czech Koruna', 'Weekly', 'Opt-out', '2018-05-24', '12313', '2018-05-24', 'Percent', '0000-00-00', '98765432101', 'a', '98765432101', 2147483647, '98765432101', '98765432101', '98765432101', '98765432101', NULL, NULL, '2018-05-30'),
(4, 'kumar', 'kumar@gmail.com', '8745123690', 'Czech Koruna', 'Two weeks', 'Opt-in', '2018-05-24', '12', '2018-05-24', 'Amount', '0000-00-00', 'waterbottel', 'ww', '12', 1, 'asd', 'asd', 'asd', 'asd', NULL, NULL, '2018-05-30'),
(5, 'deep', 'design@gmail.com', '872202987', 'East Caribbean Dollar', 'Monthly', 'Opt-out', '2018-05-24', '1', '2018-05-25', 'Amount', '0000-00-00', 'books', '1', '1', 1, '1', '1', '1', '1', NULL, NULL, '2018-05-30'),
(6, 'malli', 'malli@gmail.com', '6790243', 'US Dollar', 'Weekly', 'Off', '2018-05-25', 'q', '2018-05-23', 'Amount', '0000-00-00', 'books', 'q', 'q', 0, 'q', 'q', 'q', 'q', NULL, NULL, '2018-05-30'),
(7, 'vijay', 'vijay@gmail.com', '9080706050', 'Czech Koruna', 'Weekly', 'Opt-out', '2018-05-17', '582858', '2018-05-25', 'Amount', '0000-00-00', 'pizza', 'ww', '222', 1, 'qwe', 'qwe', 'qwe', 'qwe', NULL, NULL, '2018-05-30'),
(8, 'bhavin', 'bhavin@gmail.com', '7418529630', 'Danish Krone', 'Two weeks', 'Always', '2018-05-28', '234567', '2018-05-29', 'Amount', '0000-00-00', 'bag', 'well', '2000', 1, 'ba', 'va', 'ba', 'ba', NULL, NULL, '2018-05-30'),
(9, 'vijay', 'vijay@gmail.com', '9080706050', 'East Caribbean Dollar', 'Four weeks', 'Opt-in', '2018-05-28', '234', '2018-05-29', 'Percent', '0000-00-00', 'bag', 'qww', '2', 1, 'qww', 'qww', 'qww', 'qwww', NULL, NULL, '2018-05-30'),
(10, 'malli', 'malli@gmail.com', '8520147963', 'Argentine Peso', 'Weekly', 'Opt-in', '2018-05-01', '12313', '2018-05-09', 'Amount', '0000-00-00', 'pen', 'dasda', '1', 1, 'qwerty', 'qwerty', 'qwerty', 'qwerty', NULL, NULL, '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `IdNumber` int(50) NOT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `IdNumber` int(50) NOT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `Project` varchar(50) DEFAULT NULL,
  `Description` text,
  `Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`IdNumber`, `ClientName`, `Project`, `Description`, `Date`, `Status`) VALUES
(4, 'vijay', 'bur', 'good', NULL, NULL),
(6, 'malli', 'new invoice', 'very well', '2018-05-28', NULL),
(7, 'bhavin', 'bag creation', 'wel bags', '2018-05-28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upcominginvoices`
--

CREATE TABLE `upcominginvoices` (
  `IdNumber` int(50) NOT NULL,
  `InvoiceNumber` varchar(50) DEFAULT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `InvoiceDate` date DEFAULT NULL,
  `Due` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcominginvoices`
--

INSERT INTO `upcominginvoices` (`IdNumber`, `InvoiceNumber`, `ClientName`, `InvoiceDate`, `Due`) VALUES
(1, '24', 'deep', '2018-05-16', 'no'),
(2, '25', 'malli', '2018-05-16', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `IdNumber` int(50) NOT NULL,
  `VendorName` varchar(50) DEFAULT NULL,
  `VatNumber` varchar(50) DEFAULT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `AptSuit` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `StateProvince` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `Currency` varchar(50) DEFAULT NULL,
  `PrivateNotes` text,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`IdNumber`, `VendorName`, `VatNumber`, `Website`, `Phone`, `Email`, `Street`, `AptSuit`, `City`, `StateProvince`, `PostalCode`, `Country`, `Currency`, `PrivateNotes`, `Date`) VALUES
(2, 'kumar', '123456789', 'design', '872202987', 'design@gmail.com', 'banshankri', '456', 'bangalore', 'karnataka', '560085', 'india', 'rupee', 'hii hellooooooooooooooooof\r\nfkjkfkf', '2018-05-28'),
(9, 'shivu', '9876543210987654', 'http://shivu.com', '8520147963', 'shivu123@gmail.com', 'jayanagar, mm, mm, mm', 'mm', 'bangalore', 'karnataka', '577522', 'India', 'Croatian Kuna', 'good', '2018-05-28'),
(10, 'patel', '8527419610221', 'http://patel.com', '787676', 'bhavin@gmail.com', 'kamakya, katriguppe', 'katriguppe', 'banagalore', 'karnataka', '560085', 'Albania', 'Croatian Kuna', 'ddd', '2018-05-28'),
(11, 'malli', '987456321', 'http://m.com', '7410258963', 'malli1@gmail.com', 'rr', '2020', 'bng', 'karnataka', '570856', 'India', 'Danish Krone', 'maaaa', '2018-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `invoicespastdue`
--
ALTER TABLE `invoicespastdue`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `recurringinvoices`
--
ALTER TABLE `recurringinvoices`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `upcominginvoices`
--
ALTER TABLE `upcominginvoices`
  ADD PRIMARY KEY (`IdNumber`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`IdNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `invoicespastdue`
--
ALTER TABLE `invoicespastdue`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `recurringinvoices`
--
ALTER TABLE `recurringinvoices`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `upcominginvoices`
--
ALTER TABLE `upcominginvoices`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `IdNumber` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
