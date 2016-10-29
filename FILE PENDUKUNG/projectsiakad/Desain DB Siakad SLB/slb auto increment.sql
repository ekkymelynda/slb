/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     10/29/2016 8:56:31 PM                        */
/*==============================================================*/


DROP INDEX AGAMA_PK;

DROP TABLE AGAMA;

DROP INDEX ALAT_TRANSPORTASI_PK;

DROP TABLE ALAT_TRANSPORTASI;

DROP INDEX REL_BASEDLINE_PLK_FK;

DROP INDEX BASED_LINE_PK;

DROP TABLE BASED_LINE;

DROP INDEX CIRI_KEPRIBADIAN_PK;

DROP TABLE CIRI_KEPRIBADIAN;

DROP INDEX REL_ASESMEN_PPI_FK;

DROP INDEX DATA_ASESMEN_PK;

DROP TABLE DATA_ASESMEN;

DROP INDEX REL_DETILJURNALKELAS_FK;

DROP INDEX REK_MAPEL_DETILJURNALKELAS_FK;

DROP INDEX DETIL_JURNAL_KELAS_PK;

DROP TABLE DETIL_JURNAL_KELAS;

DROP INDEX REL_DETILJURNALMATERI_ROMBEL_FK;

DROP INDEX REL_DETILJURNALMATERI_FK;

DROP INDEX DETIL_JURNAL_MATERI_PK;

DROP TABLE DETIL_JURNAL_MATERI;

DROP INDEX REL_DETKEBUTUHAN_PPI_FK;

DROP INDEX DETIL_KEBUTUHAN_PK;

DROP TABLE DETIL_KEBUTUHAN;

DROP INDEX REL_PPI_PENEMPATANSW_FK;

DROP INDEX DETIL_PENEMPATAN_PK;

DROP TABLE DETIL_PENEMPATAN;

DROP INDEX REL_DETROMBELSW_1_FK;

DROP INDEX REL_ROMBRL_SW_FK;

DROP TABLE DETIL_ROMBEL_SISWA;

DROP INDEX REL_PENDIDIKAN_GURU_FK;

DROP INDEX GURU_PK;

DROP TABLE GURU;

DROP INDEX REL_RANGKUMAN_HASIL_ASASMEN_FK;

DROP INDEX HASIL_ASESMEN_PK;

DROP TABLE HASIL_ASESMEN;

DROP INDEX REL_IMUNISASI_SW_FK;

DROP INDEX IMUNISASI_PK;

DROP TABLE IMUNISASI;

DROP INDEX REL_INDIKATORBERHASIL_PLK_FK;

DROP INDEX INDIKATOR_KEBERHASILAN_PK;

DROP TABLE INDIKATOR_KEBERHASILAN;

DROP INDEX JENIS_TINGGAL_PK;

DROP TABLE JENIS_TINGGAL;

DROP INDEX JENJANG_PENDIDIKAN_PK;

DROP TABLE JENJANG_PENDIDIKAN;

DROP INDEX REL_JURNALKELAS_ROMBEL_FK;

DROP INDEX REL_JURNALKELAS_GURU_FK;

DROP INDEX JURNAL_KELAS_PK;

DROP TABLE JURNAL_KELAS;

DROP INDEX REL_JURNALMATERI_MAPEL_FK;

DROP INDEX REL_GURU_JURNALMATERI_FK;

DROP INDEX JURNAL_MATERI_PK;

DROP TABLE JURNAL_MATERI;

DROP INDEX REL_JURNALPRIBADISW_SWROMBEL_FK;

DROP INDEX JURNAL_PRIBADI_SISWA_PK;

DROP TABLE JURNAL_PRIBADI_SISWA;

DROP INDEX KEBUTUHAN_KHUSUS_PK;

DROP TABLE KEBUTUHAN_KHUSUS;

DROP INDEX REL_PPI_KEBUTUHANSW_FK;

DROP INDEX KEBUTUHAN_SISWA_PK;

DROP TABLE KEBUTUHAN_SISWA;

DROP INDEX KECAKAPAN_KOMPENSATORIS2_FK;

DROP INDEX KECAKAPAN_KOMPENSATORIS_FK;

DROP INDEX KECAKAPAN_KOMPENSATORIS_PK;

DROP TABLE KECAKAPAN_KOMPENSATORIS;

DROP INDEX REL_PPI_KEKUATANSW_FK;

DROP INDEX KEKUATAN_SISWA_PK;

DROP TABLE KEKUATAN_SISWA;

DROP INDEX REL_KELAINANTUBUH_SW_FK;

DROP INDEX KELAINANTUBUH_PK;

DROP TABLE KELAINANTUBUH;

DROP INDEX MATA_PELAJARAN_PK;

DROP TABLE MATA_PELAJARAN;

DROP INDEX PEKERJAAN_PK;

DROP TABLE PEKERJAAN;

DROP INDEX PENGHASILAN_PK;

DROP TABLE PENGHASILAN;

DROP INDEX REL_PERSONALTERLIBAT_PPI_FK;

DROP INDEX PERSONAL_TERLIBAT_PK;

DROP TABLE PERSONAL_TERLIBAT;

DROP INDEX REL_PPI_SISWA2_FK;

DROP INDEX PPI_PK;

DROP TABLE PPI;

DROP INDEX REL_PLK_PPI_FK;

DROP INDEX PROGRAM_LAYANAN_KOMPENSATORIS_P;

DROP TABLE PROGRAM_LAYANAN_KOMPENSATORIS;

DROP INDEX REL_KEBKHUSUS_IBU2_FK;

DROP INDEX REL_KEBKHUSUS_IBU_FK;

DROP INDEX REL_KEBKHUSUS_IBU_PK;

DROP TABLE REL_KEBKHUSUS_SW;

DROP INDEX REL_KEPRIBADIAN_SW2_FK;

DROP INDEX REL_KEPRIBADIAN_SW_FK;

DROP INDEX REL_KEPRIBADIAN_SW_PK;

DROP TABLE REL_KEPRIBADIAN_SW;

DROP INDEX REL_WALIKELAS_ROMBEL_FK;

DROP INDEX ROMBEL_PK;

DROP TABLE ROMBEL;

DROP INDEX REL_PENDIDIKAN_SAUDARAKDG_FK;

DROP INDEX RELATIONSHIP_3_FK;

DROP INDEX SAUDARA_KANDUNG_PK;

DROP TABLE SAUDARA_KANDUNG;

DROP INDEX REL_WARGANEGARA_SW_FK;

DROP INDEX REL_PPI_SISWA_FK;

DROP INDEX REL_ALATTRANS_SW_FK;

DROP INDEX REL_JENISTINGGAL_SW_FK;

DROP INDEX REL_AGAMA_SW_FK;

DROP INDEX SISWA_PK;

DROP TABLE SISWA;

DROP INDEX REL_TIMPENGEMBANG_PPI_FK;

DROP INDEX TIM_PENGEMBANG_PK;

DROP TABLE TIM_PENGEMBANG;

DROP INDEX REL_URAIANKEG_PLK_FK;

DROP INDEX URAIAN_KEGIATAN_PK;

DROP TABLE URAIAN_KEGIATAN;

DROP INDEX REL_JENJANGPEND_WM_FK;

DROP INDEX REL_WARGANEGARA_WM_FK;

DROP INDEX REL_KEBKHUSUS_WM_FK;

DROP INDEX REL_PEKERJAAN_WM_FK;

DROP INDEX REL_PENGHASILAN_WM_FK;

DROP INDEX REL_WALIMURID_SW_FK;

DROP INDEX WALI_MURID_PK;

DROP TABLE WALI_MURID;

DROP INDEX WARGANEGARA_PK;

DROP TABLE WARGANEGARA;

