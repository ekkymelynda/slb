<!-- Header -->

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
    <title>Sistem Akademik</title>
    <link rel="icon" href="<?php echo base_url(); ?>asset/logo-baru.png" type="image/x-icon">

    <!-- CSS -->
    	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/dist/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/dist/sb-admin-2.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/dist/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/sweetalert/dist/sweetalert.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/select2/select2.css" media="screen" rel="stylesheet" type="text/css"/>


    <!-- Javascript -->
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dist/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dist/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/dist/sweetalert.min.js"></script>

    <!-- Fonts -->
    	<link href="<?php echo base_url(); ?>assets/fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
</head>

<body>
	<header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('Nav/profil_sekolah'); ?>"><span><img src="<?php echo base_url(); ?>asset/logo-baru.png" width="60px" height="60px"></span> Sistem Akademik</a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <!--<li class=""><a href="<?php echo site_url('Nav/predashboard'); ?>">Dasboard</a></li>-->
                        <li class=""><a href="<?php echo site_url('Nav/form'); ?>">Form</a></li>
                        <li class=""><a href="<?php echo site_url('Nav/laporan'); ?>">Laporan</a></li>
                        <!--<li class=""><a href="<?php echo site_url('Nav/grafik'); ?>">Grafik</a></li>-->
                        <li class=""><a href="<?php echo site_url('Nav/pendaftaran'); ?>">Pendaftaran</a></li>
                        <li class=""><a href="<?php echo site_url('welcome'); ?>">Keluar</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
</body>
