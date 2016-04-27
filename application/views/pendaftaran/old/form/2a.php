<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FORMULIR PENDAFTARAN SLB B-C OPTIMAL</title>
<style type="text/css"> <?php include('assets/css/formaja.css') ?> </style>
<style type="text/javascript"> <?php include('assets/js/formaja.js') ?> </style>

     <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css"><?php include('assets/css/ayokerja.css') ?></style>

</head>


<body>

	<!--<img id="top" src="top.png" alt=""> -->
	<div id="form_container">
		<div id="container">
		<!--h1><a>FORMULIR PENDAFTARAN SLB B-C OPTIMAL</a></h1-->

		<?php // echo form_open('Con_pendaftar/tambahpendaftar'); ?>
		<form id="form_1049697" class="appnitro"  method="post" action="">
		<div class="form_description" align="center">
			<h3>FORMULIR PENDAFTARAN SLB B-C OPTIMAL</h3>
			<p>JL. WARDOYO NO 12 blk KOMP. TNI-AL KENJERAN SURABAYA</p>
		</div>

 <?php
                    var_dump($pendaftar).'</br>';
                    ?> 
</div>
		<div id="container">
			<ul >


<h3>A. IDENTITAS SISWA</h3>

				<li id="li_5" >
		<label class="description" for="siswa_nama">1. Nama lengkap </label>
		<div>
			<?php echo form_input('siswa_nama'); ?>
		</div>
		</li>		<li id="li_6" >
		<label class="description" for="siswa_namapanggilah">Nama panggilan </label>
		<div>
			<?php echo form_input('siswa_namapanggilan'); ?>
		</div>
		</li>		<li id="li_7" >
		<label class="description" for="siswa_tempat_lahir">2. Tempat lahir </label>
		<div>
			<?php echo form_input('siswa_tempat_lahir'); ?>
		</div>
		</li>		<li id="li_7" >
		<label class="description" for="siswa_tanggal_lahir">3. Tanggal lahir </label>
		<div>
			<?php echo form_input('siswa_tanggal_lahir'); ?>
		</div>
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Usia per 1 Juli </label>
		<div>
			<?php echo form_input('siswa_usia'); ?>		</div>
		</li>
		<li id="li_21" >

			<!--
			<input id="elemen_21_1" class="elemen radio" type="radio" name="ag_id" value="1" <?php echo set_radio('ad_id', '1', TRUE); ?> />
			<input id="elemen_21_1" class="elemen radio" type="radio" name="ag_id" value="1" <?php echo set_radio('ag_id', '2'); ?> />
			-->



		<label class="description" for="jenis_kelamin">3. Jenis kelamin </label>
		<span>
			<input id="element_21_1" name="jenis_kelamin" class="element radio" type="radio" value="Laki - Laki" />
			<label class="choice" for="element_21_1">Laki - laki</label>
			<input id="element_21_2" name="jenis_kelamin" class="element radio" type="radio" value="Perempuan" />
			<label class="choice" for="element_21_2">Perempuan</label>

		</span>
		</li>		<li id="li_9" >
		<label class="description" for="siswa_agama">4. Agama </label>
		<span>
			<input id="element_21_1" name="siswa_agama" class="element radio" type="radio" value="1" />
			<label class="choice" for="element_21_1">Islam</label>
			<input id="element_21_2" name="siswa_agama" class="element radio" type="radio" value="2" />
			<label class="choice" for="element_21_2">Katolik</label>
			<input id="element_21_2" name="siswa_agama" class="element radio" type="radio" value="3" />
			<label class="choice" for="element_21_3">Protestan</label>
			<input id="element_21_2" name="siswa_agama" class="element radio" type="radio" value="4" />
			<label class="choice" for="element_21_4">Hindu</label>
			<input id="element_21_2" name="siswa_agama" class="element radio" type="radio" value="5" />
			<label class="choice" for="element_21_5">Budha</label>
			<input id="element_21_2" name="siswa_agama" class="element radio" type="radio" value="6" />
			<label class="choice" for="	">Konghucu</label>
		</span>
		</li>		<li id="li_22" >
		<label class="description" for="element_22">5. Kewarganegaraan </label>
		<span>
			<input id="element_22_1" name="siswa_warganegara" class="element radio" type="radio" value="1" />
