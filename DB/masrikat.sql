-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 04:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masrikat`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `agenda` text NOT NULL,
  `jam` text NOT NULL,
  `lokasi` text NOT NULL,
  `petugas_liputan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tanggal`, `agenda`, `jam`, `lokasi`, `petugas_liputan`) VALUES
(1, 'Rabu, 05 Mei 2021', 'Pemilihan Koordinasi Pengawas Sekolah Periode 2020-2023', '14 : 12 WIB', 'Komplek Rumah Dinas Gubernur Riau Jl. Diponegoro', 'Masrikat Alim, S. Kom'),
(2, 'Selasa, 07 Mei 2021', 'Festival Pantai Selat Baru', '13 : 12 WIB', 'Komplek Rumah Dinas Gubernur Riau Jl. Diponegoro', 'Masrikat Alim, S. Kom'),
(3, 'Kamis, 07 Mei 2021', 'Talkshow Kesehatan Dengan Tema Diabetes Melitus dan Stroke Sebagai Penyebab Kecacatan', '15 : 12 WIB', 'Komplek Rumah Dinas Gubernur Riau Jl. Diponegoro', 'Masrikat Alim, S. Kom');

-- --------------------------------------------------------

--
-- Table structure for table `bdolahraga`
--

CREATE TABLE `bdolahraga` (
  `id_bdolahraga` int(1) NOT NULL,
  `judul` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bdolahraga`
--

