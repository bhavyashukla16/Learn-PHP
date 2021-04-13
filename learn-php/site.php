<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="site.php" method="get">
        Name:<br>
        <input type="text" name="username">
        <br>
        Age: <br>
        <input type="number" name="age">
        <input type="submit">

      </form>
      Your name is
     <?php
       echo $_GET["username"];
     ?>
     <br>
     Your age is
     <?php echo $_GET["age"] ?>
  </body>
</html>
