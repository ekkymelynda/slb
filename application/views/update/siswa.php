<!-- Content -->

<body>
<!-- Feature -->
<section id="feature" class="transparent-bg">
	<!-- Container -->
	<div class="container">
		<div class="center wow fadeInDown">
			<h2>Ubah Data Pendaftar</h2>
		</div>
		<!-- Row -->
		<div class="row">
			<form role="form" method="post" action="<?php echo site_url('Master/Siswa/update_data'); ?>">
				<div class="col-lg-6">
					<div class="form-group">
						<label>ID Siswa: <?php echo $SW_ID ?></label>
						<input name="SW_ID" type="number" class="form-control" placeholder=""
							   value="<?php echo $SW_ID ?>">
					</div>
					<div class="form-group">
						<label>Id Kewarganegaraan : <?php echo $KWN_ID ?></label>
						<p></p>
						<input name="KWN_ID" type="number" class="form-control" placeholder=""
							   value="<?php echo $KWN_ID ?>">
					</div>
					<div class="form-group">
						<label>Id Alat Transportasi : <?php echo $AT_ID ?></label>
						<p></p>
						<input name="AT_ID" type="number" class="form-control" placeholder=""
							   value="<?php echo $AT_ID ?>">
					</div>
					<div class="form-group">
						<label>Id PPI : <?php echo $PPI_ID ?></label>
						<p></p>
						<input name="PPI_ID" type="number" class="form-control" placeholder=""
							   value="<?php echo $PPI_ID ?>">
					</div>
					<div class="form-group">
						<label>Id Agama : <?php echo $AG_ID ?></label>
						<p></p>
						<input name="AG_ID" type="number" class="form-control" placeholder=""
							   value="<?php echo $AG_ID ?>">
					</div>
					<div class="form-group">
						<label>Id Jenis Tinggal : <?php echo $JT_ID ?></label>
						<p></p>
						<input name="JT_ID" type="number" class="form-control" placeholder=""
							   value="<?php echo $JT_ID ?>">
					</div>
					<div class="form-group">
						<label>Id Pendaftar Nama : <?php echo $PENDAFTAR_NAMA ?></label>
						<p></p>
						<input name="PENDAFTAR_NAMA" type="text" class="form-control" placeholder=""
							   value="<?php echo $PENDAFTAR_NAMA ?>">
					</div>
					<div class="form-group">
						<label>Pendaftar Status : <?php echo $PENDAFTAR_STATUS ?></label>
						<p></p>
						<input name="PENDAFTAR_STATUS" type="text" class="form-control" placeholder=""
							   value="<?php echo $PENDAFTAR_STATUS ?>">
					</div>
					<div class="form-group">
						<label>Pendaftar tELEPON : <?php echo $PENDAFTAR_TELP ?></label>
						<p></p>
						<input name="PENDAFTAR_TELP" type="text" class="form-control" placeholder=""
							   value="<?php echo $PENDAFTAR_TELP ?>">
					</div>
					<div class="form-group">
						<label>Pendaftar aLAMAT : <?php echo $PENDAFTAR_ALAMAT ?></label>
						<p></p>
						<input name="PENDAFTAR_ALAMAT" type="text" class="form-control" placeholder=""
							   value="<?php echo $PENDAFTAR_ALAMAT ?>">
					</div>

					<div class="form-group">
						<label>Nama Pendaftar: <?php echo $SW_NAMA ?></label>
						<p></p>
						<input name="SW_NAMA" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_NAMA ?>">
					</div>
					<div class="form-group">
						<label>Alamat Pendaftar: <?php echo $SW_ALAMAT ?></label>
						<p></p>
						<input name="SW_ALAMAT" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMAT ?>">
					</div>
					<div class="form-group">
						<label>Telepon Pendaftar: <?php echo $SW_TELP ?></label>
						<p></p>
						<input name="SW_TELP" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_TELP ?>">
					</div>
					<div class="form-group">
						<label>Nama Panggilan Pendaftar: <?php echo $SW_NAMAPANGGIL ?></label>
						<p></p>
						<input name="SW_NAMAPANGGIL" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_NAMAPANGGIL ?>">
					</div>
					<div class="form-group">
						<label>Tempat Lahir Pendaftar: <?php echo $SW_TEMPATLAHIR ?></label>
						<p></p>
						<input name="SW_TEMPATLAHIR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_TEMPATLAHIR ?>">
					</div>
					<div class="form-group">
						<label>Tempat Lahir Pendaftar: <?php echo $SW_BERATLAHIR ?></label>
						<p></p>
						<input name="SW_BERATLAHIR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_BERATLAHIR ?>">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir Pendaftar: <?php echo $SW_TGLLAHIR ?></label>
						<p></p>
						<input name="SW_TGLLAHIR" type="date" class="form-control" placeholder=""
							   value="<?php echo $SW_TGLLAHIR ?>">
					</div>
					<div class="form-group">
						<label>Usia Permasuk Pendaftar: <?php echo $SW_USIAPERMASUK ?></label>
						<p></p>
						<input name="SW_USIAPERMASUK" type="number" class="form-control" placeholder=""
							   value="<?php echo $SW_USIAPERMASUK ?>">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin Pendaftar : <?php echo $SW_JK ?></label>
						<p></p>
						<input name="SW_JK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_JK ?>">
					</div>
					<div class="form-group">
						<label>Bahasa di Rumah : <?php echo $SW_BAHASARUMAH ?></label>
						<p></p>
						<input name="SW_BAHASARUMAH" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_BAHASARUMAH ?>">
					</div>
					<div class="form-group">
						<label>Anak Ke- : <?php echo $SW_ANAKKE ?></label>
						<p></p>
						<input name="SW_ANAKKE" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ANAKKE ?>">
					</div>
					<div class="form-group">
						<label>Jumlah Bersaudara Pendaftar: <?php echo $SW_JMLBERSDR ?></label>
						<p></p>
						<input name="SW_JMLBERSDR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_JMLBERSDR ?>">
					</div>
					<div class="form-group">
						<label>Tingkat Sekolah Asal Pendaftar : <?php echo $SW_TINGKATASALSEKOLAH ?></label>
						<p></p>
						<input name="SW_TINGKATASALSEKOLAH" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_TINGKATASALSEKOLAH ?>">
					</div>
					<div class="form-group">
						<label>Nama Sekolah Pendaftar : <?php echo $SW_NAMAASALSEKOLAH ?></label>
						<p></p>
						<input name="SW_NAMAASALSEKOLAH" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_NAMAASALSEKOLAH ?>">
					</div>
					<div class="form-group">
						<label>Tahun Masuk Sekolah Asal Pendaftar : <?php echo $SW_ASALSEKTHNMASUK ?></label>
						<p></p>
						<input name="SW_ASALSEKTHNMASUK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ASALSEKTHNMASUK ?>">
					</div>
					<div class="form-group">
						<label>Tahun Lulus Sekolah Asal Pendaftar : <?php echo $SW_ASALSEKTHNLULUS ?></label>
						<p></p>
						<input name="SW_ASALSEKTHNLULUS" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ASALSEKTHNLULUS ?>">
					</div>
					<div class="form-group">
						<label>Alamat Sekolah Asal Pendaftar: <?php echo $SW_ALAMATASALSEK ?></label>
						<p></p>
						<input name="SW_ALAMATASALSEK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMATASALSEK ?>">
					</div>
					<div class="form-group">
						<label>Aktivitas Yang Disukai Pendaftar : <?php echo $SW_AKTIVSUKA ?></label>
						<p></p>
						<input name="SW_AKTIVSUKA" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_AKTIVSUKA ?>">
					</div>
					<div class="form-group">
						<label>Lama Kandungan (dalam Bulan) Pendaftar: <?php echo $SW_LAMAKANDUNGANBLN ?></label>
						<p></p>
						<input name="SW_LAMAKANDUNGANBLN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_LAMAKANDUNGANBLN ?>">
					</div>
					<div class="form-group">
						<label>Lama Kandungan (dalam Hari) Pendaftar : <?php echo $SW_LAMAKANDUNGANHARI ?></label>
						<p></p>
						<input name="SW_LAMAKANDUNGANHARI" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_LAMAKANDUNGANHARI ?>">
					</div>
					<div class="form-group">
						<label>Keadaan Kandungan Pendaftar: <?php echo $SW_KEADAANKANDUNGAN ?></label>
						<p></p>
						<input name="SW_KEADAANKANDUNGAN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_KEADAANKANDUNGAN ?>">
					</div>
					<div class="form-group">
						<label>Keadaan Lahir Pendaftar: <?php echo $SW_KEADAANLAHIR ?></label>
						<p></p>
						<input name="SW_KEADAANLAHIR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_KEADAANLAHIR ?>">
					</div>
					<div class="form-group">
						<label>Proses Lahir Pendaftar : <?php echo $SW_PROSESLAHIR ?></label>
						<p></p>
						<input name="SW_PROSESLAHIR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PROSESLAHIR ?>">
					</div>
					<div class="form-group">
						<label>Yang Membantu Kelahiran Pendaftar : <?php echo $SW_YGMEMBANTULAHIR ?></label>
						<p></p>
						<input name="SW_YGMEMBANTULAHIR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_YGMEMBANTULAHIR ?>">
					</div>
					<div class="form-group">
						<label>Berat Lahir Pendaftar : <?php echo $SW_BERATANAK ?></label>
						<p></p>
						<input name="SW_BERATANAK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_BERATANAK ?>">
					</div>
					<div class="form-group">
						<label>Panjang Lahir Pendaftar: <?php echo $SW_PANJANGLAHIR ?></label>
						<p></p>
						<input name="SW_PANJANGLAHIR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PANJANGLAHIR ?>">
					</div>
					<div class="form-group">
						<label>Usia Ibu Saat Lahir Pendaftar : <?php echo $SW_USIAIBUSAATLAHIR ?></label>
						<p></p>
						<input name="SW_USIAIBUSAATLAHIR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_USIAIBUSAATLAHIR ?>">
					</div>
					<div class="form-group">
						<label>Berat Anak Pendaftar : <?php echo $SW_BERATANAK ?></label>
						<p></p>
						<input name="SW_BERATANAK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_BERATANAK ?>">
					</div>
					<div class="form-group">
						<label>Panjang Anak Pendaftar : <?php echo $SW_PANJANGANAK ?></label>
						<p></p>
						<input name="SW_PANJANGANAK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PANJANGANAK ?>">
					</div>
					<div class="form-group">
						<label>Panjang Anak Pendaftar : <?php echo $SW_PANJANGANAK ?></label>
						<p></p>
						<input name="SW_PANJANGANAK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PANJANGANAK ?>">
					</div>
					<div class="form-group">
						<label>Golongan Darah Pendaftar : <?php echo $SW_GOLDAR ?></label>
						<p></p>
						<input name="SW_GOLDAR" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_GOLDAR ?>">
					</div>
					<div class="form-group">
						<label>Lama Minum ASI Pendaftar : <?php echo $SW_LAMAMINUMASI ?></label>
						<p></p>
						<input name="SW_LAMAMINUMASI" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_LAMAMINUMASI ?>">
					</div>
					<div class="form-group">
						<label>Dua Bulan Awal Pendaftar : <?php echo $SW_DUABLNAWAL ?></label>
						<p></p>
						<input name="SW_DUABLNAWAL" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_DUABLNAWAL ?>">
					</div>
					<div class="form-group">
						<label>Makanan Tambahan Pendaftar : <?php echo $SW_MAKANANTAMBAHAN ?></label>
						<p></p>
						<input name="SW_MAKANANTAMBAHAN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_MAKANANTAMBAHAN ?>">
					</div>
					<div class="form-group">
						<label>Alergi Pendaftar : <?php echo $SW_ALERGI ?></label>
						<p></p>
						<input name="SW_ALERGI" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALERGI ?>">
					</div>
					<div class="form-group">
						<label>Penglihatan Pendaftar : <?php echo $SW_PENGLIHATAN ?></label>
						<p></p>
						<input name="SW_PENGLIHATAN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PENGLIHATAN ?>">
					</div>
					<div class="form-group">
						<label>Pendengaran Pendaftar : <?php echo $SW_PENDENGARAN ?></label>
						<p></p>
						<input name="SW_PENDENGARAN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PENDENGARAN ?>">
					</div>
					<div class="form-group">
						<label>Penampilan Pendaftar: <?php echo $SW_PENAMPILAN ?></label>
						<p></p>
						<input name="SW_PENAMPILAN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PENAMPILAN ?>">
					</div>
					<div class="form-group">
						<label>Ciri Fisik Pendaftar: <?php echo $SW_CIRIFISIK ?></label>
						<p></p>
						<input name="SW_CIRIFISIK" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_CIRIFISIK ?>">
					</div>
					<div class="form-group">
						<label>Bakat Khusus Pendaftar : <?php echo $SW_BAKATKHUSUS ?></label>
						<p></p>
						<input name="SW_BAKATKHUSUS" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_BAKATKHUSUS ?>">
					</div>
					<div class="form-group">
						<label>Prestasi Pendaftar  : <?php echo $SW_PRESTASI ?></label>
						<p></p>
						<input name="SW_PRESTASI" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PRESTASI ?>">
					</div>
					<div class="form-group">
						<label>Alamat Pendaftar  : <?php echo $SW_ALAMAT ?></label>
						<p></p>
						<input name="SW_ALAMAT" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMAT ?>">
					</div>
					<div class="form-group">
						<label>RT Pendaftar : <?php echo $SW_ALAMATRT ?></label>
						<p></p>
						<input name="SW_ALAMATRT" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMATRT ?>">
					</div>
					<div class="form-group">
						<label>RW Pendaftar: <?php echo $SW_ALAMATRW ?></label>
						<p></p>
						<input name="SW_ALAMATRW" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMATRW ?>">
					</div>
					<div class="form-group">
						<label>Dusun Pendaftar: <?php echo $SW_ALAMATDUSUN ?></label>
						<p></p>
						<input name="SW_ALAMATDUSUN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMATDUSUN ?>">
					</div>
					<div class="form-group">
						<label>Dusun Pendaftar: <?php echo $SW_ALAMATKEL ?></label>
						<p></p>
						<input name="SW_ALAMATKEL" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMATKEL ?>">
					</div>
					<div class="form-group">
						<label>Kelurahan Pendaftar: <?php echo $SW_ALAMATKEL ?></label>
						<p></p>
						<input name="SW_ALAMATKEL" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMATKEL ?>">
					</div>
					<div class="form-group">
						<label>Kecamatan Pendaftar: <?php echo $SW_ALAMATKEC ?></label>
						<p></p>
						<input name="SW_ALAMATKEC" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_ALAMATKEC ?>">
					</div>
					<div class="form-group">
						<label>Kecamatan Pendaftar: <?php echo $SW_KODEPOS ?></label>
						<p></p>
						<input name="SW_KODEPOS" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_KODEPOS ?>">
					</div>
					<div class="form-group">
						<label>Telepon Pendaftar : <?php echo $SW_TELP ?></label>
						<p></p>
						<input name="SW_TELP" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_TELP ?>">
					</div>
					<div class="form-group">
						<label>HP Pendaftar : <?php echo $SW_HP ?></label>
						<p></p>
						<input name="SW_HP" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_HP ?>">
					</div>
					<div class="form-group">
						<label>Email Pendaftar : <?php echo $SW_EMAIL ?></label>
						<p></p>
						<input name="SW_EMAIL" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_EMAIL ?>">
					</div>
					<div class="form-group">
						<label>SKHUN Pendaftar : <?php echo $SW_SKHUN ?></label>
						<p></p>
						<input name="SW_SKHUN" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_SKHUN ?>">
					</div>
					<div class="form-group">
						<label>Penerima KPS Pendaftar : <?php echo $SW_PENERIMAKPS ?></label>
						<p></p>
						<input name="SW_PENERIMAKPS" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_PENERIMAKPS ?>">
					</div>
					<div class="form-group">
						<label>No KPS Pendaftar: <?php echo $SW_NOKPS ?></label>
						<p></p>
						<input name="SW_NOKPS" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_NOKPS ?>">
					</div>
					<div class="form-group">
						<label>Terakhir Diperbarui Pendaftar: <?php echo $SW_LASTUPDATE ?></label>
						<p></p>
						<input name="SW_LASTUPDATE" type="text" class="form-control" placeholder=""
							   value="<?php echo $SW_LASTUPDATE ?>">
					</div>


					<input type="submit" name="submit" value="Ubah" class="btn btn-danger pull-right">
				</div>
			</form>
		</div>
		<!--/.row-->
	</div>
	<!--/.container-->
</section>
<!--/#feature-->
</body>