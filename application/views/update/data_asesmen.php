<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Ubah Data Hasil Asesmen</h2>
            </div>
            <!-- Row -->
            <div class="row">
                <form role="form" method="post" action= "<?php echo site_url('Master/Da/update_data'); ?>">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Masukkan Id Hasil Asesmen</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="ASM_ID" value="<?php echo $ASM_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PPI_ID" value="<?php echo $PPI_ID ?>">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Sumber Info</label>
                            <input type="text" class="form-control" placeholder="Sumber Info" name="ASM_SUMBERINFO" value="<?php echo $ASM_SUMBERINFO ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" placeholder="Tanggal" name="ASM_TGL" value="<?php echo $ASM_TGL ?>"></input>
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