@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-peminjam">
    <div class="container-fluid my-4">
        <h6>Peminjam</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>List peminjam</h6>
                </div>
                <div class="table-top-side d-flex mb-2">
                    <div class="add-data mx-1">
                        <a
                            class="btn btn-success d-flex text-size-14px"
                            href="{{ route('add-peminjaman') }}"
                        >
                            <i class="bi bi-plus icons-center"></i>
                            <span class="text-top-3px">Add peminjam</span>
                        </a>
                    </div>
                </div>
            </div>

            <table class="table table-striped" id="TableList">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode peminjam</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Nama Pinjam</th>
                        <th scope="col">Tgl. Pinjam</th>
                        <th scope="col">Tgl. Kembali</th>
                        <th scope="col">Sisa Hari</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($list_peminjam as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <th>{{ $item["no_pinjam"] }}</th>
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
                        <th>
                            <?php 
                            $tanggal1 = $now_date;
                            $tanggal2 = new DateTime($item["tanggal_kembali"]);
                            $interval = $tanggal1->diff($tanggal2); echo
                            $interval->format('%R%a Hari'); ?>
                        </th>
                        <th>
                            <div class="d-flex">
                                <a
                                    type="button"
                                    class="mx-1 text-warning"
                                    data-bs-toggle="modal"
                                    title="Berhenti"
                                    data-bs-target="#modal-berhenti{{$item->id}}{{$item->no_pinjam}}"
                                >
                                    <span
                                        ><i class="bi bi-back icons-center"></i
                                    ></span>
                                </a>
                                <a
                                    type="button"
                                    class="mx-1 text-success"
                                    data-bs-toggle="modal"
                                    title="Perpanjang"
                                    data-bs-target="#modal-perpanjang{{$item->id}}"
                                >
                                    <span
                                        ><i
                                            class="bi bi-skip-forward-btn icons-center"
                                        ></i
                                    ></span>
                                </a>
                            </div>
                        </th>
                        <th>
                            <div class="d-flex">
                                <a
                                    type="button"
                                    class="mx-1 text-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal-delete-peminjam{{$item->id}}{{$item->no_pinjam}}"
                                >
                                    <span
                                        ><i
                                            class="bi bi-trash icons-center"
                                        ></i>
                                    </span>
                                </a>
                            </div>
                        </th>

                        <!-- -------------------------------- -->
                        <div class="modal-berhenti">
                            <div
                                class="modal fade"
                                id="modal-berhenti{{$item->id}}{{$item->no_pinjam}}"
                                data-bs-backdrop="static"
                                data-bs-keyboard="false"
                                tabindex="-1"
                                aria-labelledby="modal-berhenti{{$item->id}}{{$item->no_pinjam}}"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="/simpan-kembaliPeminjam/{{$item->id}}"
                                            method="post"
                                            enctype="multipart/form-data"
                                        >
                                            @csrf
                                            <div class="modal-header">
                                                <h1
                                                    class="modal-title fs-5"
                                                    id="modal-berhenti{{$item->id}}{{$item->no_pinjam}}"
                                                >
                                                    Berhenti peminjam?
                                                </h1>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                ></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin Berhenti
                                                meminjam ini?
                                                <input
                                                    type="text"
                                                    hidden
                                                    name="no_kembali"
                                                    value="{{$item->no_pinjam}}"
                                                />
                                                <input
                                                    type="text"
                                                    hidden
                                                    name="nama_pinjam"
                                                    value="{{$item->nama_pinjam}}"
                                                />
                                                <input
                                                    type="text"
                                                    hidden
                                                    name="judul_buku"
                                                    value="{{$item->judul_buku}}"
                                                />
                                                <input
                                                    type="text"
                                                    hidden
                                                    name="tanggal_kembali"
                                                    value="{{$item->tanggal_kembali}}"
                                                />
                                                <input
                                                    type="text"
                                                    hidden
                                                    name="tanggal_pinjam"
                                                    value="{{$item->tanggal_pinjam}}"
                                                />
                                                <input
                                                    type="text"
                                                    hidden
                                                    name="submit_by"
                                                    value="{{ Auth::user()->name }}"
                                                />
                                            </div>
                                            <div class="modal-footer">
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary"
                                                    data-bs-dismiss="modal"
                                                >
                                                    Close
                                                </button>
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                >
                                                    Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-perpanjang">
                            <div
                                class="modal fade"
                                id="modal-perpanjang{{$item->id}}"
                                data-bs-backdrop="static"
                                data-bs-keyboard="false"
                                tabindex="-1"
                                aria-labelledby="modal-perpanjang"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="/update-perpanjang/{{$item->id}}"
                                            method="post"
                                            enctype="multipart/form-data"
                                        >
                                            @csrf
                                            <div class="modal-header">
                                                <h1
                                                    class="modal-title fs-5"
                                                    id="modal-perpanjang{{$item->id}}"
                                                >
                                                    Perpanjang Data peminjam
                                                </h1>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                ></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >No. Pinjam</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="no_pinjam"
                                                        class="form-control @error('no_pinjam') is-invalid @enderror"
                                                        value="{{$item->no_pinjam}}"
                                                        disabled
                                                    />
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Tanggal Pinjam</label
                                                    >
                                                    <input
                                                        type="date"
                                                        name="tanggal_pinjam"
                                                        class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                                                        value="{{$item->tanggal_pinjam}}"
                                                        readonly
                                                    />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        >Perpanjanag Sampai
                                                        Tanggal</label
                                                    >
                                                    <input
                                                        type="date"
                                                        name="tanggal_kembali"
                                                        class="form-control @error('tanggal_kembali') is-invalid @enderror"
                                                        value="{{$item->tanggal_kembali}}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary"
                                                    data-bs-dismiss="modal"
                                                >
                                                    Close
                                                </button>
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                >
                                                    Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-delete">
                            <div
                                class="modal fade"
                                id="modal-delete-peminjam{{$item->id}}{{$item->no_pinjam}}"
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
                                                id="modal-delete-peminjam{{$item->id}}{{$item->no_pinjam}}"
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
                                            Apakah Anda yakin delete peminjam
                                            ini? {{$item->no_pinjam}}
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
                                                href="/delete-peminjam/{{$item->id}}"
                                                class="btn btn-danger"
                                            >
                                                Yes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
