-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2023 pada 04.43
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id`, `user_id`, `link_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Melakukan penambahan data Link dengan nama Youtube', '2023-07-25 16:15:30', '2023-07-25 16:15:30'),
(3, 1, 3, 'Melakukan penambahan data Link dengan nama asdf', '2023-07-26 03:53:45', '2023-07-26 03:53:45'),
(5, 1, 5, 'Melakukan penambahan data Link dengan nama fsdf', '2023-08-04 15:37:04', '2023-08-04 15:37:04'),
(6, 1, 6, 'Melakukan penambahan data Link dengan nama DATA BARU', '2023-08-11 12:53:11', '2023-08-11 12:53:11'),
(7, 1, 6, 'Melakukan Perubahan pada data Link dengan nama DATA BARU', '2023-08-14 01:48:34', '2023-08-14 01:48:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Libur Semester', '<p>Dalam rangka merayakan libur ketika selsai ujian maka ini akan libur&nbsp;</p><p>&nbsp;</p><p>yayyaya</p>', '2023-07-26 07:52:14', '2023-08-13 03:40:21'),
(3, 1, 'Libur HUT 79 RI', '<p><i>Assalamuikum Wr.Wb…</i></p><p>Diberitahukan kepada selurh Karyawan digitaliz , Dalam rangka memperingati HUT-79 RI, maka seluruh karyawan akan diliburkan pad<strong>a &nbsp;Senin, 16 Agustus 2023</strong> dan turun kembali pada <strong>tanggal 20 Agustus 2023.</strong></p><p>Sekian informasi yang dapat di sampaikan,</p><p>Wassalamualikum Wr. Wb</p><p><br>&nbsp;</p>', '2023-08-13 12:34:29', '2023-08-13 12:34:29'),
(4, 1, 'Libur Hari Raya Waisak', '<p>Diberitahukan kepada seluruh karyawan bahwa kantor kami akan libur pada hari Kamis, tanggal 28 Oktober 2023, karena adanya perayaan Hari Raya Waisak. Kami akan kembali beroperasi seperti biasa pada hari Jumat, tanggal 29 Oktober 2023.</p>', '2023-08-13 12:36:42', '2023-08-13 12:36:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcement_comments`
--

CREATE TABLE `announcement_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcement_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `announcement_comments`
--

INSERT INTO `announcement_comments` (`id`, `announcement_id`, `user_id`, `value`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'mungkin 2 hari', '2023-07-26 07:52:59', '2023-07-26 07:52:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `icon_id`, `name`, `slug`, `color`, `created_at`, `updated_at`) VALUES
(1, 2, 'WEB DEVELOPER', 'web-developer', '#ff1414', '2023-07-25 16:14:43', '2023-07-25 16:14:43'),
(2, 3, 'UI_UX', 'ui-ux', '#25d1f4', '2023-08-04 03:47:02', '2023-08-04 07:20:54'),
(3, 4, 'Inbox', 'inbox', '#6cff0a', '2023-08-09 14:04:38', '2023-08-09 14:04:38'),
(4, 1, 'Desain', 'desain', '#0b81ef', '2023-08-11 07:17:35', '2023-08-11 07:17:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat_groups`
--

CREATE TABLE `chat_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `chat_groups`
--

INSERT INTO `chat_groups` (`id`, `user_id`, `team_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'hello', '2023-08-05 04:08:31', '2023-08-05 04:08:31'),
(2, 1, 1, 'hello', '2023-08-05 04:09:33', '2023-08-05 04:09:33'),
(3, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipiscing elit cras, quam id justo pulvinar urna consequat suscipit parturient, platea sem convallis ad lectus nam dictum. Feugiat enim sem auctor litora laoreet etiam egestas nec nulla, sagittis augue suspendisse tortor parturient at lectus habitant facilisis, porta varius mus dapibus curae habitasse neque praesent. Hac inceptos parturient vivamus gravida convallis curae accumsan facilisis fringilla sociosqu himenaeos risus, fusce facilisi ridiculus egestas ante sagittis pulvinar donec phasellus lacinia orci. Neque conubia morbi vel viverra vehicula nisl congue suscipit, netus dignissim penatibus habitasse feugiat erat commodo eget, inceptos volutpat hac sem metus sapien curae. Tempus sollicitudin facilisis aliquet est cras lacinia rutrum, at dictumst orci dis arcu ac, id quisque luctus mi ante taciti. Pulvinar rutrum aliquet netus leo nullam odio curabitur, vehicula rhoncus convallis felis at urna et integer, nisl magnis lacinia turp\n', '2023-08-05 04:18:55', '2023-08-05 04:18:55'),
(4, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipiscing elit cras, quam id justo pulvinar urna consequat suscipit parturient, platea sem convallis ad lectus nam dictum. Feugiat enim sem auctor litora laoreet etiam egestas nec nulla, sagittis augue suspendisse tortor parturient at lectus habitant facilisis, porta varius mus dapibus curae habitasse neque praesent. Hac inceptos parturient vivamus gravida convallis curae accumsan facilisis fringilla sociosqu himenaeos risus, fusce facilisi ridiculus egestas ante sagittis pulvinar donec phasellus lacinia orci. Neque conubia morbi vel viverra vehicula nisl congue suscipit, netus dignissim penatibus habitasse feugiat erat commodo eget, inceptos volutpat hac sem metus sapien curae. Tempus sollicitudin facilisis aliquet est cras lacinia rutrum, at dictumst orci dis arcu ac, id quisque luctus mi ante taciti. Pulvinar rutrum aliquet netus leo nullam odio curabitur, vehicula rhoncus convallis felis at urna et integer, nisl magnis lacinia turp', '2023-08-05 04:19:03', '2023-08-05 04:19:03'),
(5, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipiscing elit cras, quam id justo pulvinar urna consequat suscipit parturient, platea sem convallis ad lectus nam dictum. Feugiat enim sem auctor litora laoreet etiam egestas nec nulla, sagittis augue suspendisse tortor parturient at lectus habitant facilisis, porta varius mus dapibus curae habitasse neque praesent. Hac inceptos parturient vivamus gravida convallis curae accumsan facilisis fringilla sociosqu himenaeos risus, fusce facilisi ridiculus egestas ante sagittis pulvinar donec phasellus lacinia orci. Neque conubia morbi vel viverra vehicula nisl congue suscipit, netus dignissim penatibus habitasse feugiat erat commodo eget, inceptos volutpat hac sem metus sapien curae. Tempus sollicitudin facilisis aliquet est cras lacinia rutrum, at dictumst orci dis arcu ac, id quisque luctus mi ante taciti. Pulvinar rutrum aliquet netus leo nullam odio curabitur, vehicula rhoncus convallis felis at urna et integer, nisl magnis lacinia turp', '2023-08-05 04:19:07', '2023-08-05 04:19:07'),
(6, 1, 1, 'hallo\n', '2023-08-05 04:39:09', '2023-08-05 04:39:09'),
(7, 1, 1, 'hello', '2023-08-05 04:40:22', '2023-08-05 04:40:22'),
(8, 1, 1, 'hahahhah hello gays\n', '2023-08-05 04:43:31', '2023-08-05 04:43:31'),
(9, 1, 1, 'hallo\n', '2023-08-05 04:56:14', '2023-08-05 04:56:14'),
(10, 1, 1, 'hallo\n', '2023-08-05 05:00:44', '2023-08-05 05:00:44'),
(11, 1, 1, 'dafa\n', '2023-08-05 05:05:02', '2023-08-05 05:05:02'),
(12, 1, 1, 'dan\n', '2023-08-05 05:43:39', '2023-08-05 05:43:39'),
(13, 1, 1, 'hallo', '2023-08-05 05:43:58', '2023-08-05 05:43:58'),
(14, 1, 1, 'dan', '2023-08-05 05:44:06', '2023-08-05 05:44:06'),
(15, 1, 1, 'asdf', '2023-08-05 05:44:24', '2023-08-05 05:44:24'),
(16, 1, 1, 'sadfasdf', '2023-08-05 05:44:28', '2023-08-05 05:44:28'),
(17, 1, 1, 'yah', '2023-08-05 05:44:33', '2023-08-05 05:44:33'),
(18, 1, 1, 'pasti', '2023-08-05 05:44:41', '2023-08-05 05:44:41'),
(19, 1, 1, 'dan\n', '2023-08-05 05:45:48', '2023-08-05 05:45:48'),
(20, 1, 1, 'dan', '2023-08-05 05:46:11', '2023-08-05 05:46:11'),
(21, 1, 1, 'bisa saja', '2023-08-05 05:46:19', '2023-08-05 05:46:19'),
(22, 1, 1, 'asalkan ada beberapa hal yang mesti kamu harus lakukan dan bisa menjadi yang luar biasa dari biasanya', '2023-08-05 05:46:46', '2023-08-05 05:46:46'),
(23, 1, 1, 'mungkin di sni ada beberap perbedaan yag', '2023-08-05 06:33:34', '2023-08-05 06:33:34'),
(30, 1, 1, 'ada yang bisa saya bantu', '2023-08-05 07:38:01', '2023-08-05 07:38:01'),
(33, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipiscing elit, proin orci pharetra volutpat euismod aenean sapien, penatibus laoreet vehicula fermentum cras tellus. Condimentum venenatis gravida fringilla ridiculus egestas, nisl a et ad molestie velit, senectus tortor sociis arcu. Cursus justo nullam semper mus nostra mi placerat, faucibus et magnis morbi fermentum vehicula, ', '2023-08-05 07:39:41', '2023-08-05 07:39:41'),
(35, 1, 1, 'jika kita adakan rapat bagaimana ?', '2023-08-05 13:40:47', '2023-08-05 13:40:47'),
(36, 1, 1, 'hola', '2023-08-05 15:59:09', '2023-08-05 15:59:09'),
(40, 1, 1, 'iya ada yang bisa saya bantu pak', '2023-08-09 14:40:32', '2023-08-09 14:40:32'),
(49, 1, 3, 'iya mau betanya apa', '2023-08-13 08:56:49', '2023-08-13 08:56:49'),
(51, 1, 3, 'Lorem ipsum dolor sit amet consectetur adipiscing, elit aliquet vel ridiculus eget ad, magnis imperdiet varius id massa, malesuada lectus netus arcu dapibus. Vel himenaeos quisque et ullamcorper morbi pharetra lobortis mattis fusce phasellus, risus habitasse congue est tortor vestibulum neque varius platea feugiat, egestas mus taciti nibh felis condimentum inceptos facilisis vivamus. Dui penatibus enim vel mauris posuere dapibus eros dignissim nec aliquet suscipit, cubilia ullamcorper risus accumsan fames vulputate natoque ornare fringilla nisl justo, diam phasellus ad porttitor leo vivam', '2023-08-13 08:57:33', '2023-08-13 08:57:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`id`, `name`, `company`, `email`, `phone`, `address`, `project_type`, `project_description`, `created_at`, `updated_at`) VALUES
(1, 'Julia Rahimah', 'Fa Namaga Rahayu (Persero) Tbk', 'lmaheswara@yahoo.com', '0830 7240 3859', 'Psr. Cihampelas No. 401, Kupang 79145, Pabar', 'api', 'Lorem ipsum dolor sit amet consectetur adipiscing elit suspendisse tincidunt, sagittis dignissim cras fames montes augue nibh nisl aptent, justo pharetra semper vulputate metus porta feugiat netus. Nostra fermentum proin blandit facilisis congue aptent eleifend ridiculus, diam sociis lacinia nisl praesent etiam torquent mauris pretium, ad non fames sollicitudin ornare penatibus orci. Parturient morbi nisi aliquam etiam ultricies hendrerit dignissim, nullam semper bibendum justo tellus interdum ad elementum, habitasse libero magna nulla lacus placerat. Erat id tortor ridiculus nunc sed senectus felis lobortis commodo, augue pharetra curabitur sapien diam neque dictumst fringilla habitasse, metus accumsan himenaeos egestas orci volutpat platea dapibus. Pulvinar massa mattis donec rhoncus nunc diam nascetur aliquet, purus pellentesque eros posuere aptent penatibus netus, habitant convallis ultricies ligula bibendum cras suscipit. Volutpat sed auctor parturient nulla nec morbi aliquet venenatis, ante ut tellus egestas praesent vel conubia primis velit, vivamus facilisi pellentesque vehicula aliquam sem blandit. Suspendisse sodales quis sagittis in per congue etiam magnis, curabitur nam sed dui fames consequat eu.', '2023-07-25 16:12:57', '2023-08-13 15:48:09'),
(2, 'Ika Nasyiah M.Pd', 'UD Agustina (Persero) Tbk', 'dacin.kurniawan@gmail.com', '0759 2670 998', 'Dk. Tentara Pelajar No. 333, Sorong 71270, Jambi', 'mobile', 'Velit omnis dolore harum. Possimus est voluptatem neque. Praesentium voluptatem explicabo quae expedita non. Dignissimos non ex minima ut ipsam qui totam.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(3, 'Ani Winda Utami S.IP', 'PD Rajasa', 'nnapitupulu@gmail.com', '0811 7307 0162', 'Psr. Kartini No. 206, Serang 56461, Sumsel', 'desktop', 'Sequi quibusdam earum aut voluptas voluptate odit. Est dolorem ut quia magni animi necessitatibus voluptas mollitia. Officia non aut ipsum.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(4, 'Qori Prastuti', 'PJ Prayoga Pradipta Tbk', 'dongoran.sarah@yahoo.com', '(+62) 865 522 830', 'Psr. Ir. H. Juanda No. 942, Banjarmasin 97173, Kaltara', 'desktop', 'Aut sit quia aut accusamus laborum molestiae. Enim impedit ipsum quisquam illum ad assumenda reiciendis modi. Enim veritatis ut cumque et.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(5, 'Narji Harjasa Simbolon', 'UD Pradipta Hakim (Persero) Tbk', 'putri89@wibowo.org', '0847 4559 580', 'Jr. Bakit  No. 475, Pasuruan 48996, DIY', 'mobile', 'Repellendus qui odit vel sit nobis ea. Accusantium eius deleniti ut quidem. Magni cum perspiciatis exercitationem. Suscipit facere mollitia laborum autem explicabo quas.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(6, 'Bakianto Tampubolon', 'UD Yulianti Utami', 'baktianto87@lazuardi.name', '0990 0597 341', 'Gg. Sumpah Pemuda No. 333, Palembang 50669, Aceh', 'web', 'Et suscipit labore perferendis quidem at praesentium vel. Ad aspernatur tenetur doloremque repellat dicta ducimus. Eaque maxime quam et aut nisi.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(7, 'Puspa Wijayanti M.Ak', 'Perum Budiyanto Oktaviani (Persero) Tbk', 'oliva14@yahoo.com', '(+62) 406 2877 635', 'Jr. Abang No. 366, Surabaya 96096, DKI', 'desktop', 'Veniam eius suscipit esse dicta necessitatibus. Officiis sed id aut molestias. Voluptas alias placeat sed aliquam velit libero sit. Fuga id sapiente ea ut similique praesentium.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(8, 'Bancar Kawaca Pratama S.Pd', 'Yayasan Sitompul', 'pia.agustina@sitorus.net', '0940 2367 471', 'Gg. Kyai Mojo No. 530, Kediri 78599, Sumut', 'mobile', 'Consectetur rem et nulla aut aliquam. Est nemo accusamus soluta cum. In animi sint aspernatur fugit amet et. Debitis aut dolorem nobis est corrupti. Vero atque aliquid laudantium voluptatibus dolorum dolore odit ducimus.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(9, 'Laswi Sihombing', 'PJ Prastuti Kuswandari', 'eka36@yahoo.com', '0270 0794 792', 'Ki. Barat No. 41, Singkawang 51277, Gorontalo', 'desktop', 'Aut perferendis veritatis rerum et aut perspiciatis nam. Sint aut hic reiciendis aut itaque ex. Est qui maxime et maxime corporis deserunt. Nesciunt occaecati molestias debitis molestias. Nemo est rerum et occaecati reiciendis aut.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(10, 'Legawa Wijaya', 'Fa Januar Suryono', 'ida.prakasa@haryanti.sch.id', '(+62) 702 1068 3405', 'Ki. Kyai Gede No. 737, Gorontalo 99837, Kaltara', 'api', 'Laborum aut mollitia quis hic eos quis cumque. Quam rerum consequatur et qui quia. Voluptatem quia ea earum ut illum itaque. Enim qui voluptatem tempora rerum.', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(11, 'M. Nawir', 'INDONESIAN', 'nawir@gmail.com', '+6282251494208', 'sekapung pulau sebuku', 'Project Type', 'sadfasdfasdfasdf', '2023-08-14 16:30:31', '2023-08-14 16:30:31'),
(12, 'M. Nawir', 'INDONESIAN', 'nawir@gmail.com', '+6282251494208', 'sekapung pulau sebuku', 'website', 'description project', '2023-08-14 16:41:09', '2023-08-14 16:41:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daily_reports`
--

CREATE TABLE `daily_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daily_reports`
--

INSERT INTO `daily_reports` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-08-01 23:56:27', '2023-08-01 23:56:27'),
(2, '2023-08-09 16:18:40', '2023-08-09 16:18:40'),
(3, '2023-08-15 05:34:28', '2023-08-15 05:34:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daily_report_lists`
--

CREATE TABLE `daily_report_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `daily_report_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daily_report_lists`
--

INSERT INTO `daily_report_lists` (`id`, `user_id`, `project_id`, `daily_report_id`, `content`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 1, '<p>Summary :&nbsp;</p><ul><li>membuat tampilan bagian admin dashboard1</li><li>membuat slicing bagian page mentor</li><li>membuat controller di bagian admin</li></ul><p>&nbsp;</p><p>Kendala:&nbsp;</p><ul><li>kurangnya dokumentasi</li><li>banyak source code yang tabrakan&nbsp;</li><li>kurang dalam memahami konsep koding</li></ul><p>&nbsp;</p><p>Target:</p><ul><li>menyelesaikan tampian admin…</li><li>membuat CRUD data client di admin</li><li>membuat rancanga data base di admin</li></ul>', '2023-08-03 14:08:11', '2023-08-04 10:00:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `place_birth` varchar(255) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `employes`
--

INSERT INTO `employes` (`id`, `user_id`, `name`, `gender`, `phone`, `date_birth`, `place_birth`, `hire_date`, `position`, `address`, `verified`, `created_at`, `updated_at`) VALUES
(1, 1, 'Muhammad Nawir', 'laki-laki', '(+62) 25 4517 2680', '2009-04-07', 'Tomohon', '1971-07-29', 'Graphic Designer', 'Jln. Gremet No. 77, Sukabumi 11773, Bengkulu', 1, '2023-07-25 16:12:57', '2023-08-11 01:44:23'),
(2, 10, 'Luhung Maryadi Prasasta M.Ak', 'laki-laki', '(+62) 498 4144 4138', '2019-07-22', 'Salatiga', '2014-09-06', 'Data Analyst', 'Kpg. Pahlawan No. 805, Tebing Tinggi 27203, Sulbar', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(3, 4, 'Laila Nurdiyanti', 'laki-laki', '(+62) 695 9320 9445', '2002-10-07', 'Administrasi Jakarta Pusat', '1987-09-07', 'Data Analyst', 'Gg. Baing No. 807, Kupang 70464, Sulut', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(4, 5, 'Hasim Mursita Hutagalung', 'perempuan', '(+62) 850 275 592', '2020-03-17', 'Serang', '2008-01-22', 'Graphic Designer', 'Jln. Ir. H. Juanda No. 680, Solok 74541, Riau', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(6, 9, 'Ega Prasetyo M.M.', 'laki-laki', '022 2555 1144', '2011-12-13', 'Padang', '1970-06-07', 'Programmer', 'Jln. Suniaraja No. 226, Cilegon 24843, Sulteng', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(7, 3, 'Siska Maida Purwanti', 'laki-laki', '(+62) 445 0500 623', '1981-06-08', 'Palangka Raya', '1971-08-28', 'Programmer', 'Jln. Pasir Koja No. 750, Pariaman 17230, Papua', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(8, 8, 'Titin Winda Permata', 'perempuan', '0935 0748 037', '1988-07-29', 'Bandung', '1983-07-05', 'Graphic Designer', 'Ds. Cikutra Timur No. 216, Sorong 26977, NTB', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(9, 6, 'Harto Prasetya', 'laki-laki', '(+62) 391 5364 7257', '1997-03-06', 'Langsa', '1971-04-17', 'Programmer', 'Ds. Laksamana No. 443, Mataram 68046, Sumsel', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(10, 7, 'Marwata Waluyo', 'laki-laki', '(+62) 263 7558 7839', '1990-05-14', 'Tarakan', '2012-03-13', 'Programmer', 'Jln. Dewi Sartika No. 525, Makassar 70645, Sumbar', 1, '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(13, 13, 'zahra', 'perempuan', NULL, NULL, NULL, '2023-08-04', 'Programmer', NULL, 1, '2023-08-04 10:08:38', '2023-08-04 10:09:12'),
(19, 19, 'Muhammad Nawir', 'laki-laki', NULL, NULL, NULL, '2023-08-14', 'Select Postion', NULL, 1, '2023-08-14 14:36:57', '2023-08-14 14:45:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `folders`
--

CREATE TABLE `folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `folders`
--

INSERT INTO `folders` (`id`, `category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'dokumentasi', 'dokumentasi', '2023-07-25 16:14:58', '2023-07-25 16:14:58'),
(2, 1, 'folder baru', 'folder-baru', '2023-07-26 03:00:07', '2023-07-26 03:00:07'),
(3, 2, 'Desain Awal', 'desain-awal', '2023-08-04 15:36:30', '2023-08-04 15:36:30'),
(4, 2, 'yiuyhi', 'yiuyhi', '2023-08-04 15:45:50', '2023-08-04 15:45:50'),
(6, 2, 'folder baru', 'folder-baru', '2023-08-05 07:57:52', '2023-08-05 07:57:52'),
(7, 3, 'folde baru', 'folde-baru', '2023-08-09 14:05:17', '2023-08-09 14:05:17'),
(8, 1, 'folder baru2', 'folder-baru2', '2023-08-11 07:20:53', '2023-08-11 07:20:53'),
(9, 4, 'FOLDER BARU', 'folder-baru', '2023-08-11 12:46:39', '2023-08-11 12:46:39'),
(11, 4, 'Dokumentasi', 'dokumentasi', '2023-08-13 07:33:21', '2023-08-13 07:33:21'),
(12, 4, 'Link Elearning', 'link-elearning', '2023-08-13 07:33:30', '2023-08-13 07:33:30'),
(13, 4, 'SOP', 'sop', '2023-08-13 07:33:42', '2023-08-13 07:34:07'),
(14, 4, 'Tools', 'tools', '2023-08-13 07:34:35', '2023-08-13 07:34:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `icons`
--

INSERT INTO `icons` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'icon', '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"w-6 h-6\">\n  <path d=\"M19.5 6h-15v9h15V6z\" />\n  <path fill-rule=\"evenodd\" d=\"M3.375 3C2.339 3 1.5 3.84 1.5 4.875v11.25C1.5 17.16 2.34 18 3.375 18H9.75v1.5H6A.75.75 0 006 21h12a.75.75 0 000-1.5h-3.75V18h6.375c1.035 0 1.875-.84 1.875-1.875V4.875C22.5 3.839 21.66 3 20.625 3H3.375zm0 13.5h17.25a.375.375 0 00.375-.375V4.875a.375.375 0 00-.375-.375H3.375A.375.375 0 003 4.875v11.25c0 .207.168.375.375.375z\" clip-rule=\"evenodd\" />\n</svg>', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(2, 'icon2', '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"w-6 h-6\">\n  <path fill-rule=\"evenodd\" d=\"M14.447 3.027a.75.75 0 01.527.92l-4.5 16.5a.75.75 0 01-1.448-.394l4.5-16.5a.75.75 0 01.921-.526zM16.72 6.22a.75.75 0 011.06 0l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 11-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 010-1.06zm-9.44 0a.75.75 0 010 1.06L2.56 12l4.72 4.72a.75.75 0 11-1.06 1.06L.97 12.53a.75.75 0 010-1.06l5.25-5.25a.75.75 0 011.06 0z\" clip-rule=\"evenodd\" />\n</svg>\n', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(3, 'icon3', '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" class=\"w-6 h-6\">\n  <path fill-rule=\"evenodd\" d=\"M3 4.875C3 3.839 3.84 3 4.875 3h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 013 9.375v-4.5zM4.875 4.5a.375.375 0 00-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 00.375-.375v-4.5a.375.375 0 00-.375-.375h-4.5zm7.875.375c0-1.036.84-1.875 1.875-1.875h4.5C20.16 3 21 3.84 21 4.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5a1.875 1.875 0 01-1.875-1.875v-4.5zm1.875-.375a.375.375 0 00-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 00.375-.375v-4.5a.375.375 0 00-.375-.375h-4.5zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75A.75.75 0 016 7.5v-.75zm9.75 0A.75.75 0 0116.5 6h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zM3 14.625c0-1.036.84-1.875 1.875-1.875h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.035-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 013 19.125v-4.5zm1.875-.375a.375.375 0 00-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 00.375-.375v-4.5a.375.375 0 00-.375-.375h-4.5zm7.875-.75a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm6 0a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zM6 16.5a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm9.75 0a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm-3 3a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm6 0a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75z\" clip-rule=\"evenodd\" />\n</svg>\n', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(4, 'inbox', '<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">   <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z\" /> </svg>', '2023-08-09 14:04:09', '2023-08-09 14:04:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `folder_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `links`
--

INSERT INTO `links` (`id`, `user_id`, `folder_id`, `name`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Youtube', 'www.youtube.com', 'link youtube', '2023-07-25 16:15:30', '2023-07-25 16:15:30'),
(3, 1, 1, 'asdf', 'sadfasds', 'SFSDS', '2023-07-26 03:53:45', '2023-07-26 03:53:45'),
(5, 1, 3, 'fsdf', 'sadfsa', 'sadfsadf', '2023-08-04 15:37:04', '2023-08-04 15:37:04'),
(6, 1, 2, 'DATA BARU', 'https://www.youtube.com/watch?v=bxyrooBArlU', 'HELLO WORD', '2023-08-11 12:53:11', '2023-08-14 01:48:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, '3f5d4974-1198-48c0-b8ca-4aa1bba099d5', 'profile', 'WhatsApp Image 2023-02-16 at 10.43.42', 'WhatsApp-Image-2023-02-16-at-10.43.42.jpeg', 'image/jpeg', 'public', 'public', 105356, '[]', '[]', '[]', '[]', 1, '2023-07-25 16:26:22', '2023-07-25 16:26:22'),
(7, 'App\\Models\\Presence', 25, '581c187a-85ec-42f9-baa0-c8eb9279dda1', 'lampiran_surat', 'detail_team (2)', 'detail_team-(2).pdf', 'application/pdf', 'public', 'public', 56837, '[]', '[]', '[]', '[]', 1, '2023-08-11 12:34:18', '2023-08-11 12:34:18'),
(8, 'App\\Models\\Presence', 26, '1abbd738-8ab0-4780-8803-b75e85ac291d', 'lampiran_surat', 'detail_project (2)', 'detail_project-(2).pdf', 'application/pdf', 'public', 'public', 56598, '[]', '[]', '[]', '[]', 1, '2023-08-13 04:07:33', '2023-08-13 04:07:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `implement` varchar(255) NOT NULL,
  `place` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `meetings`
--

INSERT INTO `meetings` (`id`, `date`, `time`, `team_id`, `implement`, `place`, `created_at`, `updated_at`) VALUES
(4, '2023-08-26', '23:23:00', 1, 'online', 'https://stackoverflow.com/questions/33405939/formatting-a-carbon-date-instance', '2023-08-05 15:34:00', '2023-08-06 02:30:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_03_062908_create_clients_table', 1),
(6, '2023_07_05_054023_create_projects_table', 1),
(7, '2023_07_06_092501_create_employes_table', 1),
(8, '2023_07_09_114520_create_icons_table', 1),
(9, '2023_07_09_115445_create_categories_table', 1),
(10, '2023_07_10_033534_create_folders_table', 1),
(11, '2023_07_19_130031_create_links_table', 1),
(12, '2023_07_20_014457_create_announcements_table', 1),
(13, '2023_07_21_130902_create_media_table', 1),
(14, '2023_07_24_024338_create_announcement_comments_table', 1),
(15, '2023_07_24_091842_create_teams_table', 1),
(16, '2023_07_24_092513_create_team_members_table', 1),
(17, '2023_07_25_145545_create_activities_table', 1),
(18, '2023_07_25_231900_create_permission_tables', 1),
(20, '2023_07_26_213754_create_presences_table', 2),
(21, '2023_07_26_214844_create_work_permits_table', 3),
(23, '2023_07_31_020413_create_tasks_table', 4),
(24, '2023_08_01_225652_create_daily_reports_table', 5),
(27, '2023_08_02_081159_create_daily_report_lists_table', 6),
(29, '2023_08_04_135227_create_sops_table', 7),
(30, '2023_08_05_111801_create_chat_groups_table', 8),
(32, '2023_08_05_204141_create_meetings_table', 9),
(33, '2023_08_15_205346_create_tes_codings_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `presences`
--

CREATE TABLE `presences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presences`
--

INSERT INTO `presences` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(28, 19, 'late', '2023-08-15 04:30:41', '2023-08-15 04:30:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `frontend` varchar(255) NOT NULL,
  `backend` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  `progres` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `client_id`, `name`, `type`, `frontend`, `backend`, `start_date`, `end_date`, `description`, `progres`, `created_at`, `updated_at`) VALUES
(1, 2, 'digitaliz website', 'website', 'Tailwind CSS', 'Laravel', '2023-07-26', '2023-08-05', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, sodales ultricies nisl iaculis in ac nam, ridiculus sociis interdum cubilia ante dapibus.', 60, '2023-07-26 05:26:36', '2023-08-14 02:53:51'),
(3, 1, 'Futuca', 'website', 'Tailwind CSS', 'Laravel', '2023-08-13', '2023-12-08', 'Lorem ipsum dolor sit amet consectetur adipiscing, elit morbi curae ullamcorper justo, habitant pretium volutpat netus viverra. Laoreet faucibus curabitur cubilia convallis iaculis commodo tellus pharetra praesent, leo justo hac senectus sem ante himenaeos nibh lectus pretium, dignissim vehicula viverra conubia purus nisl duis eget. Urna leo id sodales ullamcorper ad arcu sapien commodo lacus venenatis facilisi, suspendisse mollis mus viverra lacinia sociosqu per vitae proin platea felis, fermentum mattis risus varius molestie condimentum fusce dapibus lectus fames. Dictum sagittis montes congue parturient mauris eget, lectus facilisi mollis dis ad malesuada, diam cum semper leo turpis. Commodo praesent litora lacinia est dictum, varius ligula eget nisl vehicula orci, donec elementum eleifend at.', 0, '2023-08-13 08:17:24', '2023-08-13 08:17:24'),
(4, 4, 'Enjoy Cafe Website', 'website', 'Tailwind CSS', 'Laravel', '2023-08-13', '2023-12-14', 'Lorem ipsum dolor sit amet consectetur adipiscing, elit morbi curae ullamcorper justo, habitant pretium volutpat netus viverra. Laoreet faucibus curabitur cubilia convallis iaculis commodo tellus pharetra praesent, leo justo hac senectus sem ante himenaeos nibh lectus pretium, dignissim vehicula viverra conubia purus nisl duis eget. Urna leo id sodales ullamcorper ad arcu sapien commodo lacus venenatis facilisi, suspendisse mollis mus viverra lacinia sociosqu per vitae proin platea felis, fermentum mattis risus varius molestie condimentum fusce dapibus lectus fames. Dictum sagittis montes congue parturient mauris eget, lectus facilisi mollis dis ad malesuada, diam cum semper leo turpis. Commodo praesent litora lacinia est dictum, varius ligula eget nisl vehicula orci, donec elementum eleifend at.', 60, '2023-08-13 08:18:01', '2023-08-13 16:07:38'),
(5, 1, 'SIA POLHAS', 'mobile', 'Dart', 'Fluttuer', '2023-08-13', '2023-12-23', 'Lorem ipsum dolor sit amet consectetur adipiscing, elit morbi curae ullamcorper justo, habitant pretium volutpat netus viverra. Laoreet faucibus curabitur cubilia convallis iaculis commodo tellus pharetra praesent, leo justo hac senectus sem ante himenaeos nibh lectus pretium, dignissim vehicula viverra conubia purus nisl duis eget. Urna leo id sodales ullamcorper ad arcu sapien commodo lacus venenatis facilisi, suspendisse mollis mus viverra lacinia sociosqu per vitae proin platea felis, fermentum mattis risus varius molestie condimentum fusce dapibus lectus fames. Dictum sagittis montes congue parturient mauris eget, lectus facilisi mollis dis ad malesuada, diam cum semper leo turpis. Commodo praesent litora lacinia est dictum, varius ligula eget nisl vehicula orci, donec elementum eleifend at.', 50, '2023-08-13 08:19:50', '2023-08-13 08:32:35'),
(7, 12, 'Muhammad Nawir', 'mobile', 'Tailwind CSS', 'sdfsad', '2023-08-21', '2023-08-15', 'Lorem ipsum dolor sit amet consectetur adipiscing elit, inceptos at sem nisi tincidunt imperdiet sapien quam, sed laoreet vel arcu pulvinar fermentum. Cum diam fringilla volutpat quis fames vehicula tristique, malesuada inceptos laoreet per ut eros magna enim, dapibus natoque ac aliquam netus pellentesque. Vivamus egestas libero pulvinar cum facilisis laoreet volutpat, sapien metus iaculis nam nullam semper porta tempus, mauris ad nostra purus montes eleifend. Netus ullamcorper dictum lectus co', 0, '2023-08-15 04:26:29', '2023-08-15 04:26:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(2, 'karyawan', 'web', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(3, 'magang', 'web', '2023-07-25 16:12:57', '2023-07-25 16:12:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sops`
--

CREATE TABLE `sops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sops`
--

INSERT INTO `sops` (`id`, `team_id`, `time`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-08-06 11:03:06', '<h2><strong>Laravel Stuck</strong></h2><ul><li>Laravel Versi Terbaru</li><li>Tailwind CSS (Priority 🔥)</li><li>Livewire</li><li>Vue.js</li><li>Inertia (React/Vue)</li><li>Bootstrap 5</li><li>sdfsd</li></ul><p>&nbsp;</p><h2><strong>Starter Kit</strong></h2><ul><li>Breeze (Priority 🔥)</li><li>Laravel Passport (Priority 🔥)</li><li>Laravel Fortify</li><li>Laravel UI (Bootstrap)</li><li>Jetstream (Optional)</li></ul><p>&nbsp;</p><h2><strong>Template Frontend/Admin</strong></h2><ul><li>Architect UI (Request to Jun)</li><li>Front UI (Request to Ibnu)</li><li>Windmill Tailwind (<a href=\"https://windmillui.com/dashboard-html\">https://windmillui.com/dashboard-html</a>)</li><li>Tailwind Library</li><li>Daisyui (Priority 🔥) → <a href=\"https://daisyui.com/\">https://daisyui.com/</a></li><li>Flowbite → <a href=\"https://flowbite.com/docs/getting-started/introduction/\">https://flowbite.com/docs/getting-started/introduction/</a></li><li>hello</li></ul><p>&nbsp;</p><h2><strong>Database SQL</strong></h2><ul><li>Beri nama tabel yang jelas</li><li>Jika nama tabel menggunakan bahasa Indonesia, usahakan nama nya mudah dipahami<ul><li>dinases → <strong>dinas</strong></li><li>kabupatens → <strong>kabupaten</strong></li><li>sekolahs → <strong>sekolah</strong></li></ul></li><li>Jika project berskala besar, coba prioritaskan desain database dengan konsep <strong>Polymorphism (single table for many entities with different types)</strong></li><li>Jika ingin merancang database untuk sebuah fitur atau akan memulai project, usahakan berdiskusi dulu kepada tim atau senior yang lebih berpengalaman untuk mendapatkan prespektif yang lebih banyak</li></ul><p>&nbsp;</p>', '2023-08-04 08:01:20', '2023-08-06 03:03:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'task 1', 1, '2023-07-30 18:35:56', '2023-08-14 02:53:51'),
(2, 1, 'task2', 0, '2023-07-30 18:35:56', '2023-08-14 02:53:51'),
(3, 1, 'task3', 0, '2023-07-30 18:35:56', '2023-08-14 02:53:51'),
(4, 1, 'taks4', 1, '2023-08-04 05:27:08', '2023-08-14 02:53:51'),
(5, 1, 'taxt5', 1, '2023-08-04 05:27:08', '2023-08-14 02:53:51'),
(11, 5, 'Rancagan data base', 1, '2023-08-13 08:32:31', '2023-08-13 08:32:35'),
(12, 5, 'Rancangan Desain Project', 1, '2023-08-13 08:32:31', '2023-08-13 08:32:35'),
(13, 5, 'Implementasi Coding Admin', 0, '2023-08-13 08:32:31', '2023-08-13 08:32:35'),
(14, 5, 'Implementasi Coding User', 0, '2023-08-13 08:32:31', '2023-08-13 08:32:35'),
(15, 4, 'Desain Figma', 1, '2023-08-13 16:07:27', '2023-08-13 16:07:38'),
(16, 4, 'Flowchart', 1, '2023-08-13 16:07:27', '2023-08-13 16:07:38'),
(17, 4, 'Front End Admin', 1, '2023-08-13 16:07:27', '2023-08-13 16:07:38'),
(18, 4, 'Scling admin', 0, '2023-08-13 16:07:27', '2023-08-13 16:07:38'),
(19, 4, 'Slicing User', 0, '2023-08-13 16:07:27', '2023-08-13 16:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `project_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'team digtializ website', '2023-07-26 05:51:35', '2023-07-26 05:51:35'),
(3, 13, 5, 'Sia Polhas Team', '2023-08-13 08:30:56', '2023-08-13 08:30:56'),
(4, 3, 4, 'Enjoy Cafe team', '2023-08-13 16:06:21', '2023-08-13 16:06:21'),
(5, 1, 3, 'Futuca Team', '2023-08-13 16:08:19', '2023-08-13 16:08:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `team_members`
--

INSERT INTO `team_members` (`id`, `user_id`, `team_id`, `created_at`, `updated_at`) VALUES
(42, 13, 3, '2023-08-13 08:30:56', '2023-08-13 08:30:56'),
(43, 1, 3, '2023-08-13 08:30:56', '2023-08-13 08:30:56'),
(44, 3, 3, '2023-08-13 08:30:56', '2023-08-13 08:30:56'),
(45, 4, 3, '2023-08-13 08:30:56', '2023-08-13 08:30:56'),
(46, 5, 3, '2023-08-13 08:30:56', '2023-08-13 08:30:56'),
(48, 13, 4, '2023-08-13 16:06:21', '2023-08-13 16:06:21'),
(49, 1, 4, '2023-08-13 16:06:21', '2023-08-13 16:06:21'),
(50, 6, 4, '2023-08-13 16:06:21', '2023-08-13 16:06:21'),
(51, 7, 4, '2023-08-13 16:06:21', '2023-08-13 16:06:21'),
(52, 9, 4, '2023-08-13 16:06:21', '2023-08-13 16:06:21'),
(54, 13, 5, '2023-08-13 16:08:19', '2023-08-13 16:08:19'),
(55, 1, 5, '2023-08-13 16:08:19', '2023-08-13 16:08:19'),
(56, 3, 5, '2023-08-13 16:08:19', '2023-08-13 16:08:19'),
(57, 8, 5, '2023-08-13 16:08:19', '2023-08-13 16:08:19'),
(62, 1, 1, '2023-08-14 02:49:55', '2023-08-14 02:49:55'),
(63, 3, 1, '2023-08-14 02:49:55', '2023-08-14 02:49:55'),
(64, 4, 1, '2023-08-14 02:49:55', '2023-08-14 02:49:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes_codings`
--

CREATE TABLE `tes_codings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mahendra.mulyono@gmail.co.id', '2023-07-25 16:12:57', 'g6ZqblnbWAwCDHnYSkwpnGq2UZ5ePo37QPbxmyxfJG5kgk8Uk7S2pHZY7J24', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(3, 'winarsih.fitria', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ardianto.darijan@gmail.com', '2023-07-25 16:12:57', 'X0rBKa2vyB', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(4, 'saputra.setya', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'thidayanto@gmail.com', '2023-07-25 16:12:57', '1DXxT4sc8U', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(5, 'titi.hakim', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ifa.usada@yahoo.com', '2023-07-25 16:12:57', '6x6ATVBn14', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(6, 'ouwais', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'putri.wasita@maheswara.web.id', '2023-07-25 16:12:57', 'S7sCfFvZhZ', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(7, 'mursita74', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'warsa.kusmawati@yahoo.co.id', '2023-07-25 16:12:57', '9v53ErG1WO', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(8, 'amayasari', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kuswandari.ira@yahoo.co.id', '2023-07-25 16:12:57', 'iT3opjggje', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(9, 'pmarpaung', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'samsul44@gmail.com', '2023-07-25 16:12:57', 'QXu2pK8SEm', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(10, 'adika39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ihassanah@yahoo.com', '2023-07-25 16:12:57', 'PAnmlOFRxx', '2023-07-25 16:12:57', '2023-07-25 16:12:57'),
(13, 'zahra123', '$2y$10$dIAc.0c4wvaOcajoy0QZ8eI0ORGGsHIcq9tgwZkpeA7NIKzxVYs1y', 'novaliazahra01@gmail.com', NULL, NULL, '2023-08-04 10:08:38', '2023-08-04 10:08:38'),
(19, 'user123', '$2y$10$GAiU3C8UUpamjpwPhnwX4uoIDnay8pQw3emQF6OAKTWc7i/oVKJDW', 'nawir177@gmail.com', '2023-08-14 14:40:18', NULL, '2023-08-14 14:36:57', '2023-08-14 14:40:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_permits`
--

CREATE TABLE `work_permits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `presence_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`),
  ADD KEY `activities_link_id_foreign` (`link_id`);

--
-- Indeks untuk tabel `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcements_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `announcement_comments`
--
ALTER TABLE `announcement_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcement_comments_announcement_id_foreign` (`announcement_id`),
  ADD KEY `announcement_comments_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_icon_id_foreign` (`icon_id`);

--
-- Indeks untuk tabel `chat_groups`
--
ALTER TABLE `chat_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_groups_user_id_foreign` (`user_id`),
  ADD KEY `chat_groups_team_id_foreign` (`team_id`);

--
-- Indeks untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daily_reports`
--
ALTER TABLE `daily_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daily_report_lists`
--
ALTER TABLE `daily_report_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_report_lists_user_id_foreign` (`user_id`),
  ADD KEY `daily_report_lists_project_id_foreign` (`project_id`),
  ADD KEY `daily_report_lists_daily_report_id_foreign` (`daily_report_id`);

--
-- Indeks untuk tabel `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employes_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folders_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_user_id_foreign` (`user_id`),
  ADD KEY `links_folder_id_foreign` (`folder_id`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indeks untuk tabel `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meetings_team_id_foreign` (`team_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presences_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_client_id_foreign` (`client_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sops`
--
ALTER TABLE `sops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sops_team_id_foreign` (`team_id`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_project_id_foreign` (`project_id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_foreign` (`user_id`),
  ADD KEY `teams_project_id_foreign` (`project_id`);

--
-- Indeks untuk tabel `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_members_user_id_foreign` (`user_id`),
  ADD KEY `team_members_team_id_foreign` (`team_id`);

--
-- Indeks untuk tabel `tes_codings`
--
ALTER TABLE `tes_codings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `work_permits`
--
ALTER TABLE `work_permits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_permits_user_id_foreign` (`user_id`),
  ADD KEY `work_permits_presence_id_foreign` (`presence_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `announcement_comments`
--
ALTER TABLE `announcement_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `chat_groups`
--
ALTER TABLE `chat_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `daily_reports`
--
ALTER TABLE `daily_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `daily_report_lists`
--
ALTER TABLE `daily_report_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sops`
--
ALTER TABLE `sops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tes_codings`
--
ALTER TABLE `tes_codings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `work_permits`
--
ALTER TABLE `work_permits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_link_id_foreign` FOREIGN KEY (`link_id`) REFERENCES `links` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `announcement_comments`
--
ALTER TABLE `announcement_comments`
  ADD CONSTRAINT `announcement_comments_announcement_id_foreign` FOREIGN KEY (`announcement_id`) REFERENCES `announcements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `announcement_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_icon_id_foreign` FOREIGN KEY (`icon_id`) REFERENCES `icons` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `chat_groups`
--
ALTER TABLE `chat_groups`
  ADD CONSTRAINT `chat_groups_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chat_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `daily_report_lists`
--
ALTER TABLE `daily_report_lists`
  ADD CONSTRAINT `daily_report_lists_daily_report_id_foreign` FOREIGN KEY (`daily_report_id`) REFERENCES `daily_reports` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_report_lists_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_report_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `folders`
--
ALTER TABLE `folders`
  ADD CONSTRAINT `folders_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_folder_id_foreign` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `links_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `meetings_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `presences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sops`
--
ALTER TABLE `sops`
  ADD CONSTRAINT `sops_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `team_members`
--
ALTER TABLE `team_members`
  ADD CONSTRAINT `team_members_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `work_permits`
--
ALTER TABLE `work_permits`
  ADD CONSTRAINT `work_permits_presence_id_foreign` FOREIGN KEY (`presence_id`) REFERENCES `presences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_permits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
