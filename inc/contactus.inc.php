<?php

    require '../phpmailer/PHPMailerAutoload.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['k-button']))
        {
          $email = $_POST['k-email'];
          $name = $_POST['k-name'];
          $phone = $_POST['k-phone'];
          $subject = $_POST['k-subject'];
          $message = $_POST['k-message'];
          // $subject = $_POST['subject'];

          $mail = new PHPMailer;

          $mail->isSMTP();

          $mail->Host = 'smtp.gmail.com';

          $mail->Port = 587;

          $mail->SMTPSecure = 'tls';

          $mail->SMTPAuth = true;

          $mail->Username = 'sadatt254@gmail.com';

          $mail->Password = "sadattmagara254";

          $mail->setFrom($email, $phone);

          $mail->Subject = $subject;

          $mail->addReplyTo($email);

          $mail->addAddress('sadatt254@gmail.com');

          $mail->msgHTML($message);

          if (!$mail->send()) {
             $error = "Mailer Error: " . $mail->ErrorInfo;
              ?><script>alert('<?php echo $error ?>');</script><?php
              header("Location: ../contactus.php?failed");

          }
          else {
            $_SESSION['success'] = "Message sent";
            header("Location: ../contactus.php?success");
          }
     }
?>