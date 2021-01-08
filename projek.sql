-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2021 pada 03.50
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_barang`
--

CREATE TABLE `t_barang` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `ft_barang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_promo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_barang`
--

INSERT INTO `t_barang` (`id_barang`, `nm_barang`, `ft_barang`, `deskripsi`, `harga`, `harga_promo`) VALUES
(1, 'Seiko SRPF67K1', 'image/product/1.jpg', 'Seiko SRPF67K1 merupakan jam tangan Seiko 5 Sarada Uchiha Edition dilengkapi dengan Dual Nylon Strap Limited Edition. Automatic movement with manual winding capacity. Garansi 5 tahun.', 1000000, 900000),
(2, 'Seiko SRPF65K1', 'image/product/2.jpg', 'Seiko SRPF65K1 merupakan jam tangan Seiko 5 Naruto & Boruto Edition dilengkapi dengan Dual Nylon Strap Limited Edition. Automatic movement with manual winding capacity. Garansi 5 tahun.', 2000000, 1900000),
(3, 'Seiko SRPF73K1', 'image/product/3.jpg', 'Seiko SRPF73K1 merupakan jam tangan Seiko 5 Rock Lee Edition dilengkapi dengan Dual Nylon Strap Limited Edition. Automatic movement with manual winding capacity. Garansi 5 tahun.', 3000000, 2900000),
(4, 'Seiko Prospex SRPE93K1', 'image/product/4.jpg', 'Seiko Prospex SRPE93K1 merupakan jam tangan Seiko Series Prospex Turtle dengan Dial Black Rubber Strap. Automatic movement with manual winding capacity. Garansi 5 tahun.', 4000000, 3900000),
(5, 'Seiko Prospex SLA041J1 ', 'image/product/5.jpg', 'Seiko Prospex SLA041J1 merupakan jam tangan Seiko Series Prospex Tuna 55th Anniversary Limited Edition dengan Blue Rubber Strap. Automatic movement with manual winding capacity. Garansi 5 tahun.', 5000000, 4900000),
(6, 'SEVENFRIDAY P1B/01M', 'image/product/6.jpg', 'SEVENFRIDAY P1B/01M P-Series bisa dipakai baik pira maupun wanita (unisex). Dilengkapi Stainless Steel Strap dengan case diameter 47mm dan lug width 24mm. Model No. P1B/01M. Automatic movement Miyota 82S7. Garansi 5 tahun.', 15000000, 13000000),
(7, 'SEVENFRIDAY Q2/02', 'image/product/7.jpg', 'SEVENFRIDAY Q2/02 Revolution Q-Series bisa dipakai baik pira maupun wanita (unisex). Dilengkapi Brown Leather Strap dengan case diameter 44.3mm dan case thickness 10mm. Model No. Q2/02. Automatic movement Miyota 8219. Garansi 5 tahun.', 10000000, 7000000),
(8, 'SEVENFRIDAY P3B/03', 'image/product/8.jpg', 'SEVENFRIDAY P3B/03 P-Series varian Racing Team Yellow bisa dipakai baik pira maupun wanita (unisex). Dilengkapi strap material kulit dengan case diameter 47.6mm dan case thickness 15mm. Model No. P3B/03. Automatic movement Miyota 82S7. Garansi 5 tahun.', 12500000, 10900000),
(9, 'SEVENFRIDAY P3B/06', 'image/product/9.jpg', 'SEVENFRIDAY P3B/06 P-Series varian Racing Team Red bisa dipakai baik pira maupun wanita (unisex). Dilengkapi strap material kulit dengan case diameter 47.6mm dan case thickness 15mm. Model No. P3B/03. Automatic movement Miyota 82S7. Garansi 5 tahun.', 8000000, 7200000),
(10, 'SEVENFRIDAY P1B/01', 'image/product/10.jpg', 'SEVENFRIDAY P1B/01 varian Silver bisa dipakai baik pira maupun wanita (unisex). Dilengkapi strap material kulit dengan case diameter 47mm dan case thickness 14mm. Model No. P1B/01. Automatic movement Miyota 82S7 with Open Balance. Garansi 5 tahun.', 8500000, 7900000),
(11, 'Citizen EG3220-58A', 'image/product/11.jpg', 'Citizen EG3220-58A jam tangan ini lebih cocok dipakai wanita. Dilengkapi White Dial Stainless Steel dengan case diameter 26mm dan case thickness 5mm. Model No. EG3220-58A. Movement Solar Powered. Garansi 5 tahun.', 2000000, 1500000),
(12, 'Citizen AP4010-54A', 'image/product/12.jpg', 'Citizen AP4010-54A jam tangan ini lebih cocok dipakai pira. Dilengkapi White Dial Stainless Steel dengan case diameter 44mm dan case thickness 12mm. Model No. AP4010-54A. Movement Ecodrive Movement. Garansi 5 tahun.', 3500000, 2700000),
(13, 'Citizen AT0720-56E', 'image/product/13.jpg', 'Citizen AT0720-56E jam tangan ini lebih cocok dipakai pira. Dilengkapi strap material stainless steel dengan case diameter 48mm dan case thickness 12mm. Model No. AT0720-56E. Movement Solar/Ecodrive Movement. Garansi 5 tahun.', 6700000, 5500000),
(14, 'Citizen AT8015-54A', 'image/product/14.jpg', 'Citizen AT8015-54A jam tangan ini lebih cocok dipakai pira. Dilengkapi White Dial Stainless Steel dengan case diameter 43mm dan case thickness 12mm. Model No. AT8015-54A. Movement Solar/Ecodrive Movement. Garansi 5 tahun.', 4900000, 4000000),
(15, 'Citizen EM0284-51D', 'image/product/15.jpg', 'Citizen EM0284-51D jam tangan ini lebih cocok dipakai wanita. Dilengkapi Pearl Dial Dual Tone Stainless dengan case diameter 27mm dan case thickness 8mm. Model No. EM0284-51D. Movement Solar/Ecodrive Movement. Garansi 5 tahun.', 6000000, 5800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pesanan`
--

CREATE TABLE `t_pesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` int(10) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pesanan`
--

INSERT INTO `t_pesanan` (`id_pesan`, `id_barang`, `jumlah`, `nama`, `alamat`, `kodepos`, `hp`) VALUES
(1, 2, 1, 'Rizki Nuzul Muzaki', 'Pemalang', 52352, '089123123123'),
(2, 3, 1, 'DIan', 'Semarang', 52352, '089123123123'),
(3, 3, 1, 'Mimi', 'Bogor', 123123, '0899837238'),
(4, 9, 1, 'Medi', 'Tegal', 52352, '089123123999');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
