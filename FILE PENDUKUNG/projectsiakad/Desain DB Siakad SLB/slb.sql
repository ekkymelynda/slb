/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     10/29/2016 8:56:31 PM                        */
/*==============================================================*/


drop index AGAMA_PK;

drop table AGAMA;

drop index ALAT_TRANSPORTASI_PK;

drop table ALAT_TRANSPORTASI;

drop index REL_BASEDLINE_PLK_FK;

drop index BASED_LINE_PK;

drop table BASED_LINE;

drop index CIRI_KEPRIBADIAN_PK;

drop table CIRI_KEPRIBADIAN;

drop index REL_ASESMEN_PPI_FK;

drop index DATA_ASESMEN_PK;

drop table DATA_ASESMEN;

drop index REL_DETILJURNALKELAS_FK;

drop index REK_MAPEL_DETILJURNALKELAS_FK;

drop index DETIL_JURNAL_KELAS_PK;

drop table DETIL_JURNAL_KELAS;

drop index REL_DETILJURNALMATERI_ROMBEL_FK;

drop index REL_DETILJURNALMATERI_FK;

drop index DETIL_JURNAL_MATERI_PK;

drop table DETIL_JURNAL_MATERI;

drop index REL_DETKEBUTUHAN_PPI_FK;

drop index DETIL_KEBUTUHAN_PK;

drop table DETIL_KEBUTUHAN;

drop index REL_PPI_PENEMPATANSW_FK;

drop index DETIL_PENEMPATAN_PK;

drop table DETIL_PENEMPATAN;

drop index REL_DETROMBELSW_1_FK;

drop index REL_ROMBRL_SW_FK;

drop table DETIL_ROMBEL_SISWA;

drop index REL_PENDIDIKAN_GURU_FK;

drop index GURU_PK;

drop table GURU;

drop index REL_RANGKUMAN_HASIL_ASASMEN_FK;

drop index HASIL_ASESMEN_PK;

drop table HASIL_ASESMEN;

drop index REL_IMUNISASI_SW_FK;

drop index IMUNISASI_PK;

drop table IMUNISASI;

drop index REL_INDIKATORBERHASIL_PLK_FK;

drop index INDIKATOR_KEBERHASILAN_PK;

drop table INDIKATOR_KEBERHASILAN;

drop index JENIS_TINGGAL_PK;

drop table JENIS_TINGGAL;

drop index JENJANG_PENDIDIKAN_PK;

drop table JENJANG_PENDIDIKAN;

drop index REL_JURNALKELAS_ROMBEL_FK;

drop index REL_JURNALKELAS_GURU_FK;

drop index JURNAL_KELAS_PK;

drop table JURNAL_KELAS;

drop index REL_JURNALMATERI_MAPEL_FK;

drop index REL_GURU_JURNALMATERI_FK;

drop index JURNAL_MATERI_PK;

drop table JURNAL_MATERI;

drop index REL_JURNALPRIBADISW_SWROMBEL_FK;

drop index JURNAL_PRIBADI_SISWA_PK;

drop table JURNAL_PRIBADI_SISWA;

drop index KEBUTUHAN_KHUSUS_PK;

drop table KEBUTUHAN_KHUSUS;

drop index REL_PPI_KEBUTUHANSW_FK;

drop index KEBUTUHAN_SISWA_PK;

drop table KEBUTUHAN_SISWA;

drop index KECAKAPAN_KOMPENSATORIS2_FK;

drop index KECAKAPAN_KOMPENSATORIS_FK;

drop index KECAKAPAN_KOMPENSATORIS_PK;

drop table KECAKAPAN_KOMPENSATORIS;

drop index REL_PPI_KEKUATANSW_FK;

drop index KEKUATAN_SISWA_PK;

drop table KEKUATAN_SISWA;

drop index REL_KELAINANTUBUH_SW_FK;

drop index KELAINANTUBUH_PK;

drop table KELAINANTUBUH;

drop index MATA_PELAJARAN_PK;

drop table MATA_PELAJARAN;

drop index PEKERJAAN_PK;

drop table PEKERJAAN;

drop index PENGHASILAN_PK;

drop table PENGHASILAN;

drop index REL_PERSONALTERLIBAT_PPI_FK;

drop index PERSONAL_TERLIBAT_PK;

drop table PERSONAL_TERLIBAT;

drop index REL_PPI_SISWA2_FK;

drop index PPI_PK;

drop table PPI;

drop index REL_PLK_PPI_FK;

drop index PROGRAM_LAYANAN_KOMPENSATORIS_P;

drop table PROGRAM_LAYANAN_KOMPENSATORIS;

drop index REL_KEBKHUSUS_IBU2_FK;

drop index REL_KEBKHUSUS_IBU_FK;

drop index REL_KEBKHUSUS_IBU_PK;

drop table REL_KEBKHUSUS_SW;

drop index REL_KEPRIBADIAN_SW2_FK;

drop index REL_KEPRIBADIAN_SW_FK;

drop index REL_KEPRIBADIAN_SW_PK;

drop table REL_KEPRIBADIAN_SW;

drop index REL_WALIKELAS_ROMBEL_FK;

drop index ROMBEL_PK;

drop table ROMBEL;

drop index REL_PENDIDIKAN_SAUDARAKDG_FK;

drop index RELATIONSHIP_3_FK;

drop index SAUDARA_KANDUNG_PK;

drop table SAUDARA_KANDUNG;

drop index REL_WARGANEGARA_SW_FK;

drop index REL_PPI_SISWA_FK;

drop index REL_ALATTRANS_SW_FK;

drop index REL_JENISTINGGAL_SW_FK;

drop index REL_AGAMA_SW_FK;

drop index SISWA_PK;

drop table SISWA;

drop index REL_TIMPENGEMBANG_PPI_FK;

drop index TIM_PENGEMBANG_PK;

drop table TIM_PENGEMBANG;

drop index REL_URAIANKEG_PLK_FK;

drop index URAIAN_KEGIATAN_PK;

drop table URAIAN_KEGIATAN;

drop index REL_JENJANGPEND_WM_FK;

drop index REL_WARGANEGARA_WM_FK;

drop index REL_KEBKHUSUS_WM_FK;

drop index REL_PEKERJAAN_WM_FK;

drop index REL_PENGHASILAN_WM_FK;

drop index REL_WALIMURID_SW_FK;

drop index WALI_MURID_PK;

drop table WALI_MURID;

drop index WARGANEGARA_PK;

drop table WARGANEGARA;

/*==============================================================*/
/* Table: AGAMA                                                 */
/*==============================================================*/
create table AGAMA (
   AG_ID                INT4                 not null,
   AG_NAMA              VARCHAR(30)          null,
   constraint PK_AGAMA primary key (AG_ID)
);

/*==============================================================*/
/* Index: AGAMA_PK                                              */
/*==============================================================*/
create unique index AGAMA_PK on AGAMA (
AG_ID
);

