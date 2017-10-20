@extends('master')
@section('title', 'RMIT Services and Support')
@section('content')
    <div class="container">
        <div class="content">
            <center>
                <div class="title">
                    <h1>RMIT UNIVERSITY</h1>
                    <h2>Service & Support</h2>
                </div>
            </center>
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://localhost/assignment1_final/public/css/rmit1.jpg">
                </div>

                <div class="item">
                    <img src="http://localhost/assignment1_final/public/css/rmit2.jpg">
                </div>

                <div class="item">
                    <img src="http://localhost/assignment1_final/public/css/rmit3.jpg">
                </div>
            </div>
        </div>

        <div id="content-home">
            <center>
            <p>Information Technology Services (ITS) provides RMIT University with
                <br>
                information and communication technology in support of RMIT’s research, learning teaching and administrative activities.
            </p>
            <br>
            <p>
                ITS operates ICT services on behalf of RMIT students, staff and research partners.
                <br>
                This includes IT Strategy and Account Management, IT Security and Risk Management, End User Services
                <br>
                Audio Visual Services, Network and Applications Services and Solution Delivery.
            </p>
            </center>
        </div>
    </div>
    </div>
@endsection