<!DOCTYPE html>
<html>
<head>
    <title>Project Admin | Add project</title>
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

<h2>Add project</h2>
<form action="addToFile.php" method="post">
    Author Name: <input type="text" name="author"><br>
    Project Name: <input type="text" name="project"><br>
    Newest Version: <input type="text" name="version"><br>
    Download url: <input type="text" name="downurl"><br>
    Source url: <input type="text" name="source"><br>
    Website: <input type="text" name="website"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit" value="Create project">
</form>
</body>
</html>