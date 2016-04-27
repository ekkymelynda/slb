<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FORMULIR PENDAFTARAN SLB B-C OPTIMAL</title>
<style type="text/css"> <?php include('assets/css/formaja.css') ?> </style>
<style type="text/javascript"> <?php include('assets/js/formaja.js') ?> </style>

     <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  //
  <script src="<?php echo base_url();?>/assets/select2/select2.js"></script>
  
  <script src="<?php echo base_url();?>/assets/select2/select2.min.js"></script>
  
  <script src="<?php echo base_url();?>/assets/select2/select2-bootstrap.css"></script>
    <script src="<?php echo base_url();?>/assets/select2/select2.css"></script>
	  <script src="<?php echo base_url();?>/assets/select2/select2.jquery.json"></script>
  //
  
  //
  <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="vendor/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/js/select2.full.js"></script>
<script type="text/javascript" src="vendor/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/js/prettify.min.js"></script>

<link href="vendor/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="dist/css/select2.min.css" type="text/css" rel="stylesheet">

<link href="vendor/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="vendor/css/prettify.css" type="text/css" rel="stylesheet">

<style type="text/css">
  body { font-size: 16px; }
  footer { background-color: #eee; margin-top: 1em; padding: 1em; text-align: center; }
  .navbar-inverse .navbar-brand { color: #fff; }
</style>

    </head>
  //
  <style type="text/css"><?php include('assets/css/ayokerja.css') ?></style>

</head>


<body>

	<!--<img id="top" src="top.png" alt=""> -->
	<div id="form_container">
		<div id="container">
		<!--h1><a>FORMULIR PENDAFTARAN SLB B-C OPTIMAL</a></h1-->

		<!--<?php echo form_open('Con_pendaftar/tambahpendaftar'); ?>-->
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



		<li class="section_break">
			<h3>B. Kelahiran anak</h3>
			<p></p>
		</li>		<li id="li_27" >
		<label class="description" for="element_27">1. Lama dalam kandungan
(bulan) </label>
		<div>
						<?php echo form_input('siswa_lama_kandungan_bulan'); ?>
		</div><p class="guidelines" id="guide_27"><small>(bulan)</small></p>
		</li>		<li id="li_28" >
		<label class="description" for="element_28">(hari) </label>
		<div>
			<?php echo form_input('siswa_lama_kandungan_hari'); ?>
		</div><p class="guidelines" id="guide_28"><small>(hari)</small></p>
		</li>		<li id="li_46" >




		<!-- BELUM BERES, bingung dmna tabelnya -->
		<label class="description" for="siswa_keadaan_kandungan">2. Keadaan selama dalam kandungan </label>
		<span>
			<input id="element_46_1" name="siswa_keadaan_kandungan" class="element radio" type="radio" value="1" />
<label class="choice" for="element_46_1">Normal</label>
<input id="element_46_2" name="siswa_keadaan_kandungan" class="element radio" type="radio" value="2" />
<label class="choice" for="element_46_2">Ada gangguan</label>
</span>
		</li>




				<li id="li_47" >
		<label class="description" for="siswa_keadaan_lahir">3. Keadaan lahir </label>
		<span>
			<input id="element_47_1" name="siswa_keadaan_lahir" class="element radio" type="radio" value="Normal" />
<label class="choice" for="element_47_1">Normal</label>
<input id="element_47_2" name="siswa_keadaan_lahir" class="element radio" type="radio" value="Sulit" />
<label class="choice" for="element_47_2">Sulit</label>
<input id="element_47_3" name="siswa_keadaan_lahir" class="element radio" type="radio" value="Prematur" />
<label class="choice" for="element_47_3">Prematur</label>

		</span>
		</li>		<li id="li_48" >
		<label class="description" for="siswa_proses_kelahiran">4. Proses kelahiran </label>
		<span>
			<input id="element_48_1" name="siswa_proses_kelahiran" class="element radio" type="radio" value="Normal" />
<label class="choice" for="element_48_1">Normal</label>
<input id="element_48_2" name="siswa_proses_kelahiran" class="element radio" type="radio" value="Sulit" />
<label class="choice" for="element_48_2">Sulit</label>
<input id="element_48_3" name="siswa_proses_kelahiran" class="element radio" type="radio" value="Operasi Caesar" />
<label class="choice" for="element_48_3">Operasi caesar</label>

		</span>
		</li>		<li id="li_49" >
		<label class="description" for="siswa_membantu_kelahiran">5. Yang membantu kelahiran </label>
		<span>
			<input id="element_49_1" name="siswa_membantu_kelahiran" class="element radio" type="radio" value="Dokter" />
<label class="choice" for="element_49_1">Dokter</label>
<input id="element_49_2" name="siswa_membantu_kelahiran" class="element radio" type="radio" value="Bidan" />
<label class="choice" for="element_49_2">Bidan</label>
<input id="element_49_3" name="siswa_membantu_kelahiran" class="element radio" type="radio" value="Lain - Lain" />
<label class="choice" for="element_49_3">Lain - Lain</label>

		</span>
		</li>		<li id="li_29" >
		<!--
		<label class="description" for="element_29"> </label>
		<div>
			<input id="element_29" name="element_29" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>
		-->		<li id="li_30" >
		<label class="description" for="element_30">6. Berat ketika lahir (Kg) </label>
		<div>
			<?php echo form_input('siswa_berat_lahir'); ?>
		</div>
		</li>		<li id="li_31" >
		<label class="description" for="element_31">Panjang ketika lahir (cm) </label>
		<div>
			<?php echo form_input('siswa_panjang_lahir'); ?>
		</div>
		</li>		<li id="li_32" >
		<label class="description" for="element_32">7. Usia ibu ketika anak lahir (tahun) </label>
		<div>
			<?php echo form_input('siswa_usiaibu_lahir'); ?>
		</div><p class="guidelines" id="guide_32"><small>(tahun)</small></p>
		</li>		




		<input type="submit" name="submit" value="submit"  class="btn btn-primary btn-lg" role="button" ></input></span> 
		<input type="submit" name="submit" value="back" href="Con_pendaftar_On/prevState" class="btn btn-primary btn-lg" role="button" ></input></span>




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
