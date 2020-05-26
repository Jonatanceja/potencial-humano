<div class="py-12" style="background-color: #FBB681">
<div class="container flex mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 my-6">
    
<?php 
// using the `toStructure()` method, we create a structure collection
$items = $page->pods()->toStructure();
// we can then loop through the entries and render the individual fields
foreach ($items as $item): ?>
<a href="<?= $item->url() ?>" target="_blank">
<div class="px-10 py-6">
<?php foreach ($item->imagen()->toFiles() as $image): ?>
<img class="mx-auto mb-12" src="<?= $image->url() ?>">
<?php endforeach ?>
  <h2 class="text-2xl uppercase text-center text-yellow-900 my-6"><?= $item->titulo()->html() ?></h2>
  <p class="text-2xl text-center text-yellow-900 my-6"><?= $item->capitulo() ?></p>
  <p class="text-center text-sm text-yellow-900 text-2xl my-6"><?= $item->subtitulo() ?></p>
</div>
</a>
<?php endforeach ?>
    
</div>
</div>
