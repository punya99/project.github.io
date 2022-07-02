<?php
include('include/config.php');
 if(isset($_POST['submit']))
{
	$contact_name=$_POST['contact_name'];
	$contact_phone=$_POST['contact_phone'];
	$contact_dob=$_POST['contact_dob'];
	$contact_email=$_POST['contact_email'];
	$contact_nationality=$_POST['contact_nationality'];
	$gender=$_POST['gender'];
	$contact_intrest=$_POST['contact_intrest'];
	$contact_position=$_POST['contact_position'];
	$contact_message=$_POST['contact_message'];
	//$uploadfile=$_POST['uploadfile'];
	
	
	
	
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "cvfolder/".$filename;
         
   // $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO productenq (name,email,phone,required_position,field_of_intrest,nationality,	gender,cv,message,date) VALUES ('$contact_name','$contact_email','$contact_phone','$contact_position','$contact_intrest','$contact_nationality','$gender','$filename','$contact_message','$contact_dob')";
 
        // Execute query
        mysqli_query($con, $sql);
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
 // $result = mysqli_query($db, "SELECT * FROM image");
	

echo '<script>alert ("Thank you for Contacting Us , We will revert back you soon")</script>';
				echo "<script>window.location.href='index.html'</script>";




?>