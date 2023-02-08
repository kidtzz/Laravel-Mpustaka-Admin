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
                        action="/update-buku/{{ $att_buku->id}}"
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
                                value="{{ $att_buku->judul }}"
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
                                value="{{ $att_buku->deskripsi }}"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">penerbit</label>
                            <input
                                type="text"
                                name="penerbit"
                                class="form-control"
                                value="{{ $att_buku->penerbit }}"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">pengarang</label>
                            <input
                                type="text"
                                name="pengarang"
                                class="form-control"
                                value="{{ $att_buku->pengarang }}"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Halaman</label>
                            <input
                                type="number"
                                name="pengarang"
                                class="form-control"
                                value="{{ $att_buku->jmlhHalaman }}"
                            />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit</label>
                            <input
                                type="date"
                                name="tahunterbit"
                                class="form-control"
                                value="{{ $att_buku->tahunTerbit }}"
                            />
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="">
                                <label class="form-label">gambar</label>
                                <input
                                    type="file"
                                    name="gambar"
                                    class="form-control"
                                />
                            </div>
                            <div class="img-thumbnail img-fluid">
                                <img
                                    width="250"
                                    height="200"
                                    src="{{ asset('storage/'.$att_buku->gambar )}}"
                                    alt="update-gambar"
                                />
                            </div>
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
