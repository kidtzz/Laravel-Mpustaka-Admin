@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-profile">
    <div class="container-fluid my-4">
        <h5>Setting profile /</h5>
        <div class="content bg-white border-radius-1rem py-4 px-4">
            <h5>Setting profile</h5>
            <form
                action="/update-profile/{{ $user_profil->id }}"
                method="post"
                enctype="multipart/form-data"
            >
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-4 justify-content-center">
                        <div>
                            <img
                                class="img-fluid rounded"
                                height="200"
                                width="200"
                                src="{{ asset('storage/'.$user_profil->gambar )}}"
                                alt=""
                            />
                            <p>Hi, {{ $user_profil->name}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input
                                type="text"
                                name="name"
                                value="{{ $user_profil->name}}"
                                class="form-control @error('name') is-invalid @enderror"
                            />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="text"
                                name="email"
                                value="{{ $user_profil->email}}"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input
                                type="date"
                                name="tgl_lahir"
                                value="{{ $user_profil->tgl_lahir}}"
                                class="form-control"
                            />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input
                                type="file"
                                name="gambar"
                                value="{{ $user_profil->gambar}}"
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Daerah</label>
                            <input
                                type="text"
                                name="daerah"
                                value="{{ $user_profil->daerah}}"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Telp</label>
                            <input
                                type="number"
                                name="nomor_phone"
                                value="{{ $user_profil->nomor_phone}}"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input
                                type="text"
                                name="alamat"
                                value="{{ $user_profil->alamat}}"
                                class="form-control"
                            />
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary">
                    Save Profile
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
