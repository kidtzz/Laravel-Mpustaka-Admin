@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-berita">
    <div class="container-fluid my-4">
        <h6>View Berita</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <div class="d-flex justify-content-between">
                <div>
                    <h6>List Berita</h6>
                    <form
                        method="post"
                        action="/update-berita/{{ $att_berita->id}}"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="mb-3">
                                    <label class="form-label">judul</label>
                                    <input
                                        type="text"
                                        name="judul"
                                        class="form-control @error('judul') is-invalid @enderror"
                                        value="{{ $att_berita->judul }}"
                                    />
                                    @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">deskripsi</label>
                                    <textarea
                                        type="text"
                                        name="deskripsi"
                                        class="form-control"
                                        id="summernote"
                                        value="{{ $att_berita->deskripsi }}"
                                    ></textarea>
                                </div>

                                <div class="mb-3">
                                    <div class="img-thumbnail img-fluid">
                                        <img
                                            width="250"
                                            height="200"
                                            src="{{ asset('storage/'.$att_berita->gambar )}}"
                                            alt="update-gambar"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">kategori</label>
                                    <input
                                        type="text"
                                        name="kategori"
                                        class="form-control"
                                        value="{{ $att_berita->kategori }}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">user</label>
                                    <input
                                        type="text"
                                        name="user"
                                        class="form-control"
                                        value="{{ $att_berita->user }}"
                                    />
                                </div>
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
