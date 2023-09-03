-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 02:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resepsionis`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `NIP` int(11) NOT NULL,
  `atas_nama` varchar(500) NOT NULL,
  `pihak_instansi` varchar(500) NOT NULL,
  `alamat_instansi` varchar(500) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`NIP`, `atas_nama`, `pihak_instansi`, `alamat_instansi`, `tgl`) VALUES
(1111, 'Bpk.Richard', 'PT.SINDA BAYAA', 'Jln.MANGKUBOWONO 90', '2023-08-01'),
(1122, 'Ibu.Suri Mayah', 'PT.MARGASUMBA', 'Jln.Kalbar 88', '2023-08-10'),
(1233, 'Bpk.Sindo', 'PT.DUNIABAJA', 'Jln.Industri Sandang', '2023-08-30'),
(2222, 'Bpk.Daniel', 'CV.INTO DARMA', 'Jln.SULBARKAM 89', '2014-12-30'),
(3333, 'Bpk.Manuel', 'CV.INTRA MEDIKA', 'Jln.SUBARASA 55', '2023-08-02'),
(4444, 'Ibu.Kristiani', 'PT.SINAR MAYA', 'Jln.TAMBUAYAN 77', '2023-08-16'),
(5555, 'Bpk.Romi Sutiyono', 'CV.INSAN MEDIA', 'Jln.SumbarKabuwa 62', '2023-08-03'),
(6666, 'Bpk.Tristani Yanto', 'CV.SUMBER REZEKI', 'Jln.Majijigamasang 99', '2023-08-16'),
(7777, 'Ibu.Sari Marinah', 'PT.MARWAH DANIAH', 'Jln.Ranisagap 69', '2023-08-17'),
(8888, 'Bpk.Roni Toniga', 'PT.KUBARA', 'Jln.Merdeka 01', '2023-08-30'),
(989898, 'Bpk.Sutejo', 'PT.Pesona Bangsa', 'Jln.Patimura 99', '2023-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `no_kunjungan` int(11) NOT NULL,
  `atas_nama` varchar(500) NOT NULL,
  `jekel` varchar(500) NOT NULL,
  `pihak_instansi` varchar(500) NOT NULL,
  `alamat_instansi` varchar(500) NOT NULL,
  `tgl` date NOT NULL,
  `jaminan_identitas` varchar(500) NOT NULL,
  `jenis_kepentingan` varchar(500) NOT NULL,
  `tujuan_kedatangan` varchar(500) NOT NULL,
  `notes_kedatangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`no_kunjungan`, `atas_nama`, `jekel`, `pihak_instansi`, `alamat_instansi`, `tgl`, `jaminan_identitas`, `jenis_kepentingan`, `tujuan_kedatangan`, `notes_kedatangan`) VALUES
