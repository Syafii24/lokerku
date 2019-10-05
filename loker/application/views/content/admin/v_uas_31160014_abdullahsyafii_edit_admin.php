<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-wrench'></i>
&nbsp;FORM EDIT ADMIN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_edit_admin'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
	<?php foreach ($edit_admin->result() as $tampil) {?>
<div class="form-group">
    <input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->admin_id; ?>" />
</div>
<div class="form-group">
    <label>NAMA ADMIN</label>
	<input class="form-control" name="T1" id="T1" value="<?php echo $tampil->admin_name; ?>" required />
</div>
<div class="form-group">
	<label>ALAMAT ADMIN</label>
    <textarea class="form-control" name="T2" id="T2"><?php echo $tampil->admin_address; ?></textarea>
</div>
<div class="form-group">
	<label>KODE POS</label>
    <input class="form-control" name="T3" id="T3" value="<?php echo $tampil->admin_kode_pos; ?>" required />
</div>
<div class="form-group">
	<label>KETERANGAN</label>
    <textarea class="form-control" name="T4" id="T4"><?php echo $tampil->admin_deskripsi; ?></textarea>
</div>
<div class="form-group">
	<label>TANGGAL UPDATE</label><br/>
	<input class="form-control" name="T5" id="tgl1" value="<?php echo $tampil->admin_tglentry; ?>" required>
</div>
<?php } ?>
<div class="form-group">
	<button type="submit" class="btn btn-primary">UPDATE DATA ADMIN</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Edit karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->