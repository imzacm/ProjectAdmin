<?php
$toRemove = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toRemove = $_POST["toRemove"];

    chdir("projects");
    echo "<html>
    <body>";
    if (!unlink("${toRemove}")) {
        echo "Error deleting project";
    } else {
        echo "Deleted $toRemove";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


echo "</body>
</html>";

header("Location: projects.php");
die();
?>

