<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Jurnal Materi</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Jm/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Jurnal Materi</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JM_ID" value="<?php echo $JM_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Mata Pelajaran</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="MAPEL_ID" value="<?php echo $MAPEL_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Guru</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="GR_ID" value="<?php echo $GR_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tahun Ajaran Jurnal Materi</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="JM_THNAJARAN" value="<?php echo $JM_THNAJARAN ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Semester Jurnal Materi</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="JM_SEMESTER" value="<?php echo $JM_SEMESTER ?>">
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