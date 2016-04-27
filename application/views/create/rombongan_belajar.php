<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Rombongan Belajar (Kelas)</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Rombel/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Rombongan Belajar</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="RM_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Guru</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="GR_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tahun Ajaran Rombongan Belajar</label>
                            <input type="text" class="form-control" placeholder="Contoh: " name="RM_THNAJAR" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Rombongan Belajar B/C</label>
                            <input type="text" class="form-control" placeholder="Contoh: " name="RM_BC" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Kelas Rombongan Belajar</label>
                            <input type="number" class="form-control" placeholder="Contoh: " name="RM_KELAS" >
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