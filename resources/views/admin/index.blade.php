@section('title', 'Dashboard')
<x-app-layout>
        <div class="row" style="background-color: var(--primary-light)">
            <div class="col-md-6 text-center mb-3">
                <img class="p-3" width="300" height="300" src="{{ asset('img/profile.svg')}}" alt="Foto Hero">
            </div>
            <div class="col-md-6 ">
                <div class="text-header-bold mt-4 px-3">
                    BUPATIKU
                </div>
                <div class="text-header-regular mt-3 px-3">
                    <span>Sistem Management Informasi Tim Sukses</span><br>
                    <span>Cek Monitoring Mudah dan Akurat</span>
                </div>
            </div>
        </div>


    <div class="content">

        <div class="col-md-12 mb-4">
            <!-- start total dukungan alert -->
            <div class="alert alert-success d-flex align-items-center">
                <div class="alert-message">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="message-title">
                                <i class="fi fi-sr-megaphone"></i>
                                Total Dukungan
                            </h4>
                            <p class="text-label-regular">
                                Berikut adalah total dukungan secara real time.
                            </p>
                        </div>
                        <div class="col-md-4">
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
                <div class="chart">
                    {!! $chart->render() !!}
                </div>
                {{-- <img src="{{ asset('img/chart.svg')}}" class="img-fluid" alt="CHART" width="80%"> --}}
            </div>
        </div>
    </div>
</x-app-layout>