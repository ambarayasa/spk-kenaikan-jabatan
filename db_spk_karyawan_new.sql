/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.25-MariaDB : Database - db_spk_karyawan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_spk_karyawan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_spk_karyawan`;

/*Table structure for table `tb_bobot` */

DROP TABLE IF EXISTS `tb_bobot`;

CREATE TABLE `tb_bobot` (
  `id_bobot` int(11) NOT NULL AUTO_INCREMENT,
  `w1` double DEFAULT NULL,
  `w2` double DEFAULT NULL,
  `w3` double DEFAULT NULL,
  `w4` double DEFAULT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `tb_karyawan` */

DROP TABLE IF EXISTS `tb_karyawan`;

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nip` int(11) DEFAULT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `umur` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `tb_penilaian` */

DROP TABLE IF EXISTS `tb_penilaian`;

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(11) NOT NULL AUTO_INCREMENT,
  `c1` double DEFAULT NULL,
  `c2` double DEFAULT NULL,
  `c3` double DEFAULT NULL,
  `c4` double DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `karyawan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
