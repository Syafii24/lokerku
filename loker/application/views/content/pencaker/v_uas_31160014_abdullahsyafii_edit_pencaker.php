<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-wrench'></i>
&nbsp;FORM EDIT PENCAKER</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_edit_pencaker'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
	<?php foreach ($edit_pencaker->result() as $tampil) {?>
<div class="form-group">
    <input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->pencaker_id; ?>" />
</div>
<div class="form-group">
    <input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->pencaker_photo; ?>" />
</div>
<div class="form-group">
    <label>NAMA PENCAKER</label>
	<input class="form-control" name="T1" id="T1" value="<?php echo $tampil->nm_pencaker; ?>" required />
</div>
<div class="form-group">
	<label>JENIS KELAMIN</label>
	<select class="form-control" name="C1" id="C1" value="<?php echo $tampil->jnskelamin; ?>" required />
	<option value="<?php echo $tampil->jnskelamin; ?>">
		<?php echo $tampil->jnskelamin; ?></option>
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
		</select>
</div>
<div class="form-group">
	<label>TANGGAL LAHIR</label>
	<input class="form-control" name="T2" id="tgl1" value="<?php echo $tampil->tgl_lahir; ?>" required>
</div>
<div class="form-group">
	<label>ALAMAT</label>
    <textarea class="form-control" name="T3" id="T3"><?php echo $tampil->alamat_pencaker; ?></textarea>
</div>
<div class="form-group">
	<label>EMAIL</label>
    <input class="form-control" name="T4" id="T4" value="<?php echo $tampil->email; ?>" required />
</div>
<div class="form-group">
	<label>STATUS</label>
    <select class="form-control" name="C2" id="C2" value="<?php echo $tampil->status; ?>" required />
	<option value="<?php echo $tampil->status; ?>">
		<?php echo $tampil->status; ?></option>
		<option value="Menikah">Menikah</option>
		<option value="Belum Menikah">Belum Menikah</option>
		</select>
</div>
<div class="form-group">
	<label>FOTO</label>
	<input type="file" name="F1" id="F1" onchange="tampilkanPreview(this, 'preview')" />
	<img src="<?php echo base_url().'assets/pencaker/'.$tampil->pencaker_photo ?>" width="60" height="80">
	<br>
	<img id="preview" src="" alt="" height="200px" width="150px" />
</div>

<?php } ?>
<div class="form-group">
	<button type="submit" class="btn btn-primary">UPDATE DATA PENCAKER</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Edit karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->