@extends('penjual.layouts_penjual.main')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Table Daftar Pembelian</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Nama Barang
                            </th>
                            <th>
                                Id Pembelian
                            </th>
                            <th>
                                Nama Pembeli
                            </th>
                            <th>
                                Total Harga
                            </th>
                            <th>
                                Status Pembayaran
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftar_pemesanan as $pemesanan)
                            <tr>
                                <td>
                                    {{ $pemesanan->barang->nama_barang }}
                                </td>
                                <td>
                                    {{ $pemesanan->id }}
                                </td>
                                <td>
                                    {{ $pemesanan->pembeli->nama_pembeli }}
                                </td>
                                <td>
                                    {{ $pemesanan->barang->harga_barang * $pemesanan->jumlah_barang }}
                                </td>
                                <td>
                                    {{ $pemesanan->status_pembayaran}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
