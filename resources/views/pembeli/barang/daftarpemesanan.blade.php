<table>
    <tr>
        <td>
            Nama Barang
        </td>
        <td>
            Harga Barang
        </td>
        <td>
            Jumlah Yang di beli
        </td>
        <td>
            Foto
        </td>
        <td>
            Nama Toko
        </td>
        <td>
            Jumlah yang harus di bayar
        </td>
    </tr>
    @foreach($daftar_pembelian as $pembelian)
    <tr>
        <td>
            {{$pembelian->barang->nama_barang}}
        </td>
        <td>
            {{$pembelian->barang->harga_barang}}
        </td>
        <td>
            {{$pembelian->jumlah_barang}}
        </td>
        <td>
            {{$pembelian->barang->foto_barang}}
        </td>
        <td>
            {{$pembelian->barang->penjual->nama_toko}}
        </td>
        <td>
            {{$pembelian->barang->harga_barang * $pembelian->jumlah_barang}}
        </td>
    </tr>
    @endforeach
</table>