<!DOCTYPE html>
<html>
    <head>
        <title>Contact Maintenance </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>

        <?php

        $con = mysqli_connect('localhost', 'uncastudent', 'Rocky99Dog', 'contacts')
                or die("Unable to select database");

        $id = mysqli_real_escape_string($con, $_REQUEST['id']);
        $first = mysqli_real_escape_string($con, $_REQUEST['first']);
        $last = mysqli_real_escape_string($con, $_REQUEST['last']);
        $phone = mysqli_real_escape_string($con, $_REQUEST['phone']);
        $mobile = mysqli_real_escape_string($con, $_REQUEST['mobile']);
        $fax = mysqli_real_escape_string($con, $_REQUEST['fax']);
        $email = mysqli_real_escape_string($con, $_REQUEST['email']);
        $web = mysqli_real_escape_string($con, $_REQUEST['web']);

        $query = "UPDATE contacts SET first='$first', last='$last', phone='$phone', mobile='$mobile', fax='$fax', email='$email', web='$web' WHERE id='$id' ";

        mysqli_query($con, $query);

        if (mysqli_errno($con) != 0) {
            echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
        } else {
            echo "SQL is...<br>";
            echo $query;
            echo "<br> Rows affected: ";
            echo mysqli_affected_rows($con);
        }
        mysqli_close();
        ?> 
    </body>
</html>
