<!DOCTYPE html>
<html>
    <head>
        <title>Contact List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/css.css">
    </head>
    <body>


<!-- script to delete contact from database-->

        <?php

//connect to the database with (hostname, userid, password, database)
//otherwise, display error message

$con = mysqli_connect('localhost', 'uncastudent', 'Rocky99Dog', 'contacts')
        or die("Unable to select database");
//store id into $id
$id = mysqli_real_escape_string($con, $_REQUEST['id']);

$query = "delete from contacts where id='$id' ";

mysqli_query($con, $query);

//If there's no connection, display error message
//Otherwise, display which rows were deleted

if (mysqli_errno($con) != 0) {
    echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
} else {
    echo "SQL is...<br>";
    echo $query;
    echo "<br> Rows affected: "; 
    echo mysqli_affected_rows($con);
}
//close connection
mysqli_close();
?> 
    </body>
</html>
