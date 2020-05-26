<div class="text-black p-20" style="background-color: <?= $page->fondo() ?>">
    <div class="container m-auto">
        <p class="text-left text-xl"><?= $page->etiqueta() ?></p>
    <h1 class="text-center text-3xl lg:text-6xl uppercase">
        <?= $page->titulo()->kt() ?>
    </h1>


<div class="flex content-center flex-wrap bg-black h-48 w-48 rounded-full mx-auto my-20 text-center">
    <div class="mx-auto text-xl text-center">
        <p style="color: <?= $page->fondo() ?>"><?= $page->fecha()->toDate('m') ?></p>
        <p style="color: <?= $page->fondo() ?>"><?= $page->fecha()->toDate('d') ?></p>
    </div>

</div>

    <div class="text-2xl lg:text-4xl text-right">
        <?= $page->texto()->kt() ?>
    </div>


<div class="container m-auto lg:px-0">
    <?php 
// using the `toStructure()` method, we create a structure collection
$items = $page->acordiones()->toStructure();
// we can then loop through the entries and render the individual fields
foreach ($items as $item): ?>
<div class="block">
<button class="accordion border-solid border-b border-black pb-4 my-6 text-2xl focus:outline-none"><?= $item->titulo()->html() ?></button>
<div class="panel">
<p class="mt-0 text-xl lg:text-2xl"><?= $item->texto()->kt() ?></p>
</div>
</div>
<?php endforeach ?>
</div>
</div>


<div class="flex content-center flex-wrap bg-contain bg-no-repeat h-48 w-48 mx-auto my-20 text-center" style="background-image: url(/images/boton-limpio.png)">
    <div class="mx-auto text-xl text-center">
        <p style="color: <?= $page->fondo() ?>"><?= $page->boton() ?></p>
    </div>

</div>

</div>
</div>






<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
/* Toggle between adding and removing the "active" class,
to highlight the button that controls the panel */
this.classList.toggle("active");

/* Toggle between hiding and showing the active panel */
var panel = this.nextElementSibling;
if (panel.style.display === "block") {
  panel.style.display = "none";
} else {
  panel.style.display = "block";
}
});
}
</script>