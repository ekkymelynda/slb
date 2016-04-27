<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Program Layanan Kompensatoris</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Plk/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Program Layanan Kompensatoris</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PLK_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" >
                        </div>
                        <div class="form-group">
                            <label>Nama Ketrampilan Program Layanan Kompensatoris</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="PLK_NAMAKETERAMPILAN"></textarea>
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