<div style="margin: auto; width: 80%; border: 3px dashed #000; padding: 10px">
  <div>
    <h2>Hallo {{$dataEmail->nama}}</h2>
    <p><b>Pembayaran sebesar Rp {{number_format($dataEmail->harga,2,',','.')}} dari {{$dataEmail->nama}} telah dilakukan konfirmasi.</b></p>
    <p>Berikut rincian konfirmasi pembayaran :</p>
    <table style="width: 100%; line-height: 2">
      <tr>
        <td>Kode Pembayaran</td>
        <td>: {{$dataEmail->kode}}</td>
      </tr>
      <tr>
        <td>Nama Pembeli</td>
        <td>: {{$dataEmail->nama}}</td>
      </tr>
      <tr>
        <td>No WA Pembali</td>
        <td>: {{$dataEmail->nomor}}</td>
      </tr>
      <tr>
        <td>Email Pembali</td>
        <td>: {{$dataEmail->email}}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>: {{$dataEmail->alamat}}</td>
      </tr>
      <tr>
        <td>Club</td>
        @foreach ( $clubs as $club )
          @if ($club['id'] == $dataEmail->club)
            <td>: {{$club['name']}}</td>
          @endif
        @endforeach
      </tr>
      <tr>
        <td>Total Bayar</td>
        <td>: Rp {{number_format($dataEmail->harga,2,',','.')}}</td>
      </tr>
      <tr>
        <td>Bukti Pembayaran</td>
        <td>: {{ asset('storage/invoice') . $dataEmail->image }}</td>
      </tr>
    </table>
    <p>Silahkan lakukan konfirmasi ulang ke finance untuk memastikan pembayaran benar-benar sudah berhasil.</p>

    <div style="margin-top: 1rem">
      <p>Jangan menginformasikan bukti dan data pembayaran kepada pihak manapun kecuali Urban Athletes.</p>
    </div>
  </div>
</div>