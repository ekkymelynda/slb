<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Buat Data Based Line</h2>
            </div>
            <!-- Row -->
            <div class="row">
                <form role="form" method="post" action= "<?php  echo site_url('Master/Bl/create_data');?>">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Masukkan Id Based Line</label>
                            <input name="BASELINE_ID" type="number" class="form-control" placeholder="Contoh: 1" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Program Layanan Kompensatoris</label>
                            <input name="PLK_ID" type="number" class="form-control" placeholder="Contoh: 1"  >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Based Line</label>
                            <textarea name="BASELINE_KET" type="text" class="form-control" placeholder="Contoh: " ></textarea>
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