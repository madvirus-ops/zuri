<doctype! html>
<html>
  <head>
    <tile>Registration Form</tile>
  </head>
<body>
  <h2>User registration </h2>
  <form class="body" action="actionpage.php" method="post">
   <label>First Name </label>
  <input type="text" name="first_name"/><br><br>
 <label>Last name</label>
  <input type="text" name="last_name"/>
  <br><br>
 <label>Date Of Birth</label>
  <input type="date" name="dob"/><br><br>
 <label>Username</label>
 <input type="text" name="username"/><br><br>
  <label>Password</label>
  <input type="text" name="password"/>
  <br>
  <br>
 <label>confirm Password</label>
  <input type="text" name="confirm_password"/><br><br>
  <input type="submit"/>
  <p>already have an account? <a href="Login.php">..Login</a></p>
  </form>
  <style>
    .body{
      position: absolute;
      text-align: center;
      background-color: pink;
    }
  </style>
</body>
</html>