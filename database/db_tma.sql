/*
SQLyog Enterprise v12.4.3 (64 bit)
MySQL - 10.1.25-MariaDB : Database - db_tma
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_tma` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_tma`;

/*Table structure for table `tbl_mahasiswa` */
DROP TABLE IF EXISTS `tbl_mahasiswa`;

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(200) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_mahasiswa` */
DROP TABLE IF EXISTS `tbl_matakuliah`;

CREATE TABLE `tbl_matakuliah` (
  `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_matakuliah` varchar(200) NOT NULL,
  PRIMARY KEY (`id_matakuliah`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_nilai` */
DROP TABLE IF EXISTS `tbl_nilai`;

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=1000001 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_mahasiswa` */
insert  into `tbl_mahasiswa`(`nama_mahasiswa`) values 
('Budi'),
('Aris'),
('Panji');


/*Data for the table `tbl_matakuliah` */
insert  into `tbl_matakuliah`(`nama_matakuliah`) values 
('Struktur Data'),
('Rangkaian Digital'),
('Aljabar Linear');

/*Data for the table `tbl_matakuliah` */
insert  into `tbl_matakuliah`(`'id_mahasiswa', 'id_matakuliah', nilai`) values 
(1001,101,85),
(1001,102,75),
(1001,103,70),
(1002,101,69),
(1002,102,55),
(1002,103,90),
(1003,101,73),
(1003,102,81),
(1003,103,61);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
