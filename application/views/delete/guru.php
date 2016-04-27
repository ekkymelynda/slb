<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Guru</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Guru : <?php echo $GR_ID ?></label><p></p>
                            <label>Id Jenjang Pendidikan : <?php echo $JP_ID ?></label><p></p>
                            <label>NIP Guru : <?php echo $GR_NIP ?></label><p></p>
                            <label>Nama Guru : <?php echo $GR_NAMA ?></label><p></p>
                            <label>Gelar Guru : <?php echo $GR_GELAR ?></label><p></p>
                            <label>Jenis Kelamin Guru : <?php echo $GR_JK ?></label><p></p>
                            <label>Jurusan Guru : <?php echo $GR_JURUSAN ?></label><p></p>
                            <label>Sertifikasi Guru : <?php echo $GR_SERTIFIKASI ?></label><p></p>
                            <label>Kepegawaian Guru : <?php echo $GR_KEPEGAWAIAN ?></label><p></p>
                            <label>Jabatan Guru : <?php echo $GR_JABATAN ?></label><p></p>
                            <label>TMT Kerja Guru : <?php echo $GR_TMTKERJA ?></label><p></p>
                            <label>Tugas Tambahan Guru : <?php echo $GR_TGSTAMBAH ?></label><p></p>
                            <label>Mengajar Guru : <?php echo $GR_MENGAJAR ?></label><p></p>
                            <label>Jam (PerMinggu) Guru : <?php echo $GR_JAMPERMGG ?></label><p></p>
                            <label>No. Ijazah Guru : <?php echo $GR_NOIJAZAH ?></label><p></p>
                            <label>No. Sertifikasi Guru : <?php echo $GR_NOSERTIFIKASI ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Guru/delete/' . $GR_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Guru'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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