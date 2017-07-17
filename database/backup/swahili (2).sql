-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 12:41 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(69, 6, 'asdsadada', NULL, 'asdsadada', NULL, '2017-07-11 05:34:09', '2017-07-11 05:34:09', 'asdsadada');

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
  `id` int(10) unsigned NOT NULL,
  `week_id` int(11) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `week_id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 43, 'qwew', NULL, '2017-07-11 01:33:47', '2017-07-11 01:33:47'),
(2, 43, 'qwew', NULL, '2017-07-11 01:37:35', '2017-07-11 01:37:35'),
(3, 43, 'qwew', NULL, '2017-07-11 01:37:47', '2017-07-11 01:37:47'),
(4, 44, 'erer', NULL, '2017-07-11 01:45:27', '2017-07-11 01:45:27'),
(5, 45, 'weer', NULL, '2017-07-11 01:49:12', '2017-07-11 01:49:12'),
(6, 46, 'asdasd', NULL, '2017-07-11 01:49:53', '2017-07-11 01:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(12, '2017_07_08_073447_course_week', 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weeks`
--

INSERT INTO `weeks` (`id`, `course_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 20, 'asd', 'asd', '2017-07-10 06:17:01', '2017-07-10 06:17:01'),
(2, 21, 'asdasd', 'asd', '2017-07-10 06:33:46', '2017-07-10 06:33:46'),
(3, 22, 'asd', 'asd', '2017-07-10 06:34:22', '2017-07-10 06:34:22'),
(4, 23, 'asd', 'as', '2017-07-10 06:39:19', '2017-07-10 06:39:19'),
(5, 24, 'qwe', 'qwe', '2017-07-10 07:14:52', '2017-07-10 07:14:52'),
(6, 24, 'qwea', 'qwe', '2017-07-10 07:15:21', '2017-07-10 07:15:21'),
(7, 24, 'qwea', 'qwe', '2017-07-10 07:15:48', '2017-07-10 07:15:48'),
(8, 25, 'aqwe', 'aqwe', '2017-07-10 07:16:27', '2017-07-10 07:16:27'),
(9, 26, 'ffgfe', 'ffgfe', '2017-07-10 07:17:17', '2017-07-10 07:17:17'),
(10, 27, 'hjk', 'hjk', '2017-07-10 07:18:13', '2017-07-10 07:18:13'),
(11, 28, 'errt', 'errt', '2017-07-10 07:18:46', '2017-07-10 07:18:46'),
(12, 28, 'errt', 'errt', '2017-07-10 07:21:44', '2017-07-10 07:21:44'),
(13, 29, 'asdasdsad', 'sad', '2017-07-10 07:28:20', '2017-07-10 07:28:20'),
(14, 30, 'asd', 'sad', '2017-07-10 07:28:46', '2017-07-10 07:28:46'),
(15, 30, 'asdsdasd', 'sadasds', '2017-07-10 07:28:57', '2017-07-10 07:28:57'),
(16, 31, 'asdasdsad', 'sa', '2017-07-10 07:31:41', '2017-07-10 07:31:41'),
(17, 32, 'tyuy', 'tyuy', '2017-07-10 08:03:11', '2017-07-10 08:03:11'),
(18, 33, 'asdasd', 'asd', '2017-07-10 08:06:07', '2017-07-10 08:06:07'),
(19, 33, 'asdasdsad', 'asdasdas', '2017-07-10 08:06:37', '2017-07-10 08:06:37'),
(20, 34, 'aqw', 'sa', '2017-07-11 00:02:14', '2017-07-11 00:02:14'),
(21, 34, 'sda', 'sa', '2017-07-11 00:02:24', '2017-07-11 00:02:24'),
(22, 35, 'asd', 'asd', '2017-07-11 00:10:55', '2017-07-11 00:10:55'),
(23, 36, 'erer', 'erer', '2017-07-11 00:12:20', '2017-07-11 00:12:20'),
(24, 37, 'df', 'df', '2017-07-11 00:13:31', '2017-07-11 00:13:31'),
(25, 38, 'asd', 'asd', '2017-07-11 00:30:48', '2017-07-11 00:30:48'),
(26, 39, 'asdd', 'sdsd', '2017-07-11 00:34:32', '2017-07-11 00:34:32'),
(27, 40, 'asdasdsad', 'as', '2017-07-11 00:36:58', '2017-07-11 00:36:58'),
(28, 41, 'weer', 'weer', '2017-07-11 00:37:48', '2017-07-11 00:37:48'),
(29, 42, 'sds', 'sds', '2017-07-11 00:39:13', '2017-07-11 00:39:13'),
(30, 43, 'asdsa', 'sad', '2017-07-11 00:44:06', '2017-07-11 00:44:06'),
(31, 43, 'dsad', 'vcv', '2017-07-11 00:44:23', '2017-07-11 00:44:23'),
(32, 44, 'sdsa', 'sdsa', '2017-07-11 00:46:45', '2017-07-11 00:46:45'),
(33, 44, 'dfdf', 'dfdf', '2017-07-11 00:46:51', '2017-07-11 00:46:51'),
(34, 45, 'rtttyyt', 'rtttyyt', '2017-07-11 00:51:01', '2017-07-11 00:51:01'),
(35, 46, 'asdsad sadsadasdasd', 'asdasdsadasdsad', '2017-07-11 00:55:30', '2017-07-11 00:55:30'),
(36, 47, 'trt', 'trt', '2017-07-11 00:56:50', '2017-07-11 00:56:50'),
(37, 48, 'asdasd', 'asdsadsad sadsad', '2017-07-11 00:58:39', '2017-07-11 00:58:39'),
(38, 48, 'asdasd', 'asdsadsad sadsad', '2017-07-11 00:58:44', '2017-07-11 00:58:44'),
(39, 49, 'asdasd', 'asdsadsad sadsad', '2017-07-11 00:59:44', '2017-07-11 00:59:44'),
(40, 50, 'asdasd dsadsadsad', 'adsad', '2017-07-11 01:01:19', '2017-07-11 01:01:19'),
(41, 51, 'rtrtrt', 'rtrtrt', '2017-07-11 01:03:38', '2017-07-11 01:03:38'),
(42, 52, 'asdas', 'dasdasd', '2017-07-11 01:28:16', '2017-07-11 01:28:16'),
(43, 53, 'qwe', 'qwewe', '2017-07-11 01:32:23', '2017-07-11 01:32:23'),
(44, 54, 'weer', 'qwewqe', '2017-07-11 01:45:18', '2017-07-11 01:45:18'),
(45, 55, 'erer', 'ererer', '2017-07-11 01:49:06', '2017-07-11 01:49:06'),
(46, 56, 'adasa', 'sadsa', '2017-07-11 01:49:49', '2017-07-11 01:49:49'),
(47, 57, 'adasd', 'adas', '2017-07-11 01:50:45', '2017-07-11 01:50:45'),
(48, 58, 'asdasd asdsadsad sadsad', 'asdasd', '2017-07-11 01:52:26', '2017-07-11 01:52:26'),
(49, 59, 'asdasdasdasd', 'adasdsa', '2017-07-11 01:53:32', '2017-07-11 01:53:32'),
(50, 60, 'qwsad', 'qwsad', '2017-07-11 05:10:08', '2017-07-11 05:10:08'),
(51, 61, 'asd', 'asdasd', '2017-07-11 05:10:32', '2017-07-11 05:10:32'),
(52, 62, 'sdfsd', 'sdfsdfsdfsd', '2017-07-11 05:12:33', '2017-07-11 05:12:33'),
(53, 63, 'asda', 'dasdas', '2017-07-11 05:14:41', '2017-07-11 05:14:41'),
(54, 63, 'asdaa', 'dasdas', '2017-07-11 05:18:15', '2017-07-11 05:18:15'),
(55, 63, 'asdaa', 'dasdas', '2017-07-11 05:18:33', '2017-07-11 05:18:33'),
(56, 64, 'asdasd', 'asdasd', '2017-07-11 05:19:17', '2017-07-11 05:19:17'),
(57, 65, 'wqweqwe', 'wqweqwe', '2017-07-11 05:21:24', '2017-07-11 05:21:24'),
(58, 66, 'asdsa', 'asdad', '2017-07-11 05:22:51', '2017-07-11 05:22:51'),
(59, 66, 'asdsa', 'asdad', '2017-07-11 05:23:26', '2017-07-11 05:23:26'),
(60, 66, 'asdsa', 'asdad', '2017-07-11 05:25:06', '2017-07-11 05:25:06'),
(61, 67, 'adsadas', 'dsadsaa', '2017-07-11 05:32:55', '2017-07-11 05:32:55'),
(62, 68, 'asdasdasdasasdasdasdas', 'asdasdasdasasdasdasdas', '2017-07-11 05:33:55', '2017-07-11 05:33:55'),
(63, 69, 'asdsadada', 'asdsadada', '2017-07-11 05:34:17', '2017-07-11 05:34:17');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `week_id` (`week_id`);

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`week_id`) REFERENCES `weeks` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
