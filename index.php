<?php

class Movie {
    
    public $title;
    public $director;
    public $year;
    public $description;
    public $genre;

    function __cosstruct($title, $director, $year, $description ,$genre) {
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