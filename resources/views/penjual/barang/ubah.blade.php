<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Petto | Ubah</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
</head>
<body>
    <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <h4>Tambah Barang</h4>
                <h6 class="font-weight-light">Masukkan data barang dengan benar!</h6>
                <form class="pt-3"
                    method="POST"
                    action="{{route ('penjual.barang.submit_ubah', $barang->id)}}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="harga_barang" value="{{$barang->harga_barang}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="nama_barang" value="{{$barang->nama_barang}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="stok_barang" value="{{$barang->stok_barang}}">
                </div>
                <div class="form-group">
                    <select class="form-control form-control-lg" name="status_barang">
                    <option>{{$barang->status_barang}}</option>
                    <option>Status Barang</option>
                    <option>Tersedia</option>
                    <option>Habis</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control form-control-lg" name="kategori_barang">
                        <option>{{$barang->kategori_barang}}</option>
                        <option>Anjing</option>
                        <option>Kucing</option>
                        <option>Ikan</option>
                        <option>Burung</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control form-control-lg" id="keterangan" name="keterangan" rows="6" cols="40" >{{$barang->keterangan}}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control form-control-lg" name="foto_barang" placeholder="Foto">
                </div>
                <div class="mt-3">
                <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="Tambah"/>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin/js/off-canvas.js"></script>
    <script src="/admin/js/hoverable-collapse.js"></script>
    <script src="/admin/js/template.js"></script>
    <script src="/admin/js/settings.js"></script>
    <script src="/admin/js/todolist.js"></script>
    <!-- endinject -->
</body>
</html>