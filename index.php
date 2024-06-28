<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
				<image id="logo-perpustakaan" src="images/riders-logo.png" border=0 style="border:0; text-decoration:none; outline:none"> 
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1> Riders Club </h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
				</div>
			</div>
		</div>
		<div id="header2">
			<nav class="nav">
				<ul class="ul-nav">
				<li class="list-nav"><a href="index.php?p=beranda">Home</a></li>
				<li class="list-nav"><a href="index.php?p=profile">Profile</a></li>
				<li class="list-nav"><a href="index.php?p=visi-misi">Visi dan Misi</a></li>
				<li class="list-nav"><a href="index.php?p=produk">Produk Kami</a></li>
				<li class="list-nav"><a href="index.php?p=kontak">Kontak Kami</a></li>
				<li class="list-nav"><a href="index.php?p=about">About Us</a></li>
				</ul>

			</nav>
		</div>
		<div id="sidebar">
			<ul>
				<li class="label-navigasi"  >
					<a href="index.php?p=artikel">Artikel</a>
				</li>
				<li class="label-navigasi" >
					<a href="index.php?p=event">Event</a>
				</li>
				<li class="label-navigasi" >
					<a href="index.php?p=galeri">Galery Foto</a>
				</li>
				<li class="label-navigasi" >
					<a href="index.php?p=klien">Klien Kami</a>
				</li>
				<li class="label-navigasi">
				<a href="index.php?p=login">Login</a>
				</li>
				<li class="label-navigasi-login"><a href="index.php?p=login">Sign in</a></li>
				<li class="label-navigasi-login"><a href="index.php?p=register">Sign up</a></li>
			</ul>
		</div>
		<div id="content-container">
			    <div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
		<div id="footer"><h3>© 2024 Riders Club Indonesia. All rights reserved.</h3></div>
	</div>
</body>
</html>