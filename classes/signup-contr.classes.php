<?php

class SignupContr extends Signup{

    private $uid;
    private $pwd;
    private $repeatpwd;
    private $email;

    public function __construct($uid, $pwd, $repeatpwd, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->repeatpwd = $repeatpwd;
        $this->email = $email;
    }


    public function signupUser() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false) {
            // echo "Invalid username!";
            header("location: ../signup.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false) {
            // echo "Invalid email!";
            header("location: ../signup.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false) {
            // echo "Passwords don't match!";
            header("location: ../signup.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false) {
            // echo "Username or email taken!";
            header("location: ../signup.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd) || empty($this->repeatpwd) || empty($this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if ($this->pwd !== $this->repeatpwd)
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}