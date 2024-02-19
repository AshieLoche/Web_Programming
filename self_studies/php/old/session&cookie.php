<?php

    // sessions
    if (isset($_POST['submit'])) {
        session_start();

        // cookie  for gender
        setcookie('gender',  $_POST['gender'], time() + 86400);

        $_SESSION['name'] = $_POST['name'];

        header('Location: index.php');
    }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>