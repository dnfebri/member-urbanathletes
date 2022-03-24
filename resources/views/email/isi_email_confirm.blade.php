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
    <p class="font-extrabold">Konfirmasi pembayaran telah berhasil terkirim.</p>
    <p>Mohon ditunggu ya, tim Urban Athletes sedang melakukan verifikasi pembayaran.</p>
    <p>Jika ada pertanyaan, silahkan hubungi kami :</p>
    <div style="margin-top: 2rem; margin-bottom: 2rem">
      <a href="https://wa.me/{{ $clubData->nowa }}"
        style="background-color: rgb(34, 197, 94);color: #fff; padding-top: 0.5rem; padding-bottom: 0.5rem;padding-left: 1rem;
        padding-right: 1rem;border-radius: 9999px;"
      >
      <svg style="display: inline;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
      Whatsapp 
      </a>
    </div>

    <table style="width: 100%; line-height: 2">
      <tr>
        <td><p>Jangan menginformasikan bukti dan data pembayaran kepada pihak manapun kecuali Urban Athletes.</p></td>
      </tr>
    </table>
  </div>
</div>