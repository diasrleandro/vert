<?php

class Usuario{
    
    private $id;
    private $title;
    private $text;
    private $tag;

    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getText() {
        return $this->text;
    }

    function getTag() {
        return $this->tag;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setTitle($title) {
        $this->title = $title;
    }    

    function setTag($tag) {
        $this->tag = $tag;
    }

 
}