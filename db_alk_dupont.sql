/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.6.25 : Database - db_alk_dupont
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_alk_dupont` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_alk_dupont`;

/*Table structure for table `detaillaporankeuangan` */

DROP TABLE IF EXISTS `detaillaporankeuangan`;

CREATE TABLE `detaillaporankeuangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idlk` int(11) DEFAULT NULL,
  `namaakun` varchar(50) DEFAULT NULL,
  `dk` enum('d','k') DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `jenisakun` enum('0','1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL COMMENT '0=kas 1=surat berharga 2=piutang dagang 3=persediaan 4=aktiva tetap 5=penjualan 6=hpp 7=biaya operasi 8=biaya bunga 9=pajak penghasilan 10=laba stlh pajak 11=laba bersih',
  `jenislaporan` enum('0','1') DEFAULT NULL COMMENT '0=neraca 1=labarugi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detaillaporankeuangan` */

/*Table structure for table `hitungdistribusi` */

DROP TABLE IF EXISTS `hitungdistribusi`;

CREATE TABLE `hitungdistribusi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddupont` int(11) DEFAULT NULL,
  `rasio` enum('0','1','2') DEFAULT NULL COMMENT '0=npm 1=tato 2=roi',
  `k` int(11) DEFAULT NULL,
  `r` double DEFAULT NULL,
  `c` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hitungdistribusi` */

/*Table structure for table `ketdistribusi` */

DROP TABLE IF EXISTS `ketdistribusi`;

CREATE TABLE `ketdistribusi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idperiodehitung` int(11) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `rasio` enum('0','1','2') DEFAULT NULL,
  `ket` varchar(150) DEFAULT NULL,
  `n1` double DEFAULT NULL,
  `n2` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ketdistribusi` */

/*Table structure for table `laporankeuangan` */

DROP TABLE IF EXISTS `laporankeuangan`;

CREATE TABLE `laporankeuangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idperusahaan` varchar(4) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `statushitung` enum('0','1') DEFAULT '0' COMMENT '0=belum 1=sudah',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `laporankeuangan` */

/*Table structure for table `perusahaan` */

DROP TABLE IF EXISTS `perusahaan`;

CREATE TABLE `perusahaan` (
  `idperusahaan` varchar(4) NOT NULL,
  `namaperusahaan` varchar(40) DEFAULT NULL,
  `keterangan` text,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idperusahaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perusahaan` */

/*Table structure for table `rasiodupont` */

DROP TABLE IF EXISTS `rasiodupont`;

CREATE TABLE `rasiodupont` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idlk` int(11) DEFAULT NULL,
  `kas` double DEFAULT NULL,
  `suratberharga` double DEFAULT NULL,
  `piutangdagang` double DEFAULT NULL,
  `persediaan` double DEFAULT NULL,
  `aktivatetap` double DEFAULT NULL,
  `penjualan` double DEFAULT NULL,
  `hpp` double DEFAULT NULL,
  `biayaoperasi` double DEFAULT NULL,
  `bebanbunga` double DEFAULT NULL,
  `pajakpenghasilan` double DEFAULT NULL,
  `labastlhpajak` double DEFAULT NULL,
  `persenlababersih` double DEFAULT NULL,
  `asetturnover` double DEFAULT NULL,
  `roi` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rasiodupont` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
