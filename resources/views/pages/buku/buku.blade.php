@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-buku">
    <div class="container-fluid my-4">
        <h6>Buku</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>List Buku</h6>
                </div>
                <div class="table-top-side d-flex mb-2">
                    <div class="add-data mx-1">
                        <a
                            class="btn btn-success d-flex text-size-14px"
                            href="{{ route('add-buku') }}"
                        >
                            <i class="bi bi-plus icons-center"></i>
                            <span class="text-top-3px">Add Buku</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped" id="TableList">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Jumlah Halaman</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($bukuItem as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <th>{{ $item["kode_buku"] }}</th>
                        <th>{{ $item["judul"] }}</th>
                        <th>{{ $item["pengarang"] }}</th>
                        <th>{{ $item["tahunTerbit"] }}</th>
                        <th>{{ $item["jmlhHalaman"] }}</th>
                        <th>
                            <div class="d-flex">
                                <a
                                    type="button"
                                    class="mx-1 text-success"
                                    data-bs-toggle="tooltip"
                                    title="view"
                                    href="/getid-buku/{{ $item->id}}"
                                >
                                    <span
                                        ><i class="bi bi-eye icons-center"></i
                                    ></span>
                                </a>
                                <a
                                    type="button"
                                    class="mx-1"
                                    href="/getid-buku/{{ $item->id}}"
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
                                    data-bs-target="#modal-delete{{$item->id}}"
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
                                id="modal-delete{{$item->id}}"
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
                                                id="modal-delete{{$item->id}}"
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
                                                href="/delete-buku/{{ $item->id}}"
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
