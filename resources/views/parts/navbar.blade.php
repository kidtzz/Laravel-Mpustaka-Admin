<!-- <div>
    <h2>ini Navbar yGY</h2>
    <a rel="stylesheet" href="">test Detail</a>
</div> -->

<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mpustka</a>
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
                    <li class="nav-item py-1 w-100">
                        <a
                            class="nav-link px-3 w-100"
                            href="{{ route('dashboard') }}"
                        >
                            <i
                                class="bi bi-grid bi icons-center icons-size-1rem"
                            ></i
                            ><span class="d-sm-inline text-top-5px px-2"
                                >Dashboard</span
                            >
                        </a>
                    </li>
                    <li class="nav-item py-1 w-100">
                        <a
                            class="nav-link px-3 w-100"
                            href="{{ route('buku') }}"
                        >
                            <i
                                class="bi bi-book bi icons-center icons-size-1rem"
                            ></i>
                            <span class="d-sm-inline text-top-5px px-2"
                                >Data Buku</span
                            >
                        </a>
                    </li>

                    <li class="nav-item py-1 w-100">
                        <a
                            href="#submenu3"
                            data-bs-toggle="collapse"
                            class="nav-link px-3 w-100 px-0 align-middle"
                            role="button"
                        >
                            <i class="fs-6 bi-0-circle bi icons-center"></i>
                            <span class="d-sm-inline text-top-5px px-2"
                                >Products</span
                            >
                        </a>
                        <ul
                            class="collapse nav flex-column ms-1"
                            id="submenu3"
                            data-bs-parent="#menu"
                        >
                            <li class="w-100 nav-link nav-link-child">
                                <a href="#" class="nav-link px-3 w-100 px-0">
                                    <span class="d-sm-inline text-top-5px px-2"
                                        >Product</span
                                    >
                                </a>
                            </li>
                            <li class="w-100 nav-link nav-link-child">
                                <a href="#" class="nav-link px-3 w-100 px-0">
                                    <span class="d-sm-inline text-top-5px px-2"
                                        >Product</span
                                    >
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
