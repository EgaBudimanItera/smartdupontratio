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

/*Table structure for table `detailhitungdistribusi` */

DROP TABLE IF EXISTS `detailhitungdistribusi`;

CREATE TABLE `detailhitungdistribusi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idperiode` varchar(15) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `rasio` enum('0','1','2') DEFAULT NULL COMMENT '0=npm 1=tato 2=roi',
  `k` int(11) DEFAULT NULL,
  `r` double DEFAULT NULL,
  `c` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `detailhitungdistribusi` */

insert  into `detailhitungdistribusi`(`id`,`idperiode`,`tahun`,`rasio`,`k`,`r`,`c`) values (1,'HD001','2012','0',4,16.799855415067,4.1999638537668),(2,'HD001','2012','1',4,0.29218168030507,0.073045420076267),(3,'HD001','2012','2',4,4.503869839477,1.1259674598693),(4,'HD001','2013','0',4,29.459448751843,7.3648621879607),(5,'HD001','2013','1',4,0.12650128140578,0.031625320351445),(6,'HD001','2013','2',4,20.968039626841,5.2420099067103);

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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

/*Data for the table `detaillaporankeuangan` */

insert  into `detaillaporankeuangan`(`id`,`idlk`,`namaakun`,`dk`,`jumlah`,`jenisakun`,`jenislaporan`) values (2,3,'Penjualan','k',4689429510000,'5','1'),(3,3,'HPP','d',2604942909000,'6','1'),(4,3,'Biaya Penjualan','d',288892380000,'7','1'),(5,3,'Biaya Adm dan Umum','d',535434053000,'7','1'),(6,3,'Biaya Bunga','d',378462634000,'8','1'),(7,3,'Pajak Penghasilan','d',256255978000,'9','1'),(8,3,'Laba Setelah Pajak','d',625441556000,'10','1'),(9,3,'Kas','d',2225099936000,'0','0'),(10,3,'Surat Berharga','d',0,'1','0'),(11,3,'Pihak Berelasi','d',23951545000,'2','0'),(12,3,'Pihak Ketiga','d',78715790000,'2','0'),(13,3,'Hotel','d',2628853000,'3','0'),(14,3,'Aset Real Estate','d',1735774759000,'3','0'),(15,3,'Nilai Buku Aktiva Tetap','d',1853091719000,'4','0'),(28,4,'Penjualan','k',4901191373000,'5','1'),(29,4,'HPP','d',2546320651000,'6','1'),(30,4,'Biaya Operasi 1','d',398115504000,'7','1'),(31,4,'Biaya Operasi 2','d',681146092000,'7','1'),(32,4,'Biaya Bunga','d',476950569000,'8','1'),(33,4,'Pajak Penghasilan','d',246935022000,'9','1'),(34,4,'Kas','d',3177138834000,'0','0'),(35,4,'Surat Berharga','d',0,'1','0'),(36,4,'Piutang 1','d',31730984000,'2','0'),(37,4,'Piutang 2','d',184973281000,'2','0'),(38,4,'Persediaan 1','d',11201315000,'3','0'),(39,4,'Persediaan 2','d',2967297090000,'3','0'),(40,4,'Aktiva Tetap','d',2756004948000,'4','0'),(41,9,'Penjualan','d',5.741264172193e15,'5','1'),(42,9,'HPP','d',1.575447230439e15,'6','1'),(43,9,'Biaya Operasi','d',1.256189773879e15,'7','1'),(44,9,'Biaya Bunga','d',198686580140000,'8','1'),(45,9,'Pajak Penghasilan','d',373305894466000,'9','1'),(46,9,'Kas','d',4.331624074336e15,'0','0'),(48,9,'Surat Berharga','d',0,'1','0'),(49,9,'Piutang 1','d',33408205075000,'2','0'),(50,9,'Piutang 2','d',54348627348000,'2','0'),(51,9,'Persediaan','d',3.796776235388e15,'3','0'),(52,9,'Aktiva Tetap','d',437868159909000,'4','0'),(53,8,'Penjualan','k',3727811859978,'5','1'),(54,8,'HPP','d',1346826251766,'6','1'),(55,8,'Biaya Operasi 1','d',287041615108,'7','1'),(56,8,'Biaya Operasi 2','d',662389070561,'7','1'),(57,8,'Beban Bunga','d',90394800818,'8','1'),(58,8,'Pajak Penghasilan','d',217705039997,'9','1'),(60,8,'Kas','k',3961464628320,'0','0'),(61,8,'Surat Berharga','d',0,'1','0'),(63,8,'piutang dagang 1','k',8637894621,'2','0'),(64,8,'ppiutang dagang 2','k',63981415757,'2','0'),(65,8,'persediaan','k',3374802203965,'3','0'),(66,8,'Nilai Buku Aktiva Tetap','d',45986667804,'4','0');

/*Table structure for table `hitungdistribusi` */

DROP TABLE IF EXISTS `hitungdistribusi`;

