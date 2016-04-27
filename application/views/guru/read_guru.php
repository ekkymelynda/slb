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
    <title>Guru | Sistem Akademik</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css"><?php include('assets/css/ayokerja.css') ?></style>

</head><!--/head-->

<body>

    <section id="feature" class="transparent-bg">
        

        <div id="container">

            <div class="center wow fadeInDown">
                <h2>&nbspTabel Guru</h2>
            </div>
        </div>
            <div id="container">
                <br>
                <div id="body">
                <a align="text-right" href="Welcome" class="btn btn-primary btn-lg" role="button" >Home</a></span>
                </div>        
                
                
                <br>
                <div id="body">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Id Jenjang Pendidikan</th>
                            <th>NIP</th>
                            <th>NUPTK</th>
                            <th>Nama</th>
                            <th>Gelar</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Sertifikasi</th>
                            <th>Kepegawaian</th>
                            <th>Jabatan</th>
                            <th>TMT</th>
                            <th>Tugas Tambahan</th>
                            <th>Mengajar</th>
                            <th>Jam (PerMinggu)</th>
                            <th>No. Ijazah</th>
                            <th>No. Sertifikasi</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <?php foreach ($data as $d) { ?>
                        <tbody>
                            </tr>
                                <td class="text-left"><?php echo $d['GR_ID'] ?></td>
                                <td class="text-left"><?php echo $d['JP_ID'] ?></td>
                                <td class="text-left"><?php echo $d['GR_NIP'] ?></td>
                                <td class="text-left"><?php echo $d['GR_NUPTK'] ?></td>
                                <td class="text-left"><?php echo $d['GR_NAMA'] ?></td>
                                <td class="text-left"><?php echo $d['GR_GELAR'] ?></td>
                                <td class="text-left"><?php echo $d['GR_JK'] ?></td>
                                <td class="text-left"><?php echo $d['GR_JURUSAN'] ?></td>
                                <td class="text-left"><?php echo $d['GR_SERTIFIKASI'] ?></td>
                                <td class="text-left"><?php echo $d['GR_KEPEGAWAIAN'] ?></td>
                                <td class="text-left"><?php echo $d['GR_JABATAN'] ?></td>
                                <td class="text-left"><?php echo $d['GR_TMTKERJA'] ?></td>
                                <td class="text-left"><?php echo $d['GR_TGSTAMBAH'] ?></td>
                                <td class="text-left"><?php echo $d['GR_MENGAJAR'] ?></td>
                                <td class="text-left"><?php echo $d['GR_JAMPERMGG'] ?></td>
                                <td class="text-left"><?php echo $d['GR_NOIJAZAH'] ?></td>
                                <td class="text-left"><?php echo $d['GR_NOSERTIFIKASI'] ?></td>

                                <td class="text-left"><a class='btn btn-info btn-xs' href="<?php echo base_url()."index.php/guru/view_update_data/".$d['GR_ID']; ?>"><span class="glyphicon glyphicon-edit"></span>Ubah</a> 
                                <td class="text-left"><a href="<?php echo base_url()."index.php/guru/delete/".$d['GR_ID']; ?>" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span>Hapus</a></td>
                            </tr>
                        </tbody>
                        <?php } ?>

                    </table>
                </div>
                <br>
                <a align="text-right" href="<?php echo base_url()."index.php/guru/view_create_data"; ?>" class="btn btn-primary btn-lg" role="button" ><!--style="float: right;"-->Buat Guru</a></span>
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
