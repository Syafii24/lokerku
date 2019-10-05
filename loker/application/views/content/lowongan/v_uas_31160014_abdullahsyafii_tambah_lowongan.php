<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-plus'></i>
&nbsp;FORM TAMBAH LOWONGAN</div><!-- /.panel-heading -->
<div class="panel-body">
<div class="col-lg-12">
<div class="row">
<form role="form" action="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/proses_tambah_lowongan'?>" method="post" autocomplete="on" />
<div class="form-group">
	<label>NAMA LOWONGAN</label>
    <input class="form-control" name="T1" id="T1" placeholder="Ketikkan Judul Kategori Disini" required />
</div>
<div class="form-group">
	<label>ID PERUSAHAAN</label>
	<select class="form-control" name="C1" id="C1" required />
		<option value="-">- Pilih -</option>
		<?php foreach($perusahaan->result() as $row) {?>
			<option value="<?=$row->id_perusahaan?>"><?=$row->nm_perusahaan?></option>
		<?php }?>
	</select>
</div>
<div class="form-group">
	<label>ID KATEGORI</label>
	<select class="form-control" name="C2" id="C2" required />
		<option value="-">- Pilih -</option>
		<?php foreach($kategori->result() as $row) {?>
			<option value="<?=$row->id_kategori?>"><?=$row->nm_kategori?></option>
		<?php }?>
	</select>
</div>
<div class="form-group">
	<label>PERSYARATAN</label>
    <textarea class="form-control" name="T2" id="T2" placeholder="Ketikkan Deskripsi LOWONGAN Disini" required></textarea>
</div>
<div class="form-group">
	<label>TANGGAL TUTUP</label><br/>
    <input type="text" name="T3" id="T3" size="40" placeholder="Ketikkan Tanggal Tutup Lowongan" required>
    <img type="image" src="<?php echo base_url('assets/images/calPick.gif'); ?>" name="CALTGL1" width="20" height="20" align="absmiddle" id="CALTGL1" style="cursor:pointer;cursor:hand;" /> 
		<script type="text/javascript">
			var cal = Calendar.setup({
				onSelect: function(cal) { cal.hide() }
      		});
			cal.manageFields("CALTGL1", "T3", "%Y-%m-%d");
    	</script>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">SIMPAN DATA LOWONGAN</button>
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