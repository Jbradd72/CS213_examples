<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="assign05.css">
    <title>
        Results
    </title>
</head>


<body style="text-align: center">
    <?php
       if ($_GET["submit"] == "Confirm")
       {
           $color = "green";
           $message = "Purchase Confirmed";
       }
       else
       {
           $color = "red";
           $message = "Purchase Cancelled";
       }?>
    <h1 style="color:<?php echo $color ?>; padding: 12.5%;"><?php echo $message ?></h1>
</body>
