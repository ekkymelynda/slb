<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Jurnal Pribadi Siswa</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Jps/create_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Jurnal Pribadi Siswa</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JPSW_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Rombongan Belajar</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="RM_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Siswa</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="SW_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tanggal Jurnal Pribadi Siswa</label>
                            <input type="date" class="form-control" placeholder="Contoh: 1" name="JPSW_TANGGAL" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Perkembangan Jurnal Pribadi Siswa</label>
                            <textarea type="number" class="form-control" placeholder="Contoh: 1" name="JPSW_PERKEMBANGAN"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Jurnal Pribadi Siswa</label>
                            <textarea type="number" class="form-control" placeholder="Contoh: 1" name="JPSW_KETERANGAN"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Buat" class="btn btn-danger pull-right">
		            </div>
		        </form>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>