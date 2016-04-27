<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Indikator Keberhasilan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Ik/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Indikator Keberhasilan</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="INDI_ID" value="<?php echo $INDI_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Pelayanan Layanan Kompensatoris</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PLK_ID" value="<?php echo $PLK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Indikator Keberhasilan</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="INDI_KET"><?php echo $INDI_KET ?></textarea>
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