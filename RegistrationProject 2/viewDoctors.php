<?php
$conn = new mysqli('localhost', 'root', '', 'hospital');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT doctorID, firstName, lastName, specialty FROM doctor";
$result = $conn->query($sql);

echo "<!DOCTYPE html><html><head><title>View Doctors</title><link rel='stylesheet' type='text/css' href='css/style.css' /></head><body>";
echo "<div class='container'><h2>Doctor List</h2><table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Specialty</th><th>Edit</th><th>Delete</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["doctorID"] . "</td><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["specialty"] . "</td>";
        echo "<td><a href='editDoctor.php?id=" . $row['doctorID'] . "' class='btn'>Edit</a></td>";
        echo "<td><form action='deleteDoctor.php' method='post'><input type='hidden' name='id' value='" . $row['doctorID'] . "'/><input type='submit' value='Delete' class='btn btn-red' onclick='return confirm(\"Are you sure you want to delete this doctor?\")'/></form></td></tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}
echo "</table>";
// Button to go back to the Doctor Registration page
echo "<a href='DoctorRegistration.html' class='btn btn-info' style='margin-top: 20px;'>Back to Doctor Registration</a>";
echo "</div></body></html>";
$conn->close();
?>