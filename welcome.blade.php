<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eimie.Travel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/one-page-wonder.css">

        <style>     
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #f0fff0;
                padding: 0 30px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .navbar-toggler {
             z-index: 1;
            }
    
            @media (max-width: 576px) {
            nav > .container {
                width: 100%;
        }
    }
        </style>
    </head>
    <body>

        <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <div class="container">
            <a class="navbar-brand" style="color: #20b2aa;">Eimie.Travel</a>
            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" style="padding-left: 550px; "> 
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{url('/package') }}">Package</a>
                        <a href=" {{url ('/flight') }}">Flight</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
    </nav>

    <header><img src="img/plane.jpg" style="position: absolute; left: 0px; top: -70px; width: 100%;">
        <div class="overlay">
            <div class="container" >
                <h1 class="display-1 text-white" style="font-family: rockwell; ">Online Reservation</h1>
                <h6 class="display-4 text-black" style="font-family: poor richard;font-size: 2em;">Hassle-Free at your FingerTips</h6>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 push-md-6">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="img/booking.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 pull-md-6">
                    <div class="p-5">
                        <h2 class="display-4">Book a Flight</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="img/passport.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-5">
                        <h2 class="display-4">Just Send Your Passport </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 push-md-6">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="img/online.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 pull-md-6" style="padding-bottom: 200px;">
                    <div class="p-5">
                        <h2 class="display-4">Online Interaction!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div><br>
        </section>
      
                <div class="inquiries " style="position: absolute; padding-left: 500px;">
                 <img src="img/form.jpg" style="position: absolute; left: -400px; width: 1750px; height:400px;">
                <h4 class="one" style="position: absolute; padding-top: 90px;">Inquiries</h4>
                        <div class="comment">
                            <form action="/comments" method="post">
                        
                                <textarea name="comments" id="comments" cols="5" rows="3" style="font-family:sans-serif;font-size:2em; border-color:#5f9ea0; position: absolute; padding-left: 600px; top: 120px;">
                                </textarea>
                                <input type="submit" class="btn btn-success" value="Submit" style="margin-left: 55 0px; position: absolute; margin-top: 300px">
                            </form>
                         </div><br><br>

                    <div class="contact" style="position: absolute; left: 40px; top: 100px;">
                            <div class="container">
                                <h2>Contact Us</h2>
                                <p><span class="contact"></span> +1(23) 456 7890</p>
                                <h3>Or Email at</h3>
                                <p><span class="email"></span><i>eimie@gmail.com</i></p>
                                <h2>Or Visit our facebook page</h2>
                                <p><span class="fb"></span><i>eimietravel</i></p>
                            </div>
                        </div></center></div>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Footer -->
    <footer class="py-5 bg-inverse" style="margin-top: 400px;">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; La Verdad Christian College <i>Bachelor of Science in Information Systems</i> S.Y 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery Version 3.1.1 -->
    <script src="js/jquery.js"></script>

    <!-- Tether -->
    <script src="js/tether.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
