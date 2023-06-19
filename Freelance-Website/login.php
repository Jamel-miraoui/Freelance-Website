<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="Src/css/index.css" />
    <link rel="stylesheet" href="Src/js/index.js" />
  </head>
  <body>
    <div class="main">
      <input type="checkbox" id="chk" aria-hidden="true" />
      <div class="signup">
        <form method="post" action="Src/phpFunction/signup.php">
          <label for="chk" aria-hidden="true">Sign up</label>
          <input type="text" name="user" placeholder="User name" required="true" />
          <input type="email" name="email" placeholder="Email" required="true" />
          <input
            type="password"
            name="psw"
            placeholder="Password"
            required=""
          />
          <div class="notif">
          <?php
          if ($_GET['msg']==3){
            echo"<p>(!) username or email alredy existes</p>";
          }
          ?>
          <?php
          if ($_GET['msg']==1){
            echo"<p>(!) Invalid username or password.</p>";
          }
          ?>
          </div>
          <button value="submit">Sign up</button>
        </form>
      </div>


      <div class="login" >
        <form method="post" action="/Src/phpFunction/login.php">
          <label for="chk" aria-hidden="true">Login</label>
          <input type="text" name="username" placeholder="Email" required="" />
          <input type="password" name="password" placeholder="Password" required="" />
          <button type="submit">Login</button>
          <div class="notif1">
          <?php
          if ($_GET['msg']==1){
            echo"<p>Invalid username or password.</p>";
          }
          ?>
          </div>
        </form>
      </div>

    </div>
  </body>
</html>
