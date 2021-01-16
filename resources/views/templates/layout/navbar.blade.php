<nav class="navbar navbar-expand-sm bg-light navbar-custom sticky-top">
    <a class="navbar-brand">
        <img src="./img/logo/GatotKaca.png" class="float-left img-fluid" width="60%">
    </a>
    <ul class="navbar-nav navbar-center">
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/') }}">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/berita') }}">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/hoax') }}">Hoax</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/personal')}}">Personal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/bantuan') }}">Bantuan</a>
        </li>
    </ul>
    <ul class="navbar-nav navbar-right">
        <li><a class="nav-Daftar" href="#">Daftar</a></li>
        <li><a class="nav-Masuk"  href="{{ url ('/login/bantuan') }}">Masuk</a></li>
    </ul>
</nav>
