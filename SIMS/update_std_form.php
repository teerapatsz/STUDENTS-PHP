<?php
$id=$_GET["id"];

$servername="localhost";
$username="root";
$password="12345678";
$dbname="students";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php 
$sql="SELECT * FROM `std_info` WHERE `id`=$id";
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
?>
    <div class="container">
        <form method="post" action="update_std.php">
            <div class="mb-3">
                <label for="id" class="form-label">id</label>
                <input type="text" class="form-control" id="id" placeholder="6430300xxx" name="id" value="<?php echo $row["id"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" placeholder="ABC" name="en_name" value="<?php echo $row["en_name"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">surname</label>
                <input type="text" class="form-control" id="surname" placeholder="ABC" name="en_surname" value="<?php echo $row["en_surname"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="th_name" class="form-label">ชื่อ</label>
                <input type="Text" class="form-control" id="th_name" placeholder="กขค" name="th_name" value="<?php echo $row["th_name"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="th_surname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="th_surname" placeholder="กขค" name="th_surname" value="<?php echo $row["th_surname"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="major" class="form-label">Major</label>
                <input type="text" class="form-control" id="major" placeholder="T12" name="major_code" value="<?php echo $row["major_code"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php echo $row["email"]; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Update</button> <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
<?php }}} mysqli_close($conn); ?>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>