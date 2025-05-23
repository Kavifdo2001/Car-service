@extends('layouts.front')
@section('content')
    
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="w-100" src="{{ asset('assets/front/img/carousel-bg-1.jpg') }}" alt="Image">
                  <div class="carousel-caption d-flex align-items-center">
                      <div class="container">
                          <div class="row align-items-center justify-content-center justify-content-lg-start">
                              <div class="col-10 col-lg-7 text-center text-lg-start">
                                  <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                  <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Repair Service Center</h1>
                                  <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                              </div>
                              <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                  <img class="img-fluid" src="img/carousel-1.png" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <img class="w-100" src="{{ asset('assets/front/img/carousel-bg-2.jpg') }}" alt="Image">
                  <div class="carousel-caption d-flex align-items-center">
                      <div class="container">
                          <div class="row align-items-center justify-content-center justify-content-lg-start">
                              <div class="col-10 col-lg-7 text-center text-lg-start">
                                  <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                  <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash Service Center</h1>
                                  <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                              </div>
                              <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                  <img class="img-fluid" src="{{ asset('assets/front/img/carousel-2.png') }}" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>
  <!-- Carousel End -->


  <!-- Service Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="d-flex py-5 px-4">
                      <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                      <div class="ps-4">
                          <h5 class="mb-3">Quality Servicing</h5>
                          <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                          <a class="text-secondary border-bottom" href="">Read More</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="d-flex bg-light py-5 px-4">
                      <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                      <div class="ps-4">
                          <h5 class="mb-3">Expert Workers</h5>
                          <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                          <a class="text-secondary border-bottom" href="">Read More</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="d-flex py-5 px-4">
                      <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                      <div class="ps-4">
                          <h5 class="mb-3">Modern Equipment</h5>
                          <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                          <a class="text-secondary border-bottom" href="">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->


  <!-- About Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 pt-4" style="min-height: 400px;">
                  <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                      <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                      <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                          <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                          <h4 class="text-white">Experience</h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <h6 class="text-primary text-uppercase">// About Us //</h6>
                  <h1 class="mb-4"><span class="text-primary">CarServ</span> Is The Best Place For Your Auto Care</h1>
                  <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                  <div class="row g-4 mb-3 pb-3">
                      <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                          <div class="d-flex">
                              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                  <span class="fw-bold text-secondary">01</span>
                              </div>
                              <div class="ps-3">
                                  <h6>Professional & Expert</h6>
                                  <span>Diam dolor diam ipsum sit amet diam et eos</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                          <div class="d-flex">
                              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                  <span class="fw-bold text-secondary">02</span>
                              </div>
                              <div class="ps-3">
                                  <h6>Quality Servicing Center</h6>
                                  <span>Diam dolor diam ipsum sit amet diam et eos</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                          <div class="d-flex">
                              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                  <span class="fw-bold text-secondary">03</span>
                              </div>
                              <div class="ps-3">
                                  <h6>Awards Winning Workers</h6>
                                  <span>Diam dolor diam ipsum sit amet diam et eos</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->



  @endsection