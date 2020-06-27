-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 27, 2020 lúc 09:04 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`) VALUES
(1, 'Example', 'example', NULL),
(2, 'Advance', 'advance', NULL),
(3, 'Vuejs', 'vuejs', NULL),
(4, 'Tips', 'tips', NULL),
(5, 'Laravel', 'laravel', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_posts`
--

CREATE TABLE `category_posts` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_posts`
--

INSERT INTO `category_posts` (`category_id`, `post_id`) VALUES
(2, 37),
(2, 38),
(4, 44),
(4, 45),
(4, 46),
(5, 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` tinyint(3) UNSIGNED NOT NULL,
  `status` enum('pending','publish','spam') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `status`, `created_at`, `updated_at`, `deleted_at`, `ip`, `user_agent`) VALUES
(1, 1, 'publish', NULL, NULL, NULL, '', ''),
(2, 1, 'publish', NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(7, 'default', '{\"uuid\":\"51740253-78ba-4491-b1a4-eef54994d1a8\",\"displayName\":\"App\\\\Listeners\\\\SendEmailAfterNewPost\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":8:{s:5:\\\"class\\\";s:35:\\\"App\\\\Listeners\\\\SendEmailAfterNewPost\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:18:\\\"App\\\\Events\\\\NewPost\\\":2:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Post\\\";s:2:\\\"id\\\";i:37;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:10:\\\"retryAfter\\\";N;s:9:\\\"timeoutAt\\\";N;s:7:\\\"timeout\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1593200740, 1593200740),
(8, 'default', '{\"uuid\":\"ba67a18f-de6d-4731-9e87-bbcb6f3076ec\",\"displayName\":\"App\\\\Listeners\\\\SendEmailAfterNewPost\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":8:{s:5:\\\"class\\\";s:35:\\\"App\\\\Listeners\\\\SendEmailAfterNewPost\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:18:\\\"App\\\\Events\\\\NewPost\\\":2:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Post\\\";s:2:\\\"id\\\";i:38;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:10:\\\"retryAfter\\\";N;s:9:\\\"timeoutAt\\\";N;s:7:\\\"timeout\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1593207159, 1593207159),
(9, 'default', '{\"uuid\":\"04acdb6a-fcd4-4fc9-9ff9-679e9caa87ca\",\"displayName\":\"App\\\\Listeners\\\\SendEmailAfterNewPost\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":8:{s:5:\\\"class\\\";s:35:\\\"App\\\\Listeners\\\\SendEmailAfterNewPost\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:18:\\\"App\\\\Events\\\\NewPost\\\":2:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Post\\\";s:2:\\\"id\\\";i:40;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:10:\\\"retryAfter\\\";N;s:9:\\\"timeoutAt\\\";N;s:7:\\\"timeout\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1593234272, 1593234272),
(10, 'default', '{\"uuid\":\"62d69a29-5714-4f90-88b9-c5567c4a68e5\",\"displayName\":\"App\\\\Listeners\\\\SendEmailAfterNewPost\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":8:{s:5:\\\"class\\\";s:35:\\\"App\\\\Listeners\\\\SendEmailAfterNewPost\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:18:\\\"App\\\\Events\\\\NewPost\\\":2:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Post\\\";s:2:\\\"id\\\";i:44;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:10:\\\"retryAfter\\\";N;s:9:\\\"timeoutAt\\\";N;s:7:\\\"timeout\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1593235389, 1593235389),
(11, 'default', '{\"uuid\":\"15f413cd-7a72-4c4e-afca-14c48d2d0f32\",\"displayName\":\"App\\\\Listeners\\\\SendEmailAfterNewPost\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":8:{s:5:\\\"class\\\";s:35:\\\"App\\\\Listeners\\\\SendEmailAfterNewPost\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:18:\\\"App\\\\Events\\\\NewPost\\\":2:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Post\\\";s:2:\\\"id\\\";i:45;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:10:\\\"retryAfter\\\";N;s:9:\\\"timeoutAt\\\";N;s:7:\\\"timeout\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1593235509, 1593235509),
(12, 'default', '{\"uuid\":\"a9eeb7cc-f4dc-4a47-aaa7-845b643a4fac\",\"displayName\":\"App\\\\Listeners\\\\SendEmailAfterNewPost\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":8:{s:5:\\\"class\\\";s:35:\\\"App\\\\Listeners\\\\SendEmailAfterNewPost\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:18:\\\"App\\\\Events\\\\NewPost\\\":2:{s:4:\\\"post\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Post\\\";s:2:\\\"id\\\";i:46;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:10:\\\"retryAfter\\\";N;s:9:\\\"timeoutAt\\\";N;s:7:\\\"timeout\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1593239695, 1593239695);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_06_16_223846_create_products_table', 1),
(6, '2020_06_17_115803_create_posts_table', 1),
(7, '2020_06_17_115831_create_categories_table', 1),
(8, '2020_06_17_115845_create_comments_table', 1),
(9, '2020_06_17_115903_create_tags_table', 1),
(10, '2020_06_17_115917_create_post_tags_table', 1),
(13, '2020_06_17_170223_create_category_posts_table', 2),
(14, '2020_06_23_163821_create_jobs_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('draft','publish') COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `summary`, `content`, `status`, `comments`, `featured`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(37, 'Xây dựng ứng dụng SPA với Laravel và Vue.js', 'xay-dung-ung-dung-spa-voi-laravel-va-vuejs', NULL, 'Xây dựng ứng dụng SPA với Laravel và Vue.js', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body style=\"font-size: 14px;\">\r\n<p>Ứng dụng đơn trang SPA (Single Page Application) l&agrave; c&aacute;ch thiết kế web đưa to&agrave;n bộ ứng dụng v&agrave;o một trang duy nhất với rất nhiều ưu điểm như cải thiện đ&aacute;ng kể về tốc độ, n&acirc;ng cao nghiệm người d&ugrave;ng. C&oacute; rất nhiều c&aacute;c ứng dụng đơn trang nổi tiếng m&agrave; bạn d&ugrave;ng h&agrave;ng ng&agrave;y như Facebook, Gmail, Twitter... Laravel 5.4 đ&atilde; đưa Vue.js v&agrave;o th&agrave;nh Javascript framework mặc định. Vue.js l&agrave; một framework đang ph&aacute;t triển với tốc độ cực nhanh, n&oacute; giống với Laravel l&agrave; sự tổng hợp c&aacute;c t&iacute;nh năng hay từ c&aacute;c framework kh&aacute;c. Trong hệ sinh th&aacute;i&nbsp;<a href=\"https://allaravel.com/tag/vue-js/\">Vue.js</a>&nbsp;c&oacute; thư viện&nbsp;<a href=\"https://allaravel.com/blog/su-dung-vue-router-cho-cac-ung-dung-don-trang/\">vue-router chuy&ecirc;n x&acirc;y dựng c&aacute;c ứng dụng đơn trang</a>&nbsp;với c&aacute;ch viết code rất tường minh v&agrave; viết cực nhanh. Kh&ocirc;ng qu&aacute; lời ch&uacute;t n&agrave;o, ch&uacute;ng ta c&ugrave;ng nhau x&acirc;y dựng một ứng dụng c&oacute; sự kết hợp cả Laravel v&agrave; Vue.js gi&uacute;p c&aacute;c bạn hiểu được tại sao lại l&agrave; Laravel v&agrave; Vue.js?</p>\r\n</body>\r\n</html>', 'publish', 0, 1, 'http://localhost:8000/storage/photos/1/POST/34101304_465782447211333_3141455963534393344_o.jpg', '2020-06-26 19:45:38', '2020-06-26 19:45:38', NULL),
(38, 'Laravel Socialite tích hợp xác thực Facebook vào website', 'laravel-socialite-tich-hop-xac-thuc-facebook-vao-website', NULL, 'Hiện nay, các website đều sử dụng mạng xã hội như Facebook, Google, Twitter, Github... để đăng nhập, việc này giúp cho các thành viên sử dụng trang web sẽ thuận tiện hơn rất nhiều. Laravel Socialite được đưa vào danh sách các gói cài đặt chính thức từ phiên bản Laravel 5.3', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body style=\"font-size: 14px;\">\r\n<p>Hiện nay, c&aacute;c website đều sử dụng mạng x&atilde; hội như Facebook, Google, Twitter, Github... để đăng nhập, việc n&agrave;y gi&uacute;p cho c&aacute;c th&agrave;nh vi&ecirc;n sử dụng trang web sẽ thuận tiện hơn rất nhiều. Laravel Socialite được đưa v&agrave;o danh s&aacute;ch c&aacute;c g&oacute;i c&agrave;i đặt ch&iacute;nh thức&nbsp;từ&nbsp;phi&ecirc;n bản Laravel 5.3. B&agrave;i viết sẽ hướng dẫn c&aacute;c bạn t&iacute;ch hợp&nbsp;g&oacute;i Laravel Socialite c&ugrave;ng với mạng x&atilde; hội Facebook v&agrave;o hệ thống website của bạn. Bạn c&oacute; thể tham khảo một website sử dụng Laravel Socialite trong việc x&aacute;c thực người d&ugrave;ng bằng mạng x&atilde; hội ở&nbsp;<a href=\"http://adshare.vn/login\">trang đăng nhập hệ thống Adshare.vn</a>:</p>\r\n<p><img src=\"https://allaravel.com/storage/app/media/uploads/2017/03/trang-dang-nhap-su-dung-laravel-socialite-tai-adshare.vn_.jpg\" alt=\"Đăng nhập Adshare.vn bằng Laravel Socialite\" />&nbsp;B&agrave;i hướng dẫn sử dụng Laravel 5.4 v&agrave; y&ecirc;u cầu bạn c&oacute; kiến thức cơ bản về Laravel. (Xem th&ecirc;m Hướng dẫn c&agrave;i đặt framework Laravel)</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\">laravel <span class=\"token keyword\">new</span> <span class=\"token class-name\">laravel</span><span class=\"token operator\">-</span>learning\r\ncd laravel<span class=\"token operator\">-</span>learning</code></pre>\r\n<div>&nbsp;</div>\r\n<p>Tiếp theo, tạo database Migrate dữ liệu v&agrave;o database mới tạo</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\">php artisan migrate</code></pre>\r\n<p>Th&ecirc;m phần khung đăng nhập v&agrave;o dự &aacute;n</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\">php artisan make<span class=\"token punctuation\">:</span>auth</code></pre>\r\n<p>Bắt đầu chạy dịch vụ v&agrave; v&agrave;o trang chủ&nbsp;<a href=\"http://localhost:8080/\">http://localhost:8080</a>&nbsp;&nbsp;</p>\r\n<h1>C&agrave;i đặt g&oacute;i Laravel Socialite</h1>\r\n<p>Socialite l&agrave; một g&oacute;i chuy&ecirc;n x&acirc;y dựng x&aacute;c thực người d&ugrave;ng th&ocirc;ng qua c&aacute;c mạng x&atilde; hội th&ocirc;ng dụng như Facebook, Google, Twitter, Github...&nbsp;C&agrave;i đặt g&oacute;i bằng composer:</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\">composer <span class=\"token keyword\">require</span> laravel<span class=\"token operator\">/</span>socialite</code></pre>\r\n<p>Sau đ&oacute; thực hiện theo hướng dẫn sau: Th&ecirc;m provider v&agrave;o file config/app.php</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\"><span class=\"token string\">\'providers\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token punctuation\">[</span>\r\n   <span class=\"token comment\" spellcheck=\"true\"> // Other service providers...\r\n</span>\r\n    <span class=\"token scope\">Laravel<span class=\"token punctuation\">\\</span>Socialite<span class=\"token punctuation\">\\</span>SocialiteServiceProvider<span class=\"token punctuation\">::</span></span><span class=\"token keyword\">class</span><span class=\"token punctuation\">,</span>\r\n<span class=\"token punctuation\">]</span><span class=\"token punctuation\">,</span></code></pre>\r\n<p>Th&ecirc;m alias v&agrave;o đoạn cuối của file n&agrave;y</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\"><span class=\"token string\">\'Socialite\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token scope\">Laravel<span class=\"token punctuation\">\\</span>Socialite<span class=\"token punctuation\">\\</span>Facades<span class=\"token punctuation\">\\</span>Socialite<span class=\"token punctuation\">::</span></span><span class=\"token keyword\">class</span><span class=\"token punctuation\">,</span></code></pre>\r\n<p>Ch&uacute;ng ta đ&atilde; c&agrave;i đặt xong g&oacute;i Socialite, bắt đầu sử dụng th&ocirc;i.</p>\r\n<h1>Cấu h&igrave;nh trang Facebook cho người ph&aacute;t triển</h1>\r\n<p>Facebook mạng x&atilde; hội lớn nhất hiện nay n&ecirc;n đa số c&aacute;c website đều muốn t&iacute;ch hợp Facebook trong phần đăng nhập hệ thống. T&iacute;ch hợp Facebook gi&uacute;p người d&ugrave;ng rất thuận tiện trong việc sử dụng, người d&ugrave;ng chỉ cần đăng nhập v&agrave;o Facebook l&agrave; c&oacute; thể x&aacute;c thực lu&ocirc;n cả b&ecirc;n ph&iacute;a website. Bạn cần c&oacute; t&agrave;i khoản ph&aacute;t triển Facebook, để đăng k&yacute; bạn xem Hướng dẫn đăng k&yacute; t&agrave;i khoản ph&aacute;t triển Facebook. Mở&nbsp;<a href=\"https://developers.facebook.com/\">trang ph&aacute;t triển Facebook</a>&nbsp;v&agrave; thực hiện theo c&aacute;c bước sau: Trong phần Ứng dụng của t&ocirc;i chọn Th&ecirc;m ứng dụng mới.</p>\r\n<p><img src=\"http://allaravel.com/storage/app/media/uploads/2017/03/cau-hinh-facebook-developer-cho-socialite-laravel.jpg\" alt=\"Cấu h&igrave;nh Facebook Developer cho Laravel Socialite\" />&nbsp;Trong cửa sổ tạo ứng dụng mới điền v&agrave;o c&aacute;c th&ocirc;ng tin:</p>\r\n<ul>\r\n<li>T&ecirc;n hiển thị: T&ecirc;n sẽ được hiển thị trong trang đăng nhập của Facebook</li>\r\n<li>Email li&ecirc;n hệ: Địa chỉ email hỗ trợ khi người d&ugrave;ng kh&ocirc;ng đăng nhập được th&ocirc;ng qua Facebook.</li>\r\n<li>Danh mục: Chọn ứng dụng cho trang</li>\r\n</ul>\r\n<p><img src=\"https://allaravel.com/storage/app/media/uploads/2017/03/Tao-ung-dung-moi-trong-facebook-developer.jpg\" alt=\"Tạo ứng dụng mới trong Facebook Developer\" /></p>\r\n<p>Tiếp tục, cấu h&igrave;nh c&aacute;c th&ocirc;ng số kh&aacute;c trong trang ứng dụng Laravel Learning tr&ecirc;n Facebook Developer vừa tạo. Trong cửa sổ mới chọn Cấu h&igrave;nh, trong đ&acirc;y chứa c&aacute;c th&ocirc;ng tin để&nbsp;thiết lập cho file config/service.php.</p>\r\n<p><img src=\"http://allaravel.com/storage/app/media/uploads/2017/03/Thong-tin-cau-hinh-cho-Socialite-tu-facebook-developer.jpg\" alt=\"C&aacute;c th&ocirc;ng số cấu h&igrave;nh cho Socialite từ Facebook Developer\" /></p>\r\n<p>Gi&aacute; trị trong ID ứng dụng đưa v&agrave;o client_id, gi&aacute; trị trong Kh&oacute;a ứng dụng đưa v&agrave;o client_secret.</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\">    <span class=\"token string\">\'facebook\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token punctuation\">[</span>\r\n        <span class=\"token string\">\'client_id\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token string\">\'59775245345277084316\'</span><span class=\"token punctuation\">,</span>\r\n        <span class=\"token string\">\'client_secret\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token string\">\'8789b6972c62b3335sdse43dec615a73f9d2\'</span><span class=\"token punctuation\">,</span>\r\n        <span class=\"token string\">\'redirect\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token string\">\'\'</span><span class=\"token punctuation\">,</span>\r\n    <span class=\"token punctuation\">]</span><span class=\"token punctuation\">,</span></code></pre>\r\n<p>Tiếp theo ch&uacute;ng ta sẽ tiếp tục chuyển hướng người d&ugrave;ng đến Facebook v&agrave; quản l&yacute; callback về từ Facebook. Ch&uacute;ng ta cần tạo một controller mới cho x&aacute;c thực qua mạng x&atilde; hội:</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\">php artisan make<span class=\"token punctuation\">:</span>controller SocialAuthController</code></pre>\r\n<p>Sau đ&oacute; th&ecirc;m v&agrave;o controller SocialAuthController.php n&agrave;y hai phương thức:</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\"><span class=\"token delimiter\">&lt;?php</span>\r\n<span class=\"token keyword\">namespace</span> <span class=\"token package\">App<span class=\"token punctuation\">\\</span>Http<span class=\"token punctuation\">\\</span>Controllers</span><span class=\"token punctuation\">;</span>\r\n\r\n<span class=\"token keyword\">use</span> <span class=\"token package\">Illuminate<span class=\"token punctuation\">\\</span>Http<span class=\"token punctuation\">\\</span>Request</span><span class=\"token punctuation\">;</span>\r\n\r\n<span class=\"token keyword\">use</span> <span class=\"token package\">App<span class=\"token punctuation\">\\</span>Http<span class=\"token punctuation\">\\</span>Requests</span><span class=\"token punctuation\">;</span>\r\n<span class=\"token keyword\">use</span> <span class=\"token package\">App<span class=\"token punctuation\">\\</span>Http<span class=\"token punctuation\">\\</span>Controllers<span class=\"token punctuation\">\\</span>Controller</span><span class=\"token punctuation\">;</span>\r\n<span class=\"token keyword\">use</span> <span class=\"token package\">Socialite</span><span class=\"token punctuation\">;</span>\r\n\r\n<span class=\"token keyword\">class</span> <span class=\"token class-name\">SocialAuthController</span> <span class=\"token keyword\">extends</span> <span class=\"token class-name\">Controller</span>\r\n<span class=\"token punctuation\">{</span>\r\n    <span class=\"token keyword\">public</span> <span class=\"token keyword\">function</span> <span class=\"token function\">redirectToProvider<span class=\"token punctuation\">(</span></span><span class=\"token punctuation\">)</span>\r\n    <span class=\"token punctuation\">{</span>\r\n        <span class=\"token keyword\">return</span> <span class=\"token scope\">Socialite<span class=\"token punctuation\">::</span></span><span class=\"token function\">driver<span class=\"token punctuation\">(</span></span><span class=\"token string\">\'facebook\'</span><span class=\"token punctuation\">)</span><span class=\"token operator\">-</span><span class=\"token operator\">&gt;</span><span class=\"token function\">redirect<span class=\"token punctuation\">(</span></span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>   \r\n    <span class=\"token punctuation\">}</span>   \r\n\r\n    <span class=\"token keyword\">public</span> <span class=\"token keyword\">function</span> <span class=\"token function\">handleProviderCallback<span class=\"token punctuation\">(</span></span><span class=\"token punctuation\">)</span>\r\n    <span class=\"token punctuation\">{</span>\r\n       <span class=\"token comment\" spellcheck=\"true\"> // Sau khi x&aacute;c thực Facebook chuyển hướng về đ&acirc;y c&ugrave;ng với một token\r\n</span>       <span class=\"token comment\" spellcheck=\"true\"> // C&aacute;c xử l&yacute; li&ecirc;n quan đến đăng nhập bằng mạng x&atilde; hội cũng đưa v&agrave;o đ&acirc;y.    \r\n</span>    <span class=\"token punctuation\">}</span>\r\n<span class=\"token punctuation\">}</span></code></pre>\r\n<p>Tiếp theo, ch&uacute;ng ta đăng k&yacute; c&aacute;c phương thức n&agrave;y trong routes/web.php (C&aacute;c phi&ecirc;n bản Laravel từ 5.2.31 chuyển việc map c&aacute;c đường dẫn sang phương thức ở routes.php sang routes/web.php)</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\"><span class=\"token scope\">Route<span class=\"token punctuation\">::</span></span><span class=\"token function\">get<span class=\"token punctuation\">(</span></span><span class=\"token string\">\'/auth/facebook\'</span><span class=\"token punctuation\">,</span> <span class=\"token string\">\'SocialAuthController@redirectToProvider\'</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>\r\n<span class=\"token scope\">Route<span class=\"token punctuation\">::</span></span><span class=\"token function\">get<span class=\"token punctuation\">(</span></span><span class=\"token string\">\'/auth/facebook/callback\'</span><span class=\"token punctuation\">,</span> <span class=\"token string\">\'SocialAuthController@handleProviderCallback\'</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span></code></pre>\r\n<p>Tiếp đ&oacute; cập nhật lại file config/service.php gi&aacute; trị chứa đường dẫn callback ở tr&ecirc;n:</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\">    <span class=\"token string\">\'facebook\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token punctuation\">[</span>\r\n        <span class=\"token string\">\'client_id\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token string\">\'5977235235377084316\'</span><span class=\"token punctuation\">,</span>\r\n        <span class=\"token string\">\'client_secret\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token string\">\'8789b6972ak839se43dec615a73f9d2\'</span><span class=\"token punctuation\">,</span>\r\n        <span class=\"token string\">\'redirect\'</span> <span class=\"token operator\">=</span><span class=\"token operator\">&gt;</span> <span class=\"token string\">\'http://localhost/laravel-learning/auth/facebook/callback\'</span><span class=\"token punctuation\">,</span>\r\n    <span class=\"token punctuation\">]</span><span class=\"token punctuation\">,</span></code></pre>\r\n<p>Tiếp đ&oacute;, ch&uacute;ng ta v&agrave;o&nbsp;resources/views/auth/login.blade.php để th&ecirc;m một li&ecirc;n kết x&aacute;c thực website bằng Facebook, th&ecirc;m một&nbsp;li&ecirc;n kết v&agrave;o sau phần Qu&ecirc;n mật khẩu.`</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\"><span class=\"token markup\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;</span>a <span class=\"token attr-name\">href</span><span class=\"token attr-value\"><span class=\"token punctuation\">=</span><span class=\"token punctuation\">\"</span>{{ URL::to(\'auth/facebook\') }}<span class=\"token punctuation\">\"</span></span><span class=\"token punctuation\">&gt;</span></span></span>Facebook Login<span class=\"token markup\"><span class=\"token tag\"><span class=\"token punctuation\">&lt;/</span>a<span class=\"token punctuation\">&gt;</span></span></span></code></pre>\r\n<p>Xong, ch&uacute;ng ta đ&atilde; c&oacute; thể kiểm tra xem đăng nhập website th&ocirc;ng qua Facebook như thế n&agrave;o? &nbsp; Socialite sẽ&nbsp;xử l&yacute; một c&aacute;ch tự động, khi Facebook đ&atilde; x&aacute;c thực được người d&ugrave;ng n&oacute; sẽ chuyển hướng người d&ugrave;ng về&nbsp;<a href=\"http://localhost/laravel-learning/auth/facebook/callback\">http://localhost/laravel-learning/auth/facebook/callback</a>&nbsp;c&ugrave;ng với token v&agrave; th&ocirc;ng tin người d&ugrave;ng đ&atilde; đăng nhập Facebook. Socialite cung cấp phương thức để lấy c&aacute;c th&ocirc;ng tin n&agrave;y:</p>\r\n<pre class=\" language-php\"><code class=\"language-{.} language-php\"><span class=\"token variable\">$user</span> <span class=\"token operator\">=</span> <span class=\"token scope\">Socialite<span class=\"token punctuation\">::</span></span><span class=\"token function\">driver<span class=\"token punctuation\">(</span></span><span class=\"token variable\">$provider</span><span class=\"token punctuation\">)</span><span class=\"token operator\">-</span><span class=\"token operator\">&gt;</span><span class=\"token function\">user<span class=\"token punctuation\">(</span></span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span></code></pre>\r\n<p>Như vậy $user đ&atilde; chứa đầy đủ th&ocirc;ng tin ch&uacute;ng ta c&oacute; thể khai th&aacute;c&nbsp;bằng c&aacute;c phương thức:</p>\r\n<ul>\r\n<li>getId(): ID người d&ugrave;ng tr&ecirc;n mạng x&atilde; hội Facebook</li>\r\n<li>getNickName(): trả về Nickname người d&ugrave;ng</li>\r\n<li>getName(): trả về t&ecirc;n người d&ugrave;ng tr&ecirc;n Facebook</li>\r\n<li>getEmail(): trả về email người d&ugrave;ng đăng k&yacute; với Facebook</li>\r\n<li>getAvatar(): trả về ảnh đại diện người d&ugrave;ng tr&ecirc;n Facebook</li>\r\n</ul>\r\n<p>&nbsp; Trong b&agrave;i tiếp theo ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn sử dụng Laravel Socialite để t&iacute;ch hợp x&aacute;c thực người d&ugrave;ng qua Google.</p>\r\n</body>\r\n</html>', 'publish', 0, 1, 'http://localhost:8000/storage/photos/1/POST/trang-dang-nhap-su-dung-laravel-socialite-tai-adshare.vn_.jpg', '2020-06-26 21:32:38', '2020-06-26 21:32:38', NULL),
(44, 'Laravel tip of the day: extra conditions on relationships query.', 'laravel-tip-of-the-day-extra-conditions-on-relationships-query', NULL, 'If you want to load relationship data, you can specify some limitations or ordering in a closure function.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body style=\"font-size: 14px;\">\r\n<p><img src=\"https://yt3.ggpht.com/62Y-y--22XuvP03Pwa98X8gngCHkC2oStx5PxIE288vSwvcaZlYognEll66W6nj_UNLXW6O3UnXP=s640-nd\" alt=\"\" width=\"640\" height=\"640\" /></p>\r\n</body>\r\n</html>', 'publish', 1, 1, 'http://localhost:8000/storage/photos/1/POST/2328768.jpg', '2020-06-27 05:23:09', '2020-06-27 05:23:09', NULL),
(45, 'Laravel tip of the day: instead of ordering by created_at desc/asc, use Eloquent methods latest/oldest.﻿', 'laravel-tip-of-the-day-instead-of-ordering-by-created-at-descasc-use-eloquent-methods-latestoldest', NULL, 'Laravel tip of the day: instead of ordering by created_at desc/asc, use Eloquent methods latest/oldest.﻿', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body style=\"font-size: 14px;\">\r\n<p><img src=\"https://yt3.ggpht.com/rpBbP5zT7j1U5gVssthd3Y11Cjw7xgharjwfDRcGGzKphJ90JO8ExtNWq2x7qsW7WWRWMbyA7FzhGw=s640-c-fcrop64=1,00000033ffffffcc-nd\" alt=\"\" /></p>\r\n</body>\r\n</html>', 'publish', 1, 1, 'http://localhost:8000/storage/photos/1/POST/2328768.jpg', '2020-06-27 05:25:09', '2020-06-27 05:25:09', NULL),
(46, 'Laravel tip of the day: if you want to specify additional logic for not-found routes, instead of just throwing', 'laravel-tip-of-the-day-if-you-want-to-specify-additional-logic-for-not-found-routes-instead-of-just-throwing', NULL, 'Laravel tip of the day: if you want to specify additional logic for not-found routes, instead of just throwing\r\ndefault 404 page, you may create a special Route for that, at the very end of your Routes file.﻿', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body style=\"font-size: 14px;\">\r\n<div id=\"content\" class=\"style-scope ytd-expander\">Laravel tip of the day: if you want to specify additional logic for not-found routes, instead of just throwing default 404 page, you may create a special Route for that, at the very end of your Routes file.</div>\r\n<div id=\"content-attachment\" class=\"style-scope ytd-backstage-post-renderer\"><a class=\"yt-simple-endpoint style-scope ytd-backstage-image-renderer\" href=\"https://www.youtube.com/post/UgxlMZ5vBorprzQaK1x4AaABCQ\" aria-label=\"Chuyển đến chi tiết b&agrave;i đăng\"><img id=\"img\" class=\"style-scope yt-img-shadow\" src=\"https://yt3.ggpht.com/3mgQe9z2ceuzcNMblwhvYAjmJRJNeAViN-Gv2wzEHuUoI-w1FckrW37aTdFmUbgRmpALkk24Mv2O=s640-c-fcrop64=1,00000000ffffffff-nd\" alt=\"\" width=\"638\" /></a></div>\r\n</body>\r\n</html>', 'publish', 1, 1, 'http://localhost:8000/storage/photos/1/POST/2328768.jpg', '2020-06-27 06:34:55', '2020-06-27 06:34:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` tinyint(3) UNSIGNED NOT NULL,
  `post_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_tags`
--

INSERT INTO `post_tags` (`id`, `tag_id`, `post_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 4, 18),
(4, 5, 18),
(5, 6, 19),
(6, 7, 19),
(7, 8, 20),
(8, 9, 20),
(9, 8, 21),
(10, 9, 21),
(11, 8, 22),
(12, 9, 22),
(13, 8, 23),
(14, 9, 23),
(15, 8, 24),
(16, 8, 26),
(17, 8, 27),
(18, 8, 28),
(19, 8, 29),
(20, 8, 30),
(21, 8, 31),
(22, 8, 32),
(23, 10, 33),
(24, 11, 34),
(25, 12, 35),
(26, 12, 36),
(27, 1, 37),
(28, 13, 37),
(29, 12, 38),
(30, 1, 40),
(31, 14, 44),
(32, 14, 45),
(33, 15, 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`) VALUES
(1, 'laravel', 'laravel'),
(2, 'example', 'example'),
(13, 'vue', 'vue'),
(14, 'tips', 'tips'),
(15, 'tip', 'tip');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cao Thanh Dang', 'thanhdang.ag@gmail.com', NULL, '$2y$10$paDPr4OM6AmNGPnwqZ2BEObJzB/peeDgBsmx1daYF3apea8RoaDYC', NULL, '2020-06-20 13:41:40', '2020-06-20 13:41:40');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_category_id_foreign` (`category_id`),
  ADD KEY `category_posts_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_index` (`post_id`),
  ADD KEY `comments_ip_index` (`ip`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_status_index` (`status`),
  ADD KEY `posts_comments_index` (`comments`),
  ADD KEY `posts_featured_index` (`featured`);
ALTER TABLE `posts` ADD FULLTEXT KEY `title` (`title`);

--
-- Chỉ mục cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`),
  ADD KEY `post_tags_post_id_index` (`post_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
