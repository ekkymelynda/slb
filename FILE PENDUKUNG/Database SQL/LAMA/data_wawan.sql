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
-- Table structure for table `agama`
--

DROP TABLE IF EXISTS `agama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agama` (
  `AG_ID` int(11) NOT NULL,
  `AG_NAMA` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`AG_ID`),
  UNIQUE KEY `AGAMA_PK` (`AG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agama`
--

LOCK TABLES `agama` WRITE;
/*!40000 ALTER TABLE `agama` DISABLE KEYS */;
INSERT INTO `agama` VALUES (1,'Islam'),(2,'Hindu'),(3,'Kristen Katolik'),(4,'Kristen Protestan'),(5,'Budha'),(6,'Konghucu');
/*!40000 ALTER TABLE `agama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alat_transportasi`
--

DROP TABLE IF EXISTS `alat_transportasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alat_transportasi` (
  `AT_ID` int(11) NOT NULL,
  `AT_NAMAALATTRANS` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`AT_ID`),
  UNIQUE KEY `ALAT_TRANSPORTASI_PK` (`AT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alat_transportasi`
--

LOCK TABLES `alat_transportasi` WRITE;
/*!40000 ALTER TABLE `alat_transportasi` DISABLE KEYS */;
INSERT INTO `alat_transportasi` VALUES (1,'Mobil'),(2,'Motor'),(3,'Jalan Kaki'),(4,'Diantar - Jemput');
/*!40000 ALTER TABLE `alat_transportasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `based_line`
--

DROP TABLE IF EXISTS `based_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `based_line` (
  `BASELINE_ID` int(11) NOT NULL,
  `PLK_ID` int(11) NOT NULL,
  `BASELINE_KET` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`BASELINE_ID`),
  UNIQUE KEY `BASED_LINE_PK` (`BASELINE_ID`),
  KEY `REL_BASEDLINE_PLK_FK` (`PLK_ID`),
  CONSTRAINT `FK_BASED_LI_REL_BASED_PROGRAM_` FOREIGN KEY (`PLK_ID`) REFERENCES `program_layanan_kompensatoris` (`PLK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `based_line`
--

LOCK TABLES `based_line` WRITE;
/*!40000 ALTER TABLE `based_line` DISABLE KEYS */;
/*!40000 ALTER TABLE `based_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciri_kepribadian`
--

DROP TABLE IF EXISTS `ciri_kepribadian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciri_kepribadian` (
  `CK_ID` int(11) NOT NULL,
  `CK_KETERANGAN` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`CK_ID`),
  UNIQUE KEY `CIRI_KEPRIBADIAN_PK` (`CK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciri_kepribadian`
--

LOCK TABLES `ciri_kepribadian` WRITE;
/*!40000 ALTER TABLE `ciri_kepribadian` DISABLE KEYS */;
INSERT INTO `ciri_kepribadian` VALUES (1,'Sopan'),(2,'Disiplin'),(3,'Bertangung Jawab');
/*!40000 ALTER TABLE `ciri_kepribadian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_asesmen`
--

DROP TABLE IF EXISTS `data_asesmen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_asesmen` (
  `ASM_ID` int(11) NOT NULL,
  `PPI_ID` int(11) DEFAULT NULL,
  `ASM_SUMBERINFO` varchar(30) DEFAULT NULL,
  `ASM_TGL` date DEFAULT NULL,
  PRIMARY KEY (`ASM_ID`),
  UNIQUE KEY `DATA_ASESMEN_PK` (`ASM_ID`),
  KEY `REL_ASESMEN_PPI_FK` (`PPI_ID`),
  CONSTRAINT `FK_DATA_ASE_REL_ASESM_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_asesmen`
--

LOCK TABLES `data_asesmen` WRITE;
/*!40000 ALTER TABLE `data_asesmen` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_asesmen` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `detil_kebutuhan`
--

DROP TABLE IF EXISTS `detil_kebutuhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detil_kebutuhan` (
  `DETKEB_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `DETKEB_ALAT` varchar(100) DEFAULT NULL,
  `DETKEB_PENYESUAIAN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DETKEB_ID`),
  UNIQUE KEY `DETIL_KEBUTUHAN_PK` (`DETKEB_ID`),
  KEY `REL_DETKEBUTUHAN_PPI_FK` (`PPI_ID`),
  CONSTRAINT `FK_DETIL_KE_REL_DETKE_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detil_kebutuhan`
--

LOCK TABLES `detil_kebutuhan` WRITE;
/*!40000 ALTER TABLE `detil_kebutuhan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detil_kebutuhan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detil_penempatan`
--

DROP TABLE IF EXISTS `detil_penempatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detil_penempatan` (
  `DP_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `DP_DETIL` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DP_ID`),
  UNIQUE KEY `DETIL_PENEMPATAN_PK` (`DP_ID`),
  KEY `REL_PPI_PENEMPATANSW_FK` (`PPI_ID`),
  CONSTRAINT `FK_DETIL_PE_REL_PPI_P_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detil_penempatan`
--

LOCK TABLES `detil_penempatan` WRITE;
/*!40000 ALTER TABLE `detil_penempatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detil_penempatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detil_rombel_siswa`
--

DROP TABLE IF EXISTS `detil_rombel_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detil_rombel_siswa` (
  `RM_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL,
  PRIMARY KEY (`RM_ID`,`SW_ID`),
  KEY `REL_ROMBRL_SW_FK` (`SW_ID`),
  KEY `REL_DETROMBELSW_1_FK` (`RM_ID`),
  CONSTRAINT `FK_DETIL_RO_REL_DETRO_ROMBEL` FOREIGN KEY (`RM_ID`) REFERENCES `rombel` (`RM_ID`),
  CONSTRAINT `FK_DETIL_RO_REL_ROMBR_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detil_rombel_siswa`
--

LOCK TABLES `detil_rombel_siswa` WRITE;
/*!40000 ALTER TABLE `detil_rombel_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `detil_rombel_siswa` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `hasil_asesmen`
--

DROP TABLE IF EXISTS `hasil_asesmen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hasil_asesmen` (
  `HA_ID` int(11) NOT NULL,
  `ASM_ID` int(11) NOT NULL,
  `HA_RINGKASAN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`HA_ID`),
  UNIQUE KEY `HASIL_ASESMEN_PK` (`HA_ID`),
  KEY `REL_RANGKUMAN_HASIL_ASASMEN_FK` (`ASM_ID`),
  CONSTRAINT `FK_HASIL_AS_REL_RANGK_DATA_ASE` FOREIGN KEY (`ASM_ID`) REFERENCES `data_asesmen` (`ASM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hasil_asesmen`
--

LOCK TABLES `hasil_asesmen` WRITE;
/*!40000 ALTER TABLE `hasil_asesmen` DISABLE KEYS */;
/*!40000 ALTER TABLE `hasil_asesmen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imunisasi`
--

DROP TABLE IF EXISTS `imunisasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imunisasi` (
  `IM_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL,
  `IM_JENIS` varchar(20) DEFAULT NULL,
  `IM_USIA` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IM_ID`),
  UNIQUE KEY `IMUNISASI_PK` (`IM_ID`),
  KEY `REL_IMUNISASI_SW_FK` (`SW_ID`),
  CONSTRAINT `FK_IMUNISAS_REL_IMUNI_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imunisasi`
--

LOCK TABLES `imunisasi` WRITE;
/*!40000 ALTER TABLE `imunisasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `imunisasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indikator_keberhasilan`
--

DROP TABLE IF EXISTS `indikator_keberhasilan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indikator_keberhasilan` (
  `INDI_ID` int(11) NOT NULL,
  `PLK_ID` int(11) NOT NULL,
  `INDI_KET` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`INDI_ID`),
  UNIQUE KEY `INDIKATOR_KEBERHASILAN_PK` (`INDI_ID`),
  KEY `REL_INDIKATORBERHASIL_PLK_FK` (`PLK_ID`),
  CONSTRAINT `FK_INDIKATO_REL_INDIK_PROGRAM_` FOREIGN KEY (`PLK_ID`) REFERENCES `program_layanan_kompensatoris` (`PLK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indikator_keberhasilan`
--

LOCK TABLES `indikator_keberhasilan` WRITE;
/*!40000 ALTER TABLE `indikator_keberhasilan` DISABLE KEYS */;
/*!40000 ALTER TABLE `indikator_keberhasilan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_tinggal`
--

DROP TABLE IF EXISTS `jenis_tinggal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_tinggal` (
  `JT_ID` int(11) NOT NULL,
  `JT_JENISTINGGAL` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`JT_ID`),
  UNIQUE KEY `JENIS_TINGGAL_PK` (`JT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_tinggal`
--

LOCK TABLES `jenis_tinggal` WRITE;
/*!40000 ALTER TABLE `jenis_tinggal` DISABLE KEYS */;
INSERT INTO `jenis_tinggal` VALUES (1,'Orang Tua'),(2,'Wali'),(3,'Lain - lain');
/*!40000 ALTER TABLE `jenis_tinggal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenjang_pendidikan`
--

DROP TABLE IF EXISTS `jenjang_pendidikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenjang_pendidikan` (
  `JP_ID` int(11) NOT NULL,
  `JP_JENJANG` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`JP_ID`),
  UNIQUE KEY `JENJANG_PENDIDIKAN_PK` (`JP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenjang_pendidikan`
--

LOCK TABLES `jenjang_pendidikan` WRITE;
/*!40000 ALTER TABLE `jenjang_pendidikan` DISABLE KEYS */;
INSERT INTO `jenjang_pendidikan` VALUES (1,'S1'),(2,'S2'),(3,'SMKK');
/*!40000 ALTER TABLE `jenjang_pendidikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal_kelas`
--

DROP TABLE IF EXISTS `jurnal_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal_kelas` (
  `JK_ID` int(11) NOT NULL,
  `RM_ID` int(11) NOT NULL,
  `GR_ID` int(11) NOT NULL,
  `JK_BULAN` int(11) DEFAULT NULL,
  `JK_TAHUN` int(11) DEFAULT NULL,
  PRIMARY KEY (`JK_ID`),
  UNIQUE KEY `JURNAL_KELAS_PK` (`JK_ID`),
  KEY `REL_JURNALKELAS_GURU_FK` (`GR_ID`),
  KEY `REL_JURNALKELAS_ROMBEL_FK` (`RM_ID`),
  CONSTRAINT `FK_JURNAL_K_REL_JURNA_GURU` FOREIGN KEY (`GR_ID`) REFERENCES `guru` (`GR_ID`),
  CONSTRAINT `FK_JURNAL_K_REL_JURNA_ROMBEL` FOREIGN KEY (`RM_ID`) REFERENCES `rombel` (`RM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal_kelas`
--

LOCK TABLES `jurnal_kelas` WRITE;
/*!40000 ALTER TABLE `jurnal_kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `jurnal_kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal_materi`
--

DROP TABLE IF EXISTS `jurnal_materi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal_materi` (
  `JM_ID` int(11) NOT NULL,
  `MAPEL_ID` int(11) DEFAULT NULL,
  `GR_ID` int(11) NOT NULL,
  `JM_THNAJARAN` varchar(10) DEFAULT NULL,
  `JM_SEMESTER` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`JM_ID`),
  UNIQUE KEY `JURNAL_MATERI_PK` (`JM_ID`),
  KEY `REL_GURU_JURNALMATERI_FK` (`GR_ID`),
  KEY `REL_JURNALMATERI_MAPEL_FK` (`MAPEL_ID`),
  CONSTRAINT `FK_JURNAL_M_REL_GURU__GURU` FOREIGN KEY (`GR_ID`) REFERENCES `guru` (`GR_ID`),
  CONSTRAINT `FK_JURNAL_M_REL_JURNA_MATA_PEL` FOREIGN KEY (`MAPEL_ID`) REFERENCES `mata_pelajaran` (`MAPEL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal_materi`
--

LOCK TABLES `jurnal_materi` WRITE;
/*!40000 ALTER TABLE `jurnal_materi` DISABLE KEYS */;
/*!40000 ALTER TABLE `jurnal_materi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal_pribadi_siswa`
--

DROP TABLE IF EXISTS `jurnal_pribadi_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal_pribadi_siswa` (
  `JPSW_ID` int(11) NOT NULL,
  `RM_ID` int(11) DEFAULT NULL,
  `SW_ID` int(11) DEFAULT NULL,
  `JPSW_TANGGAL` date DEFAULT NULL,
  `JPSW_PERKEMBANGAN` varchar(200) DEFAULT NULL,
  `JPSW_KETERANGAN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`JPSW_ID`),
  UNIQUE KEY `JURNAL_PRIBADI_SISWA_PK` (`JPSW_ID`),
  KEY `REL_JURNALPRIBADISW_SWROMBEL_FK` (`RM_ID`,`SW_ID`),
  CONSTRAINT `FK_JURNAL_P_REL_JURNA_DETIL_RO` FOREIGN KEY (`RM_ID`, `SW_ID`) REFERENCES `detil_rombel_siswa` (`RM_ID`, `SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal_pribadi_siswa`
--

LOCK TABLES `jurnal_pribadi_siswa` WRITE;
/*!40000 ALTER TABLE `jurnal_pribadi_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `jurnal_pribadi_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kebutuhan_khusus`
--

DROP TABLE IF EXISTS `kebutuhan_khusus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kebutuhan_khusus` (
  `KK_ID` varchar(2) NOT NULL,
  `KK_JENIS` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`KK_ID`),
  UNIQUE KEY `KEBUTUHAN_KHUSUS_PK` (`KK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kebutuhan_khusus`
--

LOCK TABLES `kebutuhan_khusus` WRITE;
/*!40000 ALTER TABLE `kebutuhan_khusus` DISABLE KEYS */;
INSERT INTO `kebutuhan_khusus` VALUES ('1','Tunanetra'),('2','Tunarungu'),('3','Tunadaksa'),('4','Tunalaras');
/*!40000 ALTER TABLE `kebutuhan_khusus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kebutuhan_siswa`
--

DROP TABLE IF EXISTS `kebutuhan_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kebutuhan_siswa` (
  `BS_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `BS_KETERANGAN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`BS_ID`),
  UNIQUE KEY `KEBUTUHAN_SISWA_PK` (`BS_ID`),
  KEY `REL_PPI_KEBUTUHANSW_FK` (`PPI_ID`),
  CONSTRAINT `FK_KEBUTUHA_REL_PPI_K_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kebutuhan_siswa`
--

LOCK TABLES `kebutuhan_siswa` WRITE;
/*!40000 ALTER TABLE `kebutuhan_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `kebutuhan_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kecakapan_kompensatoris`
--

DROP TABLE IF EXISTS `kecakapan_kompensatoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kecakapan_kompensatoris` (
  `PPI_ID` int(11) NOT NULL,
  `MAPEL_ID` int(11) NOT NULL,
  PRIMARY KEY (`PPI_ID`,`MAPEL_ID`),
  UNIQUE KEY `KECAKAPAN_KOMPENSATORIS_PK` (`PPI_ID`,`MAPEL_ID`),
  KEY `KECAKAPAN_KOMPENSATORIS_FK` (`PPI_ID`),
  KEY `KECAKAPAN_KOMPENSATORIS2_FK` (`MAPEL_ID`),
  CONSTRAINT `FK_KECAKAPA_KECAKAPAN_MATA_PEL` FOREIGN KEY (`MAPEL_ID`) REFERENCES `mata_pelajaran` (`MAPEL_ID`),
  CONSTRAINT `FK_KECAKAPA_KECAKAPAN_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kecakapan_kompensatoris`
--

LOCK TABLES `kecakapan_kompensatoris` WRITE;
/*!40000 ALTER TABLE `kecakapan_kompensatoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `kecakapan_kompensatoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kekuatan_siswa`
--

DROP TABLE IF EXISTS `kekuatan_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kekuatan_siswa` (
  `KS_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `KS_KETERANGAN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`KS_ID`),
  UNIQUE KEY `KEKUATAN_SISWA_PK` (`KS_ID`),
  KEY `REL_PPI_KEKUATANSW_FK` (`PPI_ID`),
  CONSTRAINT `FK_KEKUATAN_REL_PPI_K_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kekuatan_siswa`
--

LOCK TABLES `kekuatan_siswa` WRITE;
/*!40000 ALTER TABLE `kekuatan_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `kekuatan_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelainantubuh`
--

DROP TABLE IF EXISTS `kelainantubuh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelainantubuh` (
  `KT_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL,
  `KT_PENYAKIT_KECELAKAAN` varchar(100) DEFAULT NULL,
  `KT_USIA` int(11) DEFAULT NULL,
  `KT_LAMA` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`KT_ID`),
  UNIQUE KEY `KELAINANTUBUH_PK` (`KT_ID`),
  KEY `REL_KELAINANTUBUH_SW_FK` (`SW_ID`),
  CONSTRAINT `FK_KELAINAN_REL_KELAI_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelainantubuh`
--

LOCK TABLES `kelainantubuh` WRITE;
/*!40000 ALTER TABLE `kelainantubuh` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelainantubuh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mata_pelajaran`
--

DROP TABLE IF EXISTS `mata_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mata_pelajaran` (
  `MAPEL_ID` int(11) NOT NULL,
  `MAPEL_NAMA` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`MAPEL_ID`),
  UNIQUE KEY `MATA_PELAJARAN_PK` (`MAPEL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mata_pelajaran`
--

LOCK TABLES `mata_pelajaran` WRITE;
/*!40000 ALTER TABLE `mata_pelajaran` DISABLE KEYS */;
INSERT INTO `mata_pelajaran` VALUES (1,'Pendidikan Agama'),(2,'Pendidikan Kewarganegaraan'),(3,'Bahasa Indonesia'),(4,'Bahasa Inggris'),(5,'Matematika'),(6,'Ilmu Pengetahuan Sosial'),(7,'Ilmu Pengetahuan Alam'),(8,'Seni Budaya'),(9,'Pendidikan Jasmani, Olahraga d'),(10,'Keterampilan Vokaisonal/Teknol');
/*!40000 ALTER TABLE `mata_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pekerjaan`
--

DROP TABLE IF EXISTS `pekerjaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pekerjaan` (
  `PK_ID` int(11) NOT NULL,
  `PK_NAMA` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`PK_ID`),
  UNIQUE KEY `PEKERJAAN_PK` (`PK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pekerjaan`
--

LOCK TABLES `pekerjaan` WRITE;
/*!40000 ALTER TABLE `pekerjaan` DISABLE KEYS */;
INSERT INTO `pekerjaan` VALUES (1,'Petani'),(2,'Wiraswasta'),(3,'PNS'),(4,'Wirausahawan');
/*!40000 ALTER TABLE `pekerjaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penghasilan`
--

DROP TABLE IF EXISTS `penghasilan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penghasilan` (
  `PH_ID` int(11) NOT NULL,
  `PH_BESARAN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PH_ID`),
  UNIQUE KEY `PENGHASILAN_PK` (`PH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penghasilan`
--

LOCK TABLES `penghasilan` WRITE;
/*!40000 ALTER TABLE `penghasilan` DISABLE KEYS */;
INSERT INTO `penghasilan` VALUES (1,'<1.000.000'),(2,'1000.000 - 2.000.000'),(3,'2.000.000 - 3.000.000');
/*!40000 ALTER TABLE `penghasilan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_terlibat`
--

DROP TABLE IF EXISTS `personal_terlibat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_terlibat` (
  `PT_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `PT_JENISPELAYANAN` varchar(100) DEFAULT NULL,
  `PT_FREKUENSI` varchar(100) DEFAULT NULL,
  `PT_LOKASI` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PT_ID`),
  UNIQUE KEY `PERSONAL_TERLIBAT_PK` (`PT_ID`),
  KEY `REL_PERSONALTERLIBAT_PPI_FK` (`PPI_ID`),
  CONSTRAINT `FK_PERSONAL_REL_PERSO_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_terlibat`
--

LOCK TABLES `personal_terlibat` WRITE;
/*!40000 ALTER TABLE `personal_terlibat` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_terlibat` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `program_layanan_kompensatoris`
--

DROP TABLE IF EXISTS `program_layanan_kompensatoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program_layanan_kompensatoris` (
  `PLK_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `PLK_NAMAKETERAMPILAN` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`PLK_ID`),
  UNIQUE KEY `PROGRAM_LAYANAN_KOMPENSATORIS_P` (`PLK_ID`),
  KEY `REL_PLK_PPI_FK` (`PPI_ID`),
  CONSTRAINT `FK_PROGRAM__REL_PLK_P_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program_layanan_kompensatoris`
--

LOCK TABLES `program_layanan_kompensatoris` WRITE;
/*!40000 ALTER TABLE `program_layanan_kompensatoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `program_layanan_kompensatoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rel_kebkhusus_sw`
--

DROP TABLE IF EXISTS `rel_kebkhusus_sw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rel_kebkhusus_sw` (
  `SW_ID` int(11) NOT NULL,
  `KK_ID` varchar(2) NOT NULL,
  PRIMARY KEY (`SW_ID`,`KK_ID`),
  UNIQUE KEY `REL_KEBKHUSUS_IBU_PK` (`SW_ID`,`KK_ID`),
  KEY `REL_KEBKHUSUS_IBU_FK` (`SW_ID`),
  KEY `REL_KEBKHUSUS_IBU2_FK` (`KK_ID`),
  CONSTRAINT `FK_REL_KEBK_REL_KEBKH_KEBUTUHA` FOREIGN KEY (`KK_ID`) REFERENCES `kebutuhan_khusus` (`KK_ID`),
  CONSTRAINT `FK_REL_KEBK_REL_KEBKH_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rel_kebkhusus_sw`
--

LOCK TABLES `rel_kebkhusus_sw` WRITE;
/*!40000 ALTER TABLE `rel_kebkhusus_sw` DISABLE KEYS */;
/*!40000 ALTER TABLE `rel_kebkhusus_sw` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `rombel`
--

DROP TABLE IF EXISTS `rombel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rombel` (
  `RM_ID` int(11) NOT NULL,
  `GR_ID` int(11) NOT NULL,
  `RM_THNAJAR` varchar(10) DEFAULT NULL,
  `RM_BC` char(1) NOT NULL,
  `RM_KELAS` int(11) NOT NULL,
  PRIMARY KEY (`RM_ID`),
  UNIQUE KEY `ROMBEL_PK` (`RM_ID`),
  KEY `REL_WALIKELAS_ROMBEL_FK` (`GR_ID`),
  CONSTRAINT `FK_ROMBEL_REL_WALIK_GURU` FOREIGN KEY (`GR_ID`) REFERENCES `guru` (`GR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rombel`
--

LOCK TABLES `rombel` WRITE;
/*!40000 ALTER TABLE `rombel` DISABLE KEYS */;
INSERT INTO `rombel` VALUES (1,1,'2012/2013','B',1),(2,2,'2012/2013','C',2);
/*!40000 ALTER TABLE `rombel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saudara_kandung`
--

DROP TABLE IF EXISTS `saudara_kandung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saudara_kandung` (
  `SK_ID` int(11) NOT NULL,
  `JP_ID` int(11) DEFAULT NULL,
  `SW_ID` int(11) NOT NULL,
  `SK_NAMA` varchar(50) DEFAULT NULL,
  `SK_JK` char(1) DEFAULT NULL,
  `SK_PENDIDIKAN` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`SK_ID`),
  UNIQUE KEY `SAUDARA_KANDUNG_PK` (`SK_ID`),
  KEY `RELATIONSHIP_3_FK` (`SW_ID`),
  KEY `REL_PENDIDIKAN_SAUDARAKDG_FK` (`JP_ID`),
  CONSTRAINT `FK_SAUDARA__REL_PENDI_JENJANG_` FOREIGN KEY (`JP_ID`) REFERENCES `jenjang_pendidikan` (`JP_ID`),
  CONSTRAINT `FK_SAUDARA__REL_SAUDA_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saudara_kandung`
--

LOCK TABLES `saudara_kandung` WRITE;
/*!40000 ALTER TABLE `saudara_kandung` DISABLE KEYS */;
/*!40000 ALTER TABLE `saudara_kandung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `SW_ID` int(11) NOT NULL,
  `KWN_ID` int(11) NOT NULL,
  `AT_ID` int(11) NOT NULL,
  `PPI_ID` int(11) DEFAULT NULL,
  `AG_ID` int(11) NOT NULL,
  `JT_ID` int(11) NOT NULL,
  `PENDAFTAR_NAMA` varchar(50) DEFAULT NULL,
  `PENDAFTAR_STATUS` varchar(50) DEFAULT NULL,
  `PENDAFTAR_ALAMAT` varchar(100) DEFAULT NULL,
  `PENDAFTAR_TELP` varchar(20) DEFAULT NULL,
  `NIS` char(10) DEFAULT NULL,
  `NISN` char(10) DEFAULT NULL,
  `NIK` char(16) DEFAULT NULL,
  `SW_NAMA` varchar(100) DEFAULT NULL,
  `SW_NAMAPANGGIL` varchar(50) DEFAULT NULL,
  `SW_TEMPATLAHIR` varchar(100) DEFAULT NULL,
  `SW_TGLLAHIR` date DEFAULT NULL,
  `SW_USIAPERMASUK` int(11) DEFAULT NULL,
  `SW_JK` char(1) DEFAULT NULL,
  `SW_BAHASARUMAH` varchar(20) DEFAULT NULL,
  `SW_ANAKKE` int(11) DEFAULT NULL,
  `SW_JMLBERSDR` int(11) DEFAULT NULL,
  `SW_TINGKATASALSEKOLAH` varchar(3) DEFAULT NULL,
  `SW_NAMAASALSEKOLAH` varchar(50) DEFAULT NULL,
  `SW_ASALSEKTHNMASUK` int(11) DEFAULT NULL,
  `SW_ASALSEKTHNLULUS` int(11) DEFAULT NULL,
  `SW_ALAMATASALSEK` varchar(100) DEFAULT NULL,
  `SW_AKTIVSUKA` varchar(200) DEFAULT NULL,
  `SW_LAMAKANDUNGANBLN` int(11) DEFAULT NULL,
  `SW_LAMAKANDUNGANHARI` int(11) DEFAULT NULL,
  `SW_KEADAANKANDUNGAN` tinyint(1) DEFAULT NULL,
  `SW_KEADAANLAHIR` varchar(50) DEFAULT NULL,
  `SW_PROSESLAHIR` varchar(50) DEFAULT NULL,
  `SW_YGMEMBANTULAHIR` varchar(50) DEFAULT NULL,
  `SW_BERATLAHIR` decimal(2,2) DEFAULT NULL,
  `SW_PANJANGLAHIR` int(11) DEFAULT NULL,
  `SW_USIAIBUSAATLAHIR` int(11) DEFAULT NULL,
  `SW_BERATANAK` decimal(2,2) DEFAULT NULL,
  `SW_PANJANGANAK` int(11) DEFAULT NULL,
  `SW_GOLDAR` varchar(2) DEFAULT NULL,
  `SW_LAMAMINUMASI` varchar(20) DEFAULT NULL,
  `SW_DUABLNAWAL` tinyint(1) DEFAULT NULL,
  `SW_MAKANANTAMBAHAN` varchar(100) DEFAULT NULL,
  `SW_ALERGI` varchar(200) DEFAULT NULL,
  `SW_PENGLIHATAN` tinyint(1) DEFAULT NULL,
  `SW_PENDENGARAN` tinyint(1) DEFAULT NULL,
  `SW_PENAMPILAN` tinyint(1) DEFAULT NULL,
  `SW_CIRIFISIK` varchar(100) DEFAULT NULL,
  `SW_BAKATKHUSUS` varchar(100) DEFAULT NULL,
  `SW_PRESTASI` varchar(100) DEFAULT NULL,
  `SW_ALAMAT` varchar(100) DEFAULT NULL,
  `SW_ALAMATRT` int(11) DEFAULT NULL,
  `SW_ALAMATRW` int(11) DEFAULT NULL,
  `SW_ALAMATDUSUN` varchar(30) DEFAULT NULL,
  `SW_ALAMATKEL` varchar(30) DEFAULT NULL,
  `SW_ALAMATKEC` varchar(30) DEFAULT NULL,
  `SW_KODEPOS` char(5) DEFAULT NULL,
  `SW_TELP` varchar(20) DEFAULT NULL,
  `SW_HP` varchar(20) DEFAULT NULL,
  `SW_EMAIL` varchar(50) DEFAULT NULL,
  `SW_SKHUN` varchar(50) DEFAULT NULL,
  `SW_PENERIMAKPS` tinyint(1) DEFAULT NULL,
  `SW_NOKPS` varchar(50) DEFAULT NULL,
  `SW_LASTUPDATE` date DEFAULT NULL,
  PRIMARY KEY (`SW_ID`),
  UNIQUE KEY `SISWA_PK` (`SW_ID`),
  KEY `REL_AGAMA_SW_FK` (`AG_ID`),
  KEY `REL_JENISTINGGAL_SW_FK` (`JT_ID`),
  KEY `REL_ALATTRANS_SW_FK` (`AT_ID`),
  KEY `REL_PPI_SISWA_FK` (`PPI_ID`),
  KEY `REL_WARGANEGARA_SW_FK` (`KWN_ID`),
  CONSTRAINT `FK_SISWA_REL_AGAMA_AGAMA` FOREIGN KEY (`AG_ID`) REFERENCES `agama` (`AG_ID`),
  CONSTRAINT `FK_SISWA_REL_ALATT_ALAT_TRA` FOREIGN KEY (`AT_ID`) REFERENCES `alat_transportasi` (`AT_ID`),
  CONSTRAINT `FK_SISWA_REL_JENIS_JENIS_TI` FOREIGN KEY (`JT_ID`) REFERENCES `jenis_tinggal` (`JT_ID`),
  CONSTRAINT `FK_SISWA_REL_PPI_S_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`),
  CONSTRAINT `FK_SISWA_REL_WARGA_WARGANEG` FOREIGN KEY (`KWN_ID`) REFERENCES `warganegara` (`KWN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (1,1,1,NULL,1,1,'Wawan','Mahasiswa','Surabaya','081999776267','12128','123456','09876','I Wayan Baglur','Made','Gianyar','2015-09-30',12,'L','Bali',2,4,'SMP','SMPN 1 Gianyar',2002,2009,'Gianyar','Menggambar',9,180,NULL,'Sehat','Normal','Bidan',0.99,48,43,0.99,189,'0','2 Tahun',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,1,2,NULL,2,1,NULL,NULL,NULL,NULL,'12129','1234569','124343','Wawan',NULL,'Buleleng','2015-09-24',NULL,'M',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tim_pengembang`
--

DROP TABLE IF EXISTS `tim_pengembang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tim_pengembang` (
  `TP_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `TP_NAMA` varchar(100) DEFAULT NULL,
  `TP_STATUS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TP_ID`),
  UNIQUE KEY `TIM_PENGEMBANG_PK` (`TP_ID`),
  KEY `REL_TIMPENGEMBANG_PPI_FK` (`PPI_ID`),
  CONSTRAINT `FK_TIM_PENG_REL_TIMPE_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tim_pengembang`
--

LOCK TABLES `tim_pengembang` WRITE;
/*!40000 ALTER TABLE `tim_pengembang` DISABLE KEYS */;
INSERT INTO `tim_pengembang` VALUES (1,1,'Ardi Nusawan','Mahasiswa');
/*!40000 ALTER TABLE `tim_pengembang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uraian_kegiatan`
--

DROP TABLE IF EXISTS `uraian_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uraian_kegiatan` (
  `UK_ID` int(11) NOT NULL,
  `PLK_ID` int(11) NOT NULL,
  `UK_TUJUANPEMB` text,
  `UK_STRATEGIPEMB` text,
  `UK_TEKNIK` text,
  PRIMARY KEY (`UK_ID`),
  UNIQUE KEY `URAIAN_KEGIATAN_PK` (`UK_ID`),
  KEY `REL_URAIANKEG_PLK_FK` (`PLK_ID`),
  CONSTRAINT `FK_URAIAN_K_REL_URAIA_PROGRAM_` FOREIGN KEY (`PLK_ID`) REFERENCES `program_layanan_kompensatoris` (`PLK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uraian_kegiatan`
--

LOCK TABLES `uraian_kegiatan` WRITE;
/*!40000 ALTER TABLE `uraian_kegiatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `uraian_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `warganegara`
--

DROP TABLE IF EXISTS `warganegara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warganegara` (
  `KWN_ID` int(11) NOT NULL,
  `KWN_JENIS` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`KWN_ID`),
  UNIQUE KEY `WARGANEGARA_PK` (`KWN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warganegara`
--

LOCK TABLES `warganegara` WRITE;
/*!40000 ALTER TABLE `warganegara` DISABLE KEYS */;
INSERT INTO `warganegara` VALUES (1,'WNI');
/*!40000 ALTER TABLE `warganegara` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'slb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-13 23:03:42
