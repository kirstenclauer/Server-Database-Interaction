<?php

//Connect to the database with (hostname,userid,password,database)
$con = mysqli_connect('localhost', 'uncastudent', 'Rocky99Dog', 'contacts');
//if connection fails, display error message and close connection
if (!$con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
}

//stores first name into $fname
//select first and last name from the corresponding row
$fname = $_GET['fname'];
$sql = "SELECT first, last, now() FROM contacts where first = '" . $fname . "'";

$result = mysqli_query($con, $sql);
if (mysqli_errno($con) != 0) {
    echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
}

//returns the full row
$temparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temparray[] = $row;
}
//json_encode the array  
$JSONResult = json_encode($temparray);
echo $JSONResult;

//close database connection
mysqli_close($con);
?>