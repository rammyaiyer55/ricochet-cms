-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2017 at 10:03 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ricochet-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'HTML (Hypertext Markup Language)', 'Brijesh', '2017-08-13', 'html.jpg', 'HTML is the language used for creating web documents. It is not a programming language, but rather a language that identifies the meaning, purpose, and structure of text within a document. \r\nYou can easily understand the structure of the document because it is simple, and you are an intelligent human being who has read many documents in your life. But your web browser needs to understand the document in order to present it to you in an intelligent and meaningful way.', 'HTML, Brijesh, Web Development', 0, 'draft'),
(2, 2, 'CSS (Cascading Style Sheet)', 'Jasmine', '2017-08-14', 'css.jpg', 'Cascading Stylesheets - or CSS - is the first technology you should start learning after HTML. Whereas HTML is used to define the structure and semantics of your content, CSS is used to style it and lay it out. So for example, you can use CSS to alter the font, color, size and spacing of your content, split it into multiple columns, or add animations and other decorative features.', 'CSS, Jasmine, Web Development', 0, 'draft'),
(5, 3, 'Javascript', 'Uday', '2017-08-15', 'js.jpg', 'JavaScript is a programming language that adds interactivity to your website (for example: games, responses when buttons are pressed or data entered in forms, dynamic styling, animation). This article helps you get started with this exciting language and gives you an idea of what is possible.', 'Javascript, Uday, Web Development', 0, 'draft'),
(6, 4, 'PHP (Hypertext Preprocessor)', 'Ashwathi', '2017-08-16', 'php.jpg', 'What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there\'s really no way that users can tell what you have up your sleeve.', 'PHP, Ashwathi, Web Development', 0, 'draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