<label class="choice" for="element_22_1">WNI</label>
<input id="element_22_2" name="siswa_warganegara" class="element radio" type="radio" value="2" />
<label class="choice" for="element_22_2">WNI keturunan</label>
<input id="element_22_3" name="siswa_warganegara" class="element radio" type="radio" value="3" />
<label class="choice" for="element_22_3">WNA</label>

		</span>
		</li>		<li id="li_23" >
		<label class="description" for="element_23">6. Tinggal bersama </label>
		<span>
			<input id="element_23_1" name="siswa_tinggal_bersama" class="element radio" type="radio" value="1" />
<label class="choice" for="element_23_1">Orang tua</label>
<input id="element_23_2" name="siswa_tinggal_bersama" class="element radio" type="radio" value="2" />
<label class="choice" for="element_23_2">Wali</label>
<input id="element_23_3" name="siswa_tinggal_bersama" class="element radio" type="radio" value="3" />
<label class="choice" for="element_23_3">Lain - lain</label>

		</span>
		</li>
		<!--		<li id="li_10" >
		<label class="description" for="element_10"> </label>
		<div>
			<?php echo form_input('siswa_tinggal'); ?>
		</div>
		</li>
		-->
		<li id="li_24" >
		<label class="description" for="siswa_bahasa">7. Bahasa sehari-hari di rumah </label>
		<span>
			<input id="element_24_1" name="siswa_bahasa" class="element radio" type="radio" value="Indonesia" />
<label class="choice" for="element_24_1">Indonesia</label>
<input id="element_24_2" name="siswa_bahasa" class="element radio" type="radio" value="Jawa" />
<label class="choice" for="element_24_2">Jawa</label>
<input id="element_24_3" name="siswa_bahasa" class="element radio" type="radio" value="Lain - Lain" />
<label class="choice" for="element_24_3">Lain - Lain</label>

		</span>
		</li>
		<!--
		<li id="li_17" >
		<label class="description" for="element_17"> </label>
		<div>
			<input id="element_17" name="element_17" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>-->
		<li id="li_11" >
		<label class="description" for="element_11">8. Anak ke </label>
		<div>
			<?php echo form_input('siswa_anakke'); ?>
		</div>
		</li>		<li id="li_18" >
		<label class="description" for="element_18">dari </label>
		<div>
			<?php echo form_input('siswa_anakke_dari'); ?>
		</div><p class="guidelines" id="guide_18"><small>dari berapa saudara</small></p>
		</li>		<li id="li_25" >
		<label class="description" for="element_25">9. Asal sekolah </label>
<!--		<span>
			<input id="element_25_1" name="element_25" class="element radio" type="radio" value="TK" />
<label class="choice" for="element_25_1">TK</label>
<input id="element_25_2" name="element_25" class="element radio" type="radio" value="SD" />
<label class="choice" for="element_25_2">SD</label>
<input id="element_25_3" name="element_25" class="element radio" type="radio" value="3" />
<label class="choice" for="element_25_3">SMP</label>

		</span>
-->		</li>		<li id="li_12" >
		<label class="description" for="element_12">Nama sekolah </label>
		<div>
			<?php echo form_input('siswa_sekolahasal'); ?>
		</div>
		</li>		<li id="li_13" >
		<label class="description" for="element_13">Masuk tahun </label>
		<div>
			<?php echo form_input('siswa_masuktahun'); ?>
		</div>
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Lulus tahun </label>
		<div>
			<?php echo form_input('siswa_lulus'); ?>
		</div>
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Alamat sekolah </label>
		<div>
			<textarea id="element_19" name="element_19" class="element textarea medium" value="siswa_alamat_sekolah"></textarea>

		</div>
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Aktifitas yang paling disukai </label>
		<div>
			<textarea id="element_20" name="element_20" class="element textarea medium" value="siswa_aktifitas"></textarea>
		</div>
		</li>		

<br>
<input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg" role="button" ></input></span>
<input type="submit" name="back" value="back" class="btn btn-primary btn-lg" role="button" ></input></span>
		



			</ul>


		</div>
		</form>
		<!--div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div-->
	</div>
	<!--img id="bottom" src="bottom.png" alt=""-->
	</body>
</html>
