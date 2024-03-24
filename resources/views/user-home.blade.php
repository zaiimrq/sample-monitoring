@extends('Layout.main-user')
@section('container')
<section class="wrapper">
    <h3>Upload Dokumen</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quia voluptate provident rerum odit consectetur ex
        ipsa dolor laborum fuga, eveniet tempora amet similique recusandae fugiat autem aliquam. Facilis, maiores!</p>
    <div class="table-container-user">
        <button class="btn btn-primary">Upload</button>
        <table id="table-dukungan" class="table table-striped" style="width:100%; text-align: center;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>File</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{ asset('img/dummy-ktp.png') }}" class="img-thumbnail preview"
                            style="cursor: pointer" alt="Gambar KTP" data-bs-toggle="modal" data-bs-target="#ktp">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="ktp" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('img/dummy-ktp.png') }}" class="img-fluid" alt="Preview KTP">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection