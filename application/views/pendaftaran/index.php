<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pendaftaran Siswa</title>
    <script src="<?php echo base_url();?>/assets/multiple-form/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/multiple-form/jquery.easing.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>/assets/multiple-form/jquery-multi-step-form.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>/assets/select2/select2.min.js" type="text/javascript"></script>

  <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css"/>

  <link href="<?php echo base_url();?>/assets/multiple-form/jquery-multi-step-form.css" media="screen" rel="stylesheet" type="text/css"/>

  <link href="<?php echo base_url();?>/assets/select2/select2.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/date/jquery-ui-1.11.4.custom/jquery-ui.css" media="screen" rel="stylesheet" type="text/css"/>

  

  <style>
    * {
    margin: 0;
    padding: 0;
    }
    html {
    height: 100%;
    background: url("<?php echo base_url();?>/assets/multiple-form/bg.png");
    background: linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)),  url("<?php echo base_url();?>/assets/multiple-form/bg.png");
    }
    body
    {
      font-family: arial, verdana;
    }
    .wawan
    {
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px!important ;
        height:20px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }
    label
    {
      color:black;
      text-align:left;
      font-size:1.5rem;
      width:100%;
    }
    input{

    }
    *{
      color:black;

    }
    .white {
      color:white;
    }
  </style>

</head>
<body>
  <div id="multistepform-example-container">
  <ul id="multistepform-progressbar">
  <h1 id="multistepform-progressbar" class="white">FORMULIR PENDAFTARAN SLB B-C OPTIMAL</h2>
  <p class="white">JL. WARDOYO NO 12 blk KOMP. TNI-AL KENJERAN SURABAYA</p><br>

    <li class="active">Pendaftar Siswa</li>
    <li>Identitas Siswa I</li>
    <li>Identitas Siswa II</li>
    <li>Identitas Siswa III</li>
  <li>Personal Details</li>
  </ul>
  <?php //echo form_open('pendaftar/Con_pendaftar/tambahpendaftar'); ?>
  <?php echo form_open('Create/pendaftar'); ?>
  <div class="form">
    <h2 class="fs-title">Masukkan data pendaftar</h2>
    <h3 class="fs-subtitle">Isi semua kolom</h3>
    <label>1. Nama Pendaftar</label>
    <input type="text" name="pendaftar_nama" placeholder="Nama Pendaftar">
    <label>2. Status Pendaftar</label>
    <input type="text" name="pendaftar_status" placeholder="Status Pendaftar">
    <label>Tempat tinggal Pendaftar</label>
    <input type="text" name="pendaftar_rumah" placeholder="Tempat Tinggal Pendaftar">
    <label>Telepon Pendaftar</label>
    <input type="number" name="pendaftar_telepon" placeholder="Telepon Pendaftar">

    <input type="button" name="next" class="next button" value="Next">
  </div>

  <div class="form">
    <h2 class="fs-title">Identitas Siswa I</h2>
    <h3 class="fs-subtitle">Data Siswa </h3>
    <input type="text" name="siswa_nama" placeholder="1. Nama lengkap ">
    <input type="text" name="siswa_namapanggilan" placeholder="Nama Panggilan">
    <input type="text" name="siswa_tempat_lahir" placeholder="2. Tempat lahir">
    <input id="date" type="text" name="siswa_tanggal_lahir" placeholder="3. Tanggal lahir">
    <input type="number" name="siswa_usia" placeholder="Usia per 1 Juli">

    <label>3. Jenis Kelamin</label>
      <select class="wawan" name="jenis_kelamin" >
        <option value="Laki - Laki">Laki - laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label>4. Agama</label>
      <select class="wawan" name="siswa_agama">
        <?php foreach ($agama as $row) {
        echo '<option value='.$row['AG_ID'];
        echo 'selected';
        echo '>'.$row['AG_NAMA'].'</option>';
        }?>
        <!-- <option value="<?php $row['AG_ID']; ?>"> echo $row['AG_NAMA']; ?></option>
         -->
        <!-- <option  value="1">Islam</option>
        <option name="siswa_agama" value="2">Katolik</option>
        <option name="siswa_agama" value="3">Protestan</option>
        <option name="siswa_agama" value="4">Hindu</option>
        <option name="siswa_agama" value="5">Budha</option>
        <option name="siswa_agama" value="6">Konghucu</option>
     -->
