<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Rombongan Belajar (Kelas)</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Rombel/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Rombongan Belajar</label>
                            <input name="RM_ID" type="number" class="form-control" placeholder="" value="<?php echo $RM_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Id Guru</label>
                            <input name="GR_ID" type="number" class="form-control" placeholder="" value="<?php echo $GR_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Tahun Ajaran Rombongan Belajar</label>
                            <input name="RM_THNAJAR" type="text" class="form-control" placeholder="" value="<?php echo $RM_THNAJAR ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Rombongan Belajar B/C</label>
                            <input name="RM_BC" type="text" class="form-control" placeholder="" value="<?php echo $RM_BC ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Kelas Rombongan Belajar</label>
                            <input name="RM_KELAS" type="number" class="form-control" placeholder="" value="<?php echo $RM_KELAS ?>">
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