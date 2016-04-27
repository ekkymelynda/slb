<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Tabel Personal Terlibat</h2>
                    <a align="text-right" href="<?php echo site_url('Create/personal_terlibat'); ?>" class="btn btn-success btn-lg" role="button" style="float: right;">Buat Personal Terlibat</a></span>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Id PPI</th>
                            <th>Jenis</th>
                            <th>Frekuensi</th>
                            <th>Lokasi</th>
                            <th>Ubah</th>
                            <th>Hapus</th>
                        </thead>
                        <?php foreach ($data as $d) {?>
                        <tbody>
                            </tr>
                                <td class="text-left"><?php echo $d['PT_ID'] ?></td>
                                <td class="text-left"><?php echo $d['PPI_ID'] ?></td>
                                <td class="text-left"><?php echo $d['PT_JENISPELAYANAN'] ?></td>
                                <td class="text-left"><?php echo $d['PT_FREKUENSI'] ?></td>
                                <td class="text-left"><?php echo $d['PT_LOKASI'] ?></td>
                                <td class="text-left"><a class="btn btn-warning btn-xs" href="<?php echo site_url('Master/Pt/view_update_data/' . $d['PT_ID']); ?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
                                <td class="text-left"><a class="btn btn-danger btn-xs" href="<?php echo site_url('Master/Pt/view_delete/' . $d['PT_ID']); ?>"><span class="glyphicon glyphicon-remove"></span> Hapus</a></td>
                            </tr>
                        </tbody>
                        <?php }
?>
                    </table>
                </div>
                <div class=".col-md-3 .col-md-offset-3">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li>
                            <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
</body>