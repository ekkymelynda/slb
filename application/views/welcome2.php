<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>asset/logo-baru.png" type="image/x-icon">

    <title>Home Page | Sistem Informasi Akademik</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#">Sekolah Luar Biasa Optimal B-C Surabaya</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div  class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Home</a>
                    </li>
                    <!--li>
                        <a class="page-scroll" href="#services">Daftar</a>
                    </li-->
                    <li>
                        <a class="page-scroll" href="#contact">Syarat</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="Nav/login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Selamat Datang</h1>
                        <h3>Sistem Informasi Akademik</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <!--li>
                                <a href="Con_pendaftar" class="btn btn-default btn-lg"><!--i class="fa fa-twitter fa-fw"></i> <span class="network-name">Daftar</span></a>
                    <!--        </li>
                            <li>
                                <a href="Con_pendaftar_On" class="btn btn-default btn-lg"><!--i class="fa fa-twitter fa-fw"></i> <span class="network-name">Daftar2</span></a>
                    <!--        </li-->
                            <li>
                                <a href="Nav/pendaftaran" class="btn btn-default btn-lg"><!--i class="fa fa-twitter fa-fw"></i--> <span class="network-name">Daftar</span></a>
                            </li>
                            
                            <li>
                                <a href="Nav/login" class="btn btn-default btn-lg"><!--i class="fa fa-twitter fa-fw"></i--> <span class="network-name">Login</span></a>
                            </li>
                     <!--       <li>
                                <a href="Con_jurnal" class="btn btn-default btn-lg"><!--i class="fa fa-github fa-fw"></i> <span class="network-name">Jurnal</span></a>
                     <!--       </li>
                            <li>
                                <a href="Guru" class="btn btn-default btn-lg"><!--i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Guru</span></a>
                     <!--       </li-->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
<!--	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            





            <div class="row">

                <div class="col-lg-5 col-sm-6">
                    <!--hr class="section-heading-spacer">
                    <div class="clearfix"></div-->
