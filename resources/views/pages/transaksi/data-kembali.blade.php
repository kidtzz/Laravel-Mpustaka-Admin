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
                        </th>

                            <!-- -------------------------------- -->
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
                                                Apakah Anda yakin delete {{$item->no_kembali}} peminjam ini?
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
