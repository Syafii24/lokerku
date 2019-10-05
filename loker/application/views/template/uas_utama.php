<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Abdullah syafii tugas UAS 2018</title>

	<link rel="shortcut icon" href="<?php echo base_url('assets/images/albi.jpg'); ?>">

<!-- Core CSS - Include with every page -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

<!-- Page-Level Plugin CSS - Dashboard -->
<link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css'); ?>" rel="stylesheet">
	
<!-- Page-Level Plugin CSS - Tables -->
<link href="<?php echo base_url('assets/css/plugins/dataTables/dataTables.bootstrap.css'); ?>" rel="stylesheet">

<!-- SB Admin CSS - Include with every page -->
<link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">

<!-- Custom Styles -->
<link href="<?php echo base_url('assets/css/bootstrap-datepicker.min.css');?> " rel="stylesheet" />

<!-- Fungsi Penanggalan -->
<link href="<?php echo base_url('assets/calendar/css/jscal2.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/calendar/css/border-radius.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/calendar/css/steel/steel.css'); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/calendar/js/jscal2.js'); ?>"></script>
<script src="<?php echo base_url('assets/calendar/js/lang/en.js'); ?>"></script>
<script type="text/javascript">//<![CDATA[
      var cal = Calendar.setup({
          onSelect: function(cal) { cal.hide() }
      });
      cal.manageFields("f_btn1", "f_date1", "%Y-%m-%d");
      cal.manageFields("f_btn2", "f_date2", "%b %e, %Y");
      cal.manageFields("f_btn3", "f_date3", "%e %B %Y");
      cal.manageFields("f_btn4", "f_date4", "%A, %e %B, %Y");
      //]]></script>
</head>
<body>

</body>
</html>

<style type="text/css">
.navbar-default{
	background-color: #00ffff;
}

</style>
<div id="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.php">KASUS : Code Igniter - LOWONGAN KERJA</a>
	</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-user fa-fw"></i>User Profile</a></li>
            <!-- Menu Pengguna / Data Pengguna -->
			<li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a></li>
            <!-- Akhir Menu Pengguna -->
			<li class="divider"></li>
            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
		</ul>
        <!-- /.dropdown-user -->
	</li>
	<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="side-menu">
	<li class="sidebar-search">
		<center><img src="<?php echo base_url('assets/images/abdullah.jpg'); ?>" width="130" height="110"></center>
    </li>
	<li>
		<a href="<?php echo site_url('c_uas_31160014_abdullahsyafii'); ?>"><i class="fa fa-home fa-fw"></i> HOME</a>
	</li>
	<!-- Menu Master / Data Master -->
	<li>
		<a href="#">
		<i class="fa fa-bar-chart-o fa-fw"></i>DATA MASTER<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/pencaker'); ?>"><i class="fa fa-film fa-fw"></i>DATA PENCAKER</a></li>
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/perusahaan'); ?>"><i class="fa fa-list-alt fa-fw"></i>DATA PERUSAHAAN</a></li>
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/lowongan'); ?>"><i class="fa fa-shopping-cart fa-fw"></i>DATA LOWONGAN</a></li>
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/kategori'); ?>"><i class="fa fa-map-marker fa-fw"></i>DATA KATEGORI</a></li>
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/admin'); ?>"><i class="fa fa-user fa-fw"></i>DATA ADMIN</a></li>
		</ul>
        <!-- /.nav-second-level -->
	</li>
	<!-- Akhir Menu Master / Data Master -->
	<!-- Menu Transaksi / Data Transaksi -->
	<li>
		<a href="#">
		<i class="fa fa-table fa-fw"></i>TRANSAKSI<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/pendaftaran'); ?>">
			<i class="fa fa-edit fa-fw"></i>DATA PENDAFTARAN KERJA</a></li>		
		</ul>
        <!-- /.nav-second-level -->
	</li>
	<!-- Akhir Menu Transaksi / Data Transaksi -->
	<!-- Menu Laporan -->
	<li>
		<a href="#">
		<i class="fa fa-sitemap fa-fw"></i>LAPORAN<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/tampil_cetak_perusahaan'); ?>"><i class="fa fa-files-o fa-fw"></i>LAPORAN PERUSAHAAN</a></li>
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/tampil_cetak_lowongan'); ?>"><i class="fa fa-files-o fa-fw"></i>LAPORAN LOWONGAN</a></li>			
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/tampil_cetak_pencaker'); ?>"><i class="fa fa-files-o fa-fw"></i>LAPORAN PELAMAR</a></li>			
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/tampil_cetak_kategori'); ?>"><i class="fa fa-files-o fa-fw"></i>LAPORAN KATEGORI</a></li>			
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/tampil_cetak_admin'); ?>"><i class="fa fa-files-o fa-fw"></i>LAPORAN ADMIN</a></li>			
		</ul>
        <!-- /.nav-second-level -->
	</li>
	<!-- Akhir Menu Laporan -->
	<!-- Menu Pengguna / Data Pengguna -->
	<li>
		<a href="#">
		<i class="fa fa-wrench fa-fw"></i>PENGATURAN<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
			<li><a href="<?php echo site_url('c_uas_31160014_abdullahsyafii/pengguna'); ?>"><i class="fa fa-user"></i>
			PENGGUNA</a></li>			
		</ul>
		<!-- /.nav-second-level -->
	</li>
	<!-- Akhir Menu Pengguna -->
    <li>
		<a href="#"><i class="fa fa-sign-out fa-fw"></i>LOGOUT</a>
	</li>
