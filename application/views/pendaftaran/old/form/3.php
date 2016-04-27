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

		<?php //echo form_open('Con_pendaftar/tambahpendaftar'); ?>
		<form id="form_1049697" class="appnitro"  method="post" action="">
		<div class="form_description" align="center">
			<h3>FORMULIR PENDAFTARAN SLB B-C OPTIMAL</h3>
			<p>JL. WARDOYO NO 12 blk KOMP. TNI-AL KENJERAN SURABAYA</p>
		</div>

		</div>

		<div id="container">
			<ul >

					<li class="section_break">
			<h3>Saya yang bertanda tangan dibawah ini:</h3>
			
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Nama pendaftar </label>
		<div>
			 <?php echo form_input('pendaftar_nama'); ?>

		</div>
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Status pendaftar terhadap anak </label>
		<div>
			<?php echo form_input('pendaftar_status'); ?>
		</div>
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Alamat rumah </label>
		<div>
			<?php echo form_input('pendaftar_rumah'); ?>
		</div>
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Telepon / HP </label>
		<div>
			<?php echo form_input('pendaftar_telepon'); ?>
		</div>
		</li>		<li class="section_break">
			<h3>Mendaftarkan</h3>
			<br>
			I. DATA SISWA
			<br>
			A. IDENTITAS SISWA</h3>
			<p></p>
		</li>		<li id="li_5" >
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
<label class="choice" for="element_22_2">WNI keturunan</label>t
<input id="element_22_3" name="siswa_warganegara" class="element radio" type="radio" value="3" />
<label class="choice" for="element_22_3">Asing</label>

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
		</li>		<li class="section_break">
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
		</li>		<li class="section_break">
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





	 MASUKKAN KE DALAM TABEL "kelainantubuh", di skip dulu, ga wajib
		<li id="li_38" >
		<label class="description" for="siswa_kelainan">5. Kelainan pada tubuh yang disebabkan kasus (Jenis penyakit/kecelakaan, Usia, Lama penyakit yang diderita) </label>
		<div>
			<textarea id="element_38" name="siswa_kelainan" class="element textarea medium" value=""></textarea>
		</div>
		</li>

		<li id="li_39" >
		<label class="description" for="element_39">6. Makanan tambahan yang diberikan setelah 4 bulan </label>
		<div>
			<?php echo form_input('siswa_makanan_4bln'); ?>
		</div>
		</li>		<li id="li_40" >
		skip aja dulu sih, masukin ke dalam tabel "imunisasi"
		<label class="description" for="siswa_imunisasi">7. Imunisasi yang diberikan (Jenis imunisasi, Usia saat Imunisasi) </label>
		<div>
			<textarea id="element_40" name="siswa_imunisasi" class="element textarea medium"></textarea>
		</div>
		</li>		<li id="li_41" >
		<label class="description" for="element_41">8. Alergi makanan dan obat </label>
		<div>
			<?php echo form_input('siswa_alergi'); ?>
		</div>
		</li>		<li id="li_51" >
		<label class="description" for="element_51">9. Penglihatan </label>
		<span>
			<input id="element_51_1" name="siswa_penglihatan" class="element radio" type="radio" value="1" />
<label class="choice" for="element_51_1">Normal</label>
<input id="element_51_2" name="siswa_penglihatan" class="element radio" type="radio" value="2" />
<label class="choice" for="element_51_2">Berkacamata minus / plus</label>

		</span>
		</li>		<li id="li_52" >
		<label class="description" for="siswa_pendengaran">10. Pendengaran </label>
		<span>
			<input id="element_52_1" name="siswa_pendengaran" class="element radio" type="radio" value="1" />
<label class="choice" for="element_52_1">Normal</label>
<input id="element_52_2" name="siswa_pendengaran" class="element radio" type="radio" value="2" />
<label class="choice" for="element_52_2">Kurang tanggap terhadap suara</label>

		</span>
		</li>		<li id="li_53" >
		<label class="description" for="siswa_penampilan">11. Penampilan </label>
		<span>
			<input id="element_53_1" name="siswa_penampilan" class="element radio" type="radio" value="1" />
<label class="choice" for="element_53_1">Koordinator gerakan terkendali</label>
<input id="element_53_2" name="siswa_penampilan" class="element radio" type="radio" value="2" />
<label class="choice" for="element_53_2">Koordinator gerakan kurang terkendali</label>

		</span>
		</li>
		ini skip aja dulu, masukin ke tabel "saudara_kandung"
				<li class="section_break">
			<h3>D. SAUDARA KANDUNG ANAK</h3>
			<p></p>
		</li>		<li id="li_42" >
		<label class="description" for="saudara_anak">(Nama, L/P, Pendidikan) </label>
		<div>
			<textarea id="element_42" name="element_42" class="element textarea medium"></textarea>
		</div>
		</li>
		<li class="section_break">
			masih gajelas, skip aja gpp,tp sepertinya ke ciri_fisik
			<h3>E. CIRI KHAS ANAK</h3>
			<p></p>
		</li>		<li id="li_45" >

		<div>
			<!--<input id="element_45" name="siswa_ciri" class="element text medium" type="text" maxlength="255" value=""/>-->
		<?php echo form_input('siswa_ciri'); ?>
		</div>
		</li>
		masukkan ke dalam tabel ciri_kepribadian
		<li id="li_74" >
		<label class="description" for="siswa_kepribadian">2. Ciri kepribadian yang menonjol </label>
		<span>
			<input id="element_74_1" name="siswa_kepribadian" class="element radio" type="radio" value="1" />
