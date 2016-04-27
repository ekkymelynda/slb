<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Program Layanan Kompensatoris</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Plk/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Program Layanan Kompensatoris</label>
                            <input name="PLK_ID" type="number" class="form-control" placeholder="" value="<?php echo $PLK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Id PPI</label>
                            <input name="PPI_ID" type="number" class="form-control" placeholder="" value="<?php echo $PPI_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Nama Ketrampilan Program Layanan Kompensatoris</label>
                            <textarea name="PLK_NAMAKETERAMPILAN" type="text" class="form-control" placeholder=""><?php echo $PLK_NAMAKETERAMPILAN ?></textarea>
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