/*==============================================================*/
/* Table: AGAMA                                                 */
/*==============================================================*/
CREATE TABLE AGAMA (
   AG_ID                INT4                 NOT NULL AUTO_INCREMENT,
   AG_NAMA              VARCHAR(30)          NULL,
   CONSTRAINT PK_AGAMA PRIMARY KEY (AG_ID)
);

/*==============================================================*/
/* Index: AGAMA_PK                                              */
/*==============================================================*/
CREATE UNIQUE INDEX AGAMA_PK ON AGAMA (
AG_ID
);

/*==============================================================*/
/* Table: ALAT_TRANSPORTASI                                     */
/*==============================================================*/
CREATE TABLE ALAT_TRANSPORTASI (
   AT_ID                INT4                 NOT NULL AUTO_INCREMENT,
   AT_NAMAALATTRANS     VARCHAR(30)          NULL,
   CONSTRAINT PK_ALAT_TRANSPORTASI PRIMARY KEY (AT_ID)
);

/*==============================================================*/
/* Index: ALAT_TRANSPORTASI_PK                                  */
/*==============================================================*/
CREATE UNIQUE INDEX ALAT_TRANSPORTASI_PK ON ALAT_TRANSPORTASI (
AT_ID
);

/*==============================================================*/
/* Table: BASED_LINE                                            */
/*==============================================================*/
CREATE TABLE BASED_LINE (
   BASELINE_ID          INT4                 NOT NULL AUTO_INCREMENT,
   PLK_ID               INT4                 NOT NULL,
   BASELINE_KET         VARCHAR(200)         NULL,
   CONSTRAINT PK_BASED_LINE PRIMARY KEY (BASELINE_ID)
);

/*==============================================================*/
/* Index: BASED_LINE_PK                                         */
/*==============================================================*/
CREATE UNIQUE INDEX BASED_LINE_PK ON BASED_LINE (
BASELINE_ID
);

/*==============================================================*/
/* Index: REL_BASEDLINE_PLK_FK                                  */
/*==============================================================*/
CREATE  INDEX REL_BASEDLINE_PLK_FK ON BASED_LINE (
PLK_ID
);

/*==============================================================*/
/* Table: CIRI_KEPRIBADIAN                                      */
/*==============================================================*/
CREATE TABLE CIRI_KEPRIBADIAN (
   CK_ID                INT4                 NOT NULL AUTO_INCREMENT,
   CK_KETERANGAN        VARCHAR(30)          NULL,
   CONSTRAINT PK_CIRI_KEPRIBADIAN PRIMARY KEY (CK_ID)
);

/*==============================================================*/
/* Index: CIRI_KEPRIBADIAN_PK                                   */
/*==============================================================*/
CREATE UNIQUE INDEX CIRI_KEPRIBADIAN_PK ON CIRI_KEPRIBADIAN (
CK_ID
);

/*==============================================================*/
/* Table: DATA_ASESMEN                                          */
/*==============================================================*/
CREATE TABLE DATA_ASESMEN (
   ASM_ID               INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NULL,
   ASM_SUMBERINFO       VARCHAR(30)          NULL,
   ASM_TGL              DATE                 NULL,
   CONSTRAINT PK_DATA_ASESMEN PRIMARY KEY (ASM_ID)
);

/*==============================================================*/
/* Index: DATA_ASESMEN_PK                                       */
/*==============================================================*/
CREATE UNIQUE INDEX DATA_ASESMEN_PK ON DATA_ASESMEN (
ASM_ID
);

/*==============================================================*/
/* Index: REL_ASESMEN_PPI_FK                                    */
/*==============================================================*/
CREATE  INDEX REL_ASESMEN_PPI_FK ON DATA_ASESMEN (
PPI_ID
);

/*==============================================================*/
/* Table: DETIL_JURNAL_KELAS                                    */
/*==============================================================*/
CREATE TABLE DETIL_JURNAL_KELAS (
   DJK_ID               INT4                 NOT NULL AUTO_INCREMENT,
   MAPEL_ID             INT4                 NOT NULL,
   JK_ID                INT4                 NOT NULL,
   DJK_TANGGAL          DATE                 NULL,
   DJK_MATERI           VARCHAR(200)         NULL,
   DJK_KETERANGAN       VARCHAR(200)         NULL,
   CONSTRAINT PK_DETIL_JURNAL_KELAS PRIMARY KEY (DJK_ID)
);

/*==============================================================*/
/* Index: DETIL_JURNAL_KELAS_PK                                 */
/*==============================================================*/
CREATE UNIQUE INDEX DETIL_JURNAL_KELAS_PK ON DETIL_JURNAL_KELAS (
DJK_ID
);

/*==============================================================*/
/* Index: REK_MAPEL_DETILJURNALKELAS_FK                         */
/*==============================================================*/
CREATE  INDEX REK_MAPEL_DETILJURNALKELAS_FK ON DETIL_JURNAL_KELAS (
MAPEL_ID
);

/*==============================================================*/
/* Index: REL_DETILJURNALKELAS_FK                               */
/*==============================================================*/
CREATE  INDEX REL_DETILJURNALKELAS_FK ON DETIL_JURNAL_KELAS (
JK_ID
);

/*==============================================================*/
/* Table: DETIL_JURNAL_MATERI                                   */
/*==============================================================*/
CREATE TABLE DETIL_JURNAL_MATERI (
   DJM_ID               INT4                 NOT NULL AUTO_INCREMENT,
   JM_ID                INT4                 NULL,
   RM_ID                INT4                 NULL,
   DJM_TANGGAL          DATE                 NULL,
   DJM_JAMKE            VARCHAR(10)          NULL,
   DJM_MATERIPEMBELAJARAN VARCHAR(100)         NULL,
   DJM_JMLSWHADIR       INT4                 NULL,
   DJM_JMLSWTAKHADIR    INT4                 NULL,
   DJM_NAMAKETTAKHADIR  VARCHAR(200)         NULL,
   DJM_CATATAN          VARCHAR(100)         NULL,
   CONSTRAINT PK_DETIL_JURNAL_MATERI PRIMARY KEY (DJM_ID)
);

/*==============================================================*/
/* Index: DETIL_JURNAL_MATERI_PK                                */
/*==============================================================*/
CREATE UNIQUE INDEX DETIL_JURNAL_MATERI_PK ON DETIL_JURNAL_MATERI (
DJM_ID
);

/*==============================================================*/
/* Index: REL_DETILJURNALMATERI_FK                              */
/*==============================================================*/
CREATE  INDEX REL_DETILJURNALMATERI_FK ON DETIL_JURNAL_MATERI (
JM_ID
);

/*==============================================================*/
/* Index: REL_DETILJURNALMATERI_ROMBEL_FK                       */
/*==============================================================*/
CREATE  INDEX REL_DETILJURNALMATERI_ROMBEL_FK ON DETIL_JURNAL_MATERI (
RM_ID
);

/*==============================================================*/
/* Table: DETIL_KEBUTUHAN                                       */
/*==============================================================*/
CREATE TABLE DETIL_KEBUTUHAN (
   DETKEB_ID            INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NOT NULL,
   DETKEB_ALAT          VARCHAR(100)         NULL,
   DETKEB_PENYESUAIAN   VARCHAR(200)         NULL,
   CONSTRAINT PK_DETIL_KEBUTUHAN PRIMARY KEY (DETKEB_ID)
);

/*==============================================================*/
/* Index: DETIL_KEBUTUHAN_PK                                    */
/*==============================================================*/
CREATE UNIQUE INDEX DETIL_KEBUTUHAN_PK ON DETIL_KEBUTUHAN (
DETKEB_ID
);

