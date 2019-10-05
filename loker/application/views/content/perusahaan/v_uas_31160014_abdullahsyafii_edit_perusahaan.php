<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-wrench'></i>
&nbsp;FORM EDIT PERUSAHAAN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafi/proses_edit_perusahaan'?>" method="post" autocomplete="on" />
	<?php foreach ($edit_perusahaan->result() as $tampil) { ?>
<div class="form-group">
    <input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_perusahaan; ?>" />
</div>
<div class="form-group">
	<label>NAMA PERUSAHAAN</label>
    <input class="form-control" name="T1" id="T1" value="<?php echo $tampil->nm_perusahaan; ?>" required/>
</div>
<div class="form-group">
	<label>ALAMAT</label>
    <input class="form-control" name="T2" id="T2" value="<?php echo $tampil->alamat_perusahaan; ?>" required/>
</div>
<div class="form-group">
    <label>DESKRIPSI PERUSAHAAN</label>
	<textarea class="form-control" name="T3" id="T3"><?php echo $tampil->deskripsi_perusahaan; ?></textarea>
</div>
<div class="form-group">
	<label>WEB PERUSAHAAN</label>
    <input class="form-control" name="T4" id="T4" value="<?php echo $tampil->web_perusahaan; ?>" required/>
</div>	
<div class="form-group">
	<label>TELEPON PERUSAHAAN</label>
    <input class="form-control" name="T5" id="T5" value="<?php echo $tampil->telepon_perusahaan; ?>" required/>
</div>
<div class="form-group">
	<label>TANGGAL DIDIRIKAN</label><br/>
    <input type="text" name="T6" id="T6" size="40" value="<?php echo $tampil->tglberdiri; ?>" required>
    <img type="image" src="<?php echo base_url('assets/images/calPick.gif'); ?>" name="CALTGL1" width="20" height="20" align="absmiddle" id="CALTGL1" style="cursor:pointer;cursor:hand;" /> 
		<script type="text/javascript">
			var cal = Calendar.setup({
				onSelect: function(cal) { cal.hide() }
      		});
			cal.manageFields("CALTGL1", "T6", "%Y-%m-%d");
    	</script>
</div>
<?php } ?>
<div class="form-group">
	<button type="submit" class="btn btn-primary">UBAH DATA PERUSAHAAN</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Edit karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->