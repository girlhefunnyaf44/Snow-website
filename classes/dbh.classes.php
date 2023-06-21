<?php

class Dbh {

    protected function connect(){
        try {
            $username = "defuser";
            $password = "HziYaP7v397!*";
            $dbh = new PDO('mysql:host=localhost;dbname=userbase', $username, $password);
            return $dbh;
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}