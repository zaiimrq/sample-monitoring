@section('title', 'TIMSES - KTP Pendukung')
<x-app-layout>
    <div class="content">
        <div class="isi-content">
            <a href="{{ url()->previous() }}" class="text-right mb-2"><i class='bx bx-arrow-back'></i></a>
            <div class="text-label-bold text-center mb-3">
                <h4 class="mb-3">KPI - OPERASIONAL</h4>
            </div>
            <div class="col-md-12">
                <table class="table table striped overflow-x-auto" id="table-kpi-operasional">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Jumlah</th>
                            <th>Peruntukan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12 April 2024</td>
                            <td>Dana Masuk</td>
                            <td>Rp. 2.900.000</td>
                            <td>Dana Kampanye</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(function (){
            $('#table-kpi-operasional').DataTable({
                responsive: true
            })
        })
    </script>
    @endpush
</x-app-layout>