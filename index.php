<html>
	<head>
		<title>Pilkasis | SMA Islam An-Nizhomiyah</title>
		<link rel="shortcut icon" href="gambar/logokecil.png">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/zero.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<script src="assets/js/jquery.2.1.1.min.js"></script>
		<!-- <script src="assets/js/bootstrap.js"></script> -->
		<script src="assets/js/zero.js"></script>
	</head>
	<body id="home" class="bg-secondary">
		<!-- Navigation -->
		      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand text-hide" href="/">krypton kernel
			  <img src="/asset/img/icon.png" class="rounded-circle d-block" width="36" height="36" viewBox="0 0 612 612" facusable="false">
            </a>
            <a class="navbar-brand" href="/">KryPtoN Project</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
						<li>
							<a href="#home" rel="page-scroll">Beranda</a>
						</li>
						<li>
							<a href="#galeri" rel="page-scroll" title="Galeri Kegiatan OSIS">Galeri</a>
						</li>
						<li>
							<a href="#login" rel="page-scroll" title="Login Sebagai ...">Login</a>
						</li>
            </ul>
          </div>
        </div>
      </nav>
		<!-- End Navigation -->

		<!-- Cover -->
		<div class="container text-center mt-2">
			<div class="card text-white bg-dark mb-3">
				<div class="card-body">
					<div class="col-lg-7 col-sm-7 col-xs-12 box-title">
						<h1>Selamat<span class="color-title">Datang</span></h1>
						<h2>PILKASIS Online SMKN 1 UDANAWU</h2>
					</div>
				</div>
			</div>
		</div>		
		<!-- End Cover -->

		<!-- CONTENT -->
		<div class="row content" id="kandidat">
			<div class="col-md-12 danger text-center zero-panel">
				<div class="col-md-8 zero-panel-content">
				<div class="card-body">
					<h1 id="title-about"> KANDIDAT OSIS </h1>
<?php
include_once "sambungan.php";
$sqljs="SELECT sum(jumlahsuara) as jsuara FROM kandidat";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);

