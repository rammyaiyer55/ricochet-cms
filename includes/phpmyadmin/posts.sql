-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 09:48 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 4, 'Design', 'Brijesh', '2017-11-11', 'design.png', 'Design is the creation of a plan or convention for the construction of an object, system or measurable human interaction (as in architectural blueprints, engineering drawings, business processes, circuit diagrams, and sewing patterns). Design has different connotations in different fields (see design disciplines below). In some cases, the direct construction of an object (as in pottery, engineering, management, coding, and graphic design) is also considered to use design thinking.', 'Design, Brijesh', 4, 'draft'),
(2, 1, 'Material Components', 'Brijesh', '2017-11-11', 'material.png', 'Design is the art of continuous problem solvingâ€”an active cycle of investigating and validating needs, crafting and developing ideas, and creating solutions. Over the course of its life, a digital product is shaped by many hands. The effects of this collaboration can be seen in the quality of a productâ€™s identity and implementation, as well as in the strength of the community it builds.\r\n\r\nWe created Material Design as a metaphor to rationalize design and implementation, establishing a shared language to help teams unite style, branding, interaction, and motion under a cohesive set of principles.\r\n\r\nWe believe a better design process yields better products, which is why weâ€™re expanding Material to be a system that supports the principles of good design and strengthens communication and productivity with new tools and inspiration. We hope these resources will help teams realize their greatest design potential, and weâ€™re eager to see the results.', 'CSS, Brijesh, Web Development, Material Components', 4, 'approved'),
(3, 1, 'Laravel', 'John Doe', '2017-11-11', 'laravel.jpg', 'Laravel\'s versioning scheme maintains the following convention: paradigm.major.minor. Major framework releases are released every six months (February and August), while minor releases may be released as often as every week. Minor releases should never contain breaking changes.\r\n\r\nWhen referencing the Laravel framework or its components from your application or package, you should always use a version constraint such as 5.5.*, since major releases of Laravel do include breaking changes. However, we strive to always ensure you may update to a new major release in one day or less.\r\n\r\nParadigm shifting releases are separated by many years and represent fundamental shifts in the framework\'s architecture and conventions. Currently, there is no paradigm shifting release under development.', 'Laravel, Web Development, PHP Framework', 4, 'approved');

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
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
