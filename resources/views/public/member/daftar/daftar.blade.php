<x-main specialPage=true title='Daftar GYM'>
  <x-layout_card_form>
    <form action="{{ route('daftar.store') }}" method="post">
      @csrf
      <div class="flex justify-center border-b my-4 pb-4">
        <h2 class="text-3xl font-Futura">Daftar form GYM</h2>
      </div>
      <input type="hidden" name="kode" value="UA{{ time() }}">
      @error('kode')
        <div id="kode" class="text-sm text-red-500">
            {{ $message }}
        </div>
      @enderror
      <div class="flex-none ">
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
        <button class="bg-green-500 py-2 px-6 rounded-lg mx-4 text-white text-lg">Kirim</button>
      </div>
    </form>
  </x-layout_card_form>
</x-main>
