<?php  
$servername = "localhost";
$username = "root";
$password = "root";
$database = "query_solutions";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['issue'])) {

$sql = "INSERT INTO `solutions` (`issues`, `solutions`)  VALUES ( '".mysqli_real_escape_string($conn, $_POST['issue'])."', '".mysqli_real_escape_string($conn, $_POST['solution'])."' )";
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Save Data</title>
  </head>
  <body>
  	<div class="text-center mt-5 mb-5">
    
  	</div>
  	<form method="POST">

	    <div class="container">
	    	<div class="row">
	    		<div class="col-sm-1 ">
	    		</div>
	    		<div class="col-sm-2">
	    			<label class="label-control">Issue</label>
	    		</div>
	    		<div class="col-sm-6">
	    			<textarea  type="text" name="issue" value="" class="form-control"></textarea>
	    		</div>
	    		
	    	</div>
	    	<div class="row mt-3">
	    		<div class="col-sm-1 ">
	    		</div>
	    		<div class="col-sm-2">
	    			<label class="label-control">Solution</label>
	    		</div>
	    		<div class="col-sm-6">
	    			<textarea type="text" name="solution" value="" class="form-control"></textarea>
	    		</div>
	    	</div>
	    	<div class="row mt-3">
	    		<div class="col-sm-4 ">
	    		</div>
	    		<div class="col-sm-2">
	    			<button class="btn btn-primary" name="submit">Submit</button>
	    		</div>
	    	</div>
	    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

