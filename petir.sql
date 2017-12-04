-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 01:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `authentication` int(11) NOT NULL DEFAULT '0',
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `username`, `password`, `authentication`, `first_name`, `last_name`, `email`) VALUES
(1, 'admin1', 'adm123', 1, 'Admin', 'Pertama', 'admin@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_paket`
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
-- Dumping data for table `order_paket`
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
(25, '2017-05-31', 'mariafrdsh@gmail.com', '47262959856158', 'Surabaya', 12, 12, 'Pasir', 'barang-jadi.png', 'kon_1', 1),
(26, '2017-05-31', 'mariafrdsh@gmail.com', '47262959856158', 'Surabaya', 12, 12, 'Pasir', 'barang-dijual.png', 'kon_1', 1),
(27, '2017-06-01', 'mariafrdsh@gmail.com', '47262959856158', 'Jl Mawar No 12 Surabaya', 20, 5, 'Gambut', 'rmh.jpg', 'kon_1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket_elektrostatis`
--

CREATE TABLE `paket_elektrostatis` (
  `id_pkt` varchar(20) NOT NULL,
  `nama_pkt` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori_pkt` text NOT NULL,
  `deskripsi_pkt` longtext NOT NULL,
  `harga_pkt` varchar(25) NOT NULL,
  `gambar_pkt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_elektrostatis`
--

INSERT INTO `paket_elektrostatis` (`id_pkt`, `nama_pkt`, `slug`, `kategori_pkt`, `deskripsi_pkt`, `harga_pkt`, `gambar_pkt`) VALUES
('el_gent150', 'Paket GENT T150 150 Meter', 'paket-gent-t150-150-meter', 'Elektrostatis', '<ol>\r\n<li>GENT Tipe T150 - 150 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'gent.jpg'),
('el_gent175', 'Paket GENT T75 75 Meter', 'paket-gent-t75-75-meter', 'Elektrostatis', '<ol>\r\n<li>GENT Tipe T75 - 75 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'gent.jpg'),
('el_gent35', 'Paket GENT T35 35 Meter', 'paket-gent-t35-35-meter', 'Elektrostatis', '<ol>\r\n<li>GENT Tipe T35 - 35 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'gent.jpg'),
('el_guardianCat1', 'Paket GUARDIAN Tipe LPI CAT 1', 'paket-guardian-tipe-lpi-cat-1', 'Elektrostatis', '<ol>\r\n<li>Type LPI CAT 1</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'lpi.jpg'),
('el_guardianCat2', 'Paket GUARDIAN Tipe LPI CAT 2', 'paket-guardian-tipe-lpi-cat-2', 'Elektrostatis', '<ol>\r\n<li>Type LPI CAT 2</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'lpi.jpg'),
('el_guardianCat3', 'Paket GUARDIAN Tipe LPI CAT 3', 'paket-guardian-tipe-lpi-cat-3', 'Elektrostatis', '<ol>\r\n<li>Type LPI CAT 3</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'lpi.jpg'),
('el_kurn150', 'Paket KURN 150 Meter', 'paket-kurn-150-meter', 'Elektrostatis', '<ol>\r\n<li>KURN radius - 150 meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'el_kurn150.jpg'),
('el_kurn85', 'Paket KURN 85 Meter', 'paket-kurn-85-meter', 'Elektrostatis', '<ol>\r\n<li>KURN radius - 85 meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'el_kurn85.jpg'),
('el_thomas', 'Paket THOMAS 100 Meter', 'paket-thomas-100-meter', 'Elektrostatis', '<ol>\r\n<li>THOMAS Radius - 100 meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'thomas100.jpg'),
('el_viking120', 'Paket VIKING V6 120 Meter', 'paket-viking-v6-120-meter', 'Elektrostatis', '<ol>\r\n<li>VIKING Tipe V3 Radius - 120 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'vikingV6.jpg'),
('el_viking70', 'Paket VIKING V3 70 Meter', 'paket-viking-v3-70-meter', 'Elektrostatis', '<ol>\r\n<li>VIKING Tipe V3 Radius - 70 Meter</li> \r\n<li>Tiang Penyangga Galvaniz - 4 meter</li>\r\n<li>Kabel Penyalur NYY 1x50mm - 30 Meter</li>\r\n<li>Grounding Dibawah 5ohm</li>\r\n<li>1 Set Box Pannel</li>\r\n<li>Material Bantu</li>\r\n<li>Free Instalasi</li>\r\n</ol>', 'Harga Hubungi Kami', 'vikingV3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket_konvensional`
--

CREATE TABLE `paket_konvensional` (
  `id_pkt` varchar(20) NOT NULL,
  `nama_pkt` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori_pkt` text NOT NULL,
  `deskripsi_pkt` longtext NOT NULL,
  `harga_pkt` int(11) NOT NULL,
  `gambar_pkt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_konvensional`
--

INSERT INTO `paket_konvensional` (`id_pkt`, `nama_pkt`, `slug`, `kategori_pkt`, `deskripsi_pkt`, `harga_pkt`, `gambar_pkt`) VALUES
('kon_1', 'Paket Konvensional 1 Tombak', 'paket-konvensional-1-tombak', 'Konvensional', '<ol>\r\n<li>Splitzen Tembaga 1 buah</li>\r\n<li>Kabel BC 25mm 20 meter*</li>\r\n<li>Pipa conduit 5 Lonjor</li>\r\n<li>Pipa Penyangga Splitzer 1.2 meter</li>\r\n<li>Grounding dibawah 5ohm</li>\r\n<li>Free instalasi</li>\r\n</ol>\r\n\r\n<p>*Jika melebihi 20 meter ada tambahan</p>', 2500000, 'gambar1.jpg'),
('kon_2', 'Paket Konvensional 2 Tombak', 'paket-konvensional-1-tombak', 'Konvensional', '<ol>\r\n<li>Splitzen Tembaga 1 buah</li>\r\n<li>Kabel BC 25mm 25 meter*</li>\r\n<li>Pipa conduit 8 Lonjor</li>\r\n<li>Pipa Penyangga Splitzer 1.2 meter x2</li>\r\n<li>Grounding dibawah 5ohm</li>\r\n<li>Free instalasi</li>\r\n</ol>\r\n\r\n<p>*Jika melebihi 25 meter ada tambahan</p>', 2750000, 'gambar1.jpg'),
('kon_3', 'Paket Konvensional 3 Tombak', 'paket-konvensional-1-tombak', 'Konvensional', '<ol>\r\n<li>Splitzen Tembaga 3 buah</li>\r\n<li>Kabel BC 25mm 30 meter*</li>\r\n<li>Pipa conduit 10 Lonjor</li>\r\n<li>Pipa Penyangga Splitzer 1.2 meter x3</li>\r\n<li>Grounding dibawah 5ohm</li>\r\n<li>Free instalasi</li>\r\n</ol>\r\n\r\n<p>*Jika melebihi 30 meter ada tambahan</p>', 3250000, 'gambar1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
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
(15, '7c222fb2927d828af22f592134e8932480637c0d', 0, 'Rendra', 'Surya', 'rendra@mail.com', '081117484856', 'Laki-Laki');

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
-- Indexes for table `paket_elektrostatis`
--
ALTER TABLE `paket_elektrostatis`
  ADD PRIMARY KEY (`id_pkt`);

--
-- Indexes for table `paket_konvensional`
--
ALTER TABLE `paket_konvensional`
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
  MODIFY `no_order` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
