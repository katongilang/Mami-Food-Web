-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 01:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(50) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_menu` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `id_menu`) VALUES
(3, '', 4),
(4, '', 5),
(5, '', 6),
(8, '', 9),
(9, '5f621681cb076521dd219290273e7fd71.jpg', 10),
(11, '', 12),
(12, '', 13),
(13, 'miebangka.jpg', 14),
(14, 'siomay.jpg', 15),
(15, 'sopbuntut.jpg', 16),
(16, 'espisangijo.jpg', 17),
(17, 'escendol.jpg', 18),
(18, 'escendol1.jpg', 19),
(19, 'sopbuah.jpg', 20),
(20, 'ayam.png', 21);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `isi_komentar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi_menu` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga_menu` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `deskripsi_menu`, `kategori`, `harga_menu`) VALUES
(3, 'Seblak', 'makanan seblak itu enak', 'Makanan', 5000),
(4, 'Es Teh', 'sangat enak', 'Minuman', 2000),
(5, 'Cimol Goreng', 'enak sekali lohh', 'Makanan', 1000),
(8, 'Es Teler', 'minuman ini enak lohh....', 'Minuman', 5000),
(9, 'Bakso', 'maknyus', 'Minuman', 5000),
(11, 'Es Jeruk', 'sangat enak', 'Minuman', 9000),
(12, 'Jus Alpukat', 'sangat enak sekali', 'Minuman', 2000),
(13, 'Es Puding', 'sante aja makannya', 'Minuman', 8000),
(14, 'Mie Bangka', 'Makanan khas Indonesia yang satu ini adalah makanan yang sepertinya sudah banyak yang tahu jika Mie Bangka adalah jenis makanan yang di favoritkan di Indonesia. Pasalnya nama dari Mie Bangka yang meru', 'Makanan', 15000),
(15, 'Siomay Bandung', 'Makanan yang satu ini adalah makanan berjenis camilan yang enak berasal dari Indonesia. Makanan dengan nama beken Siomay ini saat ini sudah banyak di modifikasi, hal ini karena saking populernya makan', 'Makanan', 12000),
(16, 'Sop Buntut', 'Masakan khas Indonesia yang selanjutnya akan menjadi fokus kita di Halomuda.com adalah Sop Buntut.\r\n\r\nTernyata kabarnya dulu Sop Buntut ini sempat redup namanya dari para pencinta makanan Indonesia, a', 'Makanan', 18000),
(17, 'Es Pisang Hijau', 'Minuman es asal Makassar ini memang cukup populer. Es pisang ijo terbuat dari pisang raja yang dilapisi kulit berwarna hijau dari adonan tepung beras, tepung kanji, santan, dan air daun suji. Pisang i', 'Minuman', 9000),
(19, 'Es Cendol', 'Minuman es asal Makassar ini memang cukup populer. Es pisang ijo terbuat dari pisang raja yang dilapisi kulit berwarna hijau dari adonan tepung beras, tepung kanji, santan, dan air daun suji. Pisang i', 'Minuman', 5000),
(20, 'Sop Buah', 'Sop buah Sop buah adalah salah satu jenis makanan sehat yang digemari semua kalangan umur. Makanan yang berbahan dasar berbagai jenis buah-buahan ini, banyak dicari sebagai cemilan, menu berbuka puasa', 'Minuman', 12000),
(21, 'Ayam Bakar', 'Siapa tidak kenal kucing? Kucing adalah jenis hewan hewan Mamalia Karnivora dari keluarfa Felidae. Hampir di setiap Negara mengenal dan ada kucing. Hampir di seluruh dunia ada jenis kucing dari Sabang sampai Merauke, dari Indonesia sampai Rusia. Di Indonesia dikenal kucing jenis Anggora, kucing liar dan sebagainya. Kucing sudah dikenal sejak 6000 tahu yang lalu. Bahkan menurut data arkeolog, dulunya bangsa Mesir sudah mengenal kucing untuk menjauhkan dari tikus yang menggangu. Kucing menjadi hewan peliharaan paling popular di dunia. Kucing memiliki cirri fisik mirip dengan harimau, namun bentuknya kecil. Dan sama-sama pemakan daging. Kucing di dunia ini memiliki berbagai jenis, seperti Persia, sphinx, dan semisalnya.\r\n\r\nKelompok Felidae adalah mamalia yang berkembang dengan sangat cepat. Data menyebutkan perkembangan atau keberadaan kucing sudah ada sejak 10 sampai 15 juta tahun yang lalu.Sama halnya dengan kelinci, harimau, singa dan cougar, kucing memiliki telinga yang mampu menangkap getaran dan suara dari jarak 10 meter lebih.  Kucing pertama kali di klasifikasikan sebagai Felis Catus oleh Carousl Linnaeus. Kucing liar akan hidup secara liar. Dan akan berkembang biak dengan sangat cepat, sehingga populasinya akan berubah menjadi banyak dalam sekejap. Sampai saat ini jenis kucing yang diperjual belikan hanya kucing ras. Dan bahkan dikembang biakkan secara khusus.', 'Makanan', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
