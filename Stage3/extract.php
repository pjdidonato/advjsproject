
<!DOCTYPE html>
<html>
<body>

<?php
$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost:3306";
$username = "root";
$password = "password";
$dbname = "capstone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT flyID, depart, arrive, atime, dtime FROM flights";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    while($row = $result->fetch_assoc() ) {
        echo $row["flyID"]." ".$row["depart"]."
        ".$row["arrive"]." ".$row["atime"]." ".$row["dtime"]."<br>";
    }
}
else {
    echo "0 records";
}
$conn->close();

?>
<form action="extract.php" method="post">
Search <input type="text" name="search"><br>
Column: <select name="column">
    <option value="flyID"> ID </option>
    <option value="depart"> Travel To </option>
    <option value="arrive"> Travel From </option>
    <option value="atime">  Arrival Time </option>
    <option value="dtime"> Depature Tim2e </option>
    </select><br>
<input type="submit" value="submit">
</form>

</body>
</html>