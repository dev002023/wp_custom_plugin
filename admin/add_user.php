<?php include('header.php');

if(isset($_POST['submit'])){

	$f_name    = $_POST['f_name'];
	$l_name    = $_POST['l_name'];
	$email     = $_POST['email'];
	$phone     = $_POST['phone'];
	$user_post = $_POST['user_post'];
	$address   = $_POST['address'];

  $file      = $_FILES['file'];
  $file_name = $_FILES['file']['name']; 
  $temp_name = $_FILES['file']['tmp_name']; 

  $upload_folder = UPLOAD_URL['url'];

  echo "<pre>";
  print_r($temp_name);
  echo "</pre>";

	// $data = array(
  //  'f_name' => $f_name,
  //  'l_name' => $l_name,
  //  'email' => $email ,
  //  'phone' => $phone ,
  //  'user_post' => $user_post,
  //  'address' => $address,
  //  //'' => ,
	// )

}
echo "<pre>";
 print_r($upload_folder);
 echo "</pre>";
 ?>


<div class="container p-5 add_user_page">
	<h5>Add User</h5><hr>

	  <div class="row">
	  	<div class="col-sm-12 col-lg-10 col-md-10">
	  		  
	  		  <form action="" method="post" enctype="multipart/form-data" class=" border rounded p-4">

	  		  	<div class="row mb-3 input-group-sm">
	  		  		<div class="col-4">
	  		  			<label for="">First Name</label>
	  		  			<input type="text" class="form-control border rounded" name="f_name">
	  		  		</div>
	  		  		<div class="col-4">
	  		  			<label for="">Last Name</label>
	  		  			<input type="text" class="form-control border rounded" name="l_name">
	  		  		</div>
	  		  		<div class="col-4">
	  		  			<label for="">Email</label>
	  		  			<input type="email" class="form-control border rounded" name="email">
	  		  		</div>
	  		  	</div>

	  		  	<div class="row mb-3">
	  		  		<div class="col-3">
	  		  			<label for="">Phone</label>
	  		  			<input type="number" class="form-control border rounded" name="phone">
	  		  		</div>
	  		  		<div class="col-4">
	  		  			<label for="">Position</label>
	  		  			<input type="text" class="form-control border rounded" name="user_post">
	  		  		</div>
	  		  		<div class="col-5">
	  		  			<label for="file">Image</label>
	  		  			<input type="file" id="file" class="form-control border rounded" name="file">
	  		  		</div>
	  		  	</div>

	  		  	<div class="row mb-3">
	  		  		<div class="col-12">
	  		  			<label for="">Address</label>
	  		  			<textarea name="address" id="" cols="20" rows="5" class="form-control rounded"></textarea>
	  		  		</div>
	  		  	</div>

	  		  	<div class="row mb-3">
	  		  		<div class="col-12">
	  		  		  <input type="submit" name="submit" class="btn btn-success" value="Submit">
	  		  		</div>
	  		  	</div>

	  		  </form>
	  	</div>
	  	<div class="col-sm-12 col-lg-2 col-md-2"></div>
	  </div>
</div>

<?php include('footer.php'); ?>