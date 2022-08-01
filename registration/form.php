<?php
include'header.php';
include'db/connection.php';
?> 
 
<section class="form-section">
	<div class="container">
	  <div class="row justify-content-center">
	    <div class="col-md-10">
		  <div class="card">
		   <div class="form-title">
		      <h2 class="text-center">
			          আবেদন ফরম  <?php echo $_SERVER['REQUEST_METHOD'];?>
		      </h2>
		   </div>
		   <div class="card-body">
		   
		    <?php
			if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
				
			$s_b_name =  $_POST['stu_b_name'];
			$s_e_name =  $_POST['stu_e_name'];
			$f_b_name =  $_POST['f_b_name'];
			$f_e_name =  $_POST['f_e_name'];
			$m_b_name =  $_POST['m_b_name'];
			$m_e_name =  $_POST['m_e_name'];
			$stu_phone =  $_POST['stu_phone'];
			$f_phone   =  $_POST['f_phone'];
			$stu_birth =  $_POST['stu_birth'];
			$stu_religion =  $_POST['stu_religion'];
			$stu_section =  $_POST['stu_section'];
			$stu_gender =  $_POST['stu_gender'];
			$stu_blood =  $_POST['stu_blood'];
			
			
			$sql = "insert into student(s_b_name,s_e_name,f_b_name,f_e_name,m_b_name,m_e_name,stu_phone,f_phone,stu_birth,stu_religion,stu_section,stu_gender,stu_blood)values('$s_b_name','$s_e_name','$f_b_name','$f_e_name','$m_b_name','$m_e_name','$stu_phone','$f_phone','$stu_birth','$stu_religion','$stu_section','$stu_gender','$stu_blood')";
			
	   $conn->query($sql);


	   if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	
		
//         if($re){
// 			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Data Inserted Successfully.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// 		}else{
// 		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Data Not Inserted.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';	
			
// 		} 		
			
			}
			?>
		     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" autocomplete>
			    <div class="row">
				
				   <div class="col-md-6 mb-3">
				      <label for="stu_b_name" class="form-label">আবেদনকারীর নাম (বাংলায়)</label>
                      <input type="text" class="form-control" id="stu_b_name" name="stu_b_name">
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="stu_e_name" class="form-label">আবেদনকারীর নাম (ইংরেজিতে)</label>
                      <input type="text" class="form-control" id="stu_e_name" name="stu_e_name">
				   </div>
				  
				   <div class="col-md-6 mb-3">
				      <label for="f_b_name" class="form-label">পিতার  নাম (বাংলায়)</label>
                      <input type="text" class="form-control" id="f_b_name" name="f_b_name">
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="f_e_name" class="form-label">পিতার নাম (ইংরেজিতে)</label>
                      <input type="text" class="form-control" id="f_e_name" name="f_e_name">
				   </div>
				   
				    <div class="col-md-6 mb-3">
				      <label for="m_b_name" class="form-label">মাতার  নাম (বাংলায়)</label>
                      <input type="text" class="form-control" id="m_b_name" name="m_b_name">
				   </div>
				   
				   	<div class="col-md-6 mb-3">
				      <label for="m_e_name" class="form-label">মাতার নাম (ইংরেজিতে)</label>
                      <input type="text" class="form-control" id="m_e_name" name="m_e_name">
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="stu_phone" class="form-label">আবেদনকারীর ফোন নম্বর</label>
                      <input type="text" class="form-control" id="stu_phone" name="stu_phone">
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="f_phone" class="form-label">পিতা/মাতার ফোন নম্বর</label>
                      <input type="number" class="form-control" id="f_phone" name="f_phone">
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="stu_birth" class="form-label">জন্ম তারিখ</label>
                      <input type="date" class="form-control" id="stu_birth" name="stu_birth">
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="stu_religion" class="form-label">ধর্ম</label>
                       <select class="form-select" id="stu_religion" name="stu_religion">
					     <option>select Religion</option>
					     <option>Islam</option>
					     <option>Hindhu</option>
                       </select>
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="stu_section" class="form-label">সেশন</label>
                       <select class="form-select" id="stu_section" name="stu_section">
					   <option>select section</option>
					     <option>ক</option>
					     <option>খ</option>
					     <option>গ</option>
					     <option>ঘ</option>
                       </select>
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="stu_gender" class="form-label">লিঙ্গ</label>
                       <select class="form-select" id="stu_gender" name="stu_gender">
					   <option>select gender</option>
					     <option>Male</option>
					     <option>Female</option>
                       </select>
				   </div>
				   
				   <div class="col-md-6 mb-3">
				      <label for="stu_blood" class="form-label">রক্তের গ্রুপ</label>
                       <select class="form-select" id="stu_blood" name="stu_blood">
					   <option>select Blood Group</option>
					     <option>A+</option>
					     <option>A-</option>
					     <option>B+</option>
					     <option>B-</option>
					     <option>O</option>
					     <option>AB</option>
                       </select>
				   </div>
				   
				   

				   
			    </div>
				<div class="row justify-content-center">
				    <div class="col-md-6 mb-3 text-center">
				       <button type="submit" class="btn btn-primary" name="submit">জমা দিন</button>
				   </div> 
				</div>
		     </form>
			 
			 
		   </div>
		  </div>
	    </div>
	  </div>
	</div>
</section>	
	

<?php
include'footer.php';
?>    
  