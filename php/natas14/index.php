<html>
  <head>
    <!-- This stuff in the header has nothing to do with the level -->
    <link rel="stylesheet" type="text/css" href="../natas.css" />
  </head>
  <body>
    <h1>natas14</h1>
    <div id="content">
      <?php

      include "./secret.php";

      if(array_key_exists("username", $_REQUEST)) {
        $link = mysqli_connect('db', 'natas14', 'natas14');
        mysqli_select_db($link, 'natas14');

        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        $query = "SELECT * from users where username=\"$username\" and password=\"$password\"";
        if(array_key_exists("debug", $_GET)) {
          echo "Executing query: $query<br>";
        }

        if(mysqli_num_rows(mysqli_query($link, $query)) > 0) {
          echo "Successful login! The flag is <code>$flag</code>.";
        } else {
          echo "Access denied!";
        }

        mysqli_close($link);
      } else {
      ?>
        <form action="index.php" method="POST">
          Username: <input name="username" /><br />
          Password: <input name="password" /><br />
          <input type="submit" value="Login" />
        </form>
      <?php } ?>

      <div id="viewsource"><a href="./source.php">View sourcecode</a></div>
    </div>
  </body>
</html>
