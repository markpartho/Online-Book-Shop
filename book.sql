-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 01:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` varchar(20) NOT NULL,
  `title` varchar(60) NOT NULL,
  `author` varchar(25) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `title`, `author`, `category`, `price`) VALUES
('1236-9865-9866-65', 'The Lost Symbol', 'Dan Brown', 'Thriller', 350),
('125-9879-98562-56', 'A Thousand Splendid Suns', 'Khaled Hosseini', 'Fiction', 250),
('1256-8956-9874-25', 'The Book Thief', 'Markus Zusak', 'Fiction', 250),
('1256-965-889-5', 'Game of Thrones: A Song of Ice and Fire', 'George R R Martin', 'Fiction', 400),
('1256-965-889-521', 'The Handmaid\'s Tale', 'Margaret Atwood', 'Fiction', 200),
('1259-965-86554-254', 'A Walk to Remember', 'Nicholas Sparks', 'Romantic', 200),
('1259-9896-944-89', 'Lucky Jim', 'Kingsley Amis', 'Comedy', 220),
('129-9856-98564-8', 'Lord of the Flies', 'William Golding', 'Fiction', 250),
('14589-9856-987-98', 'The Scarlet Letter', 'Nathaniel Hawthorne', 'Romantic', 250),
('1589-9856-9855-59', 'The Girl with the Dragon Tattoo', 'Stieg Larsson', 'Thriller', 280),
('15896-9856-89-899', 'The Da Vinci Code', 'Dan Brown', 'Thriller', 350),
('18965-8965-698-99', 'Killing Floor', 'Lee Child', 'Thriller', 250),
('232-986-8965-665', 'Brave New World', 'Aldous Huxley', 'Science Fiction', 350),
('232-9876-89655-665', 'The Giver', 'Lois Lowry', 'Science Fiction', 250),
('23689-9126-967-98', 'The Long Goodbye', 'Raymond Chandler', 'Detective', 250),
('2546-9865-98659-6', 'Pride and Prejudice', 'Jane Austen', 'Romantic', 250),
('2563-9856-9865-9', 'The Kite Runner', 'Khaled Hosseini', 'Drama', 200),
('25632-986-8965-66', 'To Kill a Mockingbird', 'Harper Lee', 'Thriller', 200),
('878-45896-6487-2', 'Three Men in a Boat', 'Jerome K. Jerome', 'Comedy', 250),
('978-0-321-94786-4', 'The Fault in our stars', 'John Green', 'Romantic', 200),
('978-2321-92146-4', 'The Moonstone', 'Wilkie Collins', 'Detective', 250);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`) VALUES
(1, 'rayeed', 'rayeedamir@gmail.com', '01557026545', '123456'),
(2, 'amirul', 'bhdfygdfghjfdhgyerhjeryj', '99999999999', '999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
