<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Tim Pengembang</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Tp/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Tim Pengembang</label>
                            <input name="TP_ID" type="number" class="form-control" placeholder="" value="<?php echo $TP_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Id PPI</label>
                            <input name="PPI_ID" type="number" class="form-control" placeholder="" value="<?php echo $PPI_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Nama Tim Pengembang</label>
                            <input name="TP_NAMA" type="text" class="form-control" placeholder="" value="<?php echo $TP_NAMA ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Status Tim Pengembang</label>
                            <textarea name="TP_STATUS" type="text" class="form-control" placeholder="" value="<?php echo $TP_STATUS ?>"></textarea>
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