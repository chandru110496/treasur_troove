-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 02:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treasure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(999) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `type` varchar(122) NOT NULL DEFAULT 'vendor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `email`, `password`, `type`) VALUES
(2, 'Nithan', 'admin@gmail.com', '1234567890', 'type'),
(7, 'sridar', 'admin@gmail.com', '123456', 'type'),
(10, 'suhail_bro', 'suhail@gmail.com', '123456', '0'),
(11, 'nivashini', 'viva@gmail.com', '123456', '1'),
(11, 'nivashini', 'viva@gmail.com', '123456', '1'),
(12, 'arun', 'arun@gmail.com', '123456', 'vendor'),
(13, 'aruna', 'aruna@gmail.com', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `attributes_id` int(11) NOT NULL,
  `attributes_name` varchar(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`attributes_id`, `attributes_name`, `status`) VALUES
(18, 'brand', 0),
(20, 'color', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bid_product_details`
--

CREATE TABLE `bid_product_details` (
  `cards_id` int(255) NOT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `product_new_price` int(255) DEFAULT NULL,
  `product_old_price` varchar(250) NOT NULL,
  `product_image1` varchar(255) DEFAULT NULL,
  `product_image2` varchar(255) DEFAULT NULL,
  `product_image3` varchar(255) DEFAULT NULL,
  `product_image4` varchar(255) DEFAULT NULL,
  `product_image5` varchar(255) NOT NULL,
  `category_id` varchar(250) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `sub_category_id` varchar(250) NOT NULL,
  `specification` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `brand_name` varchar(250) NOT NULL,
  `Product_added_date` varchar(11) NOT NULL DEFAULT current_timestamp() COMMENT 'time created',
  `Product_updated_datete` varchar(11) NOT NULL COMMENT 'time updated',
  `hours` varchar(250) NOT NULL,
  `min` varchar(100) NOT NULL,
  `sec` varchar(100) NOT NULL,
  `retail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid_product_details`
--

INSERT INTO `bid_product_details` (`cards_id`, `product_name`, `product_new_price`, `product_old_price`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `category_id`, `category_name`, `sub_category_id`, `specification`, `product_description`, `brand_name`, `Product_added_date`, `Product_updated_datete`, `hours`, `min`, `sec`, `retail`) VALUES
(7, 'Elaine Weber', 766, 'Brenda Hurley', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '95', '', '', 'Amery Baird', 'Kuame Barron', 'Chester Little', '2023-05-23 ', '', 'Amelia Hayden', 'Lyle Moses', 'Medge Middleton', ''),
(8, 'Julian Alston', 123, 'Noah Owens', 'wallpaperflare.com_wallpaper (4).jpg', 'no_img.jpg', 'no_img.jpg', '', '', '94', '', '', 'Halla Buckley', 'Adara Miranda', 'Evan Johnston', '2023-05-23 ', '', 'Naomi Zamora', 'Lydia Espinoza', 'Zena Pruitt', ''),
(9, 'Lucian Woodward', 345, 'Lilah Blackwell', 'romantic-positive-young-european-woman-smiles-gently-has-white-perfect-teeth-touches-both-cheeks-has-friendly-look-wears-pink-hat-with-pompon-white-sweater.jpg', 'no_img.jpg', 'no_img.jpg', '', '', '94', '', '', 'Sasha Roach', 'Nasim Robinson', 'Savannah Giles', '2023-05-23 ', '', 'Yvette Frost', 'Robin Cote', 'Marvin Lang', ''),
(10, 'Owen Burton', 900, 'Jordan Kinney', 'pngtree-black-friday-sale-banner-gold-balloons-picture-image_1965039.jpg', 'no_img.jpg', 'no_img.jpg', '', '', '93', '', '', 'Mona Walters', 'Rachel Cruz', 'Clementine Trujillo', '2023-05-23 ', '', '9', '8', '23', '');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(99) NOT NULL,
  `last_name` varchar(99) NOT NULL,
  `address` varchar(99) DEFAULT NULL,
  `town` varchar(999) NOT NULL,
  `state` varchar(99) NOT NULL,
  `pin_code` int(7) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(13) DEFAULT NULL,
  `email` varchar(99) NOT NULL,
  `order_notes` varchar(999) DEFAULT NULL,
  `country` varchar(244) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`address_id`, `user_id`, `first_name`, `last_name`, `address`, `town`, `state`, `pin_code`, `phone`, `password`, `email`, `order_notes`, `country`) VALUES
(101, 101, 'Berlin', 'Nyssa Barnes', 'Soluta autem suscipi', 'Et enim eum tempora ', 'Nisi error voluptati', 0, '+1 (948) 873-', 'Sapiente eu c', 'cepy@mailinator.com', 'Aut deleniti duis am', 'Temporibus commodo a'),
(102, 26, 'Berlin', 'Nyssa Barnes', 'Soluta autem suscipi', 'Et enim eum tempora ', 'Nisi error voluptati', 0, '+1 (948) 873-', 'Sapiente eu c', 'cepy@mailinator.com', 'Aut deleniti duis am', 'Temporibus commodo a'),
(103, 0, 'Alvin Castaneda', 'Leilani Hurley', 'Pariatur Voluptatem', 'Deserunt atque iste ', 'Sunt nulla qui opti', 0, '+1 (137) 472-', 'Maiores volup', 'lyfaleku@mailinator.com', 'Atque magnam rerum o', 'In maiores nemo sit'),
(104, 0, 'Alvin Castaneda', 'Leilani Hurley', 'Pariatur Voluptatem', 'Deserunt atque iste ', 'Sunt nulla qui opti', 0, '+1 (137) 472-', 'Maiores volup', 'lyfaleku@mailinator.com', 'Atque magnam rerum o', 'In maiores nemo sit'),
(105, 0, 'Kevin Barrett', 'Clinton Sharpe', 'Ut obcaecati quis ma', 'Ut molestiae accusan', 'Nihil earum harum in', 0, '+1 (409) 209-', 'Accusantium a', 'cecif@mailinator.com', 'Aut omnis qui at qua', 'Eos dolores reprehe'),
(106, 99, 'Kevin Barrett', 'Clinton Sharpe', 'Ut obcaecati quis ma', 'Ut molestiae accusan', 'Nihil earum harum in', 0, '+1 (409) 209-', 'Accusantium a', 'cecif@mailinator.com', 'Aut omnis qui at qua', 'Eos dolores reprehe'),
(107, 0, 'regina    lklklklk', 'Britanney Moore', 'Illo facere exercita', 'Ad minim dolor tempo', 'Aliquam fuga Ad ips', 0, '+1 (157) 697-', 'Nisi enim ver', 'tuwu@mailinator.com', 'Et nostrud sapiente ', 'Labore debitis neces'),
(108, 0, 'regina    lklklklk', 'Britanney Moore', 'Illo facere exercita', 'Ad minim dolor tempo', 'Aliquam fuga Ad ips', 0, '+1 (157) 697-', 'Nisi enim ver', 'tuwu@mailinator.com', 'Et nostrud sapiente ', 'Labore debitis neces'),
(109, 0, 'regina    lklklklk', 'Britanney Moore', 'Illo facere exercita', 'Ad minim dolor tempo', 'Aliquam fuga Ad ips', 0, '+1 (157) 697-', 'Nisi enim ver', 'tuwu@mailinator.com', 'Et nostrud sapiente ', 'Labore debitis neces'),
(110, 33, 'haidas', 'Shea Delgado', 'Officia accusamus ra', 'Aperiam enim velit c', 'Nostrum iusto tempor', 0, '+1 (724) 339-', 'Nisi enim ver', 'vasolygubu@mailinator.com', 'Et nostrud sapiente ', 'Nostrum iusto tempor'),
(111, 27, 'haidas', 'Shea Delgado', 'Officia accusamus ra', 'Aperiam enim velit c', 'Nostrum iusto tempor', 0, '+1 (724) 339-', 'Itaque fugit ', 'vasolygubu@mailinator.com', 'Dolorem repudiandae ', 'Nostrum iusto tempor'),
(112, 28, 'Chastity Huber', 'Maggy Whitehead', 'Dolor ut id dolores ', 'Aut non molestiae do', 'Non eos est quae es', 0, '+1 (705) 984-', 'Officiis ex m', 'gevegali@mailinator.com', 'Nesciunt magni ipsa', 'Proident lorem volu'),
(113, 28, 'Chastity Huber', 'Maggy Whitehead', 'Dolor ut id dolores ', 'Aut non molestiae do', 'Non eos est quae es', 0, '+1 (705) 984-', 'Officiis ex m', 'gevegali@mailinator.com', 'Nesciunt magni ipsa', 'Proident lorem volu'),
(114, 35, 'Elliott', 'Larsen', 'Non inventore quia m', 'Omnis totam maiores ', 'Sint magni sed cupid', 0, '+1 (296) 906-', 'Veniam incidi', 'kebupafyle@mailinator.com', NULL, 'Iste quos odit repre'),
(115, 35, 'russelllll', 'Larsen', 'Non inventore quia m', 'Omnis totam maiores ', 'Iste quos odit repre', 0, '+1 (296) 906-', 'Veniam incidi', 'kebupafyle@mailinator.com', NULL, 'Iste quos odit repre'),
(116, 37, 'suhail_revath', 'Montoya', 'Possimus exercitati', 'Deserunt exercitatio', 'Et est id ut cupida', 0, '+1 (701) 594-', 'Anim id nostr', 'vixuw@mailinator.com', NULL, 'Et est id ut cupida'),
(117, 37, 'suhail_revath', 'Montoya', 'Possimus exercitati', 'Deserunt exercitatio', 'Et est id ut cupida', 0, '+1 (701) 594-', 'Anim id nostr', 'vixuw@mailinator.com', NULL, 'Et est id ut cupida'),
(118, 37, 'suhail_revath', 'Montoya', 'Possimus exercitati', 'Deserunt exercitatio', 'Et est id ut cupida', 0, '+1 (701) 594-', 'Anim id nostr', 'vixuw@mailinator.com', NULL, 'Et est id ut cupida'),
(119, 0, 'Lara', 'Dominguez', 'Odit nesciunt earum', 'Ipsam incidunt id t', 'Eveniet irure facil', 0, '+1 (409) 743-', '123456', 're@gmail.com', NULL, 'Fugiat fuga Volupt'),
(120, 0, 'Martena', 'Durham', 'Omnis consectetur l', 'Praesentium corporis', 'Molestiae qui illo l', 0, '+1 (139) 697-', 'Qui quo delen', 'futosyq@mailinator.com', NULL, 'Exercitationem qui l'),
(121, 0, 'harrtrtryidas', 'Shea Delgado', 'Officia accusamus ra', 'Aperiam enim velit c', 'Nostrum iusto tempor', 0, '+1 (724) 339-', 'Itaque fugit ', 'vasolygubu@mailinator.com', NULL, 'Nostrum iusto tempor'),
(122, 13, 'Teegan', 'George', 'Rem dolorem amet as', 'Quasi consequuntur d', 'Ipsam eum occaecat i', 0, '+1 (542) 128-', 'Hic recusanda', 'nypo@mailinator.com', NULL, 'Soluta molestiae est'),
(123, 13, 'Teegan_sridahr', 'George', 'Rem dolorem amet as', 'Quasi consequuntur d', 'Soluta molestiae est', 0, '+1 (542) 128-', 'Hic recusanda', 'nypo@mailinator.com', NULL, 'Soluta molestiae est'),
(124, 39, 'Robinsom _sridahar', 'Drake', 'Vel deserunt iure ve', 'Esse ipsa quia dol', 'Dignissimos laboris ', 0, '+1 (525) 679-', 'Omnis dicta n', 'julukegyf@mailinator.com', NULL, 'Anim alias occaecat '),
(125, 25, 'Frances', 'Pickett', 'Aut architecto et qu', 'Voluptatem qui possi', 'Libero reprehenderit', 0, '+1 (688) 839-', 'Distinctio Vo', 'cexy@mailinator.com', NULL, 'Unde ipsam in qui ei'),
(126, 40, 'ervin leger', 'York', 'Voluptatibus et non ', 'Doloribus quis sunt ', 'Officiis magnam labo', 0, '+1 (778) 219-', 'A sit ab inci', 'wakyro@mailinator.com', NULL, 'Excepturi magni accu'),
(127, 41, 'das ....haridas$', 'Abbott', 'Irure adipisci in se', 'Nemo sed quis magni ', 'Unde eum in corrupti', 0, '+1 (849) 575-', 'Harum accusam', 'wilawasys@mailinator.com', NULL, 'Et deserunt libero s'),
(128, 25, 'Lara', 'Pickett', 'Aut architecto et qu', 'Voluptatem qui possi', 'Unde ipsam in qui ei', 0, '+1 (688) 839-', 'Distinctio Vo', 'cexy@mailinator.com', NULL, ''),
(129, 44, 'Virat _anuska', 'Myers', 'Officiis est necess', 'Quam perferendis sae', 'Aut enim ex sit sed', 635105, '+1 (334) 678-', 'Est id qui re', 'bode@mailinator.com', NULL, 'Enim irure excepteur'),
(130, 44, 'Virat _anuska', 'Myers', 'Officiis est necess', 'Quam perferendis sae', 'Aut enim ex sit sed', 635105, '+1 (334) 678-', 'Est id qui re', 'bode@mailinator.com', NULL, 'Enim irure excepteur'),
(131, 44, '', 'Myers', 'Officiis est necess', 'Quam perferendis sae', 'Enim irure excepteur', 635105, '+1 (334) 678-', 'Est id qui re', 'bode@mailinator.com', NULL, 'Enim irure excepteur'),
(132, 44, 'Virat _anuska', 'Myers', 'Officiis est necess', 'Quam perferendis sae', 'Enim irure excepteur', 635105, '+1 (334) 678-', 'Est id qui re', 'bode@mailinator.com', NULL, 'Enim irure excepteur'),
(133, 44, 'Virat _anuska', 'Myers', 'Officiis est necess', 'Quam perferendis sae', 'Enim irure excepteur', 635105, '+1 (334) 678-', 'Est id qui re', 'bode@mailinator.com', NULL, 'Enim irure excepteur');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `cards_id` int(11) NOT NULL,
  `image` varchar(111) NOT NULL,
  `product_name` varchar(999) NOT NULL,
  `about_price` varchar(999) NOT NULL,
  `primary_text` varchar(999) NOT NULL,
  `timer` int(123) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`cards_id`, `image`, `product_name`, `about_price`, `primary_text`, `timer`) VALUES
(3, 'images (1).jpg', 'Delilah Emerson', 'Ursula Meyers', 'Danielle Berger', 14),
(4, '61273AWlxLL._AC_SY200_.jpg', 'Jasper Hancock', 'Mariko Long', 'Shellie Wilkins', 90),
(8, 'austin-wade-d2s8NQ6WD24-unsplash.jpg', 'Suki Bowers', 'Mechelle Stevens', 'Reagan House', 10),
(12, 'images (1).jpg', 'Constance Bray', 'Beck Preston', 'Noble Griffith', 67),
(16, 'Gaming-Headset-PNG-HD-Image-1.png', 'Jayme Hebert', 'Gareth Hendricks', 'Callie Macdonald', NULL),
(17, 'wallpaperflare.com_wallpaper (4).jpg', 'Raphael Holt', 'yy', 'iooio', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_product_details`
--

CREATE TABLE `catalog_product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` int(11) NOT NULL,
  `product_image1` int(11) NOT NULL,
  `product_image2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `cat_image` varchar(999) NOT NULL,
  `category_description` varchar(500) DEFAULT NULL,
  `category_reg_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_reg_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled',
  `brand_id` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `category_icon` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `cat_image`, `category_description`, `category_reg_updated`, `category_reg_created`, `category_status`, `brand_id`, `vendor_id`, `category_icon`) VALUES
(92, 'bid', '2._SS400_QL85_.jpg', NULL, '2023-04-17 06:23:25', '2023-04-17 06:23:25', 1, NULL, NULL, 'Autumn Leonard'),
(93, 'buy', '2.jpg', NULL, '2023-04-17 06:24:06', '2023-04-17 06:24:06', 1, NULL, NULL, 'Steven Burns'),
(94, 'kids', 'wallpaperflare.com_wallpaper (7).jpg', NULL, '2023-05-19 11:15:04', '2023-05-19 11:15:04', 1, NULL, NULL, 'sds'),
(95, 'Mens wear', 'wallpaperflare.com_wallpaper (7).jpg', NULL, '2023-05-22 07:23:48', '2023-05-22 07:23:48', 1, NULL, NULL, 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `deal_product_details`
--

CREATE TABLE `deal_product_details` (
  `product_id` int(250) NOT NULL,
  `product_name` int(250) NOT NULL,
  `product_image1` int(255) NOT NULL,
  `min` int(255) NOT NULL,
  `sec` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invest_details`
--

CREATE TABLE `invest_details` (
  `invest_id` int(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_image1` int(255) NOT NULL,
  `product_img2` varchar(255) NOT NULL,
  `product_img3` varchar(250) NOT NULL,
  `product_img4` varchar(250) NOT NULL,
  `product_img5` varchar(250) NOT NULL,
  `brand_name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `specification` varchar(250) NOT NULL,
  `project_plan` varchar(250) NOT NULL,
  `job_response` varchar(250) NOT NULL,
  `about_project` varchar(250) NOT NULL,
  `blog_video` varchar(250) NOT NULL,
  `days` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `min` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invest_details`
--

INSERT INTO `invest_details` (`invest_id`, `product_name`, `product_image1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `brand_name`, `description`, `specification`, `project_plan`, `job_response`, `about_project`, `blog_video`, `days`, `hours`, `min`, `sec`) VALUES
(1, 'Drew Kemp', 0, '', '', '', '', 'Ezra Daugherty', 'Cally Mckee', 'Kameko Randolph', 'Placeat earum assum', 'Velit iure est sed', 'Soluta laboris ex in', 'wallpaperflare.com_wallpaper (3).jpg', '2', '889', '90', '60'),
(2, 'Samson Duke', 0, '', '', '', '', 'Randall Wilson', 'Thor Walker', 'Hashim Moody', 'Qui necessitatibus m', 'Non voluptatum itaqu', 'Omnis et blanditiis ', '', 'Jasper Little', 'Sigourney Pickett', 'Jemima Harrison', 'Joy Hunter'),
(3, 'Samson Duke', 0, '', '', '', '', 'Randall Wilson', 'Thor Walker', 'Hashim Moody', 'Qui necessitatibus m', 'Non voluptatum itaqu', 'Omnis et blanditiis ', '', 'Jasper Little', 'Sigourney Pickett', 'Jemima Harrison', 'Joy Hunter'),
(4, 'Samson Duke', 0, '', '', '', '', 'Randall Wilson', 'Thor Walker', 'Hashim Moody', 'Qui necessitatibus m', 'Non voluptatum itaqu', 'Omnis et blanditiis ', '', 'Jasper Little', 'Sigourney Pickett', 'Jemima Harrison', 'Joy Hunter'),
(5, 'harida', 0, '', '', '', '', 'jjhg', 'fhff', 'hfhf', 'vvhfffhfh', 'ghfghfghfgh', 'hfghfghfghfgh', 'wallpaperflare.com_wallpaper (1).jpg', 'ft', 'tuyt', 'tyut', 'yut');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `specialisms` varchar(255) DEFAULT NULL,
  `offered_salary` varchar(255) DEFAULT NULL,
  `career_level` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `deadline_date` date DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `complete_address` varchar(255) DEFAULT NULL,
  `find_on_map` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `job_title`, `job_description`, `first_name`, `last_name`, `email`, `job_type`, `specialisms`, `offered_salary`, `career_level`, `experience`, `gender`, `industry`, `qualification`, `deadline_date`, `country`, `city`, `complete_address`, `find_on_map`, `latitude`, `longitude`) VALUES
(1, 'r972BRAyxl', 'fOab44mUTO', 'Benish', 'Team', 'T423vN@gmail.com', '1', '1', '1', '1', '1', '1', '1', '1', '2023-05-30', '1', '1', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `largecards`
--

CREATE TABLE `largecards` (
  `largecards_id` int(11) NOT NULL,
  `image` varchar(999) NOT NULL,
  `product_name` varchar(999) NOT NULL,
  `about_price` varchar(999) NOT NULL,
  `primary_text` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `largecards`
--

INSERT INTO `largecards` (`largecards_id`, `image`, `product_name`, `about_price`, `primary_text`) VALUES
(1, '8-85253_smartphone-mobile-phone-accessories-electronic-device-clip-art.png', 'Rinah Lynn', 'Ori Raymond', 'Darrel Blake'),
(2, '4-8.jpg', 'Adria Anthony', 'Hiram Allison', 'Merritt Stout'),
(3, 'forgot_Mesa de trabajo 1.jpg', 'Uta Mcguire', 'Tatiana Stewart', 'Shoshana Murray'),
(4, 'pngegg (2).png', 'Susan Ryan', 'Lucy Joyner', 'Ursula Wall'),
(6, '2-3-800x900.jpg', 'Leilani Molina', 'Tasha Nieves', 'Nicole Beasley'),
(7, 'wallpaperflare.com_wallpaper (7).jpg', 'am leon', '123', 'iooio');

-- --------------------------------------------------------

--
-- Table structure for table `my_cart`
--

CREATE TABLE `my_cart` (
  `cart_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_cart`
--

INSERT INTO `my_cart` (`cart_id`, `order_id`, `user_id`, `product_id`, `product_name`, `quantity`, `price`, `date`, `amount`, `status`) VALUES
(6, 1, 25, 106, 'Bakery', 2, 777, '2023-03-31', 1554, 'processing'),
(7, 1, 25, 116, 'betel leaf', 2, 32, '2023-03-31', 64, 'processing'),
(8, 1, 25, 117, 'dal chini', 1, 23, '2023-03-31', 23, 'processing'),
(9, 1, 25, 114, 'red chilli', 2, 23, '2023-03-31', 46, 'processing'),
(10, 1, 25, 106, 'Bakery', 2, 777, '2023-03-31', 1554, 'processing'),
(11, 1, 25, 116, 'betel leaf', 2, 32, '2023-03-31', 64, 'processing'),
(12, 1, 25, 117, 'dal chini', 1, 23, '2023-03-31', 23, 'processing'),
(13, 1, 25, 114, 'red chilli', 2, 23, '2023-03-31', 46, 'processing'),
(14, 187, 25, 106, 'Bakery', 2, 777, '2023-03-31', 1554, 'processing'),
(15, 187, 25, 116, 'betel leaf', 2, 32, '2023-03-31', 64, 'processing'),
(16, 187, 25, 117, 'dal chini', 1, 23, '2023-03-31', 23, 'processing'),
(17, 187, 25, 118, 'knife', 1, 234, '2023-03-31', 234, 'processing'),
(18, 187, 25, 114, 'red chilli', 2, 23, '2023-03-31', 46, 'processing'),
(19, 187, 25, 119, 'vegetables', 1, 234, '2023-03-31', 234, 'processing'),
(20, 188, 13, 116, 'betel leaf', 1, 32, '2023-03-31', 32, 'processing'),
(21, 188, 13, 118, 'knife', 1, 234, '2023-03-31', 234, 'processing'),
(22, 188, 13, 114, 'red chilli', 1, 23, '2023-03-31', 23, 'processing'),
(23, 189, 40, 113, 'Fish', 1, 277, '2023-04-01', 277, 'processing'),
(24, 190, 40, 106, 'Bakery', 1, 777, '2023-04-01', 777, 'processing'),
(25, 190, 40, 116, 'betel leaf', 2, 32, '2023-04-01', 64, 'processing'),
(26, 190, 40, 114, 'red chilli', 2, 23, '2023-04-01', 46, 'processing'),
(27, 191, 41, 105, 'Chicken', 2, 234, '2023-04-01', 468, 'processing'),
(28, 191, 41, 104, 'mutton', 4, 234, '2023-04-01', 936, 'processing'),
(29, 191, 41, 107, 'Raabit', 2, 564, '2023-04-01', 1128, 'processing'),
(30, 192, 25, 118, 'knife', 2, 234, '2023-04-05', 468, 'processing'),
(31, 192, 25, 107, 'Raabit', 2, 564, '2023-04-05', 1128, 'processing'),
(32, 192, 25, 119, 'vegetables', 1, 234, '2023-04-05', 234, 'processing'),
(33, 193, 44, 105, 'Chicken', 1, 234, '2023-04-05', 234, 'processing'),
(34, 193, 44, 113, 'Fish', 1, 277, '2023-04-05', 277, 'processing'),
(35, 193, 44, 104, 'mutton', 1, 234, '2023-04-05', 234, 'processing'),
(36, 194, 44, 113, 'Fish', 2, 277, '2023-04-05', 554, 'processing'),
(37, 194, 44, 104, 'mutton', 1, 234, '2023-04-05', 234, 'processing'),
(38, 195, 44, 105, 'Chicken', 1, 234, '2023-04-05', 234, 'processing'),
(39, 195, 44, 118, 'knife', 1, 234, '2023-04-05', 234, 'processing'),
(40, 195, 44, 104, 'mutton', 1, 234, '2023-04-05', 234, 'processing'),
(41, 195, 44, 119, 'vegetables', 1, 234, '2023-04-05', 234, 'processing'),
(42, 196, 44, 105, 'Chicken', 1, 234, '2023-04-05', 234, 'processing'),
(43, 196, 44, 117, 'dal chini', 1, 23, '2023-04-05', 23, 'processing'),
(44, 196, 44, 113, 'Fish', 1, 277, '2023-04-05', 277, 'processing'),
(45, 196, 44, 118, 'knife', 1, 234, '2023-04-05', 234, 'processing'),
(46, 196, 44, 104, 'mutton', 1, 234, '2023-04-05', 234, 'processing'),
(47, 197, 0, 116, 'betel leaf', 1, 32, '2023-04-07', 32, 'Completed'),
(48, 197, 0, 117, 'dal chini', 1, 23, '2023-04-07', 23, 'Completed'),
(49, 198, 27, 113, 'Fish', 1, 277, '2023-04-07', 277, 'Completed'),
(50, 198, 27, 104, 'mutton', 1, 234, '2023-04-07', 234, 'Completed'),
(51, 199, 27, 113, 'Fish', 1, 277, '2023-04-07', 277, 'Completed'),
(52, 199, 27, 104, 'mutton', 1, 234, '2023-04-07', 234, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_unique_id` varchar(100) NOT NULL,
  `total_qty` int(222) NOT NULL,
  `total_amount` int(99) NOT NULL,
  `payment_status` varchar(99) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_unique_id`, `total_qty`, `total_amount`, `payment_status`, `payment_date`, `payment_mode`, `user_id`, `status`) VALUES
(186, '1', 0, 1687, 'Paid', '2023-03-31', 'Online', 25, 'processing'),
(187, '187', 0, 2155, 'Paid', '2023-03-31', 'Online', 25, 'processing'),
(188, '188', 0, 289, 'Paid', '2023-03-31', 'Online', 13, 'processing'),
(189, '189', 0, 277, 'Paid', '2023-04-01', 'Online', 40, 'processing'),
(190, '190', 0, 887, 'Paid', '2023-04-01', 'Online', 40, 'processing'),
(191, '191', 0, 2532, 'Paid', '2023-04-01', 'Online', 41, 'processing'),
(192, '192', 0, 1830, 'Paid', '2023-04-05', 'Online', 25, 'processing'),
(193, '193', 3, 745, 'Paid', '2023-04-05', 'Online', 44, 'processing'),
(194, '194', 1, 788, 'Paid', '2023-04-05', 'Online', 44, 'processing'),
(195, '195', 4, 936, 'Paid', '2023-04-05', 'Online', 44, 'processing'),
(196, '196', 5, 1002, 'completed', '2023-04-05', 'Online', 44, 'processing'),
(197, '197', 2, 55, 'Paid', '2023-04-07', 'Online', 0, 'Completed'),
(198, '198', 2, 511, 'Paid', '2023-04-07', 'Online', 27, 'Completed'),
(199, '199', 2, 511, 'Paid', '2023-04-07', 'Online', 27, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_new_price` float NOT NULL,
  `product_old_price` float NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) DEFAULT NULL,
  `product_image3` varchar(255) DEFAULT NULL,
  `product_image4` varchar(255) DEFAULT NULL,
  `product_image5` varchar(255) DEFAULT NULL,
  `Product_added_date` varchar(11) NOT NULL COMMENT 'time created',
  `product_updated_date` varchar(11) NOT NULL COMMENT 'time updated',
  `product_visibility` tinyint(1) NOT NULL DEFAULT 1,
  `category_id` varchar(255) NOT NULL,
  `category_name` varchar(999) NOT NULL,
  `sub_category_id` varchar(100) NOT NULL,
  `sku_no` varchar(999) NOT NULL,
  `specification` varchar(999) NOT NULL,
  `inventory_id` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) NOT NULL,
  `Product_quantity` int(11) NOT NULL DEFAULT 0,
  `procurement` varbinary(255) NOT NULL,
  `in_slider` tinyint(1) NOT NULL DEFAULT 0,
  `product_folder` int(10) UNSIGNED DEFAULT NULL COMMENT 'folder with images',
  `url` varchar(255) NOT NULL,
  `virtual_products` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_name` varchar(55) DEFAULT NULL,
  `discount_id` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) NOT NULL DEFAULT '0',
  `product_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_new_price`, `product_old_price`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `Product_added_date`, `product_updated_date`, `product_visibility`, `category_id`, `category_name`, `sub_category_id`, `sku_no`, `specification`, `inventory_id`, `product_description`, `Product_quantity`, `procurement`, `in_slider`, `product_folder`, `url`, `virtual_products`, `brand_name`, `discount_id`, `vendor_id`, `product_status`) VALUES
(2, 'Nomlanga Lyons', 799, 999, '2-2-800x900.jpg', 'no_img.jpg', 'no_img.jpg', '', '', '', '', 1, '4', '', '', 'Rina Talley', 'Asher Humphrey', NULL, 'Ashton Berry', 0, '', 0, NULL, '', NULL, 'Bo Perkins', NULL, '788', 1),
(3, 'Katell Briggs', 888, 890, '1-800x900.jpg', 'no_img.jpg', 'no_img.jpg', '', '', '', '', 1, '2', '', '', 'Isaiah Reilly', 'Josiah Keith', NULL, 'Xena Mendoza', 0, '', 0, NULL, '', NULL, 'Amanda Dennis', NULL, '0', 1),
(4, 'Amena Herrera', 600, 777, '81WY43xc5oL._AC_SY200_.jpg', 'no_img.jpg', 'no_img.jpg', '', '', '', '', 1, '3', '', '', 'Malik Banks', 'Zane Villarreal', NULL, 'Mari Estes', 0, '', 0, NULL, '', NULL, 'Lenore Bauer', NULL, '0', 1),
(5, 'Aurora Bush', 89, 99, '4-2-2.jpg', '4-2-2.jpg', '4-2-2.jpg', '4-1.jpg', '4-2-2.jpg', '', '', 1, '', '', '', 'Macy Kim', 'Florence Patrick', NULL, 'Rose Winters', 0, '', 0, NULL, '', NULL, 'Portia Hewitt', NULL, '0', 1),
(9, ' mens fashion', 789, 900, 'men.png', 'men.png', 'men.png', 'men.png', 'men.png', '', '', 1, '93', '', '90', 'Zeus Richardson', 'Bert Houston', NULL, 'Lilah Page', 0, '', 0, NULL, '', NULL, 'Philip Dorsey', NULL, '0', 1),
(10, 'kids fashion vibes', 8999, 9999, 'pngegg (2).png', 'pngegg (2).png', 'pngegg (2).png', '61273AWlxLL._AC_SY200_.jpg', 'images (1).jpg', '', '', 1, '93', '', '', 'Perry Moon', 'Roanna Phillips', NULL, 'Kellie Berry', 0, '', 0, NULL, '', NULL, 'Anjolie Sims', NULL, '0', 1),
(11, 'Sylvester Morris', 782, 675, 'pngegg.png', 'pngegg.png', 'pngegg.png', 'pngegg.png', 'pngegg.png', '', '', 1, '92', '', '96', 'Camden Sloan', 'Myles Fox', NULL, 'Rinah Dean', 0, '', 0, NULL, '', NULL, 'Brenna Collier', NULL, '0', 1),
(13, 'Raphael Holt', 0, 0, 'wallpaperflare.com_wallpaper (2).jpg', 'wallpaperflare.com_wallpaper (2).jpg', 'wallpaperflare.com_wallpaper (2).jpg', 'wallpaperflare.com_wallpaper (2).jpg', 'wallpaperflare.com_wallpaper (2).jpg', '', '', 1, '92', '', '\r\nWarning:  Undefined array key ', 'Michelle Hunter', 'Dane Hays', NULL, 'Raphael Dejesus', 0, '', 0, NULL, '', NULL, 'Michael Vaughn', NULL, '0', 1),
(14, 'Paul Sanchez', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(23, 'Raphael Holt', 7099, 0, 'wallpaperflare.com_wallpaper (6).jpg', 'wallpaperflare.com_wallpaper (6).jpg', 'wallpaperflare.com_wallpaper (6).jpg', 'wallpaperflare.com_wallpaper (6).jpg', 'wallpaperflare.com_wallpaper (6).jpg', '', '', 1, '95', '', 'undefined', 'Michelle Hunter', 'Macy Knapp', NULL, 'Miriam Kim', 0, '', 0, NULL, '', NULL, 'Ezra Daugherty', NULL, '0', 1),
(24, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(25, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(26, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(27, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(28, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(29, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(30, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(31, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(32, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(33, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(34, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(35, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(36, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1),
(37, 'Madeson Humphrey', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', 'Blair Mcfadden', NULL, 'Melodie Keller', 0, '', 0, NULL, '', NULL, 'Hiroko Leon', NULL, '0', 1),
(38, 'Madeson Humphrey', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', 'Blair Mcfadden', NULL, 'Melodie Keller', 0, '', 0, NULL, '', NULL, 'Hiroko Leon', NULL, '0', 1),
(39, 'Madeson Humphrey', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', 'Blair Mcfadden', NULL, 'Melodie Keller', 0, '', 0, NULL, '', NULL, 'Hiroko Leon', NULL, '0', 1),
(40, 'Madeson Humphrey', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', 'Blair Mcfadden', NULL, 'Melodie Keller', 0, '', 0, NULL, '', NULL, 'Hiroko Leon', NULL, '0', 1),
(41, 'Madeson Humphrey', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', 'Blair Mcfadden', NULL, 'Melodie Keller', 0, '', 0, NULL, '', NULL, 'Hiroko Leon', NULL, '0', 1),
(42, 'Madeson Humphrey', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', 'Blair Mcfadden', NULL, 'Melodie Keller', 0, '', 0, NULL, '', NULL, 'Hiroko Leon', NULL, '0', 1),
(43, '', 0, 0, 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', 'no_img.jpg', '', '', 1, '', '', '', '', '', NULL, '', 0, '', 0, NULL, '', NULL, '', NULL, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(134) NOT NULL,
  `cpassword` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `user_name`, `email`, `password`, `cpassword`) VALUES
(46, 'sridhar', 'admin@gmail.com', '123456', '123456'),
(47, 'sridhar', 'admin@gmail.com', '123456', '123456'),
(48, 'Autumn Sexton', 'ponuc@mailinator.com', 'Deleniti fuga In ar', 'Aperiam vitae deseru'),
(49, 'wdwwew', 'asas@gmail.com', '111111', '111111'),
(50, 'cybijedi', 'mibasugiz@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `reg_login`
--

CREATE TABLE `reg_login` (
  `id` int(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(250) NOT NULL,
  `service_image` varchar(250) NOT NULL,
  `current_bid` int(11) NOT NULL,
  `bid_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `product_id` int(11) NOT NULL,
  `background_image` varchar(999) DEFAULT NULL,
  `image` varchar(999) NOT NULL,
  `title` varchar(99) DEFAULT NULL,
  `content` varchar(99) NOT NULL,
  `timer` int(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`product_id`, `background_image`, `image`, `title`, `content`, `timer`) VALUES
(1, '2-4.jpg', '2-2-600x675.jpg', 'Excepteur quos error', '988', 13),
(2, '71v-C8+S+VL._SY450_.jpg', '71v-C8+S+VL._SY450_.jpg', 'hand bag', 'Quisquam rerum volup', 1),
(3, '2-3-800x900.jpg', '2-3-800x900.jpg', 't shirt', 'Blanditiis rerum sun', 34),
(4, '3-5.jpg', '71RRg85DZ5L._AC_SY200_.jpg', 'laptop', 'rr', 166),
(5, '2-6.jpg', '2-8.jpg', 'pc bro', 'Blanditiis rerum sun', 55),
(6, '2-6.jpg', '2-6.jpg', 'am a rider', 'hey giii', 10),
(7, 'wallpaperflare.com_wallpaper (5).jpg', 'wallpaperflare.com_wallpaper (4).jpg', 'kij', 'mouni', NULL),
(8, 'wallpaperflare.com_wallpaper (3).jpg', 'wallpaperflare.com_wallpaper (3).jpg', 'kokolol', 'mouni m7egana', NULL),
(9, 'wallpaperflare.com_wallpaper (3).jpg', 'wallpaperflare.com_wallpaper (3).jpg', 'jkpl', 'kloaseecb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(20) NOT NULL,
  `sub_category_name` varchar(50) DEFAULT NULL,
  `sub_category_description` varchar(500) DEFAULT NULL,
  `sub_category_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `sub_category_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `sub_category_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled',
  `brand_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(50) NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `subcategoty_image` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `sub_category_name`, `sub_category_description`, `sub_category_updated`, `sub_category_created`, `sub_category_status`, `brand_id`, `category_id`, `vendor_id`, `subcategoty_image`) VALUES
(90, 'mens wear', NULL, '2023-04-17 06:31:08', '2023-04-17 06:31:08', 1, NULL, '93', NULL, '31AQZJ53gnL._AC_SY200_.jpg'),
(92, 'kids', NULL, '2023-04-17 08:56:50', '2023-04-17 08:56:50', 1, NULL, '93', NULL, '2._SS400_QL85_.jpg'),
(93, 'Home  appliances', NULL, '2023-04-17 08:57:33', '2023-04-17 08:57:33', 1, NULL, '92', NULL, '33143-2-striped-dress-file-thumb.png'),
(94, 'mens wear', NULL, '2023-04-17 08:58:40', '2023-04-17 08:58:40', 1, NULL, '92', NULL, '31AQZJ53gnL._AC_SY200_.jpg'),
(95, 'womens wear', NULL, '2023-04-17 08:59:05', '2023-04-17 08:59:05', 1, NULL, '92', NULL, 'download.jpg'),
(96, 'Kids', NULL, '2023-04-17 10:23:05', '2023-04-17 10:23:05', 1, NULL, '92', NULL, 'pngegg (2).png'),
(97, 'outfits', NULL, '2023-05-19 11:15:59', '2023-05-19 11:15:59', 1, NULL, '94', NULL, 'wallpaperflare.com_wallpaper (6).jpg'),
(98, 'sports', NULL, '2023-05-23 11:29:30', '2023-05-23 11:29:30', 1, NULL, '95', NULL, 'download (5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_brand`
--

CREATE TABLE `tbl_mst_brand` (
  `brand_id` int(20) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(999) NOT NULL,
  `brand_status` int(20) DEFAULT NULL,
  `brand_order` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mst_brand`
--

INSERT INTO `tbl_mst_brand` (`brand_id`, `brand_name`, `brand_image`, `brand_status`, `brand_order`) VALUES
(19, 'vivo', 'oKTQfBn2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_order_return_details`
--

CREATE TABLE `tbl_mst_order_return_details` (
  `return_order_id` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `vendor_id` varchar(50) NOT NULL,
  `product_id` varchar(500) NOT NULL,
  `product_size` varchar(500) NOT NULL,
  `product_quantity` varchar(500) NOT NULL,
  `refund_amount` float NOT NULL,
  `refund_status` varchar(100) DEFAULT NULL,
  `return_order_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `return_updated` timestamp NULL DEFAULT current_timestamp(),
  `return_order_items_status` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_product_inner_sub_category`
--

CREATE TABLE `tbl_mst_product_inner_sub_category` (
  `innersub_category_id` varchar(50) NOT NULL,
  `innersub_category_name` varchar(50) DEFAULT NULL,
  `innersub_category_description` varchar(500) DEFAULT NULL,
  `innersub_category_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `innersub_category_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `innersub_category_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled',
  `brand_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(50) NOT NULL,
  `sub_category_id` varchar(50) NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_product_inventory`
--

CREATE TABLE `tbl_mst_product_inventory` (
  `inventory_id` varchar(100) NOT NULL,
  `inventory_description` varchar(10) NOT NULL,
  `inventory_type` varchar(10) NOT NULL,
  `vendor_id` varchar(100) NOT NULL,
  `inventory_address` varchar(20) NOT NULL,
  `inventory_pincode` int(10) NOT NULL,
  `inventory_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled',
  `inventory_product_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_product_list`
--

CREATE TABLE `tbl_mst_product_list` (
  `product id` int(20) NOT NULL,
  `product image` varchar(999) NOT NULL,
  `category` varchar(999) NOT NULL,
  `sku number` varchar(111) NOT NULL,
  `price` varchar(111) NOT NULL,
  `description` varchar(999) NOT NULL,
  `specification` varchar(999) NOT NULL,
  `customer review` varchar(999) NOT NULL,
  `status` varchar(11) NOT NULL,
  `action` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_product_review`
--

CREATE TABLE `tbl_mst_product_review` (
  `review_id` bigint(10) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `product_review_title` varchar(50) NOT NULL,
  `product_review_rating` int(6) NOT NULL,
  `product_review_published` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled',
  `product_review_Updatedate` datetime NOT NULL,
  `product_review_content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Product review master details';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_return_payment_details`
--

CREATE TABLE `tbl_mst_return_payment_details` (
  `return_PaymentId` bigint(20) NOT NULL,
  `Vendor_ID` varchar(20) DEFAULT NULL,
  `order_id` varchar(20) DEFAULT NULL,
  `product_id` varchar(20) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `return_Payment_Month` varchar(20) DEFAULT NULL,
  `return_Payment_amount` float DEFAULT NULL,
  `return_Payment_Paid` float DEFAULT NULL,
  `return_Payment_Status` varchar(50) DEFAULT NULL,
  `return_Payment_Mode` varchar(20) DEFAULT NULL,
  `return_payment_user_bankdetails` varchar(200) DEFAULT NULL,
  `return_Payment_TransNo` varchar(50) DEFAULT NULL,
  `return_Payment_Date` date DEFAULT NULL,
  `return_Payment_Updatedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Return Payment details Master Table';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_shopping_session`
--

CREATE TABLE `tbl_mst_shopping_session` (
  `shopping_id` varchar(50) NOT NULL,
  `shopping_session_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `shopping_total` varchar(500) NOT NULL,
  `shopsession_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `shopsession_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `shopsession_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_user_details`
--

CREATE TABLE `tbl_mst_user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_emailid` varchar(255) NOT NULL,
  `user_mobileno` varchar(100) NOT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_state` varchar(255) DEFAULT NULL,
  `user_district` varchar(255) DEFAULT NULL,
  `user_pincode` varchar(255) DEFAULT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_Cpassword` varchar(40) NOT NULL,
  `user_regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_updated_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_user_order_details`
--

CREATE TABLE `tbl_mst_user_order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL COMMENT 'point to public_users ID',
  `product_id` varchar(255) NOT NULL,
  `product_name` text NOT NULL,
  `price` float NOT NULL,
  `billing_Fname` varchar(255) DEFAULT NULL,
  `billing_Lname` varchar(255) DEFAULT NULL,
  `billing_address1` varchar(255) NOT NULL,
  `billing_address2` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_state` varchar(255) DEFAULT NULL,
  `billing_zipcode` varchar(255) DEFAULT NULL,
  `billing_country` varchar(255) DEFAULT NULL,
  `billing_mobile` decimal(10,0) NOT NULL,
  `billing_emailid` varchar(255) DEFAULT NULL,
  `ship_Fname` varchar(255) DEFAULT NULL,
  `ship_Lname` varchar(255) DEFAULT NULL,
  `ship_address1` varchar(255) NOT NULL,
  `ship_address2` varchar(255) DEFAULT NULL,
  `ship_city` varchar(255) DEFAULT NULL,
  `ship_state` varchar(255) DEFAULT NULL,
  `ship_postcode` varchar(255) DEFAULT NULL,
  `ship_country` varchar(255) DEFAULT NULL,
  `ship_mobile` decimal(10,0) NOT NULL,
  `ship_emailid` varchar(255) DEFAULT NULL,
  `order_date` int(10) UNSIGNED NOT NULL,
  `order_referrer` varchar(255) NOT NULL,
  `order_clean_referrer` varchar(255) NOT NULL,
  `order_notes` varchar(255) DEFAULT NULL,
  `order_payment_type` varchar(255) NOT NULL,
  `order_payment_status` varchar(10) DEFAULT NULL,
  `vendor_id` varchar(255) NOT NULL,
  `order_processed` tinyint(1) NOT NULL DEFAULT 0,
  `order_viewed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'viewed status is change when change processed status',
  `order_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `coupon_code` varchar(20) DEFAULT NULL,
  `order_shipped` varchar(20) NOT NULL,
  `order_trackingnumber` varchar(100) DEFAULT NULL,
  `order_items` varchar(255) NOT NULL,
  `shipping_type` varchar(255) NOT NULL,
  `order_cancelled` tinyint(4) NOT NULL DEFAULT 0,
  `order_returned` tinyint(4) NOT NULL DEFAULT 0,
  `cancel_order_id` varchar(255) DEFAULT NULL,
  `return_order_id` varchar(255) DEFAULT NULL,
  `order_invoice_number` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_user_payment_details`
--

CREATE TABLE `tbl_mst_user_payment_details` (
  `user_payment_id` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `vendor_id` varchar(50) NOT NULL,
  `user_payment_total` float NOT NULL,
  `user_payment_mode` varchar(50) NOT NULL,
  `user_payment_transactionNo` varchar(100) DEFAULT NULL,
  `user_online_trans_date` datetime DEFAULT NULL,
  `user_payment_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_payment_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_payment_status` varchar(50) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_vendor_details`
--

CREATE TABLE `tbl_mst_vendor_details` (
  `vendor_id` varchar(50) NOT NULL,
  `vendor_name` varchar(50) DEFAULT NULL,
  `vendor_url` varchar(50) NOT NULL,
  `vendor_emailid` varchar(50) NOT NULL,
  `vendor_mobileno` varchar(50) NOT NULL,
  `vendor_address1` varchar(500) NOT NULL,
  `vendor_address2` varchar(500) DEFAULT NULL,
  `vendor_state` varchar(50) NOT NULL,
  `vendor_district` varchar(50) NOT NULL,
  `vendor_city` varchar(50) NOT NULL,
  `vendor_pincode` varchar(10) NOT NULL,
  `vendor_password` varchar(100) NOT NULL,
  `vendor_Cpassword` varchar(255) NOT NULL,
  `vendor_reg_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `vendor_reg_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `vendor_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled',
  `vendor_bank_details` varchar(255) DEFAULT NULL,
  `vendor_kyc_documents` varchar(255) DEFAULT NULL,
  `vendor_kyc_documents_folder` varchar(255) DEFAULT NULL,
  `vendor_org_name` varchar(255) DEFAULT NULL,
  `vendor_gstin_details` varchar(255) DEFAULT NULL,
  `vendor_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_vendor_review`
--

CREATE TABLE `tbl_mst_vendor_review` (
  `vendor_review_id` bigint(10) NOT NULL,
  `vendor_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `vendor_review_title` varchar(50) NOT NULL,
  `vendor_review_rating` int(6) NOT NULL,
  `vendor_review_published` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled',
  `vendor_review_Updatedate` datetime NOT NULL,
  `vendor_review_content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Vendor review master details';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_vendor_staffdetails`
--

CREATE TABLE `tbl_mst_vendor_staffdetails` (
  `Vendor_Staff_ID` bigint(10) NOT NULL,
  `Vendor_Staff_FName` varchar(50) DEFAULT NULL,
  `Vendor_Staff_SName` varchar(50) DEFAULT NULL,
  `Vendor_Staff_DOB` date DEFAULT NULL,
  `Vendor_Staff_FatherName` varchar(50) DEFAULT NULL,
  `Vendor_Staff_MobileNo` varchar(50) DEFAULT NULL,
  `Vendor_Staff_EMailid` varchar(50) DEFAULT NULL,
  `Vendor_Staff_Gender` varchar(10) DEFAULT NULL,
  `Vendor_Staff_PerAddress_Doorno` varchar(50) DEFAULT NULL,
  `Vendor_Staff_PerAddress_Street` varchar(50) DEFAULT NULL,
  `Vendor_Staff_PerAddress_Village` varchar(50) DEFAULT NULL,
  `Vendor_Staff_PerAddress_City` varchar(50) DEFAULT NULL,
  `Vendor_Staff_PerAddress_District` varchar(50) DEFAULT NULL,
  `Vendor_Staff_PerAddress_State` varchar(50) DEFAULT NULL,
  `Vendor_Staff_PerAddress_Country` varchar(50) DEFAULT NULL,
  `Vendor_Staff_PerAddress_Pin` bigint(20) DEFAULT NULL,
  `Vendor_Staff_IdentityProof` varchar(50) DEFAULT NULL,
  `Vendor_Staff_IdentityProof_Number` varchar(50) DEFAULT NULL,
  `Vendor_Staff_BankDetails` varchar(100) DEFAULT NULL,
  `Vendor_Staff_Qualifications` varchar(50) DEFAULT NULL,
  `Vendor_Staff_Experiencedetails` varchar(50) DEFAULT NULL,
  `Vendor_Staff_Currentworkplace` varchar(50) DEFAULT NULL,
  `Vendor_Staff_previousworkplace` varchar(50) DEFAULT NULL,
  `Vendor_Staff_Designation` varchar(50) DEFAULT NULL,
  `Vendor_Staff_DOJ` date DEFAULT NULL,
  `Vendor_Staff_salary` float DEFAULT NULL,
  `Vendor_Staff_bank_details` varchar(100) DEFAULT NULL,
  `Vendor_Staff_Photo` binary(200) DEFAULT NULL,
  `Vendor_Staff_CertificatreImage` binary(200) DEFAULT NULL,
  `Vendor_Staff_Updatedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Vendor Staff Details Master Table';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_wishlist`
--

CREATE TABLE `tbl_mst_wishlist` (
  `wishlist_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `wishlist_total` varchar(500) NOT NULL,
  `wishlist_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `wishlist_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `wishlist_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(99) NOT NULL,
  `mobile_number` varchar(99) NOT NULL,
  `email_address` varchar(99) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `mobile_number`, `email_address`, `password`) VALUES
(1, 'nila', '12345678', 'nila@gmail.com', '12345'),
(3, '1234567890', '9876543210', '1234567890', '123456'),
(4, 'v', '9876543210', 'admin1@gmail.com', '123'),
(5, 'venkat', '9876543210', 'admin1@gmail.com', 'vv'),
(6, 'nila', '9094590173', 'admin@gmail.com', '1234'),
(12, 'sudip', '9876543210', 'admin1@gmail.com', '111'),
(20, 'niju', '9876543210', 'niju@gmail.com', 'qwe'),
(21, 'pradeep', '9876543210', 'pradeep@gmail.com', '0987'),
(22, 'wwww', 'wwww', 'www', 'www'),
(23, 'cavifapila', '8558485989', 'tubuxohuj@mailinator.com', 'Pa$$w0rd!'),
(24, 'cavifapila', '8558485989', 'tubuxohuj@mailinator.com', 'Pa$$w0rd!'),
(25, 'cavifapila', '8558485989', 'tubuxohuj@mailinator.com', 'Pa$$w0rd!'),
(26, 'cybijedi', '6379485858', 'tubuxohuj@mailinator.com', '123456899'),
(27, 'cybijedi', '6379485858', 'tubuxohuj@mailinator.com', '12345678990'),
(28, 'cybijedi', '6379485858', 'tubuxohuj@mailinator.com', '12345678990'),
(29, 'cymogyv', '7898394858', 'gihem@mailinator.com', 'Pa$$w0rd!'),
(30, 'cymogyv', '7898394858', 'gihem@mailinator.com', 'Pa$$w0rd!'),
(31, 'duduse', '7894738493', 'huroto@mailinator.com', 'Pa$$w0rd!'),
(32, 'dijixeqih', '7893485868', 'lecyvu@mailinator.com', 'Pa$$w0rd!'),
(33, 'dijixeqih', '7893485868', 'lecyvu@mailinator.com', 'Pa$$w0rd!'),
(34, 'dijixeqih', '7893485868', 'lecyvu@mailinator.com', 'Pa$$w0rd!'),
(35, 'dijixeqih', '7893485868', 'lecyvu@mailinator.com', 'Pa$$w0rd!'),
(36, 'vazuqyjegi', '9830234939', 'cuqovirivy@mailinator.com', 'Pa$$w0rd!'),
(37, 'mysixuli', '8964567890', 'lihaje@mailinator.com', 'Pa$$w0rd!'),
(38, 'rijij', '8796246767', 'myqed@mailinator.com', 'Pa$$w0rd!'),
(39, 'gocemyl', '8969596859', 'tafego@mailinator.com', 'Pa$$w0rd!'),
(40, 'nodygivag', '9087897898', 'nogicy@mailinator.com', 'Pa$$w0rd!'),
(41, 'nodygivag', '9087897898', 'nogicy@mailinator.com', 'Pa$$w0rd!'),
(42, 'nodygivag', '9087897898', 'nogicy@mailinator.com', 'Pa$$w0rd!'),
(43, 'nodygivag', '9087897898', 'nogicy@mailinator.com', 'Pa$$w0rd!'),
(44, 'nodygivag', '9087897898', 'nogicy@mailinator.com', 'Pa$$w0rd!'),
(45, 'nodygivag', '9087897898', 'nogicy@mailinator.com', 'Pa$$w0rd!'),
(46, 'nodygivag', '9087897898', 'nogicy@mailinator.com', 'Pa$$w0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE `vendor_details` (
  `vendor_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pan_no` varchar(10) DEFAULT NULL,
  `pan_card_img` varchar(255) DEFAULT NULL,
  `aadhar_no` varchar(12) DEFAULT NULL,
  `aadhar_front_img` varchar(255) DEFAULT NULL,
  `aadhar_back_img` varchar(255) DEFAULT NULL,
  `gst_no` varchar(15) DEFAULT NULL,
  `gst_certificate_img` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`vendor_id`, `image`, `name`, `phone`, `email`, `city`, `state`, `pincode`, `address`, `pan_no`, `pan_card_img`, `aadhar_no`, `aadhar_front_img`, `aadhar_back_img`, `gst_no`, `gst_certificate_img`, `join_date`, `password`, `confirm_password`, `created_at`) VALUES
(1, 'banner.jpg', '39vf71kZjt', '6379873628', 'admin@gmail.com', '6u9ynPLwSS', 'W89TAW1iAF', '861642', 'vsxMPH3dx9', 'ABCDE1234A', 'FeaturedIndiaGate.png', '232345456565', 'fund_collect.jpg', 'indian-1717192_1920.jpg', 'AB1234567890123', 'pexels-ahmed-akacha-6478551.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:10:18'),
(2, 'banner.jpg', 'D4KOtxFrOc', '6379873628', 'admin@gmail.com', 'JdQSQ2eAdB', 'odh9549blU', '861642', '0WkZA8zhyS', 'ABCDE1234A', 'FB_IMG_1613139113697-scale-2.jpg', '232345456565', 'FeaturedIndiaGate.png', 'fund_collect.jpg', 'AB1234567890123', 'indian-1717192_1920.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:18:38'),
(3, 'banner.jpg', 'U9atRDvbi4', '6379873628', 'admin@gmail.com', '7jMmLEvU8q', 'jtV19TxUOj', '861642', 'ygm8Wra5DS', 'ABCDE1234A', 'FeaturedIndiaGate.png', '232345456565', 'fund_collect.jpg', 'FeaturedIndiaGate.png', 'AB1234567890123', 'pexels-ahmed-akacha-6478551.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:21:26'),
(4, 'banner.jpg', 'U9atRDvbi4', '6379873628', 'admin@gmail.com', '7jMmLEvU8q', 'jtV19TxUOj', '861642', 'ygm8Wra5DS', 'ABCDE1234A', 'FeaturedIndiaGate.png', '232345456565', 'fund_collect.jpg', 'FeaturedIndiaGate.png', 'AB1234567890123', 'pexels-ahmed-akacha-6478551.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:21:26'),
(5, 'banner.jpg', 'NpGmbX7242', '6379873628', 'admin@gmail.com', 'zvpI3R39Bw', 'myuUvhIzmm', '861642', 'cS6l6UKiew', 'ABCDE1234A', 'FB_IMG_1613139113697-scale-2.jpg', '232345456565', 'FeaturedIndiaGate.png', 'fund_collect.jpg', 'AB1234567890123', 'indian-1717192_1920.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:28:26'),
(6, 'banner.jpg', 'lY7kA5Wizh', '6379873628', 'admin@gmail.com', 'Vr0wKLft2g', 'n0dpUj8vty', '861642', 'SIecA0rQXJ', 'ABCDE1234A', 'FB_IMG_1613139113697-scale-2.jpg', '232345456565', 'FeaturedIndiaGate.png', 'fund_collect.jpg', 'AB1234567890123', 'indian-1717192_1920.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:34:13'),
(7, 'banner.jpg', 'ebueJDXyIm', '6379873628', 'admin@gmail.com', 'wn1FWgKx4F', 'BgmOZ4ouqG', '861642', 'mlImEoeOBs', 'ABCDE1234A', 'FB_IMG_1613139113697-scale-2.jpg', '232345456565', 'fund_collect.jpg', 'indian-1717192_1920.jpg', 'AB1234567890123', 'pexels-ahmed-akacha-6478551.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:44:43'),
(8, 'banner.jpg', 'NOIwKBvXKu', '6379873628', 'admin@gmail.com', 'z6U23VxqYe', 'gKdPBkKX6h', '861642', 'dIfMbMiOvB', 'ABCDE1234A', 'FB_IMG_1613139113697-scale-2.jpg', '232345456565', 'FeaturedIndiaGate.png', 'fund_collect.jpg', 'AB1234567890123', 'indian-1717192_1920.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:49:09'),
(9, 'banner.jpg', 'NOIwKBvXKu', '6379873628', 'admin@gmail.com', 'z6U23VxqYe', 'gKdPBkKX6h', '861642', 'dIfMbMiOvB', 'ABCDE1234A', 'FB_IMG_1613139113697-scale-2.jpg', '232345456565', 'FeaturedIndiaGate.png', 'fund_collect.jpg', 'AB1234567890123', 'indian-1717192_1920.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:50:28'),
(10, 'banner.jpg', 'NOIwKBvXKu', '6379873628', 'admin@gmail.com', 'z6U23VxqYe', 'gKdPBkKX6h', '861642', 'dIfMbMiOvB', 'ABCDE1234A', 'FB_IMG_1613139113697-scale-2.jpg', '232345456565', 'FeaturedIndiaGate.png', 'fund_collect.jpg', 'AB1234567890123', 'indian-1717192_1920.jpg', '2023-05-17', '123456', '123456', '2023-05-17 05:51:47'),
(11, 'wp7424678-child-labour-wallpapers.jpg', 'vicky', '6379873628', 'admin@gmail.com', 'Ylp02i4FmE', 'Xjjv8J7er2', '861642', '80bUOMGNCE', 'ABCDE1234A', 'banner.jpg', '232345456565', 'fund_collect.jpg', 'FeaturedIndiaGate.png', 'AB1234567890123', 'pexels-quang-nguyen-vinh-6710949.jpg', '2023-05-17', '123456', '123456', '2023-05-17 11:16:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid_product_details`
--
ALTER TABLE `bid_product_details`
  ADD PRIMARY KEY (`cards_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`cards_id`);

--
-- Indexes for table `catalog_product_details`
--
ALTER TABLE `catalog_product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `deal_product_details`
--
ALTER TABLE `deal_product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `invest_details`
--
ALTER TABLE `invest_details`
  ADD PRIMARY KEY (`invest_id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `largecards`
--
ALTER TABLE `largecards`
  ADD PRIMARY KEY (`largecards_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor_details`
--
ALTER TABLE `vendor_details`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid_product_details`
--
ALTER TABLE `bid_product_details`
  MODIFY `cards_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `cards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `catalog_product_details`
--
ALTER TABLE `catalog_product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `deal_product_details`
--
ALTER TABLE `deal_product_details`
  MODIFY `product_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invest_details`
--
ALTER TABLE `invest_details`
  MODIFY `invest_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `largecards`
--
ALTER TABLE `largecards`
  MODIFY `largecards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `vendor_details`
--
ALTER TABLE `vendor_details`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
