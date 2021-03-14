<?php
class PostProvider{
    private $service=NULL;

    public function __construct($service){
        $this->service=$service;
    }

    public function getPosts(){
        return $this->service->getPosts();
    }

}