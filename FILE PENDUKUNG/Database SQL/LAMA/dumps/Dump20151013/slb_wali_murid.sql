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
-- Table structure for table `wali_murid`
--

DROP TABLE IF EXISTS `wali_murid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wali_murid` (
  `WM_ID` int(11) NOT NULL,
  `KWN_ID` int(11) NOT NULL,
  `PK_ID` int(11) NOT NULL,
  `PH_ID` int(11) NOT NULL,
  `KK_ID` varchar(2) DEFAULT NULL,
  `JP_ID` int(11) DEFAULT NULL,
  `SW_ID` int(11) NOT NULL,
  `WM_SEBAGAI` char(3) DEFAULT NULL,
  `WM_NAMA` varchar(50) DEFAULT NULL,
  `WM_TEMPATLAHIR` varchar(30) DEFAULT NULL,
  `WM_TGLLAHIR` date DEFAULT NULL,
  `WM_INSKERJA` varchar(50) DEFAULT NULL,
  `WM_JABATANKERJA` varchar(50) DEFAULT NULL,
  `WM_PANGKAT` varchar(30) DEFAULT NULL,
  `WM_LAMAKERJAPERHARI` varchar(30) DEFAULT NULL,
  `WM_JMLTANGGUNG` int(11) DEFAULT NULL,
  `WM_ALAMATRUMAH` varchar(100) DEFAULT NULL,
  `WM_ALAMATKANTOR` varchar(100) DEFAULT NULL,
  `WM_TELP` varchar(20) DEFAULT NULL,
  `WM_USIANIKAH` int(11) DEFAULT NULL,
  `WM_KESEMPATANKOM` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`WM_ID`),
  UNIQUE KEY `WALI_MURID_PK` (`WM_ID`),
  KEY `REL_WALIMURID_SW_FK` (`SW_ID`),
  KEY `REL_PENGHASILAN_WM_FK` (`PH_ID`),
  KEY `REL_PEKERJAAN_WM_FK` (`PK_ID`),
  KEY `REL_KEBKHUSUS_WM_FK` (`KK_ID`),
  KEY `REL_WARGANEGARA_WM_FK` (`KWN_ID`),
  KEY `REL_JENJANGPEND_WM_FK` (`JP_ID`),
  CONSTRAINT `FK_WALI_MUR_REL_JENJA_JENJANG_` FOREIGN KEY (`JP_ID`) REFERENCES `jenjang_pendidikan` (`JP_ID`),
  CONSTRAINT `FK_WALI_MUR_REL_KEBKH_KEBUTUHA` FOREIGN KEY (`KK_ID`) REFERENCES `kebutuhan_khusus` (`KK_ID`),
  CONSTRAINT `FK_WALI_MUR_REL_PEKER_PEKERJAA` FOREIGN KEY (`PK_ID`) REFERENCES `pekerjaan` (`PK_ID`),
  CONSTRAINT `FK_WALI_MUR_REL_PENGH_PENGHASI` FOREIGN KEY (`PH_ID`) REFERENCES `penghasilan` (`PH_ID`),
  CONSTRAINT `FK_WALI_MUR_REL_WALIM_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`),
  CONSTRAINT `FK_WALI_MUR_REL_WARGA_WARGANEG` FOREIGN KEY (`KWN_ID`) REFERENCES `warganegara` (`KWN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wali_murid`
--

LOCK TABLES `wali_murid` WRITE;
/*!40000 ALTER TABLE `wali_murid` DISABLE KEYS */;
/*!40000 ALTER TABLE `wali_murid` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-13 23:01:39