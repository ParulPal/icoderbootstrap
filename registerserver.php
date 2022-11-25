<?php
    
    $conn=mysqli_connect("localhost","root","","learnphp");
    if($conn)
{ 

     }
     if(isset($_POST['submit']))
     {
     	$name=$_POST['name'];
      $email=$_POST['email'];
	    $password=$_POST['password'];
	      
              $sql="insert into register(name,email,password)values('$name','$email','$password')";
          $qry=mysqli_query($conn,$sql);
          if($qry)
          {
               echo "Successfully Registered";
          }
     }
  ?>
