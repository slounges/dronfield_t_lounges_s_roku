<?php
class Media
{
    private $conn;
    
    public $movie_table = '';
    public $genre_table = '';
    public $movie_genre_linking_table = '';

    public function __construct($db_connector)
    {
        $this->conn = $db_connector;
    }

    // public function getMedia(){
        // TODO: Return all media
        // $query = 'SELECT * FROM '.$this->$movie_table;

        // Dont need any of this right now
        // $query = 'SELECT m.*, GROUP_CONCAT(g.genre_name)';
        // $query .= ' AS genre_name'; 
        // $query .= ' FROM '.$this->movie_table.' m'; 
        // $query .= ' LEFT JOIN '.$this->movie_genre_linking_table.' link ON link.movies_id = m.movies_id'; 
        // $query .= ' LEFT JOIN '.$this->genre_table.' g ON g.genre_id = link.genre_id';
        // $query .= ' GROUP BY m.movies_id';

        // $stmt = $this->conn->prepare($query);

        // $stmt->execute();

        // return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function getMovieByGenre($genre){
    //     // TODO: Return movies under given genre
    //     $query = 'SELECT m.*, GROUP_CONCAT(g.genre_name) AS genre_names'; 
    //     $query .=' FROM '.$this->movie_table.' m';
    //     $query .=' LEFT JOIN '.$this->movie_genre_linking_table.' link ON link.movies_id = m.movies_id'; 
    //     $query .=' LEFT JOIN '.$this->genre_table.' g ON g.genre_id = link.genre_id';
    //     $query .=' WHERE g.genre_name LIKE "%'.$genre.'%"'; 
    //     $query .=' GROUP BY m.movies_id';

    //     // echo $query;
    //     // exit;

    //     $stmt = $this->conn->prepare($query);

    //     $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function getMovieById($id){
    //     // TODO: Return one movie that matches ID
    //     $query = 'SELECT * FROM '.$this->movie_table.'WHERE `movies_id` = '.$id;

    //     // echo $query;
    //     // exit;

    //     // Make sure query contains right query = done
    //     // Make sure query is executing = done

    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
}