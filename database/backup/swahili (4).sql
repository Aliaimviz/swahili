-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 06:48 AM
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
  `prerequisite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=266 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `title`, `price`, `description`, `enroll_users`, `created_at`, `updated_at`, `prerequisite`, `thumbnail`) VALUES
(219, 6, 'Course name', NULL, 'Course description', NULL, '2017-07-14 05:15:03', '2017-07-14 05:15:03', 'Course prerequisites', NULL),
(220, 6, 'Course 2', NULL, 'Course 2 desc', NULL, '2017-07-14 05:58:11', '2017-07-14 05:58:11', 'Course 2 pre', NULL),
(221, 6, 'asdasdasdsadsa', NULL, 'dsadasdsadsad', NULL, '2017-07-14 05:59:47', '2017-07-14 05:59:47', 'dsadasdsadsad', NULL),
(222, 6, 'sadsad', NULL, '$lesson', NULL, '2017-07-14 06:11:25', '2017-07-14 06:11:25', '$lesson', NULL),
(223, 6, 'asdsadsa', NULL, 'da', NULL, '2017-07-14 06:17:51', '2017-07-14 06:17:51', 'daa', NULL),
(224, 6, 'sadasdasdsadsad', NULL, 'asdasdsadsa', NULL, '2017-07-14 06:22:40', '2017-07-14 06:22:40', 'asdsadsada', NULL),
(225, 6, 'sadasdsadasd', NULL, 'adasd', NULL, '2017-07-14 06:24:08', '2017-07-14 06:24:08', 'asddsa', NULL),
(226, 6, 'asdsadsad', NULL, 'asdsadsad', NULL, '2017-07-14 06:26:32', '2017-07-14 06:26:32', 'asdsadsad', NULL),
(227, 6, 'adasdasdasd', NULL, 'adasdasdasd', NULL, '2017-07-14 06:34:53', '2017-07-14 06:34:53', 'adasdasdasd', NULL),
(228, 6, 'asdasdasdasd', NULL, 'editLessonModal', NULL, '2017-07-14 06:38:17', '2017-07-14 06:38:17', 'editLessonModal', NULL),
(229, 6, 'asdsadasdadas', NULL, 'asdsadasdadas', NULL, '2017-07-14 06:44:37', '2017-07-14 06:44:37', 'asdsadasdadas', NULL),
(230, 6, 'asdadadasdas', NULL, 'asdadadasdas', NULL, '2017-07-14 06:54:59', '2017-07-14 06:54:59', 'asdadadasdas', NULL),
(231, 6, 'asdsadsada', NULL, 'asdsadsada', NULL, '2017-07-14 06:56:07', '2017-07-14 06:56:07', 'asdsadsada', NULL),
(232, 6, 'asdsadasdasdas', NULL, 'asdsadasdasdas', NULL, '2017-07-14 07:06:21', '2017-07-14 07:06:21', 'asdsadasdasdas', NULL),
(233, 6, 'asdsadasdasdasd', NULL, 'asdsadasdasdasd', NULL, '2017-07-14 07:07:51', '2017-07-14 07:07:51', 'asdsadasdasdasd', NULL),
(234, 6, 'asdasdadad', NULL, 'asdasdadad', NULL, '2017-07-14 07:21:12', '2017-07-14 07:21:12', 'asdasdadad', NULL),
(235, 6, 'rterteterter', NULL, 'rterteterter', NULL, '2017-07-14 07:37:19', '2017-07-14 07:37:19', 'rterteterter', NULL),
(236, 6, 'adasdasd', NULL, 'adasdasd', NULL, '2017-07-16 23:46:44', '2017-07-16 23:46:44', 'adasdasd', NULL),
(237, 6, 'asdasdasdaa', NULL, 'asdasdasdaa', NULL, '2017-07-16 23:49:04', '2017-07-16 23:49:04', 'asdasdasdaa', NULL),
(238, 6, 'asdasdsaa', NULL, 'asdasdsaa', NULL, '2017-07-16 23:55:14', '2017-07-16 23:55:14', 'asdasdsaa', NULL),
(239, 6, 'asdasdasdsadsa', NULL, 'dassdad', NULL, '2017-07-17 00:02:48', '2017-07-17 00:02:48', 'dassdad', NULL),
(240, 6, 'sadasdsad', NULL, 'sadasdsad', NULL, '2017-07-17 00:10:10', '2017-07-17 00:10:10', 'sadasdsad', NULL),
(241, 6, 'asdsadasd', NULL, 'ddsadadas', NULL, '2017-07-17 00:16:50', '2017-07-17 00:16:50', 'ddsadadas', NULL),
(242, 6, 'sadasdasd', 23, 'assdadsa', NULL, '2017-07-17 00:35:14', '2017-07-17 00:35:14', 'assdadsa', NULL),
(243, 6, 'asdsadsadd', 9899, 'ddsdadsad', NULL, '2017-07-17 00:39:05', '2017-07-17 00:39:05', 'ddsdadsad', '1500269945-default_person.png'),
(244, 6, 'asdsad', 123213, 'ddssad', NULL, '2017-07-17 00:46:10', '2017-07-17 00:46:10', 'ddssad', NULL),
(245, 6, 'asdsadasd', 22, 'asdsadasd', NULL, '2017-07-17 00:47:28', '2017-07-17 00:47:28', 'asdsadasd', '1500270448-default_person.png'),
(246, 6, 'sadsadasd', 2312, 'adasdasdsad', NULL, '2017-07-17 00:48:09', '2017-07-17 00:48:09', 'adasdasdsad', '1500270489-default_person.png'),
(247, 6, 'asdadasd', 2132, 'priceTab', NULL, '2017-07-17 00:52:40', '2017-07-17 00:52:40', 'asdada', '1500270760-default_person.png'),
(248, 6, 'asdasdasd', 343, 'dasdas', NULL, '2017-07-17 00:53:46', '2017-07-17 00:53:46', 'dasdasdasdas', '1500270826-default_person.png'),
(249, 6, 'asdasdasdas', 23, 'asdasdasdasdasdasd', NULL, '2017-07-17 00:54:49', '2017-07-17 00:54:49', 'asdasdasdasdasdasd', '1500270889-default_person.png'),
(250, 6, 'asdasd', 12, 'asdasd', NULL, '2017-07-17 00:55:44', '2017-07-17 00:55:44', 'asdasdasdas', '1500270944-default_person.png'),
(251, 6, 'asdsadasdadas', 233, 'dadasdadas', NULL, '2017-07-17 00:56:37', '2017-07-17 00:56:37', 'dadasdadasdadasdadas', '1500270997-default_person.png'),
(252, 6, 'asdsad', 12, 'asdsad', NULL, '2017-07-17 01:02:53', '2017-07-17 01:02:53', 'asdsad', '1500271373-default_person.png'),
(253, 6, 'asdsad', 16, 'asdsad', NULL, '2017-07-17 01:03:29', '2017-07-17 01:03:29', 'asdsad', '1500271409-default_person.png'),
(254, 6, 'asdsadsada', 12, 'asdsadsaddasdsadsadd', NULL, '2017-07-17 05:41:24', '2017-07-17 05:41:24', 'asdsadsaddasdsadsadd', '1500288084-download.png'),
(255, 6, 'sadasdasd', 12, 'sadasdasd', NULL, '2017-07-17 06:02:46', '2017-07-17 06:02:46', 'asdsadas', '1500289366-download.png'),
(256, 6, 'asdsadsadd', 12, 'sadasdasd', NULL, '2017-07-17 06:07:24', '2017-07-17 06:07:24', 'sadasdasd', '1500289644-download.png'),
(257, 6, 'cxzczcasd', 12, 'cxzczcasd', NULL, '2017-07-17 06:10:50', '2017-07-17 06:10:50', 'cxzczcasd', '1500289850-download.png'),
(258, 6, 'asdsa', 123, 'asdsa', NULL, '2017-07-17 06:12:27', '2017-07-17 06:12:27', 'asdsadas', '1500289947-download.png'),
(259, 6, 'asdasd', 12, 'asdasd', NULL, '2017-07-17 06:12:58', '2017-07-17 06:12:58', 'asdasd', '1500289978-download.png'),
(260, 6, 'asd', 12, 'asd', NULL, '2017-07-17 06:13:41', '2017-07-17 06:13:41', 'asd', '1500290021-download.png'),
(261, 6, 'asadasd', 12, 'asdsad', NULL, '2017-07-17 06:14:08', '2017-07-17 06:14:08', 'asadasd', '1500290048-download.png'),
(262, 6, 'adas', 12, 'adas', NULL, '2017-07-17 06:28:26', '2017-07-17 06:28:26', 'adas', '1500290906-download.png'),
(263, 6, 'sdasd', 12, 'asdasd', NULL, '2017-07-17 06:29:31', '2017-07-17 06:29:31', 'asdasd', '1500290971-default_person.png'),
(264, 6, 'sdasd', 12, 'sdasd', NULL, '2017-07-17 06:30:33', '2017-07-17 06:30:33', 'sdasd', '1500291033-download.png'),
(265, 6, 'adasdas', 12, 'asd', NULL, '2017-07-17 23:20:48', '2017-07-17 23:20:48', 'asdasdasdas', '1500351648-Capture.PNG');

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
-- Table structure for table `discussions`
--

CREATE TABLE IF NOT EXISTS `discussions` (
  `id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `dis_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_ques` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_react` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `course_id`, `user_id`, `dis_title`, `dis_ques`, `dis_react`, `created_at`, `updated_at`) VALUES
(1, 264, 6, 'asd', 'asd', NULL, '2017-07-17 08:16:00', '2017-07-17 08:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_comments`
--

