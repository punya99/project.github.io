<?php
include('include/config.php');
 if(isset($_POST['submit']))
{$contact_name=$_POST['contact_name'];
	$contact_email=$_POST['contact_email'];
	$contact_phone=$_POST['contact_phone'];
	$contact_question=$_POST['contact_question'];
	$contact_subject=$_POST['contact_subject'];
	$contact_message=$_POST['contact_message'];
	
	
	
	
	

         
   // $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO contact (name,email,phone,pincode,subject,message) VALUES ('$contact_name','$contact_email','$contact_phone','$contact_question','$contact_subject','$contact_message')";
 
        // Execute query
        mysqli_query($con, $sql);
         
        // Now let's move the uploaded image into the folder: image
       
  }
 // $result = mysqli_query($db, "SELECT * FROM image");
	

echo '<script>alert ("Thank you for Contacting Us , We will revert back you soon")</script>';
				echo "<script>window.location.href='index.html'</script>";




?>