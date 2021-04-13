<doctype! html>
  <html>
    <head>
      <title>Login page</title>
      
    </head>
    <body>
      <style>
        .body{
          background-color: pink;
          text-align: center;
          position: absolute;
        }
      </style>
      <h2>Login</h2>
      <form class="body" method="get" action="actionpage.php"/>
     <label>Username</label> <input type="text" name="Username" placeholder="Username"><br><br>
     <label>password</label> <input type="password" name="password" placeholder="Password"><br><br>
      <input type="submit" >
      <p>New User? <a href="Index.php">..Register</a></p><br><br>
      <p><a href="change.php">Forgot Password</a></p>
      
    </body>
  </html>