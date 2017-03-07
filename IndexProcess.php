<?php
/**
 * Created by PhpStorm.
 * User: ToSzi
 * Date: 3/7/2017
 * Time: 8:11 PM
 */

$firstName = $_Post(firstName);
$lastName = $_Post(lastName);

printDetails($firstName, $lastName);


function printDetails($firstName, $lastName)
{
    echo"<p>Hello {$firstName} {$lastName} how are you today?";
}

?>