/*==============================================================*/
/* Index: REL_DETKEBUTUHAN_PPI_FK                               */
/*==============================================================*/
CREATE  INDEX REL_DETKEBUTUHAN_PPI_FK ON DETIL_KEBUTUHAN (
PPI_ID
);

/*==============================================================*/
/* Table: DETIL_PENEMPATAN                                      */
/*==============================================================*/
CREATE TABLE DETIL_PENEMPATAN (
   DP_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NOT NULL,
   DP_DETIL             VARCHAR(200)         NULL,
   CONSTRAINT PK_DETIL_PENEMPATAN PRIMARY KEY (DP_ID)
);

/*==============================================================*/
/* Index: DETIL_PENEMPATAN_PK                                   */
/*==============================================================*/
CREATE UNIQUE INDEX DETIL_PENEMPATAN_PK ON DETIL_PENEMPATAN (
DP_ID
);

/*==============================================================*/
/* Index: REL_PPI_PENEMPATANSW_FK                               */
/*==============================================================*/
CREATE  INDEX REL_PPI_PENEMPATANSW_FK ON DETIL_PENEMPATAN (
PPI_ID
);

/*==============================================================*/
/* Table: DETIL_ROMBEL_SISWA                                    */
/*==============================================================*/
CREATE TABLE DETIL_ROMBEL_SISWA (
   RM_ID                INT4                 NOT NULL,
   SW_ID                INT4                 NOT NULL,
   CONSTRAINT PK_DETIL_ROMBEL_SISWA PRIMARY KEY (RM_ID, SW_ID)
);

/*==============================================================*/
/* Index: REL_ROMBRL_SW_FK                                      */
/*==============================================================*/
CREATE  INDEX REL_ROMBRL_SW_FK ON DETIL_ROMBEL_SISWA (
SW_ID
);

/*==============================================================*/
/* Index: REL_DETROMBELSW_1_FK                                  */
/*==============================================================*/
CREATE  INDEX REL_DETROMBELSW_1_FK ON DETIL_ROMBEL_SISWA (
RM_ID
);

/*==============================================================*/
/* Table: GURU                                                  */
/*==============================================================*/
CREATE TABLE GURU (
   GR_ID                INT4                 NOT NULL AUTO_INCREMENT,
   JP_ID                INT4                 NOT NULL,
   GR_NIP               CHAR(18)             NULL,
   GR_NUPTK             CHAR(16)             NULL,
   GR_NAMA              VARCHAR(50)          NULL,
   GR_GELAR             VARCHAR(20)          NULL,
   GR_JK                CHAR(1)              NULL,
   GR_JURUSAN           VARCHAR(50)          NULL,
   GR_SERTIFIKASI       VARCHAR(50)          NULL,
   GR_KEPEGAWAIAN       VARCHAR(50)          NULL,
   GR_JABATAN           VARCHAR(20)          NULL,
   GR_TMTKERJA          DATE                 NULL,
   GR_TGSTAMBAH         VARCHAR(30)          NULL,
   GR_MENGAJAR          VARCHAR(50)          NULL,
   GR_JAMPERMGG         INT4                 NULL,
   GR_NOIJAZAH          VARCHAR(50)          NULL,
   GR_NOSERTIFIKASI     VARCHAR(50)          NULL,
   CONSTRAINT PK_GURU PRIMARY KEY (GR_ID)
);

/*==============================================================*/
/* Index: GURU_PK                                               */
/*==============================================================*/
CREATE UNIQUE INDEX GURU_PK ON GURU (
GR_ID
);

/*==============================================================*/
/* Index: REL_PENDIDIKAN_GURU_FK                                */
/*==============================================================*/
CREATE  INDEX REL_PENDIDIKAN_GURU_FK ON GURU (
JP_ID
);

/*==============================================================*/
/* Table: HASIL_ASESMEN                                         */
/*==============================================================*/
CREATE TABLE HASIL_ASESMEN (
   HA_ID                INT4                 NOT NULL AUTO_INCREMENT,
   ASM_ID               INT4                 NOT NULL,
   HA_RINGKASAN         VARCHAR(200)         NULL,
   CONSTRAINT PK_HASIL_ASESMEN PRIMARY KEY (HA_ID)
);

/*==============================================================*/
/* Index: HASIL_ASESMEN_PK                                      */
/*==============================================================*/
CREATE UNIQUE INDEX HASIL_ASESMEN_PK ON HASIL_ASESMEN (
HA_ID
);

/*==============================================================*/
/* Index: REL_RANGKUMAN_HASIL_ASASMEN_FK                        */
/*==============================================================*/
CREATE  INDEX REL_RANGKUMAN_HASIL_ASASMEN_FK ON HASIL_ASESMEN (
ASM_ID
);

/*==============================================================*/
/* Table: IMUNISASI                                             */
/*==============================================================*/
CREATE TABLE IMUNISASI (
   IM_ID                INT4                 NOT NULL AUTO_INCREMENT,
   SW_ID                INT4                 NOT NULL,
   IM_JENIS             VARCHAR(20)          NULL,
   IM_USIA              VARCHAR(10)          NULL,
   CONSTRAINT PK_IMUNISASI PRIMARY KEY (IM_ID)
);

/*==============================================================*/
/* Index: IMUNISASI_PK                                          */
/*==============================================================*/
CREATE UNIQUE INDEX IMUNISASI_PK ON IMUNISASI (
IM_ID
);

/*==============================================================*/
/* Index: REL_IMUNISASI_SW_FK                                   */
/*==============================================================*/
CREATE  INDEX REL_IMUNISASI_SW_FK ON IMUNISASI (
SW_ID
);

/*==============================================================*/
/* Table: INDIKATOR_KEBERHASILAN                                */
/*==============================================================*/
CREATE TABLE INDIKATOR_KEBERHASILAN (
   INDI_ID              INT4                 NOT NULL AUTO_INCREMENT,
   PLK_ID               INT4                 NOT NULL,
   INDI_KET             VARCHAR(200)         NULL,
   CONSTRAINT PK_INDIKATOR_KEBERHASILAN PRIMARY KEY (INDI_ID)
);

/*==============================================================*/
/* Index: INDIKATOR_KEBERHASILAN_PK                             */
/*==============================================================*/
CREATE UNIQUE INDEX INDIKATOR_KEBERHASILAN_PK ON INDIKATOR_KEBERHASILAN (
INDI_ID
);

/*==============================================================*/
/* Index: REL_INDIKATORBERHASIL_PLK_FK                          */
/*==============================================================*/
CREATE  INDEX REL_INDIKATORBERHASIL_PLK_FK ON INDIKATOR_KEBERHASILAN (
PLK_ID
);

/*==============================================================*/
/* Table: JENIS_TINGGAL                                         */
/*==============================================================*/
CREATE TABLE JENIS_TINGGAL (
   JT_ID                INT4                 NOT NULL AUTO_INCREMENT,
   JT_JENISTINGGAL      VARCHAR(30)          NULL,
   CONSTRAINT PK_JENIS_TINGGAL PRIMARY KEY (JT_ID)
);

/*==============================================================*/
/* Index: JENIS_TINGGAL_PK                                      */
/*==============================================================*/
CREATE UNIQUE INDEX JENIS_TINGGAL_PK ON JENIS_TINGGAL (
JT_ID
);

/*==============================================================*/
/* Table: JENJANG_PENDIDIKAN                                    */
/*==============================================================*/
CREATE TABLE JENJANG_PENDIDIKAN (
   JP_ID                INT4                 NOT NULL AUTO_INCREMENT,
   JP_JENJANG           VARCHAR(20)          NULL,
   CONSTRAINT PK_JENJANG_PENDIDIKAN PRIMARY KEY (JP_ID)
);

