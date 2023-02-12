<div class="navbar-expand-lg col-lg-2 bg-white py-4" id="sidebar-desktop">
    <div class="collapse navbar-collapse">
        <div class="container-fluid px-0">
            <ul
                class="navbar-nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                id="menu"
            >
                <li class="nav-item w-100">
                    <a
                        class="nav-link px-3 w-100"
                        href="{{ route('dashboard') }}"
                    >
                        <i class="bi bi-grid bi icons-size-1rem"></i
                        ><span class="d-none d-sm-inline px-2">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item w-100">
                    <a
                        href="#MasterData"
                        data-bs-toggle="collapse"
                        class="nav-link px-3 w-100 px-0 align-middle"
                        role="button"
                    >
                        <i class="fs-6 bi-clipboard2-data bi icons-center"></i>

                        <span class="d-none d-sm-inline text-top-5px px-2"
                            >Master Data</span
                        >
                    </a>
                    <ul
                        class="collapse nav flex-column ms-1"
                        id="MasterData"
                        data-bs-parent="#menu"
                    >
                        <li class="w-100 nav-link nav-link-child">
                            <a
                                href="{{ route('buku') }}"
                                class="px-3 w-100 px-0"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
                                    >Data Buku</span
                                >
                            </a>
                        </li>
                        <li class="w-100 nav-link nav-link-child">
                            <a
                                href="{{ route('anggota') }}"
                                class="px-3 w-100 px-0"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
                                    >Data Anggota</span
                                >
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item w-100">
                    <a
                        href="#Transaksi"
                        data-bs-toggle="collapse"
                        class="nav-link px-3 w-100 px-0 align-middle"
                        role="button"
                    >
                        <i class="fs-6 bi-cart-plus bi icons-center"></i>

                        <span class="d-none d-sm-inline text-top-5px px-2"
                            >Transaksi</span
                        >
                    </a>
                    <ul
                        class="collapse nav flex-column ms-1"
                        id="Transaksi"
                        data-bs-parent="#menu"
                    >
                        <li class="w-100 nav-link nav-link-child">
                            <a
                                href="{{ route('add-peminjaman') }}"
                                class="px-3 w-100 px-0"
                            >
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
                                    >Peminjamaan</span
                                >
                            </a>
                        </li>
                        <li class="w-100 nav-link nav-link-child">
                            <a href="#" class="px-3 w-100 px-0">
                                <span
                                    class="d-none d-sm-inline text-top-5px px-2"
                                    >Pengembalian</span
                                >
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link px-3 w-100" href="{{ route('berita') }}">
                        <i
                            class="bi bi-grid bi icons-center icons-size-1rem"
                        ></i
                        ><span class="d-none d-sm-inline text-top-5px px-2"
                            >Berita</span
                        >
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
