<?php
    include_once('./__autoload.php');
    


    
    $url=$_SERVER['REQUEST_URI'];
    $tokens=explode('/',$url);

    print_r($tokens);
    
    if($tokens[1]=='' || $tokens[1]=='home'){
        $controller = new http\Controllers\HomeController();
        if(count($tokens)<=2){
            $controller->index();
        }else{
            if(empty($tokens[2])|| $tokens[2]=='index'){
                $controller->index();
            }else{
                $fn=$tokens[2];
                $controller->{$fn}();
            }
        }
    }else if($tokens[1]=='about'){
        echo '<h1>Hello World About Page</h1>';
    }else if($tokens[1]=='contact'){
        echo '<h1>contact us</h1>';
    }



