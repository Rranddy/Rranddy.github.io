<?php
$title = "_mengw_";
$page = "index";
include "includes/header.php";
?>
<html>
<head>
<style>
body{
    background:#000000;
}
.text{
    text-align:center;
    color:#ffffff;
}
</style>
</head>
<body>
<div class="main">
    <!-- Highlight section of the homepage-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" keyboard="true" interval="4250">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="./pictures/TimelineP.jpg" class="img-fluid d-block" alt="photography">
                </a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-xl-right">
                        <h2 class="display-3"> photography </h2>
                        <p><a class="btn btn-lg btn-primary" href="./smartWatch.php" role="button">View Now</a></p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="./pictures/DSC_4454.jpg" class="img-fluid d-block w-100" alt="Videography">
                </a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-xl-right">
                        <h2 class="display-3"> Videography </h2>
                        <p><a class="btn btn-lg btn-primary" href="./DigitalWatch.php" role="button">View Now</a></p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="./Pictures/DSC_2100.jpg" class="img-fluid d-block " alt="Contact">
                </a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-xl-right">
                        <h2 class="display-3">Contact</h2>
                        <p><a class="btn btn-lg btn-primary" href="./analog.php" role="button">Content Now</a></p>
                    </div>
                </div>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<div class="container about mb-4" id="about">
    <h1 class="text-center" style="color:#ffffff"> About Me</h1>

    <div class="row">
        <div class="col-lg-12">
            <p class="text"> "A self taught freelance photographer who fell in love creating visuals through his camera.</br> 
            Been in this industry since 2016, based in Kuala Lumpur"</p>
        </div>
    </div>
</body>
</html>