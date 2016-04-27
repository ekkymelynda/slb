<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Ubah Data PPI</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php echo site_url('Master/Ppi/update_data'); ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Ubah Id PPI</label>
                            <input name="PPI_ID" type="number" class="form-control" placeholder="" value="<?php echo $PPI_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Id Siswa</label>
                            <input name="SW_ID" type="number" class="form-control" placeholder="" value="<?php echo $SW_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Semester PPI</label>
                            <input name="PPI_SEMESTER" type="number" class="form-control" placeholder="" value="<?php echo $PPI_SEMESTER ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Tahun Ajaran PPI</label>
                            <input name="PPI_THNAJAR" type="text" class="form-control" placeholder="" value="<?php echo $PPI_THNAJAR ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Kekhususan Utama PPI</label>
                            <input name="PPI_KEKHUSUSANUTAMA" type="text" class="form-control" placeholder="" value="<?php echo $PPI_KEKHUSUSANUTAMA ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Kekhususan Sekunder PPI</label>
                            <input name="PPI_KEKHUSUSANSEKUNDER" type="text" class="form-control" placeholder="" value="<?php echo $PPI_KEKHUSUSANSEKUNDER ?>">
                        </div>
                        <div class="form-group">
                            <label>Ubah Standar Kurikulum PPI</label>
                            <input name="PPI_STDKURIKULUM" type="text" class="form-control" placeholder="" value="<?php echo $PPI_STDKURIKULUM ?>">
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