<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Join Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php 
                
                foreach($data as $driver):
            ?>
                <tr>
                    <td><?=$driver->getId()?></td>
                    <td><?=$driver->getName()?></td>
                    <td><?=$driver->getEmail()?></td>
                    <td><?=$driver->getContactNo()?></td>
                    <td><?=$driver->getJoinDate()?></td>
                    <td>
                    <?php
                        echo ($driver->getStatus())?'Active':'Inactive';
                    ?></td>
                    <td>
                        <a href="edit.php?id=<?=$driver->getId()?>">Edit</a> 
                        Delete
                    </td>
                </tr>
            <?php
                endforeach;    
            ?>
    </table>
</body>
</html>