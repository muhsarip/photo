-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 06:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `access_name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `summary`, `content`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Photoshoot Technique', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', 'Fusce gravida quam non velit ornare bibendum. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non. Cras rhoncus interdum arcu eget congue. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non.\r\n\r\nCurabitur non justo velit. ipsum id mauris viverra, ac pulvinar dui fringilla. Ut suscipit ac turpis vitae accumsan. Fusce risus est, sagittis in lectus id, Nunc quis rutrum lorem. Suspendisse potenti. Maecenas felis odio.tempor iaculis elit.', 'blog-1.jpg', 'constructive-guidelines-for-new-ones-in-the-industry', 1, '2018-10-04 16:42:51', NULL),
(2, 'Some tricks in Photoshop for your photo', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', 'Fusce gravida quam non velit ornare bibendum. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non. Cras rhoncus interdum arcu eget congue. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non.\r\n\r\nCurabitur non justo velit. ipsum id mauris viverra, ac pulvinar dui fringilla. Ut suscipit ac turpis vitae accumsan. Fusce risus est, sagittis in lectus id, Nunc quis rutrum lorem. Suspendisse potenti. Maecenas felis odio.tempor iaculis elit.', 'blog-2.jpg', 'newly-cosntructed-site', 1, '2018-10-04 16:42:57', NULL),
(3, '50 Effects in Photoshop', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', 'Fusce gravida quam non velit ornare bibendum. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non. Cras rhoncus interdum arcu eget congue. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non.\r\n\r\nCurabitur non justo velit. ipsum id mauris viverra, ac pulvinar dui fringilla. Ut suscipit ac turpis vitae accumsan. Fusce risus est, sagittis in lectus id, Nunc quis rutrum lorem. Suspendisse potenti. Maecenas felis odio.tempor iaculis elit.', 'blog-3.jpg', 'basic-tips-for-your-kitchen', 1, '2018-10-04 16:42:57', NULL),
(4, 'testing created blog', 'lorem ipsum dolor sit amet amet ya ampun', '<p>lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun.</p>\n\n<p>lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun</p>\n\n<p>lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun&nbsp;lorem ipsum dolor sit amet amet ya ampun</p>\n', '3c5ea-lighthouse.jpg', 'testing-created-blog', 1, '2018-10-22 06:32:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `groups_header`
--

CREATE TABLE `groups_header` (
  `id_header_menu` int(11) NOT NULL,
  `id_groups` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups_header`
--

INSERT INTO `groups_header` (`id_header_menu`, `id_groups`) VALUES
(0, 1),
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `groups_menu`
--

CREATE TABLE `groups_menu` (
  `id_groups` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups_menu`
--

INSERT INTO `groups_menu` (`id_groups`, `id_menu`) VALUES
(1, 83),
(2, 83),
(1, 85),
(1, 92),
(1, 94),
(1, 96),
(2, 93),
(1, 93),
(1, 100),
(1, 101),
(1, 105),
(1, 106),
(1, 171),
(1, 172),
(1, 173),
(1, 174),
(1, 175),
(1, 176),
(1, 177),
(1, 178);

-- --------------------------------------------------------

--
-- Table structure for table `header_menu`
--

CREATE TABLE `header_menu` (
  `id_header_menu` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `header` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_menu`
--

INSERT INTO `header_menu` (`id_header_menu`, `sort`, `header`) VALUES
(1, 1, 'MENU');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `moto` varchar(255) DEFAULT NULL,
  `moto_description` varchar(255) DEFAULT NULL,
  `company_image` varchar(255) DEFAULT NULL,
  `company_title` varchar(255) DEFAULT NULL,
  `company_description` text,
  `background` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `moto`, `moto_description`, `company_image`, `company_title`, `company_description`, `background`) VALUES
(1, 'FASHION PHOTOSHOOT', 'CLASSY REBEL FASHION PHOTOSHOOT', 'about.jpg', '\r\nWe Are Imahe a Photography Studio', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p><p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>', 'cover_img_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `id_header_menu` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `url` varchar(150) NOT NULL,
  `menu_id` varchar(150) NOT NULL,
  `level_one` int(11) NOT NULL DEFAULT '0',
  `level_two` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `sort`, `id_header_menu`, `label`, `icon`, `url`, `menu_id`, `level_one`, `level_two`) VALUES
