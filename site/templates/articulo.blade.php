@extends('layouts.default')
@section('content')

<div class="flex flex-wrap">

	<div class="flex w-full lg:w-1/2 content-center h-screen" style="background-color: <?= $page->color() ?>">
		<div  class="m-auto px-10">
			<a href="<?= $site->url() ?>">
			<?php if($image = $page->portada()->toFile()): ?>
			<img src="<?= $image->url() ?>">
			<?php endif ?>   
			</a>
		</div>	
	  
	</div>

	<div class="flex w-full lg:w-1/2 content-center h-screen">
		<div class="carousel-inner relative overflow-hidden w-full">
			<!--Slide-->
			<?php 
	  // using the `toStructure()` method, we create a structure collection
	  $items = $page->slide()->toStructure();
	  // we can then loop through the entries and render the individual fields
	  foreach ($items as $item): ?>
	  <a href="<?= $item->url() ?>">
			  <input class="carousel-open" type="radio" id="<?= $item->label() ?>" name="carousel" aria-hidden="true" hidden="" checked="checked">
			  <div class="carousel-item absolute opacity-0 h-full">
				  <?php foreach ($item->imagen()->toFiles() as $image): ?>
				  <div class="block h-full w-full bg-white text-white text-5xl text-center bg-cover bg-center bg-no-repeat flex-row-reverse" style="background-image: url(<?= $image->url() ?>)"><?= $item->texto()->html() ?></div>
				  <?php endforeach ?>  
			  </div>
			</a>
			  <?php endforeach ?>
			  
			  
	  
			  <!-- Add additional indicators for each slide-->
			  <ol class="carousel-indicators">
				  <?php 
	  // using the `toStructure()` method, we create a structure collection
	  $items = $page->slide()->toStructure();
	  // we can then loop through the entries and render the individual fields
	  foreach ($items as $item): ?>
				  <li class="inline-block mr-3">
					  <label for="<?= $item->label() ?>" class="carousel-bullet"><p class="cursor-pointer block text-6xl text-gray-700 hover:text-black">.</p></label>
				  </li>
				  <?php endforeach ?>
			  </ol>
			  
			  
		  </div>
	  
		
	  
	</div>
	

  </div>

  <div class="block">
    <?php if($image = $page->imagen1()->toFile()): ?>
    <img class="w-full" src="<?= $image->url() ?>" class="m-auto">
    <?php endif ?>
    </div>

    <div class="text-black p-20" style="background-color: <?= $page->fondo() ?>">
        <div class="container m-auto">
            <p class="text-left text-xl"><?= $page->etiqueta() ?></p>
        <h1 class="text-center text-3xl lg:text-6xl uppercase">
            <?= $page->titulo()->kt() ?>
        </h1>
    
    </div>
    
        <div class="text-2xl lg:text-4xl text-right">
            <?= $page->texto2()->kti() ?>
        </div>
    
    
    <div class="container m-auto lg:px-0">
        <?php 
    // using the `toStructure()` method, we create a structure collection
    $items = $page->acordiones()->toStructure();
    // we can then loop through the entries and render the individual fields
    foreach ($items as $item): ?>
    <div class="block">
    <button class="accordion border-solid border-b border-black pb-4 my-6 text-2xl focus:outline-none"><?= $item->titulo()->html() ?></button>
    <div class="panel">
    <p class="mt-0 text-xl lg:text-2xl"><?= $item->texto()->kti() ?></p>
    </div>
    </div>
    <?php endforeach ?>
    </div>
    </div>
    </div>
   
    <div class="block">
        <?php if($image = $page->imagen2()->toFile()): ?>
        <img class="w-full" src="<?= $image->url() ?>" class="m-auto">
        <?php endif ?>
        </div>
@endsection