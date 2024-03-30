@section('title', 'Grafik Kinerja')
<x-app-layout>
    <div class="content">
        <div class="isi-content">
            <div class="text-label-bold text-center mb-3">
                <h3 class="mb-3">GRAFIK KINERJA TIM SUKSES</h3>
                {!! $chart->render() !!}
                {{-- <img src="{{ asset('img/chart.svg')}}" alt="Grafik Kinerja" style="width: 80%;"> --}}
            </div>
        </div>
    </div>
</x-app-layout>