<?php

class LoginContr extends Login {

    private $uname;
    private $password;

    public function __construct($uname, $password) {
        $this->uname = $uname;
        $this->password = $password;
    }

    public function loginUser() {
        if($this->isEmptyInput() == false) {
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uname, $this->password);
    }

    private function isEmptyInput() {
        $result;
        if(empty($this->uname) || empty($this->password)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}
