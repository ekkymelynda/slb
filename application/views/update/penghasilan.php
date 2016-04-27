<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Penghasilan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Penghasilan/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Penghasilan</label>
                            <input name="PH_ID" type="number" class="form-control" placeholder="" value="<?php echo $PH_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Besaran Pekerjaan</label>
                            <input name="PH_BESARAN" type="text" class="form-control" placeholder="" value="<?php echo $PH_BESARAN ?>">
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