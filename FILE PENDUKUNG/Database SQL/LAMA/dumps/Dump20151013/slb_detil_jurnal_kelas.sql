-- MySQL dump 10.13  Distrib 5.6.24, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: slb
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detil_jurnal_kelas`
--

DROP TABLE IF EXISTS `detil_jurnal_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detil_jurnal_kelas` (
  `DJK_ID` int(11) NOT NULL,
  `MAPEL_ID` int(11) NOT NULL,
  `JK_ID` int(11) NOT NULL,
  `DJK_TANGGAL` date DEFAULT NULL,
  `DJK_MATERI` varchar(200) DEFAULT NULL,
  `DJK_KETERANGAN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DJK_ID`),
  UNIQUE KEY `DETIL_JURNAL_KELAS_PK` (`DJK_ID`),
  KEY `REK_MAPEL_DETILJURNALKELAS_FK` (`MAPEL_ID`),
  KEY `REL_DETILJURNALKELAS_FK` (`JK_ID`),
  CONSTRAINT `FK_DETIL_JU_REK_MAPEL_MATA_PEL` FOREIGN KEY (`MAPEL_ID`) REFERENCES `mata_pelajaran` (`MAPEL_ID`),
  CONSTRAINT `FK_DETIL_JU_REL_DETIL_JURNAL_K` FOREIGN KEY (`JK_ID`) REFERENCES `jurnal_kelas` (`JK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detil_jurnal_kelas`
--

LOCK TABLES `detil_jurnal_kelas` WRITE;
/*!40000 ALTER TABLE `detil_jurnal_kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `detil_jurnal_kelas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-13 23:01:40
