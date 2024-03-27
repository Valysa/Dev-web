<!DOCTYPE html>
<html>
    <head>
        <title>Lafleur Enterprise</title>
        <link rel="stylesheet" type="text/css" href="envoiMail.css">
        <script src="https://kit.fontawesome.com/b7b9424b27.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require 'entete.php'; ?>
        <div class="main">
            <?php require 'menuVertical.php'; ?>
            <div class="rightpart">
                <?php
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;
                    require 'PHPMailer-master/src/Exception.php';
                    require 'PHPMailer-master/src/PHPMailer.php';
                    require 'PHPMailer-master/src/SMTP.php';
                    
                    $lname = $_POST["lname"];
                    $fname = $_POST["fname"];
                    $email = $_POST["email"];
                    $subject = $_POST["subject"];
                    
                    $message = $_POST["content"];
                    $subject = $_POST["subject"];
                    //$email = $_POST["mailref"];

                    //generation du mail
                    $mail = new PHPMailer(true);
                    //echo $message ;
                    //echo $mail ;
                    try { 
                        $mail->isSMTP();
                        $mail->Host = 'smtp.office365.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'engagementjeunes64@outlook.fr';
                        $mail->Password = 'EngJeunes64&';
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587;

                    // Set other email parameters (to, subject, message, headers)
                    $mail->setFrom('engagementjeunes64@outlook.fr');

                    //destination
                    $mail->addAddress($email);
                    $mail->Subject = $subject;
                    $mail->Body = $message;

                    // Send the email
                    $mail->send();
                        echo 'Merci de votre retour, le mail a bien été envoyé'; 
                    }  catch (Exception $e) { 
                        echo 'Une erreur est survenue lors de l envoi de mail, veuillez reessayer ' . $mail->ErrorInfo; 
                    }
                    //echo $message ;
                    //header("Location: validationcons.html");
                ?>
            </div>
        </div>
        <?php require 'pieddepage.php'; ?>
    </body>
</html>