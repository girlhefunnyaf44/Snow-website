<?php
session_start();
echo '
<header class="header-main">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="img/icon.jpg" alt="website icon" style="border-radius: 50px"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
';

if(isset($_SESSION["userid"])){
    echo '<li><a href="includes/logout.inc.php">';
    echo $_SESSION["useruid"];
    echo ' - Logout';
    echo '</a></li>';
}
else{
    echo '<li><a href="login.php">Login</a></li>';
}
echo '
</ul>
</nav>
</div>
</header>';





