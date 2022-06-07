<?php
echo "Connecting...";
$servername = "sql201.epizy.com";
$databasename = "epiz_30958692_TestDB";
$username = "epiz_30958692";
$password = "KmtheFFlb6rqc";

$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br>Connected successfully";

echo "<br>selecting data";
$sql = "SELECT id, username, password FROM Users";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "<br>id: " . $row["id"]. " username: " . $row["username"]. " || Password: " . $row["password"];
    }
}
else{
    echo "0 results";
}
$conn->close();

?>
