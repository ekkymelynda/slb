<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Jenjang Pendidikan</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Jp/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Jenjang Pendidikan</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JP_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jenjang Pendidikan</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="JP_JENJANG" >
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