<div class="navbar-expand-lg col-lg-2 bg-white py-4" id="sidebar-desktop">
    <div class="collapse navbar-collapse">
        <div class="container-fluid px-0">
            <ul
                class="navbar-nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                id="menu"
            >
                <li class="nav-item w-100 px-3">
                    <a
                        class="nav-link px-3 w-100 {{ Request::is('dashboard') ? 'nav-link-active':'' }}"
                        href="{{ route('dashboard') }}"
                    >
                        <i class="bi bi-grid bi icons-size-1rem"></i
                        ><span class="d-none d-sm-inline px-2 text-top-5px"
                            >Dashboard</span
                        >
                    </a>
                </li>

                <li class="nav-item w-100 px-3">
                    <a
                        href="#MasterData"
                        data-bs-toggle="collapse"
                        class="nav-link px-3 w-100 px-0 align-middle"
                        role="button"
                    >
                        <i class="fs-6 bi-clipboard2-data bi icons-center"></i>

                        <span class="d-none d-sm-inline text-top-8px px-2"
                            >Master Data</span
                        >
                    </a>
                    <ul
                        class="nav flex-column ms-1 {{ Request::is('buku') || Request::is('anggota') ? '' :'collapse'  }} "
                        id="MasterData"
                        data-bs-parent="#menu"
                    >
                        <li class="w-100 nav-link-child">
                            <a
                                href="{{ route('buku') }}"
                                class="px-3 nav-link px-0 {{ Request::is('buku') ? 'nav-link-active':'' }}"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
                                    >Data Buku</span
                                >
                            </a>
                        </li>
                        <li class="w-100 nav-link-child">
                            <a
                                href="{{ route('anggota') }}"
                                class="px-3 px-0 nav-link {{ Request::is('anggota') ? 'nav-link-active':'' }}"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
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
                        class="nav-link px-3 w-100 px-0 align-middle"
                        role="button"
                    >
                        <i class="fs-6 bi-cart-plus bi icons-center"></i>

                        <span class="d-none d-sm-inline text-top-8px px-2"
                            >Transaksi</span
                        >
                    </a>

                    <ul
                        class="nav flex-column ms-1 {{ Request::is('add-peminjaman') || Request::is('data-peminjam') || Request::is('data-kembali') ? '' :'collapse'  }} "
                        id="Transaksi"
                        data-bs-parent="#menu"
                    >
                        <li class="w-100 nav-link-child">
                            <a
                                href="{{ route('add-peminjaman') }}"
                                class="px-3 nav-link px-0 {{ Request::is('add-peminjaman') ? 'nav-link-active':'' }}"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
                                    >Add Peminjam</span
                                >
                            </a>
                        </li>
                        <li class="w-100 nav-link-child">
                            <a
                                href="{{ route('data-peminjam') }}"
                                class="px-3 nav-link px-0 {{ Request::is('data-peminjam') ? 'nav-link-active':'' }}"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
                                    >Data Peminjam</span
                                >
                            </a>
                        </li>
                        <li class="w-100 nav-link-child">
                            <a
                                href="{{ route('data-kembali') }}"
                                class="px-3 nav-link px-0 {{ Request::is('data-kembali') ? 'nav-link-active':'' }}"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
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
                        <i
                            class="bi bi-newspaper bi icons-center icons-size-1rem"
                        ></i
                        ><span class="d-none d-sm-inline text-top-8px px-2"
                            >Berita</span
                        >
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
