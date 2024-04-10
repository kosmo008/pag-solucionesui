@extends('layouts.principal')
@section('title')
    Contacto
@endsection

@section('content')
    <div class=" aspect-[3/1] place-content-center 
        md:aspect-[6/1] md:mb-5"
        style=" background-image: url('/img/email2.png'); background-size: 100% auto ; background-repeat: no-repeat;">

        <div class="py-8 md:grid md:grid-cols-2  md:gap-4 md:py-28">
            <h1 class="text-5xl  text-center text-white  font-bold md:text-5xl md:p-5 ">
                Contáctanos</h1>

        </div>

    </div>

    @if (session('info'))
            <div
                class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white text-center sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
                {{ session('info') }}
            </div>

            <script>
                setTimeout(function(){
                    window.location.reload();
                }, 3000); 
            </script>

     @endif




    <section class=" w-[90%] mx-auto text-[#1E76BC] text-center p-5 mb-10 
    md:flex md:rounded-xl md:w-[95%] ">      


        <article class="rounded-b-2xl p-10 grid content-center md:max-w-1/3 md:p-1">
            <img src="img/correo-electronico.png" alt="" class="w-[15%] mx-auto mb-4 md:w-[20%] lg:w-[25%] xl:w-[30%]">
            <p class="text-2xl font-bold md:text-base lg:text-xl xl:text-3xl">Quejas y Apelaciones</p>
            <p class=" text-xl md:text-sm lg:text-base xl:text-xl ">atencionaclientes@impulsoui.com.mx</p>
        </article>
        <article class="rounded-b-2xl p-10 grid content-center md:max-w-1/3">
            <img src="img/llamada-telefonica.png" alt=""
                class="  w-[15%] mx-auto mb-4 md:w-[30%] lg:w-[28%] xl:w-[30%]">
            <p class="text-xl font-bold md:text-sm lg:text-xl xl:text-3xl">Tel. 55-55-55-55-55 || 55-55-55-55-55 </p>
        </article>
        <article class="rounded-b-2xl p-10 grid content-center md:max-w-1/3">
            <img src="img/alfiler.png" alt="" class=" w-[15%] mx-auto mb-4 md:w-[20%] lg:w-[22%] xl:w-[15%]">
            <p class="text-xl font-bold md:text-base lg:text-base xl:text-2xl">Boulevard Tultitlan Poniente 16 esquina con Justo
                Corro, Col. Barrio los Reyes, 54900 Tultitlán de Mariano Escobedo, Méx.</p>
        </article>

    </section>
    <section class=" w-[90%] mx-auto text-[#1E76BC] text-center p-5 mb-10 
    md:flex md:rounded-xl md:w-[95%] ">


        <div class=" bg-white shadow-2xl mx-auto p-10 rounded-2xl md:w-[50%]">

            <h1 class="text-2xl m-auto p-10 md:p-5">Déjanos un mensaje</h1>
            <form action="{{ route('contacto.store') }}" method="POST">
                @csrf
                <label class="text-xl mb-10 md:mb-5 md:text-lg">
                    Nombre:
                    <br>
                    <input
                        class="border border-[#4D4F61] py-3 px-4 rounded-lg outline-none 
                    focus:border-[#44AD4D]
                    focus:ring-1 w-[95%]"
                        type="text" name="nombre" value="{{ old('nombre') }}">
                    {!! $errors->first('nombre', '<br><small class="capitalize text-red-600"> :message</small>') !!}
                </label>
                <br>
                <label class="text-xl mb-10 md:mb-5 md:text-lg">
                    Correo:
                    <br>
                    <input
                        class="border border-[#4D4F61] py-3 px-4 rounded-lg outline-none 
                    focus:border-[#44AD4D]
                    focus:ring-1  w-[95%]"
                        type="email" name="correo" value="{{ old('correo') }}">
                    {!! $errors->first('correo', '<br><small class="capitalize text-red-600"> :message</small>') !!}
                </label>
                <br>
                <label class="text-xl mb-10 md:mb-5 md:text-lg">
                    Mensaje:
                    <br>
                    <textarea
                        class="border border-[#4D4F61] py-3 px-4 rounded-lg outline-none 
                    focus:border-[#44AD4D]
                    focus:ring-1 w-[95%]"
                        name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
                    {!! $errors->first('mensaje', '<br><small class="capitalize text-red-600"> :message</small>') !!}
                </label>
                <br>
                <button type="submit"
                    class="inline-flex m-5 button mx-auto shadow-xl shadow-[#4D4F61]/30 hover:text-gray-100 hover:border-gray-950 hover:-translate-y-1 hover:underline duration-150 translate-all
                md:mx-0">Enviar
                    mensaje</button>
            </form>
        </div>
        <div class="m-5 md:w-[50%]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d234.85104911776264!2d-99.16793262248189!3d19.643674469522537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f5c1e9fe79a5%3A0x4a69473450c69128!2sSoluciones%20Comerciales%20y%20Estrategias%20Impulso%20S.A.%20de%20C.V!5e0!3m2!1ses-419!2smx!4v1711762149610!5m2!1ses-419!2smx"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="w-[98%] h-[98%] "></iframe>
        </div>


    </section>
@endsection
