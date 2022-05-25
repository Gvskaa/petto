<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail barang</h4>
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
                                Jumlah
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
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
                                    <form action="{{route('pembeli.barang.pesan', $barang->id)}}" method="POST">
                                        @csrf
                                        <input type="number" name="jumlah_barang">
                                        <button type="submit">pesan Barang</button>
                                    </form>
                                    
                                </td>

                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>