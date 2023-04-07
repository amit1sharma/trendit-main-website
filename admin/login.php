<?php
$_data['status']="Error";
$_data['msg']="Invalid Username and Password";
if(isset($_REQUEST)){
    
    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if(($username == 'trenditapp') && ($password == 'trenditapp123#')){
            session_start();
            $_SESSION['login']=1;
            $_data['status']="Sucess";
            $_data['msg']="Successfully";
            
        }
    }
}

echo json_encode($_data);

?>
