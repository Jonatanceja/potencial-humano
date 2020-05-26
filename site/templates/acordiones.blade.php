<div class="px-20 pb-20" style="background-color: <?= $page->fondo() ?>">
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