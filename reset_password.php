<!-- reset_password.php -->
<?php
$token = $_GET['token'] ?? '';
?>

<form action="update_password.php" method="post">
  <input type="hidden" name="token" value="<?php echo $token; ?>">
  <input type="password" name="new_password" placeholder="Enter new password" required><br>
  <button type="submit">Reset Password</button>
</form>
