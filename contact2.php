<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>Recruitments And Civil Placements</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/normal.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="css/animation.css">

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>

  <script>

    if (/mobile/i.test(navigator.userAgent)) document.documentElement.className += ' w-mobile';

  </script>

  <link rel="shortcut icon" type="image/x-icon" href="favicon2.ico">

  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script><![endif]-->

</head>

<body>

  <div class="fix-header" id="home">

    <div class="w-container">

      <div class="w-nav" data-collapse="medium" data-animation="default" data-duration="400"></div>

    </div>

  </div>

  <div class="fixed-header">

    <div class="w-container container">

      <div class="w-row">



       <!--///////////////////////////////////////////////////////

       // Logo section 

       //////////////////////////////////////////////////////////-->





        <div class="w-col w-col-3 logo">

          <a href="#"><img class="logo" src="images/logo.png" alt="Civil Placements" style="margin-top:5px"></a>

        </div>



        <!--///////////////////////////////////////////////////////

       // End Logo section 

       //////////////////////////////////////////////////////////-->



        <div class="w-col w-col-9">



       <!--///////////////////////////////////////////////////////

       // Menu section 

       //////////////////////////////////////////////////////////-->





          <div class="w-nav navbar" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">

            <div class="w-container nav">

              <nav class="w-nav-menu nav-menu" role="navigation">



                <a class="w-nav-link menu-li" href="index.html#home">HOME</a>
                
                <a class="w-nav-link menu-li"href="index.html#about">ABOUT US</a>
                
                <a class="w-nav-link menu-li" href="index.html#jobseekers">JOB SEEKERS</a>

				<a class="w-nav-link menu-li" href="safety.html">SAFETY</a>

                <a class="w-nav-link menu-li" href="index.html#employers">EMPLOYERS</a>
          
                <a class="w-nav-link menu-li"href="index.html#recruitment">RECRUITMENT PROCESS</a>

                <a class="w-nav-link menu-li" href="index.html#contact">CONTACT</a>

              </nav>

              <div class="w-nav-button">

                <div class="w-icon-nav-menu"></div>

              </div>

            </div>

          </div>





          <!--///////////////////////////////////////////////////////

       // End Menu section 

       //////////////////////////////////////////////////////////-->





        </div>

      </div>

    </div>

  </div>


<?php if(!isset($_POST['submitform'])) { ?>
 <div class="contact-parlex" id="contact">

    <div class="parlex8-back">

      <div class="w-container">

        <div class="wrap">

          <div class="contact-div">

            <h1 class="contact-heading">SUBMIT YOUR RESUME</h1>

            <div class="sepreater"></div>

          </div>

          <p class="contact-para"><strong>Please fill in all the required fields</strong><br>
<div class="w-form">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

             <input class="w-input" type="text" placeholder="First name" name="fname" required="required" style="width:45%;margin-right:8px;margin-bottom:8px;">
             
             <input class="w-input" type="text" placeholder="Surname" name="surname" required="required" style="width:45%;margin-right:8px"><br>

             <input class="w-input" placeholder="Enter your email address" type="text" name="email" required="required" style="width:30%;margin-right:8px;margin-top:10px;margin-bottom:15px">
             
             <input class="w-input" placeholder="Enter your phone number" type="text" name="phone" required="required" style="width:30%;margin-right:8px;margin-top:10px;margin-bottom:15px">
             
             

             <input class="w-input" placeholder="Enter your postcode" type="text" name="postcode" required="required" style="width:29%;margin-top:10px;margin-bottom:15px;"><br>
             
             <label for="email">Click Below Link To Upload Your Resume: Only Word Files Allowed</label> 
             <input class="w-input" placeholder="Upload Resume" type="file" name="resume" required="required" style="width:92%">

          <br>
<img id="captcha" src="securimage/securimage/securimage_show.php" alt="CAPTCHA Image" /><a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage/securimage_show.php?' + Math.random(); return false"><input class="w-button" type="button" value="Choose Another Image" style="margin-left:20px;margin-bottom:15px;"></a><br><input class="w-input" placeholder="Enter captcha" type="text" name="captcha_code" style="width:92%;">

	
    <br>
           <p style="text-align:center"><input class="w-button" type="submit" name="submitform" value="Submit Resume" style="width:300px"></p>

         </form>
              <div class="w-form-done">

              <p>Thank you! Your submission has been received!</p>

            </div>

            <div class="w-form-fail">

              <p>Oops! Something went wrong while submitting the form :(</p>

            </div>

          </div>

        </div>

      </div>

<?php }// end of if
else
        {
?>
 <div class="contact-parlex" id="contact">

    <div class="parlex8-back">

      <div class="w-container">

        <div class="wrap">

          <div class="contact-div">

            <h1 class="contact-heading">SUBMIT YOUR RESUME</h1>

            <div class="sepreater"></div>

          </div>
          
<?php
$fname = $_POST['fname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$postcode = $_POST['postcode'];
$resume = $_FILES['resume']['name'];

 $securipath =  'securimage/securimage/securimage.php';
include_once($securipath);
//echo $securipath;
	$securimage = new Securimage();



$mail_to = 'newthinks@live.com';

$subject = 'Message from a site visitor ';

if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
  echo "Invalid first name. Only letters and white space allowed in name";
  exit;
}

if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
  echo "Invalid surname. Only letters and white space allowed in name";
  exit;
}
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
  exit;
}

