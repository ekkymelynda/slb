<!-- Content -->
<body>
<?php// var_dump($jenjang_pendidikan) ?>
<?php// echo $jenjang_pendidikan['JP_ID']; ?>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Saudara Kandung</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Sk/create_data');?>">
		            <div class="col-lg-6">
		            	<!-- <div class="form-group">
                            <label>Masukkan Id Saudara Kandung</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="SK_ID" >
                        </div> -->
                        <div class="form-group">
                            <label>Jenjang Pendidikan Saudara Kandung</label>
                            <select class="form-control" id="sel1" name="JP_ID">
                            <?php foreach ($jenjang_pendidikan as $value) {
                                echo '<option value='.$value['JP_ID'].'>'.$value['JP_JENJANG'].'</option>';
                            }
                            ?>
                            </select>
                            <!-- <input type="number" class="form-control" placeholder="Contoh: 1" name="JP_ID" > -->
                        </div>
                        <div class="form-group">
                            <label>Siswa</label>
                            <select class="form-control" id="sel1" name="SW_ID">
                            <?php foreach ($siswa as $value) {
                                echo '<option value='.$value['SW_ID'].'>'.$value['SW_NAMA'].'</option>';
                            }
                            ?>
                            </select>
                            <!-- <input type="number" class="form-control" placeholder="Contoh: 1" name="SW_ID" > -->
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Saudara Kandung</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="SK_NAMA" >
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin Saudara Kandung</label>
                            <select class="form-control" id="sel1" name="SK_JK">
                                <option value='L'>L</option>
                                <option value='P'>P</option>
                            </select>
                            <!-- <input type="text" class="form-control" placeholder="Contoh: 1" name="SK_JK" > -->
                        </div>
                        <div class="form-group">
                            <label>Masukkan Pendidikan Saudara Kandung</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="SK_PENDIDIKAN"  >
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