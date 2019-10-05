<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM TAMBAH ADMIN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_tambah_admin'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group">
	<label>NAMA ADMIN</label>
	<input class="form-control" name="T1" id="T1" placeholder="Ketikkan Nama ADMIN Disini" required />
	<p class="help-block">Contoh : Abdullah, dll </p>
</div>
<div class="form-group">
	<label>ALAMAT ADMIN</label>
	<input class="form-control" name="T2" id="T2" placeholder="Ketikkan Alamat ADMIN Disini" required />
	<p class="help-block">Contoh : Jl. cipto, dll </p>
</div>
<div class="form-group">
	<label>KODE POS </label>
	<input class="form-control" name="T3" id="T3" placeholder="Ketikkan Kode Pos Disini" required />
	<p class="help-block"> Contoh : 45144 .</p>
</div>
<div class="form-group">
	<label>KETERANGAN</label>
	<textarea class="form-control" name="T4" id="T4"placeholder= "Ketikkan Keterangan ADMIN Disini"
	required ></textarea>
	<p class="help-block"> Contoh : Selamat Bergabung, </p>
</div>
<div class="form-group">
	<label>TANGGAL UPDATE</label><br/>
	<input class="form-control" name="T5" id="tgl1" placeholder="Ketikan Tanggal Update" required>
    	</script>
	<p class="help-block">Contoh : yyyy-mm-dd.</p>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary"> SIMPAN DATA ADMIN</button>
	<button type="reset" class="btn btn-success"> RESET</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"> BATAL </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>