<div class="py-12" style="background-color: #FBB681">
<div class="container mx-auto flex grid grid-cols-1 md:grid-cols-3 gap-16 py-24">
    
<?php 
$items = $page->pods()->toStructure();
foreach ($items as $item): ?>
<a href="<?= $item->url() ?>" target="_blank">
<div class="">
<img class="absolute my-6" style="margin-left: 102px;" src="/images/iso.png" alt="Isotipo" width="181" height="500">
<?php foreach ($item->imagen()->toFiles() as $image): ?>
<img class="mx-auto mb-12" src="<?= $image->crop(420, 600)->url() ?>">
<?php endforeach ?>
  <h2 class="text-2xl uppercase text-center text-yellow-900 my-6"><?= $item->titulo()->html() ?></h2>
  <p class="text-2xl text-center text-yellow-900 my-6 uppercase"><?= $item->capitulo() ?></p>
  <p class="text-center text-sm text-yellow-900 text-2xl my-6 uppercase"><?= $item->subtitulo() ?></p>
</div>
</a>
<?php endforeach ?>
    
</div>
</div>
