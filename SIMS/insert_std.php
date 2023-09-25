<?php
$id=trim($_POST["id"]);
$en_name=trim($_POST["en_name"]);
$en_surname=trim($_POST["en_surname"]);
$th_name=trim($_POST["th_name"]);
$th_surname=trim($_POST["th_surname"]);
$major_code=trim($_POST["major_code"]);
$email=trim($_POST["email"]);
//echo $id; echo $en_name; echo $en_surname; echo $th_name; echo $th_surname;
//echo $major_code; echo $email;
$servername="localhost";
$username="root";
$password="12345678";
$dbname="students";
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
$sql="INSERT INTO `std_info` (`id`, `en_name`, `en_surname`, `th_name`, `th_surname`, `major_code`, `email`) VALUES ('$id', '$en_name', '$en_surname', '$th_name', '$th_surname', '$major_code', '$email')";
//echo $sql."<br>";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<h1>Insert new record</h1>";
    echo "<h1>successfully!</h1>";
    echo "<button><a href='student.php' style='text-decoration: none'>Back</a></button>";
}
else echo "Error: ".$sql."<br>".mysqli_error($conn);
mysqli_close($conn);
?>