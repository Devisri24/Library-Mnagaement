<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$student_id="";
	$mobile = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$student_id=$row['student_id'];
		$mobile = $row['mobile'];
		$address = $row['address'];
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>LIBRARY MANAGEMENT SYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="user_dashboard.php">Library Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="user_dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-white"><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-white"><strong>Email: <?php echo $_SESSION['email'];?></strong></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-white"><strong>Student ID: <?php echo $_SESSION['student_id'];?></strong></span>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Profile</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="view_profile.php">View Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="update_password.php">Change Password</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <span><marquee>Library opens at 8:00 AM and closes at 8:00 PM</marquee></span><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <center><h4>Student Profile Details</h4><br></center>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" value="<?php echo $email;?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="student_id">Student ID:</label>
                        <input type="text" value="<?php echo $student_id;?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="text" value="<?php echo $mobile;?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Address:</label>
                        <input type="text" value="<?php echo $address;?>" class="form-control" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
