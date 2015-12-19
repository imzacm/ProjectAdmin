<!DOCTYPE html>
<html>
<head>
    <title>Project Admin | Projects</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1 style="text-align:center">Project Admin</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="projects.php">Projects</a></li>
    <li><a href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="loadUpdate.php">Check for update</a></li>
    </ul>
</ul>

<h2>Projects</h2>
<p>
    <a href="add.php" class="button">Create new project</a>
    <a href="remove.php" class="button">Remove a project</a>
    <a href="edit.php" class="button">Edit a project</a>
</p>

<?php
    $files = glob('projects/*', GLOB_BRACE);

    echo "<table>
    <tr>
        <td>Author</td>
        <td>Project</td>
        <td>Current version</td>
        <td>Download url</td>
        <td>Source url</td>
        <td>Website</td>
        <td>E-mail</td>
    </tr>";

foreach($files as $f) {
    $file = fopen($f, "r");
    echo "<tr>";
    if ($file) {
        while (($line = fgets($file)) !== false) {
            echo "<td>";
            echo $line;
            echo "</td>";
        }
        echo "</tr>";
    }
    fclose($file);
}
echo "</table>";
?>


</body>
</html>