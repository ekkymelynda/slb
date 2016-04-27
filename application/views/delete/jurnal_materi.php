<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Jurnal Materi</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Jurnal Materi :<?php echo $JM_ID ?></label><p></p>
                            <label>Id Mata Pelajaran :<?php echo $MAPEL_ID ?></label><p></p>
                            <label>Id Guru :<?php echo $GR_ID ?></label><p></p>
                            <label>Tahun Ajaran Jurnal Materi :<?php echo $JM_THNAJARAN ?></label><p></p>
                            <label>Semester Jurnal Materi :<?php echo $JM_SEMESTER ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Jm/delete/' . $JM_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Jm'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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