<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Jurnal Kelas</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Jk/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Jurnal Kelas</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JK_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Rombongan Belajar</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="RM_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Guru</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="GR_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Bulan Jurnal Kelas</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JK_BULAN" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tahun Jurnal Kelas</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JK_TAHUN" >
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