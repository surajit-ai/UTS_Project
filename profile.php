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
    <title>home uts</title>
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
            <li class="nav-item"><a href="login.php" class="nav-link"><img src="image/notification.png" height="32px" width="32px"
                  alt=""></a></li>
            <div class="collapse navbar-collapse" id="myMenu">
            <?php 
		           if($_SESSION['number']!=NULL) 
		        {  
   			      echo "user id:".$_SESSION['number']; 
		        } 

	        ?>
            </div>
        </ul>
    </nav>
    <br>
    <!--navbar end-->
          <div>
      <marquee direction="left" style="color: #0000FF; font-weight: bolder;" onmouseover="this.stop();" onmouseout="this.start();">
       Please help Indian Railways and Government of India in moving towards a digitized and cashless economy. Eradicate black money.
      </marquee>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="loginbookticket.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/tt.png" height="32px" width="32px"
                                alt=""> book ticket</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="cancel.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/cross.png" height="32px" width="32px"
                                alt=""> CANCEL ticket</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="bookinghis.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/Hourglass-512.png" height="40px" width="40px"
                                alt=""> booking  history</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="wallet.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/rwallet.png" height="32px" width="32px"
                                alt=""> r-wallet</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="profileuts.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/profile.png" height="32px" width="32px"
                                alt=""> profile</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="showbookH.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/s.png" height="32px" width="32px"
                                alt=""> show booked ticket</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="loginhomehelp.php">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/hel.png" height="32px" width="32px"
                                alt=""> help</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="logout.php?logout">
                    <div class="container dbox  text-light pd mb-3">
                        <label for="" class="text-uppercase "><img src="image/su.png" height="32px" width="32px"
                                alt=""> logout</label>
                         <img src="image/arr.png" height="32px" width="32px" alt="" style="float: right;">
                    </div>
                </a>
            </div>
        </div>
      </div>
    </div>
     <center> <div class="col-m-12">
    <a href="https://www.utsonmobile.indianrail.gov.in/RDS/policy/privacyPortal.html">
    Privacy Policy
    </a> 
    <span>|
    </span>
        <a href="https://www.utsonmobile.indianrail.gov.in/RDS/policy/login.html">
    Terms &amp; Conditions                              
    </a>                                
    </span><br>
    </div></center>
    </div>
    </div>

    <center><span>Version:G.15.2(14.029)</span><br><span>Centre For Railway Information System(CRIS)</span></center> 

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

