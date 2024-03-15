@extends('temp.v_temp')
@section('breadcump','Home/Dashboard')
@section('isibreadcump','Home')
@section('isicontent')
<div class="panel-body">
<body>

<div class="panel-body">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            @if (isset(session('role')['is_admin']))
            <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{$user}}</h3>
                    <p>User</p>
                </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            </div>
            </div>
            @endif
            <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$verifikasi}}<sup style="font-size: 20px"></sup></h3>
                    <p>Pengajuan</p>
                </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            </div>
            </div>

            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$diterima}}</h3>
                    <p>Diterima</p>
                </div>
            <div class="icon">
                 <i class="ion ion-checkmark-circled"></i>
            </div>
            </div>
            </div>

            <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$ditolak}}</h3>
                    <p>Ditolak</p>
                </div>
            <div class="icon">
                <i class="ion ion-close-circled"></i>
            </div>
            </div>
            </div>

            @if (isset(session('role')['is_dosen']))
            <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{$menunggu}}</h3>
                    <p>Menunggu</p>
                </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
        </div>
    </div>
            @endif

            @if (isset(session('role')['is_mhs']))
            <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{$menunggu}}</h3>
                    <p>Menunggu</p>
                </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
        </div>
    </div>
            @endif
</div>
</div>
</div>
@if (!session('role')['is_admin'] and session('role')['is_dosen'])
<h3 class="font-weight-bold">Selamat Datang <span>{{session('profile')['nama_dan_gelar']}}</span></h3>
@else
<h3 class="font-weight-bold">Selamat Datang <span>{{session('profile')['nama']}}</span></h3>
@endif
</div>

</section>
@endsection
