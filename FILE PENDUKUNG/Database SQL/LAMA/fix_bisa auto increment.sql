-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2015 at 04:06 
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `AG_ID` int(11) NOT NULL,
  `AG_NAMA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`AG_ID`, `AG_NAMA`) VALUES
(1, 'Islam'),
(2, 'Hindu'),
(3, 'Kristen Katolik'),
(4, 'Kristen Protestan'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `alat_transportasi`
--

CREATE TABLE IF NOT EXISTS `alat_transportasi` (
  `AT_ID` int(11) NOT NULL,
  `AT_NAMAALATTRANS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_transportasi`
--

INSERT INTO `alat_transportasi` (`AT_ID`, `AT_NAMAALATTRANS`) VALUES
(1, 'Mobil'),
(2, 'Motor'),
(3, 'Jalan Kaki'),
(4, 'Diantar - Jemput');

-- --------------------------------------------------------

--
-- Table structure for table `based_line`
--

CREATE TABLE IF NOT EXISTS `based_line` (
  `BASELINE_ID` int(11) NOT NULL,
  `PLK_ID` int(11) NOT NULL,
  `BASELINE_KET` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ciri_kepribadian`
--

CREATE TABLE IF NOT EXISTS `ciri_kepribadian` (
  `CK_ID` int(11) NOT NULL,
  `CK_KETERANGAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciri_kepribadian`
--

INSERT INTO `ciri_kepribadian` (`CK_ID`, `CK_KETERANGAN`) VALUES
(1, 'Sopan'),
(2, 'Disiplin'),
(3, 'Bertangung Jawab');

-- --------------------------------------------------------

--
-- Table structure for table `data_asesmen`
--

CREATE TABLE IF NOT EXISTS `data_asesmen` (
  `ASM_ID` int(11) NOT NULL,
  `PPI_ID` int(11) DEFAULT NULL,
  `ASM_SUMBERINFO` varchar(30) DEFAULT NULL,
  `ASM_TGL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_jurnal_kelas`
--

CREATE TABLE IF NOT EXISTS `detil_jurnal_kelas` (
  `DJK_ID` int(11) NOT NULL,
  `MAPEL_ID` int(11) NOT NULL,
  `JK_ID` int(11) NOT NULL,
  `DJK_TANGGAL` date DEFAULT NULL,
  `DJK_MATERI` varchar(200) DEFAULT NULL,
  `DJK_KETERANGAN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_jurnal_materi`
--

CREATE TABLE IF NOT EXISTS `detil_jurnal_materi` (
  `DJM_ID` int(11) NOT NULL,
  `JM_ID` int(11) DEFAULT NULL,
  `RM_ID` int(11) DEFAULT NULL,
  `DJM_TANGGAL` date DEFAULT NULL,
  `DJM_JAMKE` varchar(10) DEFAULT NULL,
  `DJM_MATERIPEMBELAJARAN` varchar(100) DEFAULT NULL,
  `DJM_JMLSWHADIR` int(11) DEFAULT NULL,
  `DJM_JMLSWTAKHADIR` int(11) DEFAULT NULL,
  `DJM_NAMAKETTAKHADIR` varchar(200) DEFAULT NULL,
  `DJM_CATATAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_kebutuhan`
--

CREATE TABLE IF NOT EXISTS `detil_kebutuhan` (
  `DETKEB_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `DETKEB_ALAT` varchar(100) DEFAULT NULL,
  `DETKEB_PENYESUAIAN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_penempatan`
--

CREATE TABLE IF NOT EXISTS `detil_penempatan` (
  `DP_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `DP_DETIL` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_rombel_siswa`
--

CREATE TABLE IF NOT EXISTS `detil_rombel_siswa` (
  `RM_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
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
  `GR_NOSERTIFIKASI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`GR_ID`, `JP_ID`, `GR_NIP`, `GR_NUPTK`, `GR_NAMA`, `GR_GELAR`, `GR_JK`, `GR_JURUSAN`, `GR_SERTIFIKASI`, `GR_KEPEGAWAIAN`, `GR_JABATAN`, `GR_TMTKERJA`, `GR_TGSTAMBAH`, `GR_MENGAJAR`, `GR_JAMPERMGG`, `GR_NOIJAZAH`, `GR_NOSERTIFIKASI`) VALUES
(1, 1, '196001011993931008', '843373861200032', 'Winarno', 'S.Pd', 'L', 'PLB', 'Guru Kelas SDLB', 'PNS Diperbantu', 'Guru Kelas SDLB', '1994-01-09', 'Kepala Sekolah', '', 0, '', ''),
(2, 2, '196505042007011026', '3836743644200022', 'Winarno', 'S.Pd', 'L', 'PLB', 'Guru Kelas SDLB', 'PNS Diperbantu', 'Guru Kelas SDLB', '2009-04-01', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_asesmen`
--

CREATE TABLE IF NOT EXISTS `hasil_asesmen` (
  `HA_ID` int(11) NOT NULL,
  `ASM_ID` int(11) NOT NULL,
  `HA_RINGKASAN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE IF NOT EXISTS `imunisasi` (
  `IM_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL,
  `IM_JENIS` varchar(20) DEFAULT NULL,
  `IM_USIA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indikator_keberhasilan`
--

CREATE TABLE IF NOT EXISTS `indikator_keberhasilan` (
  `INDI_ID` int(11) NOT NULL,
  `PLK_ID` int(11) NOT NULL,
  `INDI_KET` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tinggal`
--

CREATE TABLE IF NOT EXISTS `jenis_tinggal` (
  `JT_ID` int(11) NOT NULL,
  `JT_JENISTINGGAL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tinggal`
--

INSERT INTO `jenis_tinggal` (`JT_ID`, `JT_JENISTINGGAL`) VALUES
(1, 'Orang Tua'),
(2, 'Wali'),
(3, 'Lain - lain');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang_pendidikan`
--

CREATE TABLE IF NOT EXISTS `jenjang_pendidikan` (
  `JP_ID` int(11) NOT NULL,
  `JP_JENJANG` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang_pendidikan`
--

INSERT INTO `jenjang_pendidikan` (`JP_ID`, `JP_JENJANG`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'SMKK');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_kelas`
--

CREATE TABLE IF NOT EXISTS `jurnal_kelas` (
  `JK_ID` int(11) NOT NULL,
  `RM_ID` int(11) NOT NULL,
  `GR_ID` int(11) NOT NULL,
  `JK_BULAN` int(11) DEFAULT NULL,
  `JK_TAHUN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_materi`
--

CREATE TABLE IF NOT EXISTS `jurnal_materi` (
  `JM_ID` int(11) NOT NULL,
  `MAPEL_ID` int(11) DEFAULT NULL,
  `GR_ID` int(11) NOT NULL,
  `JM_THNAJARAN` varchar(10) DEFAULT NULL,
  `JM_SEMESTER` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_materi`
--

INSERT INTO `jurnal_materi` (`JM_ID`, `MAPEL_ID`, `GR_ID`, `JM_THNAJARAN`, `JM_SEMESTER`) VALUES
(1, 1, 1, '2015/2016', '1'),
(2, 2, 2, '2015/2016', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_pribadi_siswa`
--

CREATE TABLE IF NOT EXISTS `jurnal_pribadi_siswa` (
  `JPSW_ID` int(11) NOT NULL,
  `RM_ID` int(11) DEFAULT NULL,
  `SW_ID` int(11) DEFAULT NULL,
  `JPSW_TANGGAL` date DEFAULT NULL,
  `JPSW_PERKEMBANGAN` varchar(200) DEFAULT NULL,
  `JPSW_KETERANGAN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_khusus`
--

CREATE TABLE IF NOT EXISTS `kebutuhan_khusus` (
  `KK_ID` varchar(2) NOT NULL,
  `KK_JENIS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebutuhan_khusus`
--

INSERT INTO `kebutuhan_khusus` (`KK_ID`, `KK_JENIS`) VALUES
('1', 'Tunanetra'),
('2', 'Tunarungu'),
('3', 'Tunadaksa'),
('4', 'Tunalaras');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_siswa`
--

CREATE TABLE IF NOT EXISTS `kebutuhan_siswa` (
  `BS_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `BS_KETERANGAN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecakapan_kompensatoris`
--

CREATE TABLE IF NOT EXISTS `kecakapan_kompensatoris` (
  `PPI_ID` int(11) NOT NULL,
  `MAPEL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kekuatan_siswa`
--

CREATE TABLE IF NOT EXISTS `kekuatan_siswa` (
  `KS_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `KS_KETERANGAN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelainantubuh`
--

CREATE TABLE IF NOT EXISTS `kelainantubuh` (
  `KT_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL,
  `KT_PENYAKIT_KECELAKAAN` varchar(100) DEFAULT NULL,
  `KT_USIA` int(11) DEFAULT NULL,
  `KT_LAMA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `MAPEL_ID` int(11) NOT NULL,
  `MAPEL_NAMA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`MAPEL_ID`, `MAPEL_NAMA`) VALUES
(1, 'Pendidikan Agama'),
(2, 'Pendidikan Kewarganegaraan'),
(3, 'Bahasa Indonesia'),
(4, 'Bahasa Inggris'),
(5, 'Matematika'),
(6, 'Ilmu Pengetahuan Sosial'),
(7, 'Ilmu Pengetahuan Alam'),
(8, 'Seni Budaya'),
(9, 'Pendidikan Jasmani, Olahraga d'),
(10, 'Keterampilan Vokaisonal/Teknol');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `PK_ID` int(11) NOT NULL,
  `PK_NAMA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`PK_ID`, `PK_NAMA`) VALUES
(1, 'Petani'),
(2, 'Wiraswasta'),
(3, 'PNS'),
(4, 'Wirausahawan');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilan`
--

CREATE TABLE IF NOT EXISTS `penghasilan` (
  `PH_ID` int(11) NOT NULL,
  `PH_BESARAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghasilan`
--

INSERT INTO `penghasilan` (`PH_ID`, `PH_BESARAN`) VALUES
(1, '<1.000.000'),
(2, '1000.000 - 2.000.000'),
(3, '2.000.000 - 3.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `personal_terlibat`
--

CREATE TABLE IF NOT EXISTS `personal_terlibat` (
  `PT_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `PT_JENISPELAYANAN` varchar(100) DEFAULT NULL,
  `PT_FREKUENSI` varchar(100) DEFAULT NULL,
  `PT_LOKASI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ppi`
--

CREATE TABLE IF NOT EXISTS `ppi` (
  `PPI_ID` int(11) NOT NULL,
  `SW_ID` int(11) NOT NULL,
  `PPI_SEMESTER` int(11) DEFAULT NULL,
  `PPI_THNAJAR` varchar(10) DEFAULT NULL,
  `PPI_KEKHUSUSANUTAMA` varchar(50) DEFAULT NULL,
  `PPI_KEKHUSUSANSEKUNDER` varchar(50) DEFAULT NULL,
  `PPI_STDKURIKULUM` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppi`
--

INSERT INTO `ppi` (`PPI_ID`, `SW_ID`, `PPI_SEMESTER`, `PPI_THNAJAR`, `PPI_KEKHUSUSANUTAMA`, `PPI_KEKHUSUSANSEKUNDER`, `PPI_STDKURIKULUM`) VALUES
(1, 1, 1, '2012/2013', 'Tunagrahita', NULL, 'Kurikulum Standar Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `program_layanan_kompensatoris`
--

CREATE TABLE IF NOT EXISTS `program_layanan_kompensatoris` (
  `PLK_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `PLK_NAMAKETERAMPILAN` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rel_kebkhusus_sw`
--

CREATE TABLE IF NOT EXISTS `rel_kebkhusus_sw` (
  `SW_ID` int(11) NOT NULL,
  `KK_ID` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rel_kepribadian_sw`
--

CREATE TABLE IF NOT EXISTS `rel_kepribadian_sw` (
  `SW_ID` int(11) NOT NULL,
  `CK_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE IF NOT EXISTS `rombel` (
  `RM_ID` int(11) NOT NULL,
  `GR_ID` int(11) NOT NULL,
  `RM_THNAJAR` varchar(10) DEFAULT NULL,
  `RM_BC` char(1) NOT NULL,
  `RM_KELAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rombel`
--

INSERT INTO `rombel` (`RM_ID`, `GR_ID`, `RM_THNAJAR`, `RM_BC`, `RM_KELAS`) VALUES
(1, 1, '2012/2013', 'B', 1),
(2, 2, '2012/2013', 'C', 2);

-- --------------------------------------------------------

--
-- Table structure for table `saudara_kandung`
--

CREATE TABLE IF NOT EXISTS `saudara_kandung` (
  `SK_ID` int(11) NOT NULL,
  `JP_ID` int(11) DEFAULT NULL,
  `SW_ID` int(11) NOT NULL,
  `SK_NAMA` varchar(50) DEFAULT NULL,
  `SK_JK` char(1) DEFAULT NULL,
  `SK_PENDIDIKAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `SW_ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
  `SW_LASTUPDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`SW_ID`, `KWN_ID`, `AT_ID`, `PPI_ID`, `AG_ID`, `JT_ID`, `PENDAFTAR_NAMA`, `PENDAFTAR_STATUS`, `PENDAFTAR_ALAMAT`, `PENDAFTAR_TELP`, `NIS`, `NISN`, `NIK`, `SW_NAMA`, `SW_NAMAPANGGIL`, `SW_TEMPATLAHIR`, `SW_TGLLAHIR`, `SW_USIAPERMASUK`, `SW_JK`, `SW_BAHASARUMAH`, `SW_ANAKKE`, `SW_JMLBERSDR`, `SW_TINGKATASALSEKOLAH`, `SW_NAMAASALSEKOLAH`, `SW_ASALSEKTHNMASUK`, `SW_ASALSEKTHNLULUS`, `SW_ALAMATASALSEK`, `SW_AKTIVSUKA`, `SW_LAMAKANDUNGANBLN`, `SW_LAMAKANDUNGANHARI`, `SW_KEADAANKANDUNGAN`, `SW_KEADAANLAHIR`, `SW_PROSESLAHIR`, `SW_YGMEMBANTULAHIR`, `SW_BERATLAHIR`, `SW_PANJANGLAHIR`, `SW_USIAIBUSAATLAHIR`, `SW_BERATANAK`, `SW_PANJANGANAK`, `SW_GOLDAR`, `SW_LAMAMINUMASI`, `SW_DUABLNAWAL`, `SW_MAKANANTAMBAHAN`, `SW_ALERGI`, `SW_PENGLIHATAN`, `SW_PENDENGARAN`, `SW_PENAMPILAN`, `SW_CIRIFISIK`, `SW_BAKATKHUSUS`, `SW_PRESTASI`, `SW_ALAMAT`, `SW_ALAMATRT`, `SW_ALAMATRW`, `SW_ALAMATDUSUN`, `SW_ALAMATKEL`, `SW_ALAMATKEC`, `SW_KODEPOS`, `SW_TELP`, `SW_HP`, `SW_EMAIL`, `SW_SKHUN`, `SW_PENERIMAKPS`, `SW_NOKPS`, `SW_LASTUPDATE`) VALUES
(1, 1, 1, NULL, 1, 1, 'Wawan', 'Mahasiswa', 'Surabaya', '081999776267', '12128', '123456', '09876', 'I Wayan Baglur', 'Made', 'Gianyar', '2015-09-30', 12, 'L', 'Bali', 2, 4, 'SMP', 'SMPN 1 Gianyar', 2002, 2009, 'Gianyar', 'Menggambar', 9, 180, NULL, 'Sehat', 'Normal', 'Bidan', '0.99', 48, 43, '0.99', 189, '0', '2 Tahun', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 2, NULL, 2, 1, NULL, NULL, NULL, NULL, '12129', '1234569', '124343', 'Wawan', NULL, 'Buleleng', '2015-09-24', NULL, 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tim_pengembang`
--

CREATE TABLE IF NOT EXISTS `tim_pengembang` (
  `TP_ID` int(11) NOT NULL,
  `PPI_ID` int(11) NOT NULL,
  `TP_NAMA` varchar(100) DEFAULT NULL,
  `TP_STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim_pengembang`
--

INSERT INTO `tim_pengembang` (`TP_ID`, `PPI_ID`, `TP_NAMA`, `TP_STATUS`) VALUES
(1, 1, 'Ardi Nusawan', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `uraian_kegiatan`
--

CREATE TABLE IF NOT EXISTS `uraian_kegiatan` (
  `UK_ID` int(11) NOT NULL,
  `PLK_ID` int(11) NOT NULL,
  `UK_TUJUANPEMB` text,
  `UK_STRATEGIPEMB` text,
  `UK_TEKNIK` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE IF NOT EXISTS `wali_murid` (
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
  `WM_KESEMPATANKOM` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warganegara`
--

CREATE TABLE IF NOT EXISTS `warganegara` (
  `KWN_ID` int(11) NOT NULL,
  `KWN_JENIS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warganegara`
--

INSERT INTO `warganegara` (`KWN_ID`, `KWN_JENIS`) VALUES
(1, 'WNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`AG_ID`),
  ADD UNIQUE KEY `AGAMA_PK` (`AG_ID`);

--
-- Indexes for table `alat_transportasi`
--
ALTER TABLE `alat_transportasi`
  ADD PRIMARY KEY (`AT_ID`),
  ADD UNIQUE KEY `ALAT_TRANSPORTASI_PK` (`AT_ID`);

--
-- Indexes for table `based_line`
--
ALTER TABLE `based_line`
  ADD PRIMARY KEY (`BASELINE_ID`),
  ADD UNIQUE KEY `BASED_LINE_PK` (`BASELINE_ID`),
  ADD KEY `REL_BASEDLINE_PLK_FK` (`PLK_ID`);

--
-- Indexes for table `ciri_kepribadian`
--
ALTER TABLE `ciri_kepribadian`
  ADD PRIMARY KEY (`CK_ID`),
  ADD UNIQUE KEY `CIRI_KEPRIBADIAN_PK` (`CK_ID`);

--
-- Indexes for table `data_asesmen`
--
ALTER TABLE `data_asesmen`
  ADD PRIMARY KEY (`ASM_ID`),
  ADD UNIQUE KEY `DATA_ASESMEN_PK` (`ASM_ID`),
  ADD KEY `REL_ASESMEN_PPI_FK` (`PPI_ID`);

--
-- Indexes for table `detil_jurnal_kelas`
--
ALTER TABLE `detil_jurnal_kelas`
  ADD PRIMARY KEY (`DJK_ID`),
  ADD UNIQUE KEY `DETIL_JURNAL_KELAS_PK` (`DJK_ID`),
  ADD KEY `REK_MAPEL_DETILJURNALKELAS_FK` (`MAPEL_ID`),
  ADD KEY `REL_DETILJURNALKELAS_FK` (`JK_ID`);

--
-- Indexes for table `detil_jurnal_materi`
--
ALTER TABLE `detil_jurnal_materi`
  ADD PRIMARY KEY (`DJM_ID`),
  ADD UNIQUE KEY `DETIL_JURNAL_MATERI_PK` (`DJM_ID`),
  ADD KEY `REL_DETILJURNALMATERI_FK` (`JM_ID`),
  ADD KEY `REL_DETILJURNALMATERI_ROMBEL_FK` (`RM_ID`);

--
-- Indexes for table `detil_kebutuhan`
--
ALTER TABLE `detil_kebutuhan`
  ADD PRIMARY KEY (`DETKEB_ID`),
  ADD UNIQUE KEY `DETIL_KEBUTUHAN_PK` (`DETKEB_ID`),
  ADD KEY `REL_DETKEBUTUHAN_PPI_FK` (`PPI_ID`);

--
-- Indexes for table `detil_penempatan`
--
ALTER TABLE `detil_penempatan`
  ADD PRIMARY KEY (`DP_ID`),
  ADD UNIQUE KEY `DETIL_PENEMPATAN_PK` (`DP_ID`),
  ADD KEY `REL_PPI_PENEMPATANSW_FK` (`PPI_ID`);

--
-- Indexes for table `detil_rombel_siswa`
--
ALTER TABLE `detil_rombel_siswa`
  ADD PRIMARY KEY (`RM_ID`,`SW_ID`),
  ADD KEY `REL_ROMBRL_SW_FK` (`SW_ID`),
  ADD KEY `REL_DETROMBELSW_1_FK` (`RM_ID`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`GR_ID`),
  ADD UNIQUE KEY `GURU_PK` (`GR_ID`),
  ADD KEY `REL_PENDIDIKAN_GURU_FK` (`JP_ID`);

--
-- Indexes for table `hasil_asesmen`
--
ALTER TABLE `hasil_asesmen`
  ADD PRIMARY KEY (`HA_ID`),
  ADD UNIQUE KEY `HASIL_ASESMEN_PK` (`HA_ID`),
  ADD KEY `REL_RANGKUMAN_HASIL_ASASMEN_FK` (`ASM_ID`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`IM_ID`),
  ADD UNIQUE KEY `IMUNISASI_PK` (`IM_ID`),
  ADD KEY `REL_IMUNISASI_SW_FK` (`SW_ID`);

--
-- Indexes for table `indikator_keberhasilan`
--
ALTER TABLE `indikator_keberhasilan`
  ADD PRIMARY KEY (`INDI_ID`),
  ADD UNIQUE KEY `INDIKATOR_KEBERHASILAN_PK` (`INDI_ID`),
  ADD KEY `REL_INDIKATORBERHASIL_PLK_FK` (`PLK_ID`);

--
-- Indexes for table `jenis_tinggal`
--
ALTER TABLE `jenis_tinggal`
  ADD PRIMARY KEY (`JT_ID`),
  ADD UNIQUE KEY `JENIS_TINGGAL_PK` (`JT_ID`);

--
-- Indexes for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  ADD PRIMARY KEY (`JP_ID`),
  ADD UNIQUE KEY `JENJANG_PENDIDIKAN_PK` (`JP_ID`);

--
-- Indexes for table `jurnal_kelas`
--
ALTER TABLE `jurnal_kelas`
  ADD PRIMARY KEY (`JK_ID`),
  ADD UNIQUE KEY `JURNAL_KELAS_PK` (`JK_ID`),
  ADD KEY `REL_JURNALKELAS_GURU_FK` (`GR_ID`),
  ADD KEY `REL_JURNALKELAS_ROMBEL_FK` (`RM_ID`);

--
-- Indexes for table `jurnal_materi`
--
ALTER TABLE `jurnal_materi`
  ADD PRIMARY KEY (`JM_ID`),
  ADD UNIQUE KEY `JURNAL_MATERI_PK` (`JM_ID`),
  ADD KEY `REL_GURU_JURNALMATERI_FK` (`GR_ID`),
  ADD KEY `REL_JURNALMATERI_MAPEL_FK` (`MAPEL_ID`);

--
-- Indexes for table `jurnal_pribadi_siswa`
--
ALTER TABLE `jurnal_pribadi_siswa`
  ADD PRIMARY KEY (`JPSW_ID`),
  ADD UNIQUE KEY `JURNAL_PRIBADI_SISWA_PK` (`JPSW_ID`),
  ADD KEY `REL_JURNALPRIBADISW_SWROMBEL_FK` (`RM_ID`,`SW_ID`);

--
-- Indexes for table `kebutuhan_khusus`
--
ALTER TABLE `kebutuhan_khusus`
  ADD PRIMARY KEY (`KK_ID`),
  ADD UNIQUE KEY `KEBUTUHAN_KHUSUS_PK` (`KK_ID`);

--
-- Indexes for table `kebutuhan_siswa`
--
ALTER TABLE `kebutuhan_siswa`
  ADD PRIMARY KEY (`BS_ID`),
  ADD UNIQUE KEY `KEBUTUHAN_SISWA_PK` (`BS_ID`),
  ADD KEY `REL_PPI_KEBUTUHANSW_FK` (`PPI_ID`);

--
-- Indexes for table `kecakapan_kompensatoris`
--
ALTER TABLE `kecakapan_kompensatoris`
  ADD PRIMARY KEY (`PPI_ID`,`MAPEL_ID`),
  ADD UNIQUE KEY `KECAKAPAN_KOMPENSATORIS_PK` (`PPI_ID`,`MAPEL_ID`),
  ADD KEY `KECAKAPAN_KOMPENSATORIS_FK` (`PPI_ID`),
  ADD KEY `KECAKAPAN_KOMPENSATORIS2_FK` (`MAPEL_ID`);

--
-- Indexes for table `kekuatan_siswa`
--
ALTER TABLE `kekuatan_siswa`
  ADD PRIMARY KEY (`KS_ID`),
  ADD UNIQUE KEY `KEKUATAN_SISWA_PK` (`KS_ID`),
  ADD KEY `REL_PPI_KEKUATANSW_FK` (`PPI_ID`);

--
-- Indexes for table `kelainantubuh`
--
ALTER TABLE `kelainantubuh`
  ADD PRIMARY KEY (`KT_ID`),
  ADD UNIQUE KEY `KELAINANTUBUH_PK` (`KT_ID`),
  ADD KEY `REL_KELAINANTUBUH_SW_FK` (`SW_ID`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`MAPEL_ID`),
  ADD UNIQUE KEY `MATA_PELAJARAN_PK` (`MAPEL_ID`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`PK_ID`),
  ADD UNIQUE KEY `PEKERJAAN_PK` (`PK_ID`);

--
-- Indexes for table `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`PH_ID`),
  ADD UNIQUE KEY `PENGHASILAN_PK` (`PH_ID`);

--
-- Indexes for table `personal_terlibat`
--
ALTER TABLE `personal_terlibat`
  ADD PRIMARY KEY (`PT_ID`),
  ADD UNIQUE KEY `PERSONAL_TERLIBAT_PK` (`PT_ID`),
  ADD KEY `REL_PERSONALTERLIBAT_PPI_FK` (`PPI_ID`);

--
-- Indexes for table `ppi`
--
ALTER TABLE `ppi`
  ADD PRIMARY KEY (`PPI_ID`),
  ADD UNIQUE KEY `PPI_PK` (`PPI_ID`),
  ADD KEY `REL_PPI_SISWA2_FK` (`SW_ID`);

--
-- Indexes for table `program_layanan_kompensatoris`
--
ALTER TABLE `program_layanan_kompensatoris`
  ADD PRIMARY KEY (`PLK_ID`),
  ADD UNIQUE KEY `PROGRAM_LAYANAN_KOMPENSATORIS_P` (`PLK_ID`),
  ADD KEY `REL_PLK_PPI_FK` (`PPI_ID`);

--
-- Indexes for table `rel_kebkhusus_sw`
--
ALTER TABLE `rel_kebkhusus_sw`
  ADD PRIMARY KEY (`SW_ID`,`KK_ID`),
  ADD UNIQUE KEY `REL_KEBKHUSUS_IBU_PK` (`SW_ID`,`KK_ID`),
  ADD KEY `REL_KEBKHUSUS_IBU_FK` (`SW_ID`),
  ADD KEY `REL_KEBKHUSUS_IBU2_FK` (`KK_ID`);

--
-- Indexes for table `rel_kepribadian_sw`
--
ALTER TABLE `rel_kepribadian_sw`
  ADD PRIMARY KEY (`SW_ID`,`CK_ID`),
  ADD UNIQUE KEY `REL_KEPRIBADIAN_SW_PK` (`SW_ID`,`CK_ID`),
  ADD KEY `REL_KEPRIBADIAN_SW_FK` (`SW_ID`),
  ADD KEY `REL_KEPRIBADIAN_SW2_FK` (`CK_ID`);

--
-- Indexes for table `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`RM_ID`),
  ADD UNIQUE KEY `ROMBEL_PK` (`RM_ID`),
  ADD KEY `REL_WALIKELAS_ROMBEL_FK` (`GR_ID`);

--
-- Indexes for table `saudara_kandung`
--
ALTER TABLE `saudara_kandung`
  ADD PRIMARY KEY (`SK_ID`),
  ADD UNIQUE KEY `SAUDARA_KANDUNG_PK` (`SK_ID`),
  ADD KEY `RELATIONSHIP_3_FK` (`SW_ID`),
  ADD KEY `REL_PENDIDIKAN_SAUDARAKDG_FK` (`JP_ID`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 
  ADD UNIQUE KEY `SISWA_PK` (`SW_ID`),
  ADD KEY `REL_AGAMA_SW_FK` (`AG_ID`),
  ADD KEY `REL_JENISTINGGAL_SW_FK` (`JT_ID`),
  ADD KEY `REL_ALATTRANS_SW_FK` (`AT_ID`),
  ADD KEY `REL_PPI_SISWA_FK` (`PPI_ID`),
  ADD KEY `REL_WARGANEGARA_SW_FK` (`KWN_ID`);

--
-- Indexes for table `tim_pengembang`
--
ALTER TABLE `tim_pengembang`
  ADD PRIMARY KEY (`TP_ID`),
  ADD UNIQUE KEY `TIM_PENGEMBANG_PK` (`TP_ID`),
  ADD KEY `REL_TIMPENGEMBANG_PPI_FK` (`PPI_ID`);

--
-- Indexes for table `uraian_kegiatan`
--
ALTER TABLE `uraian_kegiatan`
  ADD PRIMARY KEY (`UK_ID`),
  ADD UNIQUE KEY `URAIAN_KEGIATAN_PK` (`UK_ID`),
  ADD KEY `REL_URAIANKEG_PLK_FK` (`PLK_ID`);

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`WM_ID`),
  ADD UNIQUE KEY `WALI_MURID_PK` (`WM_ID`),
  ADD KEY `REL_WALIMURID_SW_FK` (`SW_ID`),
  ADD KEY `REL_PENGHASILAN_WM_FK` (`PH_ID`),
  ADD KEY `REL_PEKERJAAN_WM_FK` (`PK_ID`),
  ADD KEY `REL_KEBKHUSUS_WM_FK` (`KK_ID`),
  ADD KEY `REL_WARGANEGARA_WM_FK` (`KWN_ID`),
  ADD KEY `REL_JENJANGPEND_WM_FK` (`JP_ID`);

--
-- Indexes for table `warganegara`
--
ALTER TABLE `warganegara`
  ADD PRIMARY KEY (`KWN_ID`),
  ADD UNIQUE KEY `WARGANEGARA_PK` (`KWN_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `based_line`
--
ALTER TABLE `based_line`
  ADD CONSTRAINT `FK_BASED_LI_REL_BASED_PROGRAM_` FOREIGN KEY (`PLK_ID`) REFERENCES `program_layanan_kompensatoris` (`PLK_ID`);

--
-- Constraints for table `data_asesmen`
--
ALTER TABLE `data_asesmen`
  ADD CONSTRAINT `FK_DATA_ASE_REL_ASESM_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `detil_jurnal_kelas`
--
ALTER TABLE `detil_jurnal_kelas`
  ADD CONSTRAINT `FK_DETIL_JU_REK_MAPEL_MATA_PEL` FOREIGN KEY (`MAPEL_ID`) REFERENCES `mata_pelajaran` (`MAPEL_ID`),
  ADD CONSTRAINT `FK_DETIL_JU_REL_DETIL_JURNAL_K` FOREIGN KEY (`JK_ID`) REFERENCES `jurnal_kelas` (`JK_ID`);

--
-- Constraints for table `detil_jurnal_materi`
--
ALTER TABLE `detil_jurnal_materi`
  ADD CONSTRAINT `FK_DETIL_JU_REL_DETIL_JURNAL_M` FOREIGN KEY (`JM_ID`) REFERENCES `jurnal_materi` (`JM_ID`),
  ADD CONSTRAINT `FK_DETIL_JU_REL_DETIL_ROMBEL` FOREIGN KEY (`RM_ID`) REFERENCES `rombel` (`RM_ID`);

--
-- Constraints for table `detil_kebutuhan`
--
ALTER TABLE `detil_kebutuhan`
  ADD CONSTRAINT `FK_DETIL_KE_REL_DETKE_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `detil_penempatan`
--
ALTER TABLE `detil_penempatan`
  ADD CONSTRAINT `FK_DETIL_PE_REL_PPI_P_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `detil_rombel_siswa`
--
ALTER TABLE `detil_rombel_siswa`
  ADD CONSTRAINT `FK_DETIL_RO_REL_DETRO_ROMBEL` FOREIGN KEY (`RM_ID`) REFERENCES `rombel` (`RM_ID`),
  ADD CONSTRAINT `FK_DETIL_RO_REL_ROMBR_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `FK_GURU_REL_PENDI_JENJANG_` FOREIGN KEY (`JP_ID`) REFERENCES `jenjang_pendidikan` (`JP_ID`);

--
-- Constraints for table `hasil_asesmen`
--
ALTER TABLE `hasil_asesmen`
  ADD CONSTRAINT `FK_HASIL_AS_REL_RANGK_DATA_ASE` FOREIGN KEY (`ASM_ID`) REFERENCES `data_asesmen` (`ASM_ID`);

--
-- Constraints for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `FK_IMUNISAS_REL_IMUNI_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`);

--
-- Constraints for table `indikator_keberhasilan`
--
ALTER TABLE `indikator_keberhasilan`
  ADD CONSTRAINT `FK_INDIKATO_REL_INDIK_PROGRAM_` FOREIGN KEY (`PLK_ID`) REFERENCES `program_layanan_kompensatoris` (`PLK_ID`);

--
-- Constraints for table `jurnal_kelas`
--
ALTER TABLE `jurnal_kelas`
  ADD CONSTRAINT `FK_JURNAL_K_REL_JURNA_GURU` FOREIGN KEY (`GR_ID`) REFERENCES `guru` (`GR_ID`),
  ADD CONSTRAINT `FK_JURNAL_K_REL_JURNA_ROMBEL` FOREIGN KEY (`RM_ID`) REFERENCES `rombel` (`RM_ID`);

--
-- Constraints for table `jurnal_materi`
--
ALTER TABLE `jurnal_materi`
  ADD CONSTRAINT `FK_JURNAL_M_REL_GURU__GURU` FOREIGN KEY (`GR_ID`) REFERENCES `guru` (`GR_ID`),
  ADD CONSTRAINT `FK_JURNAL_M_REL_JURNA_MATA_PEL` FOREIGN KEY (`MAPEL_ID`) REFERENCES `mata_pelajaran` (`MAPEL_ID`);

--
-- Constraints for table `jurnal_pribadi_siswa`
--
ALTER TABLE `jurnal_pribadi_siswa`
  ADD CONSTRAINT `FK_JURNAL_P_REL_JURNA_DETIL_RO` FOREIGN KEY (`RM_ID`, `SW_ID`) REFERENCES `detil_rombel_siswa` (`RM_ID`, `SW_ID`);

--
-- Constraints for table `kebutuhan_siswa`
--
ALTER TABLE `kebutuhan_siswa`
  ADD CONSTRAINT `FK_KEBUTUHA_REL_PPI_K_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `kecakapan_kompensatoris`
--
ALTER TABLE `kecakapan_kompensatoris`
  ADD CONSTRAINT `FK_KECAKAPA_KECAKAPAN_MATA_PEL` FOREIGN KEY (`MAPEL_ID`) REFERENCES `mata_pelajaran` (`MAPEL_ID`),
  ADD CONSTRAINT `FK_KECAKAPA_KECAKAPAN_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `kekuatan_siswa`
--
ALTER TABLE `kekuatan_siswa`
  ADD CONSTRAINT `FK_KEKUATAN_REL_PPI_K_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `kelainantubuh`
--
ALTER TABLE `kelainantubuh`
  ADD CONSTRAINT `FK_KELAINAN_REL_KELAI_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`);

--
-- Constraints for table `personal_terlibat`
--
ALTER TABLE `personal_terlibat`
  ADD CONSTRAINT `FK_PERSONAL_REL_PERSO_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `ppi`
--
ALTER TABLE `ppi`
  ADD CONSTRAINT `FK_PPI_REL_PPI_S_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`);

--
-- Constraints for table `program_layanan_kompensatoris`
--
ALTER TABLE `program_layanan_kompensatoris`
  ADD CONSTRAINT `FK_PROGRAM__REL_PLK_P_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `rel_kebkhusus_sw`
--
ALTER TABLE `rel_kebkhusus_sw`
  ADD CONSTRAINT `FK_REL_KEBK_REL_KEBKH_KEBUTUHA` FOREIGN KEY (`KK_ID`) REFERENCES `kebutuhan_khusus` (`KK_ID`),
  ADD CONSTRAINT `FK_REL_KEBK_REL_KEBKH_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`);

--
-- Constraints for table `rel_kepribadian_sw`
--
ALTER TABLE `rel_kepribadian_sw`
  ADD CONSTRAINT `FK_REL_KEPR_REL_KEPRI_CIRI_KEP` FOREIGN KEY (`CK_ID`) REFERENCES `ciri_kepribadian` (`CK_ID`),
  ADD CONSTRAINT `FK_REL_KEPR_REL_KEPRI_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`);

--
-- Constraints for table `rombel`
--
ALTER TABLE `rombel`
  ADD CONSTRAINT `FK_ROMBEL_REL_WALIK_GURU` FOREIGN KEY (`GR_ID`) REFERENCES `guru` (`GR_ID`);

--
-- Constraints for table `saudara_kandung`
--
ALTER TABLE `saudara_kandung`
  ADD CONSTRAINT `FK_SAUDARA__REL_PENDI_JENJANG_` FOREIGN KEY (`JP_ID`) REFERENCES `jenjang_pendidikan` (`JP_ID`),
  ADD CONSTRAINT `FK_SAUDARA__REL_SAUDA_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `FK_SISWA_REL_AGAMA_AGAMA` FOREIGN KEY (`AG_ID`) REFERENCES `agama` (`AG_ID`),
  ADD CONSTRAINT `FK_SISWA_REL_ALATT_ALAT_TRA` FOREIGN KEY (`AT_ID`) REFERENCES `alat_transportasi` (`AT_ID`),
  ADD CONSTRAINT `FK_SISWA_REL_JENIS_JENIS_TI` FOREIGN KEY (`JT_ID`) REFERENCES `jenis_tinggal` (`JT_ID`),
  ADD CONSTRAINT `FK_SISWA_REL_PPI_S_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`),
  ADD CONSTRAINT `FK_SISWA_REL_WARGA_WARGANEG` FOREIGN KEY (`KWN_ID`) REFERENCES `warganegara` (`KWN_ID`);

--
-- Constraints for table `tim_pengembang`
--
ALTER TABLE `tim_pengembang`
  ADD CONSTRAINT `FK_TIM_PENG_REL_TIMPE_PPI` FOREIGN KEY (`PPI_ID`) REFERENCES `ppi` (`PPI_ID`);

--
-- Constraints for table `uraian_kegiatan`
--
ALTER TABLE `uraian_kegiatan`
  ADD CONSTRAINT `FK_URAIAN_K_REL_URAIA_PROGRAM_` FOREIGN KEY (`PLK_ID`) REFERENCES `program_layanan_kompensatoris` (`PLK_ID`);

--
-- Constraints for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD CONSTRAINT `FK_WALI_MUR_REL_JENJA_JENJANG_` FOREIGN KEY (`JP_ID`) REFERENCES `jenjang_pendidikan` (`JP_ID`),
  ADD CONSTRAINT `FK_WALI_MUR_REL_KEBKH_KEBUTUHA` FOREIGN KEY (`KK_ID`) REFERENCES `kebutuhan_khusus` (`KK_ID`),
  ADD CONSTRAINT `FK_WALI_MUR_REL_PEKER_PEKERJAA` FOREIGN KEY (`PK_ID`) REFERENCES `pekerjaan` (`PK_ID`),
  ADD CONSTRAINT `FK_WALI_MUR_REL_PENGH_PENGHASI` FOREIGN KEY (`PH_ID`) REFERENCES `penghasilan` (`PH_ID`),
  ADD CONSTRAINT `FK_WALI_MUR_REL_WALIM_SISWA` FOREIGN KEY (`SW_ID`) REFERENCES `siswa` (`SW_ID`),
  ADD CONSTRAINT `FK_WALI_MUR_REL_WARGA_WARGANEG` FOREIGN KEY (`KWN_ID`) REFERENCES `warganegara` (`KWN_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
