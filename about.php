<!DOCTYPE html>
<html>
<head>
    <title>Project Admin | About</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
if (file_exists("update"))
{
    chdir("update");
    $files = scandir("./");
    foreach($files as $f)
    {
        unlink($f);
    }
    chdir("../");
    rmdir("update");
}
?>
<h1 style="text-align:center">Project Admin</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a class="active" href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="loadUpdate.php">Check for update</a></li>
    </ul>
</ul>

<iframe src="aboutText.html" style="border: 0; position:fixed; width:100%; height:100%"></iframe>
</body>
</html>