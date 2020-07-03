<div class="py-12" style="background-color: #FBB681">
<div class="container mx-auto flex grid grid-cols-1 sm:grid-cols-3 gap-16 sm:gap-8 py-24">
    
<?php 
$items = $page->pods()->toStructure();
foreach ($items as $item): ?>
<a href="<?= $item->url() ?>" target="_blank">
<div class="p-10 sm:p-0">
<img class="absolute my-5 md:my-3 lg:my-10 xl:my-6 ml-16 sm:ml-12 lg:ml-20 xl:ml-24 w-40 sm:w-24 md:w-32 lg:w-40 xl:w-56" src="/images/iso.png" alt="Isotipo">
<?php foreach ($item->imagen()->toFiles() as $image): ?>
<img class="w-full" src="<?= $image->crop(400, 650)->url() ?>" class="m-auto">
<?php endforeach ?>
  <h2 class="text-2xl uppercase text-center text-yellow-900 my-6 tracking-widest"><?= $item->titulo()->html() ?></h2>
  <p class="text-2xl text-center text-yellow-900 my-6 uppercase tracking-widest"><?= $item->capitulo() ?></p>
  <p class="text-center text-sm text-yellow-900 text-2xl my-6 uppercase tracking-widest"><?= $item->subtitulo() ?></p>
</div>
</a>
<?php endforeach ?>
    
</div>
</div>
