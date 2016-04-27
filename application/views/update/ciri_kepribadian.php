<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Ciri Kepribadian</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Ck/update_data'); ?>">
		          <!-- <form role="form" method="post" action= "update_data"> -->
                    <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Ciri Kepribadian</label>
                            <input name="CK_ID" type="number" class="form-control" placeholder="" value="<?php echo $CK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Ciri Kepribadian</label>
                            <input type="text" class="form-control" placeholder="Contoh: " name="CK_KETERANGAN" value="<?php echo $CK_KETERANGAN ?>">
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