<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Detail PPI</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Detail data :
                        </div>
                        <div class="panel-body">
                            <label>Kekhususan Sekunder PPI :<?php echo $PPI_KEKHUSUSANSEKUNDER ?></label><p></p>
                            <label>Standar Kurikulum PPI :<?php echo $PPI_STDKURIKULUM ?></label><p></p>
                        </div>
                        <div class="panel-footer">
                            <a align="text-right" href="<?php echo site_url('Master/Ppi'); ?>" class="btn btn-success" style="color: white;"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span> Kembali</a></span>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>