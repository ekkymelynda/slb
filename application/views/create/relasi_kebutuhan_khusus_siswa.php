<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Relasi Kebutuhan Khusus Siswa</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Relkebs/create_data'); ?>">
		            <div class="col-lg-6">
                        ID Siswa
		            	<div class="form-group">
                            <select class="wawan" name="SW_ID">
                            <!-- <label>Masukkan Id Siswa</label> -->
                            <?php foreach ($siswa as $d) {
	echo '<option value=' . $d['SW_ID'];
	// echo 'selected';
	echo '>' . $d['SW_ID'] . '</option>';

}
?>
                            <?php ?>
                            <!-- <input name="SW_ID" type="number" class="form-control" placeholder=""> -->
                        </select>
                        </div>
                        ID Kebutuhan Khusus
                        <div class="form-group">
                            <select class="wawan" name="KK_ID">
                                <?php foreach ($keb_khusus as $d) {
	echo '<option value=' . $d['KK_ID'];
	// echo 'selected';
	echo '>' . $d['KK_ID'] . '</option>';
}
?>
                            <!-- <label>Masukkan Id Kebutuhan Khusus</label> -->
                            <!-- <input name="KK_ID" type="number" class="form-control" placeholder=""> -->
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
     <script>
    $(document).ready(function(){
        $(".wawan").select2({
            placeholder: "Pilih data",

        });
    })
    </script>
</body>