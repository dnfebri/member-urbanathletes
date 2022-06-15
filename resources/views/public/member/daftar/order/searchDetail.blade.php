<div class="px-4 mt-8">
  @if($dataOrder === NULL)
    <div class="flex justify-center items-center">
      <h1 class="font-bold">Data tidak ditemukan</h1>
    </div>
  @else
    <table class="table-auto w-full">
      <thead>
        <tr class="border-b">
          <th class="py-2 text-left text-xl">Kode Order : {{$status['order_id']}}</th>
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
  @endif
</div>