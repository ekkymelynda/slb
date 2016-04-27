<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Detil Jurnal Kelas</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Djk/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Detil Jurnal Kelas</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="DJK_ID" value="<?php echo $DJK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Mata Pelajaran</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="MAPEL_ID" value="<?php echo $MAPEL_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Jurnal Kelas</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JK_ID" value="<?php echo $JK_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tanggal Detil Jurnal Kelas</label>
                            <input type="date" class="form-control" placeholder="" name="DJK_TANGGAL" value="<?php echo $DJK_TANGGAL ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Materi Detil Jurnal Kelas</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: " name="DJK_MATERI"><?php echo $DJK_MATERI ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Detil Jurnal Kelas</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: " name="DJK_KETERANGAN"><?php echo $DJK_KETERANGAN ?></textarea>
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