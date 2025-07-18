<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE users SET password=?, reset_token=NULL WHERE reset_token=?");
    $stmt->bind_param("ss", $new_password, $token);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Password reset successful!";
    } else {
        echo "Invalid or expired token.";
    }

    $stmt->close();
    $conn->close();
}
?>
