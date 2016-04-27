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
    <title>Siswa | Sistem Akademik</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    
</head><!--/head-->

<body>

    <section id="feature" class="transparent-bg">
    	<div class="container">

           	<div class="center wow fadeInDown">
                <h2>Detail Data Pendaftar</h2>
           	</div>
<?php echo form_open('Con_pendaftar/updatependaftar/'.$hasil->SW_ID); ?>

           	<div class="row">
				<form role="form" method="post" action= "">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Nama Pendaftar : </label>
                             <!--<td> <?php echo form_input('pendaftar_nama', $hasil->PENDAFTAR_NAMA); ?> </td>-->
                            <input type="text" class="form-control" value="<?php echo $hasil->PENDAFTAR_NAMA; ?>">
                        </div>
                        <div class="form-group">
                            <label>Status pendaftar terhadap anak </label>
                            <input type="text" class="form-control" value="<?php echo $hasil->PENDAFTAR_STATUS; ?>">
                        </div>                       
                        <div class="form-group">
                            <label>Alamat rumah</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->PENDAFTAR_ALAMAT; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telepon / HP</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->PENDAFTAR_TELP; ?>">
                        </div>
                        <div class="form-group">
                            <label>1. Nama lengkap</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_NAMA; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama panggilan</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_NAMAPANGGIL; ?>">
                        </div>
                        <div class="form-group">
                            <label>2. Tempat lahir </label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_TEMPATLAHIR; ?>">
                        </div>
                        <div class="form-group">
                            <label>3. Tanggal lahir </label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_TGLLAHIR; ?>">
                        </div>
                        <!--input type="submit" name="submit" value="Ubah" class="btn btn-info pull-right"-->
		            </div>
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>