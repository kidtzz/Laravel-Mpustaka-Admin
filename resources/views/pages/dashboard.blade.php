@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-dashboard">
    <div class="container-fluid border-radius-1rem">
        <div class="content py-4">
            <h6>Profil Statistic</h6>
            <div class="row">
                <div class="col-lg-9 mb-2">
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <div class="col-lg-3 mb-2">
                                    <div
                                        class="bg-white box-shadow-grey border-radius-03rem p-1"
                                    >
                                        <div class="row">
                                            <div class="col-5">
                                                <i
                                                    class="fas fa-book fa-3x text-info m-3"
                                                ></i>
                                            </div>
                                            <div
                                                class="col d-flex align-items-center"
                                            >
                                                <span
                                                    >Total
                                                    {{ $countBuku }} Buku</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div
                                        class="bg-white box-shadow-grey border-radius-03rem p-1"
                                    >
                                        <div class="row">
                                            <div class="col-5">
                                                <i
                                                    class="fas fa-exchange-alt fa-3x text-warning m-3"
                                                ></i>
                                            </div>
                                            <div
                                                class="col d-flex align-items-center"
                                            >
                                                <span>
                                                    Total
                                                    {{ $countPeminjam }}
                                                    Peminjam
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-2">
                                    <div
                                        class="bg-white box-shadow-grey border-radius-03rem p-1"
                                    >
                                        <div class="row">
                                            <div class="col-5">
                                                <i
                                                    class="fas fa-user-friends fa-3x text-success m-3"
                                                ></i>
                                            </div>
                                            <div
                                                class="col d-flex align-items-center"
                                            >
                                                <span>
                                                    Total
                                                    {{ $countAnggota }}
                                                    Member</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-2">
                                    <div
                                        class="bg-white box-shadow-grey border-radius-03rem p-1"
                                    >
                                        <div class="row">
                                            <div class="col-5">
                                                <i
                                                    class="fas fa-newspaper fa-3x text-info m-3"
                                                ></i>
                                            </div>
                                            <div
                                                class="col d-flex align-items-center"
                                            >
                                                <span>
                                                    Total
                                                    {{ $countBerita }}
                                                    Berita</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div
                                class="bg-white box-shadow-grey border-radius-03rem py-5 px-3"
                            >
                                Profil Visit
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div
                        class="bg-white box-shadow-grey border-radius-03rem py-5 px-3"
                    >
                        Side
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- ini contoh addon-style -->
<!-- @push('addon-style')
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel=" stylesheet" href="{{ url('/assets/css/home.css') }}" type="text/css">
@endpush -->
