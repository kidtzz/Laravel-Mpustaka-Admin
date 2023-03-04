<nav class="fixed-top navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="px-1" href="{{ route('dashboard') }}"
            ><img
                src="http://localhost:8000/storage/thumbnail/profile/logo_manggala_pustaka-removebg-preview.png"
                alt=""
                height="40"
                width="40"
        /></a>

        <ul class="navbar-nav" id="user-profil">
            <p class="my-2 text-size-14px text-top-5px">
                Hi, {{ Auth::user()->name }}
            </p>
            <li class="nav-item me-3 me-lg-0 dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img
                        width="30"
                        height="30"
                        class="img-fluid rounded-circle shadow-5"
                        src="http://localhost:8000/storage/{{ Auth::user()->gambar }}"
                        alt=""
                    />
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a
                            class="dropdown-item"
                            href="/setting-profile/{{ Auth::user()->id }}"
                        >
                            Profil</a
                        >
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"> Setting</a>
                    </li>

                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            >Logout</a
                        >
                    </li>
                </ul>
            </li>
        </ul>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav-mobile"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav-mobile">
        <div id="hide-navbar">
            <div class="col">
                <ul
                    class="navbar-nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu"
                >
                    <li class="nav-item w-100 px-3">
                        <a
                            class="nav-link px-3 w-100  {{ Request::is('dashboard') ? 'nav-link-active':'' }}"
                            href="{{ route('dashboard') }}"
                        >
                            <i class="bi bi-grid bi"></i
                            ><span class="d-sm-inline px-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item w-100 px-3">
                        <a
                            href="#MasterData"
                            data-bs-toggle="collapse"
                            class="nav-link px-3 w-100"
                            role="button"
                        >
                            <i class="fs-6 bi-clipboard2-data bi"></i>

                            <span class="d-sm-inline px-2">Master Data</span>
                        </a>
                        <ul
                            class="nav flex-column ms-1 {{ Request::is('buku') || Request::is('anggota') ? '' :'collapse'  }} "
                            id="MasterData"
                            data-bs-parent="#menu"
                        >
                            <li class="w-80 mx-4 nav-link-child">
                                <a
                                    href="{{ route('buku') }}"
                                    class="px-3 nav-link px-0 {{ Request::is('buku') ? 'nav-link-active':'' }}"
                                >
                                    <span class="d-sm-inline text-top-5px"
                                        >Data Buku</span
                                    >
                                </a>
                            </li>
                            <li class="w-80 mx-4 nav-link-child">
                                <a
                                    href="{{ route('anggota') }}"
                                    class="px-3 px-0 nav-link {{ Request::is('anggota') ? 'nav-link-active':'' }}"
                                >
                                    <span class="d-sm-inline text-top-5px"
                                        >Data Anggota</span
                                    >
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item w-100 px-3">
                        <a
                            href="#Transaksi"
                            data-bs-toggle="collapse"
                            class="nav-link px-3 w-100"
                            role="button"
                        >
                            <i class="fs-6 bi-cart-plus bi"></i>

                            <span class="d-sm-inline px-2">Transaksi</span>
                        </a>

                        <ul
                            class="nav flex-column ms-1 {{ Request::is('add-peminjaman') || Request::is('data-peminjam') || Request::is('data-kembali') ? '' :'collapse'  }} "
                            id="Transaksi"
                            data-bs-parent="#menu"
                        >
                            <li class="w-80 mx-4 nav-link-child">
                                <a
                                    href="{{ route('add-peminjaman') }}"
                                    class="px-3 nav-link px-0 {{ Request::is('add-peminjaman') ? 'nav-link-active':'' }}"
                                >
                                    <span class="d-sm-inline text-top-5px"
                                        >Add Peminjam</span
                                    >
                                </a>
                            </li>
                            <li class="w-80 mx-4 nav-link-child">
                                <a
                                    href="{{ route('data-peminjam') }}"
                                    class="px-3 nav-link px-0 {{ Request::is('data-peminjam') ? 'nav-link-active':'' }}"
                                >
                                    <span class="d-sm-inline text-top-5px"
                                        >Data Peminjam</span
                                    >
                                </a>
                            </li>
                            <li class="w-80 mx-4 nav-link-child">
                                <a
                                    href="{{ route('data-kembali') }}"
                                    class="px-3 nav-link px-0 {{ Request::is('data-kembali') ? 'nav-link-active':'' }}"
                                >
                                    <span class="d-sm-inline text-top-5px"
                                        >Data Pengembalian</span
                                    >
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item w-100 px-3">
                        <a
                            class="nav-link px-3 w-100 {{ Request::is('berita') ? 'nav-link-active':'' }}"
                            href="{{ route('berita') }}"
                        >
                            <i class="bi bi-newspaper bi"></i
                            ><span class="d-sm-inline px-3">Berita</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
