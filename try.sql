-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 24 oct. 2024 à 16:51
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `try`
--

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int NOT NULL AUTO_INCREMENT,
  `countrycode` varchar(2) NOT NULL,
  `countryname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`id`, `countrycode`, `countryname`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of the Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(200) NOT NULL,
  `gender` enum('F','M') DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `spouse` int NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `gender`, `address`, `spouse`) VALUES
(1, 'Monji', 'M', 'Bizerte', 2),
(2, 'Monjia', 'F', 'Tunis', 1),
(8, 'Kamel', 'M', 'Nabeul', 0);

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `languageid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`languageid`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `language`
--

INSERT INTO `language` (`languageid`, `name`) VALUES
(1, 'English'),
(2, 'Afar'),
(3, 'Abkhazian'),
(4, 'Afrikaans'),
(5, 'Amharic'),
(6, 'Arabic'),
(7, 'Assamese'),
(8, 'Aymara'),
(9, 'Azerbaijani'),
(10, 'Bashkir'),
(11, 'Belarusian'),
(12, 'Bulgarian'),
(13, 'Bihari'),
(14, 'Bislama'),
(15, 'Bengali/Bangla'),
(16, 'Tibetan'),
(17, 'Breton'),
(18, 'Catalan'),
(19, 'Corsican'),
(20, 'Czech'),
(21, 'Welsh'),
(22, 'Danish'),
(23, 'German'),
(24, 'Bhutani'),
(25, 'Greek'),
(26, 'Esperanto'),
(27, 'Spanish'),
(28, 'Estonian'),
(29, 'Basque'),
(30, 'Persian'),
(31, 'Finnish'),
(32, 'Fiji'),
(33, 'Faeroese'),
(34, 'French'),
(35, 'Frisian'),
(36, 'Irish'),
(37, 'Scots/Gaelic'),
(38, 'Galician'),
(39, 'Guarani'),
(40, 'Gujarati'),
(41, 'Hausa'),
(42, 'Hindi'),
(43, 'Croatian'),
(44, 'Hungarian'),
(45, 'Armenian'),
(46, 'Interlingua'),
(47, 'Interlingue'),
(48, 'Inupiak'),
(49, 'Indonesian'),
(50, 'Icelandic'),
(51, 'Italian'),
(52, 'Hebrew'),
(53, 'Japanese'),
(54, 'Yiddish'),
(55, 'Javanese'),
(56, 'Georgian'),
(57, 'Kazakh'),
(58, 'Greenlandic'),
(59, 'Cambodian'),
(60, 'Kannada'),
(61, 'Korean'),
(62, 'Kashmiri'),
(63, 'Kurdish'),
(64, 'Kirghiz'),
(65, 'Latin'),
(66, 'Lingala'),
(67, 'Laothian'),
(68, 'Lithuanian'),
(69, 'Latvian/Lettish'),
(70, 'Malagasy'),
(71, 'Maori'),
(72, 'Macedonian'),
(73, 'Malayalam'),
(74, 'Mongolian'),
(75, 'Moldavian'),
(76, 'Marathi'),
(77, 'Malay'),
(78, 'Maltese'),
(79, 'Burmese'),
(80, 'Nauru'),
(81, 'Nepali'),
(82, 'Dutch'),
(83, 'Norwegian'),
(84, 'Occitan'),
(85, '(Afan)/Oromoor/Oriya'),
(86, 'Punjabi'),
(87, 'Polish'),
(88, 'Pashto/Pushto'),
(89, 'Portuguese'),
(90, 'Quechua'),
(91, 'Rhaeto-Romance'),
(92, 'Kirundi'),
(93, 'Romanian'),
(94, 'Russian'),
(95, 'Kinyarwanda'),
(96, 'Sanskrit'),
(97, 'Sindhi'),
(98, 'Sangro'),
(99, 'Serbo-Croatian'),
(100, 'Singhalese'),
(101, 'Slovak'),
(102, 'Slovenian'),
(103, 'Samoan'),
(104, 'Shona'),
(105, 'Somali'),
(106, 'Albanian'),
(107, 'Serbian'),
(108, 'Siswati'),
(109, 'Sesotho'),
(110, 'Sundanese'),
(111, 'Swedish'),
(112, 'Swahili'),
(113, 'Tamil'),
(114, 'Telugu'),
(115, 'Tajik'),
(116, 'Thai'),
(117, 'Tigrinya'),
(118, 'Turkmen'),
(119, 'Tagalog'),
(120, 'Setswana'),
(121, 'Tonga'),
(122, 'Turkish'),
(123, 'Tsonga'),
(124, 'Tatar'),
(125, 'Twi'),
(126, 'Ukrainian'),
(127, 'Urdu'),
(128, 'Uzbek'),
(129, 'Vietnamese'),
(130, 'Volapuk'),
(131, 'Wolof'),
(132, 'Xhosa'),
(133, 'Yoruba'),
(134, 'Chinese'),
(135, 'Zulu');

