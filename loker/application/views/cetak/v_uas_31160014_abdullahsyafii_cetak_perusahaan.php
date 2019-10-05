<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM CETAK DATA PERUSAHAAN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/perusahaan_cetak'?>" target="_blank" method="post" autocomplete="on" />
<div class="form-group">
	<label>DARI TANGGAL</label>
    <input class="form-control" name="T1" id="tgl1" placeholder="Ketikkan Tanggal Mulai Disini" required />
	<p class="help-block">Contoh : yyyy-mm-dd.</p>
</div>
<div class="form-group">
	<label>SAMPAI TANGGAL</label>
    <input class="form-control" name="T2" id="tgl2" placeholder="Ketikkan Tanggal Selesai Disini" required />
	<p class="help-block">Contoh : yyyy-mm-dd.</p>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">CETAK DATA PERUSAHAAN</button>
	<button type="reset" class="btn btn-success">R E S E T</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()">BATAL</button>
</div>
</form>
</div><!-- /.row (nested) -->
</div><!-- /.col-lg-8 (nested) -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Form Tambah Karyawan -->
</div><!-- /.panel -->
</div><!-- /.col-lg-12 -->