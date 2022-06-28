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
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <!--  navbar start -->
        <a href="#" class="navbar-brand"><img src="image/logo2.png" height="32px" width="32px" alt=""><a> <label
                for="">UTS</label> <label for="">Mobile Ticketing</label></a></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><img src="image/logo3.png" height="32px"
                width="32px" alt=""></a></li>
        </ul>
    </nav>
    <br>
    <!--navbar end-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container ebox  text-light pd mb-3">
                    <br>
                                <div class="row">
                                    <div class="col-md-12">
                                     <div class="container fbox  text-light pd mb-3">
                                         <label for="" class="text"><a href="#"></a> <p class="text-dark">Current Wallet Balance:</p></label>
                                    </div>
                                        <label for="" class="text"><a href="#"></a> Enter Recharge Amount (in Rs):</label>
                                        <br>
           <input type="amount" placeholder="Enter Amount" name="amount"
            class="form-control"><br>
            <p class="text-success">(Minimum Rs.100,Multiple of Rs.100 and Maximum Wallet balance should be Rs.10,000/-)</p>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="container   text-light pd mb-3">
                        <input type="submit" name="button" value="RECHARGE" class="btn btn-success btn-block"></input>
                        </a>
                       </div>
                        <ul class="navbar-nav ml-auto">
                                 <div class="col-md-12 text-left mb-3">
                                 <li class="nav-item"><a href="wallet.php">[Back to Menu]</a></li>
                                 </div>
                         </ul>
                     </div>
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