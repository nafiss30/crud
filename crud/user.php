<?php  //database e entry dewar jonno ei part
include 'connect.php'; //database coonect
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile']; 
    $password = $_POST['password'];

    $sql = "INSERT INTO crud(name,email,mobile,password)
        VALUES('$name','$email','$mobile','$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: display.php'); //submit e exit howar por direct user page e niye ashbe
        exit;
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="user-page">
    <div class="container">


        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="enter your name" name="name">
            </div>

            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control" placeholder="enter your email" name="email">
            </div>

            <div class="form-group">
                <label>MObile no</label>
                <input type="text" class="form-control" placeholder="enter your mobile" name="mobile">
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" class="form-control" placeholder="enter your password" name="password">
            </div>

            <button type="submit" class="btn" name="submit">Submit</button>








        </form>







    </div>
</body>

</html>