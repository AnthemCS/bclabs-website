<?php

  //PHP code for sending an email from the form
  if (isset($_POST['name']) &&isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])) {

    $form_name = $_POST['name'];
    $form_email = $_POST['email'];
    $form_number = $_POST['phone'];
    $form_subject = $_POST['subject'];
    $form_message = $_POST['message'];

    if (!empty($form_name) && !empty($form_email) && !empty($form_number)  && !empty($form_message)) {

      $to = 'tmbarbara1@gmail.com';
      $subject = $form_subject;
      $body = "My Name is ".$form_name ." and my numbers are ".$form_number .'. Message: '.$form_message;
      $headers = 'From: '.$form_email;

      if (@mail($to, $subject, $body, $headers)) {
          
          
        ?>
            <script>
                alert('message sent');
                // header("Location: http://www.bcl.anthemcs.co.za");
            </script>
            
            <?php
            
          
      }else {
        
        ?>
        <script>
                alert('message not sent');
                // header("Location: http://www.bcl.anthemcs.co.za");
            </script>
        <?php
      }

    }else {
      echo "All fields are required.";
    }
  }

 ?>
<html>
    <head>
        <meta http-equiv="refresh" content="0; url='http://www.bclabs.co.za'"/>
    </head>
    <body></body>
</html>