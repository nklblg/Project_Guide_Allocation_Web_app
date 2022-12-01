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

		
		 $query = mysqli_query($con, "SELECT * FROM teacher WHERE username = '$d'");
  if(mysqli_num_rows($query) > 0){
   echo "<div class='form'><h3>!!!!!!!!!!! user name already exist please user other.</h3><br/>Click here to try again <a href='addteacher.php'>add teacher</a></div>";
}
else{
 $sql = "INSERT into `teacher` (name, phone, email, username, password) VALUES ('$a', '$b', '$c','$d', '$e')";
        if($con->query($sql)===TRUE){
            echo"Record inserted";?>
            <script type="text/javascript">
                window.alert("Teacher added successfully");
                window.location="addteacher.php";
                </script>
                <?php 
    }else{
        echo"connection error";
    }
		

}
}     
?>