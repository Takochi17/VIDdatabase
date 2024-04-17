<?php
// Retrieve the form data from the request object
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$religion = $_POST['religion'];
$civilStatus = $_POST['civilStatus'];

// Display the form data in a list
echo "<ul>";
echo "<li>First Name: $firstName</li>";
echo "<li>Middle Name: $middleName</li>";
echo "<li>Last Name: $lastName</li>";
echo "<li>Gender: $gender</li>";
echo "<li>Birthday: $birthday</li>";
echo "<li>Email: $email</li>";
echo "<li>Phone: $phone</li>";
echo "<li>Religion: $religion</li>";
echo "<li>Civil Status: $civilStatus</li>";
echo "</ul>";
?>
