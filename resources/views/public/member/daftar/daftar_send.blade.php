<x-main specialPage=true>
  <x-layout_card_form>
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
    <p>Silahkan lakukan transfer senilai 990000</p>
    <p>ke rekening xxxxxxxx</p>
    <div class="my-4">
      <a href="{{ route('content') }}" class="underline bg-yellow-400 rounded-md p-1"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
    </div>
  </x-layout_card_form>
</x-main>