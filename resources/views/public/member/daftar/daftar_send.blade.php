<x-main specialPage=true>
  @push('style')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{env('CLIENT_KEY')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  @endpush
  <x-layout_card_form>
    <div class="p-4">
      <h3>Hallo {{ $dataInvoice->nama }}</h3>
      <p>Terimakasih banyak atas pemesanannya, data pemesanan {{ $dataInvoice->nama }} sudah kami terima.</p>
      <p>Kode invoice kak {{ $dataInvoice->nama }} sudah kami kirim email, silahkan cek email untuk meneruskan transaksi</p>
      <table class="w-full my-4">
        <thead>
        </thead>
        <tbody class="leading-relaxed">
          <tr>
            <td class="">Nama Pemesan</td>
            <td class="">: {{ $dataInvoice->nama }}</td>
          </tr>
          <tr>
            <td class="">Email Pemesan</td>
            <td class="">: {{ $dataInvoice->email }}</td>
          </tr>
          <tr>
            <td class="">Kode Invoice</td>
            <td class="">: {{ $dataInvoice->kode }}</td>
          </tr>
        </tbody>
      </table>
      {{-- {{ $invoice }}
      <br>
      {{ $dataInvoice }} --}}
      <p>Silahkan lakukan transfer senilai Rp {{number_format($dataInvoice->harga,2,',','.')}}</p>
      <p>ke rekening kami</p>
      <p>yang kami kirimkan formnya di email</p>
      <p>Silahkan cek email anda di pesan masuk atau spam email</p>
      <div class="my-4">
        {{-- <a href="{{ route('content') }}" class="underline bg-yellow-400 rounded-md p-1"><i class="fa-solid fa-chevron-left"></i> Kembali</a> --}}
        {{-- <a href="https://mail.google.com/mail/" class="underline bg-yellow-400 rounded-md p-1"><i class="fa-solid fa-chevron-left"></i> Cek Email</a> --}}
        <!-- <a href="#" class="underline bg-yellow-400 rounded-md p-1"><i class="fa-solid fa-chevron-left"></i> Bayar sekarang</a> -->
        <button id="pay-button" class="bg-green-500 hover:bg-green-600 rounded-md py-1 px-4 font-bold"><i class="fa-solid fa-money-bill-wave"></i> Bayar</button>
      </div>
    </div>
    <form action="{{ route('daftar.order') }}" method="post" class="hidden" id="submit_bayar">
      @csrf
      <input type="text" id="data_json_bayar" name="data_json_bayar">
      <input type="text" id="name" name="kode" value="{{$params['customer_details']['name']}}">
      <input type="text" id="email" name="email" value="{{$params['customer_details']['email']}}">
      <input type="text" id="kode" name="kode" value="{{$params['transaction_details']['order_id']}}">
    </form>
  </x-layout_card_form>
  @push('script')
    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$token}}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
            sendRespont(result)
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
            sendRespont(result)
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        });
        // customer will be redirected after completing payment pop-up
      });

      function sendRespont(result) {
        const submitBayar = document.getElementById('submit_bayar');
        let dataJsonBayar = document.getElementById('data_json_bayar');
        dataJsonBayar.value = JSON.stringify(result);
        submitBayar.submit();
        // console.log(dataJsonBayar.value);
      }
    </script>
  @endpush
</x-main>