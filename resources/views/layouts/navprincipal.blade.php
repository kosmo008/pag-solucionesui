<nav class="wrapper h-20 flex items-center justify-between bg-transparent shadow-2xl z-50">
    <a href="{{ route('home') }}" class="w-1/3 max-w-[150px] md:max-w-[100px]">
        <img class="h-[100%]" src="/img/Logo_Unidad.png">
    </a>

    <input type="checkbox" id="menu" class="peer hidden">
    <label for="menu"
        class="bg-[url('../../public/img/menu.png')] w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-[url('../../public/img/x.png')] transition-all z-50 md:hidden"></label>

    <div
        class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 translate-x-full peer-checked:translate-x-0 transition-transform z-50 md:static md:translate-x-0 md:bg-none">
        <ul
            class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold text-[#4D4F61] shadow-2xl 
        md:w-max md:bg-transparent md:p-0 md:grid-flow-col md:static">
            <li>
                <a href="{{ route('home') }}"
                    class="inline-flex text-xl hover:text-[#1E76BC] hover:border-gray-950 hover:-translate-y-1 hover:underline duration-150 translate-all">
                    {{ __('Home') }}
                </a>
            </li>
            <li>
                <a href="{{ route('nuestroalcance.show') }}"
                    class="inline-flex text-xl hover:text-[#1E76BC] hover:border-gray-950 hover:-translate-y-1 hover:underline duration-150 translate-all">
                    {{ __('Our Reach') }}
                </a>
            </li>
            <li>
                <a href="{{ route('contacto.show') }}"
                    class="inline-flex text-xl hover:text-[#1E76BC] hover:border-gray-950 hover:-translate-y-1 hover:underline duration-150 translate-all">
                    {{ __('Contact') }}
                </a>
            </li>
        </ul>
    </div>

    <div class="justify-between p-3 w-max h-max hidden lg:block lg:flex">
        <a href="/"><img src="img/facebook.png" alt="" class="w-10 p-1 py-3"></a>
        <a href="/"><img src="img/gorjeo.png" alt="" class="w-10 p-1 py-3"></a>
        <a href="/"><img src="img/linkedin.png" alt="" class="w-10 p-1 py-3"></a>
    </div>
</nav>
