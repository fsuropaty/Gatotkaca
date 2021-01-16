@extends('templates/main')

@section('title', 'home')


@section('container')

    <h1>Headline News</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="/img/beranda/HeadLine-img-1.png" alt="First slide">
                <div class="carousel-caption">
                    <h3>Inggris Kembali Melakukan Lockdown Sampai Pertengahan Februari</h3>
                    <p>Inggris kembali melakukan lockdown yang disebabkan oleh naiknya jumlah kasus Covid-19 dalam beberapa
                        minggu ini. Lockdown dijaga ketat oleh militer dan beberapa jalanan terlihat sepi</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/img/beranda/HeadLine-img-2.png" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Covid-19: Ditemukan varian baru virus corona di Jepang, apa yang diketahui sejauh ini?</h3>
                    <p>Varian baru virus corona, varian yang ketiga sejauh ini, ditemukan pada empat orang yang mendarat di
                        Jepang dari Brasil.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/img/beranda/HeadLine-img-3.png" alt="Third slide">
                <div class="carousel-caption">
                    <h3>FBI peringatkan lanjutan demonstrasi massa bersenjata pro-Trump jelang pelantikan Joe Biden</h3>
                    <p>Biro Investigasi Federal, FBI, memperingatkan kemungkinan adanya aksi unjuk rasa bersenjata di
                        sejumlah wilayah Amerika Serikat menjelang pelantikan Joe Biden sebagai presiden.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h2>Hoax Terkonfirmasi Hari Ini</h2>
    <div class="flex-container">
        <div class="box1"><img src="/img/beranda/hoax-1.png" width="200x" height="150px">
        </div>
        <p1 class="box2">
            <a href="#">[HOAX] Link Survei Pendapat Pendirian Bank Syariah Muhammadiyah</a>
            <br>
            <br>
            <br>
            <a2>Selasa, 5 Januari 2021</a2>
        </p1>
    </div>
    <div class="flex-container">
        <div class="box1"><img src="/img/beranda/hoax-alfa.png" width="200x" height="150px">
        </div>
        <p1 class="box2">
            <a href="#">[HOAX] Link Survei dengan Iming-iming Voucher Alfamart</a>
            <br>
            <br>
            <br>
            <a2>Selasa, 5 Januari 2021</a2>
        </p1>
    </div>
    <div class="flex-container">
        <div class="box1"><img src="/img/beranda/hoax-2.png" width="200x" height="150px">
        </div>
        <p1 class="box2">
            <a href="#">[HOAX] Kota Manado Zona Hitam Sebaran COVID-19</a>
            <br>
            <br>
            <br>
            <a2>Selasa, 5 Januari 2021</a2>
        </p1>
    </div>
    <div class="flex-container">
        <div class="box1"><img src="/img/beranda/hoax-3.png" width="200x" height="150px">
        </div>
        <p1 class="box2">
            <a href="#">[HOAX] Bumbu Masakan Sejumlah Merek Mengandung Babi</a>
            <br>
            <br>
            <br>
            <a2>Selasa, 5 Januari 2021</a2>
        </p1>
    </div>
@endsection
