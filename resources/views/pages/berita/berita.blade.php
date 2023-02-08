@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-berita">
    <div class="container-fluid my-4">
        <h6>Berita /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>List Berita</h6>
                </div>
                <div class="table-top-side d-flex mb-3">
                    <div class="add-data mx-1">
                        <a
                            class="btn btn-success d-flex"
                            href="{{ route('add-berita') }}"
                        >
                            <i class="bi bi-plus"></i>
                            <span>Add Berita</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped" id="TableList">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">User</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($dataBerita as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <th>{{ $item["judul"] }}</th>
                        <th>{{ $item["kategori"] }}</th>
                        <th>{{ $item["user"] }}</th>
                        <th>{{ $item["deskripsi"] }}</th>
                        <th>
                            <div class="d-flex">
                                <a
                                    type="button"
                                    class="mx-1 text-success"
                                    data-bs-toggle="tooltip"
                                    href="getid-berita/{{ $item->id}}"
                                    title="view"
                                >
                                    <span
                                        ><i class="bi bi-eye icons-center"></i
                                    ></span>
                                </a>
                                <a
                                    type="button"
                                    class="mx-1"
                                    href="getid-berita/{{ $item->id}}"
                                >
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
                                aria-labelledby="modal-delete-buku"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1
                                                class="modal-title fs-5"
                                                id="modal-delete"
                                            >
                                                Delete Buku?
                                            </h1>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin delete buku ini?
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
                                                href="/delete-berita/{{ $item->id}}}"
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
    <div class="modal-add">
        <div
            class="modal fade"
            id="modal-edit"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="modal-edit-buku"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-edit">
                            Edit Buku
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <a type="button" class="btn btn-primary"> Submit </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
