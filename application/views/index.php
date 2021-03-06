<!DOCTYPE HTML>
<!--
	Astral 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Readme</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="./js/jquery.js"></script>
		<script src="./js/config.js"></script>
		<script src="./js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="./css/skel-noscript.css" />
			<link rel="stylesheet" href="./css/style.css" />
			<link rel="stylesheet" href="./css/style-desktop.css" />
			<link rel="stylesheet" href="./css/noscript.css" />
		</noscript>
		
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="fa fa-home active"><span>Home</span></a>
						<a href="#koran" class="fa fa-folder"><span>Koran</span></a>
						<a href="#majalah" class="fa fa-folder"><span>Majalah</span></a>
						<a href="#test" class="fa fa-folder"><span>WS Teman</span></a>
						<a href="#test2" class="fa fa-folder"><span>WS Teman2</span></a>					
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- ReadMe -->
							<article id="me" class="panel">
								<header>
									<h1>Readme</h1>
									<span class="byline">By<li>M Harya Putra 18211011</li><li>Divo Afifartama 18211053</li></span>
								</header>
								<a href="#koran" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"></span>
								</a>
							</article>

						<!-- Koran --> 
							<article id="koran" class="panel">
								<header>
									<h2>Koran</h2>
								</header>
								<p>
									Data koran disimpan dalam bentuk file xml yang berada pada folder "data".
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan seluruh data koran</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/korans">"/tp/index.php/search/korans/"</a>
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan spesifik data koran </b>berdasarkan <b>ID nomor 15</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/koran/id/15/format/xml">"/tp/index.php/search/koran/id/15/format/xml"</a>
								</p>
								<p>
								<b>Output</b> dapat di<b>variasi</b>kan menjadi output dengan <b>format xml, json,</b> maupun <b>html</b> yang dapat di atur pada <b>bagian akhir URI</b> dengan format default xml (tanpa penulisan "format/...").
								<ul>Contoh <b>penampilan seluruh data koran</b> dalam bentuk <b>JSON</b><li><a href="./index.php/search/korans/format/json">"/tp/index.php/search/korans/format/json"</a></li></ul>
								</p>
								<a href="#majalah" class="jumplink pic">
									next to section majalah <span class="jumplink arrow fa fa-chevron-right"></span>
								</a>
							</article>

						<!-- Majalah --> 
							<article id="majalah" class="panel">
								<header>
									<h2>Majalah</h2>
								</header>
								<p>
									Data majalah disimpan dalam bentuk file csv yang berada pada folder "data".
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan seluruh data majalah</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/majalahs">"/tp/index.php/search/majalahs/"</a>
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan spesifik data majalah </b>berdasarkan <b>ID nomor 7</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/majalah/id/7/format/xml">"/tp/index.php/search/majalah/id/7/format/xml"</a>
								</p>
								<p>
								<b>Output</b> dapat di<b>variasi</b>kan menjadi output dengan <b>format xml, json, javascript, csv, plain</b> maupun <b>html</b> yang dapat di atur pada <b>bagian akhir URI</b> dengan format default xml (tanpa penulisan "format/...").
								<ul>Contoh <b>penampilan seluruh data majalah</b> dalam bentuk <b>JSON</b><li><a href="./index.php/search/majalahs/format/json">"/tp/index.php/search/majalahs/format/json"</a></li></ul>
								</p>
							</article>

						<!-- WS Teman --> 
							<article id="test" class="panel">
								<header>
									<h2>WS Teman</h2>
								</header>
								<p>berikut merupakan WS dari nico</p>
								<table id="tabel-nico" class="style1"></table>
								<script type="text/javascript">
$(document).ready(function() {
	$.ajax({
		type: "GET",
		url: "http://www.sti-itb.org/II3160-Pemograman-Integratif/show.php?data=makanan.xml",
		dataType: "xml",
		success: function(xml) {
			$(xml).find('makanan').each(function() {
				var nama = $(this).find('nama').text();
				var harga = $(this).find('harga').text();
				console.log(nama);
				$('<tr></tr>').html('<td>' + nama + '</td><td>' + harga + '</td>').appendTo('#tabel-nico');
			});
		}
	});
});
</script>
							</article>
							<!-- WS Teman 2 -->
							<article id="test2" class="panel">
								<header>
									<h2>WS Teman</h2>
								</header>
								<p>berikut merupakan WS dari andy</p>
<table id="tabel-andy" class="style1"></table>
								<script type="text/javascript">
$(document).ready(function() {
	$.ajax({
		type: "GET",
		url: "http://www.sti-itb.org/habib-andy/index.php/ws/menu/semua/",
		dataType: "xml",
		success: function(xml) {
			$(xml).find('menu').each(function() {
				var nama = $(this).find('nama').text();
				var daerah = $(this).find('daerah').text();
				var foto = $(this).find('foto').text();
				var harga = $(this).find('harga').text();
				var kategori = $(this).find('kategori').text();
				console.log(nama);
				$('<tr></tr>').html('<td>' + nama + '</td><td>' + daerah + '</td><td>'+ foto + '</td><td>'+ harga + '</td><td>'+ kategori + '</td>').appendTo('#tabel-andy');
			});
		}
	});
});
</script>
							</article>
							</article>
					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="links">
							<li>&copy; HaryaPutra</li>
							<li>Design : <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</div>
		
			</div>

	</body>
</html>