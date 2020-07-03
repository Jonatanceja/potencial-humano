@extends('layouts.default')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
@endsection
@section('content')

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

	@include('partials.slider', ['items' => $page->slide()->toStructure()])
</div>


  <div class="block">
    <?php if($image = $page->imagen1()->toFile()): ?>
	<img class="w-full" src="<?= $image->url() ?>" class="m-auto">
	
    <?php endif ?>
    </div>


<div style="background-color: #<?= $page->fondo() ?>">
<div class="container mx-auto flex grid grid-cols-1 sm:grid-cols-3 gap-16 sm:gap-8 py-24">
<?php foreach($page->children()->listed()->filterBy('tags', 'Curso', ',')->flip() as $cursos): ?>

  <div class="p-10 sm:p-0">
	<?php if($image = $cursos->imagen1()->toFile()): ?>
	<a href="<?= $cursos->url() ?>">
	<img class="absolute my-5 md:my-3 lg:my-10 xl:my-6 ml-16 sm:ml-12 lg:ml-20 xl:ml-24 w-40 sm:w-24 md:w-32 lg:w-40 xl:w-56" src="/images/iso.png" alt="Isotipo">
	<img class="w-full" src="<?= $image->crop(400, 650)->url() ?>" class="m-auto">
	</a>
	<?php endif ?>
	<a href="<?= $cursos->url() ?>">
	<h1 class="text-2xl uppercase text-center mt-6 mb-2 tracking-widest"><?= $cursos->titulo()->kti() ?></h1>
	<p class="text-lg uppercase text-center my-2 tracking-widest"><?= $cursos->descripcion()->kti() ?></p>
	</a>
  </div>

  <?php endforeach ?>
</div>
</div>



<div style="background-color: #<?= $page->fondo() ?>">
	<h1 class="text-2xl lg:text-4xl uppercase text-center mb-2 tracking-widest">Próximos Eventos</h1>
	<div class="container mx-auto flex grid grid-cols-1 md:grid-cols-3 gap-16 py-24">
	<?php foreach($page->children()->listed()->filterBy('tags', 'Evento', ',')->flip() as $cursos): ?>
	
	  <div class="p-10 xl:p-0">
		<?php if($image = $cursos->poster()->toFile()): ?>
		<a href="<?= $cursos->url() ?>">
		<img class="w-full" src="<?= $image->url() ?>" class="m-auto">
		</a>
		<?php endif ?>
		<a href="<?= $cursos->url() ?>">
		<h1 class="text-2xl uppercase text-center mt-6 mb-2 tracking-widest"><?= $cursos->titulo()->kti() ?></h1>
		<p class="text-lg uppercase text-center my-2 tracking-widest"><?= $cursos->descripcion()->kti() ?></p>
		</a>
	  </div>
	
	  <?php endforeach ?>
	</div>
	</div>
@endsection
@section('js')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
<script>
    $('.slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
    });
</script>
@endsection