/*==============================================================*/
/* Table: ALAT_TRANSPORTASI                                     */
/*==============================================================*/
create table ALAT_TRANSPORTASI (
   AT_ID                INT4                 not null,
   AT_NAMAALATTRANS     VARCHAR(30)          null,
   constraint PK_ALAT_TRANSPORTASI primary key (AT_ID)
);

/*==============================================================*/
/* Index: ALAT_TRANSPORTASI_PK                                  */
/*==============================================================*/
create unique index ALAT_TRANSPORTASI_PK on ALAT_TRANSPORTASI (
AT_ID
);

/*==============================================================*/
/* Table: BASED_LINE                                            */
/*==============================================================*/
create table BASED_LINE (
   BASELINE_ID          INT4                 not null,
   PLK_ID               INT4                 not null,
   BASELINE_KET         VARCHAR(200)         null,
   constraint PK_BASED_LINE primary key (BASELINE_ID)
);

/*==============================================================*/
/* Index: BASED_LINE_PK                                         */
/*==============================================================*/
create unique index BASED_LINE_PK on BASED_LINE (
BASELINE_ID
);

/*==============================================================*/
/* Index: REL_BASEDLINE_PLK_FK                                  */
/*==============================================================*/
create  index REL_BASEDLINE_PLK_FK on BASED_LINE (
PLK_ID
);

/*==============================================================*/
/* Table: CIRI_KEPRIBADIAN                                      */
/*==============================================================*/
create table CIRI_KEPRIBADIAN (
   CK_ID                INT4                 not null,
   CK_KETERANGAN        VARCHAR(30)          null,
   constraint PK_CIRI_KEPRIBADIAN primary key (CK_ID)
);

/*==============================================================*/
/* Index: CIRI_KEPRIBADIAN_PK                                   */
/*==============================================================*/
create unique index CIRI_KEPRIBADIAN_PK on CIRI_KEPRIBADIAN (
CK_ID
);

/*==============================================================*/
/* Table: DATA_ASESMEN                                          */
/*==============================================================*/
create table DATA_ASESMEN (
   ASM_ID               INT4                 not null,
   PPI_ID               INT4                 null,
   ASM_SUMBERINFO       VARCHAR(30)          null,
   ASM_TGL              DATE                 null,
   constraint PK_DATA_ASESMEN primary key (ASM_ID)
);

/*==============================================================*/
/* Index: DATA_ASESMEN_PK                                       */
/*==============================================================*/
create unique index DATA_ASESMEN_PK on DATA_ASESMEN (
ASM_ID
);

/*==============================================================*/
/* Index: REL_ASESMEN_PPI_FK                                    */
/*==============================================================*/
create  index REL_ASESMEN_PPI_FK on DATA_ASESMEN (
PPI_ID
);

/*==============================================================*/
/* Table: DETIL_JURNAL_KELAS                                    */
/*==============================================================*/
create table DETIL_JURNAL_KELAS (
   DJK_ID               INT4                 not null,
   MAPEL_ID             INT4                 not null,
   JK_ID                INT4                 not null,
   DJK_TANGGAL          DATE                 null,
   DJK_MATERI           VARCHAR(200)         null,
   DJK_KETERANGAN       VARCHAR(200)         null,
   constraint PK_DETIL_JURNAL_KELAS primary key (DJK_ID)
);

/*==============================================================*/
/* Index: DETIL_JURNAL_KELAS_PK                                 */
/*==============================================================*/
create unique index DETIL_JURNAL_KELAS_PK on DETIL_JURNAL_KELAS (
DJK_ID
);

/*==============================================================*/
/* Index: REK_MAPEL_DETILJURNALKELAS_FK                         */
/*==============================================================*/
create  index REK_MAPEL_DETILJURNALKELAS_FK on DETIL_JURNAL_KELAS (
MAPEL_ID
);

/*==============================================================*/
/* Index: REL_DETILJURNALKELAS_FK                               */
/*==============================================================*/
create  index REL_DETILJURNALKELAS_FK on DETIL_JURNAL_KELAS (
JK_ID
);

/*==============================================================*/
/* Table: DETIL_JURNAL_MATERI                                   */
/*==============================================================*/
create table DETIL_JURNAL_MATERI (
   DJM_ID               INT4                 not null,
   JM_ID                INT4                 null,
   RM_ID                INT4                 null,
   DJM_TANGGAL          DATE                 null,
   DJM_JAMKE            VARCHAR(10)          null,
   DJM_MATERIPEMBELAJARAN VARCHAR(100)         null,
   DJM_JMLSWHADIR       INT4                 null,
   DJM_JMLSWTAKHADIR    INT4                 null,
   DJM_NAMAKETTAKHADIR  VARCHAR(200)         null,
   DJM_CATATAN          VARCHAR(100)         null,
   constraint PK_DETIL_JURNAL_MATERI primary key (DJM_ID)
);

/*==============================================================*/
/* Index: DETIL_JURNAL_MATERI_PK                                */
/*==============================================================*/
create unique index DETIL_JURNAL_MATERI_PK on DETIL_JURNAL_MATERI (
DJM_ID
);

/*==============================================================*/
/* Index: REL_DETILJURNALMATERI_FK                              */
/*==============================================================*/
create  index REL_DETILJURNALMATERI_FK on DETIL_JURNAL_MATERI (
JM_ID
);

/*==============================================================*/
/* Index: REL_DETILJURNALMATERI_ROMBEL_FK                       */
/*==============================================================*/
create  index REL_DETILJURNALMATERI_ROMBEL_FK on DETIL_JURNAL_MATERI (
RM_ID
);

/*==============================================================*/
/* Table: DETIL_KEBUTUHAN                                       */
/*==============================================================*/
create table DETIL_KEBUTUHAN (
   DETKEB_ID            INT4                 not null,
   PPI_ID               INT4                 not null,
   DETKEB_ALAT          VARCHAR(100)         null,
   DETKEB_PENYESUAIAN   VARCHAR(200)         null,
   constraint PK_DETIL_KEBUTUHAN primary key (DETKEB_ID)
);

/*==============================================================*/
/* Index: DETIL_KEBUTUHAN_PK                                    */
/*==============================================================*/
create unique index DETIL_KEBUTUHAN_PK on DETIL_KEBUTUHAN (
DETKEB_ID
);

/*==============================================================*/
/* Index: REL_DETKEBUTUHAN_PPI_FK                               */
/*==============================================================*/
create  index REL_DETKEBUTUHAN_PPI_FK on DETIL_KEBUTUHAN (
PPI_ID
);

/*==============================================================*/
/* Table: DETIL_PENEMPATAN                                      */
/*==============================================================*/
create table DETIL_PENEMPATAN (
   DP_ID                INT4                 not null,
   PPI_ID               INT4                 not null,
   DP_DETIL             VARCHAR(200)         null,
   constraint PK_DETIL_PENEMPATAN primary key (DP_ID)
);

