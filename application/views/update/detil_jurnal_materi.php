<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Detil Jurnal Materi</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Djm/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Detil Jurnal Materi</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="DJM_ID" value="<?php echo $DJM_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Jurnal Materi</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JM_ID" value="<?php echo $JM_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Rombongan Belajar</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="RM_ID" value="<?php echo $RM_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tanggal Detil Jurnal Materi</label>
                            <input type="date" class="form-control" placeholder="" name="DJM_TANGGAL" value="<?php echo $DJM_TANGGAL ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jam ke- Detil Jurnal Materi</label>
                            <input type="text" class="form-control" placeholder="" name="DJM_JAMKE" value="<?php echo $DJM_JAMKE ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Materi Pembelajaran Detil Jurnal Materi</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: " name="DJM_MATERIPEMBELAJARAN"><?php echo $DJM_MATERIPEMBELAJARAN ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jumlah Siswa Hadir</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="DJM_JMLSWHADIR" value="<?php echo $DJM_JMLSWHADIR ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jumlah Siswa Tidak Hadir</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="DJM_JMLSWTAKHADIR" value="<?php echo $DJM_JMLSWTAKHADIR ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Keterangan Tidak Hadir</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: " name="DJM_NAMAKETTAKHADIR"><?php echo $DJM_NAMAKETTAKHADIR ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Catatan Detil Jurnal Materi</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: " name="DJM_CATATAN"><?php echo $DJM_CATATAN ?></textarea>
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