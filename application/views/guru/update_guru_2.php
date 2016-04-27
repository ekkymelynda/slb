<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Guru | Sistem Akademik</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    
</head><!--/head-->

<body>

    <section id="feature" class="transparent-bg">
    	<div class="container">

           	<div class="center wow fadeInDown">
                <h2>Ubah Data Guru</h2>
           	</div>

           	<div class="row">
				<form role="form" method="post" action= "">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Tugas Tambahan Guru</label>
                            <input type="text" class="form-control" placeholder="Contoh: ">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Mengajar Guru</label>
                            <input type="text" class="form-control" placeholder="Contoh: ">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jam (PerMinggu) Guru</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan No. Ijazah Guru</label>
                            <input type="text" class="form-control" placeholder="Contoh: ">
                        </div>
                        <div class="form-group">
                            <label>Masukkan No. Sertifikasi Guru</label>
                            <input type="text" class="form-control" placeholder="Contoh: ">
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-info pull-right">
		            </div>
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>