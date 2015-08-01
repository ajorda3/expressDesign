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

    <link rel="shortcut icon" href="/ico/titleIcon.jpg">
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
                        <a class="navbar-brand hidden-sm hidden-xs" href="index.html"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="scroll-link" href="#features">Zakaj mi</a></li>
                            <!--<li><a class="scroll-link" href="#how-it-works">How it works</a></li>-->
                            <li><a class="scroll-link" href="#pricing">Cenik</a></li>
                            <li><a class="scroll-link" href="#about-us">Primeri</a></li>
                            <li><a class="scroll-link" href="#testimonials">O nas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1 class="wow fadeInLeftBig">Design <strong>Express</strong></h1>
                            <div class="description wow fadeInLeftBig">
                                <p>Smo edini, ki lahko nudimo kvalitetno oblikovanje za <strong>skromen</strong> mesečni denat</p>
                                <p>Denar, ki ste ga do sedaj investirali za oblikovanje, lahko sedaj porabite <strong>pametneje</strong>.</p>
                                <p>Dovolite, da tečemo <strong>vzporedno</strong> z vami!</p>
                            </div>
                            <div class="top-big-link wow fadeInUp">
                                <a class="btn btn-link-1 scroll-link" href="#pricing">Cenik</a>
                                <a class="btn btn-link-2 scroll-link" href="#features">Izvedi več</a>
                            </div>
                        </div>

                        <div class="col-sm-5 form-box wow fadeInUp">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#register_tab" aria-controls="register_tab" role="tab" data-toggle="tab">Registracija</a></li>
                                <li role="presentation"><a href="#login_tab" aria-controls="login_tab" role="tab" data-toggle="tab">Prijava</a></li>
                            </ul>


                            <div class="tab-content">
                            <!-- REGISTER FORM -->
                                <div role="tabpanel" class="tab-pane active" id="register_tab">
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Registracija</h3>
                                                <p>Registriraj se in oddaj svojo naročilnico!</p>
                                            </div>
                                            <div class="form-top-right">
                                                <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <form role="form" action="/auth/register" method="post">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-first-name">Ime</label>
                                                    <input type="text" name="name" placeholder="Ime ..." class="form-first-name form-control" id="form-first-name" value="{{ old('name') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-email">E-naslov</label>
                                                    <input type="text" name="email" placeholder="Email ..." class="form-email form-control" id="form-email" value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-password">Geslo</label>
                                                    <input type="password" name="password" placeholder="Geslo  ..." class="form-first-name form-control" id="form-password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-password">Ponovi geslo</label>
                                                    <input type="password" name="password_confirmation" placeholder="Ponovi geslo  ..." class="form-first-name form-control" id="form-password">
                                                </div>
                                                <button type="submit" class="btn">Registracija</button>
                                            </form>
                                        </div>
                                </div>

                                <!-- LOGIN FORM -->
                                <div role="tabpanel" class="tab-pane" id="login_tab">
                                       <div class="form-top">
                                            <div class="form-top-left">
                                                 <h3>Prijava</h3> 
                                                 <p>Prijavi se v sistem ...</p>
                                            </div>
                                            <div class="form-top-right">
                                                <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <form role="form" action="/auth/login" method="post">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-email">E-naslov</label>
                                                    <input type="email" name="email" placeholder="Email ..." class="form-email form-control" id="form-email" value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-password">Geslo</label>
                                                    <input type="password" name="password" placeholder="Password ..." class="form-email form-control" id="form-password">
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-about-yourself">Password</label>
                                                    <input type="password" name="password" placeholder="Password ..." class="form-email form-control" id="form-password">
                                                </div>
                                                -->
                                                <button type="submit" class="btn">Prijava</button>

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
                        <h2>Zakaj ravno mi?</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 features-box features-box-gray wow fadeInUp">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-eye-outline"></span>
                        </div>
                        <h3>Vizija</h3>
                        <p>Na razpoloago v kriznih trenutki (rešitve čez NOČ)</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-thumbs-ok"></span>
                        </div>
                        <h3>Poslanstvo</h3>
                        <p>Zaupanje strank, kakovost, strokovnost, zmožnost izhajanja iz že obstoječe
                        celostne podobe, re-design</p>
                    </div>
                    <div class="col-sm-4 features-box features-box-gray wow fadeInUp">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-cog-outline"></span>
                        </div>
                        <h3>Odzivnost</h3>
                         <p>Naše storite vam nudijo zanesljivost, lojalnost in hitro odzivnost po designu.</p>
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col-sm-4 features-box wow fadeInUp">
                        <div class="features-box-icon">
                            <span aria-hidden="true" class="typcn typcn-video-outline"></span>
                        </div>
                        <h3>Profesionalnost</h3>
                        <p>Stranka ima v naši bazi shranjene značilnosti njene celostne podobe podjetjaljene barve in ostale značilnosti)</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
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
                -->
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Naroči sedaj</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- More features -->
        <div class="more-features-container section-container section-container-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 more-features section-description wow fadeIn">
                        <h2>KAKO LAHKO ZAGOTOVIMO HITER IN PROFESIONALEN DESIGN?</h2>
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
                            <h3>1. Baza podatkov</h3>
                            <div class="more-features-box-text-description">
                               Stranka ima v naši bazi shranjene značilnosti njene celostne podobe podjetja
                                (logotipi, fonti, dovoljene barve in ostale značilnosti)
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">
                                <span aria-hidden="true" class="typcn typcn-user"></span>
                            </div>
                            <h3>2. Naročilo prek spleta</h3>
                            <div class="more-features-box-text-description">
                                Preko spleta (računalnik ali pametni telefon) stranka izpolni naročilnico, priloži vsa besedila in željene slike, opiše vse značilnosti in oblike ki jih želi uporabiti!
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">
                                <span aria-hidden="true" class="typcn typcn-user"></span>
                            </div>
                            <h3>3. Komunikacija</h3>
                            <div class="more-features-box-text-description">
                                V 24h urah s stranko skomuniciramo in ji v najkrajšem možnem času pošljemo design.
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
                        <h2>Kaj omogočamo z našo storitvijo?</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    
                    <!--
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
                    -->
                    <div class="col-sm-7 always-beautiful-box wow fadeInLeft">
                        <div class="always-beautiful-box-text always-beautiful-box-text-left">
                            <p class="medium-paragraph">
                                <ul>
                                    <li>24ur/dan Grafično oblikovanje, mesečni najem oblikovalca</li>
                                    <li>Oblikovanje tiskovin za manjša in večja podjetja v 24 urah</li>
                                    <li>Mesečno najemanje profesionalnega oblikovalca za majhen denar
                                        s prilagojenim paketom po strankinih željah oz. potrebi. </li>
                                </ul>
                            </p>                            
                        </div>
                    </div>

                    <div class="col-sm-5 always-beautiful-box wow fadeInUp">
                        <!-- <img src="/img/devices/pc2.png" alt=""> -->
                        <img src="/img/devices/storitev_img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Ključne koristi za stranko -->
        <div class="more-features-container section-container section-container-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 more-features section-description wow fadeIn">
                        <h2>Ključne koristi za stranko!</h2>
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
                            <h3>Ugoden</h3>
                            <div class="more-features-box-text-description">
                               Ugoden po-meri mesečni paket omejen s količino mesečnega oblikovanja, stranka ga izbere predčasno, po potrebi.
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">
                                <span aria-hidden="true" class="typcn typcn-user"></span>
                            </div>
                            <h3>Brez zadržkov</h3>
                            <div class="more-features-box-text-description">
                                Stranka si sedaj lahko brez zadržkov privošči profesionalno oblikovanje svoje ponudbe kljub slabemu finančnemu trgu.   
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">
                                <span aria-hidden="true" class="typcn typcn-user"></span>
                            </div>
                            <h3>Lasten oblikovalec</h3>
                            <div class="more-features-box-text-description">
                                Stranka s paketom dobi svojega oblikovalca, ki ji stoji ob strani celoten in vsak mesec v letu.
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
                        <h2>Dodatne storitve</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-7 always-beautiful-box wow fadeInLeft">
                        <div class="always-beautiful-box-text always-beautiful-box-text-left">
                           
                            <p class="medium-paragraph">
                               Ker vemo, da v prvem mesecu še niste prepričani, kateri paket bi vam ustrezal, vam spremembo paketa v prvem mesecu podarimo!
                               <strong>Cena spremembe paketa pa je v bodoče 20€!</strong> <small>(z že v ključenim ddvjem)</small>

                        </div>
                    </div>
                    <div class="col-sm-5 always-beautiful-box wow fadeInUp">
                        <!-- <img src="/img/devices/pc2.png" alt=""> -->
                        <img src="/img/devices/storitev_img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- How it works -->
      <!--  <div class="how-it-works-container section-container section-container-image-bg">
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
        -->
        <!-- Pricing -->
        <div class="pricing-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pricing section-description wow fadeIn">
                        <h2>CENA in VELIKOST paketov</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pricing-box wow fadeInUp">
                        <div class="pricing-box-inner">
                            <div class="pricing-box-price"><span>€ </span><strong>29</strong><!-- <span> / month</span> --></div>
                            <!-- <h3>S paket</h3> -->
                            <h4><strong>S</strong> paket</h4>
                            <div class="pricing-box-features">
                                <ul>
                                    <li>1 oblikovana stran </li>
                                    <li>Letak, Email-ponudba, plakat</li>
                                    <li>velikost do A2</li>
                                </ul>
                            </div>
                            <div class="pricing-box-sign-up">
                                <a class="btn btn-link-1 scroll-link" href="#top-content">Naroči sedaj</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 pricing-box pricing-box-best wow fadeInDown">
                        <div class="pricing-box-inner">
                            <div class="pricing-box-price">
                                <span>€ </span><strong>58</strong>
                               <!-- <div class="pricing-box-icon">
                                    <span aria-hidden="true" class="typcn typcn-star"></span>
                                </div>
                                -->
                            </div>
                            
                            <h4><strong>M</strong> paket</h4>
                            <div class="pricing-box-features">
                                <ul>
                                    <li>2 oblikovani strani </li>
                                    <li>Letak, Email-ponudba, plakat</li>
                                    <li>velikost do A2</li>
                                </ul>
                            </div>
                            <div class="pricing-box-sign-up">
                                <a class="btn btn-link-1 scroll-link" href="#top-content">Naroči sedaj</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 pricing-box wow fadeInUp">
                        <div class="pricing-box-inner">
                            <div class="pricing-box-price"><span>€ </span><strong>78</strong><span> (- 10%)</span></div>
                            
                             <h4><strong>L</strong> paket</h4>
                            <div class="pricing-box-features">
                                <ul>
                                    <li>3 oblikovane strani </li>
                                    <li>Letak, Email-ponudba, plakat</li>
                                    <li>velikost do A2</li>
                                </ul>
                            </div>
                            <div class="pricing-box-sign-up">
                                <a class="btn btn-link-1 scroll-link" href="#top-content">Naroči sedaj</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-3 pricing-box pricing-box-best wow fadeInDown">
                        <div class="pricing-box-inner">
                            <div class="pricing-box-price">
                               <span>€ </span><strong>99</strong><span> (- 15%)</span>
                               <!-- <div class="pricing-box-icon">
                                    <span aria-hidden="true" class="typcn typcn-star"></span>
                                </div>
                                -->
                            </div>
                            
                            <h4><strong>XL</strong> paket</h4>
                            <div class="pricing-box-features">
                                <ul>
                                    <li>4 oblikovane strani </li>
                                    <li>Letak, Email-ponudba, plakat</li>
                                    <li>velikost do A2</li>
                                </ul>
                            </div>
                            <div class="pricing-box-sign-up">
                                <a class="btn btn-link-1 scroll-link" href="#top-content">Naroči sedaj</a>
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
                        <h2>Naroči sedaj</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p>
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
                            aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Naroči design</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About us -->
        <div class="about-us-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 about-us section-description wow fadeIn">
                        <h2>Primeri oblikovanja znotraj izbranih paketov</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 about-us-box wow fadeInUp">
                        <div class="about-us-photo">
                            <img src="/img/about/primer_plakat.jpg" alt="" data-at2x="/img/about/primer_plakat.jpg">
                           <!-- <div class="about-us-role">Plakat</div> -->
                        </div>
                        <h3>Plakat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                       <!-- <div class="about-us-social">
                            <a href="#"><span class="typcn typcn-social-facebook"></span></a>
                            <a href="#"><span class="typcn typcn-social-dribbble"></span></a>
                            <a href="#"><span class="typcn typcn-social-twitter"></span></a>
                        </div> -->
                    </div>
                    <div class="col-sm-4 about-us-box wow fadeInDown">
                        <div class="about-us-photo">
                            <img src="/img/about/primer_email.jpg" alt="" data-at2x="/img/about/primer_email.jpg">
                           <!--  <div class="about-us-role">E-mail ponudba</div>-->
                        </div>
                        <h3>E-mail ponudba</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p> 
                    </div>
                    <div class="col-sm-4 about-us-box wow fadeInUp">
                        <div class="about-us-photo">
                            <img src="/img/about/primer_letak.jpg" alt="" data-at2x="/img/about/primer_letak.jpg">
                           <!--  <div class="about-us-role">Letak</div> -->
                        </div>
                        <h3>Letak</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>              
                   </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 testimonials section-description wow fadeIn">
                        <h2>O nas</h2>
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
                                            <a href="#">Lorem Ipsum, dolor sit</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                         &copy; <a href="mailto:albin.jordan@gmail.com">Albin Jordan</a>
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