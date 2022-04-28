<x-main >
    <div >
        <div class=""><img src="{{ url('/image/aboutus/bannerAboutus1.jpg') }}" alt="ua1"></div>
    </div>

    <div class="container py-3">
        <div class="text-center my-4">
            <h3 class="text-5xl">welcome</h3>
            <p class="text-lg my-8">Urban Athletes adalah sebuah tempat bagi mereka yang ingin berinspirasi untuk hidup sehat.</p>
            <p class="text-lg">
                percaya bahwa kesehatan yang terlihat dari luar berasal dari kesehatan yang telah diolah 
                dari dalam. Seiring berkembangnya zaman dan kesibukan yang terus meningkat, 
                kami melihat semakin banyak orang yang tidak peduli dengan kesehatan. 
                Hal ini menjadikan motivasi bagi kami untuk memberikan tempat khusus bagi mereka yang 
                ingin menjadikan hidup sehat sebagai gaya hidup dengan metode yang tepat dan fun.</p>
        </div>

        <div class="my-8"><img src="{{ url('/image/aboutus/bannerAboutus2.jpg') }}" alt="ua2"></div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-3">
            <div><img src="{{ url('/image/aboutus/fotoAboutus1.jpg') }}"></div>
            <div><img src="{{ url('/image/aboutus/fotoAboutus2.jpg') }}"></div>
            <div><img src="{{ url('/image/aboutus/fotoAboutus3.jpg') }}"></div>
            <div><img src="{{ url('/image/aboutus/fotoAboutus4.jpg') }}"></div>
        </div>

        <div>
            <h4 class="text-5xl text-center my-8">Kenapa Urban Athletes?</h4>
        </div>

        <div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 text-black">
                <div class="flex justify-center place-items-center text-center"><a class=""
                href="https://www.facebook.com/urbanathletesindo/" target="_blank" rel="Facebook">
                <i class="fa-solid fa-user text-5xl"></i>
                <p class="text-2xl"><span class="italic"> Personal Trainer </span> yang telah tersertifikasi</p>
                <p>Trainer profesional kami akan membantu Anda secara tepat dan cepat dengan standarisasi yang telah ditentukan.
                     Konsultasi fitness dan kesehatan juga dapat dilakukan dengan para trainer kami.</p>
                </a>
            </div>
                <div class="flex justify-center place-items-center text-center"><a class=""
                href="https://www.instagram.com/urban.athletes/" target="_blank" rel="instagram">
                <i class="fa-solid fa-thumbs-up text-5xl"></i>
                <p class="text-2xl">Akses ke lebih dari 500+ kelas</p>
                <p>Fasilitas unggulan kami yang lain adalah tersedianya kelas-kelas yang dapat diikuti oleh para member Urban Athletes, 
                    dipimpin oleh pelatih-pelatih berpengalaman di bidangnya.</p>
                </a></div>
                <div class="flex justify-center place-items-center text-center"><a class=""
                href="https://www.youtube.com/channel/UCLV--bH8TFFYEf3Nz7Hv2vA" target="_blank" rel="youtube">
                <i class="fa-solid fa-star text-5xl"></i>
                <p class="text-2xl">Fasilitas fitness yang telah terstandarisasi</p>
                <p>Keamanan bagi semua member kami tetap menjadi prioritas utama Urban Athletes. Kesehatan tetap nomor satu, 
                    tetapi apa artinya tanpa keselamatan yang terjamin.</p>
                </a></div>
                <div class="flex justify-center place-items-center text-center"><a class=""
                href="https://www.youtube.com/channel/UCLV--bH8TFFYEf3Nz7Hv2vA" target="_blank" rel="youtube">
                <i class="fa-solid fa-heart text-5xl"></i>
                <p class="text-2xl">Suasana yang ramah</p>
                <p>Tidak hanya sebagai tempat berolahraga, kami ingin Urban Athletes menjadi rumah yang nyaman bagi semua member kami. 
                    Para staff dan seluruh keluarga Urban Athletes akan menjadi teman terbaik Anda.</p>
                </a></div>
              </div>

            <div>
                <h3 class="text-5xl text-center my-8 mb-8 text-lime-500">MEET OUR SUPER HEROES!</h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <img src="{{ url('/image/aboutus/fotoPelatih1.jpg') }}">
                    <p class="text-2xl font-bold my-8">PRASETYO DAJAN R.</p>
                    <p class="font-bold mb-8">Sertifikasi: TRX, BATTLE ROPE LEVEL 1, KETTLEBELL LEVEL 1, MUAYTHAI BORAN, RAI INSTITUTE.</p>
                </div>
                <div>
                    <img src="{{ url('/image/aboutus/fotoPelatih2.jpg') }}">
                    <p class="text-2xl font-bold my-8">DYMAS PRADANATA</p>
                    <p class="font-bold mb-8">SERTIFIKASI : IKSFA LEVEL 1 KETTEBELL SPORT COACH, RAI INSTITUTE CPT, APKI SUSPENSION TRAINING SPECIALIST.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <img src="{{ url('/image/aboutus/fotoPelatih3.jpg') }}">
                    <p class="text-2xl font-bold my-8">NAUNG PUDI MEI RIVO BARUMALANG (RIVO)</p>
                    <p class="font-bold">Sertifikasi: TRX, VIPR, RUMBLE ROLLER, BOSU PILATES, THUMB BOXING, PETER TWIST, DYNAMAX, BASIC LIFE SUPPORT, KETTLEBELL.</p>
                </div>
            </div>
        </div>
    </div>

    
</x-main>

{{-- @extends('layouts.main')

@section('content')

@endsection --}}