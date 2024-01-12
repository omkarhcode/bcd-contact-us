<?php

// Preventing brute force attacks by blocking the user after 5 submits in less than 1 minute 
session_start();

// Check if the count and timestamp session variables are set
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
    $_SESSION['timestamp'] = time();
}

// If the count is 5 or more and the timestamp is less than 1 minute ago
if ($_SESSION['count'] >= 5 && $_SESSION['timestamp'] > time() - 60) {
    // Block the request
    http_response_code(429);
    echo "Too many requests. Please try again later.";
    exit;
}

// If the timestamp is more than 1 minute ago, reset the count and timestamp
if ($_SESSION['timestamp'] <= time() - 60) {
    $_SESSION['count'] = 0;
    $_SESSION['timestamp'] = time();
}



// Increment the count
$_SESSION['count']++;


if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $project = htmlspecialchars($_POST['project']);


    // Validate name
    if (empty($name)) {
        echo "Name is required";

        header('location: ../index.php');
        exit;
    }

    // Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email";
        header('location: ../index.php');
        exit;
    }

    // Validate mobile
    // if (empty($mobile) || !preg_match('/^[0-9]{10}$/', $mobile)) {
    if (empty($mobile)) {
        echo "Invalid mobile number";
        header('location: ../index.php');
        exit;
    }

    // Validate project
    if (empty($project)) {
        echo "Project is required";
        header('location: ../index.php');
        exit;
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




    $con = mysqli_connect('localhost', 'root');


    if ($con) {
        echo "Connection Successful";
    } else {
        echo "No Connection";
    }
    mysqli_select_db($con, "bdc_assignment_v1");


    $query = "  INSERT INTO users(name,email, mobile, project) VALUES ('$name','$email','$mobile','$project')";

    mysqli_query($con, $query);

    header('location: ../index.php');
    echo 'Form submitted successfully';
} else {
    header('location: ../index.php');
    echo 'Invalid request';
    die();
}