/*==============================================================*/
/* Index: JENJANG_PENDIDIKAN_PK                                 */
/*==============================================================*/
CREATE UNIQUE INDEX JENJANG_PENDIDIKAN_PK ON JENJANG_PENDIDIKAN (
JP_ID
);

/*==============================================================*/
/* Table: JURNAL_KELAS                                          */
/*==============================================================*/
CREATE TABLE JURNAL_KELAS (
   JK_ID                INT4                 NOT NULL AUTO_INCREMENT,
   RM_ID                INT4                 NOT NULL,
   GR_ID                INT4                 NOT NULL,
   JK_BULAN             INT4                 NULL,
   JK_TAHUN             INT4                 NULL,
   CONSTRAINT PK_JURNAL_KELAS PRIMARY KEY (JK_ID)
);

/*==============================================================*/
/* Index: JURNAL_KELAS_PK                                       */
/*==============================================================*/
CREATE UNIQUE INDEX JURNAL_KELAS_PK ON JURNAL_KELAS (
JK_ID
);

/*==============================================================*/
/* Index: REL_JURNALKELAS_GURU_FK                               */
/*==============================================================*/
CREATE  INDEX REL_JURNALKELAS_GURU_FK ON JURNAL_KELAS (
GR_ID
);

/*==============================================================*/
/* Index: REL_JURNALKELAS_ROMBEL_FK                             */
/*==============================================================*/
CREATE  INDEX REL_JURNALKELAS_ROMBEL_FK ON JURNAL_KELAS (
RM_ID
);

/*==============================================================*/
/* Table: JURNAL_MATERI                                         */
/*==============================================================*/
CREATE TABLE JURNAL_MATERI (
   JM_ID                INT4                 NOT NULL AUTO_INCREMENT,
   MAPEL_ID             INT4                 NULL,
   GR_ID                INT4                 NOT NULL,
   JM_THNAJARAN         VARCHAR(10)          NULL,
   JM_SEMESTER          VARCHAR(10)          NULL,
   CONSTRAINT PK_JURNAL_MATERI PRIMARY KEY (JM_ID)
);

/*==============================================================*/
/* Index: JURNAL_MATERI_PK                                      */
/*==============================================================*/
CREATE UNIQUE INDEX JURNAL_MATERI_PK ON JURNAL_MATERI (
JM_ID
);

/*==============================================================*/
/* Index: REL_GURU_JURNALMATERI_FK                              */
/*==============================================================*/
CREATE  INDEX REL_GURU_JURNALMATERI_FK ON JURNAL_MATERI (
GR_ID
);

/*==============================================================*/
/* Index: REL_JURNALMATERI_MAPEL_FK                             */
/*==============================================================*/
CREATE  INDEX REL_JURNALMATERI_MAPEL_FK ON JURNAL_MATERI (
MAPEL_ID
);

/*==============================================================*/
/* Table: JURNAL_PRIBADI_SISWA                                  */
/*==============================================================*/
CREATE TABLE JURNAL_PRIBADI_SISWA (
   JPSW_ID              INT4                 NOT NULL AUTO_INCREMENT,
   RM_ID                INT4                 NULL,
   SW_ID                INT4                 NULL,
   JPSW_TANGGAL         DATE                 NULL,
   JPSW_PERKEMBANGAN    VARCHAR(200)         NULL,
   JPSW_KETERANGAN      VARCHAR(200)         NULL,
   CONSTRAINT PK_JURNAL_PRIBADI_SISWA PRIMARY KEY (JPSW_ID)
);

/*==============================================================*/
/* Index: JURNAL_PRIBADI_SISWA_PK                               */
/*==============================================================*/
CREATE UNIQUE INDEX JURNAL_PRIBADI_SISWA_PK ON JURNAL_PRIBADI_SISWA (
JPSW_ID
);

/*==============================================================*/
/* Index: REL_JURNALPRIBADISW_SWROMBEL_FK                       */
/*==============================================================*/
CREATE  INDEX REL_JURNALPRIBADISW_SWROMBEL_FK ON JURNAL_PRIBADI_SISWA (
RM_ID,
SW_ID
);

/*==============================================================*/
/* Table: KEBUTUHAN_KHUSUS                                      */
/*==============================================================*/
CREATE TABLE KEBUTUHAN_KHUSUS (
   KK_ID                VARCHAR(2)           NOT NULL AUTO_INCREMENT,
   KK_JENIS             VARCHAR(30)          NULL,
   CONSTRAINT PK_KEBUTUHAN_KHUSUS PRIMARY KEY (KK_ID)
);

/*==============================================================*/
/* Index: KEBUTUHAN_KHUSUS_PK                                   */
/*==============================================================*/
CREATE UNIQUE INDEX KEBUTUHAN_KHUSUS_PK ON KEBUTUHAN_KHUSUS (
KK_ID
);

/*==============================================================*/
/* Table: KEBUTUHAN_SISWA                                       */
/*==============================================================*/
CREATE TABLE KEBUTUHAN_SISWA (
   BS_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NOT NULL,
   BS_KETERANGAN        VARCHAR(200)         NULL,
   CONSTRAINT PK_KEBUTUHAN_SISWA PRIMARY KEY (BS_ID)
);

/*==============================================================*/
/* Index: KEBUTUHAN_SISWA_PK                                    */
/*==============================================================*/
CREATE UNIQUE INDEX KEBUTUHAN_SISWA_PK ON KEBUTUHAN_SISWA (
BS_ID
);

/*==============================================================*/
/* Index: REL_PPI_KEBUTUHANSW_FK                                */
/*==============================================================*/
CREATE  INDEX REL_PPI_KEBUTUHANSW_FK ON KEBUTUHAN_SISWA (
PPI_ID
);

/*==============================================================*/
/* Table: KECAKAPAN_KOMPENSATORIS                               */
/*==============================================================*/
CREATE TABLE KECAKAPAN_KOMPENSATORIS (
   PPI_ID               INT4                 NOT NULL,
   MAPEL_ID             INT4                 NOT NULL,
   CONSTRAINT PK_KECAKAPAN_KOMPENSATORIS PRIMARY KEY (PPI_ID, MAPEL_ID)
);

/*==============================================================*/
/* Index: KECAKAPAN_KOMPENSATORIS_PK                            */
/*==============================================================*/
CREATE UNIQUE INDEX KECAKAPAN_KOMPENSATORIS_PK ON KECAKAPAN_KOMPENSATORIS (
PPI_ID,
MAPEL_ID
);

/*==============================================================*/
/* Index: KECAKAPAN_KOMPENSATORIS_FK                            */
/*==============================================================*/
CREATE  INDEX KECAKAPAN_KOMPENSATORIS_FK ON KECAKAPAN_KOMPENSATORIS (
PPI_ID
);

/*==============================================================*/
/* Index: KECAKAPAN_KOMPENSATORIS2_FK                           */
/*==============================================================*/
CREATE  INDEX KECAKAPAN_KOMPENSATORIS2_FK ON KECAKAPAN_KOMPENSATORIS (
MAPEL_ID
);

/*==============================================================*/
/* Table: KEKUATAN_SISWA                                        */
/*==============================================================*/
CREATE TABLE KEKUATAN_SISWA (
   KS_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NOT NULL,
   KS_KETERANGAN        VARCHAR(200)         NULL,
   CONSTRAINT PK_KEKUATAN_SISWA PRIMARY KEY (KS_ID)
);

/*==============================================================*/
/* Index: KEKUATAN_SISWA_PK                                     */
/*==============================================================*/
CREATE UNIQUE INDEX KEKUATAN_SISWA_PK ON KEKUATAN_SISWA (
KS_ID
);

