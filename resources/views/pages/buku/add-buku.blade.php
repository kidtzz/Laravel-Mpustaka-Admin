@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-buku">
    <div class="container-fluid my-4">
        <h6>Add Buku /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>List Buku</h6>

                    <form
                        action="{{ route('simpan-buku') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">judul</label>
                            <input
                                type="text"
                                name="judul"
                                class="form-control @error('judul') is-invalid @enderror"
                            />
                            @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">deskripsi</label>
                            <input
                                type="text"
                                name="deskripsi"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">penerbit</label>
                            <input
                                type="text"
                                name="penerbit"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">pengarang</label>
                            <input
                                type="text"
                                name="pengarang"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Halaman</label>
                            <input
                                type="number"
                                name="jmlhHalaman"
                                class="form-control"
                            />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">gambar</label>
                            <input
                                type="file"
                                name="gambar"
                                class="form-control @error('gambar') is-invalid @enderror"
                            />
                            @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit</label>
                            <input
                                type="date"
                                name="tahunTerbit"
                                class="form-control"
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
