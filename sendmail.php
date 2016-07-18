<?php
	
require 'Mandrill.php';

#create an app on Mandrill and replace 'MENDRILL-APP-KEY' with app key.
$mandrill = new Mandrill('MENDRILL-APP-KEY');

$email = $_POST['email']; 
	
$message = array(
    'subject' => "SUBJECT",
    'from_email' => 'FROM_EMAIL',
    'from_name' => 'FROM_NAME',
    'to' => array(array('email' => $email )),
     );

#saved template name
$template_name = 'TEMPLATE_NAME';

$template_content = "";

$response = $mandrill->messages->sendTemplate($template_name, $template_content, $message);

print_r($response);

?>

