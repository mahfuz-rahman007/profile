-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 06:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `about_text` text DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `freelance` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `position_type` text DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `age`, `residence`, `address`, `about_text`, `mail`, `phone`, `freelance`, `avatar`, `position_type`, `latitude`, `longitude`, `created_at`, `updated_at`, `resume`) VALUES
(1, 'James Bond', 35, 'USA, London', '7th street, Mirpur 10,Dhaka', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.', 'jamesbond@gmail.com', '+0123 123 856', 'Available', 'avatar_1653209998782618067.png', 'Web Designer & Web Developer', NULL, NULL, NULL, '2022-05-23 07:21:22', 'resume_1653312082588560421.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$xaeEV567O8Y0gRjskYhX0edFcfP719Sv9vtpn4Wf6uMHgbAjr6VmC', 'adminProfile16531916621847456461.png', NULL, '2022-05-21 21:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `bcategories`
--

CREATE TABLE `bcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bcategories`
--

INSERT INTO `bcategories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 1, '2022-01-16 23:18:58', '2022-01-16 23:26:38'),
(2, 'Web Design', 1, '2022-01-16 23:19:08', '2022-01-16 23:26:21'),
(3, 'Data Management', 1, '2022-01-16 23:19:51', '2022-01-16 23:19:51'),
(5, 'UI/UX Deigner', 1, '2022-01-16 23:20:13', '2022-01-16 23:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `bcategory_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `share_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `bcategory_id`, `title`, `slug`, `main_image`, `content`, `status`, `meta_keywords`, `meta_description`, `share_code`, `created_at`, `updated_at`) VALUES
(1, 5, '5 reasons why your website needs more whitespace', '5-reasons-why-your-website-needs-more-whitespace', 'blog_1653222222127024194.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 'js,php', '5 reasons why your website needs more whitespace', NULL, '2022-01-17 02:15:02', '2022-05-22 06:23:42'),
(2, 3, '7 steps to optimize your website for Millennials', '7-steps-to-optimize-your-website-for-millennials', 'blog_16532222081358411273.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 'js,php,css', '7 steps to optimize your website for Millennials', NULL, '2022-01-17 02:19:46', '2022-05-22 06:23:28'),
(3, 3, '8 Things To Know When Designing Augmented', '8-things-to-know-when-designing-augmented', 'blog_1653222194531192468.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 'python,ai', 'It is a long established fact that a reader will be distracted', NULL, '2022-01-17 02:21:03', '2022-05-22 06:23:14'),
(4, 2, '9 Personal Portfolio HTML Template', '9-personal-portfolio-html-template', 'blog_1653222184300383354.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 'html,js,c*', 'and a search for \'lorem ipsum\' will uncover many web sites', NULL, '2022-01-17 02:22:45', '2022-05-22 06:23:04'),
(5, 1, 'A series of iOS 7 inspire vector Questions Ask icons.', 'a-series-of-ios-7-inspire-vector-questions-ask-icons', 'blog_1653222168994779268.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 'android,ios', 'A series of iOS 7 inspire vector Questions Ask icons.', NULL, '2022-01-17 02:23:52', '2022-05-22 06:22:48'),
(6, 2, '10 One Page Parallax where only Html, Css, Javascript are used', '10-one-page-parallax-where-only-html-css-javascript-are-used', 'blog_1653222157145390296.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 'bootstrap,app,parallax', '10 One Page Parallax', NULL, '2022-01-17 02:25:08', '2022-05-23 11:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, '16532234581654755571.png', 'https://laravel.com/', '2022-01-15 00:48:27', '2022-05-22 06:44:18'),
(2, '16532234651835496127.png', 'https://laracasts.com/', '2022-01-15 00:49:10', '2022-05-22 06:44:25'),
(3, '1653223472355651755.png', 'https://laracasts.com/', '2022-01-15 00:49:27', '2022-05-22 06:44:32'),
(4, '16532234811191285479.png', 'https://laravel.com/', '2022-01-15 00:49:43', '2022-05-22 06:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `date_to` varchar(255) DEFAULT NULL,
  `current` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institution`, `field`, `description`, `from_date`, `date_to`, `current`, `created_at`, `updated_at`) VALUES
