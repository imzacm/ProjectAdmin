<!DOCTYPE html>
<html>
<head>
    <title>Project Admin | Update</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1 style="text-align:center">Project Admin</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a class="active" href="update.php">Check for update</a></li>
    </ul>
</ul>

<p id="checking">
    Checking for updates . . . .
</p>
<?php
$file = fopen("version", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        $version = $line;
    }
    fclose($file);
}
?>
</body>
</html>