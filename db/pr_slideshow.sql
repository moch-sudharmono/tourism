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

-- Dumping structure for table tourism.pr_slideshow
DROP TABLE IF EXISTS `pr_slideshow`;
CREATE TABLE IF NOT EXISTS `pr_slideshow` (
  `id_slideshow` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `keterangan_ina` text,
  `keterangan_eng` text,
  `publish` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id_slideshow`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tourism.pr_slideshow: ~2 rows (approximately)
/*!40000 ALTER TABLE `pr_slideshow` DISABLE KEYS */;
INSERT INTO `pr_slideshow` (`id_slideshow`, `gambar`, `keterangan_ina`, `keterangan_eng`, `publish`) VALUES
	(1, 'Reefs-within-Wakatobi-sanctuary_aerial-view_photo-by-Didi-Lotze.jpg', '<div class="caption lft slide_title_white slide_item_left"\r\n            data-x="30"\r\n            data-y="90"\r\n            data-speed="400"\r\n            data-start="1500"\r\n            data-easing="easeOutExpo">\r\n            Nikmati Keindahan<br><span class="slide_title_white_bold">Wakatobi</span>\r\n          </div>\r\n          <div class="caption lft slide_subtitle_white slide_item_left"\r\n            data-x="87"\r\n            data-y="245"\r\n            data-speed="400"\r\n            data-start="2000"\r\n            data-easing="easeOutExpo">\r\n            Lokasi liburan yang Menakjubkan.\r\n          </div>\r\n                       \r\n          <div class="caption lfb"\r\n            data-x="640" \r\n            data-y="0" \r\n            data-speed="700" \r\n            data-start="1000" \r\n            data-easing="easeOutExpo">\r\n            <!--<img src="<?php echo base_url() ?>inc/frontend/pages/img/revolutionslider/lady.png" alt="Image 1">-->\r\n          </div>', '<div class="caption lft slide_title_white slide_item_left"\r\n            data-x="30"\r\n            data-y="90"\r\n            data-speed="400"\r\n            data-start="1500"\r\n            data-easing="easeOutExpo">\r\n            Nikmati Keindahan<br><span class="slide_title_white_bold">Wakatobi</span>\r\n          </div>\r\n          <div class="caption lft slide_subtitle_white slide_item_left"\r\n            data-x="87"\r\n            data-y="245"\r\n            data-speed="400"\r\n            data-start="2000"\r\n            data-easing="easeOutExpo">\r\n            Lokasi liburan yang Menakjubkan.\r\n          </div>\r\n                       \r\n          <div class="caption lfb"\r\n            data-x="640" \r\n            data-y="0" \r\n            data-speed="700" \r\n            data-start="1000" \r\n            data-easing="easeOutExpo">\r\n            <!--<img src="<?php echo base_url() ?>inc/frontend/pages/img/revolutionslider/lady.png" alt="Image 1">-->\r\n          </div>', 'Y'),
	(2, 'dive-wakatobi.jpg', '<div class="caption lft slide_subtitle slide_item_left"\r\n            data-x="30"\r\n            data-y="180"\r\n            data-speed="400"\r\n            data-start="2000"\r\n            data-easing="easeOutExpo">\r\n            Salah satu tempat menyelam Terbaik di Dunia\r\n          </div>\r\n\r\n                       \r\n          <div class="caption lfb"\r\n            data-x="640" \r\n            data-y="55" \r\n            data-speed="700" \r\n            data-start="1000" \r\n            data-easing="easeOutExpo">\r\n            <!--<img src="<?php echo base_url() ?>inc/frontend/pages/img/revolutionslider/man-winner.png" alt="Image 1">-->\r\n          </div>', '<div class="caption lft slide_subtitle slide_item_left"\r\n            data-x="30"\r\n            data-y="180"\r\n            data-speed="400"\r\n            data-start="2000"\r\n            data-easing="easeOutExpo">\r\n            Salah satu tempat menyelam Terbaik di Dunia\r\n          </div>\r\n\r\n                       \r\n          <div class="caption lfb"\r\n            data-x="640" \r\n            data-y="55" \r\n            data-speed="700" \r\n            data-start="1000" \r\n            data-easing="easeOutExpo">\r\n            <!--<img src="<?php echo base_url() ?>inc/frontend/pages/img/revolutionslider/man-winner.png" alt="Image 1">-->\r\n          </div>', 'Y');
/*!40000 ALTER TABLE `pr_slideshow` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
