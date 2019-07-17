<!DOCTYPE html>
<!-- saved from url=(0036)https://web.snmptn.ac.id/siswa/login -->
<html lang="id"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Pendaftaran SNMPTN 2019 - SNMPTN</title>

<link rel="shortcut icon" href="https://web.snmptn.ac.id/favicon.png">

<link rel="stylesheet" href="./Pendaftaran SNMPTN 2019 - SNMPTN_files/site.min.css">
<link href="./Pendaftaran SNMPTN 2019 - SNMPTN_files/css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script async="" src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/analytics.js.download"></script><script src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/site.min.js.download"></script>
<script type="text/javascript">
$(function() {
	$('.flash').delay(5000).hide('slow');
	$(".navbar i").tooltip({'placement': 'bottom'});
});
</script>
<style>
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<style type="text/css">
	.logos { border-top: 1px solid #CCC; padding-top: 20px; }
</style>
</head>
<body>
<div class="navbar navbar-static-top navbar-inverse t-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-main-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="Pendaftaran SNMPTN 2019 - SNMPTN.html">SMK</a>
		</div>
			<div class="collapse navbar-collapse navbar-main-collapse">
				<ul class="nav navbar-nav">
					<li><a href="http://www.snmptn.ac.id/">Informasi Pendaftaran</a></li>
					<li><a href="http://www.snmptn.ac.id/">Data Siswa Diterima</a></li>
					<li><a href="https://web.snmptn.ac.id/portofolio">Tentang</a></li>
				</ul>
			</div>		
	</div>
</div>


<div class="container t-title">
		<h1>Daftar Siswa yang Mendaftar</h1>
</div>

<!-- HARDCODED RUNNING TEXT
<marquee class="alert alert-info" behavior="scroll" direction="left">
	Pendaftaran dan Finalisasi SNMPTN 2019 diperpanjang sampai SELASA, 19 Februari 2019 pukul 22.00 WIB.
</marquee>
-->

<div class="container t-content">
	
	


<div class="row">
	<div class="col-sm-">
		<div class="alert alert-warning">			Mulai hari Senin, 18 Februari 2019, pukul 14.00 WIB pengaturan antrian NISN ganjil dan genap tidak diberlakukan lagi.
			Apabila diperlukan, pengaturan antrian dapat diberlakukan kembali secara otomatis sesuai kondisi.
		</div>		
			<!-- <ul class="nav nav-tabs">
				<li><a href="Pendaftaran SNMPTN 2019 - SNMPTN.html">Pendaftaran Siswa</a></li>
				<li class="active"><a href="login.html">Login Sekolah</a></li>
			</ul> -->

						<!-- <p class="info">Masukkan NISN dan <em>password</em> Anda.
			<em>Password</em> yang digunakan adalah <em>password</em> yang sama dengan password sistem PDSS.<br>
			Bagi yang belum mendapatkan <em>password</em> silakan meminta kepada pihak sekolah.
			</p> -->
<!-- <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

	<div class='panel panel-info'>
		<!-- <div class='panel-heading'>Jadwal Kegiatan SNMPTN 2019</div> -->
			<table class='table fancy'>
				<tbody>
					<tr>
						<th width='300px'>Nama</th>
						<th width='300px'>Alamat</th>
						<th width='300px'>Asal Sekolah</th>
						<th width='300px'>Status Diterima</th>
					</tr>
					<?php
					include 'config.php';
					$sql2 = "SELECT tb_siswa.id_verifikasi,tb_verifikasi.nama_verifikasi,nama,alamat,tempat_lahir,tanggal_lahir,jurusan,asal_sekolah,id_siswa FROM tb_siswa inner join tb_verifikasi on tb_siswa.id_verifikasi = tb_verifikasi.id_verifikasi where tb_siswa.id_verifikasi=2";
					$result2 = mysqli_query($connect_database,$sql2);
					while($row2=mysqli_fetch_array($result2)){
					  echo "
					  <tr>
					  <td>".$row2['nama']."</td>
					  <td>".$row2['alamat']."</td>
					  <td>".$row2['asal_sekolah']."</td>
					  <td>".$row2['nama_verifikasi']."</td>
					  </tr>
					  ";
					}
					?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
	





<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
<!-- 

	</div>

<!-- <div class="container t-footer">
	<div class="row">
        <div class="col-md-12">
            <img src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/ltmpt.jpg" alt="Smiley face"> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/telkom.png" alt="Smiley face" height="46" width="68"> 
            <img src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/mandiri.png" alt="Smiley face" height="26" width="68"> 
            <img src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/bni.png" alt="Smiley face" height="26" width="68"> 
            <img src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/btn.png" alt="Smiley face" height="26" width="68"> 
            <img src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/tvri.png" alt="Smiley face" height="26" width="68"> 
        </div>
    </div>
	<div class="row">
        <div class="col-md-12">
            <p>© 2012 - 2019</p>
        </div>
    </div>
	<label style="font-size: 6px; font-weight: normal; font-variant: small-caps;">frontend-22</label> <p></p>
</div> -->

<script type="text/javascript">
	$('.error input, input[name=nisn]').first().focus();
</script>

<link rel="stylesheet" href="./Pendaftaran SNMPTN 2019 - SNMPTN_files/prism.css">
<link rel="stylesheet" href="./Pendaftaran SNMPTN 2019 - SNMPTN_files/chosen.css">
  
<script src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/chosen.jquery.js.download" type="text/javascript"></script>
<script src="./Pendaftaran SNMPTN 2019 - SNMPTN_files/prism.js.download" type="text/javascript" charset="utf-8"></script>
  
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
}
	
$("[name='school'").chosen(  {no_results_text:'Sekolah yang anda maksud tidak ditemukan!'} );
	 
</script>
  


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72479844-2', 'auto');
  ga('send', 'pageview');





	ga('send', {
	  hitType: 'event',
	  eventCategory: 'Server Akses',
	  eventAction: 'Server frontend-22',
	  eventLabel: 'Server frontend-22'
	});
		  

</script>



</body>
</html>