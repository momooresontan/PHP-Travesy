<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>

<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=MoMo&age=22">Click</a>

<?php 
    if(isset($_POST["submit"])){
        echo $_POST["name"];
        echo $_POST["age"];
    }
?>
