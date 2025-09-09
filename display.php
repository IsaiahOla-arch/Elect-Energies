<?php

include 'connected.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" style="text-decoration: none;" class="text-light">Add user</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Username</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM crud";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $username = $row['username'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $password = $row['password'];

                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$username.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$email.'</td>
                                <td>'.$password.'</td>
                                <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" style="text-decoration: none;" class="text-light">Update</a></button> 
                                <button class="btn btn-danger"><a href="delete.php?deleteid= '.$id.'" style="text-decoration: none;" class="text-light">Delete</a></button></td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>