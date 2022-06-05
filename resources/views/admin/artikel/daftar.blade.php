@extends ('admin.layouts.main')

@section('container')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Table Artikel</h4>
            <p class="card-description">
                <button class="btn btn-inverse-primary btn-sm">
                    <a href="{{route('admin.artikel.halaman')}}">Tambah</a>
                </button>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Gambar
                            </th>
                            <th>
                                Created by
                            </th>
                            <th>
                                Judul
                            </th>
                            <th>
                                Isi
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftar_artikel as $artikel)
                        <tr>
                            <td>
                                {{ $artikel->id }}
                            </td>
                            <td>
                                {{ $artikel->gambar_artikel }}
                            </td>
                            <td>
                                {{ $admin->nama_admin }}
                            </td>
                            <td>
                                {{ $artikel->judul_artikel }}
                            </td>
                            <td>
                                {{ $artikel->isi_artikel }}
                            </td>
                            <td>
                                <button type="button" class="btn btn-inverse-primary btn-sm">
                                    <a href="{{route('admin.artikel.ubah', $artikel->id)}}">Ubah</a>
                                </button>
                                @csrf
                                <form action="{{route('admin.artikel.hapus', $artikel->id)}}", method="POST">
                                <button type="submit" class="btn btn-inverse-danger btn-sm">
                                    Hapus
                                </button></form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
