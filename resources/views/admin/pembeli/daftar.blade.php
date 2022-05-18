@extends('admin.layouts.main')

@section('container')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Pembeli</h4>
                <p class="card-description">
                    <button class="btn btn-inverse-primary btn-sm">
                        <a href="{{route('admin.pembeli.halaman')}}">Tambah</a>
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
                                    Created by
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Jenis Kelamin
                                </th>
                                <th>
                                    Telepon
                                </th>
                                <th>
                                    Alamat
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($daftar_pembeli as $pembeli)
                            <tr>
                                <td>
                                    {{$pembeli->id}}
                                </td>
                                <td>
                                    @if(isset ($pembeli->admin))
                                    {{$pembeli->admin->nama_admin}}
                                    @else
                                    (Daftar Sendiri)
                                    @endif         
                                </td>
                                <td>
                                    {{$pembeli->nama_pembeli}}
                                </td>
                                <td>
                                    {{$pembeli->email}}
                                </td>
                                <td>
                                    {{$pembeli->jk_pembeli}}
                                </td>
                                <td>
                                    {{$pembeli->tlp_pembeli}}
                                </td>
                                <td>
                                    {{$pembeli->alamat_pembeli}}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-inverse-primary btn-sm">
                                        <a href="{{route('admin.pembeli.ubah', $pembeli->id)}}">Ubah</a>
                                    </button>
                                    @csrf
                                    <button type="submit" class="btn btn-inverse-danger btn-sm">
                                        Hapus
                                        <form action="{{route('admin.pembeli.hapus', $pembeli->id)}}", method="POST">
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

