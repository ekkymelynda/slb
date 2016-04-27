<!-- Content -->
<body>
<?php var_dump($join_jp) ?>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data Saudara Kandung</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Sk/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id Saudara Kandung</label>
                            <input name="SK_ID" type="number" class="form-control" placeholder="" value="<?php echo $sk['SK_ID'] ?>">

                        </div>
                        <div class="form-group">
                            <label>Ubah Jenjang Pendidikan Saudara Kandung</label>
                            <div class="form-group">
                              <select class="form-control" id="sel1" name="JP_ID">
                                <?php  
                                foreach ($jenjang_pendidikan as $value) {
                                    
                                    # code...
                                    if($join_jp[0]->JP_JENJANG===$value['JP_JENJANG']){
                                    echo '<option value='.$value['JP_ID']." SELECTED".'>'.$value['JP_JENJANG'].'</option>';
                                    }
                                    elseif ($join_jp[0]->JP_JENJANG!==$value['JP_JENJANG']) {
                                        # code...
                                    echo '<option value='.$value['JP_ID'].'>'.$value['JP_JENJANG'].'</option>';

                                    }
                                    // if()
                                // echo '<option value='.$value['JP_ID'].'>'.$value['JP_JENJANG'].'</option>';
                                }
                                 ?>
                                </select>
                                
                        <div class="form-group">
                            <label>Ubah Nama Saudara Kandung</label>
                            <input name="SK_NAMA" type="text" class="form-control" placeholder="" value="<?php echo $sk['SK_NAMA'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Jenis Kelamin Saudara Kandung</label>
                            <select class="form-control" id="sel1" name="SK_JK">
                                <option <?php if($sk['SK_JK']==='L') echo " SELECTED"?>>L</option>
                                <option <?php if($sk['SK_JK']==='P') echo " SELECTED"?>>P</option>
                            </select>
                            <!-- <input name="SK_JK" type="text" class="form-control" placeholder="" value="<?php echo $data['SK_JK'] ?>"> -->
                        </div>
                        <div class="form-group">
                            <label>Ubah Pendidikan Saudara Kandung</label>
                            <input name="SK_PENDIDIKAN" type="text" class="form-control" placeholder="" value="<?php echo $sk['SK_PENDIDIKAN'] ?>">
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