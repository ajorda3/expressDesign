<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design Express</title>
 
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
                        <a class="navbar-brand hidden-sm" href="index.html"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="btn btn-link-2" href="/auth/logout">Izpis</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h1 class="wow fadeInLeftBig">Pozdravljeni <strong>{{ Auth::user()->name }}</strong></h1>
                            <div class="description wow fadeInLeftBig">
                                <div class="row">
                                    <div class="col-lg-6">Podatki za obveščanje: </div>
                                    <div class="col-lg-6"><strong class="pull-left-md">{{ Auth::user()->email }} </strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">Izbrani mesečni paket: </div>
                                    <div class="col-lg-6"><strong class="pull-left-md"> M </strong></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">Razpoložljiva naročila: </div>
                                    <div class="col-lg-4"><strong class="pull-left-md">2 </strong></div>
                                </div>
                            </div>
                            <!--
                            <div class="top-big-link wow fadeInUp">
                                <a class="btn btn-link-1 scroll-link" href="#pricing">Our prices</a>
                                <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a>
                            </div>
                            -->
                        </div>

                        <div class="col-sm-8 form-box wow fadeInUp">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#register_tab" aria-controls="register_tab" role="tab" data-toggle="tab">Naročilnica</a></li>
                                <li role="presentation"><a href="#login_tab" aria-controls="login_tab" role="tab" data-toggle="tab">Zgodovina naročil</a></li>
                            </ul>


                            <div class="tab-content">

                            <!-- ORDER DESIGN --> 
                                <div role="tabpanel" class="tab-pane active" id="register_tab">
                                        <div class="form-top">
                                            <div class="form-top-left">
                                               <!-- <h3>NAROČILNICA</h3> -->
                                                <p>V spodnja okenca vpišite podatke in besedilo, ki jih želite uporabiti v naročeni oblikovani strani.</p>
                                            </div>
                                            <div class="form-top-right">
                                                <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <form role="form" action="send/order" method="post">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" id="letak" name="orderTypeRadio" value="letak" checked>
                                                        Letak
                                                      </label>
                                                    </div>
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" id="fplakat" name="orderTypeRadio" value="plakat">
                                                        Plakat
                                                      </label>
                                                    </div>
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" id="mail" name="orderTypeRadio" value="mail">
                                                        E-mail ponudba
                                                      </label>
                                                    </div>
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" id="drugo" name="orderTypeRadio" value="drugo">
                                                        Drugo
                                                      </label>
                                                    </div>
                                                </div>
                                                <div class="form-group"><!--  sr-only -->
                                                    <label class="sr-only" for="form-order-goal">Vpišite cilj vaše tiskovine!</label>
                                                    <textarea name="form-order-goal" placeholder="Vpišite cilj vaše tiskovine!" class="form-control" id="form-order-goal"></textarea>    
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-order-group">Vpišite ciljno skupino, komu je oblikovana stran namenjena!</label>
                                                    <textarea name="form-order-group" placeholder="Vpišite ciljno skupino, komu je oblikovana stran namenjena!" class="form-control" id="form-order-group"></textarea>
                                                 </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-order-format">Vaš željen format tiskovine? (izbiro lahko prepustite nam)</label>
                                                    <textarea name="form-order-format" placeholder="Vaš željen format tiskovine? (izbiro lahko prepustite nam)" class="form-control" id="form-order-format"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-order-title">Vpišite NASLOV tiskovine!</label>
                                                    <textarea name="form-order-title" placeholder="Vpišite NASLOV tiskovine!" class="form-control" id="form-order-title"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-order-intro">Vpišite UVODNO besedilo tiskovine!</label>
                                                    <textarea name="form-order-intro" placeholder="Vpišite UVODNO besedilo tiskovine!" class="form-control" id="form-order-intro"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-order-main-text">Vpišite GLAVNO besedilo tiskovine!</label>
                                                    <textarea name="form-order-main-text" placeholder="Vpišite GLAVNO besedilo tiskovine!" class="form-control" id="form-order-main-text"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="form-order-comment">Bi želeli kaj dodati, predlagati ali opomniti?</label>
                                                    <textarea name="form-order-comment" placeholder="Bi želeli kaj dodati, predlagati ali opomniti?" class="form-control" id="form-order-comment"></textarea>
                                                </div>
                                                <button type="submit" class="btn">Pošljite naročilo</button>
                                            </form>
                                        </div>
                                </div>

                                <!-- DESIGN HISTORY --> 
                                <div role="tabpanel" class="tab-pane" id="login_tab">
                                       <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Zgodovina naročil</h3>
                                                <p>S klikom na željen naslov, lahko pregledujete svoja dosedanja naročila:</p>
                                            </div>
                                            <div class="form-top-right">
                                                <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                              @foreach( $orders as $order )
                                              <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading{{ $order->id }}">
                                                  <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $order->id }}" aria-expanded="true" aria-controls="#collapse{{ $order->id }}">
                                                      {{ $order->title }}
                                                    </a>
                                                  </h4>
                                                </div>
                                                
                                                <div id="collapse{{ $order->id }}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                  <div class="panel-body">
                                                   {{ $order->mainText }}
                                                   </div>
                                                </div>
                                              </div>
                                              @endforeach
                                            </div>
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