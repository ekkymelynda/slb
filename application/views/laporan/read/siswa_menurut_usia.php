<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Siswa Menurut Usia</h2>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>Usia</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            <?php foreach ($h->result() as $row){?>
                            </tr>
                                <td class="text-left danger">7 Tahun</td>
                                <td class="text-left danger"><?php echo $row->A ?></td>
                                <td class="text-left danger"><?php echo $row->B ?></td>
                                <td class="text-left danger"><?php echo $row->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($i->result() as $row1){?>
                            </tr>
                                <td class="text-left warning">7 - 15 Tahun</td>
                                <td class="text-left warning"><?php echo $row1->A ?></td>
                                <td class="text-left warning"><?php echo $row1->B ?></td>
                                <td class="text-left warning"><?php echo $row1->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($j->result() as $row2){?>
                            </tr>
                                <td class="text-left success">15 Tahun </td>
                                <td class="text-left success"><?php echo $row2->A ?></td>
                                <td class="text-left success"><?php echo $row2->B ?></td>
                                <td class="text-left success"><?php echo $row2->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($k->result() as $row3){?>
                            </tr>
                                <td class="text-left info">Total</td>
                                <td class="text-left info"><?php echo $row3->A ?></td>
                                <td class="text-left info"><?php echo $row3->B ?></td>
                                <td class="text-left info"><?php echo $row3->T ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
</body>