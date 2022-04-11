<h1>Data Penjual</h1>

<table>
    <tr>
        <td>Id Penjual</td>
        <td>Id Admin</td>
        <td>Nama Penjual</td>
        <td>E-mail</td>
        <td>Nama Toko</td>
        <td>Status Penjual</td>
    </tr>
    @foreach($daftar_penjual as $penjual)
    <tr>
        <td>{{$penjual->id_penjual}}</td>
        <td>{{$penjual->id_admin}}</td>
        <td>{{$penjual->nama_penjual}}</td>
        <td>{{$penjual->email}}</td>
        <td>{{$penjual->nama_toko}}</td>
        <td>{{$penjual->status_penjual}}</td>
        <td> Lihat | ubah | hapus</td>
    </tr>
    @endforeach
</table>