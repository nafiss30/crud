<!DOCTYPE html>
<html lang="en">

<?php
include 'connect.php';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>crud operation</title>
</head>

<body>
    <button class="btn_dis"><a href="user.php">Add user</a></button>

    <table class="table">
        <thead>
            <tr>
                <th>Sl no</th>
                <th>name</th>
                <th>email</th>
                <th>mobile</th>
                <th>password</th>
                <th>operation</th>

            </tr>

        </thead>


        <tbody>

            <?php
            $sql = "SELECT * FROM crud";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $password = $row['password'];

                echo '
        <tr>
            <td>' . $id . '</td>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>
            <td>
                <button class="btn_update"><a href="update.php?updateid=' . $id . '">Update</a></button>
   <button class="btn_delete"><a href="delete.php?deleteid=' . $id . '">Delete</a></button> 
            </td>
        </tr>
    ';
            }
            ?>

        </tbody>





    </table>





</body>

</html>