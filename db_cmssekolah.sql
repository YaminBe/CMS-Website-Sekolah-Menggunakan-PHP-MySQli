-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2018 pada 08.01
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cmssekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(60) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_post` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `nama`, `email`, `subjek`, `pesan`, `tgl_post`, `status`) VALUES
(1, 'Fadila Nur\'ani', 'fadilla@gmail.com', 'Pertamnyaan', 'kenapa web ini bagus pak admin ??', '2018-07-26', 'terima'),
(2, 'Nur Padli', 'fadli@gmail.com', 'Belajar', 'Bagaimana Membuat web seperti ini ya pak ??', '2018-07-26', 'Tolak'),
(3, 'Yamin', 'yamin@gmail.com', 'Tes', 'Ingin Brtanya Saja', '2018-07-26', 'terima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_agenda` text NOT NULL,
  `tempat` varchar(60) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `judul`, `isi_agenda`, `tempat`, `tgl_agenda`, `id_user`) VALUES
(1, 'Camping', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Ngarai Sianok', '2018-07-31', 1),
(2, 'Makan Bersama', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Aula Sekolah', '2018-07-31', 1),
(4, 'Buka Bersama Kepsek', '<p>dsa</p>\r\n', 'RM Minang Raya', '2018-07-24', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE `tb_album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(60) NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_album`
--

INSERT INTO `tb_album` (`id_album`, `nama_album`, `cover`) VALUES
(1, 'Foto Bersama', '1 - Copy.jpg'),
(2, 'Kegitan Rutin', 't datar.jpg'),
(3, 'Bersama', 'Siswa-SMA-Negeri-Ploso.jpg'),
(4, 'Foto Alumni', 't datar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl_post` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kategori`, `judul`, `isi`, `tgl_post`, `foto`, `id_user`) VALUES
(1, 2, 'Olimpiade Matematika', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-07-24', 'BootStrap.png', 1),
(2, 2, 'fcsdf', 'sfsf', '2018-07-25', 'userk.png', 1),
(3, 2, 'dsfsf', 'fdsg', '2018-07-25', 'BootStrap.png', 1),
(6, 1, 'Main Musik Lagi yaa ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2018-07-25', 'userk.png', 1),
(7, 1, 'Menpora Beri Hadiah Kepada Lalu Muhammad Zohri', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n<img alt=\"\" src=\"/SC/cms/adminpanel/assets/kcfinder/upload/files/userk.png\" style=\"float:left; height:256px; margin:5px 7px; width:256px\" />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2018-07-26', 'windows-10-desktop-is-black-7-free-hd-wallpaper.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id_galery` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_post` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galery`
--

INSERT INTO `tb_galery` (`id_galery`, `id_album`, `foto`, `tgl_post`, `deskripsi`) VALUES
(1, 3, 't datar.jpg', '2018-08-12', 'Foto Ini Waktu kita Muda'),
(3, 3, 'lp.jpg', '2018-07-26', 'Ini juga deskripsi'),
(4, 3, '1 - Copy.jpg', '2018-07-26', 'Deskripsi aku ini'),
(5, 4, 'Siswa-SMA-Negeri-Ploso.jpg', '2018-07-27', 'Foto Ini di ambil pada tahun 2004 dan sekarang para alumni tersebar di seluruh tanah air ..');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat_berita`
--

CREATE TABLE `tb_kat_berita` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kat_berita`
--

INSERT INTO `tb_kat_berita` (`id_kategori`, `kategori`) VALUES
(1, 'Olahraga'),
(2, 'Pendidikan'),
(4, 'Filem Favorit'),
(5, 'Islami'),
(6, 'Keagamaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_peng` int(11) NOT NULL,
  `judul_peng` varchar(60) NOT NULL,
  `isi_peng` text NOT NULL,
  `tgl_post` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_peng`, `judul_peng`, `isi_peng`, `tgl_post`, `id_user`) VALUES
(1, 'Ujian Tengan Semester  ', '<p><img alt=\"\" src=\"/SC/cms/adminpanel/assets/kcfinder/upload/files/erdtubes.JPG\" style=\"float:left; height:64px; margin:5px 4px; width:122px\" />Ujian Tengan Semester Ujian Tengan Semester Ujian Tengan Semester Ujian Tengan Semester Ujian Tengan Semester</p>\r\n', '2018-07-27', 1),
(2, 'Ulangan Matematika Kelas X 1', '<p>Ujian Tengan Semester Ujian Tengan Semester Ujian Tengan Semester Ujian Tengan Semester</p>\r\n', '2018-07-25', 1),
(3, 'Program Tahunan', '<p>ini isi yaa</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-07-31', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `judul_profil` varchar(60) NOT NULL,
  `isi_profil` text NOT NULL,
  `tg_input` date NOT NULL,
  `posisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `judul_profil`, `isi_profil`, `tg_input`, `posisi`) VALUES
(1, 'Visi & Misi', '<p style=\"text-align:center\"><strong>Visi &amp; Misi</strong></p>\r\n\r\n<p>Adapun Visi Dan Misi <span style=\"font-size:11pt\"><span style=\"font-size:12.0pt\"><strong>SMAN 1 X Koto </strong>adalah sebagi berikut:</span></span></p>\r\n\r\n<p><strong><span style=\"font-size:11pt\"><span style=\"font-size:12.0pt\">1. Visi </span></span></strong></p>\r\n\r\n<blockquote>\r\n<p><strong>&quot;Beriman , Cerdas, Mandiri Dan Kompetitif&quot;</strong></p>\r\n</blockquote>\r\n\r\n<p><strong>2. Misi</strong></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:14px\">Melaksanakan shalat Zuhur berjamaah</span></li>\r\n	<li><span style=\"font-size:14px\">Mempertahankan kelulusan 100 %.</span></li>\r\n	<li><span style=\"font-size:14px\">Membentuk kelompok kelompok belajar mandiri peserta didik dengan sistem pengasuhan dan tutor sebaya</span></li>\r\n	<li><span style=\"font-size:14px\">Melatih peserta didik untuk berkemauan tinggi meningkatkan ilmu pengetahuannya</span></li>\r\n	<li><span style=\"font-size:14px\">Membangun dan menerapkan informasi dan pengetahuan secara logis, kritis, kreatif, dan inovatif.</span></li>\r\n	<li><span style=\"font-size:14px\">Menciptakan kemampuan berpikir logis, kritis, kreatif, dan inovatif dalam pengambilan keputusan.</span></li>\r\n	<li><span style=\"font-size:14px\">Melatih kemampuan mengembangkan budaya belajar untuk pemberdayaan diri.</span></li>\r\n	<li><span style=\"font-size:14px\">Menanamkan sikap kompetitif dan sportif untuk mendapatkan hasil yang terbaik.</span></li>\r\n	<li><span style=\"font-size:14px\">Memanfaatkan lingkungan secara produktif dan&nbsp; bertanggung jawab.</span></li>\r\n	<li><span style=\"font-size:14px\">Memfasilitasi&nbsp; peserta didik untuk mengembangkan kreatifitas melalui berbagai kegiatan intra kurikuler dan ekstra kurikuler secara terencana dan terprogram.</span></li>\r\n	<li><span style=\"font-size:14px\">Mengekspresi diri melalui kegiatan seni dan budaya.</span></li>\r\n	<li><span style=\"font-size:14px\">Menghargai karya seni dan budaya.</span></li>\r\n	<li><span style=\"font-size:14px\">Menghasilkan karya yang kreatif, baik individual maupun kelompok.</span></li>\r\n	<li><span style=\"font-size:14px\">Menjaga kesehatan dan keamanan diri, kebugaran jasmani, serta kebersihan lingkungan.</span></li>\r\n	<li><span style=\"font-size:14px\">Melakukakan&nbsp; pembinaan dan pengontrolan&nbsp; terhadap&nbsp; jadwal ibadah siswa sebagai bukti keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.</span></li>\r\n	<li><span style=\"font-size:14px\">Menciptakan&nbsp; keselarasan nilai keilmuan,keagamaan, etika ,moral dan berbudaya.</span></li>\r\n	<li><span style=\"font-size:14px\">Melatih murid&nbsp; berdisiplin,&nbsp; mandiri, berprestasi, kompetitif dan memiliki rasa nasionalisme yang tinggi melalui kegiatan lomba bidang studi dan kegiatan ekstra kurikuler.</span></li>\r\n	<li><span style=\"font-size:14px\">Meningkatkan kompetensi,kedisplinan, dan profesionalitas Pendidik dan Tenaga Kependidikan untuk menunjang mutu peserta didik melalui kegiatan kegiatan workshop, dan penelitian&nbsp;&nbsp; penelitian kecil.</span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-07-26', '1'),
(2, 'Sejarah Sekolah', '<p style=\"text-align:center\"><strong>PROFIL SEKOLAH</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>SMAN 1 X KOTO</strong></p>\r\n\r\n<table class=\"table table-responsive\" style=\"height:93px; width:582px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama Sekolah</td>\r\n			<td>:</td>\r\n			<td><span style=\"font-size:12.0pt\">SMA NEGERI 1 X K</span><span style=\"font-size:12.0pt\">oto</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Alamat</td>\r\n			<td>:</td>\r\n			<td>Jl. Raya Padang Panjang - Bukittinggi Km 7. Kecamatan X Koto Kab. Tanah Datar</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NSS</td>\r\n			<td>:</td>\r\n			<td><span style=\"font-size:12.0pt\">301080701017</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>A. Sejarah Berdirinya </strong></p>\r\n\r\n<p><strong>SMAN I X Koto </strong>beridiri pada tahun 1995 diatas tanah seluas 11687 M2 yang terletak di kaki gunung Merapi yang berjarak lebih kurang 500 M dari jalan raya padang panjang Bukittinggi, tepatnya di Jorong kayu tanduk kecamatan X Koto Kabupaten Tanah Datar.<br />\r\nNomor Akte pendirian&nbsp; SMAN I X Koto adalah 0315/0/1995 tanggal 26 Oktober 1995, daritahun 1995 sampai sekarang telah banyak yang memimpin.</p>\r\n\r\n<p><strong>B. Lingkungan Sekolah</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; <strong>a. Fisik </strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sekolah berada ditengah &ndash;tengah&nbsp; sawah dan ladang penduduk .Disebelah barat dan selatan berbatasan dengan sawah penduduk,disebelah utara berbatasan dengan pemukiman penduduk dan sebelah timur berbatasan dengan lurah dan jalan raya Padang Panjang-Bukit Tinggi 200 m dari jalan raya dan perumahan penduduk ,lingkungan yang asri dan tenang sehingga sangat strategis untuk kegiatan belajar mengajar.</p>\r\n\r\n<p><strong>b. Lingkungan Masyarakat</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; Secara umum lingkungan masyarakat cukup baik untuk pelaksanaan PBM karena tidakditemukan pusat-pusat nongkrong pemuda yang dapat menarik minat siswa untuk ikut berkumpul-kumpul ,hanya saja perhatian masyarakat terhadap pendidikan masih kurang,karena warung-warung disekeliling lngkungan sekolah masih menyediakan rokok&nbsp; dan membiarkan siswa berbelanja pada jam-jam belajar .</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-07-26', '1'),
(3, 'Keadaan Sekolah', '<div class=\"table-responsive\">\r\n<p><strong>Keadaan Sekolah</strong></p>\r\n\r\n<p><strong>a. Fisik</strong></p>\r\n\r\n<p>Bangunan sekolah berdiri diatas tanah seluas 2000 M2.<br />\r\nKeadaan bangunan mencukupi untuk pelaksanaan pembelajaran.Rombongan belajar 13 masing-masingnya terdiri dari 19 &ndash; 26 orang peserta didik.<br />\r\nSemenjak berdirinya SMAN 1 X Koto tahun 1995 sampai sekarang hanya baru memiliki sarana dan prasarana ,sbb:</p>\r\n\r\n<p><strong>1. BANGUNAN</strong></p>\r\n\r\n<table class=\"table table-bordered table-responsive\" style=\"height:558px; width:584px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\"><strong>NO</strong></th>\r\n			<th scope=\"col\"><strong>JENIS SARANA</strong></th>\r\n			<th scope=\"col\">&nbsp;</th>\r\n			<th scope=\"col\"><strong>JUMLAH</strong></th>\r\n			<th scope=\"col\">&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\"><strong>Yang Ada</strong></td>\r\n			<td style=\"text-align:center\"><strong>Yang Dibutuhkan</strong></td>\r\n			<td style=\"text-align:center\"><strong>Kekurangan</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>1</strong></td>\r\n			<td>Ruang Kelas</td>\r\n			<td>2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>2</strong></td>\r\n			<td>Labor IPA</td>\r\n			<td>2</td>\r\n			<td>6</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>3</strong></td>\r\n			<td>Labor Komputer</td>\r\n			<td>5</td>\r\n			<td>6</td>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>4</strong></td>\r\n			<td>Ruang Keterampilan</td>\r\n			<td>6</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>5</strong></td>\r\n			<td>Ruang Kepala Sekolah</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>6</strong></td>\r\n			<td>Ruang Tata Usaha</td>\r\n			<td>&nbsp;</td>\r\n			<td>7</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>7</strong></td>\r\n			<td>Ruang Guru</td>\r\n			<td>&nbsp;</td>\r\n			<td>9</td>\r\n			<td>9</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>8</strong></td>\r\n			<td>Ruang Perpustakaan</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>9</strong></td>\r\n			<td>Ruang BK</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>10</strong></td>\r\n			<td>Ruang OSIS</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>11</strong></td>\r\n			<td>UKS</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>12</strong></td>\r\n			<td>Ruanag Kopsis</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>13</strong></td>\r\n			<td>Mushalla</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>14</strong></td>\r\n			<td>Lapangan Volly</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>15</strong></td>\r\n			<td>Lapangan Basket</td>\r\n			<td>&nbsp;</td>\r\n			<td>6</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>16</strong></td>\r\n			<td>Lapangan Upacara</td>\r\n			<td>9</td>\r\n			<td>&nbsp;</td>\r\n			<td>9</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>17</strong></td>\r\n			<td>WC Kepsek</td>\r\n			<td>&nbsp;</td>\r\n			<td>9</td>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>18</strong></td>\r\n			<td>WC Guru</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>19</strong></td>\r\n			<td>WC Siswa</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>2. BUKU</strong></p>\r\n\r\n<table class=\"table table-responsive\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>NO</strong></td>\r\n			<td><strong>JENIS BUKU</strong></td>\r\n			<td><strong>JUMLAH EXP</strong></td>\r\n			<td><strong>JUMLAH JUDUL</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Buku Paket</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Buku Penunjang</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Buku Referensi</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>Buku Fiksi</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>Buku Non Fiksi</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>b. Non Fisik</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; <strong>Keadaan Siswa</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;<strong> Kelas X&nbsp;&nbsp;&nbsp; : 5 Rombel</strong></li>\r\n	<li><strong>&nbsp;&nbsp; Kelas XI&nbsp;&nbsp; : 6 Rombel</strong></li>\r\n	<li><strong>&nbsp;&nbsp; Kelas XII&nbsp; : 6 Rombel</strong></li>\r\n</ul>\r\n</div>\r\n', '2018-07-26', '1'),
(4, 'Personil Sekolah', '<p>Personil Sekolah</p>\r\n', '2018-07-26', '1'),
(6, 'Prestasi Sekolah', '<p>Prestasi Sekolah</p>\r\n', '2018-07-26', '1'),
(7, 'Tata Tertib Guru', '<p>Tata Tertib Guru</p>\r\n', '2018-07-26', '1'),
(8, 'Tata Tertib Pegawai', '<p>Tata Tertib Pegawai</p>\r\n', '2018-07-26', '1'),
(9, 'Tata Tertib Perpustakaan', '<p>Tata Tertib Perpustakaan</p>\r\n', '2018-07-26', '1'),
(10, 'Tata Tertib Siswa', '<p>Peraturan dan Tata Tertib Siswa</p>\r\n', '2018-07-27', '1'),
(11, 'Pemberian Reward', '<p>Pemberian Reward</p>\r\n', '2018-07-26', '1'),
(12, 'Data Guru', '<p>fsewte</p>\r\n', '2018-07-26', '2'),
(13, 'Data Staff', '<p>Data Staff</p>\r\n', '2018-07-26', '2'),
(14, 'Data Siswa', '<p>Data Siswa</p>\r\n', '2018-07-26', '2'),
(15, 'Sejarah Sekolah', '<p>nuhfnurehguruhu4u54h</p>\r\n', '2018-07-28', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id_set` int(5) NOT NULL,
  `nm_sekolah` varchar(20) NOT NULL,
  `tagline` varchar(40) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `footer` varchar(40) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_setting`
--

INSERT INTO `tb_setting` (`id_set`, `nm_sekolah`, `tagline`, `logo`, `footer`, `status`) VALUES
(1, 'SMAN 1 X KOTO', 'WEBSITE PROFIL SEKOLAH SMAN 1 X KOTO', 'logo.png', '2018 ï¿½ SMAN 1 X KOTO. ALL Rights Reser', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `level`, `foto`, `aktif`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'M.Arif Erwan', 'ocikyamin93@gmail.com', 'Administrator', 'profile.jpg', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_katogori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id_galery`),
  ADD KEY `id_album` (`id_album`);

--
-- Indeks untuk tabel `tb_kat_berita`
--
ALTER TABLE `tb_kat_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_peng`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id_set`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kat_berita`
--
ALTER TABLE `tb_kat_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_peng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id_set` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD CONSTRAINT `tb_agenda_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tb_berita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kat_berita` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD CONSTRAINT `tb_galery_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `tb_album` (`id_album`);

--
-- Ketidakleluasaan untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD CONSTRAINT `tb_pengumuman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
