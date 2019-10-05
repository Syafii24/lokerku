<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM TAMBAH PENCAKER</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_tambah_pencaker'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group">
	<label>NAMA PENCAKER</label>
	<input class="form-control" name="T1" id="T1" placeholder="Ketikkan Nama PENCAKER Disini" required />
	<p class="help-block">Contoh : Abdullah, dll </p>
</div>
<div class="form-group">
    <label>JENIS KELAMIN</label>
	<select class="form-control" name="C1" id="C1" required />
		<option value="-">- Pilih -</option>
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	</select>
</div>
<div class="form-group">
	<label>TANGGAL LAHIR</label><br/>
	<input class="form-control" name="T2" id="tgl1" placeholder="Ketikan Tanggal LAHIR" required>
    	</script>
	<p class="help-block">Contoh : yyyy-mm-dd.</p>
</div>
<div class="form-group">
	<label>ALAMAT</label>
	<textarea class="form-control" name="T3" id="T3"placeholder= "Ketikkan Alamat Disini"
	required ></textarea>
	<p class="help-block"> Contoh : jl. pemuda, cirebon, </p>
</div>
<div class="form-group">
	<label>EMAIL </label>
	<input class="form-control" name="T4" id="T4" placeholder="Ketikkan Email Disini" required />
	<p class="help-block"> Contoh : contoh@gmail.com .</p>
</div>
<div class="form-group">
    <label>STATUS</label>
	<select class="form-control" name="C2" id="C2" required />
		<option value="-">- Pilih -</option>
		<option value="Menikah">Menikah</option>
		<option value="Belum Menikah">Belum Menikah</option>
	</select>
</div>
<div class="form-group">
	<label>FOTO</label>
	<input type="file" name="F1" id="F1" onchange="tampilkanPreview(this,'preview')" required />
	<p class="help-block"> Contoh : *.jpg, *.png, dll</p>
	<br>
	<img id="preview" src="" alt="" height="200px" width="150px" />
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary"> SIMPAN DATA PENCAKER</button>
	<button type="reset" class="btn btn-success"> RESET</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"> BATAL </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>