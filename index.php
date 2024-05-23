<?php
    include("db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .login-container {
    background-color: #F8F0E5;
    border-radius: 8px;
    box-shadow: 5px 5px;
    padding: 40px;
    width: 220px;
    max-width: 90%;
  }

  .login-container h2 {
    font-size: 35px;
    margin-bottom: 25px;
    text-align: center;
    color: #333333;
  }

  .textfield {
    margin-bottom: 20px;
  }

  .textfield label {
    display: block;
    font-size: 16px;
    margin-bottom: 8px;
    color: #555555;
  }

  .textfield input {
    width: 90%;
    padding: 12px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    background-color: #D4E2D4;
    color: #333333;
  }

  .textfield input:focus {
    border-color: #66afe9;
    outline: none;
  }

  .btn {
    background-color: green;
    border: none;
    color: #ffffff;
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    transition: background-color 0.3s ease-in-out;
  }

  .btn:hover {
    background-color: #557A46;
  }

</style>
</head>
<body>
  <div class="login-container">
    <h2>Login Form</h2>
    <form action="login.php" method = "POST">
    <div class="textfield">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your name" required>
      </div>
      <div class="textfield">
        <label for="password">Password</label>
        <input type="text" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button class="btn" name="submit" type="submit">Login</button>
    </form>
  </div>
</body>
</html>
