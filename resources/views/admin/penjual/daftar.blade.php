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
        <td>{{$penjual->id}}</td>
        <td>{{$penjual->id_admin}}</td>
        @if(isset ($pembeli->admin))
            {{$penjual->admin->nama_admin}}
            @else
            (Daftar Sendiri)
            @endif        
        <td>{{$penjual->nama_penjual}}</td>
        <td>{{$penjual->email}}</td>
        <td>{{$penjual->nama_toko}}</td>
        <td>{{$penjual->status_penjual}}</td>
        <td> Lihat | <a href="{{route('admin.penjual.ubahpenjual', $penjual->id)}}">ubah|</a> <a href="{{route('admin.penjual.halaman')}}">Tambah</a> | <form action="{{route('admin.penjual.hapus', $penjual->id)}}", method="POST">
            @csrf
            <button type="submit">Hapus</button>
        </form></td>
    </tr>
    @endforeach
</table>