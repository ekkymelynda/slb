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
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guru` (
  `GR_ID` int(11) NOT NULL,
  `JP_ID` int(11) NOT NULL,
  `GR_NIP` char(18) DEFAULT NULL,
  `GR_NUPTK` char(16) DEFAULT NULL,
  `GR_NAMA` varchar(50) DEFAULT NULL,
  `GR_GELAR` varchar(20) DEFAULT NULL,
  `GR_JK` char(1) DEFAULT NULL,
  `GR_JURUSAN` varchar(50) DEFAULT NULL,
  `GR_SERTIFIKASI` varchar(50) DEFAULT NULL,
  `GR_KEPEGAWAIAN` varchar(50) DEFAULT NULL,
  `GR_JABATAN` varchar(20) DEFAULT NULL,
  `GR_TMTKERJA` date DEFAULT NULL,
  `GR_TGSTAMBAH` varchar(30) DEFAULT NULL,
  `GR_MENGAJAR` varchar(50) DEFAULT NULL,
  `GR_JAMPERMGG` int(11) DEFAULT NULL,
  `GR_NOIJAZAH` varchar(50) DEFAULT NULL,
  `GR_NOSERTIFIKASI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`GR_ID`),
  UNIQUE KEY `GURU_PK` (`GR_ID`),
  KEY `REL_PENDIDIKAN_GURU_FK` (`JP_ID`),
  CONSTRAINT `FK_GURU_REL_PENDI_JENJANG_` FOREIGN KEY (`JP_ID`) REFERENCES `jenjang_pendidikan` (`JP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru`
--

LOCK TABLES `guru` WRITE;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` VALUES (1,1,'196001011993931008','843373861200032','Winarno','S.Pd','L','PLB','Guru Kelas SDLB','PNS Diperbantu','Guru Kelas SDLB','1994-01-09','Kepala Sekolah',NULL,NULL,NULL,NULL),(2,2,'196505042007011026','3836743644200022','Winarno','S.Pd','L','PLB','Guru Kelas SDLB','PNS Diperbantu','Guru Kelas SDLB','2009-04-01',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;
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