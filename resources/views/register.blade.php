<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <a href="/" style="position: absolute; margin-top: 10px; margin-left: 390px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
      </svg>
    </a>
    <div class="container my-5 d-flex justify-content-center align-items-center">
        <form method="POST" action="{{route('register.account')}}" class="card py-4 px-4">
            @csrf
            <div class="text-center logo ml-3">
                <p style="font-size: 17px; font-weight: bold;">Form Pendaftaran</p>
            </div>
            <div class="text-center">
            <span class="info-text">silahkan mengisi data di bawah untuk membuat akun baru</span><br>
            </div>
            <div class="position-relative mt-2 form-input">
                <label>Nomor Handphone</label>
                <input class="form-control" placeholder="contoh: 08..." type="number" name="phone">
            </div>
            <div class="position-relative form-input">
                <label>Nama</label>
                <input class="form-control" placeholder="Masukkan Nama Lengkap" type="text" name="name">
            </div>
            <div class="position-relative mt-3 form-input">
                <div>
                <label>Jenis Kelamin</label><br>
                    <select style=" padding: 7px;" class="form-select" id="inputGroupSelect04" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" aria-label="Example select with button addon">
                        <option>--Pilih Jenis Kelamin--</option>
                        <option name="jenis_kelamin" value="pria">Pria</option>
                        <option name="jenis_kelamin" value="wanita">wanita</option>
                    </select>
                </div>
            </div>
            <div class="position-relative mt-3 form-input">
                <div>
                <label>Minat Jurusan</label><br>
                    <select style=" padding: 7px;" class="form-select" id="inputGroupSelect04" name="jurusan" value="{{ old('jurusan') }}" aria-label="Example select with button addon">
                        <option>--Pilih Jurusan--</option>
                        <option name="jurusan" value="PPLG">PPLG</option>
                        <option name="jurusan" value="TJKT">TJKT</option>
                        <option name="jurusan" value="DKV">DKV</option>
                        <option name="jurusan" value="PMN">PMN</option>
                        <option name="jurusan" value="MPLB">MPLB</option>
                        <option name="jurusan" value="KLN">KLN</option>
                        <option name="jurusan" value="Perhotelan">Perhotelan</option>
                    </select>
                </div>
            </div>
            <div class="position-relative mt-2 form-input">
                <div>
                <label>Asal sekolah</label><br>
                <select style="width: 414px; padding: 7px;" onchange="tampilkanSekolahInput()" class="form-select" id="sekolah" value="{{ old('sekolah') }}" name="sekolah" aria-label="Example select with button addon">
                    <option>-- Pilih Asal Sekolah --</option>
                    <option name="lainnya" value="lainnya">lainnya</option>
                    <option name="sekolah" value="SMP Negeri 2 Ciawi">SMP Negeri 2 Ciawi</option>
                    <option name="sekolah" value="SMP Negeri 1 Ciawi">SMP Negeri 1 Ciawi</option>
                </select>
            </div>
            </div>
            <div class="position-relative mt-2 form-input">
                <input class="form-control" type="text" id="sekolahLainnya" style="display: none;" name="sekolah_lainnya">
            </div>
            <div class="position-relative mt-2 form-input">
                <label>Email</label>
                <input class="form-control" placeholder="Masukkan email aktif" type="email" name="email">
            </div>
            <div class=" mt-2 d-flex align-items-center">
                <button type="submit" class="go-button">Daftar Sekarang</button>
            </div>
        </form>
    </div>

    <script>
            function tampilkanSekolahInput() {
                var sekolah = document.getElementById("sekolah").value;
                var sekolahShow = document.getElementById("sekolahLainnya");
                if (sekolah == "lainnya") {
                    sekolahShow.style.display = "";
                }else {
                    sekolahShow.style.display = "none";
                }
            }
    </script>
</body>
</html>