CREATE TABLE IF NOT EXISTS `discussion_comments` (
  `id` int(10) unsigned NOT NULL,
  `dis_id` int(11) NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `week_id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(47, 279, 'lesson 1 - week(1)', '1500027960-default_person.png', '2017-07-14 05:26:00', '2017-07-14 05:26:00'),
(48, 285, 'lesson 1 - week(2)', '1500027966-default_person.png', '2017-07-14 05:26:06', '2017-07-14 05:26:06'),
(49, 286, 'lesson 1 - week(3)', '1500027972-default_person.png', '2017-07-14 05:26:12', '2017-07-14 05:26:12'),
(50, 289, 'adasdasdasd', '1500030021-default_person.png', '2017-07-14 06:00:21', '2017-07-14 06:00:21'),
(51, 290, 'adasdasdasd', '1500030698-default_person.png', '2017-07-14 06:11:38', '2017-07-14 06:11:38'),
(52, 291, 'adadasdsad', '1500031083-default_person.png', '2017-07-14 06:18:03', '2017-07-14 06:18:03'),
(53, 292, 'adsadsad', '1500031375-default_person.png', '2017-07-14 06:22:55', '2017-07-14 06:22:55'),
(54, 293, 'asdasdasd', '1500031467-default_person.png', '2017-07-14 06:24:27', '2017-07-14 06:24:27'),
(55, 295, 'asdsadasdsa', '1500032105-default_person.png', '2017-07-14 06:35:05', '2017-07-14 06:35:05'),
(56, 296, 'asdadsadsa', '1500032305-default_person.png', '2017-07-14 06:38:25', '2017-07-14 06:38:25'),
(57, 297, 'uiuiutyui', '1500032698-default_person.png', '2017-07-14 06:44:58', '2017-07-14 06:44:58'),
(58, 298, 'sadadadad', '1500033308-default_person.png', '2017-07-14 06:55:08', '2017-07-14 06:55:08'),
(59, 299, 'asdsadasdsa', '1500033376-default_person.png', '2017-07-14 06:56:16', '2017-07-14 06:56:16'),
(60, 300, 'adasdasd', '1500033992-default_person.png', '2017-07-14 07:06:32', '2017-07-14 07:06:32'),
(61, 301, 'asdsadada', '1500034082-default_person.png', '2017-07-14 07:08:02', '2017-07-14 07:08:02'),
(62, 302, 'werwerwe', '1500034886-default_person.png', '2017-07-14 12:33:59', '2017-07-14 07:33:59'),
(63, 303, 'asdasdads', '1500035850-default_person.png', '2017-07-14 12:38:44', '2017-07-14 07:38:44'),
(64, 304, 'asdasdasd', '1500266824-default_person.png', '2017-07-16 23:47:04', '2017-07-16 23:47:04'),
(65, 304, 'lesson 2', '1500266839-default_person.png', '2017-07-16 23:47:19', '2017-07-16 23:47:19'),
(66, 305, 'lesson1', '1500266960-default_person.png', '2017-07-16 23:49:20', '2017-07-16 23:49:20'),
(67, 305, 'lesson3.', '1500266971-default_person.png', '2017-07-17 04:49:39', '2017-07-16 23:49:39'),
(71, 309, 'asdasdsad', '1500267797-default_person.png', '2017-07-17 00:03:17', '2017-07-17 00:03:17'),
(72, 312, 'sadasdasd2', '1500268650-Capture.PNG', '2017-07-17 05:17:30', '2017-07-17 00:17:30'),
(73, 316, 'asdsadsa', '1500270502-default_person.png', '2017-07-17 00:48:22', '2017-07-17 00:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14, '2017_07_11_114605_create_coding_table', 9),
(15, '2017_07_17_071322_create_table_discussions', 10),
(16, '2017_07_17_072855_create_table_comments', 10);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `week_id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(14, 279, 'Resource 1 - week(1)', '1500027989-default_person.png', '2017-07-14 05:26:29', '2017-07-14 05:26:29'),
(15, 285, 'Resource 1 - week(2)', '1500027999-default_person.png', '2017-07-14 05:26:39', '2017-07-14 05:26:39'),
(16, 286, 'Resource 1 - week(3)', '1500028009-default_person.png', '2017-07-14 05:26:49', '2017-07-14 05:26:49'),
(17, 285, 'Resource 2 - week(2)', '1500028874-default_person.png', '2017-07-14 05:41:14', '2017-07-14 05:41:14'),
(21, 311, 'asdasdsad', '1500268349-default_person.png', '2017-07-17 00:12:29', '2017-07-17 00:12:29');

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
(6, 'irfan', 'mumtaz', 'irfan.aimviz@gmail.com', '$2y$10$F62X.jqj/qR5I3jmtZkVqu3L074A/eTeDO9CaNrFEMs5hcHKhZr/O', 168, 68, '1', 'kx9ImTVY8KkhgfwStVE7JWZBuDJPSsiuoECZGbBEOMMKzHPINfMdJM9kUHyd', '2017-07-04 00:56:31', '2017-07-06 07:10:33'),
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
) ENGINE=InnoDB AUTO_INCREMENT=326 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weeks`
--

INSERT INTO `weeks` (`id`, `course_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(279, 219, 'Week 1', 'week 1 description', '2017-07-14 05:15:46', '2017-07-14 05:15:46'),
(285, 219, 'Week 2', 'week 2 description', '2017-07-14 05:24:47', '2017-07-14 05:24:47'),
(286, 219, 'Week 3', 'week 3 description', '2017-07-14 05:25:32', '2017-07-14 05:25:32'),
(287, 220, 'asdasd', 'asdasd', '2017-07-14 05:58:20', '2017-07-14 05:58:20'),
(288, 220, 'asdasdasdsad', 'asdasdsada', '2017-07-14 05:58:28', '2017-07-14 05:58:28'),
(289, 221, 'dsadasdsadsaddsadasdsadsad', 'dsadasdsadsaddsadasdsadsad', '2017-07-14 05:59:52', '2017-07-14 05:59:52'),
(290, 222, 'adsadas', 'adsadas', '2017-07-14 06:11:31', '2017-07-14 06:11:31'),
(291, 223, 'sadasdsad', 'sadasdsad', '2017-07-14 06:17:55', '2017-07-14 06:17:55'),
(292, 224, 'adasdsadsadasdsadasda', 'adadsadsd', '2017-07-14 06:22:45', '2017-07-14 06:22:45'),
(293, 225, 'asdsadsadsa', 'asdasdasdasd', '2017-07-14 06:24:12', '2017-07-14 06:24:12'),
(294, 226, 'asdsadsad', 'asdsadsad', '2017-07-14 06:26:35', '2017-07-14 06:26:35'),
(295, 227, 'adasdasdasdadasdasdasd', 'adasdasdasdadasdasdasd', '2017-07-14 06:34:56', '2017-07-14 06:34:56'),
(296, 228, 'editLessonModal', 'editLessonModal', '2017-07-14 06:38:20', '2017-07-14 06:38:20'),
(297, 229, 'asdsadasdadasasdsadasdadas', 'asdsadasdadasasdsadasdadas', '2017-07-14 06:44:41', '2017-07-14 06:44:41'),
(298, 230, 'asdadadasdasasdadadasdas', 'asdadadasdasasdadadasdasasdadadasdasasdadadasdas', '2017-07-14 06:55:03', '2017-07-14 06:55:03'),
(299, 231, 'asdsadsadaasdsadsada', 'asdsadsadaasdsadsadaasdsadsadaasdsadsada', '2017-07-14 06:56:11', '2017-07-14 06:56:11'),
(300, 232, 'asdsadasdasdasasdsadasdasdasasdsadasdasdas', 'asdsadsadsadasdasdadasd', '2017-07-14 07:06:27', '2017-07-14 07:06:27'),
(301, 233, 'asdsadasdasdasd', 'sadasdasd', '2017-07-14 07:07:55', '2017-07-14 07:07:55'),
(302, 234, 'ssdasdsadasdadadsa', 'ssdasdsadasdadadsa', '2017-07-14 07:21:19', '2017-07-14 07:21:19'),
(303, 235, 'rterteterterrterteterter', 'rterteterterrterteterterrterteterterrterteterter', '2017-07-14 07:37:22', '2017-07-14 07:37:22'),
(304, 236, 'adasdasd', 'adasdasd', '2017-07-16 23:46:50', '2017-07-16 23:46:50'),
(305, 237, 'asdasdasdaa', 'asdasdasdaa', '2017-07-16 23:49:12', '2017-07-16 23:49:12'),
(306, 238, 'asdasdsaa', 'asdasdsaa', '2017-07-16 23:55:18', '2017-07-16 23:55:18'),
(308, 239, 'asdadsad', 'asdadsad', '2017-07-17 00:02:54', '2017-07-17 00:02:54'),
(309, 239, 'asdadsad 2', 'asdadsad 2', '2017-07-17 00:03:01', '2017-07-17 00:03:01'),
(310, 240, 'sadasdsadsadasdsad', 'sadasdsadsadasdsad', '2017-07-17 00:10:14', '2017-07-17 00:10:14'),
(311, 240, 'sadasdsadsadasdsad', 'sadasdsadsadasdsad', '2017-07-17 00:11:37', '2017-07-17 00:11:37'),
(312, 241, 'ddsadadasddsadadas', 'ddsadadasddsadadas', '2017-07-17 00:16:54', '2017-07-17 00:16:54'),
(313, 243, 'sadsadsa', 'sadsadsa', '2017-07-17 00:39:28', '2017-07-17 00:39:28'),
(314, 243, 'sadsadsa', 'sadsadsaas', '2017-07-17 00:39:36', '2017-07-17 00:39:36'),
(315, 245, 'asdasdsad', 'asdasdsad', '2017-07-17 00:47:35', '2017-07-17 00:47:35'),
(316, 246, 'sadsads asadadadasd', 'asda', '2017-07-17 00:48:16', '2017-07-17 00:48:16'),
(317, 247, 'asdadadasdasasdadadasdas', 'adasdasasdadadasdas', '2017-07-17 00:52:45', '2017-07-17 00:52:45'),
(318, 248, 'sadasdasa', 'dasdasdasdas', '2017-07-17 00:53:53', '2017-07-17 00:53:53'),
(319, 249, 'adasdasd', 'asdasd', '2017-07-17 00:54:53', '2017-07-17 00:54:53'),
(320, 250, 'asdsad sadsadasdasd', 'sadsadasdasd', '2017-07-17 00:55:48', '2017-07-17 00:55:48'),
(321, 251, 'asdsad sadsadasdasd', 'dadasdadasdadasdadas', '2017-07-17 00:56:42', '2017-07-17 00:56:42'),
(322, 252, 'sadsad', 'sadsad', '2017-07-17 01:02:58', '2017-07-17 01:02:58'),
(323, 254, 'asdsadaasdsadsaddasdsadsadd', 'asdsadsaddasdsadsadd', '2017-07-17 05:41:29', '2017-07-17 05:41:29'),
(324, 254, 'asdsadaasdsadsaddasdsadsadd', 'asdsadsaddasdsadsadd', '2017-07-17 05:41:34', '2017-07-17 05:41:34'),
(325, 265, 'asd', 'asd', '2017-07-17 23:20:51', '2017-07-17 23:20:51');

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
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `discussion_comments`
--
ALTER TABLE `discussion_comments`
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=266;
--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `discussion_comments`
--
ALTER TABLE `discussion_comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=326;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `discussions_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `discussions_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
