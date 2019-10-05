<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-user'></i> 
TABEL KATEGORI</div><!-- /.panel-heading --><br/>
<a href="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/tambah_kategori'?>" class="btn btn-danger btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;TAMBAH DATA</a>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
	<tr>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">NO</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">NAMA KATEGORI</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">TANGGAL INPUT</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">TOMBOL AKSI</div></th>
	</tr>
</thead>
<tbody>
<?php
if (empty($kategori)) { ?>
	<tr>
		<td colspan="4">Data Tidak Ditemukan</td>
	</tr>
<?php 
		} else {
			$no = 1;
			foreach ($kategori->result() as $tampil) {
				?>
		<tr>
			<td><div align='center'><?php echo $no++ ?></div></td>
			<td><div align='center'><?php echo $tampil->nm_kategori?></div></td>
			<td><div align='center'><?php echo $Tgl=date("d F Y",strtotime($tampil->tgl_input)); ?></div></td>
				<td><div align='center'>
				<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/edit_kategori/<?php echo $tampil->id_kategori ?>" title="Edit Data Kategori">
				<img src="<?php echo base_url('assets/icon/editicon32.png'); ?>" align='absmiddle' width='20' height='20'></a> | 
				<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/proses_hapus_kategori/<?php echo $tampil->id_kategori?>" onclick="return confirm('Anda yakin akan menghapus data ini ?')" title='Hapus Data Kategori'>
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
		<td colspan="3"><div align="right"><b>Jumlah Record</b></div></td>
		<td><div align="center"><b><?php echo $kategori->num_rows();?></b></div></td>
	</tr>
</tfoot>
</table>
</div><!-- /.table-responsive -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Tampil karyawan -->
</div><!--  /.panel -->
</div><!-- /.col-lg-12 -->