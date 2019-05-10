<?php
include '../../../wp-load.php';
$your_name=$_REQUEST['your_name'];
$your_email=$_REQUEST['your_email'];
$your_phone=$_REQUEST['your_phone'];
$appointment_department=$_REQUEST['appointment_department'];
$appointment_doctor=$_REQUEST['appointment_doctor'];
$appointment_date=$_REQUEST['appointment_date'];


$to = 'zkzaved@gmail.com,manishrajput2008@gmail.com';

$subject = 'Website Change Request';
$message='
<h1>Hey admin you get following appointment request :-</h1>
<table>
<tr><th>Name</th> <td>: </td> <td>'.$your_name.'</td> </tr>
<tr><th>Email</th> <td>: </td> <td>'.$your_email.'</td> </tr>
<tr><th>Phone</th> <td>: </td> <td>'.$your_phone.'</td> </tr>
<tr><th>Appointment department</th> <td>: </td> <td>'.$appointment_department.'</td> </tr>
<tr><th>Appointment_doctor</th> <td>: </td> <td>'.$appointment_doctor.'</td> </tr>
<tr><th>Appointment_date</th> <td>: </td> <td>'.$appointment_date.'</td> </tr>

</table>';


$headers = "From: " . strip_tags($_POST['your_email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['your_email']) . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$headers = array('Content-Type: text/html; charset=UTF-8');
wp_mail($to, $subject, $message, $headers);
/*
if(mail($to, $subject, $message, $headers))
{ echo "Appointment request has been registered successfully. We will contact you soon";}
else echo "Tehre is some issue please try again!";
*/


?>