-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 11:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holygroundscoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_meja` varchar(100) NOT NULL,
  `select_person` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pesanan` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `nama`, `email`, `no_hp`, `no_meja`, `select_person`, `status`, `photo`, `pesanan`, `time`, `date`) VALUES
(31, 'Puja Nadeak', 'pujanadeak11@gmail.com', '0895705208770', '5', '5', 'Pending', 'Logo_UMBY1.png', 'ayam', '12:11:00', '2023-07-20'),
(32, 'Ahok', 'ahok@gmail.com', '0895705208770', '10', '5', 'Pending', 'Logo_UMBY2.png', 'Coffee', '02:00:00', '2023-07-30'),
(33, 'Puja Nadeak', 'pujanadeak11@gmail.com', '0895705208770', '7', '3', 'Pending', 'Logo_UMBY3.png', 'ayam penyet', '12:00:00', '2023-07-21'),
(34, 'Puja Nadeak', 'pujanadeak11@gmail.com', '0895705208770', '6', '7', 'Pending', 'Logo_UMBY4.png', 'Nasi Ikan Bawal', '12:00:00', '2023-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `select_person` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `select_person`, `deskripsi`) VALUES
(3, 'Puja Nadeak', 'pujanadeak11@gmail.com', '4', 'Mau batalkan reservasi tempat min');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `gambar`, `nama`) VALUES
(9, 'msg5893429742-43441.jpg', 'Pengunjung'),
(10, 'msg5893429742-43431.jpg', 'Pengunjung'),
(11, 'msg5893429742-43451.jpg', 'Pengunjung'),
(12, 'g22.jpg', 'Pengunjung'),
(13, 'g32.jpg', 'Pengunjung'),
(14, 'g14.jpg', 'Pengunjung');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `date`) VALUES
(13, 'Hot Drink and Food', '2023-06-26'),
(27, 'Snack', '2023-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `kode`, `nama`, `id_kategori`, `nama_kategori`, `harga`, `gambar`, `deskripsi`, `date`) VALUES
(11, 'C2', 'Coffe Caramel', 0, 'Coffe', 20000, 'm11.jpg', 'Caramel Coffee', '2023-05-12'),
(45, 'F1', 'Waffel', 0, 'Hot Drink and Food', 15000, 'm23.jpg', 'Waffel Vanilla', '2023-07-05'),
(46, 'C2', 'Coffe Vanila', 0, 'Coffe', 25000, 'm32.jpg', 'Vanila Coffee', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `link_fb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `nama`, `deskripsi`, `pekerjaan`, `gambar`, `no_hp`, `link_fb`) VALUES
(9, 'Fisti', 'Fisti menjadi salah satu barista di holygrounds coffee', 'Barista', 'Fisti_-_Barista.jpg', '-', ''),
(10, 'Betrand', 'Betrand menjadi salah satu barista di holygrounds coffee', 'Barista', 'Betrand_-_Barista.jpg', '-', ''),
(11, 'Melany', 'Melany menjadi salah satu barista di holygrounds coffee', 'Barista', 'Melany_-_Barista.jpg', '-', ''),
(12, 'Amira', 'Amira menjadi salah satu barista di holygrounds coffee', 'Barista', 'Amira_-_Barista.jpg', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `email`, `deskripsi`, `status`) VALUES
(7, 'Ahok', 'ahok@gmail.com', 'Joss kali bang ', 'approved'),
(8, 'Syabani', 'bani@gmail.com', 'berkeinginan datang kembali', 'approved'),
(9, 'Puja Nadeak', 'pujanadeak11@gmail.com', 'Enak', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `status`, `no_hp`, `nama`, `role_id`, `date`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '082295153183', 'Administrator', 1, '2021-04-11 11:19:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
