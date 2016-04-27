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
                <h2>Buat Data Guru</h2>
           	</div>

           	<div class="row">
				<form role="form" method="post" action= "<?php echo base_url()."index.php/guru/create_data"; ?>">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Masukkan Id Guru</label>
                                        <input name="GR_ID" type="number" class="form-control" placeholder="Contoh: 1">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Id Jenjang Pendidikan</label>
                                        <input name="JP_ID" type="number" class="form-control" placeholder="Contoh: 1">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan NIP Guru</label>
                                        <input name="GR_NIP" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Nama Guru</label>
                                        <input name="GR_NAMA" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Gelar Guru</label>
                                        <input name="GR_GELAR" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Jenis Kelamin Guru</label>
                                        <input name="GR_JK" type="text" class="form-control" placeholder="Contoh: 1">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Jurusan Guru</label>
                                        <input name="GR_JURUSAN" type="text" class="form-control" placeholder="Contoh: 1">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Sertifikasi Guru</label>
                                        <input name="GR_SERTIFIKASI" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Kepegawaian Guru</label>
                                        <input name="GR_KEPEGAWAIAN" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Jabatan Guru</label>
                                        <input name="GR_JABATAN" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan TMT Kerja Guru</label>
                                        <input name="GR_TMTKERJA" type="date" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Tugas Tambahan Guru</label>
                                        <input name="GR_TGSTAMBAH" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Mengajar Guru</label>
                                        <input name="GR_MENGAJAR" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan Jam (PerMinggu) Guru</label>
                                        <input name="GR_JAMPERMGG" type="number" class="form-control" placeholder="Contoh: 1">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan No. Ijazah Guru</label>
                                        <input name="GR_NOIJAZAH" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <div class="form-group">
                                        <label>Masukkan No. Sertifikasi Guru</label>
                                        <input name="GR_NOSERTIFIKASI" type="text" class="form-control" placeholder="Contoh: ">
                                    </div>
                                    <input type="submit" name="submit" value="SIMPAN" class="btn btn-info pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/tabs-->
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>

