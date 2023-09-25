<?php
$id=$_GET["id"];

$servername="localhost";
$username="root";
$password="12345678";
$dbname="students";
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
$sql="DELETE FROM `std_info` WHERE `id`=$id";
//echo $sql."<br>";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<h1>Delete record</h1>";
    echo "<h1>ID: " . $id . " </h1>";
    echo "<h1>successfully!</h1>";
    echo "<button><a href='student.php' style='text-decoration: none'>Back</a></button>";
}
else echo "Error: ".$sql."<br>".mysqli_error($conn);
mysqli_close($conn);
?>