<?php

$title = "Photography_hersbyco | _mengw_";
$page = "Photography_hersbyco";
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
  padding: 0 4px;
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

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

</style>
</head>
 
 <body>
<!-- image header -->
<header class="hersheader mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white"> Hersbyco </h1>
            </div>
        </div>
    </div>
</header>

<body>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
   	<img class="images" src="./pictures/hersbyco/DSC_3977.jpg" width="400" height="550">
    <img class="images" src="./pictures/hersbyco/DSC_4098.jpg" width="400" height="550">
    <img class="images" src="./pictures/hersbyco/DSC_4021.jpg" width="400" height="550">
  </div>
</div>
<div class="row">
  <div class="column">
    <img class="images" src="./pictures/hersbyco/DSC_4065.jpg" width="400" height="550">
    <img class="images" src="./pictures/hersbyco/DSC_4138.jpg" width="400" height="550">
    <img class="images" src="./pictures/hersbyco/DSC_4123.jpg" width="400" height="550">
  </div>  
</div>

</body>
</html>