(83, 1, 1, 'Beranda', 'dashboard', 'admin/crud/index', '', 0, 0),
(85, 21, 1, 'User Management', 'lock', '#', '', 0, 0),
(92, 22, 1, 'Menu Management', 'bars', 'admin/crud/header_menu', 'menu-menu', 0, 0),
(93, 23, 1, 'Settings', 'gears', 'admin/crud/settings', '', 0, 0),
(94, 1, 1, 'Users', '', 'admin/crud/users', '', 85, 0),
(96, 3, 1, 'Groups', '', 'admin/crud/groups', '', 85, 0),
(173, 3, 1, 'Portofolio', 'photo', 'admin/portofolio', '', 0, 0),
(174, 2, 1, 'Service', 'life-ring', 'admin/service', '', 0, 0),
(175, 10, 1, 'Company Profile', 'globe', 'admin/profile/index/edit/1', '', 0, 0),
(176, 4, 1, 'Inbox', 'inbox', 'admin/inbox', '', 0, 0),
(177, 5, 1, 'Home Content', 'home', 'admin/home_content', '', 0, 0),
(178, 6, 1, 'Blog', 'list-alt', 'admin/blog', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `description`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Fusce gravida quam non velit ornare bibendum. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non. Cras rhoncus interdum arcu eget congue. Etiam sit amet diam arcu. Nunc tristique tellus quam, id ultrices urna rhoncus non.\r\n\r\nCurabitur non justo velit. ipsum id mauris viverra, ac pulvinar dui fringilla. Ut suscipit ac turpis vitae accumsan. Fusce risus est, sagittis in lectus id, Nunc quis rutrum lorem. Suspendisse potenti. Maecenas felis odio.tempor iaculis elit.', 'about.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `category_id`, `title`, `description`, `image`, `created_at`, `updated_at`, `youtube_link`, `sub_category_id`) VALUES
(1, 1, 'Penguin in the sea', 'This penguin is on the event tonight', 'd966c-penguins.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=jAk_xhs0Rcw', 6),
(2, 2, 'My Koala In the end of year', 'Koala is a bigget mamalia that have skill to climb the trees in same time when he eat some food', '8e6db-koala.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio_category`
--

CREATE TABLE `portofolio_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio_category`
--

INSERT INTO `portofolio_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Photography', NULL, NULL),
(2, 'Videography', NULL, NULL),
(3, 'Concept Creator', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio_sub_category`
--

CREATE TABLE `portofolio_sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio_sub_category`
--

INSERT INTO `portofolio_sub_category` (`id`, `name`, `created_at`, `updated_at`, `category_id`) VALUES
(4, 'Pre Wedding', NULL, NULL, 1),
(5, 'Wedding', NULL, NULL, 1),
(6, 'Photo Product', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PHOTOGRAPHY', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\nFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\nFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\n', 'service-1.png', '2018-10-21 15:13:58', NULL),
(2, 'IMAGE PROCESSING', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\nFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\nFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\n', 'service-2.png', '2018-10-21 15:13:58', NULL),
(3, 'VIDEOGRAPHY', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\nFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\nFar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\n', 'service-3.png', '2018-10-21 15:13:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id_settings` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `nama_perusahaan` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `skin` enum('black','azure','green','orange','red','purple') NOT NULL,
  `favicon` varchar(500) DEFAULT NULL,
  `footer` text,
  `version` varchar(255) DEFAULT NULL,
  `bg_auth` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id_settings`, `judul`, `nama_perusahaan`, `alamat`, `logo`, `skin`, `favicon`, `footer`, `version`, `bg_auth`) VALUES
(1, 'BDash', 'Kodefresh Developer', 'Jakarta', 'da4a9-logo-kodefresh.png', '', '62c46-logo-kodefresh.png', 'Copyright © 2018 BDash\r\n', 'Version 1.1', '32941-malte-wingen-381988-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `setting_frontend`
--

CREATE TABLE `setting_frontend` (
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `large_logo` varchar(255) DEFAULT NULL,
  `small_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `social_facebook` varchar(255) DEFAULT NULL,
  `social_tweeter` varchar(255) DEFAULT NULL,
  `social_instagram` varchar(255) DEFAULT NULL,
  `about_us` text,
  `short_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_frontend`
--

INSERT INTO `setting_frontend` (`id`, `company`, `large_logo`, `small_logo`, `favicon`, `address`, `email`, `phone`, `footer_text`, `social_facebook`, `social_tweeter`, `social_instagram`, `about_us`, `short_description`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, 'PhotoStyle', 'logo.png', 'logo.png', 'favicon.png', 'Jl. Anggrek 1 No.2', 'customer.service@photostyle.com', '0812637253263', 'Copyright © 2018 All rights reserved - Design By Colorlib', NULL, NULL, NULL, NULL, 'Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics');

-- --------------------------------------------------------

--
-- Table structure for table `t_brand`
--

CREATE TABLE `t_brand` (
  `id_brand` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_brand`
--

INSERT INTO `t_brand` (`id_brand`, `name`, `description`) VALUES
(1, 'Audi', '*'),
(2, 'BMW', '*'),
(3, 'Toyota', '*');

-- --------------------------------------------------------

--
-- Table structure for table `t_car`
--

CREATE TABLE `t_car` (
  `id` int(11) NOT NULL,
  `id_brand` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(20,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_car`
--

INSERT INTO `t_car` (`id`, `id_brand`, `name`, `price`, `description`, `image`) VALUES
(1, 3, 'Camry', '2000000000.00', 'best car', 'b826c-2018_toyota_camry_angularfront.jpg'),
(2, 2, 'dsds', '45454.00', '5454', '4f641-logo-kabupaten-sukabumi.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `image`) VALUES
(1, '127.0.0.1', 'Admin Levan', '$2y$08$v.Lr4yujxQxzZNdmCpgJWu7WLR5hzFDxkh0mRRmSuBartWDE93ySO', '', 'admin@admin.com', 'e5a9103affd0df036eaaa843764bacbb741a104f', 'asGsHoh0iWTpOuVLM.EMUO900526bdd0557906ac', 1421981304, NULL, 1268889823, 1540179465, 1, 'Admin', 'istrator', 'ADMIN', '1234567890', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_access`
--

CREATE TABLE `users_access` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `access_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(10, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_menu`
--
ALTER TABLE `header_menu`
  ADD PRIMARY KEY (`id_header_menu`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio_category`
--
ALTER TABLE `portofolio_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio_sub_category`
--
ALTER TABLE `portofolio_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indexes for table `setting_frontend`
--
ALTER TABLE `setting_frontend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_brand`
--
ALTER TABLE `t_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `t_car`
--
ALTER TABLE `t_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_access`
--
ALTER TABLE `users_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `header_menu`
--
ALTER TABLE `header_menu`
  MODIFY `id_header_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `portofolio_category`
--
ALTER TABLE `portofolio_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `portofolio_sub_category`
--
ALTER TABLE `portofolio_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id_settings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_brand`
--
ALTER TABLE `t_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_car`
--
ALTER TABLE `t_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_access`
--
ALTER TABLE `users_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `users_groups_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_groups_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
