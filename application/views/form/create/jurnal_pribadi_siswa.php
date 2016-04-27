<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Isi Buku Pribadi Siswa</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Isikan Tanggal</label>
                            <input type="date" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Isikan Nama Siswa</label>
                            <select class="form-control" id="sel1" name="SW_ID">
                                <?php foreach ($siswa as $value) {
                                    // if($value['SW_ID']!==$det_rombel['SW_ID']){
                                    //     echo '<option value='.$value['SW_ID'].'>'.$value['SW_NAMA'].'</option>';
                                    // }
                                    echo '<option value='.$value['SW_ID'].'>'.$value['SW_NAMA'].'</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Isikan B/C</label>
                            <select class="form-control" id="sel1" name="SW_ID">
                                <?php foreach ($rombel as $value) {
                                    echo '<option value='.$value['RM_ID'].'>'.$value['RM_KELAS'].'</option>';
                                } ?>
                            </select>
                            <!-- <input type="text" class="form-control" placeholder=""> -->
                        </div>
                        <div class="form-group">
                            <label>Isikan Perkembangan</label>
                            <textarea type="text" class="form-control" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Isikan Keterangan</label>
                            <textarea type="text" class="form-control" placeholder=""></textarea>
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