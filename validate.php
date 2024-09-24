
<?php

$expected_username = "6303259395";
$expected_password = "123";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $expected_username && $password === $expected_password) {
        echo "Login successful. Welcome, $username!";
    } else {

        echo "Login failed. Invalid username or password.";
    }
} else {

    echo "Login failed. Please provide both username and password.";
}
?>