<?php// endforeach ?>
   </select>
   
    <label>5. Kewarganegaraan</label>
      <select class="wawan" name="siswa_warganegara">
        <option  value="1">WNI</option>
        <option name="siswa_warganegara" value="2">WNI Keturunan</option>
        <option name="siswa_warganegara" value="3">Protestan</option>
        <option name="siswa_warganegara" value="4">WNA</option>
    </select>
    <label>6. Tinggal Bersama</label>
      <select class="wawan"  name="siswa_tinggal_bersama" >
        <option  value="1">Orang Tua</option>
        <option  value="2">Wali</option>
        <option  value="3">Lain - Lain</option>
    </select>
    <label>7.Bahasa sehari-hari di rumah</label>
      <select class="wawan" name="siswa_bahasa">
        <option  value="1">Indonesia</option>
        <option value="2">Jawa</option>
        <option value="3">Lain - Lain</option>
    </select>

    <input type="number" name="siswa_anakke" placeholder="8. Anak ke ">
    <input type="number" name="siswa_anakke_dari" placeholder="dari">
    <label><font color="black">Asal Sekolah</font></label>
    <input type="text" name="siswa_sekolahasal" placeholder="Nama sekolah">
    <input type="number" name="siswa_masuktahun" placeholder="Masuk tahun">
    <input type="number" name="siswa_lulus" placeholder="Lulus Tahun">

    <input type="text" name="siswa_alamat_sekolah" placeholder="Alamat Sekolah">
    <input type="text" name="siswa_aktifitas" placeholder="Aktifitas yang paling disukai ">
    <input type="button" name="previous" class="previous button" value="Previous">
    <input type="button" name="next" class="next button" value="Next">
  </div>

  <div class="form">
    <h2 class="fs-title">Identitas Siswa II</h2>
    <h3 class="fs-subtitle">B. Kelahiran anak</h3>
    <input type="number" name="siswa_lama_kandungan_bulan" placeholder="1. Lama dalam kandungan (bulan)">

    <input type="number" name="siswa_lama_kandungan_hari" placeholder="(hari)">
      <label>2. Keadaan selama dalam <kandungan></kandungan></label>
      <select class="wawan" name="siswa_keadaan_kandungan" >
        <option value="1">Normal</option>
        <option name="siswa_keadaan_kandungan" value="2">Ada gangguan</option>
    </select>
    <label>3. Keadaan lahir</label>
    <select class="wawan" name="siswa_keadaan_lahir">
        <option  value="1">Normal</option>
        <option name="siswa_keadaan_lahir" value="2">Sulit</option>
        <option name="siswa_keadaan_lahir" value="3">Prematur</option>
    </select>
    <label>4. Proses kelahiran</label>
    <select class="wawan" name="siswa_proses_kelahiran">
        <option  value="1">Normal</option>
        <option name="siswa_proses_kelahiran" value="2">Sulit</option>
        <option name="siswa_proses_kelahiran" value="3">Operasi Caesar</option>
    </select>
    <label>5. Yang membantu kelahiran</label>
    <select class="wawan" name="siswa_membantu_kelahiran">
        <option  value="1">Dokter</option>
        <option name="siswa_membantu_kelahiran" value="2">Bidan</option>
        <option name="siswa_membantu_kelahiran" value="3">lain -lain</option>
    </select>

      <input type="number" name="siswa_berat_lahir" placeholder="6. Berat ketika lahir (Kg) ">
      <input type="number" name="siswa_panjang_lahir" placeholder="Panjang ketika lahir (cm) ">
      <input type="number" name="siswa_usiaibu_lahir" placeholder="7. Usia ibu ketika anak lahir (tahun) ">
      <input type="text" name="siswa_usiaibu_lahir" placeholder="Tempat Lahir">
      <!-- <input id="date" type="text" name="siswa_tanggal_lahir" placeholder="Tanggal Lahir Ibu">
 -->
      <input type="button" name="previous" class="previous button" value="Previous">
      <input type="button" name="next" class="next button" value="Next">

  </div>


  <div class="form">
  <h2 class="fs-title">Identitas Siswa II</h2>
  <h3 class="fs-subtitle">C. KESEHATAN ANAK</h3>
    <input type="number" name="siswa_berat" placeholder="1. Berat Badan">
    <input type="number" name="siswa_tinggi" placeholder="Tinggi badan (cm)">
    <input type="text" name="siswa_golongan_darah" placeholder="2. golongan darah">
    <input type="number" name="siswa_asi" placeholder="3. Minum asi selama">
    <label>6. Perkembangan dalam 2 bulan pertama</label>
    <select class="wawan" ame="siswa_perkembangan" >
        <option nvalue="1">Normal</option>
        <option name="siswa_perkembangan" value="2">Ada gangguan</option>
    </select>

    <input type="text" name="siswa_makanan_4bln" placeholder="5. Makanan tambahan yang diberikan setelah 4 bulan ">
    <input type="text" name="siswa_alergi" placeholder="6. Alergi makanan dan obat ">
    <label>7. Penglihatan</label>

    <select class="wawan" name="siswa_penglihatan" >
        <option value="1">Normal</option>
        <option name="siswa_penglihatan" value="2">Berkacamata minus</option>
    </select>
    <label>8. Pendengaran</label>

    <select class="wawan"name="siswa_pendengaran" >
        <option value="1">Normal</option>
        <option name="siswa_pendengaran" value="2">Kurang tanggap</option>
    </select>
    <label>9. Penampilan</label>

    <select class="wawan"  name="siswa_penampilan">
        <option value="1">Koordinator gerakan terkendali</option>
        <option name="siswa_penampilan" value="2">Koordinator gerakan kurang terkendali</option>
    </select>

    <!--<textarea name="address" placeholder="Address"></textarea>-->
    <input type="button" name="previous" class="previous button" value="Previous">
    <?php echo form_submit('submit', 'Submit Post!', "class = 'next button'");?>

  </form>
  </div>
  </div>
<script>
    $(document).ready(function(){
        $.multistepform({
            container:'multistepform-example-container',
            form_method:'POST',
        });


      $(".wawan").select2({
        placeholder: "Pilih data",
         });

      $('#date').datepicker({dateFormat: 'yy/mm/dd'});

      // $jQuery.datetimepicker.setLocale('de');
      // $jQuery('#datetimepicker1').datetimepicker({
      //  i18n:{
      //   de:{
      //    months:[
      //     'Januar','Februar','März','April',
      //     'Mai','Juni','Juli','August',
      //     'September','Oktober','November','Dezember',
      //    ],
      //    dayOfWeek:[
      //     "So.", "Mo", "Di", "Mi", 
      //     "Do", "Fr", "Sa.",
      //    ]
      //   }
      //  },
      //  timepicker:false,
      //  format:'d.m.Y'
      // });


    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> <script type="text/javascript" src="<?php echo base_url();?>assets/date/jquery-ui-1.11.4.custom/jquery-ui.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/date/jquery-ui-1.11.4.custom/ui.js"></script>

<!--
<script type="text/javascript" src="<?php echo base_url();?>assets/date/datetimepicker/jquery.js"></script>

-->
</body>

</html>
