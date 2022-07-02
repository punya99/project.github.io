<?php
include('include/config.php');
 if(isset($_POST['submit']))
{$contact_company=$_POST['contact_company'];
$contact_address=$_POST['contact_address'];
	$contact_website=$_POST['contact_website'];
	$contact_name=$_POST['contact_name'];
	$contact_designation=$_POST['contact_designation'];
	$contact_email=$_POST['contact_email'];
	$contact_phone=$_POST['contact_phone'];
	$contact_design=$_POST['contact_design'];
	$contact_capability=$_POST['contact_capability'];
	$contact_specialization=$_POST['contact_specialization'];
	$contact_expyear=$_POST['contact_expyear'];
	//$contact_project1=$_POST['contact_project1'];
	//$contact_project2=$_POST['contact_project2'];
	//$contact_project3=$_POST['contact_project3'];
	//$contact_project4=$_POST['contact_project4'];
	$contact_message=$_POST['contact_message'];
	//$contact_file=$_POST['contact_file'];
	//$uploadfile=$_POST['uploadfile'];
	
	
	
	
	$filename = $_FILES["contact_file"]["name"];
    $tempname = $_FILES["contact_file"]["tmp_name"];   
        $folder = "careerparther/".$filename;
		
		
		$filename1 = $_FILES["contact_project1"]["name"];
    $tempname1 = $_FILES["contact_project1"]["tmp_name"];   
        $folder1 = "careerparther/".$filename1;
		$filename2 = $_FILES["contact_project2"]["name"];
    $tempname2 = $_FILES["contact_project2"]["tmp_name"];   
        $folder2 = "careerparther/".$filename2;
		$filename3 = $_FILES["contact_project3"]["name"];
    $tempname3= $_FILES["contact_project3"]["tmp_name"];   
        $folder3 = "careerparther/".$filename3;
		$filename4 = $_FILES["contact_project4"]["name"];
    $tempname4 = $_FILES["contact_project4"]["tmp_name"];   
        $folder4 = "careerparther/".$filename4;
         
   // $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO consultant (company,website,address,name,designation,email,contact,	design_field,capability,specialization,exp_years,precious_project1,precious_project2,precious_project3,precious_project4,message,browse_file) VALUES ('$contact_company','$contact_website','$contact_address','$contact_name','$contact_designation','$contact_email','$contact_phone','$contact_design','$contact_capability','$contact_specialization','$contact_expyear','$filename1','$filename2','$filename3','$filename4','$contact_message','$filename')";
 
        // Execute query
        mysqli_query($con, $sql);
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
         $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
      }
	  
	   if (move_uploaded_file($tempname1, $folder1))  {
           $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
      }
	   if (move_uploaded_file($tempname2, $folder2))  {
            $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
      }
	   if (move_uploaded_file($tempname3, $folder3))  {
         $msg = "Image uploaded successfully";
        }else{
           $msg = "Failed to upload image";
      }
	   if (move_uploaded_file($tempname4, $folder4))  {
            $msg = "Image uploaded successfully";
        }else{
           $msg = "Failed to upload image";
      }
	  
  }
 // $result = mysqli_query($db, "SELECT * FROM image");
	

echo '<script>alert ("Thank you for Contacting Us , We will revert back you soon")</script>';
echo "<script>window.location.href='index.html'</script>";




?>