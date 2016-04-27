<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content -->
<body>
    <!-- Feature -->
    <?php 
    // echo form_open('pendaftar/Con_pendaftar/lihatpendaftar/.$hasil->SW_ID'); 
    ?>

    <form method='POST' action='<?php echo base_url('pendaftar/Con_pendaftar/lihatpendaftar/.$hasil->SW_ID')?>'>
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Detail pendaftar</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Detail data :
                        </div>
                        <div class="panel-body">
                            <label>Id Kewarganegaraan : <?php echo $KWN_ID ?></label><p></p>
                            <label>Id Alat Transportasi :<?php echo $AT_ID ?></label><p></p>
                            <label>Id PPI :<?php echo $PPI_ID ?></label><p></p>
                            <label>Id Agama :<?php echo $AG_ID ?></label><p></p>
                            <label>Id Jenis Tinggal :<?php echo $JT_ID ?></label><p></p>
                            <label>Nama Pendaftar pendaftar : <?php echo $PENDAFTAR_NAMA ?></label><p></p>

                            <label>Status Pendaftar Terhadap pendaftar :<?php echo $PENDAFTAR_NAMA ?></label><p></p>
                            <label>Alamat Pendaftar :<?php echo $SW_ALAMAT ?></label><p></p>
                            <label>Telepon Pendaftar :<?php echo $SW_TELP ?></label><p></p>
                            <label>Nama Panggilan Pendaftar :<?php echo $SW_NAMAPANGGIL ?></label><p></p>
                            <label>Tempat Lahir Pendaftar :<?php echo $SW_TEMPATLAHIR ?></label><p></p>
                            <label>Tanggal Lahir Pendaftar :<?php echo $SW_TGLLAHIR ?></label><p></p>
                            <label>Usia Permasuk Pendaftar :<?php echo $SW_USIAPERMASUK ?></label><p></p>
                            <label>Jenis Kelamin Pendaftar :<?php echo $SW_JK ?></label><p></p>
                            <label>Bahasa di Rumah:<?php echo $SW_BAHASARUMAH ?></label><p></p>
                            <label>Anak Ke- :<?php echo $SW_ANAKKE ?></label><p></p>
                            <label>Jumlah Bersaudara Pendaftar :<?php echo $SW_JMLBERSDR ?></label><p></p>
                            <label>Tingkat Sekolah Asal Pendaftar :<?php echo $SW_TINGKATASALSEKOLAH ?></label><p></p>
                            <label>Nama Sekolah Pendaftar :<?php echo $SW_NAMAASALSEKOLAH ?></label><p></p>
                            <label>Tahun Masuk Sekolah Asal Pendaftar :<?php echo $SW_ASALSEKTHNMASUK ?></label><p></p>
                            <label>Tahun Lulus Sekolah Asal Pendaftar :<?php echo $SW_ASALSEKTHNLULUS ?></label><p></p>
                            <label>Alamat Sekolah Asal Pendaftar :<?php echo $SW_ALAMATASALSEK ?></label><p></p>
                            <label>Aktivitas Yang Disukai Pendaftar :<?php echo $SW_AKTIVSUKA ?></label><p></p>
                            <label>Lama Kandungan (dalam Bulan)  Pendaftar :<?php echo $SW_LAMAKANDUNGANBLN ?></label><p></p>
                            <label>Lama Kandungan (dalam Hari) Pendaftar :<?php echo $SW_LAMAKANDUNGANHARI ?></label><p></p>
                            <label>Keadaan Kandungan Pendaftar :<?php echo $SW_KEADAANKANDUNGAN ?></label><p></p>
                            <label>Keadaan Lahir Pendaftar :<?php echo $SW_KEADAANLAHIR ?></label><p></p>
                            <label>Proses Lahir Pendaftar :<?php echo $SW_PROSESLAHIR ?></label><p></p>
                            <label>Yang Membantu Kelahiran Pendaftar :<?php echo $SW_YGMEMBANTULAHIR ?></label><p></p>
                            <label>Berat Lahir Pendaftar :<?php echo $SW_BERATANAK ?></label><p></p>
                            <label>Panjang Lahir Pendaftar :<?php echo $SW_PANJANGLAHIR ?></label><p></p>
                            <label>Usia Ibu Saat Lahir Pendaftar :<?php echo $SW_USIAIBUSAATLAHIR ?></label><p></p>
                            <label>Berat Anak Pendaftar :<?php echo $SW_BERATANAK ?></label><p></p>
                            <label>Panjang Anak Pendaftar :<?php echo $SW_PANJANGANAK ?></label><p></p>
                            <label>Golongan Darah Pendaftar :<?php echo $SW_GOLDAR ?></label><p></p>
                            <label>Lama Minum ASI Pendaftar :<?php echo $SW_LAMAMINUMASI ?></label><p></p>
                            <label>Dua Bulan Awal Pendaftar :<?php echo $SW_DUABLNAWAL ?></label><p></p>
                            <label>Makanan Tambahan Pendaftar :<?php echo $SW_MAKANANTAMBAHAN ?></label><p></p>
                            <label>Alergi Pendaftar :<?php echo $SW_ALERGI ?></label><p></p>
                            <label>Penglihatan Pendaftar :<?php echo $SW_PENGLIHATAN ?></label><p></p>
                            <label>Pendengaran Pendaftar :<?php echo $SW_PENDENGARAN ?></label><p></p>
                            <label>Penampilan Pendaftar :<?php echo $SW_PENAMPILAN ?></label><p></p>
                            <label>Ciri Fisik Pendaftar :<?php echo $SW_CIRIFISIK ?></label><p></p>
                            <label>Bakat Khusus Pendaftar :<?php echo $SW_BAKATKHUSUS ?></label><p></p>
                            <label>Prestasi Pendaftar :<?php echo $SW_PRESTASI ?></label><p></p>
                            <label>Alamat Pendaftar :<?php echo $SW_ALAMAT ?></label><p></p>
                            <label>RT Pendaftar :<?php echo $SW_ALAMATRT ?></label><p></p>
                            <label>RW Pendaftar :<?php echo $SW_ALAMATRW ?></label><p></p>
                            <label>Dusun Pendaftar :<?php echo $SW_ALAMATDUSUN ?></label><p></p>
                            <label>Kelurahan Pendaftar :<?php echo $SW_ALAMATKEL ?></label><p></p>
                            <label>Kecamatan Pendaftar :<?php echo $SW_ALAMATKEC ?></label><p></p>
                            <label>Kode Pos Pendaftar :<?php echo $SW_KODEPOS ?></label><p></p>
                            <label>Telepon Pendaftar :<?php echo $SW_TELP ?></label><p></p>
                            <label>HP Pendaftar :<?php echo $SW_HP ?></label><p></p>
                            <label>Email Pendaftar :<?php echo $SW_EMAIL ?></label><p></p>
                            <label>SKHUN Pendaftar :<?php echo $SW_SKHUN ?></label><p></p>
                            <label>Penerima KPS Pendaftar :<?php echo $SW_PENERIMAKPS ?></label><p></p>
                            <label>No KPS Pendaftar :<?php echo $SW_NOKPS ?></label><p></p>
                            <label>Terakhir Diperbarui Pendaftar :<?php echo $SW_LASTUPDATE ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <a align="text-right" href="<?php  echo site_url('Master/Pendaftar');?>" class="btn btn-success" style="color: white;"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span> Kembali</a></span>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>
