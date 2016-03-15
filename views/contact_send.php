<?php
// Pear Mail Library
require_once "Mail.php";

if ($_POST) {
	echo "Cool";
$from = '<andyrociogtz@gmail.com>';
$to = '<huguilloadan@gmail.com>';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";
$name = $_POST['nombre'];
$ciudadEd = $_POST['ciudadEd'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comment =$_POST['comment'];

/*if ($name == '' || $ciudadEd == '' || $email== '' || $asunto== '' || $comment == '') {
	            $feedback = 'Falta algún campo por llenar';
	            ?><span><?php echo $feedback;?></span><?php

	        }else{
	        	mail($to, $subject, $message, $header);
	            $feedback = 'Gracias por enviar su comentario';
	            ?><span><?php echo $feedback;?></span><?php
	        }*/


$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'andyrociogtz@gmail.com',
        'password' => 'locoderemate'
    ));
echo $smtp;
$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
	header("Location: http://pruebasandy.com/views/contact.php");
    echo('<p>Message successfully sent!</p>');
}
}
else{
	echo "no cool";
}
?>