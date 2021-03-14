<?php


class PostService implements IPostService{

    public function __construct(){
        echo "api service called";
    }

    public function getPosts(){
        $curl=curl_init('https://jsonplaceholder.typicode.com/posts');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result=curl_exec($curl);
        curl_close($curl);
        return json_decode($result);
    }
}

