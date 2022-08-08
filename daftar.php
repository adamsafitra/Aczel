<?php require_once "current.php";?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Use title if it's in the page YAML frontmatter -->
		<title>Daftar Laman Web Server Zigatur</title>
		<?=$zInit->rendering()?>
		<meta name="description" content="Daftar laman web di server pusat Zigatur.">
		<meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution">
		<link rel="stylesheet" type="text/css" href="./resource/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="icon" href="<?=$zInit->favicon()?>" type="image/x-icon">
		<style type="text/css">
			.aa {
				position: relative;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between;
				padding: 0.1rem 0.1rem;
				background-image: -webkit-linear-gradient(top, #fff 0%, #f8f8f8 100%);
				background-image: -o-linear-gradient(top, #fff 0%, #f8f8f8 100%);
				background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#f8f8f8));
				background-image: linear-gradient(to bottom, #fff 0%, #f8f8f8 100%);
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ffffffff', endColorstr = '#fff8f8f8', GradientType = 0);
				filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
				background-repeat: repeat-x;
				border-radius: 4px;
				-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 5px rgba(0, 0, 0, .075);
				box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 4px 5px rgba(0, 0, 0, .075);
			}

			.ab {
				width: 100%;
				padding-right: 15px;
				padding-left: 15px;
				margin-right: auto;
				margin-left: auto;
			}

			.ac {
				display: inline-block;
				padding-top: 0.3125rem;
				padding-bottom: 0.3125rem;
				margin-right: 1rem;
				font-size: 1.25rem;
				line-height: inherit;
				white-space: nowrap;
			}

			.ad {
				padding-bottom: 10px;
				padding-top: 10px
			}
		</style>
		<style type="text/css">
			body {
				/*min-height: 100vh;  */
			}

			[data-trigger]{
				transition: all .3s;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="./igniel.css">
		<link rel="stylesheet" type="text/css" href="./resource/font-awesome/css/font-awesome.min.css">
		<style type="text/css">
			.box {
				width: 100px;
				height: 100px;
				border: 1px solid black;
				margin: 50px auto;
				transition:
					.3s width,
					.3s height .3s,
					.3s margin-top .3s,
					1s background-color;
			}
			.size {
				width: 150px;
				height: 150px;
				margin-top: 25px;
				margin-top: 25px;
			}
			.caption {
				background-color: black;
			}
		</style>
	</head>
	<body class="bg-light" data-trigger="bg-light-dark">
		<span class="lenovo"></span>
		<nav class="aa" data-trigger="bg-white-dark">
			<div class="ab">
				<span>
					<a class="ac" data-trigger="text-dark-white" id="qwe">Alphabet Studio Zigatur</a>
				</span>
					<!--button id="trigger" class="btn btn-primary mb-3 ml-3">Ubah</button-->
				<div class="ignielSwitch">
					Dark
					<input class="tgl tgl-igniel" id="ignielNight" type="checkbox">
					<label class="tgl-btn" for="ignielNight"></label>
				</div>
				<!-- <span>
					<span id="relo" onclick="resd()" class="fa fa-dark fa-2x fa-refresh fa-spin"></span>
				</span> -->
				<span id="keyword"></span>
				<span id="tujuan"></span>
				<span id="tombol-cari"></span>
			</div>
		</nav>
		<div class="container card shadow bg-white text-white">
			<div class="ad"></div>
			<!-- <div class="box" style="margin: 0; padding: 0;"></div> -->
			<img src="resource/Hackers/fileicon_virus.png" class="box" style="margin: 0; padding: 0;">
			<!-- <input style="color: blue" type="button" name="paya" id="kadl" alt="spaz" value="Zigatur" onclick="payz()" class="btn btn-block btn-light" style="margin-bottom: 3px;"> -->
			</script>
			<script>
				function payz(){
					let asd = document.getElementById("kadl");
					if(asd.value == "Zigatur"){
						asd.value = "Alphabet";
					} else {
						asd.value = "Zigatur";
					}
				}
			</script>
			<?php
				function daftar_file($dir){
					if(is_dir($dir)){
						if($handle = opendir($dir)){
							//tampilkan semua file dalam folder kecuali
							while(($file = readdir($handle)) !== false){
								if($file == "." || $file == ".." || substr($file, 0, 1) == ".")continue;
								#echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."\n";
								echo("<button class=\"btn btn-block btn-light tombol\"><a href=\"{$dir}{$file}\" target=\"_blank\">{$file}</a></button>\n\t\t");
							}
							closedir($handle);
						}	
					}
				}
				//cara menggunakan
				daftar_file("./");
			?>
		</div>
		<script src="./resource/jQuery/jquery-3.4.1.min.js"></script>
		<script src="./resource/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./resource/jQuery/lazyload/jquery.lazyload.min.js"></script>
		<script type="text/javascript">
			const box = document.querySelector(".box");
			box.addEventListener("click", function(){
				let satu = 'size';
				let dua = 'caption';

				if(this.classList.contains(satu)){
					[satu, dua] = [dua, satu]
				}

				// console.log(this);
				this.classList.toggle(satu);
				setTimeout(()=>{
					this.classList.toggle(dua);
				}, 600);
			});
		</script>
		<script type="text/javascript">
			var s = "";
			for(var i = 0; i < 20; i++){
				for(var j = 0; j <= i; j++){
					s += "*";
				}
				s += "\n";
			}
			console.log(s);


			var x = new Array();
			//var input = prompt("Masukkan nilai untuk banyaknya baris:");
			var input = 5;

			for(var i = 1; i <= input; i++){
				x[i] = new Array();
				for(j = 1; j <= i; j++){
					if(j == 1 || j == i){
						x[i][j] = 1;
					} else {
						x[i][j] = x[i-1][j-1]+x[i-1][j];
					}
				}
			}

			for(var i = 1; i <= input; i++){
				for(var j = 1; j <= i; j++){
					console.log(x[i][j]+" ");
				}
				console.log("\n");
			}
		</script>
		<script type="text/javascript">
			// Object Literal
			var paya = {
				kadal : "Paya kadal",
				tua : "Kadal tua",
				spaz : function(){
					console.log("Paya kadal tua");
				}
			}

			// Function Declaration
			function buatObject(nama, nrp, email, jurusan){
				var mhs = {};

				mhs.nama = nama;
				mhs.nrp = nrp;
				mhs.email = email;
				mhs.jurusan = jurusan;
				mhs.spaz = function(bs){
					this.nama += bs;
					console.log(`Halo, ${this.nama}, selamat datang`);
				}
				return mhs;
			}
			var mhs3 = buatObject("Nofariza", "0987623456", "nofa@yahoo.com", "Teknik Pangan");

			// Constructor Function (keyword new)
			function Mahasiswa(nama, nrp, email, jurusan){
				this.nama = nama;
				this.nrp = nrp;
				this.email = email;
				this.jurusan = jurusan;
				this.spaz = function(bs){
					this.nama += bs;
					console.log(`Halo, ${this.nama}, selamat datang`);
				}
			}
			var mhs4 = new Mahasiswa('Erik', '09876456', 'erik@icloud.com', 'Teknik Mesin');

			// Contoh 2 -- Constructor Function (keyword new)
			function Mahasiswa(nama, nrp, email, jurusan){
				// let this = Object.create(Mahasiswa.prototype);
				this.nama = nama;
				this.nrp = nrp;
				this.email = email;
				this.jurusan = jurusan;
				this.spaz = function(bs){
					this.nama += bs;
					console.log(`Halo, ${this.nama}, selamat datang`);
				}

				// return this;
			}
			var mhs4 = new Mahasiswa('Erik', '09876456', 'erik@icloud.com', 'Teknik Mesin');

			// Object dengan prototype inheritance
			function Mahasiswa(nama, nrp, email, jurusan){
				this.nama = nama;
				this.nrp = nrp;
				this.email = email;
				this.jurusan = jurusan;
				this.spaz = function(bs){
					this.nama += bs;
					console.log(`Halo, ${this.nama}, selamat datang`);
				}
			}

			Mahasiswa.prototype.makan = function(porsi){
				this.nama += porsi;
				return `Halo ${this.nama}, selamat makan`;
			}

			let mhs4 = new Mahasiswa('Erik', '09876456', 'erik@icloud.com', 'Teknik Mesin');

			// Object versi class
			class Mahasiswa {
				constructor(nama, energi){
					this.nama = nana;
					this.energi = energi;
				}
				makan(porsi){
					this.energi += energi;
					return `Halo ${this.nama}, selamat makan!`;
				}
				main(jam){
					this.energi -= jam;
					return `Halo ${this.nama}, selamat bermain`;
				}
				tidur(jam){
					this.energi += jam * 2;
					return `Halo ${this.nama}, selamat tidur`;
				}
			}
			let sandhika = new Mahasiswa("Sandhika", "10");
			let doddy = new Mahasiswa("Doddy", "12");


			// Inner Function (Closure)
			function init(){
				// let name = "zigatur";
				function tampilNama(nama){
					console.log(nama);
				}

				return tampilNama;
			}
			let panggilNama = init();
			panggilNama("Alphabet");

			// Example 2 -- Inner Function (Closure)
			function init(){
				// let name = "zigatur";
				return function(nama){
					console.log(nama);
				}
			}
			let panggilNama = init();
			panggilNama("Alphabet");

			
			// Contoh 3 -- Closure
			function ucapkanSalam(waktu){
				return function(nama){
					console.log(`Halo ${nama}, selamat ${waktu}`);
				}
			}

			let selamatPagi = ucapkanSalam("Pagi");
			let selamatSiang = ucapkanSalam("Siang");
			let selamatMalam = ucapkanSalam("Malam");

			selamatPagi("Alphabet");
			selamatSiang("Studio");
			selamatMalam("Zigatur");


			// Contoh 4 -- Closure
			let add = function(){
				let counter = 0;
				return function(){
					return ++counter;
				}
			}
			let a = add();
			console.log(a());


			// Contoh 5 -- Closure
			let add = (function(){
				let counter = 0;
				return function(){
					return ++counter;
				}
			})();
			console.log(add());


			// Function Declaration
			function tampilNama(nama){
				return `Halo, ${nama}`;
			}
			console.log(tampilNama("Alphabet"));

			// Function Expression
			const tampilNama = function(nama){
				return `Halo, ${nama}`;
			}
			console.log(tampilNama("Studio"));

			// Arrow Function -- 1
			let tampilNama = (nama, waktu)=>{
				return `Halo, ${nama}. Selamat ${waktu}`;
			}

			// Arrow Function -- 2
			// disebut implisit return
			let tampilNama = nama => {`Halo, ${nama}`;}
			var tampilNama = nama => `Halo, ${nama}`;
			const tampilNama = () => `Hello`;
		</script>
		<script type="text/javascript">
			/*var s = "";
			for(var i = 0; i < 20; i++){
				for(var j = 0; j <= i; j++){
					s += "*";
				}
				s += "\n";
			}
			console.log(s);*/
		</script>
		<script type="text/javascript">
			// let spaz = parseInt(prompt("Masukkan angka:"));
		</script>
		<script type="text/javascript">
			/*var a = 10,
					ab = 4,
					b = a - ab,
					c = 1;

			for(c; c <= 10; c++){
				if(c <= b && c !== 5){
					console.log("Mobil no."+c+" bagus");
				} else if(c === 8 || c === 10 || c === 5){
					console.log("Mobil no."+c+" lembur");
				} else {
					console.log("Mobil no."+c+" rusak");
				}
			}*/

			/*while(c <= b){
				console.log("Mobil no."+c+" bagus");
				c++;
			}
			for(c; c <= a; c++){
				console.log("Mobil no."+c+" rusak");
			}*/
		</script>
		<script type="text/javascript">
			var keyword = document.getElementById("keyword"),
					tujuan = document.getElementById("tujuan"),
					tombol = document.getElementById("tombol-cari");

			tombol.style.display = "none";

			keyword.addEventListener("keyup", function(){
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if(xhr.status === 200 && xhr.readyState === 4){
						tujuan.innerHTML = xhr.responseText;
					}
				}

				xhr.open("GET", "ajax/cari.php?keyword="+keyword.value, true);
				xhr.send();
			});
		</script>
		<script type="text/javascript">
			//document.getElementsByClassName("tombol").classList.addClass('lazy');
			const helium = document.querySelector(".box");
			const ocf = document.querySelectorAll(".lenovo");
			//ocf.classList.add('lazy');

			ocf.forEach(function(dcs){
				/*if(e.classList.contains('active')){
					e.classList.remove('active');
				}*/
				//e.className = 'thumb';
				dcs.classList.add('lazy');
			});

			// helium.addEventListener('click', function(e){
			// 	// cek apakah yang diklik adalah sebuah thumb
			// 	if(e.target.className == "box"){
			// 		helium.classList.add('fade');
			// 		setTimeout(function(){
			// 			helium.classList.remove('fade');
			// 		}, 500);

			// 		ocf.forEach(function(thumb){	
			// 			/*if(thumb.classList.contains('active')){
			// 				thumb.classList.remove('active');
			// 			}
			// 			thumb.className = 'thumb';
			// 		});

			// 		e.target.classList.add('active');
			// 	}
			// });*/


			$(function(){
				$("img.lazy").lazyload({effect : "fadeIn"});
				$("div.lazy").lazyload({effect : "fadeIn"});
			});
		</script>
		<script>
			$('#trigger').click(function(s){
				s.preventDefault();

				$('[data-trigger="bg-white-dark"]').each(function(){
					console.log($(this).hasClass('navbar-light'));
					if($(this).hasClass('navbar-light')){
							$(this).toggleClass('navbar-light navbar-dark');
					} else {
							$(this).toggleClass('navbar-dark navbar-light');
					}
				});

				$('[data-trigger="bg-light-dark"]').each(function(){
					console.log($(this).hasClass('navbar-light'));
					if($(this).hasClass('navbar-light')){
							$(this).toggleClass('navbar-light navbar-dark');
					} else {
							$(this).toggleClass('navbar-dark navbar-light');
					}
				});

				$('[data-trigger="text-white-dark"]').each(function(){
					console.log($(this).hasClass('navbar-light'));
					if($(this).hasClass('navbar-light')){
							$(this).toggleClass('navbar-light navbar-dark');
					} else {
							$(this).toggleClass('navbar-dark navbar-light');
					}
				});

				$('[data-trigger="text-light-dark"]').each(function(){
					console.log($(this).hasClass('navbar-light'));
					if($(this).hasClass('navbar-light')){
							$(this).toggleClass('navbar-light navbar-dark');
					} else {
							$(this).toggleClass('navbar-dark navbar-light');
					}
				});

				$('[data-trigger="text-muted-dark"]').each(function(){
					console.log($(this).hasClass('navbar-light'));
					if($(this).hasClass('navbar-light')){
							$(this).toggleClass('navbar-light navbar-dark');
					} else {
							$(this).toggleClass('navbar-dark navbar-light');
					}
				});

				$('[data-trigger="bg-dark-white"]').each(function(){
					console.log($(this).hasClass('navbar-dark'));
					if($(this).hasClass('navbar-dark')){
							$(this).toggleClass('navbar-dark navbar-dark');
					}
				});

				$('[data-trigger="bg-dark-light"]').each(function(){
					console.log($(this).hasClass('navbar-dark'));
					if($(this).hasClass('navbar-dark')){
							$(this).toggleClass('navbar-dark navbar-dark');
					}
				});

				$('[data-trigger="text-dark-white"]').each(function(){
					console.log($(this).hasClass('navbar-dark'));
					if($(this).hasClass('navbar-dark')){
							$(this).toggleClass('navbar-dark navbar-dark');
					}
				});

				$('[data-trigger="text-dark-dark"]').each(function(){
					console.log($(this).hasClass('navbar-dark'));
					if($(this).hasClass('navbar-dark')){
							$(this).toggleClass('navbar-dark navbar-dark');
					}
				});

				$('[data-trigger="text-dark-muted"]').each(function(){
					console.log($(this).hasClass('navbar-dark'));
					if($(this).hasClass('navbar-dark')){
							$(this).toggleClass('navbar-dark navbar-dark');
					}
				});

				$('[data-trigger="bg-white-dark"]').toggleClass('bg-white bg-dark');
				$('[data-trigger="bg-light-dark"]').toggleClass('bg-light bg-dark');
				$('[data-trigger="text-white-dark"]').toggleClass('text-white text-dark');
				$('[data-trigger="text-light-dark"]').toggleClass('text-light text-dark');
				$('[data-trigger="text-muted-dark"]').toggleClass('text-muted text-white');
				
				$('[data-trigger="bg-dark-white"]').toggleClass('bg-dark bg-white');
				$('[data-trigger="bg-dark-light"]').toggleClass('bg-dark bg-light');
				$('[data-trigger="text-dark-white"]').toggleClass('text-dark text-white');
				$('[data-trigger="text-dark-light"]').toggleClass('text-dark text-light');
				$('[data-trigger="text-dark-muted"]').toggleClass('text-white text-muted');
			});
		</script>
		<script>
			(function(){
				function d(b){
					var a = 0;
					return function(){
						return a < b.length ? {done:!1,value:b[a++]} : {done:!0}}};
						var f = document;
						function g(){
							var b = f.head;
							var a = b.querySelectorAll("link[data-reload-stylesheet][as=style][rel=preload]");
							var c = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator];
							a = c ? c.call(a) : {next:d(a)};
							for(c = a.next(); !c.done; c = a.next()){
								c = c.value;
								var e = document.createElement("link");
								e.setAttribute("rel", "stylesheet");
								e.setAttribute("href", c.getAttribute("href"));
								b.appendChild(e)
							}
						};
						(function(){
							function b(){
								new g
							}
							"complete" === f.readyState || "interactive" === f.readyState ? b() : f.addEventListener && f.addEventListener("DOMContentLoaded", b, !1)
						})();
					}).call(this);

		</script>
		<script>
			//LazyLoad Image
			function loadScript(d){
				var o = document.createElement("script");
				o.src = d, document.body.appendChild(o)
			}

			////

			////

			function downloadJSAtOnload(){
				loadScript("https://rawcdn.githack.com/aqilmujahidiin/javascript/1d5f0f9f412626d47178e4b7031930d0c9f31897/lazyload");
				loadScript("https://zigatur.com/lazyload.js");
			}

			window.addEventListener ? window.addEventListener("load", downloadJSAtOnload, !1) : window.attachEvent ? window.attachEvent("onload", downloadJSAtOnload) : window.onload = downloadJSAtOnload;
		</script>
		<!-- <script>(function(a){a.fn.lazyload=function(b){var c={threshold:0,failurelimit:0,event:"scroll",effect:"show",container:window};if(b){a.extend(c,b)}var d=this;if("scroll"==c.event){a(c.container).bind("scroll",function(b){var e=0;d.each(function(){if(a.abovethetop(this,c)||a.leftofbegin(this,c)){}else if(!a.belowthefold(this,c)&&!a.rightoffold(this,c)){a(this).trigger("appear")}else{if(e++>c.failurelimit){return false}}});var f=a.grep(d,function(a){return !a.loaded});d=a(f)})}this.each(function(){var b=this;if(undefined==a(b).attr("original")){a(b).attr("original",a(b).attr("src"))}if("scroll"!=c.event||undefined==a(b).attr("src")||c.placeholder==a(b).attr("src")||a.abovethetop(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.rightoffold(b,c)){if(c.placeholder){a(b).attr("src",c.placeholder)}else{a(b).removeAttr("src")}b.loaded=false}else{b.loaded=true}a(b).one("appear",function(){if(!this.loaded){a("<img />").bind("load",function(){a(b).hide().attr("src",a(b).attr("original"))[c.effect](c.effectspeed);b.loaded=true}).attr("src",a(b).attr("original"))}});if("scroll"!=c.event){a(b).bind(c.event,function(c){if(!b.loaded){a(b).trigger("appear")}})}});a(c.container).trigger(c.event);return this};a.belowthefold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).height()+a(window).scrollTop()}else{var d=a(c.container).offset().top+a(c.container).height()}return d<=a(b).offset().top-c.threshold};a.rightoffold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).width()+a(window).scrollLeft()}else{var d=a(c.container).offset().left+a(c.container).width()}return d<=a(b).offset().left-c.threshold};a.abovethetop=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollTop()}else{var d=a(c.container).offset().top}return d>=a(b).offset().top+c.threshold+a(b).height()};a.leftofbegin=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollLeft()}else{var d=a(c.container).offset().left}return d>=a(b).offset().left+c.threshold+a(b).width()};a.extend(a.expr[":"],{"below-the-fold":"$.belowthefold(a,{threshold:0,container:window})","above-the-fold":"!$.belowthefold(a,{threshold:0,container:window})","right-of-fold":"$.rightoffold(a,{threshold:0,container:window})","left-of-fold":"!$.rightoffold(a,{threshold:0,container:window})"})})(jQuery);$(function(){$("img").lazyload({placeholder:"data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=",effect:"fadeIn",threshold:"-50"})})</script> -->
	</body>
</html>