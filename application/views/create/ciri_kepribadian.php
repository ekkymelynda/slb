<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Ciri Kepribadian</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Ck/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <!-- <label>Masukkan Id Ciri Kepribadian</label> -->
                             
                            <select class="form-control" id="sel1" name="CK_ID">
                            <?php foreach ($ck as $value) {
                                $a = $value['CK_ID'] + 1;
                                echo '<option value='.$a.'>'.$a.'</option>';
                            }?>

                            </select>
                                                        
                            <!-- <input type="number" class="form-control" placeholder="Contoh: 1" name="CK_ID" > -->
                        </div>
                        <div class="form-group">
                            <label>Masukkan Keterangan Ciri Kepribadian</label>
                            <input type="text" class="form-control" placeholder="Contoh: " name="CK_KETERANGAN">
                        </div>
                        <input type="submit" name="submit" value="Buat" class="btn btn-danger pull-right">
		            </div>
		        </form>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>