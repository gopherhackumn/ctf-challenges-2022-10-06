<html>
  <head>
    <!-- This stuff in the header has nothing to do with the level -->
    <link rel="stylesheet" type="text/css" href="../natas.css" />
  </head>

  <body>
    <h1>natas15</h1>
    <div id="content">
      <?php

      /*
      CREATE TABLE `users` (
        `username` varchar(64) DEFAULT NULL,
        `password` varchar(64) DEFAULT NULL
      );
      */

      include "./secret.php";

      if(array_key_exists("username", $_REQUEST)) {
        $link = mysqli_connect('db', 'natas15', 'TTkaI7AWG4iDERztBcEyKV7kRXH1EZRB');
        mysqli_select_db($link, 'natas15');

        $query = "SELECT * from users where username=\"" . $_REQUEST["username"] . "\"";

        // If the URL includes ?debug=, then display the query.
        if(array_key_exists("debug", $_GET)) {
          echo "Executing query: $query<br>";
        }

        $res = mysqli_query($link, $query);
        if($res) {
          if(mysqli_num_rows($res) > 0) {
            echo "This user exists.<br>";
          } else {
            echo "This user doesn't exist.<br>";
          }
        } else {
          echo "Error in query.<br>";
        }

        mysqli_close($link);
      } else {
      ?>
        <form action="index.php" method="POST">
          Username: <input name="username" autocomplete="off" /><br />
          <input type="submit" value="Check existence" />
        </form>
      <?php
      }
      ?>

      <div id="viewsource">
        <a href="./source.php">View sourcecode</a>
      </div>
    </div>
  </body>
</html>