INSERT INTO `bdolahraga` (`id_bdolahraga`, `judul`, `uraian`) VALUES
(1, 'Bidang Pembinaan Olahlaga', '<p>Mempunyai tugas melaksanakan penyusunan bahan perumusan dan pelaksanaan kebijakan di bidang pembinaan pendidikan anak usia dini dan pendidikan. Dalam melaksanakan tugas sebagaimana dimaksud,&nbsp; kepala bidang menyelenggarakan fungsi:</p>\r\n\r\n<ol>\r\n	<li>Penyusunan bahan perumusan dan koordinasi pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pembinaan pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Penyusunan bahan penetapan kurikulum muatan lokal pendidikan nonformal.</li>\r\n	<li>Penyusunan bahan penerbitan izin pendirian, penataan, dan penutupan satuan pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Penyusunan bahan pembinaan kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pelaksanaan pemantauan dan evaluasi di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pelaporan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh kepala dinas baik secara tertulis maupun lisan sesuai dengan bidang tugasnya</li>\r\n</ol>\r\n\r\n<p>Dalam melaksanakan tugas dan fungsinya Bidang Pembinaan PAUD dan PNF dibantu oleh:</p>\r\n\r\n<ol>\r\n	<li>Seksi Kurikulum dan Penilaian;</li>\r\n	<li>Seksi Kelembagaan Sarana dan Prasarana; dan</li>\r\n	<li>Seksi Peserta Didik dan Pembanguanan Karakter.</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bdpaud`
--

CREATE TABLE `bdpaud` (
  `id_bdpaud` int(2) NOT NULL,
  `judul` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdpaud`
--

INSERT INTO `bdpaud` (`id_bdpaud`, `judul`, `uraian`) VALUES
(1, 'Bidang Pembinaan Pendidikan Anak Usia Dini dan Pendidikan Nonformal', '<p>Mempunyai tugas melaksanakan penyusunan bahan perumusan dan pelaksanaan kebijakan di bidang pembinaan pendidikan anak usia dini dan pendidikan. Dalam melaksanakan tugas sebagaimana dimaksud,&nbsp; kepala bidang menyelenggarakan fungsi:</p>\r\n\r\n<ol>\r\n	<li>Penyusunan bahan perumusan dan koordinasi pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pembinaan pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Penyusunan bahan penetapan kurikulum muatan lokal pendidikan nonformal.</li>\r\n	<li>Penyusunan bahan penerbitan izin pendirian, penataan, dan penutupan satuan pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Penyusunan bahan pembinaan kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pelaksanaan pemantauan dan evaluasi di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pelaporan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan anak usia dini dan pendidikan nonformal.</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh kepala dinas baik secara tertulis maupun lisan sesuai dengan bidang tugasnya</li>\r\n</ol>\r\n\r\n<p>Dalam melaksanakan tugas dan fungsinya Bidang Pembinaan PAUD dan PNF dibantu oleh:</p>\r\n\r\n<ol>\r\n	<li>Seksi Kurikulum dan Penilaian;</li>\r\n	<li>Seksi Kelembagaan Sarana dan Prasarana; dan</li>\r\n	<li>Seksi Peserta Didik dan Pembanguanan Karakter.</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bdsd`
--

CREATE TABLE `bdsd` (
  `id_bdsd` int(1) NOT NULL,
  `judul` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdsd`
--

INSERT INTO `bdsd` (`id_bdsd`, `judul`, `uraian`) VALUES
(1, 'Bidang Pembinaan Sekolah Dasar', '<p>Mempunyai tug<strong>a</strong>s menyelenggarakan perumusan dan pelaksanaan kebijakan di bidang pembinaan sekolah dasar sesuai dengan ketentuan peraturan perundang-undangan. Dalam melaksanakan tugas sebagaimana dimaksud,&nbsp; kepala bidang menyelenggarakan fungsi:</p>\r\n\r\n<ol>\r\n	<li>Penyusunan bahan perumusan dan koordinasi pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah dasar.</li>\r\n	<li>Pembinaan pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah dasar.</li>\r\n	<li>Penyusunan bahan penetapan kurikulum muatan lokal sekolah dasar.</li>\r\n	<li>Penyusunan bahan penerbitan izin pendirian, penataan, dan penutupan sekolah dasar.</li>\r\n	<li>Penyusunan bahan pembinaan kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah dasar.</li>\r\n	<li>Penyusunan bahan pembinaan bahasa dan sastra daerah yang penuturnya dalam daerah kabupaten.</li>\r\n	<li>Pelaksanaan pemantauan dan evaluasi di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah dasar.</li>\r\n	<li>Pelaporan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah dasar.</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh kepala dinas baik secara tertulis maupun lisan sesuai dengan bidang tugasnya dalam rangka kelancaran pelaksanaan tugas.</li>\r\n</ol>\r\n\r\n<p>Dalam melaksanakan tugas dan fungsinya bidang pembinaan SD dibantu;</p>\r\n\r\n<ol>\r\n	<li>Seksi Kurikulum dan Penilaian;</li>\r\n	<li>Seksi Kelembagaan Sarana dan Prasarana; dan</li>\r\n	<li>Seksi Peserta Didik dan Pembanguanan Karakter;</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bdsekretaris`
--

CREATE TABLE `bdsekretaris` (
  `id_bdsekretaris` int(2) NOT NULL,
  `judul` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdsekretaris`
--

INSERT INTO `bdsekretaris` (`id_bdsekretaris`, `judul`, `uraian`) VALUES
(1, 'Bidang Sekretariat', '<p>Mempunyai tugas memimpin, mengkoordinasikan dan mengendalikan tuhas-tugas di bidang pengelolaan, pelayanan kesekretariatan yang meliputi pengkordinasian perencanaan, penyusunan program dan anggaran, pengelolaan keuangan , perlengkapan, umum dan kepegawaian. Dalam melaksanakan tugas sebagaimana dimaksud,&nbsp; sekretaris menyelenggarakan fungsi:</p>\r\n\r\n<ol>\r\n	<li>Penyusunan rencana, program, evaluasi, dan pelaporan.</li>\r\n	<li>Pelaksanaan administrasi kepegawaian dan rumah tangga dinas pendidikan.</li>\r\n	<li>Pelaksanaan administrasi keuangan dan perlengkapan serta penataan aaset.</li>\r\n	<li>Palaksanaan urusan surat menyurat, kearsipan dan dokumentasi dan hubungan masyarakat.</li>\r\n	<li>Pelaksanaan urusan hukum, organisasi dan hubungan masyarakat.</li>\r\n	<li>Pelaksanaan pengkoordinasian penyelenggaraan tugas-tugas bidan, dan</li>\r\n	<li>Pelaksanaan tugas-tugas lain yang diberikan oleh kepala dinas baik secara tertulis maupun lisan sesuai dengan bidang tugasnya.</li>\r\n</ol>\r\n\r\n<p>Sekretaris, dalam melaksanakan tugas dan fungsinya dibantu oleh;</p>\r\n\r\n<ol>\r\n	<li>Sub Bagian Penyusunan Program;</li>\r\n	<li>Sub Bagian Umum dan Kepegawaian; dan</li>\r\n	<li>Sub Bagian Keuangan dan Perlengkapan</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bdsmp`
--

CREATE TABLE `bdsmp` (
  `id_bdsmp` int(1) NOT NULL,
  `judul` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdsmp`
--

INSERT INTO `bdsmp` (`id_bdsmp`, `judul`, `uraian`) VALUES
(1, 'Bidang Pembinaan Sekolah Menengah Pertama', '<p>Mempunyai tugas melaksanakan penyusunan bahan perumusan dan pelaksanaan kebijakan di bidang pendidikan Sekolah Menengah Pertama sesuai dengan ketentuan peraturan perundang-undangan. Dalam melaksanakan tugas sebagaimana dimaksud,&nbsp; kepala bidang menyelenggarakan fungsi sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Penyusunan bahan perumusan dan koordinasi pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah menengah pertama.</li>\r\n	<li>Pembinaan pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah menengah pertama.</li>\r\n	<li>Penyusunan bahan penetapan kurikulum muatan lokal sekolah menengah pertama.</li>\r\n	<li>Penyusunan bahan penerbitan izin pendirian, penataan, dan penutupan sekolah menengah pertama.</li>\r\n	<li>Penyusunan bahan pembinaan kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah menengah pertama.</li>\r\n	<li>Pelaksanaan pemantauan dan evaluasi di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah menengah pertama.</li>\r\n	<li>Pelaporan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter sekolah menengah pertama.</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh kepala dinas baik secara tertulis maupun lisan sesuai dengan bidang tugasnya dalam rangka kelancaran pelaksanaan tugas.</li>\r\n</ol>\r\n\r\n<p>Dalam menjalankan tugas dan fungsinya Bidang Pembinaan SMP dibantu:</p>\r\n\r\n<ol>\r\n	<li>Seksi Kurikulum dan Penilaian;</li>\r\n	<li>Seksi Kelembagaan Sarana dan Prasarana; dan</li>\r\n	<li>Seksi Peserta Didik dan Pembanguanan Karakter</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(40) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `uraian` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` text NOT NULL,
  `jam` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `deskripsi`, `uraian`, `kategori`, `tanggal`, `jam`, `file`) VALUES
(4, 'Kegiatan Beasiswa1', 'Info Beasiswa', '&lt;p&gt;dfjskldhfksldhfksldhfl&lt;/p&gt;', 'Info Beasiswa', 'Selasa, 04 Mei 2021', '', 'uploads/berita/hemodialisa.jpg'),
(5, 'Kegiatan nasional', 'Puji Sukur', '<p>3</p>\r\n', 'Info Beasiswa', '', '', 'uploads/berita/hemodialisa1.jpg'),
(7, 'Kegiatan Sosial', 'cxcx', '&lt;p&gt;Didkik fskl fsjdaklfs fdjaskdf sallakjfasdf&lt;/p&gt;\r\n', 'Kegiatan Disdikpora', '', '', 'uploads/berita/hemodialisa5.jpg'),
(8, 'Kegiatan Sosial', 'Spesialis Penyakit', '<p><strong>sddada</strong></p>\r\n', 'Kegiatan Disdikpora', '', '', 'uploads/berita/hemodialisa4.jpg'),
(11, 'Kata Sambutan Kepala Dinas Pendidikan dan Olahraga Kabupaten Tambraw - Papua', 'Dalam perjalanannya, tentu kekurangan selalu ada dalam penyampaian informasi yang menyebabkan ketidakpuasan keinginan semua pihak, namun kami berusaha akan secara terus-menerus membenahi dan meningkatkan kualitas informasi yang akan dipublikasikan. ', '<p>efefef</p>\r\n', 'Info Nasional', 'Selasa, 05 Mei 2021', '13 : 12 WIB', 'uploads/berita/live1.png'),
(14, 'Kunjungan Kerja Anggota Komisi III DPRD Ke RSUD. HAPRAN INSAN SENDAWAR  tahun 2019.', 'Sebagai upaya mencegah penyebaran virus covid-19', '<p>Sebagai upaya mencegah penyebaran virus covid-19 atau Corona, pihak Rumah Sakit Umum Daerah Harapan Insan Sendawar (RSUD HIS) akan memperketat kunjungan pasien. Mulai Selasa (17/3/2020), RSUD HIS Kubar tidak lagi memberlakukan jam besuk bagi pasien.</p>\r\n\r\n<p>Aturan tersebut dituangkan dalam Surat Edaran yang dikeluarkan pihak RSUD Harapan Insan Sendawar pada Senin (16/3/2020).<br />\r\nSurat bernomor 445-005 /337/ TU-III/ 2020 itu menegaskan lima poin.<br />\r\nPertama, mulai Selasa (17/3/2020) tidak memberlakukan waktu kunjungan atau jam besuk pasien.</p>\r\n\r\n<p>Kedua, penunggu atau&nbsp;penjaga&nbsp;pasien&nbsp;maksimal&nbsp;dua orang, yang akan diberikan waktu tunggu.&nbsp;</p>\r\n\r\n<p>Ketiga, penunggu atau penjaga pasien akan menjalani pemeriksaan suhu sebelum masuk ke ruangan pasien.</p>\r\n\r\n<p>Keempat, semua penunggu (penjaga) pasien diwajibkan cuci tangan sebelum dan sesudah masuk ruangan dengan menggunakan hand sanitizer (antiseptic gel ) yang terdapat di RSUD HIS Kubar.</p>\r\n\r\n<p>Kelima, semua penunggu (penjaga) pasien wajib mematuhi etika batuk sesuai petunjuk yang diberlakukan.</p>\r\n\r\n<p>&quot;Untuk penunggu (penjaga)&nbsp;pasien&nbsp;dibatasi maksimal 2 orang dan akan diberikan kartu tunggu,&quot; kata dr Eri Sarudin, Koordinator Humas&nbsp;RSUD. Harapan Insan Sendawar.</p>\r\n\r\n<p>&quot;Pasien tidak diperkenankan dijenguk, kecuali kondisi khusus (kritis),&quot; kata dr Eri.</p>\r\n\r\n<p>Kebijakan ini&nbsp;sebagai upaya pencegahan penyebaran&nbsp;Virus&nbsp;Corona&nbsp;di&nbsp;Kubar, utamanya di lingkup rumah sakit.&nbsp;</p>\r\n\r\n<p>&quot;Memang di&nbsp;Kubar&nbsp;belum ditemukan kasus&nbsp;Virus&nbsp;Corona, tapi langkah antisipatif tetap kita lakukan,&quot; imbuh dr Eri Sarudin.</p>\r\n\r\n<p><input alt=\"\" src=\"http://localhost/dispen/uploads/berita/live3.png\" style=\"float: left; width: 300px; height: 225px;\" type=\"image\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>by : Humas RSUD. Harapan Insan Sendawar</p>\r\n\r\n<p>#covid-19 #rsudhis #kutaibarat #coronavirus</p>\r\n', 'Kegiatan Disdikpora', 'Selasa, 05 Mei 2021', '13 : 12 WIB', 'uploads/berita/live3.png');

-- --------------------------------------------------------

--
-- Table structure for table `dataguru`
--

CREATE TABLE `dataguru` (
  `id_dataguru` int(255) NOT NULL,
  `nama` text NOT NULL,
  `jk` varchar(2) NOT NULL,
  `pns_honorer` text NOT NULL,
  `golongan` text NOT NULL,
  `tugas` text NOT NULL,
  `tempat_tugas` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `usia` int(100) NOT NULL,
  `mk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataguru`
--

INSERT INTO `dataguru` (`id_dataguru`, `nama`, `jk`, `pns_honorer`, `golongan`, `tugas`, `tempat_tugas`, `tempat_lahir`, `usia`, `mk`) VALUES
(1, 'JASMAFILIA', '', 'NON PNS/HONORER PROPESI', 'IV\\a', 'GURU KELAS', 'SDN 16 PANGKALAN BATANG', 'PANGKALAN BATANG', 37, 21),
(5, 'Didik Hananya Fiden', 'L', 'PNS', 'IV/c', 'GURU KELAS', 'SDN 16 PANGKALAN BATANG', 'PANGKALAN BATANG', 43, 15),
(6, 'Fiden Daniel', 'P', 'PNS', 'IV/c', 'GURU KELAS', 'SDN 16 PANGKALAN BATANG', 'PANGKALAN BATANG', 43, 15);

-- --------------------------------------------------------

--
-- Table structure for table `datasekolah`
--

CREATE TABLE `datasekolah` (
  `id_datasekolah` int(100) NOT NULL,
  `nama_sekolah` text NOT NULL,
  `jenjang` text NOT NULL,
  `kecamatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasekolah`
--

INSERT INTO `datasekolah` (`id_datasekolah`, `nama_sekolah`, `jenjang`, `kecamatan`) VALUES
(1, 'POLITEKNIK NEGERI TAMBRAUW', 'PT', 'TAMBRAUW');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(255) NOT NULL,
  `nama` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama`, `file`) VALUES
(3, 'DDD', 'uploads/galeri/hemodialisa.jpg'),
(9, 'weaeawea', 'uploads/galeri/hemodialisa1.jpg'),
(10, 'adasdsadsd', 'uploads/galeri/hemodialisa2.jpg'),
(11, 'dawdadad', 'uploads/galeri/live1.png'),
(12, 'tyutyjgyj', 'uploads/galeri/live2.png');

-- --------------------------------------------------------

--
-- Table structure for table `jejakpendapat`
--

CREATE TABLE `jejakpendapat` (
  `id_jejakpendapat` int(10) NOT NULL,
  `type_jejakpendapat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jejakpendapat`
--

INSERT INTO `jejakpendapat` (`id_jejakpendapat`, `type_jejakpendapat`) VALUES
(4, 'Infrastruktur'),
(5, 'Keduanya'),
(6, 'Infrastruktur'),
(7, 'Aparatur'),
(8, 'Keduanya'),
(9, 'Aparatur'),
(10, 'Keduanya'),
(11, 'Keduanya'),
(12, 'Keduanya'),
(13, 'Keduanya'),
(14, 'Keduanya'),
(15, 'Keduanya'),
(16, 'Keduanya'),
(17, 'Keduanya');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(12) NOT NULL,
  `nama` text NOT NULL,
  `phone` int(14) NOT NULL,
  `email` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `alamat` text NOT NULL,
  `date` date NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_jawab` date NOT NULL,
  `jawaban` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `phone`, `email`, `pekerjaan`, `alamat`, `date`, `komentar`, `tanggal_jawab`, `jawaban`, `status`) VALUES
(18, 'Didik Hananya Fiden', 2147483647, 'Kadis@gmail.com', 'Kadis', 'SEKOLAQ JOLEQ, KAB. KUTAI BARAT, KALIMANTAN TIMUR', '2021-05-14', 'Selamat Datang di Website Dinas Pendidikan Kabupaten Bengkalis\r\n \r\nDinas Pendidikan Kabupaten Bengkalis akan terus berupaya dalam menyediakan informasi-informasi penting dalam perkembangan dinamika pendidikan khususnya di Negeri Junjungan. Selain itu, peningkatan mutu pelayanan pendidikan menjadi fokus utama demi terwujudnya Kabupaten Bengkalis yang bermarwah, maju dan sejahtera.', '2021-05-15', 'Siap Bosku,  \r\n\r\nDalam perjalanannya, tentu kekurangan selalu ada dalam penyampaian informasi yang menyebabkan ketidakpuasan keinginan semua pihak, namun kami berusaha akan secara terus-menerus membenahi dan meningkatkan kualitas informasi yang akan dipublikasikan. \r\nOkelah', '<label class=\"label label-success\">Terjawab</label>'),
(19, 'Kadis', 2147483647, 'didikhananya@gmail.com', 'Kadis', 'SEKOLAQ JOLEQ, KAB. KUTAI BARAT, KALIMANTAN TIMUR', '2021-05-14', 'Dalam perjalanannya, tentu kekurangan selalu ada dalam penyampaian informasi yang menyebabkan ketidakpuasan keinginan semua pihak, namun kami berusaha akan secara terus-menerus membenahi dan meningkatkan kualitas informasi yang akan dipublikasikan.', '2021-05-15', 'Mantab, pas mantab', '<label class=\"label label-success\">Terjawab</label>'),
(20, 'Daniel Fiden', 2147483647, 'didikhananya@gmail.com', 'IT Teknisi', 'SEKOLAQ JOLEQ, KAB. KUTAI BARAT, KALIMANTAN TIMUR', '2021-05-15', 'Silahkan mengisi fasilitas komunikasi Kontak Kami. Mohon masukan dan pertanyaan disampaikan secara bijak dengan kata-kata yang baik.', '2021-05-15', 'Siap, Pas mantab', '<label class=\"label label-success\">Terjawab</label>'),
(21, 'Clarienesky Galenia Fiden', 2147483647, 'sky@gmail.com', 'Dokter', 'SEKOLAQ JOLEQ, KAB. KUTAI BARAT, KALIMANTAN TIMUR', '2021-05-15', 'Silahkan mengisi fasilitas komunikasi Kontak Kami. Mohon masukan dan pertanyaan disampaikan secara bijak dengan kata-kata yang baik.', '0000-00-00', '', '<label class=\"label label-warning\">Belum Terjawab</label>');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `ttl` varchar(70) NOT NULL,
  `bidang` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `level` varchar(45) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `first_name`, `last_name`, `ttl`, `bidang`, `password`, `username`, `level`, `alamat`, `no_hp`, `photo`, `email`) VALUES
(1, '9707070770707060', 'Admin', 'Good One', 'Latdalam, 01 Desember 1986', 'Perencanaan', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'Jln. Emaos, Kam. Emaos', '+62 852 54544743', 'alim.jpg', 'alimmasrikat1@gmail.com'),
(2, '2121', 'Roy', 'Yeblo', '', 'SD', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user', '', '', 'alim.jpg', 'roy@gmail.com'),
(4, '123456789', 'Cimin', 'Watumlawar', '', 'SMP', '827ccb0eea8a706c4c34a16891f84e7b', 'smp', 'user', '', '', 'ci.jpg', 'cimin@gmail.com'),
(5, '11212', 'Fiden', 'Didik', 'FIK', 'SI', '827ccb0eea8a706c4c34a16891f84e7b', 'kabid', 'kabid', 'emaos', '+62 852 4405 2454', 'alim.jpg', 'coba@gmail.com'),
(6, '11212', 'Fiden', 'Lewerisa', 'FIK', 'Kepala Dinas Pendidikan', '827ccb0eea8a706c4c34a16891f84e7b', 'kadis', 'kadis', 'emaos', '1111111111111111', 'kadis.jpg', 'coba@gmail.com'),
(7, '11212', 'Agung', 'Widodo', 'Sausapor, 12 Desember 2012', 'Kepala Dinas Pendidikan', '827ccb0eea8a706c4c34a16891f84e7b', 'sekre', 'sekre', 'emaos', '10101', 'sekre.jpg', 'coba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` text NOT NULL,
  `pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `tanggal`, `pengumuman`) VALUES
(1, 'Pengumuman Pelaksananaan PPDB TK, SD dan SMP Kabupaten Tambrauw', 'Senin, 03 Mei 2021', '<p>Pengumuman Pelaksananaan PPDB TK, SD dan SMP Kabupaten Tambrauw</p>'),
(2, 'Daftar Penerima Beasiswa Prestasi, Anak Tempatan dan Suku Adat Terpencil Tahun 2020', 'Rabu, 16 Desember 2020', '<p>Daftar Penerima Beasiswa Prestasi, Anak Tempatan dan Suku Adat Terpencil Tahun 2020</p>'),
(3, 'Pengumuman Penerima Beasiswa Prestasi, Anak Tempatan dan Suku Adat Terpencil', 'Selasa, 10 Desember 2019', '<p>Pengumuman Penerima Beasiswa Prestasi, Anak Tempatan dan Suku Adat Terpencil</p>'),
(4, 'Pengumuman Penerima Beasiswa  Tambraw  2019', 'Rabu, 20 November 201', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sambutan` int(2) NOT NULL,
  `nama` text NOT NULL,
  `sambutan` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`id_sambutan`, `nama`, `sambutan`, `file`) VALUES
(1, 'Selamat Datang di Website Dinas Pendidikan Kabupaten Tambrauw', 'Dinas Pendidikan Kabupaten Bengkalis akan terus berupaya dalam menyediakan informasi-informasi penting dalam perkembangan dinamika pendidikan khususnya di Negeri Junjungan. Selain itu, peningkatan mutu pelayanan pendidikan menjadi fokus utama demi terwujudnya Kabupaten Bengkalis yang bermarwah, maju dan sejahtera.  Dalam perjalanannya, tentu kekurangan selalu ada dalam penyampaian informasi yang menyebabkan ketidakpuasan keinginan semua pihak, namun kami berusaha akan secara terus-menerus membenahi dan meningkatkan kualitas informasi yang akan dipublikasikan. ', 'uploads/sambutan/kadis_edi_sakura.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sdm`
--

CREATE TABLE `sdm` (
  `id_sdm` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nip` int(11) NOT NULL,
  `kelahiran` text NOT NULL,
  `pangkat` text NOT NULL,
  `pendidikan` text NOT NULL,
  `jabatan` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm`
--

INSERT INTO `sdm` (`id_sdm`, `nama`, `nip`, `kelahiran`, `pangkat`, `pendidikan`, `jabatan`, `file`) VALUES
(7, 'Didik Hananya Fiden', 12313423, 'Sakaq Tada, 02 Mei 1991', 'Tukang Sapu', 'S1', 'Tukang Pel', 'uploads/profile/hemodialisa4.jpg'),
(8, 'dfdsfsd', 445454543, 'Sakaq Tada, 02 Mei 1991', 'Tukang Sapu', 'D3', 'Direktur IV', 'uploads/profile/hemodialisa1.jpg'),
(9, 'Didik  Ismawan', 2147483647, 'Sakaq Tada, 02 Mei 1991', 'IVa', 'S1', 'Kasi', 'uploads/profile/hemodialisa5.jpg'),
(10, 'dr. R. Bambang Setyo Basuki, Sp.PD', 2147483647, 'Sakaq Tada, 02 Mei 1991', 'III\\ b', 'S1', 'Kabag', 'uploads/profile/hemodialisa6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sekilas`
--

CREATE TABLE `sekilas` (
  `id_sekilas` int(2) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `uraian` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekilas`
--

INSERT INTO `sekilas` (`id_sekilas`, `judul`, `uraian`, `file`) VALUES
(1, 'Sekilas Tentang Dinas Pendidikan', 'Rumah Sakit Umum Daerah Harapan Insan Sendawar&amp;rdquo; adalah Rumah Sakit Umum Type C yang selanjutnya disingkat RSUD HIS, merupakan satu-satunya Rumah Sakit Pemerintah yang ada di Kabupaten Kutai Barat dan berdiri diatas lahan seluas 28,5 ha, serta peresmian operasionalnya oleh Gubernur Kalimantan Timur tanggal 14 Agustus tahun 2003. RSUD HIS, merupakan pusat rujukan dari 16 Puskesmas, 1 Puskesmas Terapung, 6 Balai Pengobatan serta sarana pelayanan kesehatan lain yang ada diwilayah Kutai Barat. Rumah Sakit Umum Daerah Harapan Insan Sendawar (RSUD HIS) merupakan Lembaga Teknis Daerah (LTD) Pemerintah Kabupaten dalam Bidang Kesehatan yang berada dan bertanggungjawab kepada Bupati, melalui Sekretaris Daerah Kabupaten Kutai Barat. Rumah Sakit Umum Daerah Harapan Insan Sendawar (RSUD HIS) Kabupaten Kutai Barat dibentuk berdasarkan Peraturan Daerah Kabupaten Kutai Barat Nomor Nomor 09 Tahun 2008 pada tanggal 21 Agustus 2008, tentang Pembentukan, Organisasi dan Tata Kerja RSUD Harapan Insan Sendawar Kabupaten Kutai Barat. Pada bulan April 2009 RSUD Harapan Insan Sendawar telah ditetapkan sebagai Rumah Sakit kelas C oleh Departemen Kesehatan RI melalui Surat Keputusan Menteri Kesehatan RI Nomor 240/MENKES/SK/IV/2009 tanggal 2 April 2009 tentang Peningkatan Kelas Rumah Sakit Umum Daerah Harapan Insan Sendawar Kabupaten Kutai Barat Propinsi Kalimantan Timur. Sebagai Rumah Sakit Umum Daerah yang ada di Kutai Barat maka peranan dan pentingnya Rumah Sakit ini sangat menjadi dambaan bagi masyarakat yang memerlukan pelayanan pengobatan.\r\n', 'uploads/profile/hemodialisa3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(2) NOT NULL,
  `judul` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `file`) VALUES
(3, 'slider1', 'uploads/slider/slide-1.jpg'),
(4, 'slider2', 'uploads/slider/slide-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(2) NOT NULL,
  `judul` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `judul`, `file`) VALUES
(1, 'Struktur Organisasi', 'uploads/struktur/struktural.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unduhan`
--

CREATE TABLE `unduhan` (
  `id_unduhan` int(10) NOT NULL,
  `nama` text NOT NULL,
  `kategori` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unduhan`
--

INSERT INTO `unduhan` (`id_unduhan`, `nama`, `kategori`, `file`) VALUES
(1, 'Didik Hananya Fiden', 'Peraturan Daerah', 'uploads/unduhan/corona_his2.pdf'),
(3, 'Surat Pemberitahuan Pelayanan Poli Jiwa', 'Keputusan Bupati', 'uploads/unduhan/Surat_Pemberitahuan_Pelayanan_Poli_Jiwa1.pdf'),
(4, 'DAFTAR PEMBERIAN VAKSINASI COVID-19 29-01-2021 kirim', 'Informasi Publik', 'uploads/unduhan/DAFTAR_PEMBERIAN_VAKSINASI_COVID-19_29-01-2021_kirim.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(21) NOT NULL,
  `judul_video` text NOT NULL,
  `frame1` varchar(225) NOT NULL,
  `video` varchar(255) NOT NULL,
  `frame2` varchar(221) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `frame1`, `video`, `frame2`) VALUES
(10, 'Mata Najwa 2', '<iframe width=\"353\" height=\"180\" src=\"https://www.youtube.com/embed/', 'D6VuyaMFsfw', '\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'Mata Najwa 2', '<iframe width=\"353\" height=\"180\" src=\"https://www.youtube.com/embed/', 'uBlSEUnqtoU', '\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(14, 'DAIHATSU ROCKY ternyata MURAH', '<iframe width=\"353\" height=\"180\" src=\"https://www.youtube.com/embed/', 'HldqbWPO5w0', '\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(2) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `visi`, `misi`, `file`) VALUES
(1, 'Terwujudnya dinas pendidikan yang handal maju dan berprestasi, dan berjaya', 'Memberikan beasiswa kepada anak yang kurang mampu dan berprestasi serta rajin berdoa', 'uploads/profile/DSCN8318.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `bdolahraga`
--
ALTER TABLE `bdolahraga`
  ADD PRIMARY KEY (`id_bdolahraga`);

--
-- Indexes for table `bdpaud`
--
ALTER TABLE `bdpaud`
  ADD PRIMARY KEY (`id_bdpaud`);

--
-- Indexes for table `bdsd`
--
ALTER TABLE `bdsd`
  ADD PRIMARY KEY (`id_bdsd`);

--
-- Indexes for table `bdsekretaris`
--
ALTER TABLE `bdsekretaris`
  ADD PRIMARY KEY (`id_bdsekretaris`);

--
-- Indexes for table `bdsmp`
--
ALTER TABLE `bdsmp`
  ADD PRIMARY KEY (`id_bdsmp`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`id_dataguru`);

--
-- Indexes for table `datasekolah`
--
ALTER TABLE `datasekolah`
  ADD PRIMARY KEY (`id_datasekolah`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `jejakpendapat`
--
ALTER TABLE `jejakpendapat`
  ADD PRIMARY KEY (`id_jejakpendapat`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`id_sdm`);

--
-- Indexes for table `sekilas`
--
ALTER TABLE `sekilas`
  ADD PRIMARY KEY (`id_sekilas`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `unduhan`
--
ALTER TABLE `unduhan`
  ADD PRIMARY KEY (`id_unduhan`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bdolahraga`
--
ALTER TABLE `bdolahraga`
  MODIFY `id_bdolahraga` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bdpaud`
--
ALTER TABLE `bdpaud`
  MODIFY `id_bdpaud` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bdsd`
--
ALTER TABLE `bdsd`
  MODIFY `id_bdsd` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bdsekretaris`
--
ALTER TABLE `bdsekretaris`
  MODIFY `id_bdsekretaris` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bdsmp`
--
ALTER TABLE `bdsmp`
  MODIFY `id_bdsmp` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `dataguru`
--
ALTER TABLE `dataguru`
  MODIFY `id_dataguru` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `datasekolah`
--
ALTER TABLE `datasekolah`
  MODIFY `id_datasekolah` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jejakpendapat`
--
ALTER TABLE `jejakpendapat`
  MODIFY `id_jejakpendapat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id_sambutan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdm`
--
ALTER TABLE `sdm`
  MODIFY `id_sdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sekilas`
--
ALTER TABLE `sekilas`
  MODIFY `id_sekilas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `unduhan`
--
ALTER TABLE `unduhan`
  MODIFY `id_unduhan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
