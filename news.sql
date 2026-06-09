-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2026 at 03:37 AM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

DROP TABLE IF EXISTS `admin_register`;
CREATE TABLE IF NOT EXISTS `admin_register` (
  `Aid` int NOT NULL AUTO_INCREMENT,
  `Aname` varchar(20) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `Aemail` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updateadmin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `astatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `pincode` varchar(10) NOT NULL,
  `aimage` varchar(100) NOT NULL,
  `priority` enum('Admin','Subadmin') NOT NULL DEFAULT 'Subadmin',
  PRIMARY KEY (`Aid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`Aid`, `Aname`, `fullname`, `Aemail`, `password`, `gender`, `address`, `contactno`, `city`, `state`, `country`, `datereg`, `updateadmin`, `astatus`, `pincode`, `aimage`, `priority`) VALUES
(1, 'Rohit', 'Rohit Patil', 'admin@gmail.com', '123', 'Male', '66,Dipali park,navagam,Udhna', '9099606365', 'Surat', 'Gujarat', 'India', '2026-03-23 05:32:10', '0000-00-00 00:00:00', 'Active', '394210', '24216133fc6e15d2c8e72a7c1923b875.jpg', 'Admin'),
(5, 'yogesh sali', 'Yogesh Sali', 'yogesh@gmail.com', '123123', 'Male', 'B-192 Sanjay Nagar, Limbayat, Udhana, Surat', '8541023698', 'Surat', 'Gujarat', 'India', '2026-04-18 07:24:46', '0000-00-00 00:00:00', 'Active', '394210', '322ab53c61d3c5e6f068693a1dc7e410.jpg', 'Subadmin');

-- --------------------------------------------------------

--
-- Table structure for table `breakingnews`
--

DROP TABLE IF EXISTS `breakingnews`;
CREATE TABLE IF NOT EXISTS `breakingnews` (
  `bid` int NOT NULL AUTO_INCREMENT,
  `description` varchar(500) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakingnews`
--

INSERT INTO `breakingnews` (`bid`, `description`, `datereg`, `bstatus`) VALUES
(25, 'Maharashtra:Container vehicle dies in luxury bus collision, 2 killed, 4 injured in Palghar  					  					', '2026-03-23 14:00:57', 'Active'),
(26, 'Those who commit crimes with girls will be sentenced to death in six months: Shatrughan signha', '2026-03-23 14:00:58', 'Active'),
(27, 'Kaveri issue: Will protest by DMK making human chain on April 23', '2026-03-20 13:40:04', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `catgname` varchar(20) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `catgstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `catgname`, `datereg`, `catgstatus`) VALUES
(1, 'Weather', '2026-04-18 06:42:34', 'Active'),
(4, 'Business', '2026-03-21 13:20:38', 'Active'),
(5, 'Entertainment', '2026-03-21 13:20:40', 'Active'),
(6, 'sports', '2026-03-21 13:20:43', 'Active'),
(7, 'Tech', '2026-03-21 13:20:44', 'Active'),
(8, 'World', '2026-03-21 13:20:48', 'Active'),
(9, 'Education', '2026-03-21 13:20:54', 'Active'),
(10, 'Lifestyle', '2026-04-18 06:31:27', 'Deactive'),
(11, 'Astrology', '2026-03-21 13:21:02', 'Active'),
(13, 'Travel', '2026-03-21 13:21:09', 'Active'),
(14, 'Fashion', '2026-03-21 13:21:13', 'Active'),
(15, 'Politics', '2026-03-21 13:21:17', 'Active'),
(16, 'Articles', '2026-03-21 13:21:21', 'Active'),
(17, 'Government ', '2026-03-22 07:16:44', 'Active'),
(21, 'Crime', '2026-03-22 07:17:11', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chatid` int NOT NULL AUTO_INCREMENT,
  `repid` int NOT NULL,
  `adminmsg` varchar(100) NOT NULL,
  `chatstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`chatid`),
  KEY `rid` (`repid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `repid`, `adminmsg`, `chatstatus`) VALUES
(9, 17, 'Your \"Business\" article has been approved and published. Good work!\r\n', 'Active'),
(10, 27, 'Please revise the \"Politics\" article headline. It needs to be more clear and engaging.\r\n', 'Active'),
(11, 22, 'We need urgent coverage on a breaking Crime news. Please prioritize and submit ASAP.\r\n', 'Active'),
(12, 29, 'Your recent submissions are impressive. Keep maintaining the quality and accuracy.\r\n', 'Active'),
(13, 28, 'Kindly upload high-quality images for your \"Travel\" report before final approval.\r\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `cityid` int NOT NULL AUTO_INCREMENT,
  `stateid` int NOT NULL,
  `countryid` int NOT NULL,
  `cname` varchar(20) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`cityid`),
  KEY `stateid` (`stateid`),
  KEY `countryid` (`countryid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `stateid`, `countryid`, `cname`, `datereg`, `cstatus`) VALUES
