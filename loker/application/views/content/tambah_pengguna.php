<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM TAMBAH PENGGUNA</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/dashboard/proses_tambah_pengguna'?>" method="post" autocomplete="on" />
<div class="form-group">
	<label>NAMA LENGKAP PENGGUNA</label>
    <input class="form-control" name="T1" id="T1" placeholder="Ketikkan Nama Pengguna Disini" required />
	<p class="help-block">Contoh : Pengguna 1, Pengguna 2, dll.</p>
</div>
<div class="form-group">
	<label>USERNAME</label>
    <input class="form-control" name="T2" id="T2" placeholder="Ketikkan Username Disini" required />
	<p class="help-block">Contoh : admin, Staff, dll.</p>
</div>
<div class="form-group">
	<label>PASSWORD</label>
    <input class="form-control" name="T3" id="T3" placeholder="Ketikkan Nama Perusahaan Produksi Film Disini" required />
	<p class="help-block">Contoh : admin, Staff, dll.</p>
</div>
<div class="form-group">
    <label>LEVEL PENGGUNA</label>
	<select class="form-control" name="C1" id="C1" required />
		<option value="0">[Pilihan Anda]</option>
		<option value="1">Administrator</option>
		<option value="2">Staff</option>
		<option value="3">Manager</option>
		<option value="4">Guest</option>
	</select>
	<p class="help-block">Contoh : Pilih Salah Satu.</p>
</div>
<div class="form-group">
	<label>STATUS PENGGUNA</label>
    <select class="form-control" name="C2" id="C2" required />
		<option value="Y">Tidak Aktif / Blokir</option>
		<option value="T">Aktif</option>
		</select>
		<p class="help-block">Contoh : Pilih Salah Satu.</p>
</div>
<div class="form-group">
	<label>TANGGAL UPDATE</label><br/>
    <input class="form-control" name="T4" id="T4" id="tgl1" placeholder="Ketikkan Tanggal Update " required>
    <p class="help-block">Contoh : yyyy-mm-dd.</p>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">SIMPAN DATA PENGGUNA</button>
	<button type="reset" class="btn btn-success">RESET</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Tambah Karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->