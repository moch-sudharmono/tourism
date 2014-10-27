-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for tourism
DROP DATABASE IF EXISTS `tourism`;
CREATE DATABASE IF NOT EXISTS `tourism` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tourism`;


-- Dumping structure for table tourism.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table tourism.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.category: ~9 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name_category`, `icon`, `description`) VALUES
	(1, 'Tempat Wisata', 'wisata.png', ''),
	(2, 'Penginapan', 'penginapan.png', ''),
	(3, 'Pusat Belanja', 'pusatbelanja.png', ''),
	(4, 'Bandara', 'bandara.png', ''),
	(5, 'Terminal', 'terminal.png', ''),
	(6, 'Restaurant', 'restauran.png', ''),
	(7, 'SPBU', 'spbu.png', ''),
	(8, 'Pusat ATM', 'atm.png', ''),
	(9, 'Dermaga', 'dermaga.png', '');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table tourism.map
DROP TABLE IF EXISTS `map`;
CREATE TABLE IF NOT EXISTS `map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.map: ~2 rows (approximately)
/*!40000 ALTER TABLE `map` DISABLE KEYS */;
INSERT INTO `map` (`id`, `path`, `description`, `name`) VALUES
	(8, 'jabar2.kml', 'jabar 2 ini adalah blablalba', 'Jabar2'),
	(9, 'jabar3.kml', 'jabar 3 adalaha baskjdhklasjdghkadbvklwbgS', 'jabar3');
/*!40000 ALTER TABLE `map` ENABLE KEYS */;


-- Dumping structure for table tourism.pointer
DROP TABLE IF EXISTS `pointer`;
CREATE TABLE IF NOT EXISTS `pointer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `desc_point` text NOT NULL,
  `picture` varchar(300) NOT NULL,
  `panorama` varchar(300) NOT NULL,
  `promo_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pointer: ~3 rows (approximately)
/*!40000 ALTER TABLE `pointer` DISABLE KEYS */;
INSERT INTO `pointer` (`id`, `name`, `desc_point`, `picture`, `panorama`, `promo_id`, `community_id`, `category`, `lat`, `lng`) VALUES
	(4, 'Wakatobi', '', '', '', 0, 0, 0, 0, 0),
	(5, 'Wangi-wangi', '', '', '', 0, 0, 0, 0, 0),
	(6, 'Pantai Lasehao', '', '', '', 0, 0, 0, 0, 0);
/*!40000 ALTER TABLE `pointer` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_berita
DROP TABLE IF EXISTS `pr_berita`;
CREATE TABLE IF NOT EXISTS `pr_berita` (
  `id_berita` int(10) NOT NULL AUTO_INCREMENT,
  `judul_berita_ina` varchar(255) NOT NULL,
  `judul_berita_eng` varchar(255) NOT NULL,
  `isi_berita_ina` text,
  `isi_berita_eng` text,
  `tanggal_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_berita`),
  UNIQUE KEY `judul_berita_ina` (`judul_berita_ina`),
  UNIQUE KEY `judul_berita_eng` (`judul_berita_eng`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_berita: ~3 rows (approximately)
/*!40000 ALTER TABLE `pr_berita` DISABLE KEYS */;
INSERT INTO `pr_berita` (`id_berita`, `judul_berita_ina`, `judul_berita_eng`, `isi_berita_ina`, `isi_berita_eng`, `tanggal_berita`) VALUES
	(1, 'Tiba di Jakarta, Menlu AS akan Cari Dukungan Untuk Melawan ISIS', 'Tiba di Jakarta, Menlu AS akan Cari Dukungan Untuk Melawan ISIS', 'Jakarta - Menteri Luar Negeri (Menlu) Amerika Serikat John Kerry tiba di Jakarta untuk menghadiri pelantikan presiden dan wakil presiden terpilih, Jokowi-JK. Kerry juga disebut akan meminta bantuan negara-negara Asia Tenggara dalam upaya AS melawan militan ISIS.\r\n\r\nDalam kunjungan sehari di Jakarta, Kerry akan menghadiri pelantikan Jokowi-JK yang akan digelar pagi ini. Namun selain itu, Kerry juga dijadwalkan menggelar pertemuan bilateral dengan Jokowi, juga dengan Perdana Menteri Malaysia dan Singapura, lalu Sultan Brunei, Perdana Menteri Australia dan Menteri Luar Negeri Filipina.\r\n\r\nDemikian disampaikan oleh pejabat senior Departemen Luar Negeri AS kepada wartawan dalam penerbangan Kerry ke Jakarta, seperti dilansir Reuters, Senin (20/10/2014).\r\n\r\nMenurut pejabat senior yang enggan disebut namanya tersebut, pertemuan bilateral itu akan membahas sejumlah isu, mulai dari sengketa wilayah di Laut China Selatan, perjuangan melawan wabah Ebola dan perjanjian Kemitraan Perdagangan Trans-Pasifik yang masih dalam pembahasan.\r\n\r\nNamun isu prioritasnya, lanjut pejabat senior tersebut, ialah mencari lebih banyak bantuan dan dukungan dalam melawan ISIS di Suriah dan Irak.\r\n\r\nPembahasan antara kepala negara dan pejabat penting tersebut antara lain akan menyinggung upaya penangkalan rekrutmen anggota ISIS dari negara-negara Asia Tenggara, mencegah kembalinya pelaku jihad garis keras di wilayah tersebut, serta memblokir pendanaan bagi militan keji tersebut.\r\n\r\n"Menlu akan berbicara lewat wilayah yang kami yakini dan kami harap masing-masing negara bisa berbuat lebih banyak," ucap pejabat senior tersebut.', 'Jakarta - Menteri Luar Negeri (Menlu) Amerika Serikat John Kerry tiba di Jakarta untuk menghadiri pelantikan presiden dan wakil presiden terpilih, Jokowi-JK. Kerry juga disebut akan meminta bantuan negara-negara Asia Tenggara dalam upaya AS melawan militan ISIS.\r\n\r\nDalam kunjungan sehari di Jakarta, Kerry akan menghadiri pelantikan Jokowi-JK yang akan digelar pagi ini. Namun selain itu, Kerry juga dijadwalkan menggelar pertemuan bilateral dengan Jokowi, juga dengan Perdana Menteri Malaysia dan Singapura, lalu Sultan Brunei, Perdana Menteri Australia dan Menteri Luar Negeri Filipina.\r\n\r\nDemikian disampaikan oleh pejabat senior Departemen Luar Negeri AS kepada wartawan dalam penerbangan Kerry ke Jakarta, seperti dilansir Reuters, Senin (20/10/2014).\r\n\r\nMenurut pejabat senior yang enggan disebut namanya tersebut, pertemuan bilateral itu akan membahas sejumlah isu, mulai dari sengketa wilayah di Laut China Selatan, perjuangan melawan wabah Ebola dan perjanjian Kemitraan Perdagangan Trans-Pasifik yang masih dalam pembahasan.\r\n\r\nNamun isu prioritasnya, lanjut pejabat senior tersebut, ialah mencari lebih banyak bantuan dan dukungan dalam melawan ISIS di Suriah dan Irak.\r\n\r\nPembahasan antara kepala negara dan pejabat penting tersebut antara lain akan menyinggung upaya penangkalan rekrutmen anggota ISIS dari negara-negara Asia Tenggara, mencegah kembalinya pelaku jihad garis keras di wilayah tersebut, serta memblokir pendanaan bagi militan keji tersebut.\r\n\r\n"Menlu akan berbicara lewat wilayah yang kami yakini dan kami harap masing-masing negara bisa berbuat lebih banyak," ucap pejabat senior tersebut.', '2014-10-25 21:16:57'),
	(2, 'Eks Tokoh Pendukung ISIS Dirikan Lembaga Riset', 'Eks Tokoh Pendukung ISIS Dirikan Lembaga Riset', '<p>Muchus Budi R. - detikNews</p>\r\n\r\n<p>Solo - Ketua Forum Pendukung Daulah Islamiyah (FPDI), Amir Mahmud, mendirikan sebuah lembaga riset di Solo. Doktor bidang studi Islam tersebut menegaskan lembaga tersebut akan bekerja profesional melakukan berbagai kajian tentang keislaman, peradaban dan budaya. Dia juga mengatakan lembaganya itu tak terkait dengan kelompok manapun dan bukan kedok perekrutan. Launching lembaga riset yang dinamai Amir Institute tersebut dilakukan di Solo, Sabtu (25/10/2014). Lembaga tersebut mengedepankan jargon &#39;menjunjung tinggi syariat menuju peradaban Islam&#39;. Dalam penjelasannya, goal tentang peradaban adalah obsesi besar yang memang telah dia pikirkan dan perjuangkan sejak lama. &quot;Secara kebetulan saja Presiden yang terpilih saat ini mengajukann konsep revolusi mental yang pada dasarnyaa itu juga sebuah konsep pembenahan peradaban. Kami tidak tahu dasar dan acuan apa yang akan dipakai oleh Presiden Jokowi dalam merealisasikan konsep besarnya itu. Kami sama sekali tak terkait? dengan itu. Memang secara kebetulan saja munculnya hampir bersamaan,&quot; ujarnya kepada wartawan di Solo. Meskipun demikian Amir menegaskan lembaga yang dikelolanya akan ikut mengontrol jalannya revolusi mental yang dicanangkan oleh Jokowi. Jika program-programnya sesuai harapan dan tidak meminggirkan aspirasi umat Islam sebagai mayoritas warga bangsa maka pihaknya? akan memberi dukungan. Namun jika yang terjadi sebaliknya maka Amir Institute akan memberikan kritik yang tegas. &quot;Pisau paling tajam dari lembaga riset adalah karya-karya analisis yang akan kami dirilis terbuka agar menjadi perhatian bersama dan pemerintah menyadari tentang kekeliruannya itu,&quot; lanjutnya. ?Lebih lanjut, Amir juga menegaskan lembaganya tersebut tidak ada kaitan dengan kelompok-kelompok yang terlibat konflik di Timur Tengah. Karena itu Amir Institute bukan kedok bagi perekrutan sumber daya manusia dari Indonesia untuk dikirim ke kawasan konflik di Timur Tengah. Namun demikian Amir menegaskan mempersilakan jika ada organisasi lain melakukan pengiriman itu, dengan dalih tidak ingin mencampuri kecenderungan pemikiran organisasi lain dalam menyikapi konflik yang terjadi. Nama Amir Mahmud mengemuka di pemberitaan nasional pada bulan Juli hingga Agustus lalu karena inisiatifnya bersama Afif Abdul Majid ?mendirikan FPDI di Solo. Forum ini menyatakaan dukungan kepada ISIS dan bahkan melakukan baiat kepada para pendukungnya. Namun belakangan Amir yang juga kombaatan Afghanistan tersebut mengatakan dukungannya itu hanya merupakan wacana dan tidak pernah ada tindakan konkret melakukan aksi atas nama ISIS di Indonesia. Belakangan Afif Abdul Majid ditangkap Densus 88/Anti-Teror Mabes Polri dengan sangkaan terlibat dalam pendanaan kasus pelatihan militer di Aceh dan? karena aktifitasnya menggalang dukungan untuk gerakan ISIS. Namun Amir Mahmud tetap bebas dan aktifitasnya hingga kini tidak terpengaruh oleh kegiatannya di FPDI itu.</p>\r\n\r\n<p>(mbr/fjr)</p>\r\n', '<p>Muchus Budi R. - detikNews</p>\r\n\r\n<p>Solo - Ketua Forum Pendukung Daulah Islamiyah (FPDI), Amir Mahmud, mendirikan sebuah lembaga riset di Solo. Doktor bidang studi Islam tersebut menegaskan lembaga tersebut akan bekerja profesional melakukan berbagai kajian tentang keislaman, peradaban dan budaya. Dia juga mengatakan lembaganya itu tak terkait dengan kelompok manapun dan bukan kedok perekrutan. Launching lembaga riset yang dinamai Amir Institute tersebut dilakukan di Solo, Sabtu (25/10/2014). Lembaga tersebut mengedepankan jargon &#39;menjunjung tinggi syariat menuju peradaban Islam&#39;. Dalam penjelasannya, goal tentang peradaban adalah obsesi besar yang memang telah dia pikirkan dan perjuangkan sejak lama. &quot;Secara kebetulan saja Presiden yang terpilih saat ini mengajukann konsep revolusi mental yang pada dasarnyaa itu juga sebuah konsep pembenahan peradaban. Kami tidak tahu dasar dan acuan apa yang akan dipakai oleh Presiden Jokowi dalam merealisasikan konsep besarnya itu. Kami sama sekali tak terkait? dengan itu. Memang secara kebetulan saja munculnya hampir bersamaan,&quot; ujarnya kepada wartawan di Solo. Meskipun demikian Amir menegaskan lembaga yang dikelolanya akan ikut mengontrol jalannya revolusi mental yang dicanangkan oleh Jokowi. Jika program-programnya sesuai harapan dan tidak meminggirkan aspirasi umat Islam sebagai mayoritas warga bangsa maka pihaknya? akan memberi dukungan. Namun jika yang terjadi sebaliknya maka Amir Institute akan memberikan kritik yang tegas. &quot;Pisau paling tajam dari lembaga riset adalah karya-karya analisis yang akan kami dirilis terbuka agar menjadi perhatian bersama dan pemerintah menyadari tentang kekeliruannya itu,&quot; lanjutnya. ?Lebih lanjut, Amir juga menegaskan lembaganya tersebut tidak ada kaitan dengan kelompok-kelompok yang terlibat konflik di Timur Tengah. Karena itu Amir Institute bukan kedok bagi perekrutan sumber daya manusia dari Indonesia untuk dikirim ke kawasan konflik di Timur Tengah. Namun demikian Amir menegaskan mempersilakan jika ada organisasi lain melakukan pengiriman itu, dengan dalih tidak ingin mencampuri kecenderungan pemikiran organisasi lain dalam menyikapi konflik yang terjadi. Nama Amir Mahmud mengemuka di pemberitaan nasional pada bulan Juli hingga Agustus lalu karena inisiatifnya bersama Afif Abdul Majid ?mendirikan FPDI di Solo. Forum ini menyatakaan dukungan kepada ISIS dan bahkan melakukan baiat kepada para pendukungnya. Namun belakangan Amir yang juga kombaatan Afghanistan tersebut mengatakan dukungannya itu hanya merupakan wacana dan tidak pernah ada tindakan konkret melakukan aksi atas nama ISIS di Indonesia. Belakangan Afif Abdul Majid ditangkap Densus 88/Anti-Teror Mabes Polri dengan sangkaan terlibat dalam pendanaan kasus pelatihan militer di Aceh dan? karena aktifitasnya menggalang dukungan untuk gerakan ISIS. Namun Amir Mahmud tetap bebas dan aktifitasnya hingga kini tidak terpengaruh oleh kegiatannya di FPDI itu.</p>\r\n\r\n<p>(mbr/fjr)</p>\r\n', '2014-10-26 00:09:17'),
	(3, 'Selasa Besok Jokowi akan Sibuk Bertemu Para Kepala Negara', 'Selasa Besok Jokowi akan Sibuk Bertemu Para Kepala Negara', 'Jakarta - Dalam hitungan menit, Jokowi akan dilantik sebagai presiden RI ketujuh. Tak lama dilantik, beberapa kepala negara sudah antre untuk bertemu.\r\n\r\n"Besok ada pertemuan-pertemuan dengan perdana menteri dan kepala negara. Dan panggil panglima," ujar Jokowi di rumah dinas Gubernur DKI, Jalan Taman Suropati Nomor 7, Menteng, Jakarta Pusat, Senin (20/10/2014) pukul 08.00 WIB.\r\n\r\nSaat ditanya pertemuan dengan para kepala negara akan membahas apa saja, Jokowi menyahut, "Besok saja diikuti".\r\n\r\nYang jelas, baginya, sumpah jabatan presiden adalah beban yang berat. "Itu sebuah beban berat yang harus kita terima, dan itu merupakan sebuah tanggung jawab besar untuk menyelesaikan persoalan yang ada di negara kita," tutur dia.\r\n\r\nSekitar 18 tamu negara yang merupakan Kepala Negara/Kepala Pemerintahan atau utusan negara akan hadir di acara pelantikan Jokowi-JK. Mereka adalah Menlu AS John Kerry, Menlu Inggris Phillip Hammond, Perdana Menteri Australia Tony Abbot, Perdana Menteri Malaysia Najib Rajak, dan Perdana Menteri Singapura Lee Hsien Loong.\r\n\r\nSelain itu juga Sultan Brunei Darussalam Hassanal Bolkiah, Presiden Timor Leste Xanana Gusmao, mantan Perdana Menteri Jepang Yasuo Fukada, Gubernur Jenderal Papua Nugini Michael Ogio, dan Menteri Industri dan Perdagangan Rusia Denis Manturov. Beberapa utusan tamu kenegaraan lainnya juga rencananya akan hadir namun masih belum dipastikan siapa yang akan dikirim untuk datan yakni Vietnam, China, Thailand, dan Korea Selatan.\r\n\r\n(nwk/nrl)', 'Jakarta - Dalam hitungan menit, Jokowi akan dilantik sebagai presiden RI ketujuh. Tak lama dilantik, beberapa kepala negara sudah antre untuk bertemu.\r\n\r\n"Besok ada pertemuan-pertemuan dengan perdana menteri dan kepala negara. Dan panggil panglima," ujar Jokowi di rumah dinas Gubernur DKI, Jalan Taman Suropati Nomor 7, Menteng, Jakarta Pusat, Senin (20/10/2014) pukul 08.00 WIB.\r\n\r\nSaat ditanya pertemuan dengan para kepala negara akan membahas apa saja, Jokowi menyahut, "Besok saja diikuti".\r\n\r\nYang jelas, baginya, sumpah jabatan presiden adalah beban yang berat. "Itu sebuah beban berat yang harus kita terima, dan itu merupakan sebuah tanggung jawab besar untuk menyelesaikan persoalan yang ada di negara kita," tutur dia.\r\n\r\nSekitar 18 tamu negara yang merupakan Kepala Negara/Kepala Pemerintahan atau utusan negara akan hadir di acara pelantikan Jokowi-JK. Mereka adalah Menlu AS John Kerry, Menlu Inggris Phillip Hammond, Perdana Menteri Australia Tony Abbot, Perdana Menteri Malaysia Najib Rajak, dan Perdana Menteri Singapura Lee Hsien Loong.\r\n\r\nSelain itu juga Sultan Brunei Darussalam Hassanal Bolkiah, Presiden Timor Leste Xanana Gusmao, mantan Perdana Menteri Jepang Yasuo Fukada, Gubernur Jenderal Papua Nugini Michael Ogio, dan Menteri Industri dan Perdagangan Rusia Denis Manturov. Beberapa utusan tamu kenegaraan lainnya juga rencananya akan hadir namun masih belum dipastikan siapa yang akan dikirim untuk datan yakni Vietnam, China, Thailand, dan Korea Selatan.\r\n\r\n(nwk/nrl)', '2014-10-26 00:11:06');
/*!40000 ALTER TABLE `pr_berita` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_berita_log
DROP TABLE IF EXISTS `pr_berita_log`;
CREATE TABLE IF NOT EXISTS `pr_berita_log` (
  `id_berita_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_berita` int(10) NOT NULL,
  `tanggal_log` timestamp NULL DEFAULT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `id_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_berita_log`),
  KEY `FK_pr_berita_log_pr_berita` (`id_berita`),
  CONSTRAINT `FK_pr_berita_log_pr_berita` FOREIGN KEY (`id_berita`) REFERENCES `pr_berita` (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_berita_log: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_berita_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_berita_log` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_berita_tag
