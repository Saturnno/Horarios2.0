<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "horarios2.0";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Unidad";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $aa = array();
   
    while($row = $result->fetch_assoc()) {
         $json_array[] = array($row["Nombre"],$row["Direccion"],$row["Director"],$row["Telefono"],$row["Correo"]);
    }
    
$json_data = array("data" => $json_array);
echo json_encode($json_data);
    
} else {
    echo "0 results";
}
$conn->close();
?>