</ul>
<!-- /#side-menu -->
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<!--<h1 class="page-header">Dashboard</h1>-->
		<br/>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
	<?php $this->load->view($isi); ?>
</div><!-- /.row -->
</div><!-- /#page-wrapper / -->
</div><!-- /#wrapper -->
<!-- Setting ukuran halaman ada di file sb-admin.css line 35-->

<div id="footer"><p align="center">
	<font color="#000000">TUGAS WEB 3 (PHP FRAMEWORK DENGAN CI) - KASUS : LOWONGAN KERJA - 
	<?php echo date("d F Y"); ?></font></p>
</div><!-- end #footer -->
<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>

<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/morris/morris.js'); ?>"></script>
	
<!-- Page-Level Plugin Scripts - Tables -->
<script src="<?php echo base_url('assets/js/plugins/dataTables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.bootstrap.js'); ?>"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="<?php echo base_url('assets/js/sb-admin.js'); ?>"></script>
	
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
	$(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>

<!-- Custom script for all page-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>

<!-- Script tambahan untuk cetak dan tanggal -->
<script type="text/javascript">
  $('#tgl1').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear:true,
    autoclose: true,
    todayHighlight: true
  });

    $('#tgl2').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear:true,
    autoclose: true,
    todayHighlight: true
  });
    
 function printContent(el){
      var restorapage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorapage;
    }
    </script>
  <!-- Akhir Script Tambahan Untuk Cetak Dan Tanggal -->

  <!-- script Tambahan Untuk Foto -->
  <script type="text/javascript">
          function tampilkanPreview(userfile,idpreview)
          { //membuat objek gambar
            var gb = userfile.files;
            //loop untuk merender gambar
            for (var i = 0; i < gb.length; i++)
              { // bikin variabel
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview=document.getElementById(idpreview);
                var reader = new FileReader();
                if (gbPreview.type.match(imageType))
                  { //jika tipe data sesuai
                    preview.file = gbPreview;
                    reader.onload = (function(element)
                    {
                      return function(e){
                        element.src = e.target.result;
                      };
                    }) (preview);
                    //membaca data URL gambar
                    reader.readAsDataURL(gbPreview);
                  }else{
                    //jika tipe data tidak sesuai
                    alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
                  }
             }
           }
           </script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#submit').submit(function(e){
        e.preventDefault();
        $.ajax({
          url:'<?php echo base_url(); ?>index.php/page/do_upload',
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:false,
          success: function(data){
            alert("Upload Image Berhasil.");
          }
      });
    });
    }); 
    </script>
    <!-- Akhir Script Tambahan Untuk Foto -->
</body>
</html>