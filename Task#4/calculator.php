<html>
 	<head>
 		<title>Address Book</title>
 	</head>
 	<body>
 <?php
 error_reporting(E_ERROR | E_PARSE);

$self = $_SERVER['PHP_SELF']; //PHP_SELF is the name of the currently executing script.
 Print '<h2>PHP - CALCULATE ELECTRICITY BILL</h2>
 <p> 
 <form action=';
 echo $self; 
 Print '
 method=POST style="background-color: blue;"> 
 <label>Enter First Number</label><input  type="number" name="O1"><br/>
 <label>Enter operator     </label><input type="text" name="Op"><br/>
 <label>Enter Second Number</label><input type="number" name="O2"><br/>
 <input type="submit" value="Calculate">
 </form> <p>';

$O1 = $_POST['O1'];
$O2 = $_POST['O2'];
$Op = $_POST['Op'];
$result = 0;

    switch($Op)
    {
        case "*":
            $result = $O1 * $O2;
            break;
        
        case "-":
            $result = $O1 - $O2;
            break;

        case "+":
            $result = $O1 + $O2;
            break;

        case "/":
            $result = $O1 / $O2;
            break;
    }
    echo "<h2>Result is : ".$result."</h2>";
?>

</body> 
 </html>