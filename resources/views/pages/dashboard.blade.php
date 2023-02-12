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
                                        class="bg-white box-shadow-grey border-radius-03rem py-4 px-3"
                                    >
                                        <span>Total {{ $countBuku }} Buku</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div
                                        class="bg-white box-shadow-grey border-radius-03rem py-4 px-3"
                                    >
                                        Total {{ $countPeminjam }} Peminjam
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div
                                        class="bg-white box-shadow-grey border-radius-03rem py-4 px-3"
                                    >
                                        Total {{ $countAnggota }} Member
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div
                                        class="bg-white box-shadow-grey border-radius-03rem py-4 px-3"
                                    >
                                        Total {{ $countBerita }} Berita
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div
                                class="bg-white box-shadow-grey border-radius-03rem py-5 px-3"
                            >
                                chart-bot
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
