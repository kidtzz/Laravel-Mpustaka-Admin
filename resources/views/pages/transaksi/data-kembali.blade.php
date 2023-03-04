@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-kembali">
    <div class="container-fluid my-4">
        <h6>Pengembalian</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>List kembali</h6>
                </div>
            </div>
            <table class="table table-striped" id="TableList">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode. Pinjam</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tgl. Pinjam</th>
                        <th scope="col">Tgl. Kembali</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($list_kembali as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <th>{{ $item["no_kembali"] }}</th>
                        <th>{{ $item["judul_buku"] }}</th>
                        <th>{{ $item["nama_pinjam"] }}</th>
                        <th>
                            {{
                                date(
                                    "d-m-Y",
                                    strtotime($item["tanggal_pinjam"])
                                )
                            }}
                        </th>
                        <th>
                            {{
                                date(
                                    "d-m-Y",
                                    strtotime($item["tanggal_kembali"])
                                )
                            }}
                        </th>
                        <th>{{ $item["status"] }}</th>
                        <th>
                            <div class="d-flex">
                                <a
                                    type="button"
                                    class="mx-1 text-success"
                                    data-bs-toggle="modal"
                                    title="view"
                                    data-bs-target="#modal-kembali-view{{$item->id}}"
                                >
                                    <span
                                        ><i class="bi bi-eye icons-center"></i
                                    ></span>
                                </a>
                                <a
                                    type="button"
                                    class="mx-1 text-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal-delete-peminjam{{$item->id}}{{$item->no_kembali}}"
                                >
                                    <span>
                                        <i class="bi bi-trash icons-center"></i
                                    ></span>
                                </a>
                            </div>
                        </th>

                        <!-- -------------------------------- -->
                        <div class="modal-kembali-view">
                            <div
                                class="modal fade"
                                id="modal-kembali-view{{$item->id}}"
                                data-bs-backdrop="static"
                                data-bs-keyboard="false"
                                tabindex="-1"
                                aria-labelledby="modal-kembali-view"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1
                                                class="modal-title fs-5"
                                                id="modal-kembali-view{{$item->id}}"
                                            >
                                                View Data Pengembalian
                                            </h1>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Kode Kembali</label
                                                        >
                                                        <input
                                                            type="text"
                                                            name="no_kembali"
                                                            class="form-control"
                                                            value="{{$item->no_kembali}}"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Nama
                                                            Peminjam</label
                                                        >
                                                        <input
                                                            type="text"
                                                            name="nama_pinjam"
                                                            class="form-control"
                                                            disabled
                                                            value="{{$item->nama_pinjam}}"
                                                        />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Judul Buku</label
                                                        >
                                                        <input
                                                            type="text"
                                                            name="judul_buku"
                                                            class="form-control"
                                                            disabled
                                                            value="{{$item->judul_buku}}"
                                                        />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Submit By</label
                                                        >
                                                        <input
                                                            type="text"
                                                            name="submit_by"
                                                            class="form-control"
                                                            disabled
                                                            value="{{$item->submit_by}}"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Tanggal
                                                            Pinjam</label
                                                        >
                                                        <input
                                                            type="date"
                                                            name="tanggal_pinjam"
                                                            class="form-control"
                                                            disabled
                                                            value="{{$item->tanggal_pinjam}}"
                                                        />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Tanggal
                                                            Kembali</label
                                                        >
                                                        <input
                                                            type="date"
                                                            name="tanggal_kembali"
                                                            class="form-control"
                                                            disabled
                                                            value="{{$item->tanggal_kembali}}"
                                                        />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Status</label
                                                        >
                                                        <input
                                                            type="text"
                                                            name="status"
                                                            class="form-control"
                                                            disabled
                                                            value="{{$item->status}}"
                                                        />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label"
                                                            >Dikembalikan Waktu
                                                        </label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            disabled
                                                            value="{{
                                                                date(
                                                                    'd-m-Y h:i:sa',
                                                                    strtotime(
                                                                        $item->created_at
                                                                    )
                                                                )
                                                            }}"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button
                                                type="button"
                                                class="btn btn-primary"
                                                data-bs-dismiss="modal"
                                            >
                                                Ok
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-delete">
                            <div
                                class="modal fade"
                                id="modal-delete-peminjam{{$item->id}}{{$item->no_kembali}}"
                                data-bs-backdrop="static"
                                data-bs-keyboard="false"
                                tabindex="-1"
                                aria-labelledby="modal-delete-peminjam"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1
                                                class="modal-title fs-5"
                                                id="modal-delete-peminjam{{$item->id}}{{$item->no_kembali}}"
                                            >
                                                Delete peminjam?
                                            </h1>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin delete
                                            {{$item->no_kembali}} peminjam ini?
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
                                                href="/delete-kembaliPeminjam/{{$item->id}}"
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
