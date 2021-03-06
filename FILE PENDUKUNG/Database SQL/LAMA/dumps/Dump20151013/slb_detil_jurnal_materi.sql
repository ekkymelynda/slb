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
-- Table structure for table `detil_jurnal_materi`
--

DROP TABLE IF EXISTS `detil_jurnal_materi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detil_jurnal_materi` (
  `DJM_ID` int(11) NOT NULL,
  `JM_ID` int(11) DEFAULT NULL,
  `RM_ID` int(11) DEFAULT NULL,
  `DJM_TANGGAL` date DEFAULT NULL,
  `DJM_JAMKE` varchar(10) DEFAULT NULL,
  `DJM_MATERIPEMBELAJARAN` varchar(100) DEFAULT NULL,
  `DJM_JMLSWHADIR` int(11) DEFAULT NULL,
  `DJM_JMLSWTAKHADIR` int(11) DEFAULT NULL,
  `DJM_NAMAKETTAKHADIR` varchar(200) DEFAULT NULL,
  `DJM_CATATAN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`DJM_ID`),
  UNIQUE KEY `DETIL_JURNAL_MATERI_PK` (`DJM_ID`),
  KEY `REL_DETILJURNALMATERI_FK` (`JM_ID`),
  KEY `REL_DETILJURNALMATERI_ROMBEL_FK` (`RM_ID`),
  CONSTRAINT `FK_DETIL_JU_REL_DETIL_JURNAL_M` FOREIGN KEY (`JM_ID`) REFERENCES `jurnal_materi` (`JM_ID`),
  CONSTRAINT `FK_DETIL_JU_REL_DETIL_ROMBEL` FOREIGN KEY (`RM_ID`) REFERENCES `rombel` (`RM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detil_jurnal_materi`
--

LOCK TABLES `detil_jurnal_materi` WRITE;
/*!40000 ALTER TABLE `detil_jurnal_materi` DISABLE KEYS */;
/*!40000 ALTER TABLE `detil_jurnal_materi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-13 23:01:38
