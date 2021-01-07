-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 06.16
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `email`, `alamat`, `telepon`, `status`) VALUES
(1, 'admin', 'admin', 'admin@yahoo.com', 'admin', '1234567890', 1),
(2, 'admin1', 'admin1', 'admin1@yahoo.com', 'admin1', '1234567891', 1),
(3, 'admin2', 'admin2', 'admin2@yahoo.com', 'admin2', '1234567892', 1),
(4, 'admin3', 'admin3', 'admin3@yahoo.com', 'admin3', '1234567893', 1),
(15, 'ricky', 'ricky', 'ricky@yahoo.com', 'tangerang', '089678211969', 0),
(16, 'hm', 'hm', 'hm@yahoo.com', 'indonesia', '098765432109', 0),
(18, 'anjayani', 'anjayani', 'anjayani@yahoo.com', 'jl. bli bli bli jakarta indonesia', '081234567890', 0),
(19, 'rickym', 'rickym', 'rickym@gmail.com', 'jl. bla bla bla Jakarta Indonesia', '012345678901', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `kategori_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `foto1` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  `foto3` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsisingkat` varchar(1000) NOT NULL,
  `deskripsilengkap` varchar(10000) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `releasedate` text NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `kategori_barang`, `nama_barang`, `foto1`, `foto2`, `foto3`, `harga`, `deskripsisingkat`, `deskripsilengkap`, `manufacturer`, `type`, `dimension`, `weight`, `releasedate`, `stok`) VALUES
