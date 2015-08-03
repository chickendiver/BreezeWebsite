<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Breeze Technical Services</title>
  <meta name="description" content="An Edmonton based in home technology service company.">
  <!--meta name="author" content="Chase, McCarty, Bradley, Poulette"-->
  <meta name="keywords" content="edmonton, computer, help, training, repair, lessons, service, technology">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="skeleton.css">
  <link rel="stylesheet" href="layout.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> </script>
  <script src="javascript/jqueryFunctions.js"></script>
  <script src="javascript/facebook.js"></script>
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Facebook Conversion Code for breezepixel -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
</script>
<!--noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6028592810836&amp;cd[value]=0.00&amp;cd[currency]=CAD&amp;noscript=1" /></noscript-->
</head>
<body>
    
    
  <div class = "band landing">
      <div class = "nav_stripe">
          <div class="container" style="margin-bottom:0;">
              
                    <picture>
                       <!--<source media="(min-width: 64em)" src="./images/high-res_logo.png">
                       <source media="(min-width: 37.5em)" src="./images/med-res_logo.png">
                       <source src="./images/low-res_logo.png">-->
                       <img src="./images/breeze_logo_low_res_100v3.png" alt="Breeze Technical Services" id="breezeLogo">
                    </picture>
                
                
                    <div class = "list nav">
                        <ul>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                
                <!-- <div class = "three columns"> -->
                    <h5 id="phoneNumber">(587) 782 4441</h5> 
                <!-- </div> -->
              
          </div> <!-- End Container -->
      </div>


    <div class="twelve columns">
        <div class = "text container">
            <h1>Get Comfortable</h1>
            <h2>This is going to be a breeze.</h2>
        </div>

        <picture>
          <img id="heads" src="./images/landing_floating_heads_crop_1.png">
        </picture>
    </div>

     

  </div> <!-- End Band -->


  <div class="band description">
    <div class = "landing gradient">
    </div>
    <div class="container">
      <div class="row">
        <div class="twelve columns" style = "margin-top:15%;">
          <h4>We're more than just tech support.</h4>
        </div>
      </div>
      <div class="row">
            <div class="twelve columns" style = "margin-bottom:12%;">
                <h5>Our mission is to empower every person to feel comfortable, and in control of their technology. We offer service that is a cut above the rest by putting the customer first, and never compromising on quality.</h5>
            </div>
      </div>
      <div class="row">
          <div class="twelve columns" style = "margin-bottom:12%; display:none;">
              <h5>We look forward to seeing you soon.</h5>
          </div>
        </div>
    </div>
  </div>


  
  <div class = "band services" id="services">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h5>We Help With</h5>
          </div>

          <div class="row logos">
            <picture>
              <img class="windows" src = "images/WindowsLogo.png" alt="Windows">
            </picture>

            <picture>
              <img class="apple" src = "images/AppleLogo.png" alt="Apple">
            </picture>

          </div>    
        </div>
      </div> <!-- End Container -->
  </div> <!-- End Band -->

  <div class = "band pricing" id = "pricing">
    <div class = "row" style="text-align: center;">
      <h4>Pricing</h4>
      <h5>Get Help in the Comfort and Conveneience of Your Own Home <br>
      <b>Travel is always included within Greater Edmonton</b></h5>
    </div>

    <div class = "row" style="margin-left: 40px; margin-right:40px; margin-top:5%; margin-bottom:3%;"> 
      <div class = "four columns" > 
        <h1 >$90</h1>
        <!--h2 style = "display: inline;">one visit </h2-->

        <div class = "item" id = "setup">
          <div class = itemContent>
            <h3 style="margin-top:30px;">Setup</h3>
          </div>
        

        <h5 class = "or">OR</h5>

        
          <h3>Repair</h3>
        

        <h5 class = "or">OR</h5>

        
          <h3 style="margin-bottom:28px;">2-Hour Lesson</h3>
        </div>

        <a href="#" onclick="return false" class="popper" data-popbox="pop1">Info</a> 
        <div id="pop1" class="popbox">
          <p>Travel included. </p>
          <p>Additional hourly rates may apply</p>
          <p>Repairs may require offsite service. Parts extra.</p>
        </div>        

      </div>

      <div class = "four columns" id="test">
        <h1>$280</h1>
        <!--h2 style = "display: inline;">six months</h2-->        

        <div class = "item" id = "setup/repair">
          <h3 style="margin-top:30px;">6 Months</h3>
          <h5 style="margin-top:22px;">In-home setup <br>and repair</h5>
          <br>
        

        <h5 class = "or">OR</h5>

        
          <h3 style="margin-bottom:30px;">5 Lessons</h3>
        </div>

        <a href="#" onclick="return false" class="popper" data-popbox="pop2">Info</a> 
        <div id="pop2" class="popbox">
          <p>Travel included. </p>
          <p>Lessons are standard 2 hour lessons </p>
          <p>Monthly memberships are fully transferable</p>
          <p>Memberships include one hour-long repair or setup per month. </p>
          <p>Repairs may require offsite service. Parts extra.</p>
        </div>        

      </div>

      <div class = "four columns">
        <h1>$470</h1>
        <!--h2 style = "display: inline;">twelve months</h2-->        

        <div class = "item" id = "setup/repair">
          <h3 style="margin-top:30px;">12 Months</h3>
          <h5>In-home setup <br>and repair</h5>
          <h5>+ phone support</h5>

        <h5 class = "or">OR</h5>

          <h3 style="margin-bottom:30px;">10 Lessons</h3>
        </div>


        <a href="#" onclick="return false" class="popper" data-popbox="pop3">Info</a> 
        <div id="pop3" class="popbox">
          <p>Travel included. </p>
          <p>Lessons are standard 2 hour lessons </p>
          <p>Monthly memberships are fully transferable</p>
          <p>Memberships include one hour-long repair or setup per month. </p>
          <p>Repairs may require offsite service. Parts extra.</p>
          <p>Phone support is unlimited, and available during regular business hours (9AM - 9PM).</p>
        </div>  

      </div>



    </div>


    <h5 style="text-align: center; margin-bottom: 5%;">Successful referrals get 20% off your next visit <br>
    or a $10 Amazon gift card! </h5>

  </div>

  <div class = "band payment" id = "payment">
    <div class = "row">
        <div class = "twelve columns" id="fullsize" style = "margin-bottom: 10%">
            <picture>
                <img class="mastercard" src = "images/Payment Images/mastercard_no_bg_200.png" alt="Mastercard">
            </picture>
            <picture>
                <img src = "images/Payment Images/visa_no_bg_200.png" alt="Visa">
            </picture>
            <picture>
                <img src = "images/Payment Images/amex_no_bg_200.png" alt="American Express">
            </picture>
            <picture>
                <img src = "images/Payment Images/interac_no_bg_200.png" alt="Interac">
            </picture>
        </div>

        <div class = "twelve columns" id="mobile" style = "margin-bottom: 10%">
            <picture>
                <img src = "images/Payment Images/mastercard_no_bg_200 small.png" alt="Mastercard">
            </picture>
            <picture>
                <img src = "images/Payment Images/visa_no_bg_200 small.png" alt="Visa">
            </picture>
            <picture>
                <img src = "images/Payment Images/amex_no_bg_200 small.png" alt="American Express">
            </picture>
            <picture>
                <img src = "images/Payment Images/interac_no_bg_200 small.png" alt="Interac">
            </picture>
        </div>

      </div>
      
      <div class = "row" style="display:none;">
          <div class = "twelve columns" style = "margin-bottom: 10%;">
            <picture>
                <img src = "images/Payment Images/moneris_payd_no_bg_200.png" alt="Moneris Payd Pro">
                <!-- <img src = "images/Payment Images/square_no_bg_200.png" alt="Square"> -->
            </picture>
        </div>
      </div>
  </div>

  <div class = "band about" id="about">
      <div class="container">
        <div class="row">
          <div class= "twelve columns">
            <h5>Team Leaders</h5>
          </div>
        </div>
        <div class="row" style = "margin-right:auto; margin-left:auto;">
          <div class = "six columns" style = "text-align:center;">
              <div class = "bio picture" style = "padding-left:10px; padding-right:10px;">
                <picture>
                    <img src="./images/chase_breeze_bio.png" alt="Breeze Technical Services" >
                </picture>
                <h3>Chase</h3>
                <p class = "last" style = "text-align:justify;">
                  Chase is an Ex-Apple Genius, computer programmer, and custom computer builder. He’s fixed just about everything, and taught courses for all ages and skill levels. Being just as patient when teaching as he is focused when learning, Chase has brought the wonders of technology into people’s lives for years. 
                </p>  

              </div> 
            </div>
            <div class="six columns" style = "text-aligh:center;">
              <div class = "bio picture" style = "padding-left:10px; padding-right:10px;">
                <picture>
                    <img src="./images/bradley_breeze_bio.png" alt="Breeze Technical Services" >
                </picture>
                <h3>Bradley</h3>
                <p class = "last" style = "text-align:justify;">
                  Bradley graduated from the University of Alberta with a Bachelor of Arts in Psychology and Computing Science. He's worked as tech support, a photographer, and a computer programmer. Bradley’s calm nature and technical proficiency has allowed him to help and relate with people from all walks of life.
                </p>
              </div>
          </div>
        </div> <!-- End Row -->
      </div> <!-- End Container -->
  </div> <!-- End Band -->
    
    
  <div class = "band contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h5>Contact Us</h5>
          </div>
        </div>

        <div class = "row">
          <div class="twelve columns" style = "margin-bottom: 10%;">
            <div id="contact-form">

            <?php
            //init variables
            $cf = array();  //contact form
            $sr = false;    //server response

            if(isset($_SESSION['cf_returndata'])){
              $cf = $_SESSION['cf_returndata'];
              $sr = true;
            }
            ?>

            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
              <li id="info">There were some problems with your form submission:</li>
              <?php 
              if(isset($cf['errors']) && count($cf['errors']) > 0) :
                  foreach($cf['errors'] as $error) :
              ?>
              <li><?php echo $error ?></li>
              <?php
                  endforeach;
              endif;
              ?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
        
            <form method="post" action="php/process.php">
                      <label for="name">Name: <span class="required">*</span></label>
                      <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required="required" <?php echo($sr && !$cr['form_ok'] ? 'autofocus="autofocus"' : '')?> />
                       
                      <label for="email">Email Address: <span class="required">*</span></label>
                      <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required="required" />
                       
                      <label for="telephone">Telephone: </label>
                      <input type="tel" id="telephone" name="telephone" placeholder="(780) 444 4444" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                       
                      <label for="contactType">Preferred Mode of Contact: </label>
                      <select id="contactType" name="contactType" >
                          <option value="email" <?php echo($sr && !$cr['form_ok'] && $cf['posted_form_data']['contactType'] == 'email') ? "selected='selected'" : '' ?>>Email</option>
                          <option value="phone" <?php echo($sr && !$cr['form_ok'] && $cf['posted_form_data']['contactType'] == 'phone') ? "selected='selected'" : '' ?>>Phone</option>
                      </select>
                       
                      <label for="message">Message: <span class="required">*</span></label>
                      <textarea id="message" name="message" placeholder="Enter your message here." required= data-minlength="4"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                       
                      <input type="submit" value="Submit" id="submit-button" />
                      <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
            </div>
          </div>
          </div>
          </div>
        </div> <!-- End Row -->
      </div> <!-- End Container -->
  </div> <!-- End Band -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
