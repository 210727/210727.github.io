<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: $name'; 
    $to = '210727@hkis.edu.hk'; 
    $subject = $_POST['subject'];
			
    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') 
    {				 
        if (mail ($to, $subject, $body, $from)) 
        { 
	    	echo '<p>Your message has been sent!</p>';
		} else 
		{ 
	    	echo '<p>Something went wrong, go back and try again!</p>'; 
		}
	}
    

?>