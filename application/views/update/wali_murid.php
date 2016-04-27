<!-- Content --><!-- 
      <script src="<?php echo base_url();?>/assets/select2/select2.min.js" type="text/javascript"></script>

  <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css"/>
-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<!-- <link rel="stylesheet" href="<?php echo base_url();?>/assets/multi-step-registration/assets/bootstrap/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/multi-step-registration/assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/multi-step-registration/assets/css/form-elements.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/multi-step-registration/assets/css/style.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

            <!-- Favicon and touch icons -->
            <link rel="shortcut icon" href="<?php echo base_url();?>/assets/ico/favicon.png">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/assets/multi-step-registration/assets/ico/apple-touch-icon-144-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/assets/assets/ico/apple-touch-icon-114-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/assets/multi-step-registration/assets/ico/apple-touch-icon-72-precomposed.png">
            <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/assets/multi-step-registration/assets/ico/apple-touch-icon-57-precomposed.png">
            <body>

                <!-- Top content -->
                <div class="top-content">

                    <div class="inner-bg">
                        <div class="container">

                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 form-box">

                                    <form role="form" action="create_data" method="post" class="registration-form">
                                        <fieldset>
                                            <div class="form-top">
                                                <div class="form-top-left">
                                                    <h3>Step 1 / 3</h3>
                                                    <p>Info Dasar Wali Siswa</p>
                                                </div>
                                                <div class="form-top-right">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="form-bottom">
                                                <div class="form-group">
                                                <select class="form-control" id="sel1" name="KWN_ID">
                                                    echo'<option value="" selected disabled>Warganegara</option>'
                                                    <?php foreach ($warganegara as $row) {
                                                        echo '<option value='.$row['KWN_ID'].'>'.$row['KWN_JENIS'].'</option>';
                                                    }?>
                                                </select>
                                                <!-- <input type="text" name="KWN_ID" placeholder="Kewarganegaraan" class="form-control"> -->
                                            </div>
                                            <div class="form-group">
                                                <!-- <label class="sr-only" for="form-first-name">First name</labels> -->
                                                <select class="form-control" id="sel1" name="PK_ID">
                                                    echo'<option value="" selected disabled>Pekerjaan</option>'
                                                    <?php foreach ($pekerjaan as $row) {
                                                        echo '<option value='.$row['PK_ID'].'>'.$row['PK_NAMA'].'</option>';
                                                    }?>
                                                </select>
                                                <!-- <input type="text" name="PK_ID" placeholder="Pekerjaan" class="form-control"> -->
                                            </div>
                                            <div class="form-group">
                                                    <select class="form-control" id="sel1" name="PH_ID">
                                                    echo'<option value="" selected disabled>Penghasilan</option>'
                                                    <?php foreach ($penghasilan as $row) {
                                                        echo '<option value='.$row['PH_ID'].'>'.$row['PH_BESARAN'].'</option>';
                                                    }?>
                                                    </select>
                                                <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                <!-- <input type="text" name="PH_ID" placeholder="Penghasilan" class="form-control"> -->
                                            </div>
                                            <div class="form-group">
                                                <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                <select class="form-control" id="sel1" name="KK_ID">
                                                    echo'<option value="" selected disabled>Kebutuhan Khusus</option>'
                                                    <?php foreach ($keb_khusus as $row) {
                                                        echo '<option value='.$row['KK_ID'].'>'.$row['KK_JENIS'].'</option>';
                                                    }?>
                                                    </select>
                                                <!-- <input type="text" name="KK_ID" placeholder="Kebutuhan Khusus (jika ada)" class="form-control"> -->
                                            </div>
                                            <div class="form-group">
                                                <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                <select class="form-control" id="sel1" name="JP_ID">
                                                    echo'<option value="" selected disabled>Jenjang Pendidikan</option>'
                                                    <?php foreach ($jenjang_pendidikan as $row) {
                                                        echo '<option value='.$row['JP_ID'].'>'.$row['JP_JENJANG'].'</option>';
                                                    }?>
                                                    </select>
                                                <!-- <input type="text" name="JP_ID" placeholder="Jenjang Pendidikan" class="form-control"> -->
                                            </div>
                                            <div class="form-group">
                                                <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                <select class="form-control" id="sel1" name="SW_ID">
                                                    echo'<option value="" selected disabled>Siswa</option>'
                                                    <?php foreach ($siswa as $row) {
                                                        echo '<option value='.$row['SW_ID'].'>'.$row['SW_NAMA'].'</option>';
                                                    }?>
                                                    </select>
                                                <!-- <input type="text" name="SW_ID" placeholder="ID Siswa" class="form-control"> -->
                                            </div>
                                            <div class="form-group">
                                                <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                <input type="text" name="WM_SEBAGAI" placeholder="Sebagai" class="form-control">
                                        </div><!-- 
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Last name</label>
                                            <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-about-yourself">About yourself</label>
                                            <textarea name="form-about-yourself" placeholder="About yourself..." 
                                                        class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                                                    </div> -->
                                                    <button type="button" class="btn btn-next">Next</button>
                                                </div>
                                            </fieldset>

                                            <fieldset>
                                                <div class="form-top">
                                                    <div class="form-top-left">
                                                        <h3>Step 2 / 3</h3>
                                                        <p>Info Dasar Wali Siswa</p>
                                                    </div>
                                                    <div class="form-top-right">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="form-bottom">
                                                    <div class="form-group">
                                                        <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                        <input type="text" name="WM_NAMA" placeholder="Nama Lengkap" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label class="sr-only" for="form-first-name">First name</labels> -->
                                                        <input type="text" name="WM_TEMPATLAHIR" placeholder="Tempat Lahir" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                        <input type="date" name="WM_TGLLAHIR" placeholder="Tanggal Lahir" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label class="sr-only" for="form-first-name">First name</label> -->
                                                        <input type="text" name="WM_INSKERJA" placeholder="Instansi Kerja" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="WM_JABATANKERJA" placeholder="Jabatan Kerja" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="WM_PANGKAT" placeholder="Pangkat Wali murid" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="WM_LAMAKERJAPERHARI" placeholder="Lama Kerja per Hari" class="form-control">
                                                    </div>
                                                    <button type="button" class="btn btn-previous">Previous</button>
                                                    <button type="button" class="btn btn-next">Next</button>
                                                </div>
                                            </fieldset>

                                            <fieldset>
                                                <div class="form-top">
                                                    <div class="form-top-left">
                                                        <h3>Step 3 / 3</h3>
                                                        <p>Social media profiles:</p>
                                                    </div>
                                                </div>
                                                <div class="form-bottom">

                                                    <div class="form-group">
                                                        <input type="text" name="WM_KESEMPATANKOM" placeholder="Kesempatan Komunikasi" class="form-control">
                                                    </div>lo
                                                    <div class="form-group">
                                                        <input type="number" name="WM_JMLTANGGUNG" placeholder="Jumlah Tanggungan" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" name="WM_ALAMATRUMAH" placeholder="Alamat Rumah" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" name="WM_ALAMATKANTOR" placeholder="Alamat Kantor" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" name="WM_TELP" placeholder="Telepon Kantor" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" name="WM_KESEMPATANKOM" placeholder="Telepon Wali Siswa" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" name="WM_USIANIKAH" placeholder="Usia Nikah Wali Siswa" class="form-control">
                                                    </div>
                                                    <button type="button" class="btn btn-previous">Previous</button>
                                                    <button type="submit" class="btn">Sign me up!</button>
                                                    <?php //echo form_submit('submit', 'Submit Post!', "class = 'btn'");?>

                                                </div>
                                            </fieldset>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Javascript -->
                    <script src="<?php echo base_url();?>/assets/multi-step-registration/assets/js/jquery-1.11.1.min.js"></script>
                    <script src="<?php echo base_url();?>/assets/multi-step-registration/assets/bootstrap/js/bootstrap.min.js"></script>
                    <script src="<?php echo base_url();?>/assets/multi-step-registration/assets/js/jquery.backstretch.min.js"></script>
                    <script src="<?php echo base_url();?>/assets/multi-step-registration/assets/js/retina-1.1.0.min.js"></script>
                    <script src="<?php echo base_url();?>/assets/multi-step-registration/assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
            <![endif]-->

        </body>