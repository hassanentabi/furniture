<?php 
require("conn.php");
require("header.php");
//---------------
if(!isset($_POST['fname']) ||
  !isset($_POST['fphone']) || 
  !isset($_POST['femail']) || 
  !isset($_POST['fmessage']) ) {echo '';}
else{
	
$name=$_POST['fname'];
$phone=$_POST['fphone'];
$email=$_POST['femail'];
$message=$_POST['fmessage'];
	

$sql="INSERT INTO feedback (`full_name` , `phone_number` , `email` , `message` ) VALUES ('$name','$phone','$email','$message')";
	/*
$sql="INSERT INTO feedback  VALUES ('','$name','$phone','$email','$message')";*/
	
$query=mysql_query($sql);
		
}
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>AS</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
               <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13305.724382899301!2d36.279173222228984!3d33.51617566099691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518e0b3084fffff%3A0x1529edace12e4a02!2z2KfZhNiz2YrZgSDYp9mE2K_Zhdi02YLZiiAtIFRoZSBEYW1hc2N1cyBTd29yZA!5e0!3m2!1sen!2s!4v1545160350260" 
               width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            Damascus , Syria
            <br>Beverly Hills, CA 90210
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (+963) 9661-9881
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Saturday - Friday: 9:00 AM to 6:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        
       <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form action="" method="post" name="sentMessage" id="contactForm" novalidate  >
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name="fname" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="fphone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="femail" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="fmessage" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>        
          </form>
        </div>
      </div>
      <!-- /.row -->
 
    </div>

<?php
include("footer.php");
?>
