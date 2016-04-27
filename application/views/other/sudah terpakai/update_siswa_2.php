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
                <h2>Ubah Data Siswa</h2>
           	</div>

           	<div class="row">
				<form role="form" method="post" action= "">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Makanan Tambahan Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Alergi Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Penglihatan Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Pendengaran Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Penampilan Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Ciri Fisik Siswa Pendaftar</label>
                             <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Bakat Khusus Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Prestasi Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Alamat Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan RT Siswa Pendaftar</label>
                            <textarea type="number" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan RW Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Dusun Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Kelurahan Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Kecamatan  Siswa Pendaftar</label>
                            <input type="text" step="0.1" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>                        
                        <div class="form-group">
                            <label>Masukkan Kode Pos Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Telepon Siswa Pendaftar</label>
                            <input type="tel" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan HP Siswa Pendaftar</label>
                            <input type="tel" step="0.1" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Email Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan SKHUN Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Penerima KPS Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan No KPS Siswa Pendaftar</label>
                        	<input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Terakhir Diperbarui Siswa Pendaftar</label>
                        	<input type="date" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-info pull-right">
		            </div>
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>