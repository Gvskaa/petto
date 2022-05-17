@extends('admin.layouts.main')

@section('container')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Barang</h4>
                <p class="card-description">
                    <button class="btn btn-inverse-primary btn-sm">
                        <a href="{{ route('admin.penjual.barang.halaman') }}">Tambah</a>
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
                                    Nama
                                </th>
                                <th>
                                    Harga
                                </th>
                                <th>
                                    Foto
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Stok
                                </th>
                                <th>
                                    Kategori
                                </th>
                                <th>
                                    Deskripsi
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar_barang as $barang)
                                <tr>
                                    <td>
                                        {{ $barang->id }}
                                    </td>
                                    <td>
                                        {{ $barang->nama_barang }}
                                    </td>
                                    <td>
                                        {{ $barang->harga_barang }}
                                    </td>
                                    <td>
                                        {{ $barang->foto_barang }}
                                    </td>
                                    <td>
                                        {{ $barang->keterangan }}
                                    </td>
                                    <td>
                                        {{ $barang->status_barang }}
                                    </td>
                                    <td>
                                        {{ $barang->stok_barang }}
                                    </td>
                                    <td>
                                        {{ $barang->kategori_barang }}
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-inverse-primary btn-sm">
                                            <a href="{{route('admin.penjual.barang.ubah', $barang->id)}}" style="text-decoration:none">Ubah</a>
                                        </button>
                                        <button type="submit" class="btn btn-inverse-danger btn-sm">
                                            Hapus
                                            <form action="{{route('admin.penjual.barang.hapus', $barang->id)}}", method="POST">
                                                @csrf
                                            </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
