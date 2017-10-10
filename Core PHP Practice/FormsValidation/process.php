<h1>Process</h1>
<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/10/2017
 * Time: 4:22 PM
 */
session_start();

$name = $_REQUEST['name'];

if($name=='usman')
{
    $_SESSION['error_name'] = 'You Cant Take name: Usman';
    header('Location: index.php');
}
$age = $_REQUEST['age'];
$country = $_REQUEST['country'];
$cc = $_REQUEST['cc'];
echo "Name: $name <br> Age: $age <br> Countr $country <br>";
echo "Credit Card: $cc <br>";

