<x-admin_main>
  <div class="container">
    <div class="py-4 px-4 flex justify-start items-center border-b">
      <h1 class="text-xl">Product Detail</h1>
    </div>
    <div class="px-4 py-4">
      <a class="group relative border border-black focus:outline-none ml-4 inline-flex" href="{{ url('admin/membership') }}">
          <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-center font-bold uppercase bg-white ring-1 ring-black ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
            <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
          </span>
      </a>
    </div>
    <div class="container flex items-center justify-center">
      <div class="rounded-xl bg-gray-100 w-full mx-8 lg:w-4/6 shadow-xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
          <div>
            <img class="object-cover w-full h-full " src="{{ asset('storage/default-img.png') }}" alt="">
          </div>
          <div class="col-span-2">
            <div class="mb-4">
              <label class="text-lg font-bold">Nama</label>
              <h3>{{ $membership['name'] }}</h3>
            </div>
            <div class="mb-4">
              <label class="text-lg font-bold">Keterangan</label>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod architecto maxime veritatis quam? Nostrum rem tenetur esse optio minima quae, dolor odit, eligendi totam est eos quaerat, repellat eaque quis.</p>
            </div>
            <div class="flex items-center pt-2">
              <div class=""><span class="font-bold">Harga</span>: Rp. {{ number_format($membership['price'],2,',','.')}}</div>
              <div class="flex-grow text-right mx-4">
                <a class="bg-blue-500 font-semibold px-2 py-1 rounded text-white" href="{{ route('admin.membership.show', ['slug'=>'slug']) }}">Order</a>
                {{-- <button class="bg-blue-500 text-xs font-semibold px-2 py-1 rounded text-white">Buy</button> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin_main>