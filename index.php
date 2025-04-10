<?php

class Movie {
    
    public $title;
    public $director;
    public $year;
    public $description;
    public $genre;

    function __construct($title, $director, $year, $description ,$genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->description = $description;
        $this->genre = $genre;
    }

    public function getDirector() {
        return $this->director;
    }

};


$movie1 = new Movie(
    "Spiderman", 
    "Sam Raimi", 
    2002, 
    "Peter Parker, un giovane fotografo, acquisisce poteri sovrumani dopo il morso di un ragno geneticamente modificato.",
    "superhero"
);

$movie2 = new Movie(
    "Le Iene", 
    "Quentin Tarantino", 
    1992, 
    "Una rapina andata male porta sei criminali, che non si conoscono tra loro, a sospettare che uno di loro sia una spia della polizia.",
    "crime"
);

$movie3 = new Movie(
    "Forrest Gump", 
    "Robert Zemeckis", 
    1994, 
    "La straordinaria vita di Forrest Gump, un uomo semplice con un cuore puro, che attraversa decenni di storia americana.",
    "drama"
);

$movie4 = new Movie(
    "Il Signore degli Anelli: La Compagnia dell’Anello", 
    "Peter Jackson", 
    2001, 
    "Il giovane hobbit Frodo Baggins intraprende un epico viaggio per distruggere l’Unico Anello e salvare la Terra di Mezzo dall’Oscuro Signore Sauron.",
    "fantasy"
);

// var_dump($movie1, $movie2, $movie3, $movie4);
$movies = [$movie1, $movie2, $movie3, $movie4];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach($movies as $movie){?>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie -> title ?></h5>
                        <p class="card-text"><<?php echo $movie -> director ?></p>
                        <p class="card-text"><?php echo $movie -> year?></p>
                        <p class="card-text"><?php echo $movie -> description?></p>
                        <p class="card-text"><?php echo $movie -> genre?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>