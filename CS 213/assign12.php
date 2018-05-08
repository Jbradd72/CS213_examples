<?php 

$name1 = $_GET["fname1"]." ".$_GET["lname1"];
$name2 = $_GET["fname2"]." ".$_GET["lname2"];

$id1 = $_GET["id1"];
$id2 = $_GET["id2"];

$type = $_GET["type"];
$instrument = $_GET["instrument"];
$building = $_GET["location"];
$skill = $_GET["skill"];    
$room = $_GET["room"];
$time = $_GET["time"];

$line = "<tr><td>{$name1}</td><td>{$id1}</td><td>{$type}</td><td>{$skill}</td><td>{$instrument}</td><td>{$building}</td><td>{$room}</td><td>{$time}</td></tr>";


$fileVar = fopen("assign12.txt", a);
echo file_put_contents("assign12.txt", $line, FILE_APPEND);

if ($id2 != "")
{
    $line = "<tr><td>{$name2}</td><td>{$id2}</td><td>{$type}</td><td>{$skill}</td><td>{$instrument}</td><td>{$building}</td><td>
            {$room}</td><td>{$time}</td></tr>";
    file_put_contents("assign12.txt", $line, FILE_APPEND);
    
}

fclose($fileVar);
?>