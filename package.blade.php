<!DOCTYPE html>
<html>
<head>
    <title>Eimie.Travel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrapHome.css">
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
               <div class="panel-body" style="padding-left: 1000px;">
                    You are logged in!
               </div>

       <div class="container">

        <h1 class="my-4">Packages <small>Grab the Promo</small></h1>

        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/Florianopolis.jpg" style="width: 700px; height: 300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Sao Paulo, Brazil</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="{{ url('/sao') }}">View Packages <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
  

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/japan.jpg" style="width: 700px; height: 300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Japan</h3>
                <p>Japan (Japanese: 日本 Nippon [nip̚põ̞ɴ] or Nihon [nihõ̞ɴ]; formally 日本国 About this sound Nippon-koku or Nihon-koku, means "State of Japan") is a sovereign island nation in Eastern Asia. Located in the Pacific Ocean, it lies off the eastern coast of the Asia Mainland (east of China, Korea, Russia) and stretches from the Sea of Okhotsk in the north to the East China Sea and Taiwan in the southwest.</p>
                <a class="btn btn-primary" href="{{ url('/japan') }}">View Packages<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/par.jpg" style="width: 700px; height: 300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Paris,France</h3>
                <p>Paris (French: [paʁi] ( listen)) is the capital and most populous city of France. It has an area of 105 square kilometres (41 square miles) and a population in 2013 of 2,229,621 within its administrative limits.[3] The city is both a commune and department and forms the centre and headquarters of the Île-de-France, or Paris Region, which has an area of 12,012 square kilometres (4,638 square miles) and a population in 2014 of 12,005,077, comprising 18.2 percent of the population of France.[4]
</p>
                <a class="btn btn-primary" href="{{ url('/paris') }}">View Packages<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/DUBAI-.jpg" style="width: 700px; height: 300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Dubai, UAE</h3>
                <p>Dubai (/duːˈbaɪ/ doo-by; Arabic: دبي‎‎ Dubayy, Gulf pronunciation: [dʊˈbɑj]) is the most populous city in the United Arab Emirates (UAE).[4] It is located on the southeast coast of the Persian Gulf and is the capital of the Emirate of Dubai, one of the seven emirates that make up the country. Abu Dhabi and Dubai are the only two emirates to have veto power over critical matters of national importance in the country's legislature.</p>
                <a class="btn btn-primary" href="{{ url('/dubai') }}">View Packages<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>

        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/flor.jpeg" style="width: 700px; height: 300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Florida, USA</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="{{ url('/florida') }}">View Packages<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>

        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/singapore.jpg" style="width: 700px; height: 300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Singapore</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="{{ url('/singapore') }}">View Packages<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>

        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="img/kor.jpg" style="width: 700px; height: 300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Korea</h3>
                <p>South Korea (About this sound listen), officially the Republic of Korea (ROK; About this sound listen), is a sovereign state in East Asia, constituting the southern part of the Korean Peninsula.
                Highly urbanized at 92%, South Koreans lead a distinctive urban lifestyle; half of them live in high-rises[12] concentrated in the Seoul Capital Area with 25 million residents and the world's sixth leading global city[14] with the fourth largest economy and seventh most sustainable city in the world.</p>
                <a class="btn btn-primary" href="{{ url('/korea') }}">View Packages<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            
        </div>
        <hr>


        
        @endsection
    </div>
    <!-- /.container -->

    <!-- Footer -->
        <!-- /.container -->
    </footer>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</div>




</body>
</html>