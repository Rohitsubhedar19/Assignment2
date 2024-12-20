<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : 'None';
    $country = htmlspecialchars($_POST['country']);
    $address = htmlspecialchars($_POST['address']);

    // Output the details in a formatted response
    echo "
    <table border='1' cellpadding='10' cellspacing='0' style='margin: 0 auto;'>
        <tr><th>First Name</th><td>{$fname}</td></tr>
        <tr><th>Last Name</th><td>{$lname}</td></tr>
        <tr><th>Email</th><td>{$email}</td></tr>
        <tr><th>Password</th><td>{$password}</td></tr>
        <tr><th>Date of Birth</th><td>{$dob}</td></tr>
        <tr><th>Gender</th><td>{$gender}</td></tr>
        <tr><th>Hobbies</th><td>{$hobbies}</td></tr>
        <tr><th>Country</th><td>{$country}</td></tr>
        <tr><th>Address</th><td>{$address}</td></tr>
    </table>";
} else {
    echo "Invalid request method.";
}
?>