DROP TABLE IF EXISTS `pr_berita_tag`;
CREATE TABLE IF NOT EXISTS `pr_berita_tag` (
  `id_berita_tag` int(11) NOT NULL AUTO_INCREMENT,
  `tag_ina` varchar(255) NOT NULL,
  `tag_eng` varchar(255) NOT NULL,
  PRIMARY KEY (`id_berita_tag`),
  UNIQUE KEY `tag` (`tag_ina`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_berita_tag: ~5 rows (approximately)
/*!40000 ALTER TABLE `pr_berita_tag` DISABLE KEYS */;
INSERT INTO `pr_berita_tag` (`id_berita_tag`, `tag_ina`, `tag_eng`) VALUES
	(1, 'Politik', 'Politic'),
	(2, 'Luar Negeri', 'International'),
	(3, 'Wisata', 'Tourism'),
	(4, 'Wakatobi', 'Wakatobi'),
	(5, 'Pantai', 'Beach');
/*!40000 ALTER TABLE `pr_berita_tag` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_berita_tag_trans
DROP TABLE IF EXISTS `pr_berita_tag_trans`;
CREATE TABLE IF NOT EXISTS `pr_berita_tag_trans` (
  `id_berita_tag_trans` int(10) NOT NULL AUTO_INCREMENT,
  `id_berita` int(10) NOT NULL,
  `id_berita_tag` int(10) NOT NULL,
  PRIMARY KEY (`id_berita_tag_trans`),
  KEY `FK_pr_berita_tag_trans_pr_berita` (`id_berita`),
  KEY `FK_pr_berita_tag_trans_pr_berita_tag` (`id_berita_tag`),
  CONSTRAINT `FK_pr_berita_tag_trans_pr_berita` FOREIGN KEY (`id_berita`) REFERENCES `pr_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pr_berita_tag_trans_pr_berita_tag` FOREIGN KEY (`id_berita_tag`) REFERENCES `pr_berita_tag` (`id_berita_tag`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_berita_tag_trans: ~4 rows (approximately)
/*!40000 ALTER TABLE `pr_berita_tag_trans` DISABLE KEYS */;
INSERT INTO `pr_berita_tag_trans` (`id_berita_tag_trans`, `id_berita`, `id_berita_tag`) VALUES
	(10, 3, 2),
	(11, 3, 1),
	(13, 1, 1),
	(14, 2, 1);
/*!40000 ALTER TABLE `pr_berita_tag_trans` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_global
DROP TABLE IF EXISTS `pr_global`;
CREATE TABLE IF NOT EXISTS `pr_global` (
  `id_global` int(10) NOT NULL AUTO_INCREMENT,
  `nama_variabel` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text,
  `val_int` int(10) DEFAULT NULL,
  `val_varchar` varchar(255) DEFAULT NULL,
  `val_text` text,
  PRIMARY KEY (`id_global`),
  UNIQUE KEY `nama_variabel` (`nama_variabel`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_global: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_global` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_global` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_kategori_promosi
DROP TABLE IF EXISTS `pr_kategori_promosi`;
CREATE TABLE IF NOT EXISTS `pr_kategori_promosi` (
  `id_kategori_promosi` int(10) NOT NULL AUTO_INCREMENT,
  `kategori_promosi_ina` varchar(255) NOT NULL,
  `kategori_promosi_eng` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori_promosi`),
  UNIQUE KEY `kategori_promosi` (`kategori_promosi_ina`),
  UNIQUE KEY `kategori_promosi_eng` (`kategori_promosi_eng`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_kategori_promosi: ~2 rows (approximately)
/*!40000 ALTER TABLE `pr_kategori_promosi` DISABLE KEYS */;
INSERT INTO `pr_kategori_promosi` (`id_kategori_promosi`, `kategori_promosi_ina`, `kategori_promosi_eng`) VALUES
	(1, 'Tanaman', 'Plantation'),
	(2, 'Makanan', 'Foods');
/*!40000 ALTER TABLE `pr_kategori_promosi` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_kategori_sarana_prasarana
DROP TABLE IF EXISTS `pr_kategori_sarana_prasarana`;
CREATE TABLE IF NOT EXISTS `pr_kategori_sarana_prasarana` (
  `id_kategori_sarana_prasarana` int(10) NOT NULL AUTO_INCREMENT,
  `kategori_sarana_prasarana_ina` varchar(255) NOT NULL,
  `kategori_sarana_prasarana_eng` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_sarana_prasarana`),
  UNIQUE KEY `kategori_sarana_prasarana_ina` (`kategori_sarana_prasarana_ina`),
  UNIQUE KEY `kategori_sarana_prasarana_eng` (`kategori_sarana_prasarana_eng`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_kategori_sarana_prasarana: ~3 rows (approximately)
/*!40000 ALTER TABLE `pr_kategori_sarana_prasarana` DISABLE KEYS */;
INSERT INTO `pr_kategori_sarana_prasarana` (`id_kategori_sarana_prasarana`, `kategori_sarana_prasarana_ina`, `kategori_sarana_prasarana_eng`, `icon`) VALUES
	(1, 'Transportasi Darat', 'Inland Transportation', NULL),
	(2, 'Transportasi Udara', 'Air Transportation', NULL),
	(3, 'Transportasi Laut', 'Water Transportation', NULL),
	(4, 'Hotel', 'Hotel', NULL),
	(5, 'Bandara', 'Airport', NULL);
/*!40000 ALTER TABLE `pr_kategori_sarana_prasarana` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_lokasi_wisata
DROP TABLE IF EXISTS `pr_lokasi_wisata`;
CREATE TABLE IF NOT EXISTS `pr_lokasi_wisata` (
  `id_lokasi_wisata` int(10) NOT NULL AUTO_INCREMENT,
  `id_lokasi_wisata_kategori` int(11) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `nama_lokasi_wisata_ina` varchar(255) NOT NULL,
  `nama_lokasi_wisata_eng` varchar(255) NOT NULL,
  `deskripsi_ina` text,
  `deskripsi_eng` text,
  `id_peta` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_lokasi_wisata`),
  UNIQUE KEY `nama_lokasi_wisata_ina` (`nama_lokasi_wisata_ina`),
  UNIQUE KEY `nama_lokasi_wisata_eng` (`nama_lokasi_wisata_eng`),
  KEY `FK_pr_lokasi_wisata_pr_lokasi_wisata_kategori` (`id_lokasi_wisata_kategori`),
  CONSTRAINT `FK_pr_lokasi_wisata_pr_lokasi_wisata_kategori` FOREIGN KEY (`id_lokasi_wisata_kategori`) REFERENCES `pr_lokasi_wisata_kategori` (`id_lokasi_wisata_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_lokasi_wisata` DISABLE KEYS */;
INSERT INTO `pr_lokasi_wisata` (`id_lokasi_wisata`, `id_lokasi_wisata_kategori`, `parent_id`, `nama_lokasi_wisata_ina`, `nama_lokasi_wisata_eng`, `deskripsi_ina`, `deskripsi_eng`, `id_peta`) VALUES
	(1, 1, NULL, 'Wakatobi', 'Wakatobi', 'Wakatobi adalah ..', 'Wakatobi adalah ..', NULL),
	(5, 1, 1, 'Wangi-wangi', 'Wangi-wangi', 'Wangi-wangi adalah', 'Wangi-wangi adalah', NULL),
	(6, 2, 5, 'Pantai Lasehao', 'Pantai Lasehao', '<p>Pantai Lasehao</p>\r\n', '<p>Lasehao Beach</p>\r\n', 6);
/*!40000 ALTER TABLE `pr_lokasi_wisata` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_lokasi_wisata_gambar
DROP TABLE IF EXISTS `pr_lokasi_wisata_gambar`;
CREATE TABLE IF NOT EXISTS `pr_lokasi_wisata_gambar` (
  `id_pr_lokasi_wisata_gambar` int(10) NOT NULL AUTO_INCREMENT,
  `id_lokasi_wisata` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi_ina` text,
  `deskripsi_eng` text,
  PRIMARY KEY (`id_pr_lokasi_wisata_gambar`),
  UNIQUE KEY `gambar` (`gambar`),
  KEY `FK_pr_lokasi_wisata_gambar_pr_lokasi_wisata` (`id_lokasi_wisata`),
  CONSTRAINT `FK_pr_lokasi_wisata_gambar_pr_lokasi_wisata` FOREIGN KEY (`id_lokasi_wisata`) REFERENCES `pr_lokasi_wisata` (`id_lokasi_wisata`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata_gambar: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_lokasi_wisata_gambar` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_lokasi_wisata_gambar` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_lokasi_wisata_kategori
DROP TABLE IF EXISTS `pr_lokasi_wisata_kategori`;
CREATE TABLE IF NOT EXISTS `pr_lokasi_wisata_kategori` (
  `id_lokasi_wisata_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ina` varchar(255) NOT NULL,
  `kategori_eng` varchar(255) NOT NULL,
  PRIMARY KEY (`id_lokasi_wisata_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata_kategori: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_lokasi_wisata_kategori` DISABLE KEYS */;
INSERT INTO `pr_lokasi_wisata_kategori` (`id_lokasi_wisata_kategori`, `kategori_ina`, `kategori_eng`) VALUES
	(1, 'Lokasi Wisata', 'Tourism Location'),
	(2, 'Wisata Alam', 'Nature');
/*!40000 ALTER TABLE `pr_lokasi_wisata_kategori` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_lokasi_wisata_tag_sarana
DROP TABLE IF EXISTS `pr_lokasi_wisata_tag_sarana`;
CREATE TABLE IF NOT EXISTS `pr_lokasi_wisata_tag_sarana` (
  `id_pr_lokasi_wisata_tag_sarana` int(10) NOT NULL AUTO_INCREMENT,
  `id_sarana_prasarana` int(10) NOT NULL,
  `id_lokasi_wisata` int(10) NOT NULL,
  PRIMARY KEY (`id_pr_lokasi_wisata_tag_sarana`),
  KEY `FK_pr_lokasi_wisata_tag_sarana_pr_sarana_prasarana` (`id_sarana_prasarana`),
  KEY `FK_pr_lokasi_wisata_tag_sarana_pr_lokasi_wisata` (`id_lokasi_wisata`),
  CONSTRAINT `FK_pr_lokasi_wisata_tag_sarana_pr_lokasi_wisata` FOREIGN KEY (`id_lokasi_wisata`) REFERENCES `pr_lokasi_wisata` (`id_lokasi_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pr_lokasi_wisata_tag_sarana_pr_sarana_prasarana` FOREIGN KEY (`id_sarana_prasarana`) REFERENCES `pr_sarana_prasarana` (`id_sarana_prasarana`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata_tag_sarana: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_lokasi_wisata_tag_sarana` DISABLE KEYS */;
INSERT INTO `pr_lokasi_wisata_tag_sarana` (`id_pr_lokasi_wisata_tag_sarana`, `id_sarana_prasarana`, `id_lokasi_wisata`) VALUES
	(5, 3, 6),
	(6, 1, 6);
/*!40000 ALTER TABLE `pr_lokasi_wisata_tag_sarana` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_paket_wisata
DROP TABLE IF EXISTS `pr_paket_wisata`;
CREATE TABLE IF NOT EXISTS `pr_paket_wisata` (
  `id_paket_wisata` int(10) NOT NULL AUTO_INCREMENT,
  `paket_wisata_ina` varchar(255) NOT NULL,
  `paket_wisata_eng` varchar(255) NOT NULL,
  `deskripsi_ina` text,
  `deskripsi_eng` text,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_paket_wisata`),
  UNIQUE KEY `paket_wisata_ina` (`paket_wisata_ina`),
  UNIQUE KEY `paket_wisata_eng` (`paket_wisata_eng`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_paket_wisata: ~2 rows (approximately)
/*!40000 ALTER TABLE `pr_paket_wisata` DISABLE KEYS */;
INSERT INTO `pr_paket_wisata` (`id_paket_wisata`, `paket_wisata_ina`, `paket_wisata_eng`, `deskripsi_ina`, `deskripsi_eng`, `url`) VALUES
	(1, 'PAKET HEMAT BACKPACKER', 'PAKET HEMAT BACKPACKER', 'Hari 1 Air Port- Pulau Kaledupa (D)\r\nUsahakan Ambil Flight dari Jakarta Jam 5 subuh agar Tiba di bau bau jam 11.45 WITA, karena Kapal cepat reguler hanya beroperasi sekali dalam sehari yang berangkat Pukul 13.00 WITA dari Bau Bau, kemudian langsung ke Kaledupa , Kita akan menghabiskan waktu tempuh dalam perjalanan sekitar 4 jam, Check in Bungalaw  dan makan malam.\r\n\r\nHari 2 Snorkeling Day (B,L,D)-  Menuju Pulau Tomia\r\n\r\nRombongan sarapan pagi dan siap siap menuju Pulau Tomia, Tiba di Tomia, makan siang kemudian mulai snorkeling. Sore Harinya Mengunjungi Puncak Kahianga ( icon film The Mirror Never Lies ) untuk Hunting sunset. Setelah itu kembali ke Penginapan dan makan malam. Istirahat dan acara bebas..\r\n\r\nHari 3 Snorkeling Day (B,L,D)- Menuju Pulau Kaledupa\r\n\r\nRombongan sarapan pagi dan kembali ke Pulau Kaledupa. Makan siang, kemudian lanjut Full Snorkeling,Diving (exclude budget),Cano and Hoping Island di Pulau Hoga\r\n\r\nHari Ke 4 Tour End (B)\r\nTour End\r\n\r\nHarga Paket\r\n2 org =    Rp 2,650,000 / orang\r\n5 org  =   Rp  1.902.000 / orang\r\n10 org =   Rp 1.176.000 / orang\r\n15 org = Rp   949.333 / orang\r\n20 org =   Rp  824.500 / orang\r\n\r\nFasilitas :\r\n- Transportasi ke Penginapan dan selama wisata\r\n- Sewa Boat Reguler ke Pulau Tomia dari Kaledupa ( PP )\r\n- Penginapan/Home Stay berupa bungalow (rumah warga setempat)\r\n- Makan selama di Wakatobi\r\n- Sewa Alat Snorkeling full sesuai itenerary\r\n- Barbeque dengan Ikan segar Fresh from The Oven\r\n- Fee Pemandu Lokal\r\n- Cano sepuasnya\r\n- Bonus Kaos Wakatobi ( Cotton Combat 24 S)\r\nBiaya yang belum termasuk :\r\n- Transportasi Via Udara :Tiket pesawat Jakarta-Bau Bau/Bau bau jakarta (kurang lebih 1,4 jt)\r\n- Transportasi Via Laut : Tiket Kapal Pelni dari Tanjung Priok (Waktu Tempuh dari Tanjung Priok Jakarta hingga bau bau yakni 3 hari 3 malam) (420 rb untuk kelas ekonomi dan untuk kelas VIP kurang lebih 800 rb)\r\n* Biaya Hotel di bau bau,jika kita harus bermalam di bau bau (250 rb/2 orang)\r\n- Tiket Kapal Bau Bau-Wakatobi PP\r\n- Angkot dr Pelabuhan – Penginapan ( 25 rb untuk 8 org ), Jika tidak ingin jalan kaki ke penginapan. Jarak antara pelabuhan ke penginapan kurang lebih 10 menit jika jalan kaki.\r\n- Diving :\r\nLisensi (350 rb) dan Non Lisensi (450 rb)', 'Hari 1 Air Port- Pulau Kaledupa (D)\r\nUsahakan Ambil Flight dari Jakarta Jam 5 subuh agar Tiba di bau bau jam 11.45 WITA, karena Kapal cepat reguler hanya beroperasi sekali dalam sehari yang berangkat Pukul 13.00 WITA dari Bau Bau, kemudian langsung ke Kaledupa , Kita akan menghabiskan waktu tempuh dalam perjalanan sekitar 4 jam, Check in Bungalaw  dan makan malam.\r\n\r\nHari 2 Snorkeling Day (B,L,D)-  Menuju Pulau Tomia\r\n\r\nRombongan sarapan pagi dan siap siap menuju Pulau Tomia, Tiba di Tomia, makan siang kemudian mulai snorkeling. Sore Harinya Mengunjungi Puncak Kahianga ( icon film The Mirror Never Lies ) untuk Hunting sunset. Setelah itu kembali ke Penginapan dan makan malam. Istirahat dan acara bebas..\r\n\r\nHari 3 Snorkeling Day (B,L,D)- Menuju Pulau Kaledupa\r\n\r\nRombongan sarapan pagi dan kembali ke Pulau Kaledupa. Makan siang, kemudian lanjut Full Snorkeling,Diving (exclude budget),Cano and Hoping Island di Pulau Hoga\r\n\r\nHari Ke 4 Tour End (B)\r\nTour End\r\n\r\nHarga Paket\r\n2 org =    Rp 2,650,000 / orang\r\n5 org  =   Rp  1.902.000 / orang\r\n10 org =   Rp 1.176.000 / orang\r\n15 org = Rp   949.333 / orang\r\n20 org =   Rp  824.500 / orang\r\n\r\nFasilitas :\r\n- Transportasi ke Penginapan dan selama wisata\r\n- Sewa Boat Reguler ke Pulau Tomia dari Kaledupa ( PP )\r\n- Penginapan/Home Stay berupa bungalow (rumah warga setempat)\r\n- Makan selama di Wakatobi\r\n- Sewa Alat Snorkeling full sesuai itenerary\r\n- Barbeque dengan Ikan segar Fresh from The Oven\r\n- Fee Pemandu Lokal\r\n- Cano sepuasnya\r\n- Bonus Kaos Wakatobi ( Cotton Combat 24 S)\r\nBiaya yang belum termasuk :\r\n- Transportasi Via Udara :Tiket pesawat Jakarta-Bau Bau/Bau bau jakarta (kurang lebih 1,4 jt)\r\n- Transportasi Via Laut : Tiket Kapal Pelni dari Tanjung Priok (Waktu Tempuh dari Tanjung Priok Jakarta hingga bau bau yakni 3 hari 3 malam) (420 rb untuk kelas ekonomi dan untuk kelas VIP kurang lebih 800 rb)\r\n* Biaya Hotel di bau bau,jika kita harus bermalam di bau bau (250 rb/2 orang)\r\n- Tiket Kapal Bau Bau-Wakatobi PP\r\n- Angkot dr Pelabuhan – Penginapan ( 25 rb untuk 8 org ), Jika tidak ingin jalan kaki ke penginapan. Jarak antara pelabuhan ke penginapan kurang lebih 10 menit jika jalan kaki.\r\n- Diving :\r\nLisensi (350 rb) dan Non Lisensi (450 rb)', NULL),
	(2, 'Biaya paket wisata wakatobi murah', 'Biaya paket wisata wakatobi murah', 'Biaya paket wisata wakatobi kali ini adalah tentang perjalanan dari Wangi – wangi, Tomia dan Hoga dengan paket liburan. Hari pertama, anda dapat dijemput dari bandara, check in di hotel, makan siang dan diteruskan dengan snorkeling di tempat terbaik di Wangi – wangi. Anda dapat menikmati indahnya matahari dari Sombu dan diteruskan berjalan – jalan untuk wisata kuliner khas kepulauan wakatobi. Pada hari kedua, anda dapat menggunakan kapal reguler untuk menuju Tomia, makan siang, lalu kembali snorkeling di pulau Tomia. hari ketiga, tour akan ke benteng patua Tomia yang menghadap laut Banda. Setelah itu, dilanjutkan ke kaledupa dan Hoga. Disini, anda akan menikmati scuba diving. Harga paket ini bisa mencapai 4.4 juta hingga 5.5 juta.', 'Biaya paket wisata wakatobi kali ini adalah tentang perjalanan dari Wangi – wangi, Tomia dan Hoga dengan paket liburan. Hari pertama, anda dapat dijemput dari bandara, check in di hotel, makan siang dan diteruskan dengan snorkeling di tempat terbaik di Wangi – wangi. Anda dapat menikmati indahnya matahari dari Sombu dan diteruskan berjalan – jalan untuk wisata kuliner khas kepulauan wakatobi. Pada hari kedua, anda dapat menggunakan kapal reguler untuk menuju Tomia, makan siang, lalu kembali snorkeling di pulau Tomia. hari ketiga, tour akan ke benteng patua Tomia yang menghadap laut Banda. Setelah itu, dilanjutkan ke kaledupa dan Hoga. Disini, anda akan menikmati scuba diving. Harga paket ini bisa mencapai 4.4 juta hingga 5.5 juta.', 'http://hogaristatours.com/biaya-paket-wisata-wakatobi-murah.html');
/*!40000 ALTER TABLE `pr_paket_wisata` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_paket_wisata_gambar
DROP TABLE IF EXISTS `pr_paket_wisata_gambar`;
CREATE TABLE IF NOT EXISTS `pr_paket_wisata_gambar` (
  `id_paket_wisata_gambar` int(10) NOT NULL AUTO_INCREMENT,
  `id_paket_wisata` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi_ina` text,
  `deskripsi_eng` text,
  PRIMARY KEY (`id_paket_wisata_gambar`),
  UNIQUE KEY `gambar` (`gambar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_paket_wisata_gambar: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_paket_wisata_gambar` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_paket_wisata_gambar` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_promosi
DROP TABLE IF EXISTS `pr_promosi`;
CREATE TABLE IF NOT EXISTS `pr_promosi` (
  `id_promosi` int(10) NOT NULL AUTO_INCREMENT,
  `id_promosi_kategori` int(10) NOT NULL,
  `promosi_ina` varchar(255) NOT NULL,
  `promosi_eng` varchar(255) NOT NULL,
  `deskripsi_ina` text NOT NULL,
  `deskripsi_eng` text NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `tanggal_promosi` date DEFAULT NULL,
  `tanggal_kadarluarsa` date DEFAULT NULL,
  PRIMARY KEY (`id_promosi`),
  UNIQUE KEY `promosi_ina` (`promosi_ina`),
  UNIQUE KEY `promosi_eng` (`promosi_eng`),
  KEY `FKpr_promosi647132` (`id_promosi_kategori`),
  CONSTRAINT `FKpr_promosi647132` FOREIGN KEY (`id_promosi_kategori`) REFERENCES `pr_kategori_promosi` (`id_kategori_promosi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_promosi: ~2 rows (approximately)
/*!40000 ALTER TABLE `pr_promosi` DISABLE KEYS */;
INSERT INTO `pr_promosi` (`id_promosi`, `id_promosi_kategori`, `promosi_ina`, `promosi_eng`, `deskripsi_ina`, `deskripsi_eng`, `cover`, `tanggal_promosi`, `tanggal_kadarluarsa`) VALUES
	(1, 1, 'Tanaman Kaktus', 'Tanaman Kaktus', 'Tanaman Kaktus', 'Tanaman Kaktus', NULL, '2014-10-26', '2014-11-15'),
	(5, 1, 'asdasdsd', 'asd', '<p>asdsad</p>\r\n\r\n<p>asd</p>\r\n', '<p>asdasdas</p>\r\n\r\n<p>asd</p>\r\n', NULL, '2014-10-29', '2014-10-23');
/*!40000 ALTER TABLE `pr_promosi` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_promosi_berkas
DROP TABLE IF EXISTS `pr_promosi_berkas`;
CREATE TABLE IF NOT EXISTS `pr_promosi_berkas` (
  `id_promosi_berkas` int(10) NOT NULL AUTO_INCREMENT,
  `id_promosi` int(10) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_promosi_berkas`),
  UNIQUE KEY `berkas` (`berkas`),
  KEY `FKpr_promosi426263` (`id_promosi`),
  CONSTRAINT `FKpr_promosi426263` FOREIGN KEY (`id_promosi`) REFERENCES `pr_promosi` (`id_promosi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_promosi_berkas: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_promosi_berkas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_promosi_berkas` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_promosi_gambar
DROP TABLE IF EXISTS `pr_promosi_gambar`;
CREATE TABLE IF NOT EXISTS `pr_promosi_gambar` (
  `id_promosi_gambar` int(10) NOT NULL AUTO_INCREMENT,
  `id_promosi` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_promosi_gambar`),
  KEY `FKpr_promosi132058` (`id_promosi`),
  CONSTRAINT `FKpr_promosi132058` FOREIGN KEY (`id_promosi`) REFERENCES `pr_promosi` (`id_promosi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_promosi_gambar: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_promosi_gambar` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_promosi_gambar` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_route_edges
DROP TABLE IF EXISTS `pr_route_edges`;
CREATE TABLE IF NOT EXISTS `pr_route_edges` (
  `id_edges` int(10) NOT NULL AUTO_INCREMENT,
  `edge_from` int(10) NOT NULL,
  `edge_to` int(10) NOT NULL,
  PRIMARY KEY (`id_edges`),
  KEY `FKpr_route_e719767` (`edge_to`),
  KEY `FKpr_route_e886141` (`edge_from`),
  CONSTRAINT `FKpr_route_e719767` FOREIGN KEY (`edge_to`) REFERENCES `pr_route_nodes` (`id_nodes`),
  CONSTRAINT `FKpr_route_e886141` FOREIGN KEY (`edge_from`) REFERENCES `pr_route_nodes` (`id_nodes`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_route_edges: ~11 rows (approximately)
/*!40000 ALTER TABLE `pr_route_edges` DISABLE KEYS */;
INSERT INTO `pr_route_edges` (`id_edges`, `edge_from`, `edge_to`) VALUES
	(1, 1, 2),
	(2, 1, 4),
	(4, 1, 3),
	(5, 3, 5),
	(6, 4, 5),
	(7, 4, 7),
	(9, 2, 5),
	(10, 5, 6),
	(11, 5, 7),
	(13, 5, 8),
	(15, 7, 8);
/*!40000 ALTER TABLE `pr_route_edges` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_route_nodes
DROP TABLE IF EXISTS `pr_route_nodes`;
CREATE TABLE IF NOT EXISTS `pr_route_nodes` (
  `id_nodes` int(10) NOT NULL AUTO_INCREMENT,
  `nodes` varchar(255) NOT NULL,
  PRIMARY KEY (`id_nodes`),
  UNIQUE KEY `nodes` (`nodes`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_route_nodes: ~8 rows (approximately)
/*!40000 ALTER TABLE `pr_route_nodes` DISABLE KEYS */;
INSERT INTO `pr_route_nodes` (`id_nodes`, `nodes`) VALUES
	(4, 'Bau-bau'),
	(8, 'Binongko'),
	(1, 'Jakarta'),
	(6, 'Kalidupa'),
	(3, 'Kendari'),
	(2, 'Makassar'),
	(7, 'Tomia'),
	(5, 'Wanci');
/*!40000 ALTER TABLE `pr_route_nodes` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_route_transportation
DROP TABLE IF EXISTS `pr_route_transportation`;
CREATE TABLE IF NOT EXISTS `pr_route_transportation` (
  `id_transportation` int(10) NOT NULL AUTO_INCREMENT,
  `id_edges` int(10) NOT NULL,
  `id_sarana_prasarana` int(10) NOT NULL,
  `deskripsi_ina` varchar(4000) DEFAULT NULL,
  `deskripsi_eng` varchar(4000) DEFAULT NULL,
  `waktu_perjalanan` int(10) NOT NULL,
  `estimasi_biaya` int(10) NOT NULL,
  PRIMARY KEY (`id_transportation`),
  KEY `FKpr_route_t494151` (`id_edges`),
  KEY `FK_pr_route_transportation_pr_sarana_prasarana` (`id_sarana_prasarana`),
  CONSTRAINT `FKpr_route_t494151` FOREIGN KEY (`id_edges`) REFERENCES `pr_route_edges` (`id_edges`),
  CONSTRAINT `FK_pr_route_transportation_pr_sarana_prasarana` FOREIGN KEY (`id_sarana_prasarana`) REFERENCES `pr_sarana_prasarana` (`id_sarana_prasarana`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_route_transportation: ~1 rows (approximately)
/*!40000 ALTER TABLE `pr_route_transportation` DISABLE KEYS */;
INSERT INTO `pr_route_transportation` (`id_transportation`, `id_edges`, `id_sarana_prasarana`, `deskripsi_ina`, `deskripsi_eng`, `waktu_perjalanan`, `estimasi_biaya`) VALUES
	(2, 1, 1, 'Naik Pesawat akan memakan waktu kurang lebih 2 jam', 'Naik Pesawat akan memakan waktu kurang lebih 2 jam', 2, 1000000);
/*!40000 ALTER TABLE `pr_route_transportation` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_sarana_prasarana
DROP TABLE IF EXISTS `pr_sarana_prasarana`;
CREATE TABLE IF NOT EXISTS `pr_sarana_prasarana` (
  `id_sarana_prasarana` int(10) NOT NULL AUTO_INCREMENT,
  `id_kategori_sarana_prasarana` int(10) NOT NULL,
  `nama_ina` varchar(255) NOT NULL,
  `nama_eng` varchar(255) NOT NULL,
  `deskripsi_ina` text,
  `deskripsi_eng` text,
  `url` varchar(255) DEFAULT NULL,
  `id_peta` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_sarana_prasarana`),
  KEY `FK_pr_sarana_prasarana_pr_kategori_sarana_prasarana` (`id_kategori_sarana_prasarana`),
  CONSTRAINT `FK_pr_sarana_prasarana_pr_kategori_sarana_prasarana` FOREIGN KEY (`id_kategori_sarana_prasarana`) REFERENCES `pr_kategori_sarana_prasarana` (`id_kategori_sarana_prasarana`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_sarana_prasarana: ~1 rows (approximately)
/*!40000 ALTER TABLE `pr_sarana_prasarana` DISABLE KEYS */;
INSERT INTO `pr_sarana_prasarana` (`id_sarana_prasarana`, `id_kategori_sarana_prasarana`, `nama_ina`, `nama_eng`, `deskripsi_ina`, `deskripsi_eng`, `url`, `id_peta`) VALUES
	(1, 2, 'Pesawat Terbang', 'Aircraft', 'Pesawat Tebang', 'Aircraft', NULL, NULL),
	(2, 4, 'Hotel Wakatobi', 'Wakatobi Hotel', 'Hotel Wakatobi', 'Wakatobi Hotel', NULL, NULL),
	(3, 5, 'Bandar Udara Matahora', 'Matahora Airport', 'Bandar Udara Matahora adalah bandar udara yang terletak di Pulau Wangi-wangi, Kecamatan Wangi-wangi, Kabupaten Wakatobi, Sulawesi Tenggara. Bandar udara ini memiliki ukuran landasan pacu 2.000 x 30 m. Jarak dari kota Wangi-wangi sekitar 17 km. Sehingga menjadi 13/31 berukuran 2.450 kali 45 ms (8,038 × 148 kaki).\r\n\r\nBandara ini mulai dibangun pada tahun 2007 dengan investasi sebesar 100 miliar rupiah dari pemerintah Sulawesi Tenggara.[1] Pada tanggal 21 Mei 2009, akhirnya bandara ini pun diresmikan oleh Menteri Perhubungan Jusman Syafii Djamal sekaligus untuk meresmikan penerbangan pertama Susi Air dengan jalur Wakatobi-Kendari.[2]. Pada tahun 2011 Pemerintah Kabupaten Wakatobi bekerja sama dengan Kementerian Perhubungan dalam pengembangan sisi udara dan sisi darat Bandar Udara Matahora agar dapat didarati pesawat Boeing 737.', 'Matahora Airport is an airport located in Wangi-wangi Island, Wakatobi, South East Sulawesi, Indonesia.\r\n\r\nThe airport construction began on 2007 with an investment of 100 billions Rupiah from South East Sulawesi province government. The airport was inaugurated on May 22, 2009 by then-Indonesian minister of transportation Jusman Safi\'i Jamal.', NULL, NULL);
/*!40000 ALTER TABLE `pr_sarana_prasarana` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_sarana_prasarana_gambar
DROP TABLE IF EXISTS `pr_sarana_prasarana_gambar`;
CREATE TABLE IF NOT EXISTS `pr_sarana_prasarana_gambar` (
  `id_sarana_prasarana_gambar` int(10) NOT NULL AUTO_INCREMENT,
  `id_sarana_prasarana` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi_ina` text,
  `deskripsi_eng` text,
  PRIMARY KEY (`id_sarana_prasarana_gambar`),
  UNIQUE KEY `gambar` (`gambar`),
  KEY `FK_pr_sarana_prasarana_gambar_pr_sarana_prasarana` (`id_sarana_prasarana`),
  CONSTRAINT `FK_pr_sarana_prasarana_gambar_pr_sarana_prasarana` FOREIGN KEY (`id_sarana_prasarana`) REFERENCES `pr_sarana_prasarana` (`id_sarana_prasarana`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_sarana_prasarana_gambar: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_sarana_prasarana_gambar` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_sarana_prasarana_gambar` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_sitemap
DROP TABLE IF EXISTS `pr_sitemap`;
CREATE TABLE IF NOT EXISTS `pr_sitemap` (
  `id_sitemap` int(10) NOT NULL AUTO_INCREMENT,
  `sitemap_no` varchar(255) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `nama_sitemap_ina` varchar(255) NOT NULL,
  `nama_sitemap_eng` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `css_id` varchar(255) DEFAULT NULL,
  `css_class` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sitemap`),
  UNIQUE KEY `sitemap_no` (`sitemap_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_sitemap: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_sitemap` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_sitemap` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_tanya_kami
DROP TABLE IF EXISTS `pr_tanya_kami`;
CREATE TABLE IF NOT EXISTS `pr_tanya_kami` (
  `id_tanya_kami` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tanya_kami`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_tanya_kami: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_tanya_kami` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_tanya_kami` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_testimoni_lokasi_wisata
DROP TABLE IF EXISTS `pr_testimoni_lokasi_wisata`;
CREATE TABLE IF NOT EXISTS `pr_testimoni_lokasi_wisata` (
  `id_testimoni_lokasi_wisata` int(10) NOT NULL AUTO_INCREMENT,
  `id_lokasi_wisata` int(10) NOT NULL,
  `testimoni` text NOT NULL,
  `tanggal_testimoni` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publish` set('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_testimoni_lokasi_wisata`),
  KEY `FK_pr_testimoni_lokasi_wisata_pr_lokasi_wisata` (`id_lokasi_wisata`),
  CONSTRAINT `FK_pr_testimoni_lokasi_wisata_pr_lokasi_wisata` FOREIGN KEY (`id_lokasi_wisata`) REFERENCES `pr_lokasi_wisata` (`id_lokasi_wisata`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_testimoni_lokasi_wisata: ~0 rows (approximately)
/*!40000 ALTER TABLE `pr_testimoni_lokasi_wisata` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_testimoni_lokasi_wisata` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
