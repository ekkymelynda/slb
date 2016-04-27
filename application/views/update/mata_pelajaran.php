<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Mata Pelajaran</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Mapel/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Mata Pelajaran</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="MAPEL_ID" value="<?php echo $MAPEL_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="MAPEL_NAMA" value="<?php echo $MAPEL_NAMA ?>">
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-danger pull-right">
		            </div>Ubah
		        </form>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>