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
                            <label>Masukkan Id Siswa</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Kewarganegaraan</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Alat Transportasi</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id PPI</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Agama</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Jenis Tinggal</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Pendaftar Siswa</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Status Pendaftar Terhadap Siswa</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Alamat Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Telepon Pendaftar</label>
                            <input type="tel" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan NIS Siswa</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan NISN Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan NIK Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>                        
                        <div class="form-group">
                            <label>Masukkan Nama Panggilan Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tempat Lahir Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tanggal Lahir Siswa Pendaftar</label>
                            <input type="date" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Usia Permasuk Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jenis Kelamin Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Bahasa di Rumah Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Anak Ke- Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-info pull-right">
		            </div>
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>