<label class="choice" for="element_74_1">Periang</label>
<input id="element_74_2" name="siswa_kepribadian" class="element radio" type="radio" value="2" />
<label class="choice" for="element_74_2">Pemalu</label>
<input id="element_74_3" name="siswa_kepribadian" class="element radio" type="radio" value="3" />
<label class="choice" for="element_74_3">suka menyendiri</label>
<input id="element_74_4" name="siswa_kepribadian" class="element radio" type="radio" value="4" />
<label class="choice" for="element_74_4">mudah bergaul</label>
<input id="element_74_5" name="siswa_kepribadian" class="element radio" type="radio" value="5" />
<label class="choice" for="element_74_5">aktif</label>
<input id="element_74_6" name="siswa_kepribadian" class="element radio" type="radio" value="6" />
<label class="choice" for="element_74_6">pendiam</label>
<input id="element_74_7" name="siswa_kepribadian" class="element radio" type="radio" value="7" />
<label class="choice" for="element_74_7">pemarah</label>
<input id="element_74_8" name="siswa_kepribadian" class="element radio" type="radio" value="8" />
<label class="choice" for="element_74_8">lain - lain</label>

		</span>
		</li>		<li id="li_54" >
		<label class="description" for="element_54"> </label>
		<div>
			<input id="element_54" name="element_54" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>		<li id="li_55" >
		<label class="description" for="siswa_bakat">3. Bakat khusus yang menonjol </label>
		<div>
			<?php echo form_input('siswa_bakat'); ?>
		</div>
		</li>		<li id="li_56" >
		<label class="description" for="element_56">4. Prestasi yang pernah diraih </label>
		<div>
			<?php echo form_input('siswa_prestasi'); ?>
		</div>
		</li>		<li class="section_break">
			<h3>II. DATA KELUARGA</h3>
			<p></p>
		</li>		<li class="section_break">
			<h3>Ayah Kandung</h3>
			<p></p>
		</li>		<li id="li_59" >
		<label class="description" for="ayah">Nama lengkap </label>
		<div>
			<?php echo form_input('ayah_nama'); ?>
		</div>
		</li>		<li id="li_60" >
		<label class="description" for="ayah_lahir">Tempat lahir </label>
		<div>
			<?php echo form_input('ayah_tempat_lahir'); ?>
		</div>
		</li>		<li id="li_61" >
		<label class="description" for="element_61">Agama </label>
		<div>
			<?php echo form_input('ayah_agama'); ?>
		</div>
		</li>		<li id="li_62" >
		<label class="description" for="element_62">Kewarganegaraan </label>
		<div>
			<?php echo form_input('ayah_kewarganegaraan'); ?>
		</div>
		</li>		<li id="li_63" >
		<label class="description" for="element_63">Pendidikan terakhir </label>
		<div>
			<?php echo form_input('ayah_pendidikan'); ?>
		</div>
		</li>		<li id="li_64" >
		<label class="description" for="element_64">Nama instansi tempat bekerja </label>
		<div>
			<?php echo form_input('ayah_bekerja'); ?>
		</div>
		</li>		<li id="li_65" >
		<label class="description" for="element_65">Jabatan di tempat kerja </label>
		<div>
			<?php echo form_input('ayah_jabatan'); ?>
		</div>
		</li>		<li id="li_66" >
		<label class="description" for="element_66">Pangkat / golongan </label>
		<div>
			<?php echo form_input('ayah_pangkat'); ?>
		</div>
		</li>		<li id="li_67" >
		<label class="description" for="element_67">Lama bekerja per hari </label>
		<div>
			<?php echo form_input('ayah_lama'); ?>
		</div>
		</li>		<li id="li_68" >
		<label class="description" for="element_68">Penghasilan per bulan </label>
		<div>
			<?php echo form_input('ayah_penghasilan'); ?>
		</div>
		</li>		<li id="li_69" >
		<label class="description" for="element_69">Jumlah tanggungan </label>
		<div>
			<?php echo form_input('ayah_jtanggungan'); ?>
		</div>
		</li>		<li id="li_72" >
		<label class="description" for="element_72">Alamat rumah </label>
		<div>
			<textarea id="element_72" name="element_72" class="element textarea medium"></textarea>
		</div>
		</li>		<li id="li_73" >
		<label class="description" for="element_73">Alamat kantor </label>
		<div>
			<textarea id="element_73" name="element_73" class="element textarea medium"></textarea>
		</div>
		</li>		<li id="li_70" >
		<label class="description" for="element_70">Telepon rumah / HP </label>
		<div>
			<?php echo form_input('ayah_telepon'); ?>
		</div>
		</li>		<li id="li_71" >
		<label class="description" for="element_71">Usia saat menikah </label>
		<div>
			<?php echo form_input('ayah_menikahpada'); ?>
		</div>
		</li>		<li id="li_75" >
		<label class="description" for="element_75">Kesempatan berkomunikasi dengan anak </label>
		<span>
			<input id="element_75_1" name="element_75" class="element radio" type="radio" value="1" />
<label class="choice" for="element_75_1">Setiap hari</label>
<input id="element_75_2" name="element_75" class="element radio" type="radio" value="2" />
<label class="choice" for="element_75_2">Tidak setiap hari</label>

		</span>
		</li>

					<li class="buttons">
			    <input type="hidden" name="form_id" value="1049697" />

				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
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