/*==============================================================*/
/* Index: DETIL_PENEMPATAN_PK                                   */
/*==============================================================*/
create unique index DETIL_PENEMPATAN_PK on DETIL_PENEMPATAN (
DP_ID
);

/*==============================================================*/
/* Index: REL_PPI_PENEMPATANSW_FK                               */
/*==============================================================*/
create  index REL_PPI_PENEMPATANSW_FK on DETIL_PENEMPATAN (
PPI_ID
);

/*==============================================================*/
/* Table: DETIL_ROMBEL_SISWA                                    */
/*==============================================================*/
create table DETIL_ROMBEL_SISWA (
   RM_ID                INT4                 not null,
   SW_ID                INT4                 not null,
   constraint PK_DETIL_ROMBEL_SISWA primary key (RM_ID, SW_ID)
);

/*==============================================================*/
/* Index: REL_ROMBRL_SW_FK                                      */
/*==============================================================*/
create  index REL_ROMBRL_SW_FK on DETIL_ROMBEL_SISWA (
SW_ID
);

/*==============================================================*/
/* Index: REL_DETROMBELSW_1_FK                                  */
/*==============================================================*/
create  index REL_DETROMBELSW_1_FK on DETIL_ROMBEL_SISWA (
RM_ID
);

/*==============================================================*/
/* Table: GURU                                                  */
/*==============================================================*/
create table GURU (
   GR_ID                INT4                 not null,
   JP_ID                INT4                 not null,
   GR_NIP               CHAR(18)             null,
   GR_NUPTK             CHAR(16)             null,
   GR_NAMA              VARCHAR(50)          null,
   GR_GELAR             VARCHAR(20)          null,
   GR_JK                CHAR(1)              null,
   GR_JURUSAN           VARCHAR(50)          null,
   GR_SERTIFIKASI       VARCHAR(50)          null,
   GR_KEPEGAWAIAN       VARCHAR(50)          null,
   GR_JABATAN           VARCHAR(20)          null,
   GR_TMTKERJA          DATE                 null,
   GR_TGSTAMBAH         VARCHAR(30)          null,
   GR_MENGAJAR          VARCHAR(50)          null,
   GR_JAMPERMGG         INT4                 null,
   GR_NOIJAZAH          VARCHAR(50)          null,
   GR_NOSERTIFIKASI     VARCHAR(50)          null,
   constraint PK_GURU primary key (GR_ID)
);

/*==============================================================*/
/* Index: GURU_PK                                               */
/*==============================================================*/
create unique index GURU_PK on GURU (
GR_ID
);

/*==============================================================*/
/* Index: REL_PENDIDIKAN_GURU_FK                                */
/*==============================================================*/
create  index REL_PENDIDIKAN_GURU_FK on GURU (
JP_ID
);

/*==============================================================*/
/* Table: HASIL_ASESMEN                                         */
/*==============================================================*/
create table HASIL_ASESMEN (
   HA_ID                INT4                 not null,
   ASM_ID               INT4                 not null,
   HA_RINGKASAN         VARCHAR(200)         null,
   constraint PK_HASIL_ASESMEN primary key (HA_ID)
);

/*==============================================================*/
/* Index: HASIL_ASESMEN_PK                                      */
/*==============================================================*/
create unique index HASIL_ASESMEN_PK on HASIL_ASESMEN (
HA_ID
);

/*==============================================================*/
/* Index: REL_RANGKUMAN_HASIL_ASASMEN_FK                        */
/*==============================================================*/
create  index REL_RANGKUMAN_HASIL_ASASMEN_FK on HASIL_ASESMEN (
ASM_ID
);

/*==============================================================*/
/* Table: IMUNISASI                                             */
/*==============================================================*/
create table IMUNISASI (
   IM_ID                INT4                 not null,
   SW_ID                INT4                 not null,
   IM_JENIS             VARCHAR(20)          null,
   IM_USIA              VARCHAR(10)          null,
   constraint PK_IMUNISASI primary key (IM_ID)
);

/*==============================================================*/
/* Index: IMUNISASI_PK                                          */
/*==============================================================*/
create unique index IMUNISASI_PK on IMUNISASI (
IM_ID
);

/*==============================================================*/
/* Index: REL_IMUNISASI_SW_FK                                   */
/*==============================================================*/
create  index REL_IMUNISASI_SW_FK on IMUNISASI (
SW_ID
);

/*==============================================================*/
/* Table: INDIKATOR_KEBERHASILAN                                */
/*==============================================================*/
create table INDIKATOR_KEBERHASILAN (
   INDI_ID              INT4                 not null,
   PLK_ID               INT4                 not null,
   INDI_KET             VARCHAR(200)         null,
   constraint PK_INDIKATOR_KEBERHASILAN primary key (INDI_ID)
);

/*==============================================================*/
/* Index: INDIKATOR_KEBERHASILAN_PK                             */
/*==============================================================*/
create unique index INDIKATOR_KEBERHASILAN_PK on INDIKATOR_KEBERHASILAN (
INDI_ID
);

/*==============================================================*/
/* Index: REL_INDIKATORBERHASIL_PLK_FK                          */
/*==============================================================*/
create  index REL_INDIKATORBERHASIL_PLK_FK on INDIKATOR_KEBERHASILAN (
PLK_ID
);

/*==============================================================*/
/* Table: JENIS_TINGGAL                                         */
/*==============================================================*/
create table JENIS_TINGGAL (
   JT_ID                INT4                 not null,
   JT_JENISTINGGAL      VARCHAR(30)          null,
   constraint PK_JENIS_TINGGAL primary key (JT_ID)
);

/*==============================================================*/
/* Index: JENIS_TINGGAL_PK                                      */
/*==============================================================*/
create unique index JENIS_TINGGAL_PK on JENIS_TINGGAL (
JT_ID
);

/*==============================================================*/
/* Table: JENJANG_PENDIDIKAN                                    */
/*==============================================================*/
create table JENJANG_PENDIDIKAN (
   JP_ID                INT4                 not null,
   JP_JENJANG           VARCHAR(20)          null,
   constraint PK_JENJANG_PENDIDIKAN primary key (JP_ID)
);

/*==============================================================*/
/* Index: JENJANG_PENDIDIKAN_PK                                 */
/*==============================================================*/
create unique index JENJANG_PENDIDIKAN_PK on JENJANG_PENDIDIKAN (
JP_ID
);

/*==============================================================*/
/* Table: JURNAL_KELAS                                          */
/*==============================================================*/
create table JURNAL_KELAS (
   JK_ID                INT4                 not null,
   RM_ID                INT4                 not null,
   GR_ID                INT4                 not null,
   JK_BULAN             INT4                 null,
   JK_TAHUN             INT4                 null,
   constraint PK_JURNAL_KELAS primary key (JK_ID)
);

/*==============================================================*/
/* Index: JURNAL_KELAS_PK                                       */
/*==============================================================*/
create unique index JURNAL_KELAS_PK on JURNAL_KELAS (
JK_ID
);

