@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-anggota">
    <div class="container-fluid my-4">
        <h6>Add Anggota /</h6>
        <div class="content bg-white border-radius-1rem py-4 px-3">
            <h6>List Anggota</h6>
            <form
                action="/update-anggota/{{ $att_anggota->id}}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="mb-3">
                    <label class="form-label">name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ $att_anggota->name }}"
                    />
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
