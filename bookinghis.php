<?php 
session_start();
if(!(isset($_SESSION['number'])))
{
    header('Location: login.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>HS</title>
</head>

<body style="background:url(image/PicsArt_02-12-01.55.12.jpg);background-size: cover;">
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <!--  navbar start -->
        <a href="#" class="navbar-brand"><img src="image/favicon.ico" height="32px" width="32px" alt=""> <label
                for="">UTS</label> <label for="">IR Unreserved Ticketing</label></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="profile.php" class="nav-link"><b>HOME</b></a></li>
            </div>
        </ul>


    </nav>
    <!--navbar end-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <label for="" class="text-uppercase "><strong></strong></label><br><p class="text-info"
                     class="text-uppercase small"><b>BOOKING HISTORY</b></p>
            </div>
        </div>
      </div>
      

     <script src="js/jquery.js"></script>  
     <script src="js/bootstrap.min.js"></script>  


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>