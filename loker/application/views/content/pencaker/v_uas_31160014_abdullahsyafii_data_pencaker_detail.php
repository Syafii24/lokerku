<div class="col-lg-12">
	<div class="panel panel-default">
	<div class="panel-heading"><i class='fa fa-operator'></i> 
	&nbsp;FORM DETAIL PENCAKER </div> <!-- /.panel heading --> <br/>
	<div class="panel-body">
	<div class="col-lg-12">
	<div class="row"><div id="div1">
	<table class="table table-striped table-bordered table-hover">
	<form role="form" action="" method="" enctype="multipart/form-data"/>
	<?php foreach ($detail_pencaker->result() as $tampil) {?>
			<thead>
				<tr>
					<th colspan="2"><i class="fa fa-user"></i> DETAIL DATA PENCAKER</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><label>FOTO</label></td>
					<td><a href="<?php echo base_url().'assets/pencaker/'.$tampil->pencaker_photo ?>" target="_blank">
					<img src="<?php echo base_url().'assets/pencaker/'.$tampil->pencaker_photo ?>" width="270" height="300"></a></td>
				</tr>
				<tr>
					<td><label>NAMA PENCAKER</label></td>
					<td><input class="form-control" name="T1" id="T1" value="<?php echo $tampil->nm_pencaker; ?>" readonly /></td>
				</tr>
				<tr>
					<td><label>JENIS KELAMIN</label></td>
					<td><input class="form-control" name="C1" id="C1" value="<?php echo $tampil->jnskelamin; ?>" readonly /></td>
				</tr>
				<tr>
					<td><label>TANGGAL LAHIR</label></td>
					<td><input class="form-control" name="T2" id="tgl1" value="<?php echo $tampil->tgl_lahir; ?>" readonly /></td>
				</tr>
				<tr>
					<td><label>ALAMAT</label></td>
					<td><input class="form-control" name="T3" id="T3" value="<?php echo $tampil->alamat_pencaker; ?>" readonly /></td>
				</tr>
				<tr>
					<td><label>EMAIL</label></td>
					<td><input class="form-control" name="T4" id="T4" value="<?php echo $tampil->email; ?>" readonly /></td>
				</tr>
				<tr>
					<td><label>STATUS</label></td>
					<td><input class="form-control" name="C2" id="C2" value="<?php echo $tampil->status; ?>" readonly /></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2"><div align="center">
					<a class="btn btn-primary" onclick="printContent('div1')"><i class="fa fa-print"></i> C E T A K </a>
					<button type="button" class="btn btn-danger" onclick="self.history.back()"> K E M B A L I &nbsp; K E &nbsp; H A L A M A N &nbsp; S E B E L U M N Y A</button></div></td></tr></tfoot>
	<?php } ?>
</form>
</table></div>
</div>
</div>
</div>
<!-- Akhir Source Code - Form Tambah operator -->
</div>
</div>