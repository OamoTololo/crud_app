<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }

    $insert_statement = "INSRET INTO 'users' ('firstname', 'lastname', 'email', 'password', 'gender') VALUES('$first_name', '$last_name', '$email','$password','$gender')";

    $result = $conn->query($insert_statement);

    if($result == TRUE){
        echo "New user added to database successfully.";
    }else{
        echo "Error: " . $insert_statement . "<br>" . $conn->error;
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <h2>Signup Form</h2>

    <form action="" method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            First Name: <br>
            <input type="text" name="firstname">
            <br>
            Last Name: <br>
            <input type="text" name="lastname">
            <br>
            Email: <br>
            <input type="text" name="email">
            <br>
            Password: <br>
            <input type="text" name="password">
            <br>
            Gender: <br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>