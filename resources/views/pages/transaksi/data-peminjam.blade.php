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
                                    class="mx-1 text-success"
                                    data-bs-toggle="tooltip"
                                    title="view"
                                >
                                    <span
                                        ><i class="bi bi-eye icons-center"></i
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
                                aria-labelledby="modal-delete-peminjam"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1
                                                class="modal-title fs-5"
                                                id="modal-delete"
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
