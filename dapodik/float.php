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

		<link href="<?=lent();?>resources/css/w3.css" rel="stylesheet">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">

			.containers{
				border: 1px solid #333335;
				width:500px;
				background: #1a4b4c;
				margin:auto;
				margin-top:15px;
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
				height:100%;
			}

			body {
				/*background: #a6a6a6;*/
				background: url(<?=lent();?>resources/images/swirl_pattern.png);
				color: #111;
				font-size: 100%;
				padding: 40px 0px;
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
				margin: 0 -36px;
				top: 90px;
				width: 114.8%;
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
				height:155px;
			}

			.form-control{
				background: #333335;
				color:white;
				border-top:0px solid transparent;
				border-left:0px solid transparent;
				border-right:0px solid transparent;
			}


			/* Change the white to any color ;) */
			input:-webkit-autofill {
				-webkit-box-shadow: 0 0 0px 1000px #333335 inset;
				-webkit-text-fill-color: #22A6F1 !important;
			}


			@media screen and (max-width: 570px) {
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

			.progres{
				display: none;
				position: absolute;
				bottom:0%;
				/*height: 200px;*/
				background: black;
				width: 100%;
				opacity:0.8;
				z-index: 999999;
				color:white;
				margin:auto;
				text-align: center;
				padding-top:20px;
				padding-bottom:20px;
			}

		</style>

	</head>

	<body>

		<!-- body -->
		<div class="containers">
			<div class="box">
				<!-- <div class="ribbon-start"></div> -->
				<div class="logo">
					<img src="<?=lent();?>resources/images/logo_dikbud.png" width="100px"><br>
					<h4 style="font-weight:bold;color:white">Kementerian Pendidikan dan Kebudayaan</h4>
					<h4 style="font-weight:bold;color:white;font-size:12px">Direktorat Jenderal Pendidikan Dasar dan Menengah</h4>
				</div>
				<div class="ribbon">
					<div class="judul">Aplikasi Dapodikdasmen</div>
				</div>
				<!-- <div class="ribbon-end"></div> -->
				<!-- <div class="content">
					<h1>Title</h1>
					<h2>Sub Title</h2>
					<p>BLABLABLA CONTENT</p>
				</div>​ -->
				<div class="gap">

				</div>
				<div class="box_login">
					<form action="login" method="POST" class="form-horizontal">
						<div class="form-group">
						  <div class="col-lg-12">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username ...">
						  </div>
						</div>
						<div class="form-group">
						  <div class="col-lg-12">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password ...">
							<!-- <div class="hide-show"><span>Show</span></div> -->
						  </div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<select class="form-control" id="semester_id" name="semester_id">
									{% for option in option_arr %}
										{{option|raw}}
									{% endfor %}
									<!-- <option value="20152">Genap 2015/2016</option>
									<option value="20151" selected>Ganjil 2015/2016</option>
									<option value="20142">Genap 2014/2015</option> -->
								</select>
								<br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-5" style="padding-right:0px">
								<input type="submit" class="btn btn-primary login" value="Masuk" style="width:100%">
							</div>
							<div class="col-sm-2" style="padding-top:10px;text-align:center">
								<i>Atau</i>
							</div>
							<div class="col-sm-5" style="padding-left:0px">
								<a class="btn btn-success" href="/registrasi" style="width:100%">Registrasi</a>
							</div>
							<!-- <div class="col-sm-6"> -->
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="progres">
			Mohon tunggu beberapa saat ...
			<br>
			<br>
			<div class="w3-progress-container w3-light-blue">
			  <div class="w3-progressbar w3-blue" style="width:10%"></div>
			</div>
		</div>

		<!-- end of body -->

		<script src="<?=lent();?>login_assets/log/js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?=lent();?>login_assets/log/js/bootstrap.min.js"></script>
		<!-- Script to Activate the Carousel -->
		<script>
			$('input.login').on('click', function(){
				// $('.progres').show();
				// alert('tes');
			});

			if(window.location.hash) {
				var hash = window.location.hash.substring(1);

				if(hash == 'PasswordSalah'){
					var pesan = 'Password yang Anda masukkan salah!';

					$('.box_login').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:12px">' +
						pesan +
					'</div>');


				} else if (hash == 'PenggunaTidakTerdaftar') {
					var pesan = 'Username yang Anda masukkan tidak terdaftar! Mohon gunakan username lain';

					$('.box_login').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:12px">' +
						pesan +
					'</div>');

				} else if (hash == 'SemesterTidakAktif') {
					var pesan = 'Semester telah dinonaktifkan';

					$('.box_login').append('<div class="alert alert-dismissable alert-danger peringatan" style="font-size:12px">' +
						pesan +
					'</div>');

				}
			}

			$(function(){
			  $('.hide-show').show();
			  $('.hide-show span').addClass('show')

			  $('.hide-show span').click(function(){
				if( $(this).hasClass('show') ) {
				  $(this).text('Hide');
				  $('input[name="password"]').attr('type','text');
				  $(this).removeClass('show');
				} else {
				   $(this).text('Show');
				   $('input[name="password"]').attr('type','password');
				   $(this).addClass('show');
				}
			  });

				$('form button[type="submit"]').on('click', function(){
					$('.hide-show span').text('Show').addClass('show');
					$('.hide-show').parent().find('input[name="password"]').attr('type','password');
				});
			});
		</script>
	</body>
</html>