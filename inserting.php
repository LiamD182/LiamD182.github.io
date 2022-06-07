<?php

$addUsername = $_POST["uname"];
$addPassword = $_POST["password"];

$servername = "sql201.epizy.com";
$databasename = "epiz_30958692_TestDB";
$username = "epiz_30958692";
$password = "KmtheFFlb6rqc";

$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br>Connected successfully";

echo "<br>Inserting data";


    $sql = "INSERT INTO Users(id, username, password) VALUES (null, '$addUsername', '$addPassword')";


if ($conn->query($sql) === TRUE)
{
    echo "<br> New record Added";
    header('Location: http://liam.great-site.net/index.php');
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
