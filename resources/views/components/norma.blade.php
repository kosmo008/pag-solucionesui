<div class="wrapper bg-white grid gap-8 justify-items-center items-center pb-12
    sm:grid-cols-1 md:grid-cols-2 md:py-24 max-w-screen-xl mx-auto">
    @if ($invertir)
        <img src="{{ $imagen }}" alt="" class="w-full max-w-lg md:order-2">
        <article class="text-center md:text-left md:space-y-8 md:order-1 max-w-lg mx-auto">
            <h1 class="text-4xl font-bold text-[#1E76BC] md:text-5xl">{{ $titulo }}</h1>
            <p class="text-[#4D4F61] text-lg leading-relaxed text-justify">{{ $descripcion }}</p>
        </article>
    @else
        <img src="{{ $imagen }}" alt="" class="w-full max-w-lg md:order-1">
        <article class="text-center md:text-left md:space-y-8 md:order-2 max-w-lg mx-auto">
            <h1 class="text-4xl font-bold text-[#1E76BC] md:text-5xl">{{ $titulo }}</h1>
            <p class="text-[#4D4F61] text-lg leading-relaxed text-justify">{{ $descripcion }}</p>
        </article>
    @endif
</div>