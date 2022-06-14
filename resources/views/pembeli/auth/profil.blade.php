<form>
    <label>Nama :</label>
    <input name="nama_pembeli" value= "{{$pembeli->nama_pembeli}}"type="text"></input>
    <label>Email :</label>
    <input name="email_pembeli" value= "{{$pembeli->email}}"type="text"></input>
    <a href="{{route('pembeli.logout')}}">Logout</a>
	<a href="{{route('pembeli.barang.halaman')}}">Daftar Barang</a>
	<a href="{{route('pembeli.barang.daftarpembelian')}}">Daftar Pembelian</a>
	<a href="{{route('pembeli.index')}}">Index<a>
	<a href="{{route('pembeli.profilPembeli')}}">Profil pengguna</a>
</form>


<h4 class="my-5">Data</h4>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Keterangan</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
							<td><a class="btn btn-danger" href="">HAPUS</a></td>
						</tr>
					</tbody>
				</table>
