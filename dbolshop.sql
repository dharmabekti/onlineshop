/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - dbonlineshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbonlineshop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbonlineshop`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

/*Table structure for table `invoices` */

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nope` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota_tujuan` int(3) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `kurir` varchar(30) NOT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status` enum('PAID','UNPAID','CENCELED','EXPIRED') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `invoices` */

insert  into `invoices`(`id`,`nama`,`nope`,`email`,`alamat`,`kota_tujuan`,`date`,`due_date`,`kurir`,`total_bayar`,`status`) values 
(1,'dharma','2121','dharma.bekti16696@gmail.com','2121',1,'2019-07-01 17:51:54','2019-07-02 17:51:54','JNE OKE',4085000,'PAID'),
(2,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:45:47','2019-07-09 17:45:47','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(3,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:46:07','2019-07-09 17:46:07','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(4,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:46:16','2019-07-09 17:46:16','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(5,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:46:22','2019-07-09 17:46:22','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(6,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:46:33','2019-07-09 17:46:33','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(7,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:46:45','2019-07-09 17:46:45','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(8,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:47:29','2019-07-09 17:47:29','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(9,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:48:01','2019-07-09 17:48:01','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(10,'Callysta','2121212','dharma.bekti16696@gmail.com','2121212',1,'2019-07-08 17:49:32','2019-07-09 17:49:32','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(11,'Callysta','1234567','dharmabekti@gmail.com','112233',177,'2019-07-08 17:53:49','2019-07-09 17:53:49','JNE YES',48000,'UNPAID'),
(12,'Callysta','112233','dharmabekti@gmail.com','21212',1,'2019-07-08 17:55:54','2019-07-09 17:55:54','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(13,'dharma','2121','dharmabekti@gmail.com','2121',1,'2019-07-08 17:58:23','2019-07-09 17:58:23','POS PAKET KILAT KHUSUS',92000,'UNPAID'),
(14,'Callysta','2121212','dharmabekti@gmail.com','21212',1,'2019-07-08 18:05:50','2019-07-09 18:05:50','TIKI REG',6060000,'UNPAID'),
(15,'Testong','121','dharmabekti@gmail.com','212',1,'2019-07-08 18:09:41','2019-07-09 18:09:41','POS PAKET KILAT KHUSUS',5276999,'UNPAID'),
(16,'Testong','32323','dharmabekti@gmail.com','3232',1,'2019-07-08 18:12:14','2019-07-09 18:12:14','POS PAKET KILAT KHUSUS',6077000,'UNPAID'),
(17,'dharma','2121','dharmabekti@gmail.com','2121',1,'2019-07-08 18:14:12','2019-07-09 18:14:12','JNE OKE',6854999,'UNPAID'),
(18,'dharma','1212','dharmabekti@gmail.com','212',1,'2019-07-08 18:20:18','2019-07-09 18:20:18','POS PAKET KILAT KHUSUS',5276999,'UNPAID'),
(19,'dharma','1212','dharmabekti@gmail.com','212',1,'2019-07-08 18:20:45','2019-07-09 18:20:45','POS PAKET KILAT KHUSUS',5276999,'UNPAID'),
(20,'Callysta','212','dharmabekti@gmail.com','2121',177,'2019-07-08 18:22:52','2019-07-09 18:22:52','JNE YES',12817999,'UNPAID'),
(21,'dharma','21212','dharma.bekti166@gmail.com','2121',1,'2019-07-08 18:25:04','2019-07-09 18:25:04','POS PAKET KILAT KHUSUS',4077000,'UNPAID'),
(22,'dharma','21212','dharmabekti@gmail.com','21212',1,'2019-07-08 18:38:57','2019-07-09 18:38:57','POS PAKET KILAT KHUSUS',5276999,'PAID');

/*Table structure for table `kategori_produk` */

DROP TABLE IF EXISTS `kategori_produk`;

CREATE TABLE `kategori_produk` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_produk` */

insert  into `kategori_produk`(`id_kategori`,`nama_kategori`) values 
(1,'Camera'),
(2,'Handphone'),
(3,'Computer');

/*Table structure for table `konfirmasi` */

DROP TABLE IF EXISTS `konfirmasi`;

CREATE TABLE `konfirmasi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(5) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `konfirmasi` */

insert  into `konfirmasi`(`id`,`invoice_id`,`tanggal`,`gambar`) values 
(1,1,'2019-07-01 22:56:03','WhatsApp_Image_2019-06-28_at_15_04_24.jpeg'),
(2,22,'2019-07-08 23:45:23','WhatsApp_Image_2019-05-08_at_10_07_07.jpeg');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `weight` int(3) DEFAULT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`id`,`invoice_id`,`product_id`,`product_name`,`qty`,`weight`,`price`,`options`) values 
(1,1,8,'Kripik Manggleng',2,NULL,15000,''),
(2,1,6,'Nyamnyung',1,NULL,4000000,''),
(3,2,8,'Kripik Manggleng',1,NULL,15000,''),
(4,3,8,'Kripik Manggleng',1,NULL,15000,''),
(5,4,8,'Kripik Manggleng',1,NULL,15000,''),
(6,5,8,'Kripik Manggleng',1,NULL,15000,''),
(7,6,8,'Kripik Manggleng',1,NULL,15000,''),
(8,7,8,'Kripik Manggleng',1,NULL,15000,''),
(9,8,8,'Kripik Manggleng',1,NULL,15000,''),
(10,9,8,'Kripik Manggleng',1,NULL,15000,''),
(11,10,8,'Kripik Manggleng',1,NULL,15000,''),
(12,11,8,'Kripik Manggleng',2,NULL,15000,''),
(13,12,8,'Kripik Manggleng',1,NULL,15000,''),
(14,13,8,'Kripik Manggleng',1,NULL,15000,''),
(15,14,1,'Samsung',1,NULL,6000000,''),
(16,15,2,'Nikon',1,NULL,5199999,''),
(17,16,1,'Samsung',1,NULL,6000000,''),
(18,17,2,'Nikon',1,NULL,5199999,''),
(19,17,3,'Lenovo',1,NULL,1600000,''),
(20,18,2,'Nikon',1,NULL,5199999,''),
(21,19,2,'Nikon',1,NULL,5199999,''),
(22,20,2,'Nikon',1,NULL,5199999,''),
(23,20,1,'Samsung',1,NULL,6000000,''),
(24,20,3,'Lenovo',1,NULL,1600000,''),
(25,21,6,'Nyamnyung',1,NULL,4000000,''),
(26,22,2,'Nikon',1,NULL,5199999,'');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `berat` int(3) NOT NULL,
  `harga` int(8) NOT NULL,
  `gambar` text NOT NULL,
  `ishapus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`id`,`kategori`,`nama_produk`,`ukuran`,`keterangan`,`berat`,`harga`,`gambar`,`ishapus`) values 
(1,2,'Samsung','Layar 8.0','<h5>Features Samsung Tab S2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,6000000,'samsungs22.jpg',0),
(2,1,'Nikon','3.0 921k-Dot LCD Monitor','<h5>Features Nikon</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,5199999,'Nikon-D3300-700x5255.png',0),
(3,2,'Lenovo','141 x 70 x 8.2 mm (5.55 x 2.76 x 0.32 in) ','<h5>Features Lenovo A6000</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,1600000,'samsungs23.jpg',0),
(4,1,'Asus','16x16','<h5>Features Asus Zenfone 2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,4000000,'Nikon-D3300-700x5256.png',0),
(6,2,'Nyamnyung','23x56','Ini adalah hp nyamyung...<br>Murah meriah hp nya...<br><br><br>',1,4000000,'samsungs24.jpg',0),
(7,2,'Xiami Readme 5A','32x32','<h5>Features Samsung Tab S2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',1,1700000,'WhatsApp_Image_2019-04-26_at_16_43_19_(1).jpeg',1),
(8,1,'Kripik Manggleng','1 porsi 10 buah','<h5>Features Samsung Tab S2</h5>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br>OND363338<h4>Editorial Reviews</h4><h5>Manufacturer\'s Description</h5>With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0\" LCD screen and 720p HD (30fps) movie capture.<h5>Electric powered Fujinon 18x zoom lens</h5>The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you\'re at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.<h5>Impressive panoramas</h5>With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It\'s so easy and the results are impressive.<h5>Sharp, clear shots</h5>Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3\", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm\'s Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.',10,15000,'WhatsApp_Image_2019-05-08_at_10_07_07.jpeg',0);

/*Table structure for table `ref_rekening` */

DROP TABLE IF EXISTS `ref_rekening`;

CREATE TABLE `ref_rekening` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(30) DEFAULT NULL,
  `no_rekening` varchar(50) DEFAULT NULL,
  `atasnama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ref_rekening` */

insert  into `ref_rekening`(`id`,`nama_bank`,`no_rekening`,`atasnama`) values 
(1,'BCA','12345678','Clara S'),
(2,'OVO','0826361789','Clara');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `nope` int(14) NOT NULL,
  `alamat` text NOT NULL,
  `status` int(1) NOT NULL,
  `bukti` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `instagram` varchar(30) DEFAULT NULL,
  `facebook` text,
  `twitter` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`username`,`password`,`email`,`kontak`,`instagram`,`facebook`,`twitter`) values 
(1,'Administrator','admin','21232f297a57a5a743894a0e4a801fc3','dharmabekti@gmail.com','085728418120','@kianom_','https://web.facebook.com/fad.bektisuratmanto','https://twitter.com/kianom_');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
