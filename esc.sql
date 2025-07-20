-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2025 at 12:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esc`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_06_29_110517_create_pages_table', 1),
(6, '2025_06_29_110527_create_page_items_table', 1),
(7, '2025_07_11_174134_add_sub_title_2_to_pages_table', 2),
(8, '2025_07_11_174135_add_sub_title_2_to_pages_table', 3),
(9, '2025_07_11_182011_add_page_id_to_page_items_table', 4),
(10, '2025_07_12_172147_create_projects_table', 5),
(11, '2025_07_12_172156_create_project_items_table', 5),
(12, '2025_07_12_181704_add_video_to_projects_table', 6),
(13, '2025_07_12_182821_create_settings_table', 7),
(14, '2025_07_12_184536_add_socails_to_settings_table', 8),
(15, '2025_07_13_122623_add_sub_title2_to_page_items_table', 9),
(16, '2025_07_13_164024_add_video2_to_pages_table', 10),
(17, '2025_07_17_162741_add_sub_title2_to_projects_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `video` char(255) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `sub_title` char(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_title2` char(255) DEFAULT NULL,
  `video2` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `image`, `image2`, `video`, `name`, `sub_title`, `text`, `created_at`, `updated_at`, `sub_title2`, `video2`) VALUES
(1, NULL, NULL, 'uploads/pages/video1752406543.mp4', 'DESIGN, DEVELOP, DELIVER', 'Strategic Web Design', 'As a New York web design agency, BOWEN® creates digital\r\n              experiences that connect strategy and design. We build websites\r\n              that drive results, combining creativity, technology, and SEO best\r\n              practices.', '2025-07-11 14:05:32', '2025-07-13 07:35:43', 'For new york', NULL),
(2, NULL, NULL, NULL, 'Modern Websites Built for', 'Growth and Performance', 'Dive into our recent work, where every project is a tailored\r\n              solution meticulously crafted to tackle the unique challenges at\r\n              hand.', '2025-07-11 14:26:56', '2025-07-13 09:01:53', NULL, NULL),
(3, 'uploads/pages/1752410989.webp', NULL, 'uploads/pages/video1752412491.mp4', 'What we do', 'and love', 'As strategic partners, we build impactful brands, creative strategies, and seamless experiences that adapt to your audience\'s evolving expectations.', '2025-07-13 08:45:57', '2025-07-13 09:18:21', NULL, NULL),
(4, NULL, NULL, NULL, 'Two Pricing Models.', 'One Approach.', 'Based in New York, our web design agency partners with ambitious\r\n          brands across the U.S. and beyond. We craft strategic websites that\r\n          tell your story, convert customers, and scale with you over time.', '2025-07-13 10:05:40', '2025-07-13 10:21:37', NULL, NULL),
(5, NULL, NULL, NULL, 'merqure', 'WHAT WE LOVE 😊, EXPERTISE 😊, WHAT WE LOVE 😊, EXPERTISE 😊, WHAT WE LOVE 😊, EXPERTISE 😊, WHAT WE LOVE 😊', NULL, '2025-07-13 10:13:49', '2025-07-13 10:13:49', 'WHAT WE LOVE 😊, EXPERTISE 😊, WHAT WE LOVE 😊, EXPERTISE 😊, WHAT WE LOVE 😊, EXPERTISE 😊, WHAT WE LOVE 😊', NULL),
(6, 'uploads/pages/1752417408.webp', 'uploads/pages/21752417408.bin', NULL, 'Learn more about us', 'America\'s Fastest-Growing', 'BOWEN has officially earned a coveted spot on the exclusive Inc. 5000, a milestone that reflects our journey from a local Long Island web design agency to a global leader in digital excellence.', '2025-07-13 10:36:01', '2025-07-13 10:36:48', NULL, NULL),
(7, NULL, NULL, 'uploads/pages/video1752417761.mp4', 'What\'s better for you?', 'Explore the comparison 1', 'Always Evolving', '2025-07-13 10:40:10', '2025-07-13 10:42:41', 'Explore the comparison 2', NULL),
(8, NULL, NULL, NULL, 'items', NULL, NULL, '2025-07-13 10:51:49', '2025-07-13 10:51:49', NULL, NULL),
(9, NULL, NULL, 'uploads/pages/video1752424709.mp4', 'The Latest , 2025', 'A Glimpse of', 'This quarter, we\'re reimagining the digital presence of a national media brand, launching a new site for a regional bank, and leading a full rebrand and website for a commercial real estate firm.', '2025-07-13 11:07:27', '2025-07-13 12:45:13', 'Q2 2025', 'uploads/pages/video21752425113.mp4'),
(10, NULL, NULL, NULL, 'ARE YOU READY?', 'let\'s do this', NULL, '2025-07-13 12:54:25', '2025-07-13 13:03:20', 'BOWEN® builds websites that scale.', NULL),
(11, NULL, NULL, NULL, 'Across all', 'Industries & Audiences', 'We craft impactful experiences for a connected world. Explore our custom web design, branding, & digital marketing portfolio.', '2025-07-15 13:30:33', '2025-07-15 13:30:33', NULL, NULL),
(12, NULL, NULL, NULL, 'menu', NULL, NULL, '2025-07-17 14:29:16', '2025-07-17 14:29:16', NULL, NULL),
(13, 'uploads/pages/1752782145.png', NULL, NULL, 'Meet BOWEN®, a Creative Digital Agency', 'Based in New York.', 'BOWEN® is a New York-based creative digital agency driven by innovation, strategy, and design. Our close-knit team of designers, engineers, and marketers partners with ambitious brands to craft impactful digital experiences and drive measurable growth.', '2025-07-17 15:55:03', '2025-07-17 15:58:09', NULL, NULL),
(14, NULL, NULL, 'uploads/pages/video1752782503.mp4', 'Partners for theDigital', 'Age.', 'Our creative digital agency has propelled the growth of our partners through innovation and creative strategy. We\'ve become a best-in-class team obsessed with shifting industries, elevating brands, and partnering with clients worldwide.', '2025-07-17 15:59:22', '2025-07-17 16:01:43', 'Book a Consultation', NULL),
(15, NULL, NULL, NULL, 'Two pricing models.', 'Zero bullshit.', 'We act as an extension of your team, offering web design and development services and digital marketing designed to scale. Whether you need a full-service partner or support on a specific project, our model adapts to fit your goals.', '2025-07-18 11:44:54', '2025-07-18 11:48:23', NULL, NULL),
(16, NULL, NULL, NULL, 'Why We', 'Think', 'Headquartered in New York, we partner with brands locally and nationally. Learn more about ourNYC digital agency services.', '2025-07-18 11:56:25', '2025-07-18 11:56:25', 'Know We\'re Better', NULL),
(17, NULL, NULL, NULL, 'Some friends we\'ve made', 'From start-ups to large-scale enterprises, our digital agency proudly partners', NULL, '2025-07-18 12:01:09', '2025-07-18 12:01:09', 'with ambitious brands and organizations who impact the world around us. Meltwater Logo', NULL),
(18, NULL, NULL, NULL, 'team', NULL, NULL, '2025-07-18 12:22:55', '2025-07-18 12:22:55', NULL, NULL),
(19, NULL, NULL, NULL, 'Approach', 'Two Pricing Models.', 'Whether you\'re looking for a long-term partner that functions as your full-time web and marketing arm, or looking to start with something more à la carte, our approach adapts to you.', '2025-07-18 14:41:48', '2025-07-18 14:42:34', 'One Approach.', NULL),
(20, NULL, NULL, NULL, 'Your Extended Team', 'Ongoing Partnership', 'Think of us as your on-demand marketing team. Tap into the skills you need, when you need them. One flat monthly fee gives you flexible access to our creative, technical, and strategic experts. We handle as much or as little as your priorities require, keeping momentum strong every month.', '2025-07-18 14:48:49', '2025-07-18 14:48:49', 'Book an intro call', NULL),
(21, NULL, NULL, NULL, 'Your Extended Team', 'TheRates', 'How We Price Partnerships', '2025-07-18 14:57:05', '2025-07-18 14:57:05', 'Book an intro call', NULL),
(22, NULL, NULL, NULL, 'Purpose-Built for Impact', 'High-Impact Projects', 'We deliver high-impact project-based solutions tailored to your goals. Whether you need support in a specific area or a larger initiative, we approach every project with craftsmanship, precision, and care. Each engagement is built around your exact needs.', '2025-07-18 15:04:24', '2025-07-18 15:04:24', 'Book an intro call', NULL),
(23, NULL, NULL, NULL, 'Two Pricing Models.', 'Find the Right Fit', 'Not sure which approach is best for your company? Here are a few scenarios that can guide you in determining the optimal choice.', '2025-07-18 15:12:48', '2025-07-18 15:12:48', 'Book an intro call', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_items`
--

CREATE TABLE `page_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `video` char(255) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `sub_title` char(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `sub_title2` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_items`
--

INSERT INTO `page_items` (`id`, `image`, `image2`, `video`, `name`, `sub_title`, `text`, `created_at`, `updated_at`, `page_id`, `sub_title2`) VALUES
(1, 'uploads/pages/1752341396.webp', NULL, NULL, 'Interaudi Bank', 'web design, mobile app , social media', 'Custom Website Design for EDCB bank', '2025-07-12 13:29:56', '2025-07-12 13:29:56', 2, NULL),
(2, 'uploads/pages/1752341551.jpg', NULL, NULL, 'Meltwater', 'Social media , Video Editing', 'Marketing Platform UX Overhaul for Meltwater', '2025-07-12 13:32:31', '2025-07-12 13:32:31', 2, NULL),
(3, 'uploads/pages/1752341677.jpg', NULL, NULL, 'RDP Advisory', 'Video , Social media', 'Branding for Financial Services', '2025-07-12 13:34:37', '2025-07-13 09:06:27', 2, NULL),
(4, 'uploads/pages/1752412964.jpg', NULL, NULL, 'Web Design & Development', NULL, 'Stunning, SEO optimized web design and website development that inspire users, enhance business growth, and amplify our partners\' missions.', '2025-07-13 08:47:01', '2025-07-13 09:22:44', 3, NULL),
(5, 'uploads/pages/1752413008.jpg', NULL, NULL, 'Digital Marketing', NULL, 'Strategic and success-driven digital marketing campaigns and search engine optimization solutions that engage your target audience, boost brand visibility, and achieve your objectives.', '2025-07-13 08:47:40', '2025-07-13 09:23:28', 3, NULL),
(6, 'uploads/pages/1752413068.jpg', NULL, NULL, 'Brand Identity', NULL, 'Distinctive, cohesive, and impactful brand identity design that resonates with audiences, strengthens presence, and embodies your values.', '2025-07-13 08:47:59', '2025-07-13 09:24:28', 3, NULL),
(7, 'uploads/pages/1752413077.jpg', NULL, NULL, 'Strategy & Consulting', NULL, 'Insightful, integrated, and innovative strategies that navigate digital landscapes, optimize online presence, and drive measurable results.', '2025-07-13 08:48:18', '2025-07-13 09:24:37', 3, NULL),
(8, 'uploads/pages/1752415658.webp', NULL, NULL, 'Ongoing Partnerships', 'web design, mobile app , social media', NULL, '2025-07-13 10:07:38', '2025-07-13 10:07:55', 4, 'We\'ve GotYou Covered.'),
(9, 'uploads/pages/1752415714.webp', NULL, NULL, 'Project-Based', 'web design, mobile app', 'The Just-RightApproach.', '2025-07-13 10:08:34', '2025-07-13 10:27:05', 4, 'The Just-RightApproach.'),
(10, NULL, NULL, NULL, 'Our Foundation is Tenacity.', NULL, 'As a New York web design agency, we approach every project with persistence and precision. From discovery to launch, we stay focused on solving complex challenges and delivering digital solutions that work. Our commitment doesn\'t end at delivery. We\'re here to help brands grow over time.', '2025-07-13 10:41:09', '2025-07-13 10:41:09', 7, NULL),
(11, 'uploads/pages/1752418452.jpg', NULL, NULL, 'Precision', 'Craftsmanship', 'Our dedication to meticulous detail ensures every aspect of our service culminates in seamless, unparalleled experiences.', '2025-07-13 10:54:12', '2025-07-13 10:54:12', 8, NULL),
(12, 'uploads/pages/1752418485.jpg', NULL, NULL, 'Uncompromised', 'Quality.', 'We relentlessly uphold the highest standards, delivering nothing less than unparalleled excellence that reflects the level of work that we\'re proud to deliver.', '2025-07-13 10:54:45', '2025-07-13 10:54:45', 8, NULL),
(13, 'uploads/pages/1752418519.jpg', NULL, NULL, '20+ Years', 'of Experience.', 'With 20 years in the field, our rich history shapes our expertise, ensuring unmatched acumen and proficiency in every service we provide.', '2025-07-13 10:55:19', '2025-07-13 10:55:19', 8, NULL),
(14, 'uploads/pages/1752418557.jpg', NULL, NULL, 'Client', 'Obsessed.', 'Every decision is driven by our obsession with client satisfaction, tailoring experiences that exceed expectations at every turn.', '2025-07-13 10:55:57', '2025-07-13 10:55:57', 8, NULL),
(15, 'uploads/pages/1752418589.jpg', NULL, NULL, 'Continuously', 'Adapting.', 'Our relentless pursuit of innovation means we\'re always adapting, ensuring we stay ahead of the curve to meet the future head-on.', '2025-07-13 10:56:29', '2025-07-13 10:56:29', 8, NULL),
(16, NULL, NULL, NULL, 'Careers At Bowen', 'Love , What You Do', NULL, '2025-07-13 12:46:58', '2025-07-13 12:46:58', 9, NULL),
(17, 'uploads/pages/1752777009.bin', NULL, NULL, 'Web Design', NULL, NULL, '2025-07-17 14:30:09', '2025-07-17 14:30:09', 12, NULL),
(18, 'uploads/pages/1752777030.bin', NULL, NULL, 'Digital Marketing', NULL, NULL, '2025-07-17 14:30:30', '2025-07-17 14:30:30', 12, NULL),
(19, 'uploads/pages/1752777056.bin', NULL, NULL, 'Brand Identity', NULL, NULL, '2025-07-17 14:30:56', '2025-07-17 14:30:56', 12, NULL),
(20, 'uploads/pages/1752777083.bin', NULL, NULL, 'Digital Strategy', NULL, NULL, '2025-07-17 14:31:23', '2025-07-17 14:31:23', 12, NULL),
(21, NULL, NULL, NULL, 'The Just-Right Approach.', 'Project-Based', 'Have a clear project in mind? Work with us on a defined scope — built to deliver exactly what you need.', '2025-07-18 11:49:17', '2025-07-18 11:49:17', 15, NULL),
(22, 'uploads/pages/1752853808.bin', NULL, NULL, 'We\'ve Got You Covered.', 'Agency Subscription', 'A monthly partnership gives you access to our web, design, and marketing team — whether you need full support or just a few extra hands to move projects forward.', '2025-07-18 11:49:49', '2025-07-18 11:50:08', 15, NULL),
(23, 'uploads/pages/1752854834.bin', 'uploads/pages/light_image1752854923.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:07:14', '2025-07-18 12:08:43', 17, NULL),
(24, 'uploads/pages/1752854939.bin', 'uploads/pages/light_image1752854939.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:08:59', '2025-07-18 12:08:59', 17, NULL),
(25, 'uploads/pages/1752854945.bin', 'uploads/pages/light_image1752854945.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:05', '2025-07-18 12:09:05', 17, NULL),
(26, 'uploads/pages/1752854959.bin', 'uploads/pages/light_image1752854959.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:19', '2025-07-18 12:09:19', 17, NULL),
(27, 'uploads/pages/1752854966.bin', 'uploads/pages/light_image1752854966.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:26', '2025-07-18 12:09:26', 17, NULL),
(28, 'uploads/pages/1752854972.bin', 'uploads/pages/light_image1752854972.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:32', '2025-07-18 12:09:32', 17, NULL),
(29, 'uploads/pages/1752854979.bin', 'uploads/pages/light_image1752854979.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:39', '2025-07-18 12:09:39', 17, NULL),
(30, 'uploads/pages/1752854985.bin', 'uploads/pages/light_image1752854985.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:45', '2025-07-18 12:09:45', 17, NULL),
(31, 'uploads/pages/1752854991.bin', 'uploads/pages/light_image1752854991.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:51', '2025-07-18 12:09:51', 17, NULL),
(32, 'uploads/pages/1752854998.bin', 'uploads/pages/light_image1752854998.webp', NULL, 'box', NULL, NULL, '2025-07-18 12:09:58', '2025-07-18 12:09:58', 17, NULL),
(33, NULL, NULL, 'uploads/pages/video1752856200.mp4', 'DAN BOWEN', 'Founder + CEO', NULL, '2025-07-18 12:27:41', '2025-07-18 12:30:00', 18, NULL),
(34, NULL, NULL, 'uploads/pages/video1752856488.mp4', 'NATALIE BOWEN', 'President', NULL, '2025-07-18 12:32:36', '2025-07-18 12:34:48', 18, NULL),
(35, NULL, NULL, 'uploads/pages/video1752856554.mp4', 'PATRICK BERLINQUETTE', 'Digital Marketing', NULL, '2025-07-18 12:35:54', '2025-07-18 12:35:54', 18, NULL),
(36, NULL, NULL, 'uploads/pages/video1752856585.mp4', 'JAIME TORLINCASI', 'Client Experience', NULL, '2025-07-18 12:36:25', '2025-07-18 12:36:25', 18, NULL),
(37, NULL, NULL, 'uploads/pages/video1752856610.mp4', 'WILL SENISI', 'CTO', NULL, '2025-07-18 12:36:50', '2025-07-18 12:36:50', 18, NULL),
(38, NULL, NULL, 'uploads/pages/video1752856618.mp4', 'WILL SENISI', 'CTO', NULL, '2025-07-18 12:36:58', '2025-07-18 12:36:58', 18, NULL),
(39, NULL, NULL, 'uploads/pages/video1752857432.mp4', 'WILL SENISI', 'CTO', NULL, '2025-07-18 12:50:32', '2025-07-18 12:50:32', 18, NULL),
(40, NULL, NULL, 'uploads/pages/video1752857439.mp4', 'WILL SENISI', 'CTO', NULL, '2025-07-18 12:50:39', '2025-07-18 12:50:39', 18, NULL),
(41, NULL, NULL, NULL, 'Priority Access to a Full Marketing Team', NULL, 'Gain direct access to a team of experts without the overhead of a full-time hire. We move faster, stay aligned with your goals, and tackle what matters most.', '2025-07-18 14:49:23', '2025-07-18 14:49:23', 20, NULL),
(42, NULL, NULL, NULL, 'Smarter Spend than Hiring In-House', NULL, 'Our subscription model gives you diverse expertise for a fraction of the cost and commitment of a full-time hire.', '2025-07-18 14:50:02', '2025-07-18 14:50:02', 20, NULL),
(43, NULL, NULL, NULL, 'Support That Flexes with Your Needs', NULL, 'We align with your team’s goals and adjust our focus as priorities shift—keeping strategy and execution in sync.', '2025-07-18 14:50:57', '2025-07-18 14:50:57', 20, NULL),
(44, NULL, NULL, NULL, 'Support That Flexes with Your Needs', NULL, 'We align with your team’s goals and adjust our focus as priorities shift—keeping strategy and execution in sync.', '2025-07-18 14:51:18', '2025-07-18 14:51:18', 20, NULL),
(45, NULL, NULL, NULL, 'Support That Flexes with Your Needs', NULL, 'We align with your team’s goals and adjust our focus as priorities shift—keeping strategy and execution in sync.', '2025-07-18 14:51:33', '2025-07-18 14:51:33', 20, NULL),
(46, NULL, NULL, NULL, 'What\'s better for you?', NULL, 'Our ongoing partnerships typically start at $3,500/month, with many brands investing more for dedicated support, strategy, and execution. We’ll recommend the right plan based on your needs — whether it’s consistent monthly momentum or scaling for growth.', '2025-07-18 14:57:54', '2025-07-18 14:57:54', 21, NULL),
(47, NULL, NULL, NULL, 'What\'s better for you?', NULL, 'Our ongoing partnerships typically start at $3,500/month, with many brands investing more for dedicated support, strategy, and execution. We’ll recommend the right plan based on your needs — whether it’s consistent monthly momentum or scaling for growth.', '2025-07-18 14:57:59', '2025-07-18 14:57:59', 21, NULL),
(48, NULL, NULL, NULL, 'What\'s better for you?', NULL, 'Our ongoing partnerships typically start at $3,500/month, with many brands investing more for dedicated support, strategy, and execution. We’ll recommend the right plan based on your needs — whether it’s consistent monthly momentum or scaling for growth.', '2025-07-18 14:58:06', '2025-07-18 14:58:06', 21, NULL),
(49, NULL, NULL, NULL, 'What\'s better for you?', NULL, 'Our ongoing partnerships typically start at $3,500/month, with many brands investing more for dedicated support, strategy, and execution. We’ll recommend the right plan based on your needs — whether it’s consistent monthly momentum or scaling for growth.', '2025-07-18 14:58:14', '2025-07-18 14:58:14', 21, NULL),
(50, NULL, NULL, NULL, 'Web Design & Development', NULL, 'Tailored websites designed to engage, convert, and perform.', '2025-07-18 15:04:52', '2025-07-18 15:04:52', 22, NULL),
(51, NULL, NULL, NULL, 'Web Design & Development', NULL, 'Tailored websites designed to engage, convert, and perform.', '2025-07-18 15:04:59', '2025-07-18 15:04:59', 22, NULL),
(52, NULL, NULL, NULL, 'Web Design & Development', NULL, 'Tailored websites designed to engage, convert, and perform.', '2025-07-18 15:05:11', '2025-07-18 15:05:11', 22, NULL),
(53, NULL, NULL, NULL, 'Web Design & Development', NULL, 'Tailored websites designed to engage, convert, and perform.', '2025-07-18 15:05:19', '2025-07-18 15:05:19', 22, NULL),
(54, NULL, NULL, NULL, 'Web Design & Development', NULL, 'Tailored websites designed to engage, convert, and perform.', '2025-07-18 15:05:27', '2025-07-18 15:05:27', 22, NULL),
(55, NULL, NULL, NULL, 'Ongoing Partnership', NULL, 'Are you a Marketing Director looking for a few more hands to execute your strategy?\r\nDo you manage multiple projects, campaigns, sites, or brands that require ongoing attention?\r\nAre you an executive deciding how to best invest in marketing resources?\r\nCould you benefit from ongoing strategy, execution, and accountability?\r\nDoes the marketing department feel spread thin and needs some extra support?', '2025-07-18 15:13:09', '2025-07-18 15:13:09', 23, NULL),
(56, NULL, NULL, NULL, 'Project-Based', NULL, 'Do you have your needs and scope of work clearly defined to share?\r\nAre you facing a tight deadline or immediate need that needs to be addressed?\r\nAre your needs based on something that does not require ongoing strategy or services?\r\nAre you looking for a reputable company that can deliver on a very important project?\r\nIs your organization legally limited from engaging in an ongoing subscription partnership?', '2025-07-18 15:13:27', '2025-07-18 15:13:27', 23, NULL),
(57, NULL, NULL, NULL, 'Need to talk it out? We’re a call away.', NULL, 'Things are not always black and white, or ever static. In fact, each partnership we form with our clients is unique in objectives, challenges, audiences, needs, and goals, in addition to how they evolve over time. You may have many priorities, and we’re here to help you arrive at the best option for the business you represent, aiming to accomplish great things together along the way.', '2025-07-18 15:13:50', '2025-07-18 15:13:50', 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` char(255) DEFAULT NULL,
  `image2` char(255) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `sub_title` char(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` char(255) DEFAULT NULL,
  `sub_title2` char(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `text2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `image2`, `name`, `sub_title`, `text`, `created_at`, `updated_at`, `video`, `sub_title2`, `link`, `text2`) VALUES
(1, 'uploads/projects/1752342902.webp', 'uploads/projects/21752342902.webp', 'Interaudi Bank', 'web design, mobile app , social media', 'Custom Website Design for EDCB bank', '2025-07-12 13:55:02', '2025-07-17 13:03:53', NULL, 'Financial Services', 'www.interaudibank.com', 'Interaudi Bank needed a website reflecting its core values of exclusivity, legacy, and personal service, providing a seamless and trustworthy experience for its high-net-worth clientele. The new design highlights the bank\'s holistic, tailored services while ensuring clear navigation and a modern aesthetic that aligns with their brand identity, offering a refined user experience across all devices.'),
(2, 'uploads/projects/1752344086.jpg', 'uploads/projects/21752344086.webp', 'Meltwater', 'Social media , Video Editing', 'Marketing Platform UX Overhaul for Meltwater', '2025-07-12 14:14:46', '2025-07-12 14:14:46', NULL, NULL, NULL, NULL),
(3, 'uploads/projects/1752344454.jpg', NULL, 'Meltwater', 'Social media , Video Editing', 'Marketing Platform UX Overhaul for Meltwater', '2025-07-12 14:20:54', '2025-07-12 14:20:54', 'uploads/projects/video1752344454.mp4', NULL, NULL, NULL),
(4, 'uploads/projects/1752344746.jpg', 'uploads/projects/21752344746.webp', 'Interaudi Bank', 'web design, mobile app , social media', 'Custom Website Design for EDCB bank', '2025-07-12 14:25:46', '2025-07-12 14:25:46', 'uploads/projects/video1752344746.mp4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_items`
--

CREATE TABLE `project_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` char(255) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `sub_title` char(255) DEFAULT NULL,
  `sub_title2` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_items`
--

INSERT INTO `project_items` (`id`, `image`, `name`, `sub_title`, `sub_title2`, `text`, `project_id`, `created_at`, `updated_at`, `video`) VALUES
(1, NULL, 'Designing for Exclusivity and Sophistication', 'Refined Elegance', NULL, 'We elevated the design by carefully selecting a refined color palette of blues to evoke trust and sophistication, complemented by a ripple effect that creates a sense of exclusivity and fluidity. Drawing inspiration from the circle element in their logo, we incorporated ultra-fine lines in the icons and buttons, while the chosen typeface for headlines enhances the bank\'s sophisticated, high-end image.', 1, '2025-07-17 13:19:38', '2025-07-17 13:57:34', 'uploads/pages/video1752775054.mp4'),
(2, 'uploads/pages/1752773367.webp', 'Introducing Interaudi Bank: Designed for Global Distinction', 'Refined Elegance', NULL, 'The homepage opens with an elegant drone video over Manhattan at dusk, setting the tone for Interaudi Bank\'s exclusive presence. As the website introduces the bank alongside a hand-drawn sketch of its headquarters, its unique differentiators and services are showcased with pristine sophistication. Intuitive navigation and seamless portal access cater to a global audience, while multi-lingual options ensure a tailored experience, leaving a lasting and distinguished first impression.', 1, '2025-07-17 13:29:27', '2025-07-17 13:29:27', NULL),
(3, 'uploads/pages/1752773411.webp', 'Personalized Banking & Lending Solutions', 'Tailored Services', NULL, 'The Lending and Banking pages offer an elegant, client-focused introduction, with headlines that emphasize personalized service and lasting relationships. Each page features smooth-loading content, a clear sub-navigation to explore various services, and visually engaging layouts with custom iconography and iconic imagery, creating a refined and dynamic browsing experience.', 1, '2025-07-17 13:30:11', '2025-07-17 13:30:11', NULL),
(4, 'uploads/pages/1752773455.webp', 'Elite Investment Access for Clients Seeking Distinction', 'Exclusive Investments', NULL, 'The Investments page exudes an elevated, high-end feel of exclusivity, setting it apart from the rest of the site. With access to the Ameraudi Investments portal, credible statistics, and a comprehensive overview of investment and trading portfolios, the page offers a refined and trusted space for clients to explore their financial opportunities.', 1, '2025-07-17 13:30:55', '2025-07-17 13:30:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(255) NOT NULL,
  `keywords` char(255) DEFAULT NULL,
  `logo` char(255) DEFAULT NULL,
  `share` char(255) DEFAULT NULL,
  `fav` char(255) DEFAULT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `x` char(255) DEFAULT NULL,
  `facebook` char(255) DEFAULT NULL,
  `instagram` char(255) DEFAULT NULL,
  `tiktok` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `keywords`, `logo`, `share`, `fav`, `text`, `created_at`, `updated_at`, `x`, `facebook`, `instagram`, `tiktok`) VALUES
(1, 'ESC', 'ESC,web design , video editing , branding', 'uploads/posts/logo.svg', NULL, 'uploads/posts/fav.svg', 'ESC,web design , video editing , branding', NULL, '2025-07-12 14:51:19', 'https://www.x.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.tiktok.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', NULL, '$2y$12$MvCv80gZp4Y8ZSuJ0Vl7RudUvcIkOuL.1BVesvE1rm3mmSLu3Ph02', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_items`
--
ALTER TABLE `page_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_items_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_items`
--
ALTER TABLE `project_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_items_project_id_foreign` (`project_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `page_items`
--
ALTER TABLE `page_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_items`
--
ALTER TABLE `project_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page_items`
--
ALTER TABLE `page_items`
  ADD CONSTRAINT `page_items_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_items`
--
ALTER TABLE `project_items`
  ADD CONSTRAINT `project_items_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
