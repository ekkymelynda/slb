<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Uraian Kegiatan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Uk/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Uraian Kegiatan</label>
                            <input name="UK_ID" type="number" class="form-control" placeholder="" value="<?php echo $UK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Id Pelayanan Layanan Kompensatoris</label>
                            <input name="PLK_ID" type="number" class="form-control" placeholder="" value="<?php echo $PLK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Tujuan Pembangunan</label>
                            <textarea name="UK_TUJUANPEMB" type="text" class="form-control" placeholder="" ><?php echo $UK_TUJUANPEMB ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ubah Strategi Pembangunan</label>
                            <textarea name="UK_STRATEGIPEMB" type="text" class="form-control" placeholder="" ><?php echo $UK_STRATEGIPEMB ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ubah Teknik</label>
                            <textarea name="UK_TEKNIK" type="text" class="form-control" placeholder="" ><?php echo $UK_TEKNIK ?></textarea>
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-danger pull-right">
		            </div>
		        </form>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>