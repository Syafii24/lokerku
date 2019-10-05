<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
//<link rel="shortcut icon" href="<?php echo base_url('assets/images/abdullah.jpg'); ?>">
<title>.. Cetak Admin - PT. Sumber Alfaria Trijaya,Tbk</title>
<style type="text/css">
body, td, th {
	font-size: 10px;
}
.table{
	border: thin;
}
.table td, th{
	border-bottom: solid;
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 12px;
}
.table th{
	background-color: #cccccc;
}
h1,h2,h3,h4,h5{
	margin: -10px;
}
h1{
	margin-top: -10px;
	margin-bottom: -30px;
}
</style>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" width="300" border="0">
<tr>
<th width="920" align="center" valign="middle">
<img src='<?php echo base_url('assets/images/abdullah.jpg'); ?>' width='200' height='150'></th>
</tr>
</table>
<br>
<h1 style="text-align: center;"><u>Laporan Data Admin</u></h1><br><br>
<h4 style="text-align: center;"><?php echo "Tanggal : ".date('d-m-Y'); ?></h4><br><br>
<div id="tab1" class="tab_content">
<table width="300" class="table" align="center" cellpadding="0" cellspacing="0">
<thead align="center">
	<tr>
		<th width="40">NO</th>
        <th width="150">NAMA ADMIN</th>
        <th width="110">ALAMAT ADMIN</th>
        <th width="100">KODE POS</th>
        <th width="150">DESKRIPSI</th>
		<th width="50">TANGGAL INPUT</th>
	</tr
</thead>
<tbody align="center">
<?php
if (! empty($admin)) { 
	$no = 1;
	foreach ($admin->result() as $tampil) {
			$Tgl= date("d/m/Y",strtotime($tampil->admin_tglentry));
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td>".$tampil->admin_name."</td>";
			echo "<td>".$tampil->admin_address."</td>";
			echo "<td>".$tampil->admin_kode_pos."</td>";
			echo "<td>".$tampil->admin_deskripsi."</td>";
			echo "<td>".$Tgl."</td>";
			echo "</tr>";
			$no++;
	}
}
?>
</tbody>
<tfoot>
	<tr>
		<td colspan="4"><div align="right"><b>Jumlah Record</b></div></td>
		<td><div align="center"><b><?php echo $admin->num_rows();?></b></div></td>
	</tr>
</tfoot>
</table>
<br>
<br>
</div>
<br>
<table border="0" align="center">
<tr>
	<td width="228" height="41"><p align="center">Mengetahui,</p>	</td>
	<td width="115">&nbsp;</td>
	<td width="214">&nbsp;</td>
	<td width="298"><div align="center">Cirebon, <?php echo date("d F Y"); ?></div></td>
</tr>
<tr>
	<td><div align="center">Bagian Admin</div></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><div align="center">General Manager</div></td>
</tr>
<tr>
	<td><div align="center"></div></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><div align="center"></div></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td><div align="center"></div></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><div align="center"></div></td>
</tr>
<tr>
	<td><div align="center"><u>(Abdullah)</u></div></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><div align="center"><u>(Syafii)</u></div></td>
</tr>
</table>
<br>
<br>
<br>
</body>
</html>
