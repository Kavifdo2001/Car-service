@extends('layouts.front')
@section('content')

<style>
    .fixed-spare-img {
        width: 100%;
        height: 250px;
        object-fit: full;
        border-radius: 5px;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Spare Parts</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Spare Parts</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Spare Parts Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Store //</h6>
            <h1 class="mb-5">Available Spare Parts</h1>
        </div>
        <div class="row g-4">
            @foreach ($spareParts as $part)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid fixed-spare-img" src="{{ asset($part->image) }}" alt="{{ $part->name }}">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">{{ $part->name }}</h5>
                            <small class="d-block mb-2">{{ $part->description }}</small>
                            <span class="text-primary fw-bold">Rs {{ number_format($part->price, 2) }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Spare Parts Section End -->

@endsection
