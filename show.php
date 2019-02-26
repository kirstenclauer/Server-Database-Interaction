<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <div id="nav"> 
            <div class="dropdown">
                    <a href="index.php">
			<button class="dropbtn">Home</button>
                    </a>
		</div>
            <div class="dropdown">
                    <a href="getuser.html">
			<button class="dropbtn">User Info</button>
                    </a>
		</div>
        </div>
        
<!--connect to school database -->
<!--select all from database called contacts-->

        <div id="feature"> 
            <br><br>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $con = mysqli_connect('localhost', 'uncastudent', 'Rocky99Dog', 'contacts')
                or die("Unable to select database");

        $query = "SELECT * FROM contacts";
        $result = mysqli_query($con, $query);

//$num = mysqli_num_rows($result);
//echo $num;
        mysqli_close($con);

        echo "<b><center>Database Output</center></b><br><br>";
        ?>
            <hr>
<!--display database-->

        <table border="0" cellspacing="2" cellpadding="2">
            <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Fax</th>
                <th>E-mail</th>
                <th>Website</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result)) {

                $id = $row['id'];
                $first = $row['first'];
                $last = $row['last'];
                $phone = $row['phone'];
                $mobile = $row['mobile'];
                $fax = $row['fax'];
                $email = $row['email'];
                $web = $row['web'];
                ?>

                <tr> 
                    <td><?php echo "$id"; ?></td>
                    <td><?php echo "$first $last"; ?></td>
                    <td><?php echo "$phone"; ?></td>
                    <td><?php echo "$mobile"; ?></td>
                    <td><?php echo "$fax"; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $web; ?></td>
                </tr>

    <?php
    
}
echo "</table>";
?>
            
                <hr>
                
       <!--delete contact from database -->
       <p> Delete contact: </p>
       <form action="scripts/delete.php">
        ID to delete: <input type="text" name="id" >
       <input type="Submit" value="Delete">
        </form>
       <hr>
       <!--Add new contact-->
       <p> Add new contact: </p>
       <form action="scripts/insert.php" method="post">
            First Name: <input type="text" name="first"><br>
            Last Name: <input type="text" name="last"><br>
            Phone: <input type="text" name="phone"><br>
            Mobile: <input type="text" name="mobile"><br>
            Fax: <input type="text" name="fax"><br>
            E-mail: <input type="text" name="email"><br>
            Web: <input type="text" name="web"><br>
            <input type="Submit">
        </form>
       <hr>
       <!--update contact-->
       <p>Enter the ID to update</p>
        <form action="scripts/update2.php">
            ID to update: <input type="text" name="id" >
            <input type="Submit" value="Update">
        </form>
       <hr>
        </div>
       
    </body>
</html>
