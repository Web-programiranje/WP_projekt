<?php

class SignupContr extends Signup {

    private $uname;
    private $email;
    private $password;
    private $cpassword;

    public function __construct($uname, $email, $password, $cpassword) {
        $this->uname = $uname;
        $this->email = $email;
        $this->password = $password;
        $this->cpassword = $cpassword;
    }

    public function signupUser() {
        if($this->isEmptyInput() == false) {
            header("Location: ../signup.php?error=emptyinput");
            exit();
        }
        if($this->isInvalidUname() == false) {
            header("Location: ../signup.php?error=username");
            exit();
        }
        if($this->isInvalidEmail() == false) {
            header("Location: ../signup.php?error=email");
            exit();
        }
        if($this->doesPasswordsMatch() == false) {
            header("Location: ../signup.php?error=passwordmatch");
            exit();
        }
        if($this->isUnameTakenCheck() == false) {
            header("Location: ../signup.php?error=useroremailtaken");
            exit();
        }
        $this->setUser($this->uname, $this->email, $this->password);
    }

    private function isEmptyInput() {
        $result;
        if(empty($this->uname) || empty($this->email) || empty($this->password) || empty($this->cpassword)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function isInvalidUname() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uname)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function isInvalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function doesPasswordsMatch() {
        $result;
        if ($this->password !== $this->cpassword) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function isUnameTakenCheck() {
        $result;
        if (!$this->checkUser($this->uname, $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}
