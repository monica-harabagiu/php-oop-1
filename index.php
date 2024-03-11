<?php

class Movie {
    public $title;
    public $year;
    public $vote;

    function __construct($_title, $_year, $_vote){
        $this->title = $_title;
        $this->year = $_year;
        $this->vote = $_vote;
    }

    public function getMovieAge(){
        $currenYear = date("Y");
        return $currenYear - $this->year;
    }
}

$avengers = new Movie('Avengers', 2012, 8);
$seven = new Movie('Se7en', 1995, 8.6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

    <h1>Movies</h1>

    <h3>
        <?php echo $avengers->title ?>
    </h3>
    <span>
        <?php echo $avengers->year ?>
    </span>
    <span>
        (This movie is <?php echo $avengers->getMovieAge() ?> years old)
    </span>
    <p>
        Vote: <?php echo $avengers->vote ?>
    </p>

    <hr>

    <h3>
        <?php echo $seven->title ?>
    </h3>
    <span>
        <?php echo $seven->year ?>
    </span>
    <span>
        (This movie is <?php echo $seven->getMovieAge() ?> years old)
    </span>
    <p>
        Vote: <?php echo $seven->vote ?>
    </p>
    
    
</body>
</html>