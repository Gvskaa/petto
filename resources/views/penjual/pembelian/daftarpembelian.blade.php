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
                                Bukti Pembayaran
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
                                    <img src="{{asset($pemesanan->barang->foto_barang)}}" width="50" height="50">
                                </td>
                                <td>
                                    {{ $pemesanan->status_pembayaran}}
                                </td>
                                <td>
                                    <form action="{{route('penjual.konfirmasi',$pemesanan->id)}}" method="POST" >
                                        @csrf
                                        <button>Konfirmasi</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>