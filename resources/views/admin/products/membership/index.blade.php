<x-admin_main>
  <div class="container">
    {{-- @dd($membership) --}}
    {{-- <div wire:loading.class.delay="opacity-50" class="w-full mx-10 md:mx-0 md:w-64 m-5 border border-gray-300 bg-gray-50 shadow-lg ">
      <div class="bg-white shadow-md ">
        <img class="object-cover w-full h-full " src="{{ Storage::url($product->photo)}}" alt="{{ $product->product_title }}">
      </div>
    
      <div class="mt-2 p-2">
      <div>
        <div class="text-xs text-gray-500 uppercase font-bold">{{  $product->category->name }}</div>
        <div class="font-bold text-gray-700 leading-snug">
        <a href="{{ route('product', Str::slug($product->product_name)) }}" class="hover:underline text-blue-800">{{ $product->product_name }}</a>
        </div>
        <div class="text-gray-500 text-sm pb-1"><span class="font-bold">Size</span>: 370 x 370 x 250</div>
        <hr>
        <div class="flex items-center pt-2">
          <div class="text-sm text-gray-600"><span class="font-bold">Price</span>: &pound;{{ $product->product_price }}</div>
          <div class="flex-grow text-right"><button wire:click="selectProduct({{ $product->id }})" class="bg-blue-500 text-xs font-semibold px-2 py-1 rounded text-white">Buy</button></div>
        </div>
        
      </div>
      </div>
    </div> --}}

    <div class="flex flex-wrap justify-center md:p-5 bg-white">

      @foreach ( $membership as $row)
        <div class="w-[45%] mx-1 md:mx-2 md:w-52 my-2 rounded-md border border-gray-300 bg-gray-50 shadow-lg ">
          <div class="bg-white shadow-md ">
            <img class="object-cover w-full h-full" src="{{config('app.url_api')}}fitness/v1/img/membership/{{$row['thumbnail']}}" alt="{{$row['thumbnail']}}">
          </div>
        
          <div class="mt-2 p-2">
          <div>
            <div class="text-xs text-gray-500 uppercase font-bold">Membership</div>
            <div class="font-bold text-gray-700 leading-snug">
            <a href="#" class="hover:underline text-blue-800">{{$row['name']}}</a>
            </div>
            <div class="text-gray-500 text-sm pb-1"><span class="font-bold">Size</span>: 370 x 370 x 250</div>
            <hr>
            <div class="flex items-center pt-2">
              <div class="text-sm text-gray-600"><span class="font-bold">Price</span>: Rp {{number_format($row['price'],2,',','.')}}</div>
              <div class="flex-grow text-right">
                <a class="bg-blue-500 text-xs font-semibold px-2 py-1 rounded text-white" href="{{ route('admin.membership.show', ['slug'=> $row['id']]) }}">Buy</a>
              </div>
            </div>
        
          </div>
          </div>
        </div>
      @endforeach

    </div>

  </div>
</x-admin_main>