@section('title', 'Operasional')
<x-app-layout>
    <div class="content">
        <div class="isi-content">
            <h4><i class="fi fi-rs-file-upload"></i> Lapor Data Operasional</h4>
            <div class="text-label">
                <p>Harap laporkan semua kegiatan operasional terbaru di sini. Mohon masukkan rincian penggunaan dana terbaru
                secara berkala sebagai pelaporan.</p>
            </div>

            <button type="button" class="btn btn-primary upload mb-3" data-bs-toggle="modal"
                data-bs-target="#uploadModal">
                <i class="fi fi-br-upload"></i>
                Unggah
            </button>
            <div class="col-md-12 mt-3 overflow-x-auto">
                <table class="table table striped" id="table-operasional">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Jumlah</th>
                            <th>Peruntukan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12 April 2024</td>
                            <td>Dana Masuk</td>
                            <td>Rp. 2.900.000</td>
                            <td>Dana Kampanye</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-warning"><i class="fi fi-rr-edit"></i></button>
                                <button type="submit" class="btn btn-danger"><i class="fi fi-rr-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- MODAL FORM UPLOAD -->
            <div class="modal fade" id="uploadModal" tabindex="1" role="dialog" aria-labelledby="uploadModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadModalLabel">Upload Data Operasional</h5>
                            <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="uploadForm" enctype="multipart/form-data" method="post">
                                <div class="form-group mb-3">
                                    <label for="tanggal">Tanggal :</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status :</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jumlah">Jumlah :</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="peruntukan">Peruntukan :</label>
                                    <textarea class="form-control" cols="30" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    <script>
        $(function(){
                $('#table-operasional').DataTable({
                    responsive: true
                })
            })
    </script>
    @endpush
</x-app-layout>