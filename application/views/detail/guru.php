<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Detail Guru</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Detail data :
                        </div>
                        <div class="panel-body">
                            <label>Jenis Kelamin Guru :<?php echo $GR_JK ?></label><p></p>
                            <label>Jurusan Guru :<?php echo $GR_JURUSAN ?></label><p></p>
                            <label>Sertifikasi Guru :<?php echo $GR_SERTIFIKASI ?></label><p></p>
                            <label>Kepegawaian Guru :<?php echo $GR_KEPEGAWAIAN ?></label><p></p>
                            <label>Jabatan Guru :<?php echo $GR_JABATAN ?></label><p></p>
                            <label>TMT Kerja Guru :<?php echo $GR_TMTKERJA ?></label><p></p>
                            <label>Tugas Tambahan Guru :<?php echo $GR_TGSTAMBAH ?></label><p></p>
                            <label>Mengajar Guru :<?php echo $GR_MENGAJAR ?></label><p></p>
                            <label>Jam (PerMinggu) Guru :<?php echo $GR_JAMPERMGG ?></label><p></p>
                            <label>No. Ijazah Guru :<?php echo $GR_NOIJAZAH ?></label><p></p>
                            <label>No. Sertifikasi Guru :<?php echo $GR_NOSERTIFIKASI ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <a align="text-right" href="<?php echo site_url('Master/guru'); ?>" class="btn btn-success" style="color: white;"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span> Kembali</a></span>
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