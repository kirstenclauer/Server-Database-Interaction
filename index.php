<html>
    <head>
        <link rel="stylesheet" type = "text/css" href="css/css.css" />
         <script src="scripts/time.js"> </script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
         <div id="nav"> 
		<div class="dropdown">
                    <a href="getuser.html">
			<button class="dropbtn">User Info</button>
                    </a>
		</div>
                <div class="dropdown">
                    <a href="show.php">
			<button class="dropbtn">Database</button>
                    </a>
                </div>
	</div>

<!--php date function: 
'l' gives full day of the week
'F' gives full month
'j' gives date, 'S' gives suffix
g:ia gives time-->

	<div id="feature"> 
        <h1> <?php
        echo "It's ".date("l, F, jS").".<br>";
        echo "The time is ".date('g:ia').".";
        ?></h1>
           <hr> 
           
        </div>
            
	

<div id="footer"> 
<p>  </p>
</div>
    </body>


</html>