(3, 5, 3, 'vapi', '2026-03-19 14:04:48', 'Active'),
(13, 8, 3, 'Mumbai', '2026-03-19 14:05:01', 'Active'),
(14, 8, 3, 'Pune', '2026-03-20 12:59:50', 'Deactive'),
(16, 5, 3, 'bharuch', '2026-03-20 14:04:50', 'Active'),
(18, 5, 3, 'Gandinagar', '2026-03-20 14:04:52', 'Active'),
(19, 10, 4, 'Miami', '2026-03-20 11:47:31', 'Deactive'),
(21, 10, 3, 'St.Petersburg', '2026-03-21 11:48:13', 'Deactive'),
(22, 5, 3, 'Anand', '2026-03-21 14:04:54', 'Active'),
(23, 5, 3, 'Surat', '2026-03-21 14:04:57', 'Active'),
(24, 12, 4, 'Los Angeles', '2026-03-21 14:06:11', 'Active'),
(25, 12, 4, 'San Jose', '2026-03-21 14:06:45', 'Active'),
(26, 13, 4, 'San Antonio', '2026-03-22 14:06:41', 'Active'),
(27, 13, 4, 'Dallas', '2026-03-22 14:06:17', 'Active'),
(28, 14, 3, 'New Delhi', '2026-03-22 14:06:22', 'Active'),
(29, 14, 3, 'Lucknow', '2026-03-22 14:06:27', 'Active'),
(30, 16, 5, 'Cairo', '2026-03-22 14:06:07', 'Active'),
(31, 17, 6, 'Capetown', '2026-03-22 14:06:31', 'Active'),
(32, 18, 3, 'Bihar', '2026-03-22 14:06:02', 'Active'),
(33, 19, 3, 'Chennai', '2026-03-22 14:05:57', 'Active'),
(34, 24, 7, 'Gold Coast', '2026-03-23 14:05:53', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `countryid` int NOT NULL AUTO_INCREMENT,
  `countryname` varchar(20) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `countrystatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`countryid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryid`, `countryname`, `datereg`, `countrystatus`) VALUES
(3, 'India', '2026-03-21 07:51:45', 'Active'),
(4, 'USA', '2026-03-21 07:51:47', 'Active'),
(5, 'Egypt', '2026-03-22 07:51:49', 'Active'),
(6, 'South Africa', '2026-03-23 07:51:51', 'Active'),
(7, 'Australia', '2026-03-22 01:03:15', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int NOT NULL AUTO_INCREMENT,
  `rid` int NOT NULL,
  `usernm` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`fid`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `rid`, `usernm`, `email`, `contactno`, `comment`, `datereg`, `fstatus`) VALUES
(22, 143, 'yogesh sali', 'yogesh@gmail.com', '8410236590', 'good ', '2026-03-23 05:41:12', 'Active'),
(23, 140, 'shreya ojha ', 'shreya@gmail.com', '8745003692', 'For so long, mental health was ignored or judged, ', '2026-03-24 13:16:59', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `postrating`
--

DROP TABLE IF EXISTS `postrating`;
CREATE TABLE IF NOT EXISTS `postrating` (
  `ratid` int NOT NULL AUTO_INCREMENT,
  `rid` int NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `ratlike` varchar(2) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ratid`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postrating`
--

INSERT INTO `postrating` (`ratid`, `rid`, `uemail`, `ratlike`, `datereg`) VALUES
(78, 144, 'admin@gmail.com', '0', '2026-04-18 06:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `reporterchat`
--

DROP TABLE IF EXISTS `reporterchat`;
CREATE TABLE IF NOT EXISTS `reporterchat` (
  `reporterchatid` int NOT NULL AUTO_INCREMENT,
  `Aid` int NOT NULL,
  `reportermsg` varchar(500) NOT NULL,
  `reporterchatstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`reporterchatid`),
  KEY `Aid` (`Aid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporterchat`
--

INSERT INTO `reporterchat` (`reporterchatid`, `Aid`, `reportermsg`, `reporterchatstatus`) VALUES
(1, 1, 'Hi  I’ve submitted a new article under the Business category. Please review and approve it when possible.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `reporterpost`
--

DROP TABLE IF EXISTS `reporterpost`;
CREATE TABLE IF NOT EXISTS `reporterpost` (
  `rid` int NOT NULL AUTO_INCREMENT,
  `repid` int NOT NULL,
  `cid` int NOT NULL,
  `sid` int NOT NULL,
  `cityid` int NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `view` varchar(11) NOT NULL DEFAULT '0',
  `postdatereg` date NOT NULL,
  `updatedatereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rpstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`rid`),
  KEY `repid` (`repid`),
  KEY `sid` (`sid`),
  KEY `cid` (`cid`),
  KEY `cityid` (`cityid`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporterpost`
--

INSERT INTO `reporterpost` (`rid`, `repid`, `cid`, `sid`, `cityid`, `image`, `title`, `description`, `view`, `postdatereg`, `updatedatereg`, `rpstatus`) VALUES
(128, 17, 4, 23, 13, 'f2c0b14891989b066f47312ef4b5d009.png', 'LPG Shortage Hits Small Businesses', 'In Mumbai, a shortage of commercial LPG cylinders has started affecting thousands of small businesses, especially street food vendors and local eateries.\r\n\r\nDue to supply disruptions and restrictions on commercial LPG distribution, many vendors are struggling to get cylinders on time. As a result, they are either:', '2', '2026-03-21', '2026-03-24 13:11:08', 'Active'),
(129, 17, 4, 23, 28, '67e48ea043f3ff190410c39901c65c50.jpg', 'India’s Startup Funding Sees Strong Rebound in 2026', 'India’s startup ecosystem has witnessed a sharp recovery in early 2026, with venture capital funding increasing significantly compared to last year. Sectors like fintech, AI, and EV startups are attracting major investments from global firms, signaling renewed investor confidence.', '1', '2026-03-22', '2026-03-22 06:48:04', 'Active'),
(130, 17, 1, 35, 13, 'cee529194d895183b92ef98621fda83d.jpg', 'IMD Issues Nationwide Rain & Thunderstorm Alert', 'The India Meteorological Department (IMD) has issued a nationwide alert warning of heavy rainfall, thunderstorms, and strong winds across multiple states. Eastern and northeastern regions may experience intense rain, while central and southern India could see scattered showers and rising humidity.', '2', '2026-03-22', '2026-03-23 04:15:27', 'Active'),
(131, 17, 1, 34, 23, 'd887697876797c1dd641d9892302040b.jpg', 'Climate Change Disrupting India’s Weather Patterns', 'Recent studies show that climate change is altering India’s weather cycles, increasing extreme events like heatwaves, heavy rainfall, and unpredictable seasons. Average temperatures have already risen significantly, leading to long-term environmental and agricultural impacts.', '22', '2026-03-22', '2026-04-18 06:39:52', 'Active'),
(132, 17, 5, 10, 14, '78831fcb9f7705488e2b77f49283d4d0.jpg', 'Bollywood Sees Big Budget Film Announcements in 2026', 'Bollywood is gearing up for a blockbuster year with several big-budget films announced by leading production houses. Action, historical dramas, and pan-India releases are expected to dominate the box office in 2026.', '1', '2026-03-22', '2026-03-24 12:50:25', 'Active'),
(133, 17, 5, 16, 24, 'd1169704edcf2d94190d58b3cbc4d54a.jpg', 'Hollywood Faces Box Office Shift Towards Streaming', 'Hollywood studios are adapting to changing audience preferences as more viewers shift toward streaming services. The industry is balancing theatrical releases with digital premieres to maximize reach.', '0', '2026-04-10', '2026-04-18 06:46:42', 'Active'),
(134, 22, 6, 9, 13, '1097a1e3f4e861bf3087f142e47b830c.jpg', 'ICC Men\'s T20 World Cup 2026 – India Creates History', 'India won the T20 World Cup 2026 by defeating New Zealand by 96 runs in the final. This historic victory made India the first team to win three T20 World Cups and successfully defend the title on home soil.', '1', '2026-03-22', '2026-03-22 09:20:03', 'Active'),
(135, 22, 6, 9, 14, '56194fd55328fa0441ae0e8fca6aca11.jpg', 'IPL 2026 Matches to be Held at M. Chinnaswamy Stadium', 'Royal Challengers Bengaluru have received government approval to host IPL 2026 matches at the iconic stadium in Bengaluru. The venue is expected to host key matches, including the tournament opener.', '7', '2026-03-22', '2026-04-18 06:25:13', 'Active'),
(136, 22, 7, 36, 18, '5b7aeb48d43ed2c81c634218a604b175.jpg', 'Microsoft Launches New AI-Powered Windows Features', 'Microsoft has introduced new AI-powered features in Windows, improving productivity and automation. The update includes smart assistants, better search, and enhanced security tools for users.', '0', '2026-03-22', '2026-03-22 09:24:39', 'Active'),
(137, 22, 7, 27, 25, 'e50c4feb1b5cf838e4ab3f843820ebcf.jpg', 'Samsung Introduces New Foldable Smartphone Series', 'Samsung has unveiled its latest foldable smartphones with enhanced durability, better multitasking features, and improved display technology, targeting premium users.', '0', '2026-03-22', '2026-03-22 09:26:18', 'Active'),
(138, 22, 8, 39, 22, '0800f876956d8dde738f7e1a56d794bf.jpg', 'India Strengthens Economic Policies for 2026 Growth', 'The India government has rolled out a series of new economic reforms aimed at accelerating growth in 2026. These policies focus on boosting manufacturing, supporting startups, and improving infrastructure development across urban and rural areas. Special emphasis has been placed on job creation, digital economy expansion, and attracting foreign direct investment (FDI). Experts believe these reforms could significantly strengthen India’s position as one of the fastest-growing major economies in the world, although challenges like inflation and global uncertainty remain key concerns.', '5', '2026-03-22', '2026-04-13 05:13:04', 'Active'),
(139, 22, 8, 40, 26, 'd06da062c9e2adf5f950e459f894fb7c.jpg', 'Global Leaders Meet to Discuss Climate and Economy', 'Leaders from major economies around the world gathered at a high-level international summit to discuss pressing global issues such as climate change, economic recovery, and geopolitical stability. The discussions focused on reducing carbon emissions, strengthening global trade partnerships, and addressing supply chain disruptions. Several countries proposed collaborative strategies to tackle environmental challenges while ensuring economic growth. The summit highlighted the importance of international cooperation in dealing with global crises and emphasized the need for long-term sustainable solutions.', '1', '2026-03-22', '2026-03-22 09:38:18', 'Active'),
(140, 27, 10, 12, 22, 'f1e68c68b81d3c8d5d1ddd551bddefa2.png', 'Rising Focus on Mental Health Awareness in 2026', 'Mental health has become a major priority worldwide as more people recognize the importance of emotional well-being alongside physical health. Experts are encouraging practices such as meditation, regular exercise, and maintaining a healthy work-life balance to reduce stress and anxiety. Governments and organizations are also launching awareness campaigns and improving access to mental health services. With the rise of digital lifestyles and work pressure, professionals emphasize early diagnosis and support systems to prevent long-term psychological issues.', '2', '2026-03-22', '2026-03-24 13:16:59', 'Active'),
(141, 27, 10, 22, 27, '4e16665fa07a32b50aa4917be111c7c5.jpg', 'Sustainable Tourism Gains Popularity Worldwide', 'Sustainable tourism is becoming a major trend as travelers become more conscious of environmental impact. Eco-friendly hotels, reduced plastic usage, and responsible travel practices are being promoted across the globe. Tourists are increasingly choosing destinations that support conservation and local communities. Governments and tourism boards are also encouraging green initiatives to preserve natural resources while maintaining tourism growth.', '2', '2026-03-22', '2026-03-24 12:48:41', 'Active'),
(142, 27, 9, 28, 18, 'dd2d572375bdc33c554c16ff7f4d5f49.jpg', 'Government Job Opportunities Increase in Banking Sector', 'Public sector banks in India are expected to release a large number of job vacancies in 2026. Positions such as clerks, probationary officers, and specialist officers will be available for candidates across the country. The recruitment process will include online exams and interviews. These jobs are highly sought after due to job security, good salary packages, and career growth opportunities. Candidates are advised to prepare for aptitude tests, reasoning, and general awareness sections.', '0', '2026-03-22', '2026-03-22 10:07:19', 'Active'),
(143, 27, 9, 28, 22, '96bbdbda917cc09e75903b6216f0dcac.jpg', 'Competitive Exams See Record Number of Applicants in 2026', 'Competitive exams in India such as entrance tests for engineering, medical, and government services are witnessing a record number of applicants this year. The increasing competition has raised the difficulty level and cut-off marks. Coaching institutes and online learning platforms are playing a crucial role in helping students prepare effectively. Experts emphasize the importance of consistent practice, mock tests, and conceptual clarity to succeed in these highly competitive exams.', '4', '2026-03-22', '2026-03-23 05:41:12', 'Active'),
(144, 27, 11, 42, 14, 'ec48aea8276476379feed380a2b009e2.jpg', 'Aries (Mesh Rashi) – Career Growth & New Opportunities Ahead', 'People born under the Aries sign may experience significant growth in their professional life during this period. New opportunities, promotions, or business expansions are likely to come your way. Your confidence and leadership skills will help you overcome challenges and make important decisions. Financially, this is a stable time, but experts advise avoiding unnecessary risks or impulsive investments. In personal life, maintaining patience and clear communication will strengthen relationships. Health-wise, focusing on regular exercise and a balanced routine will bring positive results.', '3', '2026-03-22', '2026-04-18 06:42:29', 'Active'),
(145, 27, 11, 46, 23, 'dbafead9b56f2976a87d2b9c8340aaf7.jpg', 'Leo – Weekly Horoscope: Relationships & Career Insights', 'This week is favorable for Leo natives in terms of relationships and career progress. Romantic relationships may strengthen, and new connections could be formed. Professionally, you may receive new responsibilities that can help you grow. However, balancing work and personal life will be important to avoid stress. Health remains stable, but regular physical activity and proper diet are recommended. Overall, this is a positive period with opportunities for growth and happiness.\r\n', '0', '2026-03-22', '2026-03-22 10:13:18', 'Active'),
(146, 28, 13, 32, 18, 'e698bc7d6b88bd477ac04d4760520248.jpg', 'Domestic Tourism in India Sees Massive Growth in 2026', 'Domestic tourism across India has witnessed a significant rise in 2026 as more people are choosing to explore destinations within the country. Popular locations such as hill stations, beaches, and heritage cities are seeing increased footfall. Improved infrastructure, better road connectivity, and affordable travel packages have made it easier for travelers to plan trips. Experts believe that this trend is boosting local economies and creating employment opportunities in the tourism sector. Government initiatives promoting “Dekho Apna Desh” are also encouraging citizens to discover the cultural diversity of India.', '0', '2026-03-22', '2026-03-22 10:20:23', 'Active'),
(147, 28, 13, 32, 13, '82bb4159900607f843f96c8f18a90ceb.jpg', '. Indian Railways Introduces New Tourist Trains', 'Indian Railways has launched new tourist trains to promote domestic travel across India. These trains are designed to provide comfortable and affordable travel experiences, covering major tourist destinations across different states. Special packages include guided tours, accommodation, and meals, making travel convenient for passengers. This initiative aims to boost tourism while showcasing India’s rich cultural heritage and historical landmarks.', '0', '2026-03-22', '2026-03-22 10:21:21', 'Active'),
(148, 28, 14, 75, 16, '4654cbe900c8d39baa7317a7523d1ec6.jpg', 'Latest Fashion Trends Take Over 2026 Runways', 'Fashion trends in 2026 are all about bold styles, vibrant colors, and comfortable designs. Designers are focusing on oversized silhouettes, sustainable fabrics, and fusion wear that blends traditional and modern styles. Street fashion is heavily influencing global runways, with casual yet stylish outfits gaining popularity among youth. Experts say that individuality and self-expression are becoming key elements in fashion, allowing people to experiment with unique looks and personal styles.', '0', '2026-03-22', '2026-03-22 10:31:12', 'Active'),
(149, 28, 14, 76, 18, '884ba048b3f41e851c2c5fe4efb9d422.jpg', 'Smart Accessories Gain Popularity Among Youth', 'Smart accessories like wearable devices, smartwatches, and tech-integrated fashion items are gaining popularity, especially among young consumers. These accessories combine functionality with style, offering features like fitness tracking, notifications, and health monitoring. The blend of fashion and technology is creating a new segment in the industry, attracting tech-savvy users.', '0', '2026-03-22', '2026-03-22 10:32:38', 'Active'),
(150, 28, 15, 15, 3, '0785686af6a0e32febc16481f64e1344.jpg', 'State Governments Announce New Development Policies', 'Several state governments across India have introduced new policies aimed at boosting regional development and improving public services. These initiatives focus on infrastructure, healthcare, education, and employment generation. State authorities are prioritizing digital governance and transparency to ensure efficient delivery of services. Experts believe that such reforms will help strengthen local economies and improve the quality of life for citizens, although effective implementation remains a key challenge.', '0', '2026-03-22', '2026-03-22 10:37:31', 'Active'),
(151, 28, 15, 74, 23, '66a650f07e2628c5ca9a0189d996a6b6.jpg', 'Political Parties Release Election Manifestos', 'Leading political parties have released their election manifestos outlining promises related to economic growth, welfare schemes, and development projects. These manifestos highlight the parties’ vision and priorities for the upcoming term. Voters are closely analyzing these promises to make informed decisions. Experts emphasize the importance of accountability and transparency in implementing these commitments after elections.', '0', '2026-03-22', '2026-03-22 10:39:06', 'Active'),
(152, 29, 16, 60, 32, 'fb736005c70c2a352a196a62b0d6ec3d.jpg', 'Urban Development and Smart Cities in Modern India', 'Urbanization in India is rapidly increasing, leading to the development of smart cities across the nation. These cities focus on efficient infrastructure, digital connectivity, sustainable energy, and improved public services. Government projects aim to enhance the quality of life for citizens through better transportation systems, waste management, and smart governance. While these developments offer numerous benefits, they also present challenges such as population pressure, environmental concerns, and the need for effective urban planning.\r\n', '0', '2026-03-22', '2026-03-22 10:43:01', 'Active'),
(153, 29, 16, 65, 26, '79154add1a512d15d931971fd2650224.png', 'Climate Change: A Global Challenge Requiring Collective Action', 'Climate change is one of the most pressing global issues, affecting ecosystems, economies, and human lives. Rising temperatures, extreme weather events, and environmental degradation are becoming more frequent. Countries around the world are working together to reduce carbon emissions and promote sustainable development. International agreements and policies aim to combat climate change, but their success depends on strong cooperation and commitment from all nations. Individuals and organizations also play a vital role in adopting eco-friendly practices to protect the planet.', '0', '2026-03-22', '2026-03-22 10:44:48', 'Active'),
(154, 29, 17, 71, 32, '15aa5e50c30243a1faf8e520aab8f656.jpg', 'India Government Announces New Infrastructure Development Plan', 'The Government of India has announced a comprehensive infrastructure development plan aimed at boosting economic growth and improving connectivity across the country. The plan includes the construction of new highways, expansion of railway networks, and modernization of airports. Special focus has been given to rural infrastructure, ensuring better access to basic facilities such as roads, electricity, and water supply. Officials believe that this initiative will generate employment opportunities and strengthen the nation’s overall development.', '0', '2026-03-22', '2026-03-22 10:46:38', 'Active'),
(155, 29, 17, 71, 18, '96fe17fddacb8449da394e5a5e87b8b0.jpg', 'Government Announces New Welfare Schemes for Citizens', 'Several new welfare schemes have been announced by the government to support economically weaker sections of society. These schemes focus on providing financial assistance, healthcare benefits, housing support, and educational opportunities. Authorities aim to improve living standards and reduce poverty through targeted programs. The government has also emphasized transparency and direct benefit transfer (DBT) systems to ensure that benefits reach eligible citizens without delays.', '0', '2026-03-22', '2026-03-22 10:48:09', 'Active'),
(156, 29, 21, 77, 16, '3b478d675e453ec4c1c8d2e484862ccd.jpg', 'Kidnapping Case Solved by Police Within 24 Hours', 'In a swift operation, police successfully rescued a kidnapped minor within 24 hours of the incident. The accused had demanded a ransom from the victim’s family, creating panic in the local community. Acting on technical surveillance and local intelligence, authorities tracked down the suspects and safely recovered the child. Officials praised the quick response of law enforcement agencies and assured citizens of strict action against such crimes. The case highlights the importance of rapid coordination and advanced investigation techniques in tackling serious offenses.', '0', '2026-03-22', '2026-03-22 10:51:43', 'Active'),
(157, 29, 21, 78, 13, 'e9ca9623b66b6b39d99a620923416f76.jpg', 'Theft Incidents Increase in Urban Areas', 'Police have cracked a major jewelry theft case involving a gang that had been operating across multiple cities. The accused stole valuable items from shops and residences, causing significant financial losses. After a detailed investigation, authorities recovered stolen goods and arrested the suspects. Officials stated that strict action will be taken to prevent such organized crimes and ensure public safety.', '0', '2026-03-22', '2026-03-22 10:53:05', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `reporterreg`
--

DROP TABLE IF EXISTS `reporterreg`;
CREATE TABLE IF NOT EXISTS `reporterreg` (
  `repid` int NOT NULL AUTO_INCREMENT,
  `rname` varchar(20) NOT NULL,
  `remail` varchar(30) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `rgender` varchar(20) NOT NULL,
  `raddress` varchar(50) NOT NULL,
  `rmno` varchar(12) NOT NULL,
  `rimage` varchar(100) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updateuser` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `regstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`repid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporterreg`
--

INSERT INTO `reporterreg` (`repid`, `rname`, `remail`, `rpassword`, `rgender`, `raddress`, `rmno`, `rimage`, `datereg`, `updateuser`, `regstatus`) VALUES
(17, 'rohit patil', 'rohit@gmail.com', '123', 'Male', 'Mahadev Nagar,Dindoli', '8874512432', '6f6e99878cf3843ce3d329a8dcab5d77.jpg', '2026-03-23 13:39:13', '0000-00-00 00:00:00', 'Active'),
(22, 'yash shah', 'yash24@gmail.com', '123', 'Male', '139 Mahavir Villa, dindoli', '7410320025', '68d045febc39903477ac844b4d71dd74.jpg', '2026-03-23 13:39:40', '0000-00-00 00:00:00', 'Active'),
(27, 'shreya sharma', 'shreyas19@gmail.com', '123', 'female', '21-B Prayosh Start, Star Circle, Dindoli Surat', '8451203697', '4dc3e15bc44c84876e7bb7c3accb6f8c.jpg', '2026-03-23 13:39:53', '0000-00-00 00:00:00', 'Active'),
(28, 'raj patel', 'rajpatel@gmail.com', '123', 'male', '9-A Sairam Society near Saipoint, Dindoli, Surat', '7410302840', '094f62d1caaaf84fcc2bbe1917fb65e1.jpg', '2026-03-23 13:40:03', '0000-00-00 00:00:00', 'Active'),
(29, 'veena patil', 'veenapatil8@gmail.com', '123', 'female', '29-C Shivkrupa Society,Limbayat,Surat', '80317039', '65375248f77a052a0b77755448ac7625.jpg', '2026-03-23 13:40:15', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `sliderid` int NOT NULL AUTO_INCREMENT,
  `cid` int NOT NULL,
  `slider_image` varchar(500) NOT NULL,
  `slidertitle` varchar(100) NOT NULL,
  `sliderdesc` text NOT NULL,
  `sdatereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sliderstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`sliderid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sliderid`, `cid`, `slider_image`, `slidertitle`, `sliderdesc`, `sdatereg`, `sliderstatus`) VALUES
(24, 1, '5e274fe4c4539003d9a6470137e0563c.jpg', 'Unseasonal Rain Hits Several Indian States', 'Sudden rainfall and thunderstorms affected parts of North and Central India, bringing temperature drops and disrupting daily life.', '2026-03-23 05:16:36', 'Active'),
(25, 4, '4ff8d99d11bd4b8834133618b9ce75b3.jpg', 'Indian Stock Market Shows Mixed Trends', 'Markets remained volatile as banking stocks gained while IT sector faced pressure due to global uncertainty', '2026-03-23 05:18:05', 'Active'),
(26, 5, 'f638d3994e0e6a41ebcaf7361cbc65d8.jpg', 'Bollywood Big Releases Set for Summer Clash', 'Multiple big-budget films are scheduled to release in the coming months, raising excitement among movie fans.', '2026-03-23 05:19:38', 'Active'),
(27, 6, 'a65b08cbf7594c0206ee20a1d62798fc.jpg', 'India Prepares for Upcoming Cricket Series', 'Team India is finalizing its squad and strategy for the upcoming international matches, with focus on young talent.', '2026-03-23 05:20:34', 'Active'),
(28, 7, '1ce1260c3da53cdef848d7f0206a4d4a.jpg', 'AI Technology Continues Rapid Growth', 'Companies are investing heavily in artificial intelligence, bringing new tools and innovations across industries.', '2026-03-23 05:23:05', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `stateid` int NOT NULL AUTO_INCREMENT,
  `countryid` int NOT NULL,
  `sname` varchar(20) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  PRIMARY KEY (`stateid`),
  KEY `countryid` (`countryid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `countryid`, `sname`, `datereg`, `sstatus`) VALUES
(5, 3, 'Gujarat', '2026-03-20 10:46:58', 'Active'),
(8, 3, 'Maharashtra', '2026-03-20 06:34:27', 'Active'),
(10, 4, 'Florida', '2026-03-21 07:52:01', 'Active'),
(12, 4, 'California', '2026-03-21 07:52:03', 'Active'),
(13, 4, 'Texas', '2026-03-22 07:52:05', 'Active'),
(14, 3, 'UP', '2026-03-22 07:52:10', 'Active'),
(15, 3, 'Punjab', '2026-03-22 07:52:16', 'Active'),
(16, 5, 'Cairo', '2026-03-22 07:52:22', 'Active'),
(17, 6, 'Capetown', '2026-03-22 07:52:25', 'Active'),
(18, 3, 'Bihar', '2026-03-22 07:52:32', 'Active'),
(19, 3, 'Tamilnadu', '2026-03-23 07:52:36', 'Active'),
(24, 7, 'Queensland', '2026-03-23 07:52:41', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `cid` int NOT NULL,
  `sname` varchar(50) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subcatgstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`sid`),
  KEY `Cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sid`, `cid`, `sname`, `datereg`, `subcatgstatus`) VALUES
(8, 15, 'national', '2026-03-22 12:57:50', 'Active'),
(9, 6, 'Cricket', '2026-03-22 05:41:31', 'Active'),
(10, 5, 'Bollywood', '2026-03-22 05:45:17', 'Active'),
(11, 6, 'Football', '2026-03-22 05:41:39', 'Active'),
(12, 10, 'Health', '2026-03-22 07:00:35', 'Active'),
(13, 6, 'Badminton', '2026-03-22 06:55:27', 'Active'),
(15, 15, 'State', '2026-03-22 11:57:14', 'Active'),
(16, 5, 'International', '2026-03-22 06:14:10', 'Active'),
(18, 10, 'Fashion', '2026-03-22 05:53:04', 'Active'),
(19, 7, 'Internet', '2026-03-22 06:55:11', 'Active'),
(22, 10, 'Travel', '2026-03-22 05:53:24', 'Active'),
(23, 4, 'Economy', '2026-03-22 05:55:31', 'Active'),
(24, 4, 'World News', '2026-03-22 05:55:42', 'Active'),
(25, 5, 'Bollywood News', '2026-03-22 05:45:44', 'Active'),
(26, 5, 'South', '2026-03-22 05:45:56', 'Active'),
(27, 7, 'Mobile', '2026-03-22 11:24:39', 'Active'),
(28, 9, 'Exam', '2026-03-22 07:54:24', 'Active'),
(29, 9, 'Government Jobs', '2026-03-22 07:56:33', 'Active'),
(30, 9, 'Board Exam', '2026-03-22 11:37:35', 'Active'),
(32, 13, 'National', '2026-03-22 05:42:01', 'Active'),
(33, 6, 'International', '2026-03-22 13:08:38', 'Active'),
(34, 1, 'Climate Change', '2026-03-22 09:17:41', 'Active'),
(35, 1, 'Forecast', '2026-03-22 07:53:47', 'Active'),
(36, 7, 'Software', '2026-03-22 06:03:02', 'Active'),
(38, 4, 'Real Estate', '2026-03-23 06:34:47', 'Active'),
(39, 8, 'National', '2018-03-23 06:43:35', 'Active'),
(40, 8, 'International', '2018-03-23 06:43:47', 'Active'),
(41, 9, 'Online Admission', '2018-03-23 11:49:12', 'Active'),
(42, 11, 'Aries(mesh)', '2018-03-23 13:45:57', 'Active'),
(43, 11, 'Taurus', '2018-03-23 13:46:16', 'Active'),
(44, 11, 'Gemini', '2018-03-23 13:46:34', 'Active'),
(45, 11, 'Cancer', '2018-03-23 13:46:56', 'Active'),
(46, 11, 'Leo', '2018-03-23 13:47:14', 'Active'),
(47, 11, 'Vigro', '2018-03-23 13:47:31', 'Active'),
(48, 11, 'Scorpio', '2018-03-23 13:48:05', 'Active'),
(49, 11, 'Sagittarius', '2018-03-23 13:48:29', 'Active'),
(50, 11, 'Capricorn', '2018-03-23 13:49:00', 'Active'),
(51, 11, 'Aquarius', '2018-03-23 13:49:17', 'Active'),
(52, 11, 'Pisces', '2018-03-23 13:49:33', 'Active'),
(53, 11, 'Libra', '2018-03-23 14:01:19', 'Active'),
(54, 6, 'Tennis', '2018-03-23 14:18:42', 'Active'),
(60, 16, 'National', '2018-03-23 15:20:05', 'Active'),
(62, 16, 'Education', '2018-03-23 15:20:34', 'Active'),
(63, 16, 'Politics', '2018-03-23 15:22:27', 'Active'),
(64, 16, 'Travel', '2018-03-23 15:22:44', 'Active'),
(65, 16, 'International', '2018-03-23 15:27:53', 'Active'),
(67, 9, 'Career', '2018-03-30 11:19:30', 'Active'),
(70, 10, 'Food', '2018-04-05 06:17:12', 'Active'),
(71, 17, 'Announcements', '2026-03-22 07:56:11', 'Active'),
(73, 5, 'TV', '2018-04-16 09:29:19', 'Active'),
(74, 15, 'Election', '2018-04-16 10:17:57', 'Active'),
(75, 14, 'Trends', '2026-03-22 10:29:07', 'Active'),
(76, 14, 'Accessories', '2026-03-22 10:29:33', 'Active'),
(77, 21, 'Kidnapping', '2026-03-22 10:49:49', 'Active'),
(78, 21, 'Theft', '2026-03-22 10:50:11', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE IF NOT EXISTS `subscriber` (
  `subid` int NOT NULL AUTO_INCREMENT,
  `semail` varchar(30) NOT NULL,
  `sdatereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subid`, `semail`, `sdatereg`) VALUES
(15, 'rohitp2188@gmail.com', '2026-03-21 13:22:41'),
(16, 'shreya@gmail.com', '2026-04-18 07:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `todaynews`
--

DROP TABLE IF EXISTS `todaynews`;
CREATE TABLE IF NOT EXISTS `todaynews` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `cid` int NOT NULL,
  `timage` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `tdesc` text NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`tid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaynews`
--

INSERT INTO `todaynews` (`tid`, `cid`, `timage`, `title`, `tdesc`, `datereg`, `tstatus`) VALUES
(12, 6, '4b3755c7a28d901cfcbf757c61ca4884.png', 'Proteas Women to play home Tests against India and Australia', '\r\nThe Proteas Women are set for a bumper home schedule in the 2026/27 season.', '2026-03-20 13:39:23', 'Active'),
(13, 1, '1dece1f7e24ab4b4adde1c4d9dbe2753.png', 'Iranian Navy guided India\'s LPG vessel via Strait of Hormuz last week', 'The development comes as tensions in the region have disrupted global shipping routes and heightened risks for energy transportation through one of the world\'s most critical', '2026-03-21 13:14:52', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

DROP TABLE IF EXISTS `userreg`;
CREATE TABLE IF NOT EXISTS `userreg` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ustatus` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`uid`, `uname`, `email`, `password`, `contactno`, `datereg`, `ustatus`) VALUES
(5, 'rohit', 'rohitp2188@gmail.com', '1234', '8767942636', '2026-03-21 13:25:58', 'Deactive'),
(6, 'yogesh sali', 'yogesh@gmail.com', '1234', '7845962134', '2026-03-22 05:08:31', 'Deactive'),
(7, 'yash', 'yash@gmail.com', '1234', '8541203695', '2026-04-18 06:07:44', 'Deactive');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`repid`) REFERENCES `reporterreg` (`repid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`stateid`) REFERENCES `state` (`stateid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `city_ibfk_2` FOREIGN KEY (`countryid`) REFERENCES `country` (`countryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `reporterpost` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postrating`
--
ALTER TABLE `postrating`
  ADD CONSTRAINT `postrating_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `reporterpost` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reporterchat`
--
ALTER TABLE `reporterchat`
  ADD CONSTRAINT `reporterchat_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `admin_register` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reporterpost`
--
ALTER TABLE `reporterpost`
  ADD CONSTRAINT `reporterpost_ibfk_1` FOREIGN KEY (`repid`) REFERENCES `reporterreg` (`repid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporterpost_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporterpost_ibfk_4` FOREIGN KEY (`cityid`) REFERENCES `city` (`cityid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporterpost_ibfk_5` FOREIGN KEY (`sid`) REFERENCES `subcategory` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `country` (`countryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `todaynews`
--
ALTER TABLE `todaynews`
  ADD CONSTRAINT `todaynews_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
