-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2026 pada 14.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_kue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `kategori`, `deskripsi`, `harga`, `stok`, `gambar`, `created_at`) VALUES
(1, 'Brownies Coklat', 'Brownies', 'Brownies coklat lembut dengan topping coklat premium.', 45000.00, 20, 'brownies.jpg', '2026-09-27 13:32:53'),
(2, 'Cheese Cake', 'Cake', 'Cheese cake lembut dengan rasa keju yang creamy.', 65000.00, 15, 'cheesecake.jpg', '2026-09-27 13:32:53'),
(3, 'Donat Coklat', 'Donat', 'Donat lembut dari bahan kentang asli dengan topping coklat yang masnis.', 30000.00, 25, 'donat.jpg', '2026-09-27 13:32:53'),
(4, 'Strawberry Cake', 'Cake', 'Cake lembut dengan rasa strawberry yang manis dan segar.', 55000.00, 20, 'strawberry-cake.jpg', '2026-09-29 11:39:54'),
(5, 'Cupcake Vanilla', 'Cupcake', 'Cupcake vanilla lembut dengan rasa manis yang cocok untuk teman santai.', 25000.00, 20, 'cupcake-vanilla.jpg', '2026-09-29 11:39:54'),
(6, 'Chocolate Cake', 'Cake', 'Cake coklat lembut dengan rasa coklat yang manis dan nikmat.', 60000.00, 20, 'chocolate-cake.jpg', '2026-09-29 11:39:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
