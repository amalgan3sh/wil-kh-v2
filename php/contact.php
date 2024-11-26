<?php 
$responseArray = array(                         
    "status"  => "error",
    "msg" => "Something went wrong!"                        
);
$errors = array();
       
// Changed validation logic
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message'])) {             
    $errors[] =  "Please fill all the required fields";                                         
} elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){                
    $errors[] =  "Please enter valid email address";                
} else {
    // Changed recipient to ansonaroy@gmail.com
    $to = 'ansonaroy@gmail.com'; 
    
    // More robust email subject
    $subject = 'New Contact Form Submission - WaterTech Lab';
    
    // Updated email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$_POST['email'] . "\r\n";
    
    // More structured HTML email body
    $body = "
    <html>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> ".htmlspecialchars($_POST['name'])."</p>
        <p><strong>Email:</strong> ".htmlspecialchars($_POST['email'])."</p>
        <p><strong>Phone:</strong> ".htmlspecialchars($_POST['phone'])."</p>
        <p><strong>Service:</strong> ".htmlspecialchars($_POST['select'])."</p>
        <p><strong>Message:</strong><br>".nl2br(htmlspecialchars($_POST['message']))."</p>
    </body>
    </html>
    ";
    
    // Simplified email sending logic
    if(mail($to, $subject, $body, $headers)){
        $responseArray = array(                         
            "status"  => "success",
            "msg" => "Contact form successfully submitted. Thank you, we will get back to you soon!"                     
        );
    } else {                        
        $errors[] = "Sorry there was an error sending your message. Please try again later.";    
    }
}

// Simplified error handling
if(!empty($errors)){
    $responseArray = array(                         
        "status"  => "error",
        "msg" => implode('<br>', $errors)                       
    );
}            

header('Content-Type: application/json');   
echo json_encode($responseArray);
exit();
?>