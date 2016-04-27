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
                <h2>Ubah Data Pendaftar</h2>
           	</div>
<?php echo form_open('Pendaftar/Con_pendaftar2/updatependaftar/'.$hasil->SW_ID); ?>

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
                        <div class="form-group">
                            <label>Usia per 1 Juli</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_USIAPERMASUK; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_JK; ?>">
                        </div>
                         <div class="form-group">
                            <label>Pilih Agama</label>
                            <select class="form-control" name="siswa_agama">
                                <?php foreach($agama as $ag){
                                        echo '<option value='.$ag['AG_ID'];
                                        if($hasil->AG_ID==$ag['AG_ID']) echo 'selected';
                                        echo ' >'.$ag['AG_NAMA'].'</option>';

                                }?>
                            </select>
                            <!-- <input type="number" class="form-control" placeholder="Contoh: 1"> -->
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <select class="form-control" name="siswa_agama">
                                <?php foreach($kwn as $ag){
                                        echo '<option value='.$ag['KWN_ID'].' >'.$ag['KWN_JENIS'].'</option>';

                                }?>
                            </select>
                            <!-- <input type="number" class="form-control" placeholder="Contoh: 1"> -->
                        </div>
                        <div class="form-group">
                            <label>Tinggal Bersama</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->JT_ID; ?>">
                        </div>
                        <div class="form-group">
                            <label>Bahasa sehari - hari dirumah </label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_BAHASARUMAH; ?>">
                        </div>
                        <div class="form-group">
                            <label>Anak ke </label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_ANAKKE; ?>">
                        </div>
                        <div class="form-group">
                            <label>dari </label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_JMLBERSDR; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Sekolah </label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_TINGKATASALSEKOLAH; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Masuk tahun</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_ASALSEKTHNMASUK; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Lulus tahun</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_ASALSEKTHNLULUS; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Alamat Sekolah</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_ALAMATASALSEK; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Aktifitas yang paling disukai</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_AKTIVSUKA; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Lama dalam kandungan</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_LAMAKANDUNGANBLN; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Hari</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_LAMAKANDUNGANHARI; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>2. Keadaan selama dalam kandungan</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_KEADAANKANDUNGAN; ?>">
                        </div>
                        <div class="form-group">
                            <label>3. Keadaan lahir</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_KEADAANLAHIR; ?>">
                        </div>
                        <div class="form-group">
                            <label>4. Proses kelahiran</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_PROSESLAHIR; ?>">
                        </div>
                        <div class="form-group">
                            <label>5. Yang membantu kelahiran</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_YGMEMBANTULAHIR; ?>">
                        </div>
                        <div class="form-group">
                            <label>6. Berat ketika lahir (Kg)</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_BERATLAHIR; ?>">
                        </div>
                        <div class="form-group">
                            <label>Panjang ketika lahir (cm)</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_PANJANGLAHIR; ?>">
                        </div>
                        <div class="form-group">
                            <label>7. Usia ibu ketika anak lahir (tahun)</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_USIAIBUSAATLAHIR; ?>">
                        </div>
                        C. KESEHATAN ANAK
                        <div class="form-group">
                            <label>1. Berat badan (Kg)</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_BERATANAK; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Tinggi badan (cm)</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_PANJANGANAK; ?>">
                        </div>
                        <div class="form-group">
                            <label>2. Golongan darah</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_GOLDAR; ?>">
                        </div>
                        <div class="form-group">
                            <label>3. Minum ASI selama</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_LAMAMINUMASI; ?>">
                        </div>
                        <div class="form-group">
                            <label>4. Perkembangan dalam 2 bulan pertama</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_DUABLNAWAL; ?>">
                        </div>
                        <div class="form-group">
                            <label>5. Makanan tambahan yang diberikan setelah 4 bulan</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_MAKANANTAMBAHAN; ?>">
                        </div>
                        <div class="form-group">
                            <label>6. Alergi makanan dan obat</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_ALERGI; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>7. Penglihatan</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_PENGLIHATAN; ?>">
                        </div>
                        <div class="form-group">
                            <label>8. Pendengaran</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_PENDENGARAN; ?>">
                        </div>
                        <div class="form-group">
                            <label>9. Penampilan</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->SW_PENAMPILAN; ?>">
                        </div>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-info pull-right">
		            </div>
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>