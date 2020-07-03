<div class="block">
<?php if($image = $page->imagen()->toFile()): ?>
<img class="w-full" src="<?= $image->url() ?>" class="m-auto">
<?php endif ?>
</div>