/*==============================================================*/
/* Index: REL_JURNALKELAS_GURU_FK                               */
/*==============================================================*/
create  index REL_JURNALKELAS_GURU_FK on JURNAL_KELAS (
GR_ID
);

/*==============================================================*/
/* Index: REL_JURNALKELAS_ROMBEL_FK                             */
/*==============================================================*/
create  index REL_JURNALKELAS_ROMBEL_FK on JURNAL_KELAS (
RM_ID
);

/*==============================================================*/
/* Table: JURNAL_MATERI                                         */
/*==============================================================*/
create table JURNAL_MATERI (
   JM_ID                INT4                 not null,
   MAPEL_ID             INT4                 null,
   GR_ID                INT4                 not null,
   JM_THNAJARAN         VARCHAR(10)          null,
   JM_SEMESTER          VARCHAR(10)          null,
   constraint PK_JURNAL_MATERI primary key (JM_ID)
);

/*==============================================================*/
/* Index: JURNAL_MATERI_PK                                      */
/*==============================================================*/
create unique index JURNAL_MATERI_PK on JURNAL_MATERI (
JM_ID
);

/*==============================================================*/
/* Index: REL_GURU_JURNALMATERI_FK                              */
/*==============================================================*/
create  index REL_GURU_JURNALMATERI_FK on JURNAL_MATERI (
GR_ID
);

/*==============================================================*/
/* Index: REL_JURNALMATERI_MAPEL_FK                             */
/*==============================================================*/
create  index REL_JURNALMATERI_MAPEL_FK on JURNAL_MATERI (
MAPEL_ID
);

/*==============================================================*/
/* Table: JURNAL_PRIBADI_SISWA                                  */
/*==============================================================*/
create table JURNAL_PRIBADI_SISWA (
   JPSW_ID              INT4                 not null,
   RM_ID                INT4                 null,
   SW_ID                INT4                 null,
   JPSW_TANGGAL         DATE                 null,
   JPSW_PERKEMBANGAN    VARCHAR(200)         null,
   JPSW_KETERANGAN      VARCHAR(200)         null,
   constraint PK_JURNAL_PRIBADI_SISWA primary key (JPSW_ID)
);

/*==============================================================*/
/* Index: JURNAL_PRIBADI_SISWA_PK                               */
/*==============================================================*/
create unique index JURNAL_PRIBADI_SISWA_PK on JURNAL_PRIBADI_SISWA (
JPSW_ID
);

/*==============================================================*/
/* Index: REL_JURNALPRIBADISW_SWROMBEL_FK                       */
/*==============================================================*/
create  index REL_JURNALPRIBADISW_SWROMBEL_FK on JURNAL_PRIBADI_SISWA (
RM_ID,
SW_ID
);

/*==============================================================*/
/* Table: KEBUTUHAN_KHUSUS                                      */
/*==============================================================*/
create table KEBUTUHAN_KHUSUS (
   KK_ID                VARCHAR(2)           not null,
   KK_JENIS             VARCHAR(30)          null,
   constraint PK_KEBUTUHAN_KHUSUS primary key (KK_ID)
);

/*==============================================================*/
/* Index: KEBUTUHAN_KHUSUS_PK                                   */
/*==============================================================*/
create unique index KEBUTUHAN_KHUSUS_PK on KEBUTUHAN_KHUSUS (
KK_ID
);

/*==============================================================*/
/* Table: KEBUTUHAN_SISWA                                       */
/*==============================================================*/
create table KEBUTUHAN_SISWA (
   BS_ID                INT4                 not null,
   PPI_ID               INT4                 not null,
   BS_KETERANGAN        VARCHAR(200)         null,
   constraint PK_KEBUTUHAN_SISWA primary key (BS_ID)
);

/*==============================================================*/
/* Index: KEBUTUHAN_SISWA_PK                                    */
/*==============================================================*/
create unique index KEBUTUHAN_SISWA_PK on KEBUTUHAN_SISWA (
BS_ID
);

/*==============================================================*/
/* Index: REL_PPI_KEBUTUHANSW_FK                                */
/*==============================================================*/
create  index REL_PPI_KEBUTUHANSW_FK on KEBUTUHAN_SISWA (
PPI_ID
);

/*==============================================================*/
/* Table: KECAKAPAN_KOMPENSATORIS                               */
/*==============================================================*/
create table KECAKAPAN_KOMPENSATORIS (
   PPI_ID               INT4                 not null,
   MAPEL_ID             INT4                 not null,
   constraint PK_KECAKAPAN_KOMPENSATORIS primary key (PPI_ID, MAPEL_ID)
);

/*==============================================================*/
/* Index: KECAKAPAN_KOMPENSATORIS_PK                            */
/*==============================================================*/
create unique index KECAKAPAN_KOMPENSATORIS_PK on KECAKAPAN_KOMPENSATORIS (
PPI_ID,
MAPEL_ID
);

/*==============================================================*/
/* Index: KECAKAPAN_KOMPENSATORIS_FK                            */
/*==============================================================*/
create  index KECAKAPAN_KOMPENSATORIS_FK on KECAKAPAN_KOMPENSATORIS (
PPI_ID
);

/*==============================================================*/
/* Index: KECAKAPAN_KOMPENSATORIS2_FK                           */
/*==============================================================*/
create  index KECAKAPAN_KOMPENSATORIS2_FK on KECAKAPAN_KOMPENSATORIS (
MAPEL_ID
);

/*==============================================================*/
/* Table: KEKUATAN_SISWA                                        */
/*==============================================================*/
create table KEKUATAN_SISWA (
   KS_ID                INT4                 not null,
   PPI_ID               INT4                 not null,
   KS_KETERANGAN        VARCHAR(200)         null,
   constraint PK_KEKUATAN_SISWA primary key (KS_ID)
);

/*==============================================================*/
/* Index: KEKUATAN_SISWA_PK                                     */
/*==============================================================*/
create unique index KEKUATAN_SISWA_PK on KEKUATAN_SISWA (
KS_ID
);

/*==============================================================*/
/* Index: REL_PPI_KEKUATANSW_FK                                 */
/*==============================================================*/
create  index REL_PPI_KEKUATANSW_FK on KEKUATAN_SISWA (
PPI_ID
);

/*==============================================================*/
/* Table: KELAINANTUBUH                                         */
/*==============================================================*/
create table KELAINANTUBUH (
   KT_ID                INT4                 not null,
   SW_ID                INT4                 not null,
   KT_PENYAKIT_KECELAKAAN VARCHAR(100)         null,
   KT_USIA              INT4                 null,
   KT_LAMA              VARCHAR(20)          null,
   constraint PK_KELAINANTUBUH primary key (KT_ID)
);

/*==============================================================*/
/* Index: KELAINANTUBUH_PK                                      */
/*==============================================================*/
create unique index KELAINANTUBUH_PK on KELAINANTUBUH (
KT_ID
);

