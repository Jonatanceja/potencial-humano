@extends('layouts.default')
@section('content')

<div class="flex content-center h-screen py-48" style="background-color: #FBB681">
    <?php if($image = $page->imagen()->toFile()): ?>
        <a href="<?= $site->url() ?>">
        <div class="container bg-center bg-no-repeat bg-cover mx-auto" style="background-image: url(<?= $image->url() ?>)">
    <?php endif ?>  
    <p class="text-white uppercase text-center text-3xl py-64 tracking-widest">
        <?= $page->texto() ?>
    </p>
        </a>
    </div>

</div>

@endsection