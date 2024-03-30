@section('title', 'KPI')
<x-app-layout>

<div class="content">
    <div class="isi-content container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h3 class="display-6"><a href="{{ route('admin.dashboard') }}"><i class='bx bx-arrow-back'></i></a> TIM
                    SUKSES {{ $user->id }} - {{ Str::upper($user->name) }}</h3>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/profile.svg')}}" alt="Foto Hero" style="width:40%;">
                </div>
                <div class="col-md-6">
                    <div class="text-label-bold">
                        <h4>
                            <i class="fi fi-rr-user"></i>
                             Informasi Profil
                        </h4>
                    </div>
                    <hr>
                    <div class="text-label">
                        Nama : Jakson Wang
                    </div>
                    <p>Wilayah Distrik : Lorem ipsum</p>
                    <p>Cek Monitoring Real Time - </p>

                    <div class="text-label-bold mt-4">
                        <h3>
                            <div class="text-danger">
                                <i class="fi fi-ss-exclamation"></i>
                                TARGET : 5000
                            </div>
                        </h3>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <div class="text-label-bold">
                    <h4>
                        <i class="fi fi-ss-folder-open"></i>
                        Informasi Data
                    </h4>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-kpi table-borderless">
                    <tbody>
                        <tr>
                            <th class="vertical-header">
                                <div class="text-label-bold">
                                    Distrik
                                </div>
                            </th>
                            <td class="col-1">:</td>
                            <td class="col-2">XXXXXX</td>
                        </tr>
                        <tr>
                            <th class="vertical-header">
                                <div class="text-label-bold">
                                    Jumlah DPT
                                </div>
                            </th>
                            <td class="col-1">:</td>
                            <td class="col-2">9200</td>
                        </tr>
                        <tr>
                            <th class="vertical-header">
                                <div class="text-label-bold">
                                    Jumlah Dukungan Masuk
                                </div>
                            </th>
                            <td class="col-1">:</td>
                            <td class="col-2">4600</td>
                        </tr>
                        <tr>
                            <th class="vertical-header">
                                <div class="text-label-bold">
                                    KTP Pendukung
                                </div>
                            </th>
                            <td class="col-1">:</td>
                            <td class="col-2"><a href="{{ route('admin.kpi-ktp-pendukung')}}"><button class="btn btn-warning">Lihat</button></a></td>
                        </tr>
                        <tr>
                            <th class="vertical-header">
                                <div class="text-label-bold">
                                    Data Operasional
                                </div>
                            </th>
                            <td class="col-1">:</td>
                            <td class="col-2"><a href="{{ route('admin.kpi-operasional')}}"><button class="btn btn-warning">Lihat</button></a></td>
                        </tr>
                        <tr>
                            <th class="vertical-header">
                                <div class="text-label-bold">
                                    Kendala Lapangan
                                </div>
                            </th>
                            <td class="col-1">:</td>
                            <td class="col-2"><a href="{{ route('admin.kpi-kendala')}}"><button class="btn btn-warning">Lihat</button></a></td>
                        </tr>
                        <tr>
                            <th class="vertical-header">
                                <div class="text-label-bold">
                                    Permintaan Masyarakat
                                </div>
                            </th>
                            <td class="col-1">:</td>
                            <td class="col-2"><a href="{{ route('admin.kpi-permintaan-masyarakat')}}"><button class="btn btn-warning">Lihat</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
    

</x-app-layout>