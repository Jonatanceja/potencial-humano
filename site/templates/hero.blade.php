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
	<div class="flex w-full lg:w-1/2 content-center h-screen">
		<div class="carousel-inner relative overflow-hidden w-full">
			<!--Slide-->
			<?php 
	  $items = $page->slide()->toStructure();
	  foreach ($items as $item): ?>
	  <a href="<?= $item->url() ?>">
			  <input class="carousel-open" type="radio" id="<?= $item->label() ?>" name="carousel" aria-hidden="true" hidden="" checked="checked">
			  <div class="carousel-item absolute opacity-0 h-full">
				  <?php foreach ($item->imagen()->toFiles() as $image): ?>
					<div class="block h-full w-full bg-white text-white text-5xl text-center bg-top bg-cover bg-bottom bg-no-repeat flex-row-reverse" style="background-image: url(<?= $image->url() ?>)">
						<?= $item->texto()->html() ?>
					</div>
				  <?php endforeach ?>  
			  </div>
			</a>
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