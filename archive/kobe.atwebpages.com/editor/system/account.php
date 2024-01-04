<?php
        session_start();
        $operation = $_POST["operation"];
        if($operation == "login") {
                $user = $_POST["username"];
                $pass = $_POST["password"];
                if(($user == "Kobe" && $pass == "KobeAndrew11") || ($user == "Andrew" && $pass == "KobeAndrew11")) {
                        echo "Complete";
                        $_SESSION['verified'] = true;
                } else {
                        echo "Err-102";
                        $_SESSION['verified'] = false;
                }
        } else if($operation == "logout") {
                echo "Complete";
                $_SESSION['verified'] = false;
        } else {
                echo "Err-101";
        }
        
?>