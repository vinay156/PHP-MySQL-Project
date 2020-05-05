<?php
    $insert = false;
    if(isset($_POST['name'])){
    // Set connection variable
    $server = "localhost";
    $username = "root";
    $password = "";

    //Set connection
    $connection = mysqli_connect($server,$username,$password);

    //chack connection
    if(!$connection){
        die("The connection is failed" . mysqli_connect_error());
    }

    //collect POST variable
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $sql = "INSERT INTO `Goa Trip`.`Goa` (`name`, `age`, `gender`, `email`, `phone`,
    `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone',
    '$other', current_timestamp());";

    //Excute query
    if($connection->query($sql)==true){
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $connection->error";
    }

    //close connection
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Trip</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
</head>
<body>
    <img class="goa" src="beach.jpg" alt="goa beach">
    <div class="container">
        <h1>Welcome to IIT Roorkee Goa trip Form</h1>
        <p>Enter your details and submit this form fro the confirmation</p>
        <?php
        if($insert==true){
        echo "<p class='submitmsg'>Thanks for submitting your form.</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Write some comment">
            </textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>