-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 07:06 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swahili`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(10) unsigned NOT NULL,
  `co_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `co_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', NULL, NULL),
(2, 'AX', 'Aland Islands', NULL, NULL),
(3, 'AL', 'Albania', NULL, NULL),
(4, 'DZ', 'Algeria', NULL, NULL),
(5, 'AS', 'American Samoa', NULL, NULL),
(6, 'AD', 'Andorra', NULL, NULL),
(7, 'AO', 'Angola', NULL, NULL),
(8, 'AI', 'Anguilla', NULL, NULL),
(9, 'AQ', 'Antarctica', NULL, NULL),
(10, 'AG', 'Antigua and Barbuda', NULL, NULL),
(11, 'AR', 'Argentina', NULL, NULL),
(12, 'AM', 'Armenia', NULL, NULL),
(13, 'AW', 'Aruba', NULL, NULL),
(14, 'AU', 'Australia', NULL, NULL),
(15, 'AT', 'Austria', NULL, NULL),
(16, 'AZ', 'Azerbaijan', NULL, NULL),
(17, 'BS', 'Bahamas', NULL, NULL),
(18, 'BH', 'Bahrain', NULL, NULL),
(19, 'BD', 'Bangladesh', NULL, NULL),
(20, 'BB', 'Barbados', NULL, NULL),
(21, 'BY', 'Belarus', NULL, NULL),
(22, 'BE', 'Belgium', NULL, NULL),
(23, 'BZ', 'Belize', NULL, NULL),
(24, 'BJ', 'Benin', NULL, NULL),
(25, 'BM', 'Bermuda', NULL, NULL),
(26, 'BT', 'Bhutan', NULL, NULL),
(27, 'BO', 'Bolivia, Plurinational State of', NULL, NULL),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba', NULL, NULL),
(29, 'BA', 'Bosnia and Herzegovina', NULL, NULL),
(30, 'BW', 'Botswana', NULL, NULL),
(31, 'BV', 'Bouvet Island', NULL, NULL),
(32, 'BR', 'Brazil', NULL, NULL),
(33, 'IO', 'British Indian Ocean Territory', NULL, NULL),
(34, 'BN', 'Brunei Darussalam', NULL, NULL),
(35, 'BG', 'Bulgaria', NULL, NULL),
(36, 'BF', 'Burkina Faso', NULL, NULL),
(37, 'BI', 'Burundi', NULL, NULL),
(38, 'KH', 'Cambodia', NULL, NULL),
(39, 'CM', 'Cameroon', NULL, NULL),
(40, 'CA', 'Canada', NULL, NULL),
(41, 'CV', 'Cape Verde', NULL, NULL),
(42, 'KY', 'Cayman Islands', NULL, NULL),
(43, 'CF', 'Central African Republic', NULL, NULL),
(44, 'TD', 'Chad', NULL, NULL),
(45, 'CL', 'Chile', NULL, NULL),
(46, 'CN', 'China', NULL, NULL),
(47, 'CX', 'Christmas Island', NULL, NULL),
(48, 'CC', 'Cocos (,Keeling) Islands', NULL, NULL),
(49, 'CO', 'Colombia', NULL, NULL),
(50, 'KM', 'Comoros', NULL, NULL),
(51, 'CG', 'Congo', NULL, NULL),
(52, 'CD', 'Congo the Democratic Republic of the', NULL, NULL),
(53, 'CK', 'Cook Islands', NULL, NULL),
(54, 'CR', 'Costa Rica', NULL, NULL),
(55, 'CI', 'Côte dIvoire', NULL, NULL),
(56, 'HR', 'Croatia', NULL, NULL),
(57, 'CU', 'Cuba', NULL, NULL),
(58, 'CW', 'Curaçao', NULL, NULL),
(59, 'CY', 'Cyprus', NULL, NULL),
(60, 'CZ', 'Czech Republic', NULL, NULL),
(61, 'DK', 'Denmark', NULL, NULL),
(62, 'DJ', 'Djibouti', NULL, NULL),
(63, 'DM', 'Dominica', NULL, NULL),
(64, 'DO', 'Dominican Republic', NULL, NULL),
(65, 'EC', 'Ecuador', NULL, NULL),
(66, 'EG', 'Egypt', NULL, NULL),
(67, 'SV', 'El Salvador', NULL, NULL),
(68, 'GQ', 'Equatorial Guinea', NULL, NULL),
(69, 'ER', 'Eritrea', NULL, NULL),
(70, 'EE', 'Estonia', NULL, NULL),
(71, 'ET', 'Ethiopia', NULL, NULL),
(72, 'FK', 'Falkland Islands (,Malvinas)', NULL, NULL),
(73, 'FO', 'Faroe Islands', NULL, NULL),
(74, 'FJ', 'Fiji', NULL, NULL),
(75, 'FI', 'Finland', NULL, NULL),
(76, 'FR', 'France', NULL, NULL),
(77, 'GF', 'French Guiana', NULL, NULL),
(78, 'PF', 'French Polynesia', NULL, NULL),
(79, 'TF', 'French Southern Territories', NULL, NULL),
(80, 'GA', 'Gabon', NULL, NULL),
(81, 'GM', 'Gambia', NULL, NULL),
(82, 'GE', 'Georgia', NULL, NULL),
(83, 'DE', 'Germany', NULL, NULL),
(84, 'GH', 'Ghana', NULL, NULL),
(85, 'GI', 'Gibraltar', NULL, NULL),
(86, 'GR', 'Greece', NULL, NULL),
(87, 'GL', 'Greenland', NULL, NULL),
(88, 'GD', 'Grenada', NULL, NULL),
(89, 'GP', 'Guadeloupe', NULL, NULL),
(90, 'GU', 'Guam', NULL, NULL),
(91, 'GT', 'Guatemala', NULL, NULL),
(92, 'GG', 'Guernsey', NULL, NULL),
(93, 'GN', 'Guinea', NULL, NULL),
(94, 'GW', 'Guinea-Bissau', NULL, NULL),
(95, 'GY', 'Guyana', NULL, NULL),
(96, 'HT', 'Haiti', NULL, NULL),
(97, 'HM', 'Heard Island and McDonald Islands', NULL, NULL),
(98, 'VA', 'Holy See (,Vatican City State)', NULL, NULL),
(99, 'HN', 'Honduras', NULL, NULL),
(100, 'HK', 'Hong Kong', NULL, NULL),
(101, 'HU', 'Hungary', NULL, NULL),
(102, 'IS', 'Iceland', NULL, NULL),
(103, 'IN', 'India', NULL, NULL),
(104, 'ID', 'Indonesia', NULL, NULL),
(105, 'IR', 'Iran, Islamic Republic of', NULL, NULL),
(106, 'IQ', 'Iraq', NULL, NULL),
(107, 'IE', 'Ireland', NULL, NULL),
(108, 'IM', 'Isle of Man', NULL, NULL),
(109, 'IL', 'Israel', NULL, NULL),
(110, 'IT', 'Italy', NULL, NULL),
(111, 'JM', 'Jamaica', NULL, NULL),
(112, 'JP', 'Japan', NULL, NULL),
(113, 'JE', 'Jersey', NULL, NULL),
(114, 'JO', 'Jordan', NULL, NULL),
(115, 'KZ', 'Kazakhstan', NULL, NULL),
(116, 'KE', 'Kenya', NULL, NULL),
(117, 'KI', 'Kiribati', NULL, NULL),
(118, 'KP', 'Korea, Democratic Peoples Republic of', NULL, NULL),
(119, 'KR', 'Korea, Republic of', NULL, NULL),
(120, 'KW', 'Kuwait', NULL, NULL),
(121, 'KG', 'Kyrgyzstan', NULL, NULL),
(122, 'LA', 'Lao Peoples Democratic Republic', NULL, NULL),
(123, 'LV', 'Latvia', NULL, NULL),
(124, 'LB', 'Lebanon', NULL, NULL),
(125, 'LS', 'Lesotho', NULL, NULL),
(126, 'LR', 'Liberia', NULL, NULL),
(127, 'LY', 'Libya', NULL, NULL),
(128, 'LI', 'Liechtenstein', NULL, NULL),
(129, 'LT', 'Lithuania', NULL, NULL),
(130, 'LU', 'Luxembourg', NULL, NULL),
(131, 'MO', 'Macao', NULL, NULL),
(132, 'MK', 'Macedonia, the former Yugoslav Republic of', NULL, NULL),
(133, 'MG', 'Madagascar', NULL, NULL),
(134, 'MW', 'Malawi', NULL, NULL),
(135, 'MY', 'Malaysia', NULL, NULL),
(136, 'MV', 'Maldives', NULL, NULL),
(137, 'ML', 'Mali', NULL, NULL),
(138, 'MT', 'Malta', NULL, NULL),
(139, 'MH', 'Marshall Islands', NULL, NULL),
(140, 'MQ', 'Martinique', NULL, NULL),
(141, 'MR', 'Mauritania', NULL, NULL),
(142, 'MU', 'Mauritius', NULL, NULL),
(143, 'YT', 'Mayotte', NULL, NULL),
(144, 'MX', 'Mexico', NULL, NULL),
(145, 'FM', 'Micronesia, Federated States of', NULL, NULL),
(146, 'MD', 'Moldova, Republic of', NULL, NULL),
(147, 'MC', 'Monaco', NULL, NULL),
(148, 'MN', 'Mongolia', NULL, NULL),
(149, 'ME', 'Montenegro', NULL, NULL),
(150, 'MS', 'Montserrat', NULL, NULL),
(151, 'MA', 'Morocco', NULL, NULL),
(152, 'MZ', 'Mozambique', NULL, NULL),
(153, 'MM', 'Myanmar', NULL, NULL),
(154, 'NA', 'Namibia', NULL, NULL),
(155, 'NR', 'Nauru', NULL, NULL),
(156, 'NP', 'Nepal', NULL, NULL),
(157, 'NL', 'Netherlands', NULL, NULL),
(158, 'NC', 'New Caledonia', NULL, NULL),
(159, 'NZ', 'New Zealand', NULL, NULL),
(160, 'NI', 'Nicaragua', NULL, NULL),
(161, 'NE', 'Niger', NULL, NULL),
(162, 'NG', 'Nigeria', NULL, NULL),
(163, 'NU', 'Niue', NULL, NULL),
(164, 'NF', 'Norfolk Island', NULL, NULL),
(165, 'MP', 'Northern Mariana Islands', NULL, NULL),
(166, 'NO', 'Norway', NULL, NULL),
(167, 'OM', 'Oman', NULL, NULL),
(168, 'PK', 'Pakistan', NULL, NULL),
(169, 'PW', 'Palau', NULL, NULL),
(170, 'PS', 'Palestinian Territory, Occupied', NULL, NULL),
(171, 'PA', 'Panama', NULL, NULL),
(172, 'PG', 'Papua New Guinea', NULL, NULL),
(173, 'PY', 'Paraguay', NULL, NULL),
(174, 'PE', 'Peru', NULL, NULL),
(175, 'PH', 'Philippines', NULL, NULL),
(176, 'PN', 'Pitcairn', NULL, NULL),
(177, 'PL', 'Poland', NULL, NULL),
(178, 'PT', 'Portugal', NULL, NULL),
(179, 'PR', 'Puerto Rico', NULL, NULL),
(180, 'QA', 'Qatar', NULL, NULL),
(181, 'RE', 'Réunion', NULL, NULL),
(182, 'RO', 'Romania', NULL, NULL),
(183, 'RU', 'Russian Federation', NULL, NULL),
(184, 'RW', 'Rwanda', NULL, NULL),
(185, 'BL', 'Saint Barthélemy', NULL, NULL),
(186, 'SH', 'Saint Helena, Ascension and Tristan da Cunha', NULL, NULL),
(187, 'KN', 'Saint Kitts and Nevis', NULL, NULL),
(188, 'LC', 'Saint Lucia', NULL, NULL),
(189, 'MF', 'Saint Martin (,French part)', NULL, NULL),
(190, 'PM', 'Saint Pierre and Miquelon', NULL, NULL),
(191, 'VC', 'Saint Vincent and the Grenadines', NULL, NULL),
(192, 'WS', 'Samoa', NULL, NULL),
(193, 'SM', 'San Marino', NULL, NULL),
(194, 'ST', 'Sao Tome and Principe', NULL, NULL),
(195, 'SA', 'Saudi Arabia', NULL, NULL),
(196, 'SN', 'Senegal', NULL, NULL),
(197, 'RS', 'Serbia', NULL, NULL),
(198, 'SC', 'Seychelles', NULL, NULL),
(199, 'SL', 'Sierra Leone', NULL, NULL),
(200, 'SG', 'Singapore', NULL, NULL),
(201, 'SX', 'Sint Maarten (,Dutch part)', NULL, NULL),
(202, 'SK', 'Slovakia', NULL, NULL),
(203, 'SI', 'Slovenia', NULL, NULL),
(204, 'SB', 'Solomon Islands', NULL, NULL),
(205, 'SO', 'Somalia', NULL, NULL),
(206, 'ZA" selected="selected', 'South Africa', NULL, NULL),
(207, 'GS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
(208, 'SS', 'South Sudan', NULL, NULL),
(209, 'ES', 'Spain', NULL, NULL),
(210, 'LK', 'Sri Lanka', NULL, NULL),
(211, 'SD', 'Sudan', NULL, NULL),
(212, 'SR', 'Suriname', NULL, NULL),
(213, 'SJ', 'Svalbard and Jan Mayen', NULL, NULL),
(214, 'SZ', 'Swaziland', NULL, NULL),
(215, 'SE', 'Sweden', NULL, NULL),
(216, 'CH', 'Switzerland', NULL, NULL),
(217, 'SY', 'Syrian Arab Republic', NULL, NULL),
(218, 'TW', 'Taiwan, Province of China', NULL, NULL),
(219, 'TJ', 'Tajikistan', NULL, NULL),
(220, 'TZ', 'Tanzania, United Republic of', NULL, NULL),
(221, 'TH', 'Thailand', NULL, NULL),
(222, 'TL', 'Timor-Leste', NULL, NULL),
(223, 'TG', 'Togo', NULL, NULL),
(224, 'TK', 'Tokelau', NULL, NULL),
(225, 'TO', 'Tonga', NULL, NULL),
(226, 'TT', 'Trinidad and Tobago', NULL, NULL),
(227, 'TN', 'Tunisia', NULL, NULL),
(228, 'TR', 'Turkey', NULL, NULL),
(229, 'TM', 'Turkmenistan', NULL, NULL),
(230, 'TC', 'Turks and Caicos Islands', NULL, NULL),
(231, 'TV', 'Tuvalu', NULL, NULL),
(232, 'UG', 'Uganda', NULL, NULL),
(233, 'UA', 'Ukraine', NULL, NULL),
(234, 'AE', 'United Arab Emirates', NULL, NULL),
(235, 'GB', 'United Kingdom', NULL, NULL),
(236, 'US', 'United States', NULL, NULL),
(237, 'UM', 'United States Minor Outlying Islands', NULL, NULL),
(238, 'UY', 'Uruguay', NULL, NULL),
(239, 'UZ', 'Uzbekistan', NULL, NULL),
(240, 'VU', 'Vanuatu', NULL, NULL),
(241, 'VE', 'Venezuela, Bolivarian Republic of', NULL, NULL),
(242, 'VN', 'Viet Nam', NULL, NULL),
(243, 'VG', 'Virgin Islands, British', NULL, NULL),
(244, 'VI', 'Virgin Islands, U.S.', NULL, NULL),
(245, 'WF', 'Wallis and Futuna', NULL, NULL),
(246, 'EH', 'Western Sahara', NULL, NULL),
(247, 'YE', 'Yemen', NULL, NULL),
(248, 'ZM', 'Zambia', NULL, NULL),
(249, 'ZW', 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `enroll_users` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prerequisite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `title`, `price`, `description`, `enroll_users`, `created_at`, `updated_at`, `prerequisite`) VALUES
(1, 6, 'demo course', 0, 'this is demo course description', NULL, '2017-07-08 02:04:12', '2017-07-08 02:04:12', 'this is prerequistes'),
(2, 6, 'demo course', 0, 'asd asdsa', NULL, '2017-07-08 02:04:44', '2017-07-08 02:04:44', 'adasd asd'),
(3, 6, 'asd sadas', 0, 'dsa dsa dasd', NULL, '2017-07-08 02:05:25', '2017-07-08 02:05:25', 'as dsa dasd'),
(4, 6, 'asd asd', 0, 'sa dasd', NULL, '2017-07-08 02:15:30', '2017-07-08 02:15:30', 'asd asd'),
(5, 6, 'asdas', 0, 'dsadasd', NULL, '2017-07-08 02:16:04', '2017-07-08 02:16:04', 'asdasd'),
(6, 6, 'asdas', 0, 'sadsad', NULL, '2017-07-08 02:18:40', '2017-07-08 02:18:40', 'asad'),
(7, 6, 'asda', 0, 'a dsa das', NULL, '2017-07-08 02:19:50', '2017-07-08 02:19:50', 'adsadasd'),
(8, 6, 'asdsad', 0, 'asdsadsa', NULL, '2017-07-08 02:21:03', '2017-07-08 02:21:03', 'sadasd'),
(9, 6, 'asdas', 0, 'asdas', NULL, '2017-07-08 02:22:48', '2017-07-08 02:22:48', 'asdasd'),
(10, 6, 'test1', 0, 'test1 desc', NULL, '2017-07-10 02:00:03', '2017-07-10 02:00:03', 'Kaasd'),
(11, 6, 'asd', 0, 'sa', NULL, '2017-07-10 03:04:57', '2017-07-10 03:04:57', 'sa'),
(12, 6, 'abv', 0, 'abv', NULL, '2017-07-10 03:07:45', '2017-07-10 03:07:45', 'abv'),
(13, 6, 'sdsad', 0, 'sdsad', NULL, '2017-07-10 03:09:48', '2017-07-10 03:09:48', 'sdsad'),
(14, 6, 'test3', 0, 'test3', NULL, '2017-07-10 03:11:08', '2017-07-10 03:11:08', 'test3 pre'),
(15, 6, 'asd', 0, 'sa', NULL, '2017-07-10 05:11:58', '2017-07-10 05:11:58', 'sa'),
(16, 6, 'asd', 0, 'asd', NULL, '2017-07-10 05:14:31', '2017-07-10 05:14:31', 'asd'),
(17, 6, 'asdsa', 0, 'addWeekForm', NULL, '2017-07-10 05:27:54', '2017-07-10 05:27:54', 'addWeekForm'),
(18, 6, 'asd', 0, 'asd', NULL, '2017-07-10 05:33:07', '2017-07-10 05:33:07', 'asd'),
(19, 6, 'asd', 0, 'sa', NULL, '2017-07-10 05:34:13', '2017-07-10 05:34:13', 'sa'),
(20, 6, 'qwasd', 0, 'qwasd', NULL, '2017-07-10 06:16:35', '2017-07-10 06:16:35', 'qwasd'),
(21, 6, 'asd', 0, 's', NULL, '2017-07-10 06:33:38', '2017-07-10 06:33:38', 's'),
(22, 6, 'asd', 0, 'course_id', NULL, '2017-07-10 06:34:17', '2017-07-10 06:34:17', 'course_id'),
(23, 6, 'asd', 0, 'asd', NULL, '2017-07-10 06:39:14', '2017-07-10 06:39:14', 'asd'),
(24, 6, 'qwe', 0, 'qwe', NULL, '2017-07-10 07:14:45', '2017-07-10 07:14:45', 'qwe'),
(25, 6, 'asd', 0, 'asd', NULL, '2017-07-10 07:16:21', '2017-07-10 07:16:21', 'asd'),
(26, 6, 'swes', 0, 'swes', NULL, '2017-07-10 07:17:11', '2017-07-10 07:17:11', 'swes'),
(27, 6, 'yuia', 0, 'yuia', NULL, '2017-07-10 07:18:07', '2017-07-10 07:18:07', 'yuia'),
(28, 6, 'asds', 0, 'asd', NULL, '2017-07-10 07:18:40', '2017-07-10 07:18:40', 'asdasd'),
(29, 6, 'asd', 0, 'asd', NULL, '2017-07-10 07:28:14', '2017-07-10 07:28:14', 'asdsad'),
(30, 6, 'asd', 0, 'sad', NULL, '2017-07-10 07:28:41', '2017-07-10 07:28:41', 'sad'),
(31, 6, 'asd', 0, 'asda', NULL, '2017-07-10 07:31:36', '2017-07-10 07:31:36', 'asd'),
(32, 6, 'sdsad', 0, 'sdsad', NULL, '2017-07-10 08:03:05', '2017-07-10 08:03:05', 'sdsad'),
(33, 6, 'asdsa', 0, 'week_id', NULL, '2017-07-10 08:06:02', '2017-07-10 08:06:02', 'week_id'),
(34, 6, 'asd', 0, 'sa', NULL, '2017-07-10 23:53:41', '2017-07-10 23:53:41', 'sa'),
(35, 6, 'qwea', 0, 'qwea', NULL, '2017-07-11 00:10:49', '2017-07-11 00:10:49', 'qwea'),
(36, 6, 'asd', 0, 'week_id', NULL, '2017-07-11 00:12:15', '2017-07-11 00:12:15', 'week_id'),
(37, 6, 'asda', 0, 'asda', NULL, '2017-07-11 00:13:24', '2017-07-11 00:13:24', 'asda'),
(38, 6, 'asd', 0, 'sa', NULL, '2017-07-11 00:30:41', '2017-07-11 00:30:41', 'sad'),
(39, 6, 'asdaasd', 0, 'asdad', NULL, '2017-07-11 00:34:28', '2017-07-11 00:34:28', 'asdsad'),
(40, 6, 'asdasd', 0, 'asdasd', NULL, '2017-07-11 00:36:49', '2017-07-11 00:36:49', 'asdasd'),
(41, 6, 'asdsad', 0, 'asdsad', NULL, '2017-07-11 00:37:44', '2017-07-11 00:37:44', 'asdsad'),
(42, 6, 'sad', 0, 'sad', NULL, '2017-07-11 00:39:10', '2017-07-11 00:39:10', 'sad'),
(43, 6, 'sad', 0, 'asd', NULL, '2017-07-11 00:44:02', '2017-07-11 00:44:02', 'asd'),
(44, 6, 'sdsa', 0, 'sdsa', NULL, '2017-07-11 00:46:41', '2017-07-11 00:46:41', 'sdsa'),
(45, 6, 'rtttyyt', 0, 'rtttyyt', NULL, '2017-07-11 00:50:57', '2017-07-11 00:50:57', 'rtttyyt'),
(46, 6, 'asasd', 0, 'asasd', NULL, '2017-07-11 00:55:25', '2017-07-11 00:55:25', 'asasd'),
(47, 6, 'asdada', 0, 'asdada', NULL, '2017-07-11 00:56:44', '2017-07-11 00:56:44', 'asdada'),
(48, 6, 'asdsadas', 0, 'asdsadas', NULL, '2017-07-11 00:58:33', '2017-07-11 00:58:33', 'asdsadas'),
(49, 6, 'asdsadas', 0, 'asdsadas', NULL, '2017-07-11 00:59:39', '2017-07-11 00:59:39', 'asdsadas'),
(50, 6, 'asdsa', 0, 'asdsad', NULL, '2017-07-11 01:01:15', '2017-07-11 01:01:15', 'asdsad'),
(51, 6, 'asdsad', 0, 'asdsad', NULL, '2017-07-11 01:03:34', '2017-07-11 01:03:34', 'asdsad'),
(52, 6, 'qwe', 0, 'qwe', NULL, '2017-07-11 01:28:12', '2017-07-11 01:28:12', 'qwe'),
(53, 6, 'qwewe', 0, 'qwewe', NULL, '2017-07-11 01:32:15', '2017-07-11 01:32:15', 'qwewe'),
(54, 6, 'qwewqe', 0, 'qwewqe', NULL, '2017-07-11 01:45:07', '2017-07-11 01:45:07', 'qwewqe'),
(55, 6, 'ererer', 0, 'ererer', NULL, '2017-07-11 01:49:02', '2017-07-11 01:49:02', 'ererer'),
(56, 6, 'asdasd', 0, 'asdasd', NULL, '2017-07-11 01:49:44', '2017-07-11 01:49:44', 'sadsa'),
(57, 6, 'asdasd', 0, 'asda', NULL, '2017-07-11 01:50:39', '2017-07-11 01:50:39', 'asda'),
(58, 6, 'sadsad', 0, 'dadsa', NULL, '2017-07-11 01:52:22', '2017-07-11 01:52:22', 'asdsad'),
(59, 6, 'adasd', 0, 'asdasd', NULL, '2017-07-11 01:53:28', '2017-07-11 01:53:28', 'asdasd'),
(60, 6, 'asda', NULL, 'asd', NULL, '2017-07-11 05:10:03', '2017-07-11 05:10:03', 'asd'),
(61, 6, 'sadasd', NULL, 'sadasd', NULL, '2017-07-11 05:10:28', '2017-07-11 05:10:28', 'sadasd'),
(62, 6, 'asdaasd', NULL, 'sadasd', NULL, '2017-07-11 05:12:29', '2017-07-11 05:12:29', 'sadasd'),
(63, 6, 'asdad', NULL, 'asda', NULL, '2017-07-11 05:14:35', '2017-07-11 05:14:35', 'sadsad'),
(64, 6, 'sadasdas', NULL, 'sadasdas', NULL, '2017-07-11 05:19:11', '2017-07-11 05:19:11', 'sadasdas'),
(65, 6, 'wqweqwe', NULL, 'wqweqwe', NULL, '2017-07-11 05:21:20', '2017-07-11 05:21:20', 'wqweqwe'),
(66, 6, 'asd', NULL, 'asd', NULL, '2017-07-11 05:22:45', '2017-07-11 05:22:45', 'asd'),
(67, 6, 'asdsadaa', NULL, 'asdaa', NULL, '2017-07-11 05:32:48', '2017-07-11 05:32:48', 'asdaa'),
(68, 6, 'asdasdasdas', NULL, 'asdasdasdasasdasdasdas', NULL, '2017-07-11 05:33:51', '2017-07-11 05:33:51', 'asdasdasdas'),
(69, 6, 'asdsadada', NULL, 'asdsadada', NULL, '2017-07-11 05:34:09', '2017-07-11 05:34:09', 'asdsadada'),
(70, 6, 'asdsadsada', NULL, 'asdsadsada', NULL, '2017-07-11 05:48:58', '2017-07-11 05:48:58', 'asdsadsada'),
(71, 6, 'sadsadas', NULL, 'asdsad', NULL, '2017-07-11 05:49:19', '2017-07-11 05:49:19', 'adasdasd'),
(72, 6, 'asdasdadas', NULL, 'asdasdadas', NULL, '2017-07-11 05:57:41', '2017-07-11 05:57:41', 'asdasdadas'),
(73, 6, 'asdsadsad', NULL, 'asdasdsaaa', NULL, '2017-07-11 05:58:58', '2017-07-11 05:58:58', 'asdasdsad'),
(74, 6, 'sadasdasd', NULL, 'asdasdasd', NULL, '2017-07-11 06:02:47', '2017-07-11 06:02:47', 'asdasdadsa'),
(75, 6, 'sadadasda', NULL, 'sadadasda', NULL, '2017-07-11 06:08:01', '2017-07-11 06:08:01', 'sadadasda'),
(76, 6, 'asdasdasdas', NULL, 'asdasdasdas', NULL, '2017-07-11 06:08:39', '2017-07-11 06:08:39', 'asdasdasdas'),
(77, 6, 'asdadas', NULL, 'asdadas', NULL, '2017-07-11 06:12:20', '2017-07-11 06:12:20', 'asdadas'),
(78, 6, 'asqweasdasd', NULL, 'asqweasdasd', NULL, '2017-07-11 06:20:35', '2017-07-11 06:20:35', 'asqweasdasd'),
(79, 6, 'sadsadas', NULL, 'asdad', NULL, '2017-07-11 06:28:20', '2017-07-11 06:28:20', 'asdasdasd'),
(80, 6, 'asdsadas', NULL, 'asdad', NULL, '2017-07-11 06:33:49', '2017-07-11 06:33:49', 'asdada'),
(81, 6, 'adsad', NULL, 'adsad', NULL, '2017-07-11 07:01:44', '2017-07-11 07:01:44', 'adsad'),
(82, 6, 'asdsadaa', NULL, 'adada', NULL, '2017-07-11 07:03:36', '2017-07-11 07:03:36', 'adada'),
(83, 6, 'adsadaa', NULL, 'adsadaa', NULL, '2017-07-11 07:04:04', '2017-07-11 07:04:04', 'adsadaa'),
(84, 6, 'asdasdasdsadsa', NULL, 'asdasdasdsadsa', NULL, '2017-07-11 07:05:15', '2017-07-11 07:05:15', 'asdasdasdsadsa'),
(85, 6, 'asdasdasd', NULL, 'asdasdasd', NULL, '2017-07-11 07:06:35', '2017-07-11 07:06:35', 'asdasdasd'),
(86, 6, 'asdasdasdas', NULL, 'asdasdasdasasdasdasdas', NULL, '2017-07-11 07:08:38', '2017-07-11 07:08:38', 'asdasdasdasasdasdasdas'),
(87, 6, 'asdasdasd', NULL, 'asdasdasdas', NULL, '2017-07-11 07:13:10', '2017-07-11 07:13:10', 'asdasdasdas'),
(88, 6, 'asdasdadas', NULL, 'asdsadasd', NULL, '2017-07-11 07:15:36', '2017-07-11 07:15:36', 'asdasdasd'),
(89, 6, 'sadsad', NULL, 'asdasdasdas', NULL, '2017-07-11 07:19:25', '2017-07-11 07:19:25', 'asdasdasdas'),
(90, 6, 'asdadad', NULL, 'asdadad', NULL, '2017-07-11 07:25:12', '2017-07-11 07:25:12', 'asdadad'),
(91, 6, 'asdasdasdsadsa', NULL, 'asdasdasdsadsa', NULL, '2017-07-11 07:42:31', '2017-07-11 07:42:31', 'asdasdasdsadsa'),
(92, 6, 'asdsadas', NULL, 'daa', NULL, '2017-07-11 07:42:56', '2017-07-11 07:42:56', 'daa'),
(93, 6, 'asdsad', NULL, 'asdsad', NULL, '2017-07-11 08:00:59', '2017-07-11 08:00:59', 'asdsad'),
(94, 6, 'asdsadada', NULL, 'as', NULL, '2017-07-11 08:12:20', '2017-07-11 08:12:20', 'asdsad'),
(95, 6, 'asdasd', NULL, 'asdasd', NULL, '2017-07-11 23:39:26', '2017-07-11 23:39:26', 'asdasdasdsadsa'),
(96, 6, 'asda', NULL, 'asda', NULL, '2017-07-11 23:44:08', '2017-07-11 23:44:08', 'asdasdasd'),
(97, 6, 'asdasdadas', NULL, 'asdas', NULL, '2017-07-11 23:47:14', '2017-07-11 23:47:14', 'asdasdasd'),
(98, 6, 'qweqw', NULL, 'qweqw', NULL, '2017-07-11 23:47:38', '2017-07-11 23:47:38', 'qweqw'),
(99, 6, 'asdsa', NULL, 'asdsa', NULL, '2017-07-12 00:00:22', '2017-07-12 00:00:22', 'asdsa'),
(100, 6, 'sadsadas', NULL, 'sad', NULL, '2017-07-12 00:01:29', '2017-07-12 00:01:29', 'sadasd'),
(101, 6, 'asda', NULL, 'asd', NULL, '2017-07-12 00:02:26', '2017-07-12 00:02:26', 'asdasdasd'),
(102, 6, 'qweqeqw', NULL, 'qweqeqw', NULL, '2017-07-12 00:03:12', '2017-07-12 00:03:12', 'qweqeqw'),
(103, 6, 'qweqe', NULL, 'qweqe', NULL, '2017-07-12 00:05:49', '2017-07-12 00:05:49', 'qweqe'),
(104, 6, 'asd', NULL, 'asd', NULL, '2017-07-12 00:07:40', '2017-07-12 00:07:40', 'asdasd'),
(105, 6, 'qweqew', NULL, 'qweqew', NULL, '2017-07-12 00:08:15', '2017-07-12 00:08:15', 'qweqew'),
(106, 6, 'qweqweqw', NULL, 'qweqweqw', NULL, '2017-07-12 00:11:02', '2017-07-12 00:11:02', 'qweqweqw'),
(107, 6, 'asdsaa', NULL, 'deleteWeek', NULL, '2017-07-12 00:19:26', '2017-07-12 00:19:26', 'deleteWeek'),
(108, 6, 'nlklkj', NULL, 'jkljk', NULL, '2017-07-12 00:20:51', '2017-07-12 00:20:51', 'jkljl'),
(109, 6, 'adsadaaadsa', NULL, 'adsa', NULL, '2017-07-12 00:21:45', '2017-07-12 00:21:45', 'adsa'),
(110, 6, 'asdsadada', NULL, 'das', NULL, '2017-07-12 00:23:47', '2017-07-12 00:23:47', 'das'),
(111, 6, 'asdasdasd', NULL, 'dadas', NULL, '2017-07-12 00:24:28', '2017-07-12 00:24:28', 'dadas'),
(112, 6, 'adasd', NULL, 'adasd', NULL, '2017-07-12 00:25:29', '2017-07-12 00:25:29', 'adasd'),
(113, 6, 'asdasdsa', NULL, 'asdasdsa', NULL, '2017-07-12 00:27:01', '2017-07-12 00:27:01', 'asdasdsa'),
(114, 6, 'asdadas', NULL, 'asdadas', NULL, '2017-07-12 00:29:26', '2017-07-12 00:29:26', 'asdadas'),
(115, 6, 'asdsadas', NULL, 'd', NULL, '2017-07-12 00:30:43', '2017-07-12 00:30:43', 'dadas'),
(116, 6, 'asdsadaa', NULL, 'das', NULL, '2017-07-12 00:42:05', '2017-07-12 00:42:05', 'das'),
(117, 6, 'qweqw', NULL, 'asdsad', NULL, '2017-07-12 00:43:19', '2017-07-12 00:43:19', 'asdsadas'),
(118, 6, 'qweqwe', NULL, 'asdsad', NULL, '2017-07-12 00:44:21', '2017-07-12 00:44:21', 'asdsadas'),
(119, 6, 'asdas', NULL, 'asdas', NULL, '2017-07-12 01:07:31', '2017-07-12 01:07:31', 'asdas'),
(120, 6, 'asdsadaa', NULL, 'sad', NULL, '2017-07-12 01:09:04', '2017-07-12 01:09:04', 'sadadasda'),
(121, 6, 'asdsa', NULL, 'asdsa', NULL, '2017-07-12 01:11:04', '2017-07-12 01:11:04', 'asdsadas'),
(122, 6, 'asdsad', NULL, 'asdsad', NULL, '2017-07-12 01:20:41', '2017-07-12 01:20:41', 'asdsadada'),
(123, 6, 'adsa', NULL, 'daa', NULL, '2017-07-12 01:21:01', '2017-07-12 01:21:01', 'daa'),
(124, 6, 'adasd', NULL, 'adasd', NULL, '2017-07-12 01:21:16', '2017-07-12 01:21:16', 'adasd'),
(125, 6, 'asdsadada', NULL, 'adasd', NULL, '2017-07-12 01:21:32', '2017-07-12 01:21:32', 'adasd'),
(126, 6, 'asdasdadas', NULL, 'asdas', NULL, '2017-07-12 02:31:17', '2017-07-12 02:31:17', 'asdasd'),
(127, 6, 'asdasdadas', NULL, 'asdas', NULL, '2017-07-12 02:35:16', '2017-07-12 02:35:16', 'asdasd'),
(128, 6, 'adassa', NULL, 'adassa', NULL, '2017-07-12 02:36:01', '2017-07-12 02:36:01', 'adassa'),
(129, 6, 'asdsadada', NULL, 'asdas', NULL, '2017-07-12 02:41:43', '2017-07-12 02:41:43', 'asd'),
(130, 6, 'sadasd', NULL, 'asd', NULL, '2017-07-12 02:44:14', '2017-07-12 02:44:14', 'asd'),
(131, 6, 'asdas', NULL, 'asdas', NULL, '2017-07-12 02:46:46', '2017-07-12 02:46:46', 'asdas'),
(132, 6, 'asdsa', NULL, 'asdsa', NULL, '2017-07-12 03:02:33', '2017-07-12 03:02:33', 'asdsadada'),
(133, 6, 'asdsada', NULL, 'asdsada', NULL, '2017-07-12 03:02:58', '2017-07-12 03:02:58', 'asdsada'),
(134, 6, 'asdsaa', NULL, 'resource_title', NULL, '2017-07-12 03:09:36', '2017-07-12 03:09:36', 'resource_title'),
(135, 6, 'asdsad', NULL, 'asdsad', NULL, '2017-07-12 03:10:22', '2017-07-12 03:10:22', 'asdsadada'),
(136, 6, 'asdasa', NULL, 'asdasa', NULL, '2017-07-12 03:11:31', '2017-07-12 03:11:31', 'asdasa'),
(137, 6, 'asdasdasd', NULL, '$(".close span").click();', NULL, '2017-07-12 03:17:14', '2017-07-12 03:17:14', '$(".close span").click();'),
(138, 6, 'asdasdasd', NULL, 'asdasdasd', NULL, '2017-07-12 03:17:44', '2017-07-12 03:17:44', 'sadsad'),
(139, 6, 'sadasdas', NULL, 'sadasd', NULL, '2017-07-12 03:18:36', '2017-07-12 03:18:36', 'sadasd'),
(140, 6, 'asdasdasd', NULL, 'asdasd', NULL, '2017-07-12 03:21:56', '2017-07-12 03:21:56', 'asdasdasd'),
(141, 6, 'asdsadada', NULL, 'asdsad', NULL, '2017-07-12 03:24:00', '2017-07-12 03:24:00', 'asdsad'),
(142, 6, 'sdfsd', NULL, 'asdasd', NULL, '2017-07-12 03:25:49', '2017-07-12 03:25:49', 'adasd'),
(143, 6, 'asdasdasd', NULL, 'asdasd', NULL, '2017-07-12 03:26:34', '2017-07-12 03:26:34', 'asdasd'),
(144, 6, 'sada', NULL, 'dasda', NULL, '2017-07-12 03:49:13', '2017-07-12 03:49:13', 'dasda'),
(145, 6, 'asdasdadas', NULL, 'asd', NULL, '2017-07-12 03:51:09', '2017-07-12 03:51:09', 'asdasd'),
(146, 6, 'ewrwewerwe', NULL, 'ewrwewerwe', NULL, '2017-07-12 03:53:28', '2017-07-12 03:53:28', 'ewrwewerwe'),
(147, 6, 'asdadasd', NULL, 'asdadasd', NULL, '2017-07-12 03:54:05', '2017-07-12 03:54:05', 'asdadasd'),
(148, 6, 'asdadasd', NULL, 'asdadasd', NULL, '2017-07-12 03:55:02', '2017-07-12 03:55:02', 'asdadasd'),
(149, 6, 'dasdasdas', NULL, 'dasdasdas', NULL, '2017-07-12 03:55:19', '2017-07-12 03:55:19', 'dasdasdas'),
(150, 6, 'adsadsadsad', NULL, 'adsadsadsad', NULL, '2017-07-12 03:56:32', '2017-07-12 03:56:32', 'adsadsadsad'),
(151, 6, 'asdasda', NULL, 'sdsadsa', NULL, '2017-07-12 03:57:06', '2017-07-12 03:57:06', 'sdsadsa'),
(152, 6, 'asdasdsad', NULL, 'asdsad', NULL, '2017-07-12 03:59:28', '2017-07-12 03:59:28', 'asdsad'),
(153, 6, 'adasdsadsadasdsadasda', NULL, 'adasdsadsadasdsadasda', NULL, '2017-07-12 04:00:08', '2017-07-12 04:00:08', 'adasdsadsadasdsadasda'),
(154, 6, 'asdsadada', NULL, 'sadsada', NULL, '2017-07-12 04:05:14', '2017-07-12 04:05:14', 'sadsada'),
(155, 6, 'adsasdas', NULL, 'adsasdas', NULL, '2017-07-12 05:13:21', '2017-07-12 05:13:21', 'adsasdas'),
(156, 6, 'asdadas', NULL, 'd', NULL, '2017-07-12 05:14:08', '2017-07-12 05:14:08', 'daa'),
(157, 6, 'adasdasd', NULL, 'asdasdsa', NULL, '2017-07-12 05:19:33', '2017-07-12 05:19:33', 'asdasdasdas'),
(158, 6, 'dasda', NULL, 'asdasd', NULL, '2017-07-12 05:20:02', '2017-07-12 05:20:02', 'sadasd'),
(159, 6, 'aasdasd', NULL, 'aasdasd', NULL, '2017-07-12 05:23:06', '2017-07-12 05:23:06', 'aasdasd'),
(160, 6, 'asdasdsa', NULL, 'asdasdsa', NULL, '2017-07-12 05:23:39', '2017-07-12 05:23:39', 'asdasdsa'),
(161, 6, 'asdasdasdas', NULL, 'asdasd', NULL, '2017-07-12 05:26:39', '2017-07-12 05:26:39', 'asdasdasdas'),
(162, 6, 'asdasdasda', NULL, 'asdasdasda', NULL, '2017-07-12 05:26:53', '2017-07-12 05:26:53', 'asdasdasdas'),
(163, 6, 'asasdasd', NULL, 'asasdasd', NULL, '2017-07-12 05:30:23', '2017-07-12 05:30:23', 'asasdasd'),
(164, 6, 'asdasdasdsada', NULL, 'asdasdasdsada', NULL, '2017-07-12 05:30:54', '2017-07-12 05:30:54', 'asdasdasdsada'),
(165, 6, 'weuiwuiehuihauihiasudh', NULL, 'adiuauisdauidui', NULL, '2017-07-12 05:32:40', '2017-07-12 05:32:40', 'iojqdasdioasmo'),
(166, 6, 'asdsadas', NULL, 'ada', NULL, '2017-07-12 05:38:50', '2017-07-12 05:38:50', 'adasdasd'),
(167, 6, 'asdsadas', NULL, 'asdadas', NULL, '2017-07-12 05:40:11', '2017-07-12 05:40:11', 'asdsadada'),
(168, 6, 'adasdasd', NULL, 'asdasdasd', NULL, '2017-07-12 05:41:34', '2017-07-12 05:41:34', 'asdasdasd'),
(169, 6, 'asdsadasd', NULL, 'asdsadasd', NULL, '2017-07-12 05:42:19', '2017-07-12 05:42:19', 'asdsadasd'),
(170, 6, 'asdsadasdasd', NULL, 'asdsadasdasd', NULL, '2017-07-12 05:43:10', '2017-07-12 05:43:10', 'asdsadasdasd'),
(171, 6, 'asdasdasdas', NULL, 'asdadasdasd', NULL, '2017-07-12 05:45:19', '2017-07-12 05:45:19', 'asdasdasdas'),
(172, 6, 'sadasdsadasd', NULL, 'sadasdsadasd', NULL, '2017-07-13 07:30:30', '2017-07-13 07:30:30', 'sadasdsadasd'),
(173, 6, 'sadasdsadasd', NULL, 'sadasdsadasd', NULL, '2017-07-13 07:35:34', '2017-07-13 07:35:34', 'sadasdsadasd'),
(174, 6, 'sadasdasd', NULL, 'werwerwerwer', NULL, '2017-07-13 07:39:55', '2017-07-13 07:39:55', 'werwerwerwer'),
(175, 6, 'dasdasdas', NULL, 'dasdasdas', NULL, '2017-07-13 07:40:57', '2017-07-13 07:40:57', 'aasdasd'),
(176, 6, 'asdasdasda', NULL, 'asdasdas', NULL, '2017-07-13 23:23:49', '2017-07-13 23:23:49', 'asdasdasdsadsa'),
(177, 6, 'adsadasa', NULL, 'adsadasa', NULL, '2017-07-13 23:51:42', '2017-07-13 23:51:42', 'adsadasa'),
(178, 6, 'adasdasd', NULL, 'adsadasa', NULL, '2017-07-13 23:51:55', '2017-07-13 23:51:55', 'adsadasa'),
(179, 6, 'asdsadaa', NULL, 'ada', NULL, '2017-07-13 23:52:34', '2017-07-13 23:52:34', 'adasdasd'),
(180, 6, 'rtyerterter', NULL, 'rtyerterter', NULL, '2017-07-13 23:52:58', '2017-07-13 23:52:58', 'rtyerterter'),
(181, 6, 'sadadad', NULL, 'sadadad', NULL, '2017-07-13 23:56:23', '2017-07-13 23:56:23', 'sadadad');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE IF NOT EXISTS `credit_card` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `expiration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvc` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`id`, `user_id`, `card_num`, `expiration`, `cvc`, `created_at`, `updated_at`) VALUES
(1, 6, 4210177177965555, '03/19', 151, '2017-07-06 02:23:24', '2017-07-06 07:14:59'),
(2, 6, 4210177177965555, '03/19', 151, '2017-07-06 02:32:34', '2017-07-06 07:14:59'),
(3, 6, 4210177177965555, '03/19', 151, '2017-07-06 02:33:04', '2017-07-06 07:14:59'),
(4, 6, 4210177177965555, '03/19', 151, '2017-07-06 02:34:19', '2017-07-06 07:14:59'),
(5, 6, 4210177177965555, '03/19', 151, '2017-07-06 02:34:31', '2017-07-06 07:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(10) unsigned NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lan_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`, `lan_code`, `created_at`, `updated_at`) VALUES
(1, 'Afrikanns', 'AF', NULL, NULL),
(2, 'Albanian', 'AL', NULL, NULL),
(3, 'Arabic', 'AR', NULL, NULL),
(4, 'Armenian', 'AM', NULL, NULL),
(5, 'Basque', 'BQ', NULL, NULL),
(6, 'Bengali', 'BN', NULL, NULL),
(7, 'Bulgarian', 'BG', NULL, NULL),
(8, 'Catalan', 'CA', NULL, NULL),
(9, 'Cambodian', 'KM', NULL, NULL),
(10, 'Chinese (Mandarin)', 'ZH', NULL, NULL),
(11, 'Croation', 'HR', NULL, NULL),
(12, 'Czech', 'CS', NULL, NULL),
(13, 'Danish', 'DA', NULL, NULL),
(14, 'Dutch', 'NL', NULL, NULL),
(15, 'English', 'EN', NULL, NULL),
(16, 'Estonian', 'ET', NULL, NULL),
(17, 'Fiji', 'FJ', NULL, NULL),
(18, 'Finnish', 'FI', NULL, NULL),
(19, 'French', 'FR', NULL, NULL),
(20, 'Georgian', 'KA', NULL, NULL),
(21, 'German', 'DE', NULL, NULL),
(22, 'Greek', 'EL', NULL, NULL),
(23, 'Gujarati', 'GU', NULL, NULL),
(24, 'Hebrew', 'HE', NULL, NULL),
(25, 'Hindi', 'HI', NULL, NULL),
(26, 'Hungarian', 'HU', NULL, NULL),
(27, 'Icelandic', 'IS', NULL, NULL),
(28, 'Indonesian', 'ID', NULL, NULL),
(29, 'Irish', 'GA', NULL, NULL),
(30, 'Italian', 'IT', NULL, NULL),
(31, 'Japanese', 'JA', NULL, NULL),
(32, 'Javanese', 'JW', NULL, NULL),
(33, 'Korean', 'KO', NULL, NULL),
(34, 'Latin', 'LA', NULL, NULL),
(35, 'Latvian', 'LV', NULL, NULL),
(36, 'Lithuanian', 'LT', NULL, NULL),
(37, 'Macedonian', 'MK', NULL, NULL),
(38, 'Malay', 'MS', NULL, NULL),
(39, 'Malayalam', 'ML', NULL, NULL),
(40, 'Maltese', 'MT', NULL, NULL),
(41, 'Maori', 'MI', NULL, NULL),
(42, 'Marathi', 'MR', NULL, NULL),
(43, 'Mongolian', 'MN', NULL, NULL),
(44, 'Nepali', 'NE', NULL, NULL),
(45, 'Norwegian', 'NO', NULL, NULL),
(46, 'Persian', 'FA', NULL, NULL),
(47, 'Polish', 'PL', NULL, NULL),
(48, 'Portuguese', 'PT', NULL, NULL),
(49, 'Punjabi', 'PA', NULL, NULL),
(50, 'Quechua', 'QU', NULL, NULL),
(51, 'Romanian', 'RO', NULL, NULL),
(52, 'Russian', 'RU', NULL, NULL),
(53, 'Samoan', 'SM', NULL, NULL),
(54, 'Serbian', 'SR', NULL, NULL),
(55, 'Slovak', 'SK', NULL, NULL),
(56, 'Slovenian', 'SL', NULL, NULL),
(57, 'Spanish', 'ES', NULL, NULL),
(58, 'Swahili', 'SW', NULL, NULL),
(59, 'Swedish ', 'SV', NULL, NULL),
(60, 'Tamil', 'TA', NULL, NULL),
(61, 'Tatar', 'TT', NULL, NULL),
(62, 'Telugu', 'TE', NULL, NULL),
(63, 'Thai', 'TH', NULL, NULL),
(64, 'Tibetan', 'BO', NULL, NULL),
(65, 'Tonga', 'TO', NULL, NULL),
(66, 'Turkish', 'TR', NULL, NULL),
(67, 'Ukranian', 'UK', NULL, NULL),
(68, 'Urdu', 'UR', NULL, NULL),
(69, 'Uzbek', 'UZ', NULL, NULL),
(70, 'Vietnamese', 'VI', NULL, NULL),
(71, 'Welsh', 'CY', NULL, NULL),
(72, 'Xhosa', 'XH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(11) NOT NULL,
  `week_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `week_id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(7, 164, 'adsadasd', '1499849712-default_person.png', '2017-07-12 03:55:12', '2017-07-12 03:55:12'),
(8, 169, 'asdsadasdsa', '1499849876-default_person.png', '2017-07-12 03:57:56', '2017-07-12 03:57:56'),
(9, 172, 'sdrfdsfsdfsd', '1499849985-default_person.png', '2017-07-12 03:59:45', '2017-07-12 03:59:45'),
(10, 174, 'dsfwerfwerfsf', '1499850155-default_person.png', '2017-07-12 04:02:35', '2017-07-12 04:02:35'),
(11, 184, '123123', '1499855467-default_person.png', '2017-07-12 05:31:07', '2017-07-12 05:31:07'),
(12, 190, 'sdasdasdas', '1499856107-default_person.png', '2017-07-12 05:41:47', '2017-07-12 05:41:47'),
(13, 191, 'adasdasdasd', '1499856153-default_person.png', '2017-07-12 05:42:33', '2017-07-12 05:42:33'),
(14, 192, 'rtrtrtrtrtyrty', '1499856212-default_person.png', '2017-07-12 05:43:32', '2017-07-12 05:43:32'),
(15, 197, ',l;,l,lp', '1499949345-e361b0bb-786b-4c28-832f-03e168930ec3.jpg', '2017-07-13 07:35:45', '2017-07-13 07:35:45'),
(16, 200, 'asdasdasd', '1499949668-e361b0bb-786b-4c28-832f-03e168930ec3.jpg', '2017-07-13 07:41:08', '2017-07-13 07:41:08'),
(17, 201, 'asdsa', '1500006382-download.jpg', '2017-07-13 23:26:22', '2017-07-13 23:26:22'),
(18, 201, 'aasdas', '1500007039-download.jpg', '2017-07-13 23:37:19', '2017-07-13 23:37:19'),
(19, 207, 'asdasdsad', '1500008174-download.jpg', '2017-07-13 23:56:14', '2017-07-13 23:56:14'),
(20, 208, 'sadadadsadadadsadadad', '1500008200-download.jpg', '2017-07-13 23:56:40', '2017-07-13 23:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_03_131020_entrust_setup_tables', 1),
(4, '2017_07_04_060546_language', 2),
(5, '2017_07_05_111627_country', 3),
(8, '2017_07_05_114103_credit_card', 4),
(10, '2017_07_08_062504_course', 5),
(11, '2017_07_08_064809_add_prerequisite_to_course', 6),
(12, '2017_07_08_073447_course_week', 7),
(13, '2017_07_11_060817_add_table_lesson', 8),
(14, '2017_07_11_114605_create_coding_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(10) unsigned NOT NULL,
  `week_id` int(11) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `week_id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(4, 175, 'asdsadas', '1499850356-default_person.png', '2017-07-12 04:05:56', '2017-07-12 04:05:56'),
(5, 177, 'sadasd', '1499854413-default_person.png', '2017-07-12 05:13:33', '2017-07-12 05:13:33'),
(6, 179, 'asdadasd', '1499854489-default_person.png', '2017-07-12 05:14:49', '2017-07-12 05:14:49'),
(7, 196, 'sadadasdsa', '1499949248-6162.jpg', '2017-07-13 07:34:08', '2017-07-13 07:34:08'),
(8, 197, ',l,klp,kl', '1499949354-download.jpg', '2017-07-13 07:35:54', '2017-07-13 07:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'student', 'student', 'student', '2017-07-03 19:00:00', NULL),
(2, 'instructor', 'instructor', 'instructor', '2017-07-03 19:00:00', NULL),
(3, 'admin', 'admin', 'admin', '2017-07-03 19:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(8, 1),
(9, 1),
(10, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `country`, `language`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'irfan', 'mumtaz', 'student@sawalipro.com', '$2y$10$J7cxJR7cFK7dgdrJcNdYgeSUZDCoShZry5shz3xAlG5h/0GfUDUuu', 1, 1, '1', NULL, '2017-07-04 00:44:15', '2017-07-04 00:44:15'),
(2, 'irfan', 'mumtaz', 'livesimpathy@yahoo.com', '$2y$10$MopLB7HiXu/Hnb/YNuSlaOBsddSWWveKL4P5HcIS3F2qCBKO9wc12', 1, 1, '1', NULL, '2017-07-04 00:45:56', '2017-07-04 00:45:56'),
(4, 'irfan', 'mumtaz', 'email@email.com', '$2y$10$1IcgdhtUMKQQjxkd94PRwOMKCfSh6bdtF0UaE3V3G44ppNo6N8Dia', 1, 1, '1', NULL, '2017-07-04 00:53:02', '2017-07-04 00:53:02'),
(5, 'irfan', 'irfan', 'irfan@irfan.com', '$2y$10$x3tQpgPwLoRp/WpeQbv4jubx57REr4fhnkN546YmooCfp7LkfDu5q', 1, 1, '1', NULL, '2017-07-04 00:53:57', '2017-07-04 00:53:57'),
(6, 'irfan', 'mumtaz', 'irfan.aimviz@gmail.com', '$2y$10$F62X.jqj/qR5I3jmtZkVqu3L074A/eTeDO9CaNrFEMs5hcHKhZr/O', 168, 68, '1', 'LjWUHG5ganNM0E7z2XFOhhUgwolZ0SBMaqjjGHrePJQkc2EPXKX51OyphOo9', '2017-07-04 00:56:31', '2017-07-06 07:10:33'),
(7, 'irfan', 'mumtaz', 'irfan.aimwviz@gmail.com', '$2y$10$xlRt4Y/3c2nkDEHI1t.5Ee1aH8DM2ppw9x8zvJLnvtMym0gUNgrTu', 1, 1, '1', NULL, '2017-07-04 00:57:36', '2017-07-04 00:57:36'),
(8, 'irfan', 'mumtaz', 'irfan.aimviz@gmail.coma', '$2y$10$NsFaam2DqewLhbB3k7GU5.QCyGogQYyr/V4.SnUK1K9GeDxXhMQRG', 1, 1, '1', NULL, '2017-07-04 01:00:41', '2017-07-04 01:00:41'),
(9, 'irf', 'mumtaz', 'irfan@mumtaz.com', '$2y$10$1x0n1LHy5e6Pcd/TWaGdke4BEuw/LEeqtJnUJoMr.BLRTVTPxVxjq', 1, 1, '1', NULL, '2017-07-04 01:02:40', '2017-07-04 01:02:40'),
(10, 'irfan', 'mumtaz', 'irfan.aimadsviz@gmail.com', '$2y$10$GDqP7M.tFfN3y.oIoWu5BeWm66ENCuXNkfmIwccZ9BakTL/7ebmgS', 1, 68, '1', NULL, '2017-07-04 01:43:54', '2017-07-04 01:43:54'),
(11, 'irfan', 'mumtaz', 'livesimpathy@yahoo.com3', '$2y$10$.hAhv9JvEfd6Et.6M0jlk.neW4BGKi929GlQWDEXbpYkJVvFpvvYe', 1, 15, '2', NULL, '2017-07-04 07:57:55', '2017-07-04 07:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `weeks`
--

CREATE TABLE IF NOT EXISTS `weeks` (
  `id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weeks`
--

INSERT INTO `weeks` (`id`, `course_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(150, 135, 'asdsad', 'asdsad', '2017-07-12 03:10:27', '2017-07-12 03:10:27'),
(152, 137, 'asdasdsad', 'asdasd', '2017-07-12 03:17:18', '2017-07-12 03:17:18'),
(153, 138, 'asdasdasd', 'asdasdasd', '2017-07-12 03:17:47', '2017-07-12 03:17:47'),
(154, 139, 'sadasd', 'sadasd', '2017-07-12 03:18:43', '2017-07-12 03:18:43'),
(155, 140, 'asdsad', 'asdsad', '2017-07-12 03:22:02', '2017-07-12 03:22:02'),
(156, 141, 'erwerwrew', 'erwerwrew', '2017-07-12 03:24:08', '2017-07-12 03:24:08'),
(157, 142, 'adasda', 'asdsada', '2017-07-12 03:25:58', '2017-07-12 03:25:58'),
(158, 143, 'asdasdasd', 'asdasd', '2017-07-12 03:26:40', '2017-07-12 03:26:40'),
(159, 144, 'asdasdasd', 'asdasd', '2017-07-12 03:49:21', '2017-07-12 03:49:21'),
(160, 145, 'asdasdasdasd', 'asd', '2017-07-12 03:51:14', '2017-07-12 03:51:14'),
(161, 146, 'ewrwewerwe', 'ewrwewerwe', '2017-07-12 03:53:31', '2017-07-12 03:53:31'),
(162, 147, 'asdadasd', 'asdadasd', '2017-07-12 03:54:09', '2017-07-12 03:54:09'),
(163, 147, 'asdadasdasdsa', 'asdadasdasdsad', '2017-07-12 03:54:14', '2017-07-12 03:54:14'),
(164, 148, 'asdadasdasdsa', 'asdadasdasdsad', '2017-07-12 03:55:06', '2017-07-12 03:55:06'),
(165, 149, 'dasdasdas', 'dasdasdas', '2017-07-12 03:55:22', '2017-07-12 03:55:22'),
(166, 149, 'dasdasdas', 'dasdasdas', '2017-07-12 03:55:25', '2017-07-12 03:55:25'),
(167, 150, 'asdasdsad', 'sad', '2017-07-12 03:56:35', '2017-07-12 03:56:35'),
(168, 150, 'asdasdsadsaa', 'sadsdasdsa', '2017-07-12 03:56:41', '2017-07-12 03:56:41'),
(169, 151, 'asdasdasdasdasd', 'asdasd', '2017-07-12 03:57:13', '2017-07-12 03:57:13'),
(170, 151, 'asdasdasdasdasdsadsadd', 'asdasd', '2017-07-12 03:57:16', '2017-07-12 03:57:16'),
(171, 152, 'adasdsa', 'asdsad', '2017-07-12 03:59:31', '2017-07-12 03:59:31'),
(172, 152, 'adasdsaasdsad', 'asdsad', '2017-07-12 03:59:33', '2017-07-12 03:59:33'),
(173, 153, 'adasdsadsadasdsadasda', 'adasdsadsadasdsadasda', '2017-07-12 04:00:17', '2017-07-12 04:00:17'),
(174, 153, 'adasdsadsadasdsadasda234werwerwer', 'adasdsadsadasdsadasda', '2017-07-12 04:00:26', '2017-07-12 04:00:26'),
(175, 154, 'asdasdsadsa', 'dsad', '2017-07-12 04:05:17', '2017-07-12 04:05:17'),
(176, 155, 'asdasdasdasd', 'asdasd', '2017-07-12 05:13:26', '2017-07-12 05:13:26'),
(177, 155, 'asdasdasdasd', 'asdasd', '2017-07-12 05:13:28', '2017-07-12 05:13:28'),
(178, 156, 'adasdsad', 'das', '2017-07-12 05:14:12', '2017-07-12 05:14:12'),
(179, 156, 'adasdsadasdasdas', 'das', '2017-07-12 05:14:16', '2017-07-12 05:14:16'),
(180, 162, 'adsadaaadsadaa', 'adsad', '2017-07-12 05:27:56', '2017-07-12 05:27:56'),
(181, 162, 'ytytyt', 'tytyty', '2017-07-12 05:29:18', '2017-07-12 05:29:18'),
(183, 163, 'asdasdsad234234', 'asdasd', '2017-07-12 05:30:32', '2017-07-12 05:30:32'),
(184, 164, 'asdasdasdasasdasdasdas', 'asdasdasdasd', '2017-07-12 05:30:59', '2017-07-12 05:30:59'),
(185, 164, 'asdasdasdasasdasdasdas', 'asdasdasdasd', '2017-07-12 05:31:01', '2017-07-12 05:31:01'),
(186, 165, 'iopipipio', 'iopipipio', '2017-07-12 05:32:47', '2017-07-12 05:32:47'),
(187, 165, 'iopipipioiopipipioiopipipio', 'iopipipioiopipipio', '2017-07-12 05:32:52', '2017-07-12 05:32:52'),
(188, 166, 'asdsada', 'asdasdas', '2017-07-12 05:38:54', '2017-07-12 05:38:54'),
(189, 167, 'asdsadadsd', 'asdasd', '2017-07-12 05:40:14', '2017-07-12 05:40:14'),
(190, 168, 'asdasdasdasdasdasd', 'asdasdasdasdasdasdasdasd', '2017-07-12 05:41:40', '2017-07-12 05:41:40'),
(191, 169, 'asdasdsad', 'asdasdsad', '2017-07-12 05:42:25', '2017-07-12 05:42:25'),
(192, 170, 'asdsadasdasdsadasd', 'asdsadasdasdsadasd', '2017-07-12 05:43:17', '2017-07-12 05:43:17'),
(193, 171, 'dsfsfsfsdf', 'sdfdsfsdfsd', '2017-07-12 05:45:25', '2017-07-12 05:45:25'),
(196, 172, 'werwerwerwer', 'werwerwerwer', '2017-07-13 07:32:41', '2017-07-13 07:32:41'),
(197, 173, 'werwerwerwer', 'werwerwerwer', '2017-07-13 07:35:36', '2017-07-13 07:35:36'),
(198, 174, 'fdgdfg', 'dfgdfg', '2017-07-13 07:39:59', '2017-07-13 07:39:59'),
(199, 174, 'fdgdfg', 'dfgdfg', '2017-07-13 07:40:04', '2017-07-13 07:40:04'),
(200, 175, 'asdasd', 'asdasd', '2017-07-13 07:41:01', '2017-07-13 07:41:01'),
(201, 176, 'asdasdasdasdasdasd', 'asdasdasasdasdas', '2017-07-13 23:23:53', '2017-07-13 23:23:53'),
(202, 176, 'asdasdasdasdasdasd', 'asdasdasasdasdas', '2017-07-13 23:37:29', '2017-07-13 23:37:29'),
(203, 177, 'adsadasa', 'adsadasa', '2017-07-13 23:51:45', '2017-07-13 23:51:45'),
(204, 178, 'sadasdsa', 'asdsadsad', '2017-07-13 23:51:59', '2017-07-13 23:51:59'),
(205, 178, 'sadasdsa', 'asdsadsad', '2017-07-13 23:52:06', '2017-07-13 23:52:06'),
(206, 179, 'asdasdasdasasdasdasdas', 'sdasasdasdasdas', '2017-07-13 23:52:38', '2017-07-13 23:52:38'),
(207, 180, 'rtyerterter', 'rtyerterter', '2017-07-13 23:53:01', '2017-07-13 23:53:01'),
(208, 181, 'sadadad', 'sadadad', '2017-07-13 23:56:29', '2017-07-13 23:56:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `week_id` (`week_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `weeks`
--
ALTER TABLE `weeks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `weeks`
--
ALTER TABLE `weeks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=209;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`week_id`) REFERENCES `weeks` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `weeks`
--
ALTER TABLE `weeks`
  ADD CONSTRAINT `weeks_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
