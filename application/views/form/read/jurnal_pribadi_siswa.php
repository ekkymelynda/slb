<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Jurnal Pribadi Siswa</h2>
                    <a align="text-right" href="<?php  echo site_url('Master/Form/Jps/view_create_data');?>" class="btn btn-success btn-lg" role="button" style="float: right;">Jurnal Buku Pribadi Siswa</a></span>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>Tanggal</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>B/C</th>
                            <th>Detail</th>
                            <th>Ubah</th>
                            <th>Hapus</th>
                        </thead>
                        <tbody>
                            </tr>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"><a class="btn btn-info btn-xs" href="<?php  echo site_url('Detail_Form/buku_pribadi_siswa');?>"><span class="glyphicon glyphicon-remove"></span> Detail</a></td>
                                <td class="text-left"><a class="btn btn-warning btn-xs" href="<?php  echo site_url('Update_Form/buku_pribadi_siswa');?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a> 
                                <td class="text-left"><a class="btn btn-danger btn-xs" href="<?php  echo site_url('Delete_Form/buku_pribadi_siswa');?>"><span class="glyphicon glyphicon-remove"></span> Hapus</a></td>
                            </tr>
                        </tbody>
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