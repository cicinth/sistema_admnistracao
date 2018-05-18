<?php
$mysqli = new mysqli("localhost", "root", "", "bd_frequencia");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$sql = "SELECT * FROM tb_oficina ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id_oficina"]. " Name: " . $row["nome_oficina"]. "</br>";
    }
} else {
    echo "0 results";
}
?>

