<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Relasi Kepribadian dan Siswa</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Relks/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Siswa</label>
                            <input type="number" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Ubah Id Ciri Kepribadian</label>
                            <input type="number" class="form-control" placeholder="">
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