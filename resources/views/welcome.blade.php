<x-guest-layout>
    <!--    Home Page -->
    <div class="flex justify-between w-screen h-auto font-poppins">
        <div class="bg-orange-400 flex flex-col p-20 justify-center text-white">
            <h1 class="text-[50px] font-poppins font-[700] mb-16">Welcome to Burgirgila</h1>
            <p class="text-[20px] font-poppins w-[80%]">
                Selamat datang di restoran cepat saji Burger kami, Burgirgila!
                Kami menawarkan pengalaman makan yang cepat dan lezat dengan berbagai pilihan burger
                yang menggugah selera. Dengan bahan-bahan segar dan kualitas terbaik,
                kami menghadirkan cita rasa yang tiada duanya. Dari burger klasik hingga kreasi inovatif,
                setiap gigitan akan memanjakan lidah Anda. Nikmati suasana yang nyaman dan layanan ramah dari tim kami.
                Segera kunjungi restoran kami dan rasakan kenikmatan yang gila dari Burgirgila!
            </p>
        </div>
        <img src="assets/burger_container.png" alt="berger" class="w-[800px] object-scale-up">
    </div>
    <section class="px-4 py-10 ">
        <div class="my-8 text-center">
            <h2 class="text-3xl font-bold bg-clip-text bg-gradient-to-r text-black">
                Explore Our Menu</h2>
        </div>
        <div class="overflow-x-scroll scroll-smooth">
            <div class="w-[400px] h-[300px] inline-flex space-x-8 p-6 duration-300">
                <img class="rounded-md" src="assets/dcb.jpg" />
                <img class="rounded-md" src="assets/dfcb.jpg" />
                <img class="rounded-md" src="assets/fb.jpg" />
                <img class="rounded-md" src="assets/fcb.jpg" />
                <img class="rounded-md" src="assets/vb.jpg" />
            </div>
        </div>
    </section>
    <section class="py-10 bg-orange-200">
        <div class="container items-center max-w-6xl px-4 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-0 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-6xl text-yellow-700 font-bold font-poppins bg-clip-text">
                            Promo Spesial</h2>
                        <p class="mb-2 font-poppins text-7xl text-yellow-700 tracking-tight xl:mb-6">Buy 2 Get 3</p>
                        <p class="mb-1 text-start pl-1 font-poppins text-3xl text-yellow-700">14.06.2023 - 30.06.2023</p>
                    </div>
                </div>
                <div class=" w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm w-max lg:max-w-full" src="assets/tiga-burger.png"
                        alt="feature image">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-2 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @if (!is_null($specials))
                    @foreach ($specials->menus as $menu)
                        <div class="max-w-xs mx-2 mb-3 rounded-lg shadow-lg">
                            <img class="w-full h-40" src="{{ Storage::url($menu->image) }}" alt="Image" />
                            <div class="px-6 py-4">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                    {{ $menu->name }}</h4>
                                <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                            </div>
                            <div class="flex items-center justify-between p-5">
                                <span class="text-xl text-green-600">${{ $menu->price }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>There is no Special's Menu</div>
                @endif
            </div>
        </div>
    </section>
    <section class="pt-4 pb-12 bg-orange-200">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold bg-clip-text bg-gradient-to-r text-black">
                What our popular customers are saying.</h2>
            {{-- <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p> --}}
        </div>
        <div class="grid gap-4 lg:grid-cols-4">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-white rounded-full" src="assets/sasa.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Fried Chicken Burger</h2>
                    <p class="mt-2 text-gray-600">"Wah kacau nih, burger di Burgirgila enak banget, kualitas daging yang dipakai beneran high banget!"</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl pt-6 font-medium text-border-white">Shakiva</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-white rounded-full" src="assets/bayu.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Double Cheese Burger</h2>
                    <p class="mt-2 text-gray-600">"Wah ini beneran sesuai namanya, Burgirgila! dari segi rasa dan kualitasnya sangat worth it deh pokoknya."</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-border-white">Bayu</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-white rounded-full" src="assets/niay.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Veggie Burger</h2>
                    <p class="mt-2 pt-9 text-gray-600">"Daging di veggie burger ini enggak kalah rasanya, beneran se asli dan se enak itu. Untuk penyuka sayuran sangat reccomended."</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-black">Niay</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-white rounded-full" src="assets/dhika.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Beef Burger</h2>
                    <p class="mt-2 pt-9 text-gray-600">"Ukuran dagingnya besar banget! dan kualitas rasanya beneran gak main-main." </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl pt-5 font-medium text-border-white">Dhika</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
