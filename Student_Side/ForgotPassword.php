<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <link href="../assets/css/forgot_password_style.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="assets/img/GCU_logo.png" alt="Logo" width="90" height="90">
    </div>
    <h2>Forgot Password</h2>
    <form action="reset_password.php" method="post">
      <label for="email">Email*</label>
      <input type="email" id="email" name="email" required>
      
      <input type="submit" value="Reset Password">
    </form>
  </div>
</body>
</html>
