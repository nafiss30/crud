<?php
include 'connect.php';

$id = $_GET['updateid'];
//form e dekhanor jonno ager part gulo
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
//ekahne main update er kaj suru
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="user-page">
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="form-group">
                <label>Mobile no</label>
                <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
            </div>

            <button type="submit" class="btn" name="submit">Update</button>
        </form>
    </div>
</body>

</html>