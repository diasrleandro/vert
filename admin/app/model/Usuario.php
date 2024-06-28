<?php

class Usuario{
    
    private $id;
    private $title;
    private $tag1;
    private $content1;
    private $tag2;
    private $content2;    
    private $display;

    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }


    function getTag1() {
        return $this->tag1;
    }


    function getTag2() {
        return $this->tag2;
    }


    function getContent1() {
        return $this->content1;
    }


    function getContent2() {
        return $this->content2;
    }


    function getDisplay() {
        return $this->display;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }    

    function setTag1($tag1) {
        $this->tag1 = $tag1;
    }

    function setContent1($content1) {
        $this->content1 = $content1;
    }

    function setContent2($content2) {
        $this->content2 = $content2;
    }
 
    function setTag2($tag2) {
        $this->tag2 = $tag2;
    }

    function setDisplay($display) {
        $this->display = $display;
    }
 
}