<x-main specialPage=true title='Daftar GYM'>
  <x-layout_card_form>
    <form action="{{ route('sixpack3.store') }}" method="post">
      @csrf
      <div class="flex justify-center border-b my-4 pb-4">
        <h2 class="text-3xl font-Futura">Daftar form Sixpack 3</h2>
      </div>
      <input type="hidden" name="kode" value="UA{{ time() }}">
      @error('kode')
        <div id="kode" class="text-sm text-red-500">
            {{ $message }}
        </div>
      @enderror
      <div class="flex-none ">
        <label class="block mx-4 my-4">
          <span class="">Club</span>
          <select name="club_id" id="club_id" class="block border-0 border-b-2 w-full focus:border-black @error('nominal') border-red-300 @enderror">
            <option value="" >Select club</option> 
            @foreach ($clubs['rows'] as $club)
              @if ( $club['id'] != '1' && $club['id'] != '6' )
                @if ( old('club_id') == $club['id'] )
                  <option value="{{ $club['id'] }}" selected>{{ $club['name'] }}</option>
                @else
                  <option value="{{ $club['id'] }}">{{ $club['name'] }}</option> 
                @endif
              @endif
            @endforeach
          </select>
          @error('club_id')
            <div id="club_id" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Nama Lengkap</span>
          <input name="nama" type="text" 
          value="{{ old('nama') }}"
          placeholder="Nama Lengkap"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('nama') border-red-300 @enderror">
          @error('nama')
            <div id="nama" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Nomer Whatsapp</span>
          <input name="nomor" type="text" 
          placeholder="6281089898989"
          value="{{ old('nomor') }}"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('nomor') border-red-300 @enderror">
          @error('nomor')
            <div id="nomor" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Email</span>
          <input name="email" type="text" 
          placeholder="youremail@example.com"
          value="{{ old('email') }}"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('email') border-red-300 @enderror">
          @error('email')
            <div id="email" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Alamat</span>
          <input name="alamat" type="text" 
          placeholder="Alamat"
          value="{{ old('alamat') }}"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('alamat') border-red-300 @enderror">
          @error('alamat')
            <div id="alamat" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
      </div>
      <div class="flex justify-end my-4">
        <button id="btn-submit" class="bg-green-500 py-2 px-6 rounded-lg mx-4 text-white text-lg" type="submit">Kirim</button>
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
            <a href="#" class="text-blue-500 underline">Cek Invoice</a>
          </li>
          <li>
            <a href="#" class="text-blue-500 underline">Lupa Invoice saya!</a>
          </li>
        </ul>
      </div>
    </form>
  </x-layout_card_form>

  @push('script')
    <!-- Meta Pixel Code -->
    {{-- <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '544863203544959');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=544863203544959&ev=PageView&noscript=1"
    /></noscript>
    <script type="text/javascript">
      document.getElementById('btn-submit').addEventListener('click', function() {
      fbq('track', 'CompleteRegistration');
      }, false);
    </script> --}}
    <!-- End Meta Pixel Code -->
    <script>
      const btnSubmid = document.getElementById('btn-submit');
      // console.log(btnSubmid);
      btnSubmid.addEventListener("click", function (e) {
        const btnDisabled = document.getElementById('btn-disabled');
        btnDisabled.classList.toggle("hidden");
        btnSubmid.classList.toggle("hidden");
      });
    </script>
  @endpush
</x-main>
