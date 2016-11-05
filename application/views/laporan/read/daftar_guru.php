<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Daftar Guru</h2>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Gelar</th>
                            <th>Tamat Kerja</th>
                            <th>Sertifikasi</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                        </thead>
                        <?php foreach ($h->result() as $row){?>
                        <tbody>
                            </tr>
                                <td class="text-left"><?php echo $row->GR_ID ?></td>
                                <td class="text-left"><?php echo $row->GR_NIP ?></td>
                                <td class="text-left"><?php echo $row->GR_NAMA ?></td>
                                <td class="text-left"><?php echo $row->GR_GELAR ?></td>
                                <td class="text-left"><?php echo $row->GR_TMTKERJA ?></td>
                                <td class="text-left"><?php echo $row->GR_SERTIFIKASI ?></td>
                                <td class="text-left"><?php echo $row->GR_JURUSAN ?></td>
                                <td class="text-left"><?php echo $row->GR_KEPEGAWAIAN ?></td>
                            </tr>                            
                        <?php }?>
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