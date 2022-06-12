@extends('penjual.layouts_penjual.main')

{{-- @section('container')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Barang</h4>
                <p class="card-description">
                    <button class="btn btn-inverse-primary btn-sm">
                        <a href="{{ route('penjual.barang.halaman') }}">Tambah</a>
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
                                            <a href="{{route('penjual.barang.ubah', $barang->id)}}" style="text-decoration:none">Ubah</a>
                                        </button>

                                            <form action="{{route('penjual.barang.hapus', $barang->id)}}", method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-inverse-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection --}}

<?php
echo"ini penjual";
?>
