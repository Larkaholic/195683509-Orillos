<?php
    include "db.php";
    if(isset($_GET['id'])){
        $id =$_GET['id'];

        $sql= "DELETE FROM contacts WHERE id =$id";
        if($conn->query($sql)===TRUE){
            echo "contact deleted!";
        } else{
            echo "Failed to delete contact!". $sql. "<br>". $conn->error;
        }
    }
    header("Location: index.php");
?>