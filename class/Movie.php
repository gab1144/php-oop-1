<?php

class Movie
{
    public $title;
    public $duration;
    public $poster;
    public $genres = [];
    public $cast;

    public function __construct($_title, $_duration, array $_genres, Cast $_cast = null){
        $this->title = $_title;
        $this->duration = $_duration;
        $this->genres = $_genres;
        $this->cast = $_cast;
    }

    public function setPoster($_img){
        $this->poster = $_img;
    }

    public function getPoster(){
        $placeholder = 'https://cringemdb.com/img/movie-poster-placeholder.png';

        if ($this->poster) {
            return $this->poster;
        }

        return $placeholder;
    }
}