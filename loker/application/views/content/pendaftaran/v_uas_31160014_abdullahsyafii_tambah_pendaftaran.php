<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM TAMBAH PENDAFTARAN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_tambah_pendaftaran'?>" method="post" autocomplete="on" />
<div class="form-group">
	<label>TANGGAL DAFTAR</label>
    <input class="form-control" name="T1" id="tgl1" placeholder="Ketikkan Tanggal PENDAFTARAN" required />
	<p class="help-block">Contoh : yyyy-mm-dd.</p>
</div>
<div class="form-group">
	<label>NAMA PENCAKER</label>
	<select class="form-control" name="C1" id="C1" required />
		<option value="-">[PILIHAN ANDA]</option>
		<?php foreach($pencaker->result() as $row) {?>
			<option value="<?=$row->pencaker_id?>"><?=$row->nm_pencaker?></option>
		<?php }?>
	</select>
	<p class="help-block">Contoh : Pilih Salah Satu.</p>
</div>
<div class="form-group">
	<label>NAMA PERUSAHAAN</label>
	<select class="form-control" name="C2" id="C2" required />
		<option value="-">[PILIHAN ANDA]</option>
		<?php foreach($perusahaan->result() as $row) {?>
			<option value="<?=$row->id_perusahaan?>"><?=$row->nm_perusahaan?></option>
		<?php }?>
	</select>
	<p class="help-block">Contoh : Pilih Salah Satu.</p>
</div>
<div class="form-group">
	<label>NAMA LOWONGAN</label>
	<select class="form-control" name="C3" id="C3" required />
		<option value="-">[PILIHAN ANDA]</option>
		<?php foreach($lowongan->result() as $row) { ?>
		<option value="<?=$row->id_lowongan?>"><?=$row->nm_lowongan?></option>
		<?php } ?>
	</select>
	<p class="help-block">Contoh : Pilih Salah Satu.</p>
</div>
<div class="form-group">
	<label>KETERANGAN DAFTAR</label>
    <textarea class="form-control" name="T2" id="T2" placeholder="Ketikkan Keterangan" required></textarea>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">SIMPAN DATA PENDAFTARAN</button>
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