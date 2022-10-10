<x-main specialPage=true title='Daftar Back In Shape'>
  <x-layout_card_form>
    {{-- <div id="modal" class="fixed top-0 bottom-full right-0 left-0 bg-red-700
      transition-all duration-500
    ">
      <div class="relative">
        <h1>modal</h1>
      </div>
    </div> --}}
    <form action="{{ route('v2.back-in-shape.daftar') }}" method="post" id="form">
      @csrf
      <div class="flex justify-center border-b my-4 pb-4">
        <h2 class="text-3xl font-Futura">Daftar Back In Shape</h2>
      </div>
      @if(session('alert'))
        <div class="p-4 bg-red-400 rounded-md bg-opacity-40">
          <h3 class="mx-5 font-bold">{{session('alert')}}</h3>
        </div>
      @endif
      @if(session('success'))
        <div class="p-4 mx-4 bg-green-600 rounded-md bg-opacity-40" data-massage="{{session('success')}}" data-email="{{session('email')}}" id="success">
          <h3 class="mx-5 font-bold">Cek kotak masuk / spam email {{session('email')}} untuk melanjutkan pembayaran</h3>
        </div>
      @endif
      <div class="px-4 pt-2">
        <div class="flex justify-center space-x-6 p-2 @error('promo') border border-red-300 @enderror">
          <div>
            <label for="promo1">
              <img class="w-56 md:w-52" src="{{ url('/image/promo/back-in-shape/bis-poster-1.jpg')}}" alt="BIS">
            </label>
            <input type="radio" name="promo" id="promo1" value="1" class="mx-4"> Rp. 488.000,-
          </div>
          <div>
            <label for="promo2">
              <img class="w-56 md:w-52" src="{{ url('/image/promo/back-in-shape/bis-poster-2.jpg')}}" alt="BIS">
            </label>
            <input type="radio" name="promo" id="promo2" value="2" class="mx-4"> Rp. 988.000,-
          </div>
        </div>
        @error('promo')
          <div id="promo" class="text-sm text-red-500">
              {{ $message }}
          </div>
        @enderror

        {{-- <div class="pt-4 my-4">
          <label class="relative">
            <span class="absolute ml-2 -top-0.5 right-full left-2 opacity-70 w-max transition-all duration-300">
              Promo
            </span>
            <select name="promo" type="text" id="inputs"
            value="{{ old('promo') }}" onfocus="inInput(this)" onblur="outInput(this)"
            class="w-full bg-transparent focus:ring-0 text-black focus:border-black h-10 px-2 group-focus:bg-black  @error('promo') border-red-300 @enderror">
              <option value="" ></option>
              <option value="1">Rp 488.000.-</option>
              <option value="2">Rp 988.000.-</option>
            </select>
            @error('promo')
              <div id="promo" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div> --}}
        <div class="pt-4 my-4">
          <label class="relative text-black">
            <span class="absolute -top-0.5 right-full left-2 opacity-70 min-w-max transition-all duration-300">
              Kode Influencer
            </span>
            <input name="kdRef" type="text" id="inputs"
            value="{{ old('kdRef') ? old('kdRef') : ($kdRef!=='ua' ? $kdRef : '') }}" onfocus="inInput(this)" onblur="outInput(this)"
            @if($kdRef !== 'ua')
              readonly
            @endif
            class="w-full bg-transparent focus:ring-0 focus:border-black h-10 px-2 group-focus:bg-black @if($kdRef !== 'ua') bg-neutral-200 text-neutral-700 @endif">
          </label>
        </div>

        <!-- Select -->
        <div class="pt-4 my-4">
          <label class="relative">
            <span class="absolute ml-2 -top-0.5 right-full left-2 opacity-70 w-max transition-all duration-300">
              Club
            </span>
            <select name="club_id" type="text" id="inputs"
            value="{{ old('club_id') }}" onfocus="inInput(this)" onblur="outInput(this)"
            class="w-full bg-transparent focus:ring-0 text-black focus:border-black h-10 px-2 group-focus:bg-black">
              <option value="" ></option> 
              @foreach ($clubs['rows'] as $club)
                @if ( $club['id'] != '1' && $club['id'] != '6' && $club['id'] != '7' )
                  @if ( old('club_id') == $club['id'] )
                    <option value="{{ $club['id'] }}" selected>{{ $club['name'] }}
                    </option>
                  @else
                    <option value="{{ $club['id'] }}">{{ $club['name'] }}
                    </option> 
                  @endif
                @endif
              @endforeach
            </select>
          </label>
        </div>
        <!-- Input -->
        <div class="pt-4 my-4">
          <label class="relative">
            <span class="absolute -top-0.5 right-full left-2 opacity-70 min-w-max transition-all duration-300">
              Nama Lengkap
            </span>
            <input name="nama" type="text" id="inputs"
            value="{{ old('nama') }}" onfocus="inInput(this)" onblur="outInput(this)"
            class="w-full bg-transparent focus:ring-0 text-black focus:border-black h-10 px-2 group-focus:bg-black @error('nama') border-red-300 @enderror">
            @error('nama')
              <div id="nama" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="pt-4 my-4">
          <label class="relative">
            <span class="absolute -top-0.5 right-full left-2 opacity-70 min-w-max transition-all duration-300">
              Nomer Whatsapp
            </span>
            <input name="nomor" type="text" id="inputs"
            value="{{ old('nomor') }}" onfocus="inInput(this)" onblur="outInput(this)"
            class="w-full bg-transparent focus:ring-0 text-black focus:border-black h-10 px-2 group-focus:bg-black @error('nomor') border-red-300 @enderror">
            @error('nomor')
              <div id="nomor" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="pt-4 my-4">
          <label class="relative">
            <span class="absolute -top-0.5 right-full left-0 opacity-70 min-w-max transition-all duration-300 pl-3">
              Email
            </span>
            <input name="email" type="text" id="inputs"
            value="{{ old('email') }}" onfocus="inInput(this)" onblur="outInput(this)"
            class="w-full bg-transparent focus:ring-0 text-black focus:border-black h-10 px-2 group-focus:bg-black @error('email') border-red-300 @enderror">
            @error('email')
              <div id="email" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="pt-4 my-4">
          <label class="relative">
            <span class="absolute -top-0.5 right-full left-1 opacity-70 min-w-max transition-all duration-300 pl-2">
              Nomer KTP
            </span>
            <input name="noKtp" type="text" id="inputs"
            value="{{ old('noKtp') }}" onfocus="inInput(this)" onblur="outInput(this)"
            class="w-full bg-transparent focus:ring-0 text-black focus:border-black h-10 px-2 group-focus:bg-black @error('noKtp') border-red-300 @enderror">
            @error('noKtp')
              <div id="noKtp" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="pt-4 my-4">
          <label class="relative">
            <span class="absolute -top-0.5 right-full left-0 opacity-70 min-w-max transition-all duration-300 pl-3">
              Alamat
            </span>
            <input name="alamat" type="text" id="inputs"
            value="{{ old('alamat') }}" onfocus="inInput(this)" onblur="outInput(this)"
            class="w-full bg-transparent focus:ring-0 text-black focus:border-black h-10 px-2 group-focus:bg-black @error('alamat') border-red-300 @enderror">
            @error('alamat')
              <div id="alamat" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>

      </div>
      <div class="flex justify-end my-4">
        <button id="btn-submit" class="w-auto text-white bg-green-500 py-2 px-6 mx-4 text-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button" data-modal-toggle="large-modal">
          Submit
        </button>
        {{-- <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4">
        </div> --}}
        {{-- <button id="btn-submit" class="bg-green-500 py-2 px-6 rounded-lg mx-4 text-white text-lg" type="button" >Submit</button> --}}
        <span id="btn-disabled" class="hidden">
          <button class="flex items-center bg-green-500 opacity-80 py-2 px-2 mx-4 rounded-lg text-white text-lg" disabled>
            <img class="w-7 h-7" src="{{ url('/image/icon/Loading-white.svg') }}" alt="Urban Athletes"/> 
            Proses...
          </button>
        </span>
      </div>
      <div class="border-t my-4 pb-4">
        <ul class="my-4 mx-4">
          {{-- <li>
            <a href="{{ route('order.search') }}" class="text-blue-500 underline">Cek Status Pembayaran</a>
          </li> --}}
          <li>
            <a href="{{ route('v2.back-in-shape.generate') }}" class="text-blue-500 underline">Generate Kode Baru</a>
          </li>
        </ul>
      </div>
    </form>

    <!-- Modal -->
    <div id="tnc-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full inset-0 h-modal h-full pb-4">
      <div class="relative p-4 w-full max-w-4xl h-auto mx-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div class="flex justify-between items-center p-5 rounded-t border-b">
            <h3 class="text-xl font-medium">
              TERMS & CONDITIONS
            </h3>
            <button type="button" id="btn-close-modal" class="text-gray-400 bg-transparent hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="large-modal">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-6 space-y-6">
            <p class="text-lg font-semibold">SYARAT MENGIKUTI KOMPETISI</p>
            <ol class="list-decimal px-4">
              <li class="py-2">
                Melakukan sesi foto before serta melakukan penimbangan awal dengan mesin Tanita atau
                InBody di salah satu club Urban Athletes
              </li>
              <li class="py-2">
                Setiap peserta diwajibkan mengupload foto before tersebut di story IG masing – masing
                dan mention  @urban.athletes dan tulis hashtag #UAbackinshapechallenge #buildingabetteryou
              </li>
              <li class="py-2">
                Peserta wajib membuat HIGHLIGHT/SOROTAN khusus berjudul #UrbanAthletes yang berisi  progress dan  proses perjalanan selama mengikuti #UAbackinshapechallenge
              </li>
              <li class="py-2">
                Semua peserta akan mendapatkan  panduan latihan dan pola makan dan dipandu langsung oleh Personal Trainer Lv 4 kami
              </li>
              <li class="py-2">
                Setiap Peserta wajib melakukan sesi foto setiap minggunya dan melakukan penimbangan di mesin TANITA   / inbody dibantu oleh Personal Trainer dan diposting di Instagram masing - masing dan di UA MOTIVATION GROUP
              </li>
              <li class="py-2">
                Periode kompetisi dari tanggal 24 Oktober 2022 – 20 November 2022 (4 minggu)
              </li>
              <li class="py-2">
                Membership aktif per tanggal 24 Oktober (khusus paket modul + membership)
              </li>
              <li class="py-2">
                Sesi foto after akan dilakukan serempak di Club masing-masing, sekaligus penimbangan terakhir
              </li>
              <li class="py-2">
                Ketentuan-ketentuan lain yang belum tercantum akan disampaikan dan dijelaskan saat Technical Meeting (akan diinfokan melalui WA)
              </li>
            </ol>

            <p class="text-lg font-semibold">SYARAT MENGIKUTI KOMPETISI</p>
            <ol class="list-decimal px-4">
              <li class="py-2">
                Setiap peserta melengkapi formulir pendaftaran
              </li>
              <li class="py-2">
                Start Latihan dan diet akan dimulai hari Senin, 24 Oktober 2022
              </li>
              <li class="py-2">
                Peserta melengkapi foto "Before" sekaligus melakukan penimbangan berat badan dan komposisi tubuh di mesin Tanita atau Inbody, bersama PT
              </li>
              <li class="py-2">
                Peserta melakukan aktivitas Latihan di Club Urban Athletes minimal seminggu 5x dan memposting distory IG masing – masing dengan mention @urban.athletes dan hastag #Uabackinshapechallenge #buildingabetteryou (Khusus paket modul + membership)
              </li>
              <li class="py-2">
                Peserta memposting juga perjalanan dietnya di Instastory di IG masing – masing, seminggu 5x dengan mention @urban.athletes dan hastag #UAbackinshapechallenge #buildingabetteryou
              </li>
              <li class="py-2">
                Semua story wajib untuk dimasukkan ke dalam Highlight story
              </li>
              <li class="py-2">
                Setiap minggu peserta melakukan progress foto dan penimbangan berat badan dan komposisi tubuh dibantu dengan PT masing-masing
              </li>
              <li class="py-2">
                Kompetisi ini akan berakhir hari Minggu, 20 November 2022
              </li>
              <li class="py-2">
                Peserta melengkapi foto After di Club Lenmarc dan penimbangan berat badan dan komposi tubuh dibantu dengan staff UA
              </li>
              <li class="py-2">
                Pengumuman pemenang Back in Shape Challenge akan diumumkan setelah kompetisi berlangsung
              </li>
              <li class="py-2">
                Mekanisme lebih lanjut akan disampaikan saat Technical meeting
              </li>
            </ol>

            <p class="text-lg font-semibold">DENGAN MENCENTANG “YA” MAKA ANDA SETUJU DENGAN POIN-POIN DI BAWAH INI</p>
            <ol class="list-decimal px-4">
              <li class="py-2">
                Peserta bersedia memenuhi persyaratan dan ketentuan yang ditetapkan dalam kompetisi Back in Shape Challenge
              </li>
              <li class="py-2">
                Peserta bersedia mengikuti arahan modul untuk keberhasilan dalam kompetisi ini
              </li>
              <li class="py-2">
                Peserta wajib bersikap kooperatif dalam menjalani kompetisi Back in Shape Challenge
              </li>
              <li class="py-2">
                Peserta bersedia diliput (dokumentasi, interview, atau lainnya) selama masa kompetisi oleh pihak Urban Athletes, dan materi dokumentasi dapat digunakan untuk kebutuhan promosi brand Urban Athletes.
              </li>
              <li class="py-2">
                Peserta menyatakan berada dalam kondisi sehat lahir batin, serta tidak dalam proses pengobatan / perawatan kesehatan
              </li>
              <li class="py-2">
                Para peserta tidak diperkenankan menggunakan  segala jenis suplemen, steroid dan obat obatan.
              </li>
              <li class="py-2">
                Pihak Urban Athletes tidak bertanggung jawab atas kecelakaan / cedera dan komplikasi kesehatan lainnya yang terjadi selama mengikuti kompetisi
              </li>
              <li class="py-2">
                Keputusan pemenang oleh pihak Urban Athletes bersifat mutlak dan tidak dapat diganggu gugat
              </li>
              <li class="py-2">
                Peserta mengetahui, memahami, dan menyepakati seluruh syarat dan ketentuan yang telah ditetapkan oleh Urban Athletes
              </li>
              <li class="py-2">
                Peserta mengisi form ini sendiri secara sadar dan penuh tanggung jawab, tanpa ada paksaan dan interfensi dari pihak manapun
              </li>
              <li class="py-2">
                Disclaimer, Program Back in Shape Challenge ini dilakukan atas dasar semangat kami mewujudkan masyarakat yang sehat dan bugar. Hasil dapat berbeda untuk setiap orang. Peserta diharapkan berlatih dengan konsisten, bertanggung jawab, dan didampingi oleh PT dan berkonsultasi dengan Diet Coach kami
              </li>
            </ol>
            <div class=" flex items-center">
              <input type="checkbox" value="1" name="agree" id="agree" onchange="agree(this)">
              <label for="agree" class="mx-4">Agree</label>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 ">
            <button id="btn-agree" class="bg-green-500 hover:bg-green-600 py-2 px-6 rounded-lg mx-4 text-white text-lg hidden" type="button" >Submit</button>
            <button id="btn-agree2" class="bg-green-500/60 py-2 px-6 rounded-lg mx-4 text-white text-lg" disabled type="button" >Submit</button>
          </div>
        </div>
      </div>
    </div>

  </x-layout_card_form>

  @push('script')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    let success = document.querySelector('#success');
    if (success) {
      Swal.fire(
        'Email Terkirim',
        success.getAttribute("data-massage")+'<br>'+success.getAttribute("data-email"),
        'success'
      )
    }
  </script>
  <script>
    let inputs = document.querySelectorAll('#inputs');

    inputs.forEach(input => {
      if (input.value != '') {
        inInput(input);
      }
    });

    function inInput(e) {
      e.previousElementSibling.classList.add('input-active');
    }
    function outInput(e) {
      if (e.value == '') {
        e.previousElementSibling.classList.remove('input-active');
      }
    }
  </script>
  <script>
    const btnSubmit = document.getElementById('btn-submit');
    const btnDisable = document.getElementById('btn-disabled');
    const tncModal = document.getElementById('tnc-modal');
    const btnCloseModal = document.getElementById('btn-close-modal');
    const btnAgree = document.getElementById('btn-agree');
    const btnAgree2 = document.getElementById('btn-agree2');
    const form = document.getElementById('form');
    const agreeCheck = document.getElementById('agree');

    btnSubmit.addEventListener('click', () => {
    btnSubmit.classList.add('hidden');
    btnDisable.classList.remove('hidden');
    tncModal.classList.remove('hidden');
    })
    btnCloseModal.addEventListener('click', () => {
    btnSubmit.classList.remove('hidden');
    btnDisable.classList.add('hidden');
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
    form.submit();
    tncModal.classList.add('hidden');
    });

  </script>
  @endpush
</x-main>
