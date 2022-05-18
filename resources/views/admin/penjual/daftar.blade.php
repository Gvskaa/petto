@extends('admin.layouts.main')

<<<<<<< HEAD
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
=======
@section('container')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Penjual</h4>
                <p class="card-description">
                    <button class="btn btn-inverse-primary btn-sm">
                        <a href="{{route('admin.penjual.halaman')}}">Tambah</a>
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
                                    Email
                                </th>
                                <th>
                                    Nama Toko
                                </th>
                                <th>
                                    Status Penjual
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
                            @foreach($daftar_penjual as $penjual)
                            <tr>
                                <td>
                                    {{$penjual->id}}
                                </td>
                                <td>
                                    {{$penjual->nama_penjual}}
                                </td>
                                <td>
                                    {{$penjual->email}}
                                </td>
                                <td>
                                    {{$penjual->nama_toko}}
                                </td>
                                <td>
                                    {{$penjual->status_penjual}}
                                </td>
                                <td>
                                    {{ $penjual->tlp_penjual }}
                                </td>
                                <td>
                                    {{$penjual->alamat_penjual}}
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-inverse-primary btn-sm">
                                        <a href="{{route('admin.penjual.ubah', $penjual->id)}}" style="text-decoration:none">Ubah</a>
                                    </button>
                                    <button type="submit" class="btn btn-inverse-danger btn-sm">
                                        Hapus
                                        <form action="{{route('admin.penjual.hapus', $penjual->id)}}", method="POST">
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
>>>>>>> 9d9882a3798da5f925e668844a51f97bb7065c20
