@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-berita">
    <div class="container-fluid my-4">
        <h6>Add Berita</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <h6>Add Berita</h6>
            <form
                method="post"
                action="{{ route('simpan-berita') }}"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="row">
                    <div class="col-lg-10">
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
                    <div class="col-lg-2">
                        <div class="mb-3">
                            <label class="form-label">Upload By</label>
                            <input
                                type="text"
                                name="user"
                                class="form-control"
                                value="{{ Auth::user()->name }}"
                                disabled
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input
                                type="text"
                                name="kategori"
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