/*==============================================================*/
/* Index: REL_KELAINANTUBUH_SW_FK                               */
/*==============================================================*/
create  index REL_KELAINANTUBUH_SW_FK on KELAINANTUBUH (
SW_ID
);

/*==============================================================*/
/* Table: MATA_PELAJARAN                                        */
/*==============================================================*/
create table MATA_PELAJARAN (
   MAPEL_ID             INT4                 not null,
   MAPEL_NAMA           VARCHAR(30)          null,
   constraint PK_MATA_PELAJARAN primary key (MAPEL_ID)
);

/*==============================================================*/
/* Index: MATA_PELAJARAN_PK                                     */
/*==============================================================*/
create unique index MATA_PELAJARAN_PK on MATA_PELAJARAN (
MAPEL_ID
);

/*==============================================================*/
/* Table: PEKERJAAN                                             */
/*==============================================================*/
create table PEKERJAAN (
   PK_ID                INT4                 not null,
   PK_NAMA              VARCHAR(30)          null,
   constraint PK_PEKERJAAN primary key (PK_ID)
);

/*==============================================================*/
/* Index: PEKERJAAN_PK                                          */
/*==============================================================*/
create unique index PEKERJAAN_PK on PEKERJAAN (
PK_ID
);

/*==============================================================*/
/* Table: PENGHASILAN                                           */
/*==============================================================*/
create table PENGHASILAN (
   PH_ID                INT4                 not null,
   PH_BESARAN           VARCHAR(50)          null,
   constraint PK_PENGHASILAN primary key (PH_ID)
);

/*==============================================================*/
/* Index: PENGHASILAN_PK                                        */
/*==============================================================*/
create unique index PENGHASILAN_PK on PENGHASILAN (
PH_ID
);

/*==============================================================*/
/* Table: PERSONAL_TERLIBAT                                     */
/*==============================================================*/
create table PERSONAL_TERLIBAT (
   PT_ID                INT4                 not null,
   PPI_ID               INT4                 not null,
   PT_JENISPELAYANAN    VARCHAR(100)         null,
   PT_FREKUENSI         VARCHAR(100)         null,
   PT_LOKASI            VARCHAR(100)         null,
   constraint PK_PERSONAL_TERLIBAT primary key (PT_ID)
);

/*==============================================================*/
/* Index: PERSONAL_TERLIBAT_PK                                  */
/*==============================================================*/
create unique index PERSONAL_TERLIBAT_PK on PERSONAL_TERLIBAT (
PT_ID
);

/*==============================================================*/
/* Index: REL_PERSONALTERLIBAT_PPI_FK                           */
/*==============================================================*/
create  index REL_PERSONALTERLIBAT_PPI_FK on PERSONAL_TERLIBAT (
PPI_ID
);

/*==============================================================*/
/* Table: PPI                                                   */
/*==============================================================*/
create table PPI (
   PPI_ID               INT4                 not null,
   SW_ID                INT4                 not null,
   PPI_SEMESTER         INT4                 null,
   PPI_THNAJAR          VARCHAR(10)          null,
   PPI_KEKHUSUSANUTAMA  VARCHAR(50)          null,
   PPI_KEKHUSUSANSEKUNDER VARCHAR(50)          null,
   PPI_STDKURIKULUM     VARCHAR(50)          null,
   constraint PK_PPI primary key (PPI_ID)
);

/*==============================================================*/
/* Index: PPI_PK                                                */
/*==============================================================*/
create unique index PPI_PK on PPI (
PPI_ID
);

/*==============================================================*/
/* Index: REL_PPI_SISWA2_FK                                     */
/*==============================================================*/
create  index REL_PPI_SISWA2_FK on PPI (
SW_ID
);

/*==============================================================*/
/* Table: PROGRAM_LAYANAN_KOMPENSATORIS                         */
/*==============================================================*/
create table PROGRAM_LAYANAN_KOMPENSATORIS (
   PLK_ID               INT4                 not null,
   PPI_ID               INT4                 not null,
   PLK_NAMAKETERAMPILAN VARCHAR(150)         null,
   constraint PK_PROGRAM_LAYANAN_KOMPENSATOR primary key (PLK_ID)
);

/*==============================================================*/
/* Index: PROGRAM_LAYANAN_KOMPENSATORIS_P                       */
/*==============================================================*/
create unique index PROGRAM_LAYANAN_KOMPENSATORIS_P on PROGRAM_LAYANAN_KOMPENSATORIS (
PLK_ID
);

/*==============================================================*/
/* Index: REL_PLK_PPI_FK                                        */
/*==============================================================*/
create  index REL_PLK_PPI_FK on PROGRAM_LAYANAN_KOMPENSATORIS (
PPI_ID
);

