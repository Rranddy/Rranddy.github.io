<?php

$title = "Photography | _mengw_";
$page = "Photography";
include "includes/header.php";
?>
 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  background:#000000;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  padding: 0 0px;
  text-align:center;
}
.images{
    padding:30px 40px
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; 
  flex: 50%;
  padding: 0 4px;
}

/* hover effect */
.container {
  position: relative;
  width: 30%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 550;
  width: 400;
  opacity: 0;
  transition: .5s ease;
  background-color: #000000;
}

.container:hover .overlay {
  opacity: 0.5;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>
</head>
 
 <body>
<!-- image header -->
<header class="cartheader mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white"> Photography </h1>
            </div>
        </div>
    </div>
</header>

<body>

<!-- Photo Grid -->
<div class="row"> 
  	<div class="container">
    	<img class="images" src="./pictures/affair/DSC_1528.jpg" width="400" height="550">
    	<a href="affair.php" class="overlay">
    		<div class="text">Affair Clothing</div>
  	    </a>
  	</div>
    <div class="container">
    	<img class="images" src="./pictures/glamdiv/DSC_8071.jpg" width="400" height="550">
    	<a href="glamdiv.php" class="overlay">
    		<div class="text">Glamdiv</div>
  	    </a>
  	</div>
    <div class="container">
    	<img class="images" src="./pictures/zalora/DSC_1218.jpg" width="400" height="550">
    	<a href="zalora.php" class="overlay">
    		<div class="text">Zalora Run</div>
  	    </a>
  	</div>
</div>

<div class="row"> 
  	<div class="container">
    	<img class="images" src="./pictures/hersbyco/DSC_4098.jpg" width="400" height="550">
    	<a href="hersbyco.php" class="overlay">
    		<div class="text">hersbyco</div>
  	    </a>
  	</div>
    <div class="container">
    	<img class="images" src="./pictures/outliner/OA1C7006.jpg" width="400" height="550">
    	<a href="outliner.php" class="overlay">
    		<div class="text">Outliner</div>
  	    </a>
  	</div>
    <div class="container">
    	<img class="images" src="./pictures/Pink&Proper/DSC_4553.jpg" width="400" height="550">
    	<a href="pinknproper.php" class="overlay">
    		<div class="text">Pink & Proper</div>
  	    </a>
  	</div>
</div>

<div class="row"> 
  	<div class="container">
    	<img class="images" src="./pictures/CarsNkopi/DSC_5688.jpg" width="400" height="550">
    	<a href="CarsNkopi.php" class="overlay">
    		<div class="text">Cars & Kopi</div>
  	    </a>
  	</div>
    <div class="container">
    	<img class="images" src="./pictures/SouthBronx/DSC_3126.jpg" width="400" height="550">
    	<a href="SouthBronx.php" class="overlay">
    		<div class="text">South Bronx</div>
  	    </a>
  	</div>
    <div class="container">
    	<img class="images" src="./pictures/ohnii/DSC_6796.jpg" width="400" height="550">
    	<a href="ohnii.php" class="overlay">
    		<div class="text">Ohnii</div>
  	    </a>
  	</div>
</div>

</body>
</html>
