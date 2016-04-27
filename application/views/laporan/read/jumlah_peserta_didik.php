<!-- Content -->

<body>
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center wow fadeInDown">
                <div class="center wow fadeInDown">
                    <h2>Jumlah Peserta Didik</h2>
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-hover">
                        <thead>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            </tr>
                                <?php echo '<td class="text-left danger">'.$siswa_laki.'</td>'; ?>
                                <?php echo '<td class="text-left danger">'.$siswa_perempuan.'</td>'; ?>
                                <?php $total = $siswa_laki + $siswa_perempuan; ?>
                                <?php echo '<td class="text-left danger">'.$total.'</td>'; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->
</body>