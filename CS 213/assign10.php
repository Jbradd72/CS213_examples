<!doctype html>
<html lang="en">

<head>
    <title>
        Purchase Confirmation
    </title>

    <link rel="stylesheet" type="text/css" href="assign05.css">
    <style>
        form {
            border: 0;
            background-color: transparent;
        }
        
        table {
            border: 1.5px solid;
            text-align: left;
            margin-top:10px;
            
        }
        th{
            text-align: center;
        }
        
        #bought-items{
            border:0px;
        }
        
        tr,
        td {
            padding: 15px;
        }
        
        

    </style>
</head>


<body style="text-align: center">
    <h1> Purchase Confirmation</h1>
    <div>
       <h2> Order Summary </h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Credit Card Type</th>
                <th>Credit Card Exp Date</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>
                    <?php echo $_GET["fname"] . ' ' . $_GET["lname"];?>
                </td>
                <td>
                    <?php echo $_GET["address"]; ?>
                </td>
                <td>
                    <?php echo $_GET["phone-number"]; ?>
                </td>
                <td>
                    <?php echo $_GET["card-type"]; ?>
                </td>
                <td>
                    <?php $dates = explode("/", $_GET["exp-date"]);
                    switch($dates[0]){
                        case 1: echo "January $dates[1]";
                            break;
                        case 2: echo "February $dates[1]";
                            break;
                        case 3: echo "March $dates[1]";
                            break;
                        case 4: echo "April $dates[1]";
                            break;
                        case 5: echo "May $dates[1]";
                            break;
                        case 6: echo "June $dates[1]";
                            break;
                        case 7: echo "July $dates[1]";
                            break;
                        case 8: echo "August $dates[1]";
                            break;
                        case 9: echo "September $dates[1]";
                            break;
                        case 10: print "October $dates[1]";
                            break;
                        case 11: echo "November $dates[1]";
                            break;
                        case 12: echo "December $dates[1]";
                            break;
                    }?>
                </td>
                <td>
                    <?php echo $_GET["total"]; ?>
                </td>
            </tr>
        </table>
        <table id ="bought-items">
            
        <tr><th>Item</th><th>Price</th></tr>
            <?php foreach ($_GET["items"] as $item)
                {   
                    $item_name = "";
                    switch($item){
                        case 149.99: print "<tr><td>Engagement Photos:</td><td> $item</td></tr>";
                            break;
                        case 249.99: print "<tr><td>Engagement Video:</td><td> $item</td></tr>";
                            break;
                        case 499.99: print "<tr><td>Wedding Photos:</td><td> $item</td></tr>";
                            break;
                        case 799.99: print "<tr><td>Wedding Video:</td><td> $item</td></tr>";
                            break;
                        case 99.99:  print "<tr><td>Family Package:</td><td> $item</td></tr>";
                            break;
                    }
                }
            ?>
        </table>
    </div>

    <form action="assign10_a.php" method="get">
        <input style="background-color:green;color:lightgrey;" type="submit" name="submit" value="Confirm">
        <input style="background-color: red;color:lightgrey;" type="submit" name="submit" value="Cancel Order"></form>

</body>
