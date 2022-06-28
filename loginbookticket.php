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
    <title>UTS Mobile Ticketing</title>
</head>

<body style="background:url(image/PicsArt_02-12-01.55.12.jpg);background-size: cover;">
    <nav class="navbar navbar-expand-sm navbar-info bg-white">
        <!--  navbar start -->
        <a href="#" class="navbar-brand"><img src="image/favicon.ico" height="32px" width="32px" alt=""> <label
                for="">UTS</label> <label for="">IR Unreserved Ticketing</label></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a href="profile.php" class="nav-link"><b>HOME</b></a></li>
          </ul>

            </div>
        </ul>


    </nav>
    <!--navbar end-->
    <marquee direction="left" behavior="scroll" scrolldelay="120" style="color: whitesmoke; font-weight: bolder; background-color: #ad0d0d;" onmouseover="this.stop();" onmouseout="this.start();">
                Indian Railways offers 5% bonus on recharge of Railway Wallet (R-Wallet) with effect from 24.05.2020. 
            </marquee>
      <div class="container-fluid">
            <div class="row ">
                   <div class="col-md-12 text-center mb-3">
                   <label for="" class="text-uppercase "><strong></strong></label><br><p class="text-info"
                     class="text-uppercase small"><b>BOOK TICKETS</b> </p>
                  </div>
            </div>
            <div class="row ">
                  <div class="col-xl-2 col-lg-3 col-mb-4 col-sm-6">
                        <a href="bookandtravelH.php">
                              <div class="container sbox text-light pd mb-3 ml-auto">
                                 NORMAL BOOKING
                                 <img src="image/ticket.png" height="80px" width="80px" alt="">
                              </div>
                        </a>
                   </div>
                  <div class="col-xl-2 col-lg-3 col-mb-4 col-sm-6">
                         <a href="bookandtravelH.php">
                                <div class="container sbox  text-light pd mb-3">
                                 QUICK BOOKING<br>
                               <img src="image/charge.png" height="80px" width="80px" alt="">
                              </div>
                         </a>
                   </div>
       
                  <div class="col-xl-2 col-lg-3 col-mb-4 col-sm-6">
                        <a href="bookandtravelH.php">
                              <div class="container sbox  text-light pd mb-3">
                                   PLATFORM TICKET<br>
                                  <img src="image/trian_PNG16662.png" height="80px" width="80px" alt="">
                              </div>
                        </a>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-mb-4 col-sm-6">
                        <a href="bookandtravelH.php">
                              <div class="container sbox  text-light pd mb-3">
                                     SEASON TICKET<br>
                                     <img src="image/home.png" height="80px" width="80px" alt="">
                              </div>
                        </a>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-mb-4 col-sm-6">
                        <a href="qrH.php">
                              <div class="container sbox  text-light pd mb-3">
                                   QR BOOKING<br>
                                  <img src="image/hand.png" height="80px" width="80px" alt="">
                              </div>
                        </a>
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