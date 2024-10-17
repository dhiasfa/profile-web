<x-layout>
    <div class="bg-gray-bg w-full h-96 md:h-auto">
        <div class="relative">
            <div class="flex flex-row justify-between">
                <div class="animate-fade-right">
                    <img class="h-40" src="{{ asset('img/about-el-1.png') }}" alt="">
                </div>
                <div class="animate-fade-left">
                    <img class="h-80 " src="{{ asset('img/about-el-2.png') }}" alt="">
                </div>
            </div>
            <div class="absolute inset-x-0 inset-y-5">
                <div class="flex flex-col items-center">
                    <h2 class="text-dark-green font-bold text-3xl">Tentang Kami</h2>
                    <div class=" w-72 md:w-1/3 h-36 mt-4">
                        <p class="font-medium text-dark-green text-center leading-loose">Artama Niaga adalah perusahaan
                            percetakan yang
                            berdedikasi untuk
                            memberikan hasil cetakan berkualitas
                            tinggi dan layanan yang terbaik untuk setiap pelanggan kami. Berdiri sejak tahun 2007, kami
                            telah
                            melayani berbagai kebutuhan percetakan mulai dari cetak dokumen, promosi bisnis, hingga
                            merchandise
                            kustom.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white w-full mb-5 md:mb-0 h-auto md:px-20 md:py-12">
        <div class="flex flex-col md:flex-row space-y-5 md:justify-around items-center mt-6">
            <div class="hidden md:block w-72 mt-3 md:mt-0  md:w-1/3">
                <img src="{{ asset('img/img-about-us.png') }}" alt="">
            </div>
            <div class=" w-72 md:w-1/3 bg-cover px-5 py-10  md:py-16 md:px-4"
                style="background-image: url('/img/card-visi2.png');">
                <div class="flex flex-col items-center">
                    <h3 class="text-3xl text-orange font-bold">Visi</h3>
                    <p class="text-lg text-orange font-medium leading-loose text-center">Menjadi mitra utama dalam dunia
                        percetakan dengan mengedepankan inovasi, kualitas, dan kepuasan pelanggan. Kami berkomitmen
                        untuk memberikan solusi cetak
                        yang tepat guna, efisien, dan berkelanjutan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full mb-5 md:mb-0 h-auto md:px-20 md:py-12 bg-cover"
        style="background-image: url('/img/about-frame.png');">
        <div class="mt-10">
            <h3 class="text-3xl text-yellow font-bold mb-12 text-center">Misi</h3>
            <div class="flex flex-col md:flex-row items-center md:items-baseline space-y-10 md:justify-around">
                <div class="bg-custom-gradient px-6 py-4 w-72 rounded-lg">
                    <h4 class="text-dark-green font-semibold mb-2">Kualitas Cetakan yang Unggul</h4>
                    <p class="text-dark-green font-normal text-base">Kami berkomitmen untuk selalu menghasilkan cetakan
                        dengan
                        resolusi tinggi dan
                        kualitas warna yang
                        akurat, menggunakan teknologi terkini di dunia percetakan.</p>
                </div>
                <div class="bg-custom-gradient px-6 py-4 w-72 rounded-lg">
                    <h4 class="text-dark-green font-semibold mb-2">Inovasi dalam Setiap Proses</h4>
                    <p class="text-dark-green font-normal text-base">Kami terus berinovasi, baik dalam proses desain
                        maupun
                        pencetakan, untuk selalu menghadirkan solusi terbaru dan sesuai dengan kebutuhan pasar.</p>
                </div>
            </div>
            <div class="flex justify-center mt-10">
                <div class="bg-custom-gradient px-6 py-4 w-72 rounded-lg">
                    <h4 class="text-dark-green font-semibold mb-2">Ketepatan Waktu dalam Setiap Pesanan</h4>
                    <p class="text-dark-green font-normal text-base">Waktu adalah hal yang penting bagi kami dan
                        pelanggan.
                        Kami memastikan setiap pesanan selesai dan dikirim tepat waktu, tanpa mengorbankan kualitas.</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
