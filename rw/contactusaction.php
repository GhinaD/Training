<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

    $to = 'info@rolavincent.com';
	//$to = 'marias@in2info.com';
    $message = '<!DOCTYPE HTML PUBLIC ""-//IETF//DTD HTML//EN"">';
    $message .= '<html>';
    $message .= '<head>';
    $message .= '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">';
    $message .= '<title>Rola Vincent Architects</title>';
    $message .= '</head>';
    $message .= '<body>';
    $message .= '<p>Name: '.$_POST['name'].'</p>';
    $message .= '<p>E-mail: '.$_POST['email'].'</p>';
	$message .= '<p>Subject:'.$_POST['subject'].'</p>';
    $message .= '<p>Message: '.$_POST['message'].'</p>';
    $message .= '</body>';
    $message .= '</html>';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Contact Us Form <info@rolavincent.com>' . "\r\n";
	$headers .= 'Cc: rv@rolavincent.com' . "\r\n";
	
	//for testing
	//$headers .= 'From: Contact Us Form <marias@in2info.com>' . "\r\n";
	//$headers .= 'Cc: marias@in2info.com' . "\r\n";
	
    @mail($to, $subject, $message, $headers);
	//die();
?>
    <script>alert('Form submitted successfully!');
        window.location.href = 'contactus.php';
    </script>
<?php
//}
?>