<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><i class='fa fa-user'></i> 
TABEL DATA PENDAFTARAN</div><!-- /.panel-heading --><br/>
<a href="<?php echo site_url().'/c_uas_31160014_abdullahsyafii/tambah_pendaftaran'?>" class="btn btn-danger btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;TAMBAH DATA</a>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
	<tr>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">NO</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">TANGGAL DAFTAR</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">NAMA PENCAKER</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">NAMA PERUSAHAAN</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">NAMA LOWONGAN</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">KETERANGAN DAFTAR</div></th>
		<th style="border:3px double aqua; background-color: yellow;"><div align="center">FOTO PENCAKER</div></th>
        <th style="border:3px double aqua; background-color: yellow;"><div align="center">TOMBOL AKSI</div></th>
	</tr>
</thead>
<tbody>
<?php
if (empty($pendaftaran)) { ?>
	<tr>
		<td colspan="8">Data Tidak Ditemukan</td>
	</tr>
<?php
} else{
	$no = 1;
	foreach ($pendaftaran->result() as $tampil) {
		?>
		<tr>
			<td><div align='center'><?php echo $no++ ?></div></td>
			<td><div align='center'><?php echo $Tgl=date("d F Y",strtotime($tampil->tgl_daftar)); ?></div></td>
			<td><div align='center'><?php echo $tampil->nm_pencaker ?></div></td>
			<td><div align='center'><?php echo $tampil->nm_perusahaan ?></div></td>
			<td><div align='center'><?php echo $tampil->nm_lowongan ?></div></td>
			<td><div align='center'><?php echo $tampil->keterangan_daftar ?></div></td>
			<td><div align="center">
			<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/detail_pencaker/<?php echo $tampil->pencaker_id ?>">
			<img class="img-thumbnail" src="<?php echo base_url().'assets/pencaker/'.$tampil->pencaker_photo ?>" width="60" height="80" title="<?php echo $tampil->pencaker_photo ?>"></a></div></td>	
			<td><div align='center'>
				<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/edit_pendaftaran/<?php echo $tampil->id_pendaftaran ?>" title="Edit Data PENDAFTARAN">
				<img src="<?php echo base_url('assets/icon/editicon32.png'); ?>" 
				align='absmiddle' width='20' height='20'></a> | 
				<a href="<?php echo base_url() ?>index.php/c_uas_31160014_abdullahsyafii/proses_hapus_pendaftaran/<?php echo $tampil->id_pendaftaran ?>" 
				onclick="return confirm('Anda yakin akan menghapus data ini ?')" title='Hapus Data PENDAFTARAN'>
				<img src="<?php echo base_url('assets/icon/ButtonDeleteicon32.png'); ?>" 
				align='absmiddle' width='20' height='20'></i></a>
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
		<td colspan="6"><td><div align="right"><b>Jumlah Record</b></div></td>
		<td><div align="center"><b><?php echo $pendaftaran->num_rows(); ?></b></div></td>
	</tr>
</tfoot>
</table>
</div><!-- /.table-responsive -->
</div><!-- /.panel-body -->
<!-- Akhir Source Code - Tampil karyawan -->
</div><!--  /.panel -->
</div><!-- /.col-lg-12 -->