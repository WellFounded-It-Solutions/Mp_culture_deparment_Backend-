-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2023 at 11:45 AM
-- Server version: 5.7.44
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmt_culture_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `s_div` varchar(100) DEFAULT NULL,
  `s_comp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `country_id`, `state_id`, `city_id`, `created_at`, `updated_at`, `date`, `status`, `s_div`, `s_comp`) VALUES
(1, 'Awadhpuri', 5, 4, 2, '2021-02-06 14:45:26', '2022-01-05 11:32:09', '06-Feb-2021', 1, NULL, NULL),
(2, 'BERKHEDA PATHANI', 5, 4, 2, '2021-02-07 15:11:50', '2022-01-05 11:35:11', '07-Feb-2021', 1, NULL, NULL),
(3, 'MP Nagar', 5, 5, 2, '2021-02-10 14:41:22', '2022-01-05 11:35:03', '10-Feb-2021', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artist_list`
--

CREATE TABLE `artist_list` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `artist_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_mobile` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_father` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_dob` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_age` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_distric` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_pincode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_expriance` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_perf_pich` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_education` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_subcategory` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_subtype` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_grade1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_grade2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_grade3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `akash_grade` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `akash_grade_file` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `iccr_grade` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `iccr_files` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `artist_other` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_other_certificate` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_program` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_year` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_award` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_year1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_company` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_aword1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_year2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abouts` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist_list`
--

