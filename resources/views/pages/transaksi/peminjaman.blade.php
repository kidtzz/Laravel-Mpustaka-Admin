@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-anggota">
    <div class="container-fluid my-4">
        <h6>Peminjamaan /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>Peminjamaan</h6>
                    <form
                        action="{{ route('simpan-peminjaman') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">No. Pinjam</label>
                            <input
                                type="text"
                                name="no_pinjam"
                                class="form-control @error('no_pinjam') is-invalid @enderror"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                name="nama_pinjam"
                            >
                                <option selected disabled>---select---</option>
                                @foreach ($list_nama as $nama)
                                <option
                                    value="{{ $nama->first_name }} {{ $nama->last_name }}"
                                >
                                    {{ $nama->first_name }}
                                    {{ $nama->last_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                name="judul_buku"
                            >
                                <option selected disabled>---select---</option>
                                @foreach ($list_buku as $buku)
                                <option value="{{ $buku->judul }}">
                                    {{ $buku->judul }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pinjam</label>
                            <input
                                type="date"
                                name="tanggal_pinjam"
                                class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Kembali</label>
                            <input
                                type="date"
                                name="tanggal_kembali"
                                class="form-control @error('tanggal_kembali') is-invalid @enderror"
                            />
                        </div>
                        <button type="submit" class="btn btn-secondary">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
