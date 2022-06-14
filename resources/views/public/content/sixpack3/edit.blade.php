<x-main specialPage=true>
  @push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    
  @endpush
  <x-layout_card_form>
    {{-- <form action="{{ url('sixpack3', ['kode'=>$dataInvoice->kode]) }}" method="post" enctype="multipart/form-data"> --}}
    <form action="{{ route('sixpack3.update', ['kode'=>$dataInvoice->kode]) }}" method="post" enctype="multipart/form-data">
    {{-- <form action="/sixpack/{{$dataInvoice->kode}}" method="post" enctype="multipart/form-data"> --}}
      @method('put')
      @csrf
      <div class="flex justify-center border-b my-4 pb-4">
        <h2 class="text-2xl font-Futura">Confrim Daftar form GYM</h2>
      </div>
      <div class="flex-none ">
        <label class="block mx-4 my-4">
          <span class="">Kode Transaksi : {{ $dataInvoice->kode }}</span>
          <input type="text" name="kode" id="kode" value="{{ $dataInvoice->kode }}" hidden>
        </label>
        <label class="block mx-4 my-4">
          <span class="">Email : {{ $dataInvoice->email }}</span>
          <input type="text" name="email" id="email" value="{{ $dataInvoice->email }}" hidden>
        </label>
        <label class="block mx-4 my-4">
          <span class="">Nama Lengkap : {{$dataInvoice->nama}}</span>
          <input name="nama" type="text" 
          value="{{$dataInvoice->nama}}"
          class="block w-full px-0.5 border-0 border-b-2 bg-gray-100 focus:ring-0 focus:border-black @error('nama') border-red-300 @enderror"
          hidden>
          @error('nama')
            <div id="nama" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          @foreach ($clubs as $club)
            @if ( $club['id'] == $dataInvoice->club_id )
              <span class="">Club : {{ $club['name'] }}</span>
            @endif
          @endforeach
          <input type="text" name="club" id="club" value="{{ $dataInvoice->club_id }}" hidden>
          @error('club')
            <div id="club" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Tanggal Transfer</span>
          <input name="tanggal" class="date form-control" type="text" value="{{ old('tanggal') ?? $dataInvoice->tanggal }}" autocomplete="off">
          @error('tanggal')
            <div id="tanggal" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Nominal Transfer</span>
          <input name="nominal" type="text" 
          placeholder="99000"
          value="{{ old('nominal') ?? $dataInvoice->harga }}"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('nominal') border-red-300 @enderror">
          @error('nominal')
            <div id="nominal" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <table class="my-4 w-full">
            <thead>
            </thead>
            <tbody class="leading-relaxed">
              <tr>
                <td class="md:w-16"><span class="inline mr-4">Upload Bukti</span></td>
                <td class="">
                  <input type="file" name="image"
                  class="w-full text-sm text-slate-500 bg-white
                  file:mr-4 file:py-1 file:px-2
                  file:border-0 rounded-md
                  file:text-sm file:font-semibold
                  file:bg-gray-300 file:text-blue-700
                  hover:file:bg-violet-100
                  input-img
                  "/>
                  @error('image')
                    <div id="image" class="text-sm text-red-500">
                        {{ $message }}
                    </div>
                  @enderror
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <img src="{{ asset('storage/sixpack3') . $dataInvoice->image }}" class="h-32 img-previuw">
                </td>
              </tr>
            </tbody>
          </table>
        </label>
      </div>
      <div class="flex justify-end my-4">
        <button id="btn-submit" class="bg-green-500 py-2 px-6 rounded-lg mx-4 text-white text-lg" type="submit">Submit</button>
        <span id="btn-disabled" class="hidden">
          <button class="flex items-center bg-green-500 opacity-80 py-2 px-2 mx-4 rounded-lg text-white text-lg" disabled>
            <img class="w-7 h-7" src="{{ url('/image/icon/Loading-white.svg') }}" alt="Urban Athletes"/> 
            Proses...
          </button>
        </span>
      </div>
    </form>
  </x-layout_card_form>
  @push('script')
    <script type="text/javascript">
      $('.date').datepicker({  
        todayHighlight: true,
        autoclose: true,
        format: 'yyyy-mm-dd'
      });  
    </script>
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
        fbq('track', 'Purchase', {
          value: 99.000,
          currency: 'Rp',
        });
      }, false);
    </script> --}}
    <!-- End Meta Pixel Code -->
    <script>
      const inputImg = document.querySelector('.input-img');
      inputImg.addEventListener('change', function (e) {
          let imgPreview = document.querySelector('.img-previuw')

          const fileImg = new FileReader();
          fileImg.readAsDataURL(e.srcElement.files[0]);

          fileImg.onload = function (e) {
              imgPreview.src = e.target.result;
          }

      });
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
