<html>
  <head>
    <!-- This stuff in the header has nothing to do with the level -->
    <link rel="stylesheet" type="text/css" href="../natas.css" />
  </head>
  <body>
    <h1>natas6</h1>
    <div id="content">

      <?php

      include "includes/secret.inc";

      if(array_key_exists("submit", $_POST)) {
        if($secret == $_POST['secret']) {
          $flag = getenv("NATAS06");
          print "Access granted. The flag is <code>$flag</code>.";
        } else {
          print "Wrong secret";
        }
      }
      ?>

      <form method="post">
        Input secret: <input name="secret" autocomplete="off" /><br />
        <input type="submit" name="submit" />
      </form>

      <div id="viewsource"><a href="./source.php">View sourcecode</a></div>
    </div>
  </body>
</html>
