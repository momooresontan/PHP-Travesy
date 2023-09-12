<?php 
    if(isset($_POST["submit"])){
        // $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
        echo $name;
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div>
        <label for="name">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="age">Password: </label>
        <input type="text" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>