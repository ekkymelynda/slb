<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Tim Pengembang</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Tp/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Tim Pengembang</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="TP_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Tim Pengembang</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="TP_NAMA" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Status Tim Pengembang</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: 1" name="TP_STATUS"></textarea>
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