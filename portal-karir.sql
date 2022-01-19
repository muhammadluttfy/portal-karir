-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Jan 2022 pada 12.53
-- Versi server: 5.7.33
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal-karir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Development', 'development', 'fa fa-laptop-code', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(2, 'Business', 'business', 'fa fa-chart-bar', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(3, 'Finance & Accounting', 'finance-and-accounting', 'fa fa-wallet', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(4, 'IT & Software', 'it-and-software', 'fa fa-desktop', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(5, 'Design', 'design', 'fa fa-pencil-ruler', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(6, 'Data Analyst', 'data-analyst', 'fa fa-mail-bulk', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(7, 'Music', 'music', 'fa fa-music', '2022-01-18 06:21:43', '2022-01-18 06:21:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_learning` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `name`, `thumbnail`, `author`, `lisence`, `basic_learning`, `created_at`, `updated_at`) VALUES
(1, 'Jalur Belajar Frontend Web Developer', 'wpu.png', 'Web Programming Unpas', 'Gratis', 'Youtube', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(2, 'Mastering Laravel 8', 'bwa.png', 'Buildwith Angga', 'Berbayar', 'Website', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(3, 'HTML Dasar', 'dicoding.png', 'Dicoding Indonesia', 'Gratis', 'Website', '2022-01-18 06:21:43', '2022-01-18 06:21:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_post`
--

CREATE TABLE `course_post` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `course_post`
--

