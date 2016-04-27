
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
    <title>Jurnal Materi | Sistem Akademik</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css"><?php include('assets/css/ayokerja.css') ?></style>

</head><!--/head-->

<body>

    <section id="feature" class="transparent-bg">
        <div id="container">

            <div class="center wow fadeInDown">
                <h2>&nbspTabel Jurnal Materi</h2>
            </div>
        </div>
            <div id ="container">
                <br>
                <div id="body">
                <a align="text-right" href="Welcome" class="btn btn-primary btn-lg" role="button" >Home</a></span>
                </div>        
                
                
                <br>
                <div id="body">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>Jurnal Materi ID</th>
                            <th>Mata Pelajaran ID</th>
                            <th>Guru ID</th>
                            <th>Jurnal Materi Tahun Ajar</th>
                            <th>Jurnal Materi Semester</th>
                            <!--th>Edit</th-->
                            <th>Option</th>
                        </thead>
                        <tbody>
                        	<?php
							$no = 1;
							foreach ($hasil as $data):
							?>
                            </tr>
                                <td class="text-left"><?php echo $data->JM_ID; ?></td>
                                <td class="text-left"><?php echo $data->MAPEL_ID; ?></td>
                                <td class="text-left"><?php echo $data->GR_ID; ?></td>
                                <td class="text-left"><?php echo $data->JM_THNAJARAN; ?></td>
                                <td class="text-left"><?php echo $data->JM_SEMESTER; ?></td>
                                <td class="text-left"><a class='btn btn-info btn-xs' href=""><span class="glyphicon glyphicon-edit"></span>Ubah</a> 
                                <!--td class="text-left"--><a href="#mymodal" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span>Hapus</a></td>
                            </tr>
                            <?php
                            $no++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <a align="text-right" href="Con_jurnal/tambahjurnalmateri" class="btn btn-primary btn-lg" role="button" ><!--style="float: right;"-->Buat Jurnal Materi</a></span>
                <h1></h1>
            </div>

            <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Apakah Anda yakin ingin menghapus data?</h4>
                    </div>
                    <div class="modal-body">
                      <p>Lalalalala Wew</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Batalkan</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div><!--/.container-->
    </section><!--/#feature-->

</body>
</html>