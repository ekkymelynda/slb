<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Saudara Kandung</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Saudara Kandung :<?php echo $SK_ID ?></label><p></p>
                            <label>Id Jenjang Pendidikan Saudara Kandung : <?php echo $JP_ID ?></label><p></p>
                            <label>Id Siswa : <?php echo $SW_ID ?></label><p></p>
                            <label>Nama Saudara Kandung : <?php echo $SK_NAMA ?></label><p></p>
                            <label>Jenis Kelamin Saudara Kandung : <?php echo $SK_JK ?></label><p></p>
                            <label>Pendidikan Saudara Kandung : <?php echo $SK_PENDIDIKAN ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Sk/delete/' . $SK_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Sk'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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