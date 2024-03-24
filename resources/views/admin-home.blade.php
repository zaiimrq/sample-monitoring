@extends('Layout.main')
@section('container')

    <header class="header container mt-4">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/profile.svg')}}" alt="Foto Hero">
            </div>
            <div class="col-md-6">
                <h1>BUPATIKU</h1>
                <p>Sistem Management Informasi Tim Sukses</p>
                <p>Cek Monitoring Real Time</p>

                <!-- <div class="card">
                    <h5 class="card-header">Kabar Terkini</h5>
                    <div class="card-body d-flex justify-content-between align-items-center">
                    <h5>Total Dukungan</h5>
                    <h5>9000</h5>
                </div> -->
            </div>
            </div>
        </div>
    </header>

    <section class="chart mt-5">
        <div class="row ">
            <div class="col-md-6 text-center p-3">
                <div class="text-label-bold">
                    <h3>CHART DUKUNGAN</h3>
                    <img src="{{ asset('img/chart.svg')}}" class="img-fluid" alt="CHART" width="80%">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Kabar Terkini</h5>
                    <div class="card-body">
                    <h5>Total Dukungan</h5>
                    <h5>9000</h5>
                </div>
            </div>
        </div>
    </section>

@endsection