(2222, 'Ibu.Mambareta', 'P', 'PT.MARKASIMBAR', 'Jln.Karimunjawa 99', '2023-08-10', 'KTP', 'urgent', 'Melakukan Konseling Perusahaan antar pihak bersangkutan', 'Harap segera lakukan pertemuan dengan saya dan mulai pembahasan mengenai perusahaan saya dengan perusahaan anda'),
(3333, 'Bpk.Muntahar', 'L', 'CV.SINAR JAYA', 'Jln.Merdeka Jaya 90', '2023-08-02', 'KTP', 'urgent', 'Memberikan File yang telah dijanjikan dengan pihak kaptek perusahaan agar segera memproses berkas tersebut', 'Harap segera ditindak lanjuti file tersebut dan harap konfirmasi via email'),
(4444, 'Bpk.Sijajargaya', 'L', 'PT.MARGARET', 'jln.simbawa sirwa 67', '2023-08-09', 'KTP', 'urgent', 'Penyerahan Dokumen', 'Harap segera tindaklanjuti hasil diskusi antar pihak perusahaan dan konfirmasikan kepada pihak perusahaan kami via email'),
(5555, 'Ibu.Yati Ruhiyah', 'P', 'PT.AQUA MURNI', 'Jln.Sisinga Maharaja', '2023-08-02', 'SIM', 'urgent', 'Memberikan File Konsultasi', 'Cek email dari pihak perusahaan kami dan segera proses '),
(6666, 'Bpk.Jagat Sutejo', 'L', 'PT.SAWARASA', 'Jln.Cakung 88', '2023-08-24', 'KTP', 'tidak urgent', 'Mengajukan Sponsorship untuk perusahaan', 'Tolong usahakan diadakan pertemua dilain waktu agar terjalin kerja sama antar kami'),
(7777, 'Ibu.Sari Suwarsih', 'P', 'PT.SARI RASA', 'Memberikan file kerja sama', '2023-08-31', 'SIM', 'urgent', 'Penandatanganan surat kerja sama antar perusahaan', 'Temui kami di jln.sisinga maharaja pada siang ini 12.00'),
(8888, 'Bpk.Daniel', 'L', 'CV.SINDANESE', 'Jln.Mekar Sari', '2023-08-10', 'SIM', 'urgent', 'Melakukan Rapat', 'Melakukan Rapat Untuk Kerja Sama Perusahaan'),
(9999, 'Ibu.Rani Suliswitawi', 'P', 'CV.Kecantikan Alami', 'Jln.Industri 99', '2023-08-30', 'KTP', 'tidak urgent', 'Melakukan Konseling Bimbingan', 'Melakukan konseling yang telah dilakukan selama 2 bulan'),
(90909, 'Quos ut laboris occa', 'L', 'Beatae amet odit op', 'Officiis debitis vol', '2017-10-06', 'SIM', 'urgent', 'Est cillum minima in', 'Repudiandae quidem c'),
(676767, 'Nisi adipisci reicie', 'L', 'Molestiae qui occaec', 'Adipisicing enim qui', '2004-01-09', 'KTP', 'tidak urgent', 'Magni sint tenetur a', 'Obcaecati dolores de'),
(787878, 'Officia earum fugiat', 'P', 'Nesciunt eiusmod et', 'Elit cumque sequi m', '1987-09-06', 'KTP', 'urgent', 'Expedita quaerat ali', 'Quia qui sit id ut'),
(919191, 'Ranto', 'L', 'PT.Pesona Bangsa', 'Jln.MANGKUBOWONO 90', '1987-09-25', 'SIM', 'urgent', 'Penyerahan Dokumen', 'Temui di alamat yang sudah dijanjikan');

-- --------------------------------------------------------

--
-- Table structure for table `tlp`
--

CREATE TABLE `tlp` (
  `id_tlp` int(11) NOT NULL,
  `atas_nama` varchar(500) NOT NULL,
  `jekel` varchar(500) NOT NULL,
  `pihak_instansi` varchar(500) NOT NULL,
  `alamat_instansi` varchar(500) NOT NULL,
  `tgl` date NOT NULL,
  `no_tlp` varchar(500) NOT NULL,
  `jenis_kepentingan` varchar(500) NOT NULL,
  `penujuan_tlp` varchar(500) NOT NULL,
  `notes_tlp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tlp`
--

INSERT INTO `tlp` (`id_tlp`, `atas_nama`, `jekel`, `pihak_instansi`, `alamat_instansi`, `tgl`, `no_tlp`, `jenis_kepentingan`, `penujuan_tlp`, `notes_tlp`) VALUES
(1010, 'Bpk.Sutejo', 'L', 'PT.JAYA ABADI', 'Jln.Baranguak 79', '2023-08-16', '897867564534', 'tidak urgent', 'Bpk.Indra', 'Harap Dilakukan diruang tertutup.'),
(2222, 'Ibu.Mambareta', 'P', 'PT.MARKASIMBAR', 'Jln.Karimunjawa 99', '2023-08-10', '897867564534', 'tidak urgent', 'Bpk.Andre', 'Harap segera lakukan pertemuan dengan saya dan mulai pembahasan mengenai perusahaan saya dengan perusahaan anda'),
(3333, 'Bpk.Muntahar', 'L', 'CV.SINAR JAYA', 'Jln.Merdeka Jaya 90', '2023-08-02', '897867564534', 'urgent', 'Ibu.Sinta', 'Harap segera ditindak lanjuti file tersebut dan harap konfirmasi via email'),
(4444, 'Bpk.Sijajargaya', 'L', 'PT.MARGARET', 'jln.simbawa sirwa 67', '2023-08-09', '897867564534', 'urgent', 'Bpk.Daniel', 'Harap segera tindaklanjuti hasil diskusi antar pihak perusahaan dan konfirmasikan kepada pihak perusahaan kami via email'),
(5555, 'Ibu.Yati Ruhiyah', 'P', 'PT.AQUA MURNI', 'Jln.Sisinga Maharaja', '2023-08-02', '897867564534', 'urgent', 'Bpk.Daru', 'Cek email dari pihak perusahaan kami dan segera proses '),
(6666, 'Bpk.Jagat Sutejo', 'L', 'PT.SAWARASA', 'Jln.Cakung 88', '2023-08-24', '897867564534', 'tidak urgent', 'Ibu.Santi', 'Tolong usahakan diadakan pertemua dilain waktu agar terjalin kerja sama antar kami'),
(7777, 'Ibu.Sari Suwarsih', 'P', 'PT.SARI RASA', 'Memberikan file kerja sama', '2023-08-31', '897867564534', 'urgent', 'Bpk.Panca', 'Temui kami di jln.sisinga maharaja pada siang ini 12.00'),
(8888, 'Bpk.Daniel', 'L', 'CV.SINDANESE', 'Jln.Mekar Sari', '2023-08-10', '897867564534', 'urgent', 'Ibu.Direktur', 'Melakukan rapat internal untuk kerja sama perusahaan'),
(9999, 'Ibu.Rani Suliswitawi', 'P', 'CV.Kecantikan Alami', 'Jln.Industri 99', '2023-08-30', '897867564534', 'tidak urgent', 'Bpk.Siregar', 'Melakukan konseling yang telah dilakukan selama 2 bulan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `verifikasi_code` varchar(255) NOT NULL,
  `is_verif` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `verifikasi_code`, `is_verif`) VALUES
(1, 'admin', '', 'admin', '', 1),
(23, 'resepsionis', 'jokoapriliyanto144@gmail.com', 'resepsionis', 'da885a886c17529baec43e9d47058c51', 1),
(24, 'karyawan', 'karyawan234@gmail.com', 'karyawan', '', 1),
(26, 'ts', 'jokoapriliyanto578@gmail.com', 'Pa$$w0rd!', 'ae672e56fd5dfc3b6631ffd87bfefbe5', 1),
(28, 'ratu', 'namaratu111@gmail.com', 'Pa$$w0rd!', 'f70333f0c59c0094b163f9905a156fae', 0),
(29, 'test', 'jokoapriliyanto144@gmail.com', 'Pa$$w0rd!', 'c453e3f149884d7b393c209e55234dcf', 0),
(30, 'joko', 'jokoapriliyanto144@gmail.com', 'Pa$$w0rd!', '10e683437720ac172d18a0d8012ff3ac', 0),
(31, 'jiki', 'jokoapriliyanto578@gmail.com', 'Pa$$w0rd!', 'dcd06a2b5afce1aeb2b4b93346df0957', 0),
(32, 'xixi', 'jokoapriliyanto578@gmail.com', 'Pa$$w0rd!', '6f70c924d1cd3a584b38d3cf91e43962', 1),
(33, 'pozigy', 'retoxybep@mailinator.com', 'Pa$$w0rd!', '0996ab625929d2650dc262141ec24519', 0),
(34, 'maul', 'ulmwaul@gmail.com', 'Pa$$w0rd!', '575f74248c0621d856d37f89ad455cfe', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`no_kunjungan`);

--
-- Indexes for table `tlp`
--
ALTER TABLE `tlp`
  ADD PRIMARY KEY (`id_tlp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `NIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=989899;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `no_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919192;

--
-- AUTO_INCREMENT for table `tlp`
--
ALTER TABLE `tlp`
  MODIFY `id_tlp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898990;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
