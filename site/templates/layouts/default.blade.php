<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $site->title() }} | {{ $page->title() }}</title>
	
	
	<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


	<!---FAVICON--->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
@yield('css')
</head>
<body>
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
			<svg width="86px" height="86px" viewBox="0 0 86 86" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<!-- Generator: Sketch 59 (86127) - https://sketch.com -->
				<title>X</title>
				<desc>Created with Sketch.</desc>
				<g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="Blog" transform="translate(-1282.000000, -79.000000)" fill="#000000">
						<g id="Menu-superior" transform="translate(-1.000000, 0.000000)">
							<g id="X" transform="translate(1326.000000, 122.000000) rotate(-45.000000) translate(-1326.000000, -122.000000) translate(1267.000000, 63.000000)">
								<polygon id="Fill-1" points="58 118 60 118 60 0 58 0"></polygon>
								<polygon id="Fill-2" points="0 60 118 60 118 58 0 58"></polygon>
							</g>
						</g>
					</g>
				</g>
			</svg></a>
		<div class="overlay-content">
			<?php foreach ($site->children()->listed() as $subpage): ?> 
			<a href="<?= $subpage->url() ?>" class="tracking-widest uppercase text-xl md:text-2xl xl:text-4xl"><?= $subpage->title() ?></a>
			<?php endforeach ?>
		</div>
	  </div>
	  <span class="fixed text-4xl p-12 cursor-pointer" onclick="openNav()">
		<svg width="38px" height="28px" viewBox="0 0 38 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<!-- Generator: Sketch 59 (86127) - https://sketch.com -->
			<title>Burger B</title>
			<desc>Created with Sketch.</desc>
			<g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				<g id="Elementos" transform="translate(-42.000000, -38.000000)" stroke="#000000">
					<g id="Burger-B" transform="translate(42.000000, 39.000000)">
						<line x1="0" y1="0.206349206" x2="37.7239022" y2="0.206349206" id="Path-3"></line>
						<line x1="0" y1="12.7936508" x2="37.7239022" y2="12.7936508" id="Path-3-Copy"></line>
						<line x1="0" y1="25.5873016" x2="37.7239022" y2="25.5873016" id="Path-3-Copy-2"></line>
					</g>
				</g>
			</g>
		</svg></span>

@yield('content')
<div class="" style="background-color: #<?= $page->fondo() ?>">
	<div class="pt-64 mb-16">
		<img class="mx-auto mb-10" src="/images/iso.png" alt="El Potencial Humano" width="53px" height="150px">
	</div>
	<div class="container mx-auto">
<div class="w-full my-6 lg:flex lg:justify-center lg:justify-between">
			<?php foreach ($site->children()->listed() as $subpage): ?> 
			<a href="<?= $subpage->url() ?>" class="block text-center tracking-widest text-sm hover:text-gray-800"><?= $subpage->title() ?></a>
			<?php endforeach ?>
		</div>
		<div class="flex justify-center mx-auto text-center pl-0">
			<a class="rounded-full bg-black hover:bg-gray-800 w-6 h-6 text-center my-6 mx-2 text-xs pt-1" style="color: #<?= $page->fondo() ?>" href="https://twitter.com/potencialhuman" target="blank">T</a>
			<a class="rounded-full bg-black hover:bg-gray-800 w-6 h-6 text-center my-6 mx-2 text-xs pt-1" style="color: #<?= $page->fondo() ?>" href="https://www.facebook.com/El-Potencial-Humano-323255775247169/" target="blank">F</a>
			<a class="rounded-full bg-black hover:bg-gray-800 w-6 h-6 text-center my-6 mx-2 text-xs pt-1" style="color: #<?= $page->fondo() ?>" href="https://www.instagram.com/elpotencialhumano/" target="blank">I</a>
			<a class="rounded-full bg-black hover:bg-gray-800 w-6 h-6 text-center my-6 mx-2 text-xs pt-1" style="color: #<?= $page->fondo() ?>" href="https://www.youtube.com/channel/UCJP6wdSGB5flzVM63MX_JmQ" target="blank">Y</a>
		</div>

	<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<div class="w-auto lg:w-1/2 mx-auto pb-20 px-10" id="mc_embed_signup" style="background-color: #<?= $page->fondo() ?>">
<form action="https://elpotencialhumano.us10.list-manage.com/subscribe/post?u=8746f4d0d3db6555cb200fb62&amp;id=247ca38648" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2 class="tracking-widest text-center">Subscribete a nuestro canal de noticias</h2>
<div class="indicates-required"><span class="asterisk">*</span> Campos requeridos</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Correo  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-NOMBRE">Nombre  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="NOMBRE" class="required" id="mce-NOMBRE">
</div>
<div class="mc-field-group">
	<label for="mce-OPCIONAL">Whatsapp </label>
	<input type="text" name="OPCIONAL" class="" value="" id="mce-OPCIONAL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8746f4d0d3db6555cb200fb62_247ca38648" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="text-white px-6 py-2 bg-black hover:bg-gray-800 cursor-pointer float-right"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='NOMBRE';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='OPCIONAL';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[8]='MMERGE8';ftypes[8]='birthday';fnames[6]='MMERGE6';ftypes[6]='birthday';fnames[7]='MMERGE7';ftypes[7]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/menu.js"></script>
<script src="/js/acordion.js"></script>

@yield('js')
</body>
</html>
