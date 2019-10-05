<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-wrench'></i>
&nbsp;FORM EDIT KURSI</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_edit_kategori'?>" method="post" autocomplete="on" /> <?php foreach ($edit_kategori->result() as $tampil) {?>
<div class="form-group">
    <input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_kategori; ?>" />
</div>
<div class="form-group">
    <label>NAMA KATEGORI</label>
	<select class="form-control" name="C1" id="C1" required />
	<option value="<?php echo $tampil->nm_kategori; ?>">
		<?php $kategori=$tampil->nm_kategori; 
		if ($kategori==1){
			$kategori="SD/SMP";
		}elseif ($kategori==2){
			$kategori="SMA/K";
		}elseif ($kategori==3){
			$kategori="D3";
		}elseif ($kategori==4){
			$kategori="S1";
		}elseif ($kategori==5){
			$kategori="S2";
		}else{$kategori="S3";
		}
		print $kategori?></option>
		<option value="-">- Pilih -</option>
		<option value="SD/SMP">SD/SMP</option>
		<option value="SMA/K">SMA/K</option>
		<option value="D3">D3</option>
		<option value="S1">S1</option>
		<option value="S2">S2</option>
		<option value="S3">S3</option>
	</select>
	<p class="help-block">Contoh : Pilih Salah Satu.</p>
</div>
<div class="form-group">
	<label>TANGGAL UPDATE</label><br/>
    <input type="text" name="T2" id="T2" size="40" value="<?php echo $tampil->tgl_input; ?>" required>
    <img type="image" src="<?php echo base_url('assets/images/calPick.gif'); ?>" name="CALTGL1" width="20" height="20" align="absmiddle" id="CALTGL1" style="cursor:pointer;cursor:hand;" /> 
		<script type="text/javascript">
			var cal = Calendar.setup({
				onSelect: function(cal) { cal.hide() }
      		});
			cal.manageFields("CALTGL1", "T2", "%Y-%m-%d");
    	</script>
</div>
<?php } ?>
<div class="form-group">
	<button type="submit" class="btn btn-primary">UBAH DATA KATEGORI</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Edit karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->