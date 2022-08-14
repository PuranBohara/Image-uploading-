<?php
include 'dbconnect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM registration WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
       // echo "Deleted successfully";
       header('location:view.php');
    }
    else{
        echo "Error Occured";
    }
    
    


}else{
    echo "no parameter";    
}

?>