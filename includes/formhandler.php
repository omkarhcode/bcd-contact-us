<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $project = htmlspecialchars($_POST['project']);

    if (empty($name) || empty($email) || empty($mobile) || empty($project)) {
        header('location: ../index.php');
    }

    echo "These are the data, that user submitted";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $mobile;
    echo "<br>";
    echo $project;
    echo "<br>";




    // $con = mysqli_connect('localhost', 'root');

    // if ($con) {
    //     echo "Connection Successful";
    // } else {
    //     echo "No Connection";
    // }
    // mysqli_select_db($con, "bdc_assignment_v1");


    // $query = "  INSERT INTO users(name,email, mobile, project) VALUES ('$name','$email','$mobile','$project')";

    // mysqli_query($con, $query);

    // header('location: ../index.php');
    echo 'Form submitted successfully';
} else {
    // header('location: ../index.php');
    echo 'Invalid request';
}
