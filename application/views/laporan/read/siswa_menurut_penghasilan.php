<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Siswa Menurut Penghasilan Orang Tua</h2>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>Penghasilan</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            <?php foreach ($h->result() as $row){?>
                            </tr>
                                <td class="text-left danger">Tidak di isi</td>
                                <td class="text-left danger"><?php echo $row->A ?></td>
                                <td class="text-left danger"><?php echo $row->B ?></td>
                                <td class="text-left danger"><?php echo $row->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($i->result() as $row1){?>
                            </tr>
                                <td class="text-left warning">Kurang dari Rp. 500,000</td>
                                <td class="text-left warning"><?php echo $row1->A ?></td>
                                <td class="text-left warning"><?php echo $row1->B ?></td>
                                <td class="text-left warning"><?php echo $row1->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($j->result() as $row2){?>
                            </tr>
                                <td class="text-left success">Rp. 500,000 - Rp. 999,999</td>
                                <td class="text-left success"><?php echo $row2->A ?></td>
                                <td class="text-left success"><?php echo $row2->B ?></td>
                                <td class="text-left success"><?php echo $row2->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($k->result() as $row3){?>
                            </tr>
                                <td class="text-left info">Rp. 1,000,000 - Rp. 1,999,999</td>
                                <td class="text-left info"><?php echo $row3->A ?></td>
                                <td class="text-left info"><?php echo $row3->B ?></td>
                                <td class="text-left info"><?php echo $row3->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($l->result() as $row4){?>
                            </tr>
                                <td class="text-left danger">Rp. 2,000,000 - Rp. 4,999,999</td>
                                <td class="text-left danger"><?php echo $row4->A ?></td>
                                <td class="text-left danger"><?php echo $row4->B ?></td>
                                <td class="text-left danger"><?php echo $row4->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($m->result() as $row5){?>
                            </tr>
                                <td class="text-left warning">Rp. 5,000,000 - Rp. 20,000,000</td>
                                <td class="text-left warning"><?php echo $row5->A ?></td>
                                <td class="text-left warning"><?php echo $row5->B ?></td>
                                <td class="text-left warning"><?php echo $row5->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($n->result() as $row6){?>
                            </tr>
                                <td class="text-left success">Lebih dari Rp. 20,000,000</td>
                                <td class="text-left success"><?php echo $row6->A ?></td>
                                <td class="text-left success"><?php echo $row6->B ?></td>
                                <td class="text-left success"><?php echo $row6->T ?></td>
                            </tr>
                            <?php }?>
                            <?php foreach ($o->result() as $row7){?>
                            </tr>
                                <td class="text-left success">Total</td>
                                <td class="text-left success"><?php echo $row7->A ?></td>
                                <td class="text-left success"><?php echo $row7->B ?></td>
                                <td class="text-left success"><?php echo $row7->T ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
</body>