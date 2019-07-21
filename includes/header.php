<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/theme.css">
    <link rel="stylesheet" href="./styles/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-transparent fixed-top">
            <div class="container">
                <a class="navbar-brand" href="./index.php"><img src="./pictures/profilePic.jpg" alt="logo" width="50" height="50" class="rounded-circle">_mengw_</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li>
                        <a class="nav-link" href="Photography.php">Photography</a>
                    </li>
                    <li>
                        <a class="nav-link" href="Videography.php">Videography</a>
                    </li>
                    <li>
                        <a class="nav-link" href="Clients.php"> Clients </a>
                       
                    </li>
                    <li>
                        <a class="nav-link" href="Contact.php"> Contact </a>
                    </li>    
                </ul>
            </div>
        </nav>
    </header>
    
<!-- Bootstrap scripts 
    Placed at the end for faster loading-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- Script to change navbar colour on scroll -->
<script>
  $(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 450);
  });
</script>
</body>
</html>