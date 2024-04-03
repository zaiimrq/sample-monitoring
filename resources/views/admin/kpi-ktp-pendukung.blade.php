@section('title', 'TIMSES - KTP Pendukung')
<x-app-layout>
    <div class="content">
        <div class="isi-content">
            <a href="{{ url()->previous() }}" class="text-right mb-2"><i class='bx bx-arrow-back'></i></a>
            <div class="text-label-bold text-center mb-3">
                <h4 class="mb-3">KPI - TABEL KTP PENDUKUNG</h4>
            </div>
            <div class="col-md-12 mt-5">
                <table class="table table striped overflow-x-auto" id="table-kpi-ktp">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>KTP</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($ktp as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->nik }}</td>
                            <td>{{ $k->name }}</td>
                            <td>
                                <img src="{{ asset('storage/ktp/'. $k->file) }}" class="img-thumbnail preview"
                                    style="cursor: pointer" alt="Gambar KTP" data-bs-toggle="modal"
                                    data-bs-target="#ktp">
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td></td>
                            <td colspan="2" style="text-align: center">No data has been uploaded!</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- MODAL PREVIEW KTP -->
    <div class="modal fade" id="ktp" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" class="img-fluid" alt="Preview KTP">
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(function(){
            $('#table-kpi-ktp').DataTable()
        })
    </script>
    @endpush
</x-app-layout>