if($_FILES['resume']['type']!= "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
{
echo "Invalid file type. Only Word Files are allowed.";
exit;
}

if ($securimage->check($_POST['captcha_code']) == false) {

	  // the code was incorrect

	  // you should handle the error so that the form processor doesn't continue

	  // or you can use the following code if there is no validation or you do not know how

	  echo "The security code entered was incorrect.<br /><br />";

	  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";

	  exit;

	}


$temp = $_FILES['resume']['tmp_name'];
$perm = "resumes/".$_FILES['resume']['name'];

if(!move_uploaded_file($temp,$perm))
{
echo "Resume could not be uploaded";
exit;
}

$body_message = "From: ".$fname." ".$surname."<br>";

$body_message .= "E-mail: ".$email."<br>";

$body_message .= 'Phone: '.$phone."<br>";
$body_message .= 'Postcode: '.$postcode."<br>";


@$headers .= 'From: '.$email."<br>";

$headers .= 'Reply-To: '.$email."<br>";

//echo "<br>fname ".$fname." surname ".$surname." email ".$email." phone: ".$phone." postcode: ".$postcode;
//echo "<br>email body: ".$body_message;
//echo "<br>email headers: ".$headers;

$mail_status = mail($mail_to, $subject, $body_message, $headers);



if ($mail_status) { ?>

	<script language="javascript" type="text/javascript">

		alert('Thank you for the message. We will contact you shortly.');

		window.location = 'index.html';

	</script>

<?php

}//end of message success if

else { ?>

		<script language="javascript" type="text/javascript">

		alert('Message failed. Please, send an email to newthinks@live.com');

		window.location = 'index.html';

	</script>

<?php

}//end of message failed else


?>
 </div>

          </div>

        </div>

      </div>
<?php
}//end of beginning else
?>
<!--///////////////////////////////////////////////////////

       // Footer section 

       //////////////////////////////////////////////////////////-->  



  <div class="footer-parlex">

    <div class="parlex9-back">

      <div class="w-container">

        <div class="wrap">

          <img class="footer-logo" src="images/logo_footer.png" alt="Civil Placements">

          <div class="footer-social">

            <div class="fotter-social-wrap">

              <a href="https://www.facebook.com/"><img class="fotter-social" src="images/social/Facebook.png" alt="52dd249c929b601f5400054c_Facebook.png"></a>

              <a href="https://www.twitter.com/"><img class="fotter-social" src="images/social/Twitter.png" alt="52dd24f2929b601f54000551_Twitter.png"></a>

            </div>

          </div>

          <div>

            <div class="fotter-text">

              <p class="copyright-area">©2015 CIVIL PLACEMENTS. ALL RIGHTS RESERVED</p></div>

          </div>

        </div>

      </div>

    </div>

  </div>



       <!--///////////////////////////////////////////////////////

       // End Footer section 

       //////////////////////////////////////////////////////////-->



  <script type="text/javascript" src="js/jquery.js"></script>

  <script type="text/javascript" src="js/normal.js"></script>

  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

  <script type="text/javascript" src="js/carousels.js"></script>

  <script type="text/javascript" src="js/slider-modernizr.js"></script>

  <script src="js/classie.js"></script>

  <script src="js/portfolio-effects.js"></script>

  <script src="js/toucheffects.js"></script>

  <script src="js/modernizr.js"></script>

  <script src="js/animation.js"></script>



  <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-47585313-1', 'carinotech.com');

  ga('send', 'pageview');



</script>