CREATE TABLE `hitungdistribusi` (
  `idperiode` varchar(15) NOT NULL,
  `tgldistribusi` date DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idperiode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hitungdistribusi` */

insert  into `hitungdistribusi`(`idperiode`,`tgldistribusi`,`ket`) values ('HD001','2018-11-02','aa');

/*Table structure for table `ketdistribusi` */

DROP TABLE IF EXISTS `ketdistribusi`;

CREATE TABLE `ketdistribusi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idperiodehitung` varchar(15) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `rasio` enum('0','1','2') DEFAULT NULL,
  `ket` varchar(150) DEFAULT NULL,
  `n1` double DEFAULT NULL,
  `n2` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `ketdistribusi` */

insert  into `ketdistribusi`(`id`,`idperiodehitung`,`tahun`,`rasio`,`ket`,`n1`,`n2`) values (1,'HD001','2012','0','Sangat Tidak Sehat',13.337263193023,17.53722704679),(2,'HD001','2012','0','Tidak Sehat',17.53722704679,21.737190900557),(3,'HD001','2012','0','Sehat',21.737190900557,25.937154754323),(4,'HD001','2012','0','Sangat Sehat',25.937154754323,30.13711860809),(5,'HD001','2012','1','Sangat Tidak Sehat',0.50005036366871,0.57309578374498),(6,'HD001','2012','1','Tidak Sehat',0.57309578374498,0.64614120382124),(7,'HD001','2012','1','Sehat',0.64614120382124,0.71918662389751),(8,'HD001','2012','1','Sangat Sehat',0.71918662389751,0.79223204397378),(9,'HD001','2012','2','Sangat Tidak Sehat',10.566207280425,14.766171134192),(10,'HD001','2012','2','Tidak Sehat',11.692174740294,15.892138594061),(11,'HD001','2012','2','Sehat',12.818142200163,17.01810605393),(12,'HD001','2012','2','Sangat Sehat',13.944109660033,18.1440735138),(13,'HD001','2013','0','Sangat Tidak Sehat',11.256927000226,18.621789188187),(14,'HD001','2013','0','Tidak Sehat',18.621789188187,25.986651376147),(15,'HD001','2013','0','Sehat',25.986651376147,33.351513564108),(16,'HD001','2013','0','Sangat Sehat',33.351513564108,40.716375752069),(17,'HD001','2013','1','Sangat Tidak Sehat',0.5369199557414,0.56854527609284),(18,'HD001','2013','1','Tidak Sehat',0.56854527609284,0.60017059644429),(19,'HD001','2013','1','Sehat',0.60017059644429,0.63179591679574),(20,'HD001','2013','1','Sangat Sehat',0.63179591679574,0.66342123714718),(21,'HD001','2013','2','Sangat Tidak Sehat',6.0440687467457,13.408930934706),(22,'HD001','2013','2','Tidak Sehat',11.286078653456,18.650940841417),(23,'HD001','2013','2','Sehat',16.528088560166,23.892950748127),(24,'HD001','2013','2','Sangat Sehat',21.770098466877,29.134960654837);

/*Table structure for table `laporankeuangan` */

DROP TABLE IF EXISTS `laporankeuangan`;

CREATE TABLE `laporankeuangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idperusahaan` varchar(4) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `statushitung` enum('0','1') DEFAULT '0' COMMENT '0=belum 1=sudah',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `laporankeuangan` */

insert  into `laporankeuangan`(`id`,`idperusahaan`,`tahun`,`statushitung`) values (3,'P001','2012','1'),(4,'P001','2013','1'),(5,'P001','2014','0'),(6,'P001','2015','0'),(7,'P001','2016','0'),(8,'P002','2012','1'),(9,'P002','2013','1'),(10,'P002','2014','0'),(11,'P002','2015','0'),(12,'P002','2016','0');

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

insert  into `perusahaan`(`idperusahaan`,`namaperusahaan`,`keterangan`,`username`,`password`) values ('P001','APLN','','APLN','123'),('P002','BSDE','','BSDE','123');

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
  `biayabunga` double DEFAULT NULL,
  `pph` double DEFAULT NULL,
  `labastlhpajak` double DEFAULT NULL,
  `persenlababersih` double DEFAULT NULL,
  `tato` double DEFAULT NULL,
  `roi` double DEFAULT NULL,
  `gambar` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `rasiodupont` */

insert  into `rasiodupont`(`id`,`idlk`,`kas`,`suratberharga`,`piutangdagang`,`persediaan`,`aktivatetap`,`penjualan`,`hpp`,`biayaoperasi`,`biayabunga`,`pph`,`labastlhpajak`,`persenlababersih`,`tato`,`roi`,`gambar`) values (1,3,2225099936000,0,102667335000,1738403612000,1853091719000,4689429510000,2604942909000,824326433000,378462634000,256255978000,625441556000,13.337263193023,0.79223204397378,10.566207280425,NULL),(2,4,3177138834000,0,216704265000,2978498405000,2756004948000,4901191373000,2546320651000,1079261596000,476950569000,246935022000,551723535000,11.256927000226,0.5369199557414,6.0440687467457,NULL),(3,8,3961464628320,0,72619310378,3374802203965,45986667804,3727811859978,1346826251766,949430685669,90394800818,217705039997,1123455081728,30.13711860809,0.50005036366871,15.070077119902,'IMG_9700_ok1.jpg'),(4,9,4.331624074336e15,0,87756832423000,3.796776235388e15,437868159909000,5.741264172193e15,1.575447230439e15,1.256189773879e15,198686580140000,373305894466000,2.337634693269e15,40.716375752069,0.66342123714718,27.012108373587,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values (1,'admin1','123'),(2,'admin2','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
