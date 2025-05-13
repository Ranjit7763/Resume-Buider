<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $token = bin2hex(random_bytes(32));

    $stmt = $conn->prepare("UPDATE users SET reset_token=? WHERE email=?");
    $stmt->bind_param("ss", $token, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $resetLink = "http://localhost/myformsite/reset_password.php?token=$token";
        echo "Reset link (for testing): <a href='$resetLink'>$resetLink</a>";
    } else {
        echo "No user found with that email.";
    }

    $stmt->close();
    $conn->close();
}
?>
