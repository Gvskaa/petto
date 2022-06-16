@extends('pembeli.layout_pembeli.main')

@section('title')
    Profil
@endsection

@section('content')
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1>Hallo!{{ $pembeli->nama_pembeli }}</h1>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-3">
                <div class="text-center">
                <img src="{{asset($pembeli->foto_pembeli)}}" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload foto</h6>
                <input type="file" class="text-center center-block file-upload" name="foto_pembeli">
            </div>
        </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="{{ route('pembeli.ubah.profilPembeli') }}" method="post"
                            id="registrationForm" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-3">
                                <div class="text-center">
                                    <img src="{{ asset($pembeli->foto_pembeli) }}" class="avatar img-circle img-thumbnail"
                                        alt="avatar">
                                    <h6>Upload foto</h6>
                                    <input type="file" class="text-center center-block file-upload" name="foto_pembeli">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>Nama</h4>
                                    </label>
                                    <input type="text" class="form-control" name="nama_pembeli" id="first_name"
                                        value="{{ $pembeli->nama_pembeli }}" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Jenis Kelamin</h4>
                                    </label>
                                    <input type="text" class="form-control" name="jk_pembeli" id="last_name"
                                        value="{{ $pembeli->jk_pembeli }}" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone">
                                        <h4>Telepon</h4>
                                    </label>
                                    <input type="text" class="form-control" name="tlp_pembeli" id="phone"
                                        value="{{ $pembeli->tlp_pembeli }}" title="enter your phone number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Email</h4>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ $pembeli->email }}" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Alamat</h4>
                                    </label>
                                    <input type="text" class="form-control" name="alamat_pembeli" id="location"
                                        value="{{ $pembeli->alamat_pembeli }}" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Password</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        value="Password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Simpan</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                    </div>
                    <!--/tab-pane-->
                    <div class="tab-pane" id="messages">
                    </div>
                    <!--/tab-pane-->
                    <div class="tab-pane" id="settings">
                        <hr>
                    </div>
                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->
            <!--/tab-pane-->
        </div>
        <!--/tab-content-->
    </div>
    <!--/col-9-->
    </div>
    <!--/row-->
@endsection