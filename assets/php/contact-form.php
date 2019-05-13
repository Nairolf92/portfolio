<?php
    $nom = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = 'f.kelnerowski@gmail.com';
    $subject = 'Formulaire Portfolio';
    $headers = 'From:'. $mail ."\r\n" ;
    $headers .= 'Reply-To: '.$mail . "\r\n" ;
    $headers .= 'MIME-Version: 1.0' . "\r\n" ;
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    if(@mail($to, $subject, $message, $headers))
        $response_array['status'] = 'success';    
    else{
        $response_array['status'] = 'error';    
    }
    header('Content-type: application/json');
    echo json_encode($response_array);

?>