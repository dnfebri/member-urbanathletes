<x-main specialPage=true>
  <div class="container">
    <div class="container flex items-center justify-center min-h-screen">
      <div class="rounded-xl bg-gray-100 w-full mx-8">
        {{-- {{dd($clubs['rows'])}} --}}
        <form action="{{ route('daftar.storeConfirm') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="flex justify-center border-b my-4 pb-4">
            <h2 class="text-2xl font-Futura">Confrim Daftar form GYM</h2>
          </div>
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
          <div class="flex-none ">
            <label class="block mx-4 my-4">
              <span class="">Kode Transaksi : {{ $dataInvoice->kode }}</span>
              <input type="text" name="kode" id="kode" value="{{ $dataInvoice->kode }}" hidden>
            </label>
            <label class="block mx-4 my-4">
              <span class="">Nama Lengkap</span>
              <input name="nama" type="text" 
              value="{{$dataInvoice->nama}}"
              class="block w-full px-0.5 border-0 border-b-2 bg-gray-100 focus:ring-0 focus:border-black @error('nama') border-red-300 @enderror"
              disabled>
              @error('nama')
                <div id="nama" class="text-sm text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </label>
            <label class="block mx-4 my-4">
              <span class="">Club</span>
              <select name="club" id="club" class="block border-0 border-b-2 w-full focus:border-black @error('nominal') border-red-300 @enderror">
                <option value="" >Select club</option> 
                @foreach ($clubs['rows'] as $club)
                  @if ( $club['id'] != '1' && $club['id'] != '6' )
                  <option value="{{ $club['id'] }}">{{ $club['name'] }}</option> 
                  @endif
                @endforeach
              </select>
              @error('club')
                <div id="club" class="text-sm text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </label>
            <label class="block mx-4 my-4">
              <span class="">Nominal Transfer</span>
              <input name="nominal" type="text" 
              placeholder="99000"
              value="{{ old('nominal') }}"
              class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('nominal') border-red-300 @enderror">
              @error('nominal')
                <div id="nominal" class="text-sm text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </label>
            <label class="block mx-4 my-4">
              <table class="my-4">
                <thead>
                </thead>
                <tbody class="leading-relaxed">
                  <tr>
                    <td class=""><span class="inline mr-4">Upload Bukti</span></td>
                    <td class="">
                      <input type="file" name="image"
                      class="w-full text-sm text-slate-500 bg-white
                      file:mr-4 file:py-1 file:px-2
                      file:border-0 rounded-md
                      file:text-sm file:font-semibold
                      file:bg-gray-300 file:text-blue-700
                      hover:file:bg-violet-100
                      "/>
                      @error('image')
                        <div id="image" class="text-sm text-red-500">
                            {{ $message }}
                        </div>
                      @enderror
                    </td>
                  </tr>
                </tbody>
              </table>
            </label>
          </div>
          <div class="flex justify-end my-4">
            <button class="bg-green-500 py-2 px-6 rounded-lg mx-4 text-white text-lg">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-main>