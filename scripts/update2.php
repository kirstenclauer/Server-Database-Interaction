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
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $idin = $_REQUEST['id'];

        $con = mysqli_connect('localhost', 'uncastudent', 'Rocky99Dog', 'contacts')
                or die("Unable to select database");

        $query = "SELECT * FROM contacts WHERE id='$idin'";
        $result = mysqli_query($con, $query);

        mysqli_close($con);

        echo "<b><center>Update Contacts Database</center></b><br>";


        while ($row = mysqli_fetch_array($result)) {

            $id = $row['id'];
            $first = $row['first'];
            $last = $row['last'];
            $phone = $row['phone'];
            $mobile = $row['mobile'];
            $fax = $row['fax'];
            $email = $row['email'];
            $web = $row['web'];
        }

        echo "Selected ID: $id";
//    echo "$first $last";
//    echo "$phone";
//    echo "$mobile";
//    echo "$fax";
//    echo $email;
//    echo $web;
        ?>
        <form action="update3.php"> 
            <input type="hidden" name="id" 
                   value=<?php echo $id; ?> >
            First Name: <input type="text" name="first" 
                               value=<?php echo $first; ?> > <br>
            Last Name: <input type="text" name="last" 
                              value=<?php echo $last; ?> > <br>
            Phone: <input type="text" name="phone" 
                          value=<?php echo $phone; ?> > <br>
            Mobile: <input type="text" name="mobile" 
                           value=<?php echo $mobile; ?> > <br>
            Fax: <input type="text" name="fax" 
                        value=<?php echo $fax; ?> > <br>
            E-mail: <input type="text" name="email" 
                           value=<?php echo $email; ?> > <br>
            Web: <input type="text" name="web" 
                        value=<?php echo $web; ?> > <br>

            <input type="Submit" value="Submit">
        </form>
    </body>
</html>


