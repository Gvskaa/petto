<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Petto | Registrasi Pembeli</title>
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
                <div class="brand-logo">
                    <img src="/admin/images/logos.png" alt="logo">
                </div>
                <h4>Baru disini?</h4>
                <h6 class="font-weight-light">Mendaftar itu mudah, Hanya butuh beberapa langkah.</h6>
                <form class="pt-3"
                    method="POST"
                    action="{{route ('admin.pembeli.submit')}}"
                >
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="nama_pembeli" placeholder="Nama">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <select class="form-control form-control-lg" name="jk_pembeli">
                    <option>Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                    <option>Tidak ingin menyebutkan</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="alamat_pembeli" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="tlp_pembeli" placeholder="Telepon">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg"name="password" placeholder="Password">
                </div>
                    <div class="form-group">
                        <b>File Gambar</b><br/>
                        <input type="file" name="foto_pembeli">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                <div class="mb-4">
                    <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Saya setuju dengan semua Syarat & Ketentuan
                    </label>
                    </div>
                </div>
                <div class="mt-3">
                <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="DAFTAR"/>
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