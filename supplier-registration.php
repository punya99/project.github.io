<?php
include('include/config.php');
 if(isset($_POST['submit']))
{
	$contact_materials=$_POST['contact_materials'];
	$contact_company=$_POST['contact_company'];
	$contact_gst=$_POST['contact_gst'];
	$contact_pan=$_POST['contact_pan'];
	$contact_designation=$_POST['contact_designation'];
	$contact_name=$_POST['contact_name'];
	$contact_email=$_POST['contact_email'];
	$contact_phone=$_POST['contact_phone'];
	$contact_address=$_POST['contact_address'];
$contact_message=$_POST['contact_message'];
	
	
	
	
	$filename = $_FILES["contact_file"]["name"];
    $tempname = $_FILES["contact_file"]["tmp_name"];   
        $folder = "supplierregi/".$filename;
         
   // $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO supplier_registration (contact_materials,contact_company,contact_gst,contact_pan,contact_designation,contact_name,	contact_email,contact_phone,contact_address,contact_message,contact_file) VALUES ('$contact_materials','$contact_company','$contact_gst','$contact_pan','$contact_designation','$contact_name','$contact_email','$contact_phone','$contact_address','$contact_message','$filename')";
 
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