<h1>Data Pembeli</h1>

<table>
    <tr>
        <td>Id Pembeli</td>
        <td>Id Admin</td>
        <td>Nama Pembeli</td>
        <td>E-mail</td>
        <td>Jenis Kelamin</td>
        <td>Telepon</td>
        <td>Alamat</td>
    </tr>
    @foreach($daftar_pembeli as $pembeli)
    <tr>
        <td>{{$pembeli->id_pembeli}}</td>
        <td>{{$pembeli->id_admin}}</td>
        <td>{{$pembeli->nama_pembeli}}</td>
        <td>{{$pembeli->email}}</td>
        <td>{{$pembeli->jk_pembeli}}</td>
        <td>{{$pembeli->tlp_pembeli}}</td>
        <td>{{$pembeli->alamat_pembeli}}</td>
        <td> Lihat | ubah | hapus</td>
    </tr>
    @endforeach
</table>