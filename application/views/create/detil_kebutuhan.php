<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Detil Kebutuhan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Dk/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Detil Kebutuhan</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="DETKEB_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Alat Detil Kebutuhan</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: " name="DETKEB_ALAT"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Penyesuaian Detil Kebutuhan</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: " name="DETKEB_PENYESUAIAN"></textarea>
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