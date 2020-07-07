<!---Slider--->
<div class="flex w-full lg:w-1/2 h-screen text-center">
    <div class="slider w-full h-full">
        @foreach($items as $item)
        <div class="h-screen" style="background-color: #{{ $item->color() }}">
            <div class="h-full flex flex-col justify-center items-center">
            <?php if($image = $item->imagen()->toFile()): ?>    
            <img class="max-w-xs xl:max-w-xl mb-10" src="{{ $image->url() }}" alt="">
            <?php endif ?>
                <p class="uppercase text-2xl lg:text-4xl tracking-widest">{{ $item->titulo() }}</p>
                <p class="uppercase text-xl lg:text-2xl tracking-widest">{{ $item->subtitulo() }}</p>
                <p class="uppercase text-xl lg:text-3xl tracking-widest mb-6">{{ $item->lugar() }}, {{ $item->fecha() }}</p>
                <a href="{{ $item->enlace() }}" class="text-white uppercase tracking-widest bg-black hover:bg-gray-900 px-5 py-2">Ver más</a>
            </div>
        </div>
        @endforeach
    </div>
</div>