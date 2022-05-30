-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 11.33
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
(47, 22, 1011, 'AP20220519055140', '2022-05-19', '14:00', 1, 'Sakit Parah Bgt'),
(48, 22, 1010, 'AP20220519094435', '2022-05-19', '4:30', 1, ''),
(49, 22, 1019, 'AP20220519094732', '2022-05-19', '00:45', 0, ''),
(50, 22, 1019, 'AP20220520050011', '2022-05-20', '3:30', 1, ''),
(51, 22, 1019, 'AP20220520050018', '2022-05-20', '4:15', 0, ''),
(52, 22, 1019, 'AP20220520050027', '2022-05-21', '4:15', 0, ''),
(53, 22, 1019, 'AP20220520050040', '2022-05-21', '00:00', 0, ''),
(54, 22, 1019, 'AP20220520050121', '2022-05-24', '00:00', 1, ''),
(55, 22, 1019, 'AP20220520050134', '2022-06-09', '00:00', 0, ''),
(56, 22, 1019, 'AP20220520050142', '2022-06-10', '00:00', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checking`
--

CREATE TABLE `checking` (
  `id` int(12) NOT NULL,
  `name_checking` varchar(128) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checking`
--

INSERT INTO `checking` (`id`, `name_checking`, `price`) VALUES
(1, 'Blood Checking', '225000.00'),
(2, 'Urine Test', '130000.00'),
(3, 'EKG', '250000.00'),
(4, 'USG Test', '250000.00'),
(5, 'CT Scan', '1400000.00'),
(6, 'MRI', '2300000.00');

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
(6, 'DG220509094329', 'OBH Combi', 60, 'Bottle', 'Obat Batuk', 'Obat Batuk Hitam', '17000.00'),
(7, 'DG220510053136', 'Aminofilin', 100, 'Pcs', 'Drug Hard', 'Drug', '30000.00'),
(8, 'DG220512090507', 'Oskadon', 70, 'PCS', 'Obat Sakit Kepala', 'Obat Ringan', '10000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `drug_stock`
--

CREATE TABLE `drug_stock` (
  `id` int(50) NOT NULL,
  `id_drug` int(10) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `drug_stock_id` varchar(100) DEFAULT NULL,
  `qty` int(100) DEFAULT NULL,
  `coupon_code` varchar(100) DEFAULT NULL,
  `lot_code` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `drug_stock`
--

INSERT INTO `drug_stock` (`id`, `id_drug`, `expired_date`, `drug_stock_id`, `qty`, `coupon_code`, `lot_code`, `note`, `created_date`) VALUES
(6, 3, '2022-05-25', 'STDR220530110615', 12, '123123123', '123111333', 'Ok', '2022-05-30'),
(7, 3, '2022-05-18', 'STDR220530110859', 300, '500', '5000000', 'ok', '2022-05-30'),
(8, 8, '2025-10-30', 'STDR220530111113', 8, '123123123', '558855', 'Ok', '2022-05-30'),
(9, 8, '2024-06-11', 'STDR220530111204', 15, '121212', '1112223333', 'Ok', '2022-05-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_checking_sheet_patient`
--

CREATE TABLE `item_checking_sheet_patient` (
  `id` int(100) NOT NULL,
  `id_master_checking_sheet_patient` int(30) DEFAULT NULL,
  `id_checking` int(12) DEFAULT NULL,
  `checking_note` text DEFAULT NULL,
  `checking_qty` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item_checking_sheet_patient`
--

INSERT INTO `item_checking_sheet_patient` (`id`, `id_master_checking_sheet_patient`, `id_checking`, `checking_note`, `checking_qty`) VALUES
(1, 4, 5, 'check bagian kepala', 1),
(2, 4, 6, 'check bagian tulang kepala', 1),
(3, 5, 1, 'Test Darah', 3),
(4, 5, 4, 'Usg', 2),
(5, 5, 3, 'EKG Test Routine', 3),
(6, 5, 6, 'MRI Test', 1),
(8, 7, 5, 'oke', 1),
(9, 7, 3, 'oke', 1),
(10, 7, 1, 'oke', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_recipe_drug_patient`
--

CREATE TABLE `item_recipe_drug_patient` (
  `id` int(20) NOT NULL,
  `id_drug` int(10) DEFAULT NULL,
  `id_master_recipe_drug_patient` int(16) DEFAULT NULL,
  `drug_qty` int(10) DEFAULT NULL,
  `note_drug` text DEFAULT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item_recipe_drug_patient`
--

INSERT INTO `item_recipe_drug_patient` (`id`, `id_drug`, `id_master_recipe_drug_patient`, `drug_qty`, `note_drug`, `remark`) VALUES
(1, 3, 13, 2, 'Minum', NULL),
(2, 7, 13, 1, 'Minum', NULL),
(3, 8, 14, 10, 'Minum', NULL),
(4, 6, 14, 13, 'Minum Terus', NULL),
(5, 7, 14, 13, 'Minum Terus', NULL),
(6, 3, 15, 15, 'Di Minum 3 kali sehari', NULL),
(7, 7, 16, 23, 'Oke', NULL),
(8, 7, 16, 23, 'Oke', NULL),
(9, 7, 16, 23, 'Oke', NULL),
(10, 7, 17, 3, 'Drink Everytime', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_checking_sheet_patient`
--

CREATE TABLE `master_checking_sheet_patient` (
  `id` int(30) NOT NULL,
  `cs_id` varchar(128) DEFAULT NULL,
  `id_patient` int(10) DEFAULT NULL,
  `id_medical_record` int(200) DEFAULT NULL,
  `diagnostic` text DEFAULT NULL,
  `instruction` text DEFAULT NULL,
  `place_test` text DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_checking_sheet_patient`
--

INSERT INTO `master_checking_sheet_patient` (`id`, `cs_id`, `id_patient`, `id_medical_record`, `diagnostic`, `instruction`, `place_test`, `created_date`) VALUES
(4, 'CLS220519090335', 1011, 11, 'Sakit Kepala', 'Sedang Pengecekan', 'Rumah Sakit', '2022-05-19'),
(5, 'CLS220519094549', 1010, 12, 'Kanker', 'Must be check now !', 'Depok', '2022-05-19'),
(7, 'CLS220530045810', 1011, 11, 'Kronis Head', 'test', 'Placetest', '2022-05-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_recipe_drug_patient`
--

CREATE TABLE `master_recipe_drug_patient` (
  `id` int(16) NOT NULL,
  `recipe_id` varchar(64) DEFAULT NULL,
  `id_patient` int(10) DEFAULT NULL,
  `reason_checking` text DEFAULT NULL,
  `diagnostic` text DEFAULT NULL,
  `instruction` text DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_recipe_drug_patient`
--

INSERT INTO `master_recipe_drug_patient` (`id`, `recipe_id`, `id_patient`, `reason_checking`, `diagnostic`, `instruction`, `created_date`) VALUES
(13, 'R220512091403', 1011, 'Saya Pusing', 'Sakit Kepala', 'After Lunch', '2022-05-12'),
(14, 'R220512091444', 1014, 'Es terosss', 'Batuk', 'Di jaga', '2022-05-12'),
(15, 'R220517102102', 1019, 'Pusing 7 keliling', 'Migrain', 'Di Minum 3 kali sehari', '2022-05-17'),
(16, 'R220518060229', 1015, 'HeadAche', 'Kronis Head', 'baik baik yaaa', '2022-05-18'),
(17, 'R220520050911', 1019, 'Hand Crash', 'Handache', 'Drink Everytime', '2022-05-20');

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
(11, 22, 1011, 47, NULL, NULL, NULL, 0, '2022-05-19'),
(12, 22, 1010, 48, NULL, NULL, NULL, 0, '2022-05-19'),
(14, 22, 1019, 54, NULL, NULL, NULL, 0, '2022-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patient`
--

CREATE TABLE `patient` (
  `id` int(10) NOT NULL,
  `patient_id` varchar(32) DEFAULT NULL,
  `patient_name` varchar(128) DEFAULT NULL,
  `sex` int(2) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `blood_type` varchar(32) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone_number_1` varchar(20) DEFAULT NULL,
  `email` varchar(96) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `patient`
--

INSERT INTO `patient` (`id`, `patient_id`, `patient_name`, `sex`, `birth_date`, `blood_type`, `address`, `phone_number_1`, `email`, `date_created`) VALUES
(1010, 'P220418033524', 'Polim Puan', 2, NULL, 'A', 'ok', '2568487', 'tkj2.0erlangga.sa@me.geli', '2022-04-18'),
(1011, 'P220418034258', 'Angga Yunanda', 1, NULL, 'B', 'Ok', '11312', 'angga@mail.com', '2022-04-18'),
(1013, 'P220418034340', 'Sinta Nusantara', 2, NULL, 'A', 'Ok', '123', 'sin@sin.com', '2022-04-18'),
(1014, 'P220418034423', 'Umi Latifah', 2, NULL, 'AB', 'ok', '123123456', 'lat@lat.com', '2022-04-18'),
(1015, 'P220418034458', 'Andrianto', 1, NULL, 'AB', 'Ok', '021021021', 'ok@Pop.com', '2022-04-18'),
(1017, 'P220418034535', 'Ridwan Malik', 2, '0000-00-00', 'A', 'dassda', '02445454', 'megiccard@a.com', '2022-04-18'),
(1019, 'P220418034637', 'Bob Mama', 1, '1976-04-20', 'A', 'asdsdasda', '12121212121', 'oasdsa@oasdasdk.com', '2022-04-18'),
(1020, 'P220520061547', 'Ismail Dwi Nugroho', 1, '2000-01-10', 'A', 'Di Depkes', '0215522114', 'ismael22@gmail.com', '2022-05-20');

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
-- Indeks untuk tabel `checking`
--
ALTER TABLE `checking`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `drug_stock`
--
ALTER TABLE `drug_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_drug` (`id_drug`);

--
-- Indeks untuk tabel `item_checking_sheet_patient`
--
ALTER TABLE `item_checking_sheet_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_master_checking_sheet_patient` (`id_master_checking_sheet_patient`),
  ADD KEY `id_checking` (`id_checking`);

--
-- Indeks untuk tabel `item_recipe_drug_patient`
--
ALTER TABLE `item_recipe_drug_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_drug` (`id_drug`),
  ADD KEY `id_master_recipe_drug_patient` (`id_master_recipe_drug_patient`);

--
-- Indeks untuk tabel `master_checking_sheet_patient`
--
ALTER TABLE `master_checking_sheet_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_patient` (`id_patient`),
  ADD KEY `id_medical_record` (`id_medical_record`);

--
-- Indeks untuk tabel `master_recipe_drug_patient`
--
ALTER TABLE `master_recipe_drug_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recipe_id` (`recipe_id`),
  ADD KEY `id_patient` (`id_patient`);

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `checking`
--
ALTER TABLE `checking`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `drug_stock`
--
ALTER TABLE `drug_stock`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `item_checking_sheet_patient`
--
ALTER TABLE `item_checking_sheet_patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `item_recipe_drug_patient`
--
ALTER TABLE `item_recipe_drug_patient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `master_checking_sheet_patient`
--
ALTER TABLE `master_checking_sheet_patient`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_recipe_drug_patient`
--
ALTER TABLE `master_recipe_drug_patient`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

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
-- Ketidakleluasaan untuk tabel `drug_stock`
--
ALTER TABLE `drug_stock`
  ADD CONSTRAINT `drug_stock_ibfk_1` FOREIGN KEY (`id_drug`) REFERENCES `drug` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `item_checking_sheet_patient`
--
ALTER TABLE `item_checking_sheet_patient`
  ADD CONSTRAINT `item_checking_sheet_patient_ibfk_1` FOREIGN KEY (`id_master_checking_sheet_patient`) REFERENCES `master_checking_sheet_patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_checking_sheet_patient_ibfk_2` FOREIGN KEY (`id_checking`) REFERENCES `checking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `item_recipe_drug_patient`
--
ALTER TABLE `item_recipe_drug_patient`
  ADD CONSTRAINT `item_recipe_drug_patient_ibfk_1` FOREIGN KEY (`id_drug`) REFERENCES `drug` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_recipe_drug_patient_ibfk_2` FOREIGN KEY (`id_master_recipe_drug_patient`) REFERENCES `master_recipe_drug_patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_checking_sheet_patient`
--
ALTER TABLE `master_checking_sheet_patient`
  ADD CONSTRAINT `master_checking_sheet_patient_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `master_checking_sheet_patient_ibfk_2` FOREIGN KEY (`id_medical_record`) REFERENCES `medical_record` (`id`),
  ADD CONSTRAINT `master_checking_sheet_patient_ibfk_3` FOREIGN KEY (`id_medical_record`) REFERENCES `medical_record` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_recipe_drug_patient`
--
ALTER TABLE `master_recipe_drug_patient`
  ADD CONSTRAINT `master_recipe_drug_patient_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`);

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
