<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully <br>";

$nim = $_POST['nim'];
$name = $_POST['name'];
$study = $_POST['study'];

$sql = "INSERT INTO data_mhs (nim, name, study) VALUES ('$nim' , '$name', '$study')";

if (mysqli_query($conn, $sql) === TRUE) {
    $message = "New record created successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    if(isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $study = $_POST['study'];
        echo "NIM = ".$nim;
        echo "<br>Nama = ".$name;
        echo "<br>Mata Kuliah = ".$study;
    }
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>