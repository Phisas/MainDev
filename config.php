<?php
$db = mysqli_connect("localhost","root","","phisas");
if(!isset($db))
{
    die("Error connecting to database" .mysqli_error($db));
}
?>