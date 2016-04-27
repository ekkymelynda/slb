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
-- Table structure for table `ppi`
--

DROP TABLE IF EXISTS `ppi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppi` (
  `PPI_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL,
  `PPI_SEMESTER` int(11) DEFAULT NULL,
  `PPI_THNAJAR` varchar(10) DEFAULT NULL,
  `PPI_KEKHUSUSANUTAMA` varchar(50) DEFAULT NULL,
  `PPI_KEKHUSUSANSEKUNDER` varchar(50) DEFAULT NULL,
  `PPI_STDKURIKULUM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PPI_ID`),
  UNIQUE KEY `PPI_PK` (`PPI_ID`),
  KEY `REL_PPI_SISWA2_FK` (`SW_ID`),
  CONSTRAINT `FK_PPI_REL_PPI_S_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppi`
--

LOCK TABLES `ppi` WRITE;
/*!40000 ALTER TABLE `ppi` DISABLE KEYS */;
INSERT INTO `ppi` VALUES (1,1,1,'2012/2013','Tunagrahita',NULL,'Kurikulum Standar Sekolah');
/*!40000 ALTER TABLE `ppi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-13 23:01:37