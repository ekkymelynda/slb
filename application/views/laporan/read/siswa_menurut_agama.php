<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Siswa Menurut Agama</h2>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>Agama</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total</th>
                        </thead>
                        <?php foreach ($h->result() as $row1){
                            foreach ($i->result() as $row2){
                                foreach ($j->result() as $row3){?>
                        <tbody>
                            </tr>
                                <td class="text-left danger">Islam</td>
                                <td class="text-left danger"><?php echo $row2->A ?></td>
                                <td class="text-left danger"><?php echo $row3->A ?></td>
                                <td class="text-left danger"><?php echo $row1->A ?></td>
                            </tr>
                            </tr>
                                <td class="text-left warning">Kristen</td>
                                <td class="text-left warning"><?php echo $row2->B ?></td>
                                <td class="text-left warning"><?php echo $row3->B ?></td>
                                <td class="text-left warning"><?php echo $row1->B ?></td>
                            </tr>
                            </tr>
                                <td class="text-left success">Katholik</td>
                                <td class="text-left success"><?php echo $row2->C ?></td>
                                <td class="text-left success"><?php echo $row3->C ?></td>
                                <td class="text-left success"><?php echo $row1->C ?></td>
                            </tr>
                            </tr>
                                <td class="text-left info">Hindu</td>
                                <td class="text-left info"><?php echo $row2->D ?></td>
                                <td class="text-left info"><?php echo $row3->D ?></td>
                                <td class="text-left info"><?php echo $row1->D ?></td>
                            </tr>
                            </tr>
                                <td class="text-left danger">Budha</td>
                                <td class="text-left danger"><?php echo $row2->E ?></td>
                                <td class="text-left danger"><?php echo $row3->E ?></td>
                                <td class="text-left danger"><?php echo $row1->E ?></td>
                            </tr>
                            </tr>
                                <td class="text-left warning">Konghucu</td>
                                <td class="text-left warning"><?php echo $row2->F ?></td>
                                <td class="text-left warning"><?php echo $row3->F ?></td>
                                <td class="text-left warning"><?php echo $row1->F ?></td>
                            </tr>
                            </tr>
                                <td class="text-left success">Lainnya</td>
                                <td class="text-left success"><?php echo $row2->G ?></td>
                                <td class="text-left success"><?php echo $row3->G ?></td>
                                <td class="text-left success"><?php echo $row1->G ?></td>
                            </tr>
                            </tr>
                                <td class="text-left info">Total</td>
                                <td class="text-left info"><?php echo $row2->T ?></td>
                                <td class="text-left info"><?php echo $row3->T ?></td>
                                <td class="text-left info"><?php echo $row1->T ?></td>
                            </tr>
                            <?php }}}?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
</body>