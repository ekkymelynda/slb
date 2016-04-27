<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Kelainan Tubuh</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Kelainan Tubuh :<?php echo $KT_ID ?></label><p></p>
                            <label>Id Siswa :<?php echo $SW_ID ?></label><p></p>
                            <label>Penyakit Kecelakaan :<?php echo $KT_PENYAKIT_KECELAKAAN ?></label><p></p>
                            <label>Usia Kelainan Tubuh :<?php echo $KT_USIA ?></label><p></p>
                            <label>Lama Kelainan Tubuh :<?php echo $KT_LAMA ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Kt/delete/' . $KT_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Kt'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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