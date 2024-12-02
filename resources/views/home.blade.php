
@extends('layouts.principal')
@section('title')
    Home
@endsection

@section('heading')
<div class="bg-fixed w-full h-full bg-no-repeat bg-cover bg-left flex items-center justify-center"
    style="background-image: url('/img/pexels-cottonbro-studio-5532844.jpg')">
    <div class="text-center text-white p-10">
        <h1 class="text-4xl font-bold md:text-5xl">UNIDAD DE INSPECCIÓN Y VERIFICACIÓN COMERCIAL</h1>
        <h2 class="text-3xl font-semibold md:text-4xl mt-4">IMPULSO S.A. DE C.V.</h2>
        <p class="text-xl italic font-medium mt-6 md:text-2xl">
            "Tu seguridad, nuestra prioridad: verificación confiable para productos confiables."
        </p>
    </div>
</div>
@endsection

@section('content')
<section class="wrapper bg-white grid gap-8 justify-items-center items-center pb-12 md:grid-cols-2 md:py-24">
    <img src="img/pexels-karolina-grabowska-4467857.jpg" alt="Imagen de inspección"
        class="w-full max-w-lg md:order-1 rounded-lg shadow-md">

    <article class="text-center space-y-6 md:text-left md:space-y-8">
        <h2 class="text-4xl font-bold text-[#1E76BC] md:text-5xl">¿QUIÉNES SOMOS?</h2>
        <p class="text-[#4D4F61] text-lg leading-relaxed">
            "Somos una empresa especializada en verificar el cumplimiento de etiquetados de productos conforme a las normas oficiales mexicanas de información comercial."
        </p>
        <h2 class="text-4xl font-bold text-[#1E76BC] md:text-5xl">NUESTRA FILOSOFÍA</h2>
        <p class="text-[#4D4F61] text-lg leading-relaxed">
            "Estamos convencidos de que nuestros éxitos los alcanzamos a través de los suyos. Es por ello que contamos con un equipo que le brindará asesoría para tomar las mejores decisiones y un acompañamiento en todo momento.
            Nos esforzamos constantemente en la mejora de nuestros procesos con la intención de ser su proveedor más confiable."
        </p>
        <a href="{{ route('contacto.show') }}"
            class="inline-flex button mx-auto shadow-xl shadow-[#4D4F61]/30 hover:text-gray-100 hover:border-gray-950 hover:-translate-y-1 hover:underline duration-150 translate-all
            md:mx-0">
            Conócenos
        </a>
    </article>
</section>

<section class="bg-gray-100 py-16">
    <div class="max-w-screen-lg mx-auto">
        <h2 class="text-4xl font-bold text-center text-[#1E76BC] mb-10">Servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Servicio 1 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-[#1E76BC] mb-4">DICTAMEN DE CUMPLIMIENTO</h3>
                <p class="text-[#4D4F61] leading-relaxed">
                    Permite al importador ingresar sus productos al territorio nacional para etiquetarlos en su almacén o bodega, antes de su comercialización.
                </p>
                <p class="text-[#4D4F61] leading-relaxed mt-2">
                    (El producto primero debe cumplir con las normas oficiales mexicanas aplicables y posteriormente obtener el dictamen de cumplimiento).
                </p>
            </div>
            <!-- Servicio 2 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-[#1E76BC] mb-4">CONSTANCIA DE CONFORMIDAD</h3>
                <p class="text-[#4D4F61] leading-relaxed">
                    Es el documento emitido previo al proceso de importación y/o comercialización de los productos, aplicable cuando el importador o comercializador realiza el etiquetado en origen.
                </p>
            </div>
            <!-- Servicio 3 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-[#1E76BC] mb-4">CONSULTAS</h3>
                <p class="text-[#4D4F61] leading-relaxed">
                    Asesoramos y resolvemos cualquier duda de nuestros clientes, brindándoles la información correcta y necesaria para que puedan tomar la mejor decisión para su apreciable empresa.
                </p>
            </div>
            <!-- Servicio 4 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-[#1E76BC] mb-4">ETIQUETAS, DISEÑOS Y REVISIÓN</h3>
                <p class="text-[#4D4F61] leading-relaxed">
                    Ofrecemos este servicio adicional en caso de requerirlo. Por favor, háganos saber sus requerimientos para cotizarle correctamente.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray-100 py-16">
    <div class="max-w-screen-xl mx-auto">
        <h2 class="text-4xl font-bold text-center text-[#1E76BC] mb-10">Galería de Normas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0">
            <!-- Imagen 1 -->
            <div class="relative group">
                <img src="/img/NOM-141-SSA1.jpg" alt="NOM-141-SSA1/SCFI-20121"
                    class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black/60 flex items-center justify-center lg:opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">NOM-141-SSA1/SCFI-20121</span>
                </div>
            </div>
            <!-- Imagen 2 -->
            <div class="relative group">
                <img src="/img/NOM-142-SCFI.webp" alt="NOM-142-SSA1/SCFI-2014"
                    class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black/60 flex items-center justify-center lg:opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">NOM-142-SSA1/SCFI-2014</span>
                </div>
            </div>
            <!-- Imagen 3 -->
            <div class="relative group">
                <img src="/img/NOM-189-SSA1.jpg" alt="NOM-189-SSA1/SCFI-2018"
                    class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black/60 flex items-center justify-center lg:opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">NOM-189-SSA1/SCFI-2018</span>
                </div>
            </div>
            <!-- Imagen 4 -->
            <div class="relative group">
                <img src="/img/NOM-051-SCFI.jpg" alt="NOM-051-SCFI"
                    class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black/60 flex items-center justify-center lg:opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">NOM-051-SCFI</span>
                </div>
            </div>
            <!-- Imagen 5 -->
            <div class="relative group">
                <img src="/img/NOM-050-SCFI-2004.jpg" alt="NOM-050-SCFI"
                    class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black/60 flex items-center justify-center lg:opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">NOM-050-SCFI</span>
                </div>
            </div>
            <!-- Espacio vacío -->
            <div class="relative bg-gray-100"></div>
        </div>
    </div>
</section>






@endsection

