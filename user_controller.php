<?php

    function insertUser($username, $password, $nickname, $conn) {
        try {
            $sql = 'INSERT INTO user (username, password, nickname) VALUES (?,?,?)';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $password);
            $stmt->bindParam(3, $nickname);
            $stmt->execute();
            $result = true;
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function login($username,$password,$conn){
        try {
            $sql = 'SELECT * FROM user WHERE username = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $result = false;
            
            if ($user) {
                // Assuming the stored password is hashed
                if ($password == $user['password']) {
                    $result = $user;
                } else {
                    $result = false;
                }
            } else {
                $result = false;
            }

            // echo $result;
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }       
    }
?>