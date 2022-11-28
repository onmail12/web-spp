<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container px-5">
        <a class="navbar-brand fw-bolder" href="index.html">Website Pembayaran SPP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link px-3 {{ Route::is('home') ? 'active' : '' }}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3 {{ Route::is('siswa') ? 'active' : '' }}" href="/siswa">Siswa</a></li>
                <li class="nav-item"><a class="nav-link px-3 {{ Route::is('kelas') ? 'active' : '' }}" href="/kelas">Kelas</a></li>
                <li class="nav-item"><a class="nav-link px-3 {{ Route::is('spp') ? 'active' : '' }}" href="/spp">Spp</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pembayaran</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li><a class="dropdown-item" href="/pembayaran">Transaksi Pembayaran</a></li>
                        <li><a class="dropdown-item" href="blog-post.html">Histori Pembayaran</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                <li class="nav-item"><a class="nav-link px-3" href="/login"><i class="bi bi-box-arrow-in-right"></i>
                        Login</a></li>

                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Welcome, {{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>