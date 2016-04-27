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
                            <label>Masukkan Jumlah Bersaudara Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tingkat Sekolah Asal Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Sekolah Asal Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tahun Masuk Sekolah Asal Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tahun Lulus Sekolah Asal Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Alamat Sekolah Asal Siswa Pendaftar</label>
                             <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Aktivitas Yang Disukai Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Lama Kandungan (dalam Bulan) Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Lama Kandungan (dalam Hari) Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keadaan Kandungan Siswa Pendaftar</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keadaan Lahir Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Proses Lahir Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Yang Membantu Kelahiran Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Berat Lahir Siswa Pendaftar</label>
                            <input type="number" step="0.1" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>                        
                        <div class="form-group">
                            <label>Masukkan Panjang Lahir Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Usia Ibu Saat Lahir Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Berat Anak Siswa Pendaftar</label>
                            <input type="number" step="0.1" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Panjang Anak Siswa Pendaftar</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Golongan Darah Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Lama Minum ASI Siswa Pendaftar</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Dua Bulan Awal Siswa Pendaftar</label>
                        	<textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-info pull-right">
		            </div>
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>