@section('title', 'TIMSES - KTP Pendukung')
<x-app-layout>
    <div class="content">
        <div class="isi-content">
            <a href="{{ url()->previous() }}" class="text-right mb-2"><i class='bx bx-arrow-back'></i></a>
            <div class="text-label-bold text-center mb-3">
                <h3 class="mb-3">TMSES - PERMINTAAN MASYARAKAT</h3>
            </div>
            <div class="col-md-12">
                <table class="table table striped" id="table-kpi-permintaan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Permintaan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12 April 2024</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, dolorum.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $(function (){
                    $('#table-kpi-permintaan').DataTable({
                        responsive: true
                    })
                })
    </script>
    @endpush
</x-app-layout>