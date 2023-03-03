@extends('layouts.app')
<!-- -->
@section('content')
<div class="section-dashboard">
    <div class="container-fluid border-radius-1rem">
        <div class="content py-4">
            <h6>Dashboard</h6>
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
                                class="bg-white box-shadow-grey border-radius-03rem p-1"
                            >
                                <div id="container-table"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div
                        class="bg-white box-shadow-grey border-radius-03rem p-3"
                    >
                        <h6>Berita Terbaru</h6>
                        <div class="list-group list-group-flush">
                            @foreach ($list_berita as $item) @php $dateNow =
                            Carbon\Carbon::parse($item->created_at);
                            $resultDate= $dateNow->diffForHumans(); @endphp
                            <a
                                href="#"
                                class="list-group-item list-group-item-action"
                            >
                                <p class="mb-1">
                                    {{ Str::limit($item["judul"],40) }}
                                </p>
                                <div
                                    class="d-flex w-100 justify-content-between"
                                >
                                    <small class="text-muted">{{
                                        $item["user"]
                                    }}</small>

                                    <small class="text-muted">{{
                                        $resultDate
                                    }}</small>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('parts.custom-dashboard') @endsection

<!-- ini contoh addon-style -->
<!-- @push('addon-style')
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel=" stylesheet" href="{{ url('/assets/css/home.css') }}" type="text/css">
@endpush -->
