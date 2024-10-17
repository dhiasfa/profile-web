<x-layout>
    <div class=" bg-dark-gray w-full h-auto px-12 py-6 md:px-20 md:py-12 flex md:flex-row flex-col justify-between">
        <div class="md:w-1/2 text-center md:text-left my-auto">
            <h2 class="font-bold text-2xl text-dark-green">Selamat Datang di Artama Niaga</h2>
            <p class="font-medium text-base text-dark-green mt-6 leading-relaxed">Solusi Percetakan Terbaik
                untuk
                Kebutuhan Anda,
                kami
                berkomitmen untuk memberikan layanan percetakan berkualitas tinggi dengan harga yang kompetitif.
            </p>
        </div>
        <div class="md:w-1/3 md:mr-24 my-3">
            <img src="{{ asset('img/rafiki.png') }}" alt="ilussator-image">
        </div>
    </div>
    <div class=" bg-green w-full h-auto px-16 py-6 md:px-20 md:py-12">
        <div x-data="{ shown: false }" x-intersect:enter="shown = true" x-intersect:leave="shown = false">
            <div x-show="shown" x-transition class="text-center flex justify-center animate-fade-up animate-delay-150">
                <h2 class="font-bold text-2xl text-dark-green">Mengapa Memilih Kami?</h2>
            </div>
        </div>
        <div class="mt-6 flex flex-col justify-center space-y-8 md:flex-row md:justify-between md:space-y-0 ">
            <div x-data="{ shown: false }" x-intersect:enter="shown=true" x-intersect:leave="shown=false">
                <div x-show="shown" x-transition
                    class="card-1 bg-dark-gray w-60  rounded-md py-4 px-6 animate-fade-right animate-delay-150">
                    <div class="flex justify-center">
                        <img class="w-32" src="{{ asset('img/kualitas.png') }}" alt="kualitas">
                    </div>
                    <h4 class="text-orange font-bold text-center text-xl mt-3 mb-2">Kualitas Terbaik</h4>
                    <p class="text-orange text-center text-sm font-normal">Kami menggunakan bahan dan teknologi
                        terbaru untuk
                        memastikan
                        hasil cetakan yang tajam dan
                        tahan lama.</p>
                </div>
            </div>
            <div x-data="{ shown: false }" x-intersect:enter="shown=true" x-intersect:leave="shown=false" class="">
                <div x-show="shown" x-transition
                    class="card-2 bg-dark-gray w-60  rounded-md py-4 px-6 animate-fade-down  animate-delay-150">
                    <div class="flex justify-center">
                        <img class="w-32" src="{{ asset('img/service.png') }}" alt="service">
                    </div>
                    <h4 class="text-orange font-bold text-center text-xl mt-3 mb-2">Layanan Cepat</h4>
                    <p class="text-orange text-center text-sm font-normal">Kami menggunakan bahan dan teknologi
                        Kecepatan dan efisiensi adalah prioritas kami dalam setiap pesanan</p>
                </div>
            </div>
            <div x-data="{ shown: false }" x-intersect:enter="shown=true" x-intersect:leave="shown=false">
                <div x-show="shown" x-transition
                    class="card-3 bg-dark-gray w-60  rounded-md py-4 px-6 animate-fade-left animate-delay-150">
                    <div class="flex justify-center">
                        <img class="w-32" src="{{ asset('img/price.png') }}" alt="price">
                    </div>
                    <h4 class="text-orange font-bold text-center text-xl mt-3 mb-2">Harga Terjangkau</h4>
                    <p class="text-orange text-center text-sm font-normal">Dapatkan harga yang bersaing tanpa
                        mengorbankan kualitas</p>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-gray-bg w-full h-auto px-16 py-6 md:px-20 md:py-12">

        <div x-data="{ shown: false }" x-intersect:enter="shown = true" x-intersect:leave="shown = false">
            <div x-show="shown" x-transition class="flex justify-center animate-fade-up">
                <h2 class="font-bold text-2xl text-orange">Produk Kami</h2>
            </div>
        </div>

        <div class="mt-6 flex flex-col justify-center space-y-8 md:flex-row md:justify-between md:space-y-0">

            <div class="" x-data="{ shown: false }" x-intersect:enter="shown = true"
                x-intersect:leave="shown = false"></div>
            <!-- Card 1: Fade-right animation -->
            <div x-show="shown" x-transition
                class="card-1 bg-white shadow-2xl w-60 h-80 rounded-md py-3 px-3 animate-fade-right animate-delay-150">
                <div class="flex justify-center">
                    <img class="transform hover:scale-125 transition-transform duration-300"
                        src="{{ asset('img/product.png') }}" alt="kualitas">
                </div>
                <h4 class="text-dark-green font-bold text-lg mt-2">Poster</h4>
                <p class="text-dark-green text-sm font-normal">Mulai dari <span
                        class="text-orange text-sm font-normal">Rp.19.000/pcs</span></p>
            </div>
            <div class="" x-data="{ shown: false }" x-intersect:enter="shown = true"
                x-intersect:leave="shown = false">
                <!-- Card 2: Fade-left animation -->
                <div x-show="shown" x-transition
                    class="card-2 bg-white shadow-2xl w-60 h-80 rounded-md py-2 px-3 animate-fade-left animate-delay-150">
                    <div class="flex justify-center">
                        <img class="transform hover:scale-125 transition-transform duration-300"
                            src="{{ asset('img/product.png') }}" alt="kualitas">
                    </div>
                    <h4 class="text-dark-green font-bold text-lg mt-2">Poster</h4>
                    <p class="text-dark-green text-sm font-normal">Mulai dari <span
                            class="text-orange text-sm font-normal">Rp.19.000/pcs</span></p>
                </div>
            </div>
            <div class="" x-data="{ shown: false }" x-intersect:enter="shown = true"
                x-intersect:leave="shown = false">
                <!-- Card 3: Fade-right animation -->
                <div x-show="shown" x-transition
                    class="card-3 bg-white shadow-2xl w-60 h-80 rounded-md py-2 px-3 animate-fade-right animate-delay-200">
                    <div class="flex justify-center">
                        <img class="transform hover:scale-125 transition-transform duration-300"
                            src="{{ asset('img/product.png') }}" alt="kualitas">
                    </div>
                    <h4 class="text-dark-green font-bold text-lg mt-2">Poster</h4>
                    <p class="text-dark-green text-sm font-normal">Mulai dari <span
                            class="text-orange text-sm font-normal">Rp.19.000/pcs</span></p>
                </div>
            </div>
            <div class="" x-data="{ shown: false }" x-intersect:enter="shown = true"
                x-intersect:leave="shown = false">

                <!-- Card 4: Fade-left animation -->
                <div x-show="shown" x-transition
                    class="card-4 bg-white shadow-2xl w-60 h-80 rounded-md py-2 px-3 animate-fade-left animate-delay-250">
                    <div class="flex justify-center">
                        <img class="transform hover:scale-125 transition-transform duration-300"
                            src="{{ asset('img/product.png') }}" alt="kualitas">
                    </div>
                    <h4 class="text-dark-green font-bold text-lg mt-2">Poster</h4>
                    <p class="text-dark-green text-sm font-normal">Mulai dari <span
                            class="text-orange text-sm font-normal">Rp.19.000/pcs</span></p>
                </div>
            </div>
        </div>


        <div class="flex justify-center mt-12">
            <a href="" class="">
                <button
                    class="w-32 h-10 bg-gray-bg border border-dark-green text-center text-sm my-auto rounded-lg font-semibold text-dark-green hover:bg-dark-green hover:text-white">
                    Load
                    More</button>
            </a>
        </div>
    </div>
</x-layout>
