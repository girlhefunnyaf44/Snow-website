<?php
    include 'classes/dbh.classes.php';
    include 'classes/gallery.classes.php';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasonation MC</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
</head>
<body>
	<?php include "includes/header.inc.php"?>
    <main>
        <div class="pagetitle">
            <h1>Gallery</h1>
        </div>
        <article>
            <p>
                User submitted content galleries for each season or event
                <br><br>
                Feature under construction
            </p>
        </article>
        <?php 
                $galleryid = $_GET['gallery'];
                $object = new Usercontent($galleryid);
                $object->getUserContent();
        ?>
    </main>
</body>
</html>