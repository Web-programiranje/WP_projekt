<?php

class Login extends Dbh{
    
    protected function getUser($uname, $password) {
        $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_uname = ? OR users_email = ?;');
        
        if(!$stmt->execute(array($uname, $password))) {
            $stmt = null;
            header ("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header ("Location: ../login.php?error=usernotfound");
            exit();
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashed[0]["users_password"]);

        if($checkPassword == false) {
            $stmt = null;
            header ("Location: ../login.php?error=wrongpassword");
            exit();
        }
        elseif($checkPassword == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uname = ? OR users_email = ? AND users_password = ?;');

            if(!$stmt->execute(array($uname, $uname, $password))) {
                $stmt = null;
                header ("Location: ../index.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header ("Location: ../index.php?error=usernotfound");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruname"] = $user[0]["users_uname"];

        }
        $stmt = null;
    }

}