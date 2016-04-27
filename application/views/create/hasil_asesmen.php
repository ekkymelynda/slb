<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Hasil Asesmen</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Ha/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Hasil Asesmen</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="HA_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Asesmen</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="ASM_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Ringkasan Hasil Asesmen</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="HA_RINGKASAN"></textarea>
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