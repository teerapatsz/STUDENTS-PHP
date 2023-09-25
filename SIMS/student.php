<?php
$servername="localhost";
$username="root";
$password="12345678";
$dbname="students";
// create connection
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">Major</th>
                <th scope="col">Email</th>
                <th scope="col">ลบ</th>
                <th scope="col">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="SELECT * FROM `std_info`";
                $result=mysqli_query($conn,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["en_name"]; ?></td>
                    <td><?php echo $row["en_surname"]; ?></td>
                    <td><?php echo $row["th_name"]; ?></td>
                    <td><?php echo $row["th_surname"]; ?></td>
                    <td><?php echo $row["major_code"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><a href="delete_std.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">X</a></td>
                    <td><a href="update_std_form.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
                </tr>
                <?php }}} mysqli_close($conn); ?>
            </tbody>
        </table>
        <a href="insert_std_form.html" class="btn btn-primary" >Insert new record</a>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>