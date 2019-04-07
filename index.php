<?php
// Code & Design by Aldiskatel Studio
// https://github.com/aldiskatel
?>
<html lang="en">

<head>
<title>Aldifile-System</title><link href="../img/gembok.png" rel="shortcut icon" /><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Roboto:300);.login-page {width: 360px;padding: 8% 0 0;margin:auto;}.form {position: relative;z-index: 1;background: #FFFFFF;max-width: 360px;  margin: 0 auto 100px;padding: 45px;text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}a {text-decoration: none;	display: block;}.form input {font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #589ce0;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: rgba(170, 170, 170, 0.75);
}
.form .message {
  margin: 15px 0 0;
  color: #5f5b5b;
  font-size: 12px;
}
.form .message a {
  color: #5a9ec3;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #5a9ec3; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #5a9ec3, #8DC26F);
  background: -moz-linear-gradient(right, #5a9ec3, #8DC26F);
  background: -o-linear-gradient(right, #5a9ec3, #8DC26F);
  background: linear-gradient(to left, #5a9ec3, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
    </style>

	<meta charset="utf-8">
<meta name="robots" content="noindex,follow" />
</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script>
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: 'random',
			directionNavHide: false,
			pauseOnHover: true,
			captionOpacity: 1,
			prevText: '<',
			nextText: '>'
		});
	});
</script>
<div class="login-page"><div class="form">
<form  method="POST" name="input2" class="login-form"><h1>Aldifile-System</h1><hr>
<?php


