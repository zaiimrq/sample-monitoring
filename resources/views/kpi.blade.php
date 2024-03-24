@extends('Layout.main')
@section('container')

<header class="header container mt-4">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1 class="display-6"><a href="{{ route('admin-home') }}"><i class='bx bx-arrow-back'></i></a> TIM SUKSES 1 - JAKSON WANG</h1>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/profile.svg')}}" alt="Foto Hero">
                </div>
                <div class="col-md-6">
                    <div class="text-label-bold">
                    Informasi Profil
                    </div>
                    <hr>
                    <div class="text-label">
                        Nama    : Jakson Wang
                    </div>
                    <p>Wilayah Distrik : Lorem ipsum</p>
                    <p>Cek Monitoring Real Time - </p>

                    <div class="text-label-bold mt-4">
                        <span>TARGET : 5000</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <div class="text-label-bold">
                    Informasi Data
                </div>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mr-5 ml-5">
            <table class="table table-kpi table-borderless">
                <tbody>
                    <tr>
                        <th class="vertical-header">Distrik</th>
                        <td class="col-1">:</td>
                        <td class="col-2">Dogiyai</td>
                    </tr>
                    <tr>
                        <th class="vertical-header">Jumlah DPT</th>
                        <td class="col-1">:</td>
                        <td class="col-2">9200</td>
                    </tr>
                    <tr>
                        <th class="vertical-header">Jumlah Dukungan Masuk</th>
                        <td class="col-1">:</td>
                        <td class="col-2">4600</td>
                    </tr>
                    <tr>
                        <th class="vertical-header">KTP Pendukung</th>
                        <td class="col-1">:</td>
                        <td class="col-2"><button class="btn btn-secondary">Lihat</button></td>
                    </tr>
                    <tr>
                        <th class="vertical-header">Data Operasional</th>
                        <td class="col-1">:</td>
                        <td class="col-2"><button class="btn btn-secondary">Lihat</button></td>
                    </tr>
                    <tr>
                        <th class="vertical-header">Kendala Lapangan</th>
                        <td class="col-1">:</td>
                        <td class="col-2"><button class="btn btn-secondary">Lihat</button></td>
                    </tr>
                    <tr>
                        <th class="vertical-header">Permintaan Masyarakat</th>
                        <td class="col-1">:</td>
                        <td class="col-2"><button class="btn btn-secondary">Lihat</button></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        
    </header>

@endsection