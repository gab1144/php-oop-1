<?php

class Cast
{
    public $director;
    public $actors = [];

    public function __construct($_director, array $_actors){
        $this->director = $_director;
        $this->actors = $_actors;
    }
}