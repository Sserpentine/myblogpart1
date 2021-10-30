<?php
    $connection = mysqli_connect('localhost', 'root', '', 'myblog');
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkdata = msqli_query($connection, "SELECT * FROM userdata WHERE email = $email");
    $check = msqli_num_rows($checkdata);

    if($check > 0){
        echo "Email already exists"
    }
    else{
        $input = msqli_query($connection, "INSERT INTO userdata(id, email, password) VALUES ('$id',' $email', '$password')");
        if($input){
            echo "Signup Successful"
        }
        else{
            echo "Error occured"
        }
    }
?>