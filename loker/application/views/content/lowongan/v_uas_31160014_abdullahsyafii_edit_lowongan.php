<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-wrench'></i>
&nbsp;FORM EDIT LOWONGAN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_edit_lowongan'?>" method="post" autocomplete="on" />
	<?php foreach ($edit_lowongan->result() as $tampil) {
		?>
<div class="form-group">
    <input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_lowongan; ?>" />
</div>
<div class="form-group">
	<label>NAMA LOWONGAN</label>
    <input class="form-control" name="T1" id="T1" value="<?php echo $tampil->nm_lowongan; ?>" required />
</div>
<div class="form-group">
	<label>ID PERUSAHAAN</label>
	<select class="form-control" name="C1" id="C1" required />
    <option value="<?php echo $tampil->id_perusahaan; ?>">
    	<?php echo $tampil->id_perusahaan; ?></option>
		<?php foreach($perusahaan->result() as $row) {?>
			<option value="<?=$row->id_perusahaan?>"><?=$row->nm_perusahaan?></option>
		<?php }?>
	</select>
</div>
<div class="form-group">
	<label>ID KATEGORI</label>
	<select class="form-control" name="C2" id="C2" required />
    <option value="<?php echo $tampil->id_kategori; ?>">
    	<?php echo $tampil->id_kategori; ?></option>
		<?php foreach($kategori->result() as $row) {?>
			<option value="<?=$row->id_kategori?>"><?=$row->nm_kategori?></option>
		<?php }?>
	</select>
</div>
<div class="form-group">
	<label>PERSYARATAN</label>
    <textarea class="form-control" name="T2" id="T2"><?php echo $tampil->syarat_lowongan; ?></textarea>
</div>
<div class="form-group">
	<label>TUTUP LOWONGAN</label><br/>
    <input type="text" name="T3" id="T3" size="40" value="<?php echo $tampil->tgl_tutup; ?>" required>
    <img type="image" src="<?php echo base_url('assets/images/calPick.gif'); ?>" name="CALTGL1" width="20" height="20" align="absmiddle" id="CALTGL1" style="cursor:pointer;cursor:hand;" /> 
		<script type="text/javascript">
			var cal = Calendar.setup({
				onSelect: function(cal) { cal.hide() }
      		});
			cal.manageFields("CALTGL1", "T3", "%Y-%m-%d");
    	</script>
</div>
<?php } ?>
<div class="form-group">
	<button type="submit" class="btn btn-primary">UPDATE DATA LOWONGAN</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Edit karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->