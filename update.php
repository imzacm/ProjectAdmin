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

<p>
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
file_put_contents("githubVersion", file_get_contents("https://raw.githubusercontent.com/imzacm/ProjectAdmin/master/version"));
$file = fopen("githubVersion", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        $githubVersion = $line;
    }
    fclose($file);
}
unlink("githubVersion");
if ($version < $githubVersion) {
    echo "<p>Newer version available</p>";
    echo "<p>Downloading . . . .</p>";
    file_put_contents("master.zip", file_get_contents("https://github.com/imzacm/ProjectAdmin/archive/master.zip"));
    echo "<p>Download complete</p>";
    $zip = new ZipArchive;
    if ($zip->open('master.zip') == TRUE) {
        $zip->extractTo('.');
        echo "<p>Extracting . . . . </p>";
        $zip->close();
        unlink("master.zip");
    }
    else
    {
        echo "<p>Failed to update</p>";
    }
}
else
{
    echo "<p>No update found</p>";
}
?>
</body>
</html>