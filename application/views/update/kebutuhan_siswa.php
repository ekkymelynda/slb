<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Kebutuhan Siswa</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Ks/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Kebutuhan Siswa</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="BS_ID" value="<?php echo $BS_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" value="<?php echo $PPI_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Kebutuhan Siswa</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="BS_KETERANGAN"><?php echo $BS_KETERANGAN ?></textarea>
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