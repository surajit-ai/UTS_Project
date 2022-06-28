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

<body class="bg-info">
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <!--  navbar start -->
         <label
                for=""></label> <label for=""><u><b>Frequently Asked Question</b></u></label></a></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="loginhomehelp.php" class="nav-link"><b>BACK</b></a></li>
        </ul>


    </nav>
    <!--navbar end-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container pbox  text-light pd mb-3">
                  <button class="collapsible"><p class="text-primary">Who can use the utsonmobile application?</p></button>
                  <div class="content">
                    <p class="text-dark">The services are not available to persons under the age of 17 or to anyone previously suspended or removed from the services by Indian Railways. By accepting the Terms & Conditions or by otherwise using the Services or the Site, you represent that You are at least 17 years of age and have not been previously suspended or removed from the Services. You represent and warrant that you have the right, authority, and capacity to enter into this Agreement and to abide by all the terms and conditions of this Agreement. You shall not impersonate any person or entity, or falsely state or otherwise misrepresent identity, age or affiliation with any person or entity.</p>
                  </div>
                  <br>
                  <button class="collapsible"><p class="text-primary"> How to download the utsonmobile application?</p></button>
                  <div class="content">
                    <p class="text-dark">The Android version of the application can be downloaded from Google Play Store.

                        The Windows version of the application can be downloaded from the Windows Store and the iOS version can be downloaded from the Apple store. 
                        The application is free to download.</p>
                  </div>
                  <br>
                  <button class="collapsible"><p class="text-primary">Is it mandatory to register for using the utsonomobile system?</p></button>
                  <div class="content">
                    <p class="text-dark">Yes, it is mandatory to register.</p>
                  </div>
                  <br>
                  <button class="collapsible"><p class="text-primary">What are the pre-requisite to avail the utsonmobile application servive</p></button>
                  <div class="content">
                    <p class="text-dark">The passenger should have Android/Windows/iPhone smartphone only. The phone should have minimum GPRS connectivity to use the services. The passenger should have money in their Railway Wallet (R-Wallet) or use Net-banking/Debit/Credit card facility. In order to book paperless tickets, the smart phone should be GPS enabled.</p>
                  </div>
                  <br>
                  <button class="collapsible"><p class="text-primary"> Where to do registration?</p></button>
                  <div class="content">
                    <p class="text-primary">Registration can be done through mobile phone application or website (https://www.utsonmobile.indianrail.gov.in).

                        The passenger first will get registered by providing his/her mobile number, name, password, gender and date of birth.
                        
                        After successful registration, an SMS will be sent to the user with login-id and password and zero-balance R-Wallet will be created without any additional cost.</p>
                  </div>
                  <br>
                  <button class="collapsible"><p class="text-primary">  Is it necessary to top up the inbuilt R-Wallet?</p></button>
                  <div class="content">
                    <p class="text-dark">No, it is not mandatory to top-up the R-Wallet. The application is integrated with the other payment options like Net-banking/Debit card/Credit card/UPI/Wallets through Paytm, MobiKwik , FreeCharge payment aggregators.</p>
                  </div>
                   <br>
                  <button class="collapsible"><p class="text-primary">  Can a ticket be booked inside the station premises?</p></button>
                  <div class="content">
                    <p class="text-dark">According to the Railway commercial rule, a passenger should enter the Railway premises after purchasing the ticket. Hence, booking a ticket using utsonmobile application inside the station premises is not permissible.</p>
                  </div>
                  <br>
                  <button class="collapsible"><p class="text-primary">  Is GPS necessary while booking a ticket through utsonmobile application?
                        </p></button>
                  <div class="content">
                    <p class="text-dark">GPS is necessary to book the ticket in Paperless mode. For Paper based ticket, the usage of GPS is not mandatory.</p>
                  </div>
                  <br>
                  <button class="collapsible"><p class="text-primary">+ What are the types of ticket that can be bought from the utsonmobile application?
                  </p></button>
            <div class="content">
              <p class="text-dark">Three types of ticket can be bought such as Journey ticket, Season ticket and Platform ticket (both Paperless and Paper based).</p>
            </div>
                  <script>
                  var coll = document.getElementsByClassName("collapsible");
                  var i;
                  
                  for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var content = this.nextElementSibling;
                      if (content.style.maxHeight){
                        content.style.maxHeight = null;
                      } else {
                        content.style.maxHeight = content.scrollHeight +"px";
                      } 
                    });
                  }
                  </script>
                             
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