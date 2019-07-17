<!DOCTYPE html>
<!-- saved from url=(0036)https://web.snmptn.ac.id/siswa/login -->
<html lang="id"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Pendaftaran SNMPTN 2019 - SNMPTN</title>

<link rel="shortcut icon" href="https://web.snmptn.ac.id/favicon.png">

<link rel="stylesheet" href="css_style/site.min.css">
<link href="css_style/css" rel="stylesheet" type="text/css">

<script async="" src="css_style/analytics.js.download"></script><script src="css_style/site.min.js.download"></script>
<script type="text/javascript">
$(function() {
	$('.flash').delay(5000).hide('slow');
	$(".navbar i").tooltip({'placement': 'bottom'});
});
</script>

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
					<li><a href="tampil_data.html">Daftar Siswa yang Mendaftar</a></li>
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
<div class="panel panel-info">
    <!-- <div class="panel-heading">Jadwal Kegiatan SNMPTN 2019</div> -->
        <table class="table fancy">
            <tbody>
                <tr>
                    <th width='300px'>Nama</th>
                    <th width='300px'>Alamat</th>
                    <th width='300px'>Asal Sekolah</th>
                    <th width='300px'>Info</th>
                </tr>
                <?php
                include '../config.php';
                // session_start();
                // if($_SESSION['roll']!=2){
                //   echo '<script>location.href="../index.php"</script>';
                // }
                $sql = "SELECT tb_siswa.id_verifikasi,tb_verifikasi.nama_verifikasi,nama,alamat,tempat_lahir,tanggal_lahir,jurusan,asal_sekolah,id_siswa FROM tb_siswa inner join tb_verifikasi on tb_siswa.id_verifikasi = tb_verifikasi.id_verifikasi";
                $i = 1;
                $result = mysqli_query($connect_database,$sql);
                while($row=mysqli_fetch_array($result)){
                  echo "
                  <tr>
                  <td>".$row['nama']."</td>
                  <td>".$row['alamat']."</td>
                  <td>".$row['asal_sekolah']."</td>
                  <td>
                  <a href='info_siswa.php?id_siswa=".$row['id_siswa']."'>
                  <button class='btn btn-primary'>Info</button>
                  </a>
                  </td>
                  </tr>
                  ";
                }
                ?>
            </tbody>
        </table>
    </div>
			<!-- <div style="margin-top:10px" class="well well-sm">
				<p class="info" style="margin-top:0"><strong>Pendaftaran SNMPTN 2019 tidak dikenakan biaya.</strong></p>
				<p class="info">Panduan Pendaftaran dapat dilihat di <a href="http://www.snmptn.ac.id/manual/snmptn">alamat ini</a>.</p>
				<p class="info">Petunjuk teknis pengisian portofolio bidang seni dan olahraga dapat dilihat di <a href="http://www.snmptn.ac.id/Informasi_PORTOFOLIO_bagi_PESERTA_REV05012019.pdf">alamat ini</a>.</p>
				<p class="info" style="margin-bottom:0"><a href="http://bidikmisi.belmawa.ristekdikti.go.id/">Bidikmisi</a> bagi siswa yang tidak mampu <a href="http://bidikmisi.belmawa.ristekdikti.go.id/">http://bidikmisi.belmawa.ristekdikti.go.id</a>.</p>
			</div> -->
	</div>
	<!-- <div class="col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Call Center SNMPTN</div>
			<div class="panel-body">
				Call Center SNMPTN<br>
				<strong>0804-1-450-450</strong><br>
				Melayani setiap hari pukul 08.00 - 20.00 WIB<br>
				<strong><a href="http://halo.snmptn.ac.id/">halo.snmptn.ac.id</a></strong>
			</div>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">Bidikmisi</div>
			<div class="panel-body">
				Bagi siswa peserta Bidikmisi, mohon untuk memperhatikan hal-hal berikut:
				<ul>
					<li>Pastikan di kartu peserta SNMPTN Anda tertera status peserta Bidikmisi</li>
					<li>Anda harus melengkapi pendaftaran Bidikmisi di situs Bidikmisi <a href="http://bidikmisi.belmawa.ristekdikti.go.id/">http://bidikmisi.belmawa.ristekdikti.go.id</a></li>
					<li>Bidikmisi tidak berlaku untuk pilihan program studi di Universitas Islam Negeri</li>
				</ul>
			</div>
		</div>

			<div class="panel panel-info">
				<div class="panel-heading">Jadwal Kegiatan SNMPTN 2019</div>
									<table class="table fancy">
						<tbody><tr>
							<th>Kegiatan</th>
							<th>Periode</th>
						</tr>
												<tr>
							<td>Pendaftaran oleh siswa pelamar</td>
							<td>04 Februari 2019 jam 08:00 WIB - 19 Februari 2019 jam 22:00 WIB
														</td>
						</tr>
												<tr>
							<td>Periode pendaftaran oleh siswa pelamar</td>
							<td>04 Februari 2019 jam 08:00 WIB - 19 Februari 2019 jam 22:00 WIB
														</td>
						</tr>
												<tr>
							<td>Periode pencetakan kartu peserta SNMPTN</td>
							<td>04 Februari 2019 jam 08:00 WIB - 19 Februari 2019 jam 22:00 WIB
														</td>
						</tr>
												<tr>
							<td>Periode melengkapi pendaftaran oleh siswa pelamar</td>
							<td>04 Februari 2019 jam 08:00 WIB - 19 Februari 2019 jam 22:00 WIB
														</td>
						</tr>
												<tr>
							<td>Finalisasi pendaftaran oleh siswa</td>
							<td>04 Februari 2019 jam 08:00 WIB - 19 Februari 2019 jam 22:00 WIB
														</td>
						</tr>
												<tr>
							<td>Pengumuman hasil seleksi SNMPTN</td>
							<td>22 Maret 2019 jam 16:00 WIB
														</td>
						</tr>
											</tbody></table>
			</div>
		</div> -->
</div>


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

<link rel="stylesheet" href="css_style/prism.css">
<link rel="stylesheet" href="css_style/chosen.css">
  
<script src="css_style/chosen.jquery.js.download" type="text/javascript"></script>
<script src="css_style/prism.js.download" type="text/javascript" charset="utf-8"></script>
  
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