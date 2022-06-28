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
    <title>UTS R-wallet</title>
</head>

<body style="background:url(image/PicsArt_02-12-01.55.12.jpg);background-size: cover;">
    <nav class="navbar navbar-expand-sm navbar-info bg-white">
        <!--  navbar start -->
        <a href="#" class="navbar-brand"><img src="image/favicon.ico" height="32px" width="32px" alt=""> <label
                for="">UTS</label> <label for="">IR Unreserved Ticketing</label></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="profile.php" class="nav-link"><b>HOME</b></a></li>
        </ul>


    </nav>
    <!--navbar end-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <label for="" class="text-uppercase "><b>RAILWAY WALLET</b><strong></strong></label><br><p class="text-danger"
                     class="text-uppercase small"> <b>RWALLET MONEY CAN NOT BE TRANSFERRED.</b></p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
                <a href="rechargwallet.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/wallet.ico" height="32px" width="32px"
                                alt=""> recharge rwallet</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="current.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/rwallet.png" height="32px" width="32px"
                                alt=""> current balance</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="rechargehis.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/history.png" height="32px" width="32px"
                                alt=""> recharge history</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="surrender.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/flag.png" height="32px" width="32px"
                                alt=""> surrender wallet</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>

        </div>
      </div>
      <center><span>Centre For Railway Information System(CRIS)</span></center>

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