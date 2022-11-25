<?php
    
    $conn=mysqli_connect("localhost","root","","learnphp");
    if($conn)
{ 

     }
     if(isset($_POST['submit']))
     {
     	$email=$_POST['email'];
      $mobileno=$_POST['mobileno'];
      $query=$_POST['query'];
      $address1=$_POST['address1'];
	      
        $sql="insert into contactus(Email,MobileNo,Query,Address1)values('$email','$mobileno','$query','address1')";
          $qry=mysqli_query($conn,$sql);
          if($qry)
          {
               echo "Thank you For contacting us";
          }
     }
  ?>
