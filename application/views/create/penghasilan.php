<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Penghasilan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Penghasilan/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Penghasilan</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PH_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Besaran Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="PH_BESARAN" >
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