$sql="SELECT * FROM kandidat ORDER BY nokandidat";
$query=mysqli_query($koneksi,$sql);
while($r=mysqli_fetch_array($query)){
	echo '
					<div class="col-md-6 text-justify col-sm-6" id="text-about-left">
						<center>';
	echo "<h3>No. ".$r['nokandidat']." - ".$r['nama']."</h3>";
	echo '
							<img src="gambar/kandidat/'.$r['foto'].'" class="img-circle" height="150px" alt id="img-about'.$r['nokandidat'].'">';
	echo "<h2>".round(($r['jumlahsuara']/$rjs['jsuara']*100),2)."%</h2>";
	echo $r['jumlahsuara']." suara";
	echo '					</center>
						<b>VISI:</b><br/>
						<center>'.$r['visi'].'</center>
						<b>MISI:</b><br/>
							'.$r['misi'].'
					</div>';
}
?>
				</div>
			</div>
		</div>
	</div>

		<!-- GALLERY -->
		<div class="row content" id="galeri">
			<div class="col-md-12 primary text-center zero-panel">
				<div class="col-md-8 zero-panel-content">
					<h1> GALERI KEGIATAN OSIS </h1>
					<p>
						Inilah beberapa kegiatan OSIS yang terdokumentasikan. Silahkan klik untuk tampilan secara rinci.
					</p>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Sanlat 2017</span>
							</div>
						</div>
						<img src="gambar/galeri5.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Tahun Ajaran Baru</span>
							</div>
						</div>
						<img src="gambar/galeri1.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Ujian Tengah Semester</span>
							</div>
						</div>
						<img src="gambar/galeri3.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Workshop Depicta 2016</span>
							</div>
						</div>
						<img src="gambar/galeri2.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Sertijab 2014</span>
							</div>
						</div>
						<img src="gambar/galeri4.jpg" class="img-responsive" alt>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 gallery">
					<a class="gallery-link" href="#">
						<div class="caption">
							<div class="caption-content danger">
								<span>Nuzulul Qur'an</span>
							</div>
						</div>
						<img src="gambar/galeri6.jpg" class="img-responsive" alt>
					</a>
				</div>

				<div class="clear"></div>
			</div>
		</div>
		<!-- END GALLERY -->
		
		<!-- LOGIN -->
		<div class="row content" id="login">
			<div class="col-lg-12 danger text-center zero-panel">
				<div class="col-lg-12 zero-panel-content">
				<div class="card-body">
					<h1> LOGIN sebagai .... </h1>
					<p>Silahkan login untuk memberikan suara. Login sebagai ...</p>
				</div>
				<br>
				<ul class="list-inline" id="chart-skill">
					<li><a href="siswa/" target="_blank">
						<div class="easy-pie-chart percentage" data-percent="100" data-color="#0000FF">
							<span class="percent">Login Siswa</span>
						</div></a>
					</li>
					<li><a href="guru/" target="_blank">
						<div class="easy-pie-chart percentage" data-percent="100" data-color="#F7F66B">
							<span class="percent">Login Guru</span>
						</div></a>
					</li>
					<li><a href="kandidat/" target="_blank">
						<div class="easy-pie-chart percentage" data-percent="100" data-color="#800080">
							<span class="percent">Login Kandidat</span>
						</div></a>
					</li>
					<li><a href="admin/" target="_blank">
						<div class="easy-pie-chart percentage" data-percent="100" data-color="#00A65A">
							<span class="percent">Login Admin</span>
						</div></a>
					</li>
				</ul>
				</div>
			</div>
		</div>
		<!-- END LOGIN -->
		<!-- END CONTENT -->

		<footer class="primary text-center">
			<div class="row">
				<div class="col-md-4">
					<h3>PILKASIS</h3>
					<p>
						Dhimas X TKJ 1 © 2019
					</p>
				</div>
				<div class="col-md-4">
					<h3>TEMUKAN KAMI</h3>
						<a href="http://github.com/KryPtoN" target="_blank" class="btn btn-xs btn-outline"><i class="fab fa-github fa-2x"></i></a>
						<a href="http://google.com/muhidins" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-google-plus fa-2x"></i></a>
						<a href="http://twitter.com/muhidins" target="_blank" class="btn btn-xs btn-outline"><i class="fa fa-twitter fa-2x"></i></a>
				</div>
			</div>
		</footer>

		<!-- MODAL -->
		<div class="zero-modal">
			<div class="close-modal">&times;</div>
			<div class="modal-content">
				<div class="modal-body">
					<div class="col-md-6 contain">
						<h1 class="title">PROJECT TITLE</h1>
						<div class="box-modal">
							<p>Mentafakuri Ayat-ayat di Alam Semesta, Korelasi Rumus Fisika dan Ayat Al-Qur'an" itulah Materi Sanlat Selasa, 13 Juni 2017 yang diikuti oleh seluruh siswa/i SMA PRO Kelas 10 dan 11, pemateri disampaikan oleh Bapak Ryksa Raharja, M.Pd.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL -->

		<script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>
		<script>
			var img = ['gambar/depicta2016.jpg', 'gambar/rohis.jpg','gambar/sertijab.jpg'];
			$(".cover").zeroSlide(img, 5000);

			// ANIMATE
			$("#title-about").zeroAnimate('fadein');
			$("#img-about1").zeroAnimate('slideFromLeft');
			$("#img-about2").zeroAnimate('slideFromRight');
			$("#about-service .col-md-4").each(function() {
				$(this).zeroAnimate('fadein');
			})
			$(".gallery .gallery-link").each(function() {
				$(this).zeroAnimate('slideFromLeft');
			});
			$("#box-contact").zeroAnimate('slideFromLeft');
			$("#box-map").zeroAnimate('fadein');
			$("#chart-skill li").each(function() {
				$(this).zeroAnimate('slideFromRight');
			})
			$("#our-process .media-border").each(function() {
				$(this).zeroAnimate("slideFromLeft");
			});
			$(".gallery-author").zeroAnimate('slideFromRight');
			// ENABLE LOADING ANIMATE
			$.zeroLoading("circle-simple");

			// SKILL CHART
			var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
			$('.easy-pie-chart.percentage').each(function(){
				$(this).easyPieChart({
					barColor: $(this).data('color'),
					trackColor: '#DDD',
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: 30,
					animate: oldie ? false : 1000,
					size:264
				}).css('color', $(this).data('color'));
			});

		</script>
	</body>
</html>
