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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_berita: ~3 rows (approximately)
/*!40000 ALTER TABLE `pr_berita` DISABLE KEYS */;
INSERT INTO `pr_berita` (`id_berita`, `judul_berita_ina`, `judul_berita_eng`, `isi_berita_ina`, `isi_berita_eng`, `tanggal_berita`) VALUES
	(1, 'Tiba di Jakarta, Menlu AS akan Cari Dukungan Untuk Melawan ISIS', 'Tiba di Jakarta, Menlu AS akan Cari Dukungan Untuk Melawan ISIS', 'Jakarta - Menteri Luar Negeri (Menlu) Amerika Serikat John Kerry tiba di Jakarta untuk menghadiri pelantikan presiden dan wakil presiden terpilih, Jokowi-JK. Kerry juga disebut akan meminta bantuan negara-negara Asia Tenggara dalam upaya AS melawan militan ISIS.\r\n\r\nDalam kunjungan sehari di Jakarta, Kerry akan menghadiri pelantikan Jokowi-JK yang akan digelar pagi ini. Namun selain itu, Kerry juga dijadwalkan menggelar pertemuan bilateral dengan Jokowi, juga dengan Perdana Menteri Malaysia dan Singapura, lalu Sultan Brunei, Perdana Menteri Australia dan Menteri Luar Negeri Filipina.\r\n\r\nDemikian disampaikan oleh pejabat senior Departemen Luar Negeri AS kepada wartawan dalam penerbangan Kerry ke Jakarta, seperti dilansir Reuters, Senin (20/10/2014).\r\n\r\nMenurut pejabat senior yang enggan disebut namanya tersebut, pertemuan bilateral itu akan membahas sejumlah isu, mulai dari sengketa wilayah di Laut China Selatan, perjuangan melawan wabah Ebola dan perjanjian Kemitraan Perdagangan Trans-Pasifik yang masih dalam pembahasan.\r\n\r\nNamun isu prioritasnya, lanjut pejabat senior tersebut, ialah mencari lebih banyak bantuan dan dukungan dalam melawan ISIS di Suriah dan Irak.\r\n\r\nPembahasan antara kepala negara dan pejabat penting tersebut antara lain akan menyinggung upaya penangkalan rekrutmen anggota ISIS dari negara-negara Asia Tenggara, mencegah kembalinya pelaku jihad garis keras di wilayah tersebut, serta memblokir pendanaan bagi militan keji tersebut.\r\n\r\n"Menlu akan berbicara lewat wilayah yang kami yakini dan kami harap masing-masing negara bisa berbuat lebih banyak," ucap pejabat senior tersebut.', 'Jakarta - Menteri Luar Negeri (Menlu) Amerika Serikat John Kerry tiba di Jakarta untuk menghadiri pelantikan presiden dan wakil presiden terpilih, Jokowi-JK. Kerry juga disebut akan meminta bantuan negara-negara Asia Tenggara dalam upaya AS melawan militan ISIS.\r\n\r\nDalam kunjungan sehari di Jakarta, Kerry akan menghadiri pelantikan Jokowi-JK yang akan digelar pagi ini. Namun selain itu, Kerry juga dijadwalkan menggelar pertemuan bilateral dengan Jokowi, juga dengan Perdana Menteri Malaysia dan Singapura, lalu Sultan Brunei, Perdana Menteri Australia dan Menteri Luar Negeri Filipina.\r\n\r\nDemikian disampaikan oleh pejabat senior Departemen Luar Negeri AS kepada wartawan dalam penerbangan Kerry ke Jakarta, seperti dilansir Reuters, Senin (20/10/2014).\r\n\r\nMenurut pejabat senior yang enggan disebut namanya tersebut, pertemuan bilateral itu akan membahas sejumlah isu, mulai dari sengketa wilayah di Laut China Selatan, perjuangan melawan wabah Ebola dan perjanjian Kemitraan Perdagangan Trans-Pasifik yang masih dalam pembahasan.\r\n\r\nNamun isu prioritasnya, lanjut pejabat senior tersebut, ialah mencari lebih banyak bantuan dan dukungan dalam melawan ISIS di Suriah dan Irak.\r\n\r\nPembahasan antara kepala negara dan pejabat penting tersebut antara lain akan menyinggung upaya penangkalan rekrutmen anggota ISIS dari negara-negara Asia Tenggara, mencegah kembalinya pelaku jihad garis keras di wilayah tersebut, serta memblokir pendanaan bagi militan keji tersebut.\r\n\r\n"Menlu akan berbicara lewat wilayah yang kami yakini dan kami harap masing-masing negara bisa berbuat lebih banyak," ucap pejabat senior tersebut.', '2014-10-25 21:16:57'),
	(2, 'Eks Tokoh Pendukung ISIS Dirikan Lembaga Riset', 'Eks Tokoh Pendukung ISIS Dirikan Lembaga Riset', '<p>Muchus Budi R. - detikNews</p>\r\n\r\n<p>Solo - Ketua Forum Pendukung Daulah Islamiyah (FPDI), Amir Mahmud, mendirikan sebuah lembaga riset di Solo. Doktor bidang studi Islam tersebut menegaskan lembaga tersebut akan bekerja profesional melakukan berbagai kajian tentang keislaman, peradaban dan budaya. Dia juga mengatakan lembaganya itu tak terkait dengan kelompok manapun dan bukan kedok perekrutan. Launching lembaga riset yang dinamai Amir Institute tersebut dilakukan di Solo, Sabtu (25/10/2014). Lembaga tersebut mengedepankan jargon &#39;menjunjung tinggi syariat menuju peradaban Islam&#39;. Dalam penjelasannya, goal tentang peradaban adalah obsesi besar yang memang telah dia pikirkan dan perjuangkan sejak lama. &quot;Secara kebetulan saja Presiden yang terpilih saat ini mengajukann konsep revolusi mental yang pada dasarnyaa itu juga sebuah konsep pembenahan peradaban. Kami tidak tahu dasar dan acuan apa yang akan dipakai oleh Presiden Jokowi dalam merealisasikan konsep besarnya itu. Kami sama sekali tak terkait? dengan itu. Memang secara kebetulan saja munculnya hampir bersamaan,&quot; ujarnya kepada wartawan di Solo. Meskipun demikian Amir menegaskan lembaga yang dikelolanya akan ikut mengontrol jalannya revolusi mental yang dicanangkan oleh Jokowi. Jika program-programnya sesuai harapan dan tidak meminggirkan aspirasi umat Islam sebagai mayoritas warga bangsa maka pihaknya? akan memberi dukungan. Namun jika yang terjadi sebaliknya maka Amir Institute akan memberikan kritik yang tegas. &quot;Pisau paling tajam dari lembaga riset adalah karya-karya analisis yang akan kami dirilis terbuka agar menjadi perhatian bersama dan pemerintah menyadari tentang kekeliruannya itu,&quot; lanjutnya. ?Lebih lanjut, Amir juga menegaskan lembaganya tersebut tidak ada kaitan dengan kelompok-kelompok yang terlibat konflik di Timur Tengah. Karena itu Amir Institute bukan kedok bagi perekrutan sumber daya manusia dari Indonesia untuk dikirim ke kawasan konflik di Timur Tengah. Namun demikian Amir menegaskan mempersilakan jika ada organisasi lain melakukan pengiriman itu, dengan dalih tidak ingin mencampuri kecenderungan pemikiran organisasi lain dalam menyikapi konflik yang terjadi. Nama Amir Mahmud mengemuka di pemberitaan nasional pada bulan Juli hingga Agustus lalu karena inisiatifnya bersama Afif Abdul Majid ?mendirikan FPDI di Solo. Forum ini menyatakaan dukungan kepada ISIS dan bahkan melakukan baiat kepada para pendukungnya. Namun belakangan Amir yang juga kombaatan Afghanistan tersebut mengatakan dukungannya itu hanya merupakan wacana dan tidak pernah ada tindakan konkret melakukan aksi atas nama ISIS di Indonesia. Belakangan Afif Abdul Majid ditangkap Densus 88/Anti-Teror Mabes Polri dengan sangkaan terlibat dalam pendanaan kasus pelatihan militer di Aceh dan? karena aktifitasnya menggalang dukungan untuk gerakan ISIS. Namun Amir Mahmud tetap bebas dan aktifitasnya hingga kini tidak terpengaruh oleh kegiatannya di FPDI itu.</p>\r\n\r\n<p>(mbr/fjr)</p>\r\n', '<p>Muchus Budi R. - detikNews</p>\r\n\r\n<p>Solo - Ketua Forum Pendukung Daulah Islamiyah (FPDI), Amir Mahmud, mendirikan sebuah lembaga riset di Solo. Doktor bidang studi Islam tersebut menegaskan lembaga tersebut akan bekerja profesional melakukan berbagai kajian tentang keislaman, peradaban dan budaya. Dia juga mengatakan lembaganya itu tak terkait dengan kelompok manapun dan bukan kedok perekrutan. Launching lembaga riset yang dinamai Amir Institute tersebut dilakukan di Solo, Sabtu (25/10/2014). Lembaga tersebut mengedepankan jargon &#39;menjunjung tinggi syariat menuju peradaban Islam&#39;. Dalam penjelasannya, goal tentang peradaban adalah obsesi besar yang memang telah dia pikirkan dan perjuangkan sejak lama. &quot;Secara kebetulan saja Presiden yang terpilih saat ini mengajukann konsep revolusi mental yang pada dasarnyaa itu juga sebuah konsep pembenahan peradaban. Kami tidak tahu dasar dan acuan apa yang akan dipakai oleh Presiden Jokowi dalam merealisasikan konsep besarnya itu. Kami sama sekali tak terkait? dengan itu. Memang secara kebetulan saja munculnya hampir bersamaan,&quot; ujarnya kepada wartawan di Solo. Meskipun demikian Amir menegaskan lembaga yang dikelolanya akan ikut mengontrol jalannya revolusi mental yang dicanangkan oleh Jokowi. Jika program-programnya sesuai harapan dan tidak meminggirkan aspirasi umat Islam sebagai mayoritas warga bangsa maka pihaknya? akan memberi dukungan. Namun jika yang terjadi sebaliknya maka Amir Institute akan memberikan kritik yang tegas. &quot;Pisau paling tajam dari lembaga riset adalah karya-karya analisis yang akan kami dirilis terbuka agar menjadi perhatian bersama dan pemerintah menyadari tentang kekeliruannya itu,&quot; lanjutnya. ?Lebih lanjut, Amir juga menegaskan lembaganya tersebut tidak ada kaitan dengan kelompok-kelompok yang terlibat konflik di Timur Tengah. Karena itu Amir Institute bukan kedok bagi perekrutan sumber daya manusia dari Indonesia untuk dikirim ke kawasan konflik di Timur Tengah. Namun demikian Amir menegaskan mempersilakan jika ada organisasi lain melakukan pengiriman itu, dengan dalih tidak ingin mencampuri kecenderungan pemikiran organisasi lain dalam menyikapi konflik yang terjadi. Nama Amir Mahmud mengemuka di pemberitaan nasional pada bulan Juli hingga Agustus lalu karena inisiatifnya bersama Afif Abdul Majid ?mendirikan FPDI di Solo. Forum ini menyatakaan dukungan kepada ISIS dan bahkan melakukan baiat kepada para pendukungnya. Namun belakangan Amir yang juga kombaatan Afghanistan tersebut mengatakan dukungannya itu hanya merupakan wacana dan tidak pernah ada tindakan konkret melakukan aksi atas nama ISIS di Indonesia. Belakangan Afif Abdul Majid ditangkap Densus 88/Anti-Teror Mabes Polri dengan sangkaan terlibat dalam pendanaan kasus pelatihan militer di Aceh dan? karena aktifitasnya menggalang dukungan untuk gerakan ISIS. Namun Amir Mahmud tetap bebas dan aktifitasnya hingga kini tidak terpengaruh oleh kegiatannya di FPDI itu.</p>\r\n\r\n<p>(mbr/fjr)</p>\r\n', '2014-10-26 00:09:17'),
	(3, 'Selasa Besok Jokowi akan Sibuk Bertemu Para Kepala Negara', 'Selasa Besok Jokowi akan Sibuk Bertemu Para Kepala Negara', '<p>Jakarta - Dalam hitungan menit, Jokowi akan dilantik sebagai presiden RI ketujuh. Tak lama dilantik, beberapa kepala negara sudah antre untuk bertemu. &quot;Besok ada pertemuan-pertemuan dengan perdana menteri dan kepala negara. Dan panggil panglima,&quot; ujar Jokowi di rumah dinas Gubernur DKI, Jalan Taman Suropati Nomor 7, Menteng, Jakarta Pusat, Senin (20/10/2014) pukul 08.00 WIB. Saat ditanya pertemuan dengan para kepala negara akan membahas apa saja, Jokowi menyahut, &quot;Besok saja diikuti&quot;. Yang jelas, baginya, sumpah jabatan presiden adalah beban yang berat. &quot;Itu sebuah beban berat yang harus kita terima, dan itu merupakan sebuah tanggung jawab besar untuk menyelesaikan persoalan yang ada di negara kita,&quot; tutur dia. Sekitar 18 tamu negara yang merupakan Kepala Negara/Kepala Pemerintahan atau utusan negara akan hadir di acara pelantikan Jokowi-JK. Mereka adalah Menlu AS John Kerry, Menlu Inggris Phillip Hammond, Perdana Menteri Australia Tony Abbot, Perdana Menteri Malaysia Najib Rajak, dan Perdana Menteri Singapura Lee Hsien Loong. Selain itu juga Sultan Brunei Darussalam Hassanal Bolkiah, Presiden Timor Leste Xanana Gusmao, mantan Perdana Menteri Jepang Yasuo Fukada, Gubernur Jenderal Papua Nugini Michael Ogio, dan Menteri Industri dan Perdagangan Rusia Denis Manturov. Beberapa utusan tamu kenegaraan lainnya juga rencananya akan hadir namun masih belum dipastikan siapa yang akan dikirim untuk datan yakni Vietnam, China, Thailand, dan Korea Selatan. (nwk/nrl)</p>\r\n', '<p>Jakarta - Dalam hitungan menit, Jokowi akan dilantik sebagai presiden RI ketujuh. Tak lama dilantik, beberapa kepala negara sudah antre untuk bertemu. &quot;Besok ada pertemuan-pertemuan dengan perdana menteri dan kepala negara. Dan panggil panglima,&quot; ujar Jokowi di rumah dinas Gubernur DKI, Jalan Taman Suropati Nomor 7, Menteng, Jakarta Pusat, Senin (20/10/2014) pukul 08.00 WIB. Saat ditanya pertemuan dengan para kepala negara akan membahas apa saja, Jokowi menyahut, &quot;Besok saja diikuti&quot;. Yang jelas, baginya, sumpah jabatan presiden adalah beban yang berat. &quot;Itu sebuah beban berat yang harus kita terima, dan itu merupakan sebuah tanggung jawab besar untuk menyelesaikan persoalan yang ada di negara kita,&quot; tutur dia. Sekitar 18 tamu negara yang merupakan Kepala Negara/Kepala Pemerintahan atau utusan negara akan hadir di acara pelantikan Jokowi-JK. Mereka adalah Menlu AS John Kerry, Menlu Inggris Phillip Hammond, Perdana Menteri Australia Tony Abbot, Perdana Menteri Malaysia Najib Rajak, dan Perdana Menteri Singapura Lee Hsien Loong. Selain itu juga Sultan Brunei Darussalam Hassanal Bolkiah, Presiden Timor Leste Xanana Gusmao, mantan Perdana Menteri Jepang Yasuo Fukada, Gubernur Jenderal Papua Nugini Michael Ogio, dan Menteri Industri dan Perdagangan Rusia Denis Manturov. Beberapa utusan tamu kenegaraan lainnya juga rencananya akan hadir namun masih belum dipastikan siapa yang akan dikirim untuk datan yakni Vietnam, China, Thailand, dan Korea Selatan. (nwk/nrl)</p>\r\n', '2014-10-26 00:11:06');
