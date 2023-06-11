<?php 
    include 'function.php';

    $conn = getDBConnection();
    
    if(isset($_GET['deleteid'])){
        
        $id=$_GET["deleteid"];

     $sql="DELETE FROM marks_tbl WHERE id=$id";
     $result=mysqli_query($conn,$sql);
     
     if($result){

       echo 'Deleted Successfully';
        header('location:stmarks.php');
     }else{
        echo 'error occured';
     
     }
    }
    
?>