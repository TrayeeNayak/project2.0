<?php
session_start(); // Start session if not already started
$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Use prepared statement to prevent SQL injection
        $stmt = $con->prepare("SELECT * FROM `registration` WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check for errors
        if ($stmt->errno) {
            echo "Error: " . $stmt->error;
        } else {
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                $user = 1;
            } else {
                // Use prepared statement for insertion
                $stmt = $con->prepare("INSERT INTO `registration` (email, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $email, $password);
                $stmt->execute();

                // Check for insertion errors
                if ($stmt->errno) {
                    echo "Error: " . $stmt->error;
                } else {
                    $success = 1;
                    
                }
            }
        }
    }
}

if ($user) {
    $_SESSION['message'] = "User already exists.";
}

if ($success) {
    $_SESSION['message'] = "You are successfully signed up.";
    header('Location: ../signin.html');
    exit();
} else {
    $_SESSION['message'] = "Unable to sign up.";
}
?>
