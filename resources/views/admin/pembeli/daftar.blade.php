<h1>Data Pembeli</h1>

<table>
    <tr>
        <td>Id Pembeli</td>
        <td>Id Admin</td>
        <td>nama Admin</td>
        <td>Nama Pembeli</td>
        <td>E-mail</td>
        <td>Jenis Kelamin</td>
        <td>Telepon</td>
        <td>Alamat</td>
    </tr>
    @foreach($daftar_pembeli as $pembeli)
    <tr>
        <td>{{$pembeli->id}}</td>
        <td>{{$pembeli->id_admin}}</td>
        <td>
            @if(isset ($pembeli->admin))
            {{$pembeli->admin->nama_admin}}
            @else
            (Daftar Sendiri)
            @endif            
        </td>
        <td>{{$pembeli->nama_pembeli}}</td>
        <td>{{$pembeli->email}}</td>
        <td>{{$pembeli->jk_pembeli}}</td>
        <td>{{$pembeli->tlp_pembeli}}</td>
        <td>{{$pembeli->alamat_pembeli}}</td>
        <td> Lihat | <a href="{{route('admin.pembeli.ubah', $pembeli->id)}}">ubah</a>|<a href="{{route('admin.pembeli.halaman')}}">Tambah | <form action="{{route('admin.pembeli.hapus', $pembeli->id)}}", method="POST">
            @csrf
            <button type="submit">Hapus</button>
        </form></td>
    </tr>
    @endforeach
</table>