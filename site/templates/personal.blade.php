<div class="px-10 xl:px-20 pb-20" style="background-color: #<?= $page->fondo() ?>">
    <div class="container m-auto lg:px-0">
        <?php 
        $items = $page->acordiones()->toStructure();
        foreach ($items as $item): ?>
          <div class="block md:flex py-10">
            <div class="w-full md:w-1/5">
            <?php foreach ($item->imagen()->toFiles() as $image): ?>
            <img class="rounded-full mb-2 mx-auto" src="<?= $image->crop(200)->url() ?>">
            <?php endforeach ?>
            </div>
            <div class="w-full md:w-4/5">
            <button class="accordion border-solid border-b border-black pb-4 my-6 text-2xl focus:outline-none tracking-widest"><?= $item->titulo()->html() ?></button>
            <div class="panel block">
            <p class="mt-0 text-xl lg:text-2xl tracking-widest"><?= $item->texto() ?></p>
            </div>
          </div>
          </div>
        <?php endforeach ?>
    </div>
</div>
