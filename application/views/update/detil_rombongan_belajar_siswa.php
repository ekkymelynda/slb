<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Ubah Data Detil Rombongan Belajar (Kelas) Siswa</h2>
            </div>
            <!-- Row -->
            <div class="row">
                <form role="form" method="post" action= "<?php echo site_url('Master/Drs/update_data'); ?>">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Masukkan Id Rombongan Belajar</label>
                            <input name="RM_ID" type="number" class="form-control" placeholder="" value="<?php echo $RM_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Siswa</label>
                            <input name="SW_ID" type="number" class="form-control" placeholder="" value="<?php echo $SW_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Histori Rombongan Belajar Siswa</label>
                            <input type="number" class="form-control" placeholder="">
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