$pilihan = $_POST['pilihan'];
switch($pilihan){
				/* JIKA PILIHAN PERTAMA (1) ADALAH Tidak*/
	case 21:
	?>
	<h3>Apakah anda suka membuat daftar belanjaan ketika akan pergi ke supermarket?</h3>
			<input type="radio" name="pilihan" value="33">Ya <br>
			<input type="radio" name="pilihan" value="34">Tidak<br>
			
	<?php
	break;
							/* Pilihan jika 21=a 33=a 33=a 45=a 65=ab */
									/* soal 33*/
	case 33:
	?>
			<h3>Apakah anda sering membicarakan orang lain ketika sedang bersama teman-teman anda?</h3>
			<input type="radio" name="pilihan" value="45">Ya <br>
			<input type="radio" name="pilihan" value="46">Tidak<br>
			
	<?php
			
	break;
									/*soal 34*/
	case 34:
	?>
			<h3>Apakah anda suka merasa kebingungan ketika akan membeli sesuatu di tempat belanja ?</h3>
			<input type="radio" name="pilihan" value="48">Ya <br>
			<input type="radio" name="pilihan" value="47"> Tidak<br>
	<?php
	break;
									
										/* soal 45*/
	case 45:
	?>
			<h3>Apakah Anda suka menawarkan teman untuk memesan makanan sesuai dengan yang anda pesan ?</h3>
			<input type="radio" name="pilihan" value="54">Ya <br>
			<input type="radio" name="pilihan" value="55">Tidak<br>
			
	<?php
			
	break;
									/* soal 46*/
	case 46:
	?>
			<h3>Apakah Anda suka memilih untuk diam ketika berselisih faham dengan orang lain?</h3>
			<input type="radio" name="pilihan" value="68">Ya <br>
			<input type="radio" name="pilihan" value="67">Tidak<br>
			
	<?php
			
	break;
	
									/* soal 47*/
	case 47:
	?>
			<h3>Apakah Anda tipe orang yang selalu percaya diri dalam melakukan suatu hal</h3>
			<input type="radio" name="pilihan" value="56">Ya <br>
			<input type="radio" name="pilihan" value="57">Tidak<br>
			
	<?php
			
	break;
	
	
									/*soal 48*/
	case 48:
	?>
			<h3>Apakah anda orang yang suka menunda-nunda pekerjaan dan akhirnya tidak jadi dilakukan ?</h3>
			<input type="radio" name="pilihan" value="42">Ya <br>
			<input type="radio" name="pilihan" value="43"> Tidak<br>
	<?php
	break;
				
									/* soal 54*/
	case 54:
	?>
			<h3>Apakah anda orang yang suka menunda-nunda pekerjaan dan akhirnya tidak jadi dilakukan ?</h3>
			<input type="radio" name="pilihan" value="65">Ya <br>
			<input type="radio" name="pilihan" value="66">Tidak<br>
			
	<?php
			
	break;			
				
									/* soal 55*/
	case 55:
	?>
			<h3>Apakah anda sering menangis dikamar mandi ketika ada masalah ?</h3>
			<input type="radio" name="pilihan" value="70">Ya <br>
			<input type="radio" name="pilihan" value="69">Tidak<br>
			
	<?php
			
	break;					

										/* soal 56*/
	case 56:
	?>
			<h3>Apakah Anda lebih memilih untuk diam ketika berselisih paham dengan orang lain ?</h3>
			<input type="radio" name="pilihan" value="671">Ya <br>
			<input type="radio" name="pilihan" value="681">Tidak<br>
			
	<?php
			
	break;	
											/* soal 57*/
	case 57:
	?>
			<h3>Apakah anda sering menangis dikamar mandi ketika ada masalah?</h3>
			<input type="radio" name="pilihan" value="703">Ya <br>
			<input type="radio" name="pilihan" value="693">Tidak<br>
			
	<?php
			
	break;	
										/* soal 65*/
	case 65:
	?>
			<h3>Apakah Anda sering mencari kambing hitam ketika menghadapi masalah?</h3>
			<input type="radio" name="pilihan" value="75">Ya <br>
			<input type="radio" name="pilihan" value="76">Tidak<br>
			
	<?php
			
		break;
									/* soal 66*/
	case 66:
	?>
			<h3> Apakah anda suka mengomentari mengenai rasa dari  makanan yang anda pesan ?</h3>
			<input type="radio" name="pilihan" value="80">Ya <br>
			<input type="radio" name="pilihan" value="761">Tidak<br>
			
	<?php
			
	break;
									/*soal 661*/
	case 661:
	?>
			<h3> Apakah Anda sering mencari kambing hitam ketika menghadapi masalah?</h3>
			<input type="radio" name="pilihan" value="751">Ya <br>
			<input type="radio" name="pilihan" value="762"> Tidak<br>
	<?php
	break;
										/*soal 651*/
	case 651:
	?>
			<h3> Apakah Anda sering mencari kambing hitam ketika menghadapi masalah ?</h3>
			<input type="radio" name="pilihan" value="753">Ya <br>
			<input type="radio" name="pilihan" value="76"> Tidak<br>
	<?php
	break;
	
										/* soal 67*/
	case 67:
	?>
			<h3>Apakah anda tipe orang yang suka membicarakan orang lain, tetapi takut jika orang tersebut mengetahuinya ?</h3>
			<input type="radio" name="pilihan" value="77">Ya <br>
			<input type="radio" name="pilihan" value="78">Tidak<br>
	<?php
	break;
										/* soal 671*/
	case 671:
	?>
			<h3>Apakah anda tipe orang yang suka membicarakan orang lain, tetapi takut jika orang tersebut mengetahuinya ?</h3>
			<input type="radio" name="pilihan" value="771">Ya <br>
			<input type="radio" name="pilihan" value="781">Tidak<br>
			
	<?php
			
	break;
												/* soal 681*/
	case 681:
	?>
			<h3>Apakah anda tipe orang yang suka membicarakan orang lain, tetapi takut jika orang tersebut mengetahuinya ?</h3>
			<input type="radio" name="pilihan" value="771">Ya <br>
			<input type="radio" name="pilihan" value="781">Tidak<br>
			
	<?php
			
	break;
											/* soal 68*/
	case 68:
	?>
			<h3>Apakah anda tipe orang yang suka membicarakan orang lain, tetapi takut jika orang tersebut mengetahuinya ?</h3>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
			
	<?php
			
	break;
	
									/* soal 70*/
	case 70:
	?>
			<h3>Apakah anda suka mengomentari mengenai rasa dari makanan yang anda pesan ?</h3>
			<input type="radio" name="pilihan" value="7">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
			
	<?php
			
	break;
										/* soal 703*/
	case 703:
	?>
			<h3>Apakah anda suka mengomentari mengenai rasa dari makanan yang anda pesan ?</h3>
			<input type="radio" name="pilihan" value="795">Ya <br>
			<input type="radio" name="pilihan" value="805">Tidak<br>
			
	<?php
			
	break;
											
												/* soal 69*/
	case 69:
	?>
			<h3>Apakah anda tipe orang yang serius dalam mempersiapkan segala sesuatu ?</h3>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="762">Tidak<br>
			
	<?php
			
	break;
										/* soal 693*/
	case 693:
	?>
			<h3>Apakah anda tipe orang yang serius dalam mempersiapkan segala sesuatu ?</h3>
			<input type="radio" name="pilihan" value="794">Ya <br>
			<input type="radio" name="pilihan" value="804">Tidak<br>
			
	<?php
			
	break;
											
										/* jawaban case 75*/
	case 75:
	?>
			<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
			<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1.	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>

			<input type="submit" name="pilihan" value="TES ULANG!" >
			
			
	<?php
	
			
			exit ();	
									/* jawaban case 76*/
	case 76:
	?>
			<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
			<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
			<input type="submit" name="pilihan" value="TES ULANG!" >
			
	<?php
			exit();	
									/* jawaban case 751*/
	case 751:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();	
							
			
				
									/* jawaban case 761*/
	case 761:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>kretria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();			
										/* jawaban case 762*/
	case 762:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>

								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();			
					
				
								/* jawaban case 79*/
	case 79:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();					
								/* jawaban case 78*/
	case 78:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();	
								/* jawaban case 78*/
	case 781:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();	
								/* jawaban case 77*/
	case 77:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();	
											/* jawaban case 771*/
	case 771:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
													/* jawaban case 781*/
	case 781:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
								/* jawaban case 80*/
	case 80:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
									/* jawaban case 791*/
	case 791:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();					
								/* jawaban case 801*/
	case 801:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
									/* jawaban case 752*/
	case 752:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
								/* jawaban case 753*/
	case 753:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
											/* jawaban case 794*/
	case 794:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
											/* jawaban case 804*/
	case 804:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
										/* jawaban case 805*/
	case 805:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah AB</h3>
								<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
											/* jawaban case 795*/
	case 795:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>

								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
												/* jawaban case 795*/
	case 7:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
											/* jawaban case 795*/
	case 8:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah  A</h3>
								<h3>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();
			
			
			
			
																			
		
		
				
							/* JIKA PILIHAN PERTAMA (1) ADALAH YA*/
											/*soal 22*/
	case 22:
	?>
	<h3>Apakah anda suka membuat daftar belanjaan ketika akan pergi ke supermarket?</h3>
			<input type="radio" name="pilihan" value="32">Ya <br>
			<input type="radio" name="pilihan" value="31">Tidak<br>
	<?php
	break;
										/* Soal 32*/
	case 32:
	?>
	<h3>Apakah anda tipe orang yang tidak mau menerima saran orang lain ketika saran itu tidak sesuai dengan yang  anda harapkan ?</h3>
			<input type="radio" name="pilihan" value="43">Ya <br>
			<input type="radio" name="pilihan" value="44">Tidak<br>
	<?php
	break;
										/* Soal 31*/
	case 31:
	?>
	<h3>3.	Apakah anda suka lama-lama ketika mengambil uang di ATM meskipun ada orang yang mengantri dibelakang anda?</h3>
			<input type="radio" name="pilihan" value="41">Ya <br>
			<input type="radio" name="pilihan" value="42">Tidak<br>
	<?php
	break;
										/* Soal 43*/
	case 43:
	?>
	<h3>Apakah anda suka mengomentari mengenai rasa dari makanan yang anda pesan ?</h3>
			<input type="radio" name="pilihan" value="53">Ya <br>
			<input type="radio" name="pilihan" value="511">Tidak<br>
	<?php
	break;
											/* Soal 44*/
	case 44:
	?>
	<h3>Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h3>
			<input type="radio" name="pilihan" value="611">Ya <br>
			<input type="radio" name="pilihan" value="621">Tidak<br>
	<?php
	break;
											/* Soal 42*/
	case 42:
	?>
	<h3>Apakah Anda suka merasa kebingungan ketika memilih menu makanan ?</h3>
			<input type="radio" name="pilihan" value="63">Ya <br>
			<input type="radio" name="pilihan" value="64">Tidak<br>
	<?php
	break;
										/* Soal 41*/
	case 41:
	?>
	<h3>Apakah anda suka memikirkan suatu masalah ketika sedang mandi ?</h3>
			<input type="radio" name="pilihan" value="52">Ya <br>
			<input type="radio" name="pilihan" value="51">Tidak<br>
	<?php
	break;
										/* Soal 51*/
	case 51:
	?>
	<h3>Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h3>
			<input type="radio" name="pilihan" value="61">Ya <br>
			<input type="radio" name="pilihan" value="62">Tidak<br>
	<?php
	break;
										/* Soal 511*/
	case 511:
	?>
	<h3> Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h3>
			<input type="radio" name="pilihan" value="612">Ya <br>
			<input type="radio" name="pilihan" value="622">Tidak<br>
	<?php
	break;
										/* Soal 52*/
	case 52:
	?>
	<h3>Apakah Anda suka merasa kebingungan ketika memilih menu makanan ?</h3>
			<input type="radio" name="pilihan" value="632">Ya <br>
			<input type="radio" name="pilihan" value="642">Tidak<br>
	<?php
	break;
	
										/* Soal 53*/
	case 53:
	?>
	<h3>Apakah Anda suka merasa kebingungan ketika memilih menu makanan ?</h3>
			<input type="radio" name="pilihan" value="631">Ya <br>
			<input type="radio" name="pilihan" value="641">Tidak<br>
	<?php
	break;
	
	
										/* Soal 61*/
	case 61:
	?>
	<h3>Apakah anda orang yang selektif dalam memilih teman ?</h3>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="71">Tidak<br>
	<?php
	break;
										/* Soal 62*/
	case 62:
	?>
	<h3>Apakah Anda tipe orang yang terbuka terhadap siapa saja ?</h3>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="71">Tidak<br>
	<?php
	break;
										/* Soal 611*/
	case 611:
	?>
	<h3>Apakah anda orang yang selektif dalam memilih teman ?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="71">Tidak<br>
	<?php
	break;
										/* Soal 621*/
	case 621:
	?>
	<h3>Apakah Anda tipe orang yang terbuka terhadap siapa saja? </h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
		
											/* Soal 612*/
	case 612:
	?>
	<h3>Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 622*/
	case 622:
	?>
	<h3>Apakah Anda tipe orang yang terbuka terhadap siapa saja?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 63*/
	case 63:
	?>
	<h3>apakah anda orang yang peka terhadap perasaan orang lain?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 631*/
	case 631:
	?>
	<h3>apakah anda tipe orang yang peka terhadap perasaan orang lain?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 632*/
	case 632:
	?>
	<h3>apakah anda tipe orang yang peka terhadap perasaan orang lain?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
	<?php
	break;
										/* Soal 641*/
	case 641:
	?>
	<h3>Apakah anda orang yang selektif dalam memilih teman ?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
	<?php
	break;
										/* Soal 642*/
	case 642:
	?>
	<h3>Apakah anda orang yang selektif dalam memilih teman ?</h3>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 64*/
	case 64:
	?>
	<h3>Apakah anda orang yang selektif dalam memilih teman ?</h3>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
	
	
	
	
	
										/*jawaban 72 */
										
	case 72:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah B</h3></br>
	<h3>							
<p align=center><font color=red>Kriteria Golongan Darah B</font></p>
1.	Mereka memiliki empati, mudah memahami pemikiran orang lain.<br>
2.	Mereka adalah spesialis di bidang yang digelutinya.<br>
3.	Jika mengerjakan sesuatu, mereka selalu fokus kepada apa yang tengah dikerjakan.<br>
4.	Tidak peduli dengan keadaan sekitar, mengharapkan banyak kebebasan<br>
5.	Memiliki gejolak emosi yang besar, temperamental.</h3>


								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();	
										/*jawaban 71 */
										
	case 71:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah B</h3>
								<h3>							
<p align=center><font color=red>Kriteria Golongan Darah B</font></p>
1.	Mereka memiliki empati, mudah memahami pemikiran orang lain.<br>
2.	Mereka adalah spesialis di bidang yang digelutinya.<br>
3.	Jika mengerjakan sesuatu, mereka selalu fokus kepada apa yang tengah dikerjakan.<br>
4.	Tidak peduli dengan keadaan sekitar, mengharapkan banyak kebebasan<br>
5.	Memiliki gejolak emosi yang besar, temperamental.</h3>								
								
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();	
												/*jawaban 6 */
										
	case 6:
	?>
								<h3>Anda cenderung memiliki tipe golongan darah O</h3>
								
	<h3>
	<p align=center><font color=000fff>Kriteria Golongan Darah O</font></p>
	1.Memiliki jiwa Pemimpin, berani<Br>
	2.Memiliki karakter yang terbuka, energik dan sosial<Br>
	3.Orang tipe ini suka menjadi pusat perhatian. Mengatakan apa yang ada dalam pikirannya secara jujur.<br>
	4.Emosinya bersifat stabil, sederhana sehingga apa yang telah terjadi tidak pernah meninggalkan efek yang lama.
	</h3>
								<input type="submit" name="pilihan" value="TES ULANG!" >
	<?php	
			exit();	
	
	
	
	
	
	
	
	
	
	default:
	?>
	<h3>Apakah anda suka mengungkapkan rasa kesal anda secara langsung terhadap seseorang ketika marah ?</h3>
			<input type="radio" name="pilihan" value="22">Ya <br>
			<input type="radio" name="pilihan" value="21">Tidak<br>
	<?php
	
	break;
}


?>



					
<input  type="submit" name="next" value="SELANJUTNYA" >
</form>


</body>

</html>
