@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-buku">
    <div class="container-fluid my-4">
        <h6>Add Buku /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <h6>List Buku</h6>

            <form
                action="{{ route('simpan-buku') }}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="row">
                    <div class="col-lg-9">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
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
                            <label class="form-label">Deskripsi</label>
                            <textarea
                                type="text"
                                name="deskripsi"
                                class="form-control"
                                id="summernote"
                            ></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input
                                type="file"
                                name="gambar"
                                class="form-control @error('gambar') is-invalid @enderror"
                            />
                            @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label class="form-label">Kode Buku</label>
                            <input
                                type="text"
                                name="kode_buku"
                                class="form-control @error('kode_buku') is-invalid @enderror"
                                disabled
                            />
                            @error('kode_buku')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penerbit</label>
                            <input
                                type="text"
                                name="penerbit"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pengarang</label>
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
                            <label class="form-label">Tahun Terbit</label>
                            <input
                                type="date"
                                name="tahunTerbit"
                                class="form-control"
                            />
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
