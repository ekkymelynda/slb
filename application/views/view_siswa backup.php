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
    <title>Tabel Siswa | Sistem Akademik</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    
</head><!--/head-->

<body>

	<section id="feature" class="transparent-bg">
		<div class="center wow fadeInDown">
			 <h2>Tabel Siswa</h2>
		</div>

	</section>


if (empty($hasil)) {
 echo "Tidak ada data siswa";
}
else {
?>
<h3> Daftar siswa </h3>
<?php echo anchor('Con_pendaftar/tambahpendaftar', '+ Tambah Data'); ?>
<table>
<tr bgcolor="FF8844">
 <th> No. </th>
 <th> Nama </th>
 <th> JK </th>
 <th> NIS </th>
 <th> NISN </th>
 <th> Rombel </th>
 <th> Tempat Lahir </th>
 <th> Tanggal Lahir </th>
 <th> NIK </th>
 <th> Agama </th>
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
 <td></td>
 <td> <?php echo $data->SW_TEMPATLAHIR; ?> </td>
 <td> <?php echo $data->SW_TGLLAHIR; ?> </td>
 <td> <?php echo $data->NIK; ?> </td>
 <!--<td> <?php echo $data->AG_NAMA; ?> </td>-->
 <td></td>
  <td> <a href="Con_pendaftar/updatedata/<?php echo $data->SW_ID; ?>"> Ubah </a> | <a href="Con_pendaftar/hapusdata/<?php echo $data->SW_ID; ?>"> Hapus </a> </td>
</tr>
<?php
$no++;
endforeach;
?>
</table>
<?php
}
?>
