<html>
  <head>
    <!-- This stuff in the header has nothing to do with the level -->
    <link rel="stylesheet" type="text/css" href="../natas.css" />
  </head>
  <body>
    <h1>natas8</h1>
    <div id="content">

    <?php

    include("secret.php");
    $encodedSecret = "3d3d516343746d4d6d6c315669563362";

    function encodeSecret($secret) {
        return bin2hex(strrev(base64_encode($secret)));
    }

    if(array_key_exists("submit", $_POST)) {
      if(encodeSecret($_POST['secret']) == $encodedSecret) {
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

      <div id="viewsource">
        <a href="./source.php">View sourcecode</a>
      </div>
    </div>
  </body>
</html>
