<?php
$db="amrita";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c= $_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$con=mysqli_connect($server,$user,$pass,$db);

if($con){

		
		 $query = mysqli_query($con, "SELECT * FROM team WHERE username = '$b'");
  if(mysqli_num_rows($query) > 0){
   echo "<div class='form'><h3>!!!!!!!!!!! user name already exist please user other.</h3><br/>Click here to try again <a href='addteam.php'>add team</a></div>";
}
else{
 $sql = "INSERT into `team` (name, username, password, topic, no_of_student) VALUES ('$a', '$b', '$c','$d','$e')";
        if($con->query($sql)===TRUE){
            echo"Record inserted";?>
            <script type="text/javascript">
                window.alert("Team added successfully");
                window.location="addteam.php";
                </script>
                <?php 
    }else{
        echo"connection error";
    }
		

}
}     
?>