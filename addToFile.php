
<?php
$author = $email = $project = $version = $downurl = $source = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project = test_input($_POST["project"]);
    $email = test_input($_POST["email"]);
    $version = test_input($_POST["version"]);
    $downurl = test_input($_POST["downurl"]);
    $source = test_input($_POST["source"]);
    $website = test_input($_POST["website"]);
    $author = test_input($_POST["author"]);

    chdir("projects");

    $file = fopen($project, "w");
    fwrite($file, $author . PHP_EOL);
    fwrite($file, $project . PHP_EOL);
    fwrite($file, $version . PHP_EOL);
    fwrite($file, $downurl . PHP_EOL);
    fwrite($file, $source . PHP_EOL);
    fwrite($file, $website . PHP_EOL);
    fwrite($file, $email);
    fclose($file);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

header("Location: projects.php");
die();
?>