-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Agu 2019 pada 18.16
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simonponik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ph`
--

CREATE TABLE `ph` (
  `id` int(5) NOT NULL,
  `id_tanaman` varchar(3) NOT NULL,
  `Waktu` varchar(255) NOT NULL,
  `PH` varchar(4) NOT NULL,
  `ph_before` varchar(4) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `waktu_perbaikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ph`
--

INSERT INTO `ph` (`id`, `id_tanaman`, `Waktu`, `PH`, `ph_before`, `Action`, `nilai`, `waktu_perbaikan`) VALUES
(1, '1', '2019-06-14 06:00:00', '9', '4', 'PH dinaikkan ', '42.8571%', '2019-07-01 23:24:07'),
(20, '1', '2019-07-02 11:06:50.110344', '7', '8', 'PH diturunkan', '12.5', '2019-08-22 16:08:42'),
(21, '2', '2019-08-22 19:48:00.213561', '4', '2', 'PH dinaikkan', '50', '2019-08-22 19:50:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppm`
--

CREATE TABLE `ppm` (
  `id` int(5) NOT NULL,
  `id_tanaman` varchar(3) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Ppm` varchar(255) NOT NULL,
  `ppm_before` varchar(5) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `waktu_perbaikan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppm`
--

INSERT INTO `ppm` (`id`, `id_tanaman`, `Waktu`, `Ppm`, `ppm_before`, `Action`, `nilai`, `waktu_perbaikan`) VALUES
(1, '1', '2019-06-13 00:00:00', '4000', '3000', 'PPM diturunkan', '', '2019-06-29 16:00:55'),
(2, '1', '2019-06-19 00:00:00', '2500', '6', 'ppm tanaman dinaikkan ', '99.76%', '2019-08-21 14:56:19'),
(3, '1', '2019-08-22 20:20:43', '2500', '800', 'ppm tanaman dinaikkan', '68', '2019-08-22 23:13:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room_humidity`
--

CREATE TABLE `room_humidity` (
  `id` int(5) NOT NULL,
  `id_tanaman` varchar(3) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Humidity` varchar(255) NOT NULL,
  `humid_before` varchar(5) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `waktu_perbaikan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `room_humidity`
--

INSERT INTO `room_humidity` (`id`, `id_tanaman`, `Waktu`, `Humidity`, `humid_before`, `Action`, `nilai`, `waktu_perbaikan`) VALUES
(1, '1', '2019-06-05 00:00:00', '50', '2019', 'Kadar Kelembapan dinaikkan', '', '2019-06-29 15:25:46'),
(2, '1', '2019-06-10 03:41:05', '50', '2019', 'Kadar Kelembapan dinaikkan', '', '2019-06-29 14:50:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_poin`
--

CREATE TABLE `set_poin` (
  `id_tanaman` int(5) NOT NULL,
  `nama_tanaman` varchar(40) NOT NULL,
  `ph` float NOT NULL,
  `ppm` float NOT NULL,
  `room_humidity` float NOT NULL,
  `water_level` float NOT NULL,
  `water_temperature` float NOT NULL,
  `waktu_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `set_poin`
--

INSERT INTO `set_poin` (`id_tanaman`, `nama_tanaman`, `ph`, `ppm`, `room_humidity`, `water_level`, `water_temperature`, `waktu_input`) VALUES
(1, 'Sawi', 7, 2500, 50, 5, 27, '2019-08-15 17:11:15'),
(2, 'Cabe', 4, 6, 5, 30, 2, '2019-08-16 11:13:05'),
(3, 'Kangkung', 4, 600, 22, 10, 12, '2019-08-08 00:00:00'),
(4, 'Selada Air', 5, 2000, 30, 30, 12, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tanaman`
--

CREATE TABLE `tbl_tanaman` (
  `id_tanaman` int(3) NOT NULL,
  `nama_tanaman` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(3) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Waktu` date NOT NULL,
  `Action` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `Username`, `Waktu`, `Action`, `Password`) VALUES
(1, 'fadil', '2019-08-18', 'login', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_action`
--

CREATE TABLE `user_action` (
  `id` int(11) NOT NULL,
  `id_tanaman` varchar(3) NOT NULL,
  `action` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_action`
--

INSERT INTO `user_action` (`id`, `id_tanaman`, `action`, `jumlah`, `waktu`) VALUES
(1, '1', 'Suhu Air dinaikkan', '', '2019-06-27 01:50:24'),
(2, '1', 'PH dinaikkan', '', '2019-06-27 01:55:19'),
(3, '1', 'PH dinaikkan', '', '2019-06-29 14:19:12'),
(4, '', 'Kadar Kelembapan dinaikkan', '', '2019-06-29 14:50:17'),
(5, '', 'PH dinaikkan', '', '2019-06-29 15:11:07'),
(6, '', 'Suhu Air dinaikkan', '', '2019-06-29 15:20:33'),
(7, '', 'Ketinggian Air dinaikkan', '', '2019-06-29 15:23:00'),
(8, '', 'Kadar Kelembapan dinaikkan', '', '2019-06-29 15:25:46'),
(9, '', 'Suhu Air diturunkan', '', '2019-06-29 15:28:39'),
(10, '', 'Suhu Air dinaikkan', '', '2019-06-29 15:29:15'),
(11, '1', 'Suhu Air dinaikkan', '', '2019-06-29 15:30:36'),
(12, '1', 'PH diturunkan', '', '2019-06-29 15:50:27'),
(13, '', 'PPM diturunkan', '', '2019-06-29 15:59:15'),
(14, '', 'PPM diturunkan', '', '2019-06-29 16:00:55'),
(15, '1', 'Ketinggian Air diturunkan', '', '2019-06-29 16:31:22'),
(16, '1', 'Ketinggian Air diturunkan', '', '2019-06-29 16:41:19'),
(17, '1', 'PH diturunkan', '', '2019-07-01 08:59:30'),
(18, '1', 'PH dinaikkan', '', '2019-07-01 23:11:03'),
(19, '1', 'PH dinaikkan \"42.857142857143\"', '', '2019-07-01 23:13:22'),
(20, '1', 'PH dinaikkan ', '', '2019-07-01 23:21:17'),
(21, '1', 'PH dinaikkan 42.857142857143%', '', '2019-07-01 23:24:07'),
(22, '1', 'PH dinaikkan 42.857142857143%', '', '2019-07-02 00:05:01'),
(23, '1', 'PH diturunkan 42.857142857143%', '', '2019-07-02 00:11:14'),
(24, '1', 'PH diturunkan 57.142857142857%', '', '2019-07-02 00:29:31'),
(25, '1', 'level air diturunkan500%', '500', '2019-07-02 00:39:22'),
(26, '1', 'PH diturunkan 22.222222222222%', '22.222222222222', '2019-07-02 10:22:17'),
(27, '1', 'PH diturunkan 12.5%', '12.5', '2019-07-02 11:07:52'),
(28, '2', 'PH diturunkan 55.555555555556%', '55.555555555556', '2019-08-16 15:01:04'),
(29, '2', 'ppm tanaman diturunkan99.85%', '99.85', '2019-08-16 15:03:45'),
(30, '2', 'level air dinaikkan 83.333333333333%', '83.333333333333', '2019-08-16 15:03:52'),
(31, '2', 'suhu air diturunkan%', '0', '2019-08-16 15:04:00'),
(32, '1', 'ppm tanaman dinaikkan 99.76%', '', '2019-08-21 14:56:19'),
(33, '3', 'level air diturunkan66.666666666667%', '66.666666666667', '2019-08-21 15:41:27'),
(34, '1', 'PH dinaikkan 42.857142857143%', '42.857142857143', '2019-08-22 00:41:51'),
(35, '1', 'suhu air diturunkan', '0', '2019-08-22 15:55:29'),
(36, '1', 'level air diturunkan', '50', '2019-08-22 15:55:53'),
(37, '1', 'suhu air dinaikkan ', '0', '2019-08-22 15:59:04'),
(38, '1', 'suhu air diturunkan', '46', '2019-08-22 16:02:31'),
(39, '1', 'suhu air diturunkan', '10', '2019-08-22 16:03:32'),
(40, '1', 'PH dinaikkan ', '14.285714285714', '2019-08-22 16:04:48'),
(41, '1', 'PH diturunkan', '12.5', '2019-08-22 16:08:42'),
(42, '2', 'PH dinaikkan', '50', '2019-08-22 19:50:52'),
(43, '1', 'ppm tanaman dinaikkan', '', '2019-08-22 23:11:15'),
(44, '1', 'ppm tanaman dinaikkan', '', '2019-08-22 23:13:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `water_level`
--

CREATE TABLE `water_level` (
  `id` int(5) NOT NULL,
  `id_tanaman` varchar(3) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Water_Level` varchar(255) NOT NULL,
  `level_before` varchar(5) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `waktu_perbaikan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `water_level`
--

INSERT INTO `water_level` (`id`, `id_tanaman`, `Waktu`, `Water_Level`, `level_before`, `Action`, `nilai`, `waktu_perbaikan`) VALUES
(1, '1', '2019-06-13 00:00:00', '5', '10', 'level air diturunkan', '50', '2019-08-22 15:55:53'),
(2, '1', '2019-06-10 03:41:05', '20', '12', 'Ketinggian Air diturunkan', '', '2019-06-27 01:30:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `water_temperature`
--

CREATE TABLE `water_temperature` (
  `id` int(5) NOT NULL,
  `id_tanaman` varchar(3) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Temperature` varchar(255) NOT NULL,
  `temp_before` varchar(3) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `waktu_perbaikan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `water_temperature`
--

INSERT INTO `water_temperature` (`id`, `id_tanaman`, `Waktu`, `Temperature`, `temp_before`, `Action`, `nilai`, `waktu_perbaikan`) VALUES
(1, '1', '2019-06-05 00:00:00', '27', '22', 'Suhu Air dinaikkan', '', '2019-06-29 15:30:36'),
(2, '1', '2019-06-10 03:41:05', '27', '30', 'suhu air diturunkan', '10', '2019-08-22 16:03:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppm`
--
ALTER TABLE `ppm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_humidity`
--
ALTER TABLE `room_humidity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_poin`
--
ALTER TABLE `set_poin`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `tbl_tanaman`
--
ALTER TABLE `tbl_tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_action`
--
ALTER TABLE `user_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_level`
--
ALTER TABLE `water_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_temperature`
--
ALTER TABLE `water_temperature`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ppm`
--
ALTER TABLE `ppm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_humidity`
--
ALTER TABLE `room_humidity`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `set_poin`
--
ALTER TABLE `set_poin`
  MODIFY `id_tanaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tanaman`
--
ALTER TABLE `tbl_tanaman`
  MODIFY `id_tanaman` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_action`
--
ALTER TABLE `user_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `water_level`
--
ALTER TABLE `water_level`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `water_temperature`
--
ALTER TABLE `water_temperature`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `room_humidity`
--
ALTER TABLE `room_humidity`
  ADD CONSTRAINT `room_humidity_ibfk_1` FOREIGN KEY (`id`) REFERENCES `set_poin` (`id_tanaman`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
