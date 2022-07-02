<?php
include('include/config.php');
 if(isset($_POST['submit']))
 {
	// print_r($_POST); 
//	$contact_company_detail=$_POST['contact_company_detail'];
	$contact_company=$_POST['contact_company'];
	$contact_address=$_POST['contact_address'];
	$contact_mobile=$_POST['contact_mobile'];
	$contact_phone=$_POST['contact_phone'];
	$contact_email=$_POST['contact_email'];
	$contact_chief_executive_company=$_POST['contact_chief_executive_company'];
	$contact_phone1=$_POST['contact_phone1'];
	$contact_moblile1=$_POST['contact_moblile1'];
	$contact_email1=$_POST['contact_email1'];
$contact_name1=$_POST['contact_name1'];
$contact_designation=$_POST['contact_designation'];
	$contact_email2=$_POST['contact_email2'];
	$contact_year=$_POST['contact_year'];
	$contact_gst=$_POST['contact_gst'];
	$contact_pan=$_POST['contact_pan'];
	$contact_licence=$_POST['contact_licence'];
	$contact_est=$_POST['contact_est'];
	$contact_bank_name=$_POST['contact_bank_name'];
	$contact_holder_name=$_POST['contact_holder_name'];
$contact_account=$_POST['contact_account'];
$contact_ifsc=$_POST['contact_ifsc'];
	$contact_annual_turnover=$_POST['contact_annual_turnover'];
	$Working_Division=$_POST['Working_Division'];
	$Works=$_POST['Works'];
	$contact_message=$_POST['contact_message'];

	
	
	$filename = $_FILES["qua"]["name"];
    $tempname = $_FILES["qua"]["tmp_name"];   
        $folder = "carrerbuilder/".$filename;
		
		
		
		
		$filename1 = $_FILES["safe"]["name"];
    $tempname1 = $_FILES["safe"]["tmp_name"];   
        $folder1 = "carrerbuilder/".$filename1;
		
		
		
		$filename2 = $_FILES["Organ"]["name"];
    $tempname2 = $_FILES["Organ"]["tmp_name"];   
        $folder2 = "carrerbuilder/".$filename2;
		
		
		$filename3 = $_FILES["Work_file1"]["name"];
    $tempname3 = $_FILES["Work_file1"]["tmp_name"];   
        $folder3 = "carrerbuilder/".$filename3;
         
		 
		 $filename4 = $_FILES["Work_file2"]["name"];
    $tempname4 = $_FILES["Work_file2"]["tmp_name"];   
        $folder4 = "carrerbuilder/".$filename4;
		$filename5 = $_FILES["Work_file3"]["name"];
    $tempname5 = $_FILES["Work_file3"]["tmp_name"];   
        $folder5 = "carrerbuilder/".$filename5;
		
		$filename6 = $_FILES["Work_file4"]["name"];
    $tempname6 = $_FILES["Work_file4"]["tmp_name"];   
        $folder6 = "carrerbuilder/".$filename6;
		
		
		$filename7 = $_FILES["MACHINERY"]["name"];
    $tempname7 = $_FILES["MACHINERY"]["tmp_name"];   
        $folder7 = "carrerbuilder/".$filename7;
		
		
		$filename8 = $_FILES["SUPPORTING"]["name"];
    $tempname8 = $_FILES["SUPPORTING"]["tmp_name"];   
        $folder8 = "carrerbuilder/".$filename8;
		 
   // $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
     $sql = "INSERT INTO carrerbuilder (contact_company,	contact_address,contact_mobile,contact_phone,contact_email,	contact_chief_executive_company	,contact_phone1,contact_moblile1,contact_email1,contact_name1,contact_designation,contact_email2,	contact_year,contact_gst,contact_pan,contact_licence,contact_est,contact_bank_name,	contact_holder_name,contact_account,contact_ifsc,contact_annual_turnover,Quality_Certificate,Safety_Certificate,Organization_Chart,Work_file1,Work_file2,Work_file3,Work_file4,MACHINERY,SUPPORTING) VALUES ('$contact_company','$contact_address','$contact_mobile','$contact_phone','$contact_email','$contact_chief_executive_company','$contact_phone1','$contact_moblile1','$contact_email1','$contact_name1','$contact_designation'
		,'$contact_email2'
		,'$contact_year'
		,'$contact_gst'
		,'$contact_pan'
		,'$contact_licence','$contact_est','$contact_bank_name','$contact_holder_name'
		,'$contact_account'
		,'$contact_ifsc'
		,'$contact_annual_turnover'
		,'$filename'
		,'$filename1'
		,'$filename2'
		,'$filename3'
		,'$filename4'
		,'$filename5'
		,'$filename6'
		,'$filename7'
		,'$filename8'
		)";
 
        // Execute query
        mysqli_query($con, $sql);
        // die;
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
	   if (move_uploaded_file($tempname5, $folder5))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	   if (move_uploaded_file($tempname6, $folder6))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	  if (move_uploaded_file($tempname7, $folder7))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	  if (move_uploaded_file($tempname8, $folder8))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
 // $result = mysqli_query($db, "SELECT * FROM image");
	

echo '<script>alert ("Thank you for Contacting Us , We will revert back you soon")</script>';
			echo "<script>window.location.href='index.html'</script>";




?>