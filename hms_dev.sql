-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2022 pada 10.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_dev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `appointment`
--

CREATE TABLE `appointment` (
  `id` int(200) NOT NULL,
  `id_doctor` int(8) DEFAULT NULL,
  `id_patient` int(8) DEFAULT NULL,
  `appointment_id` varchar(128) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` varchar(32) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `appointment`
--

INSERT INTO `appointment` (`id`, `id_doctor`, `id_patient`, `appointment_id`, `appointment_date`, `appointment_time`, `status`, `note`) VALUES
(27, 22, 1019, 'AP20220418043148', '2022-04-18', '00:30', 0, ''),
(28, 22, 1019, 'AP20220418043248', '2022-04-18', '4:30', 0, ''),
(29, 22, 1019, 'AP20220418045912', '2022-04-18', '4:00', 0, ''),
(30, 22, 1015, 'AP20220418045918', '2022-04-18', '20:30', 0, ''),
(31, 22, 1019, 'AP20220418050055', '2022-04-19', '4:30', 1, ''),
(32, 22, 1019, 'AP20220418050132', '2022-04-19', '00:00', 1, ''),
(33, 22, 1019, 'AP20220418050137', '2022-04-21', '22:00', 1, ''),
(34, 22, 1019, 'AP20220418050147', '2022-04-27', '4:45', 0, ''),
(35, 22, 1019, 'AP20220418050218', '2022-04-28', '4:30', 0, ''),
(36, 22, 1019, 'AP20220418050224', '2022-04-29', '20:30', 0, ''),
(37, 22, 1019, 'AP20220419103733', '2022-04-19', '3:30', 0, ''),
(38, 22, 1019, 'AP20220419103819', '2022-04-19', '00:00', 1, ''),
(39, 22, 1019, 'AP20220421083951', '2022-04-21', '00:00', 1, ''),
(40, 22, 1019, 'AP20220421084009', '2022-04-21', '3:15', 0, ''),
(41, 22, 1019, 'AP20220421084013', '2022-04-21', '3:30', 1, ''),
(42, 22, 1019, 'AP20220421084026', '2022-04-21', '4:00', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctor`
--

CREATE TABLE `doctor` (
  `id` int(10) NOT NULL,
  `doctor_id` varchar(32) DEFAULT NULL,
  `doctor_name` varchar(128) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `experience_year` int(2) DEFAULT NULL,
  `no_handphone` varchar(20) DEFAULT NULL,
  `last_education` varchar(32) DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_id`, `doctor_name`, `status`, `experience_year`, `no_handphone`, `last_education`, `birth_date`) VALUES
(16, 'D220412105028', 'Anggi Lesmana', 1, 23, '552255', 'SI', '0000-00-00'),
(22, 'D220412110813', 'Findri Lumawa', 1, 213, '123213231', 'asddas\'', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `drug`
--

CREATE TABLE `drug` (
  `id` int(10) NOT NULL,
  `drug_id` varchar(64) DEFAULT NULL,
  `drug_name` varchar(128) DEFAULT NULL,
  `qty` int(20) DEFAULT NULL,
  `unit` varchar(64) DEFAULT NULL,
  `spec` text DEFAULT NULL,
  `category` text DEFAULT NULL,
  `price_per_unit` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `drug`
--

INSERT INTO `drug` (`id`, `drug_id`, `drug_name`, `qty`, `unit`, `spec`, `category`, `price_per_unit`) VALUES
(3, 'DG220509093244', 'Paramex', 25, 'PCS', 'Obat Pusing', 'Obat Sakit Kepala', '5000.00'),
(6, 'DG220509094329', 'OBH Combi', 60, 'Bottle', 'Obat Batuk', 'Obat Batuk Hitam', '17000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_checking`
--

CREATE TABLE `master_checking` (
  `id` int(2) NOT NULL,
  `name_check` varchar(64) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `medical_record`
--

CREATE TABLE `medical_record` (
  `id` int(200) NOT NULL,
  `id_doctor` int(8) DEFAULT NULL,
  `id_patient` int(8) DEFAULT NULL,
  `id_appointment` int(200) DEFAULT NULL,
  `medical_record_id` varchar(128) DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `checks` text DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `medical_record`
--

INSERT INTO `medical_record` (`id`, `id_doctor`, `id_patient`, `id_appointment`, `medical_record_id`, `diagnosis`, `checks`, `status`, `created_date`) VALUES
(4, 22, 1019, 39, NULL, 'Pusing', 'Tensi Darah', 2, '2022-04-21'),
(5, 22, 1019, 41, NULL, 'Perih', 'Cek jantung 35', 2, '2022-04-21'),
(6, 22, 1019, 42, NULL, NULL, NULL, 0, '2022-04-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patient`
--

CREATE TABLE `patient` (
  `id` int(10) NOT NULL,
  `patient_id` varchar(32) DEFAULT NULL,
  `patient_name` varchar(128) DEFAULT NULL,
  `sex` int(2) DEFAULT NULL,
  `blood_type` varchar(32) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone_number_1` varchar(20) DEFAULT NULL,
  `email` varchar(96) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `patient`
--

INSERT INTO `patient` (`id`, `patient_id`, `patient_name`, `sex`, `blood_type`, `age`, `address`, `phone_number_1`, `email`, `date_created`) VALUES
(1010, 'P220418033524', 'Polim Puan', 2, 'A', 25, 'ok', '2568487', 'tkj2.0erlangga.sa@me.geli', '2022-04-18'),
(1011, 'P220418034258', 'Angga Yunanda', 1, 'B', 18, 'Ok', '11312', 'angga@mail.com', '2022-04-18'),
(1012, 'P220418034322', 'Febri Ananda', 2, 'AB', 25, 'ok', '123', 'feb@b.com', '2022-04-18'),
(1013, 'P220418034340', 'Sinta Nusantara', 2, 'A', 30, 'Ok', '123', 'sin@sin.com', '2022-04-18'),
(1014, 'P220418034423', 'Umi Latifah', 2, 'AB', 17, 'ok', '123123456', 'lat@lat.com', '2022-04-18'),
(1015, 'P220418034458', 'Andrianto', 1, 'AB', 24, 'Ok', '021021021', 'ok@Pop.com', '2022-04-18'),
(1016, 'P220418034517', 'Son Sendra', 1, 'AB', 74, 'ad', '02133636987', 'tkj2.0erlangga.sa@me.geli', '2022-04-18'),
(1017, 'P220418034535', 'Ridwan Malik', 1, 'B', 45, 'dassda', '02445454', 'megiccard@a.com', '2022-04-18'),
(1019, 'P220418034637', 'Bob Mama', 2, 'B', 26, 'asdsdasda', '12121212121', 'oasdsa@oasdasdk.com', '2022-04-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(16) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `fullname` varchar(128) DEFAULT NULL,
  `role_user` int(2) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `role_user`, `created_at`) VALUES
(1, 'admin', 'd82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892', 'Admin One', 1, '2022-04-13'),
(2, 'admin2', '9cb5a4c0d44c36335d3ebda14d989a161100c69948383d8620126b0e54a3fe4e', 'Admin Two', 1, '2022-04-13'),
(3, 'kolink', 'd240199900def07dfb5841044fef51baaeaa0eb82f37f27bd53f29e46678859e', 'Kolink', 1, '2022-04-13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appointment_id` (`appointment_id`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Indeks untuk tabel `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctor_id` (`doctor_id`);

--
-- Indeks untuk tabel `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drug_id` (`drug_id`);

--
-- Indeks untuk tabel `master_checking`
--
ALTER TABLE `master_checking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medical_record_id` (`medical_record_id`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_patient` (`id_patient`),
  ADD KEY `id_appointment` (`id_appointment`);

--
-- Indeks untuk tabel `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_checking`
--
ALTER TABLE `master_checking`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medical_record_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medical_record_ibfk_3` FOREIGN KEY (`id_appointment`) REFERENCES `appointment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
