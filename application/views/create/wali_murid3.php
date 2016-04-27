<!-- Content -->

<body>
    <!-- Feature -->
    <section id="feature" class="transparent-bg">
        <!-- Container -->
    	<div class="container">
           	<div class="center wow fadeInDown">
                <h2>Buat Data Wali Murid</h2>
           	</div>
            <!-- Row -->
           	<div class="row">
				<form role="form" method="post" action= "<?php  echo site_url('Master/Walmur/create_data');?>">
		            <div class="col-lg-6">
		            	<div class="form-group">
                            <label>Masukkan Id Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="WM_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Kewarganegaraan Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="KWN_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Pekerjaan Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PK_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Penghasilan Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="PH_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Kebutuhan Khusus Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="KK_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Jenjang Pendidikan Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="JP_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Id Siswa Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: Sepeda Motor" name="SW_ID" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Sebagai Wali Murid</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="WM_SEBAGAI" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Nama Wali Murid</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="WM_NAMA" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tempat Lahir Wali Murid</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="WM_TEMPATLAHIR" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Tanggal Lahir Wali Murid</label>
                            <input type="date" class="form-control" placeholder="Contoh: 1" name="WM_TGLLAHIR" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Instansi Kerja Wali Murid</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="WM_INSKERJA" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jabatan Kerja Wali Murid</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="WM_JABATANKERJA" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Pangkat Wali Murid</label>
                            <input type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="WM_PANGKAT" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Lama Kerja (Perhari) Wali Murid</label>
                            <input type="text" class="form-control" placeholder="Contoh: 1" name="WM_LAMAKERJAPERHARI" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Jumlah Tanggungan Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="WM_JMLTANGGUNG" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Alamat Rumah Wali Murid</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="WM_ALAMATRUMAH"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Alamat Kantor Wali Murid</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="WM_ALAMATKANTOR"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Masukkan Telepon Wali Murid</label>
                            <input type="tel" class="form-control" placeholder="Contoh: 1" name="WM_TELP" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Usia Nikah Wali Murid</label>
                            <input type="number" class="form-control" placeholder="Contoh: 1" name="WM_USIANIKAH" >
                        </div>
                        <div class="form-group">
                            <label>Masukkan Kesempatan Komunikasi Wali Murid</label>
                            <textarea type="text" class="form-control" placeholder="Contoh: Sepeda Motor" name="WM_KESEMPATANKOM"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Buat dan Lanjutkan" class="btn btn-danger pull-right">
		            </div>
		        </form>
        	</div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
</body>