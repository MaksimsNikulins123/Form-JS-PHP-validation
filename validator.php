<?php


echo '<style>.content-form__success { display:none;}</style>';





if(count($_POST) > 0){

    //print_r($_POST);
    $msg = '';
    $email = trim($_POST['email']);
    $today = date("Y-m-d H:i:s");
   
    if(strlen($email) < 1) {
        $msg = 'Email address is required';
    }elseif(strlen($email) >= 1){
        if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/", $email)) {
            $emailArray = explode(".",$email);
                if($emailArray[count($emailArray) -1] === 'co'){
                    $msg = 'We are not accepting subscriptions from Colombia emails';
                    
                }elseif(isset($_POST['agree']) && strlen($_POST['agree']) > 0) {
                             
                        
                            file_put_contents('sendmail.php', "$today-|-$email\n", FILE_APPEND);
                            echo '<style>.content-form__validation { display:none;}</style>';
                            echo '<style>.content-form__success { display:block;}</style>';
                            
                                
                            $message = 'data send';
                        
                            $response = ['message' => $message];
                            header('Content-type: application/json');
                            echo json_encode($response);



                    }else {
                        $msg = 'You must accept the terms and conditions';
                    }
            
        }else {
            $msg = 'Please provide a valid e-mail address';
        }
        
    }else{
        $msg = 'ERROR';
    }
    

}else{
    $msg = '';
    
}



?>