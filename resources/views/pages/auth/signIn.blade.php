@extends('layouts.login')
<!-- -->
@section('content')
<section class="section-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">
                            Sign In
                        </h5>
                        @if(Session::has('message_error_login'))
                        <div class="alert alert-danger">
                            {{ Session("message_error_login") }}
                        </div>
                        @endif
                        <form action="{{ route('postLogin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    name="email"
                                    class="form-control"
                                    placeholder="Username"
                                />
                                <label>Username or Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Password"
                                />
                                <label>Password</label>
                            </div>

                            <div class="form-check mb-3">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                />
                                <label class="form-check-label">
                                    Remember password
                                </label>
                            </div>
                            <div class="d-grid mb-4">
                                <button
                                    class="btn btn-primary btn-login text-uppercase fw-bold"
                                    type="submit"
                                >
                                    Sign in
                                </button>
                            </div>
                            <!-- <hr class="my-4" />
                            <div class="d-grid mb-2">
                                <button
                                    class="btn btn-google btn-login text-uppercase fw-bold"
                                    type="submit"
                                >
                                    <i class="fab fa-google me-2"></i>
                                    Sign in with Google
                                </button>
                            </div>
                            <div class="d-grid">
                                <button
                                    class="btn btn-facebook btn-login text-uppercase fw-bold"
                                    type="submit"
                                >
                                    <i class="fab fa-facebook-f me-2"></i>
                                    Sign in with Facebook
                                </button>
                            </div> -->
                            <div
                                class="d-flex text-center justify-content-center"
                            >
                                <p>not have account?</p>
                                <a href="{{ route('sign-up') }}">sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
