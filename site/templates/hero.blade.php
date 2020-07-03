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
	<div class="flex w-full lg:w-1/2 h-screen text-center">
		<div class="carousel-inner relative overflow-hidden w-full carousel-tap">
			<!--Slide-->
			<?php 
	  $items = $page->slide()->toStructure();
	  foreach ($items as $item): ?>
			  <input class="carousel-open" type="radio" id="<?= $item->label() ?>" name="carousel" aria-hidden="true" hidden="" checked="<?= $item->checked() ?>">
			  <div class="carousel-item absolute opacity-0 h-full">
				  <div class="w-full h-full" style="background-color: #<?= $item->color() ?>">
					<p class="uppercase text-2xl lg:text-4xl tracking-widest" style="padding-top: 40vh"><?= $item->titulo() ?></p>
					<p class="uppercase text-xl lg:text-2xl tracking-widest"><?= $item->subtitulo() ?></p>
					<p class="uppercase text-xl lg:text-3xl tracking-widest mb-6"><?= $item->lugar() ?>, <?= $item->fecha() ?></p>
					<a href="<?= $item->enlace() ?>" class="text-white uppercase tracking-widest bg-black hover:bg-gray-900 px-5 py-2">Ver más</a>
				  </div>
			  </div>
			  <?php endforeach ?>
			  
			  
	  
			  <!-- Bullets-->
	<ol class="carousel-indicators">
	<?php 
	  $items = $page->slide()->toStructure();
	  foreach ($items as $item): ?>
				  <li class="inline-block mr-3">
					  <label for="<?= $item->label() ?>" class="carousel-bullet"><p class="cursor-pointer block text-6xl text-gray-700 hover:text-black">.</p></label>
				  </li>
	<?php endforeach ?>
	</ol>
		</div>
	</div>
</div>