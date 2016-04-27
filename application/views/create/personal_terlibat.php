<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Personal Terlibat</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Pt/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Personal Terlibat</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PT_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jenis Pelayanan Personal Terlibat</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="PT_JENISPELAYANAN"></textarea>
                        </div>
                         <div class="form-group">
                            <label>Masukkan Frekuensi Personal Terlibat</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="PT_FREKUENSI"></textarea>
                        </div>
                         <div class="form-group">
                            <label>Masukkan Lokasi Personal Terlibat</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="PT_LOKASI"></textarea>
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