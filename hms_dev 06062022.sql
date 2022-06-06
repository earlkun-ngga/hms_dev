-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2022 pada 10.44
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
(56, 22, 1019, 'AP20220520050142', '2022-06-10', '00:00', 0, ''),
(57, 16, 1021, 'AP20220606051203', '2022-06-06', '4:45', 1, '');

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
(449, 'DG220602111111', 'Abacavir', 74, 'PCS', 'Basic', 'Drug', '36752.00'),
(450, 'DG220602111112', 'Abaloparatide', 146, 'PCS', 'Basic', 'Drug', '8676.00'),
(451, 'DG220602111113', 'Abciximab', 126, 'PCS', 'Basic', 'Drug', '26019.00'),
(452, 'DG220602111114', 'Abemaciclib', 93, 'PCS', 'Basic', 'Drug', '84426.00'),
(453, 'DG220602111115', 'Abiraterone', 50, 'PCS', 'Basic', 'Drug', '41707.00'),
(454, 'DG220602111116', 'Acai', 7, 'PCS', 'Basic', 'Drug', '39792.00'),
(455, 'DG220602111117', 'Acalabrutinib', 86, 'PCS', 'Basic', 'Drug', '22837.00'),
(456, 'DG220602111118', 'Acamprosate', 102, 'PCS', 'Basic', 'Drug', '97897.00'),
(457, 'DG220602111119', 'Acarbose', 45, 'PCS', 'Basic', 'Drug', '94117.00'),
(458, 'DG220602111120', 'Acetaminophen', 186, 'PCS', 'Basic', 'Drug', '56630.00'),
(459, 'DG220602111121', 'Acetaminophen and Aspirin', 42, 'PCS', 'Basic', 'Drug', '7875.00'),
(460, 'DG220602111122', 'Acetaminophen Chlorpheniramine', 68, 'PCS', 'Basic', 'Drug', '73500.00'),
(461, 'DG220602111123', 'Acetaminophen Chlorpheniramine Dextromethorphan', 149, 'PCS', 'Basic', 'Drug', '16990.00'),
(462, 'DG220602111124', 'Acetaminophen Chlorpheniramine Phenylephrine', 73, 'PCS', 'Basic', 'Drug', '10822.00'),
(463, 'DG220602111125', 'Acetaminophen Dextromethorphan Phenylephrine', 121, 'PCS', 'Basic', 'Drug', '22418.00'),
(464, 'DG220602111126', 'Acetaminophen Dextromethorphan Pseudoephedrine', 200, 'PCS', 'Basic', 'Drug', '36836.00'),
(465, 'DG220602111127', 'Acetaminophen Diphenhydramine Dextromethorphan', 71, 'PCS', 'Basic', 'Drug', '99915.00'),
(466, 'DG220602111128', 'Acetaminophen IV', 49, 'PCS', 'Basic', 'Drug', '28290.00'),
(467, 'DG220602111129', 'Acetaminophen Pamabrom Pyridoxine', 90, 'PCS', 'Basic', 'Drug', '44777.00'),
(468, 'DG220602111130', 'Acetaminophen Phenyltoloxamine', 129, 'PCS', 'Basic', 'Drug', '16344.00'),
(469, 'DG220602111131', 'Acetaminophen Rectal', 91, 'PCS', 'Basic', 'Drug', '19657.00'),
(470, 'DG220602111132', 'Acetaminophen/Doxylamine/Dextromethorphan/Phenylephrine', 103, 'PCS', 'Basic', 'Drug', '80526.00'),
(471, 'DG220602111133', 'Acetaminophen/Pamabrom', 42, 'PCS', 'Basic', 'Drug', '61730.00'),
(472, 'DG220602111134', 'Acetaminophen/Pamabrom/Pyrilamine', 114, 'PCS', 'Basic', 'Drug', '92197.00'),
(473, 'DG220602111135', 'Acetaminophen/Pheniramine/Phenylephrine', 40, 'PCS', 'Basic', 'Drug', '14385.00'),
(474, 'DG220602111136', 'Acetazolamide', 145, 'PCS', 'Basic', 'Drug', '81252.00'),
(475, 'DG220602111137', 'Acetohydroxamic Acid', 187, 'PCS', 'Basic', 'Drug', '96384.00'),
(476, 'DG220602111138', 'Acetylcholine', 14, 'PCS', 'Basic', 'Drug', '80226.00'),
(477, 'DG220602111139', 'Acetylcysteine', 32, 'PCS', 'Basic', 'Drug', '73854.00'),
(478, 'DG220602111140', 'Acetylcysteine', 163, 'PCS', 'Basic', 'Drug', '12824.00'),
(479, 'DG220602111141', 'Aconite', 75, 'PCS', 'Basic', 'Drug', '76453.00'),
(480, 'DG220602111142', 'Activated Charcoal', 167, 'PCS', 'Basic', 'Drug', '72854.00'),
(481, 'DG220602111143', 'Acyclovir', 70, 'PCS', 'Basic', 'Drug', '45317.00'),
(482, 'DG220602111144', 'Adalimumab', 113, 'PCS', 'Basic', 'Drug', '21646.00'),
(483, 'DG220602111145', 'Adapalene', 136, 'PCS', 'Basic', 'Drug', '56697.00'),
(484, 'DG220602111146', 'Adenosine', 151, 'PCS', 'Basic', 'Drug', '99238.00'),
(485, 'DG220602111147', 'Aducanumab', 33, 'PCS', 'Basic', 'Drug', '35679.00'),
(486, 'DG220602111148', 'Agalsidase Alfa', 68, 'PCS', 'Basic', 'Drug', '85282.00'),
(487, 'DG220602111149', 'Agrimony', 124, 'PCS', 'Basic', 'Drug', '26180.00'),
(488, 'DG220602111150', 'Albendazole', 140, 'PCS', 'Basic', 'Drug', '71341.00'),
(489, 'DG220602111151', 'Albumin', 59, 'PCS', 'Basic', 'Drug', '90714.00'),
(490, 'DG220602111152', 'Albuterol', 99, 'PCS', 'Basic', 'Drug', '31264.00'),
(491, 'DG220602111153', 'Alectinib', 16, 'PCS', 'Basic', 'Drug', '62978.00'),
(492, 'DG220602111154', 'Alendronate', 51, 'PCS', 'Basic', 'Drug', '17977.00'),
(493, 'DG220602111155', 'Alfalfa', 139, 'PCS', 'Basic', 'Drug', '39360.00'),
(494, 'DG220602111156', 'Alfuzosin', 76, 'PCS', 'Basic', 'Drug', '82619.00'),
(495, 'DG220602111157', 'Alirocumab', 42, 'PCS', 'Basic', 'Drug', '29549.00'),
(496, 'DG220602111158', 'Alirocumab', 110, 'PCS', 'Basic', 'Drug', '65114.00'),
(497, 'DG220602111159', 'Allogeneic Cultured Keratinocytes/Fibroblasts in Bovine Collagen', 40, 'PCS', 'Basic', 'Drug', '47104.00'),
(498, 'DG220602111160', 'Allopurinol', 150, 'PCS', 'Basic', 'Drug', '11791.00'),
(499, 'DG220602111161', 'Aloe', 101, 'PCS', 'Basic', 'Drug', '67477.00'),
(500, 'DG220602111162', 'Alogliptin', 53, 'PCS', 'Basic', 'Drug', '32655.00'),
(501, 'DG220602111163', 'Alprazolam', 34, 'PCS', 'Basic', 'Drug', '22814.00'),
(502, 'DG220602111164', 'Alprostadil IV', 59, 'PCS', 'Basic', 'Drug', '15884.00'),
(503, 'DG220602111165', 'Alteplase', 143, 'PCS', 'Basic', 'Drug', '14887.00'),
(504, 'DG220602111166', 'Altovis', 11, 'PCS', 'Basic', 'Drug', '43564.00'),
(505, 'DG220602111167', 'Aluminum Acetate Solution', 43, 'PCS', 'Basic', 'Drug', '49077.00'),
(506, 'DG220602111168', 'Aluminum Chloride Topical', 135, 'PCS', 'Basic', 'Drug', '92047.00'),
(507, 'DG220602111169', 'Aluminum Hydroxide', 20, 'PCS', 'Basic', 'Drug', '43918.00'),
(508, 'DG220602111170', 'Aluminum Hydroxide/Magnesium Hydroxide/Simethicone', 89, 'PCS', 'Basic', 'Drug', '43820.00'),
(509, 'DG220602111171', 'Aluminum Hydroxide/Magnesium Trisilicate', 185, 'PCS', 'Basic', 'Drug', '43872.00'),
(510, 'DG220602111172', 'AAm-As', 84, 'PCS', 'Basic', 'Drug', '10432.00'),
(511, 'DG220602111173', 'Amantadine', 15, 'PCS', 'Basic', 'Drug', '7932.00'),
(512, 'DG220602111174', 'Ambenonium', 109, 'PCS', 'Basic', 'Drug', '32335.00'),
(513, 'DG220602111175', 'Amifampridine', 136, 'PCS', 'Basic', 'Drug', '74269.00'),
(514, 'DG220602111176', 'Amikacin', 184, 'PCS', 'Basic', 'Drug', '22954.00'),
(515, 'DG220602111177', 'Amiloride', 156, 'PCS', 'Basic', 'Drug', '32915.00'),
(516, 'DG220602111178', 'Aminocaproic Acid', 86, 'PCS', 'Basic', 'Drug', '36042.00'),
(517, 'DG220602111179', 'Amiodarone', 27, 'PCS', 'Basic', 'Drug', '90470.00'),
(518, 'DG220602111180', 'Amitriptyline', 149, 'PCS', 'Basic', 'Drug', '40496.00'),
(519, 'DG220602111181', 'Amitriptyline-Perphenazine', 52, 'PCS', 'Basic', 'Drug', '82670.00'),
(520, 'DG220602111182', 'Amlodipine', 94, 'PCS', 'Basic', 'Drug', '52110.00'),
(521, 'DG220602111183', 'Ammonium Chloride', 3, 'PCS', 'Basic', 'Drug', '59652.00'),
(522, 'DG220602111184', 'Amoxicillin', 117, 'PCS', 'Basic', 'Drug', '65448.00'),
(523, 'DG220602111185', 'Amoxicillin/Clavulanate', 39, 'PCS', 'Basic', 'Drug', '19382.00'),
(524, 'DG220602111186', 'Amphetamine', 102, 'PCS', 'Basic', 'Drug', '89455.00'),
(525, 'DG220602111187', 'Amphetamine and Dextroamphetamine', 162, 'PCS', 'Basic', 'Drug', '24317.00'),
(526, 'DG220602111188', 'Amphotericin B Cholesteryl Sulfate', 85, 'PCS', 'Basic', 'Drug', '29000.00'),
(527, 'DG220602111189', 'Amphotericin B Deoxycholate', 13, 'PCS', 'Basic', 'Drug', '42172.00'),
(528, 'DG220602111190', 'Amphotericin B Liposomal', 121, 'PCS', 'Basic', 'Drug', '45054.00'),
(529, 'DG220602111191', 'Amphotericin B Phospholipid Complex', 139, 'PCS', 'Basic', 'Drug', '93141.00'),
(530, 'DG220602111192', 'Ampicillin', 118, 'PCS', 'Basic', 'Drug', '57454.00'),
(531, 'DG220602111193', 'Ampicillin/Sulbactam', 187, 'PCS', 'Basic', 'Drug', '83358.00'),
(532, 'DG220602111194', 'Anakinra', 3, 'PCS', 'Basic', 'Drug', '5627.00'),
(533, 'DG220602111195', 'Anamu', 164, 'PCS', 'Basic', 'Drug', '80483.00'),
(534, 'DG220602111196', 'Anastrozole', 9, 'PCS', 'Basic', 'Drug', '51734.00'),
(535, 'DG220602111197', 'Ancestim', 139, 'PCS', 'Basic', 'Drug', '80796.00'),
(536, 'DG220602111198', 'Anidulafungin', 74, 'PCS', 'Basic', 'Drug', '45655.00'),
(537, 'DG220602111199', 'Anthrax Immune Globulin', 86, 'PCS', 'Basic', 'Drug', '9733.00'),
(538, 'DG220602111200', 'Antipyrine Benzocaine Phenylephrine', 32, 'PCS', 'Basic', 'Drug', '63878.00'),
(539, 'DG220602111201', 'Antithymocyte Globulin Rabbit', 65, 'PCS', 'Basic', 'Drug', '38386.00'),
(540, 'DG220602111202', 'Antivenin Centruroides Scorpion', 192, 'PCS', 'Basic', 'Drug', '35078.00'),
(542, 'DG220602111204', 'Apaziquone', 147, 'PCS', 'Basic', 'Drug', '19441.00'),
(543, 'DG220602111205', 'Apixaban', 29, 'PCS', 'Basic', 'Drug', '58132.00'),
(544, 'DG220602111206', 'Apremilast', 18, 'PCS', 'Basic', 'Drug', '84521.00'),
(545, 'DG220602111207', 'Arbaclofen', 104, 'PCS', 'Basic', 'Drug', '94545.00'),
(546, 'DG220602111208', 'Argatroban', 36, 'PCS', 'Basic', 'Drug', '83699.00'),
(547, 'DG220602111209', 'Aripiprazole', 27, 'PCS', 'Basic', 'Drug', '79357.00'),
(548, 'DG220602111210', 'Armodafinil', 168, 'PCS', 'Basic', 'Drug', '10307.00'),
(549, 'DG220602111211', 'Arsenic Trioxide', 32, 'PCS', 'Basic', 'Drug', '45632.00'),
(550, 'DG220602111212', 'Artemether Lumefantrine', 142, 'PCS', 'Basic', 'Drug', '14495.00'),
(551, 'DG220602111213', 'Artesunate', 116, 'PCS', 'Basic', 'Drug', '47009.00'),
(552, 'DG220602111214', 'Artichoke', 121, 'PCS', 'Basic', 'Drug', '96559.00'),
(553, 'DG220602111215', 'Articulin', 84, 'PCS', 'Basic', 'Drug', '48164.00'),
(554, 'DG220602111216', 'Artificial Saliva', 41, 'PCS', 'Basic', 'Drug', '27409.00'),
(555, 'DG220602111217', 'Artificial Tears', 18, 'PCS', 'Basic', 'Drug', '12161.00'),
(556, 'DG220602111218', 'Ascorbic Acid', 165, 'PCS', 'Basic', 'Drug', '46553.00'),
(557, 'DG220602111219', 'Asenapine', 92, 'PCS', 'Basic', 'Drug', '94097.00'),
(558, 'DG220602111220', 'Ashwagandha', 85, 'PCS', 'Basic', 'Drug', '50482.00'),
(559, 'DG220602111221', 'Aspirin', 43, 'PCS', 'Basic', 'Drug', '29735.00'),
(560, 'DG220602111222', 'Aspirin Rectal', 22, 'PCS', 'Basic', 'Drug', '82641.00'),
(561, 'DG220602111223', 'Aspirin-Citric Acid-Sodium Bicarbonate', 59, 'PCS', 'Basic', 'Drug', '80401.00'),
(562, 'DG220602111224', 'Aspirin/Chlorpheniramine/Dextromethorphan', 139, 'PCS', 'Basic', 'Drug', '24695.00'),
(563, 'DG220602111225', 'Aspirin/Chlorpheniramine/Phenylephrine', 173, 'PCS', 'Basic', 'Drug', '71637.00'),
(564, 'DG220602111226', 'Astragalus', 196, 'PCS', 'Basic', 'Drug', '13026.00'),
(565, 'DG220602111227', 'AAt-Az', 114, 'PCS', 'Basic', 'Drug', '60409.00'),
(566, 'DG220602111228', 'Ataluren', 165, 'PCS', 'Basic', 'Drug', '10031.00'),
(567, 'DG220602111229', 'Atenolol', 112, 'PCS', 'Basic', 'Drug', '55155.00'),
(568, 'DG220602111230', 'Atezolizumab', 152, 'PCS', 'Basic', 'Drug', '77871.00'),
(569, 'DG220602111231', 'Atomoxetine', 200, 'PCS', 'Basic', 'Drug', '72669.00'),
(570, 'DG220602111232', 'Atorvastatin', 96, 'PCS', 'Basic', 'Drug', '28228.00'),
(571, 'DG220602111233', 'Atovaquone Proguanil', 121, 'PCS', 'Basic', 'Drug', '51584.00'),
(572, 'DG220602111234', 'Atracurium', 68, 'PCS', 'Basic', 'Drug', '84602.00'),
(573, 'DG220602111235', 'Atropine', 180, 'PCS', 'Basic', 'Drug', '48591.00'),
(574, 'DG220602111236', 'Atropine', 193, 'PCS', 'Basic', 'Drug', '40788.00'),
(575, 'DG220602111237', 'Atropine/Pralidoxime', 180, 'PCS', 'Basic', 'Drug', '58498.00'),
(576, 'DG220602111238', 'Attapulgite', 11, 'PCS', 'Basic', 'Drug', '42036.00'),
(577, 'DG220602111239', 'Avelumab', 38, 'PCS', 'Basic', 'Drug', '49566.00'),
(578, 'DG220602111240', 'Axalimogene Filolisbac', 174, 'PCS', 'Basic', 'Drug', '46287.00'),
(579, 'DG220602111241', 'Azacitidine', 39, 'PCS', 'Basic', 'Drug', '23355.00'),
(580, 'DG220602111242', 'Azathioprine', 129, 'PCS', 'Basic', 'Drug', '38931.00'),
(581, 'DG220602111243', 'Azelastine', 175, 'PCS', 'Basic', 'Drug', '83713.00'),
(582, 'DG220602111244', 'Azficel-T', 27, 'PCS', 'Basic', 'Drug', '84112.00'),
(583, 'DG220602111245', 'Azithromycin', 112, 'PCS', 'Basic', 'Drug', '19533.00'),
(584, 'DG220602111246', 'Aztreonam', 168, 'PCS', 'Basic', 'Drug', '59481.00');

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
(10, 453, '2023-10-30', 'STDR220602060101', 15, '1', '1', 'Ok', '2022-06-02'),
(11, 458, '2022-06-30', 'STDR220602060421', 25, '1', '1', 'Ok', '2022-06-02'),
(12, 458, '2022-11-30', 'STDR220602060431', 36, '1', '1', 'Ok', '2022-06-02'),
(13, 458, '2022-12-30', 'STDR220602060444', 100, '1', '1', 'Ok', '2022-06-02'),
(14, 449, '2022-07-06', 'STDR220602062050', 25, '1', '1', 'Ok', '2022-06-02'),
(15, 449, '2022-06-16', 'STDR220602062104', 28, '1', '1', 'Ok', '2022-06-02');

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
(10, 7, 1, 'oke', 1),
(11, 8, 1, '1', 1),
(12, 10, 5, '1', 1);

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
(7, 'CLS220530045810', 1011, 11, 'Kronis Head', 'test', 'Placetest', '2022-05-30'),
(8, 'CLS220603060430', 1011, 11, 'Sembuhkan', '1', 'Sembuhin lah', '2022-06-03'),
(9, 'CLS220603111140', 1011, 11, '', '', '', '2022-06-03'),
(10, 'CLS220606054820', 1021, 15, 'Kepala Berdarah', 'Test Now', 'Di Lokasi', '2022-06-06');

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
(14, 22, 1019, 54, NULL, NULL, NULL, 0, '2022-05-24'),
(15, 16, 1021, 57, NULL, NULL, NULL, 0, '2022-06-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `note_patient_disease_progress`
--

CREATE TABLE `note_patient_disease_progress` (
  `id` int(100) NOT NULL,
  `id_patient` int(10) DEFAULT NULL,
  `valuetext` text DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `note_patient_disease_progress`
--

INSERT INTO `note_patient_disease_progress` (`id`, `id_patient`, `valuetext`, `created_date`) VALUES
(1, 1011, 'Angga', '2022-06-03'),
(2, 1011, 'Sayang%20aku%20kok', '2022-06-03'),
(3, 1011, 'ASDSAAS', '2022-06-03'),
(5, 1019, 'Sekarang dah Sehat', '2022-06-03'),
(6, 1010, 'Okay', '2022-06-03'),
(7, 1010, 'Okay', '2022-06-03'),
(8, 1010, 'Okay Sekali', '2022-06-03'),
(9, 1011, 'Siip Mantap', '2022-06-03'),
(10, 1019, 'Baik', '2022-06-03'),
(11, 1019, 'Bagus', '2022-06-03'),
(12, 1011, 'oke deh', '2022-06-03'),
(13, 1011, 'bagus', '2022-06-03'),
(14, 1019, 'Saya Suka', '2022-06-03'),
(15, 1011, 'Indah di lihat', '2022-06-03'),
(16, 1011, 'Sekarang dah Sehat', '2022-06-03'),
(17, 1019, 'Diam Anda', '2022-06-03'),
(18, 1011, 'Bisa Selonjoran Sekarang mah !', '2022-06-03'),
(19, 1010, 'Baik Sekali anda !', '2022-06-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `note_patient_group`
--

CREATE TABLE `note_patient_group` (
  `id` int(100) NOT NULL,
  `id_patient` int(10) DEFAULT NULL,
  `valuetextgroup` text DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1020, 'P220520061547', 'Ismail Dwi Nugroho', 1, '2000-01-10', 'A', 'Di Depkes', '0215522114', 'ismael22@gmail.com', '2022-05-20'),
(1021, 'P220606051111', 'Ajeng Anggriani', 2, '2000-02-06', 'AB', 'Tangerang Kota', '0210021021', 'ajeng@go.com', '2022-06-06');

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
-- Indeks untuk tabel `note_patient_disease_progress`
--
ALTER TABLE `note_patient_disease_progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Indeks untuk tabel `note_patient_group`
--
ALTER TABLE `note_patient_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_patient` (`id_patient`);

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=585;

--
-- AUTO_INCREMENT untuk tabel `drug_stock`
--
ALTER TABLE `drug_stock`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `item_checking_sheet_patient`
--
ALTER TABLE `item_checking_sheet_patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `item_recipe_drug_patient`
--
ALTER TABLE `item_recipe_drug_patient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `master_checking_sheet_patient`
--
ALTER TABLE `master_checking_sheet_patient`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `master_recipe_drug_patient`
--
ALTER TABLE `master_recipe_drug_patient`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `note_patient_disease_progress`
--
ALTER TABLE `note_patient_disease_progress`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `note_patient_group`
--
ALTER TABLE `note_patient_group`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;

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

--
-- Ketidakleluasaan untuk tabel `note_patient_disease_progress`
--
ALTER TABLE `note_patient_disease_progress`
  ADD CONSTRAINT `note_patient_disease_progress_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `note_patient_group`
--
ALTER TABLE `note_patient_group`
  ADD CONSTRAINT `note_patient_group_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
