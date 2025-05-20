<div class="d-flex pt-3 mb-3 border-bottom">
    <h4><?php echo $title?></h4>
    
</div>
<?php echo form_open('mahasiswa/submit', ['id' => 'myform', 'class' => 'container mt-5']); ?>

<div class="mb-3">
    <label for="nim" class="form-label">NIM:</label>
    <input type="text" name="nim" id="nim" class="form-control" placeholder="masukkan NIM" />
</div>

<div class="mb-3">
    <label for="Nama" class="form-label">Nama:</label>
    <input type="text" name="Nama" id="Nama" class="form-control" placeholder="masukkan nama" />
</div>

<div class="mb-3">
    <label class="form-label">Jenis Kelamin:</label>
    <div class="form-check">
        <input type="radio" name="jenisKelamin" id="jk_laki" value="Laki-laki" class="form-check-input" />
        <label for="jk_laki" class="form-check-label">Laki-laki</label>
    </div>
    <div class="form-check">
        <input type="radio" name="jenisKelamin" id="jk_perempuan" value="Perempuan" class="form-check-input" />
        <label for="jk_perempuan" class="form-check-label">Perempuan</label>
    </div>
</div>

<div class="mb-3">
    <label for="tgl" class="form-label">Tanggal Lahir:</label>
    <input type="date" name="tgl_lahir" id="tgl" class="form-control" />
</div>

<div class="mb-3">
    <label for="umur" class="form-label">Umur:</label>
    <input type="number" name="umur" id="umur" class="form-control" placeholder="masukkan umur" />
</div>

<div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan:</label>
    <select name="jurusan" id="jurusan" class="form-select">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Komputer">Teknik Komputer</option>
        <option value="Manajemen Informatika">Manajemen Informatika</option>
    </select>
</div>

<div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php echo form_close(); ?>
