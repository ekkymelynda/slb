<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Jurnal Materi</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Jm/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Jurnal Materi</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JM_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Mata Pelajaran</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="MAPEL_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Guru</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="GR_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tahun Ajaran Jurnal Materi</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="JM_THNAJARAN" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Semester Jurnal Materi</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="JM_SEMESTER" >
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