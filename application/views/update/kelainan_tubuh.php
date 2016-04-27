<!-- Content -->
<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Kelainan Tubuh</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Kt/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Kelainan Tubuh</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="KT_ID" value="<?php echo $kt['KT_ID'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Siswa</label>
                            <select class="form-control" id="sel1" name="SW_ID">
                            <?php foreach ($siswa as $value) {
                                if($value['SW_ID']===$kt['SW_ID']){
                                    echo '<option value='.$value['SW_ID']." SELECTED".'>'.$value['SW_NAMA'].'</option>';

                                }
                                elseif($value['SW_ID']!==$kt['SW_ID']){
                                    echo '<option value='.$value['SW_ID'].'>'.$value['SW_NAMA'].'</option>';    
                                }
                                

                            }
                            ?>
                            </select>
                            <!-- <input type="number" class="form-control" placeholder="Contoh: 1" name="SW_ID" value="<?php echo $kt['SW_ID'] ?>"> -->
                        </div>
                        <div class="form-group">
                            <label>Masukkan Penyakit Kecelakaan</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="KT_PENYAKIT_KECELAKAAN"><?php echo $kt['KT_PENYAKIT_KECELAKAAN'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Usia Kelainan Tubuh</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor" name="KT_USIA" value="<?php echo $kt['KT_USIA']?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Lama Kelainan Tubuh</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="KT_LAMA" value="<?php echo $kt['KT_LAMA'] ?>">
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