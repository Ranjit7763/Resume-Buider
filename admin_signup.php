<body>
  <div class="logo-container">
    <img src="logo.svg" alt="Logo">
  </div>

<form action="admin_register.php" method="post" class="admin-signup-form">
  
  <h2>Admin Signup</h2>
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Sign Up</button>

  <!-- Back to Login Link -->
  <div class="back-link">
    <a href="index.html">Back to Login</a>
  </div>
</form>


<style>
  
  /* Overall page styling */
  body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #6E7CFF, #0072FF);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    color: #fff;
  }

  /* Form container styling */
  .admin-signup-form {
    width: 100%;
    max-width: 350px;
    padding: 30px;
    border-radius: 12px;
    background: #fff;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    display: flex;
    flex-direction: column;
    gap: 15px;
    transition: all 0.3s ease-in-out;
  }

  /* Header styling */
  .admin-signup-form h2 {
    text-align: center;
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
  }

  /* Input field styling */
  .admin-signup-form input[type="text"],
  .admin-signup-form input[type="email"],
  .admin-signup-form input[type="password"] {
    width: 100%;
    padding: 14px 20px;
    margin: 10px 0;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
  }

  /* Input focus effect */
  .admin-signup-form input[type="text"]:focus,
  .admin-signup-form input[type="email"]:focus,
  .admin-signup-form input[type="password"]:focus {
    outline: none;
    border-color: #4D9BF3;
    background-color: #eef2ff;
  }

  /* Button styling */
  .admin-signup-form button {
    padding: 14px;
    font-size: 18px;
    color: white;
    background-color: #0072FF;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
    font-weight: bold;
  }

  /* Button hover effect */
  .admin-signup-form button:hover {
    background-color: #005bb5;
    transform: translateY(-2px);
  }

  /* Back link styling */
  .back-link {
    text-align: center;
    margin-top: 20px;
  }

  .back-link a {
    color: #0072FF;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    transition: color 0.3s ease;
  }

  .back-link a:hover {
    color: #005bb5;
  }

  /* Form hover effect */
  .admin-signup-form:hover {
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
  }
  .logo-container {
    text-align: center;
    margin-bottom: 20px;
    position: absolute;
    top: 30px;
    width: 100%;
  }

  .logo-container img {
    width: 200px;
    height: 150;
  }


  /* Responsive adjustments for smaller screens */
  @media (max-width: 600px) {
    .admin-signup-form {
      padding: 20px;
      width: 90%;
    }
  }
</style>