INSERT INTO `artist_list` (`id`, `userId`, `artist_name`, `artist_mobile`, `artist_email`, `artist_photo`, `artist_gender`, `artist_father`, `artist_dob`, `artist_age`, `artist_address`, `artist_country`, `artist_state`, `artist_distric`, `artist_city`, `artist_pincode`, `artist_expriance`, `artist_perf_pich`, `artist_education`, `artist_category`, `artist_subcategory`, `artist_subtype`, `artist_grade1`, `artist_grade2`, `artist_grade3`, `akash_grade`, `akash_grade_file`, `iccr_grade`, `iccr_files`, `artist_other`, `artist_other_certificate`, `artist_program`, `artist_year`, `artist_award`, `artist_year1`, `artist_company`, `artist_aword1`, `artist_year2`, `facebook`, `instagram`, `linkedin`, `twitter`, `youtube`, `website`, `abouts`, `create_at`, `status`) VALUES
(1, 0, 'Kapil Sharma ', '9407512554', 'kapil.sharma.193@gmail.com', '153153492715896110_780252528795429_8654446781747066623_o.jpg', 'Male', 'Pt. Bhnawar Lal Sharma', '1991-04-01', '32', 'Lal Ghati, Gufa Mandir ', 'India', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '462030', '12', '', 'Masters', '13', '13', '', 'Doordarshan', 'A+', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'https://www.facebook.com/vihaandramaworks/photos_by', '', '', '', '', '', '<p><strong>hello .</strong></p>', '2023-06-12 14:51:24', 1),
(9, 0, 'Shruti Adhikari ', '9303139090', 'shrutisantoor@gmail.com', NULL, 'Female', 'Late Shri D.Y.Kathale', '1968-10-20', '54', '8/10,Shri Ram apartment 6 malviya nagar Bhopal ', 'India', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '462003', '35 ', '', 'Masters', NULL, NULL, NULL, 'Doordarshan', '', '', NULL, NULL, 'Choose Grade', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-12 21:48:55', 1),
(10, 0, 'Sangeeta Sharma ', '9311202475', 'sangeetaaspa@gmail.com', '442738479Screenshot_20220406-115421_Facebook.jpg', 'Female', 'Late shri S C Sharma', '1965-05-15', '58', 'E 11 Associated Apt. IP Ext. Patparganj', 'India', 'Delhi', 'Bhopal', 'Delhi 110092', '110092', '5', '', 'Bachelor', '18', '', NULL, 'Doordarshan', '', '', NULL, NULL, 'A+', NULL, NULL, '', '', '', '', '', 'Junior and senior fellowship ', '', '1996 and 2008', 'https://www.facebook.com/anveshanas?mibextid=ZbWKwL', 'sangeeta_anveshana', '', '', ' https://youtu.be/SG2FzSUU7ik https://youtu.be/2Mrr_PVSrcw  https://youtu.be/_O3X8gV7sYE  https://youtu.be/mRqGfqnF0Y4', 'www.nasadiyarts.com/sangeetasharma,  www.anveshanadancetheare.com', '<p>Sangeeta Sharma</p>\n<p>Founder-Director of Anveshana Society for Performing Arts, Sangeeta Sharma has been a practicing Indian dancer and choreographer of for over three and half decades. &nbsp;</p>\n<p>She has trained under reputed artists of Kathaka', '2023-06-12 22:56:40', 1),
(11, 0, 'Anatta Sangha', '9005570000', 'anattasangha@gmail.com', '428572007IMG-20230605-WA0038.jpg', 'Male', '', '2020-12-12', '2', 'Botanpurwa, Kundwa, Mihinpurwa', 'India', 'Utttar Pradesh', '', 'Bahraich', '271855', '2', '', '', '18', '', NULL, 'Doordarshan', '', '', NULL, NULL, 'Choose Grade', NULL, NULL, '', '', '', '', '', '', '', '', 'https://www.facebook.com/anattasangha?mibextid=ZbWKwL', 'https://instagram.com/anattasangha?igshid=MzRlODBiNWFlZA==', '', '', 'https://youtube.com/@anattasangha', 'www.anattasangha.org', '<p dir=\"ltr\">We are Anatta Sangha - a gathering of courageous hearts whose lives are dedicated for transformation and helping others for awakening. We use four essential ancient devices to cultivate and support self realisation; Satsang, Retreats, Kirtan ', '2023-06-13 10:41:05', 1),
(12, 0, 'Shobha Choudhary ', '8989505089', 'choudhary.shobha@gmail.com', '241317814D9667D6B-E2CE-4064-A26C-04A0946896FD.jpeg', 'Female', 'Shri Devidas Choudhary ', '1958-06-25', '64', '73 A BHAWANIPUR COLONY', 'India', 'Madhya Pradesh', 'Indore', 'Indore', '452009', '50', '', 'Masters', '13', '13', NULL, 'Doordarshan', '', '', 'B+', NULL, 'B+', NULL, NULL, '', '', '', '', '', 'Award of senior Fellowship to the outstanding artists by Ministry of Culture ', '', '2006', 'Facebook/shobhachoudhary', '', '', '', 'Shobhachoudharyindore', 'Www.Shobhachoudhary.com', '', '2023-06-13 11:23:28', 1),
(13, 0, 'Dinesh Kumar ', '9873283657', 'dinesh02707@gmail.com', '8740631817A6D9490-2381-4045-99DC-45BF22810210.jpeg', 'Male', 'Mr Mahavir ', '1989-07-27', '34', '275 GF Pocket 9 Sector 21 Rohini Delhi 110085', 'India', 'Delhi', '', '', '110085', '10', '', 'Masters', '23', '', '', 'Doordarshan', '', '', '', NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', 'https://instagram.com/deenu2707?igshid=OGQ5ZDc2ODk2ZA==', '', '', '', '', '<p class=\"s29\"><span class=\"s30\">About my work</span></p>\r\n<p class=\"s31\">My work is a reflection of my observation from the <span class=\"s33\">Day to day life experiences, I genera</span><span class=\"s36\">l</span><span class=\"s33\">ly interpret the </span>', '2023-06-13 23:29:40', 1),
(14, 0, 'Mrs Pragya  Sharma', '8770099508', 'pragya023@gmail.com', '5045123FB_IMG_1685458119009.jpg', 'Female', 'Pt. Bhanwarlal Sharma ', '1988-06-23', '35', 'F6 Rameshwaram Apartment near Lalghati ', 'India', 'Madhya Pradesh', 'Bhopal', 'Bhopal ', '462030', '15', '', 'Masters', '13', '15', '21', 'Doordarshan', 'A', '', 'A', NULL, 'A', NULL, NULL, '', '', '', '', '', '', '', '', '', 'Pragya.sharma.940098', '', '', '@pragyasharma704', '', '<p>I m a Kathak dancer. Performing in various state with my students. Also a teacher in Ramanand Sangit Mahavidyalaya.</p>', '2023-06-14 11:05:09', 1),
(15, 0, 'BHARATHI VISHWANATHAN', '6263116862', 'bharathivishwanathanbpl@gmail.com', '1055876279WhatsApp Image 2023-06-14 at 5.57.32 PM (1).jpeg', 'Female', 'M. VISHWANATHAN', '1974-07-18', '48', 'T-301, APOORVA LAKE VIEW APARTMENT, CHUNA BHATTI, BHOPAL', 'India', 'Madhya Pradesh', 'Bhopal', 'CHUNA BHATTI', '462016', '26', '', 'Masters', '13', '13', '', 'Doordarshan', 'A', '', 'A', NULL, 'A', NULL, NULL, '', '', '', '', '', 'MADRAS TELUGU ACADEMY', '', '2006', 'https://www.facebook.com/profile.php?id=100088991362069&mibextid=ZbWKwL', '', '', '', 'https://youtube.com/@BharathiVishwanathan', '', '<p>1. &nbsp; &nbsp;à¤®à¥à¤–à¥à¤¯à¤®à¤‚à¤¤à¥à¤°à¥€ à¤¤à¥€à¤°à¥à¤¥ à¤¦à¤°à¥à¤¶à¤¨ à¤¯à¥‹à¤œà¤¨à¤¾ à¤•à¥‡ à¤…à¤‚à¤¤à¤°à¥à¤—à¤¤ à¤µà¤¾à¤¯à¥à¤¯à¤¾à¤¨ à¤¸à¥‡ à¤¤à¥€à¤°à¥à¤¥ à¤¯à¤¾à¤¤à¥à¤°à¤¾ à¤•à¤¾ à¤¶à¥à¤­à¤¾à¤°à¤‚à¤­ à¤†à¤œ à¤¦à¤¿à¤¨à¤¾à¤‚à¤• 21.05.', '2023-06-14 18:29:04', 1),
(16, 0, 'Shobha Choudhary ', '8989505089', 'choudhary.shobha@gmail.com', '1968900263C249EDD0-4BCC-4AE7-96F2-A9C7655E6A6B.jpeg', 'Female', 'Husbands name is Santosh Choudhary ', '1958-06-25', '64', '73 A BHAWANIPUR COLONY', 'India', 'Madhya Pradesh', 'Indore', 'Indore', '452009', '50', '', 'Masters', '13', '13', '', 'Doordarshan', '', '', 'B+', NULL, 'B+', NULL, NULL, '', '', '', '', '', '', '', '', 'https://www.facebook.com/ShobhaChoudhary?mibextid=ZbWKwL', '', '', '', 'https://youtube.com/@shobhachoudhary', '', '<p id=\"docs-internal-guid-e8793169-7fff-9ede-5aa1-070dfd66f1e1\" dir=\"ltr\">à¤¨à¤®à¤¸à¥à¤•à¤¾à¤° à¤®à¥ˆà¤‚ à¤¶à¥‹à¤­à¤¾ à¤šà¥Œà¤§à¤°à¥€ à¤‡à¤‚à¤¦à¥Œà¤° à¤à¤®.à¤ªà¥€ à¤¸à¥‡ à¥¤ à¤®à¥ˆà¤‚ à¤¶à¤¾à¤¸à¥à¤¤à¥à¤°à¥€à¤¯ à¤¸à¤‚à¤—à¥€à¤¤ à¤•à¥€ à¤—à¤¾à¤¯à¤¿à¤•à¤¾', '2023-06-19 08:28:36', 1),
(17, 0, 'Rama Dubey', '9754584279', 'ramadubey712@gmail.com', '1063686701Snapchat-1023188285.jpg', 'Female', 'Shiv balak Tiwari', '1968-01-01', '', '16/23 Shabri Nagar, Huzur, Bhopal', 'India', 'Madhya Pradesh', 'Bhopal', 'Huzur', '462003', '30', '', 'Postgraduate Certificate', '11', '', '', 'Doordarshan', '', '', 'B+', NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>à¤¬à¤šà¤ªà¤¨ à¤¸à¥‡ à¤¹à¥€ à¤¬à¤˜à¥‡à¤°à¥€ à¤²à¥‹à¤•à¤—à¥€à¤¤ à¤•à¥‡ à¤ªà¥à¤°à¤¤à¤¿ à¤…à¤—à¤¾à¤§ à¤°à¥à¤šà¤¿ à¤œà¤¾à¤—à¥ƒà¤¤ à¤¹à¥‹ à¤šà¥à¤•à¥€ à¤¥à¥€ 1988 à¤®à¥‡à¤‚ à¤†à¤•à¤¾à¤¶à¤µà¤¾à¤£à¥€ à¤°à¥€à¤µà¤¾ à¤¸à¥‡ à¤œà¥à¤¡à¤¼à¤¾à¤µ à¤à¤• à¤¸à¤‚à¤¯à¥‹', '2023-06-19 11:36:49', 1),
(18, 0, 'Poornima Chaturvedi', '9425605959', 'chaturvedipoornima31@gmail.com', '1987499462Photo Poornima Chaturvedi.jpeg', 'Female', 'Shivnarayan Upadhyay', '1967-07-20', '56', 'E-2 Shikhar Enclave Kailash Nagar Bairagarh Bhopal 462030', 'India', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '462020', '25', '', 'Diploma Program', '24', '', '', 'Doordarshan', 'B', '', 'B+', NULL, '', NULL, NULL, '', '', '', 'Madhya Pradesh Rajya Shikhar Samman, Janjatiya Evam Lok Kala', '', 'Rashtra Bhasha Prachar Samiti', '', '2022', 'https://www.facebook.com/poornima.chaturvedi.90?mibextid=ZbWKwL', 'https://instagram.com/artistfolkpoornima?igshid=ZGUzMzM3NWJiOQ==', '', '', 'https://www.youtube.com/@poornimachaturvedi9068', '', '<p>Name : Poornima Chaturvedi</p>\r\n<p>DOB : 20-07-1967</p>\r\n<p>Father: Shiv Narayan Upadhyay</p>\r\n<p>Husband : Anand Kumar Chaturvedi</p>\r\n<p>Nimadi Folk artist and Daughter of Pandit Shree Ramnarayan Upadhyay.Working in the field of Namadi Folk song and ', '2023-06-21 01:28:34', 1),
(24, NULL, 'VIVEK PATEL', '9039732563', 'patelv915@gmail.com', '139034859PPPPP1222.jpg', 'Male', 'J.P. PATEL', '1993-08-30', '29', 'A/92 ASHOKA GARDEN  BHOPAL', 'India', 'Madhya Pradesh', 'Bhopal', 'BHOPAL', '462023', '5', '', 'Bachelor', '11', '5', '', 'Doordarshan', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'https://www.facebook.com/vivek.patel.737448?mibextid=ZbWKwL', 'https://www.facebook.com/vivek.patel.737448?mibextid=ZbWKwL', '', '', 'https://youtube.com/@user-kx2fc4tq6x', '', '<p>mai vivek patel Bhopal Madhya Pradesh se Radhakrishan ki raslila ki sewa apne groupe ke sath deta hu jo ki shivay arts ke nam se panjikrat he.</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hamara uddeshya Dharam ke prati', '2023-07-07 16:24:38', 1),
(48, 32, 'ajay ', '2345678790', '', '1497677305', 'Male', '', '', '', 'bhopal', 'India', 'Madhya Pradesh', 'Sehore', '', '', '', '', '', '', '', '', 'Doordarshan', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-25 16:44:18', 1),
(49, 33, 'ajay ', '1234567896', '', '2045658678', 'à¤ªà¥à¤°à¥à¤·', '', '', '', 'bhopal', 'à¤­à¤¾à¤°à¤¤', 'à¤®à¤§à¥à¤¯ à¤ªà¥à¤°à¤¦à¥‡à¤¶', '--à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚--', '', '', '', '', '--à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚--', '', '', '', 'à¤¦à¥‚à¤°à¤¦à¤°à¥à¤¶à¤¨', 'à¤¶à¥à¤°à¥‡à¤£à¥€ à¤šà¥à¤¨à¥‡à¤‚', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-28 11:51:23', 1),
(50, 34, 'Ajay Patidar', '7693995681', 'ajaypatidar@gmail.com', '773178672Screenshot 2023-09-04 164600.png', 'Male', 'Vinod patidar', '1998-10-28', '24', 'Bhopal', 'India', 'Madhya Pradesh', 'Bhopal', '', '462026', '', '', '10th', '12', '8', '', 'Doordarshan', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-09-25 13:04:21', 1),
(51, 35, ' à¤…à¤œà¤¯ à¤ªà¤¾à¤Ÿà¥€à¤¦à¤¾à¤°', '1234567890', 'ajaypatidar@gmail.com', '253339801', 'à¤ªà¥à¤°à¥à¤·', '', '', '', ' à¤­à¥‹à¤ªà¤¾à¤²', 'à¤­à¤¾à¤°à¤¤', 'à¤®à¤§à¥à¤¯ à¤ªà¥à¤°à¤¦à¥‡à¤¶', 'à¤­à¥‹à¤ªà¤¾à¤²', '', '', '', '', '--à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚--', '', '', '', 'à¤¦à¥‚à¤°à¤¦à¤°à¥à¤¶à¤¨', 'à¤¶à¥à¤°à¥‡à¤£à¥€ à¤šà¥à¤¨à¥‡à¤‚', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-09-25 13:11:02', 1),
(52, 36, 'Ajay Patidar', '1234567890', '', '851089411', 'à¤ªà¥à¤°à¥à¤·', '', '', '', 'Bhopal', 'à¤­à¤¾à¤°à¤¤', 'à¤®à¤§à¥à¤¯ à¤ªà¥à¤°à¤¦à¥‡à¤¶', 'à¤‡à¤‚à¤¦à¥Œà¤°', '', '', '', '', '--à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚--', '', '', '', 'à¤¦à¥‚à¤°à¤¦à¤°à¥à¤¶à¤¨', 'à¤¶à¥à¤°à¥‡à¤£à¥€ à¤šà¥à¤¨à¥‡à¤‚', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-09-25 13:29:23', 1),
(53, 37, 'Ajay Patidar', '1234543210', '', '1097228740', 'à¤ªà¥à¤°à¥à¤·', '', '', '', 'Bhopal', 'à¤­à¤¾à¤°à¤¤', 'à¤®à¤§à¥à¤¯ à¤ªà¥à¤°à¤¦à¥‡à¤¶', 'à¤­à¥‹à¤ªà¤¾à¤²', '', '', '', '', '--à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚--', '', '', '', 'à¤¦à¥‚à¤°à¤¦à¤°à¥à¤¶à¤¨', 'à¤¶à¥à¤°à¥‡à¤£à¥€ à¤šà¥à¤¨à¥‡à¤‚', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-09-25 17:28:20', 1),
(54, 38, 'Ajay Patidar', '1234565432', '', '494302036', 'à¤ªà¥à¤°à¥à¤·', '', '', '', 'Bhopal', 'à¤­à¤¾à¤°à¤¤', 'à¤®à¤§à¥à¤¯ à¤ªà¥à¤°à¤¦à¥‡à¤¶', 'à¤­à¥‹à¤ªà¤¾à¤²', '', '', '', '', '--à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚--', '', '', '', 'à¤¦à¥‚à¤°à¤¦à¤°à¥à¤¶à¤¨', 'à¤¶à¥à¤°à¥‡à¤£à¥€ à¤šà¥à¤¨à¥‡à¤‚', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-09-26 11:02:59', 1),
(55, 39, 'Ajay Patidar', '1234565432', '', '520437162', 'à¤ªà¥à¤°à¥à¤·', '', '', '', ' à¤­à¥‹à¤ªà¤¾à¤²', 'à¤­à¤¾à¤°à¤¤', 'à¤®à¤§à¥à¤¯ à¤ªà¥à¤°à¤¦à¥‡à¤¶', 'à¤­à¥‹à¤ªà¤¾à¤²', '', '', '', '', '--à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚--', '', '', '', 'à¤¦à¥‚à¤°à¤¦à¤°à¥à¤¶à¤¨', 'à¤¶à¥à¤°à¥‡à¤£à¥€ à¤šà¥à¤¨à¥‡à¤‚', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-09-26 11:05:24', 1),
(56, 40, 'Ajay Patidar', '1234567897', '', NULL, 'Male', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', '', '', 'à¤¦à¥‚à¤°à¤¦à¤°à¥à¤¶à¤¨', 'à¤¶à¥à¤°à¥‡à¤£à¥€ à¤šà¥à¤¨à¥‡à¤‚', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-03 23:02:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `artist_picture`
--

CREATE TABLE `artist_picture` (
  `id` int(11) NOT NULL,
  `artist_id` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_picture`
--

INSERT INTO `artist_picture` (`id`, `artist_id`, `img`) VALUES
(11, '', '1048189456'),
(12, '1', '2088050903'),
(13, '1', '1796177156'),
(14, '2', '918967016'),
(15, '2', '327996240'),
(16, '3', '832868992'),
(17, '3', '1734934889'),
(18, '4', '1393162602'),
(19, '4', '1057768997'),
(20, '4', '1993377086'),
(21, '4', '1245355094'),
(22, '6', '1162725235'),
(23, '6', '1912338738'),
(24, '1', '1932727862'),
(25, '1', '390944318'),
(26, '1', '1324973175'),
(27, '1', '805483730'),
(28, '9', '2528542112E4B12191639153837331.jpg'),
(29, '9', '726493593'),
(30, '10', '264532639IMG_8779.jpeg'),
(31, '10', '1699277924'),
(32, '10', '876027442IMG-20230605-WA0003.jpg'),
(33, '10', '1796191542IMG-20230613-WA0000.jpg'),
(34, '10', '1834318985'),
(35, '11', '107545022635994000-5CD2-4CAE-AEB0-2138C0F9671D.jpeg'),
(36, '11', '1264665932E694783-0D50-44C7-A44A-2B10F56BDBE7.jpeg'),
(37, '11', '816101702286B7A2E-1170-4FB2-93B0-6DA63986DF5A.jpeg'),
(38, '11', '125017729369668094-9696-4C5A-B8F8-DB8561C9C593.jpeg'),
(39, '11', '1379924741'),
(40, '12', '1244394104JhansiKiRani_pic.jpg'),
(41, '12', '1270151540'),
(42, '12', '1790768050_7RX7961.jpg'),
(43, '12', '930692339'),
(44, '12', '60795318011125AAD-1327-4D19-BFAF-1EE0A317EB48.jpeg'),
(45, '12', '1896798995'),
(46, '13', '1702948567FB_IMG_1685458089437.jpg'),
(47, '13', '1167255579FB_IMG_1685457405128.jpg'),
(48, '13', '879364253'),
(49, '14', '865719822WhatsApp Image 2023-06-14 at 6.17.32 PM.jpeg'),
(50, '14', '1768082689'),
(51, '15', '16143980027EF55FA1-9FE8-406D-9333-80CE37E0220E.jpeg'),
(52, '15', '1473257489086B97ED-D819-4297-AD5A-60B3E5F491DD.jpeg'),
(53, '15', '105870176839AD125D-9546-4825-B006-0B35640308E1.jpeg'),
(54, '15', '74321503445B97549-40DE-4837-ADC4-9E7A9EA070C5.jpeg'),
(55, '15', '5485336735C996A3E-17AB-492A-B5AE-861C07007B68.jpeg'),
(56, '15', '1688335689714D4167-BBC0-439B-90EB-179D6AD1788C.jpeg'),
(57, '15', '1925322213F249F14E-2F14-4076-9025-35C968F36167.jpeg'),
(58, '15', '301945294D9F78BD6-8CD7-4C7B-B17C-CD520D006E1C.jpeg'),
(59, '15', '150470413771E1991C-7AA0-478F-AC05-0047866800B9.jpeg'),
(60, '15', '70297542498DC8552-5562-4E91-9B73-67C3CD41ACC0.jpeg'),
(61, '15', '1155310483855AD8E9-D09B-47F4-ABB0-88EF7A59CA21.jpeg'),
(62, '15', '1979961377'),
(63, '16', '480308680WhatsApp Image 2023-06-19 at 10.21.06.jpg'),
(64, '16', '1462690889'),
(65, '17', '1586220968North Central Culture Zone Pragraj Event in Bhojpur.jpeg'),
(66, '17', '739556521Mor pahadi utsav Tikamgarh.jpeg'),
(67, '17', '424494460Datia Faag Utsav.jpeg'),
(68, '17', '338835127Adivasi Lok kala avam  Boli Vikas.jpeg'),
(69, '17', '1860806352Bharat Parv Swaraj avam Sankrati Vibhag.jpeg'),
(70, '17', '367763981Doordsarshan.jpeg'),
(71, '17', '219978519Jan jatiya Sangrahalay.jpeg'),
(72, '17', '517360090Prashikshan.pdf'),
(73, '17', '1965741348Chitran.pdf'),
(74, '17', '1191311579Bal Kalyan evam Khodh Kendra Bhopal Dwaya Aao Banawa Nimad ka Mandana Rangin Chitra Sankalan Krati ko Krati Samman Se sammani kiya gya.pdf'),
(75, '17', '1905884788'),
(76, '18', '1631550488FB_IMG_1687929680141.jpg'),
(77, '18', '1292342264'),
(78, '19', '1212644440'),
(79, '19', '1496648626'),
(80, '20', '1699068269'),
(81, '20', '1905353662'),
(82, '21', '1087968727'),
(83, '21', '115101269'),
(84, '22', '53861279'),
(85, '22', '1566127210'),
(86, '18', '631018341pro.jpg'),
(87, '18', '405328910'),
(88, '24', '248884952'),
(89, '24', '1226744227'),
(90, '25', '1132493359'),
(91, '25', '1571837971'),
(92, '26', '1600021322'),
(93, '26', '1023069224'),
(94, '27', '358897955'),
(95, '27', '698894196'),
(96, '24', '1961581575'),
(97, '24', '1140073355'),
(98, '30', '1646953190'),
(99, '30', '2053760059'),
(100, '30', '1766753176'),
(101, '30', '60433577'),
(102, '30', '2056254916'),
(103, '31', '908138393'),
(104, '31', '1379772431'),
(105, '32', '1290031213'),
(106, '32', '975002896'),
(107, '33', '1392726079'),
(108, '33', '2125122556'),
(109, '34', '67181775'),
(110, '34', '1039103277'),
(111, '35', '601743690'),
(112, '35', '1087785127'),
(113, '37', '888828168'),
(114, '37', '449761250'),
(115, '38', '1750040770'),
(116, '38', '876797636'),
(117, '39', '601756962'),
(118, '39', '1424734799'),
(119, '43', '1145463759'),
(120, '43', '526887473'),
(121, '44', '1575987142'),
(122, '44', '214860030'),
(123, '45', '110983459'),
(124, '45', '1499995005'),
(125, '46', '663181238'),
(126, '46', '128737900'),
(127, '24', '1552450570'),
(128, '24', '2128049809'),
(129, '49', '1680992064'),
(130, '49', '2021118149');

-- --------------------------------------------------------

--
-- Table structure for table `artist_register_step2`
--

CREATE TABLE `artist_register_step2` (
  `id` int(11) NOT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `step_qualification` varchar(255) DEFAULT NULL,
  `step_school` varchar(255) DEFAULT NULL,
  `step_location` varchar(255) DEFAULT NULL,
  `step_desgination` varchar(255) DEFAULT NULL,
  `step_company` varchar(255) DEFAULT NULL,
  `step__totalyear` varchar(255) DEFAULT NULL,
  `step_location1` varchar(255) DEFAULT NULL,
  `step_from` varchar(255) DEFAULT NULL,
  `step_to` varchar(255) DEFAULT NULL,
  `step_date` varchar(255) DEFAULT NULL,
  `step__types` varchar(255) DEFAULT NULL,
  `step_program` varchar(255) DEFAULT NULL,
  `step_location2` varchar(255) DEFAULT NULL,
  `step_venue` varchar(255) DEFAULT NULL,
  `step_pancord` varchar(255) DEFAULT NULL,
  `step_bankname` varchar(255) DEFAULT NULL,
  `step_account` varchar(255) DEFAULT NULL,
  `step_ifsc` varchar(255) DEFAULT NULL,
  `step_branch` varchar(255) DEFAULT NULL,
  `step_city` varchar(255) DEFAULT NULL,
  `step_check` varchar(255) DEFAULT NULL,
  `created_date` datetime(6) DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist_register_step2`
--

INSERT INTO `artist_register_step2` (`id`, `artist_id`, `step_qualification`, `step_school`, `step_location`, `step_desgination`, `step_company`, `step__totalyear`, `step_location1`, `step_from`, `step_to`, `step_date`, `step__types`, `step_program`, `step_location2`, `step_venue`, `step_pancord`, `step_bankname`, `step_account`, `step_ifsc`, `step_branch`, `step_city`, `step_check`, `created_date`) VALUES
(1, 14, 'MCA', 'BHOPAL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-05 17:46:43.915951'),
(2, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-06 13:47:35.989125');

-- --------------------------------------------------------

--
-- Table structure for table `assignemprole`
--

CREATE TABLE `assignemprole` (
  `id` int(11) NOT NULL,
  `departid` varchar(255) DEFAULT NULL,
  `control` varchar(255) NOT NULL DEFAULT 'N',
  `control_ed` varchar(50) NOT NULL DEFAULT 'N',
  `control_vi` varchar(50) NOT NULL DEFAULT 'N',
  `control_del` varchar(50) NOT NULL DEFAULT 'N',
  `empid` int(11) NOT NULL,
  `emproleid` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignemprole`
--

INSERT INTO `assignemprole` (`id`, `departid`, `control`, `control_ed`, `control_vi`, `control_del`, `empid`, `emproleid`, `created_at`, `updated_at`, `date`, `status`) VALUES
(4, '2', '0', 'N', '2', 'N', 2, 1, '2021-07-06 22:39:04', '2021-07-12 14:09:06', '12-Jul-2021', 0),
(6, '2', '0', '1', '2', '3', 1, 3, '2021-07-12 14:00:22', '2021-07-12 14:00:22', '12-Jul-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `bannerimage` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `brandimage` varchar(255) NOT NULL,
  `description` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `category_hindi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description` text,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `c_div` varchar(250) DEFAULT NULL,
  `c_company` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `category_hindi`, `description`, `created_at`, `updated_at`, `date`, `status`, `c_div`, `c_company`) VALUES
(11, 'Folk ', 'लोक ', '', '2023-06-08', '2023-06-08 16:32:05', '0000-00-00', 1, '', ''),
(12, 'Tribal ', 'जनजातिये', '', '2023-06-08', '2023-06-08 16:06:42', NULL, 1, '', ''),
(13, 'Classical', 'शास्त्रीय ', '', '2023-06-08', '2023-06-08 16:08:43', NULL, 1, '', ''),
(14, 'Semi Classical', 'उप शास्त्रीय ', '', '2023-06-08', '2023-06-08 16:08:56', NULL, 1, '', ''),
(15, 'Light Music', 'सुगम संगीत', '', '2023-06-08', '2023-06-08 16:09:07', NULL, 1, '', ''),
(16, 'Modern Art', 'आधुनिक कला', '', '2023-06-08', '2023-06-08 16:35:54', NULL, 1, '', ''),
(17, 'Play/Drama', 'नाटक', '', '2023-06-08', '2023-06-08 16:36:11', NULL, 1, '', ''),
(18, 'Others', 'अन्य ', '', '2023-06-08', '2023-06-08 16:36:24', NULL, 1, '', ''),
(19, 'Archaeology', 'पुरातत्त्व', '', '2023-06-10', '2023-06-10 06:56:01', NULL, 1, '', ''),
(20, 'Awards and Decorations', 'पुरुस्कार एवं अलंकरण', '', '2023-06-10', '2023-06-10 06:56:39', NULL, 1, '', ''),
(21, 'Poetry and Mushaira', 'कवि सम्मलेन एवं मुशायरा', '', '2023-06-10', '2023-06-10 06:57:36', NULL, 1, '', ''),
(22, 'Stage and Folk Theater', 'रंगमंच एवं लोकनाट्य', 'Stage and Folk Theater', '2023-06-10', '2023-06-10 06:58:16', NULL, 1, '', ''),
(23, 'Visual Arts, Performance, and Other Fine Arts', 'रूपंकर, प्रदर्शन एवं अन्य ललित कलाएं', '', '2023-06-10', '2023-06-10 06:59:16', NULL, 1, '', ''),
(24, 'Folk and Tribal Arts', 'लोक एवं जनजातीय', '', '2023-06-10', '2023-06-10 06:59:47', NULL, 1, '', ''),
(25, 'Classical Dance Training', 'शास्त्रीय नृत्य प्रशिक्षण', 'Classical Dance Training', '2023-06-10', '2023-06-10 07:00:12', NULL, 1, '', ''),
(26, 'Classical Music', 'शास्त्रीय संगीत', '', '2023-06-10', '2023-06-10 07:00:44', NULL, 1, '', ''),
(27, 'Contemporary Arts', 'समकालीन कलाएं', '', '2023-06-10', '2023-06-10 07:01:10', NULL, 1, '', ''),
(28, 'Literature', 'साहित्य', '', '2023-06-10', '2023-06-10 07:01:32', NULL, 1, '', ''),
(29, 'Literary and Cultural', 'साहित्यिक एवं सांस्कृतिक', '', '2023-06-10', '2023-06-10 07:02:03', NULL, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `s_div` varchar(100) DEFAULT NULL,
  `s_comp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `country_id`, `state_id`, `created_at`, `updated_at`, `date`, `status`, `s_div`, `s_comp`) VALUES
(3, 'Indore', 5, 4, '2021-03-06 14:45:01', '2021-10-25 17:33:15', '06-Feb-2021', 1, NULL, NULL),
(4, 'Gwalior', 5, 4, '2021-02-10 14:41:02', '2021-02-10 14:41:02', '10-Feb-2021', 1, NULL, NULL),
(5, 'Bhopal', 5, 7, '2022-01-07 18:04:45', '2022-01-07 18:04:45', '07-Jan-2022', 1, NULL, NULL),
(6, 'Sehore', 5, 7, '2022-01-07 18:05:00', '2022-01-07 18:05:00', '07-Jan-2022', 1, NULL, NULL),
(7, 'Itarsi', 5, 7, '2022-01-07 18:05:14', '2022-01-07 18:05:14', '07-Jan-2022', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`, `created_at`, `updated_at`, `date`, `status`) VALUES
(5, 'India', '2021-02-06 14:44:39', '2021-03-06 15:51:18', '06-Mar-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int(11) NOT NULL,
  `by_whom` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` tinyint(6) NOT NULL DEFAULT '1',
  `amount` int(11) DEFAULT NULL,
  `billingOptions` varchar(100) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `by_whom`, `date`, `status`, `amount`, `billingOptions`, `created_at`) VALUES
(1, 4, '30-Dec-2021', 1, 100, 'cash', NULL),
(2, 3, '13 Jan 22', 1, 10000, 'cash', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `idproof` tinyint(1) DEFAULT NULL,
  `idproofno` varchar(255) NOT NULL,
  `pancard` varchar(255) NOT NULL,
  `pancardno` varchar(10) NOT NULL,
  `country` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `companytype` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `companyownername` varchar(255) NOT NULL,
  `openingbal` int(20) NOT NULL,
  `crdr` tinyint(1) NOT NULL,
  `companystate` varchar(255) NOT NULL,
  `companycity` varchar(255) NOT NULL,
  `companyarea` varchar(255) NOT NULL,
  `companypincode` int(11) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `productcategories` varchar(255) NOT NULL,
  `gstno` varchar(20) NOT NULL,
  `companystatus` tinyint(1) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accountholder` varchar(255) NOT NULL,
  `accountno` varchar(255) NOT NULL,
  `ifsccode` varchar(255) NOT NULL,
  `branchnameaddress` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pmobile` bigint(10) NOT NULL,
  `pdesignation` varchar(255) NOT NULL,
  `pname2` varchar(255) NOT NULL,
  `pemail2` varchar(255) NOT NULL,
  `pmobile2` bigint(10) NOT NULL,
  `pdesignation2` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custrole`
--

CREATE TABLE `custrole` (
  `id` int(11) NOT NULL,
  `custtid` varchar(100) DEFAULT NULL,
  `custrole` varchar(20) NOT NULL,
  `pricetype` tinyint(1) NOT NULL,
  `godown` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custrole`
--

INSERT INTO `custrole` (`id`, `custtid`, `custrole`, `pricetype`, `godown`, `created_at`, `updated_at`, `date`, `status`) VALUES
(1, '4', 'package1', 3, '7,3', '2021-06-10 17:15:24', '2021-06-21 20:16:23', '10-Jun-2021', 1),
(2, '31', 'Tmp1', 1, '7', '2021-06-13 22:35:33', '2021-06-13 22:35:33', '13-Jun-2021', 1),
(3, '6', 'new packages', 2, '3,2', '2021-06-16 11:48:50', '2021-06-16 11:48:50', '16-Jun-2021', 1),
(5, '35', 'itarsi premium', 1, '9', '2021-06-21 13:56:44', '2021-07-10 07:41:57', '21-Jun-2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deliverypartners`
--

CREATE TABLE `deliverypartners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `pincode` int(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `companyowner` varchar(255) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `groups` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliverypartners`
--

INSERT INTO `deliverypartners` (`id`, `name`, `email`, `password`, `sex`, `dob`, `mobile`, `pincode`, `state`, `city`, `address`, `companyname`, `companyowner`, `companyaddress`, `profileimage`, `groups`, `created_at`, `updated_at`, `date`, `status`) VALUES
(1, 'Rohit', 'rohit@gmail.com', '123456', '', '', 0, 0, '', '', '', '', '', '', '', NULL, '2021-10-13 11:19:55', '2021-10-13 11:19:55', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dept_code` text,
  `dept_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dept_website` varchar(255) DEFAULT NULL,
  `dept_about` varchar(255) DEFAULT NULL,
  `deptment_name` varchar(255) DEFAULT NULL,
  `dept_address` varchar(255) DEFAULT NULL,
  `dept_contact` varchar(255) DEFAULT NULL,
  `dept_name1` varchar(255) DEFAULT NULL,
  `dept_designation` varchar(255) DEFAULT NULL,
  `dept_mobile` varchar(255) DEFAULT NULL,
  `dept_email` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `username`, `dept_code`, `dept_name`, `dept_website`, `dept_about`, `deptment_name`, `dept_address`, `dept_contact`, `dept_name1`, `dept_designation`, `dept_mobile`, `dept_email`, `created_at`, `updated_at`, `date`, `status`) VALUES
(5, 'rajesh@gmail.com', '01', 'जनजातीय लोक कला एवं बोली विकास', 'www.com', 'this is god', NULL, 'bhopal', '9874563210', 'ram', 'php', '9874563210', 'rajesh@gmail.com', '2023-08-12 12:54:46', '2023-08-15 15:12:54', '15-Aug-2023', 1),
(6, '', '02', 'मध्य प्रदेश उर्दू अकादमी', '#', '#', '???? ?????? ????? ??????', '', '', '', '', '', '', '2023-08-15 13:32:22', '2023-08-15 13:32:22', '15-Aug-2023', 1),
(7, '', '03', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '#', '#', '???????? ?????????, ????? (?.???.)', '', '', '', '', '', '', '2023-08-15 13:33:47', '2023-08-15 13:33:47', '15-Aug-2023', 1),
(8, '', '04', 'भारत भवन', '#', '', '???? ???', '', '', '', '', '', '', '2023-08-15 13:34:51', '2023-08-15 13:34:51', '15-Aug-2023', 1),
(9, '', '05', 'साहित्य अकादमी', '#', '#', '??????? ??????', '', '', '', '', '', '', '2023-08-15 13:36:33', '2023-08-15 13:36:33', '15-Aug-2023', 1),
(10, '', '05', 'पंजाबी साहित्य अकादमी', '#', '#', '?????? ??????? ??????', '', '', '', '', '', '', '2023-08-15 13:37:25', '2023-08-15 13:37:25', '15-Aug-2023', 1),
(12, '', '07', 'कालिदास संस्कृत अकादमी', '#', '#', '??????? ??????? ??????', '', '', '', '', '', '', '2023-08-15 13:39:51', '2023-08-15 13:39:51', '15-Aug-2023', 1),
(13, '', '08', 'भोजपुरी साहित्य अकादमी', '#', '#', '??????? ??????? ??????', '#', '', '', '', '', '', '2023-08-15 13:43:58', '2023-08-15 13:43:58', '15-Aug-2023', 1),
(14, '', '09', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '#', '#', '?????? ????????? ??? ????? ??? ??????', '', '', '', '', '', '', '2023-08-15 13:44:57', '2023-08-15 13:44:57', '15-Aug-2023', 1),
(15, '', '10', 'सिंधी साहित्य अकादमी', '#', '#', '????? ??????? ??????', '', '', '', '', '', '', '2023-08-15 13:46:39', '2023-08-15 13:46:39', '15-Aug-2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation`, `description`, `created_at`, `updated_at`, `date`, `status`) VALUES
(1, 'Data  Entry', '', '2021-02-04 15:59:03', '2021-02-04 15:59:03', '04-Feb-2021', 1),
(2, 'Sales Executive', '', '2021-02-04 15:59:16', '2021-02-04 15:59:16', '04-Feb-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `idproof` tinyint(1) NOT NULL,
  `idproofno` varchar(255) NOT NULL,
  `pancardno` int(10) NOT NULL,
  `pancard` varchar(255) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `country` int(11) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `currentaddress` varchar(255) NOT NULL,
  `pcountry` int(11) DEFAULT NULL,
  `pstate` int(11) NOT NULL,
  `pcity` int(11) NOT NULL,
  `parea` int(11) NOT NULL,
  `ppincode` int(11) NOT NULL,
  `homeaddress` varchar(255) NOT NULL,
  `refname1` varchar(255) NOT NULL,
  `relation1` varchar(20) NOT NULL,
  `refmobile1` int(10) NOT NULL,
  `refname2` varchar(255) NOT NULL,
  `relation2` varchar(20) NOT NULL,
  `refmobile2` int(10) NOT NULL,
  `prevdesg` varchar(255) NOT NULL,
  `prevcompany` varchar(255) NOT NULL,
  `prevcompanyowner` varchar(255) NOT NULL,
  `prevcompanyaddress` varchar(255) NOT NULL,
  `refempname1` varchar(255) NOT NULL,
  `refempmobile1` int(10) NOT NULL,
  `refempdesg1` varchar(255) NOT NULL,
  `refempname2` varchar(255) NOT NULL,
  `refempmobile2` int(10) NOT NULL,
  `refempdesg2` varchar(255) NOT NULL,
  `dept` int(11) NOT NULL,
  `desg` int(11) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `empcode` varchar(20) NOT NULL,
  `ofemail` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `gender`, `dob`, `password`, `cpassword`, `mobile`, `idproof`, `idproofno`, `pancardno`, `pancard`, `profileimage`, `country`, `state`, `city`, `area`, `pincode`, `currentaddress`, `pcountry`, `pstate`, `pcity`, `parea`, `ppincode`, `homeaddress`, `refname1`, `relation1`, `refmobile1`, `refname2`, `relation2`, `refmobile2`, `prevdesg`, `prevcompany`, `prevcompanyowner`, `prevcompanyaddress`, `refempname1`, `refempmobile1`, `refempdesg1`, `refempname2`, `refempmobile2`, `refempdesg2`, `dept`, `desg`, `doj`, `empcode`, `ofemail`, `created_at`, `updated_at`, `date`, `status`) VALUES
(2, 'Akhtar Parveen', 'ak123@gmail.com', 1, '1995-12-12', '0', '0', 2147483647, 0, '1853127924545840459519475985prod-1.jpg', 0, '1853127924545840459519475985prod-1.jpg', '1853127924545840459519475985prod-1.jpg', NULL, 4, 2, 1, 2, 'HNo 112', NULL, 4, 2, 1, 2, 'HNo 112', 'xyz', 'xyz', 12345678, 'xyx', 'xdd', 748945455, 'Web Developer', 'Tech', 'Mr XTYZ', 'HNo 112', 'xyz', 12323, '', 'sdsdsd', 0, '', 1, 0, '2022-01-18', '462011', 'akedss@gm.com', '2021-02-04 16:18:57', '2022-01-17 22:38:27', '17-Jan-2022', 0),
(3, 'Akhtar Parveen', 'ak@gmail.com', 1, '1995-12-12', '123456', '123456', 2147483647, 0, '1371109957', 0, '1371109957', '1371109957', NULL, 4, 2, 1, 2, 'HNo 112', NULL, 4, 2, 1, 2, '', 'xyz', 'xyz', 12345678, 'xyx', 'xdd', 748945455, 'Web Developer', 'Tech', 'Mr XTYZ', 'HNo 112', 'xyz', 12323, '', 'sdsdsd', 0, '', 1, 0, '', '462011', 'akedss@gm.com', '2021-02-15 16:51:57', '2021-03-21 14:17:27', '21-Mar-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emprole`
--

CREATE TABLE `emprole` (
  `id` int(11) NOT NULL,
  `emprole` varchar(20) NOT NULL,
  `access` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emprole`
--

INSERT INTO `emprole` (`id`, `emprole`, `access`, `created_at`, `updated_at`, `date`, `status`) VALUES
(1, 'Role1', '2,3,4,5,6,7,8,9', '2021-03-20 14:19:13', '2021-07-07 23:11:36', '07-Jul-2021', 1),
(2, 'roles', '3', '2021-07-06 19:34:16', '2021-07-06 19:34:16', '06-Jul-2021', 1),
(3, 'Role2', '2,3,4,5', '2021-07-12 09:36:44', '2021-07-12 09:36:44', '12-Jul-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `emailstatus` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `godown`
--

CREATE TABLE `godown` (
  `id` int(11) NOT NULL,
  `godown` varchar(255) NOT NULL,
  `godownimage` varchar(255) DEFAULT NULL,
  `manager` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `godownlink` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `godown`
--

INSERT INTO `godown` (`id`, `godown`, `godownimage`, `manager`, `mobile`, `state`, `city`, `area`, `pincode`, `address`, `godownlink`, `created_at`, `updated_at`, `date`, `status`) VALUES
(2, 'Godown II', '656675221admin.png', 'Geetika Verma', 8574885544, 1, 1, 20, 22, 'Plot No 16', NULL, '2021-03-25 14:58:36', '2021-04-24 16:21:50', '21-Apr-2021', 1),
(3, 'Godown III', '1360017069admin.png', 'abc', 7485112244, 1, 1, 21, 22, '34 Stop', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.30415295996!2d77.26580340959153!3d23.199663279842934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1619262197123!5m2!1sen!2sin', '2021-04-16 12:46:28', '2021-04-24 16:48:44', '24-Apr-2021', 1),
(7, 'Bhopal Stocks', '47796071admin.png', 'Raj', 9165596481, 1, 1, 1, 1, 'bhopal', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.30415295996!2d77.26580340959153!3d23.199663279842934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1619262197123!5m2!1sen!2sin', '2021-04-24 12:37:51', '2021-04-24 16:48:28', '24-Apr-2021', 1),
(8, 'raj', '846372896admin.png', 'om ', 0, 1, 1, 24, 25, 'bhopal', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.30415295996!2d77.26580340959153!3d23.199663279842934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1619262197123!5m2!1sen!2sin', '2021-04-24 16:35:20', '2021-12-14 18:35:59', '24-Apr-2021', 1),
(9, 'Itarsi', '731623066admin.png', 'Raj new', 9874563210, 1, 1, 1, 1, 'bhopral itarsi', 'bhopal', '2021-06-21 13:48:49', '2022-01-06 11:52:48', '21-Jun-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manubar`
--

CREATE TABLE `manubar` (
  `id` int(11) NOT NULL,
  `manubar` varchar(255) DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `icon` varchar(500) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` tinyint(255) DEFAULT '1',
  `created_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manubar`
--

INSERT INTO `manubar` (`id`, `manubar`, `links`, `icon`, `date`, `status`, `created_at`) VALUES
(2, 'Dashboard', 'dashboard', '<i class=\"sidenav-icon fas fa-th-large text-danger\"></i>', '08-Jul-2021', 1, NULL),
(3, 'Godown', 'godown', '<i class=\"sidenav-icon fas fa-boxes text-danger \"></i>', '08-Jul-2021', 1, NULL),
(4, 'Sale', 'sales', '<i class=\"sidenav-icon fas fa-tags text-info\"></i>', '08-Jul-2021', 1, NULL),
(5, 'Customers', 'customers', ' <i class=\"sidenav-icon fas fa-user-alt text-success\"></i>', '08-Jul-2021', 1, NULL),
(6, 'Orders', 'orders', '<i class=\"sidenav-icon fas fa-dolly-flatbed text-warning \"></i>', '08-Jul-2021', 1, NULL),
(7, 'Delivery', 'delivery', '<i class=\"sidenav-icon fas fa-shipping-fast text-success\"></i>', '08-Jul-2021', 1, NULL),
(8, 'Products', 'products', '<i class=\"sidenav-icon fas fa-sitemap text-primary\"></i>', '08-Jul-2021', 1, NULL),
(9, 'Geographics', 'geographics', ' <i class=\"sidenav-icon fas fa-compass text-info\"></i>', '08-Jul-2021', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `s_div` varchar(100) DEFAULT NULL,
  `s_comp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `idproof` tinyint(1) NOT NULL,
  `idproofno` int(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `companytype` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `companyownername` varchar(255) NOT NULL,
  `companystate` varchar(255) NOT NULL,
  `companycity` varchar(255) NOT NULL,
  `companyarea` varchar(255) NOT NULL,
  `companypincode` int(11) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `productcategories` varchar(255) NOT NULL,
  `gstno` varchar(20) NOT NULL,
  `companystatus` tinyint(1) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accountholder` varchar(255) NOT NULL,
  `accountno` varchar(255) NOT NULL,
  `ifsccode` varchar(255) NOT NULL,
  `branchnameaddress` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pmobile` bigint(10) NOT NULL,
  `pdesignation` varchar(255) NOT NULL,
  `pname2` varchar(255) NOT NULL,
  `pemail2` varchar(255) NOT NULL,
  `pmobile2` bigint(10) NOT NULL,
  `pdesignation2` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merchantss`
--

CREATE TABLE `merchantss` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `pincode` int(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `shopowner` varchar(255) NOT NULL,
  `shopaddress` varchar(255) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE `pincode` (
  `id` int(11) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `pincode`, `country_id`, `state_id`, `city_id`, `area_id`, `created_at`, `updated_at`, `date`, `status`) VALUES
(2, '462022', 5, 4, 2, 2, '2021-02-07 15:12:07', '2021-03-21 12:38:47', '21-Mar-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `catid` int(11) DEFAULT NULL,
  `subcatid` int(11) NOT NULL,
  `description` text,
  `manid` int(11) NOT NULL,
  `producttype` int(11) NOT NULL,
  `reorderpoint` int(11) DEFAULT NULL,
  `hsncode` varchar(50) DEFAULT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `stockalertqty` int(20) DEFAULT NULL,
  `outstock` tinyint(1) DEFAULT NULL,
  `negstock` tinyint(1) DEFAULT NULL,
  `mrp` double(10,2) NOT NULL,
  `tax` int(11) NOT NULL,
  `pricetype` tinyint(1) NOT NULL,
  `weight` int(20) DEFAULT NULL,
  `primaryunit` int(11) NOT NULL,
  `sellpricepu` double(10,2) NOT NULL,
  `openingstockpu` int(20) DEFAULT NULL,
  `secondaryunit` int(11) NOT NULL,
  `sellpricesu` double(10,2) NOT NULL,
  `equalqtypu` int(20) DEFAULT NULL,
  `openingstocksu` int(20) DEFAULT NULL,
  `tertiaryunit` int(11) NOT NULL,
  `sellpricetu` double(10,2) NOT NULL,
  `equalqtypu2` int(20) DEFAULT NULL,
  `openingstocktu` int(20) DEFAULT NULL,
  `rewardpoint` int(20) DEFAULT NULL,
  `rewardpointtype` tinyint(1) DEFAULT NULL,
  `incentive` int(20) DEFAULT NULL,
  `incentivetype` tinyint(1) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `quality` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `s_div` varchar(100) DEFAULT NULL,
  `s_comp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `productimage`, `catid`, `subcatid`, `description`, `manid`, `producttype`, `reorderpoint`, `hsncode`, `barcode`, `stockalertqty`, `outstock`, `negstock`, `mrp`, `tax`, `pricetype`, `weight`, `primaryunit`, `sellpricepu`, `openingstockpu`, `secondaryunit`, `sellpricesu`, `equalqtypu`, `openingstocksu`, `tertiaryunit`, `sellpricetu`, `equalqtypu2`, `openingstocktu`, `rewardpoint`, `rewardpointtype`, `incentive`, `incentivetype`, `size`, `series`, `quality`, `color`, `make`, `model`, `created_at`, `updated_at`, `date`, `status`, `s_div`, `s_comp`) VALUES
(1, 'GHADI DETERGENT POWDER 1KG', '1743283029', 3, 4, '', 3, 1, 25000, '3408', '', 1250, 1, 1, 55.00, 3, 1, 1000, 1, 48.20, 0, 2, 1205.00, 25, 0, 0, 0.00, 0, 0, 0, 1, 0, 1, '', '', '', '', '', '', '2021-02-07 15:08:01', '2022-07-31 18:34:10', '21-Mar-2021', 0, NULL, NULL),
(2, 'Maggie Noodles', '956385644', 7, 4, '', 3, 1, 200, '3409', '', 0, 1, 1, 10.00, 4, 1, 0, 1, 8.00, 1, 2, 80.00, 10, 0, 3, 800.00, 100, 0, 0, 1, 0, 1, '', '', '', '', '', '', '2021-03-05 00:06:03', '2022-07-31 18:34:00', '21-Mar-2021', 0, NULL, NULL),
(3, 'PARLE G 5/-', '794715170', 4, 5, '', 4, 1, 25000, '3402', '', 1250, 1, 1, 5.00, 2, 1, 100, 1, 4.60, 0, 2, 110.00, 24, 0, 0, 656.00, 144, 0, 0, 1, 0, 1, '', '', '', '', '', '', '2021-03-06 14:30:53', '2022-07-31 18:33:53', '21-Mar-2021', 0, NULL, NULL),
(4, '20-20 BISCUIT', '1917361030', 4, 5, '', 4, 1, 25000, '3402', '', 1250, 1, 1, 5.00, 2, 1, 50, 1, 4.60, 0, 5, 55.00, 12, 0, 3, 656.00, 144, 0, 0, 1, 0, 1, '', '', '', '', '', '', '2021-03-06 14:32:28', '2022-07-31 18:33:45', '06-Mar-2021', 0, NULL, NULL),
(5, 'Marie Litemmm', '2039686909download (5).jpg', 3, 6, 'edd', 5, 2, 0, '', 'bsc12', 0, 1, 1, 10.00, 5, 1, 0, 0, 9.00, 10, 0, 0.00, NULL, 0, 0, 0.00, NULL, 0, 0, 1, 0, 1, '', '', '', '', '', '', '2022-07-19 13:31:51', '2022-07-31 18:33:37', '19-Jul-2022', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variant`
--

CREATE TABLE `product_variant` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `image` text NOT NULL,
  `image_name` text NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `gst` int(11) NOT NULL,
  `discount` float NOT NULL,
  `discount_type` varchar(50) NOT NULL,
  `status` tinyint(6) NOT NULL DEFAULT '1',
  `bar_code` varchar(20) NOT NULL,
  `pv_division` varchar(100) DEFAULT NULL,
  `pv_company` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `pv_size` varchar(100) DEFAULT NULL,
  `pv_qnty` int(11) DEFAULT NULL,
  `pv_sell_price` int(11) DEFAULT NULL,
  `pv_min_order` int(11) DEFAULT NULL,
  `pv_avbl_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_variant`
--

INSERT INTO `product_variant` (`id`, `pid`, `image`, `image_name`, `capacity`, `price`, `gst`, `discount`, `discount_type`, `status`, `bar_code`, `pv_division`, `pv_company`, `created_at`, `pv_size`, `pv_qnty`, `pv_sell_price`, `pv_min_order`, `pv_avbl_stock`) VALUES
(1, 3, '', '', '10 packet', 100, 0, 0, '', 1, '', '', '', '2021-11-27', NULL, 10, 95, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `programlist`
--

CREATE TABLE `programlist` (
  `id` int(11) NOT NULL,
  `progId` varchar(255) DEFAULT NULL,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_category` varchar(255) DEFAULT NULL,
  `artist_datetime` varchar(255) DEFAULT NULL,
  `artist_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programlist`
--

INSERT INTO `programlist` (`id`, `progId`, `artist_name`, `artist_category`, `artist_datetime`, `artist_description`) VALUES
(1, '5', '', '', '', ''),
(2, '5', 'bhopal', 'mfd', '10:10', 'this tho'),
(3, '5', '', '', '', ''),
(4, '5', '', '', '', ''),
(6, '5', '', '', '', ''),
(7, '5', '', '', '', ''),
(8, '1', 'Ram', 'demo category', '10-10-2023 20:20', 'this is good'),
(9, '1', '', '', '', ''),
(10, '2', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `program_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `program_category` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `program_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `program_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `starting_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `starting_time` varchar(50) DEFAULT NULL,
  `end_time` varchar(50) DEFAULT NULL,
  `entry_type` varchar(255) DEFAULT NULL,
  `chief_guest` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `venu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `profile_img1` varchar(255) DEFAULT NULL,
  `profile_img2` varchar(255) DEFAULT NULL,
  `profile_img3` varchar(255) DEFAULT NULL,
  `profile_img4` varchar(255) DEFAULT NULL,
  `date_of_email` varchar(50) DEFAULT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `department_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_name`, `program_category`, `program_type`, `program_link`, `starting_date`, `end_date`, `starting_time`, `end_time`, `entry_type`, `chief_guest`, `venu`, `address`, `state`, `district`, `city`, `pincode`, `profile_img1`, `profile_img2`, `profile_img3`, `profile_img4`, `date_of_email`, `about`, `department_by`, `created_at`, `updated_at`, `status`) VALUES
(2, 'अनादि1', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/LF30ZEGvKkA?feature=share', '', '', '', '', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'महाकाल लोक, जयसिंहपुरा', 'Madhya Pradesh', '', 'Ujjain', '', '', '', '', '', '', 'चले आओ जहां तक रौशनी मालूम होती है (नुशूर वाहिदी) मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, श्योपुर द्वारा सिलसिला रहमतुल्लाह गौरी एवं काले खां नश्तर की स्मृति में स्मृति प्रसंग एवं रचनापाठ रविवार, 30 जुलाई, 2023 जमात ख़ाना, पुल दरवाज़ा, श्योपुर सिलसिला : दोपहर 3:00 बजे विशिष्ट आमंत्रित वक्ता एवं शायर रफ़ीक़ इशरत ग्वालियरी (शिवपुरी) सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर वक्ता - डॉ. अय्यूब ग़ाज़ी - साहित्यकार एवं शायर ( विषय रहमतुल्लाह गौरी एक महान स्वतंत्रता सेनानी) वक्ता - डॉ. अश्फ़ाक़ अर्शी- साहित्यकार एवं शायर (विषय काले खां नश्तर व्यक्तित्व एवं कृतित्व) बाजुद्दीन बाज़, सईद खां चराग, मौलाना रफ़ीक़, हमीद बालापुरी, डॉ. रफ़ीक़ गिरधरपुरी, अनवर अमरोही, अमर लाल राठौर अमर, सत्यनारायण शर्मा तरूण, इरफ़ान कनापुरी, मांगीलाल मरमिट, तालिब तुफ़ानी ज़िला समन्वयक : अनवर ग़ाफ़िल आप सभी सादर साग्रह आमंत्रित हैं डॉ. नुसरत मेहदी निदेशक', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '7/28/2023 17:06', 1),
(3, 'स्मृति प्रसंग एवं रचना पाठ', 'अन्य', 'Other', '', '30-Jul-23', '30-Jul-23', '3:00 PM', '6:00 PM', 'Free', '', 'जमात ख़ाना, पुल दरवाज़ा, श्योपुर', 'जमात ख़ाना, पुल दरवाज़ा, श्योपुर', 'Madhya Pradesh', 'Sheopur', 'Sheopur', '', '', '', '', '', '', 'राष्ट्रीय शोध संगोष्ठी संतों की वाणियाँ और संत रैदास 29-30 जुलाई 2023 मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल संगोष्ठी में आप सादर आमंत्रित है। जनजातीय लोक कला एवं बोली विकास अकादमी, मध्यप्रदेश संस्कृति परिषद्, भोपाल भारतीय हिंदी परिषद,प्रयागराज', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '7/30/2023 11:14', 1),
(4, 'राष्ट्रीय शोध संगोष्ठी संतों की वाणियाँ और संत रैदास', 'लोक एवं जनजातीय', 'Discussion', '', '29-Jul-23', '30-Jul-23', '9:00 AM', '6:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'भारत भवन कालजयी पंडित कुमार गंधर्व जन्मशताब्दी समारोह 29-30 जुलाई, 2023 29 जुलाई सायं 7:00 बजे: शुभारम्भ सत्र सायं 7:30 बजे: गीत वर्षा: सुश्री कलापिनी कोमकली और श्री भुवनेश कोमकली का गायन 30 जुलाई प्रातः 10:30 बजे: तिगलबंदी: श्री अखिलेश गुंदेचा, श्री रामेंद्र सिंह सोलंकी और श्री सत्येंद्र सिंह सोलंकी की पखावज, तबला और संतूर की तिगलबंदी पूर्वाह्न 11:10 बजे: सुश्री आरती ठाकुर कुंडलकर का गायन पूर्वाह्न 11:50 बजे: श्री कपिल तिवारी का ‘‘पंडित कुमार गंधर्व की गायकी में कबीर’’ विषय पर व्याख्यान अध्यक्षता: पंडित किरण देशपांडे सायं 7:00 बजे: श्री अभय फगरे का बांसुरी वादन सायं 7:50 बजे: श्री आनंद भाटे का गायन संगत कलाकार हारमोनियम: श्री सुयोग कुंडलकर तबला: श्री मयंक बेड़ेकर, श्री रामेंद्र सिंह सोलंकी ढोलकी: श्री पवन सेम प्रवेश निःशुल्क', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(5, 'कालजयी ( पंडित कुमार गंधर्व जन्मशताब्दी समारोह )', 'सुगम संगीत', 'Hybrid', 'https://www.youtube.com/live/RMzP2ZbyHRc?feature=s', '29-Jul-23', '30-Jul-23', '7:00 PM', '10:00 PM', 'Free', '', 'भारत भवन', 'भारत भवन', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'कालजयी पंडित कुमार गंधर्व जन्मशताब्दी समारोह', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '7/29/2023 18:32', 1),
(6, 'कालजयी पंडित कुमार गंधर्व जन्मशताब्दी समारोह', 'शास्त्रीय संगीत', 'Other', 'https://www.youtube.com/live/RMzP2ZbyHRc?feature=s', '29-Jul-23', '30-Jul-23', '7:00 PM', '10:00 PM', 'Free', '', 'भारत भवन भोपाल', 'श्यामला हिल्स भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग द्वारा पुरस्कार योजना कैलेंडर वर्ष 2018, 2019, 2020 एवं 2021 के अखिल भारतीय और प्रादेशिक पुरस्कारों के साथ ही वर्ष 2020-2021 के मध्यप्रदेश की छः बोलियों का अलंकरण समारोह 25 जुलाई, 2023 को सायं 4.00 बजे अंजनि सभागार, रवीन्द्र भवन, भोपाल में आयोजित है। समारोह मान. सुश्री उषा ठाकुर, मंत्री-संस्कृति, पर्यटन, धार्मिक एवं धर्मस्व मध्यप्रदेश शासन के मुख्य आतिथ्य में होगा। श्री शिव शेखर शुक्ला, प्रमुख सचिव-संस्कृति एवं पर्यटन विभाग तथा श्री अदिति कुमार त्रिपाठी, संचालक-संस्कृति की विशेष उपस्थिति में रचनाकारों को अलंकृत किया जाएगा। आयोजित अलंकरण समारोह में आप सभी सादर साग्रह आमंत्रित हैं। डाॅ. विकास दवे निदेशक साहित्य आदमी, भोपाल', 'भारत भवन', '0000-00-00 00:00:00', '', 1),
(7, 'अलंकरण समारोह', 'साहित्य', 'Other', '', '25-Jul-23', '25-Jul-23', '4:00 PM', '7:00 PM', 'Free', '', 'अंजनि सभागार, रवीन्द्र भवन, भोपाल', 'अंजनि सभागार, रवीन्द्र भवन, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'संभावना नृत्य, गायन एवं वादन केन्द्रित प्रत्येक शनिवार, सायं 6:30 बजे से मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल मध्यप्रदेश जनजातीय संग्रहालय का प्रतिष्ठा आयोजन', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(8, 'संभावना', 'लोक एवं जनजातीय', 'Other', '', '23-Jul-23', '23-Jul-23', '6:30 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'आजादी के अमृत महोत्सव के अवसर पर पंजाबी साहित्य अकादमी द्वारा भारत माता के वीर सपूत, निर्भीकता एवं अदम्य साहस के अद्वितीय प्रतीक, महान स्वंतत्रता सैनानी सरदार उधम सिंह जी के बलिदान दिवस पर केन्द्रित संगोष्ठी एवं लाईट एण्ड साउण्ड शो का आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(9, 'वाह उधम सिंह वाह', 'अन्य', 'Other', '', '23-Jul-23', '23-Jul-23', '6:00 PM', '9:30 PM', 'Free', '', 'सीबी गर्ल्स स्कूल, अहिल्यादेवी चौराहा, डॉ. अंबेडकर नगर, महू इन्दौर', 'सीबी गर्ल्स स्कूल, अहिल्यादेवी चौराहा, डॉ. अंबेडकर नगर, महू इन्दौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'शैव ज्ञान परंपरा से उद्भूत कलाओं पर एकाग्र अनादि श्रंखला के अन्तर्गत इस रविवार को शि केन्द्रित भजन एवं सावन गीतों की प्रस्तुति श्री विशाल सिंह कुशवाह एवं साथियों द्वारा त्रिवेणी संग्रहालय परिसर में प्रस्तुत होगी ।', 'पंजाबी साहित्य अकादमी', '0000-00-00 00:00:00', '7/21/2023 18:06', 1),
(10, 'अनादि', 'लोक एवं जनजातीय', 'Other', '', '23-Jul-23', '23-Jul-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'महाकाल लोक, जयसिंहपुरा', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'शैव ज्ञान परंपरा से उद्भूत कलाओं पर एकाग्र अनादि श्रंखला के अन्तर्गत इस रविवार को शि केन्द्रित भजन एवं सावन गीतों की प्रस्तुति श्री विशाल सिंह कुशवाह एवं साथियों द्वारा त्रिवेणी संग्रहालय परिसर में प्रस्तुत होगी ।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(11, 'अनादि', 'लोक एवं जनजातीय', 'Other', '', '23-Jul-23', '23-Jul-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'महाकाल लोक, जयसिंहपुरा', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'शैव ज्ञान परंपरा से उद्भूत कलाओं पर एकाग्र अनादि श्रंखला के अन्तर्गत इस रविवार को शि केन्द्रित भजन एवं सावन गीतों की प्रस्तुति श्री विशाल सिंह कुशवाह एवं साथियों द्वारा त्रिवेणी संग्रहालय परिसर में प्रस्तुत होगी ।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 0),
(12, 'अनादि', 'लोक एवं जनजातीय', 'Other', '', '23-Jul-23', '23-Jul-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'महाकाल लोक, जयसिंहपुरा', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'संभावना नृत्य, गायन एवं वादन केन्द्रित प्रत्येक शनिवार, सायं 6:30 बजे से मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल मध्यप्रदेश जनजातीय संग्रहालय का प्रतिष्ठा आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(13, 'संभावना', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/Ox_lbf_XOVc?feature=share', '22-Jul-23', '22-Jul-23', '6:30 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'है तेरी याद और दिले दीवाना रक़्स में मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, जबलपुर द्वारा सिलसिला एवं तलाशे जौहर सग़ीर रियाज़ एवं नज़्र निज़ामी की स्मृति में विमर्श एवं रचनापाठ शनिवार, 22 जुलाई, 2023 श्री जानकी रमण महाविद्यालय, आग़ा चौक, जबलपुर तलाशे जौहर : दोपहर 3:00 बजे एवं सिलसिला : शाम 5:00 बजे मुख्य अतिथि : डॉ. अभिजात कृष्ण त्रिपाठी विशिष्ट आमंत्रित वक्ता एवं शायर : दीपशिखा सागर (छिंदवाड़ा), शाहिद दमोही (दमोह) सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर वक्ता: फ़ीरोज़ कमाल- साहित्यकार ( विषय : नज़्र निज़ामी व्यक्तित्व एवं कृतित्व) वक्ता: शफीक अंसारी- साहित्यकार (विषय: सगीर रियाज़ व्यक्तित्व एवं कृतित्व) हेमराज राज़ सागरी, दानिश ज़ैग़मी, निसार अहमद निसार, ग़यासुद्दीन ग़यास, नवाब कौसर, रघुवीर अम्बर, असलम माजिद, इक़बाल रियाज़ी, सलमा जमाल, अमीन वहदत, रिज़वान हकीमी, अजय मिश्रा, पूर्णिमा सिंह इरम (जबलपुर) जिला समन्वयक : राशिद राही आप सभी सादर साग्रह आमंत्रित हैं डॉ. नुसरत मेहदी निदेशक नोट : तलाशे जौहर में भाग लेने वाले प्रतिभागी दोपहर 3:00 बजे से पहले कार्यक्रम स्थल पर पहुँच जायें।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '7/19/2023 19:40', 1),
(14, 'विमर्श एवं रचना पाठ', 'अन्य', 'Other', '', '22-Jul-23', '22-Jul-23', '3:00 PM', '8:00 PM', 'Free', '', 'श्री जानकी रमण महाविद्यालय, आग़ा चौक, जबलपुर', 'श्री जानकी रमण महाविद्यालय, आग़ा चौक, जबलपुर', 'Madhya Pradesh', 'Jabalpur', 'Jabalpur', '', '', '', '', '', '', 'भारत भवन कजरी-झूला गायन महोत्सव सुप्रतिष्ठित कलाकारों की गायन सभाएं 21 से 23 जुलाई, 2023 अनहद, भारत भवन का प्रतिष्ठा समारोह 21 जुलाई सायं 7:00 बजे: सुश्री शीला त्रिपाठी और साथी कलाकारों द्वारा कजरी-झूला गायन। सायं 7:35 बजे: श्री फूलसिंह माडरे और साथी कलाकारों द्वारा कजरी-झूला गायन। सायं 8:10 बजे: सुश्री शोभा चौधरी और साथी कलाकारों द्वारा कजरी-झूला गायन। 22 जुलाई सायं 7:00 बजे: सुश्री मणिमाला सिंह और साथी कलाकारों द्वारा कजरी-झूला गायन। सायं 7:35 बजे: सुश्री उर्मिला पांडे और साथी कलाकारों द्वारा कजरी-झूला गायन। सायं 8:10 बजे: सुश्री मधुमिता नकवी द्वारा कजरी-झूला गायन। 23 जुलाई सायं 7:00 बजे: श्री शशि कुमार पांडे और साथी कलाकारों द्वारा कजरी-झूला गायन। सायं 7:35 बजे: सुश्री तृप्ति नागर और साथी कलाकारों द्वारा कजरी-झूला गायन। सायं 8:10 बजे: सुश्री चंदन तिवारी और साथी कलाकारों द्वारा कजरी-झूला गायन। * आठ वर्ष से कम उम्र के बच्चों का प्रवेश नहीं * मोबाइल साइलेंट मोड पर या स्विच ऑफ के बाद ही सभागार में प्रवेश संभव', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(15, 'कजरी-झूला गायन महोत्सव', 'सुगम संगीत', 'Hybrid', 'https://www.youtube.com/live/zSRe0UfF58A?feature=s', '21-Jul-23', '23-Jul-23', '7:00 PM', '10:00 PM', 'Free', '', 'अनहद, भारत भवन', 'अनहद, भारत भवन', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'कालिदास साहित्य पर केन्द्रित लोकचित्र शिविर', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '7/21/2023 17:08', 1),
(16, 'वनजन कलाशिविर', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Hybrid', '', '18-Jul-23', '25-Jul-23', '4:30 PM', '6:00 PM', 'Free', '', 'मोटल तामिया', 'तामिया, जिला-छिन्दवाड़ा', 'Madhya Pradesh', 'Chhindwara', 'tamiya', '', '', '', '', '', '', 'मरकज़ है इल्म ओ फ़न का मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, भोपाल द्वारा सिलसिला एवं तलाशे जौहर शफ़ीक़ा फ़रहत की स्मृति में स्मृति गाथा एवं रचनापाठ सोमवार, 17 जुलाई, 2023 दुर्रानी हॉल, कमला पार्क, भोपाल तलाशे जौहर : दोपहर 3:00 बजे एवं सिलसिला : शाम 5:00 बजे विशिष्ट आमंत्रित वक्ता एवं शायर हसन काज़मी (लखनऊ), क़ाज़ी मलिक नवेद (भोपाल), डॉ. सबा अज़ीम (भोपाल) सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर सर्वश्री सरवत जैदी, परवेज़ अख्तर, परवीन सबा, एस एम सिराज, सरवर हबीब, शोएब अली ख़ान, महावीर सिंह, उमेश मिश्रा, अज़ीम असर, शमीम हयात, प्रद्युम्न शर्मा, कमलेश नूर, मोहम्मद रईस, पारो परवीन खान, नीता सक्सेना, दीप्ति ग्वाली (भोपाल) जिला समन्वयक : सैयद आबिद हुसैन आप सभी सादर साग्रह आमंत्रित हैं डॉ. नुसरत मेहदी निदेशक नोट : तलाशे जाहर में भाग लेने वाले प्रतिभागी दोपहर 3:00 बजे से पहले कार्यक्रम स्थल पर पहुँच जायें।', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '', 1),
(17, 'स्मृति गाथा एवं रचना पाठ', 'अन्य', 'Other', '', '17-Jul-23', '17-Jul-23', '3:00 PM', '9:00 PM', 'Free', '', 'दुर्रानी हॉल, कमला पार्क, भोपाल', 'दुर्रानी हॉल, कमला पार्क, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'शैव ज्ञान परंपरा से उद्भूत कलाओं पर एकाग्र साप्ताहिक श्रंखला अनादि के अन्तर्गत दिनांक 16 जुलाई 2023 को शिव केन्द्रित पारंपरिक लोकगीतों का प्रस्तुतिकरण त्रिवेणी संग्रहालय परिसर में होगा ।', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(18, 'अनादि', 'लोक एवं जनजातीय', 'Other', '', '16-Jul-23', '16-Jul-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'महाकाल लोक, जयसिंहपुरा', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'विरासतों के अमीन हैं हम मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्वावधान में जिला अदब गोशा, बुरहानपुर द्वारा सिलसिला एवं तलाशे जौहर जावेद अंसारी और मिर्ज़ा मेहमूद बेग साज़ बुरहानपुरी की स्मृति में सेमिनार एवं रचनापाठ रविवार, 16 जुलाई, 2023 हुमायूँ मेनशन, दाऊद पुरा, बुरहानपुर तलाशे जौहर : दोपहर 3:00 बजे एवं सिलसिला शाम 5:00 बजे विशिष्ट आमंत्रित वक्ता एवं शायर मसूद बेग तिशना (इंदौर), सग़ीर मंज़र (खंडवा) सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर सर्वश्री लतीफ़ शाहिद, रहमान साकिब, नादिम अशरफी, अबरार जाफ़री, चराग़ शफ़की (बुरहानपुर), मुख्तार नदीम (बस्ती निजामुद्दीन), डॉ.एस एम शकील (बुरहानपुर), शब्बीर साजिद (हाशिम पुरा), अल्लामा शाहिद अख्तर, जमील अंसारी, अहद अमजद, अनवर जमीली, संदीप शर्मा (बुरहानपुर), श्याम ठाकुर (रास्ती पुरा), फरज़ाना अंसारी (बुरहानपुर), सुनंदा वानखेड़े (बुरहानपुर) जिला समन्वयक : शऊर आशना आप सभी सादर साग्रह आमंत्रित हैं डॉ. नुसरत मेहदी निदेशक', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(19, 'सेमिनार एवं रचना पाठ', 'अन्य', 'Other', '', '16-Jul-23', '16-Jul-23', '3:00 PM', '8:00 PM', 'Free', '', 'हुमायूँ मेनशन, दाऊद पुरा, बुरहानपुर', 'हुमायूँ मेनशन, दाऊद पुरा, बुरहानपुर', 'Madhya Pradesh', 'Burhanpur', 'Burhanpur', '', '', '', '', '', '', 'संभावना नृत्य, गायन एवं वादन केन्द्रित प्रत्येक शनिवार, सायं 6:30 बजे से मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल मध्यप्रदेश जनजातीय संग्रहालय का प्रतिष्ठा आयोजन', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(20, 'संभावना', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/S89GIrYYwVU?feature=share', '15-Jul-23', '15-Jul-23', '6:30 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'उजाले यादों के* मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में जिला अदब गोशा, अशोक नगर द्वारा गणेश शंकर विद्यार्थी एवं हबीब कर्रापुरी की स्मृति में स्मरण एवं रचनापाठ शनिवार, 15 जुलाई, 2023 को अपराह्न 3 बजे, रोटरी क्लब भवन, नगर पालिका के पास, अशोक नगर में आयोजित है। कार्यक्रम में विशिष्ट आमंत्रित वक्ता एवं शायर विजय कलीम (ग्वालियर), मनीष जैन रौशन ( ग्वालियर) होंगे। *सिलसिला में आमंत्रित स्थानीय वक्ता शायर* वक्ता- श्री सुधीर गुप्ता, साहित्यकार विषय- गणेश शंकर विद्यार्थी, इंसानियत का मुहाफ़िज़ और एक सच्चा सहाफ़ी वक्ता- श्री ख़लील अश्क, मुंगावली विषय- हबीब कर्रापुरी, व्यक्तित्व एवं कृतित्व जमुना प्रसाद बेताब (मुंगावली), काले खां असर (मुंगावली) सुधीर गुप्ता (अशोक नगर), दूधनाथ मधुकर (अशोक नगर), जहीरुद्दीन ज़हीर (चंदेरी) शमीम मालवी (मुंगावली), लखन सोनी (अशोक नगर), उर्मिला कटारिया (अशोक नगर ) शहज़ाद पेंटर (मुंगावली), शमीम राही (मुंगावली), मनोज दर्द (मुंगावली) जिला समन्वयक : आर पी कामिल आप सभी सादर साग्रह आमंत्रित हैं डॉ. नुसरत मेहदी निदेशक', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(21, 'स्मरण एवं रचना पाठ', 'अन्य', 'Other', '', '15-Jul-23', '15-Jul-23', '3:00 PM', '7:00 PM', 'Free', '', 'रोटरी क्लब भवन, नगर पालिका के पास, अशोक नगर', 'रोटरी क्लब भवन, नगर पालिका के पास, अशोक नगर', 'Madhya Pradesh', 'Ashoknagar', 'Ashoknagar', '', '', '', '', '', '', 'एकाग्र श्रृंखला के तहत रितुपर्णो घोष का सिनेमा14 जुलाई को फिल्म- रेनकोट, 15 जुलाई को फिल्म- अंतरमहल और 16 जुलाई को फिल्म -चोखेर बाली का प्रदर्शन प्रतिदिन शाम 7:00 बजे से.आप सादर आमंत्रित हैं.प्रवेश निशुल्क है.', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(22, 'रितुपर्णो घोष का सिनेमा', 'अन्य', 'Other', '', '14-Jul-23', '16-Jul-23', '7:00 PM', '9:00 PM', 'Free', '', 'भारत भवन', 'श्यामला हिल्स', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'भारत भवन रितुपर्णो घोष का सिनेमा एकाग्र फिल्म समारोह 14 से 16 जुलाई 2023, प्रतिदिन शाम 7.00 बजे रेनकोट 14 जुलाई (1 घण्टा 57 मिनिट) अन्तरमहल 15 जुलाई ( 2घण्टा ) चोखेर बाली 16 जुलाई (2 घण्टा 5 मिनिट) आप सभी सादर आमंत्रित है आप कार्यक्रम को एमपी कल्चर ऐप के माध्यम से लाइव देख सकते हैं और इसे अपने दोस्तों और परिवार के साथ साझा कर सकते हैं।', 'भारत भवन', '0000-00-00 00:00:00', '7/13/2023 14:44', 1),
(23, 'रितुपर्णो घोष का सिनेमा एकाग्र फिल्म समारोह', 'अन्य', 'Hybrid', '', '14-Jul-23', '16-Jul-23', '7:00 PM', '10:00 PM', 'Free', '', 'भारत भवन', 'भारत भवन', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'मध्‍यप्रदेश नाट्य विद्यालय का आयोजन वर्तमान सत्र २०२२-२3 के विद्यार्थियों का सत्र समाप्ति नाट्य समारोह।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(24, 'नाट्य समारोह', 'रंगमंच एवं लोकनाट्य', 'Play', 'https://www.youtube.com/live/Y558x7GRRMc?feature=s', '13-Jul-23', '15-Jul-23', '7:00 PM', '9:00 PM', 'Free', '', 'रवीन्‍द्र भवन सभागार, भोपाल', 'भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग भोपाल द्वारा पं. दीनदयाल उपाध्याय की स्मृति में दिनांक 13 जुलाई, 2023 को सायं 6.00 बजे काली बाड़ी मंदिर प्रांगण सभागार, मुख्त्यारगंज, सतना (म.प्र.) में व्याख्यान एवं रचनापाठ आयोजित है। कार्यक्रम के प्रथम सत्र की अध्यक्षता डाॅ. सुदुम्न आचार्य एवं श्री उत्तम बैनर्जी व्यख्यान देंगे। कार्यक्रम के दूसरे सत्र में श्री शिव किशोर तिवारी, श्री सत्येन्द्र सेंगेर, श्री सुरेश सौरभ, सरोज सिंह, श्री कुनाल बरकड़े, दीपा गौतम, श्री तामेश्वर शुक्ल ‘तारक’ और श्री अरुण कुमार पयासी अपनी रचनाओं का पाठ करेंगे। कार्यक्रम के स्थानीय संयोजक श्री अनिल अयान होंगे। आयोजित व्याख्यान एवं रचनापाठ में आप सभी सादर साग्रह आमंत्रित हैं। डाॅ. विकास दवे निदेशक साहित्य आदमी, भोपाल', 'मध्य प्रदेश नाट्य विद्यालय, भोपाल', '0000-00-00 00:00:00', '7/14/2023 12:08', 1),
(25, 'पं. दीनदयाल उपाध्याय स्मृति समारोह', 'साहित्य', 'Other', '', '13-Jul-23', '13-Jul-23', '6:00 PM', '10:00 PM', 'Free', '', 'काली बाड़ी मंदिर प्रांगण सभागार, मुख्त्यारगंज', 'काली बाड़ी मंदिर प्रांगण सभागार, मुख्त्यारगंज, सतना (म.प्र.)', 'Madhya Pradesh', 'Satna', 'Satna', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग भोपाल द्वारा सेठ गोविन्द दास की स्मृति में दिनांक 12 जुलाई, 2023 को सायं 6.00 बजे सरस्वती विद्या मंदिर सभागार, निराला नगर, रीवा (म.प्र.) में व्याख्यान एवं रचनापाठ आयोजित है। कार्यक्रम प्रथम सत्र के मुख्य अतिथि डाॅ. राज कुमार आचार्य-कुलपति, अध्यक्षता प्रो. रामेश्वर पाण्डेय करेंगे। डाॅ. भूपेन्द्र सिंह और डाॅ. क्षिप्रा द्विवेदी व्याख्यान देंगे। कार्यक्रम के दूसरे सत्र में श्री राम लखन केवट ‘जलेश’, सुश्री प्रियंका मिश्रा, प्रो. अतुल द्विवेदी, श्री भृगुनाथ पाण्डेय, श्री सिद्धार्थ श्रीवास्तव, सुश्री क्रांति पाण्डेय और सुश्री अनुराधा पाण्डेय अपनी रचनाओं का पाठ करेंगे। कार्यक्रम के स्थानीय समन्वयक श्री संतोष अवधिया एवं संयोजक श्री विवेक द्विवेदी होंगे। आयोजित व्याख्यान एवं रचनापाठ में आप सभी सादर साग्रह आमंत्रित हैं। डाॅ. विकास दवे निदेशक साहित्य आदमी, भोपाल', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(26, 'सेठ गोविन्द दास स्मृति समारोह', 'साहित्य', 'Other', '', '12-Jul-23', '12-Jul-23', '6:00 PM', '10:00 PM', 'Free', '', 'सरस्वती विद्या मंदिर सभागार, निराला नगर', 'सरस्वती विद्या मंदिर सभागार, निराला नगर, रीवा (म.प्र.)', 'Madhya Pradesh', 'Rewa', 'rewa', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग भोपाल द्वारा पवन कुमार मिश्र की स्मृति में दिनांक 11 जुलाई, 2023 को दोपहर 2.00 बजे सरस्वती उच्चतर माध्यमिक विद्यालय सभागार, मडरिया, सीधी (म.प्र.) में व्याख्यान एवं रचनापाठ आयोजित है। कार्यक्रम प्रथम सत्र के मुख्य अतिथि श्री विजय सिंह परिहार, अध्यक्षता डाॅ. राजकरण शुक्ल करेंगे। डाॅ. लहरी सिंह एवं श्री राजबहोर पाठक व्याख्यान देंगे। कार्यक्रम के दूसरे सत्र में श्री अंजनी सिंह ‘सौरभ’, श्री रमाकांत द्विवेदी ‘सावर’, श्री प्रांजल विनय मिश्र, श्री कुंजल साकेत ‘कुंज’, श्री बृजेश बहादुर सिंह और सुश्री अपूर्वा चतुर्वेदी अपनी रचनाओं का पाठ करेंगे। कार्यक्रम के स्थानीय संयोजक डाॅ. श्रीनिवास शुक्ल ‘सरस’ होंगे। आयोजित व्याख्यान एवं रचनापाठ में आप सभी सादर साग्रह आमंत्रित हैं। डाॅ. विकास दवे निदेशक साहित्य आदमी, भोपाल', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(27, 'पवन कुमार मिश्र स्मृति समारोह', 'साहित्य', 'Other', '', '11-Jul-23', '11-Jul-23', '2:00 PM', '6:00 PM', 'Free', '', 'सरस्वती उच्चतर माध्यमिक विद्यालय सभागार, मडरिया', 'सरस्वती उच्चतर माध्यमिक विद्यालय सभागार, मडरिया, सीधी (म.प्र.)', 'Madhya Pradesh', 'Sidhi', 'sidhi', '', '', '', '', '', '', 'पूर्वी गायन, पुरबिया तान, पूर्वी भोजपुरी लोक संगीत पर केन्द्रित कजरी-बिरहा गायन की प्रस्‍तुतियाँ।', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(28, 'कजरी-बिरहा समारोह', 'अन्य', 'Other', '', '9-Jul-23', '10-Jul-23', '7:00 PM', '10:00 PM', 'Free', '', 'वेस्‍टर्न कोलफील्‍ड्स लिमिटेड, ऑफिसर्स क्‍लब सभागृह', 'पाथाखेड़ा सारणी', 'Madhya Pradesh', 'Betul', 'Sarni', '', '', '', '', '', '', 'शैव ज्ञान परंपरा से उद्भूत कलाओं पर एकाग्र अनादि श्रंखला के अन्तर्गत दिनांक 09 जुलाई 2023 - रविवार को शिव केन्द्रित भक्ति गायन की प्रस्तुति श्री अजय गांगोलिया एवं साथियों द्वारा त्रिवेणी संग्रहालय परिसर में प्रस्तुत होगी ।', 'भोजपुरी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(29, 'अनादि', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/9yyQwT_cIh0?feature=share', '9-Jul-23', '9-Jul-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'महाकाल लोक, जयसिंहपुरा', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'खरा शायर कभी अज़मत के चक्कर में नहीं पड़ता (मुज़फ्फ़र हनफ़ी) मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, खंडवा द्वारा सिलसिला एवं तलाशे जौहर मुज़फ्फ़र हनफ़ी एवं क़ाज़ी हसन रज़ा की स्मृति में विमर्श एवं रचनापाठ रविवार, 9 जुलाई, 2023 जवाहर मिडिल स्कूल, घासपुरा, खंडवा तलाशे जौहर : दोपहर 3:00 बजे एवं सिलसिला : शाम 5:00 बजे विशिष्ट आमंत्रित वक्ता एवं शायर राज़ साग़री (खरगोन), रियासत अली रियासत (बुरहानपुर), शऊर आशना (बुरहानपुर) सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर ज़हूर शाहिद (खंडवा), हारून फ़िराक़ (खंडवा), रघुवीर शर्मा (हरसूद), डॉ. नाज़िमा (खंडवा), ए क़मर (खंडवा) अज़ीज़ खान अज़ीज़ (खंडवा), अशफ़ाक मुज़तर (खंडवा), शैलेंद्र शरण (खंडवा), जावेद आसी (खंडवा), शब्बीर साजिद (घासपुरा), शकूर दर्द (खंडवा), गोविंद गीते (खंडवा), नासिर हुसैन (खंडवा), चांद खां चांद (ग्राम जसवाड़ी), फ़ारूक़ शेख (खंडवा) जिला समन्वयक: सूफ़ियान क़ाज़ी आप सभी सादर साग्रह आमंत्रित हैं डॉ नुसरत मेहदी निदेशक', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '7/8/2023 17:20', 1),
(30, 'विमर्श एवं रचना पाठ', 'अन्य', 'Other', '', '9-Jul-23', '9-Jul-23', '3:00 PM', '8:00 PM', 'Free', '', 'जवाहर मिडिल स्कूल, घासपुरा, खंडवा', 'जवाहर मिडिल स्कूल, घासपुरा, खंडवा', 'Madhya Pradesh', 'Khandwa', 'Khandwa', '', '', '', '', '', '', 'संभावना नृत्य, गायन एवं वादन केन्द्रित प्रत्येक शनिवार, सायं 6:30 बजे से मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल मध्यप्रदेश जनजातीय संग्रहालय का प्रतिष्ठा आयोजन', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '7/8/2023 19:41', 1),
(31, 'संभावना', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/jRduF7VdksQ?feature=share', '8-Jul-23', '8-Jul-23', '6:30 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'शाइरी भी काम है \'आतिश\' मुरस्सा-साज़ का (आतिश ) मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, बड़वानी द्वारा सिलसिला एवं तलाशे जौहर स्व. मोहम्मद नईम कुरैशी एवं रौशन ख़ाँ दीवाना की स्मृति में स्मृति प्रसंग एवं रचनापाठ शनिवार, 8 जुलाई 2023 इक़रा भवन, पूजा स्टेट कॉलोनी, बड़वानी तलाशे जौहर : दोपहर 3:00 बजे एवं सिलसिला : शाम 5:00 बजे विशिष्ट आमंत्रित वक्ता एवं शायर हबीब हुबाब (खंडवा), डॉ.जलीलुर्रहमान बुरहानपुरी (बुरहानपुर), अशफ़ाक़ निज़ामी (मारुल, महाराष्ट्र) सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर आरिफ़ अहमद \'आरिफ़\' (बड़वानी), इस्लामुद्दीन \'हैदर\' (ओझर), शुजाउद्दीन \'बेबाक\' (ओझर), वाजिद हुसैन \'साहिल\' (सैंधवा), निज़ाम \'बाबा\' (सेंधवा), जुनैद अहमद \'जुनैद\' (सेंधवा), विशाल त्रिवेदी \'आदिल\' (सेंधवा), मुईन \'ख़ाकसार\' (पलसूद), वसीम \'रिलायबल\' (जुलवानिया), वाहिद कुरैशी \'वाहिद\' (राजपुर), सादिक़ \'ज़की\' (सेंधवा), पवन शर्मा हमदर्द (सेंधवा) ज़िला समन्वयक: सैयद रिज़वान अली आप सभी सादर साग्रह आमंत्रित हैं डॉ. नुसरत मेहदी निदेशक नोट: तलाशे जौहर में भाग लेने वाले प्रतिभागी दोपहर 3:00 बजे से पहले कार्यक्रम स्थल पर पहुँच जायें।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(32, 'विमर्श एवं रचना पाठ', 'अन्य', 'Other', '', '8-Jul-23', '8-Jul-23', '3:00 PM', '8:00 PM', 'Free', '', 'इक़रा भवन, पूजा स्टेट कॉलोनी, बड़वानी', 'इक़रा भवन, पूजा स्टेट कॉलोनी, बड़वानी', 'Madhya Pradesh', 'Barwani', 'Barwani', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग भोपाल द्वारा लक्ष्मी प्रसाद मिस्त्री ‘रमा’ की स्मृति में दिनांक 5 जुलाई, 2023 को सायं 5.30 बजे अपूर्व होटल, कलेक्‍ट्रेट के सामने, टीकमगढ़ (म.प्र.) में ‘बुंदेली गौरव गान’ विषय पर व्याख्यान एवं रचनापाठ आयोजित है। प्रथम सत्र में कार्यक्रम की अध्यक्षता वरिष्ठ साहित्यकार-टीकमगढ़ श्री हरिविष्णु अवस्थी करेंगे। साथ ही वरिष्ठ साहित्यकार-टीकमगढ़ श्री प्रभुदयाल श्रीवास्तव का व्याख्यान होगा। द्वितीय सत्र में श्री राजेन्द्र बिदुआ-टीकमगढ़, श्री गणेश राय-दमोह, श्री कुमार चंदन-भोपाल, श्री मोहक नायक-ओरछा, श्री नितेश व्यास-बेगमगंज, श्री रामगोपाल रैकवार-टीकमगढ़ और श्री रवीन्द्र यादव-पलेरा अपनी-अपनी रचनाओं का पाठ करेंगे। स्थानीय संयोजक श्री राजीव नामदेव ‘राना लिधौरी’ होंगे। आयोजित कार्यक्रम में आप सभी सादर साग्रह आमंत्रित हैं। डॉ. विकास दवे निदेशक साहित्‍य अकादमी', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(33, 'लक्ष्मी प्रसाद मिस्त्री ‘रमा’ स्मृति समारोह', 'साहित्य', 'Other', '', '5-Jul-23', '5-Jul-23', '6:00 PM', '9:00 PM', 'Free', '', 'अपूर्व होटल', 'अपूर्व होटल, कलेक्ट्रे ट के सामने, टीकमगढ़ (म.प्र.)', 'Madhya Pradesh', 'Tikamgarh', 'Tikamgarh', '', '', '', '', '', '', 'त्रिवेणी कला संग्रहालय - उज्जैन द्वारा गुरुपूर्णिमा के उपलक्ष्य में आयोजित श्रद्धा पर्व – 2023 के अन्तर्गत राष्ट्रीय शोध सङ्गोष्ठी का आयोजन दिनाङ्क 04/07/2023 के प्रातः 11 बजे से त्रिवेणी संग्रहालय सभागार में किया जा रहा है । संगोष्ठी के प्रथम सत्र में प्रो. बलदेवानन्द सागर, नई दिल्ली एवं प्रो. पी. एन्. शास्त्री, नई दिल्ली “गुरु-शिष्य परम्परा – वर्तमान परिप्रेक्ष्य” विषय पर उद्बोधन देंगे, द्वितीय सत्र में प्रो. विरूपाक्ष जड्डीपाल, उज्जैन एवं प्रो. शैलेन्द्रकुमार शर्मा, विक्रम विश्वविद्यालय – उज्जैन द्वारा “ज्ञान सम्प्रेषण की आदर्श पद्धति- गुरु-शिष्य परम्परा” विषय पर केन्द्रित व्याख्यान आयोजित होगा । कार्यक्रम की अध्यक्षता प्रो. विजयकुमार सी.जी., कुलपति, पाणिनि विश्वविद्यालय-उज्जैन द्वारा की जाएगी ।', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(34, 'श्रद्धा पर्व - 2023', 'साहित्य', 'Lecture', 'https://youtube.com/live/afcdWGNCIWA?feature=share', '4-Jul-23', '4-Jul-23', '11:00 AM', '7:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'जयसिंहपुरास महाकाल लोक', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'शलाका 39 भील समुदाय की चित्रकार संगीता ताहेड़ के चित्रों की प्रदर्शनी सह - विक्रय लिखन्दरा प्रदर्शनी दीर्घा 3 से 30 जुलाई, 2023 मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '7/3/2023 16:44', 1),
(35, 'शलाका-39', 'लोक एवं जनजातीय', 'Other', '', '3-Jul-23', '30-Jul-23', '12:00 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'मृृदंगाचार्य पण्डित नाना साहेब पानसे स्‍मृृति - 129 वां गुरू पूर्णिमा संगीत समारोह। 3-4 जुलाई, 2023 , बकायन, जिला- दमोह', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(36, '129वां गुरू पूर्णिमा संगीत समारोह', 'शास्त्रीय संगीत', 'Other', '', '3-Jul-23', '4-Jul-23', '8:00 AM', '11:00 PM', 'Free', '', 'बकायन, जिला- दमोह', 'बकायन, जिला- दमोह', 'Madhya Pradesh', 'Damoh', 'damoh', '', '', '', '', '', '', 'अकादमी द्वारा मृदंग आचार्य पंडित नानासाहेब पांनसे की स्मृति में 3-4 जुलाई 2023 को उत्था न साहित्यिक सामाजिक एवं सांस्कृहतिक संस्थास ग्राम बकायन के सहयोग से बकायन जिला दमोह में गुरु पूर्णिमा संगीत समारोह का आयोजन किया जा रहा है यह आयोजन इस वर्ष 129 वां आयोजन है। संगतकार तबला-सारंग लासुरकर, रामेन्द्र सिंह सोलंकी, राहुल स्वर्णकर, पांडुरंग बाबा देहाडराय पखावज-संजय आगले हारमोनियम-जितेन्द्र शर्मा एवं देवेन्द्र वर्मा सारंगी-फारूख लतीफ खाँ', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '7/24/2023 12:27', 1),
(37, 'अपनी सांस्कृतिक प्रतिबद्धता और अमिट आस्थाओं के लिए कृतसंकल्पित मध्यप्रदेश संस्कृति विभाग विगत वर्ष की भाँति इस वर्ष भी 3 जुलाई, 2023 को गुरु पूर्णिमा के अवसर पर प्रदेश भर मनें आयोजन कर रहा है। संस्‍कृति संचालनालय द्वारा सभी संगीत महाविद्यालयों में सांगीति', 'अन्य', 'Play', '', '3-Jul-23', '4-Jul-23', '7:00 PM', '10:30 PM', 'Free', '', 'बकायन जिला दमोह', 'बकायन जिला दमोह', 'Madhya Pradesh', 'Damoh', 'damoh', '', '', '', '', '', '', 'अपनी सांस्कृतिक प्रतिबद्धता और अमिट आस्थाओं के लिए कृतसंकल्पित मध्यप्रदेश संस्कृति विभाग विगत वर्ष की भाँति इस वर्ष भी 3 जुलाई, 2023 को गुरु पूर्णिमा के अवसर पर प्रदेश भर मनें आयोजन कर रहा है। संस्‍कृति संचालनालय द्वारा सभी संगीत महाविद्यालयों में सांगीतिक सभा, ललित कला संस्थानों में व्याख्यान एवं भोपाल में भी गायन, वादन, नृत्य केन्द्रित सांगीतिक सभा का आयोजन किया जा रहा है। इस सांस्कृतिक आयोजन का गरिमामय शुभारंभ 3 जुलाई, 2023 को संध्याा 7:00 बजे रवीन्द्र भवन, भोपाल में होना है। इस एक दिवसीय आयोजन में श्री उमाकांत गुंदेचा, भोपाल का शास्त्री्य गायन, श्री देव ज्योति गुप्ता, मुंबई का सितार वादन, एवं सुश्री जयप्रभा मैनन, दिल्ली का मोहिनीअट्टम नृत्य का कार्यक्रम सुनिश्चित है। मध्यप्रदेश के सात शासकीय संगीत महाविद्यालय नरसिंहगढ़ (राजगढ़), इंदौर, धार, उज्जैन, मंदसौर, ग्वालियर, मैहर समेत चार शासकीय ललित कला संस्थानों जबलपुर, ग्वालियर, इंदौर, धार और खंडवा में स्थापित ललित कला सस्थान में गुरुपूर्णिमा उत्सव आयोजित किया जाएगा।', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '', 1),
(38, '\"गुरू पूर्णिमा पर्व\"', 'अन्य', 'Hybrid', 'https://www.youtube.com/live/LAu5u-MwQKU?feature=s', '3-Jul-23', '3-Jul-23', '7:00 PM', '10:00 PM', 'Free', '', 'रवीन्द्र भवन, भोपाल', 'रवीन्द्र भवन, भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'संभावना नृत्य, गायन एवं वादन केन्द्रित प्रत्येक शनिवार, सायं 6:30 बजे से मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल मध्यप्रदेश जनजातीय संग्रहालय का प्रतिष्ठा आयोजन', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '7/3/2023 19:54', 1),
(39, 'संभावना', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/0-CMQNKRMk0?feature=share', '2-Jul-23', '2-Jul-23', '6:30 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'II देशज II नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/28/2023 19:05', 1),
(40, 'II देशज II नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/watch?v=jbzl_13tzwE&list=P', '2-Jul-23', '30-Jul-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'साप्ताहिक श्रंखला - अनादि त्रिवेणी संग्रहालय द्वारा शैव ज्ञान परम्परा से उद्गभूत कलाओं पर एकाग्र श्रंखला अनादि के अन्तर्गत सांस्कृतिक प्रस्तुति में – दिनांक - 02 जुलाई 2023 रविवार को विश्वेश्वराय नमः कथक समूह नृत्य , कलाकार – सुश्री जान्हवी तेलंग, सुश्री अदिति सिंह जादौन एवं सुश्री जयवी व्यास - उज्जैन स्थान - त्रिवेणी संग्रहालय परिसर, महाकाल लोक , जयसिंहपुरा, उज्जैन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/30/2023 13:02', 1),
(41, 'अनादि', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/pxZQvLaTSwY?feature=share', '2-Jul-23', '2-Jul-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'जयसिंहपुरा, महाकाल लोक', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'आसमाँ कैसे कैसे मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में जिला अदब गोशा, खरगोन द्वारा सिलसिला एवं तलाशे जौहर स्व. शकील अहमद शकील एवं अब्दुल रशीद कैफ़ की की स्मृति में स्मरण एवं रचनापाठ रविवार, 2 जुलाई 2023 सोम गार्डन, अंजुमन नगर, खरगोन तलाशे जौहर : शाम 3:00 बजे एवं सिलसिला : शाम 5:00 बजे विशिष्ट आमंत्रित वक्ता एवं शायर क़ादिर हनफ़ी बड़वानी, क़मर साक़ी धार सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर डॉ. अकबर अली (खरगोन), वाजिद साग़री (खरगोन), मन्सूर कमाल (चंदन पुरी), साजिद परवाज़ (खरगोन), ज़ाहिद शाह (महेश्वर) रियाज़ फिगार (खरगोन), अब्दुल हमीद बशर (गोगाँवा), नाज़िम नज़र (खरगोन), आलमगीर आलम (खरगोन), मोमिन कैफ़ (खरगोन), महेश जोशी अनिल (खरगोन), शफ़ाअत जमाल (खरगोन), इक़बाल रफ़ी (शाहपुरा), अहमद अयाज़ (खरगोन), आरती खरगोनवी (खरगोन) जिला समन्वयक: क़यामुद्दीन क़याम आप सभी सादर साग्रह आमंत्रित हैं डॉ नुसरत मेहदी निदेशक नोट: तलाशे जौहर में भाग लेने वाले प्रतिभागी दोपहर 3:00 बजे से पहले कार्यक्रम स्थल पर पहुँच जायें।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/30/2023 21:34', 1),
(42, 'स्मरण एवं रचना पाठ', 'अन्य', 'Other', '', '2-Jul-23', '2-Jul-23', '3:00 PM', '8:00 PM', 'Free', '', 'सोम गार्डन, अंजुमन नगर, खरगोन', 'सोम गार्डन, अंजुमन नगर, खरगोन', 'Madhya Pradesh', 'Khargone', 'Khargone', '', '', '', '', '', '', 'दो दिवसीय मराठी नाट्य समारोह।', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(43, 'मराठी नाट्य प्रसंग', 'रंगमंच एवं लोकनाट्य', 'Play', '', '1-Jul-23', '2-Jul-23', '7:00 PM', '9:30 PM', 'Free', '', 'महाराष्‍ट्र समाज भवन, सभागृह, देवास', 'देवास', 'Madhya Pradesh', 'Dewas', 'Dewas', '', '', '', '', '', '', 'लोक पतंग शीर्षक से बच्‍चों की नाट्य कार्यशाला में बच्‍चों को भोजपुरी भाषा से संंबंधित कविता, कहानी, नाटक आदि का श्रीमती प्रीति झा तिवारी द्वारा प्रशिक्षण दिया जायेगा। एवं 8-9 जुलाई, 2023 के कार्यक्रम में बच्‍चों द्वारा प्रस्‍तुति दी जावेगी।', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '6/26/2023 13:10', 1),
(44, 'लोक पतंग (बच्‍चों की कार्यशाला)', 'अन्य', 'Other', '', '1-Jul-23', '8-Jul-23', '4:00 PM', '8:00 PM', 'Free', '', 'नगर-पालिका मंगल भवन', 'नगर-पालिका मंगल भवन, पाथाखेड़ा सारणी', 'Madhya Pradesh', 'Betul', 'Sarni', '', '', '', '', '', '', 'आषाढी एकादशी के अवसर पर बोलावा विठ्ठल शीर्षक से अभंग गायन।', 'भोजपुरी साहित्य अकादमी', '0000-00-00 00:00:00', '6/30/2023 12:43', 1),
(45, 'बोलावा विठ्ठल', 'सुगम संगीत', 'Play', '', '29-Jun-23', '29-Jun-23', '7:00 PM', '9:00 PM', 'Free', '', 'पं. सूर्य नारायण व्‍यास कला संकुल कालिदास संस्‍कृत अकादमी परिसर उज्‍जैन', 'उज्‍जैन', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'मध्‍यप्रदेश नाट्य विद्यालय के वर्तमान सत्र २०२२-२३ के विद्यार्थियों के साथ आमंत्रित अतिथि व्‍याख्‍याता श्री विद्यानिधी वनारसे के निर्देशन में तैयार नाट्य प्रस्‍तुति।', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(46, 'नाटय प्रस्‍तुति', 'रंगमंच एवं लोकनाट्य', 'Play', 'https://www.youtube.com/live/sXTApqyikRY?feature=s', '29-Jun-23', '30-Jun-23', '7:00 PM', '9:30 PM', 'Free', '', 'रवीन्‍द्र भवन सभागार, भाेपाल', 'रवीन्‍द्र भवन सभागार, भाेपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'व्याख्यान विषय - वृत्रासुर - इन्द्र युद्ध का रहस्य वक्ता - डॉ. तुलसीदास परौहा सह आचार्य तथा विभागाध्यक्ष संस्कृत साहित्य विभाग,महर्षि पाणिनि संस्कृत एवं वैदिक विश्वविद्यालय, उज्जैन अध्यक्षता - डॉ रामदत्त मिश्र प्राध्यापक , संस्कृत विभाग, किशोरी रमण स्नातकोत्तर महाविद्यालय मथुरा, उत्तर प्रदेश *दिनांक 26 जून 2023, सांय 4:00बजे से* **स्थान - त्रिवेणी संग्रहालय सभागार, महाकाल लोक , जयसिंहपुरा,उज्जैन**', 'मध्य प्रदेश नाट्य विद्यालय, भोपाल', '0000-00-00 00:00:00', '6/29/2023 18:58', 1),
(47, 'व्याख्यान', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/ADIr0-NBGEI?feature=share', '26-Jun-23', '26-Jun-23', '4:00 PM', '7:00 PM', 'Free', '', 'त्रिवेणी संग्रहालय', 'जयसिंहपुरा, महाकाल लोक', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग भोपाल द्वारा निरंतर सृजन संवाद में ‘कैद में कोकिल’ (लोकतंत्रा की रक्षा में कविता) विषय पर व्याख्यान, रचनापाठ एवं सांगीतिक प्रस्तुति दिनांक 26 जून, 2023 को सायं 6.30 बजे दुष्यंत कुमार स्मारक पाण्डुलिपि संग्रहालय, शिवाजी नगर, भोपाल (म.प्र.) में आयोजित है। डाॅ. उमेश कुमार सिंह-पूर्व निदेशक साहित्य अकादमी एवं वरिष्ठ साहित्यकार-भोपाल का व्याख्यान होगा। श्री हरि विट्ठल दुबे ‘धूमकेतु’ कार्यक्रम में अपना रचनापाठ प्रस्तुत करेंगे। साथ ही प्रसिद्ध गायक श्री मधुर शर्मा-भोपाल आपातकाल के समय लिखी चुनिंदा कविताओं, गजलों की सांगीतिक प्रस्तुति देंगे। इस अवसर पर आप सभी से सादर साग्रह उपस्थिति का अनुरोध है। डाॅ. विकास दवे निदेशक साहित्य अकादमी', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/26/2023 13:38', 1),
(48, '‘कैद में कोकिल’ (लोकतंत्रा की रक्षा में कविता)', 'साहित्य', 'Other', '', '26-Jun-23', '26-Jun-23', '6:30 PM', '9:00 PM', 'Free', '', 'दुष्यंत कुमार स्मारक पाण्डुलिपि संग्रहालय', 'दुष्यंत कुमार स्मारक पाण्डुलिपि संग्रहालय, शिवाजी नगर, भोपाल (म.प्र.)', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'मध्यप्रदेश उर्दू अकादमी मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग द्वारा बज़्मे-सुख़न व्याख्यान और अखिल भारतीय मुशायरा दिनाँक : 26 जून, 2023, सायं 5.30 बजे स्थान : मध्य भारत हिन्दी साहित्य समिति, रवीन्द्रनाथ टैगोर मार्ग, इंदौर (म.प्र.) व्याख्यान : शाम 5:30 बजे विषय : उर्दू साहित्य में राष्ट्रीय चेतना उर्दू साहित्य में सामाजिक समरसता आयोजित व्याख्यान और अखिल भारतीय मुशायरे में आप सादर साग्रह आमंत्रित हैं । डॉ. नुसरत मेहदी निदेशक मध्यप्रदेश उर्दू अकादमी Culture Department Madhya Pradesh Madhya Pradesh Urdu Academy, Mahakmaaye Saqafat', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(49, 'बज़्मे-सुख़न', 'साहित्यिक एवं सांस्कृतिक', 'Other', '', '26-Jun-23', '26-Jun-23', '5:00 PM', '11:00 PM', 'Free', '', 'मध्य भारत हिन्दी साहित्य समिति, रवीन्द्रनाथ टैगोर मार्ग, इंदौर (म.प्र.)', 'मध्य भारत हिन्दी साहित्य समिति, रवीन्द्रनाथ टैगोर मार्ग, इंदौर (म.प्र.)', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'II देशज II बुन्देली गायन एवं बधाई एवं नौरता नृत्य कविता शर्मा एवं साथी - छतरपुर से एवं उमेश नामदेव एवं साथी सागर से नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(50, 'II देशज II 25.06.2023', 'लोक एवं जनजातीय', 'Hybrid', 'https://www.youtube.com/watch?v=PD8Kzb1wZhc', '25-Jun-23', '25-Jun-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'साप्ताहिक श्रंखला - अनादि त्रिवेणी संग्रहालय द्वारा शैव ज्ञान परम्परा से उद्गभूत कलाओं पर एकाग्र श्रंखला अनादि के अन्तर्गत सांस्कृतिक प्रस्तुति में – दिनांक - 25 जून 2023 रविवार को शिव केन्द्रति भजन गायन कलाकार – सुश्री तृप्ती नागर एवं साथी , उज्जैन स्थान - त्रिवेणी संग्रहालय परिसर, महाकाल लोक , जयसिंहपुरा,उज्जैन प्रवेश निःशुल्क', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(51, 'अनादि श्रंखला', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/BF7hcFTsBlM?feature=share', '25-Jun-23', '25-Jun-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'जयसिंहपुरा, महाकाल लोक परिसर', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'तिरी याद शाने सुकूत है, तिरा ज़िक्र जाने कलाम है (दानिश अलीगढ़ी) मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, रतलाम द्वारा सिलसिला एवं तलाशे जौहर स्व. दानिश अलीगढ़ी एवं शाहिद रतलामी की स्मृति में व्याख्यान एवं रचनापाठ रविवार, 25 जून 2023 प्रेस क्लब सभागार, पॉवर हाउस रोड, रिलायंस पेट्रोल पंप के सामने, रतलाम तलाशे जौहर : शाम 4:00 बजे एवं सिलसिला : शाम 6:00 बजे विशिष्ट आमंत्रित वक्ता एवं शायर अहमद निसार (इंदौर), अफ़रोज़ सहर (उज्जैन) सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर शब्बीर राही (रतलाम), फ़ैज़ रतलामी (रतलाम), मोहम्मद शफ़ी साहिर रतलामी (रतलाम), मिर्जा मक़सूद बैग (रतलाम), सिद्दीक़ रतलामी (रतलाम), आशीष दशोत्तर (रतलाम), अमीरुद्दीन अमीर सैलाना (रतलाम), नदीम अजमेरी(रतलाम) , लक्ष्मण पाठक (रतलाम), सैयद शबाब गुलशनाबादी\' (रतलाम), आरिफ़ अली आरिफ़ (जावरा), अल्लाह दिया खां \'आसी\' (जावरा), फ़ज़ल हयात (जावरा), मोईनउद्दीन मोईन (जावरा), युसुफ़ सहर (जावरा) ज़िला समन्वयक: अब्दुल सलाम खोकर आप सभी सादर साग्रह आमंत्रित हैं। डॉ. नुसरत मेहदी निदेशक', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(52, 'व्याख्यान एवं रचना पाठ', 'अन्य', 'Other', '', '25-Jun-23', '25-Jun-23', '4:00 PM', '9:00 PM', 'Free', '', 'प्रेस क्लब सभागार, पॉवर हाउस रोड, रिलायंस पेट्रोल पंप के सामने, रतलाम', 'प्रेस क्लब सभागार, पॉवर हाउस रोड, रिलायंस पेट्रोल पंप के सामने, रतलाम', 'Madhya Pradesh', 'Ratlam', 'Ratlam', '', '', '', '', '', '', 'विश्व योग — संगीत दिवस के विशिष्ट अवसर पर प्रदेश के नौ स्थानों पर सांस्कृतिक प्रस्तुतियां, व्याख्यान एवं प्रदर्शन भोपाल, इन्दौर, धार, ग्वालियर, उज्जैन, खण्डवा, मंदसौर, मैहर, नरसिंहगढ़ में बिखरेगी शास्त्रीय गायन—वादन एवं नृत्य की सुगन्ध मध्यप्रदेश शासन, संस्कृति विभाग का आयोजन प्रवेश निःशुल्क आप सभी आग्रहपूर्वक आमंत्रित हैं', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(53, 'विश्व योग — संगीत दिवस', 'सुगम संगीत', 'Hybrid', 'https://youtube.com/live/aCM8fsAOeTU?feature=share', '21-Jun-23', '21-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'रवीन्द्र भवन,भोपाल', 'रवीन्द्र भवन,भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'विश्व योग — संगीत दिवस के विशिष्ट अवसर पर 21 जून, 2023 को सायं 07:00 बजे त्रिवेणी कला संग्रहालय, जयसिंहपुरा, उज्जैन श्री यश गोपाल श्रीवास्तव एवं साथी, सागर द्वारा शास्त्रीय गायन सुश्री अनुप्रिया देवताले एवं साथी, इन्दौर द्वारा वायोलिन वादन एवं सुश्री मोम गांगुली एवं साथी, कोलकाता द्वारा मोहिनीअट्टम नृत्य की प्रस्तुतियां होंगी। प्रवेश निःशुल्क आप सभी आग्रहपूर्वक आमंत्रित हैं', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '6/21/2023 16:54', 1),
(54, 'विश्व योग — संगीत दिवस', 'अन्य', 'Hybrid', 'https://www.youtube.com/live/M1IyBBL1vjU?feature=s', '21-Jun-23', '21-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'भारत भवन', 'शामला हिल्स', 'Madhya Pradesh', '', 'Ujjain', '', '', '', '', '', '', 'गोस्वामी तुलसीदास समारोह', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '6/21/2023 19:30', 1),
(55, 'गोस्वामी तुलसीदास समारोह', 'अन्य', 'Other', 'https://youtube.com/live/GMsAra18DJk?feature=share', '20-Jun-23', '20-Jun-23', '2:00 PM', '9:30 PM', 'Free', '', 'भारत भवन', 'शामला हिल्स', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'सप्तदिवसीय श्री जगन्नाथ उत्सव श्री जगन्नाथ रथ यात्रा रथ यात्रा : 20 जून, 2023 वापसी रथ यात्रा : 28 जून, 2023 आप सभी आग्रहपूर्वक आमंत्रित हैं', 'भारत भवन', '0000-00-00 00:00:00', '6/19/2023 19:23', 1),
(56, 'श्री जगन्नाथ रथ यात्रा', 'अन्य', 'Hybrid', 'https://www.youtube.com/watch?v=jgHVor2-tJA', '20-Jun-23', '20-Jun-23', '1:30 PM', '6:00 PM', 'Free', '', 'इस्कॉन मंदिर प्रांगण, उज्जैन', 'इस्कॉन मंदिर प्रांगण, उज्जैन', 'Madhya Pradesh', '', 'Ujjain', '', '', '', '', '', '', 'गोस्वामी तुलसीदास समारोह', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(57, 'गोस्वामी तुलसीदास समारोह', 'अन्य', 'Discussion', '', '19-Jun-23', '19-Jun-23', '10:20 AM', '10:00 PM', 'Free', '', 'भारत भवन', 'शामला हिल्स', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'त्रिवेणी कला संग्रहालय - उज्जैन द्वारा आयोजित शैव ज्ञान परंपरा से उद्भूत कलाओं पर एकाग्र साप्ताहिक श्रंखला अनादि के अन्तर्गत शिव केन्द्रित भक्ति गायन की प्रस्तुति उज्जैन के श्री अंजुल शर्मा एवं साथी कलाकारों द्वारा सग्रहालय परिसर में होगी ।', 'भारत भवन', '0000-00-00 00:00:00', '', 1),
(58, 'अनादि श्रंखला', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/2QJFmN6mp_k?feature=share', '18-Jun-23', '18-Jun-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी संग्रहालय परिसर', 'जयसिंहपुरा, महाकाल लोक', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'II देशज II बुन्देली गायन एवं बैगा जनजातीय नृत्य राजेश तिवारी एवं साथी - छतरपुर से एवं दयाराम रठुरिया एवं साथी डिंडोरी से नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/16/2023 13:06', 1),
(59, 'II देशज II 18.06.2023', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/watch?v=iSRRzaChYk8', '18-Jun-23', '18-Jun-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', '18 जून-प्रातः 10:20 बजे: महाप्राण निराला की कविता \'तुलसीदास का पुनर्पाठ\'- श्री विनय उपाध्याय. प्रातः 11:00 बजे: वैचारिक सत्र विषय- \'भक्तिकाल और तुलसीदास\' वक्तव्य-श्री चंद्रिका प्रसाद \'चंद्र\', श्री प्रकाशचंद्र गिरि, श्री आशुतोष दुबे, अध्यक्षता- उदय प्रताप सिंह दोपहर 3:30 बजे: वैचारिक सत्र, विषय-\'भारतीय संस्कृति और तुलसी की कृतियॉं\' वक्तव्य: श्री माधव हाड़ा, श्री शिवशंकर मिश्र \'सरस\', श्री राहुल राजेश अध्यक्षता: श्री कपिल तिवारी सायं 6:00 बजे-श्री मिथिलेशनंदनीशरण का तुलसी महिमा पर व्याख्यान शाम 7:10 बजे-पंडित संजीव अभ्यंकर व्‍दारा तुलसी गायन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/18/2023 18:12', 1),
(60, 'गोस्वामी तुलसीदास समारोह', 'अन्य', 'Other', 'https://youtube.com/live/jw4syYGYTeg?feature=share', '18-Jun-23', '20-Jun-23', '10:20 AM', '9:30 PM', 'Free', '', 'भारत भवन', 'शामला हिल्स', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'संभावना नृत्य, गायन एवं वादन केन्द्रित प्रत्येक शनिवार, सायं 7:00 बजे से मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल मध्यप्रदेश जनजातीय संग्रहालय का प्रतिष्ठा आयोजन', 'भारत भवन', '0000-00-00 00:00:00', '6/18/2023 17:55', 1),
(61, 'संभावना', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/IKC8B_hu55g?feature=share', '17-Jun-23', '24-Jun-23', '7:00 PM', '9:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'यादि डाहिर जी भारतीय सिन्धू सभा, इन्दौर जे सहकार सां आयोजित कार्यक्रम 17 जून 2023, छंछरु, शाम 7 बजे, जगहि - स्वामी प्रीतमदास सभागृह, सिन्धी कॉलोनी, इन्दौर तव्हांखे कुर्बादती कोठ आहे', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/24/2023 7:22', 1),
(62, 'यादि डाहिर जी', 'साहित्य', 'Hybrid', '', '17-Jun-23', '17-Jun-23', '7:00 PM', '9:00 PM', 'Free', '', 'स्वामी प्रीतमदास सभागृह,इन्दौर', 'सिन्धी कॉलोनी, इन्दौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'मेरी हर साँस में बसती है वतन की ख़ुशबू मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, नर्मदापुरम द्वारा सिलसिला एवं तलाशे जौहर स्व.दर्द होशंगाबादी एवं स्व. शेर सिंह सोलंकी की स्मृति में स्मरण एवं रचनापाठ रविवार, 17 जून 2023 पत्रकार भवन, इटारसी तलाशे जौहर : शाम 4:00 बजे एवं सिलसिला: शाम 6:OO बजे विशिष्ट आमंत्रित वक्ता एवं शायर आबिद काज़मी भोपाल, सलीम सरमद भोपाल सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर शाहिद सिरोंजवी( पथरोटा), सतीश शमी(पथरोटा), ज़फ़रुलाह ख़ान(इटारसी) ममता बाजपेयी(ईटारसी), जलज शर्मा (सोहागपुर), फ़हीम दानिश (नर्मदापुरम ),हिमांशु हार्दिक (नर्मदापुरम), पवन सराठे (नर्मदापुरम),संपत थोटे(नर्मदापुरम), सुनील भिलाला(सिवनी मालवा), विनोद कुशवाहा(इटारसी), रामकिशोर नाविक(इटारसी) ज़िला समन्वयक: सौरभ सूर्य आप सभी सादर साग्रह आमंत्रित हैं डॉ नुसरत मेहदी निदेशक', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '6/23/2023 17:15', 1),
(63, 'स्मरण एवं रचना पाठ', 'अन्य', 'Other', '', '17-Jun-23', '17-Jun-23', '4:00 PM', '8:00 PM', 'Free', '', 'पत्रकार भवन, इटारसी', 'पत्रकार भवन इटारसी', 'Madhya Pradesh', 'Hoshangabad', 'Narmadapuram', '', '', '', '', '', '', 'मेरी हर साँस में बसती है वतन की ख़ुशबू मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, नर्मदापुरम द्वारा सिलसिला एवं तलाशे जौहर स्व.दर्द होशंगाबादी एवं स्व. शेर सिंह सोलंकी की स्मृति में स्मरण एवं रचनापाठ रविवार, 17 जून 2023 पत्रकार भवन, इटारसी तलाशे जौहर : शाम 4:00 बजे एवं सिलसिला: शाम 6:OO बजे विशिष्ट आमंत्रित वक्ता एवं शायर आबिद काज़मी भोपाल, सलीम सरमद भोपाल सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर शाहिद सिरोंजवी( पथरोटा), सतीश शमी(पथरोटा), ज़फ़रुलाह ख़ान(इटारसी) ममता बाजपेयी(ईटारसी), जलज शर्मा (सोहागपुर), फ़हीम दानिश (नर्मदापुरम ),हिमांशु हार्दिक (नर्मदापुरम), पवन सराठे (नर्मदापुरम),संपत थोटे(नर्मदापुरम), सुनील भिलाला(सिवनी मालवा), विनोद कुशवाहा(इटारसी), रामकिशोर नाविक(इटारसी) ज़िला समन्वयक: सौरभ सूर्य आप सभी सादर साग्रह आमंत्रित हैं डॉ नुसरत मेहदी निदेशक', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(64, 'स्मरण एवं रचना पाठ', 'अन्य', 'Other', '', '17-Jun-23', '17-Jun-23', '4:00 PM', '8:00 PM', 'Free', '', 'पत्रकार भवन, इटारसी', 'पत्रकार भवन इटारसी', 'Madhya Pradesh', 'Hoshangabad', 'Narmadapuram', '', '', '', '', '', '', 'गोस्वामी तुलसीदास समारोह (16—20 जून) अंतर्गत 16 जून, 2023 सायं 7:00 बजे मंगलाचरण गायिका सुश्री संगीता गोस्वामी एवं साथी कलाकारों द्वारा गोस्वामी तुलसीदास की रचनाओं का गायन भारत भवन का आयोजन प्रवेश निःशुल्क आप सभी आग्रहपूर्वक आमंत्रित हैं', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(65, 'गोस्वामी तुलसीदास समारोह', 'सुगम संगीत', 'Hybrid', '', '16-Jun-23', '20-Jun-23', '7:00 PM', '9:00 PM', 'Free', '', 'भारत भवन', 'भारत भवन', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', '', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1);
INSERT INTO `programs` (`id`, `program_name`, `program_category`, `program_type`, `program_link`, `starting_date`, `end_date`, `starting_time`, `end_time`, `entry_type`, `chief_guest`, `venu`, `address`, `state`, `district`, `city`, `pincode`, `profile_img1`, `profile_img2`, `profile_img3`, `profile_img4`, `date_of_email`, `about`, `department_by`, `created_at`, `updated_at`, `status`) VALUES
(66, 'गोस्‍वामी तुलसीदास समारोह', 'अन्य', 'Other', 'https://youtube.com/live/2ZcRlzKld8w', '16-Jun-23', '20-Jun-23', '6:30 PM', '10:00 PM', 'Free', '', 'भारत भवन', 'शामला हिल्‍स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग, भोपाल द्वारा महाकवि प्रदीप की स्मृति में ‘व्याख्यान एवं रचनापाठ’ दिनांक 15 जून, 2023 को सायं 7.00 बजे एम.आई.एम.टी. काॅलेज, पुलिस लाइन, स्टेशन रोड, नरसिंहपुर (म.प्र.) में आयोजित है। कार्यक्रम के प्रथम सत्र की अध्यक्षता वरिष्ठ समाजसेवी श्री मैथिली शरण तिवारी-नरसिंहपुर करेंगे। साथ ही साहित्यकार एवं कथावाचक श्री अभिनेष अटल-जबलपुर एवं श्रीमती अराधना दुबे-नरसिंहपुर का व्याख्यान होगा। कार्यक्रम के द्वितीय सत्र में डाॅ. सुधीर सिंघई-नरसिंहपुर, सुश्री रूपाली सक्सेना-भोपाल, डाॅ. इंदु सिंह-नरसिंहपुर, सुश्री सरला मिश्रा-दिल्ली, श्री विवेक सक्सेना-नरसिंहपुर, श्री पवन सराठे-इटारसी, श्री सत्येन्द्र धाकड़-विदिशा एवं सुश्री हेमलता दाहिया-रीवा अपनी-अपनी रचनाओं का पाठ करेंगे। कार्यक्रम के स्थानीय संयोजक डाॅ. अशोक कुमार गर्ग हैं। इस गरिमामय आयोजन में आप सभी की उपस्थिति सादर प्रार्थनीय है। डाॅ. विकास दवे-निदेशक साहित्य अकादमी, भोपाल', 'भारत भवन', '0000-00-00 00:00:00', '6/16/2023 18:50', 1),
(67, 'महाकवि प्रदीप स्मृति समारोह', 'साहित्य', 'Other', '', '15-Jun-23', '15-Jun-23', '7:00 PM', '11:00 PM', 'Free', '', 'एम.आई.एम.टी. काॅलेज', 'एम.आई.एम.टी. काॅलेज, पुलिस लाइन, स्टेशन रोड, नरसिंहपुर (म.प्र.)', 'Madhya Pradesh', 'Narsinghpur', 'narsinghpur', '', '', '', '', '', '', 'शैव ज्ञान परंपराओं से उद्भूत कलाओं पर एकाग्र साप्ताहित श्रंखला अनादि के अन्ततर्गत शिव केन्द्रित स्तुति गायन की प्रस्तुति उज्जैन के कलाकार श्री सुन्दरलाल मावलीय एवं साथियों द्वारा त्रिवेणी संग्रहालय परिसर में होगी ।', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(68, 'अनादि श्रंखला', 'लोक एवं जनजातीय', 'Other', '', '11-Jun-23', '11-Jun-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'जयसिंहपुरा, महाकाल लोक', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'ऐसा कुछ कर के चलो याँ कि बहुत याद रहो (मीर) मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, शाजापुर एवं आगर मालवा द्वारा सिलसिला एवं तलाशे जौहर स्व. चाँदमल जी राम की स्मृति में स्मृति प्रसंग एवं रचनापाठ रविवार, 11 जून 2023 जिला शिक्षा अधिकारी कार्यालय सभागार शहीद पार्क के पास ए. बी. रोड शाजापुर तलाशे जौहर : दोपहर 5:00 बजे एवं सिलसिला : शाम 7 बजे विशिष्ट आमंत्रित वक्ता एवं शायर हमीद गौहर उज्जैन, साजिद हाशमी राजगढ़ सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर बेतकल्लुफ़ शाजापुरी (शाजापुर), मौलाना अब्दुस समद (शाजापुर), साजिद वारसी (मिरकला), पंकज पलाश (मोमन बड़ोदिया), हनीफ राही (शाजापुर), मशहूर शाजापुरी (शाजापुर), पुरुषोत्तम चन्द्रवंशी (शाजापुर), चिंटू आग़ा (मगरिया), अनुराग अर्श (नवीन नगर), अर्पित शर्मा (शाजापुर) समन्वयक: अमन जादौन, जलील मुल्तानी आप सभी सादर साग्रह आमंत्रित है डॉ नुसरत मेहदी निदेशक', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(69, 'स्मृति प्रसंग एवं रचना पाठ', 'अन्य', 'Other', '', '11-Jun-23', '11-Jun-23', '5:00 PM', '9:00 PM', 'Free', '', 'ज़िला शिक्षा अधिकारी कार्यालय, शाजापुर', 'ज़िला शिक्षा अधिकारी कार्यालय, शाजापुर', 'Madhya Pradesh', 'Shajapur', 'Shajapur', '', '', '', '', '', '', 'उल्लास बच्चों के लिए ग्रीष्मकालीन चित्रांकन शिविर 11 से 25 जून, 2023 प्रतिदिन दोपहर 12 से 3 बजे तक प्रशिक्षक भूरीबाई भील चित्रकार नर्मदा प्रसाद तेकाम गोण्ड चित्रकार पंजीयन हेतु लिंक गैलरी मैं लिंक उपलब्ध है l 8 से 14 वर्ष की आयु के बच्चों के लिए (सीमित संख्या में) सोमवार का अवकाश रहेगा. मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '6/10/2023 20:52', 1),
(70, 'उल्लास', 'लोक एवं जनजातीय', 'Training', '', '11-Jun-23', '25-Jun-23', '12:00 PM', '3:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'II देशज II बुन्देली लोक गीत एवं गुदुमबजा नृत्य शंजू शबनम एवं साथी - चंद्रनगर से एवं कमलेश प्रसाद एवं साथी सागर से नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/10/2023 20:57', 1),
(71, 'II देशज II 11.06.2023', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/live/HESV0iY9DE4?feature=s', '11-Jun-23', '11-Jun-23', '7:00 PM', '9:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', '10 साल ऐं इन खां वडी उमिरि जे बारनि ऐं वडनि लाइ भारतीय सिन्धू सभा ऐं सिंधी समजा, टीकमगढ़ जे सहयोग सां सिन्धी बोली, सिन्धी गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारीअ लाइ शिविर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(72, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '10-Jun-23', '26-Jun-23', '6:00 PM', '8:00 PM', 'Free', '', 'सिन्धी गुरुद्वारा, टीकमगढ़', 'सिविल लाईन रोड, टीकमगढ़', 'Madhya Pradesh', 'Tikamgarh', 'Tikamgadh', '', '', '', '', '', '', 'राह में भी दीया रख दिया कीजिए (शांति सबा) मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग के तत्त्वावधान में ज़िला अदब गोशा, धार द्वारा सिलसिला एवं तलाशे जौहर के अन्तर्गत स्व.तबस्सुम धारवी और स्व.शांति सबा की स्मृति में स्मरण एवं रचनापाठ शनिवार, 10 जून 2023 स्थान: विक्रम ज्ञान मंदिर, घोड़ा चौपाटी, धार में तलाशे जौहर : दोपहर 3:00 बजे एवं सिलसिला: शाम 7:OO बजे आयोजित है। विशिष्ट आमंत्रित वक्ता एवं शायर यूसुफ़ मंसूरी इंदौर, अब्दुल सलाम खोकर रतलाम, मुजावर मालेगांवी, मालेगांव सिलसिला में आमंत्रित स्थानीय वक्ता एवं शायर पराग अग्रवाल (धार(, श्रीकांत द्विवेदी (धार), श्रीवल्लभ विजयवर्गीय (धार), नज़र धारवी(धार), कैलाश बंसल (धार), इसरार धारवी (धार), सलाम धारवी (धार ),अकरम धारवी (धार), दीपेन्द्र शर्मा(धार), विजय शर्मा (खलघाट), अपूर्व शुक्ला (उमर्बन),पंकज प्रसून (मांडव), डॉ. लोकेश जड़िया(नागदा), धीरज शर्मा (नालछा) ज़िला समन्वयक: अनिता मुकाती आप सभी सादर साग्रह आमंत्रित हैं डॉ नुसरत मेहदी ', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(73, 'सिलसिला एवं तलाशे जौहर', 'अन्य', 'Other', '', '10-Jun-23', '10-Jun-23', '3:00 PM', '10:00 PM', 'Free', '', 'विक्रम ज्ञान मन्दिर, घोड़ा चौपाटी, धार', 'विक्रम ज्ञान मन्दिर, घोड़ा चौपाटी, धार', 'Madhya Pradesh', 'Dhar', 'dhar', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद्, मध्यप्रदेश शासन संस्कृति विभाग, भोपाल द्वारा चन्द्रसेन विराट की स्मृति में ‘व्याख्यान एवं रचनापाठ’ दिनांक 9 जून, 2023 को सायं 7.00 बजे मध्यभारत हिन्दी साहित्य समिति, रवीन्द्रनाथ टैगोर मार्ग, इंदौर (म.प्र.) में आयोजित है। कार्यक्रम के प्रथम सत्र की अध्यक्षता वरिष्ठ साहित्यकार श्री रामकिशन सोमानी-इंदौर, मुख्य अतिथि वरिष्ठ साहित्यकार श्री प्रभु त्रिवेदी-इंदौर होंगे। साथ ही वरिष्ठ आलोचक श्री राकेश शर्मा-इंदौर का व्याख्यान होगा। कार्यक्रम के द्वितीय सत्र में श्री राहुल शर्मा-उज्जैन, श्री सुमित सिंह-विदिशा, श्री ध्रुव शर्मा-गंजबासौदा, श्री हिमांशु भावसार-झाबुआ, श्री अतुल दवे-इंदौर, श्री सुभाष गौरव-इंदौर एवं सुश्री दामिनी ठाकुर-इंदौर अपनी-अपनी रचनाओं का पाठ करेंगे। कार्यक्रम के स्थानीय संयोजक वरिष्ठ गीतकार श्री गिरेन्द्र सिंह भदौरिया हैं। इस गरिमामय आयोजन में आप सभी की उपस्थिति सादर प्रार्थनीय है। डॉ. विकास दवे निदेशक साहित्य अकादमी, भोपाल', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(74, 'चन्द्रसेन विराट स्मृति समारोह', 'साहित्य', 'Other', '', '9-Jun-23', '9-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'मध्यभारत हिन्दी साहित्य समिति, इंदौर (म.प्र.)', 'मध्यभारत हिन्दी साहित्य समिति, रवीन्द्रनाथ टैगोर मार्ग, इंदौर (म.प्र.)', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'धीरज नावानी मित्र मंडल, बुरहानपुर जे सहयोग सां सिन्धी बोली, सिन्धी गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारीअ लाइ शिविर', 'साहित्य अकादमी', '0000-00-00 00:00:00', '6/8/2023 8:38', 1),
(75, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '8-Jun-23', '22-Jun-23', '5:00 PM', '6:00 PM', 'Free', '', 'अर्वाचीन इंडिया स्कूल, बुरहानपुर', 'अर्वाचीन इंडिया स्कूल, बुरहानपुर', 'Madhya Pradesh', 'Burhanpur', 'Burhanpur', '', '', '', '', '', '', 'वनवासी लीला 7-9 जून 2023, सायं 7.00 बजे से मठ मंदिर मैदान, जिला- सिवनी श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, सिवनी', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(76, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '7-Jun-23', '9-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'मठ मंदिर मैदान, जिला- सिवनी', 'मठ मंदिर मैदान, जिला- सिवनी', 'Madhya Pradesh', 'Seoni', 'Seoni', '', '', '', '', '', '', 'वनवासी लीला 7-9 जून 2023, सायं 7.00 बजे से नेहरू स्टेडियम, जिला- हरदा श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, हरदा', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(77, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '7-Jun-23', '9-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'नेहरू स्टेडियम, जिला- हरदा', 'नेहरू स्टेडियम, जिला- हरदा', 'Madhya Pradesh', 'Harda', 'Harda', '', '', '', '', '', '', 'मध्यप्रदेश जनजातीय संग्रहालय स्थापना के दसवें वर्ष का समारोह 6 से 10 जून, 2023 • सायं 7.00 बजे से श्यामला हिल्स, भोपाल दोपहर 12.00 बजे से शिल्प मेला ,विविध माध्यमों के शिल्पों का प्रदर्शन सह विक्रय ,स्वाद जनजातीय देशज व्यंजन l मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(78, 'मध्यप्रदेश जनजातीय संग्रहालय स्थापना के दसवें वर्ष का समारोह', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/Mthj9VlUUSs?feature=share', '6-Jun-23', '10-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय', 'मध्यप्रदेश जनजातीय संग्रहालय', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'पूज्य खैरपुर सिंध पंचायत, जबलपुर जे सहयोग सां सिन्धी बोली, सिन्धी गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारीअ लाइ शिविर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/10/2023 13:13', 1),
(79, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '6-Jun-23', '17-Jun-23', '9:00 AM', '10:30 AM', 'Free', '', 'श्री झूलेलाल मंदिर, जबलपुर', 'भरतीपुर जबलपुर', 'Madhya Pradesh', 'Jabalpur', 'Jabalpur', '', '', '', '', '', '', 'वनवासी लीला 6-8 जून 2023, सायं 7.00 बजे से स्टेडियम ग्राउण्ड, जिला- बुरहानपुर श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, बुरहानपुर', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(80, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '6-Jun-23', '8-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'स्टेडियम ग्राउण्ड, जिला- बुरहानपुर', 'स्टेडियम ग्राउण्ड, जिला- बुरहानपुर', 'Madhya Pradesh', 'Burhanpur', 'Burhanpur', '', '', '', '', '', '', 'सिन्धी बोली, सिन्धी गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारीअ लाइ शिविर 10 साल ऐं इन खां वडी उमिरि जे बारनि ऐं वडनि लाइ भारतीय सिन्धू सभा विदिशा जे सहयोग सां', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(81, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '6-Jun-23', '16-Jun-23', '10:00 AM', '11:30 AM', 'Free', '', 'भगवान श्री झूलेलाल मंदिर, विदिशा', 'भगवान श्री झूलेलाल मंदिर, विदिशा', 'Madhya Pradesh', 'Vidisha', 'Vidisha', '', '', '', '', '', '', 'सिन्धी बोली, गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारी लाइ शिविर', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(82, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '5-Jun-23', '14-Jun-23', '6:00 PM', '7:00 PM', 'Free', '', 'ओंम अनिका सामाजिक सांस्कृतिक संस्था उज्जैन', 'सिंधी कॉलोनी, झूलेलाल बेकरी के सामने', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'मध्य प्रदेश उर्दू अकादमी मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग द्वारा अलंकरण समारोह एवं संगीत संध्या दिनाँक : 5 जून, 2023, सायं 4.00 बजे स्थान :राज्य संग्रहालय, श्यामला हिल्स, भोपाल में मान. सुश्री उषा ठाकुर मंत्री-संस्कृति, पर्यटन, धार्मिक एवं धर्मस्व मध्यप्रदेश शासन के मुख्य आतिथ्य में एवं श्री शिव शेखर शुक्ला प्रमुख सचिव-संस्कृति एवं पर्यटन विभाग तथा श्री अदिति कुमार त्रिपाठी संचालक-संस्कृति की विशेष उपस्थिति में आयोजित है इस अवसर पर सायं 4.00 बजे मोहम्मद अय्यूब गफूर ग़ज़लों की प्रस्तुति देगे । आप सभी सादर साग्रह आमंत्रित हैं। डॉ. नुसरत मेहदी निदेशक', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(83, 'अलंकरण समारोह एवं संगीत संध्या', 'पुरुस्कार एवं अलंकरण', 'Lecture', '', '5-Jun-23', '5-Jun-23', '4:00 PM', '8:00 PM', 'Free', '', 'राज्य संग्रहालय सभागार, श्यामला हिल्स, भोपाल', 'राज्य संग्रहालय, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'मस्तीअ जी पाठशाला सिन्धी बोली, सिन्धी गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारीअ लाइ शिविर झूलेलाल सेवा मंडल, सिंधी समाज शहडोल जे सहयोग सां', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '', 1),
(84, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '5-Jun-23', '16-Jun-23', '9:30 AM', '11:00 AM', 'Free', '', 'झूलेलाल मंदिर शहडोल', 'झूलेलाल मंदिर शहडोल', 'Madhya Pradesh', 'Shahdol', 'Shahdol', '', '', '', '', '', '', 'वनवासी लीला 5-7 जून 2023, सायं 7.00 बजे से नरसिंह मंदिर परिसर, जिला- नरसिंहपुर श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, शाजापुर', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(85, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '5-Jun-23', '7-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'नरसिंह मंदिर परिसर, जिला- नरसिंहपुर', 'नरसिंह मंदिर परिसर, जिला- नरसिंहपुर', 'Madhya Pradesh', 'Narsinghpur', 'narsinghpur', '', '', '', '', '', '', 'वर्षगाँठ का लोकोत्सव 5 से 9 जून 2023 भोपाल के विभिन्न स्थानों पर जनजातीय नृत्य प्रस्तुतियाँ खानूगांव चौराहा, लालघाटी चौराहा, बैरागढ़ ईदगाह हिल्स, गोवन्दिपुरा, पिपलानी, अयोध्या नगर आनन्द नगर, न्यू मार्केट, नेहरू नगर, नीलबड़, जवाहर चौक 10 नम्बर मार्केट, शाहपुरा लेक, कोलार रोड, नवापुरा जिन्सी चौक, अशोका गार्डन, एम.पी. नगर, शिवाजी नगर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(86, 'मध्यप्रदेश जनजातीय संग्रहालय वर्षगाँठ का लोकोत्सव', 'लोक एवं जनजातीय', 'Other', '', '5-Jun-23', '9-Jun-23', '12:00 PM', '6:00 PM', 'Free', '', 'bhopal', 'bhopal', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'उज्‍जैन में आगामी 5 जून 2023 को स्वर्ण जयंती सभागार, विक्रम विश्वविद्यालय में शाम 4 बजे \'\'प्राचीन भारत में जल नियोजन और उज्‍जैन का महत्‍व\'\' विषय पर भारत विक्रम व्‍याख्‍यानमाला का आयोजन किया जा रहा है। महाराजा विक्रमादित्‍य शोधपीठ द्वारा आयोजित इस कार्यक्रम में माननीय डॉ. मोहन यादव, उच्‍च शिक्षा मंत्री मध्यप्रदेश शासन मुख्‍य अतिथि के तौर पर उपस्थित रहेंगे। जबकि विषय विशेषज्ञ के रूप में जाने माने विज्ञानी, संस्‍कृतिविद् डॉ. प्रशांत पोल सम्मिलित होंगे। कार्यक्रम की अध्‍यक्षता अश्विनी शोध संस्‍थान के प्रमुख डॉ. आर.सी. ठाकुर करेंगे। महाराजा विक्रमादित्‍य शोधपीठ के निदेशक श्रीराम तिवारी ने बताया कि आज जल संकट भारत ही नहीं पूरी दुनिया की समस्‍या बनती जा रही है। जलवायु परिवर्तन ने समाज के सामने नया संकट खड़ा कर दिया है। कहीं अकाल तो कहीं बाढ़ आ रही है। बेमौसम बरसात और सूखा आज आम हो गया है। ऐसी स्थिति में हमें पुन: अपने प्राचीन इतिहास को देखने और उस समय के प्रयोगों को समझने की जरूरत है। 5 जून को \'\'प्राचीन भारत में जल नियोजन और उज्‍जैन का महत्‍व\'\' विषय पर एक दिवसीय विचार विमर्श का आयोजन किया जा रहा है। जिसमें जाने माने संस्‍कृतिविद डॉ. प्रशांत पोल अपनी बात रखेंगे।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(87, 'उज्‍जैन का महत्‍व\'\' विषय पर भारत विक्रम व्‍याख्‍यानमाला', 'अन्य', 'Hybrid', 'https://www.youtube.com/watch?v=MO1COQY-nvo', '5-Jun-23', '5-Jun-23', '4:00 PM', '8:00 PM', 'Free', '', 'स्वर्ण जयंती सभागार, विक्रम विश्वविद्यालय', 'स्वर्ण जयंती सभागार, विक्रम विश्वविद्यालय', 'Madhya Pradesh', '', 'Ujjain', '', '', '', '', '', '', 'शैव ज्ञान परंपरा से उद्भूत कलाओ पर एकाग्र साप्ताहिक श्रंखला \'अनादि\' के अन्तर्गत आगामी 04 जून 2023 रविवार को कथक नृत्य प्रस्तुति \'शिवार्पणम्\' का मंचन त्रिवेणी संग्रहालय के परिसर में होगा ।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '6/5/2023 15:51', 1),
(88, 'अनादि श्रंखला', 'लोक एवं जनजातीय', 'Other', '', '4-Jun-23', '4-Jun-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय', 'जयसिंहपुरा, महाकाल लोक', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'वनवासी लीला 4-6 जून 2023, सायं 7.00 बजे से जागृति पार्क माधवनगर, जिला- कटनी श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, कटनी', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(89, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '4-Jun-23', '6-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'जागृति पार्क माधवनगर, जिला- कटनी', 'जागृति पार्क माधवनगर, जिला- कटनी', 'Madhya Pradesh', 'Katni', 'katni', '', '', '', '', '', '', 'वनवासी लीला 4-6 जून 2023, सायं 7.00 बजे से परेड ग्राउंड , जिला - देवास श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, देवास', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(90, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '4-Jun-23', '6-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'परेड ग्राउंड , जिला - देवास', 'परेड ग्राउंड , जिला - देवास', 'Madhya Pradesh', 'Dewas', 'Dewas', '', '', '', '', '', '', 'संत कबीर जी की जयंती के अवसर पर श्री गुरू ग्रंथ साहिब में संत भगत कबीर जी की बाणी पर केन्द्रित *जीवन दर्शन* कथा व्याख्यान एवं कीर्तन का आयोजन दिनांक -4 जून 2023 स्थान - गुरू नानक गुरूद्वारा जैन मंदिर संतर, मुरार (ग्वालियर) समय 9.00 am', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(91, 'जीवन दर्शन', 'अन्य', 'Other', '', '4-Jun-23', '4-Jun-23', '9:00 AM', '12:00 PM', 'Free', '', 'गुरू नानक गुरूद्वारा जैन मंदिर संतर, मुरार (ग्वालियर)', 'गुरू नानक गुरूद्वारा जैन मंदिर संतर, मुरार (ग्वालियर)', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', 'II देशज II बुन्देली लोक गीत एवं ढिमरियाई नृत्य राम प्रसाद मिश्र एवं साथी - छतरपुर से एवं लीलाधर रैकवार एवं साथी सागर से नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'पंजाबी साहित्य अकादमी', '0000-00-00 00:00:00', '6/3/2023 12:41', 1),
(92, 'II देशज II 04.06.2023', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/m7WpFnaTsLE?feature=share', '4-Jun-23', '4-Jun-23', '7:00 PM', '9:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'निर्गुण गान निराकार की संगीत उपासना एकाग्र 4 से 6 जून 2023 • सायं 7.30 बजे संत सिंगाजी धाम, खण्डवा मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन • सहयोग - जिला प्रशासन, खण्डवा', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(93, 'निर्गुण गान', 'लोक एवं जनजातीय', 'Other', '', '4-Jun-23', '6-Jun-23', '7:30 PM', '10:00 PM', 'Free', '', 'संत सिंगाजी धाम, खण्डवा', 'संत सिंगाजी धाम, खण्डवा', 'Madhya Pradesh', 'Khandwa', 'Khandwa', '', '', '', '', '', '', 'मस्तीअ जी पाठशाला सिन्धी बोली, गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारी लाइ शिविर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '6/5/2023 12:37', 1),
(94, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '3-Jun-23', '13-Jun-23', '5:30 PM', '7:00 PM', 'Free', '', 'श्री झूलेलाल हाईस्‍कूल, सागर', 'श्री झूलेलाल हाईस्‍कूल, सागर', 'Madhya Pradesh', 'Sagar', 'Sagar', '', '', '', '', '', '', 'वनवासी लीला 3-5 जून 2023, सायं 7.00 बजे से शासकीय उत्कृष्ट उच्चतर माध्यमिक विद्यालय, बस स्टैंड, जिला शाजापुर श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, शाजापुर', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(95, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '3-Jun-23', '5-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'शासकीय उत्कृष्ट उच्चतर माध्यमिक विद्यालय, बस स्टैंड, जिला शाजापुर', 'शासकीय उत्कृष्ट उच्चतर माध्यमिक विद्यालय, बस स्टैंड, जिला शाजापुर', 'Madhya Pradesh', 'Shajapur', 'Shajapur', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद, मध्यप्रदेश शासन, संस्कृति विभाग द्वारा दिनकर सोनवलकर स्मृति समारोह में दिनांक 3 जून, 2023 को सायं 7.00 बजे सरस्वती विद्या मंदिर, जावरा, जिला-रतलाम (म.प्र.) में व्याख्यान और रचनापाठ होगा। समारोह की अध्यक्षता डाॅ. मुरलीधर चांदनीवाला-रतलाम एवं व्याख्यान डाॅ. प्रकाश उपाध्याय-रतलाम देंगे। रचनापाठ: श्री दिनेश कुमार श्रीवास्तव-उज्जैन, श्री जुझार सिंह भाटी-रतलाम, श्री नंदकिशोर अकेला-आलोट, श्री राजेन्द्र श्रोत्रिय-जावरा, डाॅ. प्रियंका नाग-उज्जैन, श्री कुलदीप रंगीला-देवास और श्री यशपाल सिंह यश-गुड़गांव करेंगे। श्री कारूलाल जमड़ा कार्यक्रम के स्थानीय संयोजक होंगे। इस अवसर पर आप सभी सादर साग्रह आमंत्रित हैं।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(96, 'दिनकर सोनवलकर स्मृति समारोह', 'साहित्य', 'Other', '', '3-Jun-23', '3-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'जावरा', 'सरस्वती विद्या मंदिर, जावरा, जिला-रतलाम (म.प्र.)', 'Madhya Pradesh', 'Ratlam', 'जावरा, जिला-रतलाम (म.प्र.)', '', '', '', '', '', '', 'वनवासी लीला 3-5 जून 2023, सायं 7.00 बजे से मंगल भवन परिसर, जिला- उमरिया श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, उमरिया', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(97, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '3-Jun-23', '5-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'मंगल भवन परिसर, जिला- उमरिया', 'मंगल भवन परिसर, जिला- उमरिया', 'Madhya Pradesh', 'Umaria', 'Umaria', '', '', '', '', '', '', 'शलाका 38 गोंड समुदाय की चित्रकार रजनी धुर्वे के चित्रों की प्रदर्शनी सह विक्रय लिखन्दरा प्रदर्शनी दीर्घा 3 से 30 जून , 2023 मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(98, 'शलाका-38', 'लोक एवं जनजातीय', 'Other', '', '3-Jun-23', '30-Jun-23', '12:00 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'खजुराहो । आदिवर्त जनजातीय एवं लोक कला राज्य संग्रहालय द्वारा प्रदेश के जनजातीय चित्रकारों को चित्र प्रदर्शनी और चित्रों की बिक्री के लिये सार्थक मंच उपलब्ध कराने की दृष्टि से प्रतिमाह \'लिखन्दरा प्रदर्शनी दीर्घा\' में किसी एक जनजातीय चित्रकार की प्रदर्शनी सह विक्रय का संयोजन शलाका नाम से किया जाता है। इसी क्रम में 03 जून,2023 से गोंड समुदाय की चित्रकार सुश्री रजनी धुर्वे के चित्रों की प्रदर्शनी सह-विक्रय का संयोजन किया जा रहा है। 38वीं शलाका चित्र प्रदर्शनी 30 जून, 2023 तक निरंतर रहेगी। वर्ष 1991 में जन्मी सुश्री रजनी धुर्वे गोण्ड समुदाय की युवा चित्रकार हैं। ग्राम-सोनपुरी, जिला-डिण्डौरी (मध्यप्रदेश) में आपका जन्म हुआ। आपके माता-पिता मजदूरी करते थे। भाई-बहनों में सबसे छोटी रजनी का बचपन प्रकृति के सान्निध्य में गुजरा।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(99, 'शलाका-3', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Other', '', '3-Jun-23', '30-Jun-23', '12:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'वनवासी लीला 2-4 जून 2023, सायं 7.00 बजे से इंटक ग्राउण्ड, हजीरा, जिला- ग्वालियर श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन,ग्वालियर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(100, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '2-Jun-23', '4-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'इंटक ग्राउण्ड, हजीरा, जिला- ग्वालियर', 'इंटक ग्राउण्ड, हजीरा, जिला- ग्वालियर', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', 'वनवासी लीला 2-4 जून 2023, सायं 7.00 बजे से रामलीला मैदान, जिला- सिंगरौली श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, सिंगरौली', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '5/31/2023 12:55', 1),
(101, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '2-Jun-23', '4-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'रामलीला मैदान, जिला- सिंगरौली', 'रामलीला मैदान, जिला- सिंगरौली', 'Madhya Pradesh', 'Singrauli', 'singrauli', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद, मध्यप्रदेश शासन, संस्कृति विभाग द्वारा भावसार बा स्मृति समारोह में दिनांक 2 जून, 2023 को सायं 7.00 बजे जैन मांगलिक भवन, गणेश देवली, खाचरोद, जिला-उज्जैन (म.प्र.) में ‘रेल जाती री...’ विषय पर व्याख्यान और रचनापाठ होगा। व्याख्यान की अध्यक्षता श्री शिव चैरसिया-उज्जैन एवं व्याख्यान श्री मनोहर दुबे-इंदौर करेंगे। रचनापाठ: श्री नारायण निडर-खाचरोद, श्री विमल प्रकाश चतुर्वेदी ‘चकोर’-इंदौर, श्री कैलाश सोनी ‘सार्थक’-नागदा, सुश्री अनीता मुकाती-धार, श्री पंकज प्रसून-माण्डू, श्री अमन जादोन-शाजापुर, श्री कमलेश दवे-नागदा, श्री शुभम कुमावत-सांवेर, श्री कल्पेश वाघ-खाचरोद और श्री पंकज सिसोदिया-खाचरोद करेंगे। श्री शंकर लाल गुलिया, कार्यक्रम के स्थानीय संयोजक होंगे।इस अवसर पर आप सभी सादर साग्रह आमंत्रित हैं।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(102, 'भावसार बा स्मृति समारोह', 'साहित्य', 'Other', '', '2-Jun-23', '2-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'खाचरोद', 'जैन मांगलिक भवन, गणेश देवली, खाचरोद, जिला-उज्जैन (म.प्र.)', 'Madhya Pradesh', 'Ujjain', 'khachrod distt ujjain', '', '', '', '', '', '', 'सिन्धी बोली, गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारी लाइ शिविर', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(103, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '1-Jun-23', '12-Jun-23', '10:00 AM', '12:00 PM', 'Free', '', 'लाईफ लाइन स्‍कूल, संत हिरदाराम नगर, भोपाल', 'लाईफ लाइन स्‍कूल, संत हिरदाराम नगर, भोपाल', 'Madhya Pradesh', 'Bhopal', 'भोपाल', '', '', '', '', '', '', 'सिन्धी बोली, गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारी लाइ शिविर', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(104, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '1-Jun-23', '12-Jun-23', '10:00 AM', '11:00 AM', 'Free', '', 'किंडर बड्स स्कूल इन्दौर', 'किंडर बड्स स्कूल इन्दौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'वनवासी लीला 1-3 जून 2023, सायं 7.00 बजे से शासकीय उत्कृष्ट उच्चतर माध्यमिक विद्यालय क्र. १ जिला- सीधी श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, सीधी', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(105, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '1-Jun-23', '3-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'शासकीय उत्कृष्ट उच्चतर माध्यमिक विद्यालय क्र. १ जिला- सीधी', 'शासकीय उत्कृष्ट उच्चतर माध्यमिक विद्यालय क्र. १ जिला- सीधी', 'Madhya Pradesh', 'Sidhi', 'sidhi', '', '', '', '', '', '', '', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(106, 'बाल फि़ल्‍म समारोह', 'अन्य', 'Other', '', '1-Jun-23', '4-Jun-23', '7:00 PM', '9:00 PM', 'Free', '', 'भारत भवन', 'शामला हिल्‍स,', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'भोपाल स्थित भारत भवन में 1 से 4 जून, 2023 तक ‘‘बाल फिल्म समारोह’’ आयोजित होगा। दर्शकों के लिए शाम 7 बजे से मज़ेदार फिल्में दिखाई जाएंगी। 3 जून को शाम 6 बजे ‘‘बच्चों का सिनेमा’’ विषय पर विशेष सत्र भी होगा। इसमें श्री राजेश बादल जी वक्तव्य देंगे और प्रसिद्ध अभिनेता श्री रघुबीर यादव अध्यक्षता करेंगे। इस आयोजन में प्रवेश निःशुल्क है।', 'भारत भवन', '0000-00-00 00:00:00', '', 1),
(107, '‘‘बाल फिल्म समारोह', 'अन्य', 'Hybrid', '', '1-Jun-23', '4-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'भोपाल स्थित भारत भवन', 'भोपाल स्थित भारत भवन', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'वनवासी लीला 31 मई - 02 जून 2023, सायं 7.00 बजे से गाँधी उपवन (कंपनी गार्डन ) परिसर , आगर - मालवा श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, आगर - मालवा', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(108, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '31-May-23', '2-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'गाँधी उपवन (कंपनी गार्डन ) परिसर , आगर - मालवा', 'गाँधी उपवन (कंपनी गार्डन ) परिसर , आगर - मालवा', 'Madhya Pradesh', 'Agar Malwa', 'agar', '', '', '', '', '', '', 'वनवासी लीला 31 मई 2 जून 2023, सायं 7.00 बजे से टाउन हॉल प्रांगण, जिला- पन्ना श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, पन्ना', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(109, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '31-May-23', '2-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'टाउन हॉल प्रांगण, जिला- पन्ना', 'टाउन हॉल प्रांगण, जिला- पन्ना', 'Madhya Pradesh', 'Panna', 'panna', '', '', '', '', '', '', 'वनवासी लीला 30 मई - 01 जून 2023, सायं 7.00 बजे से तहसील ग्राउड , जिला - दमोह श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला - दमोह', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(110, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '30-May-23', '1-Jun-23', '7:00 PM', '10:00 PM', 'Free', '', 'तहसील ग्राउड , जिला - दमोह', 'तहसील ग्राउड , जिला - दमोह', 'Madhya Pradesh', 'Damoh', 'damoh', '', '', '', '', '', '', 'सिन्धी बोली, गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारी लाइ शिविर ग्वालियर में दो जगह शिविर सम्पन्न किया जा रहा है- हरदेवी भवन मकान नं 41,सखी विहार कॉलोनी ग्वालियर एवं शाम के समय भारतीयम विद्या पीठ, समाधिया कॉलोनी लश्कर ग्वालियर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(111, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '30-May-23', '10-Jun-23', '8:00 AM', '10:00 AM', 'Free', '', 'हरदेवी भवन ग्वालियर', 'मकान नं 41,सखी विहार कॉलोनी,ग्वालियर', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', 'देवी अहिल्याबाई जयंती पर्व को महेश्वर में दो दिवस 30 एवं 31 मई, 2023 को आयोजित किया जावेगा। इसके तहत प्रथम दिवस देवी अहिल्या घाट पर संध्या 7 बजे से पंडित गोकुलोत्सव महाराज, इन्दौर द्वारा शास्त्रीय गायन होगा, तत्पश्चात श्री हिमांशु वाजपेयी द्वारा किस्सागोई की प्रस्तुति दी जावेगी। दूसरे एवं अंतिम दिवस सुश्री यासमीन सिंह, भोपाल द्वारा शिवोहोम की प्रस्तुति दी जावेगी तथा अगली प्रस्तुति श्री अनिरुद्ध भोला, मुम्बई द्वारा सुगम संगीत की होगी। दया और धर्म की प्रतिमूर्ति के स्मरण पर्व में प्रवेश निःशुल्क होगा ।', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '5/27/2023 17:09', 1),
(112, 'देवी अहिल्याबाई जयंती पर्व', 'अन्य', 'Hybrid', 'https://www.youtube.com/watch?v=pqbRw30Ol4c', '30-May-23', '31-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'देवी अहिल्या घाट, महेश्वर', 'देवी अहिल्या घाट, महेश्वर', 'Madhya Pradesh', '', 'Maheshwar', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद, मध्यप्रदेश शासन, संस्कृति विभाग द्वारा अटल बिहारी वाजपेयी जी की स्मृति में दिनांक 29 मई, 2023 को सायं 7.00 बजे कला वीथिका, पड़ाव, ग्वालियर (म.प्र.) में \'काल के कपाल पर\' विषय पर व्याख्यान और रचनापाठ होगा। इस अवसर पर आप सभी सादर साग्रह आमंत्रित हैं। डॉ. विकास दवे निदेशक साहित्य अकादमी, भोपाल', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '5/31/2023 14:09', 1),
(113, 'अटल बिहारी वाजपेयी स्मृति समारोह', 'साहित्य', 'Other', '', '29-May-23', '29-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'कला वीथिका पड़ाव, ग्वालियर', 'पड़ाव, ग्वालियर', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', 'वनवासी लीला 29-31 मई 2023, सायं 7.00 बजे से पीटीसी ग्राउण्ड, जिला- सागर श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, सागर', 'साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(114, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '29-May-23', '31-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'पीटीसी ग्राउण्ड, जिला- सागर', 'पीटीसी ग्राउण्ड, जिला- सागर', 'Madhya Pradesh', 'Sagar', 'Sagar', '', '', '', '', '', '', 'वनवासी लीला 29-31 मई 2023, सायं 7.00 बजे से उत्कृष्ट विद्यालय परिसर , जिला - मंदसौर श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, मंदसौर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '5/26/2023 17:43', 1),
(115, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '29-May-23', '31-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'उत्कृष्ट विद्यालय परिसर , जिला - मंदसौर', 'उत्कृष्ट विद्यालय परिसर , जिला - मंदसौर', 'Madhya Pradesh', 'Mandsaur', 'Mandsaur', '', '', '', '', '', '', 'सिन्धी बोली, गीत, संत महापुरुषनि ऐं सिन्धू संस्कृति जी जानकारी लाइ शिविर', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(116, 'मस्तीअ जी पाठशाला', 'अन्य', 'Training', '', '29-May-23', '9-Jun-23', '9:00 AM', '10:00 AM', 'Free', '', 'सिन्धी पाठक मंच खण्डवा', 'हॉल टैगोर कॉलोनी,खण्डवा', 'Madhya Pradesh', 'Khandwa', 'Khandwa', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा जिला प्रशासन इन्दौर के सहयोग से पहली बार देवी अहिल्याबाई की जयंती अवसर पर भव्य समारोह का आयोजन होने जा रहा है। इसके तहत इन्दौर में दिनांक 29 मई से 31 मई, 2023 तक एवं महेश्वर में 30 एवं 31 मई, 2023 को देवी अहिल्याबाई जयंती पर्व आयोजित किया जावेगा। संचालक संस्कृति श्री अदिति कुमार त्रिपाठी ने बताया कि इंदौर में 29 मई को जाल सभागृह में संध्या 7 बजे से देवी अहिल्याबाई नगर गौरव सम्मान प्रदान किए जावेंगे। तत्पश्चात राष्ट्रीय कविता पाठ का आयोजन होगा, जिसमें कवयित्री सुश्री कविता तिवारी, लखनऊ का कविता पाठ होगा। कार्यक्रम में मुख्य अतिथि माननीय संस्कृति मंत्री सुश्री उषा ठाकुर होंगी। दूसरे दिवस 30 मई को रवीन्द्र नाट्यगृह में संध्या 7 बजे से ‘गाथा इंद्रपुर से इन्दौर’ महानाट्य का मंचन सुनील मतकर एवं सतीश मुंगरे के निर्देशन में होगा। तीसरे दिवस 31 मई को प्रातः 7 बजे से राजबाड़ा परिसर में आदरांजलि कार्यक्रम का आयोजन होगा, जिसके तहत भजन मंडली, बैंड, डमरू एवं शंख द्वारा देवी अहिल्याबाई को सांस्कृतिक आदरांजलि दी जावेगी।', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '5/29/2023 13:11', 1),
(117, 'देवी अहिल्याबाई जयंती पर्व', 'अन्य', 'Hybrid', '', '29-May-23', '31-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'रवीन्द्र नाट्यगृह,इन्दौर’', 'रवीन्द्र नाट्यगृह,इन्दौर’', 'Madhya Pradesh', '', 'Indore', '', '', '', '', '', '', 'पंजाबी गुरमुखी भाषा, पारम्परिक पंजाबी सांस्कृतिक गुरबाणी रागीय गायन की विधाओं पर केन्द्रित, प्रशिक्षण शिविर', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(118, 'ग्रीष्म कालीन प्रशिक्षण शिविर', 'अन्य', 'Training', '', '29-May-23', '7-Jun-23', '9:00 AM', '11:00 AM', 'Free', '', 'गुरूद्वारा हरगोबिन्द साहिब, प्रेमसर, परिसर श्योपुर', 'गुरूद्वारा हरगोबिन्द साहिब, प्रेमसर, परिसर श्योपुर', 'Madhya Pradesh', 'Sheopur', 'Sheopur', '', '', '', '', '', '', 'वनवासी लीला 28-30 मई 2023, सायं 7.00 बजे से वन परिसर, जिला रायसेन श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन • सहयोग - जिला प्रशासन, रायसेन', 'पंजाबी साहित्य अकादमी', '0000-00-00 00:00:00', '5/31/2023 17:59', 1),
(119, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '28-May-23', '30-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'वन परिसर, जिला रायसेन', 'वन परिसर, जिला रायसेन', 'Madhya Pradesh', 'Raisen', 'raisen', '', '', '', '', '', '', 'वनवासी लीला 28-30 मई 2023, सायं 7.00 बजे से श्रीनाथ गार्डन नीमच सिटी, जिला- नीमच श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, नीमच', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(120, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '28-May-23', '30-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'श्रीनाथ गार्डन नीमच सिटी, जिला- नीमच', 'श्रीनाथ गार्डन नीमच सिटी, जिला- नीमच', 'Madhya Pradesh', 'Neemuch', 'neemuch', '', '', '', '', '', '', 'II देशज II बुन्देली लोक गीत रामसिंह राय एवं साथी - छतरपुर नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(121, 'II देशज II', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/live/8oOrFrayNbQ?feature=s', '28-May-23', '28-May-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' मध्यप्रदेश जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'bypass road', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'त्रिवेणी कला संग्रहालय - उज्जैन द्वारा आयोजित शैव ज्ञान परम्परा से उद्भूत कलाओं पर एक्राग्र साप्ताहित श्रंखला अनादि के अन्तर्गत शिव स्तुति गायन की प्रस्तुति श्री रोहित चावरे एवं साथी कलाकारों द्वारा प्रस्तुत होगी ।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(122, 'अनादि', 'लोक एवं जनजातीय', 'Other', 'https://youtube.com/live/yCC0tOj9dc4?feature=share', '28-May-23', '28-May-23', '7:30 PM', '9:00 PM', 'Free', '', 'त्रिवेणी संग्रहालय - उज्जैन', 'त्रिवेणी कला संग्रहालय, जयसिंहपुरा महाकाल लोक', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'वनवासी लीला 27-29 मई 2023, सायं 7.00 बजे से रामलीला मेला ग्राउण्ड, जिला - विदिशा श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन • सहयोग - जिला प्रशासन, विदिशा', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '5/26/2023 15:19', 1),
(123, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '27-May-23', '29-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'रामलीला मेला ग्राउण्ड, जिला - विदिशा', 'रामलीला मेला ग्राउण्ड, जिला - विदिशा', 'Madhya Pradesh', 'Vidisha', 'Vidisha', '', '', '', '', '', '', 'भारत भवन में संवाद कार्यक्रम 26 मई: शाम 7 बजे: विचार सत्र विषय : भाषा और रचना की परस्‍परता वक्तव्य : सुश्री क्षमा कौल, सुश्री अव्दैता काला अध्यक्षता : श्री विजय मनोहर तिवारी 27 मई: शाम 7 बजे: विचार सत्र पाठ तथा वक्तव्य : सुश्री यशोधारा मिश्र का कहानी और रचना प्रक्रिया पर वक्तव्य अध्यक्षता : श्री गोविन्द मिश्र.', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(124, 'संवाद (शीर्षस्‍थ सर्जकों की रचनाधर्मिता की श्रृंखला)', 'साहित्य', 'Lecture', '', '26-May-23', '27-May-23', '7:00 PM', '9:00 PM', 'Free', '', 'भारत भवन', 'शामला हिल्‍स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'भोपाल स्थित भारत भवन में 26-27 मई, 2023 को ‘‘संवाद - शीर्षस्थ सर्जकों की रचनाधर्मिता की श्रृंख्ला’’ नामक कार्यक्रम आयोजित किया जा रहा है। यह आयोजन शाम को 7:00 बजे होगा, जिसमें विख्यात साहित्यकार रचना-पाठ करेंगे और वक्तव्य देंगे। आप रचनाकारों के विचारों से अवगत हो सकेंगे। इस दो दिवसीय रोचक कार्यक्रम में आप सादर आमंत्रित हैं।', 'भारत भवन', '0000-00-00 00:00:00', '', 1),
(125, 'संवाद (शीर्षस्‍थ सर्जकों की रचनाधर्मिता की श्रृंखला)', 'अन्य', 'Hybrid', '', '26-May-23', '27-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'भारत भवन, भोपाल', 'भारत भवन, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'वनवासी लीला 25-27 मई 2023, सायं 7.00 बजे से राजमहल, जिला - राजगढ़ श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, राजगढ़', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(126, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '25-May-23', '27-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'राजमहल, जिला - राजगढ़', 'राजमहल, जिला - राजगढ़', 'Madhya Pradesh', 'Rajgarh', 'rajgarh', '', '', '', '', '', '', 'मोर पहाड़ी उत्सव पारम्परिक कलाओं का समारोह 22 मई, 2023 सायं 7:30 बजे से ग्राम मोर पहाड़ी, जिला टीकमगढ़ लोक नृत्य श्री परमानन्द केवट एवं साथी सिरोज लोक गायन सुश्री पूर्णिमा चतुर्वेदी एवं साथी भोपाल सुगम संगीत श्री राजू बावरा एवं साथी आगरा मध्यप्रदेश शासन, संस्कृति विभाग एवं जिला प्रशासन, टीकमगढ़', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(127, 'मोर पहाड़ी उत्सव', 'अन्य', 'Hybrid', '', '22-May-23', '22-May-23', '7:00 PM', '9:00 PM', 'Free', '', 'ग्राम मोर पहाड़ी, जिला टीकमगढ़', 'ग्राम मोर पहाड़ी, जिला टीकमगढ़', 'Madhya Pradesh', '', 'Tikamgadh', '', '', '', '', '', '', 'विरासत महोत्सव पारम्परिक कलाओं का समारोह 22 मई, 2023 सायं 7:30 बजे से महाराजा छत्रसाल शौर्य पीठ, मऊसहानियाँ - छतरपुर आल्हा गायन श्री रामरथ पाण्डेय एवं साथी प्रयागराज लोक नाट्य श्री राजेश लिटोरिया एवं साथी दतिया सुगम संगीत सुश्री इशिता विश्वकर्मा एवं साथी मुम्बई मध्यप्रदेश शासन, संस्कृति विभाग एवं जिला प्रशासन, छतरपुर', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(128, 'विरासत महोत्सव', 'अन्य', 'Hybrid', '', '22-May-23', '22-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'महाराजा छत्रसाल शौर्य पीठ, मऊसहानियाँ - छतरपुर', 'महाराजा छत्रसाल शौर्य पीठ, मऊसहानियाँ - छतरपुर', 'Madhya Pradesh', '', 'Chhatarpur', '', '', '', '', '', '', 'II देशज II बुन्देली लोक गायन नीलम त्रिवेदी एवं साथी - खजुराहो नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(129, 'II देशज II 21.05.2023 नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/live/lAdLahvPDkU?feature=s', '21-May-23', '21-May-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'khajuraho', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'स्‍मरण समारोह 21 मई, 2023 जनजातीय संग्रहालय सभागार, भोपाल संध्‍या 6:30 बजे से आप सभी आमंत्रित हैं..... संस्‍कृति विभाग एवं संगीत सुमन संस्‍था का संयुक्‍त आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(130, 'स्‍मरण समारोह', 'शास्त्रीय संगीत', 'Hybrid', 'https://youtube.com/live/6xTFIgLHE0E?feature=share', '21-May-23', '21-May-23', '6:30 PM', '10:00 PM', 'Free', '', 'जनजातीय संग्रहालय सभागार, भोपाल', 'जनजातीय संग्रहालय सभागार, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'त्रिवेणी कला संग्रहालय - उज्जैन द्वारा आयोजित शैव ज्ञान परंपरा से उद्भूत कलाओं एकाग्र अनादि श्रंखला के अन्तर्गत दिनांक 21 मई 2023 को श्री सुधाकर देवले एवं साथियों द्वारा शिव आधारित उपशास्त्रीय गायन प्रस्तुत होगा ।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '5/19/2023 18:46', 1),
(131, 'अनादि', 'लोक एवं जनजातीय', 'Other', '', '21-May-23', '21-May-23', '7:00 PM', '9:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय -उज्जैन', 'उज्जैन', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'वनवासी लीला 20-22 मई, 2023, सायं 7.00 बजे शा. हाईस्कूल क्रं. 1, सिविल लाईन, दतिया श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन • सहयोग - जिला प्रशासन, दतिया', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(132, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '20-May-23', '22-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'शा. हाईस्कूल क्रं. 1, सिविल लाईन, दतिया', 'शा. हाईस्कूल क्रं. 1, सिविल लाईन, दतिया', 'Madhya Pradesh', 'Datia', 'Datia', '', '', '', '', '', '', 'वनवासी लीला 20-22 मई, 2023, सायं 7.00 बजे शा. उत्कृष्ट विद्यालय क्रं. 2, निवाड़ी श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन सहयोग - जिला प्रशासन, निवाड़ी', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '5/17/2023 12:56', 1),
(133, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '20-May-23', '22-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'शा. उत्कृष्ट विद्यालय क्रं. 2, निवाड़ी', 'शा. उत्कृष्ट विद्यालय क्रं. 2, निवाड़ी', 'Madhya Pradesh', 'Tikamgarh', 'niwari', '', '', '', '', '', '', 'मेरा भोपाल बक़ौल श्याम मुन्शी विमोचन सिर्फ नक्शे क़दम रह गए... द्वितीय संस्करण रूमी जाफ़री के श्याम भाई क़िस्सागोई हरिहरन का गायन 20 मई, 2023 सायं 7 बजे हंसध्वनि सभागृह, रवीन्द्र भवन, भोपाल आप सभी सादर साग्रह आमंत्रित हैं।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(134, 'मेरा भोपाल', 'अन्य', 'Hybrid', 'https://www.youtube.com/live/kUPSnJr44Rg?feature=s', '20-May-23', '20-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'हंसध्वनि सभागृह, रवीन्द्र भवन, भोपाल', 'हंसध्वनि सभागृह, रवीन्द्र भवन, भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'वनवासी लीला 19-21 मई, 2023, सायं 7.00 बजे से मेला ग्राउण्ड, मुरैना श्रीरामकथा साहित्य और लोक आस्था के चरितों की लीला प्रस्तुति मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठा आयोजन • सहयोग - जिला प्रशासन, मुरैना', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '5/20/2023 18:35', 1),
(135, 'वनवासी लीला', 'लोक एवं जनजातीय', 'Play', '', '19-May-23', '21-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'मेला ग्राउण्ड, मुरैना', 'मेला ग्राउण्ड, मुरैना', 'Madhya Pradesh', 'Morena', 'Morena', '', '', '', '', '', '', 'विश्व संग्रहालय दिवस 18 मई 2023 • दोपहर 12.00 से 7.00 बजे तक मध्यप्रदेश जनजातीय संग्रहालय, भोपाल चित्रांकन शिविर गोण्ड चित्रांकन में कलाकार की विशिष्टता प्रतिभागी सम्पूर्ण प्रदेश से गोण्ड समुदाय के सौ चित्रकारों की भागीदारी •मध्यप्रदेश जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '5/16/2023 19:34', 1),
(136, 'विश्व संग्रहालय दिवस', 'लोक एवं जनजातीय', 'Other', '', '18-May-23', '18-May-23', '12:00 PM', '7:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'विश्व संग्रहालय दिवस के उलक्ष्य में त्रिवेणी संग्रहालय के माध्यम से उज्जयिनी में आयोजित \'उज्जयिनी का महिमा का चित्रांकन शिविर\' में दिनांक 15 से 19 मई 2023 तक उज्जैन के प्रमुख ऐतिहासिक एवं धार्मिक स्थलों का सम्भावित चित्रण जलरंग माध्यम में किया जाएगा । चित्रांकन शिविर में देश के विविध प्रांतों से जलरंग माध्यम के कुल छः चित्रकारों को आमंत्रित किया गया है साथ ही स्थानीय कला विद्यालयों के विद्यर्थियों एवं प्रशिक्षुओं को भी शिविर में आमंत्रित किया गया है ।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(137, 'उज्जयिनी की महिमा का चित्रांकन शिविर', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Other', '', '15-May-23', '19-May-23', '10:00 AM', '4:00 PM', 'Free', '', 'उज्जैन के प्रमुख स्थल', 'उज्जैन शहर', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'घरपोच कविता मराठी के लोकप्रिय कवियों की कविताओं की प्रस्‍तुति एवं मधुरव बोरू ते ब्‍लॉग नाट्य प्रस्‍तुति', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(138, 'मराठी साहित्‍य सम्‍मेलन', 'साहित्यिक एवं सांस्कृतिक', 'Hybrid', '', '14-May-23', '15-May-23', '6:30 PM', '9:30 PM', 'Free', '', 'शहीद स्‍मारक, गोल बाजार, जबलपुर', 'गोल बाजार, जबलपुर', 'Madhya Pradesh', 'Jabalpur', 'Jabalpur', '', '', '', '', '', '', 'II देशज II ढिमरयाई लोक नृत्य परमानद केवट एवं साथी - विदिशा नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '5/10/2023 12:18', 1),
(139, 'II देशज II', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/watch?v=KRIq1kIHAx4', '14-May-23', '14-May-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव आदिवर्त', 'म.प्र जनजातीय एवं लोक कला राज्य संग्रहालय', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'भारत भवन में रंग महिमा समारोह के अन्तर्गत पहली बार राष्ट्रीय नाट्य विद्यालय, नई दिल्ली के तीन प्रसिद्ध नाटकः \'अन्धायुग, माई री मैं का से कहूँ, अभिज्ञान शाकुंतलम् \' एक साथ प्रदर्शित हो रहे हैं। मध्यप्रदेश नाट्य विद्यालय का नाटक \'वीर अभिमन्यु \' भी इस अवसर पर प्रदर्शित हो रहा है। 13 से 16 मई तक आयोजित चार दिवसीय इस नाट्य समारोह में नाट्य प्रस्तुतियाँ प्रतिदिन सायं 7.00 बजे से आरम्भ होंगी और इनमें प्रवेश की सहयोग राशि रु. 50/- है। इसके साथ ही 14 मई को सुबह 11.00 बजे \'रंगमंच की समकालीनता और उसके स्वप्न \' विषय पर रंगमंच विशेषज्ञों के वक्तव्य भी होंगे।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(140, 'रंग महिमा समारोह', 'रंगमंच एवं लोकनाट्य', 'Hybrid', '', '14-May-23', '14-May-23', '11:00 AM', '1:00 PM', 'Free', '', 'भारत भवन, भोपाल', 'भारत भवन, भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'भारत भवन में रंग महिमा समारोह के अन्तर्गत पहली बार राष्ट्रीय नाट्य विद्यालय, नई दिल्ली के तीन प्रसिद्ध नाटकः \'अन्धायुग, माई री मैं का से कहूँ, अभिज्ञान शाकुंतलम् \' एक साथ प्रदर्शित हो रहे हैं। मध्यप्रदेश नाट्य विद्यालय का नाटक \'वीर अभिमन्यु \' भी इस अवसर पर प्रदर्शित हो रहा है। 13 से 16 मई तक आयोजित चार दिवसीय इस नाट्य समारोह में नाट्य प्रस्तुतियाँ प्रतिदिन सायं 7.00 बजे से आरम्भ होंगी और इनमें प्रवेश की सहयोग राशि रु. 50/- है। इसके साथ ही 14 मई को सुबह 11.00 बजे \'रंगमंच की समकालीनता और उसके स्वप्न \' विषय पर रंगमंच विशेषज्ञों के वक्तव्य भी होंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(141, 'रंग महिमा समारोह', 'रंगमंच एवं लोकनाट्य', 'Hybrid', '', '13-May-23', '16-May-23', '7:00 PM', '10:00 PM', 'Free', '', 'भारत भवन, भोपाल', 'भारत भवन, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'बहुकला केन्द्र भारत भवन द्वारा 13 मई से 16 मई 2023 तक रंग महिमा नाट्य समारोह आयोजित किया जा रहा है। उक्त समारोह के समापन दिवस पर आज दिनांक 16 मई 2023 को शाम 07:00 बजे से भारत भवन सभागार, भोपाल में मध्यप्रदेश नाट्य विद्यालय की बहुप्रतिष्ठित प्रस्तुति ‘‘वीर अभिमन्यु’’ का मंचन किया जा रहा है, आप सभी सादर आमंत्रित है।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '5/14/2023 21:52', 1),
(142, 'नाटय प्रस्‍तुति', 'रंगमंच एवं लोकनाट्य', 'Play', '', '13-May-23', '16-May-23', '7:00 PM', '9:00 PM', 'Free', '', 'Bharat Bhawan', 'Bharat Bhawan', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '#Sufi_Sammelan #mpurduacademy #mpculturedeptt मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद संस्कृति विभाग द्वारा \"वहदत में तेरी हर्फ़ दुई का न आ सके \" उर्दू साहित्य में वहदत-उल-वजूद (अद्वैत) पर आधारित सूफ़ी सम्मेलन सूफ़ी सेमिनार, सूफ़ियाना मुशायरा व चिन्तन सत्र का आयोजन 12 मई, 2023 को जनजातीय संग्रहालय सभागार, श्यामला हिल्स, भोपाल आयोजित है। प्रथम सत्र : समय : दोपहर 2 बजे से प्रदेश के सभी ज़िला समन्वयकों के साथ चिंतन सत्र द्वितीय सत्र : शाम 5 बजे से सेमिनार और अखिल भारतीय मुशायरा आप सभी सादर साग्रह आमंत्रित हैं। डॉ. नुसरत मेहदी निदेशक مدھیہ پردیش اردو اکادمی سنسکرتی پر یشد محکمہ ثقافت کے زیر اہتمام \"وحدت میں تیری حرف دوئی کا نہ آسکے\" اردو ادب میں وحدت الوجود پر مبنی #محفل_صوفیانہ صوفی سیمینار، صوفیانہ مشاعرہ اور فکری اجلاس کا انعقاد ۱۲/ مئی ۲۰۲۳ کو ٹرائبل میوزیم آڈیٹوریم، شیاملہ پلس، بھوپال میں کیا جائے گا۔ پہلا اجلاس : دوپہر 2 بجے صوبے کے سبھی ضلع کوآرڈینیٹروں کے ساتھ فکری اجلاس دوسرا اجلاس : شام 5 بجے سے سیمینار اور کل ہند مشاعرہ آپ بصد احترام مدعو ہیں۔ ڈاکٹر نصرت مہدی ڈائریکٹر --------', 'मध्य प्रदेश नाट्य विद्यालय, भोपाल', '0000-00-00 00:00:00', '', 1);
INSERT INTO `programs` (`id`, `program_name`, `program_category`, `program_type`, `program_link`, `starting_date`, `end_date`, `starting_time`, `end_time`, `entry_type`, `chief_guest`, `venu`, `address`, `state`, `district`, `city`, `pincode`, `profile_img1`, `profile_img2`, `profile_img3`, `profile_img4`, `date_of_email`, `about`, `department_by`, `created_at`, `updated_at`, `status`) VALUES
(143, 'सूफ़ी सम्मेलन', 'साहित्य', 'Other', '', '12-May-23', '12-May-23', '2:00 PM', '11:00 PM', 'Free', '', 'जनजातीय संग्रहालय सभागार', 'जनजातीय संग्रहालय सभागार, श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'भोपाल', '', '', '', '', '', '', 'शलाका 2', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '5/8/2023 18:42', 1),
(144, 'शलाका 2', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Other', '', '10-May-23', '31-May-23', '12:00 AM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव आदिवर्त', 'म.प्र जनजातीय लोक कला राज्य संग्रहालय', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'II देशज II बुन्देली विवाह गीत नीलम तिवारी एवं साथी - छतरपुर नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '5/10/2023 12:13', 1),
(145, 'II देशज II', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/live/Rx4c9xMfHb4?feature=s', '7-May-23', '7-May-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव आदिवर्त', 'म.प्र जनजातीय एवं लोक कला राज्य संग्रहालय', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'भारत भवन में नृत्य कार्यशाला ------------------------------------------- भारत भवन में 06 मई से 10 मई तक पाँच दिवसीय नृत्य कार्यशाला आयोजित की गई है। कार्यशाला का शुभारम्भ 06 मई को सुबह 10. 30 बजे होगा। नृत्य कार्यशाला की विशेषज्ञ प्रख्यात नृत्यांगना पद्मश्री सुश्री गीता चंद्रन जी हैं। कार्यशाला भरतनाट्यम नृत्य पर आधारित है। विशेष तौर पर शहर की सुप्रतिष्ठित भरतनाट्यम नृत्यांगनाओं के शिष्यों/ शिष्याओं को कार्यशाला में भागीदारी के लिए आमंत्रित किया गया है। इस नृत्य कार्यशाला के संयोजक श्री अनूप जोशी \' बंटी \' हैं। यह कार्यशाला भारत भवन के संगीत-नृत्य केन्द्र अनहद द्वारा पहली बार आयोजित की जा रही है।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(146, 'नृत्य कार्यशाला', 'शास्त्रीय नृत्य प्रशिक्षण', 'Hybrid', '', '6-May-23', '10-May-23', '10:30 AM', '5:00 PM', 'Free', '', 'भारत भवन', 'भारत भवन', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'पदमश्री डॉ वाकणकर जी के जन्म दिवस के अवसर पर व्याख्यान माला जिसमें डॉ शिवाकांत वापजेयी, अधीक्षण पुराविद भारतीय पुरातत्‍व सवेक्षण जबलपुर ने बांधवगढ की नवीन खोज, डॉ शंभुनाथ यादव जी भारतीय पुरातत्‍व सवेक्षण सांची ने छत्‍तीसगढ के शैलचिृ व नवीन खोज की जानकारी साथ ही डॉ सत्‍यनारायण शर्मा ,इतिहास संकलन समिति मध्‍यक्षेेत्र संगठन मंत्री , सेवा- उपसचांलक श्री नागइच, क्षेत्रीय निदेशक भारतीय पुरातत्‍व सवेक्षण डॉ भुुवन विक्रम तथा अधीक्ष्‍ााणपुराविद डॉ मनोज कुमार कुर्मी जी द्वारा वाकणकर जी के व्‍यत्तिव पर व्याख्यान माला में प्रकाश डज्ञलेगें ।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(147, 'पदमश्री डॉ वाकणकर जी के जन्म दिवस के अवसर पर व्याख्यान माला का आयोजन', 'पुरातत्व', 'Lecture', '', '4-May-23', '5-May-23', '10:30 AM', '6:00 PM', 'Free', '', 'राज्‍य संग्रहालय श्‍यामला हिल्‍स भोपाल', 'राज्‍य संग्रहालय श्‍यामला हिल्‍स भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद, मध्यप्रदेश शासन संस्कृति विभाग, भोपाल द्वारा शाजापुर जिला निवासी तार सप्तक के पुरौधा कवि हरिनारायण व्यास की स्मृति में दिनांक 3 मई 2023 को सायं 7.00 बजे शाजापुर में व्याख्यान एवं रचनापाठ आयोजित है। दिनांक 3 मई 2023 को बुधवार की सायं 7 बजे स्थानीय शहीद पार्क के पास एबी रोड स्थित जिला शिक्षा अधिकारी कार्यालय के सभागार में उक्त आयोजन होगा। कार्यक्रम में वरिष्ठ साहित्यकार एवं प्राचार्य डॉ. विद्या शंकर विभूति की अध्यक्षता में होगा, व्याख्यान के प्रमुख वक्ता वरिष्ठ साहित्यकार जीवन प्रकाश आर्य होंगे। रचनापाठ में राम मनावत (अकोदिया), बंशीधर बंधु (शुजालपुर), सुरेश त्रिवेदी (पोलायकला), राजेश अजनबी (सोयतकला), भोले नेमा \'चंचल\' (हर्रई जागीर), कैलाश गौड़ (शाजापुर), विवेक शर्मा (पीपलरॉवां), श्रीमती कविता पुण्ताम्बेकर (शाजापुर) एवं श्रीमती संतोष शर्मा (शाजापुर) रचनापाठ करेंगी। साहित्य प्रेमियों से आयोजन में भाग लेने का अनुरोध है।', 'पुरातत्व निदेशालय', '0000-00-00 00:00:00', '5/25/2023 15:54', 1),
(148, 'व्याख्यान एवं रचनापाठ', 'साहित्यिक एवं सांस्कृतिक', 'Hybrid', '', '3-May-23', '3-May-23', '7:00 PM', '9:00 PM', 'Free', '', 'जिला शिक्षा अधिकारी कार्यालय सभागार, शहीद पार्क के पास , एबी रोड, शाजापुर', 'जिला शिक्षा अधिकारी कार्यालय सभागार, शहीद पार्क के पास , एबी रोड, शाजापुर', 'Madhya Pradesh', 'Shajapur', 'Shajapur', '', '', '', '', '', '', 'शलाका 37 भील समुदाय के चित्रकार गंगूबाई के चित्रों की प्रदर्शनी सह-विक्रय लिखन्दरा प्रदर्शनी दीर्घा 3 से 30 मई, 2023 मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(149, 'शलाका-37', 'लोक एवं जनजातीय', 'Other', '', '3-May-23', '30-May-23', '12:00 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'म.प्र. शासन संस्कृति विभाग द्वारा उज्जैन में स्थापित त्रिवेणी कला एवं पुरातत्त्व संग्रहालय के सातवे स्थापना दिवस के उपलक्ष्य में त्रिवेणी की प्रकृति के अनुरूप शैव, शाक्त तथा वैष्णव परंपराओं पर आधारित तीन दिवसीय व्याख्यान सत्र एवं सांस्कृतिक प्रस्तुतियों के आयोजन आगामी 02 से 04 मई 2023 तक संयोजित होंगे ।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '5/14/2023 14:57', 1),
(150, 'वर्षगाँठ समारोह - 2023', 'लोक एवं जनजातीय', 'Hybrid', '', '2-May-23', '4-May-23', '7:00 PM', '11:00 PM', 'Free', '', 'त्रिवेणी कला एवं पुरातत्व संग्रहालय', 'जयसिंहपुरा, महाकाल कॉरिडोर के पास', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'म.प्र. शासन संस्कृति विभाग द्वारा उज्जैन में स्थापित त्रिवेणी कला एवं पुरातत्त्व संग्रहालय के सातवे स्थापना दिवस के उपलक्ष्य में त्रिवेणी की प्रकृति के अनुरूप शैव, शाक्त तथा वैष्णव परंपराओं पर आधारित तीन दिवसीय व्याख्यान सत्र एवं सांस्कृतिक प्रस्तुतियों के आयोजन आगामी 02 से 04 मई 2023 तक संयोजित होंगे ।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '4/28/2023 18:45', 1),
(151, 'व्याख्यान सत्र (वर्षगाँठ समारोह के अन्तर्गत)', 'लोक एवं जनजातीय', 'Lecture', '', '2-May-23', '4-May-23', '4:00 PM', '6:00 PM', 'Free', '', 'त्रिवेणी कला एवं पुरातत्व संग्रहालय', 'जयसिंहपुरा, महाकाल कॉरिडोर के पास', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'युवा पीढ़ी/छात्र-छात्राओं को संस्कारित करने एवं पंजाबी भाषा, लोक सांस्कृतिक परम्पराओं के संरक्षण एवं संवर्धन हेतु दिनांक 01 मई 2023 से 31 मई 2023 तक पंजाबी गुरमुखी भाषा, गतका कला, दस्तार सजाओ, पारम्परिक पंजाबी लोक सांस्कृतिक गुरबाणी रागीय गायन की विधाओं पर केन्द्रित, प्रशिक्षण शिविर एवं 02 जून 2023 को समापन समारोह में प्रशिक्षणार्थीयों की मंचीय प्रस्तुतियाँ', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '4/28/2023 18:47', 1),
(152, 'ग्रीष्मकालीन प्रशिक्षण शिविर', 'अन्य', 'Training', '', '1-May-23', '2-Jun-23', '8:30 AM', '9:15 AM', 'Free', '', 'गुरूद्वारा दाता बंदी छोड़, सभागृह, पिपलिया राव, इन्दौर', 'गुरूद्वारा दाता बंदी छोड़, सभागृह, पिपलिया राव,', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'शास्त्रीय नृत्य कथक प्रशिक्षण कार्यशाला', 'पंजाबी साहित्य अकादमी', '0000-00-00 00:00:00', '5/31/2023 18:08', 1),
(153, 'शास्त्रीय नृत्य कथक प्रशिक्षण कार्यशाला', 'शास्त्रीय नृत्य प्रशिक्षण', 'Training', '', '30-Apr-23', '14-May-23', '9:00 AM', '7:00 PM', 'Free', '', 'उज्जैन', 'पं. सूर्यनारायण व्यास सांस्कृतिक संकुल, कालिदास संस्कृत अकादमी', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'II देशज II देवी भगते गोरीशंकर पटेल एवं साथी - खजुराहो नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '5/13/2023 17:46', 1),
(154, 'II देशज II', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/live/V5n0JNw0B7Q?feature=s', '30-Apr-23', '30-Apr-23', '7:00 PM', '8:00 PM', 'Free', '', 'सांस्कृतिक गाँव \'अदिवर्त\' मध्यप्रदेश जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'KHAJURAHO', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'व्याख्यान आयोजन विषय – ग्रह विज्ञान और ज्योतिष वक्ता – डॉ. गणेश त्रिपाठी, सहायक प्राध्यापक (ज्योतिष) शा. रामानंद संस्कृत महाविद्यालय, गुफा मंदिर लालघाटी, भोपाल अध्यक्षता – डॉ. सदानंन्द त्रिपाठी आचार्य, शा. संस्कृत महाविद्यालय - उज्जैन दिनांक 30 अप्रैल 2023 – रविवार स्थान – त्रिवेणी कला एवं पुरातत्व संग्रहालय - उज्जैन समय सायं 05 बजे प्रवेश - निःशुल्क', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(155, 'व्याख्यान', 'लोक एवं जनजातीय', 'Lecture', '', '30-Apr-23', '30-Apr-23', '5:00 PM', '7:00 PM', 'Free', '', 'त्रिवेणी संग्रहालय -- उज्जैन', 'जयसिंहपुरा, महाकाल कॉरिडोर के पास', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'शाहिरी कीर्तन, पोवाडा एवं भारूड गायन । व्‍याख्‍यान-साहित्‍यातील सावरकर एवं गायन-अभंगवाणी और नाटय संगीत।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(156, 'मराठी साहित्‍य सम्‍मेलन', 'साहित्य', 'Lecture', '', '29-Apr-23', '30-Apr-23', '6:30 PM', '9:30 PM', 'Free', '', 'दत्‍त मंदिर परिसर, टिमरनी एवं मुक्‍ताकाशीय मंच रूद्राक्ष पैलेस, हरदा', 'टिमरनी एवं हरदा', 'Madhya Pradesh', 'Harda', 'TIMARNI HARDA', '', '', '', '', '', '', '', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '4/24/2023 13:21', 1),
(157, 'पण्‍डित कुमार गन्‍धर्व समारोह (जन्‍म शताब्‍दी वर्ष)', 'अन्य', 'Other', 'https://www.youtube.com/live/bYKqyi50s2c?feature=s', '28-Apr-23', '29-Apr-23', '7:00 PM', '11:00 PM', 'Free', '', 'मल्‍हार स्‍मृति मंदिर, देवास', 'मल्‍हार स्‍मृति मंदिर, देवास', 'Madhya Pradesh', 'Dewas', 'Dewas', '', '', '', '', '', '', 'भारत भवन भोपाल , में ‘‘सन्तवाणी समारोह’’ आयोजित हो रहा है। भक्तिपदों के गायन पर आधारित यह मनोहारी समारोह 28 से 30 अप्रैल, 2023 को होगा। इस तीन दिवसीय कार्यक्रम में देशभर से ख्याति प्राप्त गायक-गायिकाएं हिस्सा ले रहे हैं। इनमें सुश्री वाणी राव, श्री विनोद मिश्र, श्री सारंग फगरे, सुश्री श्वेता जोशी, पंडित बलवंत पुराणिक, पंडित अजय पोहनकर और विदुषी श्रीमती अंजली पोहनकर मधुर गायन प्रस्तुत करेंगे। इनके अलावा श्री सुधीर मोता, सुश्री अंशुबाला मिश्रा, श्री धर्मेन्द्र पारे अपने वक्तव्य प्रस्तुत करेंगे। इसमें प्रवेश निःशुल्क है। आप सभी इसमें सादर आमंत्रित हैं।', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '4/29/2023 19:56', 1),
(158, '‘सन्तवाणी समारोह’’', 'सुगम संगीत', 'Hybrid', 'https://youtube.com/live/HThqAjlpC8c?feature=share', '28-Apr-23', '30-Apr-23', '7:00 PM', '9:00 PM', 'Free', '', 'भारत भवन भोपाल', 'भारत भवन भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'कालिदास का शब्दसौन्दर्य व्याख्यान सह संस्कृत काव्यमाधुरी एवं संस्कृत सतोत्रों का सांगीतिक गायन', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '4/29/2023 19:54', 1),
(159, 'सारस्वतम् व्याख्यान संस्कृत काव्यमाधुरी', 'साहित्यिक एवं सांस्कृतिक', 'Hybrid', '', '25-Apr-23', '25-Apr-23', '3:00 PM', '6:00 PM', 'Free', '', 'रतलाम', 'शासकीय कला एवं विज्ञान स्नातकोत्तर महाविद्यालय, रतलाम', 'Madhya Pradesh', 'Ratlam', 'Ratlam', '', '', '', '', '', '', 'आचार्य शंकर जयंती के उपलक्ष्य में वैशाख शुक्ल पंचमी को मध्यप्रदेश शासन, संस्कृति विभाग द्वारा \'एकात्म पर्व\' का आयोजन। 25 अप्रैल 2023, सायं 6 बजे कुशाभाऊ ठाकरे सभागार, भोपाल( मिंटो हॉल) आप सभी सादर आमंत्रित है।', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '4/19/2023 15:39', 1),
(160, 'एकात्म पर्व', 'अन्य', 'Hybrid', 'https://www.youtube.com/live/ZLHBm-NfKIE?feature=s', '25-Apr-23', '25-Apr-23', '6:00 PM', '9:00 PM', 'Free', '', 'कुशाभाऊ ठाकरे सभागार ( मिन्टो हॉल ), भोपाल', 'कुशाभाऊ ठाकरे सभागार ( मिन्टो हॉल ), भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'II देशज II नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '4/25/2023 11:58', 1),
(161, 'II देशज II नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/watch?v=jvkws7LLFT8', '23-Apr-23', '23-Apr-23', '7:00 PM', '8:00 PM', 'Free', '', 'आदिवर्त जनजातीय संग्रहालय', 'खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'वार्षिक प्रमुख पर्व बैसाखी महोत्सव के अवसर पर भव्य पारम्परिक सांस्कृतिक प्रस्तुतियां एवं विभिन्न प्रतियोगिताओं का आयोजन बैसाखी आनंद मेला दिनांक 23 अप्रैल 2023 सायं 5ः00 बजे स्थान:- दी सुजान पब्लिक स्कूल परिसर, बिजवाड़ रोड कांटाफोड़ (देवास) के प्रांगण में सम्पन्न किया जाना सुनिश्चित किया गया है।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(162, 'बैसाखी आनंद मेला', 'अन्य', 'Other', '', '23-Apr-23', '23-Apr-23', '5:00 PM', '7:00 PM', 'Free', '', 'दी सुजान पब्लिक स्कूल परिसर, बिजवाड़ रोड कांटाफोड़ (देवास)', 'बिजवाड़ रोड कांटाफोड़ (देवास)', 'Madhya Pradesh', 'Dewas', 'Dewas', '', '', '', '', '', '', 'व्याख्यान सत्र / विषय - कालगणना में गोधुली का महत्व / मुख्यवक्ता - पंडित अमर त्रिवेदी, ज्योतिषाचार्य एवं धर्मशास्त्र के अध्येता, उज्जैन / अध्यक्षता - प्रो. शिवम शर्मा, ज्योतिष एवं ज्योतिर्विज्ञान के विशेषज्ञ, उज्जैन / स्थान - त्रिवेणी कला संग्रहालय सभागार कक्ष / दिनांक 20 अप्रेैल 2023 /समय सायं 5 बजे से', 'पंजाबी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(163, 'व्याख्यान', 'लोक एवं जनजातीय', 'Lecture', '', '20-Apr-23', '20-Apr-23', '5:00 PM', '7:00 PM', 'Free', '', 'त्रिवेणी संग्रहालय - उज्जैन', 'त्रिवेणी संग्रहालय - उज्जैन', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', '', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(164, 'बहुभाषायी फिल्‍म समारोह', 'अन्य', 'Other', '', '20-Apr-23', '23-Apr-23', '6:00 PM', '9:00 PM', 'Free', '', 'भारत भवन', 'शामला हिल्‍स,', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '', 'भारत भवन', '0000-00-00 00:00:00', '', 1),
(165, 'पण्‍डित नन्‍दकिशोर शर्मा स्‍मृति समारोह', 'अन्य', 'Other', 'https://www.youtube.com/live/3g256wHXqro?feature=s', '18-Apr-23', '19-Apr-23', '7:00 PM', '10:00 PM', 'Free', '', 'अन्‍तरंग, भारत भवन, भोपाल', 'अन्‍तरंग, भारत भवन, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'Punjabi Sahitya Academy Madhya Pradesh Cultural Council promotes Punjabi language, culture, training youth, tradition. Baisakhi, The Sikh New Year 13th April is prime festival of Hindus and Sikhs to mark first summer crop. It is on this day that the 10th ', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '4/20/2023 14:46', 1),
(166, 'Baisakhi Mahotsav', 'साहित्यिक एवं सांस्कृतिक', 'Other', '', '16-Apr-23', '16-Apr-23', '7:00 PM', '10:00 PM', 'Free', '', 'Madhav Mangalam Garden', 'Jayendraganj ,Nadi Gate Old Taar ghar swadesh campus', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', 'II देशज II बुन्देली गायन गणेश रजक एवं साथी - खजुराहो नृत्य / नाट्य / वादन / गायन प्रस्तुतियों एकाग्र समारोह प्रति रविवार सांस्कृतिक गाँव \'अदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय - खजुराहो', 'पंजाबी साहित्य अकादमी', '0000-00-00 00:00:00', '4/11/2023 0:02', 1),
(167, 'देशज', 'लोक एवं जनजातीय', 'Other', 'https://www.youtube.com/watch?v=7dEb7EEPSYw', '16-Apr-23', '16-Apr-23', '7:00 PM', '8:30 PM', 'Free', '', 'आदिवर्त जनजातीय लोक कला राज्य संग्रहालय', 'खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'सिन्धी भाषा तस्लीमी डीहुं (10 अप्रैल) जे मौके ते सदाहयात ‘फानी’ जिनि खे समर्पित मिठड़ी मुहिंजी सिन्धी बोली आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(168, 'मिठड़ी मुहिंजी सिन्धी बोली', 'अन्य', 'Other', '', '12-Apr-23', '12-Apr-23', '6:00 PM', '8:30 PM', 'Free', '', 'दीपमाला पगारानी संस्कार पब्लिक स्कूल, संत हिरदाराम नगर,', 'संत हिरदाराम नगर, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'संचालनालय, पुरातत्‍व अभिलेखागार एवं संग्रहालय, भोपाल एवं इंटेक भोपाल द्वारा निविदाकाारों के लिए राज्‍य संरक्षित स्‍मारकों के अनुरक्षण एवं मंदिर पुनर्स्‍थापन के सबंध में त्रिदिवसीय प्रशिक्षण कार्यशाला का आयोजन किया जा रहा है। जिसमें 11/04/2023 को राज्‍य संग्रहालय, भोपाल एवं दिनांक 12-13/04/2023 जगदीशपुर स्‍मारक समूह भोपाल में आयोजित किया जा रहा है। जिसमेंं निविदाकाारों को पुरातत्‍व के संरिक्षत स्‍मारकों के अनुरक्षण एवं मंदिर पुनर्स्‍थापन कार्य किस प्रकार से संपादित किया जाना होगा इस संबंध में विस्‍त़त जानकारी वरिष्‍ठ अधिकारियों द्वारा प्रदान की जावेगी।', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(169, 'स्‍मारकों के अनुरक्षण एवं मंदिर पुनर्सरचना प्रविधि के संबंध में प्रशिक्षण कार्यशाला', 'पुरातत्व', 'Training', '', '11-Apr-23', '13-Apr-23', '10:30 AM', '6:00 PM', 'Free', '', 'सभाकक्ष, राज्‍य संग्रहालय, भोपाल', 'राज्‍य संग्रहालय, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'श्री हरि दिलगीर जी को समर्पित कार्यक्रम', 'पुरातत्व निदेशालय', '0000-00-00 00:00:00', '', 1),
(170, 'मिठड़ी मुहिंजी सिन्धी बोली', 'अन्य', 'Lecture', '', '10-Apr-23', '10-Apr-23', '8:00 PM', '9:30 PM', 'Free', '', 'रामबोला सभागार मानस भवन, ग्वालियर', 'फूलबाग, लश्कर, ग्वालियर', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', 'शलाका गोंड जनजातीय समुदाय के चित्रकार के चित्रों की प्रदर्शनी सह विक्रय लिखन्दरा प्रदर्शनी दीर्घा आदिवर्त जनजातीय एवं लोक कला राज्य संग्रहालय खजुराहो', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '4/11/2023 12:19', 1),
(171, 'शलाका', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Other', '', '10-Apr-23', '10-May-23', '10:00 AM', '8:00 PM', 'Free', '', 'आदिवर्त जनजातीय लोक कला राज्य संग्रहालय', 'खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'देशज मैं नृत्य, नाट्य, गायन एवं वादन केन्द्रित समारोह 9 अप्रैल 2023 • सायं 7.00 बजे से \'आदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय, खजुराहो में बुन्देली गायक जयराम त्रिवेदी एवं साथी - खजुराहो से बुंदेली गायन की प्रस्तुति देंगे।मध्यप्रदेश शासन, संस्कृति विभाग का आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(172, 'देशज', 'लोक एवं जनजातीय', 'Hybrid', 'https://www.youtube.com/watch?v=ygG_tS5lE5Q', '9-Apr-23', '9-Apr-23', '7:00 PM', '8:30 PM', 'Free', '', 'आदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय, खजुराहो', 'आदिवर्त\' जनजातीय लोक कला राज्य संग्रहालय, खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', 'सिन्धी भाषा दिवस के अवसर पर आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '4/9/2023 13:11', 1),
(173, 'मिठड़ी मुहिंजी सिन्धी बोली', 'साहित्यिक एवं सांस्कृतिक', 'Lecture', '', '9-Apr-23', '9-Apr-23', '7:00 PM', '9:00 PM', 'Free', '', 'झूलैलाल मंदिर मंदसौर', 'आनंद विहार कॉलोनी मंदसौर', 'Madhya Pradesh', 'Mandsaur', 'Mandsaur', '', '', '', '', '', '', '#Jashn_E_Meer #mpurduacademy #mpculturedeptt मध्यप्रदेश उर्दू अकादमी, संस्कृति परिषद, संस्कृति विभाग द्वारा मीर तक़ी मीर 300वीं जयंती समारोह के अवसर पर \"मुस्तनद है मेरा फ़रमाया हुआ \" शीर्षक पर आधारित #व्याख्यान 08 अप्रैल, 2023 दोपहर 02:00 बजे राज्य संग्रहालय सभागार, श्यामला हिल्स, भोपाल में आयोजित है। #वक्तागण डॉ. तकी आबिदी, कनाडा ज़िया फारूकी, भोपाल अज़ीज़ इरफान, इन्दौर संचालन : मेहमूद मलिक इस अवसर पर जश्ने उर्दू में भाग लेने वाले ओपन माइक के प्रतिभागियों को प्रमाण पत्र भी वितरित किए जाएँगे आप सादर साग्रह आमंत्रित हैं। डॉ. नुसरत मेहदी निदेशक --- مدھیہ پردیش اردو اکادمی سنسکرتی پر یشد محکمہ ثقافت کے زیر اہتمام سلسلہ کے تحت #سہ_صد_سالہ_جشن_میر ” مستند ہے میرا فرمایا ہوا“ عنوان پر مبنی #سیمینار بتاریخ : 8 اپریل 2023 کو دو پہر 2 بجے بمقام :اسٹیٹ میوزیم آڈیٹوریم ، شیاملہ ہلس ، بھوپال میں منعقد ہے۔ #مقررین ڈاکٹر تقی عابدی ۔ کینیڈا ضیا فاروقی ۔ بھوپال، عزیز عرفان ۔اندور نظامت محمود ملک۔بھوپال اس موقع پر جشن اردو میں حصہ لینے والے اوپن مائک کے شرکاء کو سرٹیفکیٹ تقسیم کیے جائیں گے۔ آپ سبھی بصد احترام مدعو ہیں ڈاکٹر نصرت مہدی ڈائریکٹر', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '4/10/2023 17:44', 1),
(174, 'मीर तक़ी मीर 300वीं जयंती समारोह', 'साहित्य', 'Discussion', '', '8-Apr-23', '8-Apr-23', '2:00 PM', '5:00 PM', 'Free', '', 'राज्य संग्रहालय सभागार, श्यामला हिल्स, भोपाल', 'श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'वीर हनुमान-दास हनुमान विषय पर केन्द्रित व्‍याख्‍यान एवं लव कुश रामायण पर केन्द्रित नृत्‍य नाटिका।', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '4/7/2023 22:15', 1),
(175, 'व्‍याख्‍यान एवं नृत्‍य नाटिका', 'साहित्यिक एवं सांस्कृतिक', 'Lecture', '', '6-Apr-23', '6-Apr-23', '5:30 PM', '9:00 PM', 'Free', '', 'महाराष्‍ट्र व्‍यायामशाला, मढ़ाताल, जबलपुर', 'मढ़ाताल', 'Madhya Pradesh', 'Jabalpur', 'Jabalpur', '', '', '', '', '', '', 'शलाका 36 गोण्ड समुदाय के चित्रकार सहदेव कुमार पुशाम के चित्रों की प्रदर्शनी सह-विक्रय लिखन्दरा प्रदर्शनी दीर्घा 3 से 30 अप्रैल, 2023 मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '4/1/2023 20:07', 1),
(176, 'शलाका ३६', 'लोक एवं जनजातीय', 'Other', '', '3-Apr-23', '30-Apr-23', '12:00 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय ,श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(177, 'CELEBRATING FRANCOPHONIE 2023', 'अन्य', 'Other', 'https://www.youtube.com/live/lRKVCzZPUtA?feature=s', '1-Apr-23', '1-Apr-23', '6:30 PM', '8:30 PM', 'Free', '', 'BHARAT BHAVAN BHOPAL', 'BHARAT BHAVAN BHOPAL', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '30 मार्च - 1 अप्रैल, 2023 को शाम 6:30 बजे से डीबी सिटी मॉल, शौर्य स्मारक और बोट क्लब भोपाल में \'\'सशस्त्र बल बैंड प्रदर्शन\'\' होगा। मां भारती के इन शूरवीरों का उत्साह बढ़ाने आप सब अवश्य आएं।', 'भारत भवन', '0000-00-00 00:00:00', '6/16/2023 18:57', 1),
(178, '\'सशस्त्र बल बैंड प्रदर्शन\'\'', 'अन्य', 'Hybrid', 'https://www.youtube.com/live/reenbLmXOhw?feature=s', '30-Mar-23', '1-Apr-23', '6:30 PM', '10:00 PM', 'Free', '', 'डीबी सिटी मॉल, शौर्य स्मारक और बोट क्लब भोपाल', 'डीबी सिटी मॉल, शौर्य स्मारक और बोट क्लब भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा रामनवमीं के पावन अवसर पर \"प्राकट्य पर्व\" का आयोजन एक साथ प्रदेश के 12 स्थानों पर किया जा रहा है। यह आयोजन 30 मार्च, 2023 को विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल एवं उज्जैन में आयोजित होगा। इसके अलावा चित्रकूट में 24-30 मार्च, 2023 एवं उमरिया में 28-30 मार्च, 2023 तक प्राकट्य पर्व आयोजित किया जा रहा है। संचालक संस्कृति श्री अदिति कुमार त्रिपाठी ने बताया कि प्राकट्य पर्व के अंतर्गत श्रीराम आधारित कला प्रस्तुतियां मंचित की जायेंगी, जिसमें नृत्यनाटिका, भजन, गायन, नृत्य इत्यादि शामिल होंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '4/1/2023 20:19', 1),
(179, '॥ प्राकट्य पर्व ||', 'अन्य', 'Hybrid', '', '30-Mar-23', '30-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल ,उज्जैन , उमरिया,', 'विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल ,उज्जैन , उमरिया', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा रामनवमीं के पावन अवसर पर \"प्राकट्य पर्व\" का आयोजन एक साथ प्रदेश के 12 स्थानों पर किया जा रहा है। यह आयोजन 30 मार्च, 2023 को विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल एवं उज्जैन में आयोजित होगा। इसके अलावा चित्रकूट में 24-30 मार्च, 2023 एवं उमरिया में 28-30 मार्च, 2023 तक प्राकट्य पर्व आयोजित किया जा रहा है। संचालक संस्कृति श्री अदिति कुमार त्रिपाठी ने बताया कि प्राकट्य पर्व के अंतर्गत श्रीराम आधारित कला प्रस्तुतियां मंचित की जायेंगी, जिसमें नृत्यनाटिका, भजन, गायन, नृत्य इत्यादि शामिल होंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '3/29/2023 16:25', 1),
(180, '॥ प्राकट्य पर्व ||', 'सुगम संगीत', 'Hybrid', '', '30-Mar-23', '30-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'श्रीराम जानकी मंदिर, शहडोल', 'श्रीराम जानकी मंदिर, शहडोल', 'Madhya Pradesh', '', 'Shahdol', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा रामनवमीं के पावन अवसर पर \"प्राकट्य पर्व\" का आयोजन एक साथ प्रदेश के 12 स्थानों पर किया जा रहा है। यह आयोजन 30 मार्च, 2023 को विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल एवं उज्जैन में आयोजित होगा। इसके अलावा चित्रकूट में 24-30 मार्च, 2023 एवं उमरिया में 28-30 मार्च, 2023 तक प्राकट्य पर्व आयोजित किया जा रहा है। संचालक संस्कृति श्री अदिति कुमार त्रिपाठी ने बताया कि प्राकट्य पर्व के अंतर्गत श्रीराम आधारित कला प्रस्तुतियां मंचित की जायेंगी, जिसमें नृत्यनाटिका, भजन, गायन, नृत्य इत्यादि शामिल होंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '4/11/2023 16:37', 1),
(181, '॥ प्राकट्य पर्व ||', 'अन्य', 'Hybrid', '', '30-Mar-23', '30-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'रवीन्द्र नाथ टैगोर सांस्कृ तिक भवन, विदिशा', 'रवीन्द्र नाथ टैगोर सांस्कृ तिक भवन, विदिशा', 'Madhya Pradesh', 'Bhopal', 'Vidisha', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा रामनवमीं के पावन अवसर पर \"प्राकट्य पर्व\" का आयोजन एक साथ प्रदेश के 12 स्थानों पर किया जा रहा है। यह आयोजन 30 मार्च, 2023 को विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल एवं उज्जैन में आयोजित होगा। इसके अलावा चित्रकूट में 24-30 मार्च, 2023 एवं उमरिया में 28-30 मार्च, 2023 तक प्राकट्य पर्व आयोजित किया जा रहा है। संचालक संस्कृति श्री अदिति कुमार त्रिपाठी ने बताया कि प्राकट्य पर्व के अंतर्गत श्रीराम आधारित कला प्रस्तुतियां मंचित की जायेंगी, जिसमें नृत्यनाटिका, भजन, गायन, नृत्य इत्यादि शामिल होंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '4/11/2023 16:38', 1),
(182, '॥ प्राकट्य पर्व ||', 'सुगम संगीत', 'Hybrid', '', '30-Mar-23', '30-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'श्रीराम राजा मंदिर, ओरछा धाम- निवाड़ी', 'श्रीराम राजा मंदिर, ओरछा धाम- निवाड़ी', 'Madhya Pradesh', '', 'Niwadi', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा रामनवमीं के पावन अवसर पर \"प्राकट्य पर्व\" का आयोजन एक साथ प्रदेश के 12 स्थानों पर किया जा रहा है। यह आयोजन 30 मार्च, 2023 को विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल एवं उज्जैन में आयोजित होगा। इसके अलावा चित्रकूट में 24-30 मार्च, 2023 एवं उमरिया में 28-30 मार्च, 2023 तक प्राकट्य पर्व आयोजित किया जा रहा है। संचालक संस्कृति श्री अदिति कुमार त्रिपाठी ने बताया कि प्राकट्य पर्व के अंतर्गत श्रीराम आधारित कला प्रस्तुतियां मंचित की जायेंगी, जिसमें नृत्यनाटिका, भजन, गायन, नृत्य इत्यादि शामिल होंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(183, '॥ प्राकट्य पर्व ||', 'लोक एवं जनजातीय', 'Hybrid', '', '30-Mar-23', '30-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'मंगल भवन परिसर, उमरिया', 'मंगल भवन परिसर, उमरिया', 'Madhya Pradesh', '', 'Umaria', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा रामनवमीं के पावन अवसर पर \"प्राकट्य पर्व\" का आयोजन एक साथ प्रदेश के 12 स्थानों पर किया जा रहा है। यह आयोजन 30 मार्च, 2023 को विदिशा, पन्ना, राजगढ़, शिवपुरी, छिंदवाड़ा, नीमच, रतलाम, ओरछा, शहडोल एवं उज्जैन में आयोजित होगा। इसके अलावा चित्रकूट में 24-30 मार्च, 2023 एवं उमरिया में 28-30 मार्च, 2023 तक प्राकट्य पर्व आयोजित किया जा रहा है। संचालक संस्कृति श्री अदिति कुमार त्रिपाठी ने बताया कि प्राकट्य पर्व के अंतर्गत श्रीराम आधारित कला प्रस्तुतियां मंचित की जायेंगी, जिसमें नृत्यनाटिका, भजन, गायन, नृत्य इत्यादि शामिल होंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(184, '॥ प्राकट्य पर्व ||', 'सुगम संगीत', 'Hybrid', '', '30-Mar-23', '30-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय, उज्जैन', 'त्रिवेणी कला संग्रहालय, उज्जैन', 'Madhya Pradesh', '', 'Ujjain', '', '', '', '', '', '', 'श्रीराम कथा की लीला प्रस्तुतियों पर एकाग्र प्राकट्य पर्व के अन्तर्गत गायन एवं नृत्य आधारित सांस्कृतिक प्रस्तुतियों के आयोजन / सुश्री स्वाति उखले एवं साथी, उज्जैन भक्ति गायन - मालवी गीतों में श्री राम / सश्री नीरजा सक्सेना एवं साथी, भोपाल - भरतनाट्यम समूह नृत्य प्रस्तुति दशावतार / श्री राकेश निराला एवं पामेला जैन, मुम्बई श्रीराम पर केन्द्रित भक्ति गायन प्रस्तुति / स्थान- मुक्ताकाश मंच, त्रिवेणी कला संग्रहालय, उज्जैन', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(185, 'प्राकट्य पर्व', 'लोक एवं जनजातीय', 'Hybrid', 'https://www.youtube.com/live/9QVwdbZky64?feature=s', '30-Mar-23', '30-Mar-23', '7:00 PM', '11:00 PM', 'Free', '', 'त्रिवेणी कला संग्रहालय, उज्जैन', 'त्रिवेणी कला संग्रहालय, उज्जैन', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'मध्यप्रदेश शासन का संस्कृति विभाग, मध्यप्रदेश पर्यटन विभाग के सहयोग से 29 मार्च, 2023 को शाम 6:30 बजे से रवींद्र भवन में \'\'त्रि सैन्य बैंड संगीत कार्यक्रम\'\' का आयोजन करेगा। मां भारती के इन शूरवीरों का उत्साह बढ़ाने आप सब अवश्य आएं।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(186, 'त्रि सैन्य बैंड संगीत कार्यक्रम', 'अन्य', 'Hybrid', 'https://youtube.com/live/2A9480y_MsI?feature=share', '29-Mar-23', '29-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'रवींद्र भवन, भोपाल', 'रवींद्र भवन, भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'जातिवाद एवं सामंतवादी पर केन्द्रित मराठी नाटक।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '3/29/2023 17:35', 1),
(187, 'नाटक \"कोर्ट मार्शल\"', 'रंगमंच एवं लोकनाट्य', 'Play', '', '27-Mar-23', '27-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'नाट्य मंदिर, दाल बाजार', 'ग्वालियर', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', 'मध्यप्रदेश नाट्य विद्यालय के वर्तमान सत्र 2022-23 के विद्यार्थियों के साथ श्री टीकम जोशी, निदेशक, मध्यप्रदेश नाट्य विद्यालय के निर्देशन में सम्राट विक्रमादित्य के जीवन पर आधारित कक्षाभ्यास नाट्य प्रस्तुति का प्रदर्शन विश्‍व रंगमंच दिवस के अवसर पर दिनांक 27 मार्च 2023 को मध्यप्रदेश नाट्य विद्यालय एवं भारत भवन के संयुक्त तत्वाधान में कक्षाभ्यास प्रस्तुति ‘‘सम्राट विक्रमादित्य’’ का मंचन भारत भवन के अंतरंग सभागार में किया जा रहा है।', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '3/20/2023 18:16', 1),
(188, 'कक्षाभ्‍यास नाट्य प्रस्‍तुति', 'रंगमंच एवं लोकनाट्य', 'Play', '', '27-Mar-23', '27-Mar-23', '7:00 PM', '8:30 PM', 'Free', '', 'अन्‍तरंग भारत भवन भोपाल', 'अन्‍तरंग भारत भवन भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'मराठी कथा एवं पुस्‍तक का विमोचन।', 'मध्य प्रदेश नाट्य विद्यालय, भोपाल', '0000-00-00 00:00:00', '3/24/2023 16:36', 1),
(189, 'लोकापर्ण सोहळा एवं कथाकथन', 'साहित्य', 'Lecture', '', '26-Mar-23', '26-Mar-23', '5:00 PM', '8:00 PM', 'Free', '', 'विवेकानंंद सभागार', 'राष्‍ट्रोत्‍थान न्‍यास भवन, विवेकानंद मार्ग', 'Madhya Pradesh', 'Gwalior', 'Gwalior', '', '', '', '', '', '', '', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(190, 'घुंघरू\' कथक नृत्‍य शैली पर एकाग्र', 'अन्य', 'Other', 'https://youtube.com/live/nW9pPAdQEeo?feature=share', '24-Mar-23', '26-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'संस्‍कृृति थियेटर कल्‍चरल स्‍ट्रीट, भंवरलाल गार्डन, जबलपुर', 'संस्‍कृृति थियेटर कल्‍चरल स्‍ट्रीट, भंवरलाल गार्डन, जबलपुर', 'Madhya Pradesh', 'Jabalpur', 'Jabalpur', '', '', '', '', '', '', 'श्रीरामकथा की लीला प्रस्तुतियाँ एकाग्र ॥ प्राकट्य पर्व || 24 से 30 मार्च, 2023 प्रतिदिन सायं 6.30 बजे से रामघाट, बिजावर मंदिर, चित्रकूट, जिला- सतना', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '3/26/2023 19:14', 1),
(191, '॥ प्राकट्य पर्व ||', 'सुगम संगीत', 'Hybrid', '', '24-Mar-23', '30-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'रामघाट, बिजावर मंदिर, चित्रकूट, जिला- सतना', 'रामघाट, बिजावर मंदिर, चित्रकूट, जिला- सतना', 'Madhya Pradesh', 'Satna', 'Satna', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग ‘‘शहीद दिवस’‘ के पावन अवसर पर एक प्रभावशाली कार्यक्रम का आयोजन कर रहा है। विख्यात गीतकार मनोज ‘मुंतशिर’ शुक्ला एवं सांगीतिक दल 23 मार्च, 2023 को अमर क्रांतिकारी भगतसिंह, राजगुरु और सुखदेव की शहादत का ‘स्मृति प्रसंग’ प्रस्तुत करेंगे। यह कार्यक्रम भोपाल स्थित रवीन्द्र सभागम, रवीन्द्र भवन परिसर में शाम 6:30 बजे आयोजित होगा। क्रांतिकारियों को अपने श्रद्धा सुमन अर्पित करने के लिए आप भी इस आयोजन में अवश्य सम्मिलित हों। आप सभी आग्रहपूर्वक आमंत्रित हैं।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(192, '‘‘शहीद दिवस’‘ के पावन अवसर पर ‘स्मृति प्रसंग’', 'सुगम संगीत', 'Hybrid', 'https://www.youtube.com/watch?v=DDdybyf5ea4', '23-Mar-23', '23-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'रवीन्द्र सभागम, रवीन्द्र भवन परिसर भोपाल', 'रवीन्द्र सभागम, रवीन्द्र भवन परिसर भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'जनजातीय लोकचित्र शैली ‘गोंड’ का संवर्धन एवं प्रचार', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '3/23/2023 18:32', 1),
(193, 'जनजातीय लोकचित्र शिविर', 'समकालीन कलाएं', 'Other', '', '22-Mar-23', '29-Mar-23', '5:00 PM', '7:00 PM', 'Free', '', 'होटल द सन रिसोर्ट', 'ताला, बांधवगढ़', 'Madhya Pradesh', 'Umaria', 'Bandhavgarh', '', '', '', '', '', '', 'श्री रामलीला उत्सव 22 से 28 मार्च, 2023, प्रतिदिन सायं 7.00 बजे से श्री नरेन्द्र मोदी खेल प्रशाल, नागदा- उज्जैन', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '', 1),
(194, 'श्री रामलीला उत्सव', 'लोक एवं जनजातीय', 'Play', '', '22-Mar-23', '28-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'श्री नरेन्द्र मोदी खेल प्रशाल, नागदा- उज्जैन', 'श्री नरेन्द्र मोदी खेल प्रशाल, नागदा- उज्जैन', 'Madhya Pradesh', 'Ujjain', 'Nagda', '', '', '', '', '', '', 'मराठी के पारम्‍परिक पर्व-गीतों की बहुविध प्रस्‍तुतियां।', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '4/11/2023 13:44', 1),
(195, 'स्‍वागत हे नववर्ष', 'सुगम संगीत', 'Hybrid', '', '21-Mar-23', '21-Mar-23', '7:00 PM', '10:30 PM', 'Free', '', 'शहीद स्‍मारक', 'गोल बाजार', 'Madhya Pradesh', 'Jabalpur', 'Jabalpur', '', '', '', '', '', '', 'अकादमी द्वारा पारम्परिक पर्व चैतीचण्ड के अवसर पर सिन्धू जागृत समाज उज्जैन के स्‍थानीय सहयोग से संत हिरदाराम साहित्य गौरव सम्मान एवं श्रेष्ठ पुरस्कार प्रदान किये जाने हेतु सम्मान समारोह एवं सांस्कृतिक कार्यक्रम', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '3/15/2023 16:48', 1),
(196, 'झूलण ईंदो झूलींदो', 'पुरुस्कार एवं अलंकरण', 'Other', '', '19-Mar-23', '19-Mar-23', '6:00 PM', '9:30 PM', 'Free', '', 'होटल अथर्व', 'हरि फाटक रोड उज्जैन', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'नारी शक्ति की गौरवशाली परंपरा (पंजाबी वीरांगनाओं की शौर्यगाथा के संदर्भ में) व्याख्यान एवं सम्मान समारोह व्याख्यान वक्ता - बीबी अमृत कौर, उज्जैन स्थानीय महिला दलों द्वारा कीर्तन दिनांक 19 मार्च 2023, समयः- साय 7.00 बजे स्थानः- गुरूद्वारा परिसर, गंगा आश्रम, सीहोर आयोजन में आप सहपरिवार सादर आमंत्रित हैं। विशेष सहयोग श्री गुरू सिंघ सभा गुरूद्वारा, सीहोर, सामाजिक महिला विंग सीहोर निदेशक नीरू सिंह ज्ञानी पंजाबी साहित्य अकादमी म.प्र. शासन, संस्कृति विभाग', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '4/8/2023 16:36', 1),
(197, 'नारी शक्ति की गौरवशाली परंपरा', 'पुरुस्कार एवं अलंकरण', 'Hybrid', '', '19-Mar-23', '19-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'गुरूद्वारा परिसर, गंगा आश्रम, सीहोर', 'गुरूद्वारा परिसर, गंगा आश्रम, सीहोर', 'Madhya Pradesh', '', 'Sehore', '', '', '', '', '', '', '', 'पंजाबी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(198, 'नाट्य प्रस्‍तुति', 'रंगमंच एवं लोकनाट्य', 'Play', '', '19-Mar-23', '19-Mar-23', '7:30 PM', '9:00 PM', 'Free', '', 'kalidas Academy Ujjain', 'Kalidas Academy Ujjain', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'भारतीय सिन्धू सभा ऐं पूज्य सिन्धी पंचायत जे सहकार सां हेमू कालाणी जन्म शताब्दी वर्ष कार्यक्रम जे तहत यादि कयो कुर्बानी', 'मध्य प्रदेश नाट्य विद्यालय, भोपाल', '0000-00-00 00:00:00', '', 1),
(199, 'यादि कयो कुर्बानी', 'साहित्यिक एवं सांस्कृतिक', 'Other', '', '18-Mar-23', '18-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'गुरुनानक सिन्धी धर्मशाला', 'सिन्धी कॉलोनी, गाँधी वार्ड, बीना', 'Madhya Pradesh', 'Sagar', 'beena', '', '', '', '', '', '', '', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '4/8/2023 16:40', 1),
(200, 'उस्‍ताद अलाउदृीन खां समारोह', 'शास्त्रीय संगीत', 'Other', 'https://youtube.com/live/zq7P7h-C2vU?feature=share', '17-Mar-23', '19-Mar-23', '8:00 PM', '10:00 PM', 'Free', '', 'बस स्‍टैण्‍ड परिसर, देवी जी मार्ग, मैहर', 'बस स्‍टैण्‍ड परिसर, देवी जी मार्ग, मैहर', 'Madhya Pradesh', 'Satna', 'Maihar', '', '', '', '', '', '', 'मड़ई उत्सव,जनजातीय नृत्योत्सव 17-19 मार्च 2023, सायं 6.30 बजे से न्यू ग्राउण्ड -बैतूल आयोजन- जनजातीय लोक कला एवं बोली विकास अकादमी, भोपाल सहयोग - जिला प्रशासन बैतूल', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '3/19/2023 19:56', 1),
(201, 'मड़ई उत्सव ,जनजातीय नृत्योत्सव', 'लोक एवं जनजातीय', 'Hybrid', '', '17-Mar-23', '19-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'न्यू ग्राउण्ड - बैतूल', 'न्यू ग्राउण्ड - बैतूल', 'Madhya Pradesh', 'Betul', 'Betul', '', '', '', '', '', '', 'भारत भवन बहुप्रतिष्ठित साहित्यिक कृतियों पर केन्द्रित फिल्मों का प्रदर्शन 16 से 19 मार्च 2023, प्रतिदिन साय॑ 7.00 बजे 16 मार्च गाइड (183 मिनट) निर्देशक :विजय आनंद (आर.के नाशायण के उपन्यास पर आधारित) 17 मार्च परिणीता: (130 मिनट) निर्देशक : प्रदीप सरकार (शरद चन्द्र चट्टोपाध्याय के उपन्यास पर आधारित) 18 मार्च गुनाहों का देवता (150 मिनट) निर्देशक : कवल शर्मा (धर्मवीर भारती के उपन्यास पर आधारित) 19 मार्च उसने कहा था (135 मिनट) निर्देशक : मोनी भट्टाचार्य (चन्द्रधर शर्मा गुलेरी की कहानी पर आधारित) प्रवेश निःशुल्क उत्कृष्ट सिनेमा का अव्यवसायिक उपक्रम छवि प्रभाग, भारत भवन का आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '3/15/2023 21:41', 1),
(202, 'बहुप्रतिष्ठित साहित्यिक कृतियों पर केन्द्रित फिल्मों का प्रदर्शन', 'अन्य', 'Hybrid', '', '16-Mar-23', '19-Mar-23', '7:00 PM', '9:00 PM', 'Free', '', 'भारत भवन', 'भारत भवन', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'समकालीन कला पर आधारित राष्ट्रीय चित्रकला शिविर *‘तूलिका’* *समापन समारोह एवं प्रदर्शनी* (देश के प्रख्यात 16 चित्रकारों द्वारा सात दिवसीय शिविर में रचित चित्रों का प्रदर्शन) स्थान : रवीन्द्र भवन, भोपाल दिनांक : 16 मार्च, 2023 समय : सायं 5 बजे आप सभी सादर आमंत्रित हैं *मध्यप्रदेश शासन, संस्कृति विभाग का आयोजन*', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(203, 'समकालीन कला पर आधारित राष्ट्रीय चित्रकला शिविर *‘तूलिका’* *समापन समारोह एवं प्रदर्शनी*', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Hybrid', '', '16-Mar-23', '16-Mar-23', '5:00 PM', '8:00 PM', 'Free', '', 'रवीन्द्र भवन, भोपाल', 'रवीन्द्र भवन, भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'मराठी के लोक एवं पारंपरिक नृत्यों की बहुरंग प्रस्तुति।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '3/16/2023 16:43', 1),
(204, 'मराठी लोकधारा', 'लोक एवं जनजातीय', 'Hybrid', '', '11-Mar-23', '11-Mar-23', '7:30 PM', '10:30 PM', 'Free', '', 'श्री गजानन मंगल भवन', 'नागपुर छिंदवाड़ा रोड', 'Madhya Pradesh', 'Chhindwara', 'Sausar', '', '', '', '', '', '', 'मध्यप्रदेश शासन, संस्कृति विभाग द्वारा ज़िला प्रशासन दतिया के सहयोग से ‘‘दतिया फाग महोत्सव’’ का आयोजन 10 से 12 मार्च, 2023 तक स्टेडियम ग्राउंड, दतिया में किया जाएगा। ये रंगारंग कार्यक्रम शाम 7 बजे से आरंभ होंगे। इनमें फाग गायन, सुगम संगीत, नृत्य नाटिका, मयूर नृत्य तथा अखिल भारतीय कवि सम्मेलन शामिल हैं। देशभर के विख्यात कलाकार अपनी प्रस्तुतियां देंगे। इन मनभावन गतिविधियों का आप भी भरपूर आनंद ले सकते हैं। आप सभी सादर आमंत्रित हैं। इसमें प्रवेश निःशुल्क होगा।', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(205, '‘‘दतिया फाग महोत्सव’’', 'अन्य', 'Hybrid', 'https://youtube.com/live/Vc63Dqv2F6g?feature=share', '10-Mar-23', '12-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'स्टेडियम ग्राउंड, दतिया', 'स्टेडियम ग्राउंड, दतिया', 'Madhya Pradesh', '', 'Datia', '', '', '', '', '', '', 'समकालीन कला पर आधारित राष्ट्रीय चित्रकला शिविर ‘तूलिका’ 10—16 मार्च, 2023, रवीन्द्र भवन, भोपाल प्रातः 10:30 से सायं 6:30 तक इस 7 दिवसीय राष्ट्रीय चित्रकला शिविर के अवलोकन हेतु आप सभी सादर आमंत्रित हैं मध्यप्रदेश शासन, संस्कृति विभाग का आयोजन', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '3/11/2023 23:05', 1),
(206, '‘तूलिका’', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Hybrid', '', '10-Mar-23', '16-Mar-23', '10:30 AM', '6:00 PM', 'Free', '', 'रवीन्द्र भवन, भोपाल', 'रवीन्द्र भवन, भोपाल', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'संस्कृत कवि सम्मेलन एवं संस्कृत गीतों की प्रस्तुति', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '3/8/2023 8:19', 1),
(207, 'संस्कृत कवि सम्मेलन एवं संस्कृत गीतों की प्रस्तुति', 'साहित्यिक एवं सांस्कृतिक', 'Hybrid', '', '10-Mar-23', '10-Mar-23', '11:00 AM', '3:00 PM', 'Free', '', 'उज्जैन', 'अभिरंग नाट्यगृह', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'जनजातीय लोक कला एवं बोली विकास अकादमी द्वारा 10 एवं 11 मार्च,2023 सायं 6.30 बजे से मध्यप्रदेश जनजातीय संग्रहालय के मुक्ताकाश मंच पर फाग उत्सव का आयोजन किया जा रहा है। कार्यक्रम में प्रवेश निशुल्क है एवं आप सादर आमंत्रित हैं।', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '3/9/2023 13:18', 1),
(208, 'फाग उत्सव', 'लोक एवं जनजातीय', 'Hybrid', 'https://youtube.com/live/gYp8ExPMbOQ?feature=share', '10-Mar-23', '11-Mar-23', '6:30 PM', '10:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय, मुक्ताकाश मंच, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'सिन्धू विकास समिति, सतना जे सहकार सां हास्य सम्राट स्व. अशोक सुन्दराणी जी यादि में सिन्धी हास्य कवि सम्मेलन खिलंदड़नि जो ख़ैरु', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '3/11/2023 11:59', 1),
(209, 'खिलंदड़नि जो ख़ैरु', 'कवि सम्मलेन एवं मुशायरा', 'Other', '', '8-Mar-23', '8-Mar-23', '6:00 PM', '9:00 PM', 'Free', '', 'सिन्धू मंगल भवन', 'सिन्धी कॉलोनी सतना', 'Madhya Pradesh', 'Satna', 'Satna', '', '', '', '', '', '', 'अद्वैता युवा शिविर 2023 योग्यता: आयु सीमा 18 वर्ष से 40 वर्ष पंजीकरण शुल्क: पंजीकरण मुफ्त है शिविर शुल्क: चयनित प्रतिभागियों के लिए नि: शुल्क शिविर 1: दिनांक: 6 से 15 मार्च 2023 Venue: Shivanand Ashram, Ahmedabad, Gujarat Acharya: Swami Parmatmananda Saraswati ग्रंथा: यह एक रणनीति है। भाषाएँ: हिंदी और अंग्रेजी सीटें: 50 शिविर 2: दिनांक: 21 से 30 मार्च 2023 तक स्थान: चिन्मय तपोवन आश्रम, सिधबरी, हिमाचल प्रदेश Acharya: Swami Avyayananda Saraswati ग्रंथा: यह एक रणनीति है। भाषाएँ: हिंदी और अंग्रेजी सीटें: 50 शिविर 3: दिनांक: 15 से 25 जून 2023 स्थान: चिन्मय इंटरनेशनल फाउंडेशन, वेलियानाद, केरला Acharya: Swami Advayanand Saraswati Grantha: Aatmabodha भाषा: अंग्रेजी सीटें: 50 स्टेचूऑफ़ॉननेस पर रजिस्टर करें। संपर्क करें: +91 9977743216', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '4/10/2023 13:30', 1),
(210, 'अद्वैता युवा शिविर 2023', 'अन्य', 'Hybrid', '', '6-Mar-23', '6-Mar-23', '9:00 AM', '9:00 PM', 'Free', '', 'Shivanand Ashram, Ahmedabad, Gujarat', 'Shivanand Ashram, Ahmedabad, Gujarat', 'Gujrat', '', 'Ahmedabad', '', '', '', '', '', '', 'वर्ल्ड डांस अलायंस एशिया पेसिफिक चैप्टर की प्रस्तुति लयप्रवाह विभिन्न देशों के समकालीन नृत्याभिव्यक्तियों की झलकियां 28 फरवरी एवं 1 मार्च 2023 28 फरवरी ताईवान दक्षिण कोरिया 1 मार्च भारत कैनेडा रचनात्मक और जीवंत अभिव्यक्ति का हिस्ता बनने के लिए आप सभी सादर आमंत्रित हैं। शाम 7 बजे अंतरंग, भारत भवन, भोपाल उस्ताद अलाउद्दीन खां संगीत एवं कला अकादमी और भारत भवन का संयुक्त आयोजन', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(211, 'वर्ल्ड डांस अलायंस एशिया पेसिफिक चैप्टर की प्रस्तुति \"लयप्रवाह\"', 'अन्य', 'Hybrid', 'https://youtube.com/live/xi1-on-ig-k?feature=share', '1-Mar-23', '1-Mar-23', '7:00 PM', '11:00 PM', 'Free', '', 'अंतरंग, भारत भवन, भोपाल', 'अंतरंग, भारत भवन, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '3/1/2023 18:58', 1),
(212, 'कृतज्ञ मी कृतार्थ मी', 'रंगमंच एवं लोकनाट्य', 'Play', '', '28-Feb-23', '28-Feb-23', '6:00 PM', '9:00 PM', 'Free', '', 'रवीन्द्र सभागृह,', 'सर्किट हाउस के पास', 'Madhya Pradesh', 'Khandwa', 'Khandwa', '', '', '', '', '', '', 'संपदा समारोह के रूप में मनाया जाएगा भगोरिया पर्व जिला प्रशासन धार और जनजातीय लोक कला एवं विकास अकादमी द्वारा 28 फरवरी से 6 मार्च तक मनाया जाएगा महोत्सव जिसमें जनजातीय समुदाय के विभिन्न नर्तक दल देंगे भगोरिया हाटो में अपनी प्रस्तुतियां✍️', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(213, 'भगोरिया उत्सव', 'लोक एवं जनजातीय', 'Other', '', '28-Feb-23', '6-Mar-23', '10:00 AM', '6:00 PM', 'Free', '', 'भगोरिया हाट ,धार', 'भगोरिया हाट ,धार', 'Madhya Pradesh', 'Dhar', 'dhar', '', '', '', '', '', '', 'वर्ल्ड डांस अलायंस एशिया पेसिफिक चैप्टर की प्रस्तुति लयप्रवाह विभिन्न देशों के समकालीन नृत्याभिव्यक्तियों की झलकियां 28 फरवरी एवं 1 मार्च 2023 28 फरवरी ताईवान दक्षिण कोरिया 1 मार्च भारत कैनेडा रचनात्मक और जीवंत अभिव्यक्ति का हिस्ता बनने के लिए आप सभी सादर आमंत्रित हैं। शाम 7 बजे अंतरंग, भारत भवन, भोपाल उस्ताद अलाउद्दीन खां संगीत एवं कला अकादमी और भारत भवन का संयुक्त आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(214, 'वर्ल्ड डांस अलायंस एशिया पेसिफिक चैप्टर की प्रस्तुति \"लयप्रवाह\"', 'अन्य', 'Hybrid', 'https://www.youtube.com/live/fCNRSiL68tE?feature=s', '28-Feb-23', '28-Feb-23', '7:00 PM', '11:00 PM', 'Free', '', 'अंतरंग, भारत भवन, भोपाल', 'अंतरंग, भारत भवन, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'वर्ल्ड डांस अलायंस के एशिया पेसिफिक चैप्टर के माध्यम से उस्ताद अलाउद्दीन ख़ां संगीत एवं कला अकादमी और भारत भवन, भोपाल का संयुक्त आयोजन लयप्रवाह की दूसरी और अंतिम संध्याकालीन सभा में आज कैनेडा और भारत के समकालीन नृत्यों का आनंद उठा सकते हैं। खजुराहो नृत्य महोत्सव के तत्वावधान में वर्ल्ड डांस अलायंस के साथ 6 देशों के समकालीन नृत्य के कलाकारों ने छह दिवसीय कार्यशाला में सहभागिता की। कार्यशाला में भारतीय शास्त्रीय नृत्य के प्रतिष्ठित कलाकार जैसे गीता चंद्रन - भरतनाट्यम, शमा भाटे - कथक, लता सिंह मुंशी - भरतनाट्यम और सोनिया परचुरे - कत्थक के अलावा संगीता शर्मा - समकालीन नृत्य और भरत शर्मा जैसे समकालीन नृत्य कलाकार भी थे। कार्यशाला का उद्देश्य शास्त्रीय और समकालीन नृत्य को एक मंच प्रदान कर नृत्य की नई परिभाषा का संधान करना था जिसमें शास्त्रीय नृत्य की गरिमा, तकनीक और अस्मिता के साथ समकालीनता का रस भी घुला हुआ हो। नाचोम आर्ट्स फाउंडेशन, मणिपुर की एक समकालीन नृत्य संस्था है जिसका उद्देश्य नृत्य के माध्यम से जीवन के विभिन्न अनुभवों को प्रदर्शित करना है। सुरजीत नॉन्गमेपैकम का मानना है कि समकालीन नृत्य के माध्यम से वह स्वयं को बेहतर ढंग से समझकर अनुभव कर पाते हैं। साशर ज़रीफ डांस थिएटर के कलाकार भी आज नृत्य प्रस्तुतियां देंगें। शरीफ अज़रबैजानी मूल के कैनेडा निवासी हैं। उनकी नृत्य प्रस्तुतियों में अज़रबैजान की मिट्टी की खुशबू के साथ साथ सूफी का प्रभाव भी साफ झलकता है। उनका मानना है कि नृत्य एक अनवरत यात्रा है जिसका कोई मुकाम नहीं है। इस यात्रा में जो कुछ मिलता है वही हमें प्रकृति से जोड़कर हमें पूरा करता जाता है।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(215, 'वर्ल्‍ड डांस अलायंस \'\'लयप्रवाह', 'अन्य', 'Lecture', 'https://www.youtube.com/live/fCNRSiL68tE?feature=s', '28-Feb-23', '1-Mar-23', '7:00 PM', '10:00 PM', 'Free', '', 'अंतरंग, भारत भवन, भोपाल', 'अंतरंग, भारत भवन, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'अखिलभारतीय भास्‍कर रामचंद्र तांबे पुरस्‍कार वर्ष 2019 एवं 2020 श्री संदीप शिवाजीराव जगदाळे-औरंगाबाद श्री बा.बा. कोटंबे-परभणी श्री योगेश सोमण-पुणे सुश्री सुचिता घोरपडे-पुणे', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '3/2/2023 12:52', 1),
(216, 'अलंकरण समारोह', 'पुरुस्कार एवं अलंकरण', 'Other', '', '27-Feb-23', '27-Feb-23', '6:00 PM', '10:00 PM', 'Free', '', 'राज्‍य पशुपालन प्रशिक्षण संस्‍थान, सभागार', 'वैशाली नगर, कोटरा', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'वर्ष 2022-23 अमर शहीद हेमू कालानी का जन्मशताब्दी वर्ष है, उसी अवसर पर सिन्धी साहित्य अकादमी, मध्यप्रदेश संस्कृति परिषद, भोपाल द्वारा वर्ष भर प्रदेश के विभिन्न स्थानों पर हेमू कालानी पर केन्द्रित - व्याख्यान, नाटक, गीत-संगीत एवं प्रदर्शनी का आयोजन किया जा रहा है।', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '2/24/2023 18:41', 1),
(217, 'मोकल डे अ‍मड़ि', 'रंगमंच एवं लोकनाट्य', 'Play', '', '23-Feb-23', '23-Feb-23', '7:30 PM', '10:00 PM', 'Free', '', 'सिन्‍धी सेवा मण्‍डली धर्मशाला', 'बगीचा ग्राउण्‍ड', 'Madhya Pradesh', 'Khandwa', 'Khandwa', '', '', '', '', '', '', '*विश्व प्रसिद्ध पर्यटन स्थल खजुराहो में मध्यप्रदेश संस्कृति विभाग द्वारा परिकल्पित ‘आदिवर्त : जनजातीय एवं लोक कला राज्य संग्रहालय’ का लोकार्पण एवं राज्य शिखर सम्मान अलंकरण समारोह का आयोजन 22 फरवरी को* राज्य शिखर सम्मान अलंकरण समारोह - मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्ठित राज्य शिखर सम्मान अलंकरण समारोह का आयोजन आदिवर्त जनजातीय एवं लोककला राज्य संग्रहालय, खजुराहो में 22 फरवरी, 2023 को सायं 6 बजे से आयोजित किया जा रहा है। इस अवसर पर राज्य शिखर सम्मान (हिन्दी साहित्य) वर्ष-2021 अश्विनी कुमार दुबे, इंदौर, राज्य शिखर सम्मान (उर्दू साहित्य) वर्ष-2021 डाॅ. नरेन्द्र वीरमणि, इंदौर, राज्य शिखर सम्मान (संस्कृत साहित्य) वर्ष-2021 डाॅ. भगवतीलाल राजपुरोहित, उज्जैन, राज्य शिखर सम्मान (शास्त्रीय संगीत) वर्ष-2021 पण्डित श्रीधर व्यास, उज्जैन, राज्य शिखर सम्मान (शास्त्रीय नृत्य) वर्ष-2021 डाॅ. विजया शर्मा, भोपाल, राज्य शिखर सम्मान (रूपंकर कलाएं) वर्ष-2021 अनिल कुमार, भोपाल, राज्य शिखर सम्मान (नाटक) वर्ष-2021 प्रशांत खिरवड़कर, भोपाल, राज्य शिखर सम्मान (जनजातीय एवं लोक कलाएं) वर्ष-2021 सावनी बाई, डिण्डोरी, राज्य शिखर सम्मान (दुर्लभ वाद्ययंत्र) वर्ष-2021 मुन्ने खां, भोपाल को प्रदान किया जावेगा। आदिवर्त संग्रहालय - मध्यप्रदेश की प्रमुख जनजातियों के सृष्टि मिथकों में कुछ जीव-जन्तुओं का जिक्र बार-बार आता है। चार सृष्टि कथाओं में धरती की खोज करने की जिम्मेदारी कौवे को ही सौंपी गई। इन मिथकों में संसार की सृष्टि शून्य से शुरू नहीं होती। धरती, सूरज, चाँद बनने के पहले भी जल और जल के जीव जैसे केकड़ा, कछुआ, सर्प, केंचुआ आदि मौजूद थे। पाताल में चली गई धरती केंचुए के पास थी। सर्प, कछुए और केकड़े ने उसे वापस लाने में मदद की और फिर मकड़ी द्वारा पानी की सतह पर बुने गये जाल पर धरती को छबाया गया। गोण्ड कलाकारों द्वारा तीन वृक्षों के तनों पर मिथकीय अभिप्रायों को उकेरकर बनाया संग्रहालय का यह प्रवेश द्वार आदिवासी समाजों के जीवन की निरन्तरता के प्रतीकों से सुसज्जित है। जंगल में रहने वाले बाघदेव भी सब जनजातियों में पूजनीय हैं, इसलिये बाघ का मुख भी यहां उकेरा गया है।', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '4/10/2023 15:35', 1);
INSERT INTO `programs` (`id`, `program_name`, `program_category`, `program_type`, `program_link`, `starting_date`, `end_date`, `starting_time`, `end_time`, `entry_type`, `chief_guest`, `venu`, `address`, `state`, `district`, `city`, `pincode`, `profile_img1`, `profile_img2`, `profile_img3`, `profile_img4`, `date_of_email`, `about`, `department_by`, `created_at`, `updated_at`, `status`) VALUES
(218, '‘आदिवर्त : जनजातीय एवं लोक कला राज्य संग्रहालय’ का लोकार्पण एवं राज्य शिखर सम्मान अलंकरण समारोह', 'अन्य', 'Hybrid', 'https://youtube.com/live/kY-sqhahGjY?feature=share', '22-Feb-23', '22-Feb-23', '7:30 PM', '11:00 PM', 'Free', '', '‘आदिवर्त : जनजातीय एवं लोक कला राज्य संग्रहालय’, खजुराहो', '‘आदिवर्त : जनजातीय एवं लोक कला राज्य संग्रहालय’, खजुराहो', 'Madhya Pradesh', '', 'Khajuraho', '', '', '', '', '', '', 'खजुराहो नृत्य समारोह-2023 (अतिरिक्त गतिविधियां) मध्यप्रदेश पर्यटन की गतिविधियाँ 1. कैम्पिंग - पन्ना 2. विलेज टूर - पुराना खजुराहो गांव 3. वॉक विथ पारथी - रानीपुर, पन्ना 4. ई-बाईक टूर - खुजराहो मंदिर 5. वॉटर स्पोर्ट्स - कटनी नेपथ्य सायं 4 बजे से भारतीय नृत्य शैली \'कथकली\' का सांस्कृतिक परिदृश्य एवं कलायात्रा आर्ट-मार्ट सायं 4 बजे से भारत सहित विश्व के अन्य देशों की कला प्रदर्शनी कोरियो लैब-लय प्रवाह प्रातः 9.30 से 11 बजे- दोपहर 3 से 6.30 बजे भारत एवं पाँच देशों के नृत्य कलाकारों द्वारा नृत्य की नई भाषा का संधान कलावार्ता प्रातः 11 से 1 बजे कलाकार और कलाविदों का संवाद प्रणति सायं 4 बजे से वरिष्ठ चित्रकार श्रीमती शुभा वैद्य के कला अवदान पर एकाग्र प्रदर्शनी हुनर सायं 4 बजे से देशज ज्ञान एवं कला परम्परा का मेला समष्टि सायं 4 बजे से टेराकोटा और सिरेमिक राष्ट्रीय प्रदर्शनी-कार्यशाला मध्यप्रदेश राज्य रूपंकर कला पुरस्कार एवं प्रदर्शनी-2023', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/22/2023 19:10', 1),
(219, 'खजुराहो नृत्‍य समारोह', 'अन्य', 'Other', 'https://youtube.com/live/xi1-on-ig-k?feature=share', '20-Feb-23', '26-Feb-23', '7:00 PM', '10:00 PM', 'Free', '', 'खजुराहो फेस्टिवल ग्राउंड, खजुराहो', 'खजुराहो फेस्टिवल ग्राउंड, खजुराहो', 'Madhya Pradesh', 'Chhatarpur', 'Khajuraho', '', '', '', '', '', '', '‘महादेव’ महोत्सव..... भोजपुर में महादेव महोत्सव के तीसरे एवं अंतिम दिवस 20 फरवरी, 2023 को श्री अरविन्द सोनी एवं सुश्री सुनीता सिंह, भोपाल द्वारा गायन की प्रस्तुति एवं तत्पश्चात् अखिल भारतीय कवि सम्मेलन आयोजित होगा, जिसमें डाॅ. सर्वेश अस्थाना-लखनऊ, श्री अजातशत्रु-उदयपुर, श्री सुमित मिश्रा-ओरछा, सुश्री श्वेता सिंह-बड़ौदा, श्री प्रतीक चौहान-भिण्ड एवं सुश्री शिवांगी शर्मा-उज्जैन शामिल होंगी। आप सभी सादर आमंत्रित हैं प्रवेश निःशुल्क मध्यप्रदेश शासन, संस्कृति विभाग का आयोजन', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '2/28/2023 21:43', 1),
(220, '‘महादेव’ महोत्सव', 'अन्य', 'Hybrid', 'https://youtube.com/live/dO3OtJv4d78?feature=share', '20-Feb-23', '20-Feb-23', '6:30 PM', '10:00 PM', 'Free', '', 'शिव मंदिर प्रांगण, भोजपुर', 'शिव मंदिर प्रांगण, भोजपुर', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'अंतर्राष्ट्रीय मातृभाषा दिवस के अवसर पर छिंदवाड़ा में 20 फरवरी 2023 को ‘हा मां सिन्धी आहियां’ का आयोजन', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/20/2023 13:04', 1),
(221, 'हा मां सिन्धी आहियां', 'साहित्यिक एवं सांस्कृतिक', 'Other', '', '20-Feb-23', '20-Feb-23', '8:30 PM', '10:00 PM', 'Free', '', 'सिन्धू भवन मोहन नगर, छिंदवाड़ा', 'मोहन नगर, छिंदवाड़ा', 'Madhya Pradesh', 'Chhindwara', 'Chhindwara', '', '', '', '', '', '', '*‘महादेव महोत्सव’* शिव मंदिर प्रांगण, भोजपुर में आज दिनांक 19 फरवरी की प्रस्तुतियां *शिव केंद्रित नृत्य नाटिका* श्री कपिल शर्मा एवं साथी, भोपाल *शिव भजन* सुश्री भारती विश्वनाथन, भोपाल *सुगम संगीत* श्री कुणाल गांजावाला एवं साथी, मुंबई *सायं 7 बजे से* आप सादर आमंत्रित हैं प्रवेश निःशुल्क *आयोजक — मध्यप्रदेश शासन, संस्कृति विभाग* *सहयोग — जिला प्रशासन, रायसेन*', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '4/10/2023 15:20', 1),
(222, '‘महादेव’ महोत्सव', 'अन्य', 'Hybrid', 'https://www.youtube.com/watch?v=DIM3lNrBAVQ', '19-Feb-23', '19-Feb-23', '6:30 PM', '10:00 PM', 'Free', '', 'शिव मंदिर प्रांगण, भोजपुर', 'शिव मंदिर प्रांगण, भोजपुर', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'हनुमान चालीसा आधारित चित्रों की प्रदर्शनी - \'संकट मोचन\' / अंकन - सुनील विश्वकर्मा, वाराणसी / शुभारंभ - 19 फरवरी 2023 से (मंगलार अवकाश को छोड़कर) / वर्तमान समय - प्रातः 08 से रात्रि 10 बजे तक / स्थान - त्रिवेणी कला एवं पुरातत्व संग्रहालय, जयसिंहपुरा, रुद्रसागर - उज्जैन (म.प्र.)', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/19/2023 13:44', 1),
(223, 'प्रदर्शनी', 'लोक एवं जनजातीय', 'Other', '', '19-Feb-23', '19-Feb-23', '9:00 PM', '10:00 PM', 'Free', '', 'त्रिवेणी संग्रहालय, उज्जैन', 'त्रिवेणी संग्रहालय, उज्जैन', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'कलात्मक दीपकों की प्रदर्शनी - \"अभ्यर्थना\" / शुभारंभ - 19 फरवरी 2023 (मंगलार अवकाश को छोड़कर) / वर्तमान समय - प्रातः 08 से रात्रि 10 बजे तक / स्थान - त्रिवेणी कला एवं पुरातत्व संग्रहालय, जयसिंहपुरा, रुद्रसागर - उज्जैन (म.प्र.)', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '4/14/2023 12:37', 1),
(224, 'प्रदर्शनी', 'लोक एवं जनजातीय', 'Other', 'https://youtu.be/0ASXClZJ1CM', '19-Feb-23', '19-Feb-23', '9:00 PM', '10:00 PM', 'Free', '', 'त्रिवेणी संग्रहालय, उज्जैन', 'त्रिवेणी संग्रहालय, उज्जैन', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'महाशिवरात्रि पर्व के पावन अवसर पर शिव—सत्य की कला अभिव्यक्तियां ‘महादेव’ महोत्सव विश्वविख्यात धार्मिक एवं पर्यटन स्थल भोजपुर सहित शिव आराधना केंद्रित प्रदेश के नौ स्थानों में देश के विख्यात गायक, नर्तक एवं कवियों द्वारा प्रस्तुतियां आयोजित की जावेंगी भोजपुर में 18 से 20 फरवरी, 2023 सायं 6:30 एवं अन्य नौ स्थानों पर 18 फरवरी, 2023 सायं 6:30 बजे से आप सभी सादर आमंत्रित हैं प्रवेश निःशुल्क मध्यप्रदेश शासन, संस्कृति विभाग का आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '4/14/2023 12:52', 1),
(225, '‘महादेव’ महोत्सव', 'अन्य', 'Hybrid', 'https://youtube.com/live/BQdTGYLFfiE?feature=share', '18-Feb-23', '18-Feb-23', '6:30 PM', '10:00 PM', 'Free', '', 'शिव मंदिर प्रांगण, भोजपुर', 'शिव मंदिर प्रांगण, भोजपुर', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', 'आचार्य श्ंाकर के अद्वैत वेदान्त पर केन्द्रित शोध संगोष्ठी एवं शिव आधारित सांस्कृतिक प्रस्तुतियाँ।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/20/2023 12:18', 1),
(226, 'शांकर समारोह', 'साहित्य', 'Hybrid', '', '17-Feb-23', '18-Feb-23', '6:00 PM', '9:00 PM', 'Free', '', 'ओंकारेश्वर', 'नागर घाट', 'Madhya Pradesh', 'Khandwa', 'Omkareshwar', '', '', '', '', '', '', 'भर्तृहरि के साहित्य पर केन्द्रित शोधसंगोष्ठी, भर्तृहरि एवं लोकगायन तथा शास्त्रीय नृत्य कथक की प्रस्तुति', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '2/14/2023 15:28', 1),
(227, 'भर्तृहरि प्रसंग', 'साहित्य', 'Hybrid', '', '13-Feb-23', '14-Feb-23', '4:00 PM', '7:00 PM', 'Free', '', 'Ujjain', 'Kalidas Sanskrit Akademi', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', '', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '', 1),
(228, 'भारत भवन की 41वीं वर्षगॉंठ का समारोह', 'अन्य', 'Other', 'https://www.youtube.com/@BHARATBHAVAN/streams', '13-Feb-23', '22-Feb-23', '6:30 PM', '10:00 PM', 'Free', '', 'भारत भवन', 'शामला हिल्‍स', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '#Sham_E_Mausiqi #Mpurduacademy #mpculturedeptt Saturday ko Shaam 6:30 baje.. मध्यप्रदेश उर्दू अकादमी, मध्यप्रदेश संस्कृति परिषद, संस्कृति विभाग द्वारा स्वाधीनता के अमृत महोत्सव को समर्पित #शाम_ए_मौसीक़ी 11 फरवरी, 2023, सायं 6.30 बजे जनजातीय संग्रहालय, श्यामला हिल्स, भोपाल में प्रख्यात ग़ज़ल गायक सुनील मुंगी (यू.एस.ए.) एवं ख्यातिलब्ध क़व्वाल सलीम झनकार (ग्वालियर) अपनी प्रस्तुति देंगे। संगीत की इस सभा में आप सभी सादर साग्रह आमंत्रित हैं। डॉ. नुसरत मेहदी निदेशक म.प्र. उर्दू अकादमी ----- مدھیہ پردیش اردو اکادمی سنسکرتی پریشد، محکمہ ثقافت کے زیر اہتمام آزادی کا امرت مہوتسو کے تحت #شام_موسیقی بتاریخ :۱۱ فروری ۲۰۲۳ کو شام ۶:۳۰ بجے بمقام ٹرائیل میوزیم شیاملہ پلس ، بھوپال میں منعقد ہے۔ جس میں عالمی شہرت یافتہ غزل گلوکار سنیل مونگی ( یوایس اے) اور مشہور قوال سلیم جھنکار ( گوالیار ) غزلیں اور قوالیاں پیش کریں گے۔ موسیقی کی اس سہانی شام میں آپ بھی بعد احترام مدعو ہیں ڈاکٹر نصرت مہدی ڈائریکٹر ------', 'भारत भवन', '0000-00-00 00:00:00', '2/12/2023 18:16', 1),
(229, 'शाम ए मौसीक़ी', 'सुगम संगीत', 'Other', '', '11-Feb-23', '11-Feb-23', '6:30 PM', '9:30 PM', 'Free', '', 'जनजातीय संग्रहालय', 'श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', '?????', '', '', '', '', '', '', 'पारंपरिक कलाओं का उत्सव \"अटेर महोत्सव\" दिनांक - 10 से 12 फरवरी, 2023 समय - संध्‍या 5:00 बजे स्थान - अटेर किला ग्राउंड - भिंड मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्‍ठा आयोजन प्रवेश निःशुल्क है। आप सभी सादर आमंत्रित हैं', 'मध्य प्रदेश उर्दू अकादमी', '0000-00-00 00:00:00', '2/9/2023 17:34', 1),
(230, '\"अटेर महोत्सव\"', 'अन्य', 'Hybrid', '', '10-Feb-23', '12-Feb-23', '5:00 PM', '9:00 PM', 'Free', '', 'अटेर किला ग्राउंड - भिंड', 'अटेर किला ग्राउंड - भिंड', 'Madhya Pradesh', '', 'Bhind', '', '', '', '', '', '', 'पत्थर में शिल्पांकन ‘‘सर्जना’’ शिविर का आयोजन 9 से 28 फरवरी, 2023 को रवीन्द्र भवन परिसर स्थित नीलांबरी मैदान में होगा। इस 20 दिवसीय शिविर में देश के 16 ख्यातिलब्ध शिल्पकार 5-6 फिट के शिल्पों का निर्माण करेंगे।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(231, '‘‘सर्जना’’', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Hybrid', '', '9-Feb-23', '28-Feb-23', '10:00 AM', '5:00 PM', 'Free', '', 'रवीन्द्र भवन परिसर, भोपाल', 'रवीन्द्र भवन परिसर, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'मध्यप्रदेश नाट्य विद्यालय के सत्र 2022-23 के विद्यार्थियों के साथ आमंत्रित अतिथि व्याख्याता सुश्री हेमा सिंह के निर्देशन में पारसी रंगमंच शैली पर आधारित कक्षाभ्‍यास प्रस्तुति \'\'वीर अभिमन्‍यु\'\' तैयार किया गया है।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/8/2023 16:47', 1),
(232, 'कक्षाभ्‍यास प्रस्‍तुति', 'रंगमंच एवं लोकनाट्य', 'Play', '', '5-Feb-23', '6-Feb-23', '7:00 PM', '8:00 PM', 'Free', '', 'परधौनी सभागृह, मध्‍यप्रदेश जनजातीय संग्रहालय, श्‍यामला हिल्‍स, भोपाल', 'परधौनी सभागृह, मध्‍यप्रदेश जनजातीय संग्रहालय, श्‍यामला हिल्‍स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'शलाका 34 गोण्ड समुदाय के चित्रकार आत्माराम श्याम के चित्रों की प्रदर्शनी सह-विक्रय लिखन्दरा प्रदर्शनी दीर्घा 3 से 28 फरवरी, 2023 मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'मध्य प्रदेश नाट्य विद्यालय, भोपाल', '0000-00-00 00:00:00', '', 1),
(233, 'शलाका 34', 'लोक एवं जनजातीय', 'Other', '', '3-Feb-23', '28-Feb-23', '12:00 PM', '8:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(234, 'व्‍याख्‍यानमाला', 'अन्य', 'Lecture', '', '30-Jan-23', '31-Jan-23', '6:00 PM', '8:00 PM', 'Free', '', 'जाल सभागृह, इंदौर', 'जाल सभागृह, इंदौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', '*निर्झरणी महोत्सव* पवित्र माँ नर्मदा की लोक आस्था का पर्व 28 जनवरी 2023, सायं 6:30 बजे से *स्थान * भेड़ाघाट (जबलपुर) बरमानघाट (नरसिंहपुर) सेठानीघाट (नर्मदापुरम) नागरघाट, नेमावर (देवास) ममलेश्‍वर गौमुख घाट, ओंकारेश्‍वर (खण्डवा) रामघाट, मण्‍डलेश्‍वर (खरगोन) पुलिस ग्राउण्‍ड, डही (धार) शिवकुंज आशाग्राम (बड़वानी) जबलपुर बस स्टेण्ड (डिंडौरी) रपटा घाट, (मण्डला) आप सभी सादर आमंत्रित हैं.... प्रवेश निःशुल्क', 'भोजपुरी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(235, '*निर्झरणी महोत्सव*', 'लोक एवं जनजातीय', 'Hybrid', '', '28-Jan-23', '28-Jan-23', '6:30 PM', '10:00 PM', 'Free', '', 'भेड़ाघाट (जबलपुर)', 'भेड़ाघाट (जबलपुर)', 'Madhya Pradesh', '', 'Jabalpur', '', '', '', '', '', '', '*निर्झरणी महोत्सव* पवित्र माँ नर्मदा की लोक आस्था का पर्व 28 जनवरी 2023, सायं 6:30 बजे से *स्थान * भेड़ाघाट (जबलपुर) बरमानघाट (नरसिंहपुर) सेठानीघाट (नर्मदापुरम) नागरघाट, नेमावर (देवास) ममलेश्‍वर गौमुख घाट, ओंकारेश्‍वर (खण्डवा) रामघाट, मण्‍डलेश्‍वर (खरगोन) पुलिस ग्राउण्‍ड, डही (धार) शिवकुंज आशाग्राम (बड़वानी) जबलपुर बस स्टेण्ड (डिंडौरी) रपटा घाट, (मण्डला) आप सभी सादर आमंत्रित हैं.... प्रवेश निःशुल्क', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/3/2023 18:08', 1),
(236, '*निर्झरणी महोत्सव*', 'लोक एवं जनजातीय', 'Hybrid', '', '28-Jan-23', '28-Jan-23', '6:30 PM', '10:00 PM', 'Free', '', 'रामघाट, मण्‍डलेश्‍वर', 'रामघाट, मण्‍डलेश्‍वर', 'Madhya Pradesh', '', 'Khargone', '', '', '', '', '', '', '*निर्झरणी महोत्सव* पवित्र माँ नर्मदा की लोक आस्था का पर्व 28 जनवरी 2023, सायं 6:30 बजे से *स्थान * भेड़ाघाट (जबलपुर) बरमानघाट (नरसिंहपुर) सेठानीघाट (नर्मदापुरम) नागरघाट, नेमावर (देवास) ममलेश्‍वर गौमुख घाट, ओंकारेश्‍वर (खण्डवा) रामघाट, मण्‍डलेश्‍वर (खरगोन) पुलिस ग्राउण्‍ड, डही (धार) शिवकुंज आशाग्राम (बड़वानी) जबलपुर बस स्टेण्ड (डिंडौरी) रपटा घाट, (मण्डला) आप सभी सादर आमंत्रित हैं.... प्रवेश निःशुल्क', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/2/2023 14:52', 1),
(237, '*निर्झरणी महोत्सव*', 'लोक एवं जनजातीय', 'Hybrid', '', '28-Jan-23', '28-Jan-23', '6:30 PM', '10:00 PM', 'Free', '', 'सेठानीघाट (नर्मदापुरम)', 'सेठानीघाट (नर्मदापुरम)', 'Madhya Pradesh', '', 'Narmadapuram', '', '', '', '', '', '', 'विमुक्त एवं घुमंतू समुदाय की सांस्कृतिक-कला परंपरा पर एकाग्र लोकरंग 26 से 30 जनवरी, 2023 तक रवींद्र भवन परिसर में प्रतिदिन दोपहर 02 बजे से अलग-अलग देशों तथा राज्यों की गतिविधियां-शिल्प मेला संयोजित किया जा रहा है। कार्यक्रम में आप सादर आमंत्रित हैं, प्रवेश निःशुल्क है।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(238, 'लोकरंग', 'लोक एवं जनजातीय', 'Hybrid', 'https://www.youtube.com/live/iqFjLpZy0Cg?feature=s', '26-Jan-23', '30-Jan-23', '7:00 PM', '11:00 PM', 'Free', '', 'रवीन्द्र भवन परिसर- भोपाल', 'रवीन्द्र भवन परिसर- भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'गणतंत्र दिवस की पूर्व संध्या पर अखिल भारतीय कवि सम्मेलन दिनांक : 25/01/2023 समय : सायं 7 बजे से स्थान : अंजनी सभागृह, रवीन्द्र भवन आप सभी सादर आमंत्रित हैं प्रवेश निःशुल्क मध्यप्रदेश शासन, संस्कृति विभाग का आयोजन', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '1/30/2023 16:44', 1),
(239, 'अखिल भारतीय कवि सम्मेलन', 'कवि सम्मलेन एवं मुशायरा', 'Hybrid', 'https://www.youtube.com/watch?v=Eszl94UVGbo', '25-Jan-23', '25-Jan-23', '7:00 PM', '11:00 PM', 'Free', '', 'अंजनी सभागृह, रवीन्द्र भवन', 'रवीन्द्र भवन', 'Madhya Pradesh', '', 'Bhopal', '', '', '', '', '', '', '', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '2/8/2023 17:18', 1),
(240, 'रागदारी', 'अन्य', 'Lecture', '', '24-Jan-23', '25-Jan-23', '4:00 PM', '6:00 PM', 'Free', '', 'रवीन्‍द्र नाट्य गृह, इंदौर', 'रवीन्‍द्र नाट्य गृह, इंदौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'उस्ताद अमीर ख़ाँ की स्मृति में आयोजित राग अमीर 23 से 25 जनवरी, 2023 समय - संध्‍या 7:00 बजे स्थान - रवीन्द्र नाट्य गृह, इन्दौर मध्यप्रदेश शासन, संस्कृति विभाग का प्रतिष्‍ठा आयोजन', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '', 1),
(241, 'राग अमीर', 'शास्त्रीय संगीत', 'Hybrid', 'https://www.youtube.com/live/0-vg2aIXWLU?feature=s', '23-Jan-23', '25-Jan-23', '7:00 PM', '10:00 PM', 'Free', '', 'रवीन्‍द्र नाट्य गृह, इंदौर', 'रवीन्‍द्र नाट्य गृह, इंदौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', '', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(242, 'राग अमीर', 'शास्त्रीय संगीत', 'Other', '', '23-Jan-23', '25-Jan-23', '7:00 PM', '10:00 PM', 'Free', '', 'रवीन्‍द्र नाट्य गृह, इंदौर', 'रवीन्‍द्र नाट्य गृह, इंदौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', '', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '', 1),
(243, 'रंग अमीर', 'रूपंकर,प्रदर्शन एवं अन्य ललित कलाएं', 'Other', '', '23-Jan-23', '27-Jan-23', '4:00 PM', '8:00 PM', 'Free', '', 'देवलालीकर कलावीथिका एमजी रोड, इंंदौर', 'देवलालीकर कलावीथिका एमजी रोड, इंंदौर', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', 'कालिदास साहित्य पर केन्द्रित शोध संगोष्ठी, लोकप्रिय व्याख्यान, चित्रकला प्रदर्शनी प्राचीन अस्त्र-शस्त्रों की प्रदर्शनी, शास्त्रीय नृत्य', 'उस्ताद अलाउद्दीन खान संगीत कला अकादमी', '0000-00-00 00:00:00', '2/13/2023 18:25', 1),
(244, 'कालिदास प्रसंग', 'साहित्य', 'Hybrid', '', '21-Jan-23', '22-Jan-23', '6:00 PM', '9:00 PM', 'Free', '', 'Mandsaur', 'कुशाभाऊ ठाकरे प्रेक्षागृह, शा. राजीव गांधी स्ना. महा., मन्दसौर', 'Madhya Pradesh', 'Mandsaur', 'Mandsaur', '', '', '', '', '', '', 'वेद दर्शन साहित्य कला पर केन्द्रित कार्यक्रम तथा चारो वेदों से शाखास्वाथ्याय', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '1/20/2023 15:17', 1),
(245, 'कल्पवल्ली', 'साहित्य', 'Discussion', '', '19-Jan-23', '20-Jan-23', '3:00 PM', '6:00 PM', 'Free', '', 'कालिदास संस्कृत अकादमी, उज्जैन', 'अभिरंग नाट्यग्रह', 'Madhya Pradesh', 'Ujjain', 'Ujjain', '', '', '', '', '', '', 'मराठी कला एवं साहित्‍य चर्चा, परिचर्चा एवं पुस्‍तक प्रदर्शनी आदि।', 'कालिदास संस्कृत अकादमी', '0000-00-00 00:00:00', '1/18/2023 16:51', 1),
(246, 'मराठी साहित्‍य सम्‍मेलन', 'साहित्य', 'Lecture', '', '16-Jan-23', '17-Jan-23', '11:00 AM', '7:00 PM', 'Free', '', 'प्रीतमलाल दुआ सभागृह', 'रीगल चौराहा', 'Madhya Pradesh', 'Indore', 'Indore', '', '', '', '', '', '', '*अपने अपने राम* वक्ता — डॉ. कुमार विश्वास *14 जनवरी, 2023* स्थान — गेरिसन ग्राउंड, महू समय - शाम 7:00 बजे से\' आयोजन — मध्यप्रदेश शासन, संस्कृति विभाग सहयोग — जिला प्रशासन, इन्दौर प्रवेश निःशुल्क *आप सभी सादर आमंत्रित हैं*', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1),
(247, '*अपने अपने राम*', 'अन्य', 'Hybrid', '', '14-Jan-23', '14-Jan-23', '7:00 PM', '10:00 PM', 'Free', '', 'गेरिसन ग्राउंड, महू', 'गेरिसन ग्राउंड, महू', 'Madhya Pradesh', 'Bhind', 'Mau', '', '', '', '', '', '', 'ताप्ती महोत्सव 13 - 14 जनवरी, 2023 प्रतिदिन सायं 7 बजे से, हाई स्कूल मैदान , मुलताई आप सभी सादर आमंत्रित हैं. (प्रवेश नि:शुल्क)', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(248, 'ताप्ती महोत्सव', 'सुगम संगीत', 'Hybrid', 'https://www.youtube.com/watch?v=eG1VB1DMyFw', '13-Jan-23', '14-Jan-23', '7:00 PM', '10:00 PM', 'Free', '', 'हाई स्कूल मैदान , मुलताई', 'मुलताई', 'Madhya Pradesh', '', 'multai', '', '', '', '', '', '', 'मराठी के बहुविध विषयों पर व्‍याख्‍यान।', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(249, 'मकर संक्रमण व्‍याख्‍यानमाला', 'साहित्य', 'Lecture', '', '11-Jan-23', '15-Jan-23', '7:00 PM', '9:00 PM', 'Free', '', 'श्री दत्‍त मंदिर', 'गोल बाजार', 'Madhya Pradesh', 'Jabalpur', 'Jabalpur', '', '', '', '', '', '', 'हृदय दृश्यम\' का छठा संस्करण आयोजित होने वाला है। संगीत कार्यक्रम का भव्य आयोजन 8 से 10 जनवरी तक भोपाल तथा 9 से 11 जनवरी तक इंदौर में होगा। इसमें राष्ट्रीय, अंतरराष्ट्रीय और स्थानीय कलाकार अपनी प्रस्तुतियां देंगे। संगीत की स्वर लहरियों का भरपूर आनंद लेने, आप भी इसमें अवश्य शामिल हों। आप सभी संगीत प्रेमियों का हार्दिक स्वागत है।', 'मराठी साहित्य अकादमी', '0000-00-00 00:00:00', '2/10/2023 15:31', 1),
(250, 'हृदय दृश्यम\'', 'शास्त्रीय संगीत', 'Hybrid', 'https://www.youtube.com/watch?v=LkTojQRrZkQ', '8-Jan-23', '11-Jan-23', '5:00 PM', '10:00 PM', 'Free', '', 'Ravindra Bhawan Bhopal', 'Bhopal', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', 'शलाका 33 भील समुदाय के चित्रकार दुबू बारिया के चित्रों की प्रदर्शनी सह - विक्रय लिखन्दरा प्रदर्शनी दीर्घा 1 से 30 जनवरी, 2023 मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'संस्कृति संचालनालय, भोपाल (म.प्र.)', '0000-00-00 00:00:00', '', 1),
(251, 'शलाका 33', 'लोक एवं जनजातीय', 'Other', '', '1-Jan-23', '30-Jan-23', '12:00 PM', '7:00 PM', 'Free', '', 'मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'मध्यप्रदेश जनजातीय संग्रहालय श्यामला हिल्स, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '', 'जनजातीय लोक कला एवं बोली विकास', '0000-00-00 00:00:00', '', 1),
(252, 'अमर शहीद संत कंवरराम जी का वरसी महोत्सव', 'साहित्यिक एवं सांस्कृतिक', 'Other', '', '15-Oct-22', '16-Feb-23', '9:00 PM', '10:30 PM', 'Free', '', 'थद्दाराम कम्यूनिटी हॉल, संत हिरदाराम नगर,', 'संत हिरदाराम नगर, भोपाल', 'Madhya Pradesh', 'Bhopal', 'Bhopal', '', '', '', '', '', '', '', 'सिंधी साहित्य अकादमी', '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(11) NOT NULL,
  `promo` varchar(255) NOT NULL,
  `promoimage` varchar(255) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `id` int(11) NOT NULL,
  `purid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `purchasedate` varchar(20) NOT NULL,
  `billno` varchar(255) NOT NULL,
  `maindiscount` tinyint(1) DEFAULT NULL,
  `product` varchar(255) NOT NULL,
  `sno` int(11) NOT NULL,
  `unit` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `basic` float(10,2) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `rate` float(10,2) NOT NULL,
  `freeqty` varchar(255) NOT NULL,
  `discountper` int(10) NOT NULL,
  `discountamt` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `nettotal` float(10,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `gdn_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorderbill`
--

CREATE TABLE `purchaseorderbill` (
  `id` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `purchasedate` varchar(20) NOT NULL,
  `billno` varchar(255) NOT NULL,
  `maindiscount` tinyint(1) DEFAULT NULL,
  `totalqty` int(200) NOT NULL,
  `nettotal` float(10,2) DEFAULT NULL,
  `amtword` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remark` varchar(10000) DEFAULT NULL,
  `p_div` varchar(100) DEFAULT NULL,
  `p_comp` varchar(100) DEFAULT NULL,
  `shipping_charge` int(11) DEFAULT NULL,
  `subtotal` float(10,2) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_for` varchar(100) DEFAULT NULL COMMENT 'return or purchase'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseorderbill`
--

INSERT INTO `purchaseorderbill` (`id`, `vendorid`, `purchasedate`, `billno`, `maindiscount`, `totalqty`, `nettotal`, `amtword`, `created_at`, `updated_at`, `date`, `status`, `remark`, `p_div`, `p_comp`, `shipping_charge`, `subtotal`, `price`, `product_id`, `order_for`) VALUES
(1, 3, '01 Sep 22', 'NK254106', 1, 0, 0.00, '', '2022-09-01 13:32:31', '2022-09-01 13:32:31', '01-Sep-2022', 1, '', '', '', 0, 0.00, NULL, NULL, 'return'),
(2, 2, '09 Oct 22', 'NK071660', 1, 0, 0.00, '', '2022-10-09 14:47:52', '2022-10-09 14:47:52', '09-Oct-2022', 1, '', '', '', 0, 0.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quatationbill`
--

CREATE TABLE `quatationbill` (
  `id` int(11) NOT NULL,
  `vendorid` int(11) DEFAULT NULL,
  `purchasedate` varchar(20) DEFAULT NULL,
  `billno` varchar(255) DEFAULT NULL,
  `maindiscount` tinyint(6) DEFAULT NULL,
  `totalqty` int(11) DEFAULT NULL,
  `nettotal` float(10,2) DEFAULT NULL,
  `amtword` varchar(5000) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1',
  `remark` varchar(1000) DEFAULT NULL,
  `p_div` varchar(100) DEFAULT NULL,
  `p_comp` varchar(100) DEFAULT NULL,
  `shipping_charge` int(11) DEFAULT NULL,
  `subtotal` float(10,2) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quotationorder`
--

CREATE TABLE `quotationorder` (
  `id` int(11) NOT NULL,
  `purid` int(11) DEFAULT NULL,
  `vendorid` int(11) DEFAULT NULL,
  `purchasedate` varchar(25) DEFAULT NULL,
  `billno` varchar(255) DEFAULT NULL,
  `maindiscount` int(11) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `gdn_id` int(11) DEFAULT NULL,
  `sno` int(11) DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `basic` float(10,2) DEFAULT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `freeqty` varchar(255) DEFAULT NULL,
  `discountper` int(11) DEFAULT NULL,
  `discountamt` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `nettotal` float(10,2) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1',
  `remark` varchar(1000) DEFAULT NULL,
  `p_div` varchar(100) DEFAULT NULL,
  `p_comp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `serviceimage` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` text,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `email`, `mobile`, `address`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `logo`, `created_at`) VALUES
(1, 'raj@gmail.cpm', '9165589462', 'Bhopal ', 'https://www.facebook.com/MIDELasia ', 'https://www.facebook.com/MIDELasia ', 'https://www.facebook.com/MIDELasia ', 'https://www.facebook.com/MIDELasia ', 'https://www.facebook.com/MIDELasia ', 'e1184386d86c6845c598e8b9fb9532f2 values.jpg', '2021-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `shop` varchar(255) NOT NULL,
  `shopimage` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `s_div` varchar(100) DEFAULT NULL,
  `s_comp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `state`, `created_at`, `updated_at`, `date`, `status`, `s_div`, `s_comp`) VALUES
(4, 5, 'Madhya Pradesh', '2021-02-06 14:44:48', '2022-01-04 15:01:15', '06-Feb-2021', 1, NULL, NULL),
(7, 5, 'Madhya Pradesh', '2022-01-04 15:14:10', '2022-01-04 15:14:10', '04-Jan-2022', 1, 'Construction', ''),
(8, 5, 'Maharastra', '2022-06-08 17:20:10', '2023-03-15 15:07:27', '14-Mar-2023', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `totalqty` int(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `pur_id` int(11) DEFAULT NULL,
  `s_product` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `gid`, `cid`, `pid`, `totalqty`, `created_at`, `updated_at`, `date`, `status`, `pur_id`, `s_product`) VALUES
(35, 8, 0, 3402, 1, '2022-01-06 11:49:22', '2022-01-06 11:49:22', '06-Jan-2022', 1, 4, 'PARLE G 5/-');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `subcategory_hindi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `catid` int(11) NOT NULL,
  `description` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sub_div` varchar(250) DEFAULT NULL,
  `sub_comp` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategory`, `subcategory_hindi`, `catid`, `description`, `created_at`, `updated_at`, `date`, `status`, `sub_div`, `sub_comp`) VALUES
(5, 'Craft', 'शिल्प', 11, '', '2023-06-08 16:04:22', '2023-06-08 16:04:22', '2023-06-08', 1, '', ''),
(8, 'Picture', 'चित्र', 12, '', '2023-06-08 16:07:04', '2023-06-08 16:07:04', '2023-06-08', 1, '', ''),
(10, 'Puppet', 'कठपुतली', 12, '', '2023-06-08 16:07:45', '2023-06-08 16:07:45', '2023-06-08', 1, '', ''),
(11, 'Others', 'अन्य ', 12, '', '2023-06-08 16:08:06', '2023-06-08 16:08:06', '2023-06-08', 1, '', ''),
(13, 'Singing', 'गायन', 13, '', '2023-06-10 07:05:19', '2023-06-10 07:05:19', '2023-06-10', 1, '', ''),
(14, 'Playing', 'वादन', 13, '', '2023-06-10 07:05:50', '2023-06-10 07:05:50', '2023-06-10', 1, '', ''),
(15, 'Dancing', 'नृत्य', 13, '', '2023-06-10 07:06:45', '2023-06-10 07:06:45', '2023-06-10', 1, '', ''),
(16, 'Modern Theater', 'आधुनिक रंगमंच ', 17, '', '2023-06-10 07:08:26', '2023-06-10 07:08:26', '2023-06-10', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_type`
--

CREATE TABLE `subcategory_type` (
  `id` int(11) NOT NULL,
  `sb_type` varchar(100) DEFAULT NULL,
  `sb_type_hindi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sbcat` tinyint(6) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1',
  `c_div` varchar(100) DEFAULT NULL,
  `sb_division` varchar(255) DEFAULT NULL,
  `sb_company` varchar(255) DEFAULT NULL,
  `c_company` varchar(100) DEFAULT NULL,
  `sb_detail` varchar(1000) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory_type`
--

INSERT INTO `subcategory_type` (`id`, `sb_type`, `sb_type_hindi`, `sbcat`, `date`, `status`, `c_div`, `sb_division`, `sb_company`, `c_company`, `sb_detail`, `created_at`, `updated_at`) VALUES
(1, 'Clarionet', 'क्लैरिनेट ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, '10-Jun-2023'),
(2, 'Carnatic Devotional', 'कर्नाटिक भक्तिसंगीत', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, '10-Jun-2023'),
(3, 'Carnatic Flute', 'कर्नाटिक बांसुरी ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(4, 'Carnatic Fusion', 'कर्नाटिक फ्यूजन ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(5, 'Carnatic Ghatam', ' कर्नाटिक घटम', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(6, 'Gudiyattam', 'गुड़ियत्तम ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(7, 'Carnatic Jaltarang', 'कर्नाटिक जलतरंग', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(8, 'Carnatic Keyboard', 'कर्नाटिक कीबोर्ड', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(9, 'Carnatic Mandolin', 'कर्नाटिक मैंडोलिन ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(10, 'Mridangam ', 'मृदंग ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(11, 'Nadaswaram ', 'नादस्वरम् ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(12, 'Panchvadyan ', 'पंचवाद्य ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(13, 'Percussion ', 'अवाद्य वाद्य', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(14, 'Saxophone', 'सैक्सोफ़ोन ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(15, 'Talavadya & Konnakol', ' तालवाद्य और कोणाकोल', 16, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(16, 'Carnatic Tavil ', ' कर्नाटिक तविल', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(17, 'Carnatic Veena', 'कर्नाटिक वीणा ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, '10-Jun-2023'),
(18, 'Carnatic Violin', 'कर्नाटिक वायलिन', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(19, 'Carnatic Instrumental Music Group', 'कर्नाटिक वाद्य संगठन', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(20, 'Carnatic Vocal', 'कर्नाटिक गायन ', 14, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(21, 'Kathak ', 'कथक ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(22, 'Chhau ', 'छौ ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(23, 'Bharatnatyam ', 'भरतनाट्यम ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(24, 'Kathakali ', 'कथकलि ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(25, 'Kuchipudi ', 'कूचिपूड़ी ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(26, 'Koodiyattam ', 'कूडियाट्टम् ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(27, 'Manipuri ', 'मणिपुरी ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(28, 'Mohiniyattam ', 'मोहिनीयाटम् ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(29, 'Odissi ', 'ओडिशी ', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL),
(30, 'Sattriya ', 'सत्रिय', 15, '10-Jun-2023', 1, NULL, NULL, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `emailstatus` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `tax`, `created_at`, `updated_at`, `date`, `status`) VALUES
(1, 'GST (5%)', '2021-01-24 23:24:26', '2021-01-25 23:06:07', '25-Jan-2021', 1),
(2, 'GST (12%)', '2021-01-24 23:25:14', '2021-03-06 15:04:02', '06-Mar-2021', 1),
(3, 'GST (18%)', '2021-01-24 23:25:23', '2021-03-06 15:04:10', '06-Mar-2021', 1),
(4, 'GST (28%)', '2021-01-24 23:25:34', '2021-03-06 15:04:17', '06-Mar-2021', 1),
(5, 'GST (0%)', '2021-03-06 15:04:42', '2021-03-06 15:04:42', '06-Mar-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_adv_salary`
--

CREATE TABLE `tb_adv_salary` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `advance_salr` int(11) DEFAULT NULL,
  `adv_remark` varchar(1000) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `status` tinyint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_company`
--

CREATE TABLE `tb_company` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(250) DEFAULT NULL,
  `come_status` tinyint(6) DEFAULT '1',
  `com_date` date DEFAULT NULL,
  `com_control` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_company`
--

INSERT INTO `tb_company` (`com_id`, `com_name`, `come_status`, `com_date`, `com_control`) VALUES
(1, 'store', 1, '2021-10-22', 'Construction'),
(2, 'krishna', 1, '2021-10-22', 'Supply'),
(3, 'gayatri mall', 1, '2021-10-22', 'Construction'),
(4, 'gitanjali ', 1, '2021-10-22', 'Warehouse'),
(5, 'Reliance industry limited', 1, '2021-10-22', 'Crusher'),
(6, 'krishna agncy', 1, '2021-11-12', 'division_dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `tb_division`
--

CREATE TABLE `tb_division` (
  `divi_id` int(11) NOT NULL,
  `divi_name` varchar(250) DEFAULT NULL,
  `div_icon` varchar(500) DEFAULT NULL,
  `divi_date` date DEFAULT NULL,
  `divi_status` tinyint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_division`
--

INSERT INTO `tb_division` (`divi_id`, `divi_name`, `div_icon`, `divi_date`, `divi_status`) VALUES
(1, 'Construction', '9882865019b118a2ef39e99d1914f63e85cfa5b33_delivery.png', '2022-03-31', 1),
(2, 'Crusher', '5725902036c0f4bc512976f59119465f349cab49c_hi-tea (1).png', '2021-03-02', 1),
(3, 'Warehouse', '19570460999b118a2ef39e99d1914f63e85cfa5b33_delivery.png', '2021-06-21', 1),
(4, 'Supply', '19893863399b118a2ef39e99d1914f63e85cfa5b33_delivery.png', '2021-10-21', 1),
(5, 'Entertainment', '190650925IMG-20200531-WA0000.jpg', '2022-03-13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_expence`
--

CREATE TABLE `tb_expence` (
  `ex_id` int(11) NOT NULL,
  `exexpenc_head` int(11) DEFAULT NULL,
  `by_whom` int(11) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1',
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_expence_head`
--

CREATE TABLE `tb_expence_head` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `status` tinyint(6) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_expence_head`
--

INSERT INTO `tb_expence_head` (`id`, `name`, `date`, `status`, `created_at`) VALUES
(1, 'rent', '2020-08-07', 1, '2021-12-09 14:34:50.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_financial_year`
--

CREATE TABLE `tb_financial_year` (
  `fy_id` int(11) NOT NULL,
  `fy_year` varchar(500) DEFAULT NULL,
  `f_date` date DEFAULT NULL,
  `f_status` tinyint(6) DEFAULT NULL,
  `f_division` varchar(100) DEFAULT NULL,
  `f_company` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_financial_year`
--

INSERT INTO `tb_financial_year` (`fy_id`, `fy_year`, `f_date`, `f_status`, `f_division`, `f_company`) VALUES
(1, '2020-2021', '2021-10-25', NULL, '0', '0'),
(2, '2020-2021', '2021-10-25', 1, 'Construction', 'gayatri mall'),
(3, '2021-2022', '2021-10-25', NULL, 'Crusher', 'Reliance industry limited'),
(4, '2021-2022', '2021-10-25', NULL, 'Construction', 'gayatri mall');

-- --------------------------------------------------------

--
-- Table structure for table `tb_income`
--

CREATE TABLE `tb_income` (
  `in_id` int(11) NOT NULL,
  `in_pay_for` int(11) DEFAULT NULL,
  `by_whome` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `status` tinyint(6) NOT NULL DEFAULT '1',
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pay_for`
--

CREATE TABLE `tb_pay_for` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` tinyint(6) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pay_for`
--

INSERT INTO `tb_pay_for` (`id`, `name`, `date`, `status`, `created_at`) VALUES
(1, 'rent', NULL, 1, NULL),
(2, 'Website Payment', '14 Dec 21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sale`
--

CREATE TABLE `tb_sale` (
  `id` int(11) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `sale_for` varchar(100) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `testing` float(10,2) DEFAULT NULL,
  `nozel1` float(10,2) DEFAULT NULL,
  `nozel2` float(10,2) DEFAULT NULL,
  `nozel3` float(10,2) DEFAULT NULL,
  `nozel4` float(10,2) DEFAULT NULL,
  `y_nozel1` float(10,2) DEFAULT NULL,
  `y_nozel2` float(10,2) DEFAULT NULL,
  `y_nozel3` float(10,2) DEFAULT NULL,
  `y_nozel4` float(10,2) DEFAULT NULL,
  `sale_read_nozel1` float(10,2) DEFAULT NULL,
  `sale_read_nozel2` float(10,2) DEFAULT NULL,
  `sale_read_nozel3` float(10,2) DEFAULT NULL,
  `sale_read_nozel4` float(10,2) DEFAULT NULL,
  `sale_amnt_nozel1` float(10,2) DEFAULT NULL,
  `sale_amnt_nozel2` float(10,2) DEFAULT NULL,
  `sale_amnt_nozel3` float(10,2) DEFAULT NULL,
  `sale_amnt_nozel4` float(10,2) DEFAULT NULL,
  `total_amnt` float(10,2) DEFAULT NULL,
  `total_sale` float(10,2) DEFAULT NULL,
  `status` tinyint(6) NOT NULL DEFAULT '1',
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sale`
--

INSERT INTO `tb_sale` (`id`, `date`, `sale_for`, `price`, `testing`, `nozel1`, `nozel2`, `nozel3`, `nozel4`, `y_nozel1`, `y_nozel2`, `y_nozel3`, `y_nozel4`, `sale_read_nozel1`, `sale_read_nozel2`, `sale_read_nozel3`, `sale_read_nozel4`, `sale_amnt_nozel1`, `sale_amnt_nozel2`, `sale_amnt_nozel3`, `sale_amnt_nozel4`, `total_amnt`, `total_sale`, `status`, `created_at`) VALUES
(4, '11-Dec-21', 'Petrol', 107.51, 5.00, 50.00, 60.00, 60.00, 40.00, 30.00, 30.00, 40.00, 10.00, 20.00, 30.00, 20.00, 30.00, 1612.65, 2687.75, 1612.65, 2687.75, 8600.80, 210.00, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `emailstatus` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit`, `prefix`, `created_at`, `updated_at`, `date`, `status`) VALUES
(1, 'Piece', 'Pc', '2021-01-24 22:15:01', '2021-01-24 22:15:01', '24-Jan-2021', 1),
(2, 'Box', 'Box', '2021-01-24 22:15:14', '2021-01-24 22:15:14', '24-Jan-2021', 1),
(3, 'Case', 'Case', '2021-01-24 22:15:27', '2021-01-24 22:15:27', '24-Jan-2021', 1),
(4, 'BAG', 'BAG', '2021-02-07 15:08:33', '2021-02-07 15:08:33', '07-Feb-2021', 1),
(5, 'OUTER', 'OUT', '2021-03-06 14:32:43', '2021-03-06 14:32:43', '06-Mar-2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(10) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `companyownername` varchar(255) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `profileimage` varchar(255) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles`, `name`, `email`, `mobile`, `sex`, `state`, `city`, `address`, `dob`, `age`, `username`, `password`, `cpassword`, `companyname`, `companyownername`, `companyaddress`, `logo`, `website`, `google`, `facebook`, `twitter`, `linkedin`, `instagram`, `profileimage`, `date`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Admin', '', 'iamadmin@gmail.com', 0, NULL, NULL, NULL, '', NULL, NULL, '', 'Super@admin@123', '', '', '', '', '136601643images.png', '', '', '', '', '', '', '1245025487images.png', '31-Jul-2022', '2021-01-20 16:40:43', '2023-06-29 13:38:49', 1),
(3, 'User', 'Ram', 'raja@gmail.com', 9874563210, 'Male', 'Madhya Pradesh', 'bhopal', 'bhopal', '', '', 'raja@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '12-Aug-2023', '2023-06-29 14:51:17', '2023-08-17 12:49:27', 1),
(4, 'User', 'Ramesh', 'ramesh@gmail.com', 9874563210, NULL, NULL, NULL, '', NULL, NULL, 'ramesh@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-07-04 15:33:30', '2023-07-04 15:33:30', 1),
(5, 'User', 'rahul', '', 9584467849, NULL, NULL, NULL, '', NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-07-04 15:39:17', '2023-07-04 15:39:17', 1),
(6, 'User', 'raj', '', 9874563215, NULL, NULL, NULL, '', NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-02 16:06:44', '2023-08-02 16:06:44', 1),
(8, 'User', 'Raj', 'raj@gmail.com', 9874563210, 'Male', 'Select State', 'bhopal', 'bhopal', '2023-08-11', '23', 'raj@gmail.com', 'Super@admin@123', '', '', '', '', '', '', '', '', '', '', '', NULL, '05-Aug-2023', '2023-08-05 08:26:13', '2023-08-05 08:31:24', 1),
(9, 'User', 'Ram', 'raja@gmail.com', 9165596482, NULL, NULL, NULL, NULL, NULL, NULL, 'raja@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-11 13:28:44', '2023-08-11 14:04:33', 1),
(10, 'User', 'raj', '', 9874563216, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-11 13:45:22', '2023-08-11 13:45:22', 1),
(11, 'User', 'Ganesh ', 'ganesh@gmail.com', 9165596488, NULL, NULL, NULL, NULL, NULL, NULL, 'ganesh@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-11 14:53:48', '2023-08-11 14:53:48', 1),
(12, 'User', 'Ram', '', 9165596487, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-11 15:02:35', '2023-08-11 15:02:35', 1),
(15, 'User', 'Ram', '', 9165596487, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-11 15:04:03', '2023-08-11 15:04:03', 1),
(16, 'User', 'Ramesh', 'rajesj@gmail.com', 9874563255, 'Male', 'Madhya Pradesh', 'bhopal', 'bhopal', '2023-08-12', '2', 'rajesj@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '12-Aug-2023', '2023-08-12 12:49:47', '2023-08-12 12:49:47', 1),
(17, 'Admin', 'Admin raj', 'admin2@gmail.com', 987456987, 'Male', 'Madhya Pradesh', 'bhopal', 'bhopal', '2023-08-12', '1', 'admin2@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '12-Aug-2023', '2023-08-12 14:51:17', '2023-08-12 14:51:17', 1),
(18, 'User', 'rahul', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-16 13:46:00', '2023-08-16 13:46:00', 1),
(19, 'User', 'Rajesh', '', 9165596481, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-16 13:46:01', '2023-08-16 13:46:01', 1),
(20, NULL, 'Raj 1', 'ram@gmail.com', 9874563218, 'Male', 'Select State', 'bhopal', 'bhopal', '2023-08-16', '1', 'ram@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '16-Aug-2023', '2023-08-16 14:33:06', '2023-08-16 14:34:51', 1),
(22, 'User', 'demo raj', 'demo@gmail.com', 9874563223, 'Male', 'Madhya Pradesh', 'bhopal', 'bhopal', '2023-08-15', '2', 'demo@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '16-Aug-2023', '2023-08-16 14:41:55', '2023-08-16 14:41:55', 1),
(23, 'User', 'raj', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-17 11:41:47', '2023-08-17 11:41:47', 1),
(24, 'User', 'Dr. Sudhir Aazad ', '', 7772967297, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-18 13:18:32', '2023-08-18 13:18:32', 1),
(25, 'User', 'ajay ', '', 7693995681, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-18 16:32:35', '2023-08-18 16:32:35', 1),
(26, 'User', 'ajay p', '', 9755907039, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-18 17:55:18', '2023-08-18 17:55:18', 1),
(27, 'User', 'ajay ', '', 9978675613, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-19 15:18:34', '2023-08-19 15:18:34', 1),
(28, 'User', 'ajay ', '', 9165596485, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-23 15:44:16', '2023-08-23 15:44:16', 1),
(29, 'User', 'dfgwr', '', 9507541729, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-23 17:29:21', '2023-08-23 17:29:21', 1),
(30, 'User', 'Ram', 'ram@gmail.com', 9874563210, NULL, NULL, NULL, NULL, NULL, NULL, 'ram@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-24 12:05:27', '2023-08-24 12:05:27', 1),
(31, 'User', 'Ganesh ', 'ram@gmail.com', 9874563210, NULL, NULL, NULL, NULL, NULL, NULL, 'ram@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-24 15:41:27', '2023-08-24 15:41:27', 1),
(32, 'User', 'ajay ', '', 2345678790, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-25 16:44:18', '2023-08-25 16:44:18', 1),
(33, 'User', 'ajay ', '', 1234567896, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-08-28 11:51:23', '2023-08-28 11:51:23', 1),
(34, 'User', 'Ajay Patidar', 'ajaypatidar@gmail.com', 7693995681, NULL, NULL, NULL, NULL, NULL, NULL, 'ajaypatidar@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-09-25 13:04:21', '2023-09-25 13:04:21', 1),
(35, 'User', ' à¤…à¤œà¤¯ à¤ªà¤¾à¤Ÿà¥€à¤¦à¤¾à¤°', 'ajaypatidar@gmail.com', 1234567890, NULL, NULL, NULL, NULL, NULL, NULL, 'ajaypatidar@gmail.com', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-09-25 13:11:02', '2023-09-25 13:11:02', 1),
(36, 'User', 'Ajay Patidar', '', 1234567890, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-09-25 13:29:23', '2023-09-25 13:29:23', 1),
(37, 'User', 'Ajay Patidar', '', 1234543210, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-09-25 17:28:20', '2023-09-25 17:28:20', 1),
(38, 'User', 'Ajay Patidar', '', 1234565432, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-09-26 11:02:59', '2023-09-26 11:02:59', 1),
(39, 'User', 'Ajay Patidar', '', 1234565432, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-09-26 11:05:24', '2023-09-26 11:05:24', 1),
(40, 'User', 'Ajay Patidar', '', 1234567897, NULL, NULL, NULL, NULL, NULL, NULL, '', '123456', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '2023-10-03 23:02:59', '2023-10-03 23:02:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `idproof` tinyint(1) DEFAULT NULL,
  `idproofno` varchar(255) DEFAULT NULL,
  `pancard` varchar(255) DEFAULT NULL,
  `pancardno` varchar(10) NOT NULL,
  `country` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `companytype` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `companyownername` varchar(255) NOT NULL,
  `openingbal` int(20) NOT NULL,
  `crdr` tinyint(1) NOT NULL,
  `companystate` varchar(255) NOT NULL,
  `companycity` varchar(255) NOT NULL,
  `companyarea` varchar(255) NOT NULL,
  `companypincode` int(11) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `productcategories` varchar(255) NOT NULL,
  `gstno` varchar(20) NOT NULL,
  `companystatus` tinyint(1) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accountholder` varchar(255) NOT NULL,
  `accountno` varchar(255) NOT NULL,
  `ifsccode` varchar(255) NOT NULL,
  `branchnameaddress` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pmobile` bigint(10) NOT NULL,
  `pdesignation` varchar(255) NOT NULL,
  `pname2` varchar(255) NOT NULL,
  `pemail2` varchar(255) NOT NULL,
  `pmobile2` bigint(10) NOT NULL,
  `pdesignation2` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `v_division` varchar(150) DEFAULT NULL,
  `v_comp` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `idproof`, `idproofno`, `pancard`, `pancardno`, `country`, `state`, `city`, `area`, `pincode`, `address`, `profileimage`, `companytype`, `companyname`, `companyownername`, `openingbal`, `crdr`, `companystate`, `companycity`, `companyarea`, `companypincode`, `companyaddress`, `productcategories`, `gstno`, `companystatus`, `bankname`, `accountholder`, `accountno`, `ifsccode`, `branchnameaddress`, `pname`, `pemail`, `pmobile`, `pdesignation`, `pname2`, `pemail2`, `pmobile2`, `pdesignation2`, `created_at`, `updated_at`, `date`, `status`, `v_division`, `v_comp`) VALUES
(1, 'Akhtar Parveen', 'akhu123@gmail.com', 8109172486, '1', '2021-01-22', NULL, '247408721mainlogo.png', '1892730330JusMarkTech.docx', '0', 0, '4', '2', '2', 2, 'Hno 123', '1774232275', 0, 'JAP Enterprises', 'Akhtar Parveen', 0, 1, '1', '1', '1', 462022, 'Hno 123', '', '122542', 0, 'State Bank Of India', 'Akhtar Parveen', '1222222', '45511', 'SBI, Vijay Market', '', '', 0, '', '', '', 0, '', '2021-01-25 00:52:58', '2021-03-21 14:43:05', '21-Mar-2021', 1, NULL, NULL),
(2, 'Kuldeep', 'k@gmail.com', 7894561122, '1', '', 0, '770065189', '948600103', '0', 0, '4', '2', '2', 2, 'HNo 112', '1060094197', 0, 'Kuldeep Enterprises', 'Akhtar Parveen', 5000, 1, '', '', '', 0, '', '', '4233555', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '2021-02-15 15:21:29', '2021-02-15 15:23:15', '15-Feb-2021', 1, NULL, NULL),
(3, 'Raj Prajapati', 'raj@jusmark.com', 8527418856, '1', '2021-03-03', NULL, '1092545036', '170010071', '', 0, '4', '2', '2', 2, 'Hno 111', '861255996', 0, 'Raj Enterprises', 'Raj Prajapati', 10000, 1, '', '', '', 0, 'HNo 233', '', '15222', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '2021-03-21 12:41:51', '2021-10-22 17:23:18', '21-Mar-2021', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_list`
--
ALTER TABLE `artist_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_picture`
--
ALTER TABLE `artist_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_register_step2`
--
ALTER TABLE `artist_register_step2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignemprole`
--
ALTER TABLE `assignemprole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custrole`
--
ALTER TABLE `custrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverypartners`
--
ALTER TABLE `deliverypartners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emprole`
--
ALTER TABLE `emprole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `godown`
--
ALTER TABLE `godown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manubar`
--
ALTER TABLE `manubar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchantss`
--
ALTER TABLE `merchantss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variant`
--
ALTER TABLE `product_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programlist`
--
ALTER TABLE `programlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseorderbill`
--
ALTER TABLE `purchaseorderbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quatationbill`
--
ALTER TABLE `quatationbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotationorder`
--
ALTER TABLE `quotationorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory_type`
--
ALTER TABLE `subcategory_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_adv_salary`
--
ALTER TABLE `tb_adv_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `tb_division`
--
ALTER TABLE `tb_division`
  ADD PRIMARY KEY (`divi_id`);

--
-- Indexes for table `tb_expence_head`
--
ALTER TABLE `tb_expence_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_financial_year`
--
ALTER TABLE `tb_financial_year`
  ADD PRIMARY KEY (`fy_id`);

--
-- Indexes for table `tb_income`
--
ALTER TABLE `tb_income`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `tb_pay_for`
--
ALTER TABLE `tb_pay_for`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sale`
--
ALTER TABLE `tb_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artist_list`
--
ALTER TABLE `artist_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `artist_picture`
--
ALTER TABLE `artist_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `artist_register_step2`
--
ALTER TABLE `artist_register_step2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignemprole`
--
ALTER TABLE `assignemprole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custrole`
--
ALTER TABLE `custrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deliverypartners`
--
ALTER TABLE `deliverypartners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emprole`
--
ALTER TABLE `emprole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `godown`
--
ALTER TABLE `godown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manubar`
--
ALTER TABLE `manubar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchantss`
--
ALTER TABLE `merchantss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincode`
--
ALTER TABLE `pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_variant`
--
ALTER TABLE `product_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programlist`
--
ALTER TABLE `programlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchaseorderbill`
--
ALTER TABLE `purchaseorderbill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quatationbill`
--
ALTER TABLE `quatationbill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotationorder`
--
ALTER TABLE `quotationorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subcategory_type`
--
ALTER TABLE `subcategory_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_adv_salary`
--
ALTER TABLE `tb_adv_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_division`
--
ALTER TABLE `tb_division`
  MODIFY `divi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_expence_head`
--
ALTER TABLE `tb_expence_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_financial_year`
--
ALTER TABLE `tb_financial_year`
  MODIFY `fy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_income`
--
ALTER TABLE `tb_income`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pay_for`
--
ALTER TABLE `tb_pay_for`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sale`
--
ALTER TABLE `tb_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
