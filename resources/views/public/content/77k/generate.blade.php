<x-main specialPage=true>
  <div class="container flex items-center justify-center mt-8">
    <div class="rounded-xl bg-gray-100 w-full mx-8 lg:w-4/6 shadow-xl overflow-hidden pb-6">
      <div class="p-4">
        <h2 class="font-bold text-4xl my-6">Generate Kode Baru</h2>
        <div class="grid grid-cols-3 items-center">
          <div>
            <a href="{{ url('/99k/daftar') }}" class="underline bg-yellow-400 rounded-md py-2 px-4"><i class="fa-solid fa-globe"></i> Kembali</a>
          </div>
          <div class="col-span-2">
            <form action="{{ route('77k.updateKode') }}" method="post">
              @csrf
              <div class="flex">
                <input class="outline-none focus:ring-0 w-full" type="email" name="email" id="email" placeholder=" Masukan Email">
                <button
                  url-confirm="{{ url('/order/status') }}"
                  id="btn-submit" 
                  type="submit"
                  class="rounded-md bg-gray-400 border border-black ml-4 hover:bg-gray-500 hover:shadow-md font-bold"
                >
                  Generate Kode Baru
                </button>
                <span id="btn-disabled" class="hidden">
                  <button class="flex min-w-max items-center bg-gray-500 opacity-80 py-2 px-2 mx-4 rounded-lg text-white text-lg" disabled>
                    <img class="w-7 h-7" src="{{ url('/image/icon/Loading-white.svg') }}" alt="Urban Athletes"/> 
                    Proses...
                  </button>
                </span>
                {{-- <button type="submit">Generate Kode Baru</button> --}}
              </div>
            </form>
          </div>
        </div>
        <div id="content"></div>
      </div>
    </div>
  </div>
  @push('script')
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