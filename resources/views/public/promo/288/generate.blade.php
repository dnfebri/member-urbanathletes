<x-main specialPage=true>
  <div class="container flex items-center justify-center mt-8">
    <div class="rounded-xl bg-gray-100 w-full mx-8 lg:w-4/6 shadow-xl overflow-hidden pb-6">
      <div class="p-4">
        <h2 class="font-bold text-4xl my-6">Generate Kode Baru</h2>
        <div class="grid grid-cols-3 items-center">
          <div>
            <a href="{{ url('/288/daftar') }}" class="underline bg-yellow-400 rounded-md py-2 px-4"><i class="fa-solid fa-globe"></i> Kembali</a>
          </div>
          <div class="col-span-2">
            <form action="{{ route('288.updateKode') }}" method="post">
              @csrf
              @method("put")
              <div class="flex">
                <input class="outline-none focus:ring-0 w-full" type="email" name="email" id="email" placeholder=" Masukan Email">
                <button
                  url-confirm="{{ url('/order/status') }}"
                  id="view-detail"
                  type="submit"
                  class="rounded-md bg-gray-400 border border-black ml-4 hover:bg-gray-500 hover:shadow-md font-bold"
                >
                  Generate Kode Baru
                </button>
              </div>
            </form>
          </div>
        </div>
        <div id="content"></div>
      </div>
    </div>
  </div>
</x-main>