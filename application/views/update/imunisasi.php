<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Imunisasi</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Imunisasi/update_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Imunisasi</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="IM_ID" value="<?php echo $im['IM_ID'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Siswa</label>
                            <select class="form-control" id="sel1" name="SW_ID">
                            <?php foreach ($siswa as $value) {
                                echo '<option value='.$value['SW_ID'].'>'.$value['SW_NAMA'].'</option>';
                            }
                            ?>
                            </select>
                            <!-- <input type="number" class="form-control" placeholder="Contoh: 1" name="SW_ID" value="<?php echo $SW_ID ?>"> -->
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jenis Imunisasi</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="IM_JENIS" value="<?php echo $im['IM_JENIS'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Usia Imunisasi</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="IM_USIA" value="<?php echo $im['IM_USIA'] ?>">
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-danger pull-right">
		            </div>
		        </form>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>