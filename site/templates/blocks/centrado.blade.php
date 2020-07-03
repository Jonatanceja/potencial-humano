<!--- Texto de introducción --->
<div class="text-black p-10 xl:p-20" style="background-color: #<?= $page->fondo() ?>">
    <div class="container m-auto">
        <h1 class="text-3xl lg:text-6xl tracking-widest">    
        <?= $page->titulo()->kti() ?>
        </h1>
    <p class="text-xl lg:text-4xl text-center tracking-widest">
        <?= $page->texto()->kti() ?>
    </p>
    </div>
</div>