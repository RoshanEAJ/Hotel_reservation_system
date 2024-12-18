<?php


    function nameInvalid($name){
        

        if(!preg_match('/^[a-zA-Z]+$/', $name)){
            $alert = "<script>alert('Enter a vailed name.')</script>";
            echo $alert;
            
    }
}

    function emailInvalid($email){

        if(!preg_match('/^[a-zA-Z\d._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/', $email)){
            $alert = "<script>alert('Enter a valied email.')</script>";
            echo $alert;
            
    }
}

    function passInvalid($pword){

        if(!preg_match('/^.{5,}$/', $pword)){
            $alert = "<script>alert('Password length is not enough.')</script>";
            echo $alert;
    }
}

    function pwordNotMatch($pword, $con_pword){

        if($pword !== $con_pword){
            $alert = "<script>alert('Passwords are not match.')</script>";
            echo $alert;
        }
    }

?>