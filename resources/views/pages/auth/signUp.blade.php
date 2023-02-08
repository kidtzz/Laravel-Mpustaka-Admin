@extends('layouts.login')
<!-- -->
@section('content')
<section class="section-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-2">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">
                            Sign Up
                        </h5>

                        <form
                            action="{{ route('register') }}"
                            method="post"
                            enctype="multipart/form-data"
                        >
                            {{ csrf_field() }}
                            <div class="form-floating mb-4">
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                />
                                <label>name</label>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- <div class="form-floating mb-4">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="role"
                                />
                                <label>role </label>
                            </div> -->
                            <div class="form-floating mb-4">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                />
                                <label>email</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                />
                                <label>password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-4">
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control @error('password') is-invalid @enderror"
                                />
                                <label>Confirm Password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="d-grid mb-4">
                                <button
                                    class="btn btn-primary btn-login text-uppercase fw-bold"
                                    type="submit"
                                >
                                    Sign Up
                                </button>
                            </div>

                            <div
                                class="d-flex text-center justify-content-center"
                            >
                                <p>have account?</p>
                                <a href="http://localhost:8000/">sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
