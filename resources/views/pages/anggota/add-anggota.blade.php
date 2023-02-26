@extends('layouts.app')
<!-- -->
@section('content')

<div class="section-anggota">
    <div class="container-fluid my-4">
        <h6>Add anggota /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <h6>List anggota</h6>

            <form
                action="{{ route('simpan-anggota') }}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="row">
                    <div class="col-lg-4 justify-content-center">
                        <div>
                            <img
                                class="img-fluid rounded"
                                height="200"
                                width="200"
                                src=""
                                alt=""
                            />
                            <p>Hi, admin</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-2">
                            <label class="form-label">Name</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                            />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Tgl. Lahir</label>
                            <input
                                type="date"
                                name="tgl_lahir"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Image</label>
                            <input
                                type="file"
                                name="image"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Jenis Kelamin</label>

                            <select
                                class="form-select form-select-md"
                                aria-label=".form-select-sm example"
                                name="jenis_kelamin"
                            >
                                <option selected value="no define">
                                    --- select ---
                                </option>
                                <option value="0">Laki-Laki</option>
                                <option value="1">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <div class="col-lg-4">
                        <div class="mb-2">
                            <label class="form-label">Daerah</label>
                            <input
                                type="text"
                                name="daerah"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">No. Telp</label>
                            <input
                                type="number"
                                name="nomor_phone"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Jabatan</label>
                            <input
                                type="text"
                                name="jabatan"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Alamat</label>
                            <input
                                type="alamat"
                                name="alamat"
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
