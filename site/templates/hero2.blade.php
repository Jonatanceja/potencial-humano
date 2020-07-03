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

    <?php if($image = $page->imagen()->toFile()): ?>
    <div class="flex w-full lg:w-1/2 content-center h-screen bg-cover bg-center" style="background-image: url(<?= $image->url() ?>)">
    <?php endif ?>
    </div>
    


    </div>



