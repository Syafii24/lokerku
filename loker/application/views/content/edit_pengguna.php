<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-wrench'></i>
&nbsp;FORM EDIT PENGGUNA</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/dashboard/proses_edit_pengguna'?>" method="post" autocomplete="on" />
	<?php foreach ($edit_pengguna->result() as $tampil) {?>
<div class="form-group">
    <input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->pengguna_id; ?>" />
</div>
<div class="form-group">
	<label>NAMA LENGKAP PENGGUNA</label>
    <input class="form-control" name="T1" id="T1" value="<?php echo $tampil->pengguna_nama; ?>" required/>
	<p class="help-block">Contoh : Pengguna 1, Pengguna 2, dll.</p>
</div>
<div class="form-group">
	<label>USERNAME</label>
    <input class="form-control" name="T2" id="T2" value="<?php echo $tampil->pengguna_username; ?>" required />
	<p class="help-block">Contoh : admin, Staff, dll.</p>
</div>
<div class="form-group">
	<label>PASSWORD</label>
    <input class="form-control" name="T3" id="T3" type="password" value="<?php echo $t=base64_decode ($tampil->pengguna_password); echo $t; ?>" required />
	<p class="help-block">Contoh : admin, Staff, dll.</p>
</div>
<div class="form-group">
    <label>LEVEL PENGGUNA</label>
	<select class="form-control" name="C1" id="C1" required />
	<option value="<?php echo $tampil->pengguna_level; ?>">
	<?php
	$level=$tampil->pengguna_level;
	if ($level==0){
		$level="Null";
	}elseif($level==1){
		$level="Administrator";
	}elseif($level==2){
		$level="Staff";
	}elseif($level==3){
		$level="Manager";	
	}else{
		$level="Guest";
	}
	print $level?></option>
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
	<option value="<?php echo $tampil->pengguna_level; ?>">
	<?php
		$status=$tampil->pengguna_blokir;
		if ($status=="Y"){
			$ket='Tidak Aktif / Blokir';
		}else{
			$ket='Aktif';
		}
		print $ket?></option>
		<option value="Y">Blokir</option>
		<option value="T">Aktif</option>
	</select>
	<p class="help-block">Contoh : Pilih Salah Satu.</p>
</div>
<div class="form-group">
	<label>TANGGAL UPDATE</label><br/>
    <input class="form-control" name="T4" id="T4" id="tgl1" value="<?php echo $tampil->pengguna_tglupdate; ?>" required>
    <p class="help-block">Contoh : yyyy-mm-dd.</p>
</div>
<?php } ?>
<div class="form-group">
	<button type="submit" class="btn btn-primary">UBAH DATA PENGGUNA</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Edit karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->