/*==============================================================*/
/* Table: REL_KEBKHUSUS_SW                                      */
/*==============================================================*/
create table REL_KEBKHUSUS_SW (
   SW_ID                INT4                 not null,
   KK_ID                VARCHAR(2)           not null,
   constraint PK_REL_KEBKHUSUS_SW primary key (SW_ID, KK_ID)
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_IBU_PK                                  */
/*==============================================================*/
create unique index REL_KEBKHUSUS_IBU_PK on REL_KEBKHUSUS_SW (
SW_ID,
KK_ID
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_IBU_FK                                  */
/*==============================================================*/
create  index REL_KEBKHUSUS_IBU_FK on REL_KEBKHUSUS_SW (
SW_ID
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_IBU2_FK                                 */
/*==============================================================*/
create  index REL_KEBKHUSUS_IBU2_FK on REL_KEBKHUSUS_SW (
KK_ID
);

/*==============================================================*/
/* Table: REL_KEPRIBADIAN_SW                                    */
/*==============================================================*/
create table REL_KEPRIBADIAN_SW (
   SW_ID                INT4                 not null,
   CK_ID                INT4                 not null,
   constraint PK_REL_KEPRIBADIAN_SW primary key (SW_ID, CK_ID)
);

/*==============================================================*/
/* Index: REL_KEPRIBADIAN_SW_PK                                 */
/*==============================================================*/
create unique index REL_KEPRIBADIAN_SW_PK on REL_KEPRIBADIAN_SW (
SW_ID,
CK_ID
);

/*==============================================================*/
/* Index: REL_KEPRIBADIAN_SW_FK                                 */
/*==============================================================*/
create  index REL_KEPRIBADIAN_SW_FK on REL_KEPRIBADIAN_SW (
SW_ID
);

/*==============================================================*/
/* Index: REL_KEPRIBADIAN_SW2_FK                                */
/*==============================================================*/
create  index REL_KEPRIBADIAN_SW2_FK on REL_KEPRIBADIAN_SW (
CK_ID
);

/*==============================================================*/
/* Table: ROMBEL                                                */
/*==============================================================*/
create table ROMBEL (
   RM_ID                INT4                 not null,
   GR_ID                INT4                 not null,
   RM_THNAJAR           VARCHAR(10)          null,
   RM_BC                CHAR(1)              not null,
   RM_KELAS             INT4                 not null,
   constraint PK_ROMBEL primary key (RM_ID)
);

/*==============================================================*/
/* Index: ROMBEL_PK                                             */
/*==============================================================*/
create unique index ROMBEL_PK on ROMBEL (
RM_ID
);

/*==============================================================*/
/* Index: REL_WALIKELAS_ROMBEL_FK                               */
/*==============================================================*/
create  index REL_WALIKELAS_ROMBEL_FK on ROMBEL (
GR_ID
);

/*==============================================================*/
/* Table: SAUDARA_KANDUNG                                       */
/*==============================================================*/
create table SAUDARA_KANDUNG (
   SK_ID                INT4                 not null,
   JP_ID                INT4                 null,
   SW_ID                INT4                 not null,
   SK_NAMA              VARCHAR(50)          null,
   SK_JK                CHAR(1)              null,
   SK_PENDIDIKAN        VARCHAR(30)          null,
   constraint PK_SAUDARA_KANDUNG primary key (SK_ID)
);

/*==============================================================*/
/* Index: SAUDARA_KANDUNG_PK                                    */
/*==============================================================*/
create unique index SAUDARA_KANDUNG_PK on SAUDARA_KANDUNG (
SK_ID
);

/*==============================================================*/
/* Index: RELATIONSHIP_3_FK                                     */
/*==============================================================*/
create  index RELATIONSHIP_3_FK on SAUDARA_KANDUNG (
SW_ID
);

/*==============================================================*/
/* Index: REL_PENDIDIKAN_SAUDARAKDG_FK                          */
/*==============================================================*/
create  index REL_PENDIDIKAN_SAUDARAKDG_FK on SAUDARA_KANDUNG (
JP_ID
);

/*==============================================================*/
/* Table: SISWA                                                 */
/*==============================================================*/
create table SISWA (
   SW_ID                INT4                 not null,
   KWN_ID               INT4                 not null,
   AT_ID                INT4                 not null,
   PPI_ID               INT4                 null,
   AG_ID                INT4                 not null,
   JT_ID                INT4                 not null,
   PENDAFTAR_NAMA       VARCHAR(50)          null,
   PENDAFTAR_STATUS     VARCHAR(50)          null,
   PENDAFTAR_ALAMAT     VARCHAR(100)         null,
   PENDAFTAR_TELP       VARCHAR(20)          null,
   NIS                  CHAR(10)             null,
   NISN                 CHAR(10)             null,
   NIK                  CHAR(16)             null,
   SW_NAMA              VARCHAR(100)         null,
   SW_NAMAPANGGIL       VARCHAR(50)          null,
   SW_TEMPATLAHIR       VARCHAR(100)         null,
   SW_TGLLAHIR          DATE                 null,
   SW_USIAPERMASUK      INT4                 null,
   SW_JK                CHAR(1)              null,
   SW_BAHASARUMAH       VARCHAR(20)          null,
   SW_ANAKKE            INT4                 null,
   SW_JMLBERSDR         INT4                 null,
   SW_TINGKATASALSEKOLAH VARCHAR(3)           null,
   SW_NAMAASALSEKOLAH   VARCHAR(50)          null,
   SW_ASALSEKTHNMASUK   INT4                 null,
   SW_ASALSEKTHNLULUS   INT4                 null,
   SW_ALAMATASALSEK     VARCHAR(100)         null,
   SW_AKTIVSUKA         VARCHAR(200)         null,
   SW_LAMAKANDUNGANBLN  INT4                 null,
   SW_LAMAKANDUNGANHARI INT4                 null,
   SW_KEADAANKANDUNGAN  BOOL                 null,
   SW_KEADAANLAHIR      VARCHAR(50)          null,
   SW_PROSESLAHIR       VARCHAR(50)          null,
   SW_YGMEMBANTULAHIR   VARCHAR(50)          null,
   SW_BERATLAHIR        DECIMAL(2,2)         null,
   SW_PANJANGLAHIR      INT4                 null,
   SW_USIAIBUSAATLAHIR  INT4                 null,
   SW_BERATANAK         DECIMAL(2,2)         null,
   SW_PANJANGANAK       INT4                 null,
   SW_GOLDAR            VARCHAR(2)           null,
   SW_LAMAMINUMASI      VARCHAR(20)          null,
   SW_DUABLNAWAL        BOOL                 null,
   SW_MAKANANTAMBAHAN   VARCHAR(100)         null,
   SW_ALERGI            VARCHAR(200)         null,
   SW_PENGLIHATAN       BOOL                 null,
   SW_PENDENGARAN       BOOL                 null,
   SW_PENAMPILAN        BOOL                 null,
   SW_CIRIFISIK         VARCHAR(100)         null,
   SW_BAKATKHUSUS       VARCHAR(100)         null,
   SW_PRESTASI          VARCHAR(100)         null,
   SW_ALAMAT            VARCHAR(100)         null,
   SW_ALAMATRT          INT4                 null,
   SW_ALAMATRW          INT4                 null,
   SW_ALAMATDUSUN       VARCHAR(30)          null,
   SW_ALAMATKEL         VARCHAR(30)          null,
   SW_ALAMATKEC         VARCHAR(30)          null,
   SW_KODEPOS           CHAR(5)              null,
   SW_TELP              VARCHAR(20)          null,
   SW_HP                VARCHAR(20)          null,
   SW_EMAIL             VARCHAR(50)          null,
   SW_SKHUN             VARCHAR(50)          null,
   SW_PENERIMAKPS       BOOL                 null,
   SW_NOKPS             VARCHAR(50)          null,
   SW_LASTUPDATE        DATE                 null,
   constraint PK_SISWA primary key (SW_ID)
);

/*==============================================================*/
/* Index: SISWA_PK                                              */
/*==============================================================*/
create unique index SISWA_PK on SISWA (
SW_ID
);

/*==============================================================*/
/* Index: REL_AGAMA_SW_FK                                       */
/*==============================================================*/
create  index REL_AGAMA_SW_FK on SISWA (
AG_ID
);

/*==============================================================*/
/* Index: REL_JENISTINGGAL_SW_FK                                */
/*==============================================================*/
create  index REL_JENISTINGGAL_SW_FK on SISWA (
JT_ID
);

/*==============================================================*/
/* Index: REL_ALATTRANS_SW_FK                                   */
/*==============================================================*/
create  index REL_ALATTRANS_SW_FK on SISWA (
AT_ID
);

/*==============================================================*/
/* Index: REL_PPI_SISWA_FK                                      */
/*==============================================================*/
create  index REL_PPI_SISWA_FK on SISWA (
PPI_ID
);

/*==============================================================*/
/* Index: REL_WARGANEGARA_SW_FK                                 */
/*==============================================================*/
create  index REL_WARGANEGARA_SW_FK on SISWA (
KWN_ID
);

/*==============================================================*/
/* Table: TIM_PENGEMBANG                                        */
/*==============================================================*/
create table TIM_PENGEMBANG (
   TP_ID                INT4                 not null,
   PPI_ID               INT4                 not null,
   TP_NAMA              VARCHAR(100)         null,
   TP_STATUS            VARCHAR(50)          null,
   constraint PK_TIM_PENGEMBANG primary key (TP_ID)
);

/*==============================================================*/
/* Index: TIM_PENGEMBANG_PK                                     */
/*==============================================================*/
create unique index TIM_PENGEMBANG_PK on TIM_PENGEMBANG (
TP_ID
);

/*==============================================================*/
/* Index: REL_TIMPENGEMBANG_PPI_FK                              */
/*==============================================================*/
create  index REL_TIMPENGEMBANG_PPI_FK on TIM_PENGEMBANG (
PPI_ID
);

/*==============================================================*/
/* Table: URAIAN_KEGIATAN                                       */
/*==============================================================*/
create table URAIAN_KEGIATAN (
   UK_ID                INT4                 not null,
   PLK_ID               INT4                 not null,
   UK_TUJUANPEMB        TEXT                 null,
   UK_STRATEGIPEMB      TEXT                 null,
   UK_TEKNIK            TEXT                 null,
   constraint PK_URAIAN_KEGIATAN primary key (UK_ID)
);

/*==============================================================*/
/* Index: URAIAN_KEGIATAN_PK                                    */
/*==============================================================*/
create unique index URAIAN_KEGIATAN_PK on URAIAN_KEGIATAN (
UK_ID
);

/*==============================================================*/
/* Index: REL_URAIANKEG_PLK_FK                                  */
/*==============================================================*/
create  index REL_URAIANKEG_PLK_FK on URAIAN_KEGIATAN (
PLK_ID
);

/*==============================================================*/
/* Table: WALI_MURID                                            */
/*==============================================================*/
create table WALI_MURID (
   WM_ID                INT4                 not null,
   KWN_ID               INT4                 not null,
   PK_ID                INT4                 not null,
   PH_ID                INT4                 not null,
   KK_ID                VARCHAR(2)           null,
   JP_ID                INT4                 null,
   SW_ID                INT4                 not null,
   WM_SEBAGAI           CHAR(3)              null,
   WM_NAMA              VARCHAR(50)          null,
   WM_TEMPATLAHIR       VARCHAR(30)          null,
   WM_TGLLAHIR          DATE                 null,
   WM_INSKERJA          VARCHAR(50)          null,
   WM_JABATANKERJA      VARCHAR(50)          null,
   WM_PANGKAT           VARCHAR(30)          null,
   WM_LAMAKERJAPERHARI  VARCHAR(30)          null,
   WM_JMLTANGGUNG       INT4                 null,
   WM_ALAMATRUMAH       VARCHAR(100)         null,
   WM_ALAMATKANTOR      VARCHAR(100)         null,
   WM_TELP              VARCHAR(20)          null,
   WM_USIANIKAH         INT4                 null,
   WM_KESEMPATANKOM     BOOL                 null,
   constraint PK_WALI_MURID primary key (WM_ID)
);

/*==============================================================*/
/* Index: WALI_MURID_PK                                         */
/*==============================================================*/
create unique index WALI_MURID_PK on WALI_MURID (
WM_ID
);

/*==============================================================*/
/* Index: REL_WALIMURID_SW_FK                                   */
/*==============================================================*/
create  index REL_WALIMURID_SW_FK on WALI_MURID (
SW_ID
);

/*==============================================================*/
/* Index: REL_PENGHASILAN_WM_FK                                 */
/*==============================================================*/
create  index REL_PENGHASILAN_WM_FK on WALI_MURID (
PH_ID
);

/*==============================================================*/
/* Index: REL_PEKERJAAN_WM_FK                                   */
/*==============================================================*/
create  index REL_PEKERJAAN_WM_FK on WALI_MURID (
PK_ID
);

/*==============================================================*/
/* Index: REL_KEBKHUSUS_WM_FK                                   */
/*==============================================================*/
create  index REL_KEBKHUSUS_WM_FK on WALI_MURID (
KK_ID
);

/*==============================================================*/
/* Index: REL_WARGANEGARA_WM_FK                                 */
/*==============================================================*/
create  index REL_WARGANEGARA_WM_FK on WALI_MURID (
KWN_ID
);

/*==============================================================*/
/* Index: REL_JENJANGPEND_WM_FK                                 */
/*==============================================================*/
create  index REL_JENJANGPEND_WM_FK on WALI_MURID (
JP_ID
);

/*==============================================================*/
/* Table: WARGANEGARA                                           */
/*==============================================================*/
create table WARGANEGARA (
   KWN_ID               INT4                 not null,
   KWN_JENIS            VARCHAR(30)          null,
   constraint PK_WARGANEGARA primary key (KWN_ID)
);

/*==============================================================*/
/* Index: WARGANEGARA_PK                                        */
/*==============================================================*/
create unique index WARGANEGARA_PK on WARGANEGARA (
KWN_ID
);

alter table BASED_LINE
   add constraint FK_BASED_LI_REL_BASED_PROGRAM_ foreign key (PLK_ID)
      references PROGRAM_LAYANAN_KOMPENSATORIS (PLK_ID)
      on delete restrict on update restrict;

alter table DATA_ASESMEN
   add constraint FK_DATA_ASE_REL_ASESM_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table DETIL_JURNAL_KELAS
   add constraint FK_DETIL_JU_REK_MAPEL_MATA_PEL foreign key (MAPEL_ID)
      references MATA_PELAJARAN (MAPEL_ID)
      on delete restrict on update restrict;

alter table DETIL_JURNAL_KELAS
   add constraint FK_DETIL_JU_REL_DETIL_JURNAL_K foreign key (JK_ID)
      references JURNAL_KELAS (JK_ID)
      on delete restrict on update restrict;

alter table DETIL_JURNAL_MATERI
   add constraint FK_DETIL_JU_REL_DETIL_JURNAL_M foreign key (JM_ID)
      references JURNAL_MATERI (JM_ID)
      on delete restrict on update restrict;

alter table DETIL_JURNAL_MATERI
   add constraint FK_DETIL_JU_REL_DETIL_ROMBEL foreign key (RM_ID)
      references ROMBEL (RM_ID)
      on delete restrict on update restrict;

alter table DETIL_KEBUTUHAN
   add constraint FK_DETIL_KE_REL_DETKE_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table DETIL_PENEMPATAN
   add constraint FK_DETIL_PE_REL_PPI_P_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table DETIL_ROMBEL_SISWA
   add constraint FK_DETIL_RO_REL_DETRO_ROMBEL foreign key (RM_ID)
      references ROMBEL (RM_ID)
      on delete restrict on update restrict;

alter table DETIL_ROMBEL_SISWA
   add constraint FK_DETIL_RO_REL_ROMBR_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table GURU
   add constraint FK_GURU_REL_PENDI_JENJANG_ foreign key (JP_ID)
      references JENJANG_PENDIDIKAN (JP_ID)
      on delete restrict on update restrict;

alter table HASIL_ASESMEN
   add constraint FK_HASIL_AS_REL_RANGK_DATA_ASE foreign key (ASM_ID)
      references DATA_ASESMEN (ASM_ID)
      on delete restrict on update restrict;

alter table IMUNISASI
   add constraint FK_IMUNISAS_REL_IMUNI_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table INDIKATOR_KEBERHASILAN
   add constraint FK_INDIKATO_REL_INDIK_PROGRAM_ foreign key (PLK_ID)
      references PROGRAM_LAYANAN_KOMPENSATORIS (PLK_ID)
      on delete restrict on update restrict;

alter table JURNAL_KELAS
   add constraint FK_JURNAL_K_REL_JURNA_GURU foreign key (GR_ID)
      references GURU (GR_ID)
      on delete restrict on update restrict;

alter table JURNAL_KELAS
   add constraint FK_JURNAL_K_REL_JURNA_ROMBEL foreign key (RM_ID)
      references ROMBEL (RM_ID)
      on delete restrict on update restrict;

alter table JURNAL_MATERI
   add constraint FK_JURNAL_M_REL_GURU__GURU foreign key (GR_ID)
      references GURU (GR_ID)
      on delete restrict on update restrict;

alter table JURNAL_MATERI
   add constraint FK_JURNAL_M_REL_JURNA_MATA_PEL foreign key (MAPEL_ID)
      references MATA_PELAJARAN (MAPEL_ID)
      on delete restrict on update restrict;

alter table JURNAL_PRIBADI_SISWA
   add constraint FK_JURNAL_P_REL_JURNA_DETIL_RO foreign key (RM_ID, SW_ID)
      references DETIL_ROMBEL_SISWA (RM_ID, SW_ID)
      on delete restrict on update restrict;

alter table KEBUTUHAN_SISWA
   add constraint FK_KEBUTUHA_REL_PPI_K_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table KECAKAPAN_KOMPENSATORIS
   add constraint FK_KECAKAPA_KECAKAPAN_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table KECAKAPAN_KOMPENSATORIS
   add constraint FK_KECAKAPA_KECAKAPAN_MATA_PEL foreign key (MAPEL_ID)
      references MATA_PELAJARAN (MAPEL_ID)
      on delete restrict on update restrict;

alter table KEKUATAN_SISWA
   add constraint FK_KEKUATAN_REL_PPI_K_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table KELAINANTUBUH
   add constraint FK_KELAINAN_REL_KELAI_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table PERSONAL_TERLIBAT
   add constraint FK_PERSONAL_REL_PERSO_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table PPI
   add constraint FK_PPI_REL_PPI_S_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table PROGRAM_LAYANAN_KOMPENSATORIS
   add constraint FK_PROGRAM__REL_PLK_P_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table REL_KEBKHUSUS_SW
   add constraint FK_REL_KEBK_REL_KEBKH_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table REL_KEBKHUSUS_SW
   add constraint FK_REL_KEBK_REL_KEBKH_KEBUTUHA foreign key (KK_ID)
      references KEBUTUHAN_KHUSUS (KK_ID)
      on delete restrict on update restrict;

alter table REL_KEPRIBADIAN_SW
   add constraint FK_REL_KEPR_REL_KEPRI_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table REL_KEPRIBADIAN_SW
   add constraint FK_REL_KEPR_REL_KEPRI_CIRI_KEP foreign key (CK_ID)
      references CIRI_KEPRIBADIAN (CK_ID)
      on delete restrict on update restrict;

alter table ROMBEL
   add constraint FK_ROMBEL_REL_WALIK_GURU foreign key (GR_ID)
      references GURU (GR_ID)
      on delete restrict on update restrict;

alter table SAUDARA_KANDUNG
   add constraint FK_SAUDARA__REL_PENDI_JENJANG_ foreign key (JP_ID)
      references JENJANG_PENDIDIKAN (JP_ID)
      on delete restrict on update restrict;

alter table SAUDARA_KANDUNG
   add constraint FK_SAUDARA__REL_SAUDA_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table SISWA
   add constraint FK_SISWA_REL_AGAMA_AGAMA foreign key (AG_ID)
      references AGAMA (AG_ID)
      on delete restrict on update restrict;

alter table SISWA
   add constraint FK_SISWA_REL_ALATT_ALAT_TRA foreign key (AT_ID)
      references ALAT_TRANSPORTASI (AT_ID)
      on delete restrict on update restrict;

alter table SISWA
   add constraint FK_SISWA_REL_JENIS_JENIS_TI foreign key (JT_ID)
      references JENIS_TINGGAL (JT_ID)
      on delete restrict on update restrict;

alter table SISWA
   add constraint FK_SISWA_REL_PPI_S_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table SISWA
   add constraint FK_SISWA_REL_WARGA_WARGANEG foreign key (KWN_ID)
      references WARGANEGARA (KWN_ID)
      on delete restrict on update restrict;

alter table TIM_PENGEMBANG
   add constraint FK_TIM_PENG_REL_TIMPE_PPI foreign key (PPI_ID)
      references PPI (PPI_ID)
      on delete restrict on update restrict;

alter table URAIAN_KEGIATAN
   add constraint FK_URAIAN_K_REL_URAIA_PROGRAM_ foreign key (PLK_ID)
      references PROGRAM_LAYANAN_KOMPENSATORIS (PLK_ID)
      on delete restrict on update restrict;

alter table WALI_MURID
   add constraint FK_WALI_MUR_REL_JENJA_JENJANG_ foreign key (JP_ID)
      references JENJANG_PENDIDIKAN (JP_ID)
      on delete restrict on update restrict;

alter table WALI_MURID
   add constraint FK_WALI_MUR_REL_KEBKH_KEBUTUHA foreign key (KK_ID)
      references KEBUTUHAN_KHUSUS (KK_ID)
      on delete restrict on update restrict;

alter table WALI_MURID
   add constraint FK_WALI_MUR_REL_PEKER_PEKERJAA foreign key (PK_ID)
      references PEKERJAAN (PK_ID)
      on delete restrict on update restrict;

alter table WALI_MURID
   add constraint FK_WALI_MUR_REL_PENGH_PENGHASI foreign key (PH_ID)
      references PENGHASILAN (PH_ID)
      on delete restrict on update restrict;

alter table WALI_MURID
   add constraint FK_WALI_MUR_REL_WALIM_SISWA foreign key (SW_ID)
      references SISWA (SW_ID)
      on delete restrict on update restrict;

alter table WALI_MURID
   add constraint FK_WALI_MUR_REL_WARGA_WARGANEG foreign key (KWN_ID)
      references WARGANEGARA (KWN_ID)
      on delete restrict on update restrict;

