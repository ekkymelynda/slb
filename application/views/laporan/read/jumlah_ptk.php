<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Jumlah Pendidik dan Tenaga Kependidikan</h2>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total</th>
                        </thead>
                        <?php foreach ($h->result() as $row){?>
                        <tbody>
                            </tr>
                                <td class="text-left danger"><?php echo $row->L ?></td>
                                <td class="text-left danger"><?php echo $row->P ?></td>
                                <td class="text-left danger"><?php echo $row->T ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
</body>