INSERT INTO `course_post` (`course_id`, `post_id`) VALUES
(1, 4),
(2, 5),
(3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_17_083518_create_posts_table', 1),
(6, '2021_11_17_110915_create_categories_table', 1),
(7, '2022_01_08_100738_add_is_admin_to_users_table', 1),
(8, '2022_01_12_124514_create_tools_table', 1),
(9, '2022_01_12_154153_create_post_tool_table', 1),
(10, '2022_01_12_155754_create_courses_table', 1),
(11, '2022_01_12_160409_create_course_post_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_source` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `salary`, `salary_source`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Android Developer', 'android-developer', 'post-images/Vnn3ALmwedRu8MQMOcZm0YdvU6YpriCTKQdrnhzf.png', 'Seorang Android Developer adalah Software Developer yang berspesialisasi dalam merancang dan membang...', '<div>Seorang Android Developer adalah Software Developer yang berspesialisasi dalam merancang dan membangun aplikasi untuk pasar <em>operating system</em> Android. Menurut Google, sebagai pemilik dari Android, seorang Android Developer harus memiliki keahlian dalam <em>app functionality</em>, <em>user interface</em>, <em>data management</em>, <em>debugging</em> dan <em>testing</em>. Mereka juga memiliki kemampuan dengan setidaknya bahasa pemrograman Java atau Kotlin walaupun industri merekomendasikan seorang Android Developer dapat menggunakan keduanya. Dan saat ini penguasaan terhadap <em>Jetpack </em>juga sudah menjadi kewajiban untuk mengoptimalkan proses mengembangkan aplikasi Android.<br><br></div><div>Kurikulum Android Developer di Dicoding telah dikembangkan langsung dengan Google menggunakan kurikulum resmi Google Developers. Setiap langkah dalam learning path ini telah didesain agar dapat mempersiapkan siswa mengambil ujian sertifikasi Associate Android Developer dari Google.</div>', '40', 'Indeed', NULL, '2022-01-18 06:22:45', '2022-01-18 06:22:45'),
(2, 3, 1, 'Accounting', 'accounting', 'post-images/Df0s24UkaAKjerH5MwPgXtzmCPMjBkKHvCeVBkkB.png', 'Accounting adalah sebuah kata yang diambil dari kata account yang artinya menghitung. Kalau dipaduka...', '<div><strong>Accounting</strong> adalah sebuah kata yang diambil dari kata account yang artinya menghitung. Kalau dipadukan antara bisnis dan seni, Akuntansi dapat diibaratkan sebagai teknik untuk mencatat, mengelompokkan, mengikhtisarkan berbagai transaksi yang dilakukan perusahaan. Dengan kata lain, <strong>Accounting adalah</strong> sumber informasi atas suatu hubungan milik dan hak milik yang dipengaruhi oleh pemilik dan hak-haknya didalam perusahaan.<br><br></div><div><strong>Manfaat Accounting<br></strong><br></div><ol><li>Akuntansi menjadi sumber informasi keuangan dalam perusahaan, artinya suatu (pemilik) perusahaan dapat mengetahui arus keuangan yang masuk dan keluar atau untung dan rugi perusahaan lewat data yang diinput dari akuntansi.</li><li>Akuntansi menjadi sumber informasi keuangan perusahaan, keperluan laporan ini sangat dibutuhkan oleh manajemen dalam memutuskan seberapa besar kemajuan yang diberikan dan langkah apa yang akan diambil untuk menjadikan perusahaan lebih maju kedepannya.</li><li>Akuntansi menjadi sumber informasi keuangan perusahaan bagi calon investor, para investor baru atau lama dapat meminta data keuangan suatu perusahaan dari akuntansi. Biasanya para investor meminta data keuangan untuk menindaklanjuti mau tidaknya investasi terhadap perusahaan tersebut.</li><li>Akuntansi menjadi sumber informasi keuangan perusahaan bagi Bank dan Pihak Pemberi Pinjaman, fungsinya untuk memutuskan pemberian pinjaman yang diajukan dapat terealisasi melalui data akuntansi perusahaan.</li><li>Akuntansi menjadi sumber informasi keuangan perusahaan bagi Kantor Pelayanan Pajak dan petugas pajak, fungsinya untuk menentukan kebenaran data pajak yang dilaporkan perusahaan. Data keuangan yang diperoleh dari data akuntansi, nantinya akan menjadi dasar dalam menghitung besarnya <a href=\"https://dokterpajak.com/pajak-penghasilan\">p</a>enghasilan pajak yang terutang.</li></ol>', '21', 'Google Inc.', NULL, '2022-01-18 06:23:26', '2022-01-18 06:23:26'),
(3, 5, 1, 'UI UX Designer', 'ui-ux-designer', 'post-images/6XFlyinvlaLTGToApscK7qhBrtYVEUayFxV2I1Nq.png', 'Pengertian User Experience (UX)User Experience (UX) merupakan proses mendesain suatu produk melalui...', '<div><strong>Pengertian User Experience (UX)</strong></div><div>User Experience (UX) merupakan proses mendesain suatu produk melalui pendekatan pengguna. Dengan pendekatan ini, Anda jadi bisa menciptakan produk yang sesuai dengan kebutuhan dan keinginan pengguna.<br><br></div><div>Produk dengan desain UX yang baik akan menciptakan pengalaman yang menyenangkan bagi pengguna saat menggunakan produk Anda. Pengguna jadi mudah dan nyaman saat menggunakan produk.<br><br></div><div>Adapun, komponen UX ini meliputi bagaimana fitur-fitur yang disediakan pada produk, struktur desain, navigasi penggunaan produk, aspek visual design, dan seluruh aspek interaksi dengan pengguna. UX juga meliputi bagaimana Anda menentukan branding, konten, dan copywriting yang sesuai dengan target pengguna Anda. <br><br><strong>Pengertian User Interface (UI)<br></strong>Seperti yang disebutkan sebelumnya, UI adalah bagian dari UX yang berupa tampilan visual design sebuah sistem. Tampilan tersebut memungkinkan pengguna terhubung dan berinteraksi dengan suatu produk.&nbsp;<br><br></div><div>Selain berfungsi sebagai penghubung, UI juga berfungsi untuk memperindah tampilan sehingga dapat meningkatkan kepuasan pengguna. Namun, tak hanya harus indah, UI juga harus mudah digunakan.&nbsp;<br><br></div><div>Beberapa komponen UI diantaranya adalah komponen tombol, ikon tipografi, tema, layout, animasi yang tampil pada produk, dan visual interaktif lainnya. Semua komponen UI tersebut didesain dengan berfokus pada keindahan dan kemudahan pengguna. Jadi, pengguna dapat menikmati produk Anda.<br><br><strong>Skill Uang Dibutuhkan<br></strong>Menjadi desainer UI dan desainer UX membutuhkan skill tersendiri. Beberapa skill yang dibutuhkan seorang desainer UI adalah <strong>desain grafis, design branding, creative thinking, </strong>dan<strong> convergent thinking</strong>. Skill tersebut harus dimiliki oleh desainer UI dalam mendesain tampilan produk agar terlihat menarik dan mudah untuk interaksi.<br><br></div><div>Sementara seorang desainer UX bertanggung jawab membuat desain produk dengan pendekatan pengguna agar mudah digunakan. Oleh sebab itu, mereka harus memiliki skill melakukan <strong>riset, analytical thinking, problem solving, critical thinking,</strong> dan<strong> creative thinking</strong>. <br><br>-------------------------------------<br>Gaji yang tertera dibawah merupakan <strong>gaji rata rata dari 19 - 72 Juta Senior UI UX Designer</strong> versi Glassdoor&nbsp;</div>', '46', 'Glassdoor', NULL, '2022-01-18 06:24:33', '2022-01-18 06:24:33'),
(4, 1, 1, 'Frontend Web Developer', 'frontend-web-developer', 'post-images/dKfDUfa3h6ajbfOEglAxybD36fs7Rddk285XXfld.png', 'Front-End Developer adalah seseorang yang bertanggung jawab dalam pembuatan tampilan (UI) dari sebua...', '<div>Front-End Developer adalah seseorang yang bertanggung jawab dalam pembuatan tampilan (UI) dari sebuah website. Dalam bekerja, fokus utama Front-End Developer berada di “sisi klien” yang berarti setiap bagian dari website dapat berinteraksi langsung dengan pengguna.&nbsp;<br><br>Pekerjaan ini mencakup tata letak, warna, design hingga user behaviour. Keahlian mendasar yang perlu dipahami oleh Front-End developer yaitu pemahaman HTML, CSS dan JavaScript.</div>', '125', 'Glassdoor', NULL, '2022-01-18 06:25:17', '2022-01-18 06:25:17'),
(5, 1, 1, 'Backend Developer', 'backend-developer', 'post-images/vJgkuSs442OzZ7bTx8PC3RKf5AuzGmqNGGqbEBjA.png', 'Back-End developer adalah seseorang yang bertanggung jawab dalam pengembangan sebuah website. Saat b...', '<div>Back-End developer adalah seseorang yang bertanggung jawab dalam pengembangan sebuah website. Saat bekerja, fokus utama Back-End Developer berada di “sisi server” yang berarti mengintegrasikan sebuah desain dengan kode agar fungsi dan sistem website dapat berjalan. Pekerjaan ini mencakup server, database, keamanan dan arsitektur website. Bahasa pemrograman yang umum digunakan yaitu PHP, Python, Ruby dan lain-lain.</div>', '134', 'Glassdoor', NULL, '2022-01-18 06:30:25', '2022-01-18 06:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_tool`
--

CREATE TABLE `post_tool` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tool_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_tool`
--

INSERT INTO `post_tool` (`post_id`, `tool_id`) VALUES
(3, 1),
(4, 2),
(5, 2),
(4, 3),
(5, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`id`, `name`, `lisence`, `created_at`, `updated_at`) VALUES
(1, 'Figma', 'Free', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(2, 'VS Code', 'Free', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(3, 'Github', 'Free', '2022-01-18 06:21:43', '2022-01-18 06:21:43'),
(4, 'Chrome', 'Free', '2022-01-18 06:21:43', '2022-01-18 06:21:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Muhammad Lutfi', 'muhammadlutfi', 'muhammadlutfi3101@gmail.com', NULL, '$2y$10$tvdeI9cGcEnG0JFYpWjU.e6AfWuHJJaaaqjUjHE1d/WjOAeyQG70G', NULL, '2022-01-18 06:21:43', '2022-01-18 06:21:43', 1),
(2, 'Ahla Ainin Nafisah', 'ahlaainin', 'ahlaainin@gmail.com', NULL, '$2y$10$bw.RLdnqvndtOBTr7tTx7O26vLDTdgCLUy9U/Z.Z0cJm8ypf9iAg2', NULL, '2022-01-18 06:21:43', '2022-01-18 06:21:43', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_name_unique` (`name`);

--
-- Indeks untuk tabel `course_post`
--
ALTER TABLE `course_post`
  ADD PRIMARY KEY (`post_id`,`course_id`),
  ADD KEY `course_post_course_id_foreign` (`course_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `post_tool`
--
ALTER TABLE `post_tool`
  ADD PRIMARY KEY (`post_id`,`tool_id`),
  ADD KEY `post_tool_tool_id_foreign` (`tool_id`);

--
-- Indeks untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `course_post`
--
ALTER TABLE `course_post`
  ADD CONSTRAINT `course_post_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Ketidakleluasaan untuk tabel `post_tool`
--
ALTER TABLE `post_tool`
  ADD CONSTRAINT `post_tool_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tool_tool_id_foreign` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
