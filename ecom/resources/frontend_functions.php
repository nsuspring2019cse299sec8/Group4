<?php
require_once("config.php");

/****************************FRONT END FUNCTIONS************************/
//This codes are used in index.php file

// get products
//5 index.php
function get_products() {

$product = <<<DELIMETER

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake1.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>


<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake2.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>


<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake3.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>


<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake4.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>


<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake5.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake6.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>


<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake7.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img style="height:220px; width:250px" src="../resources/uploads/cake1.jpg" alt=""></a>
        <div class="caption">


            </h4>
            <p>Click The Button "Add to Cart" bellow to Add into your cart </p>
             <a class="btn btn-primary"  href="">Add to cart</a>
        </div>
    </div>
</div>
DELIMETER;

echo $product;

}







//contact.php
//Sending Email function
function send_message() {


    if(isset($_POST['submit_mail'])){

      require '.././public/classes/EmailConfigClass.php';                     //necessary information fetching from EmailConfigClass.php
      require '.././vendor/PHPMailer-master/PHPMailerAutoload.php';						//include phpmailer class


                  $from       =   $_POST['email'];
                  $name       =   $_POST['name'];
                  $body       =   $_POST['message'];
                  $subject    =   $_POST['subject'];
									$file_name  =   $_FILES['file']['name'];
					        $temp_name  =   $_FILES['file']['tmp_name'];


$message = <<<DELIMETER
										  <b> Email From: </b>   	$from    <br/><br/>
										  <b> Full Name: </b>			$name    <br/><br/>
											<b> Subject: </b>    	  $subject <br/><br/>
											<b> Message: </b><br/>  $body
DELIMETER;
echo $message;

                  $mail = new PHPMailer(); 												// Instantiate Class

									// Set up SMTP
                  $mail ->IsSmtp();																// Sets up a SMTP connection
                  $mail ->SMTPDebug = 0; 													// Enable verbose debug output
                  $mail ->SMTPAuth = true; 												// Connection with the SMTP does require authorization
                  $mail ->SMTPSecure = 'ssl';											// Enable TLS encryption, `ssl` also accepted
                  $mail ->Host = ContactUs::SMTP_HOST;						//Fetching data from public\classes\EmailConfigClass.php
                  $mail ->Port = ContactUs::SMTP_PORT;						//Fetching data from public\classes\EmailConfigClass.php
									$mail->Encoding = '7bit';												//Encoding criteria


									// Authentication
                  $mail ->Username = ContactUs::SMTP_USER;   	     //Fetching data from public\classes\EmailConfigClass.php
                  $mail ->Password = ContactUs::SMTP_PASSWORD;	 	//Fetching data from public\classes\EmailConfigClass.php


									// Compose
                  $mail ->SetFrom($from, $name);									// Add an address of the person who will send the email, Name
								  //$mail->addReplyTo($email);
									//$mail->addCC('cc@example.com');
									//$mail->addBCC('bcc@example.com');


									$mail ->Subject = $subject;											//Subject of the Email
									$mail ->Body = $body;														//Body of the Email
						    	$mail->MsgHTML($message);										  	//Full message


                  // Send To
									$mail ->IsHTML(true);													// Set email format to HTML
								  $mail ->AddAddress(ContactUs::MAIL_TO);			  //Fetching data from public\classes\EmailConfigClass.php


									for ($i=0; $i < count($temp_name) ; $i++) {									// Add attachments
										$mail ->addAttachment($temp_name[$i], $file_name[$i] );
									}


                      if(!$mail->Send())
                      {
                            set_message("<p class='bg-danger text-center'> Sorry we could not send your message </p>");
                            redirect("contact.php");

                      } else {

                            set_message("<p class='bg-success text-center'> Your Message has been sent </p>");
                            redirect("contact.php");
                      }





    }
}












 ?>
