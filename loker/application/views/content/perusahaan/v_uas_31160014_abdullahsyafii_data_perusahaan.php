<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-user'></i> 
TABEL PERUSAHAAN</div><!-- /.panel-heading --><br/>
<a href="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/tambah_perusahaan'?>" class="btn btn-danger btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;TAMBAH DATA</a>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
	<tr>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">NO</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">NAMA PERUSAHAAN</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">ALAMAT PERUSAHAAN</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">DESKRIPSI PERUSAHAAN</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">WEBSITE</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">TELEPON</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">TANGGAL BERDIRI</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">TOMBOL AKSI</div></th>
	</tr>
</thead>
<tbody>
<?php
if (empty($perusahaan)) { ?>
	<tr>
		<td colspan="8">Data Tidak Ditemukan</td>
	</tr>
<?php 
		} else {
			$no = 1;
			foreach ($perusahaan->result() as $tampil) {
				?>
		<tr>
			<td><div align='center'><?php echo $no++ ?></div></td>
			<td><div align='center'><?php echo $tampil->nm_perusahaan ?></div></td>
			<td><div align='center'><?php echo $tampil->alamat_perusahaan ?></div></td>
			<td><div align='center'><?php echo $tampil->deskripsi_perusahaan ?></div></td>
			<td><div align='center'><?php echo $tampil->web_perusahaan ?></div></td>
			<td><div align='center'><?php echo $tampil->telepon_perusahaan ?></div></td>
			<td><div align='center'>
				<?php echo $Tgl=date("d F Y",strtotime($tampil->tglberdiri)); ?></div></td>
				<td><div align='center'>
				<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/edit_perusahaan/<?php echo $tampil->id_perusahaan ?>" title="Edit Data Perusahaan">
				<img src="<?php echo base_url('assets/icon/editicon32.png'); ?>" align='absmiddle' width='20' height='20'></a> | 
				<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/proses_hapus_perusahaan/<?php echo $tampil->id_perusahaan ?>" onclick="return confirm('Anda yakin akan menghapus data ini ?')" title='Hapus Data Perusahaan'>
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
		<td colspan="8"><div align="right"><b>Jumlah Record</b></div></td>
		<td><div align="center"><b><?php echo $perusahaan->num_rows(); ?></b></div></td>
	</tr>
</tfoot>
</table>
</div><!-- /.table-responsive -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Tampil karyawan -->
</div><!--  /.panel -->
</div><!-- /.col-lg-12 -->