<x-main specialPage=true>
  @push('style')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="{{env('API_URL_MIDTRANS')}}"
      data-client-key="{{env('CLIENT_KEY')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  @endpush
  <x-layout_card_form>
    <div class="p-4">
      <h3>Hallo {{ $dataInvoice->nama }}</h3>
      <p>Terimakasih banyak atas pemesanannya, data pemesanan {{ $dataInvoice->nama }} sudah kami terima.</p>
      <p>invoice kak {{ $dataInvoice->nama }} Sudah kami kirimkan ke email. Mohon untuk menyelesaikan transaksi segera.</p>
      <p>Pastikan anda mendapatkan email pembayaran berhasil setelah melakukan pembayaran berhasil, sebagai syarat redeem promo di club</p>
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
      <p>Klik tombol bayar untuk menyelesaikan pembayaran</p>
      <div class="my-4">
        <button id="pay-button" class="bg-green-500 hover:bg-green-600 rounded-md py-1 px-4 font-bold"><i class="fa-solid fa-money-bill-wave"></i> Bayar</button>
      </div>
    </div>
    <form action="{{ route('288.order') }}" method="post" class="hidden" id="submit_bayar">
      @csrf
      <input type="text" id="data_json_bayar" name="data_json_bayar">
      {{-- <input type="text" id="order_name" name="order_name" value="Rp288"> --}}
      <input type="text" id="name" name="name" value="{{$params['customer_details']['first_name']}}">
      <input type="text" id="email" name="email" value="{{$params['customer_details']['email']}}">
      <input type="text" id="kode" name="kode" value="{{$params['transaction_details']['order_id']}}">
      {{-- <input type="submit" value="Pay with Snap Redirect"> --}}
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
            alert("payment success!"); 
            // console.log(result);
            sendRespont(result)
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); 
            // console.log(result);
            sendRespont(result) // <<============ INI PENYIMPANAN KE DB ===================>>
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); 
            // console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        });
        // customer will be redirected after completing payment pop-up
      });
    </script>
    <script>
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