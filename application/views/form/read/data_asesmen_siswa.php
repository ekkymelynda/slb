<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Data Asesmen Siswa</h2>
                    <a align="text-right" href="<?php  echo site_url('Create_Form/data_asesmen_siswa1');?>" class="btn btn-success btn-lg" role="button" style="float: right;">Buat Data Asesmen Siswa</a></span>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>Tahun Pelajaran</th>
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
                                <td class="text-left"></td>
                                <td class="text-left"><a class="btn btn-info btn-xs" href="<?php  echo site_url('Detail_Form/data_asesmen_siswa');?>"><span class="glyphicon glyphicon-remove"></span> Detail</a></td>
                                <td class="text-left"><a class="btn btn-warning btn-xs" href="<?php  echo site_url('Update_Form/data_asesmen_siswa1');?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a> 
                                <td class="text-left"><a class="btn btn-danger btn-xs" href="<?php  echo site_url('Delete_Form/data_asesmen_siswa');?>"><span class="glyphicon glyphicon-remove"></span> Hapus</a></td>
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