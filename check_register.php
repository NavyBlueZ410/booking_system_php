<?php
require_once 'connect.php';
require_once 'user_controller.php';
echo "<script src='./js/alert.js'></script>";

    if(isset($_POST['submitRegister'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nickname = $_POST['nickname'];

        if(!$username || !$password || !$nickname ){
            echo "
            <script>
                alertMessage('Please fill in all the fields.','register.php')
            </script>";
        }else{
            $insert = insertUser($username,$password,$nickname,$conn);
            if($insert){
                echo "
                <script>
                    alertMessage('Success insert.','home.php')
                </script>";
            }else{
                echo "
                <script>
                    alertMessage('Error insert.','register.php')
                </script>";
            }
        }
    }
?>  