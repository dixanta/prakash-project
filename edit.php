<?php 

    $id=$_REQUEST['id'];
    if($id==null || !isset($id)){
        header('Location:index.php');
        exit;
    }
    include_once('providers/DriverProvider.php');
    $driver=getDriverById($id);
    if($driver == null){
        header('Location:index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Driver</h1>
    <form method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?=$driver['firstName']?>"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?=$driver['email']?>"/>
        </div>
        <div>
            <label>Contact No</label>
            <input type="text" name="contact" value="<?=$driver['contactNo']?>"/>
        </div>
        <div>
            <label>Status</label>
            <input type="checkbox" name="status" <?php echo ($driver['status'])?'checked':'' ?>/>
        </div>
        <button type="submit">Save</button>
        <a href="index.php">Back</a>
    </form>
</body>
</html>