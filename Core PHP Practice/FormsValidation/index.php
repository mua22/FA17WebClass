<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div style="color:red">
    <?php
    session_start();
    if(isset($_SESSION['error_name'])){
        echo $_SESSION['error_name'];
        unset($_SESSION['error_name']);
    }

    ?>
</div>
<form action="process.php" method="post">
    Name: <input type="text" name="name" placeholder="Enter Name" value="test"> <br>
    Age: <input type="text" name="age" value="20"> <br>
    <select name="country" id="">
        <option value="1">Pakistan</option>
        <option value="2">India</option>
    </select>
    <fieldset>
        <legend>Credit Card Info</legend>
        MasterCard: <input type="radio" checked="checked" value="master" name="cc">
        Visa: <input type="radio" name="cc" value="visa">
    </fieldset>
    <fieldset>
        <legend>Hobbies</legend>
        Cricket: <input type="checkbox" checked="cricket" value="cricket" name="cc">
        Hockey: <input type="checkbox" name="hockey" value="hockey">
    </fieldset>
    <input type="submit">
</form>
</body>
</html>