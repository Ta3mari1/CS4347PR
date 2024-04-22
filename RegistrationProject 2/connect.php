<?php
    /*$firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];

    // Database connection
	$conn = new mysqli('localhost','root','','hospital');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $dateOfBirth, $address, $contactNumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful!";
		$stmt->close();
		$conn->close();
	}
	//<?php*/
	//<?php
	/*
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contactNumber = $_POST['contactNumber'];

    // Database connection
	$conn = new mysqli('localhost','root','','hospital');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into patientregistration(firstName, lastName, dob, gender, email, password, contactNumber) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $firstName, $lastName, $dob, $gender, $email, $password, $contactNumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful!";
		$stmt->close();
		$conn->close();
	}*/
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contactNumber = $_POST['contactNumber'];

    // Database connection
    $conn = new mysqli('localhost','root','','hospital');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into patientregistration(firstName, lastName, dob, gender, email, password, contactNumber) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $firstName, $lastName, $dob, $gender, $email, $password, $contactNumber);
        $execval = $stmt->execute();
        echo $execval ? "Registration Successful!" : "Error: Registration Failed";
        $stmt->close();
        $conn->close();
    }

    // Include HTML to display a back button
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Registration Result</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="HospitalRegistration.html" class="btn btn-info" style="margin-top: 20px;">Back to Registration</a>
                </div>
            </div>
        </div>
    </body>
    </html>';
?>

	
    



