<?php
$contact_name=$_REQUEST['contact_name'];
$contact_email=$_REQUEST['contact_email'];
$contact_subject=$_REQUEST['contact_subject'];
$contact_mobile=$_REQUEST['contact_mobile'];
$contact_message=$_REQUEST['contact_message'];



$to = 'zkzaved@gmail.com,manishrajput2008@gmail.com';

$subject = $contact_subject;
$message='
<h3>Hey admin you get following Query :-</h3>
<table>
<tr><th>Name</th> <td>: </td> <td>'.$contact_name.'</td> </tr>
<tr><th>Email</th> <td>: </td> <td>'.$contact_email.'</td> </tr>
<tr><th>Phone</th> <td>: </td> <td>'.$contact_mobile.'</td> </tr>
<tr><th>Message</th> <td>: </td> <td>'.$contact_message.'</td> </tr>
</table>';


$headers = "From: <Hariram Hospital>\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['your_email']) . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


if(mail($to, $subject, $message, $headers))
{ echo "Your query has been mailed successfully. We will contact you soon";}
else echo "Tehre is some issue please try again!";



?>