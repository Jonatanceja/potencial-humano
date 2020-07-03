@extends('layouts.default')
@section('content')
<!---Cover--->
<div class="flex flex-wrap">
	<div class="flex w-full lg:w-1/2 content-center h-screen" style="background-color: #<?= $page->fondo() ?>">
		<div  class="m-auto px-10">
			<a href="<?= $site->url() ?>">
			<?php if($image = $page->portada()->toFile()): ?>
			<img src="<?= $image->url() ?>">
			<?php endif ?> 
		</a>  
		</div>	
	</div>

<!---Slider--->
    <div class="flex w-full lg:w-1/2 content-center h-screen" style="background-color: #<?= $page->color() ?>">

        <div class="m-auto py-10 w-full px-16">
			<h1 class="tracking-widest uppercase text-xl lg:text-2xl"><?= $page->titulo() ?></h1>
			<p class="tracking-widest mb-12"><?= $page->texto() ?></p>
			<?php snippet('formbuilder'); ?></div>
    </div>
</div>

<div class="block">
    <?php if($image = $page->imagen1()->toFile()): ?>
	<img class="w-full" src="<?= $image->url() ?>" class="m-auto">
	
    <?php endif ?>
    </div>

@endsection