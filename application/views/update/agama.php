<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Agama</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Agama/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Agama</label>
                            <input name="AG_ID" type="number" class="form-control" placeholder="" value="<?php echo $AG_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Nama Agama</label>
                            <input name="AG_NAMA" type="text" class="form-control" placeholder="" value="<?php echo $AG_NAMA ?>">
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