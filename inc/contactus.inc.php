<?php
    session_start();
    // requiring core module
    require '../phpmailer/PHPMailerAutoload.php';
    // require '../vendor/autoload.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['k-button']))  //listening for the subit button
        {
          // getting all the required fields from the contactus page
          $email = $_POST['k-email'];
          $name = $_POST['k-name'];
          $phone = $_POST['k-phone'];
          $subject = $_POST['k-subject'];
          $message = $_POST['k-message'];
          $adm_email = "sadatt254@gmail.com";
          $adm_password = "sadattmagara254";

          // checking if the fields are empty
          if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
            $_SESSION["emptyFields"] = "the fields are empty";
            header("Location: ../contactus.php?fields_empty");
          }else {
            $mail = new PHPMailer;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port =  587;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = $adm_email;
            $mail->password = $adm_password;

            $mail->setFrom($name, $phone);
            $mail->addAddress($adm_email);
            $mail->addReplyTo($email);

            $mail->isHTML(true);
            $mail->Subject = 'Form Submission From'.$subject;
            $mail->Body = $message;

            if (!$mail->send()) {
               $error = "Mailer Error: " . $mail->ErrorInfo;
                ?><script>alert('<?php echo $error ?>');</script><?php
                header("Location: ../contactus.php?failure");
            } 
            else {
               header("Location: ../contactus.php?success");
            }
          }
     }
?>