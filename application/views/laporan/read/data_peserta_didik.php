<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Data Peserta Didik</h2>
                </div>
                <!--<div class="btn-group">
                  <button type="button" class="btn btn-danger">Action</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>-->
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <!--<th>No</th>-->
                            <th>Nama</th>
                            <th>JK</th>
                            <th>NIS</th>
                            <th>NISN</th>
                            <!--<th>Detail</th>-->
                        </thead>
                        <tbody>
                            <?php foreach ($h->result() as $row){?>
                            </tr>
                                <!--<td class="text-left"><?php echo $row->SW_ID ?></td>-->
                                <td class="text-left"><?php echo $row->SW_NAMA ?></td>
                                <td class="text-left"><?php echo $row->SW_JK ?></td>
                                <td class="text-left"><?php echo $row->NIS ?></td>
                                <td class="text-left"><?php echo $row->NISN ?></td>
                                <!--<td class="text-left"><a class="btn btn-info btn-xs" href="<?php echo base_url(); ?>Detail_Laporan/data_peserta_didik/<?php echo $row->SW_ID;?>"><span class="glyphicon glyphicon-remove"></span> Detail</a></td>-->
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