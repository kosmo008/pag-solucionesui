@extends('layouts.principal')
@section('title')
    Home
@endsection

@section('heading')
    <div class=" bg-fixed w-full h-full bg-no-repeat bg-cover bg-left  " style="background-image: url('/img/pexels-cottonbro-studio-5532844.jpg')">
        <div class="h-max bg-transparent m-1">

            <h1 class="text-3xl text-center p-0 text-white font-bold md:text-5xl md:p-5">
                UNIDAD DE INSPECCION </h1>
            <h1 class="text-3xl text-center p-0 text-white font-bold md:text-5xl md:p-5">Y</h1>
            <h1 class="text-3xl text-center p-0 text-white font-bold md:text-5xl md:p-5">VERIFICACION COMERCIAL </h1>
            <h1 class="text-3xl text-center p-0 text-white font-bold md:text-5xl md:p-5">IMPULSO S.A. DE C.V. </h1>

            <p class="text-white text-center p-10 text-xl font-semibold italic md:md:text-3xl md:p-20">
              "Tu seguridad, nuestra prioridad: verificación confiable para productos confiables."
            </p>


        </div>
    @endsection

    @section('content')
        <section class="wrapper bg-white grid grap-8 justify-items-center items-center pb-12
    md:grid-cols-2 md:py-24">
            <img src="img/pexels-karolina-grabowska-4467857.jpg" alt="" class="w-full max-w-lg  
        md:order-1">

            <article class="text-center space-y-6 md:text-left md:space-y-8">
                <h1 class="text-4xl font-bold text-[#1E76BC] md:text-5xl">
                    Lorem Ipsum
                </h1>
                <p class="text-[#4D4F61] ">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit..."</p>
                <p class="text-[#4D4F61] ">"No hay nadie que ame el dolor mismo, que lo busque, lo encuentre y lo quiera,
                    simplemente porque es el
                    dolor."
                </p>
                <a href="#"
                    class="inline-flex button mx-auto shadow-xl shadow-[#4D4F61]/30 hover:text-gray-100 hover:border-gray-950 hover:-translate-y-1 hover:underline duration-150 translate-all
            md:mx-0">
                    Conocenos </a>
            </article>
        </section>

        <div>
            <section>
                <article>
                    <h1>Nuestor servicios</h1>


                </article>

            </section>
        </div>

    </div>
@endsection
