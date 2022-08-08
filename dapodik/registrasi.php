<?php
	$apr = $init->src;
	function lent(){
		global $apr;
		echo($apr."dapodik/");
	}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Aplikasi Dapodikdasmen Ditjen Dikdasmen</title>

		<!-- Bootstrap Core CSS -->
		<link href="<?=lent();?>login_assets/log/css/bootstrap.min.cosmo.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?=lent();?>login_assets/log/css/full-slider.css" rel="stylesheet">
		<style type="text/css">
			.containers{
				border: 1px solid #333335;
				width: 900px;
				background-color: #1a4b4c;
				/*background-image: url(resources/images/72thn.png);*/
				/*background-repeat: no-repeat;*/
				/*background-size: 80px 60px;*/
				/*background-attachment: fixed;*/
				/*background-position: center center;*/
				margin:auto;
				margin-top:5%;
				/*height:200px;*/
				padding:10px;
			}

			.box{
				border: 0px solid #000;
				width: 100%;
				height: 100%;
			}

			.box_login{
				margin:20px;
				color:white;
				border:0px solid #fff;
				content:'';
				/*height:100%;*/
			}

			body {
				/*background-color: #a6a6a6;*/
				background: url(<?=lent();?>resources/images/swirl_pattern.png);
				/*background-image: url(resources/images/72thn.png);*/
				/*background-repeat: repeat;*/
				/*background-size: 250px 250px;*/
				/*background-attachment: fixed;*/
				color: #111;
				/*font-size: 40%;*/
				padding: 20px 0px;
			}
			.ribbon-start, .ribbon, .ribbon-end {
				background-color: #31979b;
				background-image: -webkit-gradient(linear, 100% 0%, 0% 100%,
				from(transparent), color-stop(0.25, transparent),
				color-stop(0.25, hsla(0,0%,0%,.15)), color-stop(0.50, hsla(0,0%,0%,.15)),
				color-stop(0.50, transparent), color-stop(0.75, transparent),
				color-stop(0.75, hsla(0,0%,0%,.15)), to(hsla(0,0%,0%,.15)));
				background-image: -webkit-linear-gradient(right top,
				transparent 0%, transparent 25%,
				hsla(0,0%,0%,.15) 25%, hsla(0,0%,0%,.15) 50%,
				transparent 50%, transparent 75%,
				hsla(0,0%,0%,.15) 75%, hsla(0,0%,0%,.15) 100%);
				background-image:
				-moz-linear-gradient(left bottom,
				transparent 0%, transparent 25%,
				hsla(0,0%,0%,.15) 25%, hsla(0,0%,0%,.15) 50%,
				transparent 50%, transparent 75%,
				hsla(0,0%,0%,.15) 75%, hsla(0,0%,0%,.15) 100%);
				background-image:
				-ms-linear-gradient(right bottom,
				transparent 0%, transparent 25%,
				hsla(0,0%,0%,.15) 25%, hsla(0,0%,0%,.15) 50%,
				transparent 50%, transparent 75%,
				hsla(0,0%,0%,.15) 75%, hsla(0,0%,0%,.15) 100%);
				background-image:
				-o-linear-gradient(right bottom,
				transparent 0%, transparent 25%,
				hsla(0,0%,0%,.15) 25%, hsla(0,0%,0%,.15) 50%,
				transparent 50%, transparent 75%,
				hsla(0,0%,0%,.15) 75%, hsla(0,0%,0%,.15) 100%);
				background-image:
				linear-gradient(right bottom,
				transparent 0%, transparent 25%,
				hsla(0,0%,0%,.15) 25%, hsla(0,0%,0%,.15) 50%,
				transparent 50%, transparent 75%,
				hsla(0,0%,0%,.15) 75%, hsla(0,0%,0%,.15) 100%);
				-webkit-background-size: 3px 3px;
				-moz-background-size: 3px 3px;
				-ms-background-size: 3px 3px;
				-o-background-size: 3px 3px;
				background-size: 3px 3px;
			}
			.ribbon-start, .ribbon, .ribbon-end {
				height: 60px;
				float: left;
				position: relative;
				width: 75px;
			}
			.ribbon-start, .ribbon-end {
				overflow: hidden;
			}
			.ribbon-start {
				-webkit-box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				17px 1px 2px hsla(0,0%,0%,.4);
				-moz-box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				17px 1px 2px hsla(0,0%,0%,.4);
				box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				17px 1px 2px hsla(0,0%,0%,.25);
			}
			.ribbon-end {
				-webkit-box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				-17px 1px 2px hsla(0,0%,0%,.4);
				-moz-box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				-17px 1px 2px hsla(0,0%,0%,.4);
				box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				-17px 1px 2px hsla(0,0%,0%,.25);
			}
			.ribbon {
				margin: 0 -51px;
				top: 20px;
				width: 112%;
				z-index: 10;
				-webkit-box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				0 2px 5px hsla(0,0%,0%,.4);
				-moz-box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				0 2px 5px hsla(0,0%,0%,.4);
				box-shadow: inset 0 -25px 25px hsla(0,0%,0%,.2),
				inset 0 0 0 2px hsla(0,0%,100%,.25),
				inset 0 0 0 1px hsla(0,0%,0%,.75),
				0 2px 5px hsla(0,0%,0%,.25);
			}
			.ribbon:after, .ribbon:before {
				border-top: 25px solid #014266;
				/*border-top: 25px solid hsla(0,0%,0%,.5);*/
				bottom: -25px;
				content: '';
				height: 0;
				position: absolute;
				width: 0;
			}
			.ribbon:after {
				border-left: 25px solid transparent;
				left: 0;
			}
			.ribbon:before {
				border-right: 25px solid transparent;
				right: 0;
				display: none;
			}
			.ribbon-start:after, .ribbon-start:before, .ribbon-end:after, .ribbon-end:before {
				content: '';
				height: 50px;
				position: absolute;
				top: 0;
				width: 50px;
				-webkit-transform: rotate(45deg);
				-moz-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				-o-transform: rotate(45deg);
				transform: rotate(45deg);
			}
			.ribbon-start:after, .ribbon-end:after {
				background: #a6a6a6;
			}
			.ribbon-start:after {
				left: -20px;
			}
			.ribbon-end:after {
				right: -20px;
			}
			.ribbon-start:before, .ribbon-end:before {
				background: hsla(0,0%,0%,.5);
			}
			.ribbon-start:before {
				left: -19px;
			}
			.ribbon-end:before {
				right: -19px;
			}
			.ribbon ul, .ribbon li {
				list-style: none;
				margin: 0;
				padding: 0;
			}
			.ribbon a {
				color: #f6f6f6;
				display: block;
				float: left;
				font: 1em/48px georgia, serif;
				text-align: center;
				text-decoration: none;
				text-shadow: 0 1px 1px hsla(0,0%,0%,.25);
				width: 100px;
			}
			.ribbon a:hover, .ribbon a:focus {
				text-shadow: 0 1px 1px hsla(0,0%,0%,.25),
				0 0 5px hsla(0,0%,100%,.5);
			}
			.ribbon a:active {
				position: relative;
				top: 1px;
			}
			.content {
				background: #f6f6f6;
				margin: -50px 65px;
				padding: 100px 20px 20px;
				position: relative;
				width: 340px;
				z-index: 5;
				-webkit-box-shadow: inset 0 0 0 1px hsla(0,0%,0%,.5),
				inset 0 0 50px hsla(0,0%,0%,.2),
				0 2px 5px hsla(0,0%,0%,.25);
				-moz-box-shadow: inset 0 0 0 1px hsla(0,0%,0%,.5),
				inset 0 0 50px hsla(0,0%,0%,.2),
				0 2px 5px hsla(0,0%,0%,.25);
				box-shadow: inset 0 0 0 1px hsla(0,0%,0%,.5),
				inset 0 0 50px hsla(0,0%,0%,.2),
				0 2px 5px hsla(0,0%,0%,.25);
			}

			.judul{
				font-size: 30px;
				color: white;
				margin-top:5px;
				width: 100%;
				font-weight: bold;
				text-align: center;
			}

			.logo{
				content: '';
				height:80px;
				width: 100%;
				text-align: center;
				margin-top:-50px;
			}

			.gap{
				content: '';
				height:70px;
			}

			.form-control{
				background: #333335;
				color:white;
				font-size: 11px;
				border-top:0px solid transparent;
				border-left:0px solid transparent;
				border-right:0px solid transparent;
			}

			.control-label{
				font-size: 11px;
			}

			/* Change the white to any color ;) */
			input:-webkit-autofill {
				-webkit-box-shadow: 0 0 0px 1000px #333335 inset;
				-webkit-text-fill-color: #22A6F1 !important;
			}

			@media screen and (max-width: 1070px) {
				.containers{
					width: 100%;
				}

				.ribbon:before, .ribbon:after{
					display: none;
				}

				.ribbon{
					width: 100%;
					margin:auto;
				}
			}

			@media screen and (max-width: 950px) {
				.gambar-banner{
					display: none;
				}
			}

			.mask{
				position: fixed;
				top:0px;
				z-index:999998;
				width: 100%;
				height: 100%;
				background: black;
				opacity: 0.5;
				display: none;
			}

			.progres{
				display: none;
				position: fixed;
				top:0%;
				/*height: 200px;*/
				background: black;
				width: 100%;
				opacity:0.9;
				z-index: 999999;
				color:white;
				margin:auto;
				text-align: center;
				padding-top:20px;
				padding-bottom:20px;
			}

			.warning{
				display: none;
				position: fixed;
				top:0%;
				/*height: 200px;*/
				background: black;
				width: 100%;
				opacity:0.9;
				z-index: 999999;
				color:white;
				margin:auto;
				text-align: center;
				padding-top:20px;
				/*padding-bottom:20px;*/
			}

			/*@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);*/
			/*$('.image_sekolah').html('<div class="col-md-3 gambar-banner" style="height:410px;background:url(resources/images/semua_jenjang.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div>');*/
			#slider {
				position: relative;
				overflow: hidden;
				margin: 10px auto 0 auto;
				border-radius: 4px;
			}

			#slider ul {
				position: relative;
				margin: 0;
				padding: 0;
				height: 200px;
				list-style: none;
			}

			#slider ul li {
				position: relative;
				display: block;
				float: left;
				margin: 0;
				padding: 0;
				width: 290px;
				height: 410px;
				background: #ccc;
				text-align: center;
				line-height: 300px;
			}

			a.control_prev, a.control_next {
				position: absolute;
				top: 86%;
				z-index: 999;
				display: block;
				padding: 4% 3%;
				width: auto;
				height: auto;
				background: #2a2a2a;
				color: #fff;
				text-decoration: none;
				font-weight: 600;
				font-size: 18px;
				opacity: 0.5;
				cursor: pointer;
			}

			a.control_prev:hover, a.control_next:hover {
				opacity: 1;
				-webkit-transition: all 0.2s ease;
			}

			a.control_prev {
				border-radius: 0 2px 2px 0;
			}

			a.control_next {
				right: 0;
				border-radius: 2px 0 0 2px;
			}

			.slider_option {
				position: relative;
				margin-left: 590px;
				/*margin: 10px auto;*/
				/*width: 160px;*/
				font-size: 12px;
				color: #FFFFFF;
			}
		</style>
		<link href="<?=lent();?>resources/css/w3.css" rel="stylesheet">
		<script type="text/javascript">
			function validateEmail(email){
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(email);
			}

			function ifServerOnline(ifOnline, ifOffline) {
				var img = document.body.appendChild(document.createElement("img"));
				var randomNum = Math.round(Math.random() * 10000);

				img.onload = function() {
					// console.log('oke');
					ifOnline && ifOnline.constructor == Function && ifOnline();
				};

				img.onerror = function() {
					// console.log('error');
					ifOffline && ifOffline.constructor == Function && ifOffline();
				};

				img.src = "http://118.98.166.57/cek.png?rand=" + randomNum;
				img.remove();
			}

			function sendAjax(urlsync){
				$.ajax({
					url: urlsync,
					dataType: "JSONP",
					jsonpCallback: "callbacksync",
					type: 'GET',
					timeout: 10000000000000,
					data: {
						'act': 'registrasi',
						'kode_registrasi': document.forms["myForm"]["kode_registrasi"].value,
						'username': document.forms["myForm"]["username"].value,
						'password': document.forms["myForm"]["password"].value
				},
				success: function(msg){
					$('.peringatan').remove();
					$('.progres').hide();
					$('.mask').hide();

					if(msg.success){
						var messagebox = "";
						$('.warning').append('<div class="alert alert-dismissable alert-success peringatan" style="font-size:14px">' +
						'Mohon tunggu, sedang mengakhiri proses registrasi' +
						'</div>');

						$.ajax({
							url: 'customrest/ceksekolah',
							dataType: 'json',
							type: 'GET',
							timeout: 100000,
							data: {
							'kode_registrasi': document.forms["myForm"]["kode_registrasi"].value,
							'username': document.forms["myForm"]["username"].value
						},
						success: function(message){
							$('.warning').hide();

							messagebox += "NPSN: "+ message.npsn +"<br>";
							messagebox += "Nama Sekolah: "+ message.nama +"<br>";
							messagebox += "Nama Operator: "+ message.nama_ops;

							bootbox.alert({
								title: 'Registrasi Berhasil',
								size: 'small',
								message: messagebox,
								closeButton: false,
								callback: function(btn){
									window.location='/';
								}
							})
						},
						error: function(msg){
							$('.warning').hide();
							messagebox += "Terjadi kesalahan dalam mencari sekolah";

							bootbox.alert({
								title: 'Error',
								size: 'small',
								message: messagebox,
								closeButton: false,
								callback: function(btn){
									// console.log('tutup');
									window.location='/';
								}
							})
						}
					});

					// $('.warning').append('<div class="alert alert-dismissable alert-success peringatan" style="font-size:14px">' +
					//     msg.message + '<br>Sedang dialihkan ke halaman login, mohon tunggu...' +
					// '</div>');
				} else {
					$('.warning').append('<div class="alert alert-dismissable alert-info peringatan" style="font-size:14px">' +
					msg.message +
					'</div>');
				}
				$('.warning').slideDown('fast');

				setTimeout(function(){
					if(msg.success == 1){
						// window.location='/';
						// console.log(msg);
					} else {
						$('.warning').hide();
					}
				}, 3000);
			},
			error: function(msg){
				// console.log("error");
				// console.log(msg);

				$('.peringatan').remove();
				$('.mask').hide();
				$('.progres').hide();

				$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
				"Terjadi kesalahan dalam proses registrasi" +
				'</div>');

				$('.warning').slideDown('fast');

				setTimeout(function(){
					$('.warning').hide();
				}, 5000);
			}
			});

			}

			function validateForm() {

			$('.peringatan').remove();

			var jenis_registrasi = document.getElementById("jenis_registrasi").value;
			if (jenis_registrasi == null || jenis_registrasi == "") {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Mohon lengkapi isian Jenis Registrasi terlebih dahulu!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			}

			var username = document.getElementById("username").value;
			if (username == null || username == "") {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Mohon lengkapi isian Username terlebih dahulu!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			} else {
			if (!validateEmail(username)) {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Mohon isikan format username dengan email yang benar!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			}
			}

			var password = document.getElementById("password").value;
			if (password == null || password == "") {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Mohon lengkapi isian Password terlebih dahulu!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			}

			var password_confirm = document.getElementById("password_confirm").value;
			if (password_confirm == null || password_confirm == "") {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Mohon lengkapi isian Konfirmasi Password terlebih dahulu!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			}

			if (password !== password_confirm) {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Password dengan konfirmasi password tidak sama!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			}

			var jenjang = $('#jenjang').val();
			if (jenjang == null || jenjang == "") {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Mohon lengkapi isian jenjang terlebih dahulu!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			}

			var kode_registrasi = document.getElementById("kode_registrasi").value;
			if (kode_registrasi == null || kode_registrasi == "") {
			$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
			'Mohon lengkapi isian Kode Registrasi terlebih dahulu!' +
			'</div>');

			$('.warning').slideDown('fast');

			setTimeout(function(){
			$('.warning').hide();
			}, 3000);

			return false;
			}

			$('.mask').show();
			$('.progres').slideDown("slow");

			var syncport = "";
			var hostname = {{hostname|raw}};

			if (jenjang == "dapodikdas") {
			syncport = {{syncportdikdas}};
			} else if (jenjang == "dapodikmen") {
			syncport = {{syncportdikmen}};
			} else {
			syncport = 8100;
			}

				if (jenis_registrasi == "offline") {
					//  server offline code here
					var urlsync = 'http://'+ hostname +':'+ syncport +'/prefill/push_prefill.php';
					sendAjax(urlsync);
				} else {
					//  server online code here
					ifServerOnline(function(){
						var urlsync = 'http://'+ hostname +':'+ syncport +'/index.php';
						sendAjax(urlsync);
					}, function(){
						$('.warning').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:14px">' +
						'Tidak terkoneksi dengan internet!' +
						'</div>');

						$('.warning').slideDown('fast');

						setTimeout(function(){
							$('.warning').hide();
						}, 3000);

						return false;
					});
				}
			}
		</script>
	</head>
	<body>
		<div class="mask"></div>
		<div class="warning"></div>
		<div class="progres">
			Memroses data. Mohon tunggu ...
			<br>
			<br>
			<div class="w3-progress-container w3-light-red">
				<div id="myBar" class="w3-progressbar w3-green" style="width:10%"></div>
			</div>
		</div>

		<!-- body -->
		<div class="containers">
			<div class="box">
		<!-- <div class="ribbon-start"></div> -->
		<!-- <div class="logo">
		<img src="resources/images/logo_dikbud.png" width="100px"><br>
		<h4 style="font-weight:bold;color:white">Kementerian Pendidikan dan Kebudayaan</h4>
		<h4 style="font-weight:bold;color:white;font-size:14px">Direktorat Jenderal Pendidikan Dasar dan Menengah</h4>
		</div> -->
		<!-- <div class="ribbon-end"></div> -->
		<!-- <div class="content">
		<h1>Title</h1>
		<h2>Sub Title</h2>
		<p>BLABLABLA CONTENT</p>
		</div>​ -->
				<div class="col-md-8">
					<div class="ribbon">
						<div class="judul">Registrasi Dapodikdasmen</div>
					</div>
					<div class="gap"></div>
					<div class="box_login">
						<form name="myForm" action="" method="POST" class="form-horizontal">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-lg-12">
										<label class="control-label" for="focusedInput">Jenis Registrasi *</label>
										<select class="form-control" id="jenis_registrasi" name="jenis_registrasi" style="font-size:16px;color:white;font-weight:bold">
											<!-- <option disabled selected>Pilih Jenjang ...</option> -->
											<option style="font-size:16px;color:white;font-weight:bold" value="offline" selected>OFFLINE</option>
											<option style="font-size:16px;color:white;font-weight:bold" value="online">ONLINE</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<label class="control-label" for="focusedInput">Kode Registrasi *</label>
										<input type="text" class="form-control" id="kode_registrasi" name="kode_registrasi" placeholder="Kode Registrasi ...">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<label class="control-label" for="focusedInput">Jenjang *</label>
										<select class="form-control" id="jenjang" name="jenjang">
											<option disabled selected>Pilih Jenjang ...</option>
											<option value="dapodikdas">SD-SMP-SLB</option>
											<option value="dapodikmen">SMA-SMK</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-lg-12">
										<label class="control-label" for="focusedInput">Username (Email) *</label>
										<input type="text" class="form-control" id="username" name="username" placeholder="Username ...">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<label class="control-label" for="focusedInput">Password *</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="Password ...">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<label class="control-label" for="focusedInput">Konfirmasi Password *</label>
										<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Konfirmasi Password ...">
									</div>
								</div>
							</div>
							<div style="clear:both"></div>

							<div class="form-group">
								<div class="col-sm-4" style="padding-right:0px">
									<a class="btn btn-warning" href="/" style="width:100%">Batal</a>
								</div>
								<div class="col-sm-8" style="padding-left:0px">
									<input type="button" id="btnSubmit" class="btn btn-primary" style="width:100%" value="Submit" onClick="validateForm()">
								</div>
							</div>
						</form>

					</div>
				</div>
				<!-- <div class="image_sekolah"> -->
				<!-- slider image -->
				<div id="slider">
					<a href="#" class="control_next">
						<img src="<?=lent();?>resources/images/nextpage.png">
					</a>
					<a href="#" class="control_prev">
						<img src="<?=lent();?>resources/images/previouspage.png">
					</a>
					<ul>
						<!-- <li>
							<div style="height:410px;background:url(resources/images/slideshow/registrasi_2018b.png) no-repeat;background-size:cover;width:292px"> &nbsp;</div>
						</li>
						<li><div style="height:410px;background:url(resources/images/slideshow/registrasi_ppk.png) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li>
						<li><div style="height:410px;background:url(resources/images/slideshow/hutri72.png) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li>
						<li><div style="height:410px;background:url(resources/images/slideshow/registrasikip.png) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li>
						<li><div style="height:410px;background:url(resources/images/slideshow/registrasi-literasi.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li>
						<li><div style="height:410px;background:url(resources/images/slideshow/sekolah_aman.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li>
						<li><div style="height:410px;background:url(resources/images/slideshow/schema_dapodik.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li>
						<li><div style="height:410px;background:url(resources/images/slideshow/dapodik.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li> -->
						<!-- <li><div style="height:410px;background:url(resources/images/slideshow/slide_1.png) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li> -->
						<!-- <li><div style="height:410px;background:url(resources/images/slideshow/slide_2.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li> -->
						<!-- <li><div style="height:410px;background:url(resources/images/slideshow/slide_3.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li> -->
						<!-- <li><div style="height:410px;background:url(resources/images/slideshow/slide_4.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li> -->
						<!-- <li><div style="height:410px;background:url(resources/images/slideshow/slide_5.png) no-repeat;background-size:cover;width:292px"> &nbsp;</div></li> -->
						<li>
							<div 
								style="
									height:410px;
									background:url(<?=lent();?>resources/images/slideshow/slide_2019_1.png) no-repeat;
									background-size:cover;
									width:292px;
								"
							> &nbsp;</div>
						</li>
						<li>
							<div
								style="
									height:410px;
									background:url(<?=lent();?>resources/images/slideshow/slide_2019_2.png) no-repeat;
									background-size:cover;
									width:292px;
								"
							> &nbsp;</div>
						</li>
						<li>
							<div
								style="
									height:410px;
									background:url(<?=lent();?>resources/images/slideshow/slide_2019_3.png) no-repeat;
									background-size:cover;
									width:292px;
								"
							> &nbsp;</div>
						</li>
						<li>
							<div
								style="
									height:410px;
									background:url(<?=lent();?>resources/images/slideshow/slide_2019_4.jpg) no-repeat;
									background-size:cover;
									width:292px;
								"
							> &nbsp;</div>
						</li>
				</ul>
			</div>
			<div class="slider_option">
				<input type="checkbox" id="checkbox">
				<label for="checkbox">Autoplay</label>
			</div>
			<!-- </div> -->
			<div style="clear:both"></div>
		</div>
		</div>
		<script src="<?=lent();?>login_assets/log/js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?=lent();?>login_assets/log/js/bootstrap.min.js"></script>
		<!-- Script to Activate the Carousel -->
		<script src="<?=lent();?>login_assets/log/js/bootbox.min.js"></script>
		<script type="text/javascript">
			var elem = document.getElementById("myBar");
			var width = 1;

			var id = setInterval(frame, 40);

			function frame() {
				if(width >= 100){
					// clearInterval(id);
					width = 1;
				} else {
					width++;
					elem.style.width = width + '%';
				}
			}

			// ifServerOnline(function() {
			//     //  server online code here
			//     $('.status_internet').html('<div class="form-control-static form-control" style="background-color:green;font-size:16px;color:white;font-weight:bold" id="status_internet" disabled>ONLINE</div>');
			// },
			// function () {
			//     //  server offline code here
			//     $('.status_internet').html('<div class="form-control-static form-control" style="background-color:red;font-size:16px;color:white;font-weight:bold" id="status_internet" disabled>OFFLINE</div>');
			// });

			// status_internet.innerText = "OFFLINE";

			$('.image_sekolah').html('<div class="col-md-3 gambar-banner" style="height:410px;background:url(<?=lent();?>resources/images/semua_jenjang.jpg) no-repeat;background-size:cover;width:292px"> &nbsp;</div>');

			if(window.location.hash){
				var hash = window.location.hash.substring(1);

				if(hash == 'PasswordSalah'){

					$('.peringatan').remove();

					$('.box_login').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:12px">' +
						pesan +
					'</div>');

				} else if(hash == 'PenggunaTidakTerdaftar'){
					$('.peringatan').remove();

					$('.box_login').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:12px">' +
						pesan +
					'</div>');
				}
			}

			jQuery(document).ready(function($){
				var autoPlayImage = null;
				$('#checkbox').change(function(){
					if($(this).is(":checked")){
						autoPlayImage = setInterval(function(){
							moveRight();
						}, 2000);
					} else {
						clearInterval(autoPlayImage);
					}
				});

				var slideCount = $('#slider ul li').length;
				var slideWidth = $('#slider ul li').width();
				var slideHeight = $('#slider ul li').height();
				var sliderUlWidth = slideCount * slideWidth;

				$('#slider').css({ width: slideWidth, height: slideHeight });

				$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

				$('#slider ul li:last-child').prependTo('#slider ul');

				function moveLeft() {
					$('#slider ul').animate({
						left: + slideWidth
					}, 200, function(){
						$('#slider ul li:last-child').prependTo('#slider ul');
						$('#slider ul').css('left', '');
					});
				};

				function moveRight(){
					$('#slider ul').animate({
						left: - slideWidth
					}, 200, function(){
						$('#slider ul li:first-child').appendTo('#slider ul');
						$('#slider ul').css('left', '');
					});
				};

				$('a.control_prev').click(function(){
					moveLeft();
				});

				$('a.control_next').click(function () {
					moveRight();
				});
			});
		</script>
	</body>
</html>