/*==============================================================*/
/* Index: REL_PPI_KEKUATANSW_FK                                 */
/*==============================================================*/
CREATE  INDEX REL_PPI_KEKUATANSW_FK ON KEKUATAN_SISWA (
PPI_ID
);

/*==============================================================*/
/* Table: KELAINANTUBUH                                         */
/*==============================================================*/
CREATE TABLE KELAINANTUBUH (
   KT_ID                INT4                 NOT NULL AUTO_INCREMENT,
   SW_ID                INT4                 NOT NULL,
   KT_PENYAKIT_KECELAKAAN VARCHAR(100)         NULL,
   KT_USIA              INT4                 NULL,
   KT_LAMA              VARCHAR(20)          NULL,
   CONSTRAINT PK_KELAINANTUBUH PRIMARY KEY (KT_ID)
);

/*==============================================================*/
/* Index: KELAINANTUBUH_PK                                      */
/*==============================================================*/
CREATE UNIQUE INDEX KELAINANTUBUH_PK ON KELAINANTUBUH (
KT_ID
);

/*==============================================================*/
/* Index: REL_KELAINANTUBUH_SW_FK                               */
/*==============================================================*/
CREATE  INDEX REL_KELAINANTUBUH_SW_FK ON KELAINANTUBUH (
SW_ID
);

/*==============================================================*/
/* Table: MATA_PELAJARAN                                        */
/*==============================================================*/
CREATE TABLE MATA_PELAJARAN (
   MAPEL_ID             INT4                 NOT NULL AUTO_INCREMENT,
   MAPEL_NAMA           VARCHAR(30)          NULL,
   CONSTRAINT PK_MATA_PELAJARAN PRIMARY KEY (MAPEL_ID)
);

/*==============================================================*/
/* Index: MATA_PELAJARAN_PK                                     */
/*==============================================================*/
CREATE UNIQUE INDEX MATA_PELAJARAN_PK ON MATA_PELAJARAN (
MAPEL_ID
);

/*==============================================================*/
/* Table: PEKERJAAN                                             */
/*==============================================================*/
CREATE TABLE PEKERJAAN (
   PK_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PK_NAMA              VARCHAR(30)          NULL,
   CONSTRAINT PK_PEKERJAAN PRIMARY KEY (PK_ID)
);

/*==============================================================*/
/* Index: PEKERJAAN_PK                                          */
/*==============================================================*/
CREATE UNIQUE INDEX PEKERJAAN_PK ON PEKERJAAN (
PK_ID
);

/*==============================================================*/
/* Table: PENGHASILAN                                           */
/*==============================================================*/
CREATE TABLE PENGHASILAN (
   PH_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PH_BESARAN           VARCHAR(50)          NULL,
   CONSTRAINT PK_PENGHASILAN PRIMARY KEY (PH_ID)
);

/*==============================================================*/
/* Index: PENGHASILAN_PK                                        */
/*==============================================================*/
CREATE UNIQUE INDEX PENGHASILAN_PK ON PENGHASILAN (
PH_ID
);

/*==============================================================*/
/* Table: PERSONAL_TERLIBAT                                     */
/*==============================================================*/
CREATE TABLE PERSONAL_TERLIBAT (
   PT_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NOT NULL,
   PT_JENISPELAYANAN    VARCHAR(100)         NULL,
   PT_FREKUENSI         VARCHAR(100)         NULL,
   PT_LOKASI            VARCHAR(100)         NULL,
   CONSTRAINT PK_PERSONAL_TERLIBAT PRIMARY KEY (PT_ID)
);

/*==============================================================*/
/* Index: PERSONAL_TERLIBAT_PK                                  */
/*==============================================================*/
CREATE UNIQUE INDEX PERSONAL_TERLIBAT_PK ON PERSONAL_TERLIBAT (
PT_ID
);

/*==============================================================*/
/* Index: REL_PERSONALTERLIBAT_PPI_FK                           */
/*==============================================================*/
CREATE  INDEX REL_PERSONALTERLIBAT_PPI_FK ON PERSONAL_TERLIBAT (
PPI_ID
);

/*==============================================================*/
/* Table: PPI                                                   */
/*==============================================================*/
CREATE TABLE PPI (
   PPI_ID               INT4                 NOT NULL AUTO_INCREMENT,
   SW_ID                INT4                 NOT NULL,
   PPI_SEMESTER         INT4                 NULL,
   PPI_THNAJAR          VARCHAR(10)          NULL,
   PPI_KEKHUSUSANUTAMA  VARCHAR(50)          NULL,
   PPI_KEKHUSUSANSEKUNDER VARCHAR(50)          NULL,
   PPI_STDKURIKULUM     VARCHAR(50)          NULL,
   CONSTRAINT PK_PPI PRIMARY KEY (PPI_ID)
);

/*==============================================================*/
/* Index: PPI_PK                                                */
/*==============================================================*/
CREATE UNIQUE INDEX PPI_PK ON PPI (
PPI_ID
);

/*==============================================================*/
/* Index: REL_PPI_SISWA2_FK                                     */
/*==============================================================*/
CREATE  INDEX REL_PPI_SISWA2_FK ON PPI (
SW_ID
);

/*==============================================================*/
/* Table: PROGRAM_LAYANAN_KOMPENSATORIS                         */
/*==============================================================*/
CREATE TABLE PROGRAM_LAYANAN_KOMPENSATORIS (
   PLK_ID               INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NOT NULL,
   PLK_NAMAKETERAMPILAN VARCHAR(150)         NULL,
   CONSTRAINT PK_PROGRAM_LAYANAN_KOMPENSATOR PRIMARY KEY (PLK_ID)
);

/*==============================================================*/
/* Index: PROGRAM_LAYANAN_KOMPENSATORIS_P                       */
/*==============================================================*/
CREATE UNIQUE INDEX PROGRAM_LAYANAN_KOMPENSATORIS_P ON PROGRAM_LAYANAN_KOMPENSATORIS (
PLK_ID
);

/*==============================================================*/
/* Index: REL_PLK_PPI_FK                                        */
/*==============================================================*/
CREATE  INDEX REL_PLK_PPI_FK ON PROGRAM_LAYANAN_KOMPENSATORIS (
PPI_ID
);

