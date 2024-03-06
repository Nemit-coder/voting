

<?php include '../include/connection.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}
$admissiony= base64_encode(base64_encode(base64_encode('admission')));
$enquiry= base64_encode(base64_encode(base64_encode('enquiry')));
$batch= base64_encode(base64_encode(base64_encode('batch')));
$notice= base64_encode(base64_encode(base64_encode('notice')));
$doc= base64_encode(base64_encode(base64_encode('student_documents')));
$reminder= base64_encode(base64_encode(base64_encode('Fees_reminder')));
$staff= base64_encode(base64_encode(base64_encode('staff')));
$module= base64_encode(base64_encode(base64_encode('module')));

if(isset($_POST['insert_enquiry']))
{	 
	 $enquiry_name = $_POST['enquiry_name'];
	 $date = $_POST['date'];
	 $email = $_POST['email'];
	 $phone_no = $_POST['phone_no'];
	 $alt_phone_no = $_POST['alt_phone_no'];
	 $gender = $_POST['gender'];
	 $dob = $_POST['dob'];
	 $qualification = $_POST['qualification'];
	 $address = $_POST['address'];
	 $area = $_POST['area'];
	 $city = $_POST['city'];
	 $pincode = $_POST['pincode'];
	 $source_enquiry = $_POST['source_enquiry'];
	 $telecaller = $_POST['telecaller'];
	 $counsellor = $_POST['counsellor'];
	 $remarks = $_POST['remarks'];

	 
	$sql = "INSERT INTO tbl_enquiry(enquiry_name,date,email,phone_no,alt_phone_no,gender,dob,qualification,address,area,city,pincode,source_enquiry,telecaller,counsellor,remarks) VALUES ('$enquiry_name','$date','$email','$phone_no','$alt_phone_no','$gender','$dob','$qualification','$address','$area','$city','$pincode','$source_enquiry','$telecaller','$counsellor','$remarks')";

	 if (mysqli_query($conn, $sql)) {
			echo "<script> alert('Enquiry submitted successfully'); </script>";
			// echo "<script>window.open('mail_enquiry.php','_self')</script>";
			echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$enquiry','_self')</script>";
 } 
	 
	 
	 else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


else  if(isset($_POST['insert_admission']))
{	 
	 $enrollment_no = mysqli_real_escape_string($conn,$_POST['enrollment_no']);
	 $student_name = mysqli_real_escape_string($conn,$_POST['student_name']);
	 $date = mysqli_real_escape_string($conn,$_POST['date']);
	 $email = mysqli_real_escape_string($conn,$_POST['email']);
	 $phone_no = mysqli_real_escape_string($conn,$_POST['phone_no']);
	 $alt_phone_no = mysqli_real_escape_string($conn,$_POST['alt_phone_no']);
	 $gender = mysqli_real_escape_string($conn,$_POST['gender']);
	 $dob = mysqli_real_escape_string($conn,$_POST['dob']);
	 $qualification = mysqli_real_escape_string($conn,$_POST['qualification']);
	 $address = mysqli_real_escape_string($conn,$_POST['address']);
	 $area = mysqli_real_escape_string($conn,$_POST['area']);
	 $city = mysqli_real_escape_string($conn,$_POST['city']);
	 $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
	 $course_name = mysqli_real_escape_string($conn,$_POST['course_name']);
	 $c_category = mysqli_real_escape_string($conn,$_POST['c_category']);
	 $counsellor = mysqli_real_escape_string($conn,$_POST['counsellor']);
	 $course_fee = mysqli_real_escape_string($conn,$_POST['course_fee']);
	 $payment_mode = mysqli_real_escape_string($conn,$_POST['payment_mode']);
	 $remarks = mysqli_real_escape_string($conn,$_POST['remarks']);
	 $password = password_hash($enrollment_no, PASSWORD_DEFAULT);
	

	$sql = "INSERT INTO tbl_admission
	(enrollment_no,student_name,date,email,phone_no,alt_phone_no,gender,dob,qualification,address,area,city,pincode,course_name,c_category,counsellor,course_fee,payment_mode,remarks) 
	VALUES 
	('$enrollment_no','$student_name','$date','$email','$phone_no','$alt_phone_no','$gender','$dob','$qualification','$address','$area','$city','$pincode','$course_name','$c_category','$counsellor','$course_fee','$payment_mode','$remarks')";

	 if (mysqli_query($conn, $sql)) {
		$sql1 = "INSERT INTO student_login (username,password) VALUES ('$enrollment_no','$password')";	
		if (mysqli_query($conn, $sql1)) {		
			echo "<script> alert('Admission submitted successfully'); </script>";
			// echo "<script>window.open('mail_welcome.php','_self')</script>";
			echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
// 			header("Location: ../template/table.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony");

    }  else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 } 
	 
	     
	 }
	 mysqli_close($conn);
}


