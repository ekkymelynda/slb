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
    <title>Warganegara</h1> | Sistem Akademik</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    
</head><!--/head-->

<body>

    <section id="feature" class="transparent-bg">
    	<div class="container">

           	<div class="center wow fadeInDown">
                <h2>Buat Data Warganegara</h2>
           	</div>

           	<div class="row">
				<form role="form" method="post" action= "<?php echo base_url()."index.php/Warganegara/create_data"; ?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Warganegara</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="KWN_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jenis Warganegara</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="KWN_JENIS" >
                        </div>
                        <input type="submit" name="submit" value="Buat" class="btn btn-info pull-right">
		            </div>
		        </form>
        	</div><!--/.row-->

        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>