/*==============================================================*/
/* Table: REL_KEBKHUSUS_SW                                      */
/*==============================================================*/
CREATE TABLE REL_KEBKHUSUS_SW (
   SW_ID                INT4                 NOT NULL,
   KK_ID                VARCHAR(2)           NOT NULL,
   CONSTRAINT PK_REL_KEBKHUSUS_SW PRIMARY KEY (SW_ID, KK_ID)
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_IBU_PK                                  */
/*==============================================================*/
CREATE UNIQUE INDEX REL_KEBKHUSUS_IBU_PK ON REL_KEBKHUSUS_SW (
SW_ID,
KK_ID
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_IBU_FK                                  */
/*==============================================================*/
CREATE  INDEX REL_KEBKHUSUS_IBU_FK ON REL_KEBKHUSUS_SW (
SW_ID
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_IBU2_FK                                 */
/*==============================================================*/
CREATE  INDEX REL_KEBKHUSUS_IBU2_FK ON REL_KEBKHUSUS_SW (
KK_ID
);

/*==============================================================*/
/* Table: REL_KEPRIBADIAN_SW                                    */
/*==============================================================*/
CREATE TABLE REL_KEPRIBADIAN_SW (
   SW_ID                INT4                 NOT NULL,
   CK_ID                INT4                 NOT NULL,
   CONSTRAINT PK_REL_KEPRIBADIAN_SW PRIMARY KEY (SW_ID, CK_ID)
);

/*==============================================================*/
/* Index: REL_KEPRIBADIAN_SW_PK                                 */
/*==============================================================*/
CREATE UNIQUE INDEX REL_KEPRIBADIAN_SW_PK ON REL_KEPRIBADIAN_SW (
SW_ID,
CK_ID
);

/*==============================================================*/
/* Index: REL_KEPRIBADIAN_SW_FK                                 */
/*==============================================================*/
CREATE  INDEX REL_KEPRIBADIAN_SW_FK ON REL_KEPRIBADIAN_SW (
SW_ID
);

/*==============================================================*/
/* Index: REL_KEPRIBADIAN_SW2_FK                                */
/*==============================================================*/
CREATE  INDEX REL_KEPRIBADIAN_SW2_FK ON REL_KEPRIBADIAN_SW (
CK_ID
);

/*==============================================================*/
/* Table: ROMBEL                                                */
/*==============================================================*/
CREATE TABLE ROMBEL (
   RM_ID                INT4                 NOT NULL AUTO_INCREMENT,
   GR_ID                INT4                 NOT NULL,
   RM_THNAJAR           VARCHAR(10)          NULL,
   RM_BC                CHAR(1)              NOT NULL,
   RM_KELAS             INT4                 NOT NULL,
   CONSTRAINT PK_ROMBEL PRIMARY KEY (RM_ID)
);

/*==============================================================*/
/* Index: ROMBEL_PK                                             */
/*==============================================================*/
CREATE UNIQUE INDEX ROMBEL_PK ON ROMBEL (
RM_ID
);

/*==============================================================*/
/* Index: REL_WALIKELAS_ROMBEL_FK                               */
/*==============================================================*/
CREATE  INDEX REL_WALIKELAS_ROMBEL_FK ON ROMBEL (
GR_ID
);

/*==============================================================*/
/* Table: SAUDARA_KANDUNG                                       */
/*==============================================================*/
CREATE TABLE SAUDARA_KANDUNG (
   SK_ID                INT4                 NOT NULL AUTO_INCREMENT,
   JP_ID                INT4                 NULL,
   SW_ID                INT4                 NOT NULL,
   SK_NAMA              VARCHAR(50)          NULL,
   SK_JK                CHAR(1)              NULL,
   SK_PENDIDIKAN        VARCHAR(30)          NULL,
   CONSTRAINT PK_SAUDARA_KANDUNG PRIMARY KEY (SK_ID)
);

/*==============================================================*/
/* Index: SAUDARA_KANDUNG_PK                                    */
/*==============================================================*/
CREATE UNIQUE INDEX SAUDARA_KANDUNG_PK ON SAUDARA_KANDUNG (
SK_ID
);

/*==============================================================*/
/* Index: RELATIONSHIP_3_FK                                     */
/*==============================================================*/
CREATE  INDEX RELATIONSHIP_3_FK ON SAUDARA_KANDUNG (
SW_ID
);

/*==============================================================*/
/* Index: REL_PENDIDIKAN_SAUDARAKDG_FK                          */
/*==============================================================*/
CREATE  INDEX REL_PENDIDIKAN_SAUDARAKDG_FK ON SAUDARA_KANDUNG (
JP_ID
);

/*==============================================================*/
/* Table: SISWA                                                 */
/*==============================================================*/
CREATE TABLE SISWA (
   SW_ID                INT4                 NOT NULL AUTO_INCREMENT,
   KWN_ID               INT4                 NOT NULL,
   AT_ID                INT4                 NOT NULL,
   PPI_ID               INT4                 NULL,
   AG_ID                INT4                 NOT NULL,
   JT_ID                INT4                 NOT NULL,
   PENDAFTAR_NAMA       VARCHAR(50)          NULL,
   PENDAFTAR_STATUS     VARCHAR(50)          NULL,
   PENDAFTAR_ALAMAT     VARCHAR(100)         NULL,
   PENDAFTAR_TELP       VARCHAR(20)          NULL,
   NIS                  CHAR(10)             NULL,
   NISN                 CHAR(10)             NULL,
   NIK                  CHAR(16)             NULL,
   SW_NAMA              VARCHAR(100)         NULL,
   SW_NAMAPANGGIL       VARCHAR(50)          NULL,
   SW_TEMPATLAHIR       VARCHAR(100)         NULL,
   SW_TGLLAHIR          DATE                 NULL,
   SW_USIAPERMASUK      INT4                 NULL,
   SW_JK                CHAR(1)              NULL,
   SW_BAHASARUMAH       VARCHAR(20)          NULL,
   SW_ANAKKE            INT4                 NULL,
   SW_JMLBERSDR         INT4                 NULL,
   SW_TINGKATASALSEKOLAH VARCHAR(3)           NULL,
   SW_NAMAASALSEKOLAH   VARCHAR(50)          NULL,
   SW_ASALSEKTHNMASUK   INT4                 NULL,
   SW_ASALSEKTHNLULUS   INT4                 NULL,
   SW_ALAMATASALSEK     VARCHAR(100)         NULL,
   SW_AKTIVSUKA         VARCHAR(200)         NULL,
   SW_LAMAKANDUNGANBLN  INT4                 NULL,
   SW_LAMAKANDUNGANHARI INT4                 NULL,
   SW_KEADAANKANDUNGAN  BOOL                 NULL,
   SW_KEADAANLAHIR      VARCHAR(50)          NULL,
   SW_PROSESLAHIR       VARCHAR(50)          NULL,
   SW_YGMEMBANTULAHIR   VARCHAR(50)          NULL,
   SW_BERATLAHIR        DECIMAL(2,2)         NULL,
   SW_PANJANGLAHIR      INT4                 NULL,
   SW_USIAIBUSAATLAHIR  INT4                 NULL,
   SW_BERATANAK         DECIMAL(2,2)         NULL,
   SW_PANJANGANAK       INT4                 NULL,
   SW_GOLDAR            VARCHAR(2)           NULL,
   SW_LAMAMINUMASI      VARCHAR(20)          NULL,
   SW_DUABLNAWAL        BOOL                 NULL,
   SW_MAKANANTAMBAHAN   VARCHAR(100)         NULL,
   SW_ALERGI            VARCHAR(200)         NULL,
   SW_PENGLIHATAN       BOOL                 NULL,
   SW_PENDENGARAN       BOOL                 NULL,
   SW_PENAMPILAN        BOOL                 NULL,
   SW_CIRIFISIK         VARCHAR(100)         NULL,
   SW_BAKATKHUSUS       VARCHAR(100)         NULL,
   SW_PRESTASI          VARCHAR(100)         NULL,
   SW_ALAMAT            VARCHAR(100)         NULL,
   SW_ALAMATRT          INT4                 NULL,
   SW_ALAMATRW          INT4                 NULL,
   SW_ALAMATDUSUN       VARCHAR(30)          NULL,
   SW_ALAMATKEL         VARCHAR(30)          NULL,
   SW_ALAMATKEC         VARCHAR(30)          NULL,
   SW_KODEPOS           CHAR(5)              NULL,
   SW_TELP              VARCHAR(20)          NULL,
   SW_HP                VARCHAR(20)          NULL,
   SW_EMAIL             VARCHAR(50)          NULL,
   SW_SKHUN             VARCHAR(50)          NULL,
   SW_PENERIMAKPS       BOOL                 NULL,
   SW_NOKPS             VARCHAR(50)          NULL,
   SW_LASTUPDATE        DATE                 NULL,
   CONSTRAINT PK_SISWA PRIMARY KEY (SW_ID)
);

/*==============================================================*/
/* Index: SISWA_PK                                              */
/*==============================================================*/
CREATE UNIQUE INDEX SISWA_PK ON SISWA (
SW_ID
);

/*==============================================================*/
/* Index: REL_AGAMA_SW_FK                                       */
/*==============================================================*/
CREATE  INDEX REL_AGAMA_SW_FK ON SISWA (
AG_ID
);

/*==============================================================*/
/* Index: REL_JENISTINGGAL_SW_FK                                */
/*==============================================================*/
CREATE  INDEX REL_JENISTINGGAL_SW_FK ON SISWA (
JT_ID
);

/*==============================================================*/
/* Index: REL_ALATTRANS_SW_FK                                   */
/*==============================================================*/
CREATE  INDEX REL_ALATTRANS_SW_FK ON SISWA (
AT_ID
);

/*==============================================================*/
/* Index: REL_PPI_SISWA_FK                                      */
/*==============================================================*/
CREATE  INDEX REL_PPI_SISWA_FK ON SISWA (
PPI_ID
);

/*==============================================================*/
/* Index: REL_WARGANEGARA_SW_FK                                 */
/*==============================================================*/
CREATE  INDEX REL_WARGANEGARA_SW_FK ON SISWA (
KWN_ID
);

/*==============================================================*/
/* Table: TIM_PENGEMBANG                                        */
/*==============================================================*/
CREATE TABLE TIM_PENGEMBANG (
   TP_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PPI_ID               INT4                 NOT NULL,
   TP_NAMA              VARCHAR(100)         NULL,
   TP_STATUS            VARCHAR(50)          NULL,
   CONSTRAINT PK_TIM_PENGEMBANG PRIMARY KEY (TP_ID)
);

/*==============================================================*/
/* Index: TIM_PENGEMBANG_PK                                     */
/*==============================================================*/
CREATE UNIQUE INDEX TIM_PENGEMBANG_PK ON TIM_PENGEMBANG (
TP_ID
);

/*==============================================================*/
/* Index: REL_TIMPENGEMBANG_PPI_FK                              */
/*==============================================================*/
CREATE  INDEX REL_TIMPENGEMBANG_PPI_FK ON TIM_PENGEMBANG (
PPI_ID
);

/*==============================================================*/
/* Table: URAIAN_KEGIATAN                                       */
/*==============================================================*/
CREATE TABLE URAIAN_KEGIATAN (
   UK_ID                INT4                 NOT NULL AUTO_INCREMENT,
   PLK_ID               INT4                 NOT NULL,
   UK_TUJUANPEMB        TEXT                 NULL,
   UK_STRATEGIPEMB      TEXT                 NULL,
   UK_TEKNIK            TEXT                 NULL,
   CONSTRAINT PK_URAIAN_KEGIATAN PRIMARY KEY (UK_ID)
);

/*==============================================================*/
/* Index: URAIAN_KEGIATAN_PK                                    */
/*==============================================================*/
CREATE UNIQUE INDEX URAIAN_KEGIATAN_PK ON URAIAN_KEGIATAN (
UK_ID
);

/*==============================================================*/
/* Index: REL_URAIANKEG_PLK_FK                                  */
/*==============================================================*/
CREATE  INDEX REL_URAIANKEG_PLK_FK ON URAIAN_KEGIATAN (
PLK_ID
);

/*==============================================================*/
/* Table: WALI_MURID                                            */
/*==============================================================*/
CREATE TABLE WALI_MURID (
   WM_ID                INT4                 NOT NULL AUTO_INCREMENT,
   KWN_ID               INT4                 NOT NULL,
   PK_ID                INT4                 NOT NULL,
   PH_ID                INT4                 NOT NULL,
   KK_ID                VARCHAR(2)           NULL,
   JP_ID                INT4                 NULL,
   SW_ID                INT4                 NOT NULL,
   WM_SEBAGAI           CHAR(3)              NULL,
   WM_NAMA              VARCHAR(50)          NULL,
   WM_TEMPATLAHIR       VARCHAR(30)          NULL,
   WM_TGLLAHIR          DATE                 NULL,
   WM_INSKERJA          VARCHAR(50)          NULL,
   WM_JABATANKERJA      VARCHAR(50)          NULL,
   WM_PANGKAT           VARCHAR(30)          NULL,
   WM_LAMAKERJAPERHARI  VARCHAR(30)          NULL,
   WM_JMLTANGGUNG       INT4                 NULL,
   WM_ALAMATRUMAH       VARCHAR(100)         NULL,
   WM_ALAMATKANTOR      VARCHAR(100)         NULL,
   WM_TELP              VARCHAR(20)          NULL,
   WM_USIANIKAH         INT4                 NULL,
   WM_KESEMPATANKOM     BOOL                 NULL,
   CONSTRAINT PK_WALI_MURID PRIMARY KEY (WM_ID)
);

/*==============================================================*/
/* Index: WALI_MURID_PK                                         */
/*==============================================================*/
CREATE UNIQUE INDEX WALI_MURID_PK ON WALI_MURID (
WM_ID
);

/*==============================================================*/
/* Index: REL_WALIMURID_SW_FK                                   */
/*==============================================================*/
CREATE  INDEX REL_WALIMURID_SW_FK ON WALI_MURID (
SW_ID
);

/*==============================================================*/
/* Index: REL_PENGHASILAN_WM_FK                                 */
/*==============================================================*/
CREATE  INDEX REL_PENGHASILAN_WM_FK ON WALI_MURID (
PH_ID
);

/*==============================================================*/
/* Index: REL_PEKERJAAN_WM_FK                                   */
/*==============================================================*/
CREATE  INDEX REL_PEKERJAAN_WM_FK ON WALI_MURID (
PK_ID
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_WM_FK                                   */
/*==============================================================*/
CREATE  INDEX REL_KEBKHUSUS_WM_FK ON WALI_MURID (
KK_ID
);

/*==============================================================*/
/* Index: REL_WARGANEGARA_WM_FK                                 */
/*==============================================================*/
CREATE  INDEX REL_WARGANEGARA_WM_FK ON WALI_MURID (
KWN_ID
);

/*==============================================================*/
/* Index: REL_JENJANGPEND_WM_FK                                 */
/*==============================================================*/
CREATE  INDEX REL_JENJANGPEND_WM_FK ON WALI_MURID (
JP_ID
);

/*==============================================================*/
/* Table: WARGANEGARA                                           */
/*==============================================================*/
CREATE TABLE WARGANEGARA (
   KWN_ID               INT4                 NOT NULL AUTO_INCREMENT,
   KWN_JENIS            VARCHAR(30)          NULL,
   CONSTRAINT PK_WARGANEGARA PRIMARY KEY (KWN_ID)
);

/*==============================================================*/
/* Index: WARGANEGARA_PK                                        */
/*==============================================================*/
CREATE UNIQUE INDEX WARGANEGARA_PK ON WARGANEGARA (
KWN_ID
);

ALTER TABLE BASED_LINE
   ADD CONSTRAINT FK_BASED_LI_REL_BASED_PROGRAM_ FOREIGN KEY (PLK_ID)
      REFERENCES PROGRAM_LAYANAN_KOMPENSATORIS (PLK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DATA_ASESMEN
   ADD CONSTRAINT FK_DATA_ASE_REL_ASESM_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_JURNAL_KELAS
   ADD CONSTRAINT FK_DETIL_JU_REK_MAPEL_MATA_PEL FOREIGN KEY (MAPEL_ID)
      REFERENCES MATA_PELAJARAN (MAPEL_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_JURNAL_KELAS
   ADD CONSTRAINT FK_DETIL_JU_REL_DETIL_JURNAL_K FOREIGN KEY (JK_ID)
      REFERENCES JURNAL_KELAS (JK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_JURNAL_MATERI
   ADD CONSTRAINT FK_DETIL_JU_REL_DETIL_JURNAL_M FOREIGN KEY (JM_ID)
      REFERENCES JURNAL_MATERI (JM_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_JURNAL_MATERI
   ADD CONSTRAINT FK_DETIL_JU_REL_DETIL_ROMBEL FOREIGN KEY (RM_ID)
      REFERENCES ROMBEL (RM_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_KEBUTUHAN
   ADD CONSTRAINT FK_DETIL_KE_REL_DETKE_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_PENEMPATAN
   ADD CONSTRAINT FK_DETIL_PE_REL_PPI_P_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_ROMBEL_SISWA
   ADD CONSTRAINT FK_DETIL_RO_REL_DETRO_ROMBEL FOREIGN KEY (RM_ID)
      REFERENCES ROMBEL (RM_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE DETIL_ROMBEL_SISWA
   ADD CONSTRAINT FK_DETIL_RO_REL_ROMBR_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE GURU
   ADD CONSTRAINT FK_GURU_REL_PENDI_JENJANG_ FOREIGN KEY (JP_ID)
      REFERENCES JENJANG_PENDIDIKAN (JP_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE HASIL_ASESMEN
   ADD CONSTRAINT FK_HASIL_AS_REL_RANGK_DATA_ASE FOREIGN KEY (ASM_ID)
      REFERENCES DATA_ASESMEN (ASM_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE IMUNISASI
   ADD CONSTRAINT FK_IMUNISAS_REL_IMUNI_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE INDIKATOR_KEBERHASILAN
   ADD CONSTRAINT FK_INDIKATO_REL_INDIK_PROGRAM_ FOREIGN KEY (PLK_ID)
      REFERENCES PROGRAM_LAYANAN_KOMPENSATORIS (PLK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE JURNAL_KELAS
   ADD CONSTRAINT FK_JURNAL_K_REL_JURNA_GURU FOREIGN KEY (GR_ID)
      REFERENCES GURU (GR_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE JURNAL_KELAS
   ADD CONSTRAINT FK_JURNAL_K_REL_JURNA_ROMBEL FOREIGN KEY (RM_ID)
      REFERENCES ROMBEL (RM_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE JURNAL_MATERI
   ADD CONSTRAINT FK_JURNAL_M_REL_GURU__GURU FOREIGN KEY (GR_ID)
      REFERENCES GURU (GR_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE JURNAL_MATERI
   ADD CONSTRAINT FK_JURNAL_M_REL_JURNA_MATA_PEL FOREIGN KEY (MAPEL_ID)
      REFERENCES MATA_PELAJARAN (MAPEL_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE JURNAL_PRIBADI_SISWA
   ADD CONSTRAINT FK_JURNAL_P_REL_JURNA_DETIL_RO FOREIGN KEY (RM_ID, SW_ID)
      REFERENCES DETIL_ROMBEL_SISWA (RM_ID, SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE KEBUTUHAN_SISWA
   ADD CONSTRAINT FK_KEBUTUHA_REL_PPI_K_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE KECAKAPAN_KOMPENSATORIS
   ADD CONSTRAINT FK_KECAKAPA_KECAKAPAN_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE KECAKAPAN_KOMPENSATORIS
   ADD CONSTRAINT FK_KECAKAPA_KECAKAPAN_MATA_PEL FOREIGN KEY (MAPEL_ID)
      REFERENCES MATA_PELAJARAN (MAPEL_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE KEKUATAN_SISWA
   ADD CONSTRAINT FK_KEKUATAN_REL_PPI_K_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE KELAINANTUBUH
   ADD CONSTRAINT FK_KELAINAN_REL_KELAI_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE PERSONAL_TERLIBAT
   ADD CONSTRAINT FK_PERSONAL_REL_PERSO_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE PPI
   ADD CONSTRAINT FK_PPI_REL_PPI_S_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE PROGRAM_LAYANAN_KOMPENSATORIS
   ADD CONSTRAINT FK_PROGRAM__REL_PLK_P_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE REL_KEBKHUSUS_SW
   ADD CONSTRAINT FK_REL_KEBK_REL_KEBKH_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE REL_KEBKHUSUS_SW
   ADD CONSTRAINT FK_REL_KEBK_REL_KEBKH_KEBUTUHA FOREIGN KEY (KK_ID)
      REFERENCES KEBUTUHAN_KHUSUS (KK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE REL_KEPRIBADIAN_SW
   ADD CONSTRAINT FK_REL_KEPR_REL_KEPRI_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE REL_KEPRIBADIAN_SW
   ADD CONSTRAINT FK_REL_KEPR_REL_KEPRI_CIRI_KEP FOREIGN KEY (CK_ID)
      REFERENCES CIRI_KEPRIBADIAN (CK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE ROMBEL
   ADD CONSTRAINT FK_ROMBEL_REL_WALIK_GURU FOREIGN KEY (GR_ID)
      REFERENCES GURU (GR_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE SAUDARA_KANDUNG
   ADD CONSTRAINT FK_SAUDARA__REL_PENDI_JENJANG_ FOREIGN KEY (JP_ID)
      REFERENCES JENJANG_PENDIDIKAN (JP_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE SAUDARA_KANDUNG
   ADD CONSTRAINT FK_SAUDARA__REL_SAUDA_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE SISWA
   ADD CONSTRAINT FK_SISWA_REL_AGAMA_AGAMA FOREIGN KEY (AG_ID)
      REFERENCES AGAMA (AG_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE SISWA
   ADD CONSTRAINT FK_SISWA_REL_ALATT_ALAT_TRA FOREIGN KEY (AT_ID)
      REFERENCES ALAT_TRANSPORTASI (AT_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE SISWA
   ADD CONSTRAINT FK_SISWA_REL_JENIS_JENIS_TI FOREIGN KEY (JT_ID)
      REFERENCES JENIS_TINGGAL (JT_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE SISWA
   ADD CONSTRAINT FK_SISWA_REL_PPI_S_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE SISWA
   ADD CONSTRAINT FK_SISWA_REL_WARGA_WARGANEG FOREIGN KEY (KWN_ID)
      REFERENCES WARGANEGARA (KWN_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE TIM_PENGEMBANG
   ADD CONSTRAINT FK_TIM_PENG_REL_TIMPE_PPI FOREIGN KEY (PPI_ID)
      REFERENCES PPI (PPI_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE URAIAN_KEGIATAN
   ADD CONSTRAINT FK_URAIAN_K_REL_URAIA_PROGRAM_ FOREIGN KEY (PLK_ID)
      REFERENCES PROGRAM_LAYANAN_KOMPENSATORIS (PLK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE WALI_MURID
   ADD CONSTRAINT FK_WALI_MUR_REL_JENJA_JENJANG_ FOREIGN KEY (JP_ID)
      REFERENCES JENJANG_PENDIDIKAN (JP_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE WALI_MURID
   ADD CONSTRAINT FK_WALI_MUR_REL_KEBKH_KEBUTUHA FOREIGN KEY (KK_ID)
      REFERENCES KEBUTUHAN_KHUSUS (KK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE WALI_MURID
   ADD CONSTRAINT FK_WALI_MUR_REL_PEKER_PEKERJAA FOREIGN KEY (PK_ID)
      REFERENCES PEKERJAAN (PK_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE WALI_MURID
   ADD CONSTRAINT FK_WALI_MUR_REL_PENGH_PENGHASI FOREIGN KEY (PH_ID)
      REFERENCES PENGHASILAN (PH_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE WALI_MURID
   ADD CONSTRAINT FK_WALI_MUR_REL_WALIM_SISWA FOREIGN KEY (SW_ID)
      REFERENCES SISWA (SW_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE WALI_MURID
   ADD CONSTRAINT FK_WALI_MUR_REL_WARGA_WARGANEG FOREIGN KEY (KWN_ID)
      REFERENCES WARGANEGARA (KWN_ID)
      ON DELETE RESTRICT ON UPDATE RESTRICT;

