<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data Personal Terlibat</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id Personal Terlibat :<?php echo $PT_ID ?></label><p></p>
                            <label>Id PPI :<?php echo $PPI_ID ?></label><p></p>
                            <label>Jenis Pelayanan Personal Terlibat :<?php echo $PT_JENISPELAYANAN ?></label><p></p>
                            <label>Frekuensi Personal Terlibat :<?php echo $PT_FREKUENSI ?></label><p></p>
                            <label>Lokasi Personal Terlibat :<?php echo $PT_LOKASI ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Pt/delete/' . $PT_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/Pt'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
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