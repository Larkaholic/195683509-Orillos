<?php
    include 'db.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $phone =$_POST['phone'];

        if(!empty($name) && !empty($phone)){
            $sql="INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";

            if($conn->query($sql)===TRUE){
                echo "new contact added!";
            } else{
                echo "Failed to add contact!";
            }
        }
        else{
            echo "Please fill all the fields!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new contact</title>
</head>
<body>
    <h2>
        add a new contact
    </h2>
    <form method="post" action="add.php">
        Name: <input type="text" name="name"><br>
        Phone: <input type="text" name = "phone"><br>
        <input type="submit" value ="Add contact">
    </form>
    <a href="index.php">Back to Phonebook</a>
</body>
</html>