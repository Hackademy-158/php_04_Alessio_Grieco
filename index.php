<?php

require('class.php');

class Post
{
    public $title;
    public $category;
    public $tag;

    public function __construct($title, Category $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }
    
    //! Avendo un richiamo di funzione di una classe parent astratta, 
    //! devo per forza usare un return, quindi escluderla succedeivamente dall'echo globale.
    public function getCategory()
    {
        return $this->category->getMyCategory();
    }

    public function getNewPost()
    {
        echo "L'articolo riguarda il $this->title, " . $this->getCategory() . " $this->tag. \n";
    }
}
                        //title            //Category       //tag
$Article1 = new Post('Club dell', new Attualita(), '#Now');
$Article1->getNewPost();


$Article2 = new Post('Club dello', new Sport(), '#USports');
$Article2->getNewPost();


$Article3 = new Post('Club del', new Gossip(), '#ChatwUS');
$Article3->getNewPost();


$Article4 = new Post('Club della', new Storia(), '#FarBack');
$Article4->getNewPost();