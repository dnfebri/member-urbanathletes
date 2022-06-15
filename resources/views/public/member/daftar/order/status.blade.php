<x-main specialPage=true>
  <x-layout_card_form>
    <div class="px-4 py-4">
      <table class="table-auto w-full">
        <thead>
          <tr class="border-b">
            <th class="py-2 text-left">Order Kode : {{$status['order_id']}}</th>
            <th class="py-2"></th>
            <th class="py-2"></th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="py-2">Nama</td>
            <td class="py-2">:</td>
            <td class="py-2">{{$dataOrder->nama}}</td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Email</td>
            <td class="py-2">:</td>
            <td class="py-2">{{$dataOrder->email}}</td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Total Pembayaran</td>
            <td class="py-2">:</td>
            <td class="py-2">Rp. {{$status['gross_amount']}}</td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Status Pembayaran</td>
            <td class="py-2">:</td>
            <td class="py-2 ">
              @if ($status['transaction_status'] === 'settlement')
                <span class="bg-green-400 rounded-md px-2">{{$status['transaction_status']}}</span>
              @elseif ($status['transaction_status'] === 'deny')
                <span class="bg-green-400 rounded-md px-2">{{$status['transaction_status']}}</span>
              @else
                <span class="bg-yellow-400 rounded-md px-2">{{$status['transaction_status']}}</span>
              @endif
            </td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Tanggal Pembayaran</td>
            <td class="py-2">:</td>
            <td class="py-2">{{$status['transaction_time']}}</td>
          </tr>
        </tbody>
      </table>
      <div class="py-4">
        <a href="{{ url('/') }}" class="underline bg-yellow-400 rounded-md py-2 px-4"><i class="fa-solid fa-globe"></i> Home</a>
      </div>
    </div>
  </x-layout_card_form>
</x-main>