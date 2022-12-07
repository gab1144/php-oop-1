<?php
  include_once './class/Movie.php';
  include_once './class/Cast.php';

  $movie1 =  new Movie("Ritorno al futuro", 116, ["Fantascienza", "Commedia"], new Cast("Robert Zemeckis", ["Michael J. Fox", "Christopher Lloyd"]));
  $movie2 =  new Movie("Forrest Gump ", 142, ["Drammatico", "Commedia"], new Cast("Robert Zemeckis", ["Tom Hanks", "Robin Wright"]));

  $movie1->setPoster("https://www.postermania.it/45979-thickbox_default/manifesto-ritorno-al-futuro-michael-j-fox-steven-spielberg-cinema-poster-p14.jpg");

  $movie3 =  new Movie("Jurassic Park ", 127, [	"Avventura", "Fantascienza"], new Cast("Steven Spielberg", ["Laura Dern"]));
  $movie3->setPoster("https://m.media-amazon.com/images/I/816wlBnZx2L._SL1500_.jpg");

  $movieList = [$movie1, $movie2, $movie3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Movies</title>
</head>
<body>
  <div class="container">
    <h1>Movies</h1>
    <div class="card-area">

      <?php foreach ($movieList as $movie) : ?>
      <div class="movie-card">
        
        <img src="<?php echo $movie->getPoster() ?>" alt="<?php echo $movie->title ?>">
          
        <div class="info-movie">
          <span><?php echo $movie->title ?></>
          <span>Durata: <?php echo $movie->duration ?> min</>
          <span>Genere: 
            <?php
              $genreList = "";
              foreach ($movie->genres as $genre){
                $genreList .= $genre.", ";
              }
              $genreList = substr($genreList, 0, -2);
              echo $genreList;
          ?></span>
           <span>Regista: <?php echo $movie->cast->director ?></span>
          <span>Cast: 
            <?php
              $castList = "";
              foreach ($movie->cast->actors as $actor){
                $castList .= $actor.", ";
              }
              $castList = substr($castList, 0, -2);
              echo $castList;
          ?></span>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</body>
</html>