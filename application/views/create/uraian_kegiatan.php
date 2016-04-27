<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Uraian Kegiatan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Uk/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Uraian Kegiatan</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="UK_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Pelayanan Layanan Kompensatoris</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PLK_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tujuan Pembangunan</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: 1" name="UK_TUJUANPEMB"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Strategi Pembangunan</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: 1" name="UK_STRATEGIPEMB"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Teknik</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: 1" name="UK_TEKNIK"></textarea>
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