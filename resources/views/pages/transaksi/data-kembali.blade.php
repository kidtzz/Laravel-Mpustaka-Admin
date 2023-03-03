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
                        <th>{{ $item["status"] }}</th>
                        <th>action</th>
                    </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
