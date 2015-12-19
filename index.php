<!DOCTYPE html>
<html>
<head>
    <title>Project Admin</title>
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
    header("Location: index.php");
    die();
}
?>
<h1 style="text-align:center">Project Admin</h1>
<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="loadUpdate.php">Check for update</a></li>
    </ul>
</ul>

<p>
    Welcome to Project Admin! <br>
    To create or manage your projects, go to the <a href="projects.php">projects</a> page.
</p>
</body>
</html>