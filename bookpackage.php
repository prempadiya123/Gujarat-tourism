<?php
include("connection.php");
include("hf main/header.php");
?>

  <!-- Page Header Start -->
  <div class="page-header">
                <div class="Main">
                    <div class="row">
                        <div class="col-12">
                            <h2>Package Area</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">book package</a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Page Header End -->

            <div class="container">
                <div class="section-header">
                    <h2>Book Your package</h2><br><br>
<div style="text-align:left;">
    <h1 >Terms And Conditions</h1>
    <p>All correspondence(s) in respect of Tours / Travel Service bookings should be addressed to M/s. gujrattourism.com</p>
    <p style="font-style: normal;color:black;font-size: 25px;"><b>Payments:</b></p>
    <p style="text-align:justify;">
        For all the services contracted, certain advance payment should be made to hold the booking, on confirmed basis & the balance amount can be paid either before your departure from your country or upon arrival in GUJRAT but definitely before the commencement of the services. Management personnels hold the right to decide upon the amount to be paid as advance payment, based on the nature of the service & the time left for the commencement of the service.
    </p>
    <p style="text-align:justify;">
        Apart from above in some cases like Special Train Journeys, hotels  bookings during the peak season (X-Mas, New Year), full payment is required to be sent in advance.
    </p>

    <p style="font-style: normal;color:black;font-size: 25px;"><b>Cancellation Policy:</b></p>
    <p style="text-align:justify;">
    In the event of cancellation of tour / travel services due to any avoidable / unavoidable reason/s we must be notified of the same in writing. Cancellation charges will be effective from the date we receive advice in writing, and cancellation charges would be as follows:
        <ul>
            <li>45 days prior to arrival: 10% of the Tour / service cost</li>
            <li>15 days prior to arrival: 25% of the Tour / service cost</li>
            <li>07 days prior to arrival: 50% of the Tour / service cost</li>
            <li>48 hours prior to arrival OR No Show: No Refund</li>
        </ul>  
    </p>
    <p style="font-style: normal;color:black;font-size: 25px;"><b>Our Liabilities & Limitations:</b></p>
    <p style="text-align:justify;">
        if we book package cancel Please note that after the finalization of the Tour/ service Cost, if there are any Hike in entrance fees of monuments / museums, Taxes, fuel cost or guide charges – by Govt of India, the same would be charged as extra.
    </p>
    <p style="text-align:justify;">
        All itineraries are sample itineraries, intended to give you a general idea of the likely trip schedule. Numerous factors such as weather, road conditions, the physical ability of the participants etc. may dictate itinerary changes either before the tour or while on the trail. We reserve the right to change any schedule in the interest of the trip participants' safety, comfort & general well being.
    </p>
    <p style="text-align:justify;">
        We shall not be responsible for any loss, injury or damage to person, property, or otherwise in connection with any accommodation, transportation or other services, resulting – directly or indirectly – from any act of GOD, dangers, fire, accident, breakdown in machinery or equipment, breakdown of transport, wars, civil disturbances, strikes, riots, thefts, pilferages, epidemics, medical or custom department regulations, defaults, or any other causes beyond our control.
    </p>
    <p style="text-align:justify;">
        We do not have any insurance policy covering the expenses for accident, sickness, loss due to theft, or any other reasons. Visitors are advised to seek such insurance arrangements in their home country. All baggages & personal property/s at all times are at the client's risk.
    </p>
    <p style="text-align:justify;">
        <b>Please Note :</b> We will not be responsible for any costs arising out of unforeseen circumstances like landslides, road blocks, bad weather, etc.
    </p>

</div><br>
</div>
</div> 

  <!DOCTYPE html>
  <h3 style="text-align:left;">Make payment</h3><br>
  <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/77e253a4dd.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/bookpackaeg.css">
</head>
<body >
<div class="row">
  <div class="col-75">
    <div class="main">
      <form method="post" >
      <?php
        
            if(isset($_POST['btn_package'])) 
            {
                $q = "insert into bookpackage(id, firstname, email, address, city, state, zip, cardname,
                 cardnumber, expmonth, expyear, cvv, sameadr) values (NULL, '".$_POST['firstname']."', '".$_POST['email']."', 
                 '".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zip']."','".$_POST['cardname']."',
                 '".$_POST['cardnumber']."','".$_POST['expmonth']."','".$_POST['expyear']."','".$_POST['cvv']."','".$_POST['sameadr']."');";
                                                            
                $result = mysqli_query($con, $q);
                if($result) {
                    echo "<script>alert('Your data enterd successfully!!!'); </script>";
                } else {
                    echo "<script>alert('something went wrong'); </script>";
                }
            }
     ?>                    
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-main">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name of Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>      
        </div>
        <label>
          <input type="checkbox" checked="checked" value="agree to it" name="sameadr"> agree with above terms & conditions
        </label>
        <input type="submit" name="btn_package" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html> 

 <!-- book package end -->


 <?php
    include('hf main/footer.php');
?>

       