<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Buat Data Alat Transportasi</h2>
            </div>
            <!-- Row -->
            <div class="row">
                <form role="form" method="post" action= "<?php echo site_url('Master/At/create_data');?>" >
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Masukkan Id Alat Transportasi</label>
                            <input name="AT_ID" type="number" class="form-control" placeholder="Contoh: 1" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Alat Transportasi</label>
                            <input name="AT_NAMAALATTRANS" type="text" class="form-control" placeholder="Contoh: Sepeda Motor" >
                        </div>
                        <input type="submit" name="submit" value="Buat" class="btn btn-danger pull-right">
                    </div>
                </form>
            </div><!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>