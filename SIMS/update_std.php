<?php
$id=trim($_POST["id"]);
$en_name=trim($_POST["en_name"]);
$en_surname=trim($_POST["en_surname"]);
$th_name=trim($_POST["th_name"]);
$th_surname=trim($_POST["th_surname"]);
$major_code=trim($_POST["major_code"]);
$email=trim($_POST["email"]);

$servername="localhost";
$username="root";
$password="12345678";
$dbname="students";
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
$sql="UPDATE `std_info` SET `id`='$id',`en_name`='$en_name',`en_surname`='$en_surname',`th_name`='$th_name',`th_surname`='$th_surname',`major_code`='$major_code',`email`='$email' WHERE `id`=$id";
//echo $sql."<br>";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<h1>Update record</h1>";
    echo "<h1>ID: ". $id ."</h1>";
    echo "<h1>successfully!</h1>";
    echo "<button><a href='student.php' style='text-decoration: none'>Back</a></button>";
}
else echo "Error: ".$sql."<br>".mysqli_error($conn);
mysqli_close($conn);
?>