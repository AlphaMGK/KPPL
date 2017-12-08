-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2017 pada 08.14
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `adminid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `authentication` int(11) NOT NULL DEFAULT '0',
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`adminid`, `username`, `password`, `authentication`, `first_name`, `last_name`, `email_admin`) VALUES
(1, 'admin1', 'adm123', 1, 'Admin', 'Pertama', 'admin@mail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_paket`
--

CREATE TABLE `order_paket` (
  `no_order` int(7) NOT NULL,
  `tanggal_order` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `luas` float NOT NULL,
  `tinggi` int(10) NOT NULL,
  `tanah` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `kode_paket` varchar(20) NOT NULL,
  `validasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_paket`
--

INSERT INTO `order_paket` (`no_order`, `tanggal_order`, `email`, `notelp`, `alamat`, `luas`, `tinggi`, `tanah`, `image`, `kode_paket`, `validasi`) VALUES
(5, '0000-00-00', 'mail@coba.com', '0', 'AFF', 1234, 12, 'AD', 'heels_wanita.jpg', 'kon_1', 1),
(7, '0000-00-00', 'deejansonana@gmail.com', '0', 'dladjd', 1111, 11111111, 'jaja', 'auricular-phone-symbol-in-a-circle.png', 'kon_1', 1),
(12, '0000-00-00', 'deejansonana@gmail.com', '0', 'nfd', 12, 5, 'mdsf', 'school.png', 'el_gent150', 1),
(19, '2017-05-22', 'deejansonana@gmail.com', '812222', 'jalan', 12, 1233, 'tahu', 'line-logo.png', 'kon_2', 0),
(20, '2017-05-22', 'deejansonana@gmail.com', '812222', 'huuuu', 24, 45, 'jaka', 'teacher-md.png', 'kon_3', 1),
(21, '2017-05-22', 'mail@coba.com', '7319', 'djhja', 12, 7, 'Gambut', '16408-NQR77F.jpg', 'el_gent150', 1),
(22, '2017-05-31', 'mar@mail.com', '489569258', 'sby', 6, 13, 'Gambut', 'EER1.png', 'el_gent35', 0),
(23, '2017-05-31', 'mar@mail.com', '489569258', 'byja', 1, 1, 'Pasir', 'EER2.png', 'el_gent150', 1),
(32, '2017-12-05', 'dumdum@gmail.com', '12345678909', 'sidoarjo', 9, 9, 'Gambut', 'teacher-md1.png', 'el_gent35', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_pkt` varchar(20) NOT NULL,
  `nama_pkt` text NOT NULL,
  `kategori_pkt` text NOT NULL,
  `deskripsi_pkt` longtext NOT NULL,
  `harga_pkt` int(25) NOT NULL,
  `gambar_pkt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_pkt`, `nama_pkt`, `kategori_pkt`, `deskripsi_pkt`, `harga_pkt`, `gambar_pkt`) VALUES
('123567', '234567', 'Elektrostatis', '12345679', 2345678, NULL),
('el_gent150', 'Paket GENT T150 150 Meter', 'Elektrostatis', '<ol>\r\n<li>GENT Tipe T150 - 150 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'gent.jpg'),
('el_gent175', 'Paket GENT T75 75 Meter', 'Elektrostatis', '<ol>\r\n<li>GENT Tipe T75 - 75 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'gent.jpg'),
('el_gent35', 'Paket GENT T35 35 Meter', 'Elektrostatis', '<ol>\r\n<li>GENT Tipe T35 - 35 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'gent.jpg'),
('el_guardianCat1', 'Paket GUARDIAN Tipe LPI CAT 1', 'Elektrostatis', '<ol>\r\n<li>Type LPI CAT 1</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'lpi.jpg'),
('el_guardianCat2', 'Paket GUARDIAN Tipe LPI CAT 2', 'Elektrostatis', '<ol>\r\n<li>Type LPI CAT 2</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'lpi.jpg'),
('el_guardianCat3', 'Paket GUARDIAN Tipe LPI CAT 3', 'Elektrostatis', '<ol>\r\n<li>Type LPI CAT 3</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'lpi.jpg'),
('el_kurn150', 'Paket KURN 150 Meter', 'Elektrostatis', '<ol>\r\n<li>KURN radius - 150 meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'el_kurn150.jpg'),
('el_kurn85', 'Paket KURN 85 Meter', 'Elektrostatis', '<ol>\r\n<li>KURN radius - 85 meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'el_kurn85.jpg'),
('el_thomas', 'Paket THOMAS 100 Meter', 'Elektrostatis', '<ol>\r\n<li>THOMAS Radius - 100 meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'thomas100.jpg'),
('el_viking120', 'Paket VIKING V6 120 Meter', 'Elektrostatis', '<ol>\r\n<li>VIKING Tipe V3 Radius - 120 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'vikingV6.jpg'),
('el_viking70', 'Paket VIKING V3 70 Meter', 'Elektrostatis', '<ol>\r\n<li>VIKING Tipe V3 Radius - 70 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 10000000, 'vikingV3.jpg'),
('ew', 'we', 'Konvensional', 'ew', 67890, 'gear-wheel-304395_960_720.png'),
('kon_1', 'Paket Konvensional Tombak 1', 'Konvensional', '<ol><li>Splitzen Tembaga 1 buah</li><li>Kabel BC 25mm 20 meter*</li><li>Pipa conduit 5 Lonjor</li><li>Pipa Penyangga Splitzer 1.2 meter</li><li>Grounding dibawah 5ohm</li><li>Free instalasi</li></ol><p>*Jika melebihi 20 meter ada tambahan</p>', 2500000, 'gambar1.jpg'),
('kon_2', 'Paket Konvensional 2 Tombak', 'Konvensional', '<ol>\r\n<li>Splitzen Tembaga 1 buah</li>\r\n<li>Kabel BC 25mm 25 meter*</li>\r\n<li>Pipa conduit 8 Lonjor</li>\r\n<li>Pipa Penyangga Splitzer 1.2 meter x2</li>\r\n<li>Grounding dibawah 5ohm</li>\r\n<li>Free instalasi</li>\r\n</ol>\r\n\r\n<p>*Jika melebihi 25 meter ada tambahan</p>', 2750000, 'gambar1.jpg'),
('kon_3', 'Paket Konvensional 3 Tombak', 'Konvensional', '<ol>\r\n<li>Splitzen Tembaga 3 buah</li>\r\n<li>Kabel BC 25mm 30 meter*</li>\r\n<li>Pipa conduit 10 Lonjor</li>\r\n<li>Pipa Penyangga Splitzer 1.2 meter x3</li>\r\n<li>Grounding dibawah 5ohm</li>\r\n<li>Free instalasi</li>\r\n</ol>\r\n\r\n<p>*Jika melebihi 30 meter ada tambahan</p>', 3250000, 'gambar1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userid` int(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authentication` int(11) NOT NULL DEFAULT '0',
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userid`, `password`, `authentication`, `first_name`, `last_name`, `email`, `notelp`, `gender`) VALUES
(1, '123', 3, 'rihana', 'johan', 'mail@coba.com', '7319', 'Perempuan'),
(2, '1234', 0, 'inem', 'janah', 'jem@mail.com', '3829', 'Perempuan'),
(3, '1234', 0, 'anya', 'geraldine', 'anya@mail.com', '4857', 'Perempuan'),
(4, 'dee', 0, 'Diana', 'Janson', 'deejansonana@gmail.com', '812222', 'Perempuan'),
(5, '123', 0, 'aga', 'jun', 'aga@mail.com', '9999', 'Laki-Laki'),
(7, 'maria12345', 0, 'Maria', 'Firdausiah', 'mariafrdsh123@gmail.com', '085708573850', 'Perempuan'),
(10, '8a009b1fe1cba21f1fbce153b13e753b16ba0b4b', 0, 'Rahmadani', 'Ambar', 'ambar@gmail.com', '008055286965', 'Perempuan'),
(11, '3b1ae44c23efa65969306f51167bf737cd3567db', 1, 'Dhania', 'Pratitut', 'dhanya@gmail.com', '0475525768868', 'Perempuan'),
(12, 'edcac06643020979563080b8345520a27e9fa3bc', 0, 'Maria', 'Mar', 'mar@mail.com', '489569258', 'Perempuan'),
(13, '4e7cd97c8cea94288a22c390d3d0f803a2f9d888', 0, 'Maria', 'Firdausiah', 'mariafrdsh@gmail.com', '47262959856158', 'Perempuan'),
(14, '7c222fb2927d828af22f592134e8932480637c0d', 0, 'Maria', 'F', 'marmar123@gmail.com', '08123456789', 'Perempuan'),
(15, '7c222fb2927d828af22f592134e8932480637c0d', 0, 'Rendra', 'Surya', 'rendra@mail.com', '081117484856', 'Laki-Laki'),
(16, '7c222fb2927d828af22f592134e8932480637c0d', 0, 'Maria', 'Dum Dum', 'dumdum@gmail.com', '12345678909', 'Perempuan'),
(17, 'd283b18ee63efc283b014fe10cc7bce067a5a51d', 0, 'watde', 'lul', 'watdelul@gmail.com', '081110111101', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `order_paket`
--
ALTER TABLE `order_paket`
  ADD PRIMARY KEY (`no_order`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_pkt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_paket`
--
ALTER TABLE `order_paket`
  MODIFY `no_order` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
