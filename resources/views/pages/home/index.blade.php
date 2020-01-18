@extends('layouts.main')

@section('content')

    <!-- Intro Banner
================================================== -->
    <div class="intro-banner dark-overlay big-padding">

        <!-- Transparent Header Spacer -->
        <div class="transparent-header-spacer"></div>

        <div class="container">

            <!-- Intro Headline -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-headline-alt">
                        <h3>National Keke Database</h3>
                        <span>Search for  a keke </span>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-banner-search-form margin-top-95">

                        <!-- Search Field -->
                        <div class="intro-search-field with-autocomplete">
                            <label for="autocomplete-input" class="field-title ripple-effect">Reference Number?</label>
                            <div class="input-with-icon">
                                <input id="autocomplete-input" type="text" placeholder="Keke reference number">
                                <i class="icon-material-outline-search"></i>
                            </div>
                        </div>



                        <!-- Button -->
                        <div class="intro-search-button">
                            <button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-1.html'">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->

            <!--
            <div class="row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                            <strong class="counter">1,586</strong>
                            <span>Jobs Posted</span>
                        </li>
                        <li>
                            <strong class="counter">3,543</strong>
                            <span>Tasks Posted</span>
                        </li>
                        <li>
                            <strong class="counter">1,232</strong>
                            <span>Freelancers</span>
                        </li>
                    </ul>
                </div>
            </div>

            -->

        </div>

        <!-- Video Container -->
        <div class="video-container" data-background-image="images/home-poster.jpg">
            <video loop autoplay muted>
                <source src="media/nadedb.mp4" type="video/mp4">
            </video>
        </div>

    </div>

    <!-- Content
    ================================================== -->
    <!-- Features Jobs -->
    <div class="section padding-top-65 padding-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-35">
                        <h3>Latest Activities</h3>
                        <a href="#" class="headline-link">Browse All Regions</a>
                    </div>

                    <!-- Jobs Container -->
                    <div class="listings-container compact-list-layout margin-top-35">

                        <!-- Job Listing -->
                        <a href="#" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <h3 class="text-yellow strong">FCT</h3>
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Federal Capital Territory</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> Garki </li>
                                            <li><i class="icon-material-outline-business-center"></i> New Registration</li>
                                            <li><i class="icon-material-outline-access-time"></i> 1 Day ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>


                        <!-- Job Listing -->
                        <a href="#" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <h3 class="text-yellow strong">KN</h3>
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Kano State</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> Maitama</li>

                                            <li><i class="icon-material-outline-business-center"></i> Search</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 hours ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>
                        <!-- Job Listing -->


                    </div>
                    <!-- Jobs Container / End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Featured Jobs / End -->


    <!-- Photo Section -->
    <div class="photo-section" data-background-image="images/kekes.jpg">

        <!-- Infobox -->
        <div class="text-content white-font">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2>About<br> National Keke Database.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto dolor odit atque sed modi, distinctio illum earum vel, eveniet quisquam officiis unde, repudiandae minima quaerat, esse dolores nam. Facere, dolorum.</p>
                        <a href="#" class="button button-sliding-icon ripple-effect big margin-top-20">Get Started <i class="icon-material-outline-arrow-right-alt"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Infobox / End -->

    </div>
    <!-- Photo Section / End -->


    <!-- Recent Blog Posts -->
    <div class="section padding-top-65 padding-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-45">
                        <h3>From The Blog</h3>
                        <a href="pages-blog.html" class="headline-link">View Blog</a>
                    </div>

                    <div class="row">
                        <!-- Blog Post Item -->
                        <div class="col-xl-4">
                            <a href="#" class="blog-compact-item-container">
                                <div class="blog-compact-item">
                                    <img src="images/blog-bg.jpg" alt="">
                                    <span class="blog-item-tag">Tips</span>
                                    <div class="blog-compact-item-content">
                                        <ul class="blog-post-tags">
                                            <li>22 July 2018</li>
                                        </ul>
                                        <h3>16 Ridiculously Easy Ways to Find & Keep a Remote Job</h3>
                                        <p>Distinctively reengineer revolutionary meta-services and premium architectures intuitive opportunities.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog post Item / End -->

                        <!-- Blog Post Item -->
                        <div class="col-xl-4">
                            <a href="pages-blog-post.html" class="blog-compact-item-container">
                                <div class="blog-compact-item">
                                    <img src="images/blog-bg.jpg" alt="">
                                    <span class="blog-item-tag">Recruiting</span>
                                    <div class="blog-compact-item-content">
                                        <ul class="blog-post-tags">
                                            <li>29 June 2018</li>
                                        </ul>
                                        <h3>How to "Woo" a Recruiter and Land Your Dream Job</h3>
                                        <p>Appropriately empower dynamic leadership skills after business portals. Globally myocardinate interactive.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog post Item / End -->

                        <!-- Blog Post Item -->
                        <div class="col-xl-4">
                            <a href="pages-blog-post.html" class="blog-compact-item-container">
                                <div class="blog-compact-item">
                                    <img src="images/blog-bg.jpg" alt="">
                                    <span class="blog-item-tag">Marketing</span>
                                    <div class="blog-compact-item-content">
                                        <ul class="blog-post-tags">
                                            <li>10 June 2018</li>
                                        </ul>
                                        <h3>11 Tips to Help You Get New Clients Through Cold Calling</h3>
                                        <p>Compellingly embrace empowered e-business after user friendly intellectual capital. Interactively front-end.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Blog post Item / End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Blog Posts / End -->

    <div class="section border-top padding-top-45 padding-bottom-45">
        <!-- Logo Carousel -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Carousel -->
                    <div class="col-md-12">
                        <div class="logo-carousel">

                            <div class="carousel-item">
                                <a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="images/logo-carousel-01.png" alt=""></a>
                            </div>

                            <div class="carousel-item">
                                <a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="images/logo-carousel-02.png" alt=""></a>
                            </div>

                            <div class="carousel-item">
                                <a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="images/logo-carousel-03.png" alt=""></a>
                            </div>

                            <div class="carousel-item">
                                <a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="images/logo-carousel-04.png" alt=""></a>
                            </div>

                            <div class="carousel-item">
                                <a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="images/logo-carousel-05.png" alt=""></a>
                            </div>

                            <div class="carousel-item">
                                <a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="images/logo-carousel-06.png" alt=""></a>
                            </div>

                        </div>
                    </div>
                    <!-- Carousel / End -->
                </div>
            </div>
        </div>
    </div>

@endsection