<!--                    <li>
                            <a href="Agama" class="btn btn-default btn-lg"><span class="network-name">Agama</span></a>
                    </li>

                    <li>
                            <a href="At" class="btn btn-default btn-lg"> <span class="network-name">Alat Transportasi</span></a>
                    </li>
                    <li>
                            <a href="Bl" class="btn btn-default btn-lg"> <span class="network-name">Base Line</span></a>
                    </li>
                    <li>
                            <a href="Ck" class="btn btn-default btn-lg"> <span class="network-name">Ciri Kepribadian</span></a>
                    </li>
                    <li>
                            <a href="Da" class="btn btn-default btn-lg"> <span class="network-name">Data Assesment</span></a>
                    </li>
                    <li>
                            <a href="Dk" class="btn btn-default btn-lg"><span class="network-name">Detail Kebutuhan</span></a>
                    </li>
                    <li>
                            <a href="Dp" class="btn btn-default btn-lg"><span class="network-name">Detail Penempatan</span></a>
                    </li>
                    <li>
                            <a href="Djk" class="btn btn-default btn-lg"> <span class="network-name">Detail Jurnal Kelas</span></a>
                    </li>
                    <li>
                            <a href="Djm" class="btn btn-default btn-lg"> <span class="network-name">Detail Jurnal Materi</span></a>
                    </li>
                    <li>
                            <a href="Drs" class="btn btn-default btn-lg"> <span class="network-name">Detail Rombel Siswa</span></a>
                    </li>
                    <li>
                            <a href="Ha" class="btn btn-default btn-lg"><span class="network-name">Detail Hasil Assesment</span></a>
                    </li>
                    <li>
                            <a href="Ik" class="btn btn-default btn-lg"> <span class="network-name">Indikator Keberhasilan</span></a>
                    </li>
                    <li>
                            <a href="Imunisasi" class="btn btn-default btn-lg"> <span class="network-name">Imunisasi</span></a>
                    </li>
                    <li>
                            <a href="Jm" class="btn btn-default btn-lg"><span class="network-name">Jurnal Materi</span></a>
                    </li>
                    <li>
                            <a href="Jp" class="btn btn-default btn-lg"> <span class="network-name">Jenjang Pendidikan</span></a>
                    </li>
                    <li>
                            <a href="Jps" class="btn btn-default btn-lg"> <span class="network-name">Jurnal Pribadi Siswa</span></a>
                    </li>
                    <li>
                            <a href="Jt" class="btn btn-default btn-lg"><span class="network-name">Jenis Tinggal</span></a>
                    </li>
                    <li>
                            <a href="Keckom" class="btn btn-default btn-lg"> <span class="network-name">Kecakapan Kompensatoris</span></a>
                    </li>
                    
                    
                    
                    
                    
                    




                    <!--hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
                    <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p-->
 <!--               </div>

                


                <div class="col-lg-5 col-lg-offset-0 col-sm-6">
                    <li>
                            <a href="Kes" class="btn btn-default btn-lg"> <span class="network-name">Kekuatan Siswa</span></a>
                    </li>
                    <li>
                            <a href="Kk" class="btn btn-default btn-lg"> <span class="network-name">Kebutuhan Khusus</span></a>
                    </li>
                    <li>
                            <a href="Ks" class="btn btn-default btn-lg"> <span class="network-name">Kebutuhan Siswa</span></a>
                    </li>
                    <li>
                            <a href="Kt" class="btn btn-default btn-lg"> <span class="network-name">Kelainan Tubuh</span></a>
                    </li>
                    <li>
                            <a href="Mapel" class="btn btn-default btn-lg"> <span class="network-name">Mata Pelajaran</span></a>
                    </li>
                    <li>
                            <a href="Pekerjaan" class="btn btn-default btn-lg"><span class="network-name">Pekerjaan</span></a>
                    </li>
                    <li>
                            <a href="Penghasilan" class="btn btn-default btn-lg"> <span class="network-name">Penghasilan</span></a>
                    </li>
                    <li>
                            <a href="Plk" class="btn btn-default btn-lg"> <span class="network-name">Program Layanan Kompensantoris</span></a>
                    </li>
                    <li>
                            <a href="Ppi" class="btn btn-default btn-lg"> <span class="network-name">PPI</span></a>
                    </li>
                    <li>
                            <a href="Pt" class="btn btn-default btn-lg"><span class="network-name">Personal Terlibat</span></a>
                    </li>
                    <li>
                            <a href="Relkebs" class="btn btn-default btn-lg"> <span class="network-name">Relasi Kebutuhan Khusus Siswa</span></a>
                    </li>
                    <li>
                            <a href="Relks" class="btn btn-default btn-lg"> <span class="network-name">Relasi Kepribadian Siswa</span></a>
                    </li>
                    <li>
                            <a href="Rombel" class="btn btn-default btn-lg"> <span class="network-name">Rombongan Belajar</span></a>
                    </li>
                    <li>
                            <a href="Sk" class="btn btn-default btn-lg"> <span class="network-name">Saudara Kandung</span></a>
                    </li>
                    <li>
                            <a href="Tp" class="btn btn-default btn-lg"> <span class="network-name">Tim Pengembang</span></a>
                    </li>
                    <li>
                            <a href="Uk" class="btn btn-default btn-lg"> <span class="network-name">Uraian Kegiatan</span></a>
                    </li>
                    <li>
                            <a href="Walmur" class="btn btn-default btn-lg"> <span class="network-name">Wali Murid</span></a>
                    </li>
                    <li>
                            <a href="Warganegara" class="btn btn-default btn-lg"> <span class="network-name">Warganegara</span></a>
                    </li>

                    <!--img class="img-responsive" src="assets/img/ipad.png" alt=""-->
 <!--               </div>
            </div>

        </div>
        <!-- /.container -->

 <!--   </div>



    <!-- /.content-section-a -->
    <a  name="contact"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sistem Informasi Akademik<br>by Tim Pengmas TC</h2>
                    <p class="lead">Mempermudah pencatatan data siswa dan guru</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    Persyaratan Pendaftaran Siswa <br>
                    1. Bertaqwa kepada Tuhan Yang Maha Esa<br>
                    2. Daftar2 yang sudah saya pisah pisah<br>
                    3. Silahkan diperbaiki CRUD nya dan Controlernya<br>
                    4. Menjadi warga negara yang baik dan benar<br>


                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
<!--
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                    <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
<!--
    </div>
    <!-- /.content-section-a -->
<!--
	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Start Bootstrap:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->
<!--
    </div>
    <!-- /.banner -->

    <!-- Footer -->
<!--    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js">
        

    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
