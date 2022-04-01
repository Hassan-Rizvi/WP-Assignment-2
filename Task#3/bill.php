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
 method=POST> 
    <input type="text" name="unit" placeholder="please enter no. of units"/> <br>
        <button>Submit</button>
 </form> <p>';
 
$unit = $_POST['unit'];
if($unit){
    if ($unit <= 50)
    {
        $amount=$unit*3.50;
        echo "Total Amounts of $unit - $amount";
    }
    else if($unit <=100){
        $amount=$unit*4.00;
        echo "Total Amounts of $unit - $amount";
    }
    else if($unit <250){
        $amount=$unit*5.20;
        echo "Total Amounts of $unit - $amount";
    }
    else if($unit >=250){
        $amount=$unit*6.50;
        echo "Total Amounts of $unit - $amount";
    }
}
 	?> 
        </body> 
 </html>