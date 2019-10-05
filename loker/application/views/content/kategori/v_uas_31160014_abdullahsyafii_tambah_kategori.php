<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM TAMBAH KATEGORI</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_tambah_kategori'?>" method="post" autocomplete="on" />
<div class="form-group">
    <label>NAMA KATEGORI</label>
	<select class="form-control" name="C1" id="C1" required />
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
	<label>TANGGAL INPUT</label><br/>
    <input type="text" name="T2" id="T2" size="40" placeholder="Ketikkan Tanggal Input " required>
    <img type="image" src="<?php echo base_url('assets/images/calPick.gif'); ?>" name="CALTGL1" width="20" height="20" align="absmiddle" id="CALTGL1" style="cursor:pointer;cursor:hand;" /> 
		<script type="text/javascript">
			var cal = Calendar.setup({
				onSelect: function(cal) { cal.hide() }
      		});
			cal.manageFields("CALTGL1", "T2", "%Y-%m-%d");
    	</script>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">SIMPAN DATA KATEGORI</button>
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