(3, 'The University of Alabama', 'BSC IN CSE', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia', '2017', '2019', NULL, '2022-01-14 22:56:52', '2022-05-23 06:56:04'),
(4, 'University of the oxford', 'MSC in CSE', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia.', '2020', NULL, 1, '2022-01-14 23:01:45', '2022-05-23 06:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `date_to` varchar(255) DEFAULT NULL,
  `current` tinyint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company`, `field`, `description`, `from_date`, `date_to`, `current`, `created_at`, `updated_at`) VALUES
(3, 'Ideal Devs', 'Senior Ui/Ux Designer', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia', '2019', '2020', NULL, '2022-01-15 00:02:57', '2022-05-23 07:04:43'),
(4, 'Ideal Devs', 'Web Designer', 'The University of British Columbia is a public research university with campuses in Vancouver and Kelowna, British Columbia', '2021', NULL, 1, '2022-01-15 00:03:36', '2022-05-23 07:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `funfacts`
--

CREATE TABLE `funfacts` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funfacts`
--

INSERT INTO `funfacts` (`id`, `icon`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, '16532103261796244452.png', 'Experience Year', 5, '2022-01-14 19:59:09', '2022-05-22 03:05:26'),
(2, '1653210353471735906.png', 'Happy Clients', 2344, '2022-01-14 19:59:32', '2022-05-22 03:05:53'),
(3, '1653210363377791245.png', 'Work Done', 345, '2022-01-14 19:59:56', '2022-05-22 03:06:03'),
(4, '1653210373315487403.png', 'Awards Won', 89, '2022-01-14 20:00:25', '2022-05-22 03:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `submission_date` varchar(255) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `service_id`, `title`, `slug`, `featured_image`, `client_name`, `content`, `start_date`, `submission_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sova – Resume / CV / Portfolio CMS', 'sova-resume-cv-portfolio-cms', 'portfolio_16532419281292671012.jpg', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Sova – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', '01/01/2022', '01/02/2022', 1, '2022-01-16 03:24:57', '2022-05-22 11:52:08'),
(2, 1, 'Businesio - One Page Parallax', 'businesio-one-page-parallax', 'portfolio_16532419161116771923.jpg', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Sova – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', '01/03/2022', '01/04/2022', 1, '2022-01-16 03:33:39', '2022-05-22 11:51:56'),
(3, 3, 'Symphony - One Page Parallax', 'symphony-one-page-parallax', 'portfolio_16532419051757861837.jpg', 'Themeforest', '<p><span style=\"font-weight: inherit; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 20px;\">Porichoy – Resume / CV / Portfolio CMS</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', '01/06/2022', '01/07/2022', 1, '2022-01-16 03:34:46', '2022-05-24 10:12:48'),
(4, 5, 'Applus - App Landing Page', 'applus-app-landing-page', 'portfolio_1653241892844292408.jpg', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Porichoy – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', '01/13/2022', '01/15/2022', 1, '2022-01-16 03:35:49', '2022-05-22 11:53:47'),
(5, 4, 'Porichoy - Personal Portfolio HTML Template', 'porichoy-personal-portfolio-html-template', 'portfolio_16532418831751602673.png', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Porichoy – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', '01/07/2022', '01/11/2022', 1, '2022-01-16 03:36:52', '2022-05-22 11:51:23'),
(6, 7, 'Mprime - Business and Corporate HTML Template', 'mprime-business-and-corporate-html-template', 'portfolio_16532417781952015256.jpg', 'Themeforest', '<h2 id=\"item-description__porichoy-resume-cv-portfolio-cms\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><span style=\"font-weight: inherit;\">Porichoy – Resume / CV / Portfolio CMS</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Professional Resume, CV, Portfolio, vCard, template. Make it follow your personal brand and let your web presence stand out. Template is best suited for coder, photographer, web developer, personal, portfolio, freelancer, artworks, art, artist, web designer, illustrators, designer, developer, programmer or any other digital professional. Porichoy Has Amazing animation effects emphasize your creativity.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold; font-size: 20px;\">Security:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Cross-Site Request Forgery (CSRF) Prevention</li><li>Cross-Site Scripting (XSS) Prevention</li><li>Password Hashing</li><li>Avoiding SQL Injection</li></ul><h2 id=\"item-description__features\" style=\"margin: 30px 0px 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: inherit; line-height: 30px; color: rgb(84, 84, 84); font-size: 20px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(212, 212, 212);\"><strong style=\"font-weight: bold;\">Features:</strong></h2><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 35px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li>Awesome Design for Website and Admin Panel</li><li>Clean Code with High Performance.</li><li>Easy To Customization.</li><li>Supported Google Analytics.</li><li>Disqus Comments with awesome reactions and more.</li><li>Powerful Control Panel system with full options.</li><li>Only admin role can login admin pane.</li><li><strong style=\"font-weight: bold;\">SEO</strong>&nbsp;Option</li><li>Fontawesome 5 Icon Picker</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Website Color Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Social Links add Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Blog (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Skills (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Projects (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Education History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Work History (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Testimonial (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Clients (add, edit, delete, view) Option.</li><li><strong style=\"font-weight: bold;\">Unlimited</strong>&nbsp;Services (add, edit, delete, view) Option.</li><li>24/7 Support</li></ul>', '01/11/2022', '01/12/2022', 1, '2022-01-16 03:37:41', '2022-05-22 11:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `portfolio_id`, `image`, `created_at`, `updated_at`) VALUES
(32, 6, 'portfolio_116532417781471540474.jpg', '2022-05-22 11:49:38', '2022-05-22 11:49:38'),
(33, 6, 'portfolio_21653241778748918791.jpg', '2022-05-22 11:49:38', '2022-05-22 11:49:38'),
(34, 6, 'portfolio_31653241778495345771.jpg', '2022-05-22 11:49:38', '2022-05-22 11:49:38'),
(36, 5, 'portfolio_116532419621631763245.jpg', '2022-05-22 11:52:42', '2022-05-22 11:52:42'),
(37, 5, 'portfolio_21653241962144076636.jpg', '2022-05-22 11:52:42', '2022-05-22 11:52:42'),
(38, 5, 'portfolio_316532419621796273530.jpg', '2022-05-22 11:52:42', '2022-05-22 11:52:42'),
(39, 4, 'portfolio_11653242006233758987.jpg', '2022-05-22 11:53:26', '2022-05-22 11:53:26'),
(41, 4, 'portfolio_316532420062013719820.jpg', '2022-05-22 11:53:26', '2022-05-22 11:53:26'),
(42, 4, 'portfolio_41653242006337008355.jpg', '2022-05-22 11:53:26', '2022-05-22 11:53:26'),
(43, 3, 'portfolio_116532420411547828132.jpg', '2022-05-22 11:54:01', '2022-05-22 11:54:01'),
(44, 3, 'portfolio_21653242041318513245.jpg', '2022-05-22 11:54:01', '2022-05-22 11:54:01'),
(45, 3, 'portfolio_316532420411661924129.jpg', '2022-05-22 11:54:01', '2022-05-22 11:54:01'),
(46, 2, 'portfolio_11653242082639142220.jpg', '2022-05-22 11:54:42', '2022-05-22 11:54:42'),
(47, 2, 'portfolio_21653242082946638003.jpg', '2022-05-22 11:54:42', '2022-05-22 11:54:42'),
(48, 2, 'portfolio_316532420821984173224.jpg', '2022-05-22 11:54:42', '2022-05-22 11:54:42'),
(49, 1, 'portfolio_11653242114184386529.jpg', '2022-05-22 11:55:14', '2022-05-22 11:55:14'),
(50, 1, 'portfolio_21653242114724206434.jpg', '2022-05-22 11:55:14', '2022-05-22 11:55:14'),
(51, 1, 'portfolio_31653242114573621924.jpg', '2022-05-22 11:55:14', '2022-05-22 11:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` int(11) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `currency`, `price`, `plan_name`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, '$', '30', 'Basic Plan', '<ul><li>15 HTML Pages</li><li>3 Home Pages</li><li>CMS Version&nbsp;</li><li>24/7 Support</li></ul>', 1, '2022-01-15 07:33:24', '2022-01-15 07:33:24'),
(2, '$', '50', 'Standard Plan', '<ul><li>20 HTML Pages</li><li>3 Home Pages</li><li>CMS Version Not Available</li><li>24/7 Support</li></ul>', 1, '2022-01-15 07:34:02', '2022-01-15 07:34:02'),
(3, '$', '99', 'Premium Plan', '<ul><li>30 HTML Pages</li><li>3 Home Pages</li><li>CMS Version Not Available</li><li>24/7 Support</li></ul>', 1, '2022-01-15 07:34:39', '2022-01-15 07:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `scategories`
--

CREATE TABLE `scategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill_type` varchar(255) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scategories`
--

INSERT INTO `scategories` (`id`, `name`, `skill_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cooding Skill', 'circle', NULL, '2022-01-15 04:56:09', '2022-05-23 05:47:20'),
(2, 'Language Skills', 'line', NULL, '2022-01-15 05:00:00', '2022-05-23 06:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `sectiontitles`
--

CREATE TABLE `sectiontitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(100) DEFAULT NULL,
  `about_subtitle` varchar(300) DEFAULT NULL,
  `skill_title` varchar(100) DEFAULT NULL,
  `skill_subtitle` varchar(300) DEFAULT NULL,
  `funfact_title` varchar(100) DEFAULT NULL,
  `funfact_subtitle` varchar(300) DEFAULT NULL,
  `resume_title` varchar(100) DEFAULT NULL,
  `resume_subtitle` varchar(300) DEFAULT NULL,
  `experience_title` varchar(100) DEFAULT NULL,
  `education_title` varchar(100) DEFAULT NULL,
  `portfolio_title` varchar(100) DEFAULT NULL,
  `portfolio_subtitle` varchar(300) DEFAULT NULL,
  `pricingplan_title` varchar(100) DEFAULT NULL,
  `pricingplan_subtitle` varchar(300) DEFAULT NULL,
  `blog_title` varchar(100) DEFAULT NULL,
  `blog_subtitle` varchar(300) DEFAULT NULL,
  `service_title` varchar(100) DEFAULT NULL,
  `service_subtitle` varchar(300) DEFAULT NULL,
  `contact_title` varchar(100) DEFAULT NULL,
  `contact_subtitle` varchar(300) DEFAULT NULL,
  `testimonial_title` varchar(100) DEFAULT NULL,
  `testimonial_subtitle` varchar(300) DEFAULT NULL,
  `client_title` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sectiontitles`
--

INSERT INTO `sectiontitles` (`id`, `about_title`, `about_subtitle`, `skill_title`, `skill_subtitle`, `funfact_title`, `funfact_subtitle`, `resume_title`, `resume_subtitle`, `experience_title`, `education_title`, `portfolio_title`, `portfolio_subtitle`, `pricingplan_title`, `pricingplan_subtitle`, `blog_title`, `blog_subtitle`, `service_title`, `service_subtitle`, `contact_title`, `contact_subtitle`, `testimonial_title`, `testimonial_subtitle`, `client_title`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'SKILL', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'FUN FACT', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'RESUME', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'EXPERIENCE', 'EDUCATION', 'PORTFOLIO', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'PRICING PLAN', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'BLOG', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'SERVICE', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'CONTACT', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'TESTIMONIAL', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'CLIENT', '2022-03-21 07:59:13', '2022-05-23 11:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `description`, `image`, `featured_image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'web-design', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves.', '1653214442878019550.png', '16532144422033570591.jpg', 'Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp;', 1, '2022-01-15 23:04:34', '2022-05-22 04:14:02'),
(2, 'Web Development', 'web-development', 'Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves.', '16532144272082150757.png', '16532144271925704566.jpg', 'Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp', 1, '2022-01-15 23:06:34', '2022-05-22 04:13:48'),
(3, 'Data Management', 'data-management', 'Hopes lived by rooms oh in no death house. Contented direction september', '16532144041641515162.png', '165321440430501364.jpg', 'Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp', 1, '2022-01-15 23:07:26', '2022-05-22 04:13:24'),
(4, 'Seo', 'seo', 'Questions explained agreeable preferred strangers too him her son.', '16532143841912958400.png', '16532143841831764669.jpg', 'Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant', 1, '2022-01-15 23:08:15', '2022-05-22 04:13:04'),
(5, 'UI/UX Deigner', 'uiux-deigner', 'Yourself required no at thoughts delicate landlord it be. Branched dashwood', '1653214361260371868.png', '16532143611868150913.jpg', 'Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp', 1, '2022-01-15 23:09:09', '2022-05-22 04:12:41'),
(7, 'Software Developer', 'software-developer', 'seemed narrow be. Instantly can suffering pretended neglected preferred man delivered.', '1653214337515306113.png', '1653214337448993528.jpg', 'Questions explained agreeable preferred strangers too him her son. Set put shyness offices his females him distant. Improve has message besides shy himself cheered however how son. Quick judge other leave ask first chief her. Indeed or remark always silent seemed narrow be. Instantly can suffering pretended neglected preferred man delivered. Perhaps fertile brandon do imagine to cordial cottage.&nbsp;</p><p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at visited married in it pressed. By distrusts procuring be oh frankness existence believing instantly if. Doubtful on an juvenile as of servants insisted. Judge why maids led sir whose guest drift her point. Him comparison especially friendship was who sufficient attachment favourable how. Luckily but minutes ask picture man perhaps are inhabit. How her good all sang more why.&nbsp', 1, '2022-01-15 23:12:08', '2022-05-22 04:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `website_title` varchar(255) DEFAULT NULL,
  `base_color` varchar(255) DEFAULT NULL,
  `header_logo` varchar(255) DEFAULT NULL,
  `fav_icon` varchar(255) DEFAULT NULL,
  `copyright_text` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `is_disqus` int(3) DEFAULT NULL,
  `disqus_username` varchar(255) DEFAULT NULL,
  `is_tawkto` int(3) DEFAULT NULL,
  `tawk_to_api_key` varchar(255) DEFAULT NULL,
  `ishome` int(3) DEFAULT NULL,
  `isabout` int(3) DEFAULT NULL,
  `isservice` int(3) DEFAULT NULL,
  `isresume` int(3) DEFAULT NULL,
  `istestimonial` int(3) DEFAULT NULL,
  `isportfolio` int(3) DEFAULT NULL,
  `iscontact` int(3) DEFAULT NULL,
  `isfunfacts` int(3) DEFAULT NULL,
  `ispricingplan` int(3) DEFAULT NULL,
  `isclient` int(3) DEFAULT NULL,
  `is_resume_download` int(3) DEFAULT NULL,
  `is_home_social` int(3) DEFAULT NULL,
  `contact_mail` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_title`, `base_color`, `header_logo`, `fav_icon`, `copyright_text`, `meta_keywords`, `meta_description`, `is_disqus`, `disqus_username`, `is_tawkto`, `tawk_to_api_key`, `ishome`, `isabout`, `isservice`, `isresume`, `istestimonial`, `isportfolio`, `iscontact`, `isfunfacts`, `ispricingplan`, `isclient`, `is_resume_download`, `is_home_social`, `contact_mail`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Profile/Laravel CMS Resume', '841D84', 'header_logo_16420566001566577897.png', 'fav_icon_16531989641709115219.png', '<p>©&nbsp;<span style=\"font-size: 1rem;\">Copyright</span><span style=\"font-size: 1rem;\">&nbsp;<b>Profile</b>&nbsp;. All Rights Reserved 2022</span><br></p>', 'resume,cv,profile', 'Profile/Laravel/Resume', 1, 'profile', 1, '444', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'contact@profile.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55123.45903737264!2d90.32988700164705!3d23.81577436530529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c1c61277db%3A0xc7d18838730e2e59!2sMirpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1653210177097!5m2!1sen!2sbd\" width=\"100%\" height=\"300px\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, '2022-05-24 10:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `scategory_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `scategory_id`, `name`, `level`, `created_at`, `updated_at`) VALUES
(1, 1, 'HTML', 90, '2022-01-15 05:44:06', '2022-01-15 05:44:06'),
(2, 2, 'Bangla', 100, '2022-01-15 05:45:23', '2022-01-15 05:45:23'),
(3, 1, 'JS', 20, '2022-01-15 05:46:14', '2022-01-15 05:46:14'),
(4, 2, 'English', 70, '2022-01-15 05:46:30', '2022-01-15 05:46:30'),
(5, 1, 'CSS', 60, '2022-01-15 05:47:13', '2022-01-15 05:47:13'),
(6, 2, 'Hindi', 90, '2022-01-15 05:47:28', '2022-01-15 05:47:28'),
(7, 1, 'PHP', 40, '2022-01-15 05:47:57', '2022-01-15 05:47:57'),
(8, 2, 'France', 12, '2022-01-15 05:48:12', '2022-01-15 05:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-google', 'https://Google.com/', '2022-01-13 03:12:26', '2022-01-13 03:57:25'),
(2, 'fab fa-twitter', 'https://twitter.com/', '2022-01-13 03:13:10', '2022-01-13 03:57:37'),
(3, 'fab fa-skype', 'https://skype.com/', '2022-01-13 03:13:21', '2022-01-13 03:57:08'),
(4, 'fab fa-instagram', 'https://Instagram.com/', '2022-01-13 03:13:45', '2022-01-13 03:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `rating`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jameson', 'CEO at IdealDevs', 5, 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '16532200912004923518.jpg', '2022-01-16 00:18:00', '2022-05-22 05:48:11'),
(2, 'Harrison', 'DH at IdealDevs', 5, 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '16532200791210946311.jpg', '2022-01-16 00:18:44', '2022-05-22 05:47:59'),
(3, 'Jinea Khan', 'CEO of Facebook', 5, 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '16532200711465523438.jpg', '2022-01-16 00:19:13', '2022-05-22 05:47:51'),
(4, 'Jack Ripper', 'Ceo of Serial Killer Assosiation', 3, 'Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back.', '16532200631050897679.jpg', '2022-01-16 00:20:00', '2022-05-23 11:55:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcategories`
--
ALTER TABLE `bcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funfacts`
--
ALTER TABLE `funfacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scategories`
--
ALTER TABLE `scategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectiontitles`
--
ALTER TABLE `sectiontitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bcategories`
--
ALTER TABLE `bcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `funfacts`
--
ALTER TABLE `funfacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scategories`
--
ALTER TABLE `scategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sectiontitles`
--
ALTER TABLE `sectiontitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
