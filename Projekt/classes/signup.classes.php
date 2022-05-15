<?php

class Signup extends Dbh{
    
    protected function setUser($uname, $email, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uname, users_email, users_password) VALUES (?, ?, ?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($uname, $email, $hashedPassword))) {
            $stmt = null;
            header ("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uname, $email) {
        $stmt = $this->connect()->prepare('SELECT users_uname FROM users WHERE users_uname = ? OR users_email = ?;');
        
        if(!$stmt->execute(array($uname, $email))) {
            $stmt = null;
            header ("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount()>0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}