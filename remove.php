<!DOCTYPE html>
<html>
<head>
    <title>Project Admin | Remove project</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1 style="text-align:center">Project Admin</h1>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="projects.php">Projects</a></li>
    <li><a href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="update.php">Check for update</a></li>
    </ul>
</ul>

<h2>Remove project</h2>

<?php
chdir("projects");
$files = glob('./*', GLOB_BRACE);

echo "<table>
    <tr>
        <td></td>
        <td>Author</td>
        <td>Project</td>
        <td>Current version</td>
        <td>Download url</td>
        <td>Source url</td>
        <td>Website</td>
        <td>E-mail</td>
    </tr>";

echo "<form action='removeFile.php' method='POST'>";

foreach($files as $f) {
    $file = fopen($f, "r");
    echo "<tr>";
    $n = substr($f, 2);
    echo "<td><input type='radio' name='toRemove' value='${n}' checked> $n</td>";
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
echo "</table><br>";
echo "<input type='submit' value='Remove'>
      </form>";
?>


</body>
</html>