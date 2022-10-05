<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sense of Style</title>
    <link rel="stylesheet" href="../style.css" />
  </head>

  <body>
    <h1>Cookie</h1>

    <div>
      Send this cookie to anything to get the flag: <code>give_me_flag</code>.
    </div>

    <?php
    if (isset($_COOKIE["give_me_flag"])) {
    ?>
    <p>The flag is <code>gopher{this_is_the_flag_12345}</code>.</p>
    <?php
    }
    ?>
  </body>
</html>
