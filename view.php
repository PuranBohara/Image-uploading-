<?php
include 'dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class = "btn btn-primary my-5"> 
        <a href = "index.php" class="text-light">Add User </a>   
        </button> 

        <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Images</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql = "SELECT * FROM registration";
$result = mysqli_query($conn,$sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        $image = $row['image'];

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>'.$image.'</td>
        <td>
        <a href="update.php?updateid='.$id.'" class = "btn btn-primary">Update</a>
        <a href="delete.php?deleteid='.$id.'" class = "btn btn-danger">Delete</a>
        </td>



        </tr>';
    }
}


?>


    
  </tbody>
</table>

        
    </div>
    
</body>
</html>