/*!40000 ALTER TABLE `pr_berita` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_berita_gambar
DROP TABLE IF EXISTS `pr_berita_gambar`;
CREATE TABLE IF NOT EXISTS `pr_berita_gambar` (
  `id_berita_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_berita` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_berita_gambar`),
  UNIQUE KEY `gambar` (`gambar`),
  KEY `FK_pr_berita_gambar_pr_berita` (`id_berita`),
  CONSTRAINT `FK_pr_berita_gambar_pr_berita` FOREIGN KEY (`id_berita`) REFERENCES `pr_berita` (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_berita_gambar: ~2 rows (approximately)
/*!40000 ALTER TABLE `pr_berita_gambar` DISABLE KEYS */;
INSERT INTO `pr_berita_gambar` (`id_berita_gambar`, `id_berita`, `gambar`) VALUES
	(1, 3, 'free-wallpaper-920.jpg'),
	(2, 3, 'Love-Island-Wallpaper-HD.jpg');
/*!40000 ALTER TABLE `pr_berita_gambar` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_berita_tag_trans: ~4 rows (approximately)
/*!40000 ALTER TABLE `pr_berita_tag_trans` DISABLE KEYS */;
INSERT INTO `pr_berita_tag_trans` (`id_berita_tag_trans`, `id_berita`, `id_berita_tag`) VALUES
	(13, 1, 1),
	(14, 2, 1),
	(17, 3, 2),
	(18, 3, 1);
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


-- Dumping structure for table tourism.pr_icon
DROP TABLE IF EXISTS `pr_icon`;
CREATE TABLE IF NOT EXISTS `pr_icon` (
  `id_icon` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id_icon`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_icon: ~3 rows (approximately)
/*!40000 ALTER TABLE `pr_icon` DISABLE KEYS */;
INSERT INTO `pr_icon` (`id_icon`, `icon`) VALUES
	(1, 'airport.png'),
	(2, 'ferry.png'),
	(3, 'fourbyfour.png');
/*!40000 ALTER TABLE `pr_icon` ENABLE KEYS */;


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
  `icon` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_sarana_prasarana`),
  UNIQUE KEY `kategori_sarana_prasarana_ina` (`kategori_sarana_prasarana_ina`),
  UNIQUE KEY `kategori_sarana_prasarana_eng` (`kategori_sarana_prasarana_eng`),
  KEY `FK_pr_kategori_sarana_prasarana_pr_icon` (`icon`),
  CONSTRAINT `FK_pr_kategori_sarana_prasarana_pr_icon` FOREIGN KEY (`icon`) REFERENCES `pr_icon` (`id_icon`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_kategori_sarana_prasarana: ~5 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata: ~3 rows (approximately)
/*!40000 ALTER TABLE `pr_lokasi_wisata` DISABLE KEYS */;
INSERT INTO `pr_lokasi_wisata` (`id_lokasi_wisata`, `id_lokasi_wisata_kategori`, `parent_id`, `nama_lokasi_wisata_ina`, `nama_lokasi_wisata_eng`, `deskripsi_ina`, `deskripsi_eng`, `id_peta`) VALUES
	(1, 1, 0, 'Wakatobi', 'Wakatobi', '<p><strong>Kabupaten Wakatobi</strong> adalah salah satu <a href="http://id.wikipedia.org/wiki/Kabupaten" rel="mw:WikiLink" title="Kabupaten">kabupaten</a> di <a href="http://id.wikipedia.org/wiki/Sulawesi_Tenggara" rel="mw:WikiLink" title="Sulawesi Tenggara">Provinsi Sulawesi Tenggara</a>, <a href="http://id.wikipedia.org/wiki/Indonesia" rel="mw:WikiLink" title="Indonesia">Indonesia</a>. <a href="http://id.wikipedia.org/wiki/Ibu_kota" rel="mw:WikiLink" title="Ibu kota">Ibu kota</a> kabupaten ini terletak di <a href="http://id.wikipedia.org/wiki/Wangi-Wangi,_Wakatobi" rel="mw:WikiLink" title="Wangi-Wangi, Wakatobi">Wangi-Wangi</a>, dibentuk berdasarkan Undang-undang Republik Indonesia Nomor 29 Tahun 2003, tanggal <a href="http://id.wikipedia.org/wiki/18_Desember" rel="mw:WikiLink" title="18 Desember">18 Desember</a> <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a>. Luas wilayahnya adalah 823 km&sup2; dan pada tahun <a href="http://id.wikipedia.org/wiki/2011" rel="mw:WikiLink" title="2011">2011</a> berpenduduk 94.846 jiwa.</p>\r\n\r\n<p><strong><a href="http://id.wikipedia.org/wiki/Taman_Nasional_Kepulauan_Wakatobi" rel="mw:WikiLink" title="Taman Nasional Kepulauan Wakatobi">Wakatobi</a></strong> juga merupakan nama kawasan taman nasional yang ditetapkan pada tahun 1996, dengan luas keseluruhan 1,39 juta <a href="http://id.wikipedia.org/wiki/Hektare" rel="mw:WikiLink" title="Hektare">hektare</a>, menyangkut <a href="http://id.wikipedia.org/wiki/Keanekaragaman_hayati" rel="mw:WikiLink" title="Keanekaragaman hayati">keanekaragaman hayati</a> laut, skala dan kondisi karang yang menempati salah satu posisi prioritas tertinggi dari konservasi laut di Indonesia.</p>\r\n\r\n<h2>Sejarah daerah</h2>\r\n\r\n<p>Sebelum menjadi daerah otonom wilayah Kabupaten Wakatobi lebih dikenal sebagai <a href="http://id.wikipedia.org/wiki/Kepulauan_Tukang_Besi" rel="mw:WikiLink" title="Kepulauan Tukang Besi">Kepulauan Tukang Besi</a>.</p>\r\n\r\n<h3><a href="http://id.wikipedia.org/wiki/Masa_sebelum_kemerdekaan" rel="mw:WikiLink" title="Masa sebelum kemerdekaan">Masa sebelum kemerdekaan</a></h3>\r\n\r\n<p>Pada masa sebelum kemerdekaan Wakatobi berada di bawah kekuasaan <a href="http://id.wikipedia.org/wiki/Kesultanan_Buton" rel="mw:WikiLink" title="Kesultanan Buton">Kesultanan Buton</a>.</p>\r\n\r\n<h3><a href="http://id.wikipedia.org/wiki/Masa_sesudah_kemerdekaan" rel="mw:WikiLink" title="Masa sesudah kemerdekaan">Masa sesudah kemerdekaan</a></h3>\r\n\r\n<p>Setelah Indonesia Merdeka dan SulawesiTenggara berdiri sebagai satu <a href="http://id.wikipedia.org/wiki/Provinsi" rel="mw:WikiLink" title="Provinsi">provinsi</a>, wilayah Wakatobi hanya berstatus beberapa <a href="http://id.wikipedia.org/wiki/Kecamatan" rel="mw:WikiLink" title="Kecamatan">kecamatan</a> dalam wilayah pemerintahan <a href="http://id.wikipedia.org/wiki/Kabupaten_Buton" rel="mw:WikiLink" title="Kabupaten Buton">Kabupaten Buton</a>.</p>\r\n\r\n<h3><a href="http://id.wikipedia.org/wiki/Masa_reformasi" rel="mw:WikiLink" title="Masa reformasi">Masa reformasi</a></h3>\r\n\r\n<p>Pada tanggal 18 Desember 2003 wakatobi &nbsp;resmi ditetapkan sebagai salah satu kabupaten pemekaran di Sulawesi Tenggara yang terbentuk berdasarkan Undang &ndash; Undang&nbsp; Nomor &nbsp;29 tahun 2003 tentang pembentukan <a href="http://id.wikipedia.org/wiki/Kabupaten_Bombana" rel="mw:WikiLink" title="Kabupaten Bombana">Kabupaten Bombana</a>, Kabupaten Wakatobi dan <a href="http://id.wikipedia.org/wiki/Kabupaten_Kolaka_Utara" rel="mw:WikiLink" title="Kabupaten Kolaka Utara">Kabupaten Kolaka Utara</a>.&nbsp;</p>\r\n\r\n<p>Saat pertama kali terbentuk Wakatobi hanya terdiri dari lima kecamatan yaitu <a href="http://id.wikipedia.org/wiki/Kecamatan_Wangi-Wangi" rel="mw:WikiLink" title="Kecamatan Wangi-Wangi">Kecamatan Wangi-Wangi</a>, <a href="http://id.wikipedia.org/wiki/Kecamatan_Wangi_Selatan" rel="mw:WikiLink" title="Kecamatan Wangi Selatan">Kecamatan Wangi Selatan</a>, <a href="http://id.wikipedia.org/wiki/Kecamatan_Kaledupa" rel="mw:WikiLink" title="Kecamatan Kaledupa">Kecamatan Kaledupa</a>, <a href="http://id.wikipedia.org/wiki/Kecamatan_Tomia" rel="mw:WikiLink" title="Kecamatan Tomia">Kecamatan Tomia</a> dan <a href="http://id.wikipedia.org/wiki/Kecamatan_Binongko" rel="mw:WikiLink" title="Kecamatan Binongko">Kecamatan Binongko</a>.</p>\r\n\r\n<p>Pada tahun 2005 melalui <a href="http://id.wikipedia.org/wiki/Peraturan_Daerah" rel="mw:WikiLink" title="Peraturan Daerah">Peraturan Daerah</a> Kabupaten Wakatobi Nomor 19 Tahun 2005 dibentuk <a href="http://id.wikipedia.org/wiki/Kecamatan_Kaledupa_Selatan" rel="mw:WikiLink" title="Kecamatan Kaledupa Selatan">Kecamatan Kaledupa Selatan</a> dan melalui Peraturan Daerah Kabupaten Wakatobi Nomor 20 Tahun 2005 dibentuk <a href="http://id.wikipedia.org/wiki/Kecamatan_Tomia_Timur" rel="mw:WikiLink" title="Kecamatan Tomia Timur">Kecamatan Tomia Timur</a>.</p>\r\n\r\n<p>pada tahun 2007 melalui Peraturan Daerah Kabupaten Wakatobi Nomor&nbsp; 41 Tahun 2007 dibentuk <a href="http://id.wikipedia.org/wiki/Kecamatan_Togo_Binongko" rel="mw:WikiLink" title="Kecamatan Togo Binongko">Kecamatan Togo Binongko</a>] sehingga jumlah kecamatan di Kabupaten Wakatobi menjadi 8 <a href="http://id.wikipedia.org/wiki/Kecamatan" rel="mw:WikiLink" title="Kecamatan">kecamatan</a> yang terbagi menjadi 100 desa dan kelurahan (25 <a href="http://id.wikipedia.org/wiki/Kelurahan" rel="mw:WikiLink" title="Kelurahan">kelurahan</a> dan 75 <a href="http://id.wikipedia.org/wiki/Desa" rel="mw:WikiLink" title="Desa">desa</a>).</p>\r\n\r\n<h3>Pemerintahan Diawal Pembentukan</h3>\r\n\r\n<p>Pemerintahan Kabupaten Wakatobi sebagai daerah otonom secara resmi ditandai dengan pelantikan Syarifudin Safaa, SH, MM sebagai pejabat Bupati Wakatobi pada tanggal 19 Januari 2004 sampai dengan tanggal 19 Januari 2006. Kemudian dilanjutkan oleh H. LM. Mahufi Madra, SH, MH sebagai&nbsp; pejabat bupati selanjutnya&nbsp; sejak tanggal 19 Januari 2006 sampai dengan tanggal 28 Juni 2006.</p>\r\n\r\n<h3>Pemerintahan hasil pemilu kepala daerah</h3>\r\n\r\n<p>Berdasarkan hasil pemilihan kepala daerah secara langsung maka pada tanggal 28 Juni 2006 Bupati dan Wakil Bupati Wakatobi yang terpilih yaitu Ir. Hugua dan Ediarto Rusmin, BAE dilantik oleh <a href="http://id.wikipedia.org/wiki/Gubernur_Sulawesi_Tenggara" rel="mw:WikiLink" title="Gubernur Sulawesi Tenggara">Gubernur Sulawesi Tenggara</a> Ali Mazi, SH atas nama <a href="http://id.wikipedia.org/wiki/Menteri" rel="mw:WikiLink" title="Menteri">Menteri</a> Dalam Negeri berdasarkan Surat Keputusan <a href="http://id.wikipedia.org/wiki/Menteri_Dalam_Negeri" rel="mw:WikiLink" title="Menteri Dalam Negeri">Menteri Dalam Negeri</a> Nomor 132.74-314 tanggal 13 Juni 2006 tentang pengesahan pengangkatan Bupati Wakatobi Ir. Hugua dan Surat Keputusan Menteri Dalam Negeri&nbsp; Nomor&nbsp;: 132.74-315 tanggal 13 Juni 2006 tentang pengesahan pengangkatan Wakil Bupati Wakatobi Ediarto Rusmin, BAE untuk masa bhakti 2006-2011.</p>\r\n\r\n<p>Saaat ini kepemimpinan daerah di Kabupaten Wakatobi dijabat oleh pasangan bupati dan wakil bupati Ir. Hugua dan H. Arhawi, SE sejak dilantik oleh Gubernur Sulawesi Tenggara H. Nur Alam, SE pada tanggal 28 Juni 2011 atas nama Menteri Dalam Negeri berdasarkan Surat <a href="http://id.wikipedia.org/wiki/Keputusan_Menteri" rel="mw:WikiLink" title="Keputusan Menteri">Keputusan Menteri</a> Dalam Negeri Nomor&nbsp;: 132.74-403, tanggal 30 Mei 2011 tentang pengesahan pengangkatan Bupati Wakatobi Ir. Hugua dan Wakil Bupati Wakatobi H. Arhawi, SE untuk masa bhakti 2011-2016.</p>\r\n\r\n<h2>Keadaan wilayah</h2>\r\n\r\n<h3>Letak</h3>\r\n\r\n<p><a href="http://id.wikipedia.org/wiki/Kabupaten_Wakatobi" rel="mw:WikiLink" title="Kabupaten Wakatobi">Kabupaten Wakatobi</a> berbentuk kepulauan dan terletak di tenggara <a href="http://id.wikipedia.org/wiki/Sulawesi" rel="mw:WikiLink" title="Sulawesi">Pulau Sulawesi</a>. Secara <a href="http://id.wikipedia.org/wiki/Astronomi" rel="mw:WikiLink" title="Astronomi">astronomis</a>, Kabupaten Wakatobi berada di selatan garis <a href="http://id.wikipedia.org/wiki/Khatulistiwa" rel="mw:WikiLink" title="Khatulistiwa">khatulistiwa</a>, membujur dari 5,00&ordm; sampai 6,25&ordm; <a href="http://id.wikipedia.org/wiki/Garis_lintang" rel="mw:WikiLink" title="Garis lintang">Lintang Selatan</a> (sepanjang &plusmn; 160 km) dan melintang dari 123,34&ordm; sampai 124.64&ordm; <a href="http://id.wikipedia.org/wiki/Garis_bujur" rel="mw:WikiLink" title="Garis bujur">Bujur Timur</a> (sepanjang &plusmn; 120 km).</p>\r\n\r\n<h3>Luas</h3>\r\n\r\n<p>Luas wilayah daratan Kabupaten Wakatobi adalah &plusmn; 823 km&sup2;, sedangkan wilayah perairan lautnya diperkirakan seluas &plusmn; 18.377,31 km&sup2;.</p>\r\n\r\n<h3>Batas wilayah</h3>\r\n\r\n<table class="wikitable">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href="http://id.wikipedia.org/wiki/Utara" rel="mw:WikiLink" title="Utara">Utara</a></td>\r\n			<td><a href="http://id.wikipedia.org/wiki/Kabupaten_Buton" rel="mw:WikiLink" title="Kabupaten Buton">Kabupaten Buton</a> dan <a href="http://id.wikipedia.org/wiki/Kabupaten_Buton_Utara" rel="mw:WikiLink" title="Kabupaten Buton Utara">Kabupaten Buton Utara</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href="http://id.wikipedia.org/wiki/Selatan" rel="mw:WikiLink" title="Selatan">Selatan</a></td>\r\n			<td><a href="http://id.wikipedia.org/wiki/Laut_Flores" rel="mw:WikiLink" title="Laut Flores">Laut Flores</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href="http://id.wikipedia.org/wiki/Barat" rel="mw:WikiLink" title="Barat">Barat</a></td>\r\n			<td><a href="http://id.wikipedia.org/wiki/Kabupaten_Buton" rel="mw:WikiLink" title="Kabupaten Buton">Kabupaten Buton</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href="http://id.wikipedia.org/wiki/Timur" rel="mw:WikiLink" title="Timur">Timur</a></td>\r\n			<td><a href="http://id.wikipedia.org/wiki/Laut_Banda" rel="mw:WikiLink" title="Laut Banda">Laut Banda</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Iklim</h3>\r\n\r\n<p>Kabupaten Wakatobi sama seperti daerah&ndash;daerah lain di <a href="http://id.wikipedia.org/wiki/Indonesia" rel="mw:WikiLink" title="Indonesia">Indonesia</a> mengalami dua <a href="http://id.wikipedia.org/wiki/Musim" rel="mw:WikiLink" title="Musim">musim</a>, yakni musim <a href="http://id.wikipedia.org/wiki/Hujan" rel="mw:WikiLink" title="Hujan">hujan</a> dan musim <a href="http://id.wikipedia.org/wiki/Kemarau" rel="mw:WikiLink" title="Kemarau">kemarau</a>. Wilayah daratan Kabupaten Wakatobi umumnya memiliki ketinggian di bawah 1.000 meter dari permukaan laut dan berada di sekitar daerah <a href="http://id.wikipedia.org/wiki/Khatulistiwa" rel="mw:WikiLink" title="Khatulistiwa">khatulistiwa</a>, sehingga daerah ini beriklim <a href="http://id.wikipedia.org/wiki/Tropika" rel="mw:WikiLink" title="Tropika">tropika</a>.</p>\r\n\r\n<h2>Demografi Daerah</h2>\r\n\r\n<h3>Jumlah penduduk</h3>\r\n\r\n<p>Jumlah <a href="http://id.wikipedia.org/wiki/Penduduk" rel="mw:WikiLink" title="Penduduk">penduduk</a> menurut hasil Sensus Penduduk tahun <a href="http://id.wikipedia.org/wiki/2000" rel="mw:WikiLink" title="2000">2000</a> berjumlah 87.793 jiwa yang terdiri dari laki-laki 42.620 jiwa dan perempuan 45.173 jiwa. Tiga tahun kemudian, yaitu pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> diadakan pendaftaran pemilih dan pendataan penduduk berkelanjutan yang disingkat P4B secara sensus dengan hasil jumlah penduduk sebanyak 91.497 jiwa atau selama tiga tahun naik sejumlah 3.704 jiwa atau sekitar 1,41 persen per tahun.</p>\r\n\r\n<h3>Sebaran penduduk</h3>\r\n\r\n<p>Jumlah penduduk berada di <a href="http://id.wikipedia.org/wiki/Wangi-Wangi_Selatan,_Wakatobi" rel="mw:WikiLink" title="Wangi-Wangi Selatan, Wakatobi">Kecamatan Wangi-Wangi Selatan</a>, 23,37% berada di <a href="http://id.wikipedia.org/wiki/Wangi-Wangi,_Wakatobi" rel="mw:WikiLink" title="Wangi-Wangi, Wakatobi">Kecamatan Wangi-Wangi</a>, 19,05% berada di <a href="http://id.wikipedia.org/wiki/Kaledupa,_Wakatobi" rel="mw:WikiLink" title="Kaledupa, Wakatobi">Kecamatan Kaledupa</a>, 17,86% berada di <a href="http://id.wikipedia.org/wiki/Tomia,_Wakatobi" rel="mw:WikiLink" title="Tomia, Wakatobi">Kecamatan Tomia</a> dan 15,01% berada di <a href="http://id.wikipedia.org/wiki/Binongko,_Wakatobi" rel="mw:WikiLink" title="Binongko, Wakatobi">Kecamatan Binongko</a>.</p>\r\n\r\n<p>Jumlah <a href="http://id.wikipedia.org/wiki/Penduduk" rel="mw:WikiLink" title="Penduduk">penduduk</a> bila dibandingkan dengan <a href="http://id.wikipedia.org/wiki/Luas" rel="mw:WikiLink" title="Luas">luas</a> <a href="http://id.wikipedia.org/wiki/Wilayah" rel="mw:WikiLink" title="Wilayah">wilayah</a>, maka kecamatan yang paling padat penduduknya adalah <a href="http://id.wikipedia.org/wiki/Kaledupa,_Wakatobi" rel="mw:WikiLink" title="Kaledupa, Wakatobi">Kecamatan Kaledupa</a> 166 jiwa/km&sup2;, menyusul <a href="http://id.wikipedia.org/wiki/Tomia,_Wakatobi" rel="mw:WikiLink" title="Tomia, Wakatobi">Kecamatan Tomia</a> 141 jiwa/km&sup2;, kemudian <a href="http://id.wikipedia.org/wiki/Wangi-Wangi_Selatan,_Wakatobi" rel="mw:WikiLink" title="Wangi-Wangi Selatan, Wakatobi">Kecamatan Wangi-Wangi Selatan</a> 109 jiwa/km&sup2;.</p>\r\n\r\n<h3>Struktur umur, jenis kelamin dan suku</h3>\r\n\r\n<p>Keadaan struktur penduduk pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a>, 34,55% atau 31.610 jiwa adalah tergolong usia muda yang berusia 15 tahun ke bawah.</p>\r\n\r\n<p>Rasio jenis kelamin di Kabupaten Wakatobi pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> sebesar 96,12%.</p>\r\n\r\n<p>Terdapat 8 <a href="http://id.wikipedia.org/wiki/Suku" rel="mw:WikiLink" title="Suku">suku</a> bangsa yang mendiami daerah Kabupaten Wakatobi dengan data tahun <a href="http://id.wikipedia.org/wiki/2000" rel="mw:WikiLink" title="2000">2000</a> sebanyak 87.793, suku bangsa yang terbanyak adalah <a href="http://id.wikipedia.org/wiki/Wakatobi" rel="mw:WikiLink" title="Wakatobi">Wakatobi</a> 91,33%, <a href="http://id.wikipedia.org/wiki/Bajau" rel="mw:WikiLink" title="Bajau">Bajau</a> 7,92%, dan suku lainnya yang berjumlah kurang dari 1%.</p>\r\n\r\n<h3>Ketenagakerjaan</h3>\r\n\r\n<p><a href="http://id.wikipedia.org/wiki/Penduduk" rel="mw:WikiLink" title="Penduduk">Penduduk</a> usia <a href="http://id.wikipedia.org/wiki/Kerja" rel="mw:WikiLink" title="Kerja">kerja</a> sebanyak 70.343 jiwa yang terdiri dari laki-laki sebanyak 23.981 jiwa atau 34,09% dan perempuan sebanyak 36,362 jiwa atau 65,91%. Terdapat angkatan kerja 40.395 jiwa terdiri dari yang bekerja 37.678 jiwa atau 93,27% atau 53,56% terhadap penduduk usia kerja dan pengangguran terbuka sebanyak 6,73%. Bukan angkatan kerja sebanyak 29.408 jiwa atau 41,81% dari usia kerja yang terdiri dari sekolah 15.740 jiwa atau 53,52%, mengurus rumah tangga dan lainnya sebesar 13.668 jiwa atau 46,48%.</p>\r\n\r\n<p>Bila dilihat menurut lapangan usaha maka yang paling banyak menyerap tenaga kerja adalah sektor <a href="http://id.wikipedia.org/wiki/Pertanian" rel="mw:WikiLink" title="Pertanian">pertanian</a> dengan jumlah 43,609 jiwa atau 61,99%, kemudian sektor <a href="http://id.wikipedia.org/wiki/Perdagangan" rel="mw:WikiLink" title="Perdagangan">perdagangan</a> 15.635 jiwa atau 17,02%, disusul sektor <a href="http://id.wikipedia.org/wiki/Jasa" rel="mw:WikiLink" title="Jasa">jasa</a>, <a href="http://id.wikipedia.org/wiki/Industri" rel="mw:WikiLink" title="Industri">industri</a> dan <a href="http://id.wikipedia.org/wiki/Transportasi" rel="mw:WikiLink" title="Transportasi">transportasi</a>.</p>\r\n\r\n<h2>Potensi Perekonomian Daerah</h2>\r\n\r\n<h3>Pertanian, perkebunan, dan kehutanan</h3>\r\n\r\n<p>Dari lima jenis <a href="http://id.wikipedia.org/wiki/Tanaman" rel="mw:WikiLink" title="Tanaman">tanaman</a> bahan <a href="http://id.wikipedia.org/wiki/Makanan" rel="mw:WikiLink" title="Makanan">makanan</a> yang diusahakan, tanaman <a href="http://id.wikipedia.org/wiki/Ubi" rel="mw:WikiLink" title="Ubi">ubi</a> kayu merupakan tanaman yang paling tinggi produksinya, dimana Pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> sebesar 40.199 ton, menyusul <a href="http://id.wikipedia.org/wiki/Jagung" rel="mw:WikiLink" title="Jagung">jagung</a> sebesar 1.715 ton, kemudian <a href="http://id.wikipedia.org/wiki/Ubi_jalar" rel="mw:WikiLink" title="Ubi jalar">ubi jalar</a> sebesar 58 ton, sedangkan <a href="http://id.wikipedia.org/wiki/Padi" rel="mw:WikiLink" title="Padi">padi</a> ladang dan <a href="http://id.wikipedia.org/wiki/Kacang" rel="mw:WikiLink" title="Kacang">kacang</a> tanah masing-masing hanya sebesar 8 dan 4 ton.</p>\r\n\r\n<p>Pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> produksi <a href="http://id.wikipedia.org/wiki/Buah-buahan" rel="mw:WikiLink" title="Buah-buahan">buah-buahan</a> yang terbanyak dihasilkan, yaitu <a href="http://id.wikipedia.org/wiki/Mangga" rel="mw:WikiLink" title="Mangga">mangga</a> sebanyak 9.229 kw diikuti <a href="http://id.wikipedia.org/wiki/Pisang" rel="mw:WikiLink" title="Pisang">pisang</a> sebanyak 5.788 kw dan <a href="http://id.wikipedia.org/wiki/Jeruk" rel="mw:WikiLink" title="Jeruk">jeruk</a> sebanyak 4.134 kw. Produksi <a href="http://id.wikipedia.org/wiki/Sayur-sayuran" rel="mw:WikiLink" title="Sayur-sayuran">sayur-sayuran</a> yang terbanyak adalah <a href="http://id.wikipedia.org/wiki/Kacang" rel="mw:WikiLink" title="Kacang">kacang</a> panjang sebanyak 229 kw, menyusul <a href="http://id.wikipedia.org/wiki/Terung" rel="mw:WikiLink" title="Terung">terung</a> sebanyak 210 kw, <a href="http://id.wikipedia.org/wiki/Kangkung" rel="mw:WikiLink" title="Kangkung">kangkung</a> sebanyak 205 kw, <a href="http://id.wikipedia.org/wiki/Bawang_merah" rel="mw:WikiLink" title="Bawang merah">bawang merah</a> sebanyak 160 kw.</p>\r\n\r\n<p>Pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> <a href="http://id.wikipedia.org/wiki/Produksi" rel="mw:WikiLink" title="Produksi">produksi</a> <a href="http://id.wikipedia.org/wiki/Perkebunan" rel="mw:WikiLink" title="Perkebunan">perkebunan</a> rakyat yang terbanyak adalah <a href="http://id.wikipedia.org/wiki/Kelapa" rel="mw:WikiLink" title="Kelapa">kelapa</a> dalam yaitu sebanyak 225 ton, menyusul <a href="http://id.wikipedia.org/wiki/Jambu" rel="mw:WikiLink" title="Jambu">jambu</a> mete 59 ton, <a href="http://id.wikipedia.org/wiki/Kelapa" rel="mw:WikiLink" title="Kelapa">kelapa</a> hibrida 8 ton, kakao 6 ton, kopi 3 ton dan kurang produksinya adalah <a href="http://id.wikipedia.org/wiki/Pala" rel="mw:WikiLink" title="Pala">pala</a> yang hanya sebanyak 0,35 ton.</p>\r\n\r\n<p>Jenis hutan pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> hanyalah <a href="http://id.wikipedia.org/wiki/Hutan" rel="mw:WikiLink" title="Hutan">hutan</a> lindung dengan lahan seluas 11.300 ha.</p>\r\n\r\n<h3>Peternakan dan perikanan</h3>\r\n\r\n<p>Populasi <a href="http://id.wikipedia.org/wiki/Ternak" rel="mw:WikiLink" title="Ternak">ternak</a> besar pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> yang ada hanya <a href="http://id.wikipedia.org/wiki/Sapi" rel="mw:WikiLink" title="Sapi">sapi</a> sebanyak 308 ekor. Bila dibandingkan dengan tahun 2002 jumlah sapi mengalami peningkatan sebesar 60,42%, dimana pada tahun 2002 mencapai 192 ekor dan tahun 2003 meningkat menjadi 308 ekor.</p>\r\n\r\n<p>Populasi <a href="http://id.wikipedia.org/wiki/Ternak" rel="mw:WikiLink" title="Ternak">ternak</a> kecil tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> yang ada hanya <a href="http://id.wikipedia.org/wiki/Kambing" rel="mw:WikiLink" title="Kambing">kambing</a> sebanyak 9.789 ekor. Bila dibandingkan dengan tahun 2002 kambing mengalami penurunan sebesar 5,43% dimana tahun 2002 ada sebanyak 10.351 ekor dan tahun 2003 mencapai 9,789 ekor.</p>\r\n\r\n<p>Produksi perikanan tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> berjumlah 17.985,60 ton yang terdiri dari <a href="http://id.wikipedia.org/wiki/Perikanan" rel="mw:WikiLink" title="Perikanan">perikanan</a> <a href="http://id.wikipedia.org/wiki/Laut" rel="mw:WikiLink" title="Laut">laut</a> 17.453,60 ton dan hasil budidaya laut berupa <a href="http://id.wikipedia.org/wiki/Rumput_laut" rel="mw:WikiLink" title="Rumput laut">rumput laut</a> sebanyak 532 ton.</p>\r\n\r\n<h3>Industri dan energi</h3>\r\n\r\n<p>Hingga tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> belum ada <a href="http://id.wikipedia.org/wiki/Industri" rel="mw:WikiLink" title="Industri">industri</a> besar maupun industri sedang, yang ada baru industri kecil dan kerajinan rumah tangga. Jumlah industri kecil sebanyak 107 unit dengan tenaga kerja sebanyak 514 orang dan industri kerajinan rumah tangga (<em>home industry</em>) sebanyak 1.290 unit dengan tenaga kerja sebanyak 1.863 orang.</p>\r\n\r\n<p>Jumlah pelanggan <a href="http://id.wikipedia.org/wiki/Listrik" rel="mw:WikiLink" title="Listrik">Listrik</a> Negara pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> sebanyak 9.652 dengan daya terpasang sebesar 6.047.905 VA, sedangkan <a href="http://id.wikipedia.org/wiki/Produksi" rel="mw:WikiLink" title="Produksi">produksi</a> listrik ada sebesar 6.278.762 kwh dengan tenaga listrik terjual sebesar 5.367.403 kwh dan nilai penjualan sebesar 2.791.737.755 ribu rupiah.<sup>[<em><a href="http://id.wikipedia.org/wiki/Wikipedia:Kutip_sumber_tulisan" rel="mw:WikiLink" title="Wikipedia:Kutip sumber tulisan">butuh rujukan</a></em>]</sup></p>\r\n\r\n<h3>Perdagangan</h3>\r\n\r\n<p>Untuk tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> total volume komoditi yang diperdagangkan adalah sebesar 233.650,13 ton dengan nilai 28.639.873 ribu rupiah, dimana komoditi <a href="http://id.wikipedia.org/wiki/Kehutanan" rel="mw:WikiLink" title="Kehutanan">kehutanan</a> merupakan komoditi tertinggi yang diperdagangkan, yaitu sebesar 231.529,68 ton dengan nilai sebesar 13.761.355 ribu rupiah, menyusul komoditi hasil <a href="http://id.wikipedia.org/wiki/Pertanian" rel="mw:WikiLink" title="Pertanian">pertanian</a> tanaman pangan sebesar 1.355,29 ton dengan nilai 3.756.470 ribu rupiah, sedangkan yang terendah adalah komoditi <a href="http://id.wikipedia.org/wiki/Peternakan" rel="mw:WikiLink" title="Peternakan">peternakan</a> yang hanya mencapai 3,95 ton dengan nilai 5.928 ribu rupiah, menyusul <a href="http://id.wikipedia.org/wiki/Perkebunan" rel="mw:WikiLink" title="Perkebunan">perkebunan</a> dengan nilai 9,59 ton dengan nilai 1.902.403 ribu rupiah.</p>\r\n\r\n<h2>Potensi Wisata Daerah</h2>\r\n\r\n<h3>WISATA TAMAN NASIONAL</h3>\r\n\r\n<p>Taman Nasional Wakatobi merupakan salah satu dari 50 taman nasoinal di Indonesia, yang terletak di kabupaten Wakatobi, Sulawesi Tenggara. Taman nasional ini ditetapkan pada tahun 1996, dengan total area 1,39 juta ha, menyangkut keanekaragaman hayati laut, skala dan kondisi karang; yang menempati salah satu posisi prioritas tertinggi dari konservasi laut di Indonesia. Kedalaman air di taman nasional ini bervariasi, bagian terdalam mencapai 1.044 meter di bawah permukaan air laut.</p>\r\n\r\n<h3>Taman Nasional Wakatobi, Menyajikan Berupa&nbsp;:</h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Terumbu karang</p>\r\n	</li>\r\n	<li>\r\n	<p>Ikan</p>\r\n	</li>\r\n	<li>\r\n	<p>Satwa lain</p>\r\n	</li>\r\n	<li>\r\n	<p>Keistimewaan, dan</p>\r\n	</li>\r\n	<li>\r\n	<p>Pulau Hoga</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>WISATA SEJARAH</h3>\r\n\r\n<h3>Pulau Wangi- Wangi</h3>\r\n\r\n<p>BENTENG TINDOI</p>\r\n\r\n<p>Benteng Tindoi &nbsp;merupakan salah satu objek wisata budayaberada di Kecamatan Wangi-Wangi, berjarak &plusmn; 5 Km, dapat ditempuh dengan kendaraan roda dua dan roda &nbsp;empat selama &plusmn;15 menit dari pusat kota.</p>\r\n\r\n<p>BENTENG LIYA dan MESJID KERATON LIYA</p>\r\n\r\n<p>Benteng Liya terletak di Desa Liya Togo Kec. Wangi-Wangi Selatan. Benteng Liya terdiri dari empat lapis dengan 12 Lawa (Pintu), 12 lawa tersebut merupakan pintu keluar yang digunakan masyarakat kerajaan untuk berinteraksi dengan masyarakat sekitarnya.</p>\r\n\r\n<p>Di dalam benteng terdapat Masjid Keraton Liya yang berjarak 8 Km atau 15 menit dari Ibukota Kabupaten, dapat ditempuh menggunakan alat transportasi roda dua dan empat.</p>\r\n\r\n<p>BENTENG MANDATI TONGA</p>\r\n\r\n<p>Benteng Mandati Tonga terletak di Desa Mandati Kecamatan Wangi-Wangi Selatan. Benteng tersebut berbentuk persegi panjang dengan luas &nbsp;&plusmn; 1 hektare. Pagar tertinggi benteng sekitar 7 meter terletak di bagian barat dan selatan.</p>\r\n\r\n<p>BENTENG TOGO MOLENGO</p>\r\n\r\n<p>Benteng Togo Molengo terletak di Puncak Gunung Pulau Kapota,&nbsp; dapat ditempuh &plusmn; 20 menit menggunakan perahu tradisional dari Wangi-Wangi, &nbsp;lalu dengan kendaraan roda dua &plusmn;10 menit.</p>\r\n\r\n<p>MERCUSUAR</p>\r\n\r\n<p>Mercusuar ini dibangun 1901 pada masa penjajahan Belanda. Lokasi objek wisata ini ada di Desa Waha Kecamatan Wangi-Wangi, dengan jarak &plusmn; 8 Km atau dari Ibukota Kabupaten dan dapat ditempuh dengan kendaraan roda dua &plusmn; 15 menit.</p>\r\n\r\n<h3>Pulau Keledupa</h3>\r\n\r\n<p>Situs sejarah (Makam Tua dan Benteng)</p>\r\n\r\n<p>MAKAM TUA dan KAMALI Makam Tua dan Kamali berada di Desa Pale&rsquo;a Kecamatan Kaledupa Selatan.</p>\r\n\r\n<p>BENTENG OLLO Dan MESJID TUA Benteng Ollo dan Mesjid Tua merupakan situs sejarah peninggalan kebudayaan masyarakat di Pulau Kaledupa yang hingga kini tetap terjaga dan dilestarikan oleh masyarakat setempat.</p>\r\n\r\n<p>Di dalam Benteng Ollo terdapat Mesjid Tua yang berukuran 6,5 x 7 meter.</p>\r\n\r\n<p>BENTENG LA DONDA Benteng La Donda merupakan salah satu situs sejarah peninggalan kebudayan masyarakat Kaldupa.</p>\r\n\r\n<h3>Pulau Tomia</h3>\r\n\r\n<p>BENTENG PATUA</p>\r\n\r\n<p>Benteng Patua adalah salah satu situs sejarah kebudayaan masyarakat Tomia.</p>\r\n\r\n<p>BENTENG SUO-SUO</p>\r\n\r\n<p>Benteng Suo-Suo berada di Desa Kahianga Kec. Tomia timur, berjarak &plusmn; 3 km dari ibukota kecamatan, dapat ditempuh dengan dari ibukota kecamatan.</p>\r\n\r\n<p>MESJID TUA ONEMAY</p>\r\n\r\n<p>Mesjid Tua Onemay merupakan berada di Kelurahan Onemay Kecamatan Tomia.</p>\r\n\r\n<h3>Pulau Binongko</h3>\r\n\r\n<p>BENTENG PALAHIDU</p>\r\n\r\n<p>&nbsp;Benteng Palahidu merupakan salah satu peninggalan sejarah masyarakat Binongko yang berada di Desa Palahidu Kecamatan Binongko. Benteng Palahidu terletak di atas tebing bagian utara pinggir pantai Pulau Binongko.</p>\r\n\r\n<p>BENTENG WALI</p>\r\n\r\n<p>&nbsp;Benteng Wali adalah salah situs sejarah peninggalan masyarakat Togo Binongko.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>WISATA BUDAYA</h3>\r\n\r\n<h3>Pulau Kaledupa</h3>\r\n\r\n<p>Pulau Kaledupa memiliki pesona budaya yang&nbsp; tetap terjaga dan diletarikan oleh masyarakat setempat.</p>\r\n\r\n<p>Berikut objek wisata budaya yang ada di Pulau Kaledupa.</p>\r\n\r\n<h3>a. Tari Tradisional Kaledupa</h3>\r\n\r\n<p>TARI LARIANGI</p>\r\n\r\n<p>Tari Lariangi merupakan tari tradisional Kecamatan Kaledupa yang lahir pada tahun 1634 dikala Raja Buton yang pertama berkuasa yaitu WA KAKA.</p>\r\n\r\n<p>TARI HEBALIA</p>\r\n\r\n<p>Tari Hebalia merupakan tari tradisional Kecamatan Kaledu pa, diciptakan oleh para dukun pada zaman dahulu,</p>\r\n\r\n<p>TARI SOMBO BUNGKALE</p>\r\n\r\n<p>Tari Sombo Bungkale merupakan tari tradisional Kecamatan Kaledupa Selatan. Tarian ini dilakoni oleh penari gadis cantik sebanyak 12 orang.</p>\r\n\r\n<h3>b. Pesta Adat dan tradisi</h3>\r\n\r\n<p>PESTA ADAT KARIA&rsquo;A</p>\r\n\r\n<p>Pesta adat Karia&rsquo;a merupakan tradisi khas masyarakat Kaledupa. Usungan 15 sampai 20 dalam sekali upacara.</p>\r\n\r\n<p>TRADISI ADAT PENCAK SILAT</p>\r\n\r\n<p>Tradisi pencak silat adalah tradisi adat masyarakat Kaledupa.</p>\r\n\r\n<h3>Pulau Tomia</h3>\r\n\r\n<p>PESTA ADAT SAFARA</p>\r\n\r\n<p>Pesta Adat Safara adalah Pesta adat masyarakat Tomia yang dilakukan pada setiap Bulan Safar.</p>\r\n\r\n<p>TRADISI BOSE &ndash; BOSE</p>\r\n\r\n<p>Tradisi Bose &ndash; Bose adalah tradisi yang dilakukan dengan menghiasi perahu dengan hiasan berwarna-warni, dan dimuati sajian masakan tradisional,&nbsp; seperti Liwo, lalu diarak mengelilingi pantai dari Dermaga Patipelong menuju Dermaga Usuku sampai ke Selat One Mobaa, sambil menabuh gendang. Pesta adat ini dilaksanakan bertujuan agar semua dosa dapat hanyut bersama riaknya air laut.</p>\r\n\r\n<p>TARI SAJO MOANE</p>\r\n\r\n<p>Tari Sajo Moane adalah Tarian Sakral yang dimaikan oleh kaum laki &ndash; laki.</p>\r\n\r\n<p>TARI SARIDE</p>\r\n\r\n<p>Tari Saride merupakan tarian tradisional yang berarti persatuan dan kebersamaan dalam menyelesaikan suatu kegiatan yang menyangkut kepentingan umum.</p>\r\n\r\n<h3>Pulau Binongko</h3>\r\n\r\n<p>Tari Balumpa</p>\r\n\r\n<p>Tari Balumpa adalah salah satu tari tradisional yang berasal dari Pulau Binongko.</p>\r\n\r\n<h2>Sarana Infrastruktur Daerah</h2>\r\n\r\n<h3>Pendidikan</h3>\r\n\r\n<p>Jumlah Sekolah <a href="http://id.wikipedia.org/wiki/Taman_Kanak-kanak" rel="mw:WikiLink" title="Taman Kanak-kanak">Taman Kanak-kanak</a> pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> ada sebanyak 22 unit yang tersebar di lima <a href="http://id.wikipedia.org/wiki/Kecamatan" rel="mw:WikiLink" title="Kecamatan">kecamatan</a>. Sementara itu jumlah <a href="http://id.wikipedia.org/wiki/Guru" rel="mw:WikiLink" title="Guru">guru</a> ada sebanyak 47 orang, sedangkan jumlah murid ada sebanyak 989 orang. Pada Tahun 2003 rasio antara guru terhadap sekolah rata-rata 2 orang, murid terhadap sekolah rata-rata 45 orang, dan murid terhadap guru rata-rata 21 orang.</p>\r\n\r\n<p>Dari jenjang Pendidikan <a href="http://id.wikipedia.org/wiki/Sekolah_Dasar" rel="mw:WikiLink" title="Sekolah Dasar">Sekolah Dasar</a> tercatat jumlah sekolah pada tahun 2003 sebanyak 101 unit. Jumlah <a href="http://id.wikipedia.org/wiki/Guru" rel="mw:WikiLink" title="Guru">guru</a> sebanyak 684 orang, sedangkan jumlah murid sebanyak 14.742 orang. Rasio di tingkat SD pada tahun 2003 antara guru terhadap sekolah tercatat dengan rata-rata 7 orang, murid terhadap sekolah rata-rata 145 orang, dan murid terhadap guru rata-rata 22 orang.</p>\r\n\r\n<p>Pada jenjang pendidikan sekolah lanjutan tingkat pertama (<a href="http://id.wikipedia.org/wiki/SLTP" rel="mw:WikiLink" title="SLTP">SLTP</a>) terdapat 16 unit sekolah pada tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a>, sedangkan jumlah guru dan murid masing-masing ada sebanyak 235 dan 4.287 orang. Sehingga rasio antara guru terhadap sekolah tercatat dengan rata-rata 15 orang, murid terhadap sekolah rata-rata 268 orang, dan murid terhadap guru rata-rata 18 orang.</p>\r\n\r\n<p>Jumlah <a href="http://id.wikipedia.org/wiki/Sekolah_Lanjutan_Tingkat_Atas" rel="mw:WikiLink" title="Sekolah Lanjutan Tingkat Atas">Sekolah Lanjutan Tingkat Atas</a> (SLTA) tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> terdapat 4 unit sekolah. Jumlah guru pada tahun 2003 ada sebanyak 93 orang dan jumlah murid ada sebanyak 2.212 orang. Rasio yang tercatat pada tahun 2003 antara guru terhadap sekolah rata-rata 23 orang, murid terhadap sekolah rata-rata 553 orang, dan murid terhadap guru rata-rata 24 orang.</p>\r\n\r\n<h3>Kesehatan</h3>\r\n\r\n<p>Sampai tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a> di <a href="http://id.wikipedia.org/wiki/Kabupaten_Wakatobi" rel="mw:WikiLink" title="Kabupaten Wakatobi">Kabupaten Wakatobi</a> belum ada <a href="http://id.wikipedia.org/wiki/Rumah_Sakit" rel="mw:WikiLink" title="Rumah Sakit">Rumah Sakit</a> Umum. Terdapat 7 unit <a href="http://id.wikipedia.org/wiki/Puskesmas" rel="mw:WikiLink" title="Puskesmas">Puskesmas</a> keperawatan dan 12 unit Puskesmas Ppembantu, <a href="http://id.wikipedia.org/wiki/Dokter" rel="mw:WikiLink" title="Dokter">Dokter</a> Umum sebanyak 5 orang, SKM sebanyak 2 orang, paramedis sebanyak 85 orang dan pembantu paramedis sebanyak 9 orang.</p>\r\n\r\n<h3>Agama</h3>\r\n\r\n<p>Tempat ibadah menurut agama, terlihat bahwa tahun <a href="http://id.wikipedia.org/wiki/2003" rel="mw:WikiLink" title="2003">2003</a>, <a href="http://id.wikipedia.org/wiki/Masjid" rel="mw:WikiLink" title="Masjid">Masjid</a> sebanyak 112 buah dan Mushollah 22 buah, sementara <a href="http://id.wikipedia.org/wiki/Gereja" rel="mw:WikiLink" title="Gereja">Gereja</a>, <a href="http://id.wikipedia.org/wiki/Pura" rel="mw:WikiLink" title="Pura">Pura</a> dan <a href="http://id.wikipedia.org/wiki/Vihara" rel="mw:WikiLink" title="Vihara">Vihara</a> tidak ada. Ini menandakan bahwa masyarakat Wakatobi memeluk agama Islam.</p>\r\n\r\n<h2>Pemerintah</h2>\r\n\r\n<h3>Masa Bhakti 2011-2016.</h3>\r\n\r\n<p><a href="http://id.wikipedia.org/wiki/Berkas:Bupati_wakatobi.jpg"><img src="//upload.wikimedia.org/wikipedia/id/thumb/e/e9/Bupati_wakatobi.jpg/125px-Bupati_wakatobi.jpg" style="height:195px; width:125px" /></a></p>\r\n\r\n<p>Kabupaten Wakatobi saat ini dipimpin oleh Bupati Ir. <a href="http://id.wikipedia.org/wiki/Hugua" rel="mw:WikiLink" title="Hugua">Hugua</a></p>\r\n\r\n<p><a href="http://id.wikipedia.org/wiki/Berkas:H._ARHAWI,_SE.jpg"><img src="//upload.wikimedia.org/wikipedia/id/8/85/H._ARHAWI%2C_SE.jpg" style="height:124px; width:107px" /></a></p>\r\n\r\n<p>Kabupaten Wakatobi saat ini dipimpin Wakil Bupati H. Arhawi, SE</p>\r\n\r\n<h2>Pendapatan Domestik Bruto (PDRB) Perkapita</h2>\r\n\r\n<h3>Tahun 2003</h3>\r\n\r\n<p>Pendapatan Domestik Regional Bruto (PDRB) Kabupaten Wakatobi berdasarkan harga berlaku pada tahun 2003 sebesar Rp.179.774,04,- juta, sedikit lebih tinggi dibanding tahun sebelumnya, yaitu sebesar Rp. 160.473,67,- juta. Berdasarkan harga berlaku,PDRB per kapita Kabupaten Wakatobi pada tahun 2002 adalah sebesar Rp. 1.833.775,23,- menjadi Rp. 2.026.993,35,- pada tahun 2003 atau naik sebesar 10,54%.</p>\r\n\r\n<h2>Pembagian Administratif</h2>\r\n\r\n<ol>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Binongko,_Wakatobi" rel="mw:WikiLink" title="Binongko, Wakatobi">Kecamatan Binongko</a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Kaledupa,_Wakatobi" rel="mw:WikiLink" title="Kaledupa, Wakatobi">Kecamatan Kaledupa</a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Kaledupa_Selatan,_Wakatobi" rel="mw:WikiLink" title="Kaledupa Selatan, Wakatobi">Kecamatan Kaledupa Selatan</a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Togo_Binongko,_Wakatobi" rel="mw:WikiLink" title="Togo Binongko, Wakatobi">Kecamatan Togo Binongko</a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Tomia,_Wakatobi" rel="mw:WikiLink" title="Tomia, Wakatobi">Kecamatan Tomia</a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Tomia_Timur,_Wakatobi" rel="mw:WikiLink" title="Tomia Timur, Wakatobi">Kecamatan Tomia Timur</a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Wangi-Wangi,_Wakatobi" rel="mw:WikiLink" title="Wangi-Wangi, Wakatobi">Kecamatan Wangi-Wangi</a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="http://id.wikipedia.org/wiki/Wangi-Wangi_Selatan,_Wakatobi" rel="mw:WikiLink" title="Wangi-Wangi Selatan, Wakatobi">Kecamatan Wangi-Wangi Selatan</a></p>\r\n	</li>\r\n</ol>\r\n\r\n<h2>Desa/kelurahan</h2>\r\n\r\n<p>Seluruh kecamatan di Kabupaten Wakatobi dibagi lagi ke dalam 61 desa/kelurahan, tepatnya 45 <a href="http://id.wikipedia.org/wiki/Desa" rel="mw:WikiLink" title="Desa">desa</a> dan 16 <a href="http://id.wikipedia.org/wiki/Kelurahan" rel="mw:WikiLink" title="Kelurahan">kelurahan</a>. Dari 61 desa/kelurahan pada tahun 2003 tersebut, 10 desa telah mencapai desa swasembada (15,63%), 16 desa swakarya (25,00%), dan 38 desa swadaya (59,38%).</p>\r\n\r\n<h2>Dewan Perwakilan Rakyat Daerah</h2>\r\n\r\n<h3>DPR Tahun 2004</h3>\r\n\r\n<p>Komposisi perolehan kursi di <a href="http://id.wikipedia.org/wiki/DPRD" rel="mw:WikiLink" title="DPRD">DPRD</a> Kabupaten Wakatobi hasil Pemilu <a href="http://id.wikipedia.org/wiki/2004" rel="mw:WikiLink" title="2004">2004</a> berdasarkan partai peserta pemilu dan daerah pemilihan, di mana <a href="http://id.wikipedia.org/wiki/Partai_Golkar" rel="mw:WikiLink" title="Partai Golkar">Partai Golkar</a> mendapat kursi terbanyak dengan mendapatkan 4 kursi disusul oleh <a href="http://id.wikipedia.org/wiki/PBB" rel="mw:WikiLink" title="PBB">PBB</a>, <a href="http://id.wikipedia.org/wiki/PPP" rel="mw:WikiLink" title="PPP">PPP</a>, <a href="http://id.wikipedia.org/wiki/PAN" rel="mw:WikiLink" title="PAN">PAN</a>, <a href="http://id.wikipedia.org/wiki/PNBK" rel="mw:WikiLink" title="PNBK">PNBK</a>, <a href="http://id.wikipedia.org/wiki/PBR" rel="mw:WikiLink" title="PBR">PBR</a> dan <a href="http://id.wikipedia.org/wiki/PDIP" rel="mw:WikiLink" title="PDIP">PDIP</a> dengan 2 kursi, selanjutnya <a href="http://id.wikipedia.org/wiki/Partai_Merdeka" rel="mw:WikiLink" title="Partai Merdeka">Partai Merdeka</a>, <a href="http://id.wikipedia.org/wiki/PKB" rel="mw:WikiLink" title="PKB">PKB</a>, <a href="http://id.wikipedia.org/wiki/Partai_Patriot_Pancasila" rel="mw:WikiLink" title="Partai Patriot Pancasila">Partai Patriot Pancasila</a> dan <a href="http://id.wikipedia.org/wiki/Partai_Demokrat" rel="mw:WikiLink" title="Partai Demokrat">Partai Demokrat</a> masing-masing 1 kursi dari 20 kursi di DPRD.</p>\r\n\r\n<h3>Anggota DPRD Tahun 2009-2014&nbsp;:</h3>\r\n\r\n<p>1 MUHAMAD ALI, SP, M.Si (PDIP)</p>\r\n\r\n<p>2 H. LA INDIA, S.Sos (PAN)</p>\r\n\r\n<p>3 H. SAIRUDDIN LA ABA (PNBKI)</p>\r\n\r\n<p>4 DARYONO MOANE, S.Sos (PDIP)</p>\r\n\r\n<p>5 LAODE MAS&#39;UDIN (PDIP)</p>\r\n\r\n<p>6 SUPARDI (PDIP)</p>\r\n\r\n<p>7 H. LA ODE ARIFUDIN, S.Sos (PDIP)</p>\r\n\r\n<p>8 HALIADI&nbsp; HABIRUN (PAN)</p>\r\n\r\n<p>9 H. SUNAIDI (PAN)</p>\r\n\r\n<p>10 HASNUN, S.Sos (PNBKI)</p>\r\n\r\n<p>11 MUH. SYAWAL, ST (PNBKI)</p>\r\n\r\n<p>12 Drs. H. SYAFRUDDIN (Golkar)</p>\r\n\r\n<p>13 Dra. H. SAFIA WUALO (Golkar)</p>\r\n\r\n<p>14 SUTOMO HADI, S.Sos (PBR)</p>\r\n\r\n<p>15 ZAKARIA, SH, MH (PBR)</p>\r\n\r\n<p>16 LA MOANE SABARA, S.Sos (Partai Demokrat)</p>\r\n\r\n<p>17 SUBARDIN BAU, S.Pd, M.Si (Partai Demokrat)</p>\r\n\r\n<p>18 MUSDIN, S.Pd, MM (Partai Persatuan Daerah)</p>\r\n\r\n<p>19 ANDI HASAN, S.Pd (Partai Persatuan Daerah)</p>\r\n\r\n<p>20 Hj. ERNAWATI RASYID (PPDI)</p>\r\n\r\n<p>21 HAERUDIN KONDE, ST (Partai Keadilan)</p>\r\n\r\n<p>22 H. MUNSIR (PKB)</p>\r\n\r\n<p>23 LA KE (Barnas)</p>\r\n\r\n<p>24 HAIRUDIN BUTON, S.Sos (PPNUI</p>\r\n\r\n<p>25 H. SUKIMAN (Hanura)</p>\r\n', '<p><strong>Wakatobi</strong>&nbsp;is the name of an islands and&nbsp;<a class="mw-redirect" href="http://en.wikipedia.org/wiki/Regencies_of_Indonesia" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Regencies of Indonesia">regency</a>&nbsp;located in an area of&nbsp;<a class="mw-redirect" href="http://en.wikipedia.org/wiki/Sulawesi_Tenggara" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Sulawesi Tenggara">Sulawesi Tenggara</a>&nbsp;Province (Southeast Sulawesi),<a href="http://en.wikipedia.org/wiki/Indonesia" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Indonesia">Indonesia</a>. The name Wakatobi is an acronym of the names of the four main islands that form the archipelago:&nbsp;<a href="http://en.wikipedia.org/wiki/Wangi-wangi_Island" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Wangi-wangi Island"><strong>Wa</strong>ngi-wangi Island</a>,&nbsp;<a class="new" href="http://en.wikipedia.org/w/index.php?title=Kaledupa&amp;action=edit&amp;redlink=1" style="text-decoration: none; color: rgb(165, 88, 88); background: none;" title="Kaledupa (page does not exist)"><strong>Ka</strong>ledupa</a>,&nbsp;<a class="new" href="http://en.wikipedia.org/w/index.php?title=Tomia_Island&amp;action=edit&amp;redlink=1" style="text-decoration: none; color: rgb(165, 88, 88); background: none;" title="Tomia Island (page does not exist)"><strong>To</strong>mia</a>, and&nbsp;<a class="new" href="http://en.wikipedia.org/w/index.php?title=Binongko&amp;action=edit&amp;redlink=1" style="text-decoration: none; color: rgb(165, 88, 88); background: none;" title="Binongko (page does not exist)"><strong>Bi</strong>nongko</a>. The group is part of a larger group called the&nbsp;<a href="http://en.wikipedia.org/wiki/Tukangbesi_Islands" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Tukangbesi Islands">Tukangbesi Islands</a>. The Regency capital, Wanci, is located on Wangi-wangi Island. The total land area is 559.54&nbsp;km&sup2;, and the population at the 2010 Census was 92,922.<sup><a href="http://en.wikipedia.org/wiki/Wakatobi_Regency#cite_note-1" style="text-decoration: none; color: rgb(11, 0, 128); white-space: nowrap; background: none;">[1]</a></sup></p>\r\n\r\n<p>The archipelago is located in the biodiverse hotspot known as&nbsp;<a href="http://en.wikipedia.org/wiki/Wallacea" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Wallacea">Wallacea</a>. It is part of the&nbsp;<a href="http://en.wikipedia.org/wiki/Wakatobi_National_Park" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Wakatobi National Park">Wakatobi National Park</a>.</p>\r\n', 0),
	(5, 1, 1, 'Wangi-wangi', 'Wangi-wangi', 'Wangi-wangi adalah', 'Wangi-wangi adalah', NULL),
	(6, 2, 5, 'Pantai Waha', 'Pantai Waha', '<p><strong>Pantai Waha</strong><span style="color:rgb(57, 57, 57); font-family:tahoma,arial,sans-serif; font-size:12px">&nbsp;terletak di&nbsp;</span><strong>Desa Waha</strong><span style="color:rgb(57, 57, 57); font-family:tahoma,arial,sans-serif; font-size:12px">, memiliki panorama menarik dan suasana yang menyenangkan. Anda bisa menyelam di beberapa lokasi yang ada di pantai ini dan jika lebih memilik snorkeling maka tidak perlu kawatir karena Anda pun bisa melakukanya di pantai ini. Bersantai di siang hari sambil menikmati air kelapa mudah yang baru dipetik dari pohonya merupakan kenikmatan tersendiri. Di sore hari sempatkan untuk menantikan keindahan Matahari tenggelam yang datang untuk menyapa.</span></p>\r\n', '<p><strong>Pantai Waha</strong><span style="color:rgb(57, 57, 57); font-family:tahoma,arial,sans-serif; font-size:12px">&nbsp;terletak di&nbsp;</span><strong>Desa Waha</strong><span style="color:rgb(57, 57, 57); font-family:tahoma,arial,sans-serif; font-size:12px">, memiliki panorama menarik dan suasana yang menyenangkan. Anda bisa menyelam di beberapa lokasi yang ada di pantai ini dan jika lebih memilik snorkeling maka tidak perlu kawatir karena Anda pun bisa melakukanya di pantai ini. Bersantai di siang hari sambil menikmati air kelapa mudah yang baru dipetik dari pohonya merupakan kenikmatan tersendiri. Di sore hari sempatkan untuk menantikan keindahan Matahari tenggelam yang datang untuk menyapa.</span></p>\r\n', 6),
	(15, 2, 1, 'asd', 'asdsad', '<p>asdsad</p>\r\n', '<p>asdasdasd</p>\r\n', 5);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata_gambar: ~2 rows (approximately)
/*!40000 ALTER TABLE `pr_lokasi_wisata_gambar` DISABLE KEYS */;
INSERT INTO `pr_lokasi_wisata_gambar` (`id_pr_lokasi_wisata_gambar`, `id_lokasi_wisata`, `gambar`, `deskripsi_ina`, `deskripsi_eng`) VALUES
	(7, 15, 'beach-palms-sandbank-2880x180012.jpg', NULL, NULL),
	(8, 15, 'free-wallpaper-918.jpg', NULL, NULL);
/*!40000 ALTER TABLE `pr_lokasi_wisata_gambar` ENABLE KEYS */;


-- Dumping structure for table tourism.pr_lokasi_wisata_kategori
DROP TABLE IF EXISTS `pr_lokasi_wisata_kategori`;
CREATE TABLE IF NOT EXISTS `pr_lokasi_wisata_kategori` (
  `id_lokasi_wisata_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ina` varchar(255) NOT NULL,
  `kategori_eng` varchar(255) NOT NULL,
  PRIMARY KEY (`id_lokasi_wisata_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata_kategori: ~2 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_lokasi_wisata_tag_sarana: ~5 rows (approximately)
/*!40000 ALTER TABLE `pr_lokasi_wisata_tag_sarana` DISABLE KEYS */;
INSERT INTO `pr_lokasi_wisata_tag_sarana` (`id_pr_lokasi_wisata_tag_sarana`, `id_sarana_prasarana`, `id_lokasi_wisata`) VALUES
	(9, 2, 1),
	(10, 1, 1),
	(11, 3, 6),
	(12, 1, 6),
	(19, 3, 15);
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_route_edges: ~18 rows (approximately)
/*!40000 ALTER TABLE `pr_route_edges` DISABLE KEYS */;
INSERT INTO `pr_route_edges` (`id_edges`, `edge_from`, `edge_to`) VALUES
	(21, 1, 2),
	(22, 2, 1),
	(23, 1, 3),
	(24, 3, 1),
	(25, 1, 4),
	(26, 4, 1),
	(27, 2, 5),
	(28, 5, 2),
	(29, 5, 8),
	(30, 8, 5),
	(31, 3, 7),
	(32, 7, 3),
	(33, 4, 5),
	(34, 5, 4),
	(35, 5, 8),
	(36, 8, 5),
	(37, 8, 7),
	(38, 7, 8);
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
  `waktu_perjalanan` float NOT NULL,
  `estimasi_biaya` int(10) NOT NULL,
  PRIMARY KEY (`id_transportation`),
  KEY `FKpr_route_t494151` (`id_edges`),
  KEY `FK_pr_route_transportation_pr_sarana_prasarana` (`id_sarana_prasarana`),
  CONSTRAINT `FKpr_route_t494151` FOREIGN KEY (`id_edges`) REFERENCES `pr_route_edges` (`id_edges`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pr_route_transportation_pr_sarana_prasarana` FOREIGN KEY (`id_sarana_prasarana`) REFERENCES `pr_sarana_prasarana` (`id_sarana_prasarana`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_route_transportation: ~3 rows (approximately)
/*!40000 ALTER TABLE `pr_route_transportation` DISABLE KEYS */;
INSERT INTO `pr_route_transportation` (`id_transportation`, `id_edges`, `id_sarana_prasarana`, `deskripsi_ina`, `deskripsi_eng`, `waktu_perjalanan`, `estimasi_biaya`) VALUES
	(6, 23, 1, '<p><span style="line-height:1.6">Naik pesawat terbang akan memakan waktu +- 2.5 Jam Perjalanan. Maskapai penerbangan yang tersedia juga cukup banyak antara lain Garuda Indonesia, Lion Air, Sriwijaya Air, dan lain-lain</span></p>\r\n', '<p>Plane will take + - 2.5 Hours journey. These airlines also pretty much available include Garuda Indonesia, Lion Air, Sriwijaya Air, and others</p>\r\n', 2.5, 1500000),
	(7, 25, 1, '<p>Terbang ke Bau-bau akan memakan waktu lebih lama yakni +- 3 Jam. Maskapai Penerbangan yang tersedia masih sedikit yaitu Lion Air.</p>\r\n', '<p>Fly to the Bau-bau will take longer ie + - 3 Hours. Airlines that is available has been a bit of Lion Air.</p>\r\n', 3, 1900000),
	(8, 25, 4, '<p>Pelayaran menggunakan Kapal PELNI akan memakan waktu +- 3 Hari 3 Malam. Perjalanan cukup menyenangkan karena akan singgah di beberapa tempat seperti Surabaya atau Semerang dan Makassar.</p>\r\n', '<p>Sailing aboard the PELNI will take + - 3 Days 3 Nights. The trip is quite fun because it will stop in a few places like Surabaya or Semerang and Makassar.</p>\r\n', 36, 700000);
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
  `icon` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_sarana_prasarana`),
  KEY `FK_pr_sarana_prasarana_pr_kategori_sarana_prasarana` (`id_kategori_sarana_prasarana`),
  KEY `FK_pr_sarana_prasarana_pr_icon` (`icon`),
  CONSTRAINT `FK_pr_sarana_prasarana_pr_icon` FOREIGN KEY (`icon`) REFERENCES `pr_icon` (`id_icon`),
  CONSTRAINT `FK_pr_sarana_prasarana_pr_kategori_sarana_prasarana` FOREIGN KEY (`id_kategori_sarana_prasarana`) REFERENCES `pr_kategori_sarana_prasarana` (`id_kategori_sarana_prasarana`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_sarana_prasarana: ~4 rows (approximately)
/*!40000 ALTER TABLE `pr_sarana_prasarana` DISABLE KEYS */;
INSERT INTO `pr_sarana_prasarana` (`id_sarana_prasarana`, `id_kategori_sarana_prasarana`, `nama_ina`, `nama_eng`, `deskripsi_ina`, `deskripsi_eng`, `url`, `id_peta`, `icon`) VALUES
	(1, 2, 'Pesawat Terbang', 'Aircraft', 'Pesawat Tebang', 'Aircraft', NULL, NULL, 1),
	(2, 4, 'Hotel Wakatobi', 'Wakatobi Hotel', 'Hotel Wakatobi', 'Wakatobi Hotel', NULL, NULL, NULL),
	(3, 5, 'Bandar Udara Matahora', 'Matahora Airport', 'Bandar Udara Matahora adalah bandar udara yang terletak di Pulau Wangi-wangi, Kecamatan Wangi-wangi, Kabupaten Wakatobi, Sulawesi Tenggara. Bandar udara ini memiliki ukuran landasan pacu 2.000 x 30 m. Jarak dari kota Wangi-wangi sekitar 17 km. Sehingga menjadi 13/31 berukuran 2.450 kali 45 ms (8,038 × 148 kaki).\r\n\r\nBandara ini mulai dibangun pada tahun 2007 dengan investasi sebesar 100 miliar rupiah dari pemerintah Sulawesi Tenggara.[1] Pada tanggal 21 Mei 2009, akhirnya bandara ini pun diresmikan oleh Menteri Perhubungan Jusman Syafii Djamal sekaligus untuk meresmikan penerbangan pertama Susi Air dengan jalur Wakatobi-Kendari.[2]. Pada tahun 2011 Pemerintah Kabupaten Wakatobi bekerja sama dengan Kementerian Perhubungan dalam pengembangan sisi udara dan sisi darat Bandar Udara Matahora agar dapat didarati pesawat Boeing 737.', 'Matahora Airport is an airport located in Wangi-wangi Island, Wakatobi, South East Sulawesi, Indonesia.\r\n\r\nThe airport construction began on 2007 with an investment of 100 billions Rupiah from South East Sulawesi province government. The airport was inaugurated on May 22, 2009 by then-Indonesian minister of transportation Jusman Safi\'i Jamal.', NULL, NULL, NULL),
	(4, 3, 'Kapal PELNI', 'Kapal PELNI', '<p>Kapal PELNI</p>\r\n', '<p>Kapal PELNI</p>\r\n', '', 0, 2);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_tanya_kami: ~1 rows (approximately)
/*!40000 ALTER TABLE `pr_tanya_kami` DISABLE KEYS */;
INSERT INTO `pr_tanya_kami` (`id_tanya_kami`, `email`, `pertanyaan`, `jawaban`, `tanggal`) VALUES
	(1, 'selametsubu@yahoo.com', 'Siapa yg buat Website sekeren ini ?', '<p>mamet</p>\r\n', '2014-10-30 15:19:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_testimoni_lokasi_wisata: ~1 rows (approximately)
/*!40000 ALTER TABLE `pr_testimoni_lokasi_wisata` DISABLE KEYS */;
INSERT INTO `pr_testimoni_lokasi_wisata` (`id_testimoni_lokasi_wisata`, `id_lokasi_wisata`, `testimoni`, `tanggal_testimoni`, `publish`) VALUES
	(1, 1, 'Bagus', '2014-10-30 15:18:15', 'Y');
/*!40000 ALTER TABLE `pr_testimoni_lokasi_wisata` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
