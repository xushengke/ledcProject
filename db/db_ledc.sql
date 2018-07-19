-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 16, 2018 at 01:00 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ledc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_promo` text NOT NULL,
  `image_contact1` text NOT NULL,
  `image_contact2` text NOT NULL,
  `image_logo` text NOT NULL,
  `image_facebook` text NOT NULL,
  `image_instagram` text NOT NULL,
  `image_youtube` text NOT NULL,
  `image_twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_promo`, `image_contact1`, `image_contact2`, `image_logo`, `image_facebook`, `image_instagram`, `image_youtube`, `image_twitter`) VALUES
(1, 'promo1.png', 'contact1.png', 'contact2.png', 'logo.png', 'facebook.png', 'instagram.png', 'youtube.png', 'twitter.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lightbox`
--

CREATE TABLE `tbl_lightbox` (
  `box_name` text NOT NULL,
  `box_id` int(10) UNSIGNED NOT NULL,
  `box_thumb` text NOT NULL,
  `box_image` text NOT NULL,
  `box_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lightbox`
--

INSERT INTO `tbl_lightbox` (`box_name`, `box_id`, `box_thumb`, `box_image`, `box_text`) VALUES
('LONDON', 1, 'service1.jpg', 'service1.png', 'London'),
('EDUCATION', 2, 'service2.jpg', 'service2.png', 'Continuing education is an important component of both Western and Fanshawe programs and encompasses business, the arts and a broad array of leisure activities and areas of human interest.'),
('FACILITY', 3, 'service3.jpg', 'service3.png', 'London is a regional centre of health care and education, being home to the University of Western Ontario, Fanshawe College, and several hospitals. The city hosts a number of musical and artistic exhibits and festivals, which contribute to its tourism industry, but its economic activity is centred on education, medical research, insurance, and information technology. London\'s university and hospitals are among its top ten employers.\r\n'),
('EVENTS', 4, 'service4.jpg', 'service4.png', 'The city is home to many festivals including Sunfest, the Home County Folk Festival, the London Fringe Theatre Festival, the Expressions in Chalk Street Painting Festival, Rock the Park, Western Fair, Dundas Street Festival, and The International Food Festival. The London Rib-Fest is the second largest barbecue rib festival in North America.\r\n'),
('NATURE', 5, 'service5.jpg', 'service5.png', 'London has a number of parks. Victoria Park in downtown London is a major centre of community events, attracting an estimated 1 million visitors per year. Other major parks include Harris Park, Gibbons Park, Fanshawe Conservation Area Fanshawe Pioneer Village, Springbank Park, and Westminster Ponds. The city also maintains a number of gardens and conservatories.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_make`
--

CREATE TABLE `tbl_make` (
  `make_id` int(10) UNSIGNED NOT NULL,
  `make_name` text NOT NULL,
  `make_image` text NOT NULL,
  `make_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_make`
--

INSERT INTO `tbl_make` (`make_id`, `make_name`, `make_image`, `make_text`) VALUES
(1, 'product1', 'product1.png', 'Harring Doors does so much more than provide the White House, Western University, Harvard and Yale with stile and rail wood doors; they provide a sustainable solution. In business for more than 25 years, this company is proud to be certified with the Rainforest Alliance.'),
(2, 'product2', 'product2.png', 'Sourcing many ingredients from Southwestern Ontario producers, Dr. Oetker s first North American facility produces over 77,000 frozen pizzas a day right here in London, Ontario.'),
(3, 'product3', 'product3.png', 'What does the International Space Station, 2014 Sochi Olympics and the discovery of the Titanic all have in common? IO Industries of London, Ontario made the hightech cameras that filmed these monumental moments. Specializing in digital video cameras and recorders, this company improves the quality of footage in defense, medical, scientific, broadcast and cinema applications.'),
(4, 'product4', 'product4.png', 'In missions where vehicles aren t safe enough to have a pilot, U.S. defense giant Northrup Grumman looks to London. Collaborating with local business Diamond Aircraft, Northrup produces unmanned surveillance aircrafts, or as they are more commonly known, drones. This defense partnership puts London on the map as a premiere defence manufacturing centre.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_text`
--

CREATE TABLE `tbl_text` (
  `text_id` int(10) UNSIGNED NOT NULL,
  `text_intro` text NOT NULL,
  `text_made1` text NOT NULL,
  `text_made2` text NOT NULL,
  `text_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_text`
--

INSERT INTO `tbl_text` (`text_id`, `text_intro`, `text_made1`, `text_made2`, `text_contact`) VALUES
(1, 'Although the history of London begins in 1793, when Lieutenant-Governor John Graves Simcoe selected the Forks of the Thames as hischoice for the future site for the capital of the province, the city itse lf wasnot founded until 1826. By that year the provincial capital had long been located at Toronto. What was needed in the southwestern peninsula was an administrative seat for the vast London District which covered most of central Western Ontario. Vittoria, a little village in Norfolk County which had served as the district town for some years, by 1825 was too remote from many of the little clusters of settlements which were spreading north from Lake Erie.', 'From baking dog donut treats to building rowing sculls for elite athletes, London is at the manufacturing forefront of world renowned products. Around the world, pizza crusts rise, high-tech cameras capture aerospace engineers in flight, and White House doors provide solid security to the President of the United States. ', 'We are proud of these products made right here, in London, Ontario.', 'Situated midway between Detroit and Toronto, London is currently the 11th largest city in Canada.As a safe and secure community, along with an abundance of recreational facilities, these are just a few qualities that families enjoy about the city. London presents exciting job opportunities in a number of sectors, good neighbourhoods, excellent education, renowned health care facilities, and plenty to do in your leisure time.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_twitterdata`
--

CREATE TABLE `tbl_twitterdata` (
  `twitter_id` smallint(5) UNSIGNED NOT NULL,
  `twitter_season` varchar(10) NOT NULL,
  `twitter_dataname` varchar(100) NOT NULL,
  `twitter_data` varchar(110) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_twitterdata`
--

INSERT INTO `tbl_twitterdata` (`twitter_id`, `twitter_season`, `twitter_dataname`, `twitter_data`) VALUES
(1, '1', 'fans', '2000'),
(2, '2', 'fans', '2100'),
(3, '3', 'fans', '2300'),
(4, '4', 'fans', '2500'),
(5, '1', 'impressions', '3000'),
(6, '2', 'impressions', '3200'),
(7, '3', 'impressions', '2800'),
(8, '4', 'impressions', '4000'),
(9, '1', 'engagements', '1200'),
(10, '2', 'engagements', '2300'),
(11, '3', 'engagements', '2600'),
(12, '4', 'engagements', '2900'),
(13, '1', 'links', '3001'),
(14, '2', 'links', '2800'),
(15, '3', 'links', '3500'),
(16, '4', 'links', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` varchar(15) NOT NULL,
  `user_ip` varchar(50) DEFAULT 'no',
  `user_first` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`, `user_ip`, `user_first`) VALUES
(1, 'shengke', 'xu', '123456', 'xushengke94@gmail.com', '2018-04-15 20:04:39', '', '::1', ''),
(38, 'aa', 'aa', 'd3fad7d3634dbfb61018813546edbccb', 'aa', '2018-02-22 03:58:00', '2', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(10) UNSIGNED NOT NULL,
  `video_source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_source`) VALUES
(1, 'LEDC_project.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_lightbox`
--
ALTER TABLE `tbl_lightbox`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `tbl_make`
--
ALTER TABLE `tbl_make`
  ADD PRIMARY KEY (`make_id`);

--
-- Indexes for table `tbl_text`
--
ALTER TABLE `tbl_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `tbl_twitterdata`
--
ALTER TABLE `tbl_twitterdata`
  ADD PRIMARY KEY (`twitter_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lightbox`
--
ALTER TABLE `tbl_lightbox`
  MODIFY `box_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_make`
--
ALTER TABLE `tbl_make`
  MODIFY `make_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_text`
--
ALTER TABLE `tbl_text`
  MODIFY `text_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_twitterdata`
--
ALTER TABLE `tbl_twitterdata`
  MODIFY `twitter_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
