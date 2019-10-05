<div class="col-lg-12">
	<div class="panel panel-default">
	<div class="panel-heading"><i class='fa fa-operator'></i> 
	TABEL PENCAKER </div> <!-- /.panel heading --> <br/>
	<a href="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/tambah_pencaker'?>" class="btn btn-primary">
	<i class="fa fa-plus fa-white"></i> &nbsp;TAMBAH DATA </a>
	<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">NO</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">NAMA PENCAKER</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">JENIS KELAMIN</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">TANGGAL LAHIR</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">ALAMAT</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">EMAIL</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">STATUS</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">FOTO</div></th>
					<th style="border:3px double aqua; background-color: yellow;"><div align="center"><div align="center">TOMBOL AKSI</div></th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($pencaker))  { ?>
					<tr>
					<td colspan="8"> Data Tidak Ditemukan </td>
				</tr>
			<?php 
		} else {
			$no = 1;
			foreach ($pencaker->result() as $tampil) {
				?>
				<tr>
			<td><div align="center"><?php echo $no++ ?></div></td>
			<td><div align="center"><?php echo $tampil->nm_pencaker ?></div></td>
			<td><div align="center"><?php echo $tampil->jnskelamin ?></div></td>
			<td><div align="center"><?php echo $Tgl=date("d F Y",strtotime($tampil->tgl_lahir)); ?></div></td>
			<td><div align="center"><?php echo $tampil->alamat_pencaker ?></div></td>
			<td><div align="center"><?php echo $tampil->email ?></div></td>
			<td><div align="center"><?php echo $tampil->status ?></div></td>
			<td><div align="center">
			<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/detail_pencaker/<?php echo $tampil->pencaker_id ?>">
			<img class="img-thumbnail" src="<?php echo base_url().'assets/pencaker/'.$tampil->pencaker_photo ?>" width="60" height="80" title="<?php echo $tampil->pencaker_photo ?>"></a></div></td>	
			<td><div align="center">
			<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/edit_pencaker/<?php echo $tampil->pencaker_id ?>" title="Edit Data Pencaker">
			<img src="<?php echo base_url('assets/icon/editicon32.png'); ?>" align="absmiddle" width="20" heigth="20"></a> |
			<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/proses_hapus_pencaker/<?php echo $tampil->pencaker_id ?>" onclick="return confirm ('Anda yakin menghapus data ini?')" title="Hapus Data Pencaker">
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
<td colspan="8"><div align="right"><b> Jumlah Record</b></div></td>
<td><div align="center"><b><?php echo $pencaker-> num_rows(); ?></b></div></td>
</tr>
</tfoot>
</table>
</div>
</div>
	</div>
</div>
		
		
