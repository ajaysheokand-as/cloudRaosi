<?php
 if (isset($data['name']) && isset($data['mobile_no']) && isset($data['email_address']) && isset($data['message'])) {
    if (strlen($data['mobile']) < 10) {
        $name = $data['name'];
        $mobile_no = $data['mobile_no'];
        $email_address = ($data['email_address']);
        $message = ($data['message']);

        $message_data = $message + "From: Name:"+"$name"+"Mobile No: " + $mobile_no + "Email ID : " +$email_address;
        echo $message_data;
        send_email($email_address,$subject,$message);
    }else echo `<script>alert("Enter a valid Mobile Number")</script>`;
 }
function send_email($from,$subject,$message){
    $headers = `From: $from` . "\r\n" .
    `Reply-To: $from` . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $to = "cloudrasoioffcial@gmail.com";
    try{
        if($from==""){
            throw "Please Enter Email";
        }elseif($subject == ""){
            throw "Please Enter Subject";
        }elseif($message==""){
            throw "Please Enter Message";
        }else{
           $response =  mail($to, $subject, $message, $headers);
           if($response == 1){
            echo `<script>alert("Mail Sent Successfull")</script>`;
           }else{
            echo `<script>alert("oohoo .... Email could not be sent.
            Please go back and try again!")</script>`;
           }
        }
    }
    catch(Exception $e){
        $error = $e->getMessage();
        echo `<script>alert($error)</script>`;
    }

}

?>