<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data PPI</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Ppi/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Siswa</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="SW_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Semester PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_SEMESTER" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tahun Ajaran PPI</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="PPI_THNAJAR" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Kekhususan Utama PPI</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="PPI_KEKHUSUSANUTAMA" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Kekhususan Sekunder PPI</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="PPI_KEKHUSUSANSEKUNDER" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Standar Kurikulum PPI</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="PPI_STDKURIKULUM" >
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