<?php
include('db.php'); // Including the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        // Prepare SQL to find user based on email
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashed_password)) {
                // ✅ Start session and store user info
                session_start();
                $_SESSION['user_id'] = $id;

                // ✅ Redirect to OpenResume dashboard
                header("Location: http://localhost:3000/");
                exit();
            } else {
                echo "❌ Incorrect password.";
            }
        } else {
            echo "❌ No user found with that email.";
        }

        $stmt->close();
    } else {
        echo "⚠️ Please fill in both fields!";
    }

    $conn->close();
}
?>
