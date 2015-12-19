<!DOCTYPE html>
<html>
<head>
    <title>Project Admin | Edit project</title>
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
    header("Location: editLines.php");
    die();
}
?>
<h1 style="text-align:center">Project Admin</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="projects.php">Projects</a></li>
    <li><a href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="loadUpdate.php">Check for update</a></li>
    </ul>
</ul>
<?php
chdir("projects");
$lines = array();
echo "<h2>Edit project</h2>
<form action='editFile.php' method='POST'>";
$f = $_POST["toEdit"];
$file = fopen("${f}", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        $lines[] = $line;
    }
    echo "
    Author Name: <input type='text' name='author' value='$lines[0]'><br>
    Project Name: <input type='text' name='project'' value='$lines[1]'><br>
    Newest Version: <input type='text' name='version' value='$lines[2]'><br>
    Download url: <input type='text' name='downurl' value='$lines[3]'><br>
    Source url: <input type='text' name='source' value='$lines[4]'><br>
    Website: <input type='text' name='website'' value='$lines[5]'><br>
    E-mail: <input type='text' name='email' value='$lines[6]'><br>
    <input type='hidden' name='filename' value='${f}'>
    <input type='submit' value='Edit project'>
</form>";
    fclose($file);
}
?>
</body>
</html>