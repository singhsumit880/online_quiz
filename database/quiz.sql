-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2021 at 01:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(40) NOT NULL,
  `option2` varchar(40) NOT NULL,
  `option3` varchar(40) NOT NULL,
  `option4` varchar(40) NOT NULL,
  `answer` varchar(40) NOT NULL,
  `sub_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `sub_id`) VALUES
(1, 'HTML stands for -', 'HighText Machine Language', 'HyperText and links Markup Language', 'HyperText Markup Language', 'None of these', 'option3', 2),
(4, 'The correct sequence of HTML tags for starting a webpage is -', 'Head, Title, HTML, body', 'HTML, Body, Title, Head', 'HTML, Head, Title, Body', 'HTML, Head, Title, Body', 'option4', 2),
(5, 'Which of the following attribute is used to provide a unique name to an element?\r\n\r\n', 'class', 'id', 'type', 'None of the above', 'option2', 2),
(6, 'What are the types of unordered or bulleted list in HTML?', 'disc, square, triangle', 'polygon, triangle, circle', 'disc, circle, square', 'All of the above', 'option3', 2),
(7, 'PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', 'server-side scripting', 'Both B and C', 'option3', 1),
(8, 'PHP files have a default file extension of_______.', '.html', '.xml', '.php', '.hphp', 'option3', 1),
(9, 'Which of the following variables is not a predefined variable?', '$get', '$ask', '$request', '$post', 'option2', 1),
(10, 'Which of the following method sends input to a script via a URL?', 'Get', 'Post', 'Both', 'None', 'option1', 1),
(11, 'Which of the following function returns a text in title case from a variable?', 'ucwords($var)', 'upper($var)', 'toupper($var)', 'ucword($var)', 'option1', 1),
(12, 'Which of the following function returns the number of characters in a string variable?', 'count($variable)', 'len($variable)', 'strcount($variable)', 'strlen($variable)', 'option4', 1),
(13, 'In PHP Language variables name starts with _____', '! (Exclamation)', '& (Ampersand)', '* (Asterisk)', '$ (Dollar)', 'option4', 1),
(14, 'Data for a cookie stored in _________ in PHP?', 'In ISP Computer', 'In User’s Computer', 'In Server Computer', 'It depends on PHP Coding', 'option2', 1),
(15, 'What will be the result of combining a string with another data type in PHP?', 'int', 'float', 'string', 'double', 'option3', 1),
(16, 'Which of the following is not PHP Loops?', 'while', 'do while', 'for', 'do for', 'option4', 1),
(17, 'Fundamental HTML Block is known as ___________.', 'HTML Body', 'HTML Tag', 'HTML Attribute', 'HTML Element', 'option2', 2),
(18, 'What tag is used to display a picture in a HTML page?', 'picture', 'image', 'img', 'src', 'option3', 2),
(19, 'HTML web pages can be read and rendered by _________.', 'Compiler', 'Server', 'Web Browser', 'Interpreter', 'option3', 2),
(20, 'HTML tags are surrounded by which type of brackets.', 'Curly \"{}\"', 'Round \"()\"', 'Squart \"[]\"', 'Angle \"<>\"', 'option4', 2),
(21, 'Drag and drop feature is supported in', 'HTML5', 'HTML4', 'Both HTML4 and HTML5', 'It is not supported at all.', 'option1', 2),
(22, 'To create HTML page, you need', 'Web browser', 'text editor', 'Both A and B', 'None of the above', 'option3', 2),
(23, 'If we want define style for an unique element, then which css selector will we use ?', 'Id', 'text', 'class', 'name', 'option1', 3),
(24, 'If we want to show an Arrow as cursor, then which value we will use ?', 'pointer', 'default', 'arrow', 'arr', 'option2', 3),
(25, 'Which of the following properties will we use to display border around a cell without any content ?', 'empty-cell', 'blank-cell', 'noncontent-cell', 'void-cell', 'option1', 3),
(26, 'Which CSS property is used to control the text size of an element ?', 'font-style', 'text-size', 'font-size', 'text-style', 'option3', 3),
(27, 'The default value of \"position\" attribute is _________.', 'fixed', 'absolute', 'inherit', 'relative', 'option4', 3),
(28, 'Which of the following property is used to set the text direction?', 'color', 'direction', 'letter-spacing', 'word-spacing', 'option2', 3),
(29, 'Which of the following property specifies the bottom margin of an element?', ':margin', ':margin-bottom', ':margin-top', ':margin-left', 'option2', 3),
(30, 'Which of the following value of cursor shows it as an arrow?', 'crosshair', 'default', 'pointer', 'move', 'option2', 3),
(31, 'Which of the following css property specifies a delay for the transition effect?', 'transition-delay', 'transition-effect', 'transition', 'transition-duration', 'option1', 3),
(32, 'Which CSS Property Is Used For Controlling The Layout?', 'Header', 'Footer', 'Display', 'None Of The Above', 'option3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `isadmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `password`, `isadmin`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1),
(2, 'sumit', 'singhsumit880@gmail.com', '12345', 0),
(3, 'ABHI...', 'armyofficer1996@gmail.com', '12345', 0),
(4, 'Raunak', 'raunak@gmail.com', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
