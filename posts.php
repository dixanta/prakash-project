<?php
include_once('providers/PostProvider.php');
include_once('services/IPostService.php');
include_once('services/PostService.php');
include_once('services/PostDbService.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $service=new PostProvider(new PostDbService());
    $posts=$service->getPosts();
    
    foreach($posts as $post){
?>
    <div>
        <h1><?=$post->title?></h1>
        <p>
            <?=$post->body?>
        </p>
    </div>
<?php    
    }
?>
</body>
</html>