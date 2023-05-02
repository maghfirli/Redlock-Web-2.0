<?php
$servername = "mysql";
$username = "root"; 
$password = "root"; 
$dbname = "Redlock"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as count FROM users";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo '<span style="font-size: 50px;"><p><center>redlock-web-2.0</center></p></span>';
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       ?> <h1 align="center"> <?php echo 'Total number of data in database: ' . $row["count"];?> </h1> <?php
    }
} else {
    echo "TRY AGAIN!";
}

mysqli_close($conn);
?>
</body>
</html>


