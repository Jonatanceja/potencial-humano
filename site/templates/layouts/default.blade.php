<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <style>
		@font-face {
		font-family: MoskauGrotesk;
		src: url(/fonts/MoskauGrotesk.woff);
}
		p {
			font-family: MoskauGrotesk;
		}

		h1,h2,h3 {
			font-family: MoskauGrotesk;
		}


        body{ position:absolute;top:0;left:0;right:0;bottom:0; }
        body > .preventive{ position:absolute;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:100%; }
        body > .preventive img{ display:block;margin:0 auto;max-width:250px;width:35%; }

        .carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
			}

			.accordion {
  			cursor: pointer;
  			text-align: left;
  			outline: none;
  			transition: 0.4s;
			}


			.panel {
  			display: none;
			  overflow: hidden;
			  font-size: 1.5rem;
			}

			.accordion:after {
  			content: '△'; 
  			font-size: 1.5rem;
  			color: black;
  			float: right;
  			margin-left: 25px;
			}

			.active:after {
			content: "▽"; 
			}

			.overlay {
  			height: 100%;
  			width: 0;
  			position: fixed;
			z-index: 100;
			top: 0;
			left: 0;
			background-color: #FBB681;
			background-color: #FBB681;
			overflow-x: hidden;
			transition: 0.5s;
			}

			.overlay-content {
			position: relative;
			top: 25%;
			width: 100%;
			text-align: center;
			margin-top: 30px;
			}

			.overlay a {
			padding: 8px;
			text-decoration: none;
			font-size: 36px;
			color: black;
			display: block;
			transition: 0.3s;
			}

			.overlay a:hover, .overlay a:focus {
			color: #f1f1f1;
			}

			.overlay .closebtn {
			position: absolute;
			top: 20px;
			right: 45px;
			font-size: 60px;
			}


			
    </style>
</head>
<body>
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
		  <a class="uppercase" href="<?= $site->url() ?>">Inicio</a>
		  <a class="uppercase" href="#">Cursos</a>
		  <a class="uppercase" href="/podcasts/">Podcasts</a>
		  <a class="uppercase" href="#">Blog</a>
		</div>
	  </div>
	  <span class="fixed text-4xl p-12 cursor-pointer" onclick="openNav()">&#9776;</span>

@yield('content')

<script src="{{ mix('js/app.js') }}"></script>
<script>
	function openNav() {
	  document.getElementById("myNav").style.width = "100%";
	}
	
	function closeNav() {
	  document.getElementById("myNav").style.width = "0%";
	}
	</script>
</body>
</html>
