<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>
    <style>
        body{
              font-family: Arial, Helvetica, sans-serif;
        }
    </style>

<div class="contain" style="margin-left: 60px;">
    <div class="atas">
        <img src="/img/wik.png" style=" width: 95px; margin-top: 25px;">
        <div style="position: absolute; margin-left: 110px; margin-top: -85px; line-height: 1.1;">
        <p>
            <b>PANITIA PENERIMAAN PESERTA DIDIK BARU <br> SMK WIKRAMA BOGOR TP. 2023 - 2024</b><br>
            jl. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor <br> Email : prohumasi@smkwikrama.sch.id | Website : http://smkwikrama.sch.id/
        </P>
        </div>
    </div>
    <div style=" margin-top: 30px; margin-bottom: 30px;">
        <div style="text-align: center;">
            <b>TANDA BUKTI PENDAFTARAN<br>SMK Wikrama Bogor TP. 2023-2024</b>
        </div>
    </div>
    @foreach($users as $user)
    <div style="line-height: 0.6; font-weight: bold;">
        <b style="background-color: lightgrey;">I. BIODATA CALON PESERTA DIDIK</b><br><br><br><br>
            <p style="font-weight: 600;">NOMOR SELEKSI________:  {{ $user->id }}</p>
            <p style="font-weight: 600;">NAMA LENGKAP________:  {{ $user->name }}</p>
            <p style="font-weight: 600;">ASAL SEKOLAH_________:  {{ $user->sekolah }} {{ $user->sekolah_lainnya }}</p>
            <p style="font-weight: 600;">NO HP__________________:  {{ $user->phone }}</p>
            <p style="font-weight: 600;">EMAIL___________________:  {{ $user->email }}</p>
            <p style="font-weight: 600;">Jenis Kelamin___________:  {{ $user->jenis_kelamin }}</p>
            <p style="font-weight: 600;">Jurusan_________________:  {{ $user->jurusan }}</p>
    </div>
    <div style="line-height: 1.1; font-weight: bold; margin-top: 30px;">
    <b style="background-color: lightgrey;">II. INFORMASI DAN PERSYARATAN</b><br><br>
    <p>A. Akun Anda</p>
    <p style="font-weight: 600;">
        Kembali<a href="/">Halaman Home</a>,
    </p>
    <p>B. Foto/Scan Dokumen yang Harus Dipersiapkan</p>
    <p style="font-weight: 600;">
        1. Persyaratan satu<br>
        2. Persyaratan dua<br>
        3. Persyaratan tiga<br>
    </p>
    <p>Biaya seleksi</p>
    <p style="font-weight: 600;">
        Pembayaran uang seleksi sebesar Rp. 200.000 melalui transfer bank:<br>
        Bank BNI: 1234567890 A.N SMK Wikrama Sekolah.
    </p>
    </div>
    @endforeach
</div>
<script>
    window.print();
</script>
</body>
</html>
