<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Personal Terlibat</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Pt/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Personal Terlibat</label>
                            <input name="PT_ID" type="number" class="form-control" placeholder="" value="<?php echo $PT_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Id PPI</label>
                            <input name="PPI_ID" type="number" class="form-control" placeholder="" value="<?php echo $PPI_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Jenis Pelayanan Personal Terlibat</label>
                            <textarea name="PT_JENISPELAYANAN" type="text" class="form-control" placeholder="" value="<?php echo $PT_JENISPELAYANAN ?>"><?php echo $PT_JENISPELAYANAN ?></textarea>
                        </div>
                         <div class="form-group">
                            <label>Ubah Frekuensi Personal Terlibat</label>
                            <textarea name="PT_FREKUENSI" type="text" class="form-control" placeholder="" ><?php echo $PT_FREKUENSI ?></textarea>
                        </div>
                         <div class="form-group">
                            <label>Ubah Lokasi Personal Terlibat</label>
                            <textarea name="PT_LOKASI" type="text" class="form-control" placeholder=""><?php echo $PT_LOKASI ?></textarea>
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