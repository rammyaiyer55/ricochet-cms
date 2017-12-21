-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 11:01 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Web Development'),
(2, 'AI / ML'),
(3, 'Android Development'),
(4, 'Design');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 1, 'John Doe', 'johndoe@ricochetcms.com', 'Hello! This post is awesome...', 'Unapproved', '2017-11-11'),
(3, 2, 'Hailee Steinfeld', 'hailee@ricochetcms.com', 'Dinner tonight?', 'Approved', '2017-12-05'),
(4, 3, 'Cindy', 'cindy@ricochetcms.com', 'Delete comments works perfect!', 'Unapproved', '2017-12-09'),
(5, 2, 'Zoey Deutch', 'zoeydeutch@ricochetcms.com', 'You see, every day, that the people who are seemingly so confident and seemingly so in love with themselves are the ones who are the most insecure and hurting the most inside.', 'Approved', '2017-12-19'),
(6, 3, 'Phoebe Ryan', 'phoeberyan@ricochetcms.com', 'Be stupid, be dumb, be funny, if that\'s who you are. Don\'t try to be someone that society wants you to be; that\'s stupid. So be yourself.', 'Approved', '2017-12-19'),
(7, 3, 'Kygo', 'kygo@ricochetcms.com', 'I\'m just trying to experiment with a lot of different stuff and see what comes out of it.', 'Approved', '2017-12-19'),
(8, 6, 'Martin Garrix', 'martin@ricochet.com', 'I want to show everyone that if you pursue your dreams, they can come true no matter what. That\'s what I want to do.', 'Approved', '2017-12-19');

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
  `post_comment_count` int(11) DEFAULT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 4, 'Design', 'Brijesh', '2017-11-11', 'design.png', 'Design is the creation of a plan or convention for the construction of an object, system or measurable human interaction (as in architectural blueprints, engineering drawings, business processes, circuit diagrams, and sewing patterns). Design has different connotations in different fields (see design disciplines below). In some cases, the direct construction of an object (as in pottery, engineering, management, coding, and graphic design) is also considered to use design thinking.', 'Design, Brijesh', 4, 'draft'),
(2, 1, 'Material Components', 'Brijesh', '2017-11-11', 'material.png', 'Design is the art of continuous problem solvingâ€”an active cycle of investigating and validating needs, crafting and developing ideas, and creating solutions. Over the course of its life, a digital product is shaped by many hands. The effects of this collaboration can be seen in the quality of a productâ€™s identity and implementation, as well as in the strength of the community it builds.\r\n\r\nWe created Material Design as a metaphor to rationalize design and implementation, establishing a shared language to help teams unite style, branding, interaction, and motion under a cohesive set of principles.\r\n\r\nWe believe a better design process yields better products, which is why weâ€™re expanding Material to be a system that supports the principles of good design and strengthens communication and productivity with new tools and inspiration. We hope these resources will help teams realize their greatest design potential, and weâ€™re eager to see the results.', 'CSS, Brijesh, Web Development, Material Components', 4, 'published'),
(3, 1, 'Laravel', 'John Doe', '2017-12-14', 'laravel.jpg', 'Laravel\'s versioning scheme maintains the following convention: paradigm.major.minor. Major framework releases are released every six months (February and August), while minor releases may be released as often as every week. Minor releases should never contain breaking changes.\r\n\r\nWhen referencing the Laravel framework or its components from your application or package, you should always use a version constraint such as 5.5.*, since major releases of Laravel do include breaking changes. However, we strive to always ensure you may update to a new major release in one day or less.\r\n\r\nParadigm shifting releases are separated by many years and represent fundamental shifts in the framework\'s architecture and conventions. Currently, there is no paradigm shifting release under development.', 'Laravel, Web Development, PHP Framework, John Doe', 5, 'approved'),
(6, 4, 'Perfect', 'Ed Sheeran', '2017-12-19', 'perfect_ed_sheeran.jpg', '\"Perfect\" is a song by English singer-songwriter Ed Sheeran. It was included on his third studio album (2017). After the album\'s release it charted at number 4 on the UK Singles Chart. On 21 August 2017, Billboard announced that \"Perfect\" would be the fourth single from the album. The song was serviced to pop radio on 26 September 2017, as the third single from the album in the United States (fourth overall). The song has reached number one in Austria, Belgium, France and Switzerland as well as the top ten in 14 more countries including Australia, Sweden, the United Kingdom, and the United States.\r\n\r\nIn November 2017, Sheeran announced that a remix of \"Perfect\", featuring a \"fucking big\" collaborator, would be released.', 'Perfect, Ed Sheeran, Song', 1, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(6, 'Brijesh Reddy', 'brijesh', 'Brijesh', 'Reddy', 'brijesh.reddy15@siesgst.ac.in', '', 'Admin', ''),
(7, 'Zoey Deutch', 'perfect', 'Zoey', 'Deutch', 'zoeydeutch@ricochetcms.com', '', 'Subscriber', ''),
(8, 'Martin Garrix', 'forbiddenvoices', 'Martin', 'Garrix', 'martin@ricochet.com', '', 'Subscriber', ''),
(10, 'Tim Bergling', '1234', 'Tim', 'Bergling', 'avicii@ricochetcms.com', '', 'Subscriber', ''),
(11, 'Hailee Steinfeld', 'rockbottom', 'Hailee', 'Steinfeld ', 'hailee@ricochetcms.com', '', 'Admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
