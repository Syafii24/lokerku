<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM TAMBAH PERUSAHAAN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_tambah_perusahaan'?>" method="post" autocomplete="on" />
<div class="form-group">
	<label>NAMA PERUSAHAAN</label>
    <input class="form-control" name="T1" id="T1" placeholder="Ketikkan Nama Perusahaan Disini" required />
</div>
<div class="form-group">
	<label>ALAMAT</label>
    <input class="form-control" name="T2" id="T2" placeholder="Ketikkan Alamat Disini" required />
</div>
<div class="form-group">
	<label>DESKRIPSI PERUSAHAAN</label>
    <textarea class="form-control" name="T3" id="T3" placeholder="Ketikkan Deskripsi Perusahaan Disini" required></textarea>
</div>
<div class="form-group">
	<label>WEB PERUSAHAAN</label>
    <input class="form-control" name="T4" id="T4" placeholder="Ketikkan web Disini" required />
</div>
<div class="form-group">
	<label>TELEPON PERUSAHAAN</label>
    <input class="form-control" name="T5" id="T5" placeholder="Ketikkan Telepon Disini" required />
</div>
<div class="form-group">
	<label>TANGGAL DIDIRIKAN</label><br/>
    <input type="text" name="T6" id="T6" size="40" placeholder="Ketikkan Tanggal Berdiri disini " required>
    <img type="image" src="<?php echo base_url('assets/images/calPick.gif'); ?>" name="CALTGL1" width="20" height="20" align="absmiddle" id="CALTGL1" style="cursor:pointer;cursor:hand;" /> 
		<script type="text/javascript">
			var cal = Calendar.setup({
				onSelect: function(cal) { cal.hide() }
      		});
			cal.manageFields("CALTGL1", "T6", "%Y-%m-%d");
    	</script>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">SIMPAN DATA PERUSAHAAN</button>
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