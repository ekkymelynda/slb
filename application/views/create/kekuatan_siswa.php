<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Kekuatan Siswa</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Kes/create_data');?>">
		            <div class="col-lg-6">
		            	<!-- <div class="form-group">
                            <label>Masukkan Id Kekuatan Siswa</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="KS_ID" >
                        </div> -->
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <select class="form-control" id="sel1" name="PPI_ID">
                            <?php foreach ($ppi as $value) {
                                echo '<option value='.$value['PPI_ID'].'>'.$value['PPI_ID'].'</option>';
                            } ?>
                            </select>
                            <!-- <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor" name="PPI_ID" > -->
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Kekuatan Siswa</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="KS_KETERANGAN"></textarea>
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