<x-main specialPage=true>
  @push('script')
    {{-- <script src="/js/coba.js"></script> --}}
  @endpush
  <div class="2xl:container font-FuturaBold">
    <div class="p-4 w-full aspect-auto bg-[url('/image/promo/288/bgHeader.png')] bg-cover relative">
      <div class="w-24 lg:ml-12 lg:mt-8">
        <img class="w-full" src="{{ url('/image/Logo_Urban-2.png')}}" alt="Logo Urban Athletes">
      </div>
      <div class="container grid md:grid-cols-2 items-center">
        <div class="my-8 lg:pl-32 text-white text-4xl md:text-5xl xl:text-6xl">
          <h3 class="leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase">
            Gym Sultan Harga Rakyat
          </h3>
          <h3 class="font-extrabold italic my-4 md:my-8 text-3xl md:text-4xl xl:text-5xl">
            Hanya Rp.288.000
          </h3>
          <div class="flex items-center py-4">
            <button id="btn-submit"
              class="
                py-2 px-4 rounded-xl bg-red-600 text-base uppercase font-thin
                hover:shadow hover:shadow-red-400 hover:bg-red-700
                transition-all duration-300
              "
            >
              Daftar Sekarang
            </button>
          </div>
        </div>
        <div class="p-4 w-full">
          <img class="w-full max-w-lg mx-auto" src="{{ url('/image/promo/288/imgHeader.png')}}" alt="Mis UN">
        </div>
      </div>
    </div>

    
    <div class="mx-auto max-w-4xl text-center px-4 py-8">
      <h2 class="my-4 md:my-6 italic font-extrabold text-xl md:text-4xl">HAJAR LEMAKMU ! BUKAN DOMPETMU !</h2>
      <p>Dapatkan membership dengan harga terjangkau selama 30 hari.</p>
    </div>

    <div class="p-4 w-full aspect-auto bg-[url('/image/promo/288/bgMain1.png')] bg-cover relative h-32 md:h-[19rem] lg:h-[23rem]">
      <div class="max-w-lg lg:max-w-3xl
        leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase
        absolute bottom-0 py-4 md:p-8 md:text-2xl lg:p-12 lg:text-4xl
      ">
        Akses lebih dari 200 kelas terjadwal setiap minggunya
      </div>
    </div>

    <div class="bg-black relative">
      <div class="relative p-4 w-full max-w-xl lg:max-w-4xl aspect-auto bg-[url('/image/promo/288/bgMain2.png')] bg-cover h-44 sm:h-72 md:h-[23rem] lg:h-[23rem]">
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-t sm:bg-gradient-to-l from-black md:max-w-2xl lg:max-w-4xl"></div>
      </div>
      <div class="max-w-xs md:max-w-lg px-4
        sm:absolute right-0 top-0 bottom-0 
        py-4 md:pl-8 md:text-2xl
      ">
        <h2 class="leading-snug font-extrabold text-red-700 italic uppercase">FREE</h2>
        <h2 class="leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase">
          Tes komposisi lemak tubuh dengan In Body
        </h2>
        <div class="pl-4 font-AmpleSoft tracking-widest">
          <ul class="list-disc text-[#F0BE2E]">
            <li>
              <p class="text-white font-thin text-sm">Hitung komposisi lemak</p>
            </li>
            <li>
              <p class="text-white font-thin text-sm">Massa otot</p>
            </li>
            <li>
              <p class="text-white font-thin text-sm">Berat & kekuatan tulang</p>
            </li>
            <li>
              <p class="text-white font-thin text-sm">Hitung usia metabolisme tubuh</p>
            </li>
            <li>
              <p class="text-white font-thin text-sm">Keseimbangan massa otot & lemak</p>
            </li>
            <li>
              <p class="text-white font-thin text-sm">Hitung usia metabolisme tubuh</p>
            </li>
            <li>
              <p class="text-white font-thin text-sm">Keseimbangan massa otot & lemak</p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="grid gap-8 md:grid-cols-2 place-items-center min-h-[10rem] py-8 lg:py-18 px-4">
      <div>
        <img class="w-full max-w-lg mx-auto" src="{{ url('/image/promo/288/mobileApp/imgMobileApp.png')}}" alt="Mobile apps UA">
      </div>
      <div class="grid grid-cols-3 gap-14 lg:gap-x-20 gap-y-12">
        <div class="text-center space-y-2 font-AmpleSoft">
          <img class="w-18 mx-auto rounded-lg" src="{{ url('/image/promo/288/mobileApp/mItem1.png')}}" alt="Booking apps UA">
          <p>Booking kelas</p>
        </div>
        <div class="text-center space-y-2 font-AmpleSoft">
          <img class="w-18 mx-auto rounded-lg" src="{{ url('/image/promo/288/mobileApp/mItem2.png')}}" alt="Booking apps UA">
          <p>Pembelian <br/>Membership</p>
        </div>
        <div class="text-center space-y-2 font-AmpleSoft">
          <img class="w-18 mx-auto rounded-lg" src="{{ url('/image/promo/288/mobileApp/mItem3.png')}}" alt="Booking apps UA">
          <p>PT Session</p>
        </div>
        <div class="text-center space-y-2 font-AmpleSoft">
          <img class="w-18 mx-auto rounded-lg" src="{{ url('/image/promo/288/mobileApp/mItem4.png')}}" alt="Booking apps UA">
          <p>Point Reward <br/>Stamp</p>
        </div>
        <div class="text-center space-y-2 font-AmpleSoft">
          <img class="w-18 mx-auto rounded-lg" src="{{ url('/image/promo/288/mobileApp/mItem5.png')}}" alt="Booking apps UA">
          <p>Members <br/>Benefit</p>
        </div>
        <div class="text-center space-y-2 font-AmpleSoft">
          <img class="w-18 mx-auto rounded-lg" src="{{ url('/image/promo/288/mobileApp/mItem6.png')}}" alt="Booking apps UA">
          <p>Members <br/> Progress</p>
        </div>
      </div>
    </div>
    
    <div class="relative min-h-[20rem] flex">
      <div class="w-full min-h-full bg-[url('/image/promo/288/bgDaftarSecondary.png')] bg-cover bg-center">
        <div class="z-40">
          
        </div>
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-black/80 items-center text-center flex flex-row justify-center">
          <div class="px-4">
            <h3 class="leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase sm:text-xl lg:text-3xl">
              TERBATAS UNTUK 50 ORANG PENDAFTAR PERTAMA ! <br/>
              HARI INI !
            </h3>
            <div class="flex items-center py-4">
              <button id="btn-submit"
                class="mx-auto text-white
                    py-2 px-4 rounded-xl bg-red-600 text-base uppercase font-thin
                    hover:shadow hover:shadow-red-400 hover:bg-red-700
                    transition-all duration-300
                  "
              >
                Daftar Sekarang
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="my-8 px-8">
      <h2 class="text-xl md:text-3xl text-center font-black italic leading-snug text-transparent bg-clip-text bg-black text-shadow-lg">CLASSES & FACILITIES</h2>
      <div class="grid grid-cols-2 lg:grid-cols-3 pt-8 md:px-12 gap-2">
        <div class="col-span-2 row-span-2 relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/1.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/2.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/3.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/4.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/5.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/6.png')}}" alt="News Urban Athletes">
        </div>
      </div>
    </div>

    <div class="my-12 px-8">
      <h2 class="text-xl md:text-3xl text-center font-black italic leading-snug text-transparent bg-clip-text bg-black text-shadow-lg">URBAN ATHLETES CLUBS</h2>
      <div class="flex flex-wrap py-4 justify-around">
        <div class="m-4 w-full max-w-[280px] lg:max-w-sm px-2 relative min-h-[30rem]">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/clubs/1.png')}}" alt="clubs Urban Athletes">
          <div class="p-4 font-AmpleSoft">
            <h3 class="text-xl font-FuturaBold italic pb-4">URBAN ATHLETES GUNAWANGSA MERR</h3>
            <div class="flex items-center space-x-4 px-2">
              <i class="fa-solid fa-phone text-sm"></i>
              <p>(031) 51163660 </p>
            </div>
            <div class="flex items-start space-x-4 px-2 my-2">
              <i class="fa-solid fa-location-dot text-sm pt-1"></i>
              <p>Jl. Mayjend. Jonosewojo No.9, Pradahkalikendal, Kec. Dukuhpakis, Kota Surabaya, Jawa Timur 60216</p>
            </div>
          </div>
          <div class="absolute bottom-2 right-2 left-2">
            <a href="https://goo.gl/maps/cL9JFBqttF9mavmr8" target="_blank"
              class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] py-2"
            >
              <button class="w-full">Lihat Lokasi</button>
            </a>
          </div>
        </div>
        <div class="m-4 w-full max-w-[280px] lg:max-w-sm px-2 relative min-h-[30rem]">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/clubs/2.png')}}" alt="clubs Urban Athletes">
          <div class="p-4 font-AmpleSoft">
            <h3 class="text-xl font-FuturaBold italic pb-4">URBAN ATHLETES GUNAWANGSA TIDAR</h3>
            <div class="flex items-center space-x-4 px-2">
              <i class="fa-solid fa-phone text-sm"></i>
              <p>(031) 99252900 </p>
            </div>
            <div class="flex items-start space-x-4 px-2 my-2">
              <i class="fa-solid fa-location-dot text-sm pt-1"></i>
              <p>Jl. Tidar No.350, Tembok Dukuh, Kec. Bubutan, Kota Surabaya, Jawa Timur 60173</p>
            </div>
          </div>
          <div class="absolute bottom-2 right-2 left-2">
            <a href="https://goo.gl/maps/YPkvi67RBMGurZv57" target="_blank"
              class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] py-2"
            >
              <button class="w-full">Lihat Lokasi</button>
            </a>
          </div>
        </div>
        <div class="m-4 w-full max-w-[280px] lg:max-w-sm px-2 relative min-h-[30rem]">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/clubs/3.png')}}" alt="clubs Urban Athletes">
          <div class="p-4 font-AmpleSoft">
            <h3 class="text-xl font-FuturaBold italic pb-4">URBAN ATHLETES LENMARC MALL</h3>
            <div class="flex items-center space-x-4 px-2">
              <i class="fa-solid fa-phone text-sm"></i>
              <p>(031) 87853222 </p>
            </div>
            <div class="flex items-start space-x-4 px-2 my-2">
              <i class="fa-solid fa-location-dot text-sm pt-1"></i>
              <p>Jl. Raya Kedung Baruk No.96, Kedung Baruk, Kec. Rungkut, Kota Surabaya, Jawa Timur 60298</p>
            </div>
          </div>
          <div class="absolute bottom-2 right-2 left-2">
            <a href="https://goo.gl/maps/54V2ZzUrBqrFktpc6" target="_blank"
              class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] py-2"
            >
              <button class="w-full">Lihat Lokasi</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    {{-- Footer --}}
    <div class="bg-black pb-12 relative">
      <div class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] pt-4 px-4">
        <div class="xl:w-3/5 lg:ml-auto">
          <div class="max-w-lg lg:max-w-xl ml-auto xl:mx-0">
            <h3 class="text-2xl italic">URBAN ATHLETES ADALAH GYM DENGAN PROTOKOL COVID-19 PERTAMA DAN TERJAMIN DI SURABAYA!</h3>
            <div class="flex items-center py-4">
              <button id="btn-submit"
                class="text-white
                    py-2 px-4 rounded-xl bg-red-600 text-base uppercase font-thin
                    hover:shadow hover:shadow-red-400 hover:bg-red-700
                    transition-all duration-300
                  "
              >
                Daftar Sekarang
              </button>
            </div>
          </div>
        </div>
        <div class="md:absolute bottom-0 left-0 lg:left-36">
          <img class="w-48 md:w-56" src="{{ url('/image/promo/288/fotoFooter.png')}}" alt="clubs Urban Athletes">
        </div>
      </div>
    </div>
    
  </div>

  <!-- Modal -->
  <div id="tnc-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full inset-0 h-modal h-full pb-4">
    <div class="relative p-4 w-full max-w-4xl h-auto mx-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow mt-12">
        <!-- Modal body -->
        <div class="p-6 space-y-6 relative">
          <button type="button" id="btn-close-modal" data-modal-toggle="large-modal"
            class="text-white bg-transparent hover:text-gray-900 rounded-full text-sm p-2 ml-auto inline-flex items-center
              absolute -top-3 -right-3 bg-red-600
            "
          >
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <p class="text-3xl font-FuturaBold italic font-semibold">Syarat & Ketentuan</p>
          <ol class="list-decimal px-4">
            <li class="py-2">
              Promo 288K ini khusus untuk New Join Member atau ex-member dengan masa aktif kadaluarsa lebih dari 6 bulan, dan tidak bisa diperpanjang dengan promo yang sama.
            </li>
            <li class="py-2">
              Cabang yang dipilih tidak bisa diganti setelah proses registrasi selesai. Promo ini hanya berlaku untuk non member yang belum pernah melakukan trial di Urban Athletes dan berusia di atas 18 tahun.
            </li>
            <li class="py-2">
              Kami tidak bertanggung jawab atas kelalaian atau kehilangan sejumlah uang pribadi calon member dan tidak ada pengembalian dana dengan alasan apapun.
            </li>
            <li class="py-2">
              Pengaktifan membership ini paling lambat 10 hari setelah pembayaran selesai di cabang yang di pilih.
            </li>
          </ol>

          <div class=" flex items-center">
            <input type="checkbox" value="1" name="agree" id="agree" onchange="agree(this)">
            <label for="agree" class="mx-4">Saya Setujuh dengan Syarat & Ketentuan</label>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center justify-center p-6 space-x-2 rounded-b border-t border-gray-200 font-FuturaBold">
          <a href="{{ route('288.daftar') }}">
            <button id="btn-agree" class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] hover:from-yellow-500 hover:to-yellow-200 py-1 px-6 rounded-lg mx-4 text-black text-lg uppercase hidden" type="button" >Lanjut Daftar</button>
          </a>
          <button id="btn-agree2" class="bg-gradient-to-r from-[#F0BE2E]/60 to-[#FCF086]/60 py-1 px-6 rounded-lg mx-4 text-black text-lg uppercase" disabled type="button" >Lanjut Daftar</button>
        </div>
      </div>
    </div>
  </div>
  
  @push('script')
    <script>
      const btnSubmit = document.querySelectorAll('#btn-submit');
      const tncModal = document.getElementById('tnc-modal');
      const btnCloseModal = document.getElementById('btn-close-modal');
      const btnAgree = document.getElementById('btn-agree');
      const btnAgree2 = document.getElementById('btn-agree2');
      const form = document.getElementById('form');
      const agreeCheck = document.getElementById('agree');

      function submitFun(el) {
        el.addEventListener('click', () => {
          el.classList.add('hidden');
          tncModal.classList.remove('hidden');
        })
      }

      btnSubmit.forEach((btn) => submitFun(btn))
      btnCloseModal.addEventListener('click', () => {
        btnSubmit.forEach((btn) => {btn.classList.remove('hidden')})
        tncModal.classList.add('hidden');
      })

      if (agreeCheck.checked) {
        btnAgree.classList.remove('hidden');
        btnAgree2.classList.add('hidden');
      }

      function agree(el){
      if (el.checked) {
        btnAgree.classList.remove('hidden');
        btnAgree2.classList.add('hidden');
      } else {
        btnAgree.classList.add('hidden');
        btnAgree2.classList.remove('hidden');
      }
      }

      btnAgree.addEventListener('click', () => {
        // form.submit();
        tncModal.classList.add('hidden');
      });

    </script>
  @endpush
</x-main>