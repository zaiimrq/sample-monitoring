@section('title', __('Dashboard'))
<x-app-layout>
    <section class="wrapper">
        <h3>Upload Dokumen</h3>
        <p>Silahkan Upload Foto KTP format gambar .jpg/.png/.jpeg. Pastikan gambar terlihat jelas dan terang. Ukuran
            file
            tidak boleh lebih dari X MB.</p>

        <!-- TABEL DOKUMEN -->
        <div class="table-container-user">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                Unggah Foto
            </button>
            <table id="table-dukungan" class="table table-striped" style="width:100%; text-align: center;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($ktp as $k)
                    <tr>
                        <td width="10%">{{ $loop->iteration }}</td>
                        <td>
                            <!-- Connect ke Database lalu tampilkan nama file di sini, namun bisa di preview -->
                            <img src="{{ asset('storage/ktp/'. $k->file) }}" class="img-thumbnail preview" style="cursor:
                            pointer" alt="Gambar KTP" data-bs-toggle="modal" data-bs-target="#ktp">
                        </td>
                        <td width="20%">
                            <form action="" method="post" class="d-inline">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                            <form action="{{ route('ktp.destroy') }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="fileName" value="{{ $k->file }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No data has been uploaded!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- MODAL PREVIEW KTP -->
        <div class="modal fade" id="ktp" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="" class="img-fluid" alt="Preview KTP">
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL UPLOAD DOKUMEN -->
        <div class="modal fade" id="uploadModal" tabindex="1" role="dialog" aria-labelledby="uploadModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">Upload Foto KTP</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('ktp.upload') }}" id="uploadForm" enctype="multipart/form-data"
                            method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="file">Pilih Foto:</label>
                                <input type="file" class="form-control-file" id="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        $(function(){
            $('#table-dukungan').DataTable()


            $('.preview').click(function(){
                const path = $(this).attr('src')
                $('#ktp img').attr('src', path)
            })
        })
    </script>
    @endpush
</x-app-layout>