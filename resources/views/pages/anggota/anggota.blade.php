@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-anggota">
    <div class="container-fluid my-4">
        <h6>Anggota /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>List Anggota</h6>
                </div>
                <div class="table-top-side d-flex mb-2">
                    <div class="add-data mx-1">
                        <a
                            class="btn btn-success d-flex"
                            href="{{ route('add-page-anggota') }}"
                        >
                            <i class="bi bi-plus"></i>
                            <span>Add anggota</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped" id="TableList">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">First Nama</th>
                        <th scope="col">Last Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Nomor Telp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($att_anggota as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <th>{{ $item["first_name"] }}</th>
                        <th>{{ $item["last_name"] }}</th>
                        <th>{{ $item["email"] }}</th>
                        <th>{{ $item["alamat"] }}</th>
                        <th>{{ $item["jabatan"] }}</th>
                        <th>{{ $item["jenis_kelamin"] }}</th>
                        <th>{{ $item["nomor_phone"] }}</th>

                        <th>
                            <div class="d-flex">
                                <a
                                    type="button"
                                    class="mx-1 text-success"
                                    data-bs-toggle="tooltip"
                                    title="view"
                                >
                                    <span
                                        ><i class="bi bi-eye icons-center"></i
                                    ></span>
                                </a>
                                <a type="button" class="mx-1" href="/getid-anggota/{{ $item->id}}"">
                                    <span
                                        ><i
                                            class="bi bi-pencil-square icons-center"
                                        ></i
                                    ></span>
                                </a>
                                <a
                                    type="button"
                                    class="mx-1 text-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal-delete"
                                >
                                    <span>
                                        <i class="bi bi-trash icons-center"></i
                                    ></span>
                                </a>
                            </div>
                        </th>
                        <!-- -------------------------------- -->
                        <div class="modal-delete">
                            <div
                                class="modal fade"
                                id="modal-delete"
                                data-bs-backdrop="static"
                                data-bs-keyboard="false"
                                tabindex="-1"
                                aria-labelledby="modal-delete-anggota"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1
                                                class="modal-title fs-5"
                                                id="modal-delete"
                                            >
                                                Delete anggota?
                                            </h1>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin delete anggota
                                            ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button
                                                type="button"
                                                class="btn btn-secondary"
                                                data-bs-dismiss="modal"
                                            >
                                                Close
                                            </button>
                                            <a
                                                type="button"
                                                class="btn btn-danger"
                                                href="/delete-anggota/{{ $item->id}}"
                                            >
                                                Yes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------------- -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
