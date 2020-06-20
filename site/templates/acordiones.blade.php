<div class="px-10 xl:px-20 pb-20" style="background-color: #<?= $page->fondo() ?>">
    <div class="container m-auto lg:px-0">
        <?php 
        $items = $page->acordiones()->toStructure();
        foreach ($items as $item): ?>
          <div class="block">
            <button class="accordion border-solid border-b border-black pb-4 my-6 text-2xl focus:outline-none tracking-widest"><?= $item->titulo()->html() ?></button>
          <div class="panel">
            <p class="mt-0 text-xl lg:text-2xl tracking-widest"><?= $item->texto() ?></p>
          </div>
          </div>
        <?php endforeach ?>
    </div>
</div>






