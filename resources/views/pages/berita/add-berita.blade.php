@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-berita">
    <div class="container-fluid my-4">
        <h6>Add Berita /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>Add Berita</h6>
                    <form
                        method="post"
                        action="{{ route('simpan-berita') }}"
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
                            <label class="form-label">kategori</label>
                            <input
                                type="text"
                                name="kategori"
                                class="form-control"
                            />
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
                            <label class="form-label">user</label>
                            <input
                                type="text"
                                name="user"
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