-- --------------------------------------------------------

--
-- Structure de la table `languagedetail`
--

DROP TABLE IF EXISTS `languagedetail`;
CREATE TABLE IF NOT EXISTS `languagedetail` (
  `tourguideid` int NOT NULL,
  `languageid` int NOT NULL,
  `level` int NOT NULL,
  PRIMARY KEY (`tourguideid`,`languageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `languagedetail`
--

INSERT INTO `languagedetail` (`tourguideid`, `languageid`, `level`) VALUES
(1, 1, 3),
(1, 53, 4),
(3, 1, 4),
(3, 53, 4),
(4, 1, 4),
(4, 79, 4),
(4, 134, 3),
(5, 1, 4),
(5, 94, 3),
(6, 1, 3),
(6, 53, 4),
(7, 1, 3),
(7, 79, 4);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `regionid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `regionname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`regionid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`regionid`, `regionname`, `country`) VALUES
(1, 'Tokyo', 'Japan'),
(2, 'Kyoto', 'Japan'),
(3, 'Bagan', 'Myanmar'),
(4, 'Yangon', 'Myanmar'),
(5, 'Paris', 'France'),
(6, 'New York', 'United States'),
(7, 'Hong Kong', 'China');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `staffname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepicture` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `email`, `phone`, `address`, `password`, `profilepicture`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '+959123456789', 'Yangon, Myanmar', '1b3f4918d3a422805063e1e3c12aa487d56b9cba', 'profile/staff.png', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `tour`
--

DROP TABLE IF EXISTS `tour`;
CREATE TABLE IF NOT EXISTS `tour` (
  `tourid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tourguideid` int NOT NULL,
  `tourtypeid` int NOT NULL,
  `transportationid` int DEFAULT NULL,
  `transportation` varchar(255) DEFAULT NULL,
  `tourprice` double NOT NULL,
  `noofpeoplelimit` int NOT NULL,
  `duration` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tourroute` text NOT NULL,
  `restriction` text NOT NULL,
  `meetingpoint` varchar(255) NOT NULL,
  `endingpoint` varchar(255) NOT NULL,
  `staffid` int DEFAULT NULL,
  `regionid` int NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tourid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tour`
--

INSERT INTO `tour` (`tourid`, `name`, `tourguideid`, `tourtypeid`, `transportationid`, `transportation`, `tourprice`, `noofpeoplelimit`, `duration`, `image`, `description`, `tourroute`, `restriction`, `meetingpoint`, `endingpoint`, `staffid`, `regionid`, `status`, `created_at`) VALUES
(1, 'Beautiful Tokyo', 1, 1, NULL, 'Walk, Public Transport', 182, 3, 3, 'japan-4379452_640.jpg', 'This guided trip will have you exploring the sights and sounds of Harajuku and Shibuya, including the famous Shibuya Scramble, before heading on over to Shinjuku to explore Kabukicho and Golden Gai.', '<p>Firstly, Harajuku and Shibuya</p><p>At Shibuya, we will go to see the famous Shibuya Scramble</p><p>Then, Kabukicho and Golden Gai</p><p>Along the tour, I will introduce you famous food and restaurants</p>', 'I am not a driver. I can accompany you in your vehicle or I can arrange for a separate car and driver.', 'Hotel, Airport (we will pick you up)', 'Shinjuku', 1, 1, 'approved', '2020-05-13 06:45:06'),
(2, 'Attraction in Tokyo', 1, 5, NULL, 'Walking, public transport', 120, 3, 3, 'japan-4141578_640.jpg', 'This tour visits the most popular highlight spots in Tokyo. In one day, you can see the characteristic of Tokyo. Tokyo\'s attraction is a fusion of Old and New. You can see it having fun and learning Japanese history!', '<p><font color=\"#313131\" face=\"Nunito\">1. Tsukiji- We will visit Tsukiji Honganji temple, very unique Buddhist temple, and to Large Tsukiji market where variety foods and things are selling.</font></p><p><font color=\"#313131\" face=\"Nunito\">(closed on Sundays and on some Wednesdays)</font></p><p><font color=\"#313131\" face=\"Nunito\">2. Kabukiza - Kabuki is a long-history Japanese traditional play.</font></p><p><font color=\"#313131\" face=\"Nunito\">3. Ginza - This area is said to be a fancy shopping town, also like a whole art gallery itself. There are many things to see!</font></p><p><font color=\"#313131\" face=\"Nunito\">4. The imperial palace - We will visit the east garden of Imperial palace. (Gardens are closed on Monday and Friday) This is an amazingly quiet place located among central Tokyo.</font></p><p><font color=\"#313131\" face=\"Nunito\">5. Asakusa- You can feel old days Tokyo. Famous Sensoji temple\'s red gate called Kamiraimon, or literally thunder gate is a symbol of Tokyo.</font></p>', 'I am not a driver. I can accompany you in your vehicle or I can arrange for a separate car and driver.', 'Hotel (we will pick you up)', 'Your Hotel', 1, 1, 'approved', '2020-05-13 07:08:52'),
(3, 'Ancient Kyoto', 3, 1, 2, NULL, 240, 4, 2, 'architecture-1869216_640.jpg', 'Although the standard start time slots are 8:00 am or 8:30 am, I may be able to be flexible.\r\nPlease contact me for the details.\r\n\r\nOn this tour, I will take you to the must-see sites that are probably on your radar. With your limited time to spend here in Kyoto, I\'m certain that having me, the City of Kyoto official tour guide, will help you to make the most of your time and you will find out local insights that you would\'ve missed out on otherwise.', '<p>Here are the sample itineraries for this 4-hour tour:</p><p>Recommendation to cover off-the-beaten-path places:</p><ul><li>Kinkakuji Temple ( the golden pavilion)</li><li>Daitokuji Zen temple</li><li>Shimogamo Shrine</li></ul><p><br></p>', 'I am not a driver. I can accompany you in separately arranged car with separate driver.', 'Kyoto Station', 'Shimogamo Shrine', 1, 2, 'approved', '2020-05-13 07:34:20'),
(4, 'Bagan Discovery Myanmar( Full days)', 4, 1, 1, NULL, 90, 6, 1, 'bagan-1137015_640.jpg', 'This amazing trip will take you so thrillingly to the spotlights of Bagan while breathtaking landscapes of Bagan in a way that you experience most holiest pagoda of Myanmar. Learn architectural wonders of priceless ancient treasures of Bagan and local handicrafts (Lacquerware) of Bagan era that have been handed down for ages.', '<p>Spotlights of Bagan</p><p>In the morning, you will be picked up by your local EXPERT. We start off with Sula-mani temple where you can learn more about mural paintings before going for Nandammanya temple, minnanthu villgage to observe the life of local villager before heading to historic Hti-Lo-Min-Lo temple . After lunch, we visit Ananda Temple, masterpiece of Bagan which is commonly referred to as one of the four great temples in Bagan. Continue to sunset boat ride over the irrawaddy river. Conclude your unique experiences.</p>', 'Hello! As I don\'t drive the car, I can accompany you in your vehicle or I can arrange for a separate car and driver during your tour. Thank you for your consideration.', 'Cruise Ship Port, Airport, Hotel (We will pick you up)', 'Sunset', 1, 3, 'approved', '2020-05-13 07:38:00'),
(5, 'Explore Bagan', 4, 1, 3, NULL, 100, 10, 2, 'bagan-1577961_640_(1).jpg', 'Bagan with over 2000 Pagodas and Temples in upper Myanmar and you can visit Bagan all year round as there is no actual rainy Season like in the lower parts of Myanmar, therefore we called it Sommer Season. Bagan with their Pagodas and Temples dating back more than 1500 years of history is the most fascinating place for visitors.', '<p>Day-1: Bagan Arrival</p><p>You can be Welcome at Nyaung you airport or picked up at Hotel to do the Bagan sightseeing:</p><p>- the busy Nyaung you Market</p><p>- Pagoda Shwezigon, and Temple Ananda built in 1091 is considered the masterpiece of Bagan\'s surviving Mon architecture.</p><p>- Htilomino Temple with the best 11 century plaster work and stucco carving.</p><p>- A visit to Myinkabar village to see the thriving lacquer ware industry.</p><p>- Then stop at Myaceidi to study the colourful mural painting and very old stone inscription.</p><p>-Sulamani Temple where you can study the biggest mural Paintings.</p><p>- Manu Har Temple and Nan Phaya</p><p>- Temple Dhammayangyi</p><p>-Gu Byauk Gyi Temple and Bagan Sunset.</p><p><br></p><p>Day 2: Sale and Mt. Popa.</p><p>Drive to Sale. You will explore around Yoke Sone Kyaung Monaster docorated beautifully with teak wood carvings and Bamboo Buddha Images.</p><p>Then we will continue to Mt. Poapa, a house for Nats (spiritual being). Stop at farmers\' working place on the way back to Bagan to see real local life.</p>', 'Hello! As I don\'t drive the car, I can accompany you in your vehicle or I can arrange for a separate car and driver during your tour. Thank you for your consideration.', 'We will pick you up', 'With sunset', 1, 3, 'approved', '2020-05-13 07:41:46'),
(6, 'First Trip in Paris', 5, 5, 2, NULL, 240, 3, 2, 'eiffel-tower-768501_640.jpg', 'This tour will be a \"beginners\" tour which will guide you what you like to see more.\r\nAfter this tour you will know how to use the public transport and also how to walk in Paris to get the real feeling of the city of love. You also will know how to order the water, how to tip at the café etc.\r\nAll you may need to know during your days in Paris are at this tour, you will learn how to be a Parisian . . .', '<p>After meeting at your hotel we will go to see the Eiffel Tower from the best point of the city and just after we will taste the famous Macarone.</p><p>Walking down to the street while seeing where to what and crossing the Alma Bridge, will take the bus to Saint Germain des Press and feeling the cities art and literature side, going to the Notre Dame (only from outside) and ille St Louise via Latine Quarter of the city.</p><p>We will continue to Marais which is one of the oldest part of Paris where you will discover the cities history.</p><p>WE ALWAYS CAN CHANGE OUR ITINERARY WITH YOUR WISHES AND WE CAN GO WHEREVER YOU MAY HAVE HEARED OF BEFORE AND WOULD LIKE TO SEE AT FIRST.</p><p>While we are having our coffee I will let you know the details like using public transport, how to tip, where to eat etc.</p><p>This will not be an educational day, it will be a fun day for your holiday!</p>', 'I am not permitted to guide in state own museums, museum guides can be hired', 'Don\'t worry. We will pick you up', 'Eiffel Tower', 1, 5, 'approved', '2020-05-13 07:45:31'),
(7, 'Tokyo Private Tour', 6, 5, NULL, 'Walking, subway', 100, 3, 1, 'japanese-1409839_640.jpg', 'The tour offers you the popular sightseeing places in central Tokyo in 6 hours. The itinerary includes 4 spots and lunch.\r\nThe tour guide would also custmize the itinerary upon your preference.', '<p>9:30am Meet the customer.</p><p>Proceed those places below by public transportation.</p><p>- Meiji Shrine and Harajuku</p><p>- Imperial Palace Plaza</p><p>- East Garden, a traditional Japanese inside the precinct of Imperial Palace</p><p>- Asakusa, old Tokyo area</p><p>The tour disbands in Ginza at 3:30pm.</p><p>The tour guide suggests the customer how to get back to the hotel.</p><p>** I am happy to make a customized tour for you; please feel free to contact me.</p>', 'I only give my service in English & Japanese.', 'Rail or Bus Station, Hotel, Address or Intersection, Monument/Building', 'back to your hotel', 1, 1, 'appending', '2020-05-13 07:49:46');

-- --------------------------------------------------------

--
-- Structure de la table `tourguide`
--

DROP TABLE IF EXISTS `tourguide`;
CREATE TABLE IF NOT EXISTS `tourguide` (
  `tourguideid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `tourguidename` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `regionid` int NOT NULL,
  `level` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepicture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `credentials` text NOT NULL,
  `experience` varchar(255) NOT NULL,
  `feesperday` double NOT NULL,
  `staffid` int NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tourguideid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tourguide`
--

INSERT INTO `tourguide` (`tourguideid`, `tourguidename`, `email`, `phone`, `address`, `regionid`, `level`, `gender`, `password`, `profilepicture`, `description`, `credentials`, `experience`, `feesperday`, `staffid`, `registered_at`) VALUES
(1, 'Miyuki Lin', 'guide@gmail.com', '0912345678', 'Tokyo, Japan', 1, 'Expert', 'Female', '2401d737fc9e8e154075ad1474a3fd252377cc99', 'profile/t1_team-4.jpg', '<p>My name is Miyuki Lin. I\'m active tour guide. I can show you around Tokyo and its wonderful places.</p>', 'BE (Eng)', '5+ years', 45, 1, '2020-05-13 04:38:55'),
(3, 'Ren', 'ren@gmail.com', '0912345678', 'Kyoto, Japan', 2, 'Senior', 'Female', 'b3d107d02ea95b885435a0138b827dce64f7bf6d', 'profile/t3_team-2.jpg', '<p>Hello, I\'m ren. Kyoto is the really beautiful city. I was born in Kyoto and I started working as a tour guide since 2017. I can explain well about Kyoto Interesting Places and Culture.</p>', 'Government licensed national tour guide in English', '3+ years', 39, 1, '2020-05-13 05:22:07'),
(4, 'Kyaw Swar', 'kyaw@gmail.com', '0912345678', 'Myanmar', 3, 'Senior', 'Male', '2353b638ef4e0f516bd200b3357eb85d017e98f4', 'profile/t4_avatar-2.jpg', '<p><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">When you have any questions about the tour or you don\'t find exactly what you\'re looking for, please be free to contact me. I will create a custom-made itinerary for you and can offer you recommendable spots considering your interest.</span><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">I am always so excited at serving you as a tour-guide for your making wonderful memories and experiences, which remains in your recollections for your lifetime.</span><br></p>', 'Authorized tour conductor', '3+ years', 25, 1, '2020-05-13 05:22:57'),
(5, 'Krystal', 'krystal@gmail.com', '0912345678', 'Paris, France', 5, 'Junior', 'Female', '5083b2929d9e16f5e332bd1ab4f7b33cba0908f3', 'profile/user.png', '<p>Hello, all,&nbsp;<span style=\"color: rgb(49, 49, 49); font-family: Nunito; font-size: 1rem;\">My goal is to help you make memories to cherish for a lifetime!</span></p>', 'Specialist degree in International Relations from Russian State University for the Humanities', '1+ year', 40, 1, '2020-05-13 05:24:24'),
(6, 'Kageyama', 'kageyama@gmail.com', '+959123456', 'Tokyo, Japan', 1, 'Junior', 'Male', '62e04f7e53a07245774a6715dc5bf93b5f049776', 'profile/t6_team-1.jpg', '<p><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">I specialize in tours of Kyoto, Nara and Osaka. But I can take you to different cities, as well.</span><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">I have been professionally licensed since 2006 and since then I have guided many people from many countries - <span style=\"font-family: Nunito;\">individuals, couples and groups.</span></span></p><p><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">My favorite way to guide you is with walking tours. That way, you can feel the real charms of the places in a relaxed mood.</span><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">You will feel as if you are with a close friend who is both knowledgeable and kind.</span><br></p>', 'I\'m a national licensed English speaking tour guide.', '1+ year', 30, 1, '2020-05-13 05:25:39'),
(7, 'Bhone', 'bhone@gmail.com', '+9591234567', 'Bagan, Myanmar', 3, 'Senior', 'Male', '491054b4b9fe964747202833727a7c6e3c063f90', 'profile/t7_team-3.jpg', '<p><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">I am totally passionate about my country and its culture One of the things I love most is to see people smile and</span><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">hear them say \"wow\" when they learn or see something new. There is an intimacy on my private tours.</span><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">And when I am planning the tour with you, I can arrange everything in advance.</span><br style=\"box-sizing: inherit; color: rgb(49, 49, 49); font-family: &quot;Gentium Book Basic&quot;, serif;\"><span style=\"color: rgb(49, 49, 49); font-family: Nunito;\">Best of all, when you work with me on your plans, it helps to create a relationship even before you get here.</span><br></p>', 'I graduated from Doshisha University, English Literature Department.', '3+ years', 30, 1, '2020-05-13 05:27:23');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(16, 'Rania', 'rania.laffet@etudiant-isi.utm.tn', '3dd05dca714aeb3e57c9141e9445a0aeec65faaa7d6942a1165e6850dc1221e9dfb5d867bfec2d3836d50ac421b0305b58206c63bb1103dea97a864ca8112a30TDOWK8G459HubRtl7dqXigMPwMeA6FtUEitxbKZY3qw='),
(17, 'admin', 'admin@gmail.com', 'de94f7493aaf1a45fb3c1e9fec265d8adcaa9d74b83425bdd321031cbc1827a3b198fda1a6d248baa84acb421e300dc6f18610cc595a9d0a5b72f37085dd3779xuDAO4Vi6JJSJiGRCvW4/TSggNreW/ngg/r0gUGgz7E=');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
