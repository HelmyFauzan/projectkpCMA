-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 30 Agu 2023 pada 06.50
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectkpcma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `slug`, `title`) VALUES
(7, 'kain', 'Kain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `color` varchar(15) NOT NULL,
  `price` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `id_category`, `slug`, `title`, `description`, `color`, `price`, `is_available`, `image`) VALUES
(6, 7, 'kain-polycotton', 'Kain Polycotton', 'Polycotton merupakan kain campuran dari dua jenis bahan lainnya, yaitu polyester dan cotton. Kombinasi bahan kain sintetis polyester dan bahan serat alam katun menghasilkan produk bahan campuran yang halus dan lembut. Bahan polycotton sendiri punya karakt', 'Pink', 15000, 1, 'kain-polycotton-20230824110238.jpg'),
(7, 7, 'kain-katun', 'Kain Katun', 'Bahan katun adalah bahan yang terbuat serat kapas yang diolah menjadi benang. Benang-benang akhirnya dipakai untuk disusun menjadi kain yang siap dipakai. Bahan katun tergolong bahan alami yang paling umum dipakai pada pakaian dan terbukti bahwa bahan kat', 'Biru', 18000, 1, 'kain-katun-20230823150718.jpg'),
(8, 7, 'kain-woll', 'Kain Woll', 'Kain Woll berkualitas', 'Abu-Abu', 10000, 1, 'kain-woll-20230824105705.jpg'),
(9, 7, 'kain-polyester-ungu', 'Kain Polyester', 'Kain Polyester dengan bahan kain terbaik dan berkualitas', 'Ungu', 9000, 1, 'kain-polyester-20230824104428.jpg'),
(10, 7, 'kain-polyester-kuning', 'Kain Polyester', 'Kain Polyester dengan bahan terbaik dan berkualitas tinggi', 'Kuning', 9000, 1, 'kain-polyester-20230824105437.jpg'),
(11, 7, 'kain-rayon-biru', 'Kain Rayon', 'Kain Rayon dengan tekstur lembut serta bahan yang berkualitas tinggi', 'Biru', 17000, 1, 'kain-rayon-20230824110918.jpg'),
(12, 7, 'kain-rayon-hijau', 'Kain Rayon', 'Kain Rayon dengan bahan bertekstur lembut serta berkualitas tinggi', 'Hijau', 17000, 1, 'kain-rayon-20230824111823.jpg'),
(13, 7, 'kain-katun-merah', 'Kain Katun', 'Kain Katun dengan bahan terbaik serta berkualitas tinggi', 'Merah', 14000, 1, 'kain-katun-20230824112850.jpg'),
(14, 7, 'kain-polyester-hijau', 'Kain Polyester', 'Kain polyester dengan bahan berkualitas dengan warna yang beragam', 'Hijau', 9000, 1, 'kain-polyester-20230828165228.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `is_active`, `image`) VALUES
(7, ' admin H', 'helmy.fauzan@gmail.com', '$2y$10$0jrbBJHGJvvvoTu6Qdyb7uDudSm.asn2Ky3ifiCxicTjz80h9/Ffu', 'admin', 1, 'admin-h-20230823111302.png'),
(8, 'Admin 1', 'helmyfauzan0625@gmail.com', '$2y$10$np6Wd5m2lGtqyunlo9xNmet3lx33rWuF1GnbfK.bIUwDhAC3FSs7.', 'admin', 1, 'cimahi-pride-20230830093754.jpg'),
(10, 'Admin', 'admin@gmail.com', '$2y$10$RFcjyGh4WEhepyL2JW2L1OAVL7mctrIkPn9CgPFiXko8hAmArj9OO', 'admin', 1, 'admin-20230830114614.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
