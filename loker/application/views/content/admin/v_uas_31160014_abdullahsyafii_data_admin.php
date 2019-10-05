<div class="col-lg-12">
	<div class="panel panel-default">
	<div class="panel-heading"><i class='fa fa-operator'></i> 
	TABEL ADMIN </div> <!-- /.panel heading --> <br/>
	<a href="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/tambah_admin'?>" class="btn btn-primary">
	<i class="fa fa-plus fa-white"></i> &nbsp;TAMBAH DATA </a>
	<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">NO</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">NAMA ADMIN</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">ALAMAT LENGKAP</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">KODE POS</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">DESKRIPSI ADMIN</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">UPDATE TANGGAL</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">TOMBOL AKSI</div></th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($admin))  { ?>
					<tr>
					<td colspan="6"> Data Tidak Ditemukan </td>
				</tr>
			<?php 
		} else {
			$no = 1;
			foreach ($admin->result() as $tampil) {
				?>
				<tr>
			<td><div align="center"><?php echo $no++ ?></div></td>
			<td><div align="center"><?php echo $tampil->admin_name ?></div></td>
			<td><div align="center"><?php echo $tampil->admin_address ?></div></td>
			<td><div align="center"><?php echo $tampil->admin_kode_pos ?></div></td>
			<td><div align="center"><?php echo $tampil->admin_deskripsi ?></div></td>
			<td><div align="center">
			<?php echo $Tgl=date("d F Y",strtotime($tampil->admin_tglentry)); ?></div></td>
			<td><div align="center">
			<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/edit_admin/<?php echo $tampil->admin_id ?>" title="Edit Data admin">
			<img src="<?php echo base_url('assets/icon/editicon32.png'); ?>" align="absmiddle" width="20" heigth="20"></a> |
			<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/proses_hapus_admin/<?php echo $tampil->admin_id ?>" onclick="return confirm ('Anda yakin menghapus data ini?')" title="Hapus Data admin">
			<img src="<?php echo base_url('assets/icon/ButtonDeleteicon32.png'); ?>" align="absmiddle" width="20" height="20"></a>
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
<td colspan="6"><div align="right"><b> Jumlah Record</b></div></td>
<td><div align="center"><b><?php echo $admin-> num_rows(); ?></b></div></td>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
		
		
