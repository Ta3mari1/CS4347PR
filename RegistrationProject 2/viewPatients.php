<?php
/*$conn = new mysqli('localhost', 'root', '', 'hospital');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstName, lastName, dob, gender, email, contactNumber FROM patientregistration";
$result = $conn->query($sql);

echo "<!DOCTYPE html><html><head><title>View Patients</title><link rel='stylesheet' type='text/css' href='css/style.css' /></head><body>";
echo "<div class='container'><h2>Patient List</h2><table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Email</th><th>Contact Number</th><th>Edit</th><th>Delete</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email"]. "</td><td>" . $row["contactNumber"]. "</td>";
        echo "<td><form action='editPatient.php' method='post'><input type='hidden' name='id' value='" . $row['id'] . "'/><input type='submit' value='Edit' class='btn'/></form></td>";
        echo "<td><form action='deletePatient.php' method='post'><input type='hidden' name='id' value='" . $row['id'] . "'/><input type='submit' value='Delete' class='btn btn-red' onclick='return confirm(\"Are you sure you want to delete this record?\")'/></form></td></tr>";
    }
} else {
    echo "<tr><td colspan='9'>No records found</td></tr>";
}
echo "</table></div></body></html>";
$conn->close();
*/
//<?php
/*
$conn = new mysqli('localhost', 'root', '', 'hospital');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstName, lastName, dob, gender, email, contactNumber FROM patientregistration";
$result = $conn->query($sql);

echo "<!DOCTYPE html><html><head><title>View Patients</title><link rel='stylesheet' type='text/css' href='css/style.css' /></head><body>";
echo "<div class='container'><h2>Patient List</h2><table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Email</th><th>Contact Number</th><th>Edit</th><th>Delete</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email"]. "</td><td>" . $row["contactNumber"]. "</td>";
        echo "<td><a href='editPatient.php?id=" . $row['id'] . "' class='btn'>Edit</a></td>"; // Changed to an anchor tag for GET method
        echo "<td><form action='deletePatient.php' method='post'><input type='hidden' name='id' value='" . $row['id'] . "'/><input type='submit' value='Delete' class='btn btn-red' onclick='return confirm(\"Are you sure you want to delete this record?\")'/></form></td></tr>";
    }
} else {
    echo "<tr><td colspan='9'>No records found</td></tr>";
}
echo "</table></div></body></html>";
$conn->close();*/

$conn = new mysqli('localhost', 'root', '', 'hospital');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstName, lastName, dob, gender, email, contactNumber FROM patientregistration";
$result = $conn->query($sql);

echo "<!DOCTYPE html><html><head><title>View Patients</title><link rel='stylesheet' type='text/css' href='css/style.css' /></head><body>";
echo "<div class='container'><h2>Patient List</h2><table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Email</th><th>Contact Number</th><th>Edit</th><th>Delete</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email"]. "</td><td>" . $row["contactNumber"]. "</td>";
        echo "<td><a href='editPatient.php?id=" . $row['id'] . "' class='btn'>Edit</a></td>";
        echo "<td><form action='deletePatient.php' method='post'><input type='hidden' name='id' value='" . $row['id'] . "'/><input type='submit' value='Delete' class='btn btn-red' onclick='return confirm(\"Are you sure you want to delete this record?\")'/></form></td></tr>";
    }
} else {
    echo "<tr><td colspan='9'>No records found</td></tr>";
}
echo "</table>";
// Back button to HospitalRegistration.html
echo "<a href='HospitalRegistration.html' class='btn btn-info' style='margin-top: 20px;'>Back to Registration</a>";
echo "</div></body></html>";
$conn->close();
?>

