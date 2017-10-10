<h1>Process</h1>
<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/10/2017
 * Time: 4:22 PM
 */


$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$country = $_REQUEST['country'];
$cc = $_REQUEST['cc'];
echo "Name: $name <br> Age: $age <br> Countr $country <br>";
echo "Credit Card: $cc <br>";

header('Location: index.html');