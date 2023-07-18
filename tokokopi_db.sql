-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 01:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokokopi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuss`
--

CREATE TABLE `aboutuss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stat_publish` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuss`
--

INSERT INTO `aboutuss` (`id`, `deskripsi`, `stat_publish`, `created_at`, `updated_at`) VALUES
(1, 'Ini keterangan tentang bisnis saya2', 1, '2021-07-26 20:37:00', '2021-07-26 20:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stat_publish` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `header`, `deskripsi`, `stat_publish`, `created_at`, `updated_at`) VALUES
(1, 'Memahami Perjalanan Panjang Secangkir Kopi Sempurna', 'Apa yang membuat aroma dan rasa secangkir Specialty Coffee begitu istimewa? Dibalik secangkir minuman beraroma harum ini, ada sebuah perjalanan panjang menuju kesempurnaan. Demi mendapatkan citarasa kopi terbaik, ada banyak pekerjaan rumit yang harus dilakukan.\r\nMulai dari proses tanam, ketinggian lahan perkebunan, varietas tanaman kopi, hingga cara menyeduh dan sebagainya.\r\n\r\nUntuk menghasilkan biji kopi berkualitas, setiap biji harus diperhatikan secara detail. Ada tiga titik quality control yang harus benar-benar dicermati. Apa saja proses itu? Mari kita simak!', 1, '2021-07-26 20:07:10', '2021-07-26 20:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Arabika', '2021-08-01 06:53:44', '2021-08-01 06:53:44'),
(2, 'Robusta', '2021-08-01 06:53:50', '2021-08-01 06:53:50'),
(3, 'Catimor', '2021-08-01 06:54:15', '2021-08-01 06:54:15'),
(4, 'Liberika', '2021-08-01 06:54:22', '2021-08-01 06:54:22'),
(5, 'Kolumbia', '2021-08-01 06:54:47', '2021-08-01 06:54:47'),
(6, 'Gayo', '2021-08-01 06:54:56', '2021-08-01 06:54:56'),
(7, 'Jamaika', '2021-08-01 06:55:06', '2021-08-01 06:55:06'),
(8, 'Excelsa', '2021-08-01 06:55:20', '2021-08-01 06:55:20'),
(9, 'Toraja', '2021-08-01 06:55:38', '2021-08-01 06:55:38'),
(10, 'Gesha', '2021-08-01 06:55:45', '2021-08-01 06:55:45'),
(11, 'Luwak', '2021-08-01 06:55:55', '2021-08-01 06:55:55'),
(12, 'Catuai', '2021-08-01 06:56:04', '2021-08-01 06:56:04'),
(13, 'Pacamara', '2021-08-01 06:56:14', '2021-08-01 06:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mesages`
--

CREATE TABLE `mesages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mesages`
--

INSERT INTO `mesages` (`id`, `name`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Danang', 'agustinus.devcon@gmail.com', 'Tes kirim pesan', '2021-08-03 01:11:26', '2021-08-03 01:11:26'),
(2, 'Seliana', 'msheliana@gmail.com', 'tes kedua', '2021-08-03 01:18:49', '2021-08-03 01:18:49'),
(3, 'Denta Aji', 'dentasatyaaji@gmail.com', 'koko creative, Randubelang, Bangunharjo, Kec. Sewon, Bantul, Daerah Istimewa Yogyakarta', '2021-08-25 01:22:24', '2021-08-25 01:22:24'),
(4, 'Yulius Sanjaya', 'yuliussanjaya14@gmail.com', 'nologaten,pringwulung Rt12 No13B', '2021-09-02 21:20:23', '2021-09-02 21:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_07_07_143009_create_produks_table', 1),
(4, '2021_07_07_144440_create_transaksis_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 2),
(6, '2021_07_15_140659_create_categories_table', 2),
(7, '2021_07_20_122810_create_product_table', 3),
(8, '2021_07_26_150532_create_profils_table', 4),
(9, '2021_07_27_012921_create_profils_table', 5),
(10, '2021_07_27_024527_create_artikels_table', 6),
(11, '2021_07_27_031135_create_aboutuss_table', 7),
(12, '2021_08_03_072750_create_mesages_table', 8),
(13, '2014_10_12_200000_add_two_factor_columns_to_users_table', 9),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(15, '2021_08_04_045706_create_sessions_table', 9),
(16, '2021_08_08_153638_create_trolys_table', 10),
(17, '2021_08_09_052358_create_transaksimasters_table', 11),
(18, '2021_08_09_052636_create_transaksidetails_table', 11),
(19, '2021_08_09_074524_add_kode_to_transaksimasters', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(11) NOT NULL,
  `hpp` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kdproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idkategori` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `kdproduk`, `idkategori`, `nama`, `harga`, `stok`, `path`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, '001', 1, 'Arabika Toraja', 40000, 12, 'arabica.jpg', 'Kopi dengan nama Celebes Kalosi ini paling banyak diekspor ke Jepang. Keunikannya adalah adanya aroma tanah, kecut, sedikit manis buah dan after taste-nya yang pahit namun tipis. Kopi arabika Toraja masih diproses dengan metode yang cukup tradisional. Hal inilah yang menjadikan rasanya begitu kaya dan menjadi salah satu varian istimewa dari Indonesia.', '2021-08-01 18:48:15', '2021-08-01 18:48:15'),
(4, '002', 1, 'Arabika Bali', 39000, 23, 'arabica.jpg', 'Meskipun wilayahnya kecil, Pulau Bali menjadi salah satu daerah penghasil kopi terbaik di Indonesia. Keunikannya dibandingkan kopi lokal lainnya adalah bebas dari rasa rempah yang kuat. Kopi arabika Bali Kintamani misalnya memiliki rasa asam segar di mulut dengan after taste pahit. Selain itu, rasanya juga manis sehingga cocok bagi yang tidak terlalu menyukai rasa pahit di lidah.', '2021-08-01 18:51:52', '2021-08-01 18:51:52'),
(5, '003', 4, 'Liberika Wonogiri', 25000, 16, 'liberika.jpg', 'Wonogirich tidak hanya menjual kopi liberika dari Wonogiri, tetapi juga mendampingi para petani dalam membudidayakannya. Dengan begitu, kualitas hasil panennya jadi lebih bagus dan sesuai standar perusahaan. Kopi Liberica Wonogiri ditanam di pegunungan Seribu sehingga mampu menghasilkan aroma dan rasa nangka yang lebih kuat. \r\n\r\n\r\nMenariknya lagi, kopi ini dikemas dalam kemasan aluminium yang dilengkapi katup udara. Katup udara berfungsi untuk menjaga kesegaran biji kopi jika disimpan dalam waktu lama. Kopi dari Wonogiri ini bisa jadi variasi yang menarik jika Anda memiliki kedai kopi.', '2021-08-01 19:07:38', '2021-08-01 19:07:38'),
(6, '004', 2, 'Robusta Temanggung', 25000, -10, 'robusta_temanggung.jpg', 'Kopi robusta selanjutnya yang patut Anda coba adalah kopi robusta Temanggung. Produk yang menjadi andalan adalah Robusta Temanggung Green Bean Coffee. Ini adalah produk biji kopi mentah dengan bobot 200 gram yang bisa Anda olah sendiri.', '2021-08-01 19:10:38', '2021-08-01 19:10:38'),
(7, '005', 2, 'Robusta Lampung', 30000, 4, 'robusta_lampung.jpg', 'Bicara masalah kopi, tentu Anda tidak bisa mengesampingkan kopi asal Lampung. Terkenal dengan citarasanya yang khas dan nikmat. Rasanya tetap nikmat di setiap cangkirnya. Aromanya mantap dan khas.', '2021-08-01 19:12:37', '2021-08-01 19:12:37'),
(8, '006', 2, 'Kemuning', 14000, 20, 'robusta_kemuning.jpg', 'Kopi selanjutnya berasal dari daerah Pagaralam, Sumatera Selatan. Kopi ini adalah Kemuning Coffee. Dibuat dari biji kopi Robusta pilihan yang ditanam di Pagaralam, yang selalu dijaga kualitas dan keotentikannya sejak ditanam sampai dipanen.', '2021-08-01 19:14:49', '2021-08-01 19:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stat_publish` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `deskripsi`, `path`, `stat_publish`, `created_at`, `updated_at`) VALUES
(1, 'Profil perusahaan kami', 'gayo.jpg', 1, '2021-08-09 22:21:09', '2021-08-09 22:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('60vJw0IxfnVTGUl11sYXUawcyuMJFNHnM0ulgsXV', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiR1VJU0tVc3NTbUdmRFlZZGJ3a3d4WVZpMEluQTN0ZGJJeFZtdzRHdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoyOiJpZCI7aTo0O3M6NDoibmFtZSI7czoxNDoiWXVsaXVzIFNhbmpheWEiO3M6NToibG9naW4iO2I6MTt9', 1630643513),
('cDceulZKKtgukPMmVEn0EY352A3C2l2uPzzZrjmY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYk5ZQWdnVGVDUjJDeTREVDhXTkZYbjlNRUtsTldLVFZpZEQwRmJLSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631186806),
('KFsVV07SJqKM8ex5xG7vQFUDrK8Nf6PboRB3tkhi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2xUVU9sWXNxRTE5N3liQUpXZDVNUVFkY1ByOFUyYVZKbHExbzAxayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1630639285),
('kUdJCMn1H2NCAiRlSf3gleCG43ubwL5yDNv3ikXc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieENkWUxvRlZqRFQyVXJmSmRWbDBhT3c0MTNVeFhrNHhSRU5VeXc3byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1630639283),
('l1Khg2dPcxE0dMDksZ1lXzQPUUyVr16VddQdZYU6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUUthekJJS0VHUlVpT2NMR1ZlUXZnVnozbURKSWlOeEFoOHhkcmZlNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1631186794),
('T8vtj5opwkkyPYl78L8a11U8ijLN8hgqAw1AzUra', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRGhHSFZHeXh2M2JIOFFiTW85SUloYjhITHRxeWdXbmVPSFk1RW1hOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1630639279);

-- --------------------------------------------------------

--
-- Table structure for table `transaksidetails`
--

CREATE TABLE `transaksidetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idmaster` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksidetails`
--

INSERT INTO `transaksidetails` (`id`, `idmaster`, `idproduk`, `qty`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 2, 25000, 50000, '2021-08-25 07:56:42', '2021-08-25 07:56:42'),
(2, 1, 4, 1, 39000, 39000, '2021-08-25 07:56:42', '2021-08-25 07:56:42'),
(3, 1, 5, 2, 25000, 50000, '2021-08-25 07:56:42', '2021-08-25 07:56:42'),
(4, 1, 4, 1, 39000, 39000, '2021-08-25 07:56:42', '2021-08-25 07:56:42'),
(8, 2, 6, 20, 25000, 500000, '2021-09-03 04:17:02', '2021-09-03 04:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `transaksimasters`
--

CREATE TABLE `transaksimasters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksimasters`
--

INSERT INTO `transaksimasters` (`id`, `kode`, `iduser`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'T2021-08-25 07:56:423', 3, '2021-08-25', '2021-08-25 00:56:42', '2021-08-25 00:56:42'),
(2, 'T2021-09-03 04:17:014', 4, '2021-09-03', '2021-09-02 21:17:01', '2021-09-02 21:17:01'),
(3, 'T2021-09-03 04:17:494', 4, '2021-09-03', '2021-09-02 21:17:49', '2021-09-02 21:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kdtransaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trolys`
--

CREATE TABLE `trolys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `nohp`, `almt`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agustinus Danang Setiyawan', 'agustinus.devcon@gmail.com', NULL, '777951ead52eafb8cc65eda53ce59bd4', NULL, NULL, '081227934702', 'Jl Tabung No.9 Pojok Tiyasan Condong Catur Sleman', NULL, '2021-08-03 19:29:18', '2021-08-03 19:29:18'),
(2, 'Gilbert', 'gilbert@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '081081081081', 'Yogyakarta', NULL, '2021-08-08 18:46:35', '2021-08-08 18:46:35'),
(3, 'denta satya aji', 'dentasatyaaji@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '082276351298', 'Serumbung Ngagorsoko Jawa Tengah', NULL, '2021-08-14 00:55:35', '2021-08-14 00:55:35'),
(4, 'Yulius Sanjaya', 'yuliussanjaya14@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '0812998736', 'yogyakarta', NULL, '2021-09-02 21:11:59', '2021-09-02 21:11:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuss`
--
ALTER TABLE `aboutuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mesages`
--
ALTER TABLE `mesages`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaksidetails`
--
ALTER TABLE `transaksidetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksimasters`
--
ALTER TABLE `transaksimasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trolys`
--
ALTER TABLE `trolys`
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
-- AUTO_INCREMENT for table `aboutuss`
--
ALTER TABLE `aboutuss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesages`
--
ALTER TABLE `mesages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksidetails`
--
ALTER TABLE `transaksidetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksimasters`
--
ALTER TABLE `transaksimasters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trolys`
--
ALTER TABLE `trolys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
