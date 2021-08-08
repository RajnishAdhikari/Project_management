<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Five Hotel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Noto+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light text-capitalize main-font-family">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="{{asset('imgs/logo.png')}}" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#room">rooms</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">link</a>
                                <a class="dropdown-item" href="#">Another link</a>
                                <a class="dropdown-item" href="#">Another link</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contacts</a>
                        </li>
                        <li class="nav-item book d-flex align-items-center">
                            <a class="nav-link" href="#">book now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header id="home">
            <div class="small-container">
                <form class="main-font-family text-center">
                    <input type="search">
                    <i class="fas fa-search"></i>
                    <input type="submit" value="Search">
                </form>
                <div class="row">
                    <div class="col-lg-4 col-12 lobster-font-family d-flex align-items-center">
                        <h2>It is a long established fact that a reader will be distracted by the readablen</h2>
                        <button><a href="#">About hotel</a></button>
                    </div>
                </div>
                <div class="h-slider roboto-font-family welcome d-flex align-items-center justify-content-center">
                    <h1 class="text-capitalize">Welcome to <br><span>five hotel</span></h1>
                    <div id="headerslider" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item carousel-three active"></div>
                        <div class="carousel-item carousel-two"></div>
                        <div class="carousel-item carousel-one"></div>
                      </div>
                      <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
                        <i class="fas fa-angle-double-left"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
                        <i class="fas fa-angle-double-right"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="st-rec"></div>
            <div class="rd-rec"></div>
        </header>
        
        <div class="about lobster-font-family">
            <div class="container">
                <h2 class="text-center text-capitalize">About our hotel</h2>
                <img src="{{asset('imgs/shape.png')}}">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h4>A best place to enjoy your life</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered </p>
                        <button><a href="#">Read more</a></button>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="img"></div>
                    </div>
                </div>
                <h2 class="text-capitalize" id="room">rooms & suits</h2>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="img"></div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="block">
                            <div>
                                <img src="{{asset('imgs/shape.png')}}">
                                <strong>$405</strong>
                                <h5>luxury rooms</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                <button><a href="#" class="text-capitalize">Read more</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="gallery lobster-font-family" id="blog">
            <div class="container">
                <h2 class="text-calitalize text-center">Our gallery</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-one"><h4>Relaxed swimming</h4></div>
                        <div class="pic-two"><h4>Spacious Accommodtion</h4></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-three active"><h4>Yoga Wellness</h4></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-four"><h4>Romantic dinner</h4></div>
                        <div class="pic-five"><h4>Apa & Wellness</h4></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slider main-font-family">
            <h2 class="text-center text-capitalize main-font-family">what our clients say</h2>
          <div id="slideToNext" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slideToNext" data-slide-to="0" class="active"></li>
              <li data-target="#slideToNext" data-slide-to="1"></li>
              <li data-target="#slideToNext" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption d-block">
                    <img src="{{asset('imgs/pic7.jpg')}}">
                  <h5>jone due</h5>
                  <p>It is a long established fact that a reader wil
l be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-block">
                    <img src="{{asset('imgs/pic7.jpg')}}">
                  <h5>jone due</h5>
                  <p>It is a long established fact that a reader wil
l be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-block">
                    <img src="{{asset('imgs/pic7.jpg')}}">
                  <h5>jone due</h5>
                  <p>It is a long established fact that a reader wil
l be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="contact main-font-family text-center">
            <div class="container">
                <h2 id="contact">Get in touch</h2>
                <div class="row">
                    <div class="col-6">
                        <div class="contact-form">
                            <form>
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <input type="text" placeholder="Phone">
                                <textarea placeholder="Message"></textarea>
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="text-right">Book Your Holiday Best for relaxed retreats and cultural encounters</h2>
                        <img src="{{asset('imgs/shape.png')}}">
                    </div>
                </div>
            </div>
            <div></div>
        </div>
        
        <footer class="noto-font-family">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <h3>Useful links</h3>
                            <ul class="text-capitalize">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <h3>Find us</h3>
                            <p>Gongabu,Kathmandu<br>
                                9818363645
                                9191235467
                                fivehotel@gmail.com
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 form">
                            <h3>News letter</h3>
                            <form>
                                <input type="email" placeholder="Email">
                                <input type="submit">
                            </form>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="copyright noto-font-family">
            <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/">Free Html Templates</a></p>
        </div>
        
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            });
        </script>
    </body>
</html>