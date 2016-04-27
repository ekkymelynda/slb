<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Pendaftar | Sistem Akademik</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css"><?php include('assets/css/ayokerja.css') ?></style>




    <!--meta charset="utf-8">
    <title>Data Pendaftar</title>

    <style type="text/css"><?php include('view_pendaftar.css') ?></style-->
</head>
<body>
<section id="feature" class="transparent-bg">
    

    <div id="container">
        <div class="center wow fadeInDown">
            <h2>&nbspData Pendaftar</h2>
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
                     <th> No. </th>
                     <th> Nama </th>
                     <th> JK </th>
                     <th> NIS </th>
                     <th> NISN </th>
                     <!--<th> Rombel </th>-->
                     <th> Tempat Lahir </th>
                     <th> Tanggal Lahir </th>
                     <th> NIK </th>
                     <th> Agama </th>
                     <th> Option </th>
                 </thead>
                 <tbody>
                    <?php
                    $no = 1;
                    foreach ($hasil as $data):
                    ?>
            </tr>
                 <td class="text-left"> <?php echo $data->SW_ID; ?> </td>
                 <td class="text-left"> <?php echo $data->SW_NAMA; ?> </td>
                 <td class="text-left"> <?php echo $data->SW_JK; ?> </td>
                 <td class="text-left"> <?php echo $data->NIS; ?> </td>
                 <td class="text-left"> <?php echo $data->NISN; ?> </td>
                 <!--<td> <?php echo $data->RM_KELAS; ?> </td>-->
                 <!--<td></td>-->
                 <td class="text-left"> <?php echo $data->SW_TEMPATLAHIR; ?> </td>
                 <td class="text-left"> <?php echo $data->SW_TGLLAHIR; ?> </td>
                 <td class="text-left"> <?php echo $data->NIK; ?> </td>
                 <!--<td> <?php echo $data->AG_NAMA; ?> </td>-->
                 <td class="text-left"><?php echo $data->AG_NAMA; ?></td>
                

                <td class="text-center">
                    <a class='btn btn-warning btn-xs' href="Pendaftar/Con_pendaftar2/detailpendaftar/<?php echo $data->SW_ID; ?>"><span class="glyphicon glyphicon-edit"></span>Detail</a> 
                    <a class='btn btn-info btn-xs' href="Pendaftar/Con_pendaftar2/updatependaftar/<?php echo $data->SW_ID; ?>"><span class="glyphicon glyphicon-edit"></span>Ubah</a> 
                <!--td class="text-left"-->
                    <a href="#mymodal" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span>Hapus</a></td>
                            
            </tr>
            <?php
            $no++;
            endforeach;
            ?>
        </tbody>
    </table>
    </div>
</div>

<div id="body">
    <a align="text-right" href="Con_pendaftar/tambahpendaftar" class="btn btn-primary btn-lg" role="button" >Tambah Siswa</a></span> 
        <br>
    
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





    <!--div id="body">

        <?php echo anchor('welcome', 'Home'); ?>
        

        <?php
        if (empty($hasil)) {
         echo "Tidak ada data siswa";
        }
        else {
        ?>
       
       | 
        
        <?php echo anchor('Con_pendaftar2/tambahpendaftar', 'Tambah Data'); ?>
        <br>

        <table id="t01">
        <tr > <!--bgcolor="FF8844"> -->
         <!--th> No. </th>
         <th> Nama </th>
         <th> JK </th>
         <th> NIS </th>
         <th> NISN </th>
         <!--<th> Rombel </th>-->
         <!--th> Tempat Lahir </th>
         <th> Tanggal Lahir </th>
         <th> NIK </th>
         <th> Agama </th>
         <th> Option </th>
        </tr>
        <?php
        $no = 1;
        foreach ($hasil as $data):
        ?>
        <tr>
         <td> <?php echo $data->SW_ID; ?> </td>
         <td> <?php echo $data->SW_NAMA; ?> </td>
         <td> <?php echo $data->SW_JK; ?> </td>
         <td> <?php echo $data->NIS; ?> </td>
         <td> <?php echo $data->NISN; ?> </td>
         <!--<td> <?php echo $data->RM_KELAS; ?> </td>-->
         <!--<td></td>-->
         <!--td> <?php echo $data->SW_TEMPATLAHIR; ?> </td>
         <td> <?php echo $data->SW_TGLLAHIR; ?> </td>
         <td> <?php echo $data->NIK; ?> </td>
         <!--<td> <?php echo $data->AG_NAMA; ?> </td>-->
         <!--td><?php echo $data->AG_NAMA; ?></td>
          <td> <a href="Con_pendaftar/detailpendaftar/">Detail</a> | <a href="Con_pendaftar/updatependaftar/<?php echo $data->SW_ID; ?>"> Ubah </a> | <a href="Con_pendaftar/hapusdata/<?php echo $data->SW_ID; ?>"> Hapus </a> | <a href="Con_pendaftar/proseskesiswa/<?php echo $data->SW_ID; ?>"> Proses </a> </td>
        </tr>
        <?php
        $no++;
        endforeach;
        ?>
        </table>
        <?php
        }

        ?> 

    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html-->
