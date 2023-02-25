@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-kembali">
    <div class="container-fluid my-4">
        <h6>kembali /</h6>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
