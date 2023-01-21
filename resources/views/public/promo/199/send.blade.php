<x-main specialPage=true>
  <x-layout_card_form>
    @if(session('success'))
      <div data-massage="{{session('success')}}" data-email="{{session('email')}}" id="success">
        {{-- <h3 class="mx-5 font-bold">Cek kotak masuk / spam email {{session('email')}} untuk melanjutkan pembayaran</h3> --}}
      </div>
    @endif
    <div class="p-4">
      <h3 class="font-FuturaBold my-2">Hallo {{ $dataInvoice->nama }}</h3>
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
      <p>Silahkan lakukan pembayaran senilai <span class="font-black">Rp {{number_format($dataInvoice->harga,0,',','.')}}</span></p>
      <p>Pembayaran hanya akan diperoses secara online melalui website kami</p>
      <p>Link intuk melakukan proses pembayaran sudah kami kirimkan melalui email</p>
      <p>Silahkan cek email anda di pesan masuk atau spam email</p>
      <div class="my-4">
        <a href="https://mail.google.com/mail/" class="underline bg-yellow-400 rounded-md p-1"><i class="fa-solid fa-chevron-left"></i> Cek Email</a>
      </div>
    </div>
  </x-layout_card_form>
  @push('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      let success = document.querySelector('#success');
      if (success) {
        Swal.fire(
          'Email Terkirim',
          success.getAttribute("data-massage")+'<br>'+success.getAttribute("data-email"),
          'success'
        )
      }
    </script>
    @endpush
</x-main>