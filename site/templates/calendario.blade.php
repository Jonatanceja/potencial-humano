@extends('layouts.default')
@section('content')

<div class="" style="background-color: #<?= $page->fondo() ?>">
    <div class="container mx-auto py-40 px-6">
        <h1 class="text-xl lg:text-2xl uppercase tracking-widest mb-12">Próximos eventos</h1>

        <?= snippet('calendar') ?>
    
    </div>
</div>

@endsection