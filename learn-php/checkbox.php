<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="checkbox.php" method="post">
      Apples: <input type="checkbox" name="fruits[]" value="Apples">
      <br>
      Oranges: <input type="checkbox" name="fruits[]" value="Oranges">
      <br>
      Pears: <input type="checkbox" name="fruits[]" value="Pears">
      <!-- [] necessary in name as the value of all the checkboxes checked will be stored in the fruits[] array -->
      <br>
      <input type="submit">
    </form>

    <?php
      $fruits = $_POST["fruits"]; //no [] to be written here "fruits"
      echo $fruits[0];


     ?>
  </body>
</html>
