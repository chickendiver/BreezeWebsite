<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Breeze Technical Services</title>
  <meta name="description" content="">
  <meta name="author" content="">

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/layout.css">

  
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
    
  <!-- Nav bar layout -->
  

  <!-- Primary Page Layout -->
    
  <div class = "band nav">
      <div class="container">
          <div class="row">
            <div class="four columns">
                <picture>
                   <!--<source media="(min-width: 64em)" src="./images/high-res_logo.png">
                   <source media="(min-width: 37.5em)" src="./images/med-res_logo.png">
                   <source src="./images/low-res_logo.png">-->
                   <img src="./images/low-res_logo.png" alt="Breeze Technical Services">
                </picture>
            </div>
            <div class = "six columns">
                <div class = "list nav">
                    <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class "two columns">
                <h5>(780) 700 1070</h5>            
            </div>
          </div>
      </div> <!-- End Container -->
  </div> <!-- End Band -->
    
    

  <div class = "band landing">
      <div class="container">
          <div class = "row">
            <div class="seven columns">
              <picture>
                <img src="images/landing_image.jpg">
              </picture>
            </div>
            <div class="five columns">
                <div class = "text container">
                    <h3>Get Comfortable.</h3>
                    <h4>This is going to be a breeze.</h4>
                </div>
            </div>
        </div>
      </div> <!-- End Container -->
  </div> <!-- End Band -->
    
    
  <div class = "band services">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h5>Let's Get Started.</h5>
          </div>
          <div class = "twelve columns">
            <div class = "button_group services">
                    <a class="button button-primary" href="#">Setup</a>
                    <a class="button button-primary" href="#">Lessons</a>
                    <a class="button button-primary" href="#">Repairs</a>
            </div>
          </div>
          </div>
        </div> <!-- End Row -->
      </div> <!-- End Container -->
  </div> <!-- End Band -->
    
    
  <div class = "band about">
      <div class="container">
        <div class="row">
          <div class= "twelve columns">
            <h5>Who We Are</h5>
          </div>
        </div>
        <div class="row" style = "margin-right:auto; margin-left:auto;">
          <div class = "six columns" style = "text-align:center;">
              <div class = "bio picture" style = "padding-left:10px; padding-right:10px;">
                <picture>
                    <img src="./images/chase_bio.jpg" alt="Breeze Technical Services" >
                </picture>
                <h1>Chase</h1>
                <p>Bio:</p>
                <p>- Sofware Engineer</p>
                <p>- Ex Apple Genius</p>
                <p>- Sofware Engineer</p>
                <p>- Patient</p>
                <p>- Snowboard instructor</p>  

              </div> 
            </div>
            <div class="six columns" style = "text-aligh:center;">
              <div class = "bio picture" style = "padding-left:10px; padding-right:10px;">
                <picture>
                    <img src="./images/bradley_bio.jpg" alt="Breeze Technical Services" >
                </picture>
                  
                  <!-- Don't foget to remove this margin when images are fixed -->
                <h1 style = "margin-top: 90px;">Bradley</h1>
                <p>Bradley's Short Bio</p>
              </div>
          </div>
        </div> <!-- End Row -->
      </div> <!-- End Container -->
  </div> <!-- End Band -->
    
    
  <div class = "band contact">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <h5>Contact Us</h5>
          </div>
        </div>

        <div class = "row">
          <div class="twelve columns">
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
        
            <form method="post" action="process.php">
                      <label for="name">Name: <span class="required">*</span></label>
                      <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required="required" <?php echo($sr && !$cr['form_ok'] ? 'autofocus="autofocus"' : '')?> />
                       
                      <label for="email">Email Address: <span class="required">*</span></label>
                      <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required="required" />
                       
                      <label for="telephone">Telephone: </label>
                      <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                       
                      <label for="contactType">Preffered Mode of Contact: </label>
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
