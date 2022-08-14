
<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $image=$_POST['image'];

    if(file_exists("upload/" . $_FILES['image'])){
        $store = $_FILES['image'];
        $_SESSION['status']="image already exist. '.store.'";
    }

    $sql = "INSERT INTO registration (name,email,mobile,password,image)
    VALUES ('$name','$email','$mobile','$password','$image')";

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "data is inserted successfully";
        header('location:view.php');
        
    }
    else{
        echo "error occured";
    }
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD Operataion</title>
</head>

<body>
    <div class="contaianer my-7">
        <form method="POST">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your Password" name="password">
            </div>

            <div class="form-group">
                <label>Upload</label>
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>

    </div>

</body>

</html>