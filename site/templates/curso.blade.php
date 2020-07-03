@extends('layouts.default')
@section('content')

<!---Cover--->
<div class="flex flex-wrap">
	<div class="flex w-full lg:w-1/2 content-center h-screen" style="background-color: #<?= $page->color() ?>">
		<div  class="m-auto px-10">
			<a href="<?= $site->url() ?>">
			<?php if($image = $page->portada()->toFile()): ?>
			<img src="<?= $image->url() ?>">
			<?php endif ?> 
		</a>  
		</div>	
	</div>

    <?php if($image = $page->imagen()->toFile()): ?>
    <div class="flex w-full lg:w-1/2 content-center h-screen bg-cover bg-center" style="background-image: url(<?= $image->url() ?>)">
    <?php endif ?>
    </div>
    


</div>

  <div class="block">
    <?php if($image = $page->imagen1()->toFile()): ?>
    <img class="w-full" src="<?= $image->url() ?>" class="m-auto">
    <?php endif ?>
    </div>

    <div class="text-black p-10 xl:p-20" style="background-color: #<?= $page->fondo() ?>">
        <div class="container m-auto">
            <p class="text-center tracking-widest text-xl"><?= $page->descripcion() ?></p>
        <h1 class="text-center text-3xl lg:text-6xl uppercase tracking-widest">
            <?= $page->titulo()->kti() ?>
        </h1>
        </div>
    
    
    <div class="flex content-center flex-wrap bg-black h-48 w-48 rounded-full mx-auto my-20 text-center">
        <div class="mx-auto text-xl text-center">
            <p style="color: <?= $page->fondo() ?>"><?= $page->fecha()->toDate('F') ?></p>
            <p style="color: <?= $page->fondo() ?>"><?= $page->fecha()->toDate('d') ?></p>
        </div>
    
    </div>
    
        <div class="container m-auto text-xl lg:text-4xl text-right tracking-widest mb-10">
            <?= $page->texto2()->kti() ?>
        </div>
    
    
    <div class="container m-auto lg:px-0">
        <?php 
    // using the `toStructure()` method, we create a structure collection
    $items = $page->acordiones()->toStructure();
    // we can then loop through the entries and render the individual fields
    foreach ($items as $item): ?>
    <div class="block">
    <button class="accordion border-solid border-b border-black pb-4 my-6 text-2xl focus:outline-none tracking-widest"><?= $item->titulo()->html() ?></button>
    <div class="panel">
    <p class="mt-0 text-xl lg:text-2xl tracking-widest"><?= $item->texto()->kti() ?></p>
    </div>
    </div>
    <?php endforeach ?>

    <div class="text-xl lg:text-4xl text-left tracking-widest mt-6">
        <?= $page->cursos()->kti() ?>
    </div>
    </div>


<div class="container m-auto lg:px-0">
    <?php 
// using the `toStructure()` method, we create a structure collection
$items = $page->acordiones2()->toStructure();
// we can then loop through the entries and render the individual fields
foreach ($items as $item): ?>
<div class="block">
<button class="accordion border-solid border-b border-black pb-4 my-6 text-2xl focus:outline-none tracking-widest"><?= $item->titulo()->html() ?></button>
<div class="panel">
<p class="mt-0 text-xl lg:text-2xl tracking-widest"><?= $item->texto()->kti() ?></p>
</div>
</div>
<?php endforeach ?>

<div class="text-xl lg:text-4xl text-left tracking-widest mt-6">
    <?= $page->talleres()->kti() ?>
</div>
</div>


<div class="container m-auto lg:px-0">
<?php 
// using the `toStructure()` method, we create a structure collection
$items = $page->acordiones3()->toStructure();
// we can then loop through the entries and render the individual fields
foreach ($items as $item): ?>
<div class="block">
<button class="accordion border-solid border-b border-black pb-4 my-6 text-2xl focus:outline-none tracking-widest"><?= $item->titulo()->html() ?></button>
<div class="panel">
<p class="mt-0 text-xl lg:text-2xl tracking-widest"><?= $item->texto()->kti() ?></p>
</div>
</div>
<?php endforeach ?>
</div>

<div class="text-center">
<?= $page->boton()->markdown() ?>
</div>


</div>
   


    <div class="block">
        <?php if($image = $page->imagen2()->toFile()): ?>
        <img class="w-full" src="<?= $image->url() ?>" class="m-auto">
        <?php endif ?>
        </div>
@endsection