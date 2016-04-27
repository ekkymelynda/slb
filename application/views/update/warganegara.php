<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Warganegara</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Warganegara/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Warganegara</label>
                            <input type="number" class="form-control" placeholder="" name="KWN_ID" value="<?php echo $KWN_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Jenis Warganegara</label>
                            <input type="text" class="form-control" placeholder="" name="KWN_JENIS" value="<?php echo $KWN_JENIS ?>">
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