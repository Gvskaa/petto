<h1>Artikel dibuat oleh {{$admin->nama_admin}}</h1>

<table>
    <tr>
        <th>No</th>
        <th>Judul Artikel</th>
        <th>Aksi</th>
    </tr>
    @foreach ($daftar_artikel as $artikel )
        <td>
            <td>1</td>
            <td>{{$artikel->judul_artikel}}</td>
            <td>Lihat | Ubah | Hapus</td>
        </tr>
    @endforeach
</table>
