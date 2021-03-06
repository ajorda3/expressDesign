<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Express Design</title>
 
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
   <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        
    <link rel="stylesheet" href="/typicons/typicons.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/form-elements.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media-queries.css">


    <!-- Fonts -->
    <!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">


</head>
<body>
    <!-- Loader -->
        <div class="loader">
            <div class="loader-img"></div>
        </div>
                
        <!-- Top content -->
        <div class="top-content">
            
            <!-- Top menu -->
            <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Marco - Bootstrap Landing Page</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="scroll-link" href="#features">Features</a></li>
                            <li><a class="scroll-link" href="#how-it-works">How it works</a></li>
                            <li><a class="scroll-link" href="#pricing">Price</a></li>
                            <li><a class="scroll-link" href="#about-us">About</a></li>
                            <li><a class="scroll-link" href="#testimonials">Testimonials</a></li>
                            <li><a class="btn btn-link-2" href="#">Button</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1 class="wow fadeInLeftBig">Learn to Code in <strong>1 Month</strong></h1>
                            <div class="description wow fadeInLeftBig">
                                <p>
                                    We have been working very hard to create the new version of our course. 
                                    It comes with a lot of new features, easy to follow videos and images. Check it out now!
                                </p>
                            </div>
                            <div class="top-big-link wow fadeInUp">
                                <a class="btn btn-link-1 scroll-link" href="#pricing">Our prices</a>
                                <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a>
                            </div>
                        </div>

                        <div class="col-sm-5 form-box wow fadeInUp">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#register_tab" aria-controls="register_tab" role="tab" data-toggle="tab">Register</a></li>
                                <li role="presentation"><a href="#login_tab" aria-controls="login_tab" role="tab" data-toggle="tab">Login</a></li>
                            </ul>


                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="register_tab">
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Sign up now</h3>
                                                <p>Fill in the form below to get instant access:</p>
                                            </div>
                                            <div class="form-top-right">
                                                <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <form role="form" action="" method="post">
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-first-name">First name</label>
                                                    <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-last-name">Last name</label>
                                                    <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-email">Email</label>
                                                    <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-about-yourself">About yourself</label>
                                                    <textarea name="form-about-yourself" placeholder="About yourself..." 
                                                                class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                                                </div>
                                                <button type="submit" class="btn">Sign me up!</button>
                                                <div class="form-links">
                                                    <a href="#" class="launch-modal" data-modal-id="modal-privacy">Privacy Policy</a> - 
                                                    <a href="#" class="launch-modal" data-modal-id="modal-faq">FAQ</a>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="login_tab">
                                       <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Login</h3>
                                                <p>Prijavi se v sistem</p>
                                            </div>
                                            <div class="form-top-right">
                                                <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <form role="form" action="/auth/login" method="post">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-email">Email</label>
                                                    <input type="email" name="email" placeholder="Email ..." class="form-email form-control" id="form-email" value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-password">Password</label>
                                                    <input type="password" name="password" placeholder="Password ..." class="form-email form-control" id="form-password">
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-about-yourself">Password</label>
                                                    <input type="password" name="password" placeholder="Password ..." class="form-email form-control" id="form-password">
                                                </div>
                                                -->
                                                <button type="submit" class="btn">Login!</button>

                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Features -->
        <div class="features-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 features section-description wow fadeIn">
                        <h2>What's included</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 features-box features-box-gray wow fadeInUp">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-eye-outline"></span>
                        </div>
                        <h3>Easy To Use</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-thumbs-ok"></span>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 features-box features-box-gray wow fadeInUp">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-cog-outline"></span>
                        </div>
                        <h3>Bootstrap Engine</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 features-box wow fadeInUp">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-video-outline"></span>
                        </div>
                        <h3>Lots Of Videos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 features-box features-box-gray wow fadeInDown">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-device-phone"></span>
                        </div>
                        <h3>Mobile App</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInUp">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-group-outline"></span>
                        </div>
                        <h3>Big Community</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- More features -->
        <div class="more-features-container section-container section-container-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 more-features section-description wow fadeIn">
                        <h2>More features</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 more-features-box wow fadeInLeft">
                        <img src="/img/devices/pc.png" alt="">
                    </div>
                    <div class="col-sm-7 more-features-box wow fadeInUp">
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">
                                <span aria-hidden="true" class="typcn typcn-attachment"></span>
                            </div>
                            <h3>Ut wisi enim ad minim</h3>
                            <div class="more-features-box-text-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">
                                <span aria-hidden="true" class="typcn typcn-user"></span>
                            </div>
                            <h3>Quis nostrud exerci tat</h3>
                            <div class="more-features-box-text-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Always beautiful -->
        <div class="always-beautiful-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 always-beautiful section-description wow fadeIn">
                        <h2>Always beautiful</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 always-beautiful-box wow fadeInLeft">
                        <div class="always-beautiful-box-text always-beautiful-box-text-left">
                            <h3>Ut wisi enim ad minim</h3>
                            <p class="medium-paragraph">
                                Lorem ipsum dolor sit amet, <span class="blue">consectetur adipisicing</span> elit, 
                                sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud. 
                                Exerci tation ullamcorper suscipit <span class="blue">lobortis nisl</span> ut aliquip ex ea commodo consequat. 
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 always-beautiful-box wow fadeInUp">
                        <img src="/img/devices/pc2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- How it works -->
        <div class="how-it-works-container section-container section-container-image-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 how-it-works section-description wow fadeIn">
                        <h2>Ready in 4 steps</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp">
                        <div class="how-it-works-box-icon">
                            <span aria-hidden="true" class="typcn typcn-pencil"></span>
                            <span aria-hidden="true" class="how-it-works-step">1</span>
                        </div>
                        <h3>Sign up</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown">
                        <div class="how-it-works-box-icon">
                            <span aria-hidden="true" class="typcn typcn-ticket"></span>
                            <span aria-hidden="true" class="how-it-works-step">2</span>
                        </div>
                        <h3>Make payment</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp">
                        <div class="how-it-works-box-icon">
                            <span aria-hidden="true" class="typcn typcn-key-outline"></span>
                            <span aria-hidden="true" class="how-it-works-step">3</span>
                        </div>
                        <h3>Log in</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown">
                        <div class="how-it-works-box-icon">
                            <span aria-hidden="true" class="typcn typcn-thumbs-up"></span>
                            <span aria-hidden="true" class="how-it-works-step">4</span>
                        </div>
                        <h3>Start learning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing -->
        <div class="pricing-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pricing section-description wow fadeIn">
                        <h2>Pricing</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 pricing-box wow fadeInUp">
                        <div class="pricing-box-inner">
                            <div class="pricing-box-price"><span>$ </span><strong>12</strong><span> / month</span></div>
                            <h3>Basic</h3>
                            <h4>Freelancer</h4>
                            <div class="pricing-box-features">
                                <ul>
                                    <li>1000 video lessons</li>
                                    <li>Normal speed</li>
                                    <li>500 solved exercises</li>
                                    <li>300MB to save your code</li>
                                    <li>750 hours of support</li>
                                </ul>
                            </div>
                            <div class="pricing-box-sign-up">
                                <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                        <div class="pricing-box-inner">
                            <div class="pricing-box-price">
                                <span>$ </span><strong>35</strong><span> / month</span>
                                <div class="pricing-box-icon">
                                    <span aria-hidden="true" class="typcn typcn-star"></span>
                                </div>
                            </div>
                            <h3>Ultimate</h3>
                            <h4>Best value</h4>
                            <div class="pricing-box-features">
                                <ul>
                                    <li>3000 video lessons</li>
                                    <li>2x speed</li>
                                    <li>2000 solved exercises</li>
                                    <li>500MB to save your code</li>
                                    <li>900 hours of support</li>
                                </ul>
                            </div>
                            <div class="pricing-box-sign-up">
                                <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 pricing-box wow fadeInUp">
                        <div class="pricing-box-inner">
                            <div class="pricing-box-price"><span>$ </span><strong>75</strong><span> / month</span></div>
                            <h3>Platinum</h3>
                            <h4>Big company</h4>
                            <div class="pricing-box-features">
                                <ul>
                                    <li>5000 video lessons</li>
                                    <li>4x speed</li>
                                    <li>4000 solved exercises</li>
                                    <li>900MB to save your code</li>
                                    <li>Unlimited hours of support</li>
                                </ul>
                            </div>
                            <div class="pricing-box-sign-up">
                                <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Call to action -->
        <div class="call-to-action-container section-container section-container-image-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                        <h2>Call to action</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p>
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
                            aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About us -->
        <div class="about-us-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 about-us section-description wow fadeIn">
                        <h2>About us</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 about-us-box wow fadeInUp">
                        <div class="about-us-photo">
                            <img src="/img/about/1.jpg" alt="" data-at2x="/img/about/1.jpg">
                            <div class="about-us-role">Marketing</div>
                        </div>
                        <h3>John Doe</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <div class="about-us-social">
                            <a href="#"><span class="typcn typcn-social-facebook"></span></a>
                            <a href="#"><span class="typcn typcn-social-dribbble"></span></a>
                            <a href="#"><span class="typcn typcn-social-twitter"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-4 about-us-box wow fadeInDown">
                        <div class="about-us-photo">
                            <img src="/img/about/2.jpg" alt="" data-at2x="/img/about/2.jpg">
                            <div class="about-us-role">Designer</div>
                        </div>
                        <h3>Tim Brown</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <div class="about-us-social">
                            <a href="#"><span class="typcn typcn-social-facebook"></span></a>
                            <a href="#"><span class="typcn typcn-social-dribbble"></span></a>
                            <a href="#"><span class="typcn typcn-social-twitter"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-4 about-us-box wow fadeInUp">
                        <div class="about-us-photo">
                            <img src="/img/about/3.jpg" alt="" data-at2x="/img/about/3.jpg">
                            <div class="about-us-role">Developer</div>
                        </div>
                        <h3>Sarah Red</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <div class="about-us-social">
                            <a href="#"><span class="typcn typcn-social-facebook"></span></a>
                            <a href="#"><span class="typcn typcn-social-dribbble"></span></a>
                            <a href="#"><span class="typcn typcn-social-twitter"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 testimonials section-description wow fadeIn">
                        <h2>Testimonials</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp">
                        <div role="tabpanel">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                    <div class="testimonial-image">
                                        <img src="/img/testimonials/1.jpg" alt="" data-at2x="/img/testimonials/1.jpg">
                                        <div class="testimonial-icon">
                                            <span aria-hidden="true" class="typcn typcn-pin"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>
                                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                            Lorem ipsum dolor sit amet, consectetur..."<br>
                                            <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                        </p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab2">
                                    <div class="testimonial-image">
                                        <img src="/img/testimonials/2.jpg" alt="" data-at2x="/img/testimonials/2.jpg">
                                        <div class="testimonial-icon">
                                            <span aria-hidden="true" class="typcn typcn-pin"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>
                                            "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                            ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                            lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                            <a href="#">Minim Veniam, nostrud.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3">
                                    <div class="testimonial-image">
                                        <img src="/img/testimonials/3.jpg" alt="" data-at2x="/img/testimonials/3.jpg">
                                        <div class="testimonial-icon">
                                            <span aria-hidden="true" class="typcn typcn-pin"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>
                                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                            Lorem ipsum dolor sit amet, consectetur..."<br>
                                            <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                        </p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab4">
                                    <div class="testimonial-image">
                                        <img src="/img/testimonials/4.jpg" alt="" data-at2x="/img/testimonials/4.jpg">
                                        <div class="testimonial-icon">
                                            <span aria-hidden="true" class="typcn typcn-pin"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>
                                            "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                            ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                            lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                            <a href="#">Minim Veniam, nostrud.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 footer-social">
                        <a href="#"><span class="typcn typcn-social-facebook"></span></a>
                        <a href="#"><span class="typcn typcn-social-dribbble"></span></a>
                        <a href="#"><span class="typcn typcn-social-twitter"></span></a>
                        <a href="#"><span class="typcn typcn-social-google-plus"></span></a>
                        <a href="#"><span class="typcn typcn-social-instagram"></span></a>
                        <a href="#"><span class="typcn typcn-social-pinterest"></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 footer-copyright">
                        &copy; Marco Bootstrap Template by <a href="http://azmind.com">Azmind</a>.
                    </div>
                </div>
            </div>
        </footer>
        
        
        <!-- MODAL: Privacy policy -->
        <div class="modal fade" id="modal-privacy" tabindex="-1" role="dialog" aria-labelledby="modal-privacy-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h2 class="modal-title" id="modal-privacy-label">Privacy policy</h2>
                    </div>
                    <div class="modal-body">
                        <h3>1. Dolor sit amet</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <ul>
                            <li>Easy To Use</li>
                            <li>Awesome Design</li>
                            <li>Cloud Based</li>
                        </ul>
                        <p>
                            Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
                            commodo consequat nostrud tation.
                        </p>
                        <h3>2. Sed do eiusmod</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <h3>3. Nostrud exerci tation</h3>
                        <p>
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
                            commodo consequat nostrud tation.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MODAL: Frequent questions -->
        <div class="modal fade" id="modal-faq" tabindex="-1" role="dialog" aria-labelledby="modal-faq-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h2 class="modal-title" id="modal-faq-label">Frequent questions</h2>
                    </div>
                    <div class="modal-body">
                        <h3>1. Lorem ipsum dolor?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <h3>2. Ut wisi enim ad minim?</h3>
                        <p>
                            Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
                            commodo consequat nostrud tation.
                        </p>
                        <h3>3. Sed do eiusmod tempor?</h3>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <h3>4. Nostrud exerci tation?</h3>
                        <p>
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
                            commodo consequat nostrud tation.
                        </p>
                        <h3>5. Consectetur adipisicing elit?</h3>
                        <p>
                            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Javascript -->
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.backstretch.min.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/retina-1.1.0.min.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/js/placeholder.js"></script>
        <![endif]-->

    </body>
</body>
</html>