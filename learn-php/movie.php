<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Movie {
        //there is not much difference bet var and public in terms of privacy but mostly ppl use public
        public $title;// can be accessed anywhere inside the php file
        private $rating; //rating variable if private so it cannot be accessed or motified outside class

        function __construct($title, $rating){ //constructor having two attributes movie title and its rating
          $this->title = $title;
          $this->setRating($rating); /* will not let anyone set an invalid rating of the movie,
          ensues there is no way a movie could have an invalid rating */
        }

        function setRating($rating){ //setter function sets the rating in the class itself as rating is private
          if($rating == 'U' || $rating == 'U/A' || $rating == 'A'){ //valid ratings
           $this->rating = $rating;
         }else{
           $this->rating = "NR"; //otherwise not rated
         }
       }

         function getRating(){ //getter function is used to access the rating of the movie
           return $this->rating;
         }
      }

      $movie1 = new Movie("2 States", "F"); //creating a new $movie1 object of the Movie class
      $movie2 = new Movie("Doctor Strange", "U");

      echo $movie1->getRating(); //prints NR cause F is not a valid rating

     ?>

  </body>
</html>
