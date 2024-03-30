@section('title', 'Dashboard')
<x-app-layout>
    {{-- <div class="container"> --}}
        <div class="row bg-success">
            <div class="col-md-6 text-center">
                <img width="300" height="300" src="{{ asset('img/profile.svg')}}" alt="Foto Hero">
            </div>
            <div class="col-md-6">
                <div class="text-header-bold mt-3">
                    BUPATIKU
                </div>
                <div class="text-header-regular mt-3">
                    <span>Sistem Management Informasi Tim Sukses</span><br>
                    <span>Cek Monitoring Mudah dan Akurat</span>
                </div>
            </div>
        </div>
        {{--
    </div> --}}

    <div class="content">

        <div class="col-md-12 mb-4">
            <!-- start total dukungan alert -->
            <div class="alert alert-success d-flex align-items-center">
                <div class="alert-message">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="message-title">
                                <i class="fi fi-sr-megaphone"></i>
                                Total Dukungan
                            </h4>
                            <p class="text-label-regular">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, molestias.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <span class="text-card-bold">
                                {{ $total_dukungan }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end total dukungan alert -->
        </div>

        <div class="isi-content">
            <div class="col-md-12 mb-3 text-center">
                <div class="text-hero-bold">
                    GRAFIK TOTAL DUKUNGAN
                </div>
                <img src="{{ asset('img/chart.svg')}}" class="img-fluid" alt="CHART" width="80%">
            </div>
        </div>
    </div>
    <!-- 
    <div class="row mt-5">
        <div class="col-md-6 text-center p-3">
            <div class="text-label-bold">
                <h3>CHART DUKUNGAN</h3>
                <img src="{{ asset('img/chart.svg')}}" class="img-fluid" alt="CHART" width="80%">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-warning">Kabar Terkini</h5>
                <div class="card-body">
                    <h5>Total Dukungan</h5>
                    <h3 class="text-danger"></h3>
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>