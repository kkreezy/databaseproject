<html>
<body>
 
 
<?php

            // put your code here
            $servername = "localhost";          //should be same for you
            $username = "user";                 //same here
            $password = "password";             //your localhost root password
            $db = "superfan";                     //your database name


            $conn = new mysqli($servername, $username, $password, $db);
            if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }else{
                echo "Connected<br>";
            }
            
            
 
 
$sql="INSERT INTO movie (movie_release, synopsis, title)
VALUES('$_POST[release]','$_POST[synopsis]','$_POST[title]')";

            echo "<br><br>Inserting  into db: ";
            if($conn->query($sql)==TRUE){       //try executing the query 
                echo "Query executed<br>";
            }
            else{
                echo "Query did not execute<br>";
            }
 
            $conn-> close();            //close the connection to database

?>
</body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

