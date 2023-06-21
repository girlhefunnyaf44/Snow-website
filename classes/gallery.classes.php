<?php

class Usercontent extends Dbh {

    private $galleryid;
    private $item;

    public function __construct($galleryid) {
        $this->galleryid = $galleryid;
    }

    public function getUserContent(){

        if($this->galleryid > 0){
            $stmt = $this->connect()->prepare("SELECT * FROM usercontent WHERE galleryid=?");
            $stmt->execute([$this->galleryid]);
            
            if ($stmt->rowCount()) {
                while ($row = $stmt->fetch()){
                    $filename = $row['entryid'];
                    echo '<div class="contentbox">';
                    echo '<img src="img/image';
                    echo $filename;
                    echo '.jpg" alt="picture"></img>';
                    echo $row['decription'] . '<br>';
                    echo $row['date'] . '<br>';
                    echo $row['author'] . '<br>';
                    echo "</div>";
                }
            }
        }
        else {
            $stmt = $this->connect()->query("SELECT * FROM galleries");

            if ($stmt->rowCount()) {
                while ($row = $stmt->fetch()){
                    echo '<a href="gallery.php?gallery=';
                    echo $row['galleryid'];
                    echo '">';
                    echo '<div class="textbox-container">';
                    echo $row['galleryname'];
                    echo "<br>";
                    echo $row['date'];
                    echo "</div>";
                    echo '</a>';
                }
            }
        }
        $stmt = null;
    }
}