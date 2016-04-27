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

		<?php echo form_open('Con_pendaftar_On/tambahpendaftar'); ?>
		<form id="form_1049697" class="appnitro"  method="post" action="">
		<div class="form_description" align="center">
			<h3>FORMULIR PENDAFTARAN SLB B-C OPTIMAL</h3>
			<p>JL. WARDOYO NO 12 blk KOMP. TNI-AL KENJERAN SURABAYA</p>
		</div>
<?php
							 var_dump($pendaftar).'</br>';		?>

		</div>

		<div id="container">
			<ul >





		<li class="section_break">
			<h3>C. KESEHATAN ANAK</h3>
			<p></p>
		</li>		<li id="li_34" >
		<label class="description" for="element_34">1. Berat badan (Kg) </label>
		<div>
			<?php echo form_input('siswa_berat'); ?>
		</div>
		</li>		<li id="li_35" >
		<label class="description" for="element_35">Tinggi badan (cm) </label>
		<div>
			<?php echo form_input('siswa_tinggi'); ?>
		</div>
		</li>		<li id="li_36" >
		<label class="description" for="element_36">2. Golongan darah </label>
		<div>
			<?php echo form_input('siswa_golongan_darah'); ?>
		</div>
		</li>		<li id="li_37" >
		<label class="description" for="element_37">3. Minum ASI selama </label>
		<div>
			<?php echo form_input('siswa_asi'); ?>
		</div>
		</li>		<li id="li_50" >
		<label class="description" for="siswa_perkembangan">4. Perkembangan dalam 2 bulan pertama </label>
		<span>




			<!-- BELUM BERES, bingung dmna tabelnya -->
			<input id="element_50_1" name="siswa_perkembangan" class="element radio" type="radio" value="1" />
<label class="choice" for="element_50_1">Normal</label>
<input id="element_50_2" name="siswa_perkembangan" class="element radio" type="radio" value="2" />
<label class="choice" for="element_50_2">Ada gangguan</label>

		</span>
		</li>




<!--
	 MASUKKAN KE DALAM TABEL "kelainantubuh", di skip dulu, ga wajib
		<li id="li_38" >
		<label class="description" for="siswa_kelainan">5. Kelainan pada tubuh yang disebabkan kasus (Jenis penyakit/kecelakaan, Usia, Lama penyakit yang diderita) </label>
		<div>
			<textarea id="element_38" name="siswa_kelainan" class="element textarea medium" value=""></textarea>
		</div>
		</li-->

		<li id="li_39" >
		<label class="description" for="element_39">5. Makanan tambahan yang diberikan setelah 4 bulan </label>
		<div>
			<?php echo form_input('siswa_makanan_4bln'); ?>
		</div>
		</li>		<!--li id="li_40" >
		skip aja dulu sih, masukin ke dalam tabel "imunisasi"
		<label class="description" for="siswa_imunisasi">7. Imunisasi yang diberikan (Jenis imunisasi, Usia saat Imunisasi) </label>
		<div>
			<textarea id="element_40" name="siswa_imunisasi" class="element textarea medium"></textarea>
		</div>
		</li-->		


		<li id="li_41" >
		<label class="description" for="element_41">6. Alergi makanan dan obat </label>
		<div>
			<?php echo form_input('siswa_alergi'); ?>
		</div>
		</li>		<li id="li_51" >
		<label class="description" for="element_51">7. Penglihatan </label>
		<span>
			<input id="element_51_1" name="siswa_penglihatan" class="element radio" type="radio" value="1" />
<label class="choice" for="element_51_1">Normal</label>
<input id="element_51_2" name="siswa_penglihatan" class="element radio" type="radio" value="2" />
<label class="choice" for="element_51_2">Berkacamata minus / plus</label>

		</span>
		</li>		<li id="li_52" >
		<label class="description" for="siswa_pendengaran">8. Pendengaran </label>
		<span>
			<input id="element_52_1" name="siswa_pendengaran" class="element radio" type="radio" value="1" />
<label class="choice" for="element_52_1">Normal</label>
<input id="element_52_2" name="siswa_pendengaran" class="element radio" type="radio" value="2" />
<label class="choice" for="element_52_2">Kurang tanggap terhadap suara</label>

		</span>
		</li>		<li id="li_53" >
		<label class="description" for="siswa_penampilan">9. Penampilan </label>
		<span>
			<input id="element_53_1" name="siswa_penampilan" class="element radio" type="radio" value="1" />
<label class="choice" for="element_53_1">Koordinator gerakan terkendali</label>
<input id="element_53_2" name="siswa_penampilan" class="element radio" type="radio" value="2" />
<label class="choice" for="element_53_2">Koordinator gerakan kurang terkendali</label>

		</span>
		</li>
		
		<br>
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
