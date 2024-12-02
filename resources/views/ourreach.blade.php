@extends('layouts.principal')
@section('title')
    Nuestro Alcance
@endsection



    @section('content')

    <div class="relative aspect-[3/1] md:aspect-[6/1] mb-5 bg-cover bg-center"
    style="background-image: url('/img/silhouettes-1186996_1280.jpg');">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-5xl text-center text-white font-bold md:text-6xl bg-black/70 px-6 py-3 rounded-lg">
            Nuestro Alcance
        </h1>
    </div>
</div>


    @component('components.norma', [
    'imagen' => 'img/nom004 nueva.webp',
    'titulo' => 'NOM-004-SE-2021',
    'descripcion' => 'Etiquetado de productos textiles, prendas de vestir y sus accesorios, y ropa de casa.',
    'invertir' => false
])
@endcomponent

@component('components.norma', [
    'imagen' => 'img/nom015.jpg',
    'titulo' => 'NOM-015-SCFI-2007',
    'descripcion' => 'Información comercial, etiquetado de juguetes.',
    'invertir' => true
])
@endcomponent

@component('components.norma', [
    'imagen' => 'img/nom020.webp',
    'titulo' => 'NOM-020-SCFI-1997',
    'descripcion' => 'Cueros, pieles curtidas naturales, materiales sintéticos o artificiales con esa apariencia, y productos elaborados con ese material.',
    'invertir' => false
])
@endcomponent

@component('components.norma', [
    'imagen' => 'img/nom024-2.jpg',
    'titulo' => 'NOM-024-SCFI-2013',
    'descripcion' => 'Empaques, instructivos y garantías de productos electrónicos, eléctricos y electrodomésticos.',
    'invertir' => true
])
@endcomponent
        





    </div>
@endsection
