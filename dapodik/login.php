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

		<title>Full Slider - Start Bootstrap Template</title>

		<!-- Bootstrap Core CSS -->
		<link href="<?=lent();?>login_assets/log/css/bootstrap.min.cosmo.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?=lent();?>login_assets/log/css/full-slider.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Full Page Image Background Carousel Header -->
		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
		 <!--    <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
	 -->
			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<div class="item active">
					<!-- Set the first background image using inline CSS below. -->
					<div class="fill" style="background-image:url('<?=lent();?>images/sekolah-laskar-pelangi.jpg');"></div>
					<!-- <div class="carousel-caption">
						<h2>Caption 1</h2>
					</div> -->
				</div>
				<div class="item">
					<!-- Set the second background image using inline CSS below. -->
					<div class="fill" style="background-image:url('<?=lent();?>images/meja-dan-kursi-lasakar-pelangi.jpg');"></div>
					<!-- <div class="carousel-caption">
						<h2>Caption 2</h2>
					</div> -->
				</div>
				<div class="item">
					<!-- Set the third background image using inline CSS below. -->
					<div class="fill" style="background-image:url('<?=lent();?>images/01.jpg');"></div>
					<!-- <div class="carousel-caption">
						<h2>Caption 3</h2>
					</div> -->
				</div>
					
				<div class="item">
					<!-- Set the third background image using inline CSS below. -->
					<div class="fill" style="background-image:url('<?=lent();?>images/02.jpg');"></div>
					<!-- <div class="carousel-caption">
						<h2>Caption 3</h2>
					</div> -->
				</div>
			</div>
			<!-- Controls -->
			<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a> -->
			<div style="position:absolute;top:5%;left:5%;width:90%;height:calc(100% - 100px);background:transparent;border:0px solid #000;">
				
				<div style="float:left;width:60%;background:transparent;height:100%;border:0px solid #000;">
					<div style="width:90%;margin:auto;background:transparent;padding:15px;margin-top:25%">
					<h1 style="font-size:60px;color:white">Profil Pendidikan</h1>
					<h2 style="font-size:30px;color:white">Kota Palembang</h2>
					</div>
				</div>
				<div style="float:left;width:40%;background:transparent;height:100%;border:0px solid #000;">
					
					<div style="width:90%;margin:auto;background:#eee;padding:15px;margin-top:30%;opacity: 0.8;">
						<form action="prosesLogin" method="POST" class="form-horizontal">
							<div class="form-group">
							  <div class="col-lg-12">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username ...">
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-lg-12">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password ...">
							  </div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<select class="form-control" id="select">
										<option value="20151">Ganjil 2015/2016</option>
										<option value="20142">Genap 2014/2015</option>
									</select>
									<br>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<input type="submit"  class="btn btn-primary" value="Masuk" style="width:100%">
								</div>
							</div>    
						</form>
						
					</div>


				</div>
				<div style="clear:both"></div>

			</div>

		</header>

		<script src="<?=lent();?>login_assets/log/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?=lent();?>login_assets/log/js/bootstrap.min.js"></script>

		<!-- Script to Activate the Carousel -->
		<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
		</script>
	</body>
</html>