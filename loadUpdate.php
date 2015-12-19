<?php
mkdir("update");
copy("update.php", "update/update.php");

header("Location: update/update.php");
die();
?>