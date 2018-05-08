<!doctype html>
<html lang="en">

<head>
    <title>
        Mortgage Calculator
    </title>

    <link rel="stylesheet" type="text/css" href="assign04.css">
    <script type="text/javascript">
        function focusApr() {
            document.getElementById("apr").focus();

        }

        function isAprInvalid(apr) {
            return (isNaN(apr) || apr == undefined || apr > 100 || apr < 0 || apr == "");
        }

        function isYearsInvalid(years) {
            return (isNaN(years) || years < 1 || years > 40 || years == undefined);
        }

        function isPrincipalInvalid(principal) {
            return (isNaN(principal) || principal == undefined || principal <= 0);
        }

        function clear() {
            document.getElementById("apr").style.backgroundColor = null;
            document.getElementById("years").style.backgroundColor = null;
            document.getElementById("amount").style.backgroundColor = null;

            focusApr();
        }

        function validate() {
            document.getElementById("apr").style.backgroundColor = null;
            document.getElementById("years").style.backgroundColor = null;
            document.getElementById("amount").style.backgroundColor = null;

            var apr = document.getElementById("apr").value;
            var years = document.getElementById("years").value;
            var principal = document.getElementById("amount").value;



            if (!isAprInvalid(apr) && !isYearsInvalid(years) && !isPrincipalInvalid(principal)) {
                document.getElementById("payment").value = payment.toFixed(2);
                return true;
            }

            if (isAprInvalid(apr)) {
                alert("APR is in the wrong form.\nPlease use a number.");
                document.getElementById("apr").focus();
                document.getElementById("apr").style.backgroundColor = "red";
                return false;

            }
            if (isYearsInvalid(years)) {
                alert("Loan Term is in the wrong form.\nPlease use a number between 1 and 40.");
                document.getElementById("years").focus();
                document.getElementById("years").style.backgroundColor = "red";
                return false;

            }
            if (isPrincipalInvalid(principal)) {

                alert("Loan Amount is in the wrong form.\nPlease use a number greater than 0.");
                document.getElementById("amount").focus();
                document.getElementById("amount").style.backgroundColor = "red";
                return false;
            }

        }

    </script>

    <style>
        button {
            border: 3px solid cyan;
            border-radius: 12px;
            padding: 1%;
            background-color: cyan;
        }

    </style>
</head>

<body onload="handler('focus')">

    <h1>
        Assignment 9 Part 1
    </h1>
    <div style="margin:auto; text-align: center;">
        <button #id="button" style="margin-bottom:1em" onclick="window.location = 'mortgage.html'">Mortgage Calculator</button>
        <button #id="button" style="margin-bottom:1em" onclick="window.location = 'assign09.html'">Load Directory</button>
    </div>
    <h2 style="text-align: center">Mortgage Calculator</h2>
    <div id="mortgage-calculator">
        <form onsubmit="return validate()" action="mortgage.php" method="get" onreset="handler('clear')">
            <table>
                <tr>
                    <td>
                        <h3>APR: </h3>
                    </td>
                    <td><input type="text" name="apr" id="apr" value="" onchange="handler('validate')" placeholder="APR in Percent (7.00, 6.59)" size="25"></td>
                </tr>
                <tr>
                    <td>
                        <h3>Loan Term(Years)</h3>
                    </td>
                    <td><input type="text" name="years" id="years" onchange="handler('validate')" placeholder="Loan Term in Years (5, 10, 25, 30)" size="25"></td>
                </tr>
                <tr>
                    <td>
                        <h3>Loan Amount</h3>
                    </td>
                    <td><input type="text" name="amount" id="amount" onchange="handler('validate')" placeholder="Loan Amount (300.00, 10000.00)" size="25"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Clear Form "></td>
                    <td><input type="submit" id="calcButton" value="Calculate Payment "></td>
                </tr>
                <tr>
                    <h3 id="result ">Monthly Payment: </h3>
                    <input type="text " id="payment" value= 
                           <?php 
                           (double)$rate= $_GET["apr"] / 1200;
                           (int)$months= $_GET["years"] * 12;
                           $principal= $_GET["amount"];
                           $interest= pow((1 + $rate), $months);
                           $payment= $principal * ($rate * $interest) / ($interest - 1); 
                           echo round($payment,2) ?> disabled>
                </tr>
            </table>

        </form>
        <br>

    </div>
</body>

<script>
    function handler(event) {
        switch (event) {
            case "update":
                update();
                break;
            case "calc":
                calculate();
                break;
            case "focus":
                focusApr();
                break;
            case "clear":
                clear();
                break;


        }


    }

</script>

</html>
