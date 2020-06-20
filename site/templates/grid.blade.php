<?php foreach($page->children()->listed()->flip() as $article): ?>

  <article>
    <h1><?= $article->titulo()->html() ?></h1>
    <p><?= $page->fecha()->toDate('m') ?></p>
  </article>

  <?php endforeach ?>