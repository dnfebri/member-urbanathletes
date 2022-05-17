<x-admin_main>
  <div class="container">
    <x-layout_card_form>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
        <div>
          <img class="object-cover w-full h-full " src="{{ asset('storage/default-img.png') }}" alt="">
        </div>
        <div class="col-span-2">
          <div class="mb-4">
            <label class="text-lg font-bold">Nama</label>
            <h3>Nama Product</h3>
          </div>
          <div class="mb-4">
            <label class="text-lg font-bold">Keterangan</label>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod architecto maxime veritatis quam? Nostrum rem tenetur esse optio minima quae, dolor odit, eligendi totam est eos quaerat, repellat eaque quis.</p>
          </div>
          <div class="flex items-center pt-2">
            <div class=""><span class="font-bold">Harga</span>: Rp. 1.130.000</div>
            <div class="flex-grow text-right mx-4">
              <a class="bg-blue-500 font-semibold px-2 py-1 rounded text-white" href="{{ route('admin.product.show', ['slug'=>'slug']) }}">Order</a>
              {{-- <button class="bg-blue-500 text-xs font-semibold px-2 py-1 rounded text-white">Buy</button> --}}
            </div>
          </div>
        </div>
      </div>
      
    </x-layout_card_form>
  </div>
</x-admin_main>