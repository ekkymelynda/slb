<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Uraian Kegiatan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Uraian Kegiatan :<?php echo $UK_ID ?></label><p></p>
                            <label>Id Pelayanan Layanan Kompensatoris : <?php echo $PLK_ID ?></label><p></p>
                            <label>Tujuan Pembangunan : <?php echo $UK_TUJUANPEMB ?></label><p></p>
                            <label>Strategi Pembangunan : <?php echo $UK_STRATEGIPEMB ?></label><p></p>
                            <label>Teknik : <?php echo $UK_TEKNIK ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Uk/delete/' . $UK_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Uk'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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