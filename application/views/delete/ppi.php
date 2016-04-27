<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Hapus Data PPI</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Data yang akan dihapus :
                        </div>
                        <div class="panel-body">
                            <label>Id PPI :<?php echo $PPI_ID ?></label><p></p>
                            <label>Id Siswa :<?php echo $SW_ID ?></label><p></p>
                            <label>Semester PPI :<?php echo $PPI_SEMESTER ?></label><p></p>
                            <label>Tahun Ajaran PPI :<?php echo $PPI_THNAJAR ?></label><p></p>
                            <label>Kekhususan Utama PPI :<?php echo $PPI_KEKHUSUSANUTAMA ?></label><p></p>
                            <label>Kekhususan Sekunder PPI :<?php echo $PPI_KEKHUSUSANSEKUNDER ?></label><p></p>
                            <label>Standar Kurikulum PPI :<?php echo $PPI_STDKURIKULUM ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                            <a align="text-right" href="<?php echo site_url('Master/Ppi/delete/' . $PPI_ID); ?>" class="btn btn-danger" style="color: white;">Ya</a></span>
                            <a align="text-right" href="<?php echo site_url('Master/ppi'); ?>" class="btn btn-success" style="color: white;">Tidak</a></span>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>