<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-user'></i> 
TABEL PENNGUNA</div><!-- /.panel-heading --><br/>
<a href="<?php echo site_url().'/dashboard/tambah_pengguna'?>" class="btn btn-danger btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;TAMBAH DATA</a>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
	<tr>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">NO</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">NAMA LENGKAP</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">USERNAME</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">PASSWORD</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">LEVEL PENGGUNA</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">STATUS BLOKIR</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">TANGGAL UPDATE</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">TOMBOL AKSI</div></th>
	</tr>
</thead>
<tbody>
<?php
if (empty($pengguna)) { ?>
	<tr>
		<td colspan="7">Data Tidak Ditemukan</td>
	</tr>
<?php
} else{
	$no = 1;
	foreach ($pengguna->result() as $tampil) {
		
	$level=$tampil->pengguna_level;
	if ($level==0){
		$level="Null";
	}elseif($level==1){
		$level="Administrator";
	}elseif($level==2){
		$level="Staff";
	}elseif($level==3){
		$level="Manager";	
	}else{
		$level="Guest";
	}
	
	$status=$tampil->pengguna_blokir;
	if ($status=="T"){
		$status="<span class='label label-success'>Active</span>";
	}else{
		$status="<span class='label label-danger'>Banned</span>";
	}
		?>
		<tr>
			<td><div align='center'><?php echo $no++ ?></div></td>
			<td><div align='center'><?php echo $tampil->pengguna_nama ?></div></td>
			<td><div align='center'><?php echo $tampil->pengguna_username ?></div></td>
			<td><div align='center'><?php echo $tampil->pengguna_password ?></div></td>
			<td><div align='center'><?php echo $level ?></div></td>
			<td><div align='center'><?php echo $status ?></div></td>
			<td><div align='center'>
				<?php echo $Tgl=date("d F Y",strtotime($tampil->pengguna_tglupdate)); ?></div></td>
				<td><div align='center'>
				<a href="<?php echo base_url() ?>index.php/dashboard/edit_pengguna/<?php echo $tampil->pengguna_id ?>" title="Edit Data Pengguna">
				<img src="<?php echo base_url('assets/icon/editicon32.png'); ?>" align='absmiddle' width='20' height='20'></a> | 
				<a href="<?php echo base_url() ?>index.php/dashboard/proses_hapus_pengguna/<?php echo $tampil->pengguna_id ?>" onclick="return confirm('Anda yakin akan menghapus data ini ?')" title='Hapus Data Pengguna'>
				<img src="<?php echo base_url('assets/icon/ButtonDeleteicon32.png'); ?>" align='absmiddle' width='20' height='20'></i></a>
				</div>
			</td>
		</tr>
		<?php
		}
	}
	?>
</tbody>
<tfoot>
	<tr>
		<td colspan="7"><div align="right"><b>Jumlah Record</b></div></td>
		<td><div align="center"><b><?php echo $pengguna->num_rows(); ?></b></div></td>
	</tr>
</tfoot>
</table>
</div><!-- /.table-responsive -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Tampil karyawan -->
</div><!--  /.panel -->
</div><!-- /.col-lg-12 -->