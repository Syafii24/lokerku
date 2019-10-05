<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
//<link rel="shortcut icon" href="<?php echo base_url('assets/images/abdullah.jpg'); ?>">
<title>.. Cetak Perusahaan - PT. Sumber Alfaria Trijaya,Tbk</title>
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
img { width:50px; }
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
<h1 style="text-align: center;"><u>Laporan Data Pencaker</u></h1><br><br>
<h4 style="text-align: center;"><?php echo "Tanggal : ".date('d-m-Y'); ?></h4><br><br>
<div id="tab1" class="tab_content">
<table width="300" class="table" align="center" cellpadding="0" cellspacing="0">
<thead align="center">
	<tr>
		<th width="40">NO</th>
        <th width="130">NAMA PELAMAR</th>
        <th width="100">JENIS KELAMIN</th>
		<th width="100">ALAMAT</th>
		<th width="100">EMAIL</th>
		<th width="100">STATUS</th>
		<th width="80">FOTO</th>
		<th width="80">TANGGAL LAHIR</th>
	</tr>
</thead>
<tbody align="center">
<?php
if (! empty($pencaker)) { 
	$no = 1;
	foreach ($pencaker->result() as $tampil) {
			$Tgl= date("d/m/Y",strtotime($tampil->tgl_lahir));
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td>".$tampil->nm_pencaker."</td>";
			echo "<td>".$tampil->jnskelamin."</td>";
			echo "<td>".$tampil->alamat_pencaker."</td>"; 
			echo "<td>".$tampil->email."</td>"; 
			echo "<td>".$tampil->status."</td>";
			echo "<td>".$tampil->pencaker_photo."</td>";
			echo "<td>".$Tgl."</td>";
			echo "</tr>";
			$no++;
	}
}
?>
</tbody>
<tfoot>
	<tr>
		<td colspan="6"><div align="right"><b>Jumlah Record</b></div></td>
		<td><div align="center"><b><?php echo $pencaker->num_rows();?></b></div></td>
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
