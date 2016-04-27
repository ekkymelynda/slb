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
-- Table structure for table `rel_kepribadian_sw`
--

DROP TABLE IF EXISTS `rel_kepribadian_sw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rel_kepribadian_sw` (
  `SW_ID` int(11) NOT NULL,
  `CK_ID` int(11) NOT NULL,
  PRIMARY KEY (`SW_ID`,`CK_ID`),
  UNIQUE KEY `REL_KEPRIBADIAN_SW_PK` (`SW_ID`,`CK_ID`),
  KEY `REL_KEPRIBADIAN_SW_FK` (`SW_ID`),
  KEY `REL_KEPRIBADIAN_SW2_FK` (`CK_ID`),
  CONSTRAINT `FK_REL_KEPR_REL_KEPRI_CIRI_KEP` FOREIGN KEY (`CK_ID`) REFERENCES `ciri_kepribadian` (`CK_ID`),
  CONSTRAINT `FK_REL_KEPR_REL_KEPRI_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rel_kepribadian_sw`
--

LOCK TABLES `rel_kepribadian_sw` WRITE;
/*!40000 ALTER TABLE `rel_kepribadian_sw` DISABLE KEYS */;
/*!40000 ALTER TABLE `rel_kepribadian_sw` ENABLE KEYS */;
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
