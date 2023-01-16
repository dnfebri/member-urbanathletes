<x-main specialPage=true title='Daftar GYM'>
  <x-layout_card_form>
    <form action="{{ route('288.save') }}" method="post">
      @csrf
      <div class="flex justify-center border-b my-4 pb-4">
        <h2 class="text-3xl font-FuturaBold">Daftar form GYM</h2>
      </div>
      <input type="hidden" name="kode" value="">
      @error('kode')
        <div id="kode" class="text-sm text-red-500">
            {{ $message }}
        </div>
      @enderror
      @if(session('alert'))
        <div class="p-4 w-full bg-red-400 rounded-md bg-opacity-40">
          <h3 class="mx-5 font-bold">{{session('alert')}}</h3>
        </div>
      @endif
      @if(session('success'))
        <div class="p-4 w-full bg-green-600 rounded-md bg-opacity-40" data-massage="{{session('success')}}" data-email="{{session('email')}}" id="success">
          <h3 class="mx-5 font-bold">Cek kotak masuk / spam email {{session('email')}} untuk melanjutkan pembayaran</h3>
        </div>
      @endif
      <div class="px-4 md:px-8">
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
                @if ( $club['id'] != '1' && $club['id'] != '3'  && $club['id'] != '6' && $club['id'] != '7' )
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
            @error('club')
              <div id="club" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>

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
      </div>
      <div class="flex justify-end my-4 md:px-8">
        <button id="btn-submit" class="bg-green-500 py-2 px-6 rounded-lg mx-4 text-white text-lg" type="submit">Claim Promo</button>
        <span id="btn-disabled" class="hidden">
          <button class="flex items-center bg-green-500 opacity-80 py-2 px-2 mx-4 rounded-lg text-white text-lg" disabled>
            <img class="w-7 h-7" src="{{ url('/image/icon/Loading-white.svg') }}" alt="Urban Athletes"/> 
            Proses...
          </button>
        </span>
      </div>
      <div class="border-t my-4 pb-4">
        <ul class="my-4 mx-4">
          <li>
            <a href="{{ route('order.search') }}" class="text-blue-500 underline">Cek Status Pembayaran</a>
          </li>
          <li>
            <a href="{{ route('288.generate') }}" class="text-blue-500 underline">Generate Kode Baru</a>
          </li>
        </ul>
      </div>
    </form>
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

    btnSubmit.addEventListener('click', () => {
    btnSubmit.classList.add('hidden');
    btnDisable.classList.remove('hidden');
    });

  </script>
  @endpush
</x-main>
