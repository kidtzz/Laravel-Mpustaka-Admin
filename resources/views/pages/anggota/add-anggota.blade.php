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
                    <div class="col-lg-6">
                        <div class="mb-2">
                            <label class="form-label">name</label>
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
                            <label class="form-label">email</label>
                            <input
                                type="text"
                                name="email"
                                class="form-control"
                            />
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <div class="col-lg-6">
                        <div class="mb-2">
                            <label class="form-label">daerah</label>
                            <input
                                type="text"
                                name="daerah"
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
