<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     class Chef {
       function makeSamosa(){
         echo "The chef makes tasty samosa <br>";
       }
       function makeJalebi(){
         echo "The chef makes Amazing Jalebi <br>";
       }
       function makeSpecialDish(){
         echo "The chef makes Chhappan Bhog <br>";
       }
     }

     class ItalianChef extends Chef{ // now class ItalianChef can use all the functions in the class Chef n ofc its own func
       function makePizza(){
         echo "The Italian Chef makes Pizza";
       }
       function makeSpecialDish(){ //function overwriting, using the same name as the function in class Chef
         echo "The Italian chef makes Creamy mushroom Pasta <br>";
       }
     }

     $chef = new Chef();
     $chef->makeJalebi();

     $italianChef = new ItalianChef();
     $italianChef->makeJalebi();

     $chef->makeSpecialDish(); //chhappan bhog
     $italianChef->makeSpecialDish(); //creamy mushroom pasta

     $chef->makePizza(); //throws error



     ?>

  </body>
</html>
