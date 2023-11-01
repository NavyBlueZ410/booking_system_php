<?php
session_start();
require_once 'connect.php';
require_once 'user_controller.php';
echo "<script src='./js/alert.js'></script>";

    if(isset($_POST['submitLogin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!$username || !$password){
            echo "
            <script>
                alertMessage('Please fill in all the fields.','register.php')
            </script>";
        }else{
            $login =  login($username,$password,$conn);
            if($login){
                // echo "<pre>";
                // print_r($login);

                $_SESSION["nickname"] = $login['nickname'];
                
                echo "
                <script>
                    alertMessage('Success Login.','home.php')
                </script>";
            }else{
                echo "
                <script>
                    alertMessage('Error Login.','register.php')
                </script>";
            }
        }
    }
?>  