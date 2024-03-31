@section('title', __('Dashboard'))
<x-app-layout>
    <div class="content">
        <div class="isi-content">
            <h3><i class="fi fi-rs-file-upload"></i> Upload Dokumen</h3>
            <p>Silahkan Upload Foto KTP format gambar .jpg/.png/.jpeg. Pastikan gambar terlihat jelas dan terang. Ukuran
                file
                tidak boleh lebih dari X MB.</p>

            <!-- TABEL DOKUMEN -->
            <button type="button" class="btn btn-primary upload mb-3" data-bs-toggle="modal"
                data-bs-target="#uploadModal">
                <i class="fi fi-br-upload"></i>
                Unggah
            </button>
            <div class="table-container-user overflow-x-auto">
                <table id="table-dukungan" class="table table-striped" style="width:100%; text-align: center;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Name</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($ktp as $k)
                        <tr>
                            <td width="10%">{{ $loop->iteration }}</td>
                            <td>{{ $k->nik }}</td>
                            <td>{{ $k->name }}</td>
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
                            <td></td>
                            <td></td>
                            <td>No data has been uploaded!</td>
                            <td></td>
                            <td></td>
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
                                    <label for="nik">Nik :</label>
                                    <input type="text" class="form-control @error('nik')
                                    is-invalid
                                @enderror" value="{{ old('nik') }}" id="nik" name="nik">
                                    @error('nik')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Nama :</label>
                                    <input type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" value="{{ old('name') }}" id="name" name="name">
                                    @error('name')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="file">Pilih Foto :</label>
                                            <input type="file" class="form-control-file" id="file" name="file"
                                                onchange="prev()">
                                            @error('file')
                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <img id="uploadPrev" src="" class="card-img shadow rounded-3" alt="">
                                        </div>
                                    </div>
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
            $('#table-dukungan').DataTable({
                responsive: true
            })

            $('.preview').click(function(){
                const path = $(this).attr('src')
                $('#ktp img').attr('src', path)
            })



        })

        function prev() {
           const file = $("input[type=file]#file").get(0).files[0];
           const reader = new FileReader()
           reader.onload = ()=>{
            $('#uploadPrev').attr('src', reader.result)
           }
           reader.readAsDataURL(file)
        }
    </script>
    @endpush

    @pushIf($errors->any(), 'scripts')
    <script>
        $(function(){
                $('.upload').click()
            })
    </script>
    @endPushIf
</x-app-layout>