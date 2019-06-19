<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>contact form</title>
  </head>
  <style media="screen">
h1{
  color:purple;

    animation: textcolor 10s ease-in infinite;
  }
  /* .form-control{
    margin: 10px auto ;
  } */
  h5{
    color: blue;
      margin: 10px auto !important ;
  }
  @keyframes textcolor {
  25%{
    color:yellow;
  }
   50%{
     color:blue;
   }
   75%{
     color:orange;
   }
   100%{
     color: green;
   }
  }

    .form{
      border: 2px solid blue;
margin-top: 70px;
border-radius: 20px;
    }
  </style>
  <body>
<?php
// ob_start();


// Please specify the return address to use
// ini_set('sendmail_from', 'https://saiashish7777@gmail.com');
 ?>
<div class="container-fluid">
  <div class="row">
    <div class="col form">
  <h1>Contact Us :</h1>




    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  $err=NULL;
    if($_POST['submit']){
    if(!$name){
      $err = '<p>
      <strong>
        Please enter your name!
      </strong>
      </p>';
    }
    else{
      $name=filter_var($name,FILTER_SANITIZE_STRING);
    }
    if(!$email){
      $err = '<p>
      <strong>
        Please enter your email!
      </strong>
      </p>';

    }
    else{
        $email=filter_var($email,FILTER_SANITIZE_STRING);
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $err = '<p>
    <strong>
      Invalid email!!
    </strong>
    </p>';}

    if(!$message){
      $err = '<p>
      <strong>
        Please enter your message!
      </strong>
      </p>';

    }
    else{
        $message=filter_var($message,FILTER_SANITIZE_STRING);
    }

    if($err){
      $result='<div class="alert alert-danger">'.$err.'</div>';
    echo $result;
    }
  else{
  $to="saiashish7777@gmail.com";
  $subject="contact";
  $message1="
  <p>
  <strong>Name:$name</strong>
  </p>
  <p>
  <strong>Email:$email</strong>
  </p>
  <p>
  <strong>Message:$message</strong>
  </p>
  ";
  $headers ="From:saiashish7777@gmail.com" . "\r\n"
  ."Content-Type:text/html";
  ;

  if(mail($to,$subject,$message1,$headers))

  {echo '<div class="alert alert-success">
  Thanks for your message.We will reply you within few days.
  </div>';
  header("Location: thanks.php");
  }
  else {
    $display='
  <div class="alert alert-warning">
  Unable to send email .Try Again Later😌
  </div>

    ';
  }
  echo  $display;
  }



    }
     ?>


<form  action="contactform.php" method="POST">

<div class="form-group" >
  <label for="name"><h5>Name:</h5></label>
  <input id="name"class="form-control" type="text" name="name" value="" placeholder="Name">
  <label for="email"><h5>Email:</h5></label>
  <input id="email"class="form-control" type="text" name="email" value="" placeholder="Email">
  <label for="message"><h5>Message:</h5></label>
  <textarea id="message" class="form-control"  name="message" rows="8" cols="80" placeholder="Message"></textarea>


</div>

<input type="submit" class="btn btn-success btn-lg" name="submit" value="Send">




</form>



    </div>

  </div>
</div>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <?php
    ob_flush();
     ?>
  </body>
</html>