else  if(isset($_POST['insert_course']))
{	 
	 
	 $course_name = mysqli_real_escape_string($conn,$_POST['course_name']);
	 $course_duration = mysqli_real_escape_string($conn,$_POST['course_duration']);
	 $course_fee = mysqli_real_escape_string($conn,$_POST['course_fee']);
	 $certificate = mysqli_real_escape_string($conn,$_POST['certificate']);
	
	 $sql = "INSERT INTO tbl_course_master (course_name,course_duration,course_fee,certificate) VALUES (?,?,?,?)";
	 $stmt = $conn->prepare($sql);
	 $stmt->bind_param("siis", $course_name,$course_duration,$course_fee,$certificate);
	if ($stmt->execute()) {
		echo "<div class='alert alert-soft-info' role='alert'>A simple primary alert—check it out!</div>";
		echo "<script>window.open('../template/table.php?VxjMWVHUlhiSGxsVVQwOQ=".$admissiony."','_self')</script>";
    } else {
		echo "Error: " . $stmt->error;
	}
	$stmt->close();
	$conn->close();
}


else  if(isset($_POST['insert_batch']))
{	 
	 
	 $module_name = $_POST['module_name'];
	 $batch_time = $_POST['batch_time'];
	 $lab = $_POST['lab'];
	 $employee_name = $_POST['employee_name'];
	 $start_batch_date = $_POST['start_batch_date'];
	 $end_batch_date = $_POST['end_batch_date'];	

	$sql = "INSERT INTO  tbl_batch
	(module_name,batch_time,lab,employee_name,start_batch_date,end_batch_date) 
	VALUES 
	('$module_name','$batch_time','$lab','$employee_name','$start_batch_date','$end_batch_date')";

	 if (mysqli_query($conn, $sql)) {
		echo "<script> alert('Batch Created successfully'); </script>";

		echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=".$batch."','_self')</script>";
		
     } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

else  if(isset($_POST['insert_batch_student']))
{	 
	$batch_id = mysqli_real_escape_string($conn, $_POST['batch_id']);
$module_name = mysqli_real_escape_string($conn, $_POST['module_name']);
$employee_name = mysqli_real_escape_string($conn, $_POST['employee_name']);
$enrollment_no = mysqli_real_escape_string($conn, $_POST['enrollment_no']);
$s_date = mysqli_real_escape_string($conn, $_POST['s_date']);
$e_date = mysqli_real_escape_string($conn, $_POST['e_date']);

	$sql = "INSERT INTO  tbl_batch_student	(batch_id,module_name,employee_name,enrollment_no,s_date,e_date) 	VALUES 	('$batch_id','$module_name','$employee_name','$enrollment_no','$s_date','$e_date')";

	 if (mysqli_query($conn, $sql)) {
		echo "<script> alert('data submitted successfully'); </script>";
		echo "<script>window.open('../management/batch_management.php','_self')</script>";
		
     } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

else  if(isset($_POST['insert_module']))
{	 
$module_name = mysqli_real_escape_string($conn, $_POST['module_name']);
$module_duration = mysqli_real_escape_string($conn, $_POST['module_duration']);

	$sql = "INSERT INTO  tbl_module_master (module_name,module_duration) 	VALUES 	('$module_name','$module_duration')";

	 if (mysqli_query($conn, $sql)) {
		echo "<script> alert('Module created successfully'); </script>";
		echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$module','_self')</script>";
		
     } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}





else  if(isset($_POST['insert_designation']))
{	 
	 $designation_name = $_POST['designation_name'];

	$sql = "INSERT INTO tbl_designation_master (designation_name) VALUES (?)";
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("s", $designation_name);

// Execute the statement
if ($stmt->execute()) {
	echo "<script> alert('data submitted successfully'); </script>";
	echo "<script>window.open('psit_designation_management.php')</script>";
} else {
	echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();

}

else  if(isset($_POST['insert_employee']))
{	 
$employee_name = mysqli_real_escape_string($conn, $_POST['employee_name']);
$emp_code = mysqli_real_escape_string($conn, $_POST['emp_code']);
$joining_date = mysqli_real_escape_string($conn, $_POST['joining_date']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$area = mysqli_real_escape_string($conn, $_POST['area']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
$contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
$alt_contact_no = mysqli_real_escape_string($conn, $_POST['alt_contact_no']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
$designation = mysqli_real_escape_string($conn, $_POST['designation']);
$experience = mysqli_real_escape_string($conn, $_POST['experience']);
$work_time = mysqli_real_escape_string($conn, $_POST['work_time']);
$salary = mysqli_real_escape_string($conn, $_POST['salary']);
	

	$sql = "INSERT INTO tbl_staff
	(employee_name,emp_code,joining_date,gender,dob,address,area,city,pincode,contact_no,alt_contact_no,email,qualification,designation,experience,work_time,salary) 
	VALUES 
	('$employee_name','$emp_code','$joining_date','$gender','$dob','$address','$area','$city','$pincode','$contact_no','$alt_contact_no','$email','$qualification','$designation','$experience','$work_time','$salary')";

	 if (mysqli_query($conn, $sql)) {
			echo "<script> alert('data submitted successfully'); </script>";
			echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$enquiry','_self')</script>";
     } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


// else if (isset($_POST['insert_documents'])) {

// 	 $enrollment_no = $_POST['enrollment_no'];
// 	 $category = $_POST['category'];
//     $stat_file = $_FILES['stat_file'];
//     $file_name = $stat_file['name'];
//     $file_size = $stat_file['size'];
//     $file_tmp = $stat_file['tmp_name'];
//     $file_ext= explode('.', $file_name);
//     $file_check= strtolower(end($file_ext));
//     $extension = array('jpg','png','jpeg');
// 	$newImageName = $erno . "." . pathinfo($file_name, PATHINFO_EXTENSION);
// 	// $yash='../student_documents/'.$enrollment_no.'/';
//     // $upload_dir = $yash;

// 	$targetFolder = "../student_documents/" . $enrollment_no . "/";
//     if (!file_exists($targetFolder)) {
//         mkdir($targetFolder, 0777, true);
// 		$abc = $_POST['category'];
// 		$targetPath = $targetFolder . $abc;
// 		      move_uploaded_file($file_tmp,$targetPath);
//     }
//     else if (empty($file_name) == true) {
//         $stat_file_err=  "Please select PDF file.";
//     }elseif (!(in_array($file_check, $extension))) {
//       $stat_file_err= "Please select file in pdf format.";
//     }elseif ($file_size >= 10485760) {
//         $stat_file_err= 'Please Select PDF file size of 10 MB or Lower.';
//     }	
// 	else{
// 		$targetPath = $targetFolder . $file_name;
// 		      move_uploaded_file($file_tmp,$targetPath);
//     }

//     if (empty($stat_file_err)) {
//         $sql = "INSERT INTO tbl_student_documents(enrollment_no,category,stat_file) VALUES ('$enrollment_no','$category','$file_name')";

//      if (mysqli_query($conn, $sql)) {
// 			echo "<script> alert('Notice successfully'); </script>";
// 		echo "<script>window.open('../view/notice.php','_self')</script>";
//      } else {
// 		echo "Error: " . $sql . "
// " . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);

//   }
// }
# MASTER QUERIES END 
else if (isset($_POST['insert_fees_student'])) {
    $enrollment_no = mysqli_real_escape_string($conn, $_POST['enrollment_no']);
    $student_name = $_POST['student_name'];
    $email = $_POST['email'];
    $course_name = $_POST['course_name'];
    $course_fee = $_POST['course_fee'];
    $amount = $_POST['amount'];
    $p = $course_fee - $amount;
    $date = $_POST['date'];
    $fees_category = $_POST['fees_category'];
    $payment_mode = $_POST['payment_mode'];
    $remarks = $_POST['remarks'];

    // Use prepared statement with parameterized query
    $sql = "INSERT INTO tbl_student_fees
    (enrollment_no, student_name, email, course_name, course_fee, amount, pending_fee, date, fees_category, payment_mode, remarks) 
    VALUES 
    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
	$stmt->bind_param("isssiisssss", $enrollment_no, $student_name, $email, $course_name, $course_fee, $amount, $p, $date, $fees_category, $payment_mode, $remarks);
    if ($stmt->execute()) {
        echo "<script> alert('Fees submitted successfully'); </script>";
        echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=".$admissiony."','_self')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}

# MASTER QUERIES END 

	else if (isset($_POST['insert_fees_reminder'])) {

		$enrollment_no = mysqli_real_escape_string($conn,$_POST['enrollment_no']);
		$student_name = mysqli_real_escape_string($conn,$_POST['student_name']);	
		$course_name = mysqli_real_escape_string($conn,$_POST['course_name']);
		$course_fee = mysqli_real_escape_string($conn,$_POST['course_fee']);
		$rem_amount = mysqli_real_escape_string($conn,$_POST['rem_amount']);
		$rem_date = mysqli_real_escape_string($conn,$_POST['rem_date']);
		$rem_fees_category = mysqli_real_escape_string($conn,$_POST['rem_fees_category']);
		$remark = mysqli_real_escape_string($conn,$_POST['remark']);

		$sql = "INSERT INTO tbl_student_fees_reminder
		(enrollment_no,student_name,course_name,course_fee,rem_amount,rem_date,rem_fees_category,remark) 
		VALUES 
		(?,?,?,?,?,?,?,?)";
	
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("issiisss", $enrollment_no, $student_name, $course_name, $course_fee, $rem_amount, $rem_date, $rem_fees_category, $remark);
	
	if ($stmt->execute()) {
		echo "<script> alert('Reminder Added successfully'); </script>";
        echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=".$reminder."','_self')</script>";
	} else {
		echo "Error: " . $stmt->error;
	}
	$stmt->close();
	$conn->close();
}
else if(isset($_POST['insert_documents'])) {
    $enrollment_no = $_POST['enrollment_no'];
    $category = $_POST['category'];

    // Handle the file upload
    $stat_file = $_FILES['stat_file']['name'];

    // Create target directory based on 'enroll' if it doesn't exist
    $target_dir = "uploads/" . $enrollment_no . "/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["stat_file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
        // Upload file
        if(move_uploaded_file($_FILES['stat_file']['tmp_name'],$target_file)){
            // Insert record
            $query = "insert into tbl_student_documents(enrollment_no, category, stat_file) values('".$enrollment_no."','".$category."','".$stat_file."')";
            mysqli_query($conn,$query);
			echo "<script> alert('Docuement submitted successfully'); </script>";
			echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$doc','_self')</script>";
	
        }
    }
}

	else if (isset($_POST['insert_student_notice'])) {

		$category = $_POST['category'];
		$stat_file = $_FILES['stat_file'];
		$file_name = $stat_file['name'];
		$file_size = $stat_file['size'];
		$file_tmp = $stat_file['tmp_name'];
		$file_ext= explode('.', $file_name);
		$file_check= strtolower(end($file_ext));
		$extension = array('pdf');
	
		if (empty($file_name) == true) {
			$stat_file_err=  "Please select PDF file.";
		}elseif (!(in_array($file_check, $extension))) {
		  $stat_file_err= "Please select file in pdf format.";
		}elseif ($file_size >= 10485760) {
			$stat_file_err= 'Please Select PDF file size of 10 MB or Lower.';
		}else{
		  move_uploaded_file($file_tmp, '../documents/notice/'.$file_name);
		}
	
		if (empty($stat_file_err)) {
			$sql = "INSERT INTO tbl_notice(category,stat_file) VALUES ('$category','$file_name')";
	
		 if (mysqli_query($conn, $sql)) {
			echo "<script> alert('data submitted successfully'); </script>";
			echo "<script>window.open('../template/table.php?VxjMWVHUlhiSGxsVVQwOQ=".$notice."','_self')</script>";
		} else {
			echo "Error: " . $sql . "
	" . mysqli_error($conn);
		 }
		 mysqli_close($conn);
	
   
	 }
   }
   else {

   }
?>

