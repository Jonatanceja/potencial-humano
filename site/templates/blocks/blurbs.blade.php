<div class="-mt-24" style="background-color: #<?= $page->fondo() ?>">
<div class="container mx-auto flex grid grid-cols-1 md:grid-cols-4 gap-16 py-24">
    
<?php 
$items = $page->seccion()->toStructure();
foreach ($items as $item): ?>
<div class="p-10 xl:p-0">
<?php foreach ($item->imagen()->toFiles() as $image): ?>
<img class="w-full rounded-full" src="<?= $image->crop(400, 400)->url() ?>" class="m-auto">
<?php endforeach ?>
  <h2 class="text-2xl uppercase text-center text-black my-6 tracking-widest"><?= $item->titulo()->kti() ?></h2>
  <p class="text-xl text-center text-black my-6 tracking-widest"><?= $item->texto()->kti() ?></p>
</div>
<?php endforeach ?>
    
</div>
</div>