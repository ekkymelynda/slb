<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Detil Jurnal Materi</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Detil Jurnal Materi :<?php echo $DJM_ID ?></label><p></p>
                            <label>Id Jurnal Materi :<?php echo $JM_ID ?></label><p></p>
                            <label>Id Rombongan Belajar :<?php echo $RM_ID ?></label><p></p>
                            <label>Tanggal Detil Jurnal Materi :<?php echo $DJM_TANGGAL ?></label><p></p>
                            <label>Jam ke- Detil Jurnal Materi :<?php echo $DJM_JAMKE ?></label><p></p>
                            <label>Materi Pembelajaran Detil Jurnal Materi :<?php echo $DJM_MATERIPEMBELAJARAN ?></label><p></p>
                            <label>Jumlah Siswa Hadir :<?php echo $DJM_JMLSWHADIR ?></label><p></p>
                            <label>Jumlah Siswa Tidak Hadir :<?php echo $DJM_JMLSWTAKHADIR ?></label><p></p>
                            <label>Nama Keterangan Tidak Hadir :<?php echo $DJM_NAMAKETTAKHADIR ?></label><p></p>
                            <label>Catatan Detil Jurnal Materi :<?php echo $DJM_CATATAN ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Djm/delete/' . $DJM_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Djm'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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