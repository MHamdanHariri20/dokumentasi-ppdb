<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/page.css" rel="stylesheet">
<script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
	.three {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		padding-top: 20px;
	}

	.file {
		margin-left: 4%;
		margin-right: 4%;
	}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <div class="judul">
        <p>PPDB 2023 - 2024</p>
    </div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p style="color: #818181; margin-left: 20px;">
    Main menu
  </p>
  <a href="#content1" style="font-weight: bold;" id="konten1">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: -5px 10px 0 0" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
  </svg>Dashboard</a>
</div>
<div id="content1">
    <div id="main">
    <nav style="margin-top: -11px;" class="navbar navbar-expand-lg">
    <span style="font-size:30px;cursor:pointer; color: white; margin-left: -5px;" onclick="openNav()">&#9776;</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
    <div id="main-judul" class="main_judul">
				<b class="app-page-title">Admin</b>
        <p>Dashboard</p>
    </div>
    </div>
    <div id="cont" class="cont">
        <div class="container-xl">
            <h2 style="text-align: center;">Table Data Pendaftaran Siswa</h2>
            <table class="table table-striped table-bordered data" id="data">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Sekolah asal</th>
                        <th>Phone</th>
                        <th>Jenis Kelamin</th>
                        <th>Juruan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr style="justify-content: center;">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->sekolah }} {{ $user->sekolah_lainnya }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->jenis_kelamin }}</td>
                        <td>{{ $user->jurusan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p> Jumlah Total seluruh siswa: {{ $totalSiswa }}</p>
            <p> Jumlah Total seluruh siswa Wanita: {{ $jkp }}</p>
            <p> Jumlah Total seluruh siswa Pria: {{ $jkl }}</p>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.table').DataTable();
	});
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.getElementById("main-judul").style.width = "72%";
  document.getElementById("main-judul").style.marginLeft = "340px";
  document.getElementById("cont").style.marginLeft = "300px";
}

function openNav2() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main2").style.marginLeft = "300px";
  document.getElementById("main-judul2").style.width = "72%";
  document.getElementById("main-judul2").style.marginLeft = "340px";
  document.getElementById("cont2").style.marginLeft = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("main-judul").style.width = "94%";
  document.getElementById("main-judul").style.marginLeft = "40px";
  document.getElementById("cont").style.marginLeft = "0";
  document.getElementById("main2").style.marginLeft = "0";
  document.getElementById("main-judul2").style.width = "94%";
  document.getElementById("main-judul2").style.marginLeft = "40px";
  document.getElementById("cont2").style.marginLeft = "0";
}
</script>

</body>
</html>

