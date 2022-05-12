{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>isi email</title>
</head>
<body>
  <div style="margin: auto; width: 80%; border: 3px dashed #000; padding: 10px">
    <div>
      <h2>Hallo Nama</h2>
      <p>Pesanan Anda telah kami terima dan dalam beberap saat lagi akan segera kami proses.</p>
      <p>Berikut rincian pesanan Anda :</p>
      <table style="width: 100%; line-height: 2">
        <tr>
          <td>Kode Pembayaran</td>
          <td>: UA11111111</td>
        </tr>
        <tr>
          <td>Total Bayar</td>
          <td>: 99000</td>
        </tr>
        <tr>
          <td>Club Yang di Pilih</td>
          <td>: (UA Merr, UA Tidar, UA Marvell, UA Lenmarc, All Club)</td>
        </tr>
      </table>
      <p>Silahkan segera lakukan pembayaran ke salah satu rekening di bawah ini :</p>
      <table>
        <tr>
          <td>Bank</td>
          <td>: BCA</td>
        </tr>
        <tr>
          <td>Nomer Rekening</td>
          <td>:</td>
        </tr>
        <tr>
          <td>Atas Nama</td>
          <td>: </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>Bank</td>
          <td>: Mandiri</td>
        </tr>
        <tr>
          <td>Nomer Rekening</td>
          <td>:</td>
        </tr>
        <tr>
          <td>Atas Nama</td>
          <td>: </td>
        </tr>
      </table>

      <div style="text-align: center">
        <a href="http://127.0.0.1:8000/daftar/confirm/UA1647620088" target="_blank"
          style="
            text-decoration: none; font-weight: bold;
            display:inline-block;border-radius:20px;background-color:#33ff00;color:#fff;
            font-family:San,'Open Sans',Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;margin:16px 0 0;box-sizing:border-box;padding-left: 3rem;padding-right: 3rem;
          ">
          konfirm Pembarayan
        </a>
        <p>Alternatif Link :</p>
        <a target="_blank"
          href="http://127.0.0.1:8000/daftar/confirm/UA1647620088">
          http://127.0.0.1:8000/daftar/confirm/UA1647620088
        </a>
      </div>
      <p>Jangan menginformasikan bukti dan data pembayaran kepada pihak manapun kecuali Urban Athletes.</p>
    </div>
  </div>
</body>
</html> --}}
<div style="margin: auto; width: 80%; border: 3px dashed #000; padding: 10px">
  <div>
    <h2>Hallo {{$dataEmail->nama}}</h2>
    <p>Pesanan Anda telah kami terima dan dalam beberapa saat lagi akan segera kami proses.</p>
    <p>Berikut rincian pesanan Anda :</p>
    <table style="width: 100%; line-height: 2">
      <tr>
        <td>Kode Pembayaran</td>
        <td>: {{$dataEmail->kode}}</td>
      </tr>
      <tr>
        <td>Total Bayar</td>
        <td>: Rp {{number_format($dataEmail->harga,2,',','.')}}</td>
      </tr>
      <tr>
        <td>Club Yang di Pilih</td>
        @foreach ( $clubs as $club )
          @if ($club['id'] == $dataEmail->club)
            <td>: {{$club['name']}}</td>
          @endif
        @endforeach
      </tr>
    </table>
    <p>Silahkan segera lakukan pembayaran ke salah satu rekening di bawah ini :</p>
    <table>
      <tr>
        <td>Bank</td>
        <td>: BCA</td>
      </tr>
      <tr>
        <td>Nomer Rekening</td>
        <td>: {{$clubData->bca}}</td>
      </tr>
      <tr>
        <td>Atas Nama</td>
        <td>: {{$clubData->an_rek}}</td>
      </tr>
    </table>
    <table>
      <tr>
        <td>Bank</td>
        <td>: Mandiri</td>
      </tr>
      <tr>
        <td>Nomer Rekening</td>
        <td>: {{$clubData->mandiri}}</td>
      </tr>
      <tr>
        <td>Atas Nama</td>
        <td>: {{$clubData->an_rek}}</td>
      </tr>
    </table>

    <div style="text-align: center">
      <a href="{{ $dataEmail->url . $dataEmail->kode }}" target="_blank"
        style="
          text-decoration: none; font-weight: bold;
          display:inline-block;border-radius:20px;background-color:#33ff00;color:#fff;
          font-family:San,'Open Sans',Helvetica,Arial,sans-serif;font-size: 1rem;font-weight:500;margin:16px 0 0;box-sizing:border-box;padding: 0.3rem 2.5rem;
        ">
        konfirmasi pembayaran
      </a>
      <p>Alternative Link :</p>
      <a target="_blank"
        href="{{ $dataEmail->url . $dataEmail->kode }}">
        {{ $dataEmail->url . $dataEmail->kode }}
      </a>
    </div>
    <p>Jangan menginformasikan bukti dan data pembayaran kepada pihak manapun kecuali Urban Athletes.</p>
  </div>
</div>