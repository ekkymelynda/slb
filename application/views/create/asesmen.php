<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Asesmen</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Da/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Data Asesmen</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="ASM_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Sumber Info</label>
                            <input type="text" class="form-control" placeholder="Contoh: " name="ASM_SUMBERINFO" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tanggal Data Asesmen</label>
                            <input type="date" class="form-control" placeholder="" name="ASM_TGL" >
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