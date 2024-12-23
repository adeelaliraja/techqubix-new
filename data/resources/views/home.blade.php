<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
@extends('layouts.app')

@section('title', 'TechQubix - Home')
@section('og_title', 'Welcome to TechQubix - Your Web Partner')
@section('meta_description', 'TechQubix is a modern web agency delivering cutting-edge solutions.')
@section('og_description', 'TechQubix delivers tailored websites, SEO, and professional services.')
@section('meta_keywords', 'web agency, web development, SEO, Laravel, TechQubix')
@section('og_image', asset('images/techqubix-og.jpg'))


@section('content')
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated slideInRight">Welcome to
                                    <strong>TechQubix</strong>
                                </p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">Your Partner in Web Excellence</h1>
                                <p>Professional web development and design services tailored to your needs.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong>
                                </p>
                                <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your Business</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 feature-row">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ asset('img/icon/icon-1.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">Award Winning</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ asset('img/icon/icon-2.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">Professional Staff</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ asset('img/icon/icon-3.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">Fair Prices</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ asset('img/icon/icon-4.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">24/7 Support</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- About Start -->
<div class="container-xxl about my-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <p class="fs-5 fw-medium text-primary">About Us</p>
                    <h1 class="display-6 mb-4">The Best Marketing Agency to Improve Your Business</h1>
                    <p class="mb-4">At TechQubix, we specialize in delivering exceptional web solutions that drive growth and success. Our team of experts is committed to crafting designs that resonate with your brand and vision.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('img/icon/icon-5.png') }}" alt="">
                            <h5 class="mb-3">Managed Services</h5>
                            <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('img/icon/icon-2.png') }}" alt="">
                            <h5 class="mb-3">Dedicated Experts</h5>
                            <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Services</p>
            <h1 class="display-5 mb-5">Services that We Offer</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-5.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Technical Virtual Assistant</h4>
                            <p class="mb-0">Leverage our expert virtual assistants to manage your technical tasks, including software configuration, IT support, and data analysis. Streamline operations with professionals you can trust.</p>
                        </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-6.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Web Development</h5>
                            <p>From custom websites to complex applications, we build scalable and responsive web solutions tailored to your business goals.</p>
                        </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-7.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">SEO Optimization</h3>
                            <p>Enhance your online presence with data-driven SEO strategies. We optimize content, improve page rankings, and drive organic traffic to your website.</p>
                        </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-8.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Social Marketing</h4>
                            <p class="mb-0">Grow your brand with targeted digital marketing campaigns. Our solutions cover social media, PPC ads, and content marketing to reach your audience effectively.</p>
                        </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-9.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">B2B Marketing</h4>
                            <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-10.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">E-mail Marketing</h4>
                            <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!--
<section id="portfolio">
    <div class="container">
        <h2>Our Portfolio</h2>
        <div class="row">
            {{-- @foreach($portfolios as $portfolio)
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="{{ asset('images/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                        <h3>{{ $portfolio->title }}</h3>
                        <p>{{ $portfolio->description }}</p>
                    </div>
                </div>
             @endforeach --}}
        </div>
    </div>
</section>

-->
<!-- Project Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Projects</p>
            <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/project-1.jpg') }}" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-1.jpg') }}"
                            data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Data Analytics & Insights</a>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/project-2.jpg') }}" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-2.jpg') }}"
                            data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Marketing Content Strategy</a>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/project-3.jpg') }}" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-3.jpg') }}" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Business Target Market</a>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/project-4.jpg') }}" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('img/project-4.jpg') }}" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Social Marketing Strategy</a>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Quote Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-medium text-primary">Why Choose TechQubix?</p>
                <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                <p><strong>Expert Team:</strong> Skilled professionals delivering high-quality web and virtual assistant solutions.</p>
                <p><strong>Proven Results:</strong> Boost productivity, web traffic, and online visibility with our expert services.</p>
                <p><strong>Dedicated Support:</strong> Reliable support to ensure seamless execution and success.</p>
                <p class="mb-4"><strong>Customized Solutions:</strong> Tailored strategies designed to meet your unique business requirements.</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                    <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </span>
                    <span class="fs-5 fw-medium mx-4">+1 314 390 5211</span>
                </a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Get A Free Quote</h2>
                <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="email" name="email" placeholder="Your Email" required>
                            <label for="mail">Your Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile">
                            <label for="mobile">Your Mobile</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <select name="service" class="form-select" id="service">
                                <option value="tva">Technical Virtual Assisstant</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="social-marketing">Social Marketing</option>
                                <option value="content-marking">Content Marketing</option>
                                <option value="email-marketing">E-mail Marketing</option>
                                <option value="seo">SEO</option>
                                <option value="development">Development</option>
                                <option value="all">All Services</option>
                            </select>
                            <label for="service">Choose A Service</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea name="message" class="form-control" placeholder="Leave a message here" id="message"
                                style="height: 130px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Quote Start -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Team</p>
            <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/team-1.jpg') }}" alt="">
                    <h5>Alex Robin</h5>
                    <span class="text-primary">Founder & CEO</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/team-2.jpg') }}" alt="">
                    <h5>Adam Crew</h5>
                    <span class="text-primary">Co Founder</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/team-3.jpg') }}" alt="">
                    <h5>Boris Johnson</h5>
                    <span class="text-primary">Executive Manager</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/team-4.jpg') }}" alt="">
                    <h5>Robert Jordan</h5>
                    <span class="text-primary">Digital Marketer</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Testimonial</p>
            <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo</p>
                <h5>Client Name</h5>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo</p>
                <h5>Client Name</h5>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-3.jpg') }}" alt="">
                <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo</p>
                <h5>Client Name</h5>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                <img class="mb-4" src="{{ asset('img/testimonial-4.jpg') }}" alt="">
                <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo</p>
                <h5>Client Name</h5>
                <span class="text-primary">Profession</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection
