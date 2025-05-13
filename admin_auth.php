<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($admin_id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Start session to store admin data (if needed)
            session_start();
            $_SESSION['admin_id'] = $admin_id; // Store the admin id in the session

            // Redirect to the admin dashboard
            header("Location: http://localhost/phpmyadmin/index.php?route=/database/structure&db=user_database/");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Admin not found.";
    }

    $stmt->close();
    $conn->close();
}
?>