(1, '3x3', 'GAN 356 X Numerical', '20200929174529-1-3x3-gan-x.png', '20200929174529-2-3x3-gan-x-2.png', '20200929174529-3-3x3-gan-x-3.jpg', 50, 'The GAN356 X is the highly-anticipated successor to the GAN Air SM. This 3x3 speed cube is loaded with a host of unique, innovative technologies, including the numerical IPG tensioning system and the new GAN Magnetic System, a set of interchangeable magnetic capsules.  The plastic finish has been updated to a matte finish similar to GANs more recent releases.', 'The GAN356 X is the highly-anticipated successor to the GAN Air SM. This 3x3 speed cube is loaded with a host of unique, innovative technologies, including the numerical IPG tensioning system and the new GAN Magnetic System, a set of interchangeable magnetic capsules.  The plastic finish has been updated to a matte finish similar to GANs more recent releases.\r\n\r\nThis cube also comes with magnetic capsules, transparent cube box, set of GES nuts, GES/GMS manual, solve tutorial pamphlet, and a newly designed GAN356 X card.', 'GAN', '3x3', '56.0mm³', '81.1gr', '30-10-2018', 25),
(20, '3x3', 'MoYu Weilong WR M', '20200929204005-1-3x3-moyu-wrm.jpg', '20200929204005-2-3x3-moyu-wrm-2.jpg', '20200929204005-3-3x3-moyu-wrm-3.jpg', 39, 'The MoYu Weilong WR M is a ridgeless version of the Weilong GTS 3 M. This 3x3 speed cube features slight performance and feature updates including a finer tuned dual adjustment system.', 'The MoYu Weilong WR M is a ridgeless version of the Weilong GTS 3 M. This 3x3 speed cube features slight performance and feature updates including a finer tuned dual adjustment system. \r\n\r\nComes with:\r\n\r\nMoYu WeiLong WR M\r\nExtra set of hardware \r\nScrewdriver \r\nMagnets \r\nDual adjustment tools\r\nAssorted MoYu pamphlets \r\nMohammed Aiman Koli used this puzzle to set the 15.56 second 3x3 with feet world record single in December 2019.', 'MoYu', '3x3', '55.5mm³', '90.0gr', '05-03-2019', 45),
(21, '2x2', 'GAN 251 M', '20200929204042-1-2x2-gan-251m.jpg', '20200929204042-2-2x2-gan-251m-2.jpg', '20200929204042-3-2x2-gan-251m-3.jpg', 22, 'The GAN 251 M is the newest 2x2 speed cube from GAN. This cube features all of the same characteristics of the 249 V2 M like great corner cutting, matte finish, a light/airy feel, and a medium magnetic strength. This small increase in size (2mm), although seemingly insignificant, is definitely noticeable and gives the solver much more control over the puzzle and ultimately leads to a better solving experience!', 'The GAN 251 M is the newest 2x2 speed cube from GAN. This cube features all of the same characteristics of the 249 V2 M like great corner cutting, matte finish, a light/airy feel, and a medium magnetic strength. This small increase in size (2mm), although seemingly insignificant, is definitely noticeable and gives the solver much more control over the puzzle and ultimately leads to a better solving experience!', 'GAN', '2x2', '51.0mm³', '50.0gr', '01-06-2020', 46),
(22, '2x2', 'QiYi Valk 2 M', '20200929204105-1-2x2-qiyi-valk2m.jpg', '20200929204105-2-2x2-qiyi-valk2m-2.jpg', '20200929204105-3-2x2-qiyi-valk2m-3.jpg', 20, 'Valk2 M is the first 2x2 produced in the iconic Valk line. Coming in at a slightly larger than the normal 51mm, this puzzle is solidly built with a stable and more substantial feel.', 'Valk2 M is the first 2x2 produced in the iconic Valk line. Coming in at a slightly larger than the normal 51mm, this puzzle is solidly built with a stable and more substantial feel. \r\n\r\nThe magnet positions on this 2x2 are unlike any seen on the market. Rather than the typical corner-only magnet layout, the Valk2 M uses a corner/edge magnet layout resembling that of a 3x3. This gives the puzzle a smaller magnetic radius making the feel more consistent throughout the turn.\r\n\r\n Comes with:\r\n\r\nValk 2 M\r\nCube box\r\nExtra spring set\r\nCleaning cloth\r\nAssorted Valk pamphlets', 'QiYi MoFangGe', '2x2', '51.0mm³', '78.4gr', '19-12-2018', 50),
(23, 'Lubricant', 'GAN Magic Lube', '20200929204132-1-lube-gan-magic.jpg', '20200929204132-2-lube-gan-magic.jpg', '20200929204132-3-lube-gan-magic.jpg', 7, 'The GAN Magic Lube is a low-medium viscosity piece lube that was designed for use with GAN puzzles, including the GAN 356 Air. It is packaged in a clear bottle with a tamper-proof cap, and it is available in 10mL sizes.', 'The GAN Magic Lube is a low-medium viscosity piece lube that was designed for use with GAN puzzles, including the GAN 356 Air. It is packaged in a clear bottle with a tamper-proof cap, and it is available in 10mL sizes.', 'GAN', 'Lubricant', '-', '19.0gr', '12-10-2018', 500),
(24, 'Lubricant', 'GAN Standard Lube', '20200929204203-1-lube-gan-standard.png', '20200929204203-2-lube-gan-standard.png', '20200929204203-3-lube-gan-standard.png', 4, 'The GAN Standard Lube 10mL is a low viscosity lube that works best on the pieces. It is packaged in a clear bottle with a tamper-proof cap.', 'The GAN Standard Lube 10mL is a low viscosity lube that works best on the pieces. It is packaged in a clear bottle with a tamper-proof cap.', 'GAN', 'Lubricant', '-', '19.0gr', '12-10-2018', 500),
(25, '3x3', 'Thunderclap V3 M', '20200929204239-1-3x3-qiyi-thunderclapv3m.jpg', '20200929204239-2-3x3-qiyi-thunderclapv3m-2.webp', '20200929204239-3-3x3-qiyi-thunderclapv3m-3.jpg', 10, 'The Thunderclap V3 M is the latest release in the Thunderclap series by QiYi MoFangGe. This budget friendly magnetic 3x3 speed cube features a host of new upgrades including all primary plastic internals, a capped design to avoid seams, an updated anti-pop mechanism, tracks on the pieces to reduce friction, and slots to assure correct magnet positioning. This puzzle has a classic QiYi feel for a great price! Check it out!', 'The Thunderclap V3 M is the latest release in the Thunderclap series by QiYi MoFangGe. This budget friendly magnetic 3x3 speed cube features a host of new upgrades including all primary plastic internals, a capped design to avoid seams, an updated anti-pop mechanism, tracks on the pieces to reduce friction, and slots to assure correct magnet positioning. This puzzle has a classic QiYi feel for a great price! Check it out!\r\n\r\nComes with:\r\n\r\nQiYi Thunderclap V3 M\r\nQiYi pamphlet', 'QiYi MoFangGe', '3x3', '56.0mm³', '92.0gr', '17-09-2019', 50),
(26, '3x3', 'MoYu Warrior W', '20200929204315-1-3x3-qiyi-warriorw.jpg', '20200929204315-2-3x3-qiyi-warriorw-2.jpg', '20200929204315-3-3x3-qiyi-warriorw-3.jpg', 4, 'The QiYi Warrior W 3x3 is the new and improved version of the QiYi Warrior 3x3. Despite its economy price, the Warrior W stands out as an exceptionally smooth and solid speed cube right out of the box. Great as an inexpensive speed cube for both beginners and enthusiasts!', 'The QiYi Warrior W 3x3 is the new and improved version of the QiYi Warrior 3x3. Despite its economy price, the Warrior W stands out as an exceptionally smooth and solid speed cube right out of the box. Great as an inexpensive speed cube for both beginners and enthusiasts! \r\n\r\n Comes with:\r\n\r\nQiYi Warrior W 3x3\r\nQiYi pamphlet', 'QiYi MoFangGe', '3x3', '56.0mm³', '81.7gr', '11-09-2018', 50),
(27, 'Lubricant', 'Lubicle DNM-37', '20200929204355-1-lube-lubicle-dnm37.webp', '20200929204355-2-lube-lubicle-dnm37-2.jpg', '20200929204355-3-lube-lubicle-dnm37.webp', 13, 'DNM-37 is a water-based piece lube engineered by Cubicle Labs that creates a refreshing and lasting burst of speed for your puzzles. This lube is specially formulated to absorb and retain moisture from the air, which allows it to remain effective for a long period of time. DNM-37 has been designed to work well on puzzles of all sizes, including minxes, square-1s and big cubes. This is 15mL lube.', 'DNM-37 is a water-based piece lube engineered by Cubicle Labs that creates a refreshing and lasting burst of speed for your puzzles. This lube is specially formulated to absorb and retain moisture from the air, which allows it to remain effective for a long period of time. DNM-37 has been designed to work well on puzzles of all sizes, including minxes, square-1s and big cubes. This is 15mL lube.\r\n\r\nInstructions:\r\n\r\nPut 2 drops in puzzle\r\nBreak in\r\nBuckle up, because things are about to get fast!\r\nNot to be applied to hardware. Water based lubes should not be applied to the screws or springs as this will likely lead to rust issues.\r\n\r\nDisclaimer: Although the lube is perfectly safe to touch, please do not ingest it, set it on fire, or expose it to extremely high temperatures.', 'Cubicle Labs', 'Lubricant', '-', '14gr', '12-10-2018', 500),
(28, 'Lubricant', 'Lubicle Silk', '20200929204424-1-lube-lubicle-silk.webp', '20200929204424-2-lube-lubicle-silk-2.jpg', '20200929204424-3-lube-lubicle-silk.webp', 13, 'Cubicle Labs Silk is a reformulated version of the traditional Silk that you all know and love. This new and improved formula gives you the signature plush, controllable feel as the previous version. This is 15mL lube.', 'Cubicle Labs Silk is a reformulated version of the traditional Silk that you all know and love. This new and improved formula gives you the signature plush, controllable feel as the previous version. This is 15mL lube.\r\n\r\n \r\n\r\nCubicle Labs Silk is effective on puzzles of all sizes, including minxes and big cubes.\r\n\r\n \r\n\r\nDisclaimer: Although the lube is perfectly safe to touch, please do not ingest it, set it on fire, or expose it to extremely high temperatures.', 'Cubicle Labs', 'Lubricant', '-', '13.0gr', '26-06-2019', 500),
(29, 'Lubricant', 'Lubicle Speedy', '20200929204459-1-lube-lubicle-speedy.jpg', '20200929204459-2-lube-lubicle-speedy-2.jpg', '20200929204459-3-lube-lubicle-speedy.jpg', 10, 'Lubicle Speedy is a lighter and runnier variant of Lubicle that will enhance the speed of your cube while keeping it smooth. Let your cube glide! Lubicle Speedy is approved to achieve the desired effect in not only 3x3 cubes, but also in larger cubes. This is 10mL lube.', 'Lubicle Speedy is a lighter and runnier variant of Lubicle that will enhance the speed of your cube while keeping it smooth. Let your cube glide! Lubicle Speedy is approved to achieve the desired effect in not only 3x3 cubes, but also in larger cubes.\r\n\r\nNew Packaging: Lubicle Speedy is now available in 10mL bottle sizes! The syringe form is no longer available.\r\n\r\nDirections:\r\n\r\nApply 2-5 drops (for bigger puzzles, use more drops)\r\nBreak in\r\nEnjoy!', 'Cubicle Labs', 'Lubricant', '-', '14.0gr', '12-20-2018', 500),
(30, '2x2', 'QiYi Wuxia', '20200929204602-1-2x2-qiyi-wuxia.jpg', '20200929204602-2-2x2-qiyi-wuxia-2.jpg', '20200929204602-3-2x2-qiyi-wuxia-3.jpg', 24, 'The QiYi MoFangGe WuXia is the newest 2x2 to hit the market, and the latest product in the celebrated Wu- lineup from MoFangGe. With many subtle but important design improvements, like unique anti corner twist technology and improved contact surface design, the WuXia is expected to be among the top-performing 2x2s on the market.', 'The QiYi MoFangGe WuXia is the newest 2x2 to hit the market, and the latest product in the celebrated Wu- lineup from MoFangGe. With many subtle but important design improvements, like unique anti corner twist technology and improved contact surface design, the WuXia is expected to be among the top-performing 2x2s on the market.', 'QiYi MoFangGe', '2x2', '50.0mm³', '61.8gr', '11-09-2018', 50),
(31, 'Lubricant', 'Maru Lube', '20200929204641-1-lube-maru.jpg', '20200929204641-2-lube-maru.jpg', '20200929204641-3-lube-maru.jpg', 5, 'This is the popular Maru Lubricant, which can be used together with silicone-based lubricants to improve performance even more. This is the 10mL size of Maru Lube.', 'This is the popular Maru Lubricant, which can be used together with silicone-based lubricants to improve performance even more. This is the 10mL size of Maru Lube.', 'Maru', 'Lubricant', '-', '18.0gr', '12-10-2018', 500),
(32, 'Lubricant', 'QiYi M-Lube', '20200929204709-1-lube-qiyi-mlube.jpg', '20200929204709-2-lube-qiyi-mlube.jpg', '20200929204709-3-lube-qiyi-mlube.jpg', 1, 'The QiYi MoFangGe M-Lube is a medium-low viscosity lubricant that functions to make the cube smoother and reduce the friction between the pieces. The lubricant is packaged inside a clear bottle with a twist-off cap, and the entire bottle is packaged inside a clear PVC box. This is 3mL lube.', 'The QiYi MoFangGe M-Lube is a medium-low viscosity lubricant that functions to make the cube smoother and reduce the friction between the pieces. The lubricant is packaged inside a clear bottle with a twist-off cap, and the entire bottle is packaged inside a clear PVC box. This is 3mL lube.', 'QiYi MoFangGe', 'Lubricant', '-', '9.0gr', '12-20-2018', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_terjual`
--

CREATE TABLE `barang_terjual` (
  `id_barang_terjual` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_terjual`
--

INSERT INTO `barang_terjual` (`id_barang_terjual`, `id_transaksi`, `id_barang`, `nama_barang`, `harga`, `jumlah`, `subharga`) VALUES
(1, 0, 1, '', 50, 1, 50),
(2, 0, 20, '', 39, 1, 39),
(3, 0, 1, '', 50, 1, 50),
(4, 0, 20, '', 39, 1, 39),
(5, 0, 1, '', 50, 2, 100),
(6, 0, 20, '', 39, 1, 39),
(7, 0, 1, '', 50, 1, 50),
(8, 0, 1, '', 50, 1, 50),
(9, 0, 1, '', 50, 1, 50),
(10, 0, 1, 'GAN 356 X Numerical', 50, 2, 100),
(11, 0, 1, 'GAN 356 X Numerical', 50, 1, 50),
(12, 0, 1, 'GAN 356 X Numerical', 50, 1, 50),
(13, 0, 20, 'MoYu Weilong WR M', 39, 1, 39),
(14, 0, 21, 'GAN 251 M', 22, 1, 22),
(15, 2, 21, 'GAN 251 M', 22, 1, 22),
(16, 3, 21, 'GAN 251 M', 22, 1, 22),
(17, 3, 1, 'GAN 356 X Numerical', 50, 1, 50),
(18, 4, 1, 'GAN 356 X Numerical', 50, 1, 50),
(19, 5, 1, 'GAN 356 X Numerical', 50, 1, 50),
(20, 6, 1, 'GAN 356 X Numerical', 50, 1, 50),
(21, 6, 20, 'MoYu Weilong WR M', 39, 1, 39),
(22, 7, 1, 'GAN 356 X Numerical', 50, 1, 50),
(23, 8, 1, 'GAN 356 X Numerical', 50, 1, 50),
(24, 9, 1, 'GAN 356 X Numerical', 50, 1, 50),
(25, 10, 21, 'GAN 251 M', 22, 1, 22),
(26, 11, 1, 'GAN 356 X Numerical', 50, 1, 50),
(27, 12, 1, 'GAN 356 X Numerical', 50, 1, 50),
(28, 13, 1, 'GAN 356 X Numerical', 50, 1, 50),
(29, 14, 1, 'GAN 356 X Numerical', 50, 1, 50),
(30, 15, 1, 'GAN 356 X Numerical', 50, 1, 50),
(31, 16, 1, 'GAN 356 X Numerical', 50, 1, 50),
(32, 17, 1, 'GAN 356 X Numerical', 50, 1, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_akun` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `tanggal_transaksi` varchar(50) NOT NULL,
  `bukti_transaksi` varchar(1000) NOT NULL,
  `status_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_akun`, `username`, `alamat`, `tagihan`, `tanggal_transaksi`, `bukti_transaksi`, `status_transaksi`) VALUES
(1, 15, 'ricky', 'tangerang', 92, '03-10-2020', '20201007174637ricky', 'Delivery'),
(2, 16, 'hm', 'indonesia', 25, '07-10-2020', '20201007175401hm', 'Delivery'),
(3, 16, 'hm', 'indonesia', 53, '07-10-2020', '20201007180014hm', 'Waiting for Confirmation'),
(4, 16, 'hm', 'indonesia', 53, '07-10-2020', '', 'Not Yet Paid'),
(5, 18, 'anjayani', 'jl. bla bla bla jakarta indonesia', 53, '08-10-2020', '20201008044157anjayani', 'Done'),
(6, 18, 'anjayani', 'jl. bla bla bla jakarta indonesia', 42, '08-10-2020', '20201008044417anjayani', 'Waiting for Confirmation'),
(7, 15, 'ricky', 'tangerang', 53, '08-10-2020', '20201008113400ricky', 'Waiting for Confirmation'),
(8, 19, 'rickym', 'jl. bla bla bla Jakarta Indonesia', 53, '16-10-2020', '20201016090203rickym', 'Done'),
(9, 19, 'rickym', 'jl. bla bla bla Jakarta Indonesia', 53, '16-10-2020', '20201016091457rickym', 'Waiting for Confirmation'),
(10, 15, 'ricky', 'tangerang', 25, '20-10-2020', '20201020115749ricky', 'Waiting for Confirmation'),
(11, 20, 'kanaya', 'jl. kanaya', 53, '07-11-2020', '20201107180337kanaya', 'Delivery'),
(12, 15, 'ricky', 'tangerang', 53, '10-11-2020', '20201110152400ricky', 'Done'),
(13, 15, 'ricky', 'tangerang', 53, '28-11-2020', '20201128182636ricky', 'Done'),
(14, 18, 'anjayani', 'jl. bli bli bli jakarta indonesia', 53, '30-11-2020', '20201130145044anjayani', 'Delivery'),
(15, 15, 'ricky', 'tangerang', 53, '11-12-2020', '20201211170652ricky', 'Delivery'),
(16, 19, 'rickym', 'jl. bla bla bla Jakarta Indonesia', 53, '12-12-2020', '20201212172715rickym', 'Done'),
(17, 16, 'hm', 'indonesia', 53, '02-01-2021', '20210102190721hm', 'Done');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_terjual`
--
ALTER TABLE `barang_terjual`
  ADD PRIMARY KEY (`id_barang_terjual`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `barang_terjual`
--
ALTER TABLE `barang_terjual`
  MODIFY `id_barang_terjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
