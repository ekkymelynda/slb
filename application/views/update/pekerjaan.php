<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Pekerjaan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Pekerjaan/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Pekerjaan</label>
                            <input type="number" class="form-control" placeholder="" name="PK_ID" value="<?php echo $PK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="" name="PK_NAMA" value="<?php echo $PK_NAMA ?>">
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