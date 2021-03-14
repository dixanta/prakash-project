<?php
class PostDbService implements IPostService{

    public function __construct(){
        echo "db service called";
    }
    //this service connects to database
    public function getPosts(){
        $posts=[['title'=>'ramesh','body'=>'this is ramesh'],
        ['title'=>'raa','body'=>'this is ram']];
        return json_decode(json_encode($posts));
    }
}

