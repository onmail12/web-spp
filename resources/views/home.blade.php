@extends('layout')
@section('header')

<h1 class="display-5 fw-bolder text-white mb-2">Website Pembayaran SPP</h1>
<p class="lead fw-normal text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit
    delectus deleniti quae cupiditate, qui eum labore eveniet ut ullam veritatis rem fuga assumenda totam architecto
    ducimus repellendus, corporis recusandae.</p>
<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Transaksi Pembayaran</a>
    <a class="btn btn-outline-light btn-lg px-4" href="#!">Histori Pembayaran</a>
</div>
@endsection

@section('main')
<div>
    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="carousel1.webp" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
                            width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                            dy=".3em">First slide</text></svg>

                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="carousel2.jpg" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
                            width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444"
                            dy=".3em">Second slide</text></svg>

                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="carousel3.webp" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
                            width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                            dy=".3em">Third slide</text></svg>

                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

</div>
@endsection