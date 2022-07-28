@extends('penjual.layouts_penjual.main')

@section('title')
Dashboard
@endsection

@section('container')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Selamat Datang {{$penjual->nama_toko}}!</h3>
                <h6 class="font-weight-normal mb-0">Semua sistem berjalan normal!</h6>
            </div>
            <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <button class="btn btn-sm btn-light bg-white" type="button"
                            id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            <i class="mdi mdi-calendar"></i>Hari ini {{ date('d-m-Y') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
            <div class="card-people mt-auto">
                <img src="/admin/images/dashboard/people.svg" alt="people">
                <div class="weather-info">
                    <div class="d-flex">
                        <div>
                            <h2 class="mb-0 font-weight-normal"><i
                                    class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                        </div>
                        <div class="ml-2">
                            <h4 class="location font-weight-normal">Indramayu</h4>
                            <h6 class="font-weight-normal">Indonesia</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Total Penjual</p>
                        <p class="fs-30 mb-2">{{$jumlah_barang}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Total Pembelian</p>
                        <p class="fs-30 mb-2">{{$jumlah_pembelian}}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection