@section('title', 'Operasional')
<x-app-layout>
    <div class="content">
        <div class="isi-content">
            <h3><i class="fi fi-rs-file-upload"></i> Lapor Permintaan Masyarakat</h3>
            <p>Harap laporkan semua permintaan masyarakat secara rinci dan jelas.</p>

            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-primary upload mb-3" data-bs-toggle="modal"
                    data-bs-target="#uploadModal">
                    <i class="fi fi-br-upload"></i>
                    Unggah
                </button>
                    <table class="table table striped" id="table-kendala">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th style="width: 70%;">Permintaan Masyarakat</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12 April 2024</td>
                                <td>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                                    2. Harum aspernatur necessitatibus veritatis voluptas maiores repellat. Sapiente temporibus enim voluptate ad.</td>
                                <td>
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
                                <form action="" id="uploadForm" enctype="multipart/form-data"
                                    method="post">
                                    <div class="form-group mb-3">
                                        <label for="tanggal">Tanggal :</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="permintaan">Permintaan :</label>
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
                $('#table-kendala').DataTable({
                    responsive: true
                })
            })
    </script>
    @endpush
</x-app-layout>