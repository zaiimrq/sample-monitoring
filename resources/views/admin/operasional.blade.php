@section('title', 'Operasional')
<x-app-layout>

<div class="content">
    <div class="isi-content container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="text-label-reguler">
                    Silahkan klik untuk melihat laporan operasional Tim Sukses
                </div>
                <select name="operasional-timses" class="form-select-lg text-white border-0 mt-3 " style="background-color: var(--primary-light);">
                    <option selected value="Timses-1">Tim Sukses - 1</option>
                    <option value="Timses-2">Tim Sukses - 2</option>
                    <option value="Timses-3">Tim Sukses - 3</option>
                    <option value="Timses-4">Tim Sukses - 4</option>
                    <option value="Timses-5">Tim Sukses - 5</option>
                </select>
            </div>
            
            <div class="col-md-12">
                <table class="table table striped" id="table-operasional">
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

</div>

<!-- @push('scripts')
    <script>
       $(document).ready(function() {
           $('#table-operasional').DataTable({
               responsive: true
           });
    </script>
@endpush -->

</x-app-layout>