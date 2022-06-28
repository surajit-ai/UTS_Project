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
    <title>UTS  R R-wallet</title>
</head>

<body style="background:url(image/PicsArt_02-12-01.55.12.jpg);background-size: cover;">
    </nav>
    <!--navbar end-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container box  text-light pd mb-3">
                    <br>
                      <div class="row">
                           <div class="col-md-12">
                             <div class="container jbox  text-center pd mb-3">
                             <label for="" class="text"><a href="#"><img src="image/right.jpg" height="20px"
                                width="20px" alt=""></a><a class="text-dark">  Railway Wallet</a></label>
                                <br>
                                <label for="" class="text"><a href="#"></a><a class="text-dark">  Wallet balance:</a></label>
                                <br>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="wallet.php">
                                        <div class="container   text-info pd mb-3">
                                            <p class="text-right ">OK</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
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