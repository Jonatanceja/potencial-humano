<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
	<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><?xml version="1.0" encoding="UTF-8"?>
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
			<a href="<?= $subpage->url() ?>" class="tracking-widest uppercase"><?= $subpage->title() ?></a>
			<?php endforeach ?>
		</div>
	  </div>
	  <span class="fixed text-4xl p-12 cursor-pointer" onclick="openNav()"><?xml version="1.0" encoding="UTF-8"?>
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
		<div class="block lg:flex">
		<div class="w-full lg:w-3/4 lg:space-x-10 my-6 lg:ml-6">
			<?php foreach ($site->children()->listed() as $subpage): ?> 
			<a href="<?= $subpage->url() ?>" class="text-center tracking-widest block lg:inline-block text-sm"><?= $subpage->title() ?></a>
			<?php endforeach ?>
		</div>
		<div class="flex w-32 lg:w-1/4 mx-auto pl-0 lg:pl-48">
			<a class="rounded-full bg-black w-6 h-6 text-center my-6 mx-2 text-xs pt-1" style="color: #<?= $page->fondo() ?>" href="https://www.facebook.com/El-Potencial-Humano-323255775247169/" target="blank">F</a>
			<a class="rounded-full bg-black w-6 h-6 text-center my-6 mx-2 text-xs pt-1" style="color: #<?= $page->fondo() ?>" href="https://twitter.com/potencialhuman" target="blank">T</a>
			<a class="rounded-full bg-black w-6 h-6 text-center my-6 mx-2 text-xs pt-1" style="color: #<?= $page->fondo() ?>" href="https://www.instagram.com/elpotencialhumano/" target="blank">I</a>
		</div>
	</div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/menu.js"></script>
<script src="/js/acordion.js"></script>

</body>
</html>
