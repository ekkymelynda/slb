<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Rombongan Belajar (Kelas)</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Rombongan Belajar :<?php echo $RM_ID ?></label><p></p>
                            <label>Id Guru :<?php echo $GR_ID ?></label><p></p>
                            <label>Tahun Ajaran Rombongan Belajar :<?php echo $RM_THNAJAR ?></label><p></p>
                            <label>Rombongan Belajar B/C :<?php echo $RM_BC ?></label><p></p>
                            <label>Kelas Rombongan Belajar :<?php echo $RM_KELAS ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Rombel/delete